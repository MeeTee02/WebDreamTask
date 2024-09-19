<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Entity\Group;
use App\Entity\Student;
use App\Entity\Teacher;

try {
    // Teachers
    $teacher1 = new Teacher("Teacher One", "Male", 1980, "Single");
    $teacher2 = new Teacher("Teacher Two", "Female", 1975, "Married");
    $teacher3 = new Teacher("Teacher Three", "Female", 1985, "Single");

    // Students
    $student1 = new Student("Student One", "Female", 2005, "Central High", [4, 5, 3, 4]);
    $student2 = new Student("Student Two", "Male", 2006, "Central High", [3, 4, 2, 5]);
    $student3 = new Student("Student Three", "Male", 2004, "North High", [5, 4, 4, 3, 5]);
    $student4 = new Student("Student Four", "Female", 2005, "North High", [2, 3, 4, 4]);
    $student5 = new Student("Student Five", "Female", 2006, "South High", [4, 5, 5, 4]);
    $student6 = new Student("Student Six", "Male", 2004, "South High", [3, 4, 2, 5]);

    echo $student1 . "\n\n";
    echo "Average grade of {$student1->getName()}: " . $student1->getAverageGrade() . "\n\n";

    // Groups
    $group1 = new Group($teacher1, [$student1, $student2]);
    $group2 = new Group($teacher2, [$student3, $student4]);
    $group3 = new Group($teacher3, [$student5, $student6]);

    echo $group1;
    echo $group2;
    echo $group3;

    echo "\n";

    echo "Average Grade for {$group1->getGroupLead()->getName()}'s group: " . $group1->getGroupAverageGrade() . "\n";
    echo "Average Grade for {$group2->getGroupLead()->getName()}'s group: " . $group2->getGroupAverageGrade() . "\n";
    echo "Average Grade for {$group3->getGroupLead()->getName()}'s group: " . $group3->getGroupAverageGrade() . "\n";
} catch (\Exception $e) {
    echo "An error occurred: " . $e->getMessage() . "\n";
}
