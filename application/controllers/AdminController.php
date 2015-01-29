<?php
/**
 * Created by PhpStorm.
 * User: олег
 * Date: 07.01.15
 * Time: 19:13
 */

class AdminController extends Controller {

    public function __construct($em, $nameController, $nameAction) {
        $userType = new UserTypes('admin');
        $this->menus = $userType->getMenuAdmin();
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

    public function workers() {
        $workers = $this->common->getWorkers();
        var_dump($workers);
    }

    public function needRaw() {
        $needRaws = $this->common->getNeedRaw();
        $this->smarty->assign('needRaws', $needRaws);
        $this->smarty->display('admin/need-raw.tpl');
    }

    public function equipments() {
        $equipments = $this->common->getEquipments();
        $this->smarty->assign('equipments', $equipments);
        $this->smarty->display('admin/equipments');
    }

    public function raws() {
        $raws = $this->common->getRaw();
        $this->smarty->assign('raws', $raws);
        $this->smarty->display('admin/raws.tpl');
    }

    public function orders() {
        $orders = $this->common->getOrders();
        $this->smarty->assign('orders', $orders);
        $this->smarty->display('admin/orders.tpl');
    }

    public function customers() {
        $customers = $this->common->getCustomers();
        $this->smarty->assign('customers', $customers);
        $this->smarty->display('admin/customers.tpl');
    }

    public function industrialProcess() {
        $industrialProcesses = $this->common->getIndustrialProcess();
        $this->smarty->assign('industrialProcesses', $industrialProcesses);
        $this->smarty->display('admin/industrial-process.tpl');
    }

    public function banks() {
        $banks = $this->common->getBanks();
        var_dump($banks);
    }

    public function createWorker() {
        $fullName = 'Жигалов Дмитро Пилипович';
        $worker = new Worker();
        $worker->setFullname($fullName)
               ->setExperience(2);
        $this->em->persist($worker);
        $this->em->flush();
    }

    public function createUser() {
        $type = $this->em->getRepository('UserType')->findOneBy(['id' => 2]);
        $user = new User();
        $user->setName('Buh Test Name')
             ->setSurname('Surname Test BUh')
             ->setLogin('buh1')
             ->setPass('buh1')
             ->setType($type);
        $this->em->persist($user);
        $this->em->flush();
    }
}