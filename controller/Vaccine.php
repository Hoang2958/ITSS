<?php

include "DB.php";

class Vaccine {
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function show_Vaccine(){
        $query = "SELECT * FROM Vaccine";
        $result = $this->db->select($query);
        return $result;
    }
        
    public function insert_Vaccine(){
        $tenvaccine = $_POST['tenvaccine'];
        $ngaynhapvaccine = $_POST['ngaynhapvaccine'];
        $soluong = $_POST['soluong'];

        $query = "INSERT INTO Vaccine
            (
                ngaynhapvaccine, 
                tenvaccine,
                soluong
            )
            VALUES 
            (
                '$ngaynhapvaccine', 
                '$tenvaccine',
                '$soluong'
            )";
        $result = $this->db->insert($query);
        
        return $result;
    }

    public function get_Vaccine($idVaccine){
        $query = "SELECT * FROM Vaccine WHERE idVaccine = $idVaccine";
        $result = $this->db->select($query);
        return $result;
    }

    public function update_Vaccine($ngaynhapvaccine, $tenvaccine, $soluong, $key){
        $query = "UPDATE Vaccine
                    SET tenvaccine = '$tenvaccine', 
                        ngaynhapvaccine = '$ngaynhapvaccine', 
                        soluong = '$soluong'
                    WHERE idVaccine = $key";
        $result = $this->db->update($query);

        return $result;
    }

    public function delete_Vaccine($key){
        $query = "DELETE FROM Vaccine WHERE idVaccine = $key";
        $result = $this->db->delete($query);
       
        return $result;
    }    

    public function search_Vaccine($key){
        $query = "SELECT * FROM Vaccine WHERE (ngaynhapvaccine LIKE '%$key%')
        OR (tenvaccine LIKE '%$key%')
        OR (soluong LIKE '%$key%')
        ";
        $result = $this->db->select($query);
       
        return $result;
    }  
}

?>