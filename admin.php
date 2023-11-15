<<<<<<< HEAD
<?php
require "function.php";
?>

<html>
<head lang="en">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="home.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <title>Admin dlh boyolali</title>
	<link rel="icon" href="img/logo.png" width="5" height="12">
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<style>
	.bs-example{
    	margin: 20px;
    }
</style>
</head>

<body>
<div class="bs-example">
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a href="#beranda" class="nav-link active" data-toggle="tab">Beranda</a>
        </li>
        <li class="nav-item">
            <a href="#profil" class="nav-link" data-toggle="tab">Profil</a>
        </li>
        <li class="nav-item">
            <a href="#kinerja" class="nav-link" data-toggle="tab">Kinerja</a>
        </li>
		<li class="nav-item">
            <a href="#pelayanan" class="nav-link" data-toggle="tab">Pelayanan</a>
        </li>
		<li class="nav-item">
            <a href="#galeri" class="nav-link" data-toggle="tab">Galeri</a>
        </li>
    </ul>
	

    <div class="tab-content">
        <div class="tab-pane fade show active" id="beranda">
            <h4 class="mt-2">Laman Konten Beranda</h4>
            <p><br>
<h3 class="container border-start border-success border-4">JUMBO-TRON</h3><br>

<table border='0' cellpadding='15' cellspacing='5'>
<tr>
<th>No</th>
<th>Gambar</th>
<th>Judul</th>
<th>Keterangan</th>
<th>Aksi</th>
</tr>
<?php
$home = query("select * from jumbo_tron");
?>
<?php $i = 1; ?>
<?php foreach ($home as $row): ?>

<tr>
<td><?= $i; ?></td>
<td><img src="img/<?= $row["jumbo_tron"]?>" width="140" height="100"></td>
<td><?= $row["judul"]?></td>
<td><?= $row["keterangan"]?></td>
<td><a href="beranda/jumbo_tron/edit.php?id=<?= $row["id"];?>"><img src="img/edit-icon.png" width="20" height="20" alt class="img-fluid"></a>
</tr>

<?php $i++; ?>
<?php endforeach;?>
</table>

<!--Ini konten berita/informasi up-to-date-->
<br><br><br>
<h3 class="container border-start border-success border-4">BERITA TERKINI</h3>
<table border='0' cellpadding='10' cellspacing='0'>
<tr>
<th>No</th>
<th>Gambar</th>
<th>Judul</th>
<th>Deskripsi</th>
<th>Link<th>
<th>Aksi</th>
</tr>
<?php
$home = query("select * from berita");
?>
<?php $i = 1; ?>
<?php foreach ($home as $row): ?>

<tr>
<td><?= $i; ?></td>
<td><img src="img/<?= $row["berita"]?>" width="140" height="100"></td>
<td><?= $row["judul"]?></td>
<td><?= $row["deskripsi"]?></td>
<td><?= $row["link"]?></td>
<td><a href="beranda/berita/edit.php?id=<?= $row["id"];?>"><img src="img/edit-icon.png" width="20" height="20"></a><br><br>
<a href="beranda/berita/hapus.php?id=<?= $row["id"];?>" onclick="return confirm('Apakah anda ingin menghapus data ini?')"><img src="img/delete-icon.png" width="20" height="20"></a></td>
</tr>

<?php $i++; ?>
<?php endforeach;?>
</table>
<p align="center"><a href="beranda/berita/tambah.php?id=<?= $row["id"];?>"><img src="img/add-icon.png" width="20" height="20" alt class="img-fluid"></a>
</p>

<!--Ini Konten Informasi konsumsi lama......................-->
<br><br><br>
<h4 class="container border-start border-success border-4">BERITA LAINNYA</h4>
<table border='0' cellpadding='10' cellspacing='0'>
<tr>
<th>No</th>
<th>Judul</th>
<th>Link</th>
<th>Aksi</th>
</tr>
<?php
$home = query("select * from berita_lain");
?>
<?php $i = 1; ?>
<?php foreach ($home as $row): ?>

<tr>
<td><?= $i; ?></td>
<td><?= $row["judul"]?></td>
<td><?= $row["link"]?></td>
<td><a href="beranda/berita_lainnya/edit.php?id=<?= $row["id"];?>"><img src="img/edit-icon.png" width="20" height="20"></a><br><br>
<a href="beranda/berita_lainnya/hapus.php?id=<?= $row["id"];?>" onclick="return confirm('Apakah anda ingin menghapus data ini?')"><img src="img/delete-icon.png" width="20" height="20"></a></td>
</tr>

<?php $i++; ?>
<?php endforeach;?>
</table>
<p align="center"><a href="beranda/berita_lainnya/tambah.php?id=<?= $row["id"];?>"><img src="img/add-icon.png" width="20" height="20" alt class="img-fluid"></a>
</p>		
			</p>
        </div>
		
		<!--batas-->
		
        <div class="tab-pane fade" id="profil">
            <h4 class="mt-2">Laman Konten Profil</h4>
            <p>
			<!--Struktur Organisasi-->
<br><br><br>
<h4 class="container border-start border-success border-4" id="struktur_org">Struktur Organisasi Dinas Lingkungan Hidup Boyolali</h4>
<table border='0' cellpadding='10' cellspacing='0'>
<tr>
<th>No</th>
<th>File</th>
<th>Aksi</th>
</tr>
<?php
$home = query("select * from profil_struktur");
?>
<?php $i = 1; ?>
<?php foreach ($home as $row): ?>

<tr>
<td><?= $i; ?></td>
<td><iframe src="file/<?= $row["struktur"]?>" width="200" height="140"></iframe></td>
<td><a href="profil/struktur/hapus.php?id=<?= $row["id"];?>" onclick="return confirm('Apakah anda ingin menghapus data ini?')"><img src="img/delete-icon.png" width="20" height="20"></a></td>
</tr>

<?php $i++; ?>
<?php endforeach;?>
</table>
<p align="center"><a href="profil/struktur/tambah.php?id=<?= $row["id"];?>"><img src="img/add-icon.png" width="20" height="20" alt class="img-fluid"></a>
</p>

