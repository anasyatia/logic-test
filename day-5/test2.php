<?php

$jamKerjaPerHari = 8 * 60;
$istirahatShalat = 20;
$istirahatMakan = 30;

function waktuKerja($jamKerjaHarian, $istirahatShalat, $istirahatMakan) {
    $totalIstirahat = $istirahatShalat + $istirahatMakan;
    $waktuKerja = $jamKerjaHarian - $totalIstirahat;
    return $waktuKerja;
}

// Menghitung waktu kerja
$waktuKerja = waktuKerja($jamKerjaPerHari, $istirahatShalat, $istirahatMakan);

echo "Waktu Kerja Pegawai: $waktuKerja menit per hari";

?>
