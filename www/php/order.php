<?php
try {
    $con = new PDO('mysql:dbname=blue_bird;host=mysql', 'root', 'root');

    $email = $_POST['email'];
    $product = $_POST['product'];
    $message = $_POST['message'];
    $reg_exp = '/^([a-z0-9_-]+\.)*[a-z0-9_-]+@[a-z0-9_-]+(\.[a-z0-9_-]+)*\.[a-z]{2,6}$/i';
    $result = preg_match($reg_exp, $email);

    $sql = "INSERT INTO order_product ( email , product, message  ) VALUES (:email, :product, :message)";
    $query = $con->prepare($sql);

    if ($result && $message && $product) {
        $query->execute(['email' => $email, 'product' => $product, 'message' => $message]);
        echo 1;
    }
} catch (PDOException $e) {
    die($e->getMessage());
}
?>