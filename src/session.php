<?php
session_start();

if(isset($_GET['route'])){
    if($_GET['route'] !== 'login' && !isset($_SESSION['username'])){
        header('Location: /?route=login');
        exit();
    }
    elseif($_GET['route'] === 'login' && isset($_SESSION['username'])){
        header('Location: /');
        exit();
    }
}

if(isset($_SESSION['lastActivity']) && time() - $_SESSION['lastActivity'] > 60 * 5){
    session_destroy();
    header('Location: /?route=login');
    exit();
} else {
    $_SESSION['lastActivity'] = time();
}