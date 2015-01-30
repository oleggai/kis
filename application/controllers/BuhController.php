<?php
/**
 * Created by PhpStorm.
 * User: олег
 * Date: 07.01.15
 * Time: 19:13
 */

class BuhController extends Controller {

    public function __construct($em, $nameController, $nameAction) {
        $userType = new UserTypes($nameController);
        $this->menus = $userType->getMenuBuh();
        parent::__construct($em, $nameController, $nameAction);
    }

    public function index() {
        $this->products();
    }

    public function products() {
        $products = $this->common->getProducts();
        $this->smarty->assign('products', $products);
        $this->smarty->display('admin/index.tpl');
    }

    public function banks() {
        if($_SERVER["REQUEST_METHOD"] == 'POST') {
            // save
            if(empty($_POST['name'])) {
                $this->smarty->assign('error', 'Будь-ласка! Верніться і заповніть всі поля.');
            }
            else {

                $bank = new Bank();
                try{
                    $bank->setNameBank($_POST['name']);
                    $this->em->persist($bank);
                    $this->em->flush();

                    $this->smarty->assign('success', 'Дані успішно збережені!');
                }
                catch(Exception $e) {
                    $this->smarty->assign('error', 'Не вдалось зберегти дані');
                }
            }

        }
        $banks = $this->common->getBanks();
        $this->smarty->assign('banks', $banks);
        $this->smarty->display('buh/form-banks.tpl');
    }

    public function orders() {
        $orders = $this->common->getOrders();
        $this->smarty->assign('orders', $orders);
        $this->smarty->display('buh/orders.tpl');
    }

    public function deliveries() {
        $deliveries = $this->common->getDelivery();
        $this->smarty->assign('deliveries', $deliveries);
        $this->smarty->display('buh/deliveries.tpl');
    }

    public function workers() {
        $workers = $this->common->getWorkers();
        $this->smarty->assign('workers', $workers);
        $this->smarty->display('buh/workers.tpl');
    }
}