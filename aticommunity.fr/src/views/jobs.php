<?php $title = "Jobs"; ?>

<?php ob_start(); ?>

<div class="container-lg rounded-4 bg-dark p-3 mb-3">
    <?php require(COMPONENTS."jobs/title.php"); ?>
</div>
<div class="container-lg rounded-4 bg-dark p-3 mb-3">
    <div class="row">
        <div class="col-md px-0 pe-md-3">
            <?php require(COMPONENTS."jobs/add_cv.php"); ?>
            <?php require(COMPONENTS."jobs/cv_even.php"); ?>
        </div>
        <div class="col-md px-0 ps-md-3">
            <?php require(COMPONENTS."jobs/cv_odd.php"); ?>
        </div>
    </div>
</div>

<?php $content = ob_get_clean(); ?>

<?php require(VIEWS."layout.php"); ?>