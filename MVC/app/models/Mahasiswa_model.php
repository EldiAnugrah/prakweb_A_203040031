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

    public function tambahDataMahasiswa($data)
    {
      $query = "INSERT INTO mahasiswa
                VALUES
                ('', :nama, :nrp, :email, :jurusan)";
      $this->db->query($query);

      $this->db->bind('nama',$data['nama']);
      $this->db->bind('nrp',$data['nrp']);
      $this->db->bind('email',$data['email']);
      $this->db->bind('jurusan',$data['jurusan']);

      $this->db->execute();

      return $this->db->rowCount();
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
    
  