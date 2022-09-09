<?php 

function event()
{
    if(!isset($_GET["year"]) || !isset($_GET["month"]) || !isset($_GET["day"]))
    {
        $GLOBALS["alert"]->setAlert("Il manque des données pour un affichage correct.", "danger", "warning");
        home();
        die();
    }
    
    $event = new \AtiCommunity\Event($_GET["year"], $_GET["month"], $_GET["day"]);

    try
    {
        $result = $GLOBALS["database"]->query("SELECT id, name, description, date, DATE_FORMAT(start, '%H:%i') as start, DATE_FORMAT(end, '%H:%i') as end, type FROM events WHERE user_id='".$_SESSION["id"]."' AND date='".$_GET["year"]."-".$_GET["month"]."-".$_GET["day"]."' ORDER BY start")->fetchAll(\PDO::FETCH_ASSOC);
    }
    catch (\PDOException $pdoerror)
    {
        $GLOBALS["alert"]->setAlert($pdoerror->getMessage(), "danger", "warning");
    }

    require("src/templates/views/event.php");
}

?>