<?php

require_once("../database.php");
require_once("config.php");

require_once(MODELS."database.php");
require_once(MODELS."alert.php");
require_once(MODELS."calendar.php");
require_once(MODELS."event.php");

require_once(CONTROLLERS."401.php");
require_once(CONTROLLERS."402.php");
require_once(CONTROLLERS."403.php");
require_once(CONTROLLERS."404.php");
require_once(CONTROLLERS."home.php");
require_once(CONTROLLERS."authentification.php");
require_once(CONTROLLERS."myAccount.php");
require_once(CONTROLLERS."jobs.php");
require_once(CONTROLLERS."addCV.php");
require_once(CONTROLLERS."calendar.php");
require_once(CONTROLLERS."addEvent.php");
require_once(CONTROLLERS."modification.php");
require_once(CONTROLLERS."suppression.php");
require_once(CONTROLLERS."logout.php");

session_start();

$database = new \AtiCommunity\Database();
$alert = new \AtiCommunity\Alert();

if(isset($_GET["action"]) && $_GET["action"] !== "")
{
    if($_GET["action"] === "401") error401();
    elseif($_GET["action"] === "402") error402();
    elseif($_GET["action"] === "403") error403();
    elseif($_GET["action"] === "404") error404();
    elseif($_GET["action"] === "home") home();
    elseif($_GET["action"] === "authentification") authentification();
    elseif($_GET["action"] === "myAccount") myAccount();
    elseif($_GET["action"] === "jobs") jobs();
    elseif($_GET["action"] === "addCV") addCV();
    elseif($_GET["action"] === "calendar") calendar();
    elseif($_GET["action"] === "addEvent") addEvent();
    elseif($_GET["action"] === "modification") modification();
    elseif($_GET["action"] === "suppression") suppression();
    elseif($_GET["action"] === "logout") logout();
    else error404();
}
else home();

?>