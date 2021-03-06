<?php

class Fan
{
    private $SLOW;
    private $MEDIUM;
    private $FAST;
    private $SEEP;
    private $on;
    private $radius;
    private $color;

    public function __construct()
    {
        $this->SLOW = 1;
        $this->MEDIUM = 2;
        $this->FAST = 3;
        $this->SEEP = $this->SLOW;
        $this->on = false;
        $this->radius = 5;
        $this->color = "blue";
    }

    public function getSLOW(): int
    {
        return $this->SLOW;
    }

    public function setSLOW(int $SLOW): void
    {
        $this->SLOW = $SLOW;
    }

    public function getMEDIUM(): int
    {
        return $this->MEDIUM;
    }

    public function setMEDIUM(int $MEDIUM): void
    {
        $this->MEDIUM = $MEDIUM;
    }

    public function getFAST(): int
    {
        return $this->FAST;
    }

    public function setFAST(int $FAST): void
    {
        $this->FAST = $FAST;
    }

    public function getSEEP(): int
    {
        return $this->SEEP;
    }

    public function setSEEP(int $SEEP): void
    {
        $this->SEEP = $SEEP;
    }

    public function getOn(): bool
    {
        return $this->on;
    }

    public function setOn(bool $on): void
    {
        $this->on = $on;
    }

    public function getRadius(): int
    {
        return $this->radius;
    }

    public function setRadius(int $radius): void
    {
        $this->radius = $radius;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function toString()
    {
        if ($this->on == true) {
         return " Speed: ".$this->SEEP ." Color: " .$this->color ." Radius: ". $this->radius." Status:". " fan is on";
        }
        else{
        return  " Color:".  $this->color . " Radius: ". $this->radius." Status:". " fan is off";
        }

    }
}

?>