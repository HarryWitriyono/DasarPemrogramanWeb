<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cari Barang</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Cari Barang yang tersimpan</h2>
  <form method="post">
    <div class="form-group">
      <label for="namabarangdicari">Ketik nama barang dicari atau kata kunci nama barang:</label>
      <input type="text" class="form-control" id="namabarangdicari" name="namabarangdicari" placeholder="Ketik nama barang dicari atau kata kunci nama barang">
    </div>
    
    <button type="submit" class="btn btn-primary" name="bcari">Cari Barangnya</button>
  </form>
</div>
</body>
</html>
<?php if (isset($_POST['bcari'])) {
	$koneksi=new mysqli("localhost","root","","tokoumb");
	$namabarangdicari=$_POST['namabarangdicari'];
	if (empty($namabarangdicari)) {
		exit();
	}
$sql="SELECT * FROM `barang` WHERE `namabarang` LIKE '%".$namabarangdicari."%'";
$q=$koneksi->query($sql);
$rekordbarang=$q->fetch_array();
include("daftarbarang.php");
} 

?>
