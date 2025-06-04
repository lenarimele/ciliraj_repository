<?php
include 'povezava_na_bazo.php';

$queryAll = "SELECT * FROM narocnik";

$stmt = $conn->prepare($queryAll);
$stmt -> execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach($rows as $izpis){
    include 'vzorec.php';
}

$conn=null;
?>