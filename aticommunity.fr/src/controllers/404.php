<?php 

function error404()
{
    http_response_code(404);
    
    try
    {
        $userResult = $GLOBALS["database"]->query("SELECT surname,name,username FROM users WHERE id='".$_SESSION["id"]."'")->fetch(\PDO::FETCH_ASSOC);
    }
    catch (\PDOException $pdoerror)
    {
        $GLOBALS["alert"]->setAlert($pdoerror->getMessage(), "danger", "warning");
    }

    $GLOBALS["alert"]->setAlert("ERREUR 404 : Page non trouvée.", "danger", "warning");

    require(VIEWS."home.php");
}

?>