<!--Visi-Misi-->
<br><br><br>
<h4 class="container border-start border-success border-4" id="visi_misi">Visi dan Misi Dinas Lingkungan Hidup Boyolali</h4>
<table border='0' cellpadding='10' cellspacing='0'>
<tr>
<th>No</th>
<th>File</th>
<th>Aksi</th>
</tr>
<?php
$home = query("select * from profil_visi_misi");
?>
<?php $i = 1; ?>
<?php foreach ($home as $row): ?>

<tr>
<td><?= $i; ?></td>
<td><iframe src="file/<?= $row["visi_misi"]?>" width="200" height="140"></iframe></td>
<td><a href="profil/visi_misi/hapus.php?id=<?= $row["id"];?>" onclick="return confirm('Apakah anda ingin menghapus data ini?')"><img src="img/delete-icon.png" width="20" height="20"></a></td>
</tr>

<?php $i++; ?>
<?php endforeach;?>
</table>
<p align="center"><a href="profil/visi_misi/tambah.php?id=<?= $row["id"];?>"><img src="img/add-icon.png" width="20" height="20" alt class="img-fluid"></a>
</p>

<!--Tujuan-->
<br><br><br>
<h4 class="container border-start border-success border-4" id="tujuan">Tujuan Dinas Lingkungan Hidup Boyolali</h4>
<table border='0' cellpadding='10' cellspacing='0'>
<tr>
<th>No</th>
<th>File</th>
<th>Aksi</th>
</tr>
<?php
$home = query("select * from profil_tujuan");
?>
<?php $i = 1; ?>
<?php foreach ($home as $row): ?>

<tr>
<td><?= $i; ?></td>
<td><iframe src="file/<?= $row["tujuan"]?>" width="200" height="140"></iframe></td>
<td><a href="profil/tujuan/hapus.php?id=<?= $row["id"];?>" onclick="return confirm('Apakah anda ingin menghapus data ini?')"><img src="img/delete-icon.png" width="20" height="20"></a></td>
</tr>

<?php $i++; ?>
<?php endforeach;?>
</table>
<p align="center"><a href="profil/tujuan/tambah.php?id=<?= $row["id"];?>"><img src="img/add-icon.png" width="20" height="20" alt class="img-fluid"></a>
</p>

<!--Personil-->
<br><br><br>
<h4 class="container border-start border-success border-4" id="personil">Personil Dinas Lingkungan Hidup Boyolali</h4>
<table border='0' cellpadding='10' cellspacing='0'>
<tr>
<th>No</th>
<th>File</th>
<th>Aksi</th>
</tr>
<?php
$home = query("select * from profil_personil");
?>
<?php $i = 1; ?>
<?php foreach ($home as $row): ?>

<tr>
<td><?= $i; ?></td>
<td><iframe src="file/<?= $row["personil"]?>" width="200" height="140"></iframe></td>
<td><a href="profil/personil/hapus.php?id=<?= $row["id"];?>" onclick="return confirm('Apakah anda ingin menghapus data ini?')"><img src="img/delete-icon.png" width="20" height="20"></a></td>
</tr>

<?php $i++; ?>
<?php endforeach;?>
</table>
<p align="center"><a href="profil/personil/tambah.php?id=<?= $row["id"];?>"><img src="img/add-icon.png" width="20" height="20" alt class="img-fluid"></a>
</p>
			</p>
        </div>
		
		<!--batas-->
		
        <div class="tab-pane fade" id="kinerja">
            <h4 class="mt-2">Laman Konten Kinerja</h4>
            <p>
			<!--Standar Pelayanan-->
<br><br><br>
<h4 class="container border-start border-success border-4" id="std_pelayanan">Standar Pelayanan Dinas Lingkungan Hidup Boyolali</h4>
<table border='0' cellpadding='10' cellspacing='0'>
<tr>
<th>No</th>
<th>File</th>
<th>Aksi</th>
</tr>
<?php
$home = query("select * from kinerja_std_pelayanan");
?>
<?php $i = 1; ?>
<?php foreach ($home as $row): ?>

<tr>
<td><?= $i; ?></td>
<td><iframe src="file/<?= $row["std_pelayanan"]?>" width="200" height="140"></iframe></td>
<td><a href="kinerja/std_pelayanan/hapus.php?id=<?= $row["id"];?>" onclick="return confirm('Apakah anda ingin menghapus data ini?')"><img src="img/delete-icon.png" width="20" height="20"></a></td>
</tr>

<?php $i++; ?>
<?php endforeach;?>
</table>
<p align="center"><a href="kinerja/std_pelayanan/tambah.php?id=<?= $row["id"];?>"><img src="img/add-icon.png" width="20" height="20" alt class="img-fluid"></a>
</p>

<!--Renstra-->
<br><br><br>
<h4 class="container border-start border-success border-4" id="renstra">Renstra Dinas Lingkungan Hidup Boyolali</h4>
<table border='0' cellpadding='10' cellspacing='0'>
<tr>
<th>No</th>
<th>File</th>
<th>Aksi</th>
</tr>
<?php
$home = query("select * from kinerja_renstra");
?>
<?php $i = 1; ?>
<?php foreach ($home as $row): ?>

<tr>
<td><?= $i; ?></td>
<td><iframe src="file/<?= $row["renstra"]?>" width="200" height="140"></iframe></td>
<td><a href="kinerja/renstra/hapus.php?id=<?= $row["id"];?>" onclick="return confirm('Apakah anda ingin menghapus data ini?')"><img src="img/delete-icon.png" width="20" height="20"></a></td>
</tr>

<?php $i++; ?>
<?php endforeach;?>
</table>
<p align="center"><a href="kinerja/renstra/tambah.php?id=<?= $row["id"];?>"><img src="img/add-icon.png" width="20" height="20" alt class="img-fluid"></a>
</p>

<!--Org, Kepeg, Keu-->
<br><br><br>
<h4 class="container border-start border-success border-4" id="org_kepeg">Organisasi Kepegawaian dan Keuangan Dinas Lingkungan Hidup Boyolali</h4>
<table border='0' cellpadding='10' cellspacing='0'>
<tr>
<th>No</th>
<th>File</th>
<th>Aksi</th>
</tr>
<?php
$home = query("select * from kinerja_org_kepeg");
?>
<?php $i = 1; ?>
<?php foreach ($home as $row): ?>

