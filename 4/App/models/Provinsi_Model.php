<?php

class Provinsi_Model{
    private $table= 'provinsi_tb';
    private $db;

    public function __construct(){
        $this->db = new Database;

    }

    public function getAll(){
        $this->db->query('SELECT * FROM '.$this->table);
        return $this->db->resultSet();
        }
    
    public function getProvinsibyId($id){
        $this->db->query('SELECT * FROM ' . $this->table. ' WHERE id=:id');
        $this->db->bind('id',$id);
        return $this->db->single();
    }

    public function tambahDataProvinsi($data){
        
        $query= "INSERT INTO provinsi_tb
        VALUES
        ('',:nama, :diresmikan,:photo, :pulau)";

        $this->db->query($query);
        $this->db->bind('nama',$data['nama']);
        $this->db->bind('diresmikan',$data['tglresmi']);
        $this->db->bind('photo','test.jpg');

        $this->db->bind('pulau',$data['pulau']);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapusDataProvinsi($id){
        $query ="DELETE FROM provinsi_tb WHERE id=:id";
        $this->db->query($query);
        $this->db->bind('id',$id);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function UbahDataProvinsi($data){
        
        $query= "UPDATE provinsi_tb SET
        nama= :nama,
        diresmikan=:diresmikan,
        photo = :photo,
        pulau = :pulau
        WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('nama',$data['nama']);
        $this->db->bind('diresmikan',$data['tglresmi']);
        $this->db->bind('photo','test.jpg');

        // move_uploaded_file($data['photoProvinsi'], '../images/'.$data['photoProvinsi']);
        $this->db->bind('pulau',$data['pulau']);
        $this->db->bind('id',$data['id']);

        $this->db->execute();
        return $this->db->rowCount();
    }

  
    
}