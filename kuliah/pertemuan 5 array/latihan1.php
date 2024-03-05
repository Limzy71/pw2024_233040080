<?php

// 1. Membuat Array
// Array di mulai dari ANGKA 0, 1, 2, dan seterusnya

    $hari = array("Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu", "Mingugu"); //cara pertama (jadul)
    $bulan = ["Januari", "Febuary", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"]; //cara baru
    $mahasiswa = ["Ikhsan", 2.5 ,true];

// 2. Mencetak isi Array
// mencetak satu elemen pada array, menggunkan index

echo $hari[2];
echo "<br>";
echo $bulan [0];
echo "<br>";
echo $mahasiswa [0];
echo "<hr>";

// Mencetak seluruh isi array
// digunkan khusus debugging
//var_dump () atau print_r ()

var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<br>";
var_dump($mahasiswa);
echo "<br>";
print_r($mahasiswa);

// 3. Mwmanipulasi Array
// Menambah isi array
// di akhir array: [] atau array_push()

echo "<hr>";
$hari [] = "kamis";
$hari [] = "jum'at";
print_r($hari);
echo "<br>";
array_push($bulan, "April", "Mei");
print_r($bulan);
echo "<br>";

// di awal array : array_unshift()

array_unshift($mahasiswa, "233040080");
print_r($mahasiswa);

// menghapus isi array
// di akhir: array_pop() > untuk menghilangkan yang akhir
// di awal: array_shift() > untuk menghilangkan yang awal

array_pop($hari);
echo "<br>";
print_r($hari);
echo "<br>";
array_shift($bulan);
echo "<br>";
print_r($bulan);

