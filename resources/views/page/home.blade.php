{{-- HOME NYA DISINI --}}

<!doctype html>
<html lang="en">
  <head>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="css/home.css" rel="stylesheet">
    <!------ Include the above in your HEAD tag ---------->    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link type="image/png" rel="shortcut icon" href="images/favicon.png">
    <title>I-Temu</title>
  </head>

  <body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <div class="container">
        <a class="navbar-brand" href="home.html"><img src="images/logo.png" width="100dp" height="auto"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="dashboard.html">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.its.ac.id%2Fwp-content%2Fuploads%2F2017%2F08%2FGambar2111-1.jpg&f=1&nofb=1')">
            <div class="carousel-caption d-none d-md-block">
              <h2 class="display-4" style="color: black;">I-Temu - Penemuan</h2>
              <p class="lead" style="color: black;">Penemuan barang di ITS dapat diakses disini.</p>
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('https://images.unsplash.com/photo-1525383734057-57832c535c9b?ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80')">
            <div class="carousel-caption d-none d-md-block">
              <h2 class="display-4" style="color: black;">I-Temu - Kehilangan</h2>
              <p class="lead" style="color: black;">Kehilangan barang di ITS dapat dicari disini.</p>
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('https://images.unsplash.com/photo-1531190260877-c8d11eb5afaf?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1500&q=80')">
            <div class="carousel-caption d-none d-md-block">
              <h2 class="display-4" style="color: black;">I-Temu - Klaim</h2>
              <p class="lead" style="color: black;">Lakukan klaim dengan informasi yang valid disini.</p>
            </div>
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
    </header>

    <!-- Page Content -->
    <section class="py-5 text-center">
      <a href="home.html"><img src="images/logo.png" width="400dp" height="auto"></a><br><br>
      <div class="container"> 
        <h2 class="text-center">Layanan I-Temu</h2>
        <p class="text-muted mb-5 text-center">Solusi tepat kehilangan dan penemuan barang!</p>
        <div class="row">
          <div class="col-sm-6 col-lg-6 mb-3">
            <a href="temuan.html">
                <img src="images/lost.png" width="150dp" height="150dp"><br><br>
                <h6>Barang Temuan</h6>
            </a>
            <p class="text-muted">Pantau barang temuan selama ini</p>
          </div>
          <div class="col-sm-6 col-lg-6 mb-3">
            <a href="hilang.html">
                <img src="images/found.png" width="150dp" height="150dp"><br><br>
                <h6>Barang Hilang</h6>
            </a>
            <p class="text-muted">Pasang informasi mengenai barang hilang</p>
          </div>
        </div>
      </div>
    </section>
    
    <section class="main">
      <div class="container mt-4">
        <h1 class="text-center mb-4 p-4">Keunggulan</h1>
        <div class="row">
          <div class="card-columns">
            <div class="card shadow border-0">
              <img class="card-img-top" src="images/lostandfound1.jpg" width="300dp" height="250dp" alt="Card image cap">
              <div class="card-body text-center">
                <h5 class="card-title">Tepat</h5>
                <p class="card-text">Temukan dan klaim barang Anda dengan informasi yang tepat</p>
              </div>
            </div>
            <div class="card shadow border-0">
              <img class="card-img-top" src="images/lostandfound2.jpg" width="300dp" height="250dp" alt="Card image cap">
              <div class="card-body text-center">
                <h5 class="card-title">Terpercaya</h5>
                <p class="card-text">Informasi yang disediakan kami jamin dapat dipercaya</p>
              </div>
            </div>
            <div class="card shadow border-0">
              <img class="card-img-top" src="images/lostandfound3.jpg" width="300dp" height="250dp" alt="Card image cap">
              <div class="card-body text-center">
                <h5 class="card-title">Cepat</h5>
                <p class="card-text">Informasi barang dapat diupdate secara real-time</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
   
   <!-- Header -->
    <header class="text-center py-5 mb-4" id="team">
      <div class="container">
        <h1 class="font-weight-light text-white">Meet the Team</h1>
      </div>
    </header>

    <!-- Page Content -->
    <div class="container">
      <div class="row">
        <!-- Team Member 1 -->
        <div class="col-xl-4 col-md-6 mb-4">
          <div class="card border-0 shadow">
            <img src="https://source.unsplash.com/TMgQMXoglsM/500x350" class="card-img-top" alt="...">
            <div class="card-body text-center">
              <h5 class="card-title mb-0">Rangga Kusuma Dinata</h5>
              <div class="card-text text-black-50">Front-End Developer</div>
            </div>
          </div>
        </div>
        <!-- Team Member 2 -->
        <div class="col-xl-4 col-md-6 mb-4">
          <div class="card border-0 shadow">
            <img src="https://source.unsplash.com/9UVmlIb0wJU/500x350" class="card-img-top" alt="...">
            <div class="card-body text-center">
              <h5 class="card-title mb-0">Aurelia Fairuz Rachmadi</h5>
              <div class="card-text text-black-50">Back-End Developer</div>
            </div>
          </div>
        </div>
        <!-- Team Member 3 -->
        <div class="col-xl-4 col-md-6 mb-4">
          <div class="card border-0 shadow">
            <img src="https://source.unsplash.com/sNut2MqSmds/500x350" class="card-img-top" alt="...">
            <div class="card-body text-center">
              <h5 class="card-title mb-0">Ismail Arifin</h5>
              <div class="card-text text-black-50">Database Engineer</div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdn.linearicons.com/free/1.0.0/svgembedder.min.js"></script>
  </body>
</html>