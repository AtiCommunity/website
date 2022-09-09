<?php

namespace AtiCommunity;

class Calendar
{
    private $months = ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"];
    private $days = ["Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi","Dimanche"];
    private $year;
    private $month;
    private $week;
    private $today;

    public function __construct(?int $year = null, ?int $month = null, ?int $week = null)
    {
        $indexDay = intval(date('w'));
        $today = intval(date('d'));
        $nbFullWeek = intval($today/7);
        $lag = intval($today%7);
        if($year === null || $month === null || $week === null)
        {
            $year = intval(date('Y'));
            $month = intval(date('m'));
            if($lag > $indexDay) $week = $nbFullWeek+2;
            else $week = $nbFullWeek+1;
            header("location: ?action=calendar&year=$year&month=$month&week=$week");
        }
        if($month > 12) $month = 12;
        if($month < 1) $month = 1;
        if($year > intval(date('Y'))+100) $year = intval(date('Y'))+100;
        if($year < intval(date('Y'))-100) $year = intval(date('Y'))-100;
        $this->year = $year;
        $this->month = $month;
        $this->week = $week;
        $this->today = $today;
    }

    public function getFirstDayOfMonth() : \Datetime
    {
        return new \DateTime("{$this->year}-{$this->month}-01");
    }

    public function getDays() : array
    {
        return $this->days;
    }

    public function getToday() : int
    {
        return $this->today;
    }

    public function getWeek() : int
    {
        return $this->week;
    }

    public function getMonth() : int
    {
        return $this->month;
    }

    public function getYear() : int
    {
        return $this->year;

    }

    public function toString() : array
    {
        $result = [$this->year, $this->months[$this->month - 1], "Semaine ".$this->week];
        return $result;
    }

    public function withinMonth(\DateTime $date) : bool
    {
        return $this->getFirstDayOfMonth()->format('Y-m') === $date->format('Y-m');
    }

    public function nextWeek() : array
    {
        $year = $this->year;
        $month = $this->month;
        $week = $this->week+1;
        
        if($month > 12)
        {
            $year += 1;
            $month = 1;
        }
        
        if($week > 6)
        {
            $month += 1;
            $week = 1;
        }

        $result = [$year, $month, $week];
        
        return $result;
    }

    public function nextMonth() : array
    {
        $year = $this->year;
        $month = $this->month+1;
        $week = $this->week;
        
        if($month > 12)
        {
            $year += 1;
            $month = 1;
        }
        
        $result = [$year, $month, $week];

        return $result;
    }

    public function nextYear() : array
    {
        $year = $this->year+1;
        $month = $this->month;
        $week = $this->week;

        if($year > intval(date('Y'))+100) $year = intval(date('Y'))+100;

        $result = [$year, $month, $week];

        return $result;
    }

    public function previousWeek() : array
    {
        $year = $this->year;
        $month = $this->month;
        $week = $this->week-1;

        if($month < 1)
        {
            $year -= 1;
            $month = 12;
        }
        
        if($week < 1)
        {
            $month -= 1;
            $week = 6;
        }

        $result = [$year, $month, $week];
        
        return $result;
    }

    public function previousMonth() : array
    {
        $year = $this->year;
        $month = $this->month-1;
        $week = $this->week;
        
        if($month < 1)
        {
            $year -= 1;
            $month = 12;
        }

        $result = [$year, $month, $week];
        
        return $result;
    }

    public function previousYear() : array
    {
        $year = $this->year-1;
        $month = $this->month;
        $week = $this->week;

        if($year < intval(date('Y'))-100) $year = intval(date('Y'))-100;

        $result = [$year, $month, $week];

        return $result;
    }
}

?>