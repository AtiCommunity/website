<?php foreach ($eventsInDay as $event) : ?>
<div class="modal fade" id="event-<?= $event["id"]; ?>" tabindex="-1" aria-labelledby="eventLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content bg-dark">
            <div class="modal-header">
                <?php 
                $event["modalType"] = $event["type"];
                if($event["modalType"] === "anniversary") $event["modalType"] = "danger";
                ?>
                <h5 class="modal-title text-<?= $event["modalType"]; ?>" id="eventLabel">
                    <?= $event["name"]; ?></h5>
            </div>
            <?php if ($event["description"] != null) : ?>
            <div class="modal-body">
                <p><?= $event["description"]; ?></p>
            </div>
            <?php endif; ?>
            <div class="modal-footer">
                <form action="?action=modification" method="post">
                    <input type="hidden" name="id" value="<?= $event["id"]; ?>">
                    <input type="hidden" name="Nom_de_l'événement" value="<?= $event["name"]; ?>">
                    <input type="hidden" name="Description" value="<?= $event["description"]; ?>">
                    <input type="hidden" name="Type" value="<?= $event["type"]; ?>">
                    <input type="hidden" name="Date" value="<?= $event["date"]; ?>">
                    <input type="hidden" name="Début" value="<?= $event["start"]; ?>">
                    <input type="hidden" name="Fin" value="<?= $event["end"]; ?>">
                    <button name="validate" value="Event" type="submit" class="btn btn-success">Modifier</button>
                </form>
                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                    data-bs-target="#delEvent<?= $event["id"]; ?>">Supprimer</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="delEvent<?= $event["id"]; ?>" data-bs-backdrop="static" data-bs-keyboard="false"
    tabindex="-1" aria-labelledby="delEventLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-dark">
            <div class="modal-header">
                <h5 class="modal-title" id="delEventLabel">Suppression de
                    l'événement "<?= $event["name"]; ?>"</h5>
            </div>
            <div class="modal-body">
                <p>Êtes-vous sûr de vouloir supprimer l'événement ?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-toggle="modal"
                    data-bs-target="#event-<?= $event["id"]; ?>">Annuler</button>
                <form action="?action=suppression" method="post">
                    <input type="hidden" name="year" value="<?= $_GET["year"]; ?>">
                    <input type="hidden" name="month" value="<?= $_GET["month"]; ?>">
                    <input type="hidden" name="day" value="<?= $_GET["day"]; ?>">
                    <input type="hidden" name="id" value="<?= $event["id"]; ?>">
                    <button name="validate" value="event" type="submit" class="btn btn-danger">Supprimer</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php if ($event["type"] == "info") : ?>
<?php if ($event["start"] == "00:00" && $event["end"] == "00:00") : ?>
<button type="button" class="position-relative btn btn-info fw-bold fs-6 mb-3" style="z-index: 1;"
    data-bs-toggle="modal" data-bs-target="#event-<?= $event["id"]; ?>"><i class="fa-solid fa-circle-info"></i>
    <?= $event["name"]; ?></button><br>
<?php elseif ($event["end"] == "00:00") : ?>
<button type="button" class="position-relative btn btn-info fw-bold fs-6 mb-3" style="z-index: 1;"
    data-bs-toggle="modal" data-bs-target="#event-<?= $event["id"]; ?>"><i class="fa-solid fa-circle-info"></i>
    <?= $event["start"] . "<br>" . $event["name"]; ?></button><br>
<?php else : ?>
<button type="button" class="position-relative btn btn-info fw-bold fs-6 mb-3" style="z-index: 1;"
    data-bs-toggle="modal" data-bs-target="#event-<?= $event["id"]; ?>"><i class="fa-solid fa-circle-info"></i>
    <?= $event["start"] . " - " . $event["end"] . "<br>" . $event["name"]; ?></button><br>
<?php endif; ?>

<?php elseif ($event["type"] == "anniversary") : ?>
<?php if ($event["start"] == "00:00" && $event["end"] == "00:00") : ?>
<button type="button" class="position-relative btn btn-danger fw-bold fs-6 mb-3" style="z-index: 1;"
    data-bs-toggle="modal" data-bs-target="#event-<?= $event["id"]; ?>"><i class="fa-solid fa-cake-candles"></i>
    <?= $event["name"]; ?></button><br>
