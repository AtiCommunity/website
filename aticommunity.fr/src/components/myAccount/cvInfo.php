<p class="text-center text-uppercase text-yellow fw-bold fs-2">Mon CV</p>
<form action="?action=modification" method="post">
    <div class="row justify-content-center">
        <label for="Description" class="col-xl-3 col-form-label">URL de l'image</label>
        <div class="col-xl-9 mb-3">
            <input id="URL_de_l'image" name="URL_de_l'image" type="text" class="form-control"
                value="<?= $cvResult["imgurl"]; ?>" readonly>
        </div>
    </div>
    <div class="row justify-content-center">
        <label for="Description" class="col-xl-3 col-form-label">Description</label>
        <div class="col-xl-9 mb-3">
            <textarea id="Description" name="Description" rows="3" class="form-control"
                readonly><?= $cvResult["description"]; ?></textarea>
        </div>
    </div>
    <div class="row justify-content-center">
        <label for="URL" class="col-xl-3 col-form-label">URL</label>
        <div class="col-xl-9 mb-3">
            <input id="URL" name="URL" type="text" class="form-control" value="<?= $cvResult["url"]; ?>" readonly>
        </div>
    </div>
    <div class="d-grid col-sm-3 mb-3 mx-auto">
        <button name="validate" value="CV" type="submit" class="btn btn-success">Je modifie mes
            informations</button>
    </div>
</form>
<div class="d-grid col-sm-3 mx-auto">
    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delCV">Supprimer
        mon cv</button>
    <div class="modal fade" id="delCV" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="accountLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content bg-dark">
                <div class="modal-header">
                    <h5 class="modal-title" id="accountLabel">Suppression de cv</h5>
                </div>
                <div class="modal-body">
                    <p>Êtes-vous sûr de vouloir supprimer votre cv ?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    <form action="?action=suppression" method="post">
                        <button name="validate" value="cv" type="submit" class="btn btn-danger">Supprimer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>