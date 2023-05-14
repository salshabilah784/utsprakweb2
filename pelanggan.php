<?php
$model = new Pelanggan();


$data_pelanggan = $model->dataPelanggan();

?> 

<div class="content-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-12">
                <table class="table table-striped table-responsive">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Alamat</th>
                            <th>No Telepon</th>
                            <th>Jumlah Beli</th>
                            <th>Produk</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $no = 1;
                    foreach ($data_pelanggan as $row){
                        
                    ?>
                    <tr>
                        <td><?= $no ?></td>
                        <td><?= $row['nama']?></td>
                        <td><?= $row['jenis_kelamin']?></td>
                        <td><?= $row['alamat']?></td>
                        <td><?= $row['no_telepon']?></td>
                        <td><?= $row['jumlah_beli']?></td>
                        <td><?= $row['produk_id']?></td>
                        <td>
                        <form action="pelanggan_controller.php" method="POST">
                                <a href="index.php?hal=pelanggan_detail&iddetail=<?php echo $row ['id'] ?> ">
                                    <button type="button" class="btn btn-info btn-sn" title="Detail Pelanggan">
                                    <i class="bi bi-eye-fill"></i>
                                    </button>
                                </a>
                                <a href="index.php?hal=pelanggan_edit&idedit=<?php echo $row ['id'] ?> ">
                                    <button type="button" class="btn btn-warning btn-sn" title="Edit Pelanggan">
                                    <i class="bi bi-pencil-square"></i>
                                    </button>
                                </a>
                                <button type="button" class="btn btn-danger btn-sm" name="proses" value="hapus" onclick="return confirm('Apakah Anda Yakin ingin menghapus data produk yg bernama <?= $row['nama'] ?>')" tittle="Delete Produk">
                        <i class="bi-trash-fill"></i>
                      </button>
                      <input type="hidden" name="idx" value="<?php $row['id'] ?>">
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