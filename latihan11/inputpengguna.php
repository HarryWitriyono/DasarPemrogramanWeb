<!DOCTYPE html>
<html lang="en">
<head>
  <title>Form Input Pengguna Baru</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Form Input Pengguna Baru:</h2>
  <form method="post">
    <div class="form-group">
      <label for="usr">Kode Pengguna:</label>
      <input type="text" class="form-control" id="usr" name="KodePengguna">
    </div>
	<div class="form-group">
      <label for="usr">Nama Pengguna:</label>
      <input type="text" class="form-control" id="usr" name="NamaPengguna">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" name="password">
    </div>
	<div class="form-group">
     <label for="Alamat">Alamat:</label>
     <textarea class="form-control" rows="5" id="Alamat" name="Alamat"></textarea>
    </div>
	<div class="form-group">
      <label for="nohp">No. Handphone:</label>
      <input type="text" class="form-control" id="usr" name="NoHP">
    </div>
    <button type="submit" class="btn btn-primary" name="bSubmit">Submit</button>
  </form>
</div>
</body>
</html>
<?php $koneksi=new mysqli("localhost","root","","tokoumb");
if (isset($_POST['bSubmit'])) {
	$KodePengguna=$_POST['KodePengguna'];
	$NamaPengguna=$_POST['NamaPengguna'];
	$password=$_POST['password'];
	$Alamat=$_POST['Alamat'];
	$NoHP=$_POST['NoHP'];
	
	$sql="INSERT INTO `pengguna` (`KodePengguna`, `NamaPengguna`, `Password`, `TanggalDaftar`, `Alamat`, `NoHP`) VALUES ('$KodePengguna', '$NamaPengguna', '$password', current_timestamp(), '$Alamat', '$NoHP');";
    $q=$koneksi->query($sql);
	if ($q) {
		echo "Rekord baru sudah tersimpan !";
	} else {
		echo "Rekord baru gagal tersimpan !";
	}
}
?>