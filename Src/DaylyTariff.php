<?php
namespace Src;

class DaylyTariff extends TemplateTariff
{
    public function countTariff($pricePerTime, $pricePerDistance, $spendTime, $spendDistance)
    {
        if (($this->years >= 18) && ($this->years <= 65)) {
            if ($this->extraSer == false) {
                return ($pricePerTime / 1440) * $spendTime + $pricePerDistance * $spendDistance;
            } else {
                return $pricePerTime * $spendTime + $pricePerDistance * $spendDistance;
            }

        } else {
            echo "Вы не проходите по возрасту";
        }
    }
}

