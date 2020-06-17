<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="style.css" type="text/css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello!</title>
  </head>
  <body>
    
	<?php require_once 'nav.php'; ?>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/img1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/img2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/img3.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<section class="my-5">
<div class="py-5">
<h2 class="text-center">About Us</h2>
</div>

<div class="container-fluid">
<div class="row">
<div class="col-lg-6 col-md-6 col-12">
<img src="images/img4.jpg" class="img-fluid aboutimg">
</div>
<div class="col-lg-6 col-md-6 col-12">
<h2 class="display-4">Get Set Fit</h2>
<p class="py-3">The website is for those people who want a healthy,bulky,muscular and energetic body.The website is designed to make our members aware of 
the most useful health and fitness tips regularly..</p>
<a href="https://youtu.be/hnf9VTBc_Dk" target="_blank" class="btn btn-success">Know More</a>
</div>
</div>
</div>
</section>


<section class="my-5">
<div class="py-5">
<h2 class="text-center">Our Services</h2>
</div>

<div class="container-fluid">
<div class="row">
<div class="col-lg-4 col-md-4 col-12">
<div class="card">
  <img class="card-img-top" src="images/img5.jpg" alt="Card image cap">
  <div class="card-body">
    <h4 class="card-title">Weight Gain</h4>
    <p class="card-text">Contact or register yourself so that we can help you at best.</p>
    <a href="https://www.healthline.com/nutrition/how-to-gain-weight" target="_blank" class="btn btn-primary">Know More</a>
  </div>
</div>
</div>

<div class="col-lg-4 col-md-4 col-12">
<div class="card">
  <img class="card-img-top" src="images/img6.jpg" alt="Card image cap">
  <div class="card-body">
    <h4 class="card-title">Shape up</h4>
    <p class="card-text">Shape your body...we are always there to help you</p>
    <a href="https://www.healthandfitnesstravel.com.au/blog/simple-ways-to-keep-your-body-in-good-shape" target="_blank" class="btn btn-primary">Know More</a>
  </div>
</div>
</div>

<div class="col-lg-4 col-md-4 col-12">
<div class="card">
  <img class="card-img-top" src="images/img7.jpg" alt="Card image cap">
  <div class="card-body">
    <h4 class="card-title">Fitness schemes</h4>
    <p class="card-text">Our main motive is to make you fit and energetic..</p>
    <a href="https://www.fit.nl/fitnessschema" target="_blank" class="btn btn-primary">Know More</a>
  </div>
</div>
</div>
</div>
</div>
</section>

<style>
.embed-container { 
position: relative;
 padding-bottom: 56.25%; 
 height: 0;
 overflow: hidden;
 max-width: 100%;
 }
 .embed-container iframe, .embed-container object, .embed-container embed {
	 position: absolute;
	 width: 70%;
	 height: 90%;
	margin-left:50px;
 }
</style>
<div class='embed-container'><iframe src='https://www.youtube.com/embed//UBMk30rjy0o' frameborder='0'></iframe></div>

<div>
<center>
<h2 class="www">Register here for free!!</h2><br>
<a href="register.php" class="btn btn-warning">Register</a>
</center>
</div>

<footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; Get Set Fit 2020</p>
                </div>
            </div>
        </div>
    </footer>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>