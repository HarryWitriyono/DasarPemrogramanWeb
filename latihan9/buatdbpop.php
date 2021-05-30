<?php 
 $kon=mysqli_connect('localhost','root','');
 $s="create database tokopop";
 $q=mysqli_query($kon,$s);
 if ($q) {
	 echo "Database toko sudah dibuat !";
 } else {
	 echo "Database toko gagal dibuat !";
 }
 $s1="create table tokopop.barang (
      kodebarang varchar(30) not null primary key,
	  namabarang varchar(50) not null,
	  satuan varchar(30) not null,
	  jumlah double(10,2) null,
	  hargasatuan double(12,2) null);";
 $q1=mysqli_query($kon,$s1);
 if ($q1) {
	 echo "Tabel barang sudah dibuat !";
 } else {
	 echo "Tabel barang gagal dibuat !";
 }
?>