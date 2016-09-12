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
                      <a href="#ex1" rel="modal:open"><button type="button" class="btn btn-danger navbar-btn"><i class="glyphicon glyphicon-user"></i> Sign in</button></a>
                    </div>
                  </div>
                </nav>
<section >
            <div class="row">

            <div class="jumbotron">
              <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="item active"><img src="img/slider1.jpg"></div>
                  <div class="item"><img src="img/slider2.jpg"></div>
                  <div class="item"><img src="img/slider3.jpg"></div>
                </div>
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
              </div>
              <div class="jumbotron-contents">
               
               <div class="example">
        
        <div class="row">
            <div class="col-sm-6 col-md-3">
              <div class="thumbnail">
                <img class="img-rounded" src="img/Autos-usados-en-México.jpg" >
                <div class="caption text-center">
                  <h3>Thumbnail label</h3>
                  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id ...</p>
                  <p> <a href="#ex2" rel="modal:open" class="btn btn-default" role="button">Ver Detalle</a></p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3">
              <div class="thumbnail">
                <img class="img-rounded" src="img/Autos-usados-en-México.jpg">
                <div class="caption text-center">
                  <h3>Thumbnail label</h3>
                  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id ...</p>
                 <p> <a href="#ex2" rel="modal:open" class="btn btn-default" role="button">Ver Detalle</a></p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3">
              <div class="thumbnail">
                <img class="img-rounded" src="img/Autos-usados-en-México.jpg">
                <div class="caption text-center">
                  <h3>Thumbnail label</h3>
                  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id ...</p>
                  <p> <a href="#ex2" rel="modal:open" class="btn btn-default" role="button">Ver Detalle</a></p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3">
              <div class="thumbnail">
                <img class="img-rounded" src="img/Autos-usados-en-México.jpg">
                <div class="caption text-center">
                  <h3>Thumbnail label</h3>
                  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id ...</p>
                  <p> <a href="#ex2" rel="modal:open" class="btn btn-default" role="button">Ver Detalle</a></p>
                </div>
              </div>
            </div>
          </div>
      </div>

             <div class="example">
      
        <div class="row">
            <div class="col-sm-6 col-md-3">
              <div class="thumbnail">
                <img class="img-rounded" src="img/Autos-usados-en-México.jpg" >
                <div class="caption text-center">
                  <h3>Thumbnail label</h3>
                  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id ...</p>
                  <p> <a href="#ex2" rel="modal:open" class="btn btn-default" role="button">Ver Detalle</a></p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3">
              <div class="thumbnail">
                <img class="img-rounded" src="img/Autos-usados-en-México.jpg">
                <div class="caption text-center">
                  <h3>Thumbnail label</h3>
                  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id ...</p>
                  <p> <a href="#ex2" rel="modal:open" class="btn btn-default" role="button">Ver Detalle</a></p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3">
              <div class="thumbnail">
                <img class="img-rounded" src="img/Autos-usados-en-México.jpg">
                <div class="caption text-center">
                  <h3>Thumbnail label</h3>
                  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id ...</p>
                  <p> <a href="#ex2" rel="modal:open" class="btn btn-default" role="button">Ver Detalle</a></p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3">
              <div class="thumbnail">
                <img class="img-rounded" src="img/Autos-usados-en-México.jpg">
                <div class="caption text-center">
                  <h3>Thumbnail label</h3>
                  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id ...</p>
                  <p> <a href="#ex2" rel="modal:open" class="btn btn-default" role="button">Ver Detalle</a></p>
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




   </div>
</section>
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


         <div id="ex1" style="display:none;">
       <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title"><i class="glyphicon glyphicon-user"></i> Iniciar Session</h3>

              </div>
              <div class="panel-body">
                <form class="cmxform" id="commentForm" method="post" action="session_init.php" name="user">
 
    <div class="col-md-6">
      <label for="cname">Usuario</label>
      <input id="cname"  placeholder="Nombre del auto" class="form-control" name="usern" type="text"  required>
  
   
    <br>
      <label for="cname">Password</label>
      <input id="cname"  placeholder="Año del auto" class="form-control" name="passwd" type="password" required>
 
    <br>
    <button type="submit"  name="enter" class="btn btn-success btn-block submit">Ingresar</button>

    </div>
 
</form>
<script>
$("#commentForm").validate();
</script>
              </div>
            </div>


  </div>
  <div id="ex2" style="display:none;">
       <div class="panel panel-primary">
              <div class="panel-heading">
                

              </div>
              <div class="panel-body">
               <div class="thumbnail">
                <img class="img-rounded" src="img/Autos-usados-en-México.jpg" >
                <div class="caption text-center">
                  <h3>Thumbnail label</h3>
                  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id ...

                  <p> <a href="#ex2" rel="modal:open" class="btn btn-default" role="button">Comprar</a></p>
                  </p>
                  
                </div>
              </div>
              </div>
            </div>


  </div>

</body>
</html>
