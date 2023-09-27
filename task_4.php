<?php
function calculateAverageGrades($studentGrades)
{
    foreach ($studentGrades as $student => $grades) {
        $totalGrade = array_sum($grades);
        $numSubjects = count($grades);
        $averageGrade = $totalGrade / $numSubjects;

        $letterGrade = '';

        if ($averageGrade >= 95) {
            $letterGrade = 'A+';
        } elseif ($averageGrade >= 90) {
            $letterGrade = 'A';
        } elseif ($averageGrade >= 80) {
            $letterGrade = 'B';
        } else {
            $letterGrade = 'C';
        }

        echo "Student: $student\n";
        echo "Average grade: $averageGrade\n";
        echo "Letter grade: $letterGrade\n";
        echo "\n";
    }
}

$studentGrades = [
    "student_1" => [100, 90, 80], 
    "student_2" => [90, 85, 95], 
    "student_3" => [80, 75, 85], 
];

calculateAverageGrades($studentGrades);

?>