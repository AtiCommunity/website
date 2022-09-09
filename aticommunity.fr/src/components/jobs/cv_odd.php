<?php foreach($odd as $cv): ?>
<div class="card bg-secondary mx-auto mb-3 w-50">
    <img src="<?= $cv["img_url"] ? $cv["img_url"] : 'https://dev.aticommunity.fr/src/images/logo.png'; ?>"
        class="card-img-top" alt="Logo">
    <div class="card-body">
        <h5 class="card-title text-yellow"><i class="fa-solid fa-user text-uppercase fw-bold fs-3"></i>
            <?= $cv["name"]; ?></h5>
        <p class="card-text"><?= html_entity_decode($cv["description"]); ?></p>
        <a href="<?= $cv["url"]; ?>" class="btn btn-yellow">Aller voir le CV</a>
    </div>
</div>
<?php endforeach; ?>