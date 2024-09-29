<!DOCTYPE html>
<?php
$activ = 'berobat';

$kode = $_GET['kode'];
include_once("../koneksi.php");
$sql = "SELECT * FROM berobat WHERE No_Transaksi='$kode'";
$qry = mysqli_query($con,$sql);

$data = mysqli_fetch_array($qry);

$tgl_berobat = date_create($data['Tanggal_Berobat']);
$tgl = date_format($tgl_berobat,"d");
$bln = date_format($tgl_berobat,"m");
$thn = date_format($tgl_berobat,"Y");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/all.min.css">
    <title>List Berobat</title>
    
</head>
<body style="background-color:#e3f2fd;">  
<div class="row">
        <div class="card m-auto text-center">
            <div class="card-body">
                <h3 class="card-title">APLIKASI PENGELOLAAN KLINIK (MAULIAN SAPUTRA)</h3>
            </div>
        </div>
        </div>  
<div class="container-fluid">
    <div class="row flex-nowrap">
        <?php include_once("../menu.php") ?>
        <div class="col py-3">
            <h4>Form Edit Data Berobat</h4>            
        <div class="card m-auto">
        <div class="card-body">
            
            <form method="post" action="update.php" auto_complete="off">
                <div class="mb-3">
                    <label class="form-label">No Transaksi</label>
                    <input type="text" readonly value="<?=$data['No_Transaksi']?>" name="no"  class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Nama Pasien</label>
                    <select autofocus name="pas" class="form-control" id="">
                        <option value="">-Pilih Pasien-</option>
                    <?php
                    include_once("../koneksi.php");
                    $sql = "SELECT * FROM pasien";
                    $qry = mysqli_query($con,$sql);
                    foreach($qry as $list){
                    ?>
                        <option <?=$data['PasienKlinik_ID']==$list['PasienKlinik_ID'] ? 'selected' : ''?> value="<?=$list['PasienKlinik_ID']?>"><?=$list['PasienKlinik_ID']?> - <?=$list['Nama_PasienKlinik']?></option>
                    <?php
                    }
                    ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Tanggal Berobat</label>
                    <div class="row">
                    <div class="col-md-4">
                    <select name="tgl" id="" class="form-control col-md-3">
                        <option value="">-Pilih Tanggal-</option>
                        <?php
                        for($i=1;$i<=31;$i++){
                            ?>
                            <option <?=$tgl==$i ? 'selected' : ''?>><?=$i?></option>
                            <?php
                        }
                        ?>
                    </select>
                    </div>

                    <div class="col-md-4">
                    <select name="bln" id="" class="form-control col-md-3">
                    <option value="">-Pilih Bulan-</option>
                        <?php
                        $bulan = array("", "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
                        for($a=1;$a<=12;$a++){
                            
                            ?>
                        <option <?=$bln==$a ? 'selected' : ''?> value="<?=$a?>"><?=$bulan[$a]?></option>
                        <?php
                        }
                        ?>
                    </select>
                    </div>

                    <div class="col-md-4">
                    <input type="text" value="<?=$thn?>" name="thn" class="form-control" >
                    </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Nama Dokter</label>
                    <select name="dok" class="form-control" id="">
                        <option value="">-Pilih Dokter-</option>
                    <?php
                    $sql_d = "SELECT * FROM dokter";
                    $qry_d = mysqli_query($con,$sql_d);
                    foreach($qry_d as $list_d){
                    ?>
                        <option <?=$data['Dokter_ID']==$list_d['Dokter_ID'] ? 'selected' : ''?> value="<?=$list_d['Dokter_ID']?>"><?=$list_d['Nama_Dokter']?></option>
                    <?php
                    }
                    ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Keluhan</label>
                    <input type="text" value="<?=$data['Keluhan_Pasien']?>" name="keluhan" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Harga</label>
                    <input type="number" value="<?=$data['Biaya_Adm']?>" name="harga" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-secondary">Clear</button>
            </form>
            </div>
        </div>
        </div>
    </div>
</div>

<script src="../js/bootstrap.min.js"></script>
<script src="../js/bootstrap.bundle.min.js"></script>
<script src="../js/all.min.js"></script>
</body>
</html>