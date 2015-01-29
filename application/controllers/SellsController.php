<?php
/**
 * Created by PhpStorm.
 * User: олег
 * Date: 07.01.15
 * Time: 19:13
 */

class SellsController extends Controller {

    public function index() {
        $this->smarty->assign('name', 'Sells');
        $this->smarty->display('sells/sells.tpl');
    }
}