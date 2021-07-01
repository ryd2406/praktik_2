<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INPUT NILAI MAHASISWA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  
  <style type="text/css">
          form {
            margin-left: 25rem;
          }
          div.form-group {
            
          }

  </style>
  </head>
<body>
<form class="form-horizontal " method = "GET" action = "nilai_siswa.php">
<fieldset>

<!-- Form Name -->

<legend>DAFTAR NILAI MAHASISWA</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">NAMA</label>  
  <div class="col-md-4">
  <input id="textinput" name="nama" type="text" placeholder="placeholder" class="form-control input-md">  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">NIM</label>  
  <div class="col-md-4">
  <input id="textinput" name="nim" type="text" placeholder="placeholder" class="form-control input-md">
  
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">MATKUL</label>
  <div class="col-md-4">
    <select id="selectbasic" name="matkul" class="form-control">
      <option value="DDP">DASAR-DASAR PEMOGRAMAN</option>
      <option value="BD">Basis Data</option>
      <option value="PWL">Pemograman Web Lanjut</option>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">NILAI UTS</label>  
  <div class="col-md-4">
  <input id="textinput" name="nilai_uts" type="text" placeholder="placeholder" class="form-control input-md"> 
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">NILAI UAS</label>  
  <div class="col-md-4">
  <input id="textinput" name="nilai_uas" type="text" placeholder="placeholder" class="form-control input-md">  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">NILAI TUGAS</label>  
  <div class="col-md-4">
  <input id="textinput" name="nilai_tugas" type="text" placeholder="placeholder" class="form-control input-md">  
  </div>
</div>
        </br>
        
        <label>
								<input type="checkbox" name="proses" value="Berhasil" required> Form sudah benar
							</label>
</br>
<!-- Button -->
<div class="form-group">
  <div class="col-md-4">
    <button id="singlebutton"  class="btn btn-primary">Simpan</button>
  </div>
</div>
</fieldset>
</form>
</body>
</html>