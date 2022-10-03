<!-- Object type adalah 
      tipe data buatan 
-->


 
<?php 
  class Produk {
    public $judul ,
           $penulis ,
           $penerbit ,
           $harga;

    public function __construct($judul = "judul",$penulis = "penulis",$penerbit = "penerbit",$harga = 0) { //alasan pakai _ _ karena bagian dari magic method yang ada di php 
      $this->judul = $judul;
      $this->penulis = $penulis;
      $this->penerbit = $penerbit;
      $this->harga = $harga;
    }
       
    public function getLabel(){
      return "$this->penulis, $this->penerbit";
    }

  }
  class cetakInfoProduk{
    public function cetak(produk $produk){
      $str = "{$produk->judul} | {$produk->getLabel()} | (Rp.{$produk->harga})"; 
      return $str;
    }
  }
    $produk1 = new produk("Naruto","Masashi","Shonen Jump",30000); 
    $produk2 = new produk("Uncharted","Neil Durkmann","Sony Computer",25000);

    echo "komik : " . $produk1->getLabel();
    echo "<br>";
    echo "game : "  . $produk2->getLabel();

    echo "<br>";

    $infoProduk1 = new cetakInfoProduk();
    echo $infoProduk1->cetak($produk1);

?>