<?php $title = "Mon compte"; ?>

<?php ob_start(); ?>

<div class="container-lg bg-dark p-3 rounded-4 mb-3">
    <?php require(COMPONENTS."myAccount/title.php"); ?>
</div>
<div class="container-lg bg-dark p-3 rounded-4 mb-3">
    <?php require(COMPONENTS."myAccount/accountInfo.php"); ?>
</div>
<?php if ($userResult["cv"] == 1) : ?>
<div class="container-lg bg-dark p-3 rounded-4 mb-3">
    <?php require(COMPONENTS."myAccount/cvInfo.php"); ?>
</div>
<?php endif; ?>

<?php $content = ob_get_clean(); ?>

<?php require(VIEWS."layout.php"); ?>