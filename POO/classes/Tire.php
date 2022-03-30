<?php

require_once 'classes/CharacteristicsDisplayable.php';

class Tire implements CharacteristicsDisplayable
{
    public string $largeur;
    public string $hauteur;
    public string $diametre;


    public function __construct(string $largeur, string $hauteur, string $diametre)
    {
        $this->largeur = $largeur;
        $this->hauteur = $hauteur;
        $this->diametre = $diametre;
    }

    public function getDisplayCar(): array
    {
        return [
            'width' => $this->largeur,
            'height' => $this->hauteur,
            'diameter' => $this->diametre,
        ];
    }

    public function displayCharacteristics(): array
    {
        // TODO: Implement displayCharacteristics() method.
    }
}