<?php
//koneksi ke database
$konek = mysqli_connect("localhost", "root", "", "dlh_boyolali");

function query($query){
	global $konek;
	$result = mysqli_query($konek, $query);
	$rows = [];
	while ($row=mysqli_fetch_assoc($result)){
		$rows[] = $row;
	}
	return $rows;
}

//------Beranda------
	//--berita--
function tambah($data){
	global $konek;
	//ambil semua data yang dikirimkan form
	$sop_b3= upload();
		
	if (!$sop_b3){
		return false;
	}
	
	//insert data kedalam database
	$queri="INSERT INTO kinerja_sop_b3 VALUES 
			('', '$sop_b3')";
			
	mysqli_query($konek, $queri);
	
	return mysqli_affected_rows($konek);
}
function hapus($id){
	global $konek;
	mysqli_query($konek, "DELETE FROM kinerja_sop_b3 WHERE id=$id");
	return mysqli_affected_rows($konek);
}
function edit($data){
	global $konek;
	//ambil semua data yang dikirimkan form
	$id=$data["id"];
	$sop_b3Lama= htmlspecialchars($data["sop_b3"]);
	
	//jika user mengubah gambar
	if($_FILES['sop_b3']['error'] === 4){
		$sop_b3 = $sop_b3Lama;
	}
	else{
		$sop_b3 = upload();
	}
	
	//update data kedalam database
	$querii="UPDATE kinerja_sop_b3 SET sop_b3='$sop_b3' WHERE id=$id";
			
	mysqli_query($konek, $querii);
	
	return mysqli_affected_rows($konek);	
}
function upload(){
	$namaFile = $_FILES['sop_b3']['name'];
	$ukuranFile = $_FILES['sop_b3']['size'];
	$error = $_FILES['sop_b3']['error'];
	$tmpName = $_FILES['sop_b3']['tmp_name'];
	
	//apakah gambar sudah diupload
	if( $error === 4){
		echo "<script>
				alert('file belum diupload');
			</script>";
		return false;
	}
	
	//apakah benar ekstensi file yang diupload
	$ekstensiFileValid = ['jpeg', 'jpg', 'png', 'doc', 'docx', 'pdf', 'xlsx', 'xls'];
	$ekstensiFile = explode('.', $namaFile);
	$ekstensiFile = strtolower(end($ekstensiFile));
	
	if(!in_array($ekstensiFile, $ekstensiFileValid)){
		echo "<script>
			alert('ekstensi file yang diperbolehkan adalah .jpeg .jpg .png .doc .docx .pdf .xlsx .xls');
		</script>";
		return false;
	}
	
	//cek size gambar
	if ($ukuranFile > 50000000){
		echo "<script>
			alert('file melebihi ukuran yang diperbolehkan');
		</script>";
		return false;
	}
	
	//file lolos pengecekan, masuk ke database
	//nama file menjadi unik
	$namaFileBaru = uniqid();
	$namaFileBaru .= '.';
	$namaFileBaru .= $ekstensiFile;
	
	move_uploaded_file($tmpName, '../../file/'. $namaFileBaru);
	
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