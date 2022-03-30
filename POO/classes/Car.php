<?php

require_once 'classes/CharacteristicsDisplayable.php';

abstract class Car implements CharacteristicsDisplayable
{
    public float $price;
    public string $brand;

    public function __construct(float $price, string $brand)
    {
        $this->price = $price;
        $this->brand = $brand;
    }
    public function getDisplayCar(): array
    {
        return [
            'price' => $this->price,
            'brand' => $this->brand,
        ];
    }

    public function displayCharacteristics(): array
    {
        // TODO: Implement displayCharacteristics() method.
    }

    public abstract function getFinalPrice(): float;
}