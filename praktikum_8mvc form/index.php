<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Form input Mahasiswa</title>
    <style>
        body {
            padding: 100px
        }
    </style>
</head>

<body>
<div class="card" style="height: 100%;">
        <div class="card-header">
            Form Mahasiswa
        </div>

<form>
  <div class="form-group row">
    <label for="NIM" class="col-4 col-form-label">NIM</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-500px"></i>
          </div>
        </div> 
        <input id="IdNime" name="Nim" type="text" class="form-control" required="required">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="Nama Mahasiswa" class="col-4 col-form-label">Nama Mahasiswa</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="Nm" name="NamaMahasiswa" type="text" class="form-control" required="required">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Jenis Kelamin</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio" id="radio_0" type="radio" class="custom-control-input" value="Laki-laki"> 
        <label for="radio_0" class="custom-control-label">L</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio" id="radio_1" type="radio" class="custom-control-input" value="Perempuan"> 
        <label for="radio_1" class="custom-control-label">P</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="Tanggal Lahir" class="col-4 col-form-label">Tanggal Lahir</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-calendar"></i>
          </div>
        </div> 
        <input id="TL" name="Tanggal Lahir" type="text" class="form-control" required="required">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="Tempat Lahir" class="col-4 col-form-label">Tempat Lahir</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-adjust"></i>
          </div>
        </div> 
        <input id="TH" name="Tempat Lahir" type="text" class="form-control" required="required">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="select" class="col-4 col-form-label">Program Studi</label> 
    <div class="col-8">
      <select id="select" name="select" class="custom-select" required="required">
        <option value="TI">Teknologi Informasi</option>
        <option value="SI">Sistem Informasi</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4 col-form-label" for="IPK">IPK</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-graduation-cap"></i>
          </div>
        </div> 
        <input id="NilaiIPK" name="IPK" type="text" class="form-control" required="required">
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>








</body>
</html>