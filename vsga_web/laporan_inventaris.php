<?php
    $nama_produk = "Laptop";
    $jumlah_produk = 10;
    $harga_per_produk = 7000000; 
    $status_ketersediaan = true; 

    $total_nilai_inventaris = $jumlah_produk * $harga_per_produk;

    echo "<h1>Laporan Inventaris</h1>";
    echo "Nama Produk : " . $nama_produk . "<br>";
    echo "Jumlah Produk : " . $jumlah_produk . "<br>";
    echo "Harga per Produk : Rp" . number_format($harga_per_produk, 0, ',', '.') . "<br>";
    echo "Total Nilai Inventaris : Rp" . number_format($total_nilai_inventaris, 0, ',', '.') . "<br>";
    echo "Status Ketersediaan : " . ($status_ketersediaan ? "Tersedia" : "Tidak Tersedia") . "<br>";
?>