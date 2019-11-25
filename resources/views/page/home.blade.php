{{-- HOME NYA DISINI --}}

<!doctype html>
<html lang="en">
  <head>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="css/home.css" rel="stylesheet">
    <link href="css/form-login.css" rel="stylesheet">
    <!------ Include the above in your HEAD tag ---------->    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>I-Temu</title>
  </head>

  <body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <div class="container">
        <a class="navbar-brand" href="/"><img src="img/logo.png" width="100dp" height="auto"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              {{-- <a class="nav-link" href="dashboard.html">Login</a> --}}
              {{-- <a class="nav-link" data-toggle="modal" data-target="#show-login" class="js-show-login">Login</a> --}}
              <a href="" class="nav-link btn btn-default btn-rounded js-show-login" data-toggle="modal" data-target="#show-login">Sign Up</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header>
        @if(session()->has('successmessage'))
        <div class="alert alert-success">
            {{ session()->get('successmessage') }}
        </div>
        @elseif(session()->has('failmessage'))
        <div class="alert alert-danger">
            {{ session()->get('failmessage') }}
        </div>
        @endif
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
              <p class="lead" style="color: white;">Lakukan klaim dengan informasi yang valid disini.</p>
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
      <a href="/"><img src="img/logo.png" width="400dp" height="auto"></a><br><br>
      <div class="container"> 
        <h2 class="text-center">Layanan I-Temu</h2>
        <p class="text-muted mb-5 text-center">Solusi tepat kehilangan dan penemuan barang!</p>
        <div class="row">
          <div class="col-sm-6 col-lg-6 mb-3">
            <a href="temuan.html">
                <img src="img/lost.png" width="150dp" height="150dp"><br><br>
                <h6>Barang Temuan</h6>
            </a>
            <p class="text-muted">Pantau barang temuan selama ini</p>
          </div>
          <div class="col-sm-6 col-lg-6 mb-3">
            <a href="hilang.html">
                <img src="img/found.png" width="150dp" height="150dp"><br><br>
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
              <img class="card-img-top" src="img/lostandfound1.jpg" width="300dp" height="250dp" alt="Card image cap">
              <div class="card-body text-center">
                <h5 class="card-title">Tepat</h5>
                <p class="card-text">Temukan dan klaim barang Anda dengan informasi yang tepat</p>
              </div>
            </div>
            <div class="card shadow border-0">
              <img class="card-img-top" src="img/lostandfound2.jpg" width="300dp" height="250dp" alt="Card image cap">
              <div class="card-body text-center">
                <h5 class="card-title">Terpercaya</h5>
                <p class="card-text">Informasi yang disediakan kami jamin dapat dipercaya</p>
              </div>
            </div>
            <div class="card shadow border-0">
              <img class="card-img-top" src="img/lostandfound3.jpg" width="300dp" height="250dp" alt="Card image cap">
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
            <img src="img/team1.jpg" class="card-img-top" alt="...">
            {{-- <img src="https://source.unsplash.com/TMgQMXoglsM/500x350" class="card-img-top" alt="..."> --}}
            <div class="card-body text-center">
              <h5 class="card-title mb-0">Rangga Kusuma Dinata</h5>
              <div class="card-text text-black-50">Front-End Developer</div>
            </div>
          </div>
        </div>
        <!-- Team Member 2 -->
        <div class="col-xl-4 col-md-6 mb-4">
          <div class="card border-0 shadow">
            <img src="img/team2.jpg" class="card-img-top" alt="...">
            {{-- <img src="https://source.unsplash.com/9UVmlIb0wJU/500x350" class="card-img-top" alt="..."> --}}
            <div class="card-body text-center">
              <h5 class="card-title mb-0">Aurelia Fairuz Rachmadi</h5>
              <div class="card-text text-black-50">Back-End Developer</div>
            </div>
          </div>
        </div>
        <!-- Team Member 3 -->
        <div class="col-xl-4 col-md-6 mb-4">
          <div class="card border-0 shadow">
            <img src="img/team1.jpg" class="card-img-top" alt="...">
            {{-- <img src="https://source.unsplash.com/sNut2MqSmds/500x350" class="card-img-top" alt="..."> --}}
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
    {{-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdn.linearicons.com/free/1.0.0/svgembedder.min.js"></script> --}}
  </body>

  <!-- Modal -->
  <div class="modal fade" id="show-login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog form-dark" role="document">
      <!--Content-->
      {{-- {{ csrf_field() }} --}}
      <div class="modal-content card card-image" style="background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)), url('img/bg-form-signup.jpg'); background-size:cover; background-repeat:no-repeat; width:auto; height:auto">
        <div class="text-white rgba-stylish-strong py-5 px-5 z-depth-4">
            <div class="row">
                <div class="col-md-12">
                  <!-- Custom Tabs -->
                  <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs row">
                      <li class="active col-md-6" style="text-align:center">
                        <a href="#tab_1" data-toggle="tab">
                          <b>Sign Up</b>
                        </a>
                      </li>
                      <li class="col-md-6" style="text-align:center">
                        <a href="#tab_2" data-toggle="tab"style="text-align:right">
                          <b>Log In</b>
                        </a>
                      </li>
                    </ul>
                    <div class="tab-content">
                      <div class="tab-pane active" id="tab_1">
                        <!--Header-->
                        <div class="modal-header text-center">
                          <h3 class="modal-title w-100 white-text font-weight-bold" style="color:green; text-align:center" id="myModalLabel">
                            <strong>SIGN</strong>
                            <a class="green-text font-weight-bold" style="color:green;"><strong> UP</strong></a>
                          </h3>
                          <button type="button" class="close white-text" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" style="color:white">&times;</span>
                          </button>
                        </div>
                        <!--Body-->
                        <div class="modal-body">
                          {{-- <form action="{{route('login')}}" method="POST"> --}}
                          {{-- <form> --}}
                        <form action="{{route('signup')}}" method="POST">
                            {{ csrf_field() }}
                          <!--Body-->
                          <div class="md-form mb-3">
                            <input type="text" id="name" name="name" class="form-control validate white-text">
                            <label data-error="wrong" data-success="right" for="Form-email5" style="color:white;">Your fullname</label>
                          </div>
                          <div class="md-form mb-3">
                            <input type="email" name="email" id="email" class="form-control validate white-text">
                            <label data-error="wrong" data-success="right" for="Form-email5" style="color:white;">Your email</label>
                          </div>
                          <div class="md-form mb-3">
                            <input type="text" name="username" id="username" class="form-control validate white-text">
                            <label data-error="wrong" data-success="right" for="Form-email5" style="color:white;">Your username</label>
                          </div>
                          <div class="md-form pb-3">
                            <input type="password" name="password" id="password" class="form-control validate white-text">
                            <label data-error="wrong" data-success="right" for="Form-pass5" style="color:white;">Your password</label>
                          </div>
                          <div class="md-form pb-3">
                            <input type="password" name="retype" id="retype" class="form-control validate white-text">
                            <label data-error="wrong" data-success="right" for="Form-pass5" style="color:white;">Retype your password</label>
                            {{-- <div class="form-group mt-4">
                              <input class="form-check-input" type="checkbox" id="checkbox624">
                              <label for="checkbox624" class="white-text form-check-label">Accept the<a href="#" class="green-text font-weight-bold">
                                  Terms and Conditions</a></label>
                            </div> --}}
                            </div>
                          <!--Grid row-->
                          <div class="row d-flex align-items-center mb-4">
                            <!--Grid column-->
                            <div class="text-center mb-3 col-md-12">
                            <button type="submit" class="btn btn-success btn-block btn-rounded z-depth-1">Sign up</button>
                            </div>
                            <!--Grid column-->
                          </div>
                          <!--Grid row-->
                          </form>
                        </div>
                      </div>
                      <!-- /.tab-pane -->
                      <div class="tab-pane" id="tab_2">
                        <!--Header-->
                        <div class="modal-header text-center">
                            <h3 class="modal-title w-100 white-text font-weight-bold" style="color:green; text-align:center" id="myModalLabel">
                              <strong>LOG</strong>
                              <a class="green-text font-weight-bold" style="color:green;"><strong> IN</strong></a>
                            </h3>
                            <button type="button" class="close white-text" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true" style="color:white" style="color:white">&times;</span>
                            </button>
                          </div>
                          <!--Body-->
                          <div class="modal-body">
                            <form action="{{route('login')}}" method="POST">
                              {{ csrf_field() }}
                            <!--Body-->
                            <div class="md-form mb-3">
                              <input type="email" id="email" name="email" class="form-control validate white-text">
                              <label data-error="wrong" data-success="right" for="Form-email5" style="color:white;">Your emaiiil</label>
                            </div>
                            <div class="md-form pb-3">
                              <input name="password" type="password" id="Form-pass" class="form-control validate white-text">
                              <label data-error="wrong" data-success="right" for="Form-pass5" style="color:white;">Your password</label>
                              {{-- <div class="form-group mt-4">
                                <input class="form-check-input" type="checkbox" id="checkbox624">
                                <label for="checkbox624" class="white-text form-check-label">Accept the<a href="#" class="green-text font-weight-bold">
                                    Terms and Conditions</a></label>
                              </div> --}}
                            <!--Grid row-->
                            <div class="row d-flex align-items-center mb-4">
                              <!--Grid column-->
                              <div class="text-center mb-3 col-md-12">
                                {{-- <a href="/login"><button type="button" class="btn btn-success btn-block btn-rounded z-depth-1">Log in</button></a> --}}
                                <button type="submit" class="btn btn-success btn-block btn-rounded z-depth-1">Log in</button>
                              </div>
                              <!--Grid column-->
                            </div>
                            <!--Grid row-->
                            </form>
                          </div>
                      </div>
                    </div>
                    <!-- /.tab-content -->
                  </div>
                  <!-- nav-tabs-custom -->
                </div>
                <!-- /.col -->
              </div>
      </div>
  </div>
  <!--/.Content-->
  </div>
</div>
<!-- Modal -->

</html>