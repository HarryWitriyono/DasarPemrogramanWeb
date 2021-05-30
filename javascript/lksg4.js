function lihathasil() {
  var panjang=prompt('Ketik Panjang segi empat');
  var lebar = prompt ('Ketik lebar segi empat');
  var luas = panjang * lebar;
  var keliling = (2*panjang)+(2*lebar);
  var pesan='';
  pesan='Segi Empat dengan panjang '+panjang+ ' dan lebar ' + lebar +
        '<br>Hasilnya adalah :<br>' +
        'Luas = ' + luas + ' satuan <sup>2</sup> <br>' +
		'Keliling = ' + keliling + ' satuan<br>';
  document.getElementById('hasil').innerHTML = pesan;
}