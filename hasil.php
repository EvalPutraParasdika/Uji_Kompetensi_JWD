
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/bootstrap.min.css">
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
		          <a class="nav-link" href="javascript:void(0)">Hasil</a>
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
		<h2>Pendaftar Beasiswa</h2>
	</div>

<div class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nim</th>
      <th scope="col">Nama</th>
      <th scope="col">Email</th>
      <th scope="col">Nomor</th>
      <th scope="col">Semester</th>
      <th scope="col">ipk</th>
      <th scope="col">pilihan</th>
      <th scope="col">berkas</th>
      <th scope="col">Status</th>
    </tr>
  </thead>

  <tbody>

	<?php 
      include('koneksi.php');
				$no = 1;
		     $query = mysqli_query($connection,"SELECT * FROM mahasiswa where ipk >= 3 ");
          	while($row = mysqli_fetch_array($query)){
  	?>
    <tr>
      <th scope="row"><?php echo $no++ ?></th>
      <td><?php echo $row['nim'] ?></td>
      <td><?php echo $row['nama'] ?></td>
      <td><?php echo $row['email'] ?></td>
      <td><?php echo $row['nomor'] ?></td>
      <td><?php echo $row['semester'] ?></td>
      <td><?php echo $row['ipk'] ?></td>
      <td><?php echo $row['pilihan'] ?></td>
      <td>
        <img src="asset/<?php echo $row['berkas'] ?>" alt="" width="10px" height="10px"></td>
        <td>
          <button name="button" id="button" onclick=Klik()>belum terverifikasi</button>
          <script>
            function Klik(){
              document.getElementById('button').innerHTML = "terverifikasi"
            }
          </script>
        </form>
        </td>
    </tr>
    <?php
            }
            if(isset($_POST['button'])){
              $row['verifikasi'] = 'true';
            }
      ?>

  </tbody>
</table>
</div>


	<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>