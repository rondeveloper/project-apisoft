<?php

/**
 * @var string[]|null $errors
 * @var string[]|null $messages
 */
?>

<?php if (isset($errors)) : ?>
    <?php foreach ($errors as $error) : ?>
        <div class="alert alert-danger">
            <?= $error ?>
        </div>
    <?php endforeach; ?>
<?php endif; ?>

<?php if (isset($messages)) : ?>
    <?php foreach ($messages as $message) : ?>
        <script>
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: '<?= $message ?>',
                showConfirmButton: false,
                timer: 1500
            })
        </script>
    <?php endforeach; ?>
<?php endif; ?>

<?php if (isset($validation) && count($validation->getErrors())>0) : ?>
    <div class="alert alert-danger alert-dismissible fade show">
        <?= $validation->listErrors() ?>
        <i type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></i>
    </div>
<?php endif; ?>