<tr>
<td><?= $i; ?></td>
<td><iframe src="file/<?= $row["org_kepeg"]?>" width="200" height="140"></iframe></td>
<td><a href="kinerja/org_kepeg/hapus.php?id=<?= $row["id"];?>" onclick="return confirm('Apakah anda ingin menghapus data ini?')"><img src="img/delete-icon.png" width="20" height="20"></a></td>
</tr>

<?php $i++; ?>
<?php endforeach;?>
</table>
<p align="center"><a href="kinerja/org_kepeg/tambah.php?id=<?= $row["id"];?>"><img src="img/add-icon.png" width="20" height="20" alt class="img-fluid"></a>
</p>

<!--Informasi dan Perizinan-->
<br><br><br>
<h4 class="container border-start border-success border-4" id="info_izin">Informasi dan Perizinan Dinas Lingkungan Hidup Boyolali</h4>
<table border='0' cellpadding='10' cellspacing='0'>
<tr>
<th>No</th>
<th>File</th>
<th>Aksi</th>
</tr>
<?php
$home = query("select * from kinerja_info_izin");
?>
<?php $i = 1; ?>
<?php foreach ($home as $row): ?>

<tr>
<td><?= $i; ?></td>
<td><iframe src="file/<?= $row["info_izin"]?>" width="200" height="140"></iframe></td>
<td><a href="kinerja/info_izin/hapus.php?id=<?= $row["id"];?>" onclick="return confirm('Apakah anda ingin menghapus data ini?')"><img src="img/delete-icon.png" width="20" height="20"></a></td>
</tr>

<?php $i++; ?>
<?php endforeach;?>
</table>
<p align="center"><a href="kinerja/info_izin/tambah.php?id=<?= $row["id"];?>"><img src="img/add-icon.png" width="20" height="20" alt class="img-fluid"></a>
</p>

<!--SOP B3 dan Syarat-->
<br><br><br>
<h4 class="container border-start border-success border-4" id="sop_B3">SOP B3 dan Syarat Dinas Lingkungan Hidup Boyolali</h4>
<table border='0' cellpadding='10' cellspacing='0'>
<tr>
<th>No</th>
<th>File</th>
<th>Aksi</th>
</tr>
<?php
$home = query("select * from kinerja_sop_b3");
?>
<?php $i = 1; ?>
<?php foreach ($home as $row): ?>

<tr>
<td><?= $i; ?></td>
<td><iframe src="file/<?= $row["sop_b3"]?>" width="200" height="140"></iframe></td>
<td><a href="kinerja/sop_b3/hapus.php?id=<?= $row["id"];?>" onclick="return confirm('Apakah anda ingin menghapus data ini?')"><img src="img/delete-icon.png" width="20" height="20"></a></td>
</tr>

<?php $i++; ?>
<?php endforeach;?>
</table>
<p align="center"><a href="kinerja/sop_b3/tambah.php?id=<?= $row["id"];?>"><img src="img/add-icon.png" width="20" height="20" alt class="img-fluid"></a>
</p>

<!--SOP pengaduan-->
<br><br><br>
<h4 class="container border-start border-success border-4" id="sop_Pengaduan">SOP Pengaduan Dinas Lingkungan Hidup Boyolali</h4>
<table border='0' cellpadding='10' cellspacing='0'>
<tr>
<th>No</th>
<th>File</th>
<th>Aksi</th>
</tr>
<?php
$home = query("select * from kinerja_sop_pengaduan");
?>
<?php $i = 1; ?>
<?php foreach ($home as $row): ?>

<tr>
<td><?= $i; ?></td>
<td><iframe src="file/<?= $row["sop_pengaduan"]?>" width="200" height="140"></iframe></td>
<td><a href="kinerja/sop_pengaduan/hapus.php?id=<?= $row["id"];?>" onclick="return confirm('Apakah anda ingin menghapus data ini?')"><img src="img/delete-icon.png" width="20" height="20"></a></td>
</tr>

<?php $i++; ?>
<?php endforeach;?>
</table>
<p align="center"><a href="kinerja/sop_pengaduan/tambah.php?id=<?= $row["id"];?>"><img src="img/add-icon.png" width="20" height="20" alt class="img-fluid"></a>
</p>
			</p>
        </div>
		
		<!--batas-->
		
		<div class="tab-pane fade" id="pelayanan">
            <h4 class="mt-2">Laman Konten Pelayan</h4>
            <p>
			<!--Perizinan-->
<br><br><br>
<h4 class="container border-start border-success border-4" id="perizinan">Form Perizinan Dinas Lingkungan Hidup Boyolali</h4>
<table border='0' cellpadding='10' cellspacing='0'>
<tr>
<th>No</th>
<th>File</th>
<th>Aksi</th>
</tr>
<?php
$home = query("select * from pelayanan_perizinan");
?>
<?php $i = 1; ?>
<?php foreach ($home as $row): ?>

<tr>
<td><?= $i; ?></td>
<td><iframe src="file/<?= $row["perizinan"]?>" width="200" height="140"></iframe></td>
<td><a href="pelayanan/perizinan/hapus.php?id=<?= $row["id"];?>" onclick="return confirm('Apakah anda ingin menghapus data ini?')"><img src="img/delete-icon.png" width="20" height="20"></a></td>
</tr>

<?php $i++; ?>
<?php endforeach;?>
</table>
<p align="center"><a href="pelayanan/perizinan/tambah.php?id=<?= $row["id"];?>"><img src="img/add-icon.png" width="20" height="20" alt class="img-fluid"></a>
</p>

<!--Aduan-->
<br><br><br>
<h4 class="container border-start border-success border-4" id="aduan">Layanan Aduan Dinas Lingkungan Hidup Boyolali</h4>
<table border='0' cellpadding='10' cellspacing='0'>
<tr>
<th>No</th>
<th>File</th>
<th>Aksi</th>
</tr>
<?php
$home = query("select * from pelayanan_aduan");
?>
<?php $i = 1; ?>
<?php foreach ($home as $row): ?>

<tr>
<td><?= $i; ?></td>
<td><iframe src="file/<?= $row["aduan"]?>" width="200" height="140"></iframe></td>
<td><a href="pelayanan/aduan/hapus.php?id=<?= $row["id"];?>" onclick="return confirm('Apakah anda ingin menghapus data ini?')"><img src="img/delete-icon.png" width="20" height="20"></a></td>
</tr>

