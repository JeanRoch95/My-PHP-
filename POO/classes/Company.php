<?php

require_once 'classes/Tooltipable.php';

class Company implements Tooltipable
{
    public string $name;
    public string $address;

    public function __construct(string $name, string $address)
    {
        $this->name = $name;
        $this->address = $address;
    }

    public function getTittle(): string
    {
        return $this->name;
    }

    public function getDescription(): string
    {
        return 'Entreprise : '.$this->name.' , siège social : '.$this->address;
    }
}