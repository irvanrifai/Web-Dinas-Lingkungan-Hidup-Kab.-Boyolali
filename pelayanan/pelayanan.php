<!doctype html>
<?php
require "../function.php";
?>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="../home.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
    <title>Dinas Lingkungan Hidup Kabupaten Boyolali</title>
	<link rel="icon" href="../img/logo.png" width="5" height="12">
	  
	<!--script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css"></link-->
	
	<!--link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script-->
  
	<meta charset="UTF-8">

	<style>
	header{
		background-color: transparent;
		transition: background-color 2s;
		-webkit-transition: background-color 1s;
		font-family: Helvetica, arial, sans-serif;
		overflow-x:hidden;
	}
	.bs-example{
    	margin: 20px;
    }
	</style>

	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
	<script>
		$(window).scroll(function(){
		  var y = $(window).scrollTop()
		  if (y <= 135){
		    $('header').css('background-color','transparent');
		  } 
		  else {
		    $('header').css('background-color','black');
		  }
		});
	</script>
  
  </head>	
	
<body id="page-top" class="bg-light">

<!--Ini Header..........................-->
<header>
<section id="first1">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container border-start border-success border-4">
	  <div class="container-fluid">
    	<a class="navbar-brand" href="#page-top"><img src="../img/logo.png" width="50" height="65" alt class="img-fluid"></a>
	  	<a style="font-size:27px; color:whitesmoke; font-family:Lucida Grande;">DINAS LINGKUNGAN HIDUP KABUPATEN BOYOLALI</a>
	<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="nav navbar-nav me-auto my-2 my-lg-0" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active js-scroll-trigger" aria-current="page" href="../index.php">Beranda</a>
        </li>
        <li class="nav-item dropdown1">
          <a class="nav-link dropdown-toggle js-scroll-trigger" href="../profil/profil.php" id="Dropdownprofile" role="button" data-bs-toggle="dropdown" aria-expanded="false">Profil</a>
			<ul class="dropdown-menu" aria-labelledby="Dropdownprofile">
            <li><a class="dropdown-item" data-toggle="tab" href="../profil/profil.php#struktur_org">Struktur Organisasi</a></li>
            <li><a class="dropdown-item" data-toggle="tab" href="../profil/profil.php#visi_misi">Visi dan Misi</a></li>
            <li><a class="dropdown-item" data-toggle="tab" href="../profil/profil.php#tujuan">Tujuan</a></li>
			<li><a class="dropdown-item" data-toggle="tab" href="../profil/profil.php#personil">Personil</a></li>
         </ul>
        </li>
		<li class="nav-item dropdown1">
          <a class="nav-link dropdown-toggle js-scroll-trigger" href="../kinerja/kinerja.php" id="dropdownkinerja"
		  role="button" data-bs-toggle="dropdown" aria-expanded="false">Kinerja</a>
		<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" data-toggle="tab" href="../kinerja/kinerja.php#std_pelayanan">Standar Pelayanan</a></li>
            <li><a class="dropdown-item" data-toggle="tab" href="../kinerja/kinerja.php#renstra">Renstra</a></li>
            <li><a class="dropdown-item" data-toggle="tab" href="../kinerja/kinerja.php#org_kepeg">Organisasi, Kepeg, Keu</a></li>
			<li><a class="dropdown-item" data-toggle="tab" href="../kinerja/kinerja.php#info_izin">Informasi dan Perizinan</a></li>
			<li><a class="dropdown-item" data-toggle="tab" href="../kinerja/kinerja.php#sop_B3">SOP B3 dan Syarat</a></li>
			<li><a class="dropdown-item" data-toggle="tab" href="../kinerja/kinerja.php#sop_Pengaduan">SOP Pengaduan</a></li>
          </ul>  
		</li>
        <li class="nav-item dropdown1">
          <a class="nav-link dropdown-toggle js-scroll-trigger" href="pelayanan.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Pelayanan
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" data-toggle="tab" href="pelayanan.php#perizinan">Perizinan</a></li>
            <li><a class="dropdown-item" data-toggle="tab" href="pelayanan.php#aduan">Aduan</a></li>
            <li><a class="dropdown-item" data-toggle="tab" href="pelayanan.php#sppl">SPPL</a></li>
			<li><a class="dropdown-item" data-toggle="tab" href="pelayanan.php#ukl_upll">UKL-UPLL</a></li>
			<li><a class="dropdown-item" data-toggle="tab" href="pelayanan.php#pe_sampah">Pengelolaan Sampah</a></li>
			<li><a class="dropdown-item" data-toggle="tab" href="pelayanan.php#amdal">AMDAL</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" data-toggle="tab" href="../index.php#galeri">Galeri</a>
        </li>
		<li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="../index.php#kontak">Kontak</a>
        </li>
      </ul>
	<form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
	</div>
  </div>
</header>
</section>
	
<!--Ini Body beranda...................-->
<section id="second">

<!--Aduan-->
<br><br><br>
<h4 class="container border-start border-success border-4" id="perizinan">Form Perizinan Dinas Lingkungan Hidup Boyolali</h4>
<?php
$home = query("select * from pelayanan_perizinan");
?>
<span class="container border border-2">
<div class="container" align="left">
<?php foreach ($home as $row): ?>
		<div class="embed-responsive">
		<iframe src="../file/<?= $row["perizinan"]?>" width="900" height="600" title="pelayanan_perizinan" frameborder="0"></iframe>
		</div>
