<div class="d-sm-flex justify-content-around mb-3">
    <form action="" method="post">
        <?php if ($result["calendar"] == 0) : ?>
        <button name="validate" value="calendar" type="submit" class="btn btn-success mb-3">Affichage par
            semaine</button>
        <?php else : ?>
        <button name="validate" value="calendar" type="submit" class="btn btn-success mb-3">Affichage par
            mois</button>
        <?php endif; ?>
    </form>
    <button class="btn btn-success mb-3" onclick="window.location.href='?action=calendar'">Retourner à
        aujourd'hui</button>
</div>
<?php if ($result["calendar"] == 1) : ?>
<div class="d-flex justify-content-around mb-3">
    <button class="btn btn-success"
        onclick="window.location.href='?action=calendar&year=<?= $calendar->previousWeek()[0] ?>&month=<?= $calendar->previousWeek()[1] ?>&week=<?= $calendar->previousWeek()[2] ?>'"><i
            class="fa-solid fa-arrow-left-long"></i></button>
    <p class="text-center text-uppercase text-yellow fw-bold fs-2">
        <?= $calendar->toString()[2]; ?></p>
    <button class="btn btn-success"
        onclick="window.location.href='?action=calendar&year=<?= $calendar->nextWeek()[0] ?>&month=<?= $calendar->nextWeek()[1] ?>&week=<?= $calendar->nextWeek()[2] ?>'"><i
            class="fa-solid fa-arrow-right-long"></i></button>
</div>
<?php endif; ?>
<div class="d-flex justify-content-around mb-3">
    <button class="btn btn-success"
        onclick="window.location.href='?action=calendar&year=<?= $calendar->previousMonth()[0] ?>&month=<?= $calendar->previousMonth()[1] ?>&week=<?= $calendar->previousMonth()[2] ?>'"><i
            class="fa-solid fa-arrow-left-long"></i></button>
    <p class="text-center text-uppercase text-yellow fw-bold fs-2">
        <?= $calendar->toString()[1]; ?></p>
    <button class="btn btn-success"
        onclick="window.location.href='?action=calendar&year=<?= $calendar->nextMonth()[0] ?>&month=<?= $calendar->nextMonth()[1] ?>&week=<?= $calendar->nextMonth()[2] ?>'"><i
            class="fa-solid fa-arrow-right-long"></i></button>
</div>
<div class="d-flex justify-content-around">
    <button class="btn btn-success"
        onclick="window.location.href='?action=calendar&year=<?= $calendar->previousYear()[0] ?>&month=<?= $calendar->previousYear()[1] ?>&week=<?= $calendar->previousYear()[2] ?>'"><i
            class="fa-solid fa-arrow-left-long"></i></button>
    <p class="text-center text-uppercase text-yellow fw-bold fs-2">
        <?= $calendar->toString()[0]; ?></p>
    <button class="btn btn-success"
        onclick="window.location.href='?action=calendar&year=<?= $calendar->nextYear()[0] ?>&month=<?= $calendar->nextYear()[1] ?>&week=<?= $calendar->nextYear()[2] ?>'"><i
            class="fa-solid fa-arrow-right-long"></i></button>
</div>