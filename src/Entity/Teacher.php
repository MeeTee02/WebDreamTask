<?php

namespace App\Entity;

class Teacher extends Human
{
    private string $relStatus;

    public function __construct(string $name, string $gender, int $birthYear, string $relStatus)
    {
        parent::__construct($name, $gender, $birthYear);
        $this->relStatus = $relStatus;
    }

    public function getRelStatus(): string
    {
        return $this->relStatus;
    }

    public function setRelStatus(string $rel_status): void
    {
        $this->relStatus = $rel_status;
    }
}