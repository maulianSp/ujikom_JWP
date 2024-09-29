<?php
include_once("../koneksi.php");

$no = $_POST['no'];
$pas = $_POST['pas'];
$tgl = $_POST['tgl'];
$bln = $_POST['bln'];
$thn = $_POST['thn'];
$date = "$thn-$bln-$tgl";
$dok = $_POST['dok'];
$keluhan = $_POST['keluhan'];
$harga = $_POST['harga'];

$sql = "UPDATE berobat SET PasienKlinik_ID='$pas',Tanggal_Berobat='$date',Dokter_ID='$dok',Keluhan_Pasien='$keluhan',Biaya_Adm='$harga'
WHERE No_Transaksi='$no'";
$qry = mysqli_query($con,$sql);

if($qry){
    header("location:index.php?p=true&tambah=iya");
}else{
    header("location:index.php?p=true&tambah=tidak");
}

?>