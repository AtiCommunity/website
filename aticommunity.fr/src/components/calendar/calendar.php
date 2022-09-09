<?php for ($weekNumber = 0; $weekNumber < $nbWeek; $weekNumber++) : ?>
<div class="row">
    <?php foreach ($calendar->getDays() as $dayNumber => $day) : ?>
    <?php
    if ($result["calendar"] == 1) {
        $date = (clone $calendar->getFirstDayOfMonth()->modify("last monday"))->modify("+" . ($dayNumber + $weekViewNumber * 7) . "days");
        if ($date == (clone $calendar->getFirstDayOfMonth()->modify("-7 days"))->modify("+" . ($dayNumber + $weekViewNumber * 7) . "days")) $date = (clone $calendar->getFirstDayOfMonth())->modify("+" . ($dayNumber + $weekViewNumber * 7) . "days");
    } else {
        $date = (clone $calendar->getFirstDayOfMonth()->modify("last monday"))->modify("+" . ($dayNumber + $weekNumber * 7) . "days");
        if ($date == (clone $calendar->getFirstDayOfMonth()->modify("-7 days"))->modify("+" . ($dayNumber + $weekNumber * 7) . "days")) $date = (clone $calendar->getFirstDayOfMonth())->modify("+" . ($dayNumber + $weekNumber * 7) . "days");
    }
    $eventsInDay = $events[$date->format("Y-m-d")] ?? [];
    ?>
    <?php if (!$calendar->withinMonth($date)) : ?>
    <div
        class="col-xl border border-3 rounded-4 border-warning mx-xl-1 mt-xl-1 mb-1 <?= $calendar->withinMonth($date) ? '' : 'other-month'; ?>">
        <?php else : ?>
        <div
            class="col-xl position-relative btn border border-3 rounded-4 border-warning text-white text-decoration-none ms-xl-1 mt-xl-1 me-xl-1 mb-1 <?= $calendar->withinMonth($date) ? '' : 'other-month'; ?>">

            <form action="?action=addEvent" method="post">
                <input type="hidden" name="year" value="<?= $date->format("Y"); ?>">
                <input type="hidden" name="month" value="<?= $date->format("m"); ?>">
                <input type="hidden" name="day" value="<?= $date->format("d"); ?>">
                <input type="submit" class="position-absolute btn top-0 start-0 w-100 h-100"
                    style="z-index: 0; color: transparent; background-color: transparent; border-color: transparent;">
            </form>
            <?php endif; ?>
            <p class="text-center text-uppercase fw-bold fs-5 mb-0"><?= $day; ?></p>
            <?php if ($calendar->getToday() == $date->format('d') && $calendar->getMonth() == intval(date('m')) && $calendar->getyear() == intval(date('Y')) && $calendar->withinMonth($date)) : ?>
            <p class="text-center text-uppercase fw-bold fs-5"><mark
                    style="background-color: var(--bs-warning); border-radius: 50%; padding: 1px 5px 2px 5px;"><?= $date->format('d'); ?></mark>
            </p>
            <?php else : ?>
            <p class="text-center text-uppercase fw-bold fs-5"><?= $date->format('d'); ?></p>
            <?php endif; ?>
            <?php require(COMPONENTS."calendar/events.php"); ?>
        </div>
        <?php endforeach; ?>
    </div>
    <?php endfor; ?>