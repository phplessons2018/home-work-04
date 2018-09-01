<?php
namespace Src;

class HourlyTariff extends TemplateTariff
{
    public function countTariff($pricePerHours, $pricePerDistance, $spendTime, $spendDistance)
    {
        if (($this->years >= 18) && ($this->years <= 65)) {
            if ($this->extraSer == false) {
                return ($pricePerHours / 60) * $spendTime + $pricePerDistance * $spendDistance;
            } else {
                return $pricePerHours * $spendTime + $pricePerDistance * $spendDistance;
            }

        } else {
            echo "Вы не проходите по возрасту";
        }
    }
}


