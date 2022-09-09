<p class="text-center text-uppercase text-yellow fw-bold fs-2">J'enregistre mon CV</p>
<form action="" method="post">
    <input id="addCVNames" name="addCVNames" type="hidden" value="<?= $result["surname"]." ".$result["name"]; ?>">
    <div class="row justify-content-center">
        <label for="addCVUrl" class="col-xl-3 col-form-label">URL de l'image</label>
        <div class="col-xl-9 mb-3">
            <input id="addCVImageUrl" name="addCVImageUrl" type="text" class="form-control"
                placeholder="J'écris l'url de l'image de mon cv ici">
        </div>
    </div>
    <div class="row justify-content-center">
        <label for="addCVDescription" class="col-xl-3 col-form-label">Description</label>
        <div class="col-xl-9 mb-3">
            <input id="addCVDescription" name="addCVDescription" type="text" class="form-control"
                placeholder="J'écris une description de mon cv ici">
        </div>
    </div>
    <div class="row justify-content-center">
        <label for="addCVUrl" class="col-xl-3 col-form-label"><span style="color: red;">*</span>URL</label>
        <div class="col-xl-9 mb-3">
            <input id="addCVUrl" name="addCVUrl" type="text" class="form-control"
                placeholder="J'écris l'url de mon cv ici" required>
        </div>
    </div>
    <p class="text-center"><span style="color: red;">*</span> = obligatoire</p>
    <div class="d-grid col-sm-5 mx-auto">
        <button name="validate" value="addCV" type="submit" class="btn btn-success">Enregistrer</button>
    </div>
</form>