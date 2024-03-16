<?php
class Home_model {
    private $table = 'Lomba';
    private $db;
    
    public function __construct() {
        $this->db = new Database;
    }

    public function getAllData() { 
        $this->db->query("SELECT * FROM " . $this->table);
        return $this->db->resultAll();
    }

    public function getDataById($id) {
        $this->db->query("SELECT * FROM " . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->resultSingle();
    }
    public function tambahPeserta($data) {
        $query = "INSERT INTO Lomba VALUES ('', :nama, :usia, :alamat)";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('usia', $data['usia']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function hapusData($id)
    {
        $query = "DELETE FROM Lomba WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id',$id);
        $this->db->execute();
        return $this->db->rowCount();
    }
}
