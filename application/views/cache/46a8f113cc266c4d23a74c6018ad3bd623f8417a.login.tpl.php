<?php /*%%SmartyHeaderCode:1066054b27b247a64c9-21728029%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '46a8f113cc266c4d23a74c6018ad3bd623f8417a' => 
    array (
      0 => '.\\application\\views\\templates\\login.tpl',
      1 => 1420890593,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1066054b27b247a64c9-21728029',
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54c7acf77b5b00_20969455',
  'has_nocache_code' => false,
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c7acf77b5b00_20969455')) {function content_54c7acf77b5b00_20969455($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
    <title></title>
    <link href="/kis/public/css/login.css" rel="stylesheet" type="text/css"/>
    <script src="/kis/public/js/jQuery.js"></script>
    <script type="text/javascript">
        var URL;
        $(document).ready(function() {
            URL = /kis/;
        });
    </script>
    <script src="/kis/public/js/login.js"></script>
</head>
<body>
<form onsubmit="return false;"  class="iform" style="display: block;">
    <fieldset>
        <legend class="iheader">Вхід в КІС</legend>
        <div id="imessageERROR"></div>
        <ul>
            <li><label for=""><span class="form_star">*</span> Логін:</label><input class="itext" type="text" name="login" id="login" /></li>
            <li><label for=""><span class="form_star">*</span> Пароль:</label><input class="itext" type="password" name="password" id="password" /></li>

            <li><label>&nbsp;</label><input type="button" class="ibutton"  name="" id="but_login_admin" value="Ввійти" />
                <a href="#" style="margin-left: 30px;">Забули пароль?</a>
            </li>
        </ul>
    </fieldset>
</form>
</body>
</html><?php }} ?>
