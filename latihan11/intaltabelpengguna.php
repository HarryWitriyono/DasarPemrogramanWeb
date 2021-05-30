<?php //file instaltabelpengguna.php
$koneksi=new mysqli("localhost","root","","tokoumb");
$sql="CREATE TABLE `tokoumb`.`pengguna` ( `KodePengguna` VARCHAR(30) NOT NULL , `NamaPengguna` VARCHAR(50) NOT NULL , `Password` VARCHAR(30) NOT NULL , `TanggalDaftar` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP , `Alamat` TEXT NULL , `NoHP` VARCHAR(20) NULL , PRIMARY KEY (`KodePengguna`)) ENGINE = InnoDB;";
$q=$koneksi->query($sql);
if ($q) {
	echo "Tabel Pengguna berhasil dibuat !";
} else {
	echo "Tabel Pengguna gagal dibuat !";
}
?>