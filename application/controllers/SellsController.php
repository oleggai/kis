<?php
/**
 * Created by PhpStorm.
 * User: олег
 * Date: 07.01.15
 * Time: 19:13
 */

class SellsController extends Controller {

    public function __construct($em, $nameController, $nameAction) {
        $userType = new UserTypes($nameController);
        $this->menus = $userType->getMenuManagerSells();
        parent::__construct($em, $nameController, $nameAction);
    }


    public function index() {
        $this->products();
    }

    public function deliveries() {

        if($_SERVER["REQUEST_METHOD"] == 'POST') {
            // save
            if(empty($_POST['supplier']) || empty($_POST['raw']) ||
                 empty($_POST['count']) || empty($_POST['paid']) || empty($_POST['date'])) {
                $this->smarty->assign('error', 'Будь-ласка! Верніться і заповніть всі поля.');
            }
            else {
                $date = $_POST['date'];
                $date = new DateTime($date);

                $delivery = new Delivery();
                $supplier = $this->em->getRepository('Supplier')->findOneBy(['idSupplier' => $_POST['supplier']]);
                $raw = $this->em->getRepository('Raw')->findOneBy(['idRaw' => $_POST['raw']]);

                try{
                    $delivery->setSupplier($supplier)
                        ->setRaw($raw)
                        ->setCount($_POST['count'])
                        ->setPaid($_POST['paid'])
                        ->setDate($date);
                    $this->em->persist($delivery);
                    $this->em->flush();

                    $this->smarty->assign('success', 'Дані успішно збережені!');
                }
                catch(Exception $e) {
                    $this->smarty->assign('error', 'Не вдалось зберегти дані');
                }
            }

        }

        $deliveries = $this->common->getDelivery();
        $raws = $this->common->getRaw();
        $suppliers = $this->common->getSuppliers();

        $this->smarty->assign([
                'deliveries' => $deliveries,
                'raws'       => $raws,
                'suppliers'  => $suppliers
            ]);
        $this->smarty->display('sells/form-deliveries.tpl');
    }

    public function products() {
        $products = $this->common->getProducts();
        $this->smarty->assign('products', $products);
        $this->smarty->display('admin/index.tpl');
    }

    public function suppliers() {

        if($_SERVER["REQUEST_METHOD"] == 'POST') {
            // save
            if(empty($_POST['name']) || empty($_POST['address']) ||
                empty($_POST['phone']) || empty($_POST['bank'])) {
                $this->smarty->assign('error', 'Будь-ласка! Верніться і заповніть всі поля.');
            }
            else {
                $supplier = new Supplier();
                $bank = $this->em->getRepository('Bank')->findOneBy(['idBank' => $_POST['bank']]);

                try{
                    $supplier->setNameSupplier($_POST['name'])
                        ->setAddress($_POST['address'])
                        ->setPhone($_POST['phone'])
                        ->setBank($bank);
                    $this->em->persist($supplier);
                    $this->em->flush();

                    $this->smarty->assign('success', 'Дані успішно збережені!');
                }
                catch(Exception $e) {
                    $this->smarty->assign('error', 'Не вдалось зберегти дані');
                }
            }

        }

        $suppliers = $this->common->getSuppliers();
        $banks = $this->common->getBanks();
        $this->smarty->assign([
                'suppliers' => $suppliers,
                'banks'     => $banks
            ]);
        $this->smarty->display('sells/form-suppliers.tpl');
    }
}