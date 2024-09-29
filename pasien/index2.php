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
    <title>List Dokter</title>
    
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
                                <th  scope="col">Nomor</th>
                                <th scope="col">Pasien ID</th>
                                <th scope="col">Nama Pasien</th>
                                <th scope="col">Tanggal Lahir</th>
                                <th scope="col">Jenis Kelamin</th>
                                <th scope="col">Alamat</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include_once("../koneksi.php");
                            $sql = "SELECT * FROM pasien";
                            $qry = mysqli_query($con,$sql);
                            $no = 1;
                            foreach($qry as $list){
                            ?>
                            <tr>
                                <td><?=$no++?></td>
                                <td><?=$list['PasienKlinik_ID']?></td>
                                <td><?=$list['Nama_PasienKlinik']?></td>
                                <td><?=$list['Tanggal_LahirPasien']?></td>
                                <td><?=$list['Jenis_KelaminPasien']?></td>
                                <td><?=$list['Alamat_Pasien']?></td>
                                
                                
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