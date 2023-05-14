<?php
class Produk{
    private $koneksi;
    public function __construct(){
        global $dbh; //panggil instance object di koneksi.php
        $this->koneksi = $dbh;
    }
    public function dataProduk(){
        $sql = "SELECT * FROM produk";

        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }
    public function getProduk($idedit){
        $sql = "SELECT * FROM produk";

        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }
    public function simpan($data){
        $sql = "INSERT INTO produk (nama,harga_jual,stok,jenis_produk_id,kode) VALUES (?,?,?,?,?)";
        $ps = $this->koneksi->prepare($sql);
        print_r($data);
        $ps->execute($data);
    }
    public function ubah($data){
        $sql = "UPDATE produk SET nama=?,harga_jual=?,stok=?,jenis_produk_id=?,kode=?, WHERE id=?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }
    public function hapus($data){
        $_iddel=$_GET['iddel'];
        $sql = "DELETE FROM pelanggan WHERE id=?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$_iddel]);
    }
}
?>  
