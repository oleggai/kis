<?php /* Smarty version Smarty-3.1.18, created on 2015-01-29 08:50:25
         compiled from ".\application\views\templates\admin\customers.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3207254c9e641ef4367-97873650%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d5438e926220eeb44cea41a2ac9e95625304648' => 
    array (
      0 => '.\\application\\views\\templates\\admin\\customers.tpl',
      1 => 1422517694,
      2 => 'file',
    ),
    '4f4fdad1c983ba8b6707dd5a44c9213031989f67' => 
    array (
      0 => '.\\application\\views\\templates\\layouts\\main.tpl',
      1 => 1422445823,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3207254c9e641ef4367-97873650',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
    'menus' => 0,
    'menu' => 0,
    'value' => 0,
    'key' => 0,
    'breadcrumbs' => 0,
    'controller' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54c9e642c16048_50634918',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c9e642c16048_50634918')) {function content_54c9e642c16048_50634918($_smarty_tpl) {?><!doctype html>
<html lang="en"><head>
    <meta charset="utf-8">
    <title>KIS</title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="<?php echo @constant('URL');?>
public/css/admin/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="<?php echo @constant('URL');?>
public/css/admin/bootstrap/font-awesome.css">

    <script src="<?php echo @constant('URL');?>
public/js/jQuery.js" type="text/javascript"></script>

    <script src="<?php echo @constant('URL');?>
public/js/checkInfo.js" type="text/javascript"></script>

    <link rel="stylesheet" type="text/css" href="<?php echo @constant('URL');?>
public/css/admin/bootstrap/theme.css">
    <link rel="stylesheet" type="text/css" href="<?php echo @constant('URL');?>
public/css/admin/bootstrap/premium.css">

</head>
<body class=" theme-blue">
<div id="opacity" style="position: fixed; display: none; width: 100%; height: 100%; opacity: 0.4; z-index: 1; top: 0px; left: 0px; background: rgb(0, 0, 0);"></div>
<!-- Demo page code -->
<style type="text/css">
    #line-chart {
        height:300px;
        width:800px;
        margin: 0 auto;
        margin-top: 1em;
    }
    .navbar-default .navbar-brand, .navbar-default .navbar-brand:hover {
        color: #fff;
    }
</style>

<div class="navbar navbar-default" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="" href="index.html"><span class="navbar-brand"><span class="fa fa-paper-plane"></span>    KIS</span></a></div>

    <div class="navbar-collapse collapse" style="height: 1px; float: right; width: 170px; height:70px; position: relative; margin-top:13px;">
        <a class="dropdown-toggle" style="color: white; line-height: 20px;" >Привет
            <?php $_smarty_tpl->tpl_vars['user'] = new Smarty_variable($_SESSION['user'], null, 0);?>
            <?php echo $_smarty_tpl->tpl_vars['user']->value->getName();?>

        </a>
        <a href="<?php echo @constant('URL');?>
logout" class="dropdown-toggle hover_out" style="color: white; line-height: 20px; float: right;" >Выход</a>
    </div>
</div>
</div>

<div class="sidebar-nav">
    <ul>

        <?php  $_smarty_tpl->tpl_vars['menu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menus']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->key => $_smarty_tpl->tpl_vars['menu']->value) {
$_smarty_tpl->tpl_vars['menu']->_loop = true;
?>
            <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
                <li><a style="cursor: pointer;"  class="nav-header" href="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
"><i class="fa fa-fw fa-question-circle"></i> <?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</a></li>
            <?php } ?>
        <?php } ?>
    </ul>
</div>

<div class="content">
    <div class="header">

        <h1 class="page-title">
            <?php echo $_smarty_tpl->tpl_vars['breadcrumbs']->value;?>

        </h1>
        <ul class="breadcrumb">
            <li><a href="index.html"><?php echo $_smarty_tpl->tpl_vars['controller']->value;?>
</a></li>
            <li class="active">
                <?php echo $_smarty_tpl->tpl_vars['breadcrumbs']->value;?>

            </li>
        </ul>

    </div>
    <div class="main-content">
        
    <table class="tg">
        <tr>
            <th class="tg-izya">ID Замовника</th>
            <th class="tg-izya">ФІО</th>
            <th class="tg-izya">Адреса</th>
            <th class="tg-izya">Телефон</th>
        </tr>
        <?php  $_smarty_tpl->tpl_vars['customer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['customer']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['customers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['customer']->key => $_smarty_tpl->tpl_vars['customer']->value) {
$_smarty_tpl->tpl_vars['customer']->_loop = true;
?>
            <tr>
                <td class="tg-s6z2" style="width: 20%;">
                    <?php echo $_smarty_tpl->tpl_vars['customer']->value->getIdCustomer();?>

                </td>
                <td class="tg-s6z2">
                    <span class="td-table"><?php echo $_smarty_tpl->tpl_vars['customer']->value->getNameCustomer();?>
</span>
                </td>
                <td class="tg-s6z2">
                    <span class="td-table"><?php echo $_smarty_tpl->tpl_vars['customer']->value->getAddress();?>
</span>
                </td>
                <td class="tg-s6z2">
                    <span class="td-table"><?php echo $_smarty_tpl->tpl_vars['customer']->value->getPhone();?>
</span>
                </td>
            </tr>
        <?php } ?>
    </table>


        <footer>
            <hr>

            <!-- Purchase a site license to remove this link from the footer: http://www.portnine.com/bootstrap-themes -->
            <p class="pull-right">Разработка и поддержка<a href="#" target="_blank"> oleggaidaienko@gmail.com</a></p>
            <p>© 2014 <a href="#" target="_blank"> KIS</a></p>
        </footer>
    </div>
</div>
<audio id="sound">
    <source src="application/views/admin/layouts/2.mp3">
</audio>
<audio id="soundCallMe">
    <source src="application/views/admin/layouts/3.mp3">
</audio>
<script type="text/javascript">
// Гармошка
$(".sidebar-nav ul li[rel='slide']").bind("click", function() {
    $(this).next().find("ul").slideToggle();
    $(this).next().next().find("a").css("borderTop", " 1px solid #c8c8cb");
});



    $(".hover_link").parent().css("display", "block");


</script>

</body></html>
<?php }} ?>
