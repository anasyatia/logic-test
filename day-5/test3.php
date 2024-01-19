<?php

    $a = 9;

    function hitungSuku($a, $n) {
        return $a * 4 + $n * 3;
    }

    for ($n = 1; $n <= 12; $n++) {
        $result = hitungSuku($a, $n);
        echo "Suku ke-$n: $result<br>";
    }
    
?>
