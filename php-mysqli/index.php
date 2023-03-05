<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "akademik";

$koneksi = mysqli_connect($host, $user, $pass, $db);
if (!$koneksi) { // cek koneksi
    die("Tidak bisa terkoneksi ke database");
}
//else {
    //echo "Koneksi berhasil";
//}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Data Mahasiswa</title>
</head>
<body>
    <div class="max-auto">
        <!-- Untuk memasukkan data -->
        <div class="card">
            <div class="card-header"> Create / Edit Data </div>
            <div class="card-body">
                <form action="" method="POST">

                </form>
            </div>
        </div>
        <!-- Untuk memnampilkan data -->
        <div class="card">
            <div class="card-header"> Data Mahasiswa </div>
            <div class="card-body">
                
            </div>
        </div>
    </div>
</body>
</html>