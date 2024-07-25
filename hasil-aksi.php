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
$verifikasi = 'false';

$nama_foto = $_FILES['berkas']['name'];
$explode_foto = explode('.',$nama_foto);
$ekstensi_foto = $explode_foto[1];
$tmp_foto = $_FILES['berkas']['tmp_name'];
$ekstensi = array('pdf','jpg','zip');
$directory_foto = 'asset/';

if(in_array($ekstensi_foto, $ekstensi)){
	move_uploaded_file($tmp_foto,$directory_foto.$nama_foto);
}

//query insert data ke dalam database
$query = "UPDATE mahasiswa SET nim='$nim', nama='$nama', email='$email', nomor='$nomor', semester='$semester', ipk='$ipk', pilihan='$pilihan', berkas='$nama_foto', verifikasi='$verifikasi' WHERE nim = '$nim'";
//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php '$
    header("location:hasil.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}
}

?>