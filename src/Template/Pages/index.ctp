<?php ?>
	<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    
  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:200px;
      overflow: hidden;
  }

  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
    }
  }
  .navigator{
  	background-color: #664455;
  }
  </style>
</head>
<body>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="img/biblioteca1.jpeg" alt="Image">
        <div class="carousel-caption">
          <h3>LIB-on</h3>
          <p>Sistema de Gerenciamento de bibliotecas, fácil, prático e rápido.</p>
        </div>      
      </div>

      <div class="item">
        <img src="img/biblioteca2.jpeg " alt="Image">
        <div class="carousel-caption">
          <h3>Lib-on</h3>
          <p>Lorem ipsum...</p>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
  
<div class="container text-center" id="equipe">    
  <h3>Equipe de desenvolvimento</h3><br>
  <div class="row">
    <div class="col-sm-4">
      <img src="img/Kaline.jpg" class="img-responsive" style="width:100%" alt="Image" id="integrate">
      <p>Kaline Marculino</p>
    </div>
    <div class="col-sm-4"> 
      <img src="img/Obede.jpg" class="img-responsive" style="width:100%" alt="Image" id="integrate">
      <p>Obede Oliveira </p>    
    </div>
    <div class="col-sm-4"> 
      <img src="img/Odin.jpg" class="img-responsive" style="width:100%" alt="Image" id="integrate">
      <p>Odin santos </p>    
    </div>
    <div class="row">
      <div class="col-sm-4">
        <div class="well">
         <p>Estudante do IFPE</p>
        </div>
        <div class="well">
         <p>Some text..</p>
        </div>
      </div>

      <div class="col-sm-4">
        <div class="well">
         <p>Estudante do IFPE</p>
        </div>
        <div class="well">
         <p>Some text..</p>
        </div>
      </div>

      <div class="col-sm-4">
        <div class="well">
         <p>Estudante do IFPE</p>
        </div>
        <div class="well">
         <p>Some text..</p>
        </div>
      </div>
    </div>
  </div>
</div><br>



<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>
<style type="text/css">
  .img-responsive{
    border-radius:  50%;
    max-width: 400px;
    overflow: hidden;
  }
  p{
    margin: 20px;
    padding: 10px;
    font-family: verdana;
    font-style: normal;
  }
  .carousel-inner > img {
    margin-top: 13px; 
    position: relative;
    width: 100%;
    max-width: 1900px;
    max-width: 1080px;
    height: 20px; 
    overflow: hidden;
    /*border-radius: 50%;*/
}
</style>

</body>
</html>
