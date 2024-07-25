<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

  <!-- bagian judul dan navigasi -->
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  	<div class="container-fluid">
	    <a class="navbar-brand" href="javascript:void(0)">Pendaftaran Beasiswa</a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
	      	<span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="mynavbar">
	      	<ul class="navbar-nav me-auto">
		        <li class="nav-item">
		          <a class="nav-link" href="daftar.php">Daftar</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="hasil.php">Hasil</a>
		        </li>
	      	</ul>
	      	<form class="d-flex">
	        	<input class="form-control me-2" type="text" placeholder="Search">
	        	<button class="btn btn-primary" type="button">Search</button>
	      	</form>
	    </div>
  	</div>
  </nav>

  <div class="container">
	<div class="row">
		<h2>Data Mahasiswa</h2>
	</div>

	<?php 
      include('koneksi.php');
			$nim = $_GET['nim'];
		     $query = mysqli_query($connection,"SELECT * FROM mahasiswa where nim = '$nim'");
          	$row = mysqli_fetch_array($query);
  	?>
	
   
  
	<div class="row">
		<form action="hasil-aksi.php" method="post" name="formHotel" enctype="multipart/form-data">
    <div class="mb-3 mt-3">
    <div class="mb-3 mt-3">
			    <label for="email" class="form-label">NIM:</label>
			    <input type="number" class="form-control" id="nim" placeholder="" name="nim" value="<?php echo $row['nim'] ?>" readonly>
			  </div>

			    <label for="email" class="form-label">Nama Mahasiswa:</label>
			    <input type="text" class="form-control" id="nama" placeholder="" name="nama" value="<?php echo $row['nama'] ?>" >
			  </div>
		  	<div class="mb-3 mt-3">
			    <label for="email" class="form-label">Email:</label>
			    <input type="email" class="form-control" id="email" placeholder="Email Valid" name="email" value="<?php echo $row['email'] ?>" onchange=ValidationEmail()>
			  </div>

        <div class="mb-3 mt-3">
			    <label for="email" class="form-label">Nomor HP:</label>
			    <input type="number" class="form-control" id="nomor" placeholder="Nomor HP Mahasiswa" value="<?php echo $row['nomor'] ?>" name="nomor">
			  </div>

        <div class="mb-3 mt-3">
			  	<label for="email" class="form-label">Semester Saat Ini:</label>
			    <select class="form-select" name="semester" id="semester" onchange="hargaKamar()">
					  <option value="">-- Semester Saat Ini --</option>
					  <option value="1">1</option>
					  <option value="2">2</option>
					  <option value="3">3</option>
					  <option value="4">4</option>
					  <option value="5">5</option>
					  <option value="6">6</option>
					  <option value="7">7</option>
					  <option value="8">8</option>
					</select>
			  </div>

				
        <div class="mb-3 mt-3">
			    <label for="email" class="form-label">IPK Terakhir:</label>
			    <input type="number" class="form-control" id="ipk" placeholder="" name="ipk" value="<?php echo $row['ipk'] ?>" readonly>
			  </div>
				<?php
				if($row['ipk'] >= 3 ){
				?>
        <div class="mb-3 mt-3">
			  	<label for="email" class="form-label">Pilihan Beasiswa:</label>
			    <select class="form-select" name="pilihan" id="pilihan" onchange="hargaKamar()">
					  <option value="">-- Pilihan Beasiswa --</option>
					  <option value="Djarum">Beasiswa Djarum</option>
					  <option value="Kemendikbud">Beasiswa Kemendikbud</option>
					</select>
			  </div>
			  
			  <div class="mb-3 mt-3">
			    <label for="email" class="form-label">Upload Berkas Syarat:</label>
			    <input type="file" class="form-control" id="berkas" placeholder="Nama Pemesan" name="berkas">
			  </div>
			
			  <input type="submit" class="btn btn-primary" name="submit" value="Submit">
				<?php
				}else{
					echo "<p>maaf ipk anda belum memenuhi syarat untuk menerima beasiswa</p>";
				}  
				?>
				  <input type="reset" class="btn btn-secondary" name="reset" value="Reset">
			
		</form>
	</div>
</div>

<script type="text/javascript">

function ValidationEmail(){
            var email = document.getElementById('email').value
            if(email.includes('@') == false){
                alert("anda belum benar memasukkan email");
                  document.getElementById('email').value = ''
            }
        }
</script>

</body>
</html>

