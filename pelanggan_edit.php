<?php
$obj_pelanggan = new pelanggan();
$obj_produk = new Produk();
$data_pelanggan = $obj_pelanggan->dataPelanggan();
$data_produk = $obj_produk->dataProduk();

$idedit = $_REQUEST['idedit'];

$pelanggan = !empty($idedit) ? $obj_pelanggan->getPelanggan($idedit) : [];

?>
    
<!-- ini untuk konten -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Pelanggan</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
       <div class="container_hasil">
        <!-- masukan code table dari bootstrap form builder -->
       <form method="POST" action="pelanggan_controler.php">
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Pelanggan</label> 
    <div class="col-8">
      <input id="nama" name="nama" value="<?php echo $pelanggan[0] ['nama']?>"type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="jenis_kelamin" class="col-4 col-form-label">Jenis Kelamin</label> 
    <div class="col-8">
      <input id="jenis_kelamin" name="jenis_kelamin" value="<?php echo $pelanggan[0] ['jenis_kelamin']?>" type="text" class="form-control">
    </div>
  </div>
  </div>
  <div class="form-group row">
    <label for="alamat" class="col-4 col-form-label">Alamat</label> 
    <div class="col-8">
      <input id="alamat" name="alamat" value="<?php echo $pelanggan[0] ['alamat']?>"type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="no_telepon" class="col-4 col-form-label">No Telepon</label> 
    <div class="col-8">
      <input id="no_telepon" name="no_telepon" value="<?php echo $pelanggan[0] ['no_telepon']?>" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="jumlah_beli" class="col-4 col-form-label">Jumlah Beli</label> 
    <div class="col-8">
      <input id="jumlah_beli" name="jumlah_beli" value="<?php echo $pelanggan[0] ['jumlah_beli']?>" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="produk_id" class="col-4 col-form-label">Produk</label> 
    <div class="col-8">
      <select id="produk_id" name="produk_id" class="custom-select">
        <option selected>Pilih Produk</option>
        <?php
        foreach ($data_produk as $produk){

        ?>
        <option value="<?php echo $produk['id']?>"><?php echo $produk['nama']?></option>
        <?php
        }

        ?>

      </select>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="proses" type="submit" value="edit" class="btn btn-primary">Edit</button>
      <input type="hidden" name="idx" value="<?=$idedit?>">
    </div>
  </div>
</form>
       </div>
    </section>
</div>
<!-- ini untuk tutup konten -->