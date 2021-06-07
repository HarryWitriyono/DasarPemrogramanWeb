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
  <h2>Stacked form</h2>
  <form method="post">
    <div class="form-group">
      <label for="email">Nama Pengguna:</label>
      <input type="text" class="form-control" id="nama" placeholder="Enter nama pengguna" name="namapengguna" autocomplete="off" required>
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
    </div>
    
    <button type="submit" class="btn btn-primary" name="blogin">Login</button>
  </form>
</div>

</body>
</html>
<?php if (isset($_POST['blogin'])) {
	$namapengguna=filter_var($_POST['namapengguna'],FILTER_SANITIZE_STRING);
	$pswd=filter_var($_POST['pswd'],FILTER_SANITIZE_STRING);
	$koneksi=new mysqli('localhost','root','','tokoumb');
	$sql="select * from pengguna where NamaPengguna = '".$namapengguna."' and password='".$pswd."'";
	$q=$koneksi->query($sql);
	$r=$q->fetch_array();
	if (empty($r)) {
		echo "Maaf anda tidak terdaftar !";
		exit();
	} else {
		echo "<script>window.location.href='bukutamu.php';</script>";
	}
}

?>