<?php
// step 1 tangkap request form
$_nama = $_POST['nama']; // 2
$_harga = $_POST['harga_jual']; //3
$_stok = $_POST['stok']; // 4
$_jenis = $_POST['jenis_produk_id']; // 6
$_kode = $_POST['kode']; // 1

// step 2 simpan data ke dalam array
$data = [
    $_nama,// 2
    $_harga,// 3
    $_stok,// 5
    $_jenis,// 7
    $_kode, // 1
];
// step 3 eksekusi data dengan menggunakan mekanisme pdo

include_once 'ecommerce.php';
include_once 'models/Produk.php';
$model = new Produk();
$tombol = $_REQUEST['proses'];
switch ($tombol) {
    case 'simpan':
        $model->simpan($data);
        break;

    case 'ubah':
        // tangkap hidden field idx untuk mencari id
        $data[] = $_POST['idx'];
        $model->ubah($data);
        break;
    case 'hapus':
        unset($data);
        $model->hapus($_POST['idx']);
        break;

        default:
        header('Location:index.php?hal=produk');
        break;
}
// step 4 arahkan ke halaman produk kembali jika proses nya sudah selesai
header('Location:index.php?hal=produk');
?>