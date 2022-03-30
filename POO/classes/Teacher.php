<?php

require_once 'classes/Course.php';
require_once 'classes/Person.php';

class Teacher extends Person
{
    public Course $course;

    public function __construct(string $firstName, string $lastname, Course $course)
    {
        parent::__construct($firstName, $lastname);
        $this->course = $course;
    }

    public function getFullName(): string
    {
        return 'Professeur : '.parent::getFullName();
    }

    public function getDescription(): string
    {
        return 'Enseigne '.$this->course->title;
    }
}