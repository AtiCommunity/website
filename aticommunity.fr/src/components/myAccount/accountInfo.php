<p class="text-center text-uppercase text-yellow fw-bold fs-2">Mes informations personnelles</p>
<form action="?action=modification" method="post">
    <div class="row justify-content-center">
        <label for="Nom" class="col-xl-3 col-form-label">Nom</label>
        <div class="col-xl-9 mb-3">
            <input id="Nom" name="Nom" type="text" class="form-control" value="<?= $userResult["surname"]; ?>" readonly>
        </div>
    </div>
    <div class="row justify-content-center">
        <label for="Prénom" class="col-xl-3 col-form-label">Prénom</label>
        <div class="col-xl-9 mb-3">
            <input id="Prénom" name="Prénom" type="text" class="form-control" value="<?= $userResult["name"]; ?>"
                readonly>
        </div>
    </div>
    <div class="row justify-content-center">
        <label for="Nom d'utilisateur" class="col-xl-3 col-form-label">Nom d'utilisateur</label>
        <div class="col-xl-9 mb-3">
            <input id="Nom d'utilisateur" name="Nom d'utilisateur" type="text" class="form-control"
                value="<?= $userResult["username"]; ?>" readonly>
        </div>
    </div>
    <div class="row justify-content-center">
        <label for="Email" class="col-xl-3 col-form-label">Email</label>
        <div class="col-xl-9 mb-3">
            <input id="Email" name="Email" type="email" class="form-control" value="<?= $userResult["email"]; ?>"
                readonly>
        </div>
    </div>
    <div class="d-grid col-sm-3 mb-3 mx-auto">
        <button name="validate" value="Account" type="submit" class="btn btn-success">Je modifie mes
            informations</button>
    </div>
</form>
<div class="d-grid col-sm-3 mx-auto">
    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delAccount">Supprimer
        mon compte</button>
    <div class="modal fade" id="delAccount" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="accountLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content bg-dark">
                <div class="modal-header">
                    <h5 class="modal-title" id="accountLabel">Suppression de compte</h5>
                </div>
                <div class="modal-body">
                    <p>Êtes-vous sûr de vouloir supprimer votre compte ?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    <form action="?action=suppression" method="post">
                        <button name="validate" value="account" type="submit" class="btn btn-danger">Supprimer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>