<?php

namespace App\Controller;

class Session {
    public static function getUsersFromFile($filename) {
        $file = fopen($filename, 'r');
        $users = [];
        while (!feof($file)) {
            $line = fgets($file);
            $userData = explode(',', $line);
            if (count($userData) == 2) {
                $users[$userData[0]] = $userData[1];
            }
        }
        fclose($file);
        return $users;
    }
    public static function login() {
        $title = 'Login';
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $users = self::getUsersFromFile(DATA_DIR.'users.csv');
            if (isset($users[$_POST['username']]) && $users[$_POST['username']] == $_POST['password']) {
                $_SESSION['username'] = $_POST['username'];
                header('Location: /');
            }
            else {
                $error = 'Invalid username or password';
                include_once TEMPLATE_DIR.'header.php';
                include_once VIEW_DIR.'login.php';
                include_once TEMPLATE_DIR.'footer.php';
            }
        }
        else {
            include_once TEMPLATE_DIR.'header.php';
            include_once VIEW_DIR.'login.php';
            include_once TEMPLATE_DIR.'footer.php';
        }
    }
    public static function logout() {
        if (isset($_SESSION['username'])) {
            session_destroy();
            header('Location: /');
        }
        else {
            header('Location: /');
        }
    }
}