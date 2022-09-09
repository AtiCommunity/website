<?php $title = "Agenda"; ?>

<?php ob_start(); ?>

<div class="container-lg bg-dark p-3 rounded-4 text-center mb-3">
    <?php require(COMPONENTS."calendar/navigation.php"); ?>
</div>
<div class="container-lg bg-dark p-3 rounded-4 mb-3">
    <?php require(COMPONENTS."calendar/calendar.php"); ?>
</div>

<?php $content = ob_get_clean(); ?>

<?php require(VIEWS."layout.php"); ?>