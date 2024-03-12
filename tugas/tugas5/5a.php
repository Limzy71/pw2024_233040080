<?php
    $mahasiswa = [
        [
            "nrp" => "043040023",
            "nama" => "Sandhika Galih",
            "email" => "sandhikagalih@unpas.ac.id",
            "jurusan" => "Teknik Informatika",
            "gambar" => "sandhika.jpg"
        ],

        [
            "nrp" => "033040001",
            "nama" => "Doddy Ferdiansyah",
            "email" => "doddy@unpas.ac.id",
            "jurusan" => "Teknik Industri",
            "gambar" => "1.jpg"
        ],

        [
            "nrp" => "233040021",
            "nama" => "La Ode Muh. Ikhsan",
            "email" => "ikhsan@unpas.ac.id",
            "jurusan" => "Teknik Informatika",
            "gambar" => "2.jpg"
        ],

        [
            "nrp" => "233040022",
            "nama" => "Murod Fikri Fadlurohman",
            "email" => "murod@unpas.ac.id",
            "jurusan" => "Teknik Informatika",
            "gambar" => "3.jpg"
        ],

        [
            "nrp" => "233040023",
            "nama" => "Muhammad Wildan Tubagus",
            "email" => "wildan@unpas.ac.id",
            "jurusan" => "Teknik Informatika",
            "gambar" => "4.jpg"
        
        ],

        [
            "nrp" => "033040024",
            "nama" => "Ariel Wijaya",
            "email" => "ariel@unpas.ac.id",
            "jurusan" => "Teknik Industri",
            "jurusan" => "Teknik Informatika",
            "gambar" => "5.jpg"
        ],

        [
            "nrp" => "033040025",
            "nama" => "Rizki Nurhidayat",
            "email" => "rizki@unpas.ac.id",
            "jurusan" => "Teknik Informatika",
            "gambar" => "6.jpg"
        ],

        [
            "nrp" => "033040026",
            "nama" => "Akbar Maku",
            "email" => "akbar@unpas.ac.id",
            "jurusan" => "Teknik Informatika",
            "gambar" => "7.jpg"
        ],

        [
            "nrp" => "033040027",
            "nama" => "Rianda Rafki",
            "email" => "rafki@unpas.ac.id",
            "jurusan" => "Teknik Informatika",
            "gambar" => "8.jpg"
        ],

        [
            "nrp" => "033040028",
            "nama" => "Muhammad Fajri",
            "email" => "fajri@unpas.ac.id",
            "jurusan" => "Teknik Informatika",
            "gambar" => "9.jpg"
        ],

    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 5</title>

    <style>
        img {
            width: 280px;
            height: 300px;
        }
    </style>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach ( $mahasiswa as $mhs ) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>">
            </li>
            <li><?php echo $mhs ["nama"]; ?></li>
            <li><?php echo $mhs ["nrp"]; ?></li>
            <li><?php echo $mhs ["jurusan"]; ?></li>
            <li><?php echo $mhs ["email"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>
</html>