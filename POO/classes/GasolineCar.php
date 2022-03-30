<?php

require_once 'Car.php';
class GasolineCar extends Car
{
    public float $rejetCo2;

    public function __construct(float $price, string $brand, string $rejetCo2)
    {
        parent::__construct($price, $brand);
        $this->rejetCo2 = $rejetCo2;

    }
    public function getDisplayCar(): array
    {
        $characteristics = parent::getDisplayCar();
        $characteristics['rejetCo2'] = $this->rejetCo2;

        return $characteristics;
    }

    public function getFinalPrice(): float
    {
        $excessiveEmission = $this->rejetCo2 - 119;
        if ($excessiveEmission <= 0){
            return $this->price;
        } else {
            return $this->price + 50 * $excessiveEmission;
        }
    }
}