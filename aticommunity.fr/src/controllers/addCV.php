<?php 

function addCV()
{
    if(!isset($_SESSION["id"]))
    {
        $GLOBALS["alert"]->setAlert("Vous devez être connecté pour faire ceci.", "info", "info");
        jobs();
        die();
    }

    if($GLOBALS["database"]->query("SELECT cv FROM users WHERE id='".$_SESSION["id"]."'")->fetch(\PDO::FETCH_ASSOC)["cv"] == "1")
    {
        $GLOBALS["alert"]->setAlert("Vous avez déjà postulé votre CV. Si vous voulez le supprimer, rendez-vous dans l'onglet \"Mon Compte\".", "warning", "warning");
        jobs();
        die();
    }

    $result = $GLOBALS["database"]->query("SELECT surname,name FROM users WHERE id='".$_SESSION["id"]."'")->fetch(\PDO::FETCH_ASSOC);

    if(isset($_POST["validate"]) && $_POST["validate"] != "")
    {
        if($_POST["validate"] == "addCV")
        {
            try
            {
                $GLOBALS["database"]->query("INSERT INTO cv (user_id, name, imgurl, description, url) VALUES ('".$_SESSION["id"]."','".strip_tags($_POST["addCVNames"])."','".strip_tags(strtolower($_POST["addCVImageUrl"]))."','".strip_tags(str_replace("\n","<br>",$_POST["addCVDescription"]))."','".strip_tags(strtolower($_POST["addCVUrl"]))."')");
                $GLOBALS["database"]->query("UPDATE users SET cv='1' WHERE id='".$_SESSION["id"]."'");
                $GLOBALS["alert"]->setAlert("CV enregistré avec succès. Allez voir dans Jobs ;)", "success", "check");
            }
            catch (\PDOException $pdoerror)
            {
                $GLOBALS["alert"]->setAlert($pdoerror->getMessage(), "danger", "warning");
            }
        }
    }

    require(VIEWS."addCV.php");
}

?>