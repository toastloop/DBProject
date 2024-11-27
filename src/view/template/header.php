<?php namespace App\View\Template; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php if(isset($title)){ echo $title . ' - '; } ?> Database</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <?php
        if (isset($title)) { ?>
        <header>
            <h1><?php echo $title ?></h1>
        </header>
        <?php } ?>
        <?php include_once TEMPLATE_DIR.'nav.php'; ?>
        <main>
