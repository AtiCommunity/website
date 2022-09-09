<?php $title = "Modification de données"; ?>

<?php ob_start(); ?>

<div class="container-lg bg-dark p-3 rounded-4 mb-3">
    <?php require(COMPONENTS."modification/title.php"); ?>
    <?php require(COMPONENTS."modification/formular.php"); ?>
</div>

<?php $content = ob_get_clean(); ?>

<?php require(VIEWS."layout.php"); ?>