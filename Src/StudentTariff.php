<?php
namespace Src;

class StudentTariff extends TemplateTariff
{
    public function countTariff($pricePerTime, $pricePerDistance, $spendTime, $spendDistance)
    {
        if (($this->years >= 18) && ($this->years <= 24)) {
            if ($this->extraSer == false) {
                return $pricePerTime  * $spendTime + $pricePerDistance * $spendDistance;
            } else {
                return $pricePerTime * $spendTime + $pricePerDistance * $spendDistance;
            }

        } else {
            echo "Вы не проходите по возрасту";
        }
    }
}

