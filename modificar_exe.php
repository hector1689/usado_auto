<?php 

require 'class/database.php';

$objData = new Database();

$sth = $objData->prepare('UPDATE autos set nombre_auto = :nombre_auto , ano_auto = :ano_auto, descripcion_auto = :descripcion_auto , marca_auto = :marca_auto where id_auto = :id_auto');

$id_auto = $_POST['id'];
$nombre_auto = $_POST['nombre_auto'];
$ano_auto = $_POST['ano_auto'];
$descripcion_auto = $_POST['descripcion_auto'];
$marca_auto = $_POST['marca_auto'];

$sth->bindParam(':id_auto',$id_auto);
$sth->bindParam(':nombre_auto',$nombre_auto);
$sth->bindParam(':ano_auto',$ano_auto);
$sth->bindParam(':descripcion_auto',$descripcion_auto);
$sth->bindParam(':marca_auto',$marca_auto);

$sth->execute();

header('location:inicio.php');


 ?>