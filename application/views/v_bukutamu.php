<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<link href="<?php echo base_url("assets/style.css"); ?>" rel="stylesheet">
	
</head>
<body>

	<div class=btn-nav>
		<button class="btn1"><a href="<?php echo base_url(). "bukutamu/tampil_data" ; ?>">DATA TAMU</a></button>
</div>
<div class="header">
	<a class="header-text">Selamat Datang, </br>Silahkan Isi Data Diri Anda</a>
</div> 
<div class="form-box size ">
<form action="<?php echo base_url(). "bukutamu/tambah_aksi" ; ?>" method="post">
<div class="form1">
	<div class="user-box">
		<input type="text" id="nama_tamu" name="nama_tamu" required minlength="3" maxlength="40"></br>
		<label for="name">Nama Lengkap</label>
	</div>

	<div class="user-box">
		<input type="email" id="email" name="email" required></br>
		<label for="email">Email</label>
	</div>

	<div class="user-box">
		<input type="number" id="ktp" name="ktp" pattern=".{15,16}" required></br>	
		<label for="ktp">Nomor KTP</label>
	</div>

	<div class="user-box">
		<input type="text" id="alamat" name="alamat" placeholder="	    	Sesuai KTP" required></br>
		<label for="alamat">Alamat</label>
	</div>
	
	<div class="box">

		<div class="user-box">
			<input type="number" id="umur" name="umur" min="1" max="100"></br>
		<label for="umur">Umur</label>
		</div>

		<div class="gender-box">
			<label for="gender" class="jk">Jenis Kelamin</label>
		<label class="rad-label">
    		<input type="radio" class="rad-input" value="laki-laki" name="gender" id="rad" required>
			<div class="rad-design"></div>
			<div class="rad-text">Laki-Laki</div>
			</label>

		<label class="rad-label">
			<input type="radio" class="rad-input" value="perempuan" name="gender" id="rad" required>
			<div class="rad-design"></div>
			<div class="rad-text">Perempuan</div>
		</label>

		</div>
	</div>
<div class="user-box">
		<input type="text" id="tk" name="tk"></br>
		<label for="tk">Tujuan Kunjungan</label>
	</div>

	<div class="foto-box">
	<label for="foto">foto</label></br>
		<input type="file" id="foto" name="foto">
	</div>
		<div class ="controls">
			<button class="btn1" type="reset">RESET</button>
			<button class="btn2" type="submit">SUBMIT</button>
	</div>
</div>
</form>
</div>

</body>
</html>
