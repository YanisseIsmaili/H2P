<?php
    abstract class AbstractGeometry
    {
        abstract public function area(): int|float;
        abstract public function perimeter(): int|float;

    }

    class Rectangle extends AbstractGeometry
    {
        private int|float $width;
        private int|float $height;

        public function __construct(int|float $width = 0, int|float $height = 0)
        {
            $this->width = $width;
            $this->height = $height;
        }

        public function area(): int|float
        {
            return $this->width * $this->height;
        }

        public function perimeter(): int|float
        {
            return ($this->width + $this->height) * 2;
        }
    }
    