<?php


class NightsWatch
{
    public $fighters;
    public $civils;

    public function __construct()
    {
        $this->fighters = array();
        $this->civils = array();
    }
    public function recruit($man)
    {
        if (method_exists($man, "fight"))
            $this->fighters[] = $man;
        else
            $this->civils = $man;
    }
    public function fight() {
        foreach($this->fighters as $fighter) {
            $fighter->fight();
        }
    }
}