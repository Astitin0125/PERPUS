<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?= base_url()?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Astitin Januarti</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
     
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            </span>
          </a>
        </li>
				
				<li><a href="<?= base_url()?>anggota"><i class="fa  fa-user"></i> Anggota</a></li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-desktop"></i>
            <span>Master Buku</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">5</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Judul</a></li>
            <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Penulis</a></li>
            <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Penerbit</a></li>
		        <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Tahun Terbit</a></li>
						<li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> ISBN</a></li>
          </ul>
        </li>

				<hr>
				<li><a href="<?= base_url()?>login/logout"><i class="fa  fa-sign-out"></i> Logout</a></li>
         </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
