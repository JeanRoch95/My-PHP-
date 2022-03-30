<?php

abstract class Product implements Tooltipable
{
    public string $name;
    public float $price;


    public function __construct(string $name, float $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function getTittle(): string
    {
        return $this->name;
    }

    public abstract function getFullPrice(): float;
}