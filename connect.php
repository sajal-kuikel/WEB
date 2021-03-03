<?php
    $server = '127.0.0.1';
    $username = 'root';
    $password = '';
    require 'functions.php';
    //The name of the schema we created earlier in MySQL workbench
    $schema = 'message_demo';

    $pdo = new PDO('mysql:dbname=' . $schema . ';host=' . $server, $username, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

?>