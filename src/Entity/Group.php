<?php

namespace App\Entity;

class Group
{
    private Teacher $groupLead;
    private array $students;

    public function __construct(Teacher $groupLead, array $students)
    {
        if (empty($students)) {
            throw new \Exception("No students added to group");
        }

        $this->groupLead = $groupLead;
        $this->students = $students;
    }

    public function getGroupLead(): Teacher
    {
        return $this->groupLead;
    }

    public function setGroupLead(Teacher $groupLead): void
    {
        $this->groupLead = $groupLead;
    }

    public function getStudents(): array
    {
        return $this->students;
    }

    public function setStudents(array $students): void
    {
        $this->students = $students;
    }

    /**
     * @throws \Exception
     */
    public function getGroupAverageGrade(): float
    {
        if (count($this->students) === 0) {
            throw new \Exception("Cannot calculate group average. No students in the group.");
        }

        $total = 0;
        foreach ($this->students as $student) {
            $total += $student->getAverageGrade();
        }

        return $total / count($this->students);
    }

    public function __toString(): string
    {
        $studentNames = array_map(fn($student) => $student->getName(), $this->students);

        return "Group of " . $this->groupLead->getName() . ": " . implode(", ", $studentNames) . "\n";
    }
}