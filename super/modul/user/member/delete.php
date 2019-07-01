<?php 
ob_start();

$id = $_GET['id'];

$result = mysqli_query($link,"delete from super_user  where id_super = '$id'");

if ($result){
	echo "<script>alert('sukses hapus');window.location.assign(\"page.php?page=dataMember\")</script>";
    // echo 'sukses';
}
else {
	echo "<script>alert('gagal hapus');window.location.assign(\"page.php?page=dataMember\")</script>";
    // echo 'gagal';
}
?>
<?php 
$deleteMember = ob_get_clean();
?>
