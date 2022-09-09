<?php $title = "Authentification"; ?>

<?php ob_start(); ?>


<div class="row align-items-center">
    <div class="col-md">
        <?php require(COMPONENTS."authentification/connection.php"); ?>
    </div>
    <div class="col-md">
        <?php require(COMPONENTS."authentification/registration.php"); ?>
    </div>
</div>

<?php $content = ob_get_clean(); ?>

<?php require(VIEWS."layout.php"); ?>