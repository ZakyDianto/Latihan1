<?php
if ($_POST) {
    $nama_jabatan=$_POST['nama_jabatan'];
    $gaji_pokok=$_POST['gaji_pokok'];
    $tunjangan=$_POST['tunjangan'];
    if (empty($nama_jabatan)) {
        echo    "<script>
                    alert('Nama jabatan tidak boleh kosong);
                    location.href='tambah_jabatan.php';
                </script>";
    }
    elseif (empty($gaji_pokok)) {
        echo    "<script>
                    alert('Gaji pokok tidak boleh kosong');
                    location.href='tambah_jabatan.php';
                </script>";
    }
    elseif (empty($tunjangan)) {
        echo    "<script>
                    alert('Tunjangan pokok tidak boleh kosong');
                    location.href='tambah_jabatan.php';
                </script>";
    }
    else {
        include "koneksi.php";
        $insert=mysqli_query($conn, "INSERT INTO jabatan (nama_jabatan, gaji_pokok, tunjangan) value ('".$nama_jabatan."','".$gaji_pokok."', '".$tunjangan."')");
        if ($insert) {  
            echo   "<script>
                        alert('Sukses Menambahkan Jabatan');
                        location.href='tambah_jabatan.php';
                    </script>";
        }
        else {
            echo "  <script>
                        alert('Gagal Menambahkan Jabatan');
                        location.href='tambah_jabatan.php';
                    </script>";
        }
    }

}
?>