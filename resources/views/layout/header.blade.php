<header class="main-header">
  <!-- Logo -->
  <a href="/dashboard" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>I</b>-TM</span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>I</b>-TEMU</span>
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only">Main Menu</span>
    </a>
    <!-- Navbar Right Menu -->
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <!-- User Account: style can be found in dropdown.less -->
        <li id="dd" class="dropdown user user-menu" onclick="document.getElementById('dd').className += ' open'">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="img/team1.jpg" class="user-image" alt="User Image" style="object-fit:cover">
          <span class="hidden-xs">{{Auth::user()->username}}</span>
          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
              <img src="img/team1.jpg" class="img-circle" alt="User Image" style="object-fit:cover">
              <p>{{Auth::user()->nama}}</p>
            </li>
            <!-- Menu Body -->
            <li class="user-body">
              <div class="row">
                <div class="col-xs-6 text-center">
                  <a href="/edit.password">Ubah Password</a>
                </div>
                <!-- <div class="col-xs-4 text-center">
                  <a href="#">Sales</a>
                </div> -->
                <div class="col-xs-6 text-center">
                  <a href="#">Bantuan</a>
                </div>
              </div>
              <!-- /.row -->
            </li>
            <!-- Menu Footer-->
            <li class="user-footer">
              <div class="pull-left">
                <a href="/profil" class="btn btn-info">Profil</a>
              </div>
              <div class="pull-right">
                <a href="/logout" class="btn btn-danger">Log out</a>
              </div>
            </li>
          </ul>
        </li>
<!-- 
        <li>
          <a href="/profil">
            <i class="fa fa-user"></i> Profil
          </a>
        </li>
        <li>
          <a href="/ubah-password">
            <i class="fa fa-edit"></i> Ubah Password
          </a>
        </li>
        <li>
          <a href="bantuan.pdf">
            <i class="fa fa-question-circle"></i> Bantuan
          </a>
        </li>
        <li>
            {{-- <a href="logout.php"> --}}
            <a href="{{('/logout')}}">
              <i class="fa fa-sign-out"></i> Logout
            </a>
        </li> -->
      </ul>
    </div>
  </nav>
</header>
