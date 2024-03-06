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
    <?php

    require_once 'model.php';

    if(!isset($_POST["proses"])){
        header("location : index.php");
        exit;
    }
        $proses = $_POST['proses'];
        $nama_siswa = $_POST['nama_lengkap'];
        $mata_kuliah = $_POST['matkul'];
        $nilai_uts = $_POST['nilai_uts'];
        $nilai_uas = $_POST['nilai_uas'];
        $nilai_tugas = $_POST['nilai_tugas'];

        $total_nilai = ($nilai_uts + $nilai_uas + $nilai_tugas)/3 ;
    
        echo '';
        echo 'Proses : ' . $proses;
        echo '<br/>Nama : ' . $nama_siswa;
        echo '<br/>Mata Kuliah : ' . $mata_kuliah;
        echo '<br/>Nilai UTS : ' . $nilai_uts;
        echo '<br/>Nilai UAS : ' . $nilai_uas;
            echo '<br/>Nilai Tugas Praktikum : ' . $nilai_tugas;
            echo '<hr/>';
            echo '<div><br/>Rata-rata : ' . $total_nilai.'</div>';
        echo '<hr/>';
        echo '<div><br>Dinyatakan : '. kelulusan($total_nilai);
        echo '<br>GRADE : '. grade($total_nilai).'</div>';
        echo '<hr>';
    ?>
</div>
</body>
</html>