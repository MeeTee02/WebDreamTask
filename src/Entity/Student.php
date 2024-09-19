<?php

namespace App\Entity;

class Student extends Human
{
    private string $school;
    private array $grades;

    /**
     * @throws \Exception
     */
    public function __construct(string $name, string $gender, int $birthYear, string $school, array $grades)
    {
        parent::__construct($name, $gender, $birthYear);

        foreach ($grades as $grade) {
            if ($grade < 1 || $grade > 5) {
                throw new \Exception("Grade " . $grade . " is out of range");
            }
        }

        $this->school = $school;
        $this->grades = $grades;
    }

    public function getSchool(): string
    {
        return $this->school;
    }

    public function setSchool(string $school): void
    {
        $this->school = $school;
    }

    public function getGrades(): array
    {
        return $this->grades;
    }

    public function setGrades(array $grades): void
    {
        $this->grades = $grades;
    }

    /**
     * @throws \Exception
     */
    public function getAverageGrade(): float
    {
        if (count($this->grades) === 0) {
            throw new \Exception("There are no grades available");
        }

        return array_sum($this->grades) / count($this->grades);
    }

    public function __toString(): string
    {
        $grades = implode(', ', $this->grades);

        return "Name: {$this->getName()}\n
         Gender: {$this->getGender()}\n
         Birth Year: {$this->getBirthYear()}}\n 
         School: {$this->getSchool()}\n
         Grades: {$grades}\n\n";
    }
}