<?php $title = "Ajouter un événement"; ?>

<?php ob_start(); ?>

<div class="container-lg bg-dark p-3 rounded-4 text-center">
    <?php require(COMPONENTS."addEvent/title.php"); ?>
    <?php require(COMPONENTS."addEvent/formular.php"); ?>
</div>

<?php $content = ob_get_clean(); ?>

<?php require(VIEWS."layout.php"); ?>