<?php 

function error401()
{
    http_response_code(401);

    try
    {
        if(isset($_SESSION["id"])) $userResult = $GLOBALS["database"]->query("SELECT name FROM users WHERE id='".$_SESSION["id"]."'")->fetch(\PDO::FETCH_ASSOC);
    }
    catch (\PDOException $pdoerror)
    {
        $GLOBALS["alert"]->setAlert($pdoerror->getMessage(), "danger", "warning");
    }

    $GLOBALS["alert"]->setAlert("ERREUR 401 : Vous n'avez pas la permission car la requête utilisée n'a pas été completée correctement.", "danger", "warning");
    
    require(VIEWS."home.php");
}

?>