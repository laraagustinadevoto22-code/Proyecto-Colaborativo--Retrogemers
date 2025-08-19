<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  </head>
  <body>
<header>
    <nav class="navbar navbar-expand-lg bg-dark " data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
        <img width="400px" src="img/logo-dual.jpg" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ms-auto">
        <a class="nav-link " aria-current="page" href="index.php">Home</a>
        <a class="nav-link" href="productos.php">Productos</a>
        <a class="nav-link" href="nosotros.php">Nosotros</a>
        <a class="nav-link" href="contacto.php">Contacto</a>
        
      </div>
    </div>
  </div>
</nav>
</header>     

<main>
<div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/gabinete-removebg-preview.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/microposeadores-removebg-preview.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/motherboards-removebg-preview.png" class="d-block w-100" alt="...">
    </div>
  </div>
<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</main>



<footer class="p-5 bg-dark">
    <p class="text-center text-white">todos los derechos reservados 2025- DUAL CORE</p>
</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
  </body>
</html>