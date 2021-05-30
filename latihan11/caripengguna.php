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
      <label for="usr">Ketik Nama atau Kata Kunci Nama Pengguna:</label>
      <input type="text" class="form-control" id="usr" name="namadicari">
    </div>
	<button type="submit" class="btn btn-primary" name="bSubmit">Submit</button>
  </form>
</div>
</body>
</html>
<?php 
if (isset($_POST['bSubmit'])) {
 $namadicari=$_POST['namadicari'];	
 $koneksi=new mysqli("localhost","root","","tokoumb");
 $sqlp="select * from pengguna where NamaPengguna like '%".$namadicari."%'";
 $qp=$koneksi->query($sqlp);
 $rekpengguna=$qp->fetch_all(MYSQLI_ASSOC);
 include("daftarpengguna.php");
}
?>