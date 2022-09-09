<?php $title = "Accueil"; ?>

<?php ob_start(); ?>

<?php require(COMPONENTS."home/hello.php"); ?>
<?php require(COMPONENTS."home/who_are_us.php"); ?>

<?php $content = ob_get_clean(); ?>

<?php require(VIEWS."layout.php"); ?>