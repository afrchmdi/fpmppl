<!-- SIDEBAR -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar" style="height: auto;">

      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-history"></i>
            <span>Riwayat Akun</span>
            <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
            </span>  
          </a>
          <ul class="treeview-menu">
            <li class="treeview">
              <a href="#">
                <i class="fa fa-send"></i>
                <span>Postingan</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="/riwayat.postingan.penemuan"><i class="fa fa-check"></i>Penemuan</a></li>
                <li><a href="/riwayat.postingan.kehilangan"><i class="fa fa-close"></i>Kehilangan</a></li>
              </ul>
            </li>
            <li class="treeview">
                <a href="#">
                  <i class="fa fa-hand-stop-o"></i>
                  <span>Klaim</span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                  <li><a href="/riwayat.klaim.penemuan"><i class="fa fa-check"></i>Penemuan</a></li>
                  <li><a href="/riwayat.klaim.kehilangan"><i class="fa fa-close"></i>Kehilangan</a></li>
                </ul>
              </li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-bullhorn"></i> 
            <span>Daftar Barang</span>
            <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/barang.temuan"><i class="fa fa-calendar-check-o"></i>Temuan</a></li>
            <li><a href="/barang.hilang"><i class="fa fa-calendar-times-o"></i>Hilang</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-mail-reply-all"></i> 
            <span>Laporan Klaim</span>
            <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/laporan.klaim.penemuan"><i class="fa fa-check"></i>Penemuan</a></li>
            <li><a href="/laporan.klaim.kehilangan"><i class="fa fa-close"></i>Kehilangan</a></li>
          </ul>
        </li>
        <li><a href="/ruang.email"><i class="fa fa-envelope-o"></i><span>Ruang Email</span></a></li>
        <!-- kalo admin, maka man akun baru bisa -->
        <?php
          $lalala = "user";
          if($lalala === "admin"){
        ?>
        <li><a href="/manajemen.akun"><i class="fa fa-users"></i><span>Manajemen Akun</span></a></li>
        <?php
          }
        ?>
    </section>

    <!-- /.sidebar -->
</aside>