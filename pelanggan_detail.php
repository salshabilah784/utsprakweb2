<!-- isi content -->
<?php
$obj_pelanggan = new Pelanggan();
$data_pelanggan = $obj_pelanggan->dataPelanggan();
?>
<div class="content-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-12">
                <section class="content">
                    <div class="container" style="background : pink">
                        <ul>
                            <li>No :
                                <?= $data_pelanggan[0]['id']; ?>
                            </li>
                            <li>Nama :
                                <?= $data_pelanggan[0]['nama']; ?>
                            </li>
                            <li>Jenis Kelamin :
                                <?= $data_pelanggan[0]['jenis_kelamin'];?>
                            </li> 
                            <li>Alamat :
                                <?= $data_pelanggan[0]['alamat'];?>
                            </li>
                            <li>No.Tlp :
                                <?= $data_pelanggan[0]['no_telepon'];?>
                            </li>
                            <li>Jumlah Beli :
                                <?= $data_pelanggan[0]['jumlah_beli'];?>
                            </li>
                            <li>Produk :
                                <?= $data_pelanggan[0]['produk_id'];?>
                            </li>
                        </ul>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>