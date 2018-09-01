<?php
namespace Src;

abstract class TemplateTariff implements ICalculator
{
    private $pricePerTime;
    private $pricePerDistance;

    abstract public function countTariff();

    public function __construct($years, $gps = false, $extraDriver = false, $spendTime, $spendDistance)
    {
        $this->years = $years;
        $this->gps = $gps;
        $this->extraDriver = $extraDriver;
        $this->spendTime = $spendTime;
        $this->spendDistance = $spendDistance;
        $this->pricePerDistance;
        $this->pricePerTime;
    }

    // Count spend money on distance

    public function countPriceDistance()
    {
        $this->pricePerDistance * $this->spendDistance;
    }

    // Count spend money on time

    public function countPriceTime()
    {
        $this->spendTime * $this->pricePerTime;
    }


}
