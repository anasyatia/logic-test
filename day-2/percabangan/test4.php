<?php

    $nilai = 100;

    if($nilai <= 100 && $nilai >= 90) {
        echo "kamu mendapatkan predikat A!";
    } elseif($nilai <= 90 && $nilai >= 75) {
        echo "kamu mendapatkan predikat B!";
    } elseif($nilai <= 75 && $nilai >= 0) {
        echo "kamu mendapatkan predikat C...";
    } else {
        echo "apacb";
    }

?>