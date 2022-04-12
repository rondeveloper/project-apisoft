<?php

/**
 * @var \CodeIgniter\View\View $this
 */

$this->extend('main_template');
?>

<?php $this->section('content'); ?>

<div class="pagetitle">
	<h1>Home desde CodeIngiter</h1>
	<nav>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="">Inicio</a></li>
			<li class="breadcrumb-item active">Panel principal</li>
		</ol>
	</nav>
</div><!-- End Page Title -->

<section class="section dashboard">
	<div class="row">

		<!-- Left side columns -->
		<div class="col-lg-8">
			<div class="row">


				<!-- Reports -->
				<div class="col-12">
					<div class="card">

						<div class="filter">
							<a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
							<ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
								<li class="dropdown-header text-start">
									<h6>Filter</h6>
								</li>

								<li><a class="dropdown-item" href="#">Today</a></li>
								<li><a class="dropdown-item" href="#">This Month</a></li>
								<li><a class="dropdown-item" href="#">This Year</a></li>
							</ul>
						</div>

						<div class="card-body">
							<h5 class="card-title">Listado <span>/Uno</span></h5>

							<div style="height: 370px;"></div>

						</div>

					</div>
				</div><!-- End Reports -->



			</div>
		</div><!-- End Left side columns -->

		<!-- Right side columns -->
		<div class="col-lg-4">

			<!-- Reports -->
			<div class="col-12">
				<div class="card">

					<div class="filter">
						<a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
						<ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
							<li class="dropdown-header text-start">
								<h6>Filter</h6>
							</li>

							<li><a class="dropdown-item" href="#">Today</a></li>
							<li><a class="dropdown-item" href="#">This Month</a></li>
							<li><a class="dropdown-item" href="#">This Year</a></li>
						</ul>
					</div>

					<div class="card-body">
						<h5 class="card-title">Otros <span>/Datos</span></h5>

						<div style="height: 270px;"></div>

					</div>

				</div>
			</div><!-- End Reports -->

		</div><!-- End Right side columns -->

	</div>
</section>

<?php $this->endSection(); ?>