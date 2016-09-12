<?php 

require 'class/database.php';

$objData = new Database();

$sth = $objData->prepare('SELECT * FROM autos WHERE id_auto = :id_auto');

$id_auto = $_GET['id'];
$sth->bindParam(':id_auto',$id_auto);

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

<div class="contents separador">
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
                    
                     <a href="inicio.php"><button type="submit" class="btn btn-primary navbar-btn">Regresar</button></a>


                    </div>
                  </div>
                </nav>
               
            <div class="row">

            <div class="jumbotron">
            
              <div class="jumbotron-contents">
               
               <div class="example">
       
        <div class="row">
        <div class="panel panel-success">
              <div class="panel-heading">
                <h3 class="panel-title">Modificar Automovil</h3>
              </div>
              <div class="panel-body">

                 <form class="cmxform" id="commentForm" method="post" action="modificar_exe.php">
 
    <div class="col-md-6">
      <label for="cname">Nombre Automovil</label>
      <input id="cname" class="form-control" placeholder="Nombre del auto" name="nombre_auto" type="text" value="<?php echo $result[0]['nombre_auto']; ?>" required>
    </div>
    <div class="col-md-6">
      <label for="cname">Año Automovil</label>
      <input id="cname" class="form-control" placeholder="Año del auto" name="ano_auto" type="text" value="<?php echo $result[0]['ano_auto']; ?>" required>
    </div>
    <div class="col-md-6">
      <label for="cname">Descripcion del Automovil</label>
      <input id="cname" class="form-control" placeholder="Descripcion del Automovil" name="descripcion_auto" value="<?php echo $result[0]['descripcion_auto']; ?>" type="text" required>
    </div>
   <div class="col-md-6">
      <label for="cname">Marca del Automovil</label>
      <select id="cname" class="form-control" placeholder="Marca del auto" name="marca_auto" type="text" required class="selecter_2" data-selecter-options='{"label":"Jump Sites","external":"true"}' required>
       <option ><?php echo $result[0]['marca_auto']; ?></option>
        <option>Nissan</option>
        <option>Chevrolet</option>
        <option>Ford</option>
      </select>
    </div>
    <div class="col-md-2">
    <input type="hidden" name="id" value="<?php echo $result[0]['id_auto']; ?>"/>
    <br>
    <button type="submit" class="btn btn-success btn-block submit">Modificar</button>

    </div>
 
</form>

<script>
$("#commentForm").validate();
</script>
              
              </div>
            </div>
   
          </div>
      </div>
 
            </div>
      
        
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


