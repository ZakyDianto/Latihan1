<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    include "koneksi.php";
        $qry_get_pegawai=mysqli_query($conn,"select * from pegawai where id_pegawai = '".$_GET['id_pegawai']."'");
        $dt_pegawai=mysqli_fetch_array($qry_get_pegawai);
        ?>

<div class="form-body">
  <div class="row">
    <div class="form-holder">
      <div class="form-content">
        <div class="form-items">
          <h3>Ubah Data Pegawai</h3>
          <form class="requires-validation" novalidate action="proses_ubah_pegawai.php" method="post">

          <input type="hidden" name="id_pegawai" value= "<?=$dt_pegawai['id_pegawai']?>">

            <div class="col-md-12">
              <input class="form-control" type="text" name="nik" placeholder="NIK" value="<?=$dt_pegawai['nik']?>" required>
              <div class="valid-feedback">NIK Valid!</div>
              <div class="invalid-feedback">NIK Harus Diisi!</div>
            </div>

            <div class="col-md-12">
              <input class="form-control" type="text" name="nama" placeholder="Nama Pegawai" value="<?=$dt_pegawai['nama']?>" required>
              <div class="valid-feedback">Nama Valid!</div>
              <div class="invalid-feedback">Nama Harus Diisi!</div>
            </div>

            <div class="col-md-12">
              <input class="form-control" type="text" name="alamat" placeholder="Alamat" value="<?=$dt_pegawai['alamat']?>" required>
              <div class="valid-feedback">Alamat Valid!</div>
              <div class="invalid-feedback">Alamat Harus Diisi!</div>
            </div>

            <div class="col-md-12">
            <?php 
            $arr_gender=array('L'=>'Laki-laki','P'=>'Perempuan');
            ?>
            <select name="jenis_kelamin" class="form-control">
                <?php foreach ($arr_gender as $key_gender => $val_gender):
                    if($key_gender==$dt_siswa['gender']){
                        $selek="selected";
                    } else {
                        $selek="";
                    }
                ?>
                <option value="<?=$key_gender?>" <?=$selek?>><?=$val_gender?></option>
                <?php endforeach?>
            </select>
            </div>

            <div class="col-md-12">
              <input class="form-control" type="text" name="no_telepon" placeholder="No Telepon" value="<?=$dt_pegawai['no_telepon']?>" required>
              <div class="valid-feedback">Telepon Valid!</div>
              <div class="invalid-feedback">Telepon Harus Diisi!</div>
            </div>

            <div class="col-md-12">
                <select name="id_jabatan" class="form-control">
                    <option></option>
                    <?php 
                        include "koneksi.php";
                        $qry_jabatan=mysqli_query($conn,"SELECT * from jabatan");
                        while($data_jabatan=mysqli_fetch_array($qry_jabatan)){
                            if($data_jabatan['id_jabatan']==$dt_jabatan['id_jabatan']){
                                $selek="selected";
                            } else {
                                $selek="";
                            }
                    echo '<option value="'.$data_jabatan['id_jabatan'].'" '.$selek.'>'.$data_jabatan['jabatan'].'</option>';   
                    }
                    ?>
                </select>  
            </div>

            <div class="col-md-12">
              <input class="form-control" type="text" name="username" placeholder="Username" value="<?=$dt_pegawai['username']?>" required>
              <div class="valid-feedback">Username Valid!</div>
              <div class="invalid-feedback">Username Harus Diisi!</div>
            </div>

            <div class="col-md-12">
              <input class="form-control" type="password" name="password" placeholder="Password" required>
              <div class="valid-feedback">Password Valid!</div>
              <div class="invalid-feedback">Password Harus Diisi!</div>
            </div>

            <div class="form-button mt-3">
              <button id="submit" type="submit" class="btn btn-primary">Ubah Pegawai</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
    </form>        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>  
</body>
</html>
