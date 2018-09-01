<?php
namespace Src;

class BaseTariff extends TemplateTariff
{
    private $pricePerTime = 3;
    private $pricePerDistance = 10;

    public function countTariff()
    {
        $this->countPriceDistance() + $this->countPriceTime();
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