<?php $i++; ?>
<?php endforeach;?>
</table>
<p align="center"><a href="pelayanan/aduan/tambah.php?id=<?= $row["id"];?>"><img src="img/add-icon.png" width="20" height="20" alt class="img-fluid"></a>
</p>

<!--SPPL-->
<br><br><br>
<h4 class="container border-start border-success border-4" id="sppl">SPPL Dinas Lingkungan Hidup Boyolali</h4>
<table border='0' cellpadding='10' cellspacing='0'>
<tr>
<th>No</th>
<th>File</th>
<th>Aksi</th>
</tr>
<?php
$home = query("select * from pelayanan_sppl");
?>
<?php $i = 1; ?>
<?php foreach ($home as $row): ?>

<tr>
<td><?= $i; ?></td>
<td><iframe src="file/<?= $row["sppl"]?>" width="200" height="140"></iframe></td>
<td><a href="pelayanan/sppl/hapus.php?id=<?= $row["id"];?>" onclick="return confirm('Apakah anda ingin menghapus data ini?')"><img src="img/delete-icon.png" width="20" height="20"></a></td>
</tr>

<?php $i++; ?>
<?php endforeach;?>
</table>
<p align="center"><a href="pelayanan/sppl/tambah.php?id=<?= $row["id"];?>"><img src="img/add-icon.png" width="20" height="20" alt class="img-fluid"></a>
</p>

<!--UKL-UPLL-->
<br><br><br>
<h4 class="container border-start border-success border-4" id="ukl_upl">UKL-UPLL Dinas Lingkungan Hidup Boyolali</h4>
<table border='0' cellpadding='10' cellspacing='0'>
<tr>
<th>No</th>
<th>File</th>
<th>Aksi</th>
</tr>
<?php
$home = query("select * from pelayanan_ukl_upll");
?>
<?php $i = 1; ?>
<?php foreach ($home as $row): ?>

<tr>
<td><?= $i; ?></td>
<td><iframe src="file/<?= $row["ukl_upll"]?>" width="200" height="140"></iframe></td>
<td><a href="pelayanan/ukl_upll/hapus.php?id=<?= $row["id"];?>" onclick="return confirm('Apakah anda ingin menghapus data ini?')"><img src="img/delete-icon.png" width="20" height="20"></a></td>
</tr>

<?php $i++; ?>
<?php endforeach;?>
</table>
<p align="center"><a href="pelayanan/ukl_upll/tambah.php?id=<?= $row["id"];?>"><img src="img/add-icon.png" width="20" height="20" alt class="img-fluid"></a>
</p>

<!--Pengelolaan Sampah-->
<br><br><br>
<h4 class="container border-start border-success border-4" id="pe_sampah">Pengelolaan Sampah Dinas Lingkungan Hidup Boyolali</h4>
<table border='0' cellpadding='10' cellspacing='0'>
<tr>
<th>No</th>
<th>File</th>
<th>Aksi</th>
</tr>
<?php
$home = query("select * from pelayanan_pe_sampah");
?>
<?php $i = 1; ?>
<?php foreach ($home as $row): ?>

<tr>
<td><?= $i; ?></td>
<td><iframe src="file/<?= $row["pe_sampah"]?>" width="200" height="140"></iframe></td>
<td><a href="pelayanan/pe_sampah/hapus.php?id=<?= $row["id"];?>" onclick="return confirm('Apakah anda ingin menghapus data ini?')"><img src="img/delete-icon.png" width="20" height="20"></a></td>
</tr>

<?php $i++; ?>
<?php endforeach;?>
</table>
<p align="center"><a href="pelayanan/pe_sampah/tambah.php?id=<?= $row["id"];?>"><img src="img/add-icon.png" width="20" height="20" alt class="img-fluid"></a>
</p>

<!--AMDAL-->
<br><br><br>
<h4 class="container border-start border-success border-4" id="amdal">AMDAL Dinas Lingkungan Hidup Boyolali</h4>
<table border='0' cellpadding='10' cellspacing='0'>
<tr>
<th>No</th>
<th>File</th>
<th>Aksi</th>
</tr>
<?php
$home = query("select * from pelayanan_amdal");
?>
<?php $i = 1; ?>
<?php foreach ($home as $row): ?>

<tr>
<td><?= $i; ?></td>
<td><iframe src="file/<?= $row["amdal"]?>" width="200" height="140"></iframe></td>
<td><a href="pelayanan/amdal/hapus.php?id=<?= $row["id"];?>" onclick="return confirm('Apakah anda ingin menghapus data ini?')"><img src="img/delete-icon.png" width="20" height="20"></a></td>
</tr>

<?php $i++; ?>
<?php endforeach;?>
</table>
<p align="center"><a href="pelayanan/amdal/tambah.php?id=<?= $row["id"];?>"><img src="img/add-icon.png" width="20" height="20" alt class="img-fluid"></a>
</p>
			</p>
        </div>
		
		<!--batas-->
		
		<div class="tab-pane fade" id="galeri">
            <h4 class="mt-2">Laman Konten Galeri</h4>
            <p>
<!--Ini galeri-->
<br><br><br>
<h5 class="container border-start border-success border-4">GALERI DINAS</h5>
<table border='0' cellpadding='10' cellspacing='0'>
<tr>
<th>Upload Gambar</th>
</tr>
<?php
$home = query("select * from galeri");
?>
<?php $i = 1; ?>
<?php foreach ($home as $row): ?>

<tr>
<td><?= $i; ?></td>
<td><img src="img/<?= $row["galeri"]?>" width="140" height="100"></td>
<td><a href="beranda/galeri/hapus.php?id=<?= $row["id"];?>" onclick="return confirm('Apakah anda ingin menghapus data ini?')"><img src="img/delete-icon.png" width="20" height="20"></a></td>
</tr>

<?php $i++; ?>
<?php endforeach;?>
</table>
<p align="center"><a href="beranda/galeri/tambah.php?id=<?= $row["id"];?>"><img src="img/add-icon.png" width="20" height="20" alt class="img-fluid"></a>
</p>		
			</p>
        </div>
		
		<!--batas-->
		
</div>

<!--div class="shadow p-3 mb-5 bg-body rounded">
<br><p align="center"><button class="btn btn-primary" type="submit" name="submit">Selesai</button></p>
</div-->
</body>
=======
<?php
require "function.php";
?>

