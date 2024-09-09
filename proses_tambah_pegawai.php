<?php
if ($_POST) {
    $nik=$_POST['nik'];
    $nama_pegawai=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $jenis_kelamin=$_POST['jenis_kelamin'];
    $no_telepon=$_POST['no_telepon'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $id_jabatan=$_POST['id_jabatan'];
    if(empty($nama_pegawai)){
        echo "<script>alert('Username pegawai tidak boleh kosong');location.href='tambah_pegawai.php';</script>";
    }
    else{
        include "koneksi.php";
        $insert=mysqli_query($conn, "INSERT INTO pegawai (nik, nama, alamat, jenis_kelamin, no_telepon, username, password, id_jabatan) VALUE ('".$nik."', '".$nama_pegawai."', '".$alamat."', '".$jenis_kelamin."', '".$no_telepon."', '".$username."', '".md5($password)."', '".$id_jabatan."')") or die(mysqli_error($conn));
        
        if ($insert) {
            echo "<script>alert('Sukses menambahkan pegawai');location.href='tampil_pegawai.php';</script>";
        }
        else{
            echo "<script>alert('Gagal menambahkan pegawai');location.href='tambah_pegawai.php';</script>";
        }

        }
    }
?>