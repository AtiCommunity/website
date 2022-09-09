<?php 

function home()
{
    try
    {
        if(isset($_SESSION["id"])) $userResult = $GLOBALS["database"]->query("SELECT name FROM users WHERE id='".$_SESSION["id"]."'")->fetch(\PDO::FETCH_ASSOC);
    }
    catch (\PDOException $pdoerror)
    {
        $GLOBALS["alert"]->setAlert($pdoerror->getMessage(), "danger", "warning");
    }
    
    require(VIEWS."home.php");
}

?>