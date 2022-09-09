<?php 

function error403()
{
    http_response_code(403);

    try
    {
        if(isset($_SESSION["id"])) $userResult = $GLOBALS["database"]->query("SELECT name FROM users WHERE id='".$_SESSION["id"]."'")->fetch(\PDO::FETCH_ASSOC);
    }
    catch (\PDOException $pdoerror)
    {
        $GLOBALS["alert"]->setAlert($pdoerror->getMessage(), "danger", "warning");
    }

    $GLOBALS["alert"]->setAlert("ERREUR 403 : Vous n'êtes pas autorisé a consulter cette page.", "danger", "warning");

    
    require(VIEWS."home.php");
}

?>