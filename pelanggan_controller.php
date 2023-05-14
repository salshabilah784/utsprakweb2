<?php
// step 1 tangkap request form
$_nama = $_POST['nama']; // 2
$_jk = $_POST['jenis_kelamin']; //3
$_alamat = $_POST['alamat']; // 4
$_notelp = $_POST['no_telepon']; // 6
$_jmlbeli = $_POST['jumlah_beli']; // 1
$_produkid = $_POST['produk_id']; // 1

// step 2 simpan data ke dalam array
$data = [
    $_nama,// 2
    $_jk,//3
    $_alamat,// 4
    $_notelp,// 6
    $_jmlbeli,// 1
    $_produkid // 1
];
// step 3 eksekusi data dengan menggunakan mekanisme pdo

include_once 'ecommerce.php';
include_once 'models/Pelanggan.php';
$model = new Pelanggan();
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
        header('Location:index.php?hal=pelanggan');
        break;
}
// step 4 arahkan ke halaman produk kembali jika proses nya sudah selesai
header('Location:index.php?hal=pelanggan');
?>