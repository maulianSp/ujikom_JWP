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

$sql = "INSERT INTO berobat (No_Transaksi,PasienKlinik_ID,Tanggal_Berobat,Dokter_ID,Keluhan_Pasien,Biaya_Adm) VALUES 
('$no','$pas','$date','$dok','$keluhan','$harga')";
$qry = mysqli_query($con,$sql);

if($qry){
    header("location:index.php?p=true&tambah=iya");
}else{
    header("location:index.php?p=true&tambah=tidak");
}

?>