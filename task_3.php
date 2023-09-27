<?php

function sortGrades($grades){
    rsort($grades); 
    echo "Sorted Grades: ";
    print_r($grades);
}

$grades = [85, 92, 78, 88, 95];
sortGrades($grades);

