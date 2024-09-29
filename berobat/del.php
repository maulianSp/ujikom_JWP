<?php
include_once("../koneksi.php");

$kode = $_GET['kode'];

$sql = "DELETE FROM berobat WHERE No_Transaksi='$kode'";
$qry = mysqli_query($con,$sql);

if($qry){
    header("location:index.php?p=true&hapus=iya");
}else{
    header("location:index.php?p=true&hapus=tidak");
}

?>