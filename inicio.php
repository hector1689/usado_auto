<?php 
require 'class/database.php';
$objData = new Database();

$sth = $objData->prepare('SELECT * FROM autos');

$sth->execute();
$result = $sth->fetchAll();



 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>HHVA AUTOS</title>
  <link rel="shortcut icon" href="imagen/childhood_dream_256.ico">
  <link rel="stylesheet" href="css/site.min.css">
<link rel="stylesheet" href="css/jquery.modal.css">
<link rel="stylesheet" href="css/estilo.css">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,800,700,400italic,600italic,700italic,800italic,300italic" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/site.min.js"></script>
<script src="js/jquery.modal.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" >
  function CerrarSession()
{
  if (window.confirm('Desea Cerrar Session?'))
    window.location='log_out.php';
  else
    window.alert('Usted Sigue en Session');
}
</script>

</head>
<body>

<div class="contents ">
  <nav class="navbar navbar-inverse" role="navigation">
                  <div class="container-fluid">
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-8">
                        <span class="sr-only">HHVA AUTOS</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand" href="#">HHVA AUTOS</a>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-8">
                     <a href="javascript:CerrarSession()"><button type="button" class="btn btn-danger navbar-btn"><i class="glyphicon glyphicon-user"></i> Cerrar Session</button></a>
                    </div>
                  </div>
                </nav>

            <div class="row separador">

            <div class="jumbotron">
            
              <div class="jumbotron-contents">
               
               <div class="example">
       
        <div class="row">
        <a href="#ex1" rel="modal:open"><button type="button" class="btn btn-success navbar-btn"><i class="glyphicon glyphicon-user"></i> Agregar Automvil</button></a>
         <div class="panel panel-warning">
              <div class="panel-heading">
                <h3 class="panel-title">Catalogo de Autos Autos</h3>
              </div>
              <div class="panel-body">
                <table class="table">
        <tr >

          <td >Nombre</td>
          <td >Año</td>
          <td >Descripcion</td>
          <td >Marca</td>
          <td colspan="2">Acciones</td>
        </tr>
       <?php
            
            if($result){
                foreach ($result as $key => $value) {?>
           <tr>
          
          <td ><?php echo $value['nombre_auto'];?></td>
          <td ><?php echo $value['ano_auto'];?></td>
          <td ><?php echo $value['descripcion_auto'];?></td>
          <td ><?php echo $value['marca_auto'];?></td>
          <td> <a  class="btn btn-warning btn-block" onclick="if(confirm('Esta seguro de Modificar?') == false){return false;}" href="modificar.php?id=<?php echo $value['id_auto']; ?>">Modificar</a> </td>
          <td><a  class="btn btn-danger btn-block" onclick="if(confirm('Esta seguro de Eliminar?') == false){return false;}" href="eliminar.php?id=<?php echo $value['id_auto']; ?>">Eliminar</a></td>

        </tr>
            <?php
                
            }
            
                
            }else{?>
            <tr>
                <td colspan="4" class="toast-label color-white">No hay registros para mostrar</td>
            </tr><?php
                
            }
            ?>


    
    </table>

              </div>
            </div>
          </div>
      </div>
 
            </div>
      
        
        </div>
        </div>


              </div>
            </div>




   </div>
<div id="ex1" style="display:none;">
 <div class="panel panel-success">
              <div class="panel-heading">
                <h3 class="panel-title">Agregar Automovil</h3>
              </div>
              <div class="panel-body">
                <form class="cmxform" id="commentForm" method="post" action="nuevo_exe.php">
 
    <div class="col-md-6">
      <label for="cname">Nombre Automovil</label>
      <br>
      <input id="cname" class="form-control" placeholder="Nombre del auto" name="nombre_auto" type="text" required>
    <br>
      <label for="cname">Año Automovil</label>
      <br>
      <input id="cname" class="form-control" placeholder="Año del auto" name="ano_auto" type="text" required>
    <br>
      <label for="cname">Descripcion del Automovil</label>
      <br>
      <input id="cname" class="form-control"  placeholder="Descripcion del Automovil" name="descripcion_auto"  type="text" required>
    <br>
      <label for="cname">Marca del Automovil</label>
      <br>
       <select id="cname" class="form-control" placeholder="Marca del auto" name="marca_auto" type="text" required class="selecter_2" data-selecter-options='{"label":"Jump Sites","external":"true"}'>
       <option ></option>
        <option>Nissan</option>
        <option>Chevrolet</option>
        <option>Ford</option>
      </select>
   <br>
    <br>
    <button type="submit" class="btn btn-success btn-block submit">Registrar</button>

    </div>
 
</form>
<script>
$("#commentForm").validate();
</script>

              </div>
            </div>
   
</div>



 <div class="example">
       
        <div class="row">
          <div >
            <div class="footer">
              <div class="container">
                <div class="clearfix">
                  <div class="footer-logo"><a href="#"><img src="img/footer-logo.png" />HHVA AUTOS</a></div>
                  
                </div>
                <div class="footer-copyright text-center">Copyright &copy; 2016 HHVA AUTOS.All rights reserved.</div>
              </div>
            </div>
          </div>
        </div>
      </div>
</body>
</html>
