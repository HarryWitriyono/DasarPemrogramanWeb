<?php 
$kon=new mysqli("localhost","root","");
$sql="create database tokooop";
$q=$kon -> query($sql);
if ($q) {
	echo "Database sudah dibuat !";
} else {
	echo "Database gagal dibuat !";
}
?>
