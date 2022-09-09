<?php $title = "Ajouter un CV"; ?>

<?php ob_start(); ?>

<div class="row align-items-center">
    <div class="col-md">
        <div class="container-lg bg-dark p-3 rounded-4">
            <?php require(COMPONENTS."addCV/formular.php"); ?>
        </div>
    </div>
</div>

<?php $content = ob_get_clean(); ?>

<?php require(VIEWS."layout.php"); ?>