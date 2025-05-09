<!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Custom background image for the sidebar -->
            <style>
                #accordionSidebar {
                    background: url('img/bg2.jpg') no-repeat center center;
                    background-size: cover;
                }
            </style>

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div>
                    <img src="img/undraw_profile.svg" width="70%" height="70%">
                </div>
                <div class="sidebar-brand-text mx-3">Toko Online</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">
           
            <!-- Heading -->
            <div class="sidebar-heading">
                MENU UTAMA
            </div>

		<!-- Nav Item - Input -->
           <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Input Data</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header"> Data Penjualan</h6>
						<a class="collapse-item" href="formuser.php"> data user</a>
                        <a class="collapse-item" href="formproduk.php">data produk</a>
                        <a class="collapse-item" href="formpenjualan.php"> data penjualan</a>
                        <a class="collapse-item" href="formpelanggan.php"> data pelanggan</a>
						<div class ="collapse-divider"></div>
                    </div>
                </div>
            </li>


            <!-- Nav Item - Laporan Siswa -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Laporan Data</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                         <h6 class="collapse-header">LAPORAN PENJUALAN</h6>
                        <a class="collapse-item" href="lapuser.php">lap data user</a>
						 <a class="collapse-item" href="lapproduk.php">lap data produk</a>
						  <a class="collapse-item" href="lappelanggan.php">lap data pelanggan</a>
						   <a class="collapse-item" href="lappenjualan.php">lap data penjualan</a>
                         <a class="collapse-item" href="MENU 2"</a>
						<div class="collapse-divider"></div>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="rekap_data.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Rekap Seluruh Data</span></a>
				
            </li>

 
            </li>
	
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->