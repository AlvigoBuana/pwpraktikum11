<?php 
    include "koneksi.php";
    // Mendapatkan data dari form
    Snim = $POST['nim'];
    $nama = $POST['nama'];
    $no_hp $_POST['no_hp'];
    $jenis_kelamin = $POST['jenis kelamin'];
    $jurusan = $POST['jurusan'];
    $alamat =  $POST['alamat'];

    //Query tambah data mahasiswa
    $sql "INSERT INTO mahasiswa (nim, nama, no hp, jenis kelamin, jurusan, alamat) VALUES ('$nim', '$nama', $no_hp', '$jenis_kelamin', '$jurusan', '$alamat')";
    if (mysqli_query($link,$sql )){
    header("location:tampil_data.php");
    } else {
    header("location:form_tambah.php");
    }
    
?>