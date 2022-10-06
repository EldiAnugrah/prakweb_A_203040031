<?php 

class About{
  public function index($nama = 'Eldi',$pekerjaan = 'Joker'){
    echo "Halo cuy, nama saya $nama, saya adalah seorang $pekerjaan";
  }
  public function page(){
    echo 'About/page';
  }
}