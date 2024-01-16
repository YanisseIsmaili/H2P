<?php
    
    interface PoolTempsInterface
    {
        public function getActualTemp(): int;
        public function getLastDaysTemps(): int;
        public function setHeater(bool $h): self;
    }