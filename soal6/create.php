<?php include('config.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Test Soal 6</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
</head>
<body>
	<nav>
		<div>
            <img src="assets/img/logo.png" alt="logo">
        </div>
        <ul>
            <li class="arkademy">
                ARKADEMY BOOTCAMP
            </li>
        </ul>
		
    </nav>
	<div class="container" style="margin-top:20px">
		<h2>ADD DATA</h2>
		
		<hr>
		
		<?php
		if(isset($_POST['submit'])){
			$nama			= $_POST['nama'];
			$name       	= $_POST['name'];
			$salary	    	= $_POST['salary'];
			
			$cek = mysqli_query($koneksi, "SELECT nama,name,salary FROM name,work,salary WHERE nama='$nama',name='$name',salary='$salary'") or die(mysqli_error($koneksi));
			
			if(mysqli_num_rows($cek) == 0){
				$sql = mysqli_query($koneksi, "INSERT INTO name(nama) VALUES('$nama')" or "INSERT INTO name(work) VALUES('$name')" or "INSERT INTO salary(kategori) VALUES('$salary')") or die(mysqli_error($koneksi));
				
				if($sql){
					echo '<script>alert("Berhasil menambahkan data."); document.location="tambah.php";</script>';
				}else{
					echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
				}
			}else{
				echo '<div class="alert alert-warning">Gagal, NIM sudah terdaftar.</div>';
			}
		}
		?>
		
		<form action="create.php" method="post">
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">NAME</label>
				<div class="col-sm-10">
					<input type="text" name="nama" class="form-control" required>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">WORK</label>
				<div class="col-sm-10">
					<div class="form-check">
						<input type="radio" class="form-check-input" name="name" value="Frontend Dev" required>
						<label class="form-check-label">Frontend Dev</label>
					</div>
					<div class="form-check">
						<input type="radio" class="form-check-input" name="name" value="Backend Dev" required>
						<label class="form-check-label">Backend Dev</label>
					</div>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">SALARY</label>
				<div class="col-sm-10">
					<select name="salary" class="form-control" required>
						<option value="">PILIH SALARY</option>
						<option value="10000000">Rp. 10.000.000</option>
						<option value="12000000">Rp. 12.000.000</option>
					</select>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">&nbsp;</label>
				<div class="col-sm-10">
					<input type="submit" name="submit" class="btn btn-primary" value="SIMPAN">
				</div>
			</div>
		</form>
		
	</div>
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	
</body>
</html>