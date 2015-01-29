<?php /*%%SmartyHeaderCode:2054454b24c51f35115-30224032%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9499716fc683267893845347415738c9914d75f6' => 
    array (
      0 => '.\\application\\views\\templates\\admin\\admin.tpl',
      1 => 1420971561,
      2 => 'file',
    ),
    '4f4fdad1c983ba8b6707dd5a44c9213031989f67' => 
    array (
      0 => '.\\application\\views\\templates\\layouts\\main.tpl',
      1 => 1420982994,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2054454b24c51f35115-30224032',
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54c7ad86005871_03354686',
  'has_nocache_code' => false,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c7ad86005871_03354686')) {function content_54c7ad86005871_03354686($_smarty_tpl) {?><!doctype html>
<html lang="en"><head>
    <meta charset="utf-8">
    <title>Admin Sushi & Pizza</title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="/kis/public/css/admin/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="/kis/public/css/admin/bootstrap/font-awesome.css">

    <script src="/kis/public/js/jQuery.js" type="text/javascript"></script>

    <script src="/kis/public/js/checkInfo.js" type="text/javascript"></script>

    <link rel="stylesheet" type="text/css" href="/kis/public/css/admin/bootstrap/theme.css">
    <link rel="stylesheet" type="text/css" href="/kis/public/css/admin/bootstrap/premium.css">

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
        <a class="" href="index.html"><span class="navbar-brand"><span class="fa fa-paper-plane"></span> Admin Sushi & Pizza</span></a></div>

    <div class="navbar-collapse collapse" style="height: 1px; float: right; width: 170px; height:70px; position: relative; margin-top:13px;">
        <a class="dropdown-toggle" style="color: white; line-height: 20px;" >Привет
                        Admin Name
        </a>
        <a href="/kis/logout" class="dropdown-toggle hover_out" style="color: white; line-height: 20px; float: right;" >Выход</a>
    </div>
</div>
</div>


<div class="sidebar-nav">
    <ul>

                                    <li><a style="cursor: pointer;"  class="nav-header" href=""><i class="fa fa-fw fa-question-circle"></i> Продукція</a></li>
                                                <li><a style="cursor: pointer;"  class="nav-header" href=""><i class="fa fa-fw fa-question-circle"></i> Сировина</a></li>
                                                <li><a style="cursor: pointer;"  class="nav-header" href=""><i class="fa fa-fw fa-question-circle"></i> Потреба в сировині</a></li>
                                                <li><a style="cursor: pointer;"  class="nav-header" href=""><i class="fa fa-fw fa-question-circle"></i> Обладнання</a></li>
                                                <li><a style="cursor: pointer;"  class="nav-header" href=""><i class="fa fa-fw fa-question-circle"></i> Замовлення</a></li>
                                                <li><a style="cursor: pointer;"  class="nav-header" href=""><i class="fa fa-fw fa-question-circle"></i> Замовники</a></li>
                                                <li><a style="cursor: pointer;"  class="nav-header" href=""><i class="fa fa-fw fa-question-circle"></i> Поставки</a></li>
                                                <li><a style="cursor: pointer;"  class="nav-header" href=""><i class="fa fa-fw fa-question-circle"></i> Постачальники</a></li>
                                                <li><a style="cursor: pointer;"  class="nav-header" href=""><i class="fa fa-fw fa-question-circle"></i> Банки</a></li>
                                                <li><a style="cursor: pointer;"  class="nav-header" href="/kis/admin/workers"><i class="fa fa-fw fa-question-circle"></i> Працівники</a></li>
                                                <li><a style="cursor: pointer;"  class="nav-header" href=""><i class="fa fa-fw fa-question-circle"></i> Виробничі процеси</a></li>
                        </ul>
</div>

<div class="content">
    <div class="header">

        <h1 class="page-title">

        </h1>
        <ul class="breadcrumb">
            <li><a href="index.html">Admin</a></li>
            <li class="active">

            </li>
        </ul>

    </div>
    <div class="main-content">
        
Admin


        <footer>
            <hr>

            <!-- Purchase a site license to remove this link from the footer: http://www.portnine.com/bootstrap-themes -->
            <p class="pull-right">Разработка и поддержка<a href="#" target="_blank"> oleggaidaienko@gmail.com</a></p>
            <p>© 2014 <a href="#" target="_blank">Доставка Sushi & Pizza</a></p>
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
