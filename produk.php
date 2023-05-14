<?php
$model = new Produk();
$data_produk = $model->dataProduk();
?>
<!-- Isi content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Data Produk</h1>
        </div>
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <table class="table">
            <thead>
              <tr class="table-active">
                <th>ID</th>
                <th>Nama</th>
                <th>Harga Jual</th>
                <th>Stok</th>
                <th>Jenis Produk</th>
                <th>Kode</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              foreach ($data_produk as $row) {
              ?>
                <tr class="table-danger">
                  <td><?= $no ?></td>
                  <td><?= $row['nama'] ?></td>
                  <td><?= $row['harga_jual'] ?></td>
                  <td><?= $row['stok'] ?></td>
                  <td><?= $row['jenis_produk_id'] ?></td>
                  <td><?= $row['kode'] ?></td>
                  <td>
                    <form action="produk_controller.php" method="post">
                      <a href="index.php?hal=produk_detail&iddetail=<?php echo $row['id'] ?>">
                        <button type="button" class="btn btn-info btn-sm" tittle="Detail Produk">
                          <i class="bi-eye-fill"></i>
                        </button>
                      </a>
                      <a href="index.php?hal=produk_edit&idedit=<?php echo $row['id'] ?>">
                        <button type="button" class="btn btn-warning btn-sm" tittle="Edit Produk">
                          <i class="bi-pen-fill"></i>
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
  </section>
  <!-- /.content -->
</div>
<!-- /Isi content -->