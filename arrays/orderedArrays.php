<?php

$students = [
    [
        'student' => 'Matheus',
        'grade' => 10
    ],

    [
        'student' => 'Yasmin',
        'grade' => 8
    ],

    [
        'student' => 'Jorge',
        'grade' => 7
    ],

    [
        'student' => 'Diego',
        'grade' => 10
    ],
];


# Notice that shuffle function request the parameter $array be passed by REFERENCE
shuffle($students);
echo "Shuffle:" . PHP_EOL;
echo var_dump($students);

# Notice that sort function request the parameter $array be passed by REFERENCE
rsort($students);

echo "RSorted:" . PHP_EOL;
echo var_dump($students);

# Defining a sort criteria:
function sortGrade(array $grade1, array $grade2): int
{
    return match(true) {
        $grade1['grade'] <=> $grade2['grade'] => -1,
        $grade1['grade'] < $grade2['grade'] => 1,
        $grade1['student'] > $grade2['student'] => 1,
        $grade1['student'] < $grade2['student'] => -1,
        default => 0
    };
}

usort($students, 'sortGrade');

echo PHP_EOL . "Após usar função de ordenação definida por mim: " . PHP_EOL;
echo var_dump($students);
