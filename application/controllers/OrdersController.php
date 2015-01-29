<?php
/**
 * Created by PhpStorm.
 * User: олег
 * Date: 07.01.15
 * Time: 19:13
 */

class OrdersController extends Controller {

    public function index() {
        $this->smarty->assign('name', 'Orders');
        $this->smarty->display('orders/orders.tpl');
    }
}