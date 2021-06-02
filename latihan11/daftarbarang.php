<!DOCTYPE html>
<html lang="en">
<head>
  <title>Daftar Barang Toko UMB</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<?php

?>
<div class="container">
  <h2>Daftar Barang Toko UMB</h2>
  <p>Berikut ini daftar barang yang telah tersimpan diaplikasi Toko UMB</p>            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Kode Barang</th>
        <th>Nama Barang</th>
        <th>Jumlah Stok</th>
		<th>Satuan</th>
		<th>Harga Satuan</th>
		<th>Total Nilai Barang</th>
		<th>Tanggal Kedaluarsa</th>
      </tr>
    </thead>
    <tbody><?php do { ?>
      <tr>
        <td><?php echo $rekordbarang['kodebarang'];?></td>
        <td><?php echo $rekordbarang['namabarang'];?></td>
        <td align="rigth"><?php echo number_format($rekordbarang['jumlah'],2,',','.');?></td>
        <td><?php echo $rekordbarang['satuan'];?></td>
        <td align="rigth"><?php echo number_format($rekordbarang['hargasatuan'],0,',','.');?></td>
        <td align="rigth"><?php echo number_format($rekordbarang['jumlah']*$rekordbarang['hargasatuan'],0,',','.');?></td>
        <td><?php echo $rekordbarang['tanggalkedaluarsa'];?></td>
	</tr> <?php } while($rekordbarang=$q->fetch_array());?>
    </tbody>
  </table>
</div>

</body>
</html>