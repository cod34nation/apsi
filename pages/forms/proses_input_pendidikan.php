<?php
include "../koneksi.php";

$nip=$_POST['nip'];
$nama=$_POST['nama'];
$tgl=$_POST['tanggal'];
$alamat=$_POST['alamat'];
$jurusan=$_POST['jurusan'];
$jenjang=$_POST['jenjang'];


mysqli_query($koneksi,"INSERT INTO riwayat_pendidikan_terakhir
            (nip,tingkat_pendidikan,
           nama_pendidikan,jurusan_pendidikan,
           ijazah,tgl_ijazah,tempat_pendidikan) values(
           '$nip','$jenjang',
           '$nama','$jurusan',
           '$gambar','$tgl','$alamat') ") or die(mysqli_error()); 

$namafolder="gambar/"; //folder tempat menyimpan file
if (!empty($_FILES["foto"]["tmp_name"]))
{
    $jenis_gambar=$_FILES['foto']['type'];
    if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/png")
    {           
        $gambar = $namafolder . basename($_FILES['foto']['name']);       
        if (move_uploaded_file($_FILES['foto']['tmp_name'], $gambar)) {

           
		   ?>
				<script language="javascript">
                    alert('Data Tersimpan');
                    document.location="../../index.php";
                </script>
   			<?php
        } else {
         	?>
				<script language="javascript">
                    alert('Gagal menambahkan');
                    document.location="proses_input_pendidikan.php";
                </script>
   			<?php
        }
   } else {
        ?>
			<script language="javascript">
                alert('Gambar harus berformat .jpg .png .gif');
                document.location="proses_input_pendidikan.php";
            </script>
   		<?php
   }
} else {
    echo "Anda belum memilih gambar";
}





?>