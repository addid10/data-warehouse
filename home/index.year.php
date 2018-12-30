<?php
require_once('../database/db.php');
$year = $connection->prepare("SELECT tahun FROM waktu GROUP BY tahun ORDER BY tahun ASC");
$year->execute();
$years = $year->fetchAll(PDO::FETCH_OBJ);
?>