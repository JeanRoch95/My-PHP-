<?php

require_once 'classes/Users.php';

class Seller extends Users
{

    public Company $company;

    public function __construct(string $username, string $email, Company $company)
    {
        parent::__construct($username, $email);
        $this->company = $company;
    }

    public function getDisplayName(): string
    {
        return $this->company->name. ' ' .parent::getDisplayName();
    }
}