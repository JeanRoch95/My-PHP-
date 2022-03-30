<?php

require_once 'classes/Product.php';

class Book extends Product
{
    public string $author;
    public int $pagesCount;

    /**
     * @param string $author
     * @param int $pagesCount
     */
    public function __construct(string $name, float $price, string $author, int $pagesCount)
    {
        parent::__construc($name, $price);
        $this->author = $author;
        $this->pagesCount = $pagesCount;
    }

    public function getFullPrice(): float
    {
        return $this->price * 1.055;
    }

    public function getDescription(): string
    {
        return 'Un livre de '.$this->author.' de '.$this->pagesCount.' pages';
    }
}