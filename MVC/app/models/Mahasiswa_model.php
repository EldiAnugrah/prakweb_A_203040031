<?php 

class Mahasiswa_model{
    private $dbh; //database handler untuk menampung koneksi kedatabase 
    private $stmt; //untuk menyimpan query


    public function __construct()//jika jangan menggunakan ini, pakai apa pak untuk kedepannya(jangan menyimpan US & PW Databasenya) 
    {
      //data source name
        $dsn='mysql:host=localhost;dbname=phpmvc';

        try {
          $this->dbh = new PDO($dsn,'root','');
        } catch(PDOException $e) {
          die($e->getMessage());
        }
    }

    public function getAllMahasiswa(){
      $this->stmt = $this->dbh->prepare('SELECT*FROM mahasiswa');
      $this->stmt->execute();
      return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
// private $mhs = [
    //   [
    //     "Nama"=>"Eldi Anugrah Pratama",
    //     "NRP"=>"203040031",
    //     "Email"=>"20340031@mail.unpas.ac.id",
    //     "Jurusan"=>"Teknik Informatika"
    //   ],
    //   [
    //     "Nama"=>"Muhammad Piyul Putarputar",
    //     "NRP"=>"111111111",
    //     "Email"=>"111111111@mail.unpas.ac.id",
    //     "Jurusan"=>"Teknik Memanjat Gedung"
    //   ],
    //   [
    //     "Nama"=>"Piyul Demon Lord",
    //     "NRP"=>"666666666",
    //     "Email"=>"111111111@mail.unpas.ac.id",
    //     "Jurusan"=>"Teknik Memakan Nanas"
    //   ],
    // ];