<html>
<head lang="en">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="home.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <title>Admin dlh boyolali</title>
	<link rel="icon" href="img/logo.png" width="5" height="12">
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<style>
	.bs-example{
    	margin: 20px;
    }
</style>
</head>

<body>
<div class="bs-example">
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a href="#beranda" class="nav-link active" data-toggle="tab">Beranda</a>
        </li>
        <li class="nav-item">
            <a href="#profil" class="nav-link" data-toggle="tab">Profil</a>
        </li>
        <li class="nav-item">
            <a href="#kinerja" class="nav-link" data-toggle="tab">Kinerja</a>
        </li>
		<li class="nav-item">
            <a href="#pelayanan" class="nav-link" data-toggle="tab">Pelayanan</a>
        </li>
		<li class="nav-item">
            <a href="#galeri" class="nav-link" data-toggle="tab">Galeri</a>
        </li>
    </ul>
	

    <div class="tab-content">
        <div class="tab-pane fade show active" id="beranda">
            <h4 class="mt-2">Laman Konten Beranda</h4>
            <p><br>
<h3 class="container border-start border-success border-4">JUMBO-TRON</h3><br>

<table border='0' cellpadding='15' cellspacing='5'>
<tr>
<th>No</th>
<th>Gambar</th>
<th>Judul</th>
<th>Keterangan</th>
<th>Aksi</th>
</tr>
<?php
$home = query("select * from jumbo_tron");
?>
<?php $i = 1; ?>
<?php foreach ($home as $row): ?>

<tr>
<td><?= $i; ?></td>
<td><img src="img/<?= $row["jumbo_tron"]?>" width="140" height="100"></td>
<td><?= $row["judul"]?></td>
<td><?= $row["keterangan"]?></td>
<td><a href="beranda/jumbo_tron/edit.php?id=<?= $row["id"];?>"><img src="img/edit-icon.png" width="20" height="20" alt class="img-fluid"></a>
</tr>

<?php $i++; ?>
<?php endforeach;?>
</table>

<!--Ini konten berita/informasi up-to-date-->
<br><br><br>
<h3 class="container border-start border-success border-4">BERITA TERKINI</h3>
<table border='0' cellpadding='10' cellspacing='0'>
<tr>
<th>No</th>
<th>Gambar</th>
<th>Judul</th>
<th>Deskripsi</th>
<th>Link<th>
<th>Aksi</th>
</tr>
<?php
$home = query("select * from berita");
?>
<?php $i = 1; ?>
<?php foreach ($home as $row): ?>

<tr>
<td><?= $i; ?></td>
<td><img src="img/<?= $row["berita"]?>" width="140" height="100"></td>
<td><?= $row["judul"]?></td>
<td><?= $row["deskripsi"]?></td>
<td><?= $row["link"]?></td>
<td><a href="beranda/berita/edit.php?id=<?= $row["id"];?>"><img src="img/edit-icon.png" width="20" height="20"></a><br><br>
<a href="beranda/berita/hapus.php?id=<?= $row["id"];?>" onclick="return confirm('Apakah anda ingin menghapus data ini?')"><img src="img/delete-icon.png" width="20" height="20"></a></td>
</tr>

<?php $i++; ?>
<?php endforeach;?>
</table>
<p align="center"><a href="beranda/berita/tambah.php?id=<?= $row["id"];?>"><img src="img/add-icon.png" width="20" height="20" alt class="img-fluid"></a>
</p>

<!--Ini Konten Informasi konsumsi lama......................-->
<br><br><br>
<h4 class="container border-start border-success border-4">BERITA LAINNYA</h4>
<table border='0' cellpadding='10' cellspacing='0'>
<tr>
<th>No</th>
<th>Judul</th>
<th>Link</th>
<th>Aksi</th>
</tr>
<?php
$home = query("select * from berita_lain");
?>
<?php $i = 1; ?>
<?php foreach ($home as $row): ?>

<tr>
<td><?= $i; ?></td>
<td><?= $row["judul"]?></td>
<td><?= $row["link"]?></td>
<td><a href="beranda/berita_lainnya/edit.php?id=<?= $row["id"];?>"><img src="img/edit-icon.png" width="20" height="20"></a><br><br>
<a href="beranda/berita_lainnya/hapus.php?id=<?= $row["id"];?>" onclick="return confirm('Apakah anda ingin menghapus data ini?')"><img src="img/delete-icon.png" width="20" height="20"></a></td>
</tr>

<?php $i++; ?>
<?php endforeach;?>
</table>
<p align="center"><a href="beranda/berita_lainnya/tambah.php?id=<?= $row["id"];?>"><img src="img/add-icon.png" width="20" height="20" alt class="img-fluid"></a>
</p>		
			</p>
        </div>
		
		<!--batas-->
		
        <div class="tab-pane fade" id="profil">
            <h4 class="mt-2">Laman Konten Profil</h4>
            <p>
			<!--Struktur Organisasi-->
<br><br><br>
<h4 class="container border-start border-success border-4" id="struktur_org">Struktur Organisasi Dinas Lingkungan Hidup Boyolali</h4>
<table border='0' cellpadding='10' cellspacing='0'>
<tr>
<th>No</th>
<th>File</th>
<th>Aksi</th>
</tr>
<?php
$home = query("select * from profil_struktur");
?>
<?php $i = 1; ?>
<?php foreach ($home as $row): ?>

<tr>
<td><?= $i; ?></td>
<td><iframe src="file/<?= $row["struktur"]?>" width="200" height="140"></iframe></td>
<td><a href="profil/struktur/hapus.php?id=<?= $row["id"];?>" onclick="return confirm('Apakah anda ingin menghapus data ini?')"><img src="img/delete-icon.png" width="20" height="20"></a></td>
</tr>

<?php $i++; ?>
<?php endforeach;?>
</table>
<p align="center"><a href="profil/struktur/tambah.php?id=<?= $row["id"];?>"><img src="img/add-icon.png" width="20" height="20" alt class="img-fluid"></a>
</p>

<!--Visi-Misi-->
<br><br><br>
<h4 class="container border-start border-success border-4" id="visi_misi">Visi dan Misi Dinas Lingkungan Hidup Boyolali</h4>
<table border='0' cellpadding='10' cellspacing='0'>
<tr>
<th>No</th>
<th>File</th>
<th>Aksi</th>
</tr>
<?php
$home = query("select * from profil_visi_misi");
?>
<?php $i = 1; ?>
<?php foreach ($home as $row): ?>

