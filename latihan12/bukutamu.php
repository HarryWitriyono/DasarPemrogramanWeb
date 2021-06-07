<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Buku Tamu</h2>
  <form method="post">
    <div class="form-group">
      <label for="email">Kode Pengguna:</label>
      <input type="text" class="form-control" id="nama" placeholder="Enter kode pengguna" name="KodePengguna" autocomplete="off" required>
    </div>
    <div class="form-group">
      <label for="email">Nama Pengguna:</label>
      <input type="text" class="form-control" id="nama" placeholder="Enter nama pengguna" name="namapengguna" autocomplete="off" required>
    </div>
	<div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
    </div>
    <div class="form-group">
      <label for="pwd">Alamat:</label>
      <textarea class="form-control" id="almt" title="Masukkan alamat" name="Alamat" required></textarea>
    </div>
    
    <button type="submit" class="btn btn-primary" name="bsimpan">Login</button>
  </form>
</div>
</body>
</html>
<?php if (isset($_POST['bsimpan'])) {
	$namapengguna=filter_var($_POST['namapengguna'],FILTER_SANITIZE_STRING);
	$KodePengguna=filter_var($_POST['KodePengguna'],
	FILTER_SANITIZE_STRING);
	$pswd=filter_var($_POST['pswd'],FILTER_SANITIZE_STRING);
	$Alamat=htmlentities($_POST['Alamat']);
	$koneksi=new mysqli('localhost','root','','tokoumb');
	$sql1="insert into pengguna (KodePengguna,NamaPengguna,Password,Alamat)
	values ('".$KodePengguna."','".$namapengguna."','".$pswd."','".$Alamat."')";
	$q=$koneksi->query($sql1);
	if ($q) {
		echo "Rekord sudah tersimpan !";
	} else {
		echo "Rekord belum tersimpan !";
	}
}
include("daftarpengguna.php");
?>