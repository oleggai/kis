<?php
/**
 * Created by PhpStorm.
 * User: олег
 * Date: 10.01.15
 * Time: 20:47
 */
class Common {

    public $em = null;

    public function __construct(\Doctrine\ORM\EntityManager $em) {
        $this->em = $em;
    }

    public function getWorkers() {
        return $this->em->getRepository('Worker')->findAll();
    }

    public function getBanks() {
        return $this->em->getRepository('Bank')->findAll();
    }

    public function getProducts() {
        return $this->em->getRepository('Product')->findAll();
    }

    public function getRaw() {
        return $this->em->getRepository('Raw')->findAll();
    }

    public function getNeedRaw() {
        return $this->em->getRepository('Needraw')->findBy(array(), array('product' => 'ASC'));
    }

    public function getEquipments() {
        return $this->em->getRepository('Equipment')->findAll();
    }

    public function getOrders() {
        return $this->em->getRepository('Order')->findAll();
    }

    public function getCustomers() {
        return $this->em->getRepository('Customer')->findBy(array(), array('nameCustomer' => 'ASC'));
    }

    public function getIndustrialProcess() {
        return $this->em->getRepository('Industrialprocess')->findBy(array(), array('date' => 'DESC'));
    }
}