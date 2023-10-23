<?php
if (!isset($_SESSION)) session_start();
include_once('fun/fun.php');
$user = remove_User($_GET['user']);
if (!is_null($user)) {
    $_SESSION['flash'] = "L'usuari " . $user['username'] . " s'ha eliminat correctament";
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    die();
}
