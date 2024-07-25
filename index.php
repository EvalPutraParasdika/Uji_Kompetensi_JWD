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
		<h2>Pilihan Besasiswa</h2>
	</div>

	<div class="container py-4">
    
    <div class="p-5 mb-4 bg-body-tertiary rounded-3">
      <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Beasiswa Djarum</h1>
        <p class="col-md-8 fs-4">Program Djarum Beasiswa Plus merupakan beasiswa prestasi yang memberikan kesempatan bagi mahasiswa dari berbagai jurusan yang tengah menempuh program studi Strata 1/ Diploma 4 di perguruan tinggi negeri maupun swasta yang memiliki kerja sama (bermitra) dengan Djarum Foundation.	</p>
				<a href="daftar.php" class="btn btn-primary btn-lg">Daftar</a>
      </div>
    </div>

		<div class="container py-4">
    <div class="p-5 mb-4 bg-body-tertiary rounded-3">
      <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Beasiswa Kemendikbud</h1>
        <p class="col-md-8 fs-4">Beasiswa Pendidikan Indonesia Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi (BPI Kemendikbudristek) adalah program beasiswa Pemerintah Indonesia yang bertujuan untuk meningkatkan dan membangun Sumber Daya Manusia Indonesia.</p>
        <a href="daftar.php" class="btn btn-primary btn-lg">Daftar</a>
      </div>
    </div>


	<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>