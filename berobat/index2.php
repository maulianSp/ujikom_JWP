<!DOCTYPE html>
<?php
$activ = 'berobat';
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
        <div class="card m-auto">
            <div class="card-body">
            <a title="Tambah Data Baru" href="form.php" class="btn btn-primary mb-2"><i class="fa fa-file-export"></i> Print</a>
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr class="table-primary text-center">
                                <th  scope="col">No Transaksi</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Nama Pasien</th>
                                <th scope="col">Usia</th>
                                <th scope="col">Jenis Kelamin</th>
                                <th scope="col">Keluhan</th>
                                <th scope="col">Nama Poli</th>
                                <th scope="col">Dokter</th>
                                <th scope="col">Biaya Administrasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include_once("../koneksi.php");
                            $sql = "SELECT * FROM berobat INNER JOIN pasien ON berobat.PasienKlinik_ID=pasien.PasienKlinik_ID 
                            INNER JOIN dokter ON berobat.Dokter_ID=dokter.Dokter_ID INNER JOIN poli ON dokter.Poli_ID=poli.Poli_ID";
                            $qry = mysqli_query($con,$sql);
                            $no = 1;
                            foreach($qry as $list){
                            ?>
                            <tr>
                                <td><?=$list['No_Transaksi']?></td>
                                <td><?=$list['Tanggal_Berobat']?></td>
                                <td><?=$list['Nama_PasienKlinik']?></td>
                                <td><?php
                                $lhr_pasien = date_create($list['Tanggal_LahirPasien']);
                                $lhr_pasien = date_format($lhr_pasien,"Y");
                                echo date("Y")-$lhr_pasien;
                                ?></td>
                                <td><?=$list['Jenis_KelaminPasien']?></td>
                                <td><?=$list['Keluhan_Pasien']?></td>
                                <td><?=$list['Nama_Poli']?></td>
                                <td><?=$list['Nama_Dokter']?></td>
                                <td>Rp <?=number_format($list['Biaya_Adm'])?></td>
                                
                            </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
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