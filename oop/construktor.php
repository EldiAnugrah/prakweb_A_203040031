<!-- 
  kustruktor adalah sebuah method khusus yang ada dalam sebuah kelas karena akan otomatis dijalankan ketika 
  sebuah kelas diinstansiasi/dibuat kelasnya 

 -->

 
<?php 
  class Produk {
    public $judul ,
           $penulis ,
           $penerbit ,
           $harga;

    public function __construct($judul = "judul",$penulis = "penulis",$penerbit = "penerbit",$harga = "haarga") { //alasan pakai _ _ karena bagian dari magic method yang ada di php 
      $this->judul = $judul;
      $this->penulis = $penulis;
      $this->penerbit = $penerbit;
      $this->harga = $harga;
    }
       
    public function getLabel(){
      return "$this->judul, $this->penulis, $this->penerbit, $this->harga";
    }

  }
    $produk1 = new produk("Naruto","Masashi","Shonen Jump",30000); 
    $produk2 = new produk("Uncharted","Neil Durkmann","Sony Computer",25000);
    $produk3 = new produk("Dragon Ball");

 
    echo "komik : " . $produk1->getLabel();
    echo "<br>";
    echo "game : "  . $produk2->getLabel();
    echo "<br>";
    echo "buku : "  . $produk3->getLabel();

?>