<?php

$student = [
    [
        'nama' => 'Andi',
        'nilai' => [80, 78, 82, 78, 88]
    ],
    [
        'nama' => 'Beni',
        'nilai' => [86, 70, 80, 85, 81]
    ],
    [
        'nama' => 'Dani',
        'nilai' => [83, 91, 70, 73, 81]
    ],
    [
        'nama' => 'Eko',
        'nilai' => [89, 85, 84, 86, 88]
    ]
];

foreach ($student as $students) {
    // array sum untuk menjumlahkan semua nilai yang ada di $student
    $total = array_sum($students['nilai']);
    echo "Total nilai {$students['nama']}: {$total}<br>";
}

?>
