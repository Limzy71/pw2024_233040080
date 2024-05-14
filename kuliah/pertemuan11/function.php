<?php

function koneksi()
{
  $conn = mysqli_connect('localhost', 'root', '', 'pw2024_233040080');
  return $conn;
}

function query($query)
{

  // Koneksi ke database
  $conn = koneksi();

  //query ke tabel mahasiswa
  $result = mysqli_query($conn, $query);

  //menyiapkan data mahasiswa
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;

    $mahasiswa = $rows;
  }
  return $rows;
}
