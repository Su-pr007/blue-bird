<?php
require $_SERVER['DOCUMENT_ROOT'].'/core/prolog.php';
global $con;

try {
    $name = $_POST['name'];
    $number = $_POST['number'];
    $reg_exp = "/^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$/";
    $result = preg_match($reg_exp, $number);
    $sql = 'INSERT INTO order_call(name , number ) VALUES ( :name , :number )';
    $query = $con->prepare($sql);

    if ($result && $name) {
        $query->execute(['name' => $name, 'number' => $number]);
        echo '<div class="alert alert-success">Сообщение отправлено</div>';
    }else{
        echo'<div class="alert alert-danger">Поля заполнены не верно</div>';
    }
} catch (PDOException $e) {
    die($e->getMessage());
}
?>