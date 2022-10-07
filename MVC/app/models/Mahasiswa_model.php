<?php 

class Mahasiswa_model{
    private $table = 'mahasiswa';
    private $db;

    public function __construct()
    {
      $this->db = new Database;
    }

    public function getAllMahasiswa(){
      $this->db->query('SELECT * FROM ' . $this->table);
      return $this->db->resultSet();
    }

    public function getMahasiswaById($id){
      $this->db->query('SELECT * FROM ' . $this->table. ' WHERE id =:id ');
      $this->db->bind('id', $id);
      return $this->db->single();
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
    
  