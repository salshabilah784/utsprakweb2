<?php
$obj_jenis_produk = new Jenis_produk();
$obj_produk = new Produk();

$data_jenis_produk = $obj_jenis_produk->dataJenisproduk();
$data_produk = $obj_produk->dataProduk();

$idedit = $_REQUEST['idedit'];
$produk = !empty($idedit) ? $obj_produk->getProduk($idedit) : [];

?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Produk</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
       <div class="container">
        <!-- masukan code table dari bootstrap form builder -->
       <form method="POST" action="produk_controller.php">
       <div class="form-group row">
    <label for="kode" class="col-4 col-form-label">kode Produk</label> 
    <div class="col-8">
      <input id="kode" name="kode" value="<?php echo $produk[0] ['kode']?>"type="text" class="form-control">
    </div>
       <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Produk</label> 
    <div class="col-8">
      <input id="nama" name="nama" value="<?php echo $produk[0] ['nama']?>"type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="harga_jual" class="col-4 col-form-label">Harga Jual</label> 
    <div class="col-8">
      <input id="harga_jual" name="harga_jual" value="<?php echo $produk[0] ['harga_jual']?>" type="text" class="form-control">
    </div>
  </div>
  </div>
  <div class="form-group row">
    <label for="stok" class="col-4 col-form-label">Stok</label> 
    <div class="col-8">
      <input id="stok" name="stok" value="<?php echo $produk[0] ['stok']?>"type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="jenis_produk_id" class="col-4 col-form-label">Jenis Produk</label> 
    <div class="col-8">
      <select id="jenis_produk_id" name="jenis_produk_id" class="custom-select">
        <option selected>Pilih Jenis Produk</option>
        <?php
        foreach ($data_jenis_produk as $jenis){

        ?>
        <option value="<?php echo $jenis['id']?>"><?php echo $jenis['nama_jenis']?></option>
        <?php
        }

        ?>

      </select>
    </div>
  </div>
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="proses" value="ubah"  type="submit" class="btn btn-warning">Ubah</button>
      <input type="hidden" name="idx" value="<?= $idedit ?>">
    </div>
  </div>
</form>
</div>
</section>