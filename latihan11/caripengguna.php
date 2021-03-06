<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cari Pengguna</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Cari Pengguna</h2>
  <form method="post">
	<div class="form-group">
      <label for="NamaPengguna">Nama Pengguna:</label>
      <input type="text" class="form-control" id="NamaPengguna" placeholder="Enter nama pengguna" name="NamaPengguna">
    </div>
    <button type="submit" class="btn btn-primary" name="bCari">Cari Rekord Pengguna</button>
  </form>
</div>
</body>
</html>
<?php 
if (isset($_POST['bCari'])) {
	$NamaPengguna=$_POST['NamaPengguna'];
	$koneksi=new mysqli("localhost","root","","tokoumb");
	$sql="SELECT * FROM `pengguna` WHERE `NamaPengguna` LIKE '%$NamaPengguna%'";
	$q=$koneksi->query($sql);
	$rekordpengguna=$q->fetch_all(MYSQLI_ASSOC);
	if (empty($rekordpengguna)) {
		echo "Rekord pengguna tidak ditemukan !";
	    exit();
	}	
	include("daftarpengguna.php");
}
