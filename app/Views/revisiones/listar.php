<?php

/**
 * @var array $revisiones
 * @var \CodeIgniter\View\View $this
 */

$this->extend('main_template');
?>

<?php $this->section('content'); ?>

<div class="pagetitle d-flex justify-content-between">
  <div>
    <h1>Revisiones <i>(para probar el Datepicker)</i></h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="">Inicio</a></li>
        <li class="breadcrumb-item active">revisiones</li>
      </ol>
    </nav>
  </div>
  <div>
    
    <a class="btn btn-primary" href="<?= site_url(['revisiones', 'crear']) ?>">
      <i class="bi bi-check-circle-fill"></i> Crear
    </a>
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
          <h5 class="card-title">Listado de revisiones <span>Apisoft</span></h5>

          <table class="table table-sm table-bordered table-striped" id="table_id">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Fecha</th>
                <th scope="col">Observaciones</th>
                <th scope="col">Rendimiento</th>
                <th scope="col">Estado</th>
                <th scope="col">Acciones</th>
              </tr>
            </thead>
            <tbody>

              <?php foreach ($revisiones as $revision) : ?>

                <tr>
                  <th scope="row"><?= esc($revision['id']) ?></th>
                  <td><?= esc($revision['fecha']) ?></td>
                  <td><?= esc($revision['observaciones']) ?></td>
                  <td><?= esc($revision['rendimiento']) ?></td>
                  <td><?= esc($revision['estado']) ?></td>

                  <td>
                    <a class="btn btn-outline-primary btn-sm" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Editar" href="<?= site_url(['revisiones', 'editar', $revision['id']]) ?>"><i class="bi bi-pencil-square"></i> </a>

                    <b class="btn btn-outline-danger btn-sm" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Eliminar" onclick="elminar('<?= $revision['id'] ?>')">
                      <i class="bi bi-x-circle-fill"></i>
                    </b>

                  </td>
                </tr>

              <?php endforeach; ?>

            </tbody>
          </table>

        </div>

      </div>
    </div><!-- End Reports -->
  </div>
</section>
<script>
  function elminar(idRevision) {
    Swal.fire({
      title: 'Estas seguro?',
      text: "No podrás revertir esto!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Si, eliminarlo!'
    }).then((result) => {
      if (result.isConfirmed) {
        location.href='revisiones/eliminar/'+idRevision;
        Swal.fire(
          'Eliminado!',
          'Su archivo ha sido eliminado.',
          'éxito'
        )
      }
    })

  }
</script>
<script>
  $(document).ready(function() {
    $('#table_id').DataTable();
  });
</script>

<?php $this->endSection(); ?>