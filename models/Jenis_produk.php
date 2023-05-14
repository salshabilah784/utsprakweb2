<?php
class Jenis_produk{
    public $koneksi;
    public function __construct(){
        global $dbh; //panggil instance object di koneksi.php
        $this->koneksi = $dbh;
    }
    public function dataJenisproduk(){
        $sql = "SELECT * from jenis_produk" ;
        // prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }

    // Simpan Data / insert into
    public function simpan($rs){
        $sql = "INSERT INTO jenis_produk (nama_jenis)VALUES(?)";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($rs);
    }

    public function hapus($id){
        $sql = "DELETE FROM jenis_produk WHERE id=?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
    }
}
?>