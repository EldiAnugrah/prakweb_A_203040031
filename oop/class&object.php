class jika di gambarkan merupakan blue print dari rumah dan satu rumah bisa dipakai untuk rumah lainnya 

Class = template untuk membuat instance dari object dan class itu mendefinisikan object  class juga dapat 
menyimpan data dan perilaku(property and method).

cara membuat class di php :menulis keyword class diikuti nama dan dibatasi {}untuk menyimpan properti dan method
penamaan tidak diawali angka dan ada spasi 

comtoh :
<?php 
class coba{
  //properti
  public $a;
  
  //method
  public function b() {

    
  } 
}

?>

Object  
-Adalah instance yang didefinisikan oleh class
-banyak object dapat dibuat menggunakan 1 class 
-object dibuat menggunakan keyword new

contoh 
<?php 
  class coba{
    

  }
  //membuat object instance dari class
  $a=new coba(); //variable = new nama kelas ();
  $b=new coba();
?>


