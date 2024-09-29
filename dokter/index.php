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
                <a title="Tambah Data Baru" href="#" class="btn btn-primary mb-2"><i class="fa fa-plus"></i> Add New</a>
                
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr class="table-primary text-center">
                                <th  scope="col">Nomor</th>
                                <th scope="col">Nama Dokter</th>
                                <th scope="col">Nama Poli</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include_once("../koneksi.php");
                            $sql = "SELECT * FROM dokter INNER JOIN poli ON dokter.Poli_ID=poli.Poli_ID";
                            $qry = mysqli_query($con,$sql);
                            $no = 1;
                            foreach($qry as $list){
                            ?>
                            <tr>
                                <td><?=$no++?></td>
                                <td><?=$list['Nama_Dokter']?></td>
                                <td><?=$list['Nama_Poli']?></td>
                                
                                <td class="text-center">
                                    <a title="Edit Data <?=$list['Poli_ID']?>" class="btn btn-sm btn-info" href="#"><i class="fa fa-pencil"></i></a>
                                    <button title="Hapus Data <?=$list['Poli_ID']?>" type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal<?=$list['Poli_ID']?>">
                                    <i class="fa fa-trash"></i>
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal<?=$list['Poli_ID']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Peringatan</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Yakin ingin menghapus data Poli <b><?=$list['Poli_ID']?></b>?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                            <a href="#" class="btn btn-danger">hapus</a>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </td>
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