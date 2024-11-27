<?php
namespace App\Controller;

class Home {
    public static function render() {
        $title = "Home";
        include_once TEMPLATE_DIR.'header.php';
        echo "Home";
        include_once TEMPLATE_DIR.'footer.php';
    }
}
