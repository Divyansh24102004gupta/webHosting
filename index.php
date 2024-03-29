<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="CSSsite/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>

<?php  include'nav.php'; ?>

<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="divs.jpg" alt="Los Angeles"  width="100%" height="500">
    </div>
    <div class="carousel-item">
      <img src="divs.jpg" alt="Chicago" width="100%" height="500">
    </div>
    <div class="carousel-item">
      <img src="divs.jpg" alt="New York" width="100%" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center">About us</h2>
        </div>
        <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                <img src="divs.jpg" class="img-fluid aboutimg" height = "5%">
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <h2 class="display-4">I am Divyanshu Gupta</h2>
                <p class="py-4"> I was born in Mathura, India. I am currently studying in Indian Institute of Technology, Patna.
                    My aim is to be a Engineer.This is all about me.Also share your vies on this website through
                    the below form.
                </p>
                <a href="about.php"class=" btn btn-success">Wanna to know me</a>
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
                <div class="card" style="width:400px">
                <img class="card-img-top" src="divs.jpg" alt="Card image">
                <div class="card-body">
                    <h4 class="card-title">Divyanshu Gupta</h4>
                    <p class="card-text">Some example text.</p>
                    <a href="#" class="btn btn-primary">See Profile</a>
                </div>
                </div>
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                <div class="card" style="width:400px">
                <img class="card-img-top" src="divs.jpg" alt="Card image">
                <div class="card-body">
                    <h4 class="card-title">Divyanshu Gupta</h4>
                    <p class="card-text">Some example text.</p>
                    <a href="#" class="btn btn-primary">See Profile</a>
                </div>
                </div>
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                <div class="card" style="width:400px">
                <img class="card-img-top" src="divs.jpg" alt="Card image">
                <div class="card-body">
                    <h4 class="card-title">Divyanshu Gupta</h4>
                    <p class="card-text">Some example text.</p>
                    <a href="index.php" class="btn btn-primary">See Profile</a>
                </div>
                </div>
                </div>
            </div>
        </div>
    </section>
    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center">Our Gallery</h2>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="divs.jpg" class="img-fluid py-3">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="divs.jpg" class="img-fluid py-3">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="divs.jpg" class="img-fluid py-3">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="divs.jpg" class="img-fluid py-3">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="divs.jpg" class="img-fluid py-3">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="divs.jpg" class="img-fluid py-3">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="divs.jpg" class="img-fluid py-3">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="divs.jpg" class="img-fluid py-3">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="divs.jpg" class="img-fluid py-3">
                </div>
            </div>
        </div>
    </section>

    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center">Application Form</h2>
        </div>
        <div class="w-50 m-auto">
            <form action="userinfo.php" method="post">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="user" autocomplete="off" class="form-control">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" autocomplete="off" class="form-control">
                </div>
                <div class="form-group">
                    <label>Mobile no.</label>
                    <input type="text" name="mobile" autocomplete="off" class="form-control">
                </div>
                <div class="form-group">
                    <label>Comments</label>
                    <textarea class="form-control" name="comment"></textarea>
                    <button type="submit" class="btn btn-success my-4">Submit</button>
                </div>
            </form>
        </div>
    </section>

    <footer>
        <p class="text-center p-3 bg-dark text-white">divyanshu@gmail.com</p>
    </footer>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>