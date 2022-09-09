<div class="container-lg rounded-4 bg-dark p-3">
    <p class="fs-2 fw-bold text-center text-uppercase text-yellow">Je me connecte</p>
    <form action="" method="post">
        <div class="row justify-content-center">
            <label for="loginUsername" class="col-xl-3 col-form-label">Nom d'utilisateur</label>
            <div class="col-xl-9 mb-3">
                <input id="loginUsername" name="loginUsername" type="text" class="form-control"
                    placeholder="J'écris mon nom d'utilisateur ici" required>
            </div>
        </div>
        <div class="row justify-content-center">
            <label for="loginPassword" class="col-xl-3 col-form-label">Mot de passe</label>
            <div class="col-xl-9 mb-3">
                <input id="loginPassword" name="loginPassword" type="password" class="form-control"
                    placeholder="J'écris mon mot de passe ici" required>
            </div>
        </div>
        <div class="d-grid col-sm-5 mx-auto">
            <button name="validate" value="login" type="submit" class="btn btn-success">Se connecter</button>
        </div>
    </form>
</div>