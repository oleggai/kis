<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link href="{$smarty.const.URL}public/css/login.css" rel="stylesheet" type="text/css"/>
    <script src="{$smarty.const.URL}public/js/jQuery.js"></script>
    <script type="text/javascript">
        var URL;
        $(document).ready(function() {
            URL = {$smarty.const.URL};
        });
    </script>
    <script src="{$smarty.const.URL}public/js/login.js"></script>
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
</html>