<?php

$courses = file('courses.txt');
$other_courses = file('other-courses.txt');

$csv_file = fopen('courses.csv', 'w');

foreach ($courses as $course)
{
    fputcsv($csv_file, [trim($course), 'yes'], ';');
}

foreach ($other_courses as $course)
{
    fputcsv($csv_file, [trim($course), 'no'], ';');
}

echo file_get_contents('courses.csv');