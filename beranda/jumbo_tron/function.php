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
	//--jumbo_tron/carousel--
function edit($data){
	global $konek;
	//ambil semua data yang dikirimkan form
	$id=$data["id"];
	$jumbo_tronLama= htmlspecialchars($data["jumbo_tron"]);
	$judul= htmlspecialchars($data["judul"]);
	$keterangan= htmlspecialchars($data["keterangan"]);
	
	//jika user mengubah gambar
	if($_FILES['jumbo_tron']['error'] === 4){
		$jumbo_tron = $jumbo_tronLama;
	}
	else{
		$jumbo_tron = upload();
	}
	
	//update data kedalam database
	$querii="UPDATE jumbo_tron SET jumbo_tron='$jumbo_tron', judul='$judul', keterangan='$keterangan' WHERE id=$id";
			
	mysqli_query($konek, $querii);
	
	return mysqli_affected_rows($konek);	
}
function upload(){
	$namaFile = $_FILES['jumbo_tron']['name'];
	$ukuranFile = $_FILES['jumbo_tron']['size'];
	$error = $_FILES['jumbo_tron']['error'];
	$tmpName = $_FILES['jumbo_tron']['tmp_name'];
	
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
	if ($ukuranFile > 50000000){
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