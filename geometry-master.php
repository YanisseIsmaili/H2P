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

    class Square extends AbstractGeometry
    {
        private int|float $side;

        public function __construct(int|float $side = 0)
        {
            $this->side = $side;
        }

        public function area(): int|float
        {
            return $this->side * $this->side;
        }

        public function perimeter(): int|float
        {
            return $this->side * 4;
        }

    }
    
    class Triangle extends AbstractGeometry
    {
        private int|float $side1;
        private int|float $side2;
        private int|float $side3;

        public function __construct(int|float $side1 = 0, int|float $side2 = 0, int|float $side3 =0)
        {
            $this->side1 = $side1;
            $this->side2 = $side2;
            $this->side3 = $side3;
        }

        public function area(): int|float
        {
            $p = ($this->side1 + $this->side2 + $this->side3) / 2;
            return sqrt($p * ($p - $this->side1) * ($p - $this->side2) * ($p - $this->side3));
        }

        public function perimeter(): int|float
        {
            return $this->side1 + $this->side2 + $this->side3;
        }

    }
    
    /* print_r((new Triangle(6,6,6))->area()); */