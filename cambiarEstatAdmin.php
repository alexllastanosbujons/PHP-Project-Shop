<?php
if (!isset($_SESSION)) session_start();
include_once('fun/fun.php');
$user = cambiarAdmin($_GET['user']);
if (!is_null($user)) {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    die();
}
