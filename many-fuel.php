<?php
    class Car
    {
        private float $tank;

        public function __construct(float $tank = 0)
        {
            $this->tank = $tank;
        }

        //getters
        public function getTank(): float
        {
            return $this->tank;
        }

        //setters
        public function setTank(float $tank): self
        {
            $this->tank = $tank;
            return $this;
        }
        
        //self tu ne sert a rien mon pote
        /* public function add_fuel(float $to_add): 
        {
            $this->tank += $to_add;
            return $this;
        } */

        public function ride(float $distance): self
        {
            (float)$res = $distance / 20;
            echo $res;
            echo "\n";
            $this->tank -= $res;
            echo $this->tank;
            echo "\n";
            return $this;
        }
        // abdel zebii
    }