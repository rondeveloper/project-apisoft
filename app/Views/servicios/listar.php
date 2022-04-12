<?php

/**
 * @var \CodeIgniter\View\View $this
 */

$this->extend('main_template');
?>

<?php $this->section('content'); ?>

<div class="pagetitle d-flex justify-content-between">
  <div>
    <h1>Servicios</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="">Inicio</a></li>
        <li class="breadcrumb-item active">servicios</li>
      </ol>
    </nav>
  </div>
  <div>
    <button type="button" class="btn btn-primary">
      <i class="bi bi-check-circle-fill"></i> Crear
    </button>
  </div>
</div><!-- End Page Title -->



<section class="section dashboard">
  <div class="row">



    <!-- Reports -->
    <div class="col-12">
      <div class="card">

        <div class="filter">
          <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
            <li class="dropdown-header text-start">
              <h6>Opciones</h6>
            </li>

            <li><a class="dropdown-item" href="#">Opcion 1</a></li>
            <li><a class="dropdown-item" href="#">Opcion 2</a></li>
            <li><a class="dropdown-item" href="#">Opcion 3</a></li>
          </ul>
        </div>

        <div class="card-body">
          <h5 class="card-title">Listado de servicios <span>Apisoft</span></h5>

          <!-- Default Table -->
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Position</th>
                <th scope="col">Age</th>
                <th scope="col">Start Date</th>
                <th scope="col">Acciones</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Brandon Jacob</td>
                <td>Designer</td>
                <td>28</td>
                <td>2016-05-25</td>
                <td>
                  <button class="btn btn-outline-primary btn-sm"><i class="bi bi-pencil-square"></i> Editar</button>
                  <button class="btn btn-outline-danger btn-sm"><i class="bi bi-x-circle-fill"></i> Eliminar</button>
                </td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Bridie Kessler</td>
                <td>Developer</td>
                <td>35</td>
                <td>2014-12-05</td>
                <td>
                  <button class="btn btn-outline-primary btn-sm"><i class="bi bi-pencil-square"></i> Editar</button>
                  <button class="btn btn-outline-danger btn-sm"><i class="bi bi-x-circle-fill"></i> Eliminar</button>
                </td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Ashleigh Langosh</td>
                <td>Finance</td>
                <td>45</td>
                <td>2011-08-12</td>
                <td>
                  <button class="btn btn-outline-primary btn-sm"><i class="bi bi-pencil-square"></i> Editar</button>
                  <button class="btn btn-outline-danger btn-sm"><i class="bi bi-x-circle-fill"></i> Eliminar</button>
                </td>
              </tr>
              <tr>
                <th scope="row">4</th>
                <td>Angus Grady</td>
                <td>HR</td>
                <td>34</td>
                <td>2012-06-11</td>
                <td>
                  <button class="btn btn-outline-primary btn-sm"><i class="bi bi-pencil-square"></i> Editar</button>
                  <button class="btn btn-outline-danger btn-sm"><i class="bi bi-x-circle-fill"></i> Eliminar</button>
                </td>
              </tr>
              <tr>
                <th scope="row">5</th>
                <td>Raheem Lehner</td>
                <td>Dynamic Division Officer</td>
                <td>47</td>
                <td>2011-04-19</td>
                <td>
                  <button class="btn btn-outline-primary btn-sm"><i class="bi bi-pencil-square"></i> Editar</button>
                  <button class="btn btn-outline-danger btn-sm"><i class="bi bi-x-circle-fill"></i> Eliminar</button>
                </td>
              </tr>
              <tr>

              </tr>
            </tbody>
          </table>

          <br>

          <nav aria-label="Page navigation example">
            <ul class="pagination">
              <li class="page-item"><a class="page-link" href="#">Previous</a></li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
          </nav>

        </div>

      </div>
    </div><!-- End Reports -->
  </div>
</section>

<?php $this->endSection(); ?>