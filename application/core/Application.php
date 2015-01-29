<?php


class Application {
    /** @var null The controller */
    private $url_controller = null;

    private $url_action = null;

    private $nameController;
    private $nameAction;

    /** @var null Parameters */
    private $url_parameter_1 = null;
    private $url_parameter_2 = null;
    private $url_parameter_3 = null;

    public function __construct(\Doctrine\ORM\EntityManager $em)
    {
        $this->splitUrl();
        session_start();

        $this->checkAccess();

        if ($this->url_controller && class_exists($this->url_controller . "Controller", true)) {
            $this->url_controller .= "Controller";
           $this->url_controller = new $this->url_controller($em, $this->nameController, $this->nameAction);

            if(!is_callable(array($this->url_controller, $this->url_action))){
                $this->url_controller->index();

            } elseif (isset($this->url_parameter_3)) {
                $this->url_controller->{$this->url_action}($this->url_parameter_1, $this->url_parameter_2, $this->url_parameter_3);

            } elseif (isset($this->url_parameter_2)) {
                $this->url_controller->{$this->url_action}($this->url_parameter_1, $this->url_parameter_2);

            } elseif (isset($this->url_parameter_1)) {
                $this->url_controller->{$this->url_action}($this->url_parameter_1);

            } elseif (method_exists($this->url_controller, $this->url_action)) {
                $this->url_controller->{$this->url_action}();

            } else {
                $this->url_controller->index();
            }
        } else {
            echo "<h1>404</h1>";
        }

        return;
    }

    private function splitUrl()
    {
        if (isset($_GET['url'])) {

            // split URL
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);

            $this->url_controller = (isset($url[0]) ? $url[0] : null);
            $this->nameController = $this->url_controller;

            $this->url_action = (isset($url[1]) ? $url[1] : null);
            $this->nameAction = $this->url_action;

            $this->url_parameter_1 = (isset($url[2]) ? $url[2] : null);
            $this->url_parameter_2 = (isset($url[3]) ? $url[3] : null);
            $this->url_parameter_3 = (isset($url[4]) ? $url[4] : null);
/*
                        echo "Controller: ".$this->url_controller."<br>";
                        echo "Action : ".$this->url_action."<br>";
                        echo "1 Parametr: ".$this->url_parametr_1."<br>";
                        echo "2 Parametr: ".$this->url_parametr_2."<br>";
                        echo "3 Parametr: ".$this->url_parametr_3;*/

            if($this->url_controller){
                $this->url_controller = ucfirst(strtolower($this->url_controller));
            }

         }
    }

    private function checkAccess() {
        $controller = strtolower($this->url_controller);
        if(in_array($controller, array('login', 'logout'))) {
           //
        } elseif(isset($_SESSION['userType'])) {
            $userType = $_SESSION['userType'];
            switch($userType) {
                case ROLE_ADMIN:
                    if(!in_array($controller, UserTypes::$AdminPages)) {
                        header('Location: ' . URL . 'admin');
                        exit;
                    }
                    break;
                case ROLE_BUH:
                    if(!in_array($controller, UserTypes::$BuhPages)) {
                        header('Location: ' . URL . 'buh');
                        exit;
                    }
                    break;
                case ROLE_MANAGER_ORDERS:
                    if(!in_array($controller, UserTypes::$ManagerOrdersPages)) {
                        header('Location: ' . URL . 'orders');
                        exit;
                    }
                    break;
                case ROLE_MANAGER_SELLS:
                    if(!in_array($controller, UserTypes::$ManagerSellsPages)) {
                        header('Location: ' . URL . 'sells');
                        exit;
                    }
                    break;
                case ROLE_MANAGER_INDUSTRIAL:
                    if(!in_array($controller, UserTypes::$ManagerIndustrialPages)) {
                        header('Location: ' . URL . 'industrial');
                        exit;
                    }
                    break;
                default:
                    session_destroy();
                    header("Location: " . URL . "login");
                    exit;
            }
        } elseif(!in_array($controller, array('login', 'logout'))) {
            session_destroy();
            header("Location: " . URL . "login");
            exit;
        }
    }
}