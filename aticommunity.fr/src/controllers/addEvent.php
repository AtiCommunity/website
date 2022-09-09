<?php 

function addEvent()
{
    if(!isset($_SESSION["id"]))
    {
        $GLOBALS["alert"]->setAlert("Vous devez être connecté pour faire ceci.", "info", "info");
        home();
        die();
    }

    try
    {
        if(isset($_POST["validate"]) && $_POST["validate"] != "")
        {
            if($_POST["validate"] == "addEvent")
            {
                if($_POST["description"] == "") $GLOBALS["database"]->query("INSERT INTO events (name, description, date, start, end, type, user_id) VALUES ('".str_replace("'", "\'", $_POST["name"])."',NULL,'".$_POST["date"]."','".$_POST["start"]."','".$_POST["end"]."','".$_POST["type"]."','".$_SESSION["id"]."')");
                if($_POST["end"] == "") $_POST["end"] = "00:00:00";
                $GLOBALS["database"]->query("INSERT INTO events (name, description, date, start, end, type, user_id) VALUES ('".str_replace("'", "\'", $_POST["name"])."','".str_replace(["'","\n"], ["\'","<br>"], $_POST["description"])."','".$_POST["date"]."','".$_POST["start"]."','".$_POST["end"]."','".$_POST["type"]."','".$_SESSION["id"]."')");
                header("location: ?action=calendar");
            }
        }
    }
    catch (\PDOException $pdoerror)
    {
        $GLOBALS["alert"]->setAlert($pdoerror->getMessage(), "danger", "warning");
    }

    require(VIEWS."addEvent.php");
}