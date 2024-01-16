<?php
    
    interface PoolTempsInterface
    {
        public function getActualTemp(): int;
        public function getLastDaysTemps(): int;
        public function setHeater(bool $h): self;
    }

    class PoolTemps implements PoolTempsInterface
    {
        public bool $isActive;
        private int $currentTemp;
        private array $lastDaysTemps;

        public function __construct(int $currentTemp,array $lastDaysTemps)
        {
            $this->isActive = false;
            $this->currentTemp = $currentTemp;
            $this->lastDaysTemps = $lastDaysTemps;
        }

        public function getActualTemp(): int
        {
            return $this->currentTemp;
        }

        public function getLastDaysTemps(): int
        {
            $sum = array_sum($this->lastDaysTemps);
            $avg = $sum / count($this->lastDaysTemps);
            return $avg;
        }

        public function setHeater(bool $heater): self
        {
            $this->isActive = $heater;
            return $this;
        }

        public function activateHeater(): self
        {
            if ($this->getLastDaysTemps() > 20 && $this->getActualTemp() >= 25) {
                $this->setHeater(true);
            } else {
                $this->setHeater(false);
            }
            return $this;
        }
    }