<tr>
<td><?= $i; ?></td>
<td><iframe src="file/<?= $row["visi_misi"]?>" width="200" height="140"></iframe></td>
<td><a href="profil/visi_misi/hapus.php?id=<?= $row["id"];?>" onclick="return confirm('Apakah anda ingin menghapus data ini?')"><img src="img/delete-icon.png" width="20" height="20"></a></td>
</tr>

<?php $i++; ?>
<?php endforeach;?>
</table>
<p align="center"><a href="profil/visi_misi/tambah.php?id=<?= $row["id"];?>"><img src="img/add-icon.png" width="20" height="20" alt class="img-fluid"></a>
</p>

<!--Tujuan-->
<br><br><br>
<h4 class="container border-start border-success border-4" id="tujuan">Tujuan Dinas Lingkungan Hidup Boyolali</h4>
<table border='0' cellpadding='10' cellspacing='0'>
<tr>
<th>No</th>
<th>File</th>
<th>Aksi</th>
</tr>
<?php
$home = query("select * from profil_tujuan");
?>
<?php $i = 1; ?>
<?php foreach ($home as $row): ?>

<tr>
<td><?= $i; ?></td>
<td><iframe src="file/<?= $row["tujuan"]?>" width="200" height="140"></iframe></td>
<td><a href="profil/tujuan/hapus.php?id=<?= $row["id"];?>" onclick="return confirm('Apakah anda ingin menghapus data ini?')"><img src="img/delete-icon.png" width="20" height="20"></a></td>
</tr>

<?php $i++; ?>
<?php endforeach;?>
</table>
<p align="center"><a href="profil/tujuan/tambah.php?id=<?= $row["id"];?>"><img src="img/add-icon.png" width="20" height="20" alt class="img-fluid"></a>
</p>

<!--Personil-->
<br><br><br>
<h4 class="container border-start border-success border-4" id="personil">Personil Dinas Lingkungan Hidup Boyolali</h4>
<table border='0' cellpadding='10' cellspacing='0'>
<tr>
<th>No</th>
<th>File</th>
<th>Aksi</th>
</tr>
<?php
$home = query("select * from profil_personil");
?>
<?php $i = 1; ?>
<?php foreach ($home as $row): ?>

<tr>
<td><?= $i; ?></td>
<td><iframe src="file/<?= $row["personil"]?>" width="200" height="140"></iframe></td>
<td><a href="profil/personil/hapus.php?id=<?= $row["id"];?>" onclick="return confirm('Apakah anda ingin menghapus data ini?')"><img src="img/delete-icon.png" width="20" height="20"></a></td>
</tr>

<?php $i++; ?>
<?php endforeach;?>
</table>
<p align="center"><a href="profil/personil/tambah.php?id=<?= $row["id"];?>"><img src="img/add-icon.png" width="20" height="20" alt class="img-fluid"></a>
</p>
			</p>
        </div>
		
		<!--batas-->
		
        <div class="tab-pane fade" id="kinerja">
            <h4 class="mt-2">Laman Konten Kinerja</h4>
            <p>
			<!--Standar Pelayanan-->
<br><br><br>
<h4 class="container border-start border-success border-4" id="std_pelayanan">Standar Pelayanan Dinas Lingkungan Hidup Boyolali</h4>
<table border='0' cellpadding='10' cellspacing='0'>
<tr>
<th>No</th>
<th>File</th>
<th>Aksi</th>
</tr>
<?php
$home = query("select * from kinerja_std_pelayanan");
?>
<?php $i = 1; ?>
<?php foreach ($home as $row): ?>

<tr>
<td><?= $i; ?></td>
<td><iframe src="file/<?= $row["std_pelayanan"]?>" width="200" height="140"></iframe></td>
<td><a href="kinerja/std_pelayanan/hapus.php?id=<?= $row["id"];?>" onclick="return confirm('Apakah anda ingin menghapus data ini?')"><img src="img/delete-icon.png" width="20" height="20"></a></td>
</tr>

<?php $i++; ?>
<?php endforeach;?>
</table>
<p align="center"><a href="kinerja/std_pelayanan/tambah.php?id=<?= $row["id"];?>"><img src="img/add-icon.png" width="20" height="20" alt class="img-fluid"></a>
</p>

<!--Renstra-->
<br><br><br>
<h4 class="container border-start border-success border-4" id="renstra">Renstra Dinas Lingkungan Hidup Boyolali</h4>
<table border='0' cellpadding='10' cellspacing='0'>
<tr>
<th>No</th>
<th>File</th>
<th>Aksi</th>
</tr>
<?php
$home = query("select * from kinerja_renstra");
?>
<?php $i = 1; ?>
<?php foreach ($home as $row): ?>

<tr>
<td><?= $i; ?></td>
<td><iframe src="file/<?= $row["renstra"]?>" width="200" height="140"></iframe></td>
<td><a href="kinerja/renstra/hapus.php?id=<?= $row["id"];?>" onclick="return confirm('Apakah anda ingin menghapus data ini?')"><img src="img/delete-icon.png" width="20" height="20"></a></td>
</tr>

<?php $i++; ?>
<?php endforeach;?>
</table>
<p align="center"><a href="kinerja/renstra/tambah.php?id=<?= $row["id"];?>"><img src="img/add-icon.png" width="20" height="20" alt class="img-fluid"></a>
</p>

<!--Org, Kepeg, Keu-->
<br><br><br>
<h4 class="container border-start border-success border-4" id="org_kepeg">Organisasi Kepegawaian dan Keuangan Dinas Lingkungan Hidup Boyolali</h4>
<table border='0' cellpadding='10' cellspacing='0'>
<tr>
<th>No</th>
<th>File</th>
<th>Aksi</th>
</tr>
<?php
$home = query("select * from kinerja_org_kepeg");
?>
<?php $i = 1; ?>
<?php foreach ($home as $row): ?>

<tr>
<td><?= $i; ?></td>
<td><iframe src="file/<?= $row["org_kepeg"]?>" width="200" height="140"></iframe></td>
<td><a href="kinerja/org_kepeg/hapus.php?id=<?= $row["id"];?>" onclick="return confirm('Apakah anda ingin menghapus data ini?')"><img src="img/delete-icon.png" width="20" height="20"></a></td>
</tr>

