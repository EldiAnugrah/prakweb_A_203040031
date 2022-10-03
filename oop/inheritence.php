<!-- 
  inheritence adalah suatu konsep yang akan menciptakan hierarki antar kelas yang dimana nanti akan ada parent dan child.

  child class nantinya akan mewarisi properti dan method yang dimiliki oleh parentnya dengan syarat visible.
  Child parent dibuat untuk memperluas/extend functionalitas parentnya 
  
  kenapa butuh inheritence ?

 -->
 <?php 
  class Produk {
    public $judul ,
           $penulis ,
           $penerbit ,
           $harga,
           $jmlHalaman,
           $jmMain,
           $tipe;

    public function __construct($judul = "judul",$penulis = "penulis",$penerbit = "penerbit",$harga = 0,
                                $jmlHalaman = 0, $jmMain = 0, $tipe = "tipe") { //alasan pakai _ _ karena bagian dari magic method yang ada di php 
      $this->judul = $judul;
      $this->penulis = $penulis;
      $this->penerbit = $penerbit;
      $this->harga = $harga;
      $this->jmlHalaman = $jmlHalaman;
      $this->jmMain = $jmMain;
      $this->tipe = $tipe;
    }
       
    public function getLabel(){
      return "$this->penulis, $this->penerbit";
    }

    public function getInfoLengkap(){
      // komik : Masashi, Shonen Jump -.- 100 halaman 
      $str = "{$this->tipe} | {$this->judul} | {$this->getLabel()} |(Rp.{$this->harga})"; 
      if ($this->tipe =="komik") {
        $str .= "-{$this->jmlHalaman} Halaman";
      }else if($this->tipe=="game"){
        $str .= " ~ {$this->jmMain} Jam.";
      }
      return $str; 
    }

  }
  class cetakInfoProduk{
    public function cetak(produk $produk){
      $str = "{$produk->judul} | {$produk->getLabel()} | (Rp.{$produk->harga})"; 
      return $str;
    }
  }
    $produk1 = new produk("Naruto","Masashi","Shonen Jump",30000,100,0,"komik"); 
    $produk2 = new produk("Uncharted","Neil Durkmann","Sony Computer",25000,0,50,"game");

    // komik : Masashi, Shonen Jump
    // game : Neil Durkmann, Sony Computer
    // Naruto | Masashi, Shonen Jump | (Rp.30000)
    
    echo $produk1->getInfoLengkap();
    echo "<br>";
    echo $produk2->getInfoLengkap();

?>