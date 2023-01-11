
<?php
require $_SERVER['DOCUMENT_ROOT'].'/core/prolog.php';
global $con;

$con = new PDO('mysql:dbname=blue_bird;host=mysql', 'root', 'root');
$menu = $con->query('SELECT * FROM `menu-list`');
$menu_sublist = $con->query('SELECT * FROM `menu-sublist`');


var_dump(arr_menu);






?>


