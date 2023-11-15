<!doctype html>
<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED);
mysqli_connect('localhost','root','','dlh_boyolali');

$username = $_POST['username'];
$password = $_POST['password'];
$submit = $_POST['submit'];

if($submit){
	$sql = "select * from user where username='$username' and password='$password'";
	$query = mysqli_query($sql);
	$row = mysqli_fetch_array($query);
	if($row['username']!=""){
	
	//berhasil login
	$_SESSION['username']=$row['username'];
	$_SESSION['status']=$row['status'];
	?>
	<script language script="JavaScript">
	alert('Anda Login Sebagai <?php echo $row['username']; ?>');
	document.location='hasillogin.php';
	</script>
	<?php
	}
	else{
	
	//gagal login
	?>
	<script language script="JavaScript">
	alert('Gagal login');
	document.location='login.php';
	</script>
	<?php
	}
}
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.83.1">
    <title>Sign-in admin</title>
	<link rel="icon" href="../img/logo.png" width="5" height="12">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">

    <!-- Bootstrap core CSS -->
<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<main class="form-signin">
  <form method="post" action="login.php">
    <img class="mb-4" src="../img/logo.png" alt="" width="50" height="65">
    <h1 class="h3 mb-3 fw-normal">Sign-in admin</h1>
	<br>
    <div class="form-floating">
      <input type="text" name="username" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Username</label>
    </div>
    <div class="form-floating">
      <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div><br>
    <button class="w-100 btn btn-lg btn-primary" type="submit" name="submit">Sign in</button>
    <p class="mt-5 mb-3 text-muted">&copy; Dinas Lingkungan Hidup Kabupaten Boyolali 2021</p>
  </form>
</main>
</body>
</html>
