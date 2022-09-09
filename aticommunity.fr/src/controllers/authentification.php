<?php 

function authentification()
{
    if(isset($_POST["validate"]) && $_POST["validate"] == "login")
    {
        try
        {
            $result = $GLOBALS["database"]->query("SELECT id,privilege,password FROM users WHERE username='".$_POST["loginUsername"]."'")->fetch(\PDO::FETCH_ASSOC);
            if(password_verify($_POST["loginPassword"], $result["password"]))
            {
                $_SESSION["id"] = $result["id"];
                $_SESSION["privilege"] = $result["privilege"];
                header("location: ?action=home");
            }
            else
            {
                $GLOBALS["alert"]->setAlert("Nom d'utilisateur ou mot de passe incorrect.", "danger", "warning");
            }
        }
        catch (\PDOException $pdoerror)
        {
            $GLOBALS["alert"]->setAlert($pdoerror->getMessage(), "danger", "warning");
        }

        
    }

    if(isset($_POST["validate"]) && $_POST["validate"] == "signup")
    {
        try
        {
            $result = $GLOBALS["database"]->query("SELECT COUNT(id) as count FROM users WHERE username='".$_POST["signupUsername"]."'")->fetch(\PDO::FETCH_ASSOC);
            if($result["count"] == 0)
            {
                $GLOBALS["database"]->query("INSERT INTO users (username,surname,name,password,email,privilege) VALUES ('".strip_tags($_POST["signupUsername"])."','".strip_tags(strtoupper($_POST["signupSurname"]))."','".strip_tags(ucwords($_POST["signupName"]))."','".password_hash(strip_tags($_POST["signupPassword"]), PASSWORD_DEFAULT)."','".strip_tags(strtolower($_POST["signupEmail"]))."','user')");
                $GLOBALS["alert"]->setAlert("Compte enregistré avec succès. Veuillez-vous connecter.", "success", "check");
            }
            else $GLOBALS["alert"]->setAlert("Nom d'utilisateur déjà utilisé.", "danger", "warning");
        }
        catch (\PDOException $pdoerror)
        {
            $GLOBALS["alert"]->setAlert($pdoerror->getMessage(), "danger", "warning");
        }
    }

    require(VIEWS."authentification.php");
}

?>