<?php
if (!isset($_SESSION)) session_start();
include_once('fun/fun.php');

unset($_SESSION['users']);
unset($_SESSION['products']);
$data = new DateTime('now', new DateTimeZone('Europe/Madrid'));
$data_creacio = $data->format("d-m-Y");
//formatter($data);
if (!isset($_SESSION['users'])) {
    $_SESSION['users'] = array();
    $user1 = array(
        "id" => 0,
        "data_Naixament" => "29-03-2003",
        "username" => "admin",
        "password" => "admin",
        "dataCreat" => $data_creacio,
        "dataModificat" => "",
        "admin" => true,
        "carro" => array(),
        "historial_compres" => array()
    );
    $user2 = array(
        "id" => 1,
        "data_Naixament" => "30-03-2003",
        "username" => "alexllastanos",
        "password" => "alexllastanos",
        "dataCreat" => $data_creacio,
        "dataModificat" => "",
        "admin" => false,
        "carro" => array(),
        "historial_compres" => array()

    );
    $_SESSION['users'][] = $user1;
    $_SESSION['users'][] = $user2;
}
if (!isset($_SESSION['products'])) {
    $_SESSION['products'] = array();
    $product1 = array(
        "id" => 1,
        "img" => "./img/img1.png",
        "name" => "BUTTERFLY INNERFORCE LAYER ZLC",
        "description" => "Fusta amb Carbono ZLC-Inner",
        "price" => 219.90,
        "stock" => 2,
        "available" => true,

    );
    $product2 = array(
        "id" => 2,
        "img" => "./img/img2.png",
        "name" => "BUTTERFLY INNERFORCE LAYER ALC",
        "description" => "Fusta amb Carbono ALC-Inner",
        "price" => 179.90,
        "stock" => 1,
        "available" => true,

    );
    $_SESSION['products'][] = $product1;
    $_SESSION['products'][] = $product2;
}
header('Location: ./signin.php');
die();
