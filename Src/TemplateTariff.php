<?php
namespace Src;

abstract class TemplateTariff implements ICalculator
{
    const PRICE_PER_TIME = 0;
    const PRICE_PER_DISTANCE = 0;
    public $years;
    public $gps;
    public $extraDriver;
    public $spendTime;
    public $spendDistance;


    public function testYears() {
        if (($this->years > 18) && ($this->years < 65)) {
            $this->total();
        } elseif ($this->years < 18) {
            echo 'Ваш возраст меньше 18';
            die;
        } elseif ($this->years > 65) {
            echo 'Ваш возраст больше 65';
            die;
        }
    }

    public abstract function total();

    public function __construct($years, $spendTime, $spendDistance, $gps = false, $extraDriver = false)
    {
        $this->years = $years;
        $this->gps = $gps;
        $this->extraDriver = $extraDriver;
        $this->spendTime = $spendTime;
        $this->spendDistance = $spendDistance;
    }

    // Count spend money on distance



}
