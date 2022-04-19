<?php

/**
 * @var array $clientes
 * @var \CodeIgniter\Pager\Pager $pager
 * @var \CodeIgniter\View\View $this
 */

$this->extend('main_template');
?>

<?php $this->section('content'); ?>

<div class="pagetitle d-flex justify-content-between">
    <div>
        <h1>Crear Clientes</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="">Inicio</a></li>
                <li class="breadcrumb-item "><a href="<?= site_url(['clientes']) ?>">clientes</a></li>
                <li class="breadcrumb-item active">crear</li>
            </ol>
        </nav>
    </div>
    <div>
        <a class="btn btn-primary" href="<?= site_url(['clientes']) ?>">
            <i class="bi bi-skip-backward-btn"></i> Volver
        </a>
    </div>
</div><!-- End Page Title -->
<?php
$opciones_tipo = array(
    '1'         => 'Frecuente',
    '2'           => 'Regular',
    '3'         => 'Irregular',
    '4'        => 'Inapropiado',
);
$opciones_estado = array(
    '1'         => 'Activo',
    '2'           => 'Inactivo',
);
?>
<section class="section dashboard">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Formulario de creaci&oacute;n de cliente <span>Apisoft</span></h5>
            <?php if (count($validation->getErrors())>0) : ?>
                <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
            <?php endif; ?>

            <?= form_open(current_url(), ['method' => 'post']) ?>
            <div class="row text-primary">
                <div class="col-4">
                    <div class="form-group">
                        <?= form_label('Nombre:', 'nombre', ['for' => 'nombre', 'class' => 'form-label']) ?>
                        <?= form_input('nombre', '', ['class' => 'form-control', 'id' => 'nombre']) ?>
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <?= form_label('Telefono:', 'telefono', ['for' => 'telefono', 'class' => 'form-label']) ?>
                        <?= form_input('telefono', '', ['class' => 'form-control', 'id' => 'telefono', 'min' => '0', 'step' => '1'], 'number') ?>
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <?= form_label('Email:', 'email', ['for' => 'email', 'class' => 'form-label']) ?>
                        <?= form_input('email', '', ['class' => 'form-control', 'id' => 'email'], 'email') ?>
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <?= form_label('Ci:', 'ci', ['for' => 'ci', 'class' => 'form-label']) ?>
                        <?= form_input('ci', '', ['class' => 'form-control', 'id' => 'ci'], 'number') ?>
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <?= form_label('Empresa:', 'empresa', ['for' => 'empresa', 'class' => 'form-label']) ?>
                        <?= form_input('empresa', '', ['class' => 'form-control', 'id' => 'empresa']) ?>
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <?= form_label('Nit:', 'nit', ['for' => 'nit', 'class' => 'form-label']) ?>
                        <?= form_input('nit', '', ['class' => 'form-control', 'id' => 'nit'], 'number') ?>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <?= form_label('Observaciones:', 'observaciones', ['for' => 'observaciones', 'class' => 'form-label']) ?>
                        <?= form_textarea('observaciones', '', ['class' => 'form-control', 'id' => 'observaciones', 'rows' => '3']) ?>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <?= form_label('Tipo:', 'tipo', ['for' => 'tipo', 'class' => 'form-label']) ?>
                        <?= form_dropdown('tipo', $opciones_tipo, '1', ['class' => 'form-control', 'id' => 'tipo']) ?>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <?= form_label('Estado:', 'estado', ['for' => 'estado', 'class' => 'form-label']) ?>
                        <?= form_dropdown('estado', $opciones_estado, '1', ['class' => 'form-control', 'id' => 'estado']) ?>
                    </div>
                </div>
                <hr class="my-3">
                <div class="col-12">
                    <?= form_submit('submit', 'Crear Cliente', ['class' => 'btn btn-success mx-auto d-block btn-lg']) ?>
                </div>
                <?= form_close() ?>
            </div>
        </div>
    </div>
</section>
<?php $this->endSection(); ?>