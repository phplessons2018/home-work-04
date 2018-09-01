<?php
namespace Src;

class HourlyTariff extends TemplateTariff
{
    const PRICE_PER_TIME = 200/60;
    const PRICE_PER_DISTANCE = 0;
    use GPS, ExtraDriver;



    // Result with check on students
    public function total()
    {
        if($this->years > 21) {
            return $this->standardConditions();
        } else {
            return $this->studentConditions();
        }
    }

    //  Check for activation of additional services for all users
    public function standardConditions()
    {
        if (($this->gps === false) && ($this->extraDriver === false)) {
            return $this->sumDistanceAndPrice();
        } elseif (($this->gps === true) && ($this->extraDriver === false)) {
            return $this->sumDistanceAndPrice() + $this->spendTime * $this->gpsSum();
        } elseif (($this->gps === false) && ($this->extraDriver === true)) {
            return $this->sumDistanceAndPrice() + $this->extraDriver();
        } elseif (($this->gps === true) && ($this->extraDriver === true)) {
            return $this->sumDistanceAndPrice() + $this->extraDriver() + ($this->spendTime * $this->gpsSum());
        }
    }

    //  Check for activation of additional services for students
    public function studentConditions()
    {
        if (($this->gps === false) && ($this->extraDriver === false)) {
            return $this->sumDistanceAndPriceForStudents();
        } elseif (($this->gps === true) && ($this->extraDriver === false)) {
            return $this->sumDistanceAndPriceForStudents() + $this->spendTime * $this->gpsSum();
        } elseif (($this->gps === false) && ($this->extraDriver === true)) {
            return $this->sumDistanceAndPriceForStudents() + $this->extraDriver();
        } elseif (($this->gps === true) && ($this->extraDriver === true)) {
            return $this->sumDistanceAndPriceForStudents() + $this->extraDriver() + ($this->spendTime * $this->gpsSum());
        }
    }


    //  Total result distance and time for students
    public function sumDistanceAndPriceForStudents() {
        return ($this->sumPriceDistance() + $this->sumPriceTime()) * 1.1;
    }

    //  Total result distance and time
    public function sumDistanceAndPrice() {
        return $this->sumPriceDistance() + $this->sumPriceTime();
    }

    // Sum spend money on distance
    public function sumPriceDistance()
    {
        return $this->spendDistance * self::PRICE_PER_DISTANCE;

    }

    // Sum spend money on time
    public function sumPriceTime()
    {
        return $this->spendTime * self::PRICE_PER_TIME;
    }



}