<?php elseif ($event["end"] == "00:00") : ?>
<button type="button" class="position-relative btn btn-danger fw-bold fs-6 mb-3" style="z-index: 1;"
    data-bs-toggle="modal" data-bs-target="#event-<?= $event["id"]; ?>"><i class="fa-solid fa-cake-candles"></i>
    <?= $event["start"] . "<br>" . $event["name"]; ?></button><br>
<?php else : ?>
<button type="button" class="position-relative btn btn-danger fw-bold fs-6 mb-3" style="z-index: 1;"
    data-bs-toggle="modal" data-bs-target="#event-<?= $event["id"]; ?>"><i class="fa-solid fa-cake-candles"></i>
    <?= $event["start"] . " - " . $event["end"] . "<br>" . $event["name"]; ?></button><br>
<?php endif; ?>

<?php elseif ($event["type"] == "success") : ?>
<?php if ($event["start"] == "00:00" && $event["end"] == "00:00") : ?>
<button type="button" class="position-relative btn btn-success fw-bold fs-6 mb-3" style="z-index: 1;"
    data-bs-toggle="modal" data-bs-target="#event-<?= $event["id"]; ?>"><i class="fa-solid fa-circle-check"></i>
    <?= $event["name"]; ?></button><br>
<?php elseif ($event["end"] == "00:00") : ?>
<button type="button" class="position-relative btn btn-success fw-bold fs-6 mb-3" style="z-index: 1;"
    data-bs-toggle="modal" data-bs-target="#event-<?= $event["id"]; ?>"><i class="fa-solid fa-circle-check"></i>
    <?= $event["start"] . "<br>" . $event["name"]; ?></button><br>
<?php else : ?>
<button type="button" class="position-relative btn btn-success fw-bold fs-6 mb-3" style="z-index: 1;"
    data-bs-toggle="modal" data-bs-target="#event-<?= $event["id"]; ?>"><i class="fa-solid fa-circle-check"></i>
    <?= $event["start"] . " - " . $event["end"] . "<br>" . $event["name"]; ?></button><br>
<?php endif; ?>

<?php elseif ($event["type"] == "warning") : ?>
<?php if ($event["start"] == "00:00" && $event["end"] == "00:00") : ?>
<button type="button" class="position-relative btn btn-warning fw-bold fs-6 mb-3" style="z-index: 1;"
    data-bs-toggle="modal" data-bs-target="#event-<?= $event["id"]; ?>"><i class="fa-solid fa-warning"></i>
    <?= $event["name"]; ?></button><br>
<?php elseif ($event["end"] == "00:00") : ?>
<button type="button" class="position-relative btn btn-warning fw-bold fs-6 mb-3" style="z-index: 1;"
    data-bs-toggle="modal" data-bs-target="#event-<?= $event["id"]; ?>"><i class="fa-solid fa-warning"></i>
    <?= $event["start"] . "<br>" . $event["name"]; ?></button><br>
<?php else : ?>
<button type="button" class="position-relative btn btn-warning fw-bold fs-6 mb-3" style="z-index: 1;"
    data-bs-toggle="modal" data-bs-target="#event-<?= $event["id"]; ?>"><i class="fa-solid fa-warning"></i>
    <?= $event["start"] . " - " . $event["end"] . "<br>" . $event["name"]; ?></button><br>
<?php endif; ?>

<?php elseif ($event["type"] == "danger") : ?>
<?php if ($event["start"] == "00:00" && $event["end"] == "00:00") : ?>
<button type="button" class="position-relative btn btn-danger fw-bold fs-6 mb-3" style="z-index: 1;"
    data-bs-toggle="modal" data-bs-target="#event-<?= $event["id"]; ?>"><i class="fa-solid fa-warning"></i>
    <?= $event["name"]; ?></button><br>
<?php elseif ($event["end"] == "00:00") : ?>
<button type="button" class="position-relative btn btn-danger fw-bold fs-6 mb-3" style="z-index: 1;"
    data-bs-toggle="modal" data-bs-target="#event-<?= $event["id"]; ?>"><i class="fa-solid fa-warning"></i>
    <?= $event["start"] . "<br>" . $event["name"]; ?></button><br>
<?php else : ?>
<button type="button" class="position-relative btn btn-danger fw-bold fs-6 mb-3" style="z-index: 1;"
    data-bs-toggle="modal" data-bs-target="#event-<?= $event["id"]; ?>"><i class="fa-solid fa-warning"></i>
    <?= $event["start"] . " - " . $event["end"] . "<br>" . $event["name"]; ?></button><br>
<?php endif; ?>

<?php endif; ?>
<?php endforeach; ?>