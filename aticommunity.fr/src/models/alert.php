<?php 

namespace AtiCommunity;

class Alert
{
    private $alert;
    private $message;
    private $mode;
    private $icon;

    public function __construct()
    {
        $this->alert = "";
        $this->message = "";
        $this->mode = "";
        $this->icon = "";
    }

    public function setAlert(?String $message, ?String $mode = "", ?String $icon = "") : void
    {
        if($mode == "") $this->mode = "primary";
        else $this->mode = $mode;
        if($icon == "info") $this->icon = "<i class='fa-solid fa-circle-info'></i>";
        if($icon == "check") $this->icon = "<i class='fa-solid fa-circle-check'></i>";
        if($icon == "warning") $this->icon = "<i class='fa-solid fa-triangle-exclamation'></i>";
        $this->message = $message;
        $this->alert = "<div class='alert alert-".$this->mode." text-justify mt-3 mx-3' role='alert'>".$this->icon." ".$this->message."</div>";
    }

    public function getAlert() : string
    {
        return $this->alert;
    }
}

?>