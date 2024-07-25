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
		          <a class="nav-link" href="index.php">Beranda</a>
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
  <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Semester</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
	<?php 
      include('koneksi.php');
				$no = 1;
		     $query = mysqli_query($connection,"SELECT * FROM mahasiswa");
          	while($row = mysqli_fetch_array($query)){
              
  	?>
	

    <tr>
      <th scope="row"><?php echo $no++; ?></th>
      <td><?php echo $row['nama'] ?></td>
      <td><?php echo $row['semester'] ?></td>
      <td><a href="daftar-aksi.php?nim=<?php echo $row['nim'] ?>" class="btn btn-sm btn-primary">DAFTAR</a></td>
    </tr>
   <?php
            } 
    ?>
  </tbody>
</table>
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

<?php
include('koneksi.php');
if(isset($_POST['submit'])){
//get data dari form
$nim          = $_POST['nim'];
$nama          = $_POST['nama'];
$email          = $_POST['email'];
$nomor          = $_POST['nomor'];
$semester          = $_POST['semester'];
$ipk               = $_POST['ipk'];
$pilihan          = $_POST['pilihan'];

//query insert data ke dalam database
$query = "INSERT INTO mahasiswa (nim, nama, email, nomor, semester, ipk, pilihan, berkas) VALUES ()";
"UPDATE mahasiswan SET nim='$nim', nama='$nama', email='$email', nomor='$nomor', semester'$semester', ipk='$ipk', pilihan'$pilihan', '' WHERE id = '$id'";
//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php '$

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}
}

?>