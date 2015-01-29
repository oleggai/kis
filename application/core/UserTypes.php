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

    public function __construct($controller) {
        $this->controller = $controller;
    }

    public function getMenuAdmin() {
        return array_merge($this->getBank(),
                           $this->getWorker(),
                           $this->getRaw(),
                           $this->getNeedRaw(),
                           $this->getCustomer(),
                           $this->getDelivery(),
                           $this->getEquipment(),
                           $this->getIndustrialProcess(),
                           $this->getOrder(),
                           $this->getProduct(),
                           $this->getSupplier()
        );
    }

    public function getMenuBuh() {
        return array_merge($this->getBank(),
                        $this->getWorker(),
                        $this->getCustomer(),
                        $this->getDelivery(),
                        $this->getEquipment(),
                        $this->getOrder(),
                        $this->getSupplier()
        );
    }
    // Замовники. Замовлення
    public function getMenuManagerOrders() {
        return array_merge($this->getBank(),
                        $this->getRaw(),
                        $this->getNeedRaw(),
                        $this->getCustomer(),
                        $this->getOrder(),
                        $this->getProduct()
        );
    }

    // Постачальнки. Поставки
    public function getMenuManagerSells() {
        return array_merge($this->getBank(),
                        $this->getDelivery(),
                        $this->getProduct(),
                        $this->getSupplier()
        );
    }

    public function getMenuManagerIndustrial() {
        return array_merge(
            $this->getProduct(),
            $this->getRaw(),
            $this->getNeedRaw(),
            $this->getEquipment(),
            $this->getIndustrialProcess()
        );
    }

    private function getBank() {
        return [['Банки' => URL . $this->controller . '/banks']];
    }

    private function getWorker() {
        return [['Працівники' => URL . $this->controller . '/workers']];
    }

    private function getDelivery() {
        return [['Поставки' => '']];
    }

    private function getSupplier() {
        return [['Постачальники' => '']];
    }

    private function getOrder() {
        return [['Замовлення' => URL . $this->controller . '/orders']];
    }

    private function getCustomer() {
        return [['Замовники' => URL . $this->controller . '/customers']];
    }

    private function getProduct() {
        return [['Продукція' => URL . $this->controller . '/products']];
    }

    private function getRaw() {
        return [['Сировина' => URL . $this->controller . '/raws']];
    }

    private function getNeedRaw() {
        return [['Потреба в сировині' => URL . $this->controller . '/needRaw']];
    }

    private function getEquipment() {
        return [['Обладнання' => URL . $this->controller . '/equipments']];
    }

    private function getIndustrialProcess() {
        return [['Виробничі процеси' => URL . $this->controller . '/industrialProcess']];
    }
}