<?php

function login($username, $pass)
{
    if (isset($_SESSION['users'])) {
        foreach ($_SESSION['users'] as $user) {
            if ($user['username'] == $username) {
                if ($user['password'] == $pass) {
                    // echo"Usuari Loggejat";
                    // die();   
                    return $user;
                }
            }
        }
        return null;
    }
    return null;
}

function remove_User($username)
{
    if (isset($_SESSION['users'])) {
        foreach ($_SESSION['users'] as $key => $user) {
            if ($user['username'] == $username) {
                unset($_SESSION['users'][$key]);
                return $user;
            }
        }
    }
    return null;
}
function formatter($data)
{
    $data = $data->format("d-m-Y");
    return $data;
}
function cambiarAdmin($username)
{
    if (isset($_SESSION['users'])) {
        foreach ($_SESSION['users'] as $key => $user) {
            if ($user['username'] == $username) {
                if ($_SESSION['users'][$key]['admin']) {
                    $_SESSION['users'][$key]['admin'] = false;
                    return $user;
                } else {
                    $_SESSION['users'][$key]['admin'] = true;
                    return $user;
                }
                return $user;
            }
        }
    }
    return null;
}
