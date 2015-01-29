<?php
/**
 * Created by PhpStorm.
 * User: олег
 * Date: 07.01.15
 * Time: 17:11
 */

class LoginController extends Controller {

    public function index() {
        if(!(isset($_POST['login']) || isset($_POST['pass']))) {
            echo $this->smarty->display('login.tpl');
            return;
        }
        $post = Validate::trim($_POST);
        $checkValidate = Validate::isLogin($post["login"]);

        if(!$checkValidate) {
            echo json_encode(array("error"=>"Неверно введен логин или пароль!"));
            exit();
        }
        $checkValidate = Validate::isPassword($post["password"]);

        if(!$checkValidate) {
            echo json_encode(array("error"=>"Неверно введен логин или пароль!"));
            exit();
        }
        try {
            $user = $this->em->getRepository('User')->findOneBy(['login' => $post['login'], 'pass' => $post['password']]);
            if(isset($user)) {
                $_SESSION['user'] = $user;
                $userType = $user->getType()->getId();
                $_SESSION['userType'] = $userType;
                $this->location($userType);
            }
            else {
                echo json_encode(array("error"=>"Неверно введен логин или пароль!"));
                exit();
            }
        }
        catch(Exception $e) {
            echo $e->getMessage();
        }
    }
    private function location($userType = 0) {
        switch($userType) {
            case ROLE_ADMIN:
                $this->redirect(URL . 'admin');
                break;
            case ROLE_MANAGER_ORDERS:
                $this->redirect(URL . 'orders');
                break;
            case ROLE_BUH:
                $this->redirect(URL . 'buh');
                break;
            case ROLE_MANAGER_INDUSTRIAL:
                $this->redirect(URL . 'industrial');
                break;
            case ROLE_MANAGER_SELLS:
                $this->redirect(URL . 'sells');
                break;
        }
    }
    private function redirect($url = '') {
        echo json_encode(['location' => $url]);
        exit();
    }
}