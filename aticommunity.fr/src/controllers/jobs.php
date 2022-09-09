<?php 

function jobs()
{
    try
    {
        $odd = $GLOBALS["database"]->query("SELECT name,img_url,description,url FROM cv WHERE MOD(id, 2) <> 0 ORDER BY id")->fetchAll(\PDO::FETCH_ASSOC);
        $even = $GLOBALS["database"]->query("SELECT name,img_url,description,url FROM cv WHERE MOD(id, 2) = 0 ORDER BY id")->fetchAll(\PDO::FETCH_ASSOC);
    }
    catch (\PDOException $pdoerror)
    {
        $GLOBALS["alert"]->setAlert($pdoerror->getMessage(), "danger", "warning");
    }

    require(VIEWS."jobs.php");
}

?>