<?php 

function error402()
{
    http_response_code(402);

    try
    {
        if(isset($_SESSION["id"])) $userResult = $GLOBALS["database"]->query("SELECT name FROM users WHERE id='".$_SESSION["id"]."'")->fetch(\PDO::FETCH_ASSOC);
    }
    catch (\PDOException $pdoerror)
    {
        $GLOBALS["alert"]->setAlert($pdoerror->getMessage(), "danger", "warning");
    }

    $GLOBALS["alert"]->setAlert("ERREUR 402 : Un paiement est nécéssaire pour acceder à ce contenu.", "danger", "warning");
    
    require(VIEWS."home.php");
}

?>