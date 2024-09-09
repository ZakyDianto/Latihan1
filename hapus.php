<?php 
    if($_GET['id_pegawai']){
        include "koneksi.php";
        $qry_hapus=mysqli_query($conn,"DELETE from pegawai where id_pegawai='".$_GET['id_pegawai']."'");
        if($qry_hapus){
            echo "<script>alert('Sukses hapus pegawai');location.href='tampil_pegawai.php';</script>";
        } else {
            echo "<script>alert('Gagal hapus pegawai');location.href='tampil_pegawai.php';</script>";
        }
    }
?>
