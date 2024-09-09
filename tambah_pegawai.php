<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="form-body">
  <div class="row">
    <div class="form-holder">
      <div class="form-content">
        <div class="form-items">
          <h3>Tambah Pegawai</h3>
          <form class="requires-validation" novalidate action="proses_tambah_pegawai.php" method="post">

            <div class="col-md-12">
              <input class="form-control" type="text" name="nik" placeholder="NIK" required>
              <div class="valid-feedback">NIK field is valid!</div>
              <div class="invalid-feedback">NIK field cannot be blank!</div>
            </div>

            <div class="col-md-12">
              <input class="form-control" type="text" name="nama" placeholder="Nama Pegawai" required>
              <div class="valid-feedback">Nama Pegawai field is valid!</div>
              <div class="invalid-feedback">Nama Pegawai field cannot be blank!</div>
            </div>

            <div class="col-md-12">
              <input class="form-control" type="text" name="alamat" placeholder="Alamat" required>
              <div class="valid-feedback">Alamat field is valid!</div>
              <div class="invalid-feedback">Alamat field cannot be blank!</div>
            </div>

            <div class="col-md-12">
            <select name="jenis_kelamin" class="form-control">
                <option>Pilih Gender</option>
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
            </select>
            </div>

            <div class="col-md-12">
              <input class="form-control" type="text" name="no_telepon" placeholder="No Telepon" required>
              <div class="valid-feedback">Telepon field is valid!</div>
              <div class="invalid-feedback">Telepon field cannot be blank!</div>
            </div>

            <div class="col-md-12">
                <select name="id_jabatan" class="form-control">
                    <option>Pilih jabatan</option>
                    <?php
                        include "koneksi.php";
                        $qry_jabatan=mysqli_query($conn,"SELECT * FROM jabatan");
                        while($data_jabatan=mysqli_fetch_array($qry_jabatan)){
                            echo '<option value="'.$data_jabatan['id_jabatan'].'">'.$data_jabatan['jabatan'].'</option>';
                        }
                    ?>
                </select>  
            </div>

            <div class="col-md-12">
              <input class="form-control" type="text" name="username" placeholder="Username" required>
              <div class="valid-feedback">Username field is valid!</div>
              <div class="invalid-feedback">Username field cannot be blank!</div>
            </div>

            <div class="col-md-12">
              <input class="form-control" type="password" name="password" placeholder="Password" required>
              <div class="valid-feedback">Password field is valid!</div>
              <div class="invalid-feedback">Password field cannot be blank!</div>
            </div>

            <div class="form-button mt-3">
              <button id="submit" type="submit" class="btn btn-primary">Tambah Pegawai</button>
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
