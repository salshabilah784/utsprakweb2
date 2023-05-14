<?php
// step 1 tangkap request form
$_namajenis = $_POST['nama_jenis']; // 2

// step 2 simpan data ke dalam array
$data = [
    $_namajenis,// 2
];
// step 3 eksekusi data dengan menggunakan mekanisme pdo

include_once 'ecommerce.php';
include_once 'models/Jenis_produk.php';
$model = new Jenis_produk();
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
        header('Location:index.php?hal=jenis_produk');
        break;
}
// step 4 arahkan ke halaman produk kembali jika proses nya sudah selesai
header('Location:index.php?hal=jenis_produk');
?>