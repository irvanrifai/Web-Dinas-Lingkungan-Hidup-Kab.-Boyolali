<!doctype html>
<?php
require "function.php";
?>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="home.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <title>Dinas Lingkungan Hidup Kabupaten Boyolali</title>
	<link rel="icon" href="img/logo.png" width="5" height="12">
	  
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
<header class="fixed-top">
<section id="first1">
<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container border-start border-success border-5">
	  <div class="container-fluid">
    	<a class="navbar-brand" href="#page-top"><img src="img/logo.png" width="50" height="65" alt class="img-fluid"></a>
	  	<a style="font-size:27px; color:whitesmoke; font-family:Lucida Grande;">DINAS LINGKUNGAN HIDUP KABUPATEN BOYOLALI</a>
	<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="nav navbar-nav me-auto my-2 my-lg-0" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active js-scroll-trigger" aria-current="page" href="indek.php">Beranda</a>
        </li>
        <li class="nav-item dropdown1">
          <a class="nav-link dropdown-toggle js-scroll-trigger" href="profil.php" id="Dropdownprofile" role="button" data-bs-toggle="dropdown" aria-expanded="false">Profil</a>
			<ul class="dropdown-menu" aria-labelledby="Dropdownprofile">
            <li><a class="dropdown-item" data-toggle="tab" href="profil/profil.php#struktur_org">Struktur Organisasi</a></li>
            <li><a class="dropdown-item" data-toggle="tab" href="profil/profil.php#visi_misi">Visi dan Misi</a></li>
            <li><a class="dropdown-item" data-toggle="tab" href="profil/profil.php#tujuan">Tujuan</a></li>
			<li><a class="dropdown-item" data-toggle="tab" href="profil/profil.php#personil">Personil</a></li>
         </ul>
        </li>
		<li class="nav-item dropdown1">
          <a class="nav-link dropdown-toggle js-scroll-trigger" href="kinerja.php" id="dropdownkinerja"
		  role="button" data-bs-toggle="dropdown" aria-expanded="false">Kinerja</a>
		<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" data-toggle="tab" href="kinerja/kinerja.php#std_pelayanan">Standar Pelayanan</a></li>
            <li><a class="dropdown-item" data-toggle="tab" href="kinerja/kinerja.php#renstra">Renstra</a></li>
            <li><a class="dropdown-item" data-toggle="tab" href="kinerja/kinerja.php#org_kepeg">Organisasi, Kepeg, Keu</a></li>
			<li><a class="dropdown-item" data-toggle="tab" href="kinerja/kinerja.php#info_izin">Informasi dan Perizinan</a></li>
			<li><a class="dropdown-item" data-toggle="tab" href="kinerja/kinerja.php#sop_B3">SOP B3 dan Syarat</a></li>
			<li><a class="dropdown-item" data-toggle="tab" href="kinerja/kinerja.php#sop_Pengaduan">SOP Pengaduan</a></li>
          </ul>  
		</li>
        <li class="nav-item dropdown1">
          <a class="nav-link dropdown-toggle js-scroll-trigger" href="pelayanan.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Pelayanan
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" data-toggle="tab" href="pelayanan/pelayanan.php#perizinan">Perizinan</a></li>
            <li><a class="dropdown-item" data-toggle="tab" href="pelayanan/pelayanan.php#aduan">Aduan</a></li>
            <li><a class="dropdown-item" data-toggle="tab" href="pelayanan/pelayanan.php#sppl">SPPL</a></li>
			<li><a class="dropdown-item" data-toggle="tab" href="pelayanan/pelayanan.php#ukl_upll">UKL-UPLL</a></li>
			<li><a class="dropdown-item" data-toggle="tab" href="pelayanan/pelayanan.php#pe_sampah">Pengelolaan Sampah</a></li>
			<li><a class="dropdown-item" data-toggle="tab" href="pelayanan/pelayanan.php#amdal">AMDAL</a></li>
          </ul>
        </li>
		<li class="nav-item dropdown1">
          <a class="nav-link dropdown-toggle js-scroll-trigger" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Link Terkait
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" data-toggle="tab" href="http://boyolali.go.id">Boyolali</a></li>
            <li><a class="dropdown-item" data-toggle="tab" href="http://simpankuali.boyolali.go.id">Simpan Kuali</a></li>
            <li><a class="dropdown-item" data-toggle="tab" href="http://sidoli.dlh.boyolali.go.id">Sidoli</a></li>
			<li><a class="dropdown-item" data-toggle="tab" href="http://sipolah.dlhk.jatengprov.go.id">Sipolah</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" data-toggle="tab" href="#galeri">Galeri</a>
        </li>
		<li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#kontak">Kontak</a>
        </li>
      </ul>
	<form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit" onkeyup="myFunction()">Search</button>
      </form>
