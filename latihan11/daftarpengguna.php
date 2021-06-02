<!DOCTYPE html>
<html lang="en">
<head>
  <title>Daftar Pengguna</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Daftar Pengguna</h2>
  <p>Berikut ini daftar pengguna yang tersimpan di aplikasi:</p>            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Kode Pengguna</th>
        <th>Nama Pengguna</th>
        <th>Password</th>
		<th>Alamat</th>
		<th>No.Handphone</th>
		<th>Waktu Daftar</th>
      </tr>
    </thead>
    <tbody><?php foreach($rekordpengguna as $r) { ?>
      <tr>
        <td><?php echo $r['KodePengguna'];?></td>
        <td><?php echo $r['NamaPengguna'];?></td>
        <td><?php echo $r['Password'];?></td>
        <td><?php echo $r['Alamat'];?></td>
        <td><?php echo $r['NoHP'];?></td>
        <td><?php echo $r['TanggalDaftar'];?></td>
	</tr><?php } ?>
    </tbody>
  </table>
</div>
</body>
</html>