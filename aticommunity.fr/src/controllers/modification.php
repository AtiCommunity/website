<?php 

function modification()
{
    try
    {
        if(isset($_POST["validate"]) && $_POST["validate"] != "")
        {            
            if($_POST["validate"] == "modifAccount")
            {
                if($GLOBALS["database"]->query("SELECT COUNT(id) as count FROM users WHERE username='".$_POST["nom_d'utilisateur"]."'")->fetch(\PDO::FETCH_ASSOC)["count"] === "0" || $GLOBALS["database"]->query("SELECT id FROM users WHERE username='".$_POST["nom_d'utilisateur"]."'")->fetch(\PDO::FETCH_ASSOC)["id"] === $_SESSION["id"])
                {
                    $GLOBALS["database"]->query("UPDATE users SET surname='".strip_tags(strtoupper($_POST["nom"]))."',name='".strip_tags(ucwords($_POST["prénom"]))."',username='".strip_tags($_POST["nom_d'utilisateur"])."',email='".strip_tags(strtolower($_POST["email"]))."' WHERE id='".$_SESSION["id"]."'");
                    $GLOBALS["database"]->query("UPDATE cv SET name='".strip_tags($_POST["nom"])." ".strip_tags($_POST["prénom"])."' WHERE id='".$_SESSION["id"]."'");
                    header("location: ?action=myAccount");
                }
                else
                {
                    $GLOBALS["alert"]->setAlert("Ce nom d'utilisateur est déjà utilisé", "danger", "warning");
                }
            }
            elseif($_POST["validate"] == "modifCV")
            {
                if($_POST["url_de_l'image"] == "") $GLOBALS["database"]->query("UPDATE cv SET imgurl=null,description='".strip_tags(str_replace("\n","<br>",$_POST["description"]))."',url='".strip_tags(strtolower($_POST["url"]))."' WHERE id='".$_SESSION["id"]."'");
                else $GLOBALS["database"]->query("UPDATE cv SET imgurl='".strip_tags(strtolower($_POST["url_de_l'image"]))."',description='".strip_tags(str_replace("\n","<br>",$_POST["description"]))."',url='".strip_tags(strtolower($_POST["url"]))."' WHERE id='".$_SESSION["id"]."'");
                header("location: ?action=myAccount");
            }
            elseif($_POST["validate"] == "modifEvent")
            {
                if($_POST["description"] == "") $GLOBALS["database"]->query("UPDATE events SET name='".strip_tags(str_replace("'", "\'", $_POST["nom_de_l'événement"]))."',description=NULL,date='".$_POST["date"]."',start='".$_POST["début"]."',end='".$_POST["fin"]."',type='".$_POST["type"]."' WHERE id='".$_POST["id"]."'");
                else $GLOBALS["database"]->query("UPDATE events SET name='".strip_tags(str_replace("'", "\'", $_POST["nom_de_l'événement"]))."',description='".strip_tags(str_replace(["'","\n"], ["\'", "<br>"], $_POST["description"]))."',date='".$_POST["date"]."',start='".$_POST["début"]."',end='".$_POST["fin"]."',type='".$_POST["type"]."' WHERE id='".$_POST["id"]."'");
                header("location: ?action=calendar");
            }
            elseif($_POST["validate"] == "modifCancelAccount")
            {
                header("location: ?action=myAccount");
            }
            elseif($_POST["validate"] == "modifCancelEvent")
            {
                header("location: ?action=calendar");
            }
        }
    }
    catch (\PDOException $pdoerror)
    {
        $GLOBALS["alert"]->setAlert($pdoerror->getMessage(), "danger", "warning");
    }

    require(VIEWS."modification.php");
}

?>