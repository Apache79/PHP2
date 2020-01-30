<?php
include 'PDO.php';

$stm = $db->prepare("SELECT * FROM `goods` LIMIT 25");
$stm->execute();

$allGoods = $stm->fetchAll();