<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register | UMKM</title>


	 <!-- Bootstrap CSS -->
            <link href="assets/css/bootstrap.css" rel="stylesheet">
            <link href="assets/css/animate.css" rel="stylesheet">
            <link href="assets/css/font-awesome.css" rel="stylesheet">
            <link href="assets/css/bootstrap-datepicker.css" rel="stylesheet">
	
	<style>
		.content {
			margin-top: 80px;
		}
	</style>
	
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
</html>
<?php
include "../koneksi.php";

$nip=$_POST['nip'];
 $nama=$_POST['nama'];
 $tempat_lahir=$_POST['tempat_lahir'];
 $tanggal=$_POST['tanggal'];
 $alamat=$_POST['alamat'];
 $kelurahan=$_POST['kelurahan'];
 $kecamatan=$_POST['kecamatan'];
 $kabupaten=$_POST['kab'];
 $agama=$_POST['agama'];
 $status=$_POST['status'];
  $telp=$_POST['telp'];
 $sex=$_POST['sex'];

$query="INSERT INTO dat_diri_peg
(nip,nama,tempat_lhr,
tgl_lahir,alamat,
jenis_kelamin,kelurahan,
kecamatan,kab_kot,
agama,status,no_telp) VALUES ('$nip','$nama',
'$tempat_lahir','$tanggal',
'$alamat','$sex','$kelurahan',
'$kecamatan','$kabupaten',
'$agama','$status',
'$telp') ";

if($koneksi->query($query)===true)
{
   echo "<div class=alert alert-success> Input data berhasil, silahkan kembali ke <a href= ../../index.php> Home</a></div>";
}
else{
   echo "gagal";
}






?>