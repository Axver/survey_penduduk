<?php

if(isset($_SESSION['username']))
{

}
else
{
	header('Location:'.base_url());
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Dashboard Data Admin</title>

	<!-- Custom fonts for this template-->
	<link href="<?= base_url('dashboard_asstes/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

	<!-- Custom styles for this template-->
	<link href="<?= base_url('dashboard_assets/css/sb-admin-2.min.css') ?>" rel="stylesheet">

</head>

<body id="page-top" >

<!-- Page Wrapper -->
<div id="wrapper">


	<!-- Content Wrapper -->
	<div id="content-wrapper" class="d-flex flex-column" style="background-color: #0b2e13">

		<!-- Main Content -->
		<div id="content">

			<!-- Topbar -->
			<nav class="navbar navbar-expand topbar mb-4 static-top shadow" style="background-color: #D0DBC2">

				<b>AppSurvei</b>

				<!-- Sidebar Toggle (Topbar) -->
				<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
					<i class="fa fa-bars"></i>
				</button>



				<!-- Topbar Navbar -->
				<ul class="navbar-nav ml-auto">

					<!-- Nav Item - Search Dropdown (Visible Only XS) -->
					<li class="nav-item dropdown no-arrow d-sm-none">
						<a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="fas fa-search fa-fw"></i>
						</a>
						<!-- Dropdown - Messages -->
						<div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
							<form class="form-inline mr-auto w-100 navbar-search">
								<div class="input-group">
									<input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
									<div class="input-group-append">
										<button class="btn btn-primary" type="button">
											<i class="fas fa-search fa-sm"></i>
										</button>
									</div>
								</div>
							</form>
						</div>
					</li>





					<div class="topbar-divider d-none d-sm-block"></div>

					<!-- Nav Item - User Information -->
					<li class="nav-item dropdown no-arrow">
						<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<span class="mr-2 d-none d-lg-inline text-gray-600 small">User</span>
							<img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
						</a>
						<!-- Dropdown - User Information -->
						<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">


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
			<div class="container-fluid">



				<!-- Content Row -->
				<div class="row">

					<div class="col-xl-3 col-md-6 mb-4">
						<div class="card border-left-primary shadow h-100 py-2">
							<div class="card-body">
								<div class="row no-gutters align-items-center">
									<form style="margin:10px;" class="align-items-center" action="<?= base_url('dashboard') ?>" method="post">
										<button class="btn btn-info" style="width: 100%;height: 100%;background-color: #D0DBC2;border-color: #DEEFFF;color:black;"><b>Home</b></button>
									</form>
									<form style="margin:10px;"  class="align-items-center" action="<?= base_url('data_penduduk') ?>" method="post">
										<button class="btn btn-info" style="width: 100%;height: 100%;background-color: #D0DBC2;border-color: #DEEFFF;color:black;"><b>Survei</b></button>
									</form>
									<form style="margin:10px;"  class="align-items-center" action="<?= base_url('user') ?>" method="post">
										<button class="btn btn-info" style="width: 100%;height: 100%;background-color: #D0DBC2;border-color: #DEEFFF;color:black;"><b>User</b></button>
									</form>
								</div>
							</div>
						</div>
					</div>


				</div>

				<!-- Content Row -->

				<div class="row">

					<!-- Area Chart -->
					<div class="col-xl-8 col-lg-7">
						<div class="card shadow mb-4">
							<!-- Card Header - Dropdown -->
							<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
								<h6 class="m-0 font-weight-bold text-primary">Data</h6>
								<div class="dropdown no-arrow">
									<a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
										<div class="dropdown-header">Dropdown Header:</div>
										<a class="dropdown-item" href="#">Action</a>
										<a class="dropdown-item" href="#">Another action</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#">Something else here</a>
									</div>
								</div>
							</div>
							<!-- Card Body -->
							<div class="card-body" style="height: 700px;">
								<div class="chart-area">
									<h2 style="margin-top:0px">Informasi Penduduk</h2>
									<table class="table">
										<tr><td>User Yg Menambahkan:</td><td><?php echo $username; ?></td></tr>
										<tr><td>NIK</td><td><?php echo $NIK; ?></td></tr>
										<tr><td>No Kk</td><td><?php echo $no_kk; ?></td></tr>
										<tr><td>Nama</td><td><?php echo $nama; ?></td></tr>
										<tr><td>Jenis Kelamin</td><td><?php echo $jenis_kelamin; ?></td></tr>
										<tr><td>Pekerjaan</td><td><?php echo $pekerjaan; ?></td></tr>
										<tr><td>Foto</td><td><img class="img img-responsive" style="height: 100px;" src="<?= base_url($foto) ?>"></td></tr>
										<tr><td>Keterangan Tambahan</td><td><?php echo $keterangan_tambahan; ?></td></tr>
										<tr><td></td><td><a href="<?php echo site_url('data_penduduk') ?>" class="btn btn-default">Cancel</a></td></tr>
									</table>
									<br/>
								</div>
							</div>
						</div>
					</div>


				</div>

				<!-- Content Row -->
				<div class="row">



				</div>

			</div>
			<!-- /.container-fluid -->

		</div>
		<!-- End of Main Content -->

		<!-- Footer -->
		<footer class="sticky-footer bg-white">
			<div class="container my-auto">
				<div class="copyright text-center my-auto">
					<span>Copyright &copy; Your Website 2020</span>
				</div>
			</div>
		</footer>
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
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
				<a class="btn btn-primary" href="<?php echo base_url('welcome/logout') ?>">Logout</a>
			</div>
		</div>
	</div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('dashboard_assets/vendor/jquery/jquery.min.js') ?>"></script>
<script src="<?= base_url('dashboard_assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

<!-- Core plugin JavaScript-->
<script src="x<?= base_url('dashboard_assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('dashboard_assets/js/sb-admin-2.min.js') ?>"></script>

<!-- Page level plugins -->
<script src="<?= base_url('dashboard_assets/vendor/chart.js/Chart.min.js') ?>"></script>

<!-- Page level custom scripts -->
<script src="<?= base_url('dashboard_assets/js/demo/chart-area-demo.js') ?>"></script>
<script src="<?= base_url('dashboard_assets/js/demo/chart-pie-demo.js') ?>"></script>

</body>

</html>
