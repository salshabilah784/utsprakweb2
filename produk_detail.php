<!-- isi content -->
<?php
$obj_produk = new Produk();
$data_produk = $obj_produk->dataProduk();
?>
<div class="content-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-12">
                <section class="content">
                    <div class="container" style="background : pink">
                        <ul>
                            <li>No :
                                <?= $data_produk[0]['id']; ?>
                            </li>
                            <li>Nama :
                                <?= $data_produk[0]['nama']; ?>
                            </li>
                            <li>Harga jual :
                                <?= $data_produk[0]['harga_jual'];?>
                            </li> 
                            <li>Stok :
                                <?= $data_produk[0]['stok'];?>
                            </li>
                            <li>Jenis_produk_id :
                                <?= $data_produk[0]['jenis_produk_id'];?>
                            </li>
                            <li>Kode :
                                <?= $data_produk[0]['kode'];?>
                            </li>
                        </ul>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>