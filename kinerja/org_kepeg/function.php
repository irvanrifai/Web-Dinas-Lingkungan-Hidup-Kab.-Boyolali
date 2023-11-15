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
	$org_kepeg= upload();
		
	if (!$org_kepeg){
		return false;
	}
	
	//insert data kedalam database
	$queri="INSERT INTO kinerja_org_kepeg VALUES 
			('', '$org_kepeg')";
			
	mysqli_query($konek, $queri);
	
	return mysqli_affected_rows($konek);
}
function hapus($id){
	global $konek;
	mysqli_query($konek, "DELETE FROM kinerja_org_kepeg WHERE id=$id");
	return mysqli_affected_rows($konek);
}
function edit($data){
	global $konek;
	//ambil semua data yang dikirimkan form
	$id=$data["id"];
	$org_kepegLama= htmlspecialchars($data["org_kepeg"]);
	
	//jika user mengubah gambar
	if($_FILES['org_kepeg']['error'] === 4){
		$org_kepeg = $org_kepegLama;
	}
	else{
		$org_kepeg = upload();
	}
	
	//update data kedalam database
	$querii="UPDATE kinerja_org_kepeg SET org_kepeg='$org_kepeg' WHERE id=$id";
			
	mysqli_query($konek, $querii);
	
	return mysqli_affected_rows($konek);	
}
function upload(){
	$namaFile = $_FILES['org_kepeg']['name'];
	$ukuranFile = $_FILES['org_kepeg']['size'];
	$error = $_FILES['org_kepeg']['error'];
	$tmpName = $_FILES['org_kepeg']['tmp_name'];
	
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