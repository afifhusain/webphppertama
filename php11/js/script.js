//ambil elemen yang dibutuhkan
var keyword = document.getElementById('keyword');
var tombolCari = document.getElementById('tombol-cari');
var konten = document.getElementById('container');

//tambah even ketika keyword ditulis
keyword.addEventListener('keyup', function (){
	//console.log(keyword.value);

	//buat objek ajax
	var xhr = new XMLHttpRequest();

	// cek kesiapan ajax
	xhr.onreadystatechange = function() {
		if(xhr.readyState == 4 && xhr.status == 200){
			//	container.innerHTML = xhr.responseText;
			konten.innerHTML=xhr.responseText;
		}
	}

	//eksekusi ajax
	xhr.open('GET','ajax/mahasiswa.php?keyword=' + keyword.value,true);
	xhr.send();


});