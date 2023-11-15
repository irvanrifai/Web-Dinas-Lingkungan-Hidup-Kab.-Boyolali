<?php

//koneksi ke database
$konek = mysqli_connect("localhost", "root", "", "dlh_boyolali");

function query($query){
	global $konek;
	$result = mysqli_query($konek, $query);
	$rows = [];
	while ( $row=mysqli_fetch_assoc($result)){
		$rows[] = $row;
	}
	return $rows;
}

//------Beranda------
	//--berita--
function tambah($data){
	global $konek;
	//ambil semua data yang dikirimkan form
	$berita= upload();
	$judul= htmlspecialchars($data["judul"]);
	$deskripsi= htmlspecialchars($data["deskripsi"]);
	$link= htmlspecialchars($data["link"]);
		
	if (!$berita){
		return false;
	}
	
	//insert data kedalam database
	$queri="INSERT INTO berita VALUES 
			('', '$berita', '$judul', '$deskripsi', '$link')";
			
	mysqli_query($konek, $queri);
	
	return mysqli_affected_rows($konek);
}
function hapus($id){
	global $konek;
	mysqli_query($konek, "DELETE FROM berita WHERE id=$id");
	return mysqli_affected_rows($konek);
}
function edit($data){
	global $konek;
	//ambil semua data yang dikirimkan form
	$id=$data["id"];
	$beritaLama= htmlspecialchars($data["berita"]);
	$judul= htmlspecialchars($data["judul"]);
	$deskripsi= htmlspecialchars($data["deskripsi"]);
	$link= htmlspecialchars($data["link"]);
	
	//jika user mengubah gambar
	if($_FILES['berita']['error'] === 4){
		$berita = $beritaLama;
	}
	else{
		$berita = upload();
	}
	
	//update data kedalam database
	$querii="UPDATE berita SET berita='$berita', judul='$judul', deskripsi='$deskripsi', link='$link' WHERE id=$id";
			
	mysqli_query($konek, $querii);
	
	return mysqli_affected_rows($konek);	
}
function upload(){
	$namaFile = $_FILES['berita']['name'];
	$ukuranFile = $_FILES['berita']['size'];
	$error = $_FILES['berita']['error'];
	$tmpName = $_FILES['berita']['tmp_name'];
	
	//apakah gambar sudah diupload
	if( $error === 4){
		echo "<script>
				alert('gambar belum diupload');
			</script>";
		return false;
	}
	
	//apakah benar ekstensi file yang diupload
	$ekstensiGambarValid = ['jpeg', 'jpg', 'png'];
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));
	
	if(!in_array($ekstensiGambar, $ekstensiGambarValid)){
		echo "<script>
			alert('ekstensi gambar yang diperbolehkan adalah .jpeg .jpg .png');
		</script>";
		return false;
	}
	
	//cek size gambar
	if ($ukuranFile > 5000000){
		echo "<script>
			alert('gambar melebihi ukuran yang diperbolehkan');
		</script>";
		return false;
	}
	
	//file lolos pengecekan, masuk ke database
	//nama file menjadi unik
	$namaFileBaru = uniqid();
	$namaFileBaru .= '.';
	$namaFileBaru .= $ekstensiGambar;
	
	move_uploaded_file($tmpName, '../../img/'. $namaFileBaru);
	
	return $namaFileBaru;
}

	//--berita--
	//--c_youtube--
	//--galeri--

//------Profil------
	//--profil/struktur--
	//--profil/visimisi--
	//--profil/tujuan--
	//--profil/personil--

//------Kinerja------
	//--kinerja/std pelayanan--
	//--kinerja/renstra--
	//--kinerja/org, kepeg, keu--
	//--kinerja/info dan perizinan--

//------Pelayanan------
	//--pelayanan/form perizinan--
	//--pelayanan/aduan--
	//--pelayanan/sppl--
	//--pelayanan/ukl-upll--
	//--pelayanan/pengelolaan sampah--
	//--pelayanan/amdal--

//------Galeri------
	//--edit galeri--

//------Kontak------
	//--kontak/kontak--
	//--kontak/off account--
	//--kontak/lokasi--


?>