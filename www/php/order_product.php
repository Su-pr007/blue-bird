<?php
try {
    $con = new PDO('mysql:dbname=blue_bird;host=mysql', 'root', 'root');
    $name = $_POST['name'];
    $number = $_POST['number'];
    $reg_exp = "/^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$/";
    $result = preg_match($reg_exp, $number);
//  $query = "INSERT INTO order_call ( name , number ) VALUES ('" . $name . "', '" . $number . "')";
    $sql = 'INSERT INTO order_call(name , number ) VALUES ( :name , :number )';
    $query = $con->prepare($sql);

    if ($result && $name) {
        $query->execute(['name' => $name, 'number' => $number]);
        echo 1;
    }
} catch (PDOException $e) {
    die($e->getMessage());
}
?>