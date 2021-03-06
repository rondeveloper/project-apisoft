<?php

/**
 * @var array $clientes
 * @var \CodeIgniter\View\View $this
 */

$this->extend('main_template');
?>

<?php $this->section('content'); ?>

<div class="pagetitle d-flex justify-content-between">
  <div>
    <h1>Clientes</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="">Inicio</a></li>
        <li class="breadcrumb-item active">clientes</li>
      </ol>
    </nav>
  </div>
  <div>
    <a class="btn btn-primary" href="<?= site_url(['clientes', 'crear']) ?>">
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
          <h5 class="card-title">Listado de clientes <span>Apisoft</span></h5>

          <table class="table table-sm table-bordered table-striped" id="table_id">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Contacto</th>
                <th scope="col">Empresa</th>
                <th scope="col">Acciones</th>
              </tr>
            </thead>
            <tbody>

              <?php foreach ($clientes as $cliente) : ?>

                <tr>
                  <th scope="row"><?= esc($cliente['id']) ?></th>
                  <td><?= esc($cliente['nombre']) ?><br><?= esc($cliente['ci']) ?></td>
                  <td><?= esc($cliente['telefono']) ?><br><?= esc($cliente['email']) ?></td>

                  <td><?= esc($cliente['empresa']) ?><br><?= esc($cliente['nit']) ?></td>

                  <td>
                    <a class="btn btn-outline-primary btn-sm" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Editar" href="<?= site_url(['clientes', 'editar', $cliente['id']]) ?>"><i class="bi bi-pencil-square"></i> </a>

                    <b class="btn btn-outline-danger btn-sm" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Eliminar" onclick="elminar('<?= $cliente['id'] ?>')">
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
  function elminar(idCliente) {
    Swal.fire({
      title: 'Estas seguro?',
      text: "No podr??s revertir esto!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Si, eliminarlo!'
    }).then((result) => {
      if (result.isConfirmed) {
        location.href='clientes/eliminar/'+idCliente;
        Swal.fire(
          'Eliminado!',
          'Su archivo ha sido eliminado.',
          '??xito'
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