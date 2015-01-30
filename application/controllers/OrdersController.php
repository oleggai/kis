<?php
/**
 * Created by PhpStorm.
 * User: олег
 * Date: 07.01.15
 * Time: 19:13
 */

class OrdersController extends Controller {

    public function __construct($em, $nameController, $nameAction) {
        $userType = new UserTypes($nameController);
        $this->menus = $userType->getMenuManagerOrders();
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

    public function customers() {

        if($_SERVER["REQUEST_METHOD"] == 'POST') {
            // save
            if(empty($_POST['name']) || empty($_POST['address']) || empty($_POST['phone'])) {
                $this->smarty->assign('error', 'Будь-ласка! Верніться і заповніть всі поля.');
            }
            else {
                $customer = new Customer();
                try{
                    $customer->setNameCustomer($_POST['name'])
                        ->setAddress($_POST['address'])
                        ->setPhone($_POST['phone']);
                    $this->em->persist($customer);
                    $this->em->flush();

                    $this->smarty->assign('success', 'Дані успішно збережені!');
                }
                catch(Exception $e) {
                    $this->smarty->assign('error', 'Не вдалось зберегти дані');
                }
            }

        }

        $customers = $this->common->getCustomers();
        $this->smarty->assign('customers', $customers);
        $this->smarty->display('orders/form-customers.tpl');
    }

    public function orders() {

        if($_SERVER["REQUEST_METHOD"] == 'POST') {
            // save
            if(empty($_POST['customer']) || empty($_POST['product']) || empty($_POST['count']) ||
                empty($_POST['paid']) || empty($_POST['registration-date']) || empty($_POST['execution-date'])) {

                $this->smarty->assign('error', 'Будь-ласка! Верніться і заповніть всі поля.');
            }
            else {
                $registrationDate = new DateTime($_POST['registration-date']);
                $executionDate = new DateTime($_POST['execution-date']);

                $order = new Order();
                $customer = $this->em->getRepository('Customer')->findOneBy(['idCustomer' => $_POST['customer']]);
                $product = $this->em->getRepository('Product')->findOneBy(['idProduct' => $_POST['product']]);

                try{
                    $order->setCustomer($customer)
                        ->setProduct($product)
                        ->setCount($_POST['count'])
                        ->setPaid($_POST['paid'])
                        ->setRegistrationDate($registrationDate)
                        ->setExecutionDate($executionDate);
                    $this->em->persist($order);
                    $this->em->flush();

                    $this->smarty->assign('success', 'Дані успішно збережені!');
                }
                catch(Exception $e) {
                    $this->smarty->assign('error', 'Не вдалось зберегти дані');
                }
            }

        }

        $orders = $this->common->getOrders();
        $customers = $this->common->getCustomers();
        $products = $this->common->getProducts();

        $this->smarty->assign([
                'orders'    => $orders,
                'customers' => $customers,
                'products'  => $products
            ]);
        $this->smarty->display('orders/form-orders.tpl');
    }

    public function needRaw() {
        $needRaws = $this->common->getNeedRaw();
        $this->smarty->assign('needRaws', $needRaws);
        $this->smarty->display('orders/need-raw.tpl');
    }
}