<script>
function myFunction() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("div");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}
</script>
    </div>
	</div>
  </div>
</header>
</section>
	
<!--Ini Body beranda...................-->
<section id="second">
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
  <?php
  $home = query("select * from jumbo_tron");
  ?>
  <?php foreach ($home as $row): ?>
    <div class="carousel-item active">
      <img src="img/<?= $row["jumbo_tron"]?>" class="d-block w-100" alt="...">
		<div class="carousel-caption d-none d-md-block">
        <h5><?= $row["judul"]?></h5>
        <p><?= $row["keterangan"]?></p>
      </div>
    </div>
	<?php endforeach;?>
  </div>
</div>

<!--Ini konten berita/informasi up-to-date-->
<br><hr></hr><br>
<h3 class="container border-start border-success border-4">BERITA TERKINI</h3><br>
<?php 
$home = query("select * from berita");
?>
<div class="row row-cols-1 row-cols-md-4 g-4">
<?php foreach ($home as $row): ?>
<div class="col">
<div class="card">
  <img src="img/<?= $row["berita"]?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?= $row["judul"]?></h5>
    <p class="card-text"><?= $row["deskripsi"]?></p>
    <a href="<?= $row["link"]?>" class="btn btn-success">Selengkapnya</a>
  </div>
</div>
</div>
<?php endforeach;?>
</div>

<!--Ini Konten Informasi konsumsi lama......................-->
<br><hr></hr><br>
<h4 class="container border-start border-success border-4">BERITA LAINNYA</h4><br>
<?php 
$home = query("select * from berita_lain");
?>
<div class="row row-cols-1 row-cols-md-6 g-4">
<?php foreach ($home as $row): ?>
<div class="col">
<div class="card">
		<div class="card-body">
		<h6 class="card_title"><?= $row["judul"]?></h6>
		<iframe class="card-img-top" alt="..." width="400" height="200" src="<?= $row["link"]?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>	
		</div>
</div>
</div>
<?php endforeach;?>
</div>

<!--Ini galeri-->
<br><hr></hr><br>
<div id="galeri">
<h5 class="container border-start border-success border-4">GALERI DINAS</h5><br>
<?php 
$home = query("select * from galeri");
?>
<div class="row row-cols-1 row-cols-md-6 g-4">
<?php foreach ($home as $row): ?>
<div class="col">
<div class="card">
		<div class="card-body">
		<img src="img/<?= $row["galeri"]?>" class="card-img-top" alt="...">
		</div>
</div>
</div>
<?php endforeach;?>
</div>
</div>		
</nav>

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
				<td><a href='https://www.instagram.com/dlh_boyolali/'><img src='img/ig.png' class="rounded-circle" width='40' height='40'></a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
				<td><a href='https://www.facebook.com/dlh.kabboyolali.7'><img src='img/fb.png' class="rounded-circle" width='40' height='40'></a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
				<td><a href='https://twitter.com/DLH_Boyolali'><img src='img/twt.png' class="rounded-circle" width='40' height='40'></a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
				<td><a href='https://www.youtube.com/channel/UCy4xOsOn6CJJ8_iXQzDgfnw'><img src='img/yt.png' class="rounded-circle" width='40' height='40'></a></td>
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