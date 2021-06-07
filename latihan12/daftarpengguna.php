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
<?php $koneksi=new mysqli('localhost','root','','tokoumb');
$sql3="select * from pengguna";
$q3=$koneksi->query($sql3);
$r3=$q3->fetch_array();
if (empty($r3)) {
	echo "Rekord belum ada ";
	exit();
}
?>
  <h2>Bordered Table</h2>
  <p>The .table-bordered class adds borders on all sides of the table and the cells:</p>            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Kode Pengguna</th>
        <th>Nama</th>
        <th>Alamat</th>
      </tr>
    </thead>
    <tbody><?php do { ?>
      <tr>
        <td><?php echo $r3['KodePengguna'];?></td>
        <td><?php echo $r3['NamaPengguna'];?></td>
        <td><?php echo filter_var($r3['Alamat'],FILTER_SANITIZE_STRING);?></td>
	</tr><?php } while($r3=$q3->fetch_array());?>
    </tbody>
  </table>
</div>

</body>
</html>