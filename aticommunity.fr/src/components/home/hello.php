<?php if(isset($_SESSION["id"])): ?>
<div class="container-lg">
    <p class="fs-3 text-yellow">Bonjour, <?= $userResult["name"]; ?></p>
</div>
<?php endif; ?>