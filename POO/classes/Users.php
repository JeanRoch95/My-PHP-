<?php

require_once 'classes/Tooltipable.php';

class Users implements Tooltipable
{
    public string $username;
    public string $email;

    /**
     * @param string $username
     * @param string $email
     */
    public function __construct(string $username, string $email)
    {
        $this->username = $username;
        $this->email = $email;
    }

    public function getDisplayName(): string
    {
        return $this->username.' ('.$this->email.')';
    }

    public function getTittle(): string
    {
        return $this->getDisplayName();
    }

    public function getDescription(): string
    {
        return 'Je m\'appelle : '.$this->username;
    }
}