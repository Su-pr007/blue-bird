<?php
try {
	$con = new PDO('mysql:dbname=test;host=mysql', 'root', 'root');
    $query = "INSERT INTO order_call ( name , number ) VALUES ('". $_POST['name'] . "', '". $_POST['number'] ."')";
    if ($msg = $con->query($query)){
        echo 'Pft,b';
    }else{
        echo 'Ошибка';
    }

} catch (PDOException $e) {
	die($e->getMessage());
}
?>