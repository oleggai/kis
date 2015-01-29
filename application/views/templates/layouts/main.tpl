<!doctype html>
<html lang="en"><head>
    <meta charset="utf-8">
    <title>KIS</title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="{$smarty.const.URL}public/css/admin/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="{$smarty.const.URL}public/css/admin/bootstrap/font-awesome.css">

    <script src="{$smarty.const.URL}public/js/jQuery.js" type="text/javascript"></script>

    <script src="{$smarty.const.URL}public/js/checkInfo.js" type="text/javascript"></script>

    <link rel="stylesheet" type="text/css" href="{$smarty.const.URL}public/css/admin/bootstrap/theme.css">
    <link rel="stylesheet" type="text/css" href="{$smarty.const.URL}public/css/admin/bootstrap/premium.css">

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
            {assign user $smarty.session.user}
            {$user->getName()}
        </a>
        <a href="{$smarty.const.URL}logout" class="dropdown-toggle hover_out" style="color: white; line-height: 20px; float: right;" >Выход</a>
    </div>
</div>
</div>

<div class="sidebar-nav">
    <ul>

        {foreach $menus as $menu}
            {foreach $menu as $key => $value}
                <li><a style="cursor: pointer;"  class="nav-header" href="{$value}"><i class="fa fa-fw fa-question-circle"></i> {$key}</a></li>
            {/foreach}
        {/foreach}
    </ul>
</div>

<div class="content">
    <div class="header">

        <h1 class="page-title">
            {$breadcrumbs}
        </h1>
        <ul class="breadcrumb">
            <li><a href="index.html">{$controller}</a></li>
            <li class="active">
                {$breadcrumbs}
            </li>
        </ul>

    </div>
    <div class="main-content">
        {block name = 'content'}

        {/block}

        <footer>
            <hr>

            <!-- Purchase a site license to remove this link from the footer: http://www.portnine.com/bootstrap-themes -->
            <p class="pull-right">Разработка и поддержка<a href="#" target="_blank"> oleggaidaienko@gmail.com</a></p>
            <p>© 2014 <a href="#" target="_blank"> KIS</a></p>
        </footer>
    </div>
</div>
<audio id="sound">
    <source src="{*<?php echo URL;?>*}application/views/admin/layouts/2.mp3">
</audio>
<audio id="soundCallMe">
    <source src="{*<?php echo URL;?>*}application/views/admin/layouts/3.mp3">
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
