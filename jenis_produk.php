<?php
$models = new Jenis_produk();

$jenis_produk = $models->dataJenisproduk();
?>

<div class="content-wrapper">
<div class="content">
    <div class="row">
        <div class="col-12">
            <table class="table table-striped table-responsive">
                <thead>
                <tr class="table-active">
                        <th>No</th>
                        <th>Nama Produk</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $no = 1;
                foreach ($jenis_produk as $row){

                ?>    
                <tr class="table-danger">
                    <td><?= $no ?></td>
                    <td><?= $row['nama_jenis']?></td>

                    <td>
                        <form action="jenis_controlLer.php" method="POST">
                            <button type="submit" class="btn btn-danger btn-sn" name="proses" value="hapus"
                                onclick="return confirm('Apakah anda yakin ingin menghapus data pelanggan <?= $row['nama_jenis']?>?')"
                                title="Hapus jenis Produk">
                                <i class="bi bi-trash"></i>
                            </button>
                            <input type="hidden" name="idx" value="<?= $row['id']?>">
                        </form>
                    </td>
                </tr>
                <?php
                $no++;
                }
                ?>
                 </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

 
                