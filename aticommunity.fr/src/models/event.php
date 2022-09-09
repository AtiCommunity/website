<?php

namespace AtiCommunity;

class Event
{
    private $months = ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"];
    private $days = ["Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi","Dimanche"];
    private $year;
    private $month;
    private $day;

    public function __construct(?int $year = null, ?int $month = null, ?int $day = null)
    {
        $this->month = strval($this->months[$month-1]);
    }

    public function getMonth() : String
    {
        return $this->month;
    }
}

?>