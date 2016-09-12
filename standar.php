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
	<title>Autos </title>
	<link rel="shortcut icon" href="imagen/childhood_dream_256.ico">
	<link rel="stylesheet" href="css/site.min.css">

 <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,800,700,400italic,600italic,700italic,800italic,300italic" rel="stylesheet" type="text/css">

<script type="text/javascript" src="js/site.min.js"></script>


<style type="text/css" >
	body{

		background: url(imagen/fondo-web-blanco.jpg)fixed;
	}
	.fondo{
		background: url(imagen/2aj42sy.jpg);
		  position: relative;
        left: 300px;

	}
	.fondo2{

		  position: relative;
        left: 300px;
       
	}
	section{
		padding-bottom: 200px;
	}
	footer{
		padding-top: 500px;

	}
	table{
		font-size: 22px ;
	}
	table td{
		padding-left: 10px;

	}
</style>

<script>
      function validarNombre()
      {
        valor = document.getElementById("nombre").value;
        if( valor == null || valor.length == 0 || /^\s+$/.test(valor) ) {
          alert('Falta Llenar Nombre');
          return false;
        } else { return true;}
      }
      
      function validarUsuario()
      {
        valor = document.getElementById("usuario").value;
        if( valor == null || valor.length == 0 || /^\s+$/.test(valor) ) {
          alert('Falta Llenar Usuario');
          return false;
        } else { return true;}
      }
      
      function validarPassword()
      {
        valor = document.getElementById("password").value;
        if( valor == null || valor.length == 0 || /^\s+$/.test(valor) ) {
          alert('Falta Llenar Password');
          return false;
          } else { 
          valor2 = document.getElementById("con_password").value;
          
          if(valor == valor2) { return true; }
          else { alert('Las contraseña no coinciden'); return false;}
        }
      }
      
      function validarTipoUsuario()
      {
        indice = document.getElementById("tipo_usuario").selectedIndex;
        if( indice == null || indice==0 ) {
          alert('Seleccione tipo de usuario');
          return false;
        } else { return true;}
      }
      
      function validar()
      {
        if(validarNombre() && validarUsuario() && validarPassword() && validarTipoUsuario())
        {
          document.registro.submit();
        }
      }
      
    </script>
</head>
<body>
 <div class="jumbotron-contents">

 <nav class="navbar navbar-default" role="navigation">
                  <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand" href="#">Autos Usados</a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                      <ul class="nav navbar-nav">
                        <li class="active"><a href="log_out.php">Cerrar Session</a></li>
                        <!-- <li class="disabled"><a href="#">Link</a></li> -->
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                          <ul class="dropdown-menu" role="menu">
                            <li class="dropdown-header">Setting</li>
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li class="active"><a href="#">Separated link</a></li>
                            <li class="divider"></li>
                            <li class="disabled"><a href="#">One more separated link</a></li>
                          </ul>
                        </li>
                      </ul>
                      <form class="navbar-form navbar-right" role="search">
                        <div class="form-search search-only">
                          <i class="search-icon glyphicon glyphicon-search"></i>
                          <input type="text" class="form-control search-query">
                        </div>
                      </form>
                    </div><!-- /.navbar-collapse -->
                  </div><!-- /.container-fluid -->
                </nav>

<header id="header" class="">
	<h1><center>Autos Usados</center></h1>
</header><!-- /header -->

<section class="col-md-6">
		<h3>Agregar Autos</h3>
		
            <div class="row">

              <form name="crud" method="post" action="nuevo_exe.php">

            
            <div class="col-md-6">
            <label>Nombre Automovil:</label>
            <input type="text" class="form-control" id="nombre" placeholder="Nombre del auto" name="nombre_auto" />
            </div>
             
             <div class="col-md-6">
             <label>Año del Automovil:</label>
            <input type="text" class="form-control" placeholder="Año del auto" name="ano_auto" />
            </div>
            
            <div class="col-md-6">
            <label>Descripción del Automovil:</label>
            <textarea type="text" class="form-control" rows="3" placeholder="Descripcion del Automovil" name="descripcion_auto" ></textarea>
            </div>
            
            <div class="col-md-6">
            <label>Marca del Automovil:</label>
            <input type="text" class="form-control" placeholder="Marca del auto" name="marca_auto" />
            </div>
            <div class="col-md-2">
            <br>
            <button type="submit" class="btn btn-success btn-block" onClick="validar();">Registrar</button>
            </div>
        </form>   
            </div>
	  


	
		<table class="table">

		<h3><center>Catalogo de Autos Autos</center></h3>
			
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
           <tr  >
					
					<td ><?php echo $value['nombre_auto'];?></td>
					<td ><?php echo $value['ano_auto'];?></td>
					<td ><?php echo $value['descripcion_auto'];?></td>
					<td ><?php echo $value['marca_auto'];?></td>
					<td> <a  class="btn btn-warning btn-block" href="modificar.php?id=<?php echo $value['id_auto']; ?>">Modificar</a> </td>
					<td><a  class="btn btn-danger btn-block" href="eliminar.php?id=<?php echo $value['id_auto']; ?>">Eliminar</a></td>

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



	
</section>
<section class="col-md-6">
<img src="imagen/logo2.png" alt="">
	
</section>

  <div class="row">
          <div class="col-md-12">
            <div class="footer">
              <div class="container">
               
                <div class="footer-copyright text-center">Copyright &copy; 2016 HHVA.All rights reserved.</div>
              </div>
            </div>
          </div>
        </div>
</div>
</body>
</html>
