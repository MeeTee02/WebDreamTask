<?php

namespace App\Entity;

abstract class Human
{
    protected string $name;
    protected string $gender;
    protected int $birthYear;

    public function __construct(string $name, string $gender, int $birthYear)
    {
        $this->name = $name;
        $this->gender = $gender;
        $this->birthYear = $birthYear;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getGender(): string
    {
        return $this->gender;
    }

    public function setGender(string $gender): void
    {
        $this->gender = $gender;
    }

    public function getBirthYear(): int
    {
        return $this->birthYear;
    }

    public function setBirthYear(int $birthYear): void
    {
        $this->birthYear = $birthYear;
    }
}