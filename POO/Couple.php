<?php

class Couple
{
    public User $user1;
    public User $user2;

    /**
     * @param User $user1
     * @param User $user2
     */
    public function __construct(User $user1, User $user2)
    {
        $this->user1 = $user1;
        $this->user2 = $user2;
    }
}