<?php endforeach;?>
</div>
</span>

<!--SPPL-->
<br><br><br>
<h4 class="container border-start border-success border-4" id="sppl">SPPL Dinas Lingkungan Hidup Boyolali</h4>
<?php
$home = query("select * from pelayanan_sppl");
?>
<span class="container border border-2">
<div class="container" align="left">
<?php foreach ($home as $row): ?>
		<div class="embed-responsive">
		<iframe src="../file/<?= $row["sppl"]?>" width="900" height="600" title="pelayanan_sppl" frameborder="0"></iframe>
		</div>
<?php endforeach;?>
</div>
</span>

<!--UKL-UPLL-->
<br><br><br>
<h4 class="container border-start border-success border-4" id="ukl_upll">UKL-UPLL Dinas Lingkungan Hidup Boyolali</h4>
<?php
$home = query("select * from pelayanan_ukl_upll");
?>
<span class="container border border-2">
<div class="container" align="left">
<?php foreach ($home as $row): ?>
		<div class="embed-responsive">
		<iframe src="../file/<?= $row["ukl_upll"]?>" width="900" height="600" title="pelayanan_ukl-upll" frameborder="0"></iframe>
		</div>
<?php endforeach;?>
</div>
</span>

<!--Pengelolaan Sampah-->
<br><br><br>
<h4 class="container border-start border-success border-4" id="pe_sampah">Pengelolaan Sampah Dinas Lingkungan Hidup Boyolali</h4>
<?php
$home = query("select * from pelayanan_pe_sampah");
?>
<span class="container border border-2">
<div class="container" align="left">
<?php foreach ($home as $row): ?>
		<div class="embed-responsive">
		<iframe src="../file/<?= $row["pe_sampah"]?>" width="900" height="600" title="pelayanan_pe_sampah" frameborder="0"></iframe>
		</div>
<?php endforeach;?>
</div>
</span>

<!--AMDAL-->
<br><br><br>
<h4 class="container border-start border-success border-4" id="amdal">AMDAL Dinas Lingkungan Hidup Boyolali</h4>
<?php
$home = query("select * from pelayanan_amdal");
?>
<span class="container border border-2">
<div class="container" align="left">
<?php foreach ($home as $row): ?>
		<div class="embed-responsive">
		<iframe src="../file/<?= $row["amdal"]?>" width="900" height="600" title="pelayanan_amdal" frameborder="0"></iframe>
		</div>
<?php endforeach;?>
</div>
</span>

<!--batas bawah konten beranda>	
<!--Ini Kontak-->
<br><br><br><div id="kontak" class="card-footer bg-light">
<br>
	<div class="container">
	<div class="row">
		<div class="col border-start border-success border-1">
			<h5>KONTAK</h5>
			<hr>
			<p><a href="http://boyolali.go.id/" class="navbar-brand"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/29/Kabupaten_Boyolali.png/413px-Kabupaten_Boyolali.png" width="65" height="70" alt class="img-fluid"></a></p>
			<p>Tegalarum, Kemiri, Kec. Mojosongo, Kabupaten Boyolali, Jawa Tengah 57482</p>
			<p>Email : dlh@boyolali.go.id</p>
			<p>No. HP : +62276321013</p>
		</div>
		<div class="col border-start border-success border-1">
			<h5>OFFICIAL ACCOUNT</h5>
			<h6>Dinas Lingkungan Hidup Boyolali</h6>
			<hr>
			<a>
			<table>
			<tr>
				<td><a href='https://www.instagram.com/dlh_boyolali/'><img src='../img/ig.png' class="rounded-circle" width='40' height='40'></a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
				<td><a href='https://www.facebook.com/dlh.kabboyolali.7'><img src='../img/fb.png' class="rounded-circle" width='40' height='40'></a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
				<td><a href='https://twitter.com/DLH_Boyolali'><img src='../img/twt.png' class="rounded-circle" width='40' height='40'></a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
				<td><a href='https://www.youtube.com/channel/UCy4xOsOn6CJJ8_iXQzDgfnw'><img src='../img/yt.png' class="rounded-circle" width='40' height='40'></a></td>
			</tr>
			</table>
			</a>
		</div>
		<div class="col border-start border-success border-1">
			<h5>LOKASI DINAS LINGKUNGAN HIDUP BOYOLALI</h5>
			<hr>
			<div class="embed-responsive embed-responsive-16by9">
				<iframe width="350" height="250" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.2403398103343!2d110.60407801415164!3d-7.548749876620856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a695abcd853df%3A0xc85292f16e3b9a5e!2sDinas%20Lingkungan%20Hidup%20Kabupaten%20Boyolali!5e0!3m2!1sid!2sid!4v1617775153983!5m2!1sid!2sid" width="400" height="250" style="border:thick;" allowfullscreen="" loading="lazy"></iframe>
			</div>
		</div>
	</div>
	</div>
</div>

<!--Ini Footer..................-->
<br><footer id="page-bottom">
<div id="footer" class="card-footer bg-dark">
	<a style="color:whitesmoke;">&copy; Dinas Lingkungan Hidup Kabupaten Boyolali 2021</a>	  
</div>
</footer>
</section>
</body>
</html>