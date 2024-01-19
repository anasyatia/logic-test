<?php

    $bbbeni = 44;
    $tbbeni = 1.48;
    $kuadrat = $tbbeni * $tbbeni;
    $hasilimt = $bbbeni / $kuadrat;
    echo "IMT anda adalah $hasilimt";
    echo "<br>";

    if($hasilimt <= 18.5) {
        echo "Berat badan anda kurang";
    } elseif($hasilimt >= 18.5 && $hasilimt <= 22.9) {
        echo "Berat badan anda normal";
    } elseif($hasilimt >= 22.9 && $hasilimt <= 24.9) {
        echo "Berat badan anda lebih";
    } else {
        echo "Anda obesitas";
    }

?>