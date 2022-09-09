<form action="" method="post">
    <?php foreach($_POST as $post => $value): ?>
    <?php if($post != "validate"): ?>
    <div class="row justify-content-center">
        <?php if(preg_match("/year/", $post)): ?>
        <input id="<?= strtolower($post); ?>" name="<?= strtolower($post); ?>" type="hidden" class="form-control"
            value="<?= $value; ?>">
        <?php elseif(preg_match("/month/", $post)): ?>
        <input id="<?= strtolower($post); ?>" name="<?= strtolower($post); ?>" type="hidden" class="form-control"
            value="<?= $value; ?>">
        <?php elseif(preg_match("/day/", $post)): ?>
        <input id="<?= strtolower($post); ?>" name="<?= strtolower($post); ?>" type="hidden" class="form-control"
            value="<?= $value; ?>">
        <?php elseif(preg_match("/id/", $post)): ?>
        <input id="<?= strtolower($post); ?>" name="<?= strtolower($post); ?>" type="hidden" class="form-control"
            value="<?= $value; ?>">
        <?php elseif(preg_match("/Description/", $post)): ?>
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="form-floating form-floating-desc mb-3">
                <textarea id="<?= strtolower($post); ?>" name="<?= strtolower($post); ?>" class="form-control"
                    placeholder="#" rows="3"><?= $value; ?></textarea>
                <label for="<?= strtolower($post); ?>" class="text-dark"><?= str_replace("_", " ", $post); ?></label>
            </div>
        </div>
        <div class="col-md-3"></div>
        <?php elseif(preg_match("/Type/", $post)): ?>
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="form-floating mb-3">
                <select name="type" class="form-select" id="type" aria-label="Type">
                    <option selected value="<?= $value; ?>">Choisissez un type d'événement</option>
                    <option value="info">Information</option>
                    <option value="anniversary">Anniversaire</option>
                    <option value="success">Peu d'importance</option>
                    <option value="warning">Important</option>
                    <option value="danger">Très important</option>
                </select>
                <label for="<?= strtolower($post); ?>" class="text-dark"><?= str_replace("_", " ", $post); ?></label>
            </div>
        </div>
        <div class="col-md-3"></div>
        <?php elseif(preg_match("/Date/", $post)): ?>
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="form-floating mb-3">
                <input id="<?= strtolower($post); ?>" name="<?= strtolower($post); ?>" type="date" class="form-control"
                    value="<?= $value; ?>" required>
                <label for="<?= strtolower($post); ?>" class="text-dark"><?= str_replace("_", " ", $post); ?></label>
            </div>
        </div>
        <div class="col-md-3"></div>
        <?php elseif(preg_match("/Début/", $post)): ?>
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="form-floating mb-3">
                <input id="<?= strtolower($post); ?>" name="<?= strtolower($post); ?>" type="time" class="form-control"
                    value="<?= $value; ?>" required>
                <label for="<?= strtolower($post); ?>" class="text-dark"><?= str_replace("_", " ", $post); ?></label>
            </div>
        </div>
        <div class="col-md-3"></div>
        <?php elseif(preg_match("/Fin/", $post)): ?>
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="form-floating mb-3">
                <input id="<?= strtolower($post); ?>" name="<?= strtolower($post); ?>" type="time" class="form-control"
                    value="<?= $value; ?>">
                <label for="<?= strtolower($post); ?>" class="text-dark"><?= str_replace("_", " ", $post); ?></label>
            </div>
        </div>
        <div class="col-md-3"></div>
        <?php elseif(preg_match("/URL_de_l'image/", $post)): ?>
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="form-floating mb-3">
                <input id="<?= strtolower($post); ?>" name="<?= strtolower($post); ?>" placeholder="#" type="text"
                    class="form-control" value="<?= $value; ?>">
                <label for="<?= strtolower($post); ?>" class="text-dark"><?= str_replace("_", " ", $post); ?></label>
            </div>
        </div>
        <div class="col-md-3"></div>
        <?php else: ?>
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="form-floating mb-3">
                <input id="<?= strtolower($post); ?>" name="<?= strtolower($post); ?>" placeholder="#" type="text"
                    class="form-control" value="<?= $value; ?>" required>
                <label for="<?= strtolower($post); ?>" class="text-dark"><?= str_replace("_", " ", $post); ?></label>
            </div>
        </div>
        <div class="col-md-3"></div>
        <?php endif; ?>
    </div>
    <?php endif; ?>
    <?php endforeach; ?>
    <div class="d-grid col-sm-3 mx-auto">
        <button name="validate" value="modif<?= str_replace("modif", "", $_POST["validate"]); ?>" type="submit"
            class="btn btn-success mb-3">Modifier
            mes
            informations</button>
        <button name="validate" value="modifCancel<?= str_replace("modif", "", $_POST["validate"]); ?>" type="submit"
            class="btn btn-secondary">Annuler</button>
    </div>
</form>