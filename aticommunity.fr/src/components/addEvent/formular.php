<form action="" method="post">
    <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-4">
            <input type="hidden" name="year" value="<?= $_POST["year"]; ?>">
            <input type="hidden" name="month" value="<?= $_POST["month"]; ?>">
            <input type="hidden" name="day" value="<?= $_POST["day"]; ?>">
            <div class="form-floating mb-3">
                <input name="name" type="text" class="form-control" id="name" placeholder="#" required>
                <label for="name" class="text-dark"><span style="color: red;">*</span>Nom de l'événement</label>
            </div>
            <div class="form-floating form-floating-desc mb-3">
                <textarea name="description" class="form-control" placeholder="#" id="description"></textarea>
                <label for="description" class="text-dark">Description</label>
            </div>
            <div class="form-floating mb-3">
                <select name="type" class="form-select" id="type" aria-label="Type">
                    <option value="info">Information</option>
                    <option value="anniversary">Anniversaire</option>
                    <option selected value="success">Peu d'importance</option>
                    <option value="warning">Important</option>
                    <option value="danger">Très important</option>
                </select>
                <label for="type" class="text-dark">Type de l'événement</label>
            </div>
            <div class="form-floating mb-3">
                <input name="date" type="date" class="form-control" id="date"
                    value="<?= $_POST["year"]; ?>-<?= $_POST["month"]; ?>-<?= $_POST["day"]; ?>" required>
                <label for="date" class="text-dark"><span style="color: red;">*</span>Date</label>
            </div>
            <div class="form-floating mb-3">
                <input name="start" type="time" class="form-control" id="start" value="00:00" required>
                <label for="start" class="text-dark"><span style="color: red;">*</span>Début de
                    l'événement</label>
            </div>
            <div class="form-floating mb-3">
                <input name="end" type="time" class="form-control" id="end">
                <label for="end" class="text-dark">Fin de l'événement</label>
            </div>
            <p><span style="color: red;">*</span> = obligatoire</p>
        </div>
        <div class="col-lg-4"></div>
    </div>
    <div class="d-grid col-sm-3 mx-auto">
        <button name="validate" value="addEvent" type="submit" class="btn btn-success mb-3">Ajouter
            l'Événement</button>
        <button class="btn btn-secondary" onclick="window.location.href='?action=calendar'">Annuler</button>
    </div>
</form>