<?php $i++; ?>
<?php endforeach;?>
</table>
<p align="center"><a href="kinerja/org_kepeg/tambah.php?id=<?= $row["id"];?>"><img src="img/add-icon.png" width="20" height="20" alt class="img-fluid"></a>
</p>

<!--Informasi dan Perizinan-->
<br><br><br>
<h4 class="container border-start border-success border-4" id="info_izin">Informasi dan Perizinan Dinas Lingkungan Hidup Boyolali</h4>
<table border='0' cellpadding='10' cellspacing='0'>
<tr>
<th>No</th>
<th>File</th>
<th>Aksi</th>
</tr>
<?php
$home = query("select * from kinerja_info_izin");
?>
<?php $i = 1; ?>
<?php foreach ($home as $row): ?>

<tr>
<td><?= $i; ?></td>
<td><iframe src="file/<?= $row["info_izin"]?>" width="200" height="140"></iframe></td>
<td><a href="kinerja/info_izin/hapus.php?id=<?= $row["id"];?>" onclick="return confirm('Apakah anda ingin menghapus data ini?')"><img src="img/delete-icon.png" width="20" height="20"></a></td>
</tr>

<?php $i++; ?>
<?php endforeach;?>
</table>
<p align="center"><a href="kinerja/info_izin/tambah.php?id=<?= $row["id"];?>"><img src="img/add-icon.png" width="20" height="20" alt class="img-fluid"></a>
</p>

<!--SOP B3 dan Syarat-->
<br><br><br>
<h4 class="container border-start border-success border-4" id="sop_B3">SOP B3 dan Syarat Dinas Lingkungan Hidup Boyolali</h4>
<table border='0' cellpadding='10' cellspacing='0'>
<tr>
<th>No</th>
<th>File</th>
<th>Aksi</th>
</tr>
<?php
$home = query("select * from kinerja_sop_b3");
?>
<?php $i = 1; ?>
<?php foreach ($home as $row): ?>

<tr>
<td><?= $i; ?></td>
<td><iframe src="file/<?= $row["sop_b3"]?>" width="200" height="140"></iframe></td>
<td><a href="kinerja/sop_b3/hapus.php?id=<?= $row["id"];?>" onclick="return confirm('Apakah anda ingin menghapus data ini?')"><img src="img/delete-icon.png" width="20" height="20"></a></td>
</tr>

<?php $i++; ?>
<?php endforeach;?>
</table>
<p align="center"><a href="kinerja/sop_b3/tambah.php?id=<?= $row["id"];?>"><img src="img/add-icon.png" width="20" height="20" alt class="img-fluid"></a>
</p>

<!--SOP pengaduan-->
<br><br><br>
<h4 class="container border-start border-success border-4" id="sop_Pengaduan">SOP Pengaduan Dinas Lingkungan Hidup Boyolali</h4>
<table border='0' cellpadding='10' cellspacing='0'>
<tr>
<th>No</th>
<th>File</th>
<th>Aksi</th>
</tr>
<?php
$home = query("select * from kinerja_sop_pengaduan");
?>
<?php $i = 1; ?>
<?php foreach ($home as $row): ?>

<tr>
<td><?= $i; ?></td>
<td><iframe src="file/<?= $row["sop_pengaduan"]?>" width="200" height="140"></iframe></td>
<td><a href="kinerja/sop_pengaduan/hapus.php?id=<?= $row["id"];?>" onclick="return confirm('Apakah anda ingin menghapus data ini?')"><img src="img/delete-icon.png" width="20" height="20"></a></td>
</tr>

<?php $i++; ?>
<?php endforeach;?>
</table>
<p align="center"><a href="kinerja/sop_pengaduan/tambah.php?id=<?= $row["id"];?>"><img src="img/add-icon.png" width="20" height="20" alt class="img-fluid"></a>
</p>
			</p>
        </div>
		
		<!--batas-->
		
		<div class="tab-pane fade" id="pelayanan">
            <h4 class="mt-2">Laman Konten Pelayan</h4>
            <p>
			<!--Perizinan-->
<br><br><br>
<h4 class="container border-start border-success border-4" id="perizinan">Form Perizinan Dinas Lingkungan Hidup Boyolali</h4>
<table border='0' cellpadding='10' cellspacing='0'>
<tr>
<th>No</th>
<th>File</th>
<th>Aksi</th>
</tr>
<?php
$home = query("select * from pelayanan_perizinan");
?>
<?php $i = 1; ?>
<?php foreach ($home as $row): ?>

<tr>
<td><?= $i; ?></td>
<td><iframe src="file/<?= $row["perizinan"]?>" width="200" height="140"></iframe></td>
<td><a href="pelayanan/perizinan/hapus.php?id=<?= $row["id"];?>" onclick="return confirm('Apakah anda ingin menghapus data ini?')"><img src="img/delete-icon.png" width="20" height="20"></a></td>
</tr>

<?php $i++; ?>
<?php endforeach;?>
</table>
<p align="center"><a href="pelayanan/perizinan/tambah.php?id=<?= $row["id"];?>"><img src="img/add-icon.png" width="20" height="20" alt class="img-fluid"></a>
</p>

<!--Aduan-->
<br><br><br>
<h4 class="container border-start border-success border-4" id="aduan">Layanan Aduan Dinas Lingkungan Hidup Boyolali</h4>
<table border='0' cellpadding='10' cellspacing='0'>
<tr>
<th>No</th>
<th>File</th>
<th>Aksi</th>
</tr>
<?php
$home = query("select * from pelayanan_aduan");
?>
<?php $i = 1; ?>
<?php foreach ($home as $row): ?>

<tr>
<td><?= $i; ?></td>
<td><iframe src="file/<?= $row["aduan"]?>" width="200" height="140"></iframe></td>
<td><a href="pelayanan/aduan/hapus.php?id=<?= $row["id"];?>" onclick="return confirm('Apakah anda ingin menghapus data ini?')"><img src="img/delete-icon.png" width="20" height="20"></a></td>
</tr>

