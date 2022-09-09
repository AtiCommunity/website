<?php 

function myAccount()
{
    try
    {
        $userResult = $GLOBALS["database"]->query("SELECT username,surname,name,email,privilege,cv FROM users WHERE id='".$_SESSION["id"]."'")->fetch(\PDO::FETCH_ASSOC);
        $cvResult = $GLOBALS["database"]->query("SELECT img_url,description,url FROM cv WHERE user_id='".$_SESSION["id"]."'")->fetch(\PDO::FETCH_ASSOC);
    }
    catch (\PDOException $pdoerror)
    {
        $GLOBALS["alert"]->setAlert($pdoerror->getMessage(), "danger", "warning");
    }
    require(VIEWS."myAccount.php");
}

?>