<?php
include_once 'ecommerce.php';
include_once 'header.php';

include_once('models/Jenis_produk.php');
include_once('models/Produk.php');
include_once('models/Pelanggan.php');

// logic halaman
// tangkap request menu di url (index.php?hal=(nama file atau halaman nya))
$hal = $_REQUEST['hal'];
// jika ada request dari menu di url tampilkan halaman sesuai request
if(!empty($hal)){
    include_once $hal.'.php';
}else{
    // jika tidak ada request dari menu di url tampilkan halaman home.php atau dashboard
    include_once 'body.php';
}

include_once('footer.php');
?>