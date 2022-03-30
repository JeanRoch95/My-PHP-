<?php

require_once 'Car.php';
class ElectricCar extends Car
{
    public float $autonomy;

    public function __construct(float $price, string $brand, string $autonomy)
    {
        parent::__construct($price, $brand);
        $this->autonomy = $autonomy;
    }
    public function getDisplayCar(): array
    {
        $characteristics = parent::getDisplayCar();
        $characteristics['autonomy'] = $this->autonomy;

        return $characteristics;
    }

    public function getFinalPrice(): float
    {
        return $this->price - 2500;
    }
}