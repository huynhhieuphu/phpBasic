<?php
session_start();

function redirect($path) {
    header("Location: " . $path);
    exit();
}

function hasSession($key){
    if (!empty($_SESSION[$key])) {
        return true;
    }
    return false;
}

function setSession($key, $value = null){
    if(!empty($key)) {
        $_SESSION[$key] = $value;
    }
}

function getSession($key, $oneMore = false) {
    $result = false;
    if(hasSession($key)) {
        $result = $_SESSION[$key];
        if($oneMore) {
            unset($_SESSION[$key]);
        }
    }
    return $result;
}

