<div class="container-lg bg-dark p-3 rounded-4">
    <p class="fs-2 fw-bold text-center text-uppercase text-yellow">Je m'enregistre</p>
    <form action="" method="post">
        <div class="row justify-content-center">
            <label for="signupEmail" class="col-xl-3 col-form-label">Email</label>
            <div class="col-xl-9 mb-3">
                <input id="signupEmail" name="signupEmail" type="email" class="form-control"
                    placeholder="J'écris mon email ici" required>
            </div>
        </div>
        <div class="row justify-content-center">
            <label for="signupSurname" class="col-xl-3 col-form-label">Nom</label>
            <div class="col-xl-9 mb-3">
                <input id="signupSurname" name="signupSurname" type="text" class="form-control"
                    placeholder="J'écris mon nom ici" required>
            </div>
        </div>
        <div class="row justify-content-center">
            <label for="signupName" class="col-xl-3 col-form-label">Prénom</label>
            <div class="col-xl-9 mb-3">
                <input id="signupName" name="signupName" type="text" class="form-control"
                    placeholder="J'écris mon prénom ici" required>
            </div>
        </div>
        <div class="row justify-content-center">
            <label for="signupUsername" class="col-xl-3 col-form-label">Nom d'utilisateur</label>
            <div class="col-xl-9 mb-3">
                <input id="signupUsername" name="signupUsername" type="text" class="form-control"
                    placeholder="J'écris mon nom d'utilisateur ici" required>
            </div>
        </div>
        <div class="row justify-content-center">
            <label for="signupPassword" class="col-xl-3 col-form-label">Mot de passe</label>
            <div class="col-xl-9 mb-3">
                <input id="signupPassword" name="signupPassword" type="password" class="form-control"
                    placeholder="J'écris mon mot de passe ici" required>
            </div>
        </div>
        <div class="d-grid col-sm-3 mx-auto">
            <button name="validate" value="signup" type="submit" class="btn btn-success">S'enregister</button>
        </div>
    </form>
</div>