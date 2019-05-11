<?php

Class days
{
    public $days_number;
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }
    
    public function getDaysNumber()
    {
        return $this->days_number;
    }

    public function setDaysNumber($days_number)
    {
        $this->days_number = $days_number;
    }

    public function addDaysNumber($days_number)
    {

    }

    public function updateDaysNumber($days_number)
    {

    }

    public function removeDaysNumber($days_number)
    {

    }
}

