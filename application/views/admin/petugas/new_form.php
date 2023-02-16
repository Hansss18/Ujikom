<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">

	<?php $this->load->view("admin/_partials/navbar.php") ?>
	<div id="wrapper">

		<?php $this->load->view("admin/_partials/sidebar.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">

				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/petugas/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url('admin/petugas/add') ?>" method="post" enctype="multipart/form-data" >

							<div class="form-group">
								<label for="id_petugas">ID Petugas</label>
								<input class="form-control <?php echo form_error('id_petugas') ? 'is-invalid':'' ?>"
								 type="text" name="id_petugas"  placeholder="ID Petugas" />
								<div class="invalid-feedback">
									<?php echo form_error('id_petugas') ?>
								</div>
							</div>


						<div class="form-group">
								<label for="username">Username</label>
								<input class="form-control <?php echo form_error('username') ? 'is-invalid':'' ?>"
								 type="text" name="username"  placeholder="Username" />
								<div class="invalid-feedback">
									<?php echo form_error('username') ?>
								</div>
							</div>


							<div class="form-group">
								<label for="password">Password</label>
								<input class="form-control <?php echo form_error('password') ? 'is-invalid':'' ?>"
								 type="password" name="password"  placeholder="Password" />
								<div class="invalid-feedback">
									<?php echo form_error('password') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="nama_petugas">Nama Petugas</label>
								<input class="form-control <?php echo form_error('nama_petugas') ? 'is-invalid':'' ?>"
								 type="text" name="nama_petugas"  placeholder="Nama Petugas" />
								<div class="invalid-feedback">
									<?php echo form_error('nama_petugas') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="level">Level</label>
								<select class="form-control <?php echo form_error('level') ? 'is-invalid':'' ?>"
								 type="text" name="level"  />
								 <option value = "">Choose Level</option>
								 <option value = "Administrator">Administrator</option>
								 <option value = "Petugas">Petugas</option>
								 </select>
								<div class="invalid-feedback">
									<?php echo form_error('level') ?>
								</div>
							</div>



							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

					</div>

					<div class="card-footer small text-muted">
						* required fields
					</div>


				</div>
				<!-- /.container-fluid -->

				<!-- Sticky Footer -->
				<?php $this->load->view("admin/_partials/footer.php") ?>

			</div>
			<!-- /.content-wrapper -->

		</div>
		<!-- /#wrapper -->


		<?php $this->load->view("admin/_partials/scrolltop.php") ?>

		<?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>