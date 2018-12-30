<?php
require_once('../database/db.php');
$month = $connection->prepare("SELECT nama_bulan, bulan FROM waktu GROUP BY nama_bulan ORDER BY bulan ASC");
$month->execute();
$months = $month->fetchAll(PDO::FETCH_OBJ);
?>