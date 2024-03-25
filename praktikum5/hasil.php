<?php 
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $nama_lengkap = $_POST['nama_lengkap'];
    $matkul = $_POST['matkul'];
    $nilai_uts = $_POST['nilai_uts'];
    $nilai_uas = $_POST['nilai_uas'];
    $nilai_tugas = $_POST['nilai_tugas'];
    
    include 'Mahasiswa.php';
    $Mahasiswa = new Mahasiswa($nama_lengkap, $matkul, $nilai_uts, $nilai_uas, $nilai_tugas);
    $hasilLulus = $Mahasiswa->hasilAkhir();
    $predikat = $Mahasiswa->predikat();
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
<div class="border shadow-sm w-75 mt-5 mx-auto p-4 ">
    <table class="table mt-5">
        <thead>
            <tr>
            <th scope="col">NO</th>
            <th scope="col">Nama</th>
            <th scope="col">Mata Kuliah</th>
            <th scope="col">Nilai UTS</th>
            <th scope="col">Nilai UAS</th>
            <th scope="col">Nilai Praktikum</th>
            <th scope="col">Hasil</th>
            <th scope="col">Predikat</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">1</th>
            <td><?= $nama_lengkap  ?> </td>
            <td><?= $matkul  ?> </td>
            <td><?= $nilai_uts ?></td>
            <td><?= $nilai_uas  ?> </td>
            <td><?= $nilai_tugas  ?> </td>
            <td><?= $hasilLulus ?></td>
            <td><?= $predikat ?></td>
            </tr>
        </tbody>
    </table>
</div>
</body>
</html>