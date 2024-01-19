<?php

function convertAmToPm($time)
{
    $hours = substr($time, 0, 2);
    // mengambil 2 karakter pertama lalu disimpan ke variabel hours, digunakan untuk mendapatkan jam.
    $minutes = substr($time, 3, 2);
    // mengambil 2 karakter pertama setelah kearakter ke 3 lalu disimpan ke variabel minutes, digunakan untuk mendapatkan menit.
    $ampm = 'am';
    // menginisialisasi dengan nilai awal am (waktu awalnya adalah pagi)
    
    if ($hours > 12) {
        $hours -= 12;
        $ampm = 'pm';
    }
    // jika jam lebih dari jam 12, maka dikurang 12 dan ampm diubah jadi pm

    return "$hours:$minutes $ampm";
    // mengembalikan string yang terbentuk dari jam yang sudah diubah, menit, dan AM/PM, dipisahkan dengan titik dua.
}

echo convertAmToPm('11:00');
echo '<br>';
echo convertAmToPm('12:45');
echo '<br>';
echo convertAmToPm('21:55');

?>
