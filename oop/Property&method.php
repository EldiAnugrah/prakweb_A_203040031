<!-- property adalah sesuatu yang merepresentasikan data atau variable yang ada dalam object 
cara penulisan nya sama seperti variable namun diawali oleh visibility 

method adalah merepresentasikan perilaku dari sebuah object atau sebuah function yang ada dalam object 
cara penulisannya sama seperti property 

contoh  -->


<?php 
  class produk {
    public $judul = "judul",
           $penulis = "penulis",
           $penerbit = "penerbit",
           $harga = "0";

    public function getLabel(){
      return "$this->penulis,$this->penerbit";
    }

  }

    // $produk1 = new produk();
    // //cara menambah nilai pada 
    // $produk1 -> judul = "naruto";
    // var_dump($produk1);

    // $produk2 = new produk();
    // //cara menambah nilai pada 
    // $produk2 -> judul = "uncharted";
    // $produk2 -> tambahProperty = "hahaha";
    // var_dump($produk2);

    $produk3 = new produk();
    $produk3->judul = "naruto";
    $produk3->penulis = "masahsi kishimoto";
    $produk3->penerbit = "shonen jump";
    $produk3->harga = 30000;

    $produk4 = new produk();
    $produk3->judul = "Uncharted";
    $produk3->penulis = "Neil Durkmann";
    $produk3->penerbit = "Sony Computer";
    $produk3->harga = 25000;

    echo "komik : "  $produk3->getLabel();
    echo "<br>";
    echo "game : "  $produk3->getLabel();

?>