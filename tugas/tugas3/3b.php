<?php 

function urutanAngka($angka){
    $a = 1;
    for($b = 1; $b <= $angka; $b++){
        for($c = 1; $c <= $b; $c++){
            echo $a . " ";
            $a++;
        }
        echo "<br>";
    }
}

urutanAngka(5);

?>