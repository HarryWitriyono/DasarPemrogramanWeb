<?php 
$koneksi=new mysqli("localhost","root","");
$sql="create database tokoemakambo";
$q=$koneksi->query($sql);
if ($q) {
	echo "Database sudah dibuat !";
} else {
	echo "Database gagal dibuat !";
}
$sql2="CREATE TABLE tokoemakambo.`barang` (
  `kodebarang` varchar(30) NOT NULL,
  `namabarang` varchar(50) NOT NULL,
  `jumlahstok` double(6,2) DEFAULT NULL,
  `satuan` varchar(30) DEFAULT NULL,
  `hargasatuan` double(12,2) DEFAULT NULL,
  `tanggalbeli` date NOT NULL,
  `jenispembelian` enum('tunai','kredit') NOT NULL,
  `keterangan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";
$q2=$koneksi->query($sql2);
if ($q2) {
	echo "Tabel Barang sudah dibuat !";
} else {
	echo "Tabel Barang gagal dibuat !";
}
?>