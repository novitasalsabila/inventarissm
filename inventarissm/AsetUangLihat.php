<?php
include ('config.php');
include ('formatwaktu.php');
?>

<!DOCTYPE html>
<html lang="en">



<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Aset</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Admin Aset</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="dasboard.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
                    aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Aset 1</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Components:</h6>
                        <a class="collapse-item" href="AKBergerakTampil.php">Aset Benda Bergerak</a>
                        <a class="collapse-item" href="AKTidakBergerak.php">Aset Benda Tidak Bergerak</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Aset 2</span>
                </a>
                <div id="collapseUtilities" class="collapse show" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Utilities:</h6>
                        <a class="collapse-item active" href="AsetUangLihat.php">Aset Uang</a>
                        <a class="collapse-item" href="AsetTanahLihat.php">Aset Tanah</a>
                        <!-- <a class="collapse-item" href="utilities-animation.html">Animations</a>
                        <a class="collapse-item" href="utilities-other.html">Other</a> -->
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container">
		<div class="col-lg-12">
			<div class="page-header">
                <?php
					$sql_tampil = "SELECT * FROM tb_asettotal";
					$query_tampil = mysqli_query($koneksi, $sql_tampil);
					$data = mysqli_fetch_array($query_tampil,MYSQLI_BOTH)
				?>
                <?php  
	                 $total = $data['nominalakhir'];
                     $date = $data['tanggalperubahan'];
                     //$tgl=$date.date('Y-m-d');
                ?>
				<h2>Data Uang
					<a href="AsetUangAdd.php" class="btn btn-success">Tambah Data Masuk</a>
                    <a href="AsetUangKeluarAdd.php" class="btn btn-success">Tambah Data Keluar</a>
                    <a href="exportdata/exportpdfAsetUangMasuk.php" target="_blank" class="btn btn-success"><i class="fa fa-file-pdf-o"></i>Print Data Masuk</a>
                    <a href="exportdata/exportpdfAsetUangKeluar.php" target="_blank" class="btn btn-success"><i class="fa fa-file-pdf-o"></i>Print Data Keluar</a>
				</h2>
                <br>
                <h3> <?php echo "Waktu Perubahan : ".format_hari_tanggal($date); ?></h3>
                <tr>
                <h3> Saldo : <?php echo "Rp. " . number_format($total, 0, ".", "."); ?></h3>
			</div>
			<br>
            <br>
            <h5> Data Masuk </h5>
			<div>
				<!-- <table class="table table-bordered table-striped"> -->
                <table id="myTable" class="table table-striped">
					<thead>
						<tr>
							<th>ID</th>
							<th>Nominal</th>
							<th>Tanggal Masuk</th>
							<th>Status</th>
							<th>Nama Donatur</th>
							<th>AKSI</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$sql_tampil = "SELECT * FROM tb_asetuang";
							$query_tampil = mysqli_query($koneksi, $sql_tampil);
							$no=1;
							while ($data = mysqli_fetch_array($query_tampil,MYSQLI_BOTH)) {
						?>
                        <?php  
	                    $angka = $data['nominal'];
                        $tgl = date('d-m-Y', strtotime($data['tanggal']));
                        ?>

						<tr>
							<td>
								<?php echo $data['id']; ?>
							</td>
							<td>
								<?php echo "Rp. " . number_format($angka, 0, ".", "."); ?>
							</td>
							<td>
								<?php echo $tgl; ?>
							</td>
							<td>
								<?php echo $data['status']; ?>
							</td>
                            <td>
								<?php echo $data['namadonatur']; ?>
							</td>
							<!-- <td>
								<img src="function/AsetKendaraanBergerak/foto/<?php echo $data['foto']; ?>" width="70px" />
							</td> -->


							<td>
								<a href="AsetUangEdit.php?kode=<?php echo $data['id']; ?>" class='btn btn-warning btn-sm'>Ubah</a>
								<a href="AsetUangDelete.php?kode=<?php echo $data['id']; ?>" onclick="return confirm('Hapus Data Ini ?')"
								 class='btn btn-danger btn-sm'>Hapus</a>
							</td>
						</tr>
						<?php
							$no++;
							}
						?>
					</tbody>

                    
				</table>

			</div>
            <br>
            
            <h5> Data Keluar </h5>
            <div>
				<!-- <table class="table table-bordered table-striped"> -->
                <table id="myTable2" class="table table-striped">
					<thead>
						<tr>
							<th>ID</th>
							<th>Nominal</th>
							<th>Tanggal Keluar</th>
							<th>Peruntukan</th>
							<th>Keterangan</th>
							<th>AKSI</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$sql_tampil = "SELECT * FROM tb_asetuangkeluar";
							$query_tampil = mysqli_query($koneksi, $sql_tampil);
							$no=1;
							while ($data = mysqli_fetch_array($query_tampil,MYSQLI_BOTH)) {
						?>
                        <?php  
	                    $angka = $data['nominalkeluar'];
                        $tgl = date('d-m-Y', strtotime($data['tanggalkeluar']));
                        ?>

						<tr>
							<td>
								<?php echo $data['id']; ?>
							</td>
							<td>
								<?php echo "Rp. " . number_format($angka, 0, ".", "."); ?>
							</td>
							<td>
								<?php echo $tgl; ?>
							</td>
							<td>
								<?php echo $data['tujuan']; ?>
							</td>
                            <td>
								<?php echo $data['keterangan']; ?>
							</td>
							<!-- <td>
								<img src="function/AsetKendaraanBergerak/foto/<?php echo $data['foto']; ?>" width="70px" />
							</td> -->


							<td>
								<a href="AsetUangKeluarEdit.php?kode=<?php echo $data['id']; ?>" class='btn btn-warning btn-sm'>Ubah</a>
								<a href="AsetUangKeluarDelete.php?kode=<?php echo $data['id']; ?>" onclick="return confirm('Hapus Data Ini ?')"
								 class='btn btn-danger btn-sm'>Hapus</a>
							</td>
						</tr>
						<?php
							$no++;
							}
						?>
					</tbody>

                    
				</table>

			</div>
		</div>
	</div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="index.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="js/pagination.js"></script>
<script type="text/javascript" src="js/pagination2.js"></script>


</body>

</html>