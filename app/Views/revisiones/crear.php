<?php

/**
 * @var array $clientes
 * @var \CodeIgniter\Pager\Pager $pager
 * @var \CodeIgniter\View\View $this
 */

$this->extend('main_template');
?>

<?php $this->section('content'); ?>

<link rel="stylesheet" href="<?= base_url('assets/vendor/datetime-picker/css/bootstrap-datetimepicker.css') ?>" />
<!-- JavaScript -->
<script src="<?= base_url('assets/vendor/datetime-picker/js/bootstrap-datetimepicker.js') ?>"></script>
<!-- Languages -->
<script src="<?= base_url('assets/vendor/datetime-picker/js/locales/bootstrap-datetimepicker.es.js') ?>"></script>





<div class="pagetitle d-flex justify-content-between">
    <div>
        <h1>Crear Revisiones</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="">Inicio</a></li>
                <li class="breadcrumb-item "><a href="<?= site_url(['revisiones']) ?>">revisiones</a></li>
                <li class="breadcrumb-item active">crear</li>
            </ol>
        </nav>
    </div>
    <div>
        <a class="btn btn-primary" href="<?= site_url(['revisiones']) ?>">
            <i class="bi bi-skip-backward-btn"></i> Volver
        </a>
    </div>
</div><!-- End Page Title -->
<?php
$opciones_rendimiento = array(
    '1'         => 'Muy Bueno',
    '2'           => 'Bueno',
    '3'         => 'Regular',
    '4'        => 'Malo',
    '5'        => 'Pesimo',
);
$opciones_estado = array(
    '1'         => 'Completa',
    '2'           => 'Incompleta',
    '3'         => 'Minima',
    '4'           => 'No Presento',
);
?>
<section class="section dashboard">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Formulario de creaci&oacute;n de revision <span>Apisoft</span></h5>

            <div class="alert alert-primary alert-dismissible fade show" role="alert" style="font-size: 13px;"> Los campos marcados con <span style="color:#f00">*</span> son obligatorios <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>


            <?= form_open(current_url(), ['method' => 'post', 'class' => 'row g-3 needs-validation', 'novalidate' => '']) ?>

            <div class="row text-primary">
                <div class="col-3">
                    <div class="form-group">
                        <?= form_label('Fecha: *', 'fecha', ['for' => 'fecha', 'class' => 'form-label']) ?>
                        <div class='input-group date' id='datetimepicker1'>
                            <?= form_input('fecha', set_value('fecha', date('Y-m-d H:i:s')), ['class' => 'form-control datetimepicker', 'id' => 'fecha', 'required' => ''], '') ?>
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                            <div class="valid-feedback">Correcto.</div>
                            <div class="invalid-feedback">La fecha es requerido.</div>
                        </div>
                    </div>
                </div>
                <div class="col-9">
                    <div class="form-group">
                        <?= form_label('Observaciones: *', 'observaciones', ['for' => 'observaciones', 'class' => 'form-label']) ?>
                        <?= form_textarea('observaciones', set_value('observaciones'), ['class' => 'form-control', 'id' => 'observaciones', 'rows' => '3']) ?>
                        <div class="valid-feedback">Correcto.</div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <?= form_label('Rendimiento: *', 'rendimiento', ['for' => 'rendimiento', 'class' => 'form-label']) ?>
                        <?= form_dropdown('rendimiento', $opciones_rendimiento, set_value('rendimiento'), ['class' => 'form-control', 'id' => 'rendimiento']) ?>
                        <div class="valid-feedback">Correcto.</div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <?= form_label('Estado: *', 'estado', ['for' => 'estado', 'class' => 'form-label']) ?>
                        <?= form_dropdown('estado', $opciones_estado, set_value('estado'), ['class' => 'form-control', 'id' => 'estado']) ?>
                        <div class="valid-feedback">Correcto.</div>
                    </div>
                </div>
                <hr class="my-3">

                <div class="col-12">
                    <?= form_submit('submit', 'Crear Revision', ['class' => 'btn btn-success mx-auto d-block btn-lg']) ?>
                </div>
                <?= form_close() ?>

            </div>
        </div>
    </div>
</section>

<script>
    $(function(){
  $(".datetimepicker").datetimepicker();
});

</script>

<?php $this->endSection(); ?>

<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function(form) {
                form.addEventListener('submit', function(event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
    })()
</script>