<?php

function calendar()
{
    if (!isset($_SESSION["id"])) {
        $GLOBALS["alert"]->setAlert("Vous devez être connecté pour faire ceci.", "info", "info");
        home();
        die();
    }

    $calendar = new \AtiCommunity\Calendar($_GET["year"], $_GET["month"], $_GET["week"]);

    $start = $calendar->getFirstDayOfMonth();
    $end = (clone $start)->modify('+1 month -1 day');

    if (isset($_POST["validate"]) && $_POST["validate"] == "calendar") {
        $result = $GLOBALS["database"]->query("SELECT calendar FROM users WHERE id='" . $_SESSION["id"] . "'")->fetch(\PDO::FETCH_ASSOC);
        if ($result["calendar"] == 0) {
            try {
                $GLOBALS["database"]->query("UPDATE users SET calendar='1' WHERE id='" . $_SESSION["id"] . "'");
            } catch (\PDOException $pdoerror) {
                $GLOBALS["alert"]->setAlert($pdoerror->getMessage(), "danger", "warning");
            }
            $nbWeek = 1;
            $weekViewNumber = $calendar->getWeek() - 1;
        } else {
            try {
                $GLOBALS["database"]->query("UPDATE users SET calendar='0' WHERE id='" . $_SESSION["id"] . "'");
            } catch (\PDOException $pdoerror) {
                $GLOBALS["alert"]->setAlert($pdoerror->getMessage(), "danger", "warning");
            }
            $nbWeek = 6;
        }
    }

    try {
        $result = $GLOBALS["database"]->query("SELECT calendar FROM users WHERE id='" . $_SESSION["id"] . "'")->fetch(\PDO::FETCH_ASSOC);
        if ($result["calendar"] == 0) $nbWeek = 6;
        else {
            $nbWeek = 1;
            $weekViewNumber = $calendar->getWeek() - 1;
        }
    } catch (\PDOException $pdoerror) {
        $GLOBALS["alert"]->setAlert($pdoerror->getMessage(), "danger", "warning");
    }

    try {
        $eventslist = $GLOBALS["database"]->query("SELECT id, name, description, date, DATE_FORMAT(start, '%H:%i') as start, DATE_FORMAT(end, '%H:%i') as end, type FROM events WHERE user_id='" . $_SESSION["id"] . "' AND date BETWEEN '" . $_GET["year"] . "-" . $_GET["month"] . "-01' AND '" . $_GET["year"] . "-" . $_GET["month"] . "-31' ORDER BY start")->fetchAll(\PDO::FETCH_ASSOC);

        foreach ($eventslist as $event) {
            if (!isset($events[$event["date"]])) $events[$event["date"]] = [$event];
            else $events[$event["date"]][] = $event;
        }
    } catch (\PDOException $pdoerror) {
        $GLOBALS["alert"]->setAlert($pdoerror->getMessage(), "danger", "warning");
    }

    require(VIEWS."calendar.php");
}