<?php

/**
 * This is the "base controller class". All other "real" controllers extend this class.
 */

use \Doctrine\ORM\EntityManager;

class Controller
{
    /**
     * @type EntityManager
     * Doctrine 2 Entity Manager
     */
    protected $em;
    /**
     * @var Smarty
     */
    protected $smarty;

    protected $menus = [];

    protected $common = null;

    protected $nameController;
    protected $nameAction;

    public function __construct(EntityManager $em, $nameController, $nameAction)
    {
        $this->em = $em;
        $this->common = new Common($this->em);
        $this->setupSmarty();
        $this->smarty->assign('menus', $this->menus);

        $this->nameController = $nameController;
        $this->nameAction = $nameAction;
        $this->setBreadCrumbs();
    }
    protected function setupSmarty() {

        require_once SMARTY_DIR."Smarty.class.php";

        $this->smarty = new Smarty();

        $this->smarty->template_dir = './application/views/templates/';
        $this->smarty->compile_dir  = './application/views/templates_c/';
        $this->smarty->config_dir   = './application/views/configs/';
        $this->smarty->cache_dir    = './application/views/cache/';
       // $this->smarty->debug_tpl = SMARTY_DIR . 'debug.tpl';

        $this->smarty->caching = false;
        //$this->smarty->debugging = true;
        //$this->smarty->compile_check = false;
    }

    private function setBreadCrumbs() {
        $this->smarty->assign('controller', $this->nameController);
        $this->smarty->assign('action', $this->nameAction);
        switch($this->nameAction) {
            case '':
                $this->smarty->assign('breadcrumbs',"Продукція");
                break;
            case 'products':
                $this->smarty->assign('breadcrumbs',"Продукція");
                break;
            case 'raws':
                $this->smarty->assign('breadcrumbs',"Сировина");
                break;
            case 'needRaw':
                $this->smarty->assign('breadcrumbs',"Потреба в сировині");
                break;
            default:
            case 'equipments':
                $this->smarty->assign('breadcrumbs',"Обладнання");
                break;
            case 'orders':
                $this->smarty->assign('breadcrumbs',"Замовлення");
                break;
            case 'customers':
                $this->smarty->assign('breadcrumbs',"Замовники");
                break;
            case 'industrialProcess':
                $this->smarty->assign('breadcrumbs',"Виробничі процеси");
                break;
            case 'workers':
                $this->smarty->assign('breadcrumbs',"Працівники");
                break;
            default:
        }
    }
}
