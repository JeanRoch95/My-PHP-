<?php

require_once 'classes/Product.php';

class HardDrive extends Product
{
    public int $capacity;
    public string $brand;

    public function __construct(string $name, float $price, int $capacity, string $brand)
    {
        parent::__construct($name, $price);
        $this->capacity = $capacity;
        $this->brand = $brand;
    }


    public function getFullPrice(): float
    {
        return $this->price * 1.2;
    }

    public function getDescription(): string
    {
        return 'Un disque dur de '.$this->capacity. ' de la marque '.$this->brand;
    }
}