<?php 

require 'class/database.php';

$objData = new Database();

$sth = $objData->prepare('DELETE FROM autos WHERE id_auto = :id_auto');

$id_auto = $_GET['id'];

$sth->bindParam(':id_auto',$id_auto);
$sth->execute();

header('location: inicio.php');


 ?>