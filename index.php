<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
	?>
 
	<div class="kotak_login">
		<p class="tulisan_login">Silahkan login</p>
 
		<form action="cek_login.php" method="post">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username" required="required">
 
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password" required="required">
 
			<input type="submit" class="tombol_login" value="LOGIN">
  <tr>
                            <td height="30"><a href="registrasi.php" class ="txt"><b>Daftar E-Learning</b></a><br>
                                            </td>
                        </tr>
                       
			<br/>
			<br/>
			<center>
				<a class="link" href="home.php">kembali</a>
			</center>
		</form>
		
	</div>
 
 
</body>
</html>