<?php $i++; ?>
<?php endforeach;?>
</table>
<p align="center"><a href="pelayanan/aduan/tambah.php?id=<?= $row["id"];?>"><img src="img/add-icon.png" width="20" height="20" alt class="img-fluid"></a>
</p>

<!--SPPL-->
<br><br><br>
<h4 class="container border-start border-success border-4" id="sppl">SPPL Dinas Lingkungan Hidup Boyolali</h4>
<table border='0' cellpadding='10' cellspacing='0'>
<tr>
<th>No</th>
<th>File</th>
<th>Aksi</th>
</tr>
<?php
$home = query("select * from pelayanan_sppl");
?>
<?php $i = 1; ?>
<?php foreach ($home as $row): ?>

<tr>
<td><?= $i; ?></td>
<td><iframe src="file/<?= $row["sppl"]?>" width="200" height="140"></iframe></td>
<td><a href="pelayanan/sppl/hapus.php?id=<?= $row["id"];?>" onclick="return confirm('Apakah anda ingin menghapus data ini?')"><img src="img/delete-icon.png" width="20" height="20"></a></td>
</tr>

<?php $i++; ?>
<?php endforeach;?>
</table>
<p align="center"><a href="pelayanan/sppl/tambah.php?id=<?= $row["id"];?>"><img src="img/add-icon.png" width="20" height="20" alt class="img-fluid"></a>
</p>

<!--UKL-UPLL-->
<br><br><br>
<h4 class="container border-start border-success border-4" id="ukl_upl">UKL-UPLL Dinas Lingkungan Hidup Boyolali</h4>
<table border='0' cellpadding='10' cellspacing='0'>
<tr>
<th>No</th>
<th>File</th>
<th>Aksi</th>
</tr>
<?php
$home = query("select * from pelayanan_ukl_upll");
?>
<?php $i = 1; ?>
<?php foreach ($home as $row): ?>

<tr>
<td><?= $i; ?></td>
<td><iframe src="file/<?= $row["ukl_upll"]?>" width="200" height="140"></iframe></td>
<td><a href="pelayanan/ukl_upll/hapus.php?id=<?= $row["id"];?>" onclick="return confirm('Apakah anda ingin menghapus data ini?')"><img src="img/delete-icon.png" width="20" height="20"></a></td>
</tr>

<?php $i++; ?>
<?php endforeach;?>
</table>
<p align="center"><a href="pelayanan/ukl_upll/tambah.php?id=<?= $row["id"];?>"><img src="img/add-icon.png" width="20" height="20" alt class="img-fluid"></a>
</p>

<!--Pengelolaan Sampah-->
<br><br><br>
<h4 class="container border-start border-success border-4" id="pe_sampah">Pengelolaan Sampah Dinas Lingkungan Hidup Boyolali</h4>
<table border='0' cellpadding='10' cellspacing='0'>
<tr>
<th>No</th>
<th>File</th>
<th>Aksi</th>
</tr>
<?php
$home = query("select * from pelayanan_pe_sampah");
?>
<?php $i = 1; ?>
<?php foreach ($home as $row): ?>

<tr>
<td><?= $i; ?></td>
<td><iframe src="file/<?= $row["pe_sampah"]?>" width="200" height="140"></iframe></td>
<td><a href="pelayanan/pe_sampah/hapus.php?id=<?= $row["id"];?>" onclick="return confirm('Apakah anda ingin menghapus data ini?')"><img src="img/delete-icon.png" width="20" height="20"></a></td>
</tr>

<?php $i++; ?>
<?php endforeach;?>
</table>
<p align="center"><a href="pelayanan/pe_sampah/tambah.php?id=<?= $row["id"];?>"><img src="img/add-icon.png" width="20" height="20" alt class="img-fluid"></a>
</p>

<!--AMDAL-->
<br><br><br>
<h4 class="container border-start border-success border-4" id="amdal">AMDAL Dinas Lingkungan Hidup Boyolali</h4>
<table border='0' cellpadding='10' cellspacing='0'>
<tr>
<th>No</th>
<th>File</th>
<th>Aksi</th>
</tr>
<?php
$home = query("select * from pelayanan_amdal");
?>
<?php $i = 1; ?>
<?php foreach ($home as $row): ?>

<tr>
<td><?= $i; ?></td>
<td><iframe src="file/<?= $row["amdal"]?>" width="200" height="140"></iframe></td>
<td><a href="pelayanan/amdal/hapus.php?id=<?= $row["id"];?>" onclick="return confirm('Apakah anda ingin menghapus data ini?')"><img src="img/delete-icon.png" width="20" height="20"></a></td>
</tr>

<?php $i++; ?>
<?php endforeach;?>
</table>
<p align="center"><a href="pelayanan/amdal/tambah.php?id=<?= $row["id"];?>"><img src="img/add-icon.png" width="20" height="20" alt class="img-fluid"></a>
</p>
			</p>
        </div>
		
		<!--batas-->
		
		<div class="tab-pane fade" id="galeri">
            <h4 class="mt-2">Laman Konten Galeri</h4>
            <p>
<!--Ini galeri-->
<br><br><br>
<h5 class="container border-start border-success border-4">GALERI DINAS</h5>
<table border='0' cellpadding='10' cellspacing='0'>
<tr>
<th>Upload Gambar</th>
</tr>
<?php
$home = query("select * from galeri");
?>
<?php $i = 1; ?>
<?php foreach ($home as $row): ?>

<tr>
<td><?= $i; ?></td>
<td><img src="img/<?= $row["galeri"]?>" width="140" height="100"></td>
<td><a href="beranda/galeri/hapus.php?id=<?= $row["id"];?>" onclick="return confirm('Apakah anda ingin menghapus data ini?')"><img src="img/delete-icon.png" width="20" height="20"></a></td>
</tr>

<?php $i++; ?>
<?php endforeach;?>
</table>
<p align="center"><a href="beranda/galeri/tambah.php?id=<?= $row["id"];?>"><img src="img/add-icon.png" width="20" height="20" alt class="img-fluid"></a>
</p>		
			</p>
        </div>
		
		<!--batas-->
		
</div>

<!--div class="shadow p-3 mb-5 bg-body rounded">
<br><p align="center"><button class="btn btn-primary" type="submit" name="submit">Selesai</button></p>
</div-->
</body>
>>>>>>> 143b8cb (re-init old project dlh boyolali 2021)
</html>