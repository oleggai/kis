<?php
/**
 * Created by PhpStorm.
 * User: олег
 * Date: 07.01.15
 * Time: 19:13
 */

class BuhController extends Controller {

    public function index() {
        $this->smarty->assign('name', 'Buh');
        $this->smarty->display('buh/buh.tpl');
    }
}