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
	<style>
		table{
			overflow-y:scroll;
			height:100px;
			display:block;
		}
	</style>

</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">


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
							<div class="card-body" style="background-color: #D0DBC2">
								<div class="row no-gutters align-items-center">
									<form class="align-items-center" action="<?= base_url('dashboard') ?>" method="post">
										<button class="btn btn-info" style="width: 100%;height: 100%;background-color: #D0DBC2;border-color: #DEEFFF;color:black;"><b>Home</b></button>
									</form>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-3 col-md-6 mb-4">
						<div class="card border-left-primary shadow h-100 py-2">
							<div class="card-body" style="background-color: #D0DBC2">
								<div class="row no-gutters align-items-center">
									<form class="align-items-center" action="<?= base_url('data_penduduk') ?>" method="post">
										<button class="btn btn-info" style="width: 100%;height: 100%;background-color: #D0DBC2;border-color: #DEEFFF;color:black;"><b>Lihat Data</b></button>
									</form>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-3 col-md-6 mb-4">
						<div class="card border-left-primary shadow h-100 py-2">
							<div class="card-body" style="background-color: #D0DBC2">
								<div class="row no-gutters align-items-center">
									<form class="row no-gutters align-items-center" action="<?= base_url('data_penduduk/create') ?>" method="post">
										<button class="btn btn-info" style="width: 100%;height: 100%;background-color: #D0DBC2;border-color: #DEEFFF;color:black;"><b>Tambah Data</b></button>
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
								<h6 class="m-0 font-weight-bold text-primary">Earnings Overview</h6>
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
							<div class="card-body">
								<h3>Data Keseluruhan</h3>
								<div class="row" style="margin-bottom: 10px">
									<div class="col-md-4">
										<?php echo anchor(site_url('data_penduduk/create'),'Create', 'class="btn btn-primary"'); ?>
									</div>
									<div class="col-md-4 text-center">
										<div style="margin-top: 8px" id="message">
											<b style="color:red">
											<?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
											</b>
										</div>
									</div>
									<div class="col-md-1 text-right">
									</div>
									<div class="col-md-3 text-right">
										<form action="<?php echo site_url('data_penduduk/index'); ?>" class="form-inline" method="get">
											<div class="input-group">
												<input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
												<span class="input-group-btn">
                            <?php
							if ($q <> '')
							{
								?>
								<a href="<?php echo site_url('data_penduduk'); ?>" class="btn btn-default">Reset</a>
								<?php
							}
							?>
                          <button class="btn btn-primary" type="submit">Search</button>
                        </span>
											</div>
										</form>
									</div>
								</div>
								<table class="table table-bordered" style="margin-bottom: 10px;height: 300px;">
									<tr>
										<th>No</th>
										<th>Username</th>
										<th>NIK</th>
										<th>No Kk</th>
										<th>Nama</th>
										<th>Jenis Kelamin</th>
										<th>Pekerjaan</th>
										<th>Foto</th>
										<th>Keterangan Tambahan</th>
										<th>Action</th>
									</tr><?php
									foreach ($data_penduduk_data as $data_penduduk)
									{
										?>
										<tr>
											<td width="80px"><?php echo ++$start ?></td>
											<td><?php echo $data_penduduk->username ?></td>
											<td><?php echo $data_penduduk->NIK ?></td>
											<td><?php echo $data_penduduk->no_kk ?></td>
											<td><?php echo $data_penduduk->nama ?></td>
											<td><?php echo $data_penduduk->jenis_kelamin ?></td>
											<td><?php echo $data_penduduk->pekerjaan ?></td>
											<td><img class="img-responsive" src="<?= base_url($data_penduduk->foto) ?>" style="height:50px;"></td>
											<td><?php echo $data_penduduk->keterangan_tambahan ?></td>
											<td style="text-align:center" width="200px">
												<?php
												echo anchor(site_url('data_penduduk/read/'.$data_penduduk->id),'Read');
												echo ' | ';
												echo anchor(site_url('data_penduduk/update/'.$data_penduduk->id),'Update');
												echo ' | ';
												echo anchor(site_url('data_penduduk/delete/'.$data_penduduk->id),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"');
												?>
											</td>
										</tr>
										<?php
									}
									?>
								</table>
								<div class="row">
									<div class="col-md-6">
										<a href="#" class="btn btn-primary">Total Record : <?php echo $total_rows ?></a>
									</div>
									<div class="col-md-6 text-right">
										<?php echo $pagination ?>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Pie Chart -->
					<div class="col-xl-4 col-lg-5">
						<div class="card shadow mb-4">
							<!-- Card Header - Dropdown -->
							<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
								<h6 class="m-0 font-weight-bold text-primary">Revenue Sources</h6>
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
							<div class="card-body">
								<div class="chart-pie pt-4 pb-2">
									<canvas id="myPieChart"></canvas>
								</div>
								<div class="mt-4 text-center small">
                    <span class="mr-2">
                      <i class="fas fa-circle text-primary"></i> Direct
                    </span>
									<span class="mr-2">
                      <i class="fas fa-circle text-success"></i> Social
                    </span>
									<span class="mr-2">
                      <i class="fas fa-circle text-info"></i> Referral
                    </span>
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
				<a class="btn btn-primary" href="login.html">Logout</a>
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
