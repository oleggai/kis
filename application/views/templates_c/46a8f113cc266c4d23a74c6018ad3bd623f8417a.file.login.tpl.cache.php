<?php /* Smarty version Smarty-3.1.18, created on 2015-01-11 14:31:16
         compiled from ".\application\views\templates\login.tpl" */ ?>
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
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54b27b24a1b3b9_91169812',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b27b24a1b3b9_91169812')) {function content_54b27b24a1b3b9_91169812($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
    <title></title>
    <link href="<?php echo @constant('URL');?>
public/css/login.css" rel="stylesheet" type="text/css"/>
    <script src="<?php echo @constant('URL');?>
public/js/jQuery.js"></script>
    <script type="text/javascript">
        var URL;
        $(document).ready(function() {
            URL = <?php echo @constant('URL');?>
;
        });
    </script>
    <script src="<?php echo @constant('URL');?>
public/js/login.js"></script>
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
