<?php
/**
 * Created by PhpStorm.
 * User: олег
 * Date: 07.01.15
 * Time: 19:13
 */

class IndustrialController extends Controller {

    public function __construct($em, $nameController, $nameAction) {
        $userType = new UserTypes('industrial');
        $this->menus = $userType->getMenuManagerIndustrial();
        parent::__construct($em, $nameController, $nameAction);
    }

    public function index() {
        $this->products();
    }

    public function products() {
        $products = $this->common->getProducts();
        $this->smarty->assign('products', $products);
        $this->smarty->display('industrial/index.tpl');
    }

    public function needRaw() {

        if($_SERVER["REQUEST_METHOD"] == 'POST') {
            // save
            if(empty($_POST['product']) || empty($_POST['raw']) || empty($_POST['count'])) {
                $this->smarty->assign('error', 'Будь-ласка! Верніться і заповніть всі поля.');
            }
            else {

                $needRaw = new Needraw();
                $product = $this->em->getRepository('Product')->findOneBy(['idProduct' => $_POST['product']]);
                $raw     = $this->em->getRepository('Raw')->findOneBy(['idRaw' => $_POST['raw']]);

                try{
                    $needRaw->setProduct($product)
                        ->setRaw($raw)
                        ->setAmountRaw($_POST['count']);
                    $this->em->persist($needRaw);
                    $this->em->flush();

                    $this->smarty->assign('success', 'Потреба в сировині успішно збережена!');
                }
                catch(Exception $e) {
                    $this->smarty->assign('error', 'Не вдалось зберегти потребу в сировині');
                }
            }

        }

        $needRaws = $this->common->getNeedRaw();
        $products = $this->common->getProducts();
        $raws     = $this->common->getRaw();
        $this->smarty->assign([
                'needRaws' => $needRaws,
                'products' => $products,
                'raws'     => $raws
            ]);
        $this->smarty->display('industrial/form-need-raw.tpl');
    }

    public function equipments() {
        if($_SERVER["REQUEST_METHOD"] == 'POST') {
            // save
            if(empty($_POST['name-equipment']) || empty($_POST['brand']) ||
                empty($_POST['count']) || empty($_POST['cost']) ||
                empty($_POST['buy-date']) || empty($_POST['expire-date'])) {
                $this->smarty->assign('error', 'Будь-ласка! Верніться і заповніть всі поля.');
            }
            else {
                $buyDate = $_POST['buy-date'];
                $expireDate = $_POST['expire-date'];
                $buyDate = new DateTime($buyDate);
                $expireDate = new DateTime($expireDate);

                $equipment = new Equipment();
                try{
                    $equipment->setName($_POST['name-equipment'])
                        ->setBrand($_POST['brand'])
                        ->setCost($_POST['cost'])
                        ->setCount($_POST['count'])
                        ->setBuyDate($buyDate)
                        ->setExpireDate($expireDate);
                    $this->em->persist($equipment);
                    $this->em->flush();

                    $this->smarty->assign('success', 'Обладнання успішно збережено!');
                }
                catch(Exception $e) {
                    $this->smarty->assign('error', 'Не вдалось зберегти обладнання');
                }
            }

        }
        $equipments = $this->common->getEquipments();
        $this->smarty->assign('equipments', $equipments);
        $this->smarty->display('industrial/form-equipments.tpl');
    }

    public function raws() {
        $raws = $this->common->getRaw();
        $this->smarty->assign('raws', $raws);
        $this->smarty->display('industrial/raws.tpl');
    }

    public function industrialProcess() {
        if($_SERVER["REQUEST_METHOD"] == 'POST') {
            // save
            if(empty($_POST['worker']) || empty($_POST['equipment']) ||
                empty($_POST['product']) || empty($_POST['count']) || empty($_POST['date'])) {
                $this->smarty->assign('error', 'Будь-ласка! Верніться і заповніть всі поля.');
            }
            else {
                $date = $_POST['date'];
                $date = new DateTime($date);

                $industrialProcess = new Industrialprocess();
                $worker = $this->em->getRepository('Worker')->findOneBy(['idWorker' => $_POST['worker']]);
                $equipment = $this->em->getRepository('Equipment')->findOneBy(['idEquipment' => $_POST['equipment']]);
                $product = $this->em->getRepository('Product')->findOneBy(['idProduct' => $_POST['product']]);

                try{
                    $industrialProcess->setWorker($worker)
                        ->setEquipment($equipment)
                        ->setProduct($product)
                        ->setProductsCount($_POST['count'])
                        ->setDate($date);
                    $this->em->persist($industrialProcess);
                    $this->em->flush();

                    $this->smarty->assign('success', 'Процес успішно збережений!');
                }
                catch(Exception $e) {
                    $this->smarty->assign('error', 'Не вдалось зберегти процес');
                }
            }

        }
        $workers    = $this->common->getWorkers();
        $equipments = $this->common->getEquipments();
        $products   = $this->common->getProducts();
        $industrialProcesses = $this->common->getIndustrialProcess();

        $this->smarty->assign([
                'industrialProcesses' => $industrialProcesses,
                'workers'             => $workers,
                'equipments'          => $equipments,
                'products'            => $products
            ]);
        $this->smarty->display('industrial/form-industrial-process.tpl');
    }
}