<?php 
require_once "class_Mahasiswa.php";

$nia=new Mahasiswa("Nia Anggraeni","0110121026","Sistem Informasi","2021",3.8);
$mutia=new Mahasiswa("Mutia Azahra","0110121027","Sistem Informasi","2021",3.7);
$fikri=new Mahasiswa("Muhammad Fikri","0110121028","Sistem Informasi","2021",3.6);
$alesha=new Mahasiswa("Alesha","0110121029","Sistem Informasi","2021",3.5);
$laras=new Mahasiswa("Larasati","0110121030","Sistem Informasi","2021",3.9);

$data=[$nia, $mutia, $fikri, $alesha, $laras];
 ?>
 <!DOCTYPE html>
 <html>
 <head>
     <meta charset="utf-8">
     <title>Daftar Mahasiswa</title>
 </head>
 <body>
<div class="container">
 <div class="row">
     <div class="col-12">
         <h1 class="text-center">Daftar Mahasiswa</h1> 
         <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
     </div>
 </div>
 <div class="row">
     <div class="col-12">
     
     <table class="table table-danger table-striped">
     <tr>
                  <th>Nama</th>
                  <th>NIM</th>
                  <th>Prodi</th>
                  <th>IPK</th>
                  <th>Predikat</th>
                  <th>Tahun Angkatan</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($data as $mahasiswa) : ?>
                <tr>
                  <td><?= $mahasiswa->nama; ?></td>
                  <td><?= $mahasiswa->nim; ?></td>
                  <td><?= $mahasiswa->prodi; ?></td>
                  <td><?= $mahasiswa->ipk; ?></td>
                  <td><?= $mahasiswa->predikat_ipk(); ?></td>
                  <td><?= $mahasiswa->thn_angkatan; ?></td>
              </tbody>
                <?php endforeach; ?>
</table>
                
</table>
<p>Created with <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
</svg></i></i> by Nia anggraeni</a></p>
        </div>
     </div>
 </div>
 </div>
 </body>
 </html>