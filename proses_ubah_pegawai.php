<?php
if($_POST){
    $id_pegawai=$_POST['id_pegawai'];
    $nik=$_POST['nik'];
    $nama_pegawai=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $jenis_kelamin=$_POST['jenis_kelamin'];
    $no_telepon=$_POST['no_telepon'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $id_jabatan=$_POST['id_jabatan'];
    if(empty($nama_pegawai)){
        echo "<script>alert('nama pegawai tidak boleh kosong');location.href='ubah_siswa.php';</script>";

    } elseif(empty($nik)){
        echo "<script>alert('NIK tidak boleh kosong');location.href='ubah_siswa.php';</script>";
    } else {
        include "koneksi.php";
        if(empty($password)){
            $update=mysqli_query($conn,"UPDATE pegawai set nik='".$nik."',nama='".$nama_pegawai."', alamat='".$alamat."', jenis_kelamin='".$jenis_kelamin."', no_telepon='".$no_telepon."',  username='".$username."', id_jabatan='".$id_jabatan."' WHERE id_pegawai = '".$id_pegawai."' ") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update pegawai');location.href='tampil_pegawai.php';</script>";
            } else {
                echo "<script>alert('Gagal update pegawai');location.href='ubah_pegawai.php?id_pegawai=".$id_pegawai."';</script>";
            }
        } else {
            $update=mysqli_query($conn,"UPDATE pegawai set nik='".$nik."',nama='".$nama_pegawai."', alamat='".$alamat."', jenis_kelamin='".$jenis_kelamin."', no_telepon='".$no_telepon."', username='".$username."', password='".md5($password)."', id_jabatan='".$id_jabatan."' WHERE id_pegawai = '".$id_pegawai."' ") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update pegawai');location.href='tampil_pegawai.php';</script>";
            } else {
                echo "<script>alert('Gagal update pegawai');location.href='ubah_siswa.php?id_pegawai=".$id_pegawai."';</script>";
            }
        }
        
    } 
}
?>
