<!DOCTYPE html>
<html>
<head>
 <title>Form Tabel Barang</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body><div class="container-fluid">
<h2>Form Tabel Barang</h2>
<form method="post" action="">
<div class="form-group">
  <label for="kodebarang">Kode Barang:</label>
  <input class="form-control" type="text" id="kodebarang" name="kodebarang" required>
</div>
<div class="form-group">
  <label for="namabarang">Nama Barang:</label>
  <input class="form-control" type="text" id="namabarang" name="namabarang">
</div>
<div class="form-group">
  <label for="jumlah">Jumlah:</label>
  <input class="form-control" type="text" id="jumlah" name="jumlah">
</div>
<div class="form-group">
  <label for="satuan">Satuan:</label>
  <input class="form-control" type="text" id="satuan" name="satuan">
</div>
<div class="form-group">
  <label for="hargasatuan">Harga Satuan:</label>
  <input class="form-control" type="text" id="hargasatuan" name="hargasatuan">
</div>
  <input class="btn btn-primary" type="submit" value="Submit" name="bSimpan">
</form> 
</div>
</body>
</html>
<?php 
if (isset($_POST['bSimpan'])) {
	$kon=new mysqli("localhost","root","","tokooop");
	$kodebarang=$_POST['kodebarang'];
	$namabarang=$_POST['namabarang'];
	$jumlah=$_POST['jumlah'];
	$satuan=$_POST['satuan'];
	$hargasatuan=$_POST['hargasatuan'];
	$sql="insert into barang 
	(kodebarang,namabarang,satuan,jumlah,hargasatuan) 
	values 
	('".$kodebarang."','".$namabarang."','".$satuan."','".$jumlah."','".$hargasatuan."');";
	$q=$kon->query($sql);
	if ($q) {
		echo "Rekord sudah tersimpan !";
	} else {
		echo "Rekord gagal tersimpan !";
	}
}
?>