<header class="main-header">

    
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Main Menu</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
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
          </li>
        </ul>
      </div>
    </nav>
</header>
