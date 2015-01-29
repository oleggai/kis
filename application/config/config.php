<?php
/**
 * Created by PhpStorm.
 * User: олег
 * Date: 17.06.14
 * Time: 10:13
 */
ini_set("error_reporting", E_ALL);
ini_set("display_errors",1);

define('SMARTY_DIR', './application/libs/Smarty-3.1.18/libs/');

define("URL", "/kis/");
define("DB_TYPE", "mysql");
define("DB_HOST", "localhost");
define("DB_NAME", "db_kis");
define("DB_USER", "root");
define("DB_PASS", "");

define("ROLE_ADMIN", 1);
define("ROLE_BUH", 2);
define("ROLE_MANAGER_ORDERS", 3);
define("ROLE_MANAGER_SELLS", 4);
define("ROLE_MANAGER_INDUSTRIAL", 5);

