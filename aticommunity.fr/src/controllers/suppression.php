<?php 

function suppression()
{
    try
    {
        $userResult = $GLOBALS["database"]->query("SELECT surname,name,username FROM users WHERE id='".$_SESSION["id"]."'")->fetch(\PDO::FETCH_ASSOC);

        if(isset($_POST["validate"]) && $_POST["validate"] != "")
        {
            if($_POST["validate"] == "account")
            {
                $GLOBALS["database"]->query("DELETE FROM cv WHERE user_id='".$_SESSION["id"]."'");
                $GLOBALS["database"]->query("DELETE FROM users WHERE id='".$_SESSION["id"]."'");
                $GLOBALS["alert"]->setAlert("Le compte a été supprimé.", "success", "check");
                session_unset();
                session_destroy();
                require(VIEWS."home.php");
            }
            elseif($_POST["validate"] == "cv")
            {
                $GLOBALS["database"]->query("DELETE FROM cv WHERE user_id='".$_SESSION["id"]."'");
                $GLOBALS["database"]->query("UPDATE users SET cv='0' WHERE id='".$_SESSION["id"]."'");
                $GLOBALS["alert"]->setAlert("Le cv a été supprimé.", "success", "check");
                require(VIEWS."myAccount.php");
            }
            elseif($_POST["validate"] == "event")
            {
                $GLOBALS["database"]->query("DELETE FROM events WHERE user_id='".$_SESSION["id"]."' AND id='".$_POST["id"]."'");
                $GLOBALS["alert"]->setAlert("L'événement a été supprimé.", "success", "check");
                header("location: ?action=calendar");
            }
        }
    }
    catch (\PDOException $pdoerror)
    {
        $GLOBALS["alert"]->setAlert($pdoerror->getMessage(), "danger", "warning");
    }
}

?>