<?php

$pdo = new PDO('mysql:host=localhost;port=3306;dbname=products_crud', 'lemoncube1', 'asdfghjk');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);