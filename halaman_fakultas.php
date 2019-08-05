<!DOCTYPE html>
<html>
<head>
<title>Halaman Fakultas</title>
<style>
* {box-sizing:border-box
padding:0;
margin: 0;}
	ul {
	    list-style-type: none;
	    margin: 0px;
	    padding: 0px;
	    overflow: hidden;
	    background-color: #333;
	}

	li a.logout{
	    float: right;
	}

	li a {
	    display: block;
	    color: white;
	    text-align: center;
	    padding: 14px 16px;
	    text-decoration: none;
	}

	li a:hover {
	    background-color: #ffff;
	    color: black;
	}

	body{
		background-color: #d6d6c2;
	}

	#gambar{
		margin : 45px;
	}

	.logout {
    background-color: #4CAF50;
    padding: 35px;
    font-size: 20px;
	}

	#logo img{
	  float: left;
	  padding: 10px;
	}

	#gambar :hover {
	    background-color: black;
	    color: black;
	}

</style>
</head>
<body>
	<?php 
	session_start();

	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}

	?>
	<ul>
	  <li><a class="logout" href="logout.php">Logout</a></li>
	  <li><a id="logo"><img src="logo.png"></a></li>
	</ul>

	<h1>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</h1>

	<center>
	<form id="gambar">
		<img src="kursus.png" id="kursus" title="kursus" style="margin-right: 45px;" >
		<img src="materi.png" id="materi" title="materi" style="margin-right: 45px;">
		<img src="tanya.png" id="tanya-jawab" title="tanya-jawab" style="margin-right: 45px;">
		<img src="feedback.png" id="feedback" title="feedback" style="margin-right: 45px;">
		<img src="setting.png" id="setting" title="setting" style="margin-right: 45px;">
	</form>
	</center>

	

</body>
</html>


