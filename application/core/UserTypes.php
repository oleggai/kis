<?php
/**
 * Created by PhpStorm.
 * User: Matrix
 * Date: 04.08.14
 * Time: 11:24
 */
/*
 * обмеження доступу для різних типів користувачів
 */
class UserTypes {

    public static  $AdminPages = array("admin");

    public static  $BuhPages = array("buh");

    public static  $ManagerOrdersPages = array("orders");

    public static  $ManagerSellsPages = array("sells");

    public static  $ManagerIndustrialPages = array("industrial");

    protected $menuAdmin = [];

    protected $menuBuh = [];

    protected $controller;

    public function __construct($controller) {
        $this->controller = $controller;
    }

    public function getMenuAdmin() {
        return array_merge($this->getMenuBuh(), $this->common());
    }

    public function getMenuBuh() {
        return array_merge($this->menuManagerIndustrial(),
               $this->menuManagerSells(),
               $this->menuManagerOrders(),
               [['Банки' => URL . $this->controller . '/banks'], ['Працівники' => URL . $this->controller . '/workers']]);
    }

    public function getMenuManagerOrders() {
        return $this->menuManagerOrders();
    }
    public function menuManagerOrders() {
        return [['Поставки' => ''], ['Постачальники' => '']];
    }

    public function getMenuManagerSells() {
        return $this->menuManagerSells();
    }

    public function menuManagerSells() {
        return [
                ['Замовлення' => URL . $this->controller . '/orders'],
                ['Замовники' => URL . $this->controller . '/customers']
               ];
    }

    public function getMenuManagerIndustrial() {
        return array_merge($this->menuManagerIndustrial(), $this->common());
    }
    public function menuManagerIndustrial() {
        return [
                ['Продукція' => URL . $this->controller . '/products'],
                ['Сировина' => URL . $this->controller . '/raws'],
                ['Потреба в сировині' => URL . $this->controller . '/needRaw'],
                ['Обладнання' => URL . $this->controller . '/equipments']
             ];
    }

    public function common() {
        return [['Виробничі процеси' => URL . $this->controller . '/industrialProcess']];
    }
}