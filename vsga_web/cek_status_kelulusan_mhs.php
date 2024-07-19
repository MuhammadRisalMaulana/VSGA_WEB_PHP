<?php

    function hitungNilaiAkhir($q1, $q2, $uts, $uas, $proyek) {
        return ($q1 * 0.1) + ($q2 * 0.1) + ($uts * 0.1) + ($uas * 0.2) + ($proyek * 0.5);
    }

    $nim = "2231750003";
    $nama = "Muhammad Risal Maulana";
    $nilai_q1 = 80;
    $nilai_q2 = 85;
    $nilai_uts = 75;
    $nilai_uas = 90;
    $nilai_proyek = 95;

    $nilai_akhir = hitungNilaiAkhir($nilai_q1, $nilai_q2, $nilai_uts, $nilai_uas, $nilai_proyek);

    $status_kelulusan = $nilai_akhir > 60 ? "Lulus" : "Tidak Lulus";

    echo "<h3>Laporan Nilai Mahasiswa :</h3>";
    echo "NIM: " . $nim . "<br>";
    echo "Nama: " . $nama . "<br>";
    echo "Nilai Q1: " . $nilai_q1 . "<br>";
    echo "Nilai Q2: " . $nilai_q2 . "<br>";
    echo "Nilai UTS: " . $nilai_uts . "<br>";
    echo "Nilai UAS: " . $nilai_uas . "<br>";
    echo "Nilai Proyek: " . $nilai_proyek . "<br>";
    echo "Nilai Akhir: " . $nilai_akhir . "<br>";
    echo "Status Kelulusan: " . $status_kelulusan . "<br>";
?>