<?php

include "DB.php";

class Thuoc {
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function show_Thuoc(){
        $query = "SELECT * FROM Thuoc";
        $result = $this->db->select($query);
        return $result;
    }
        
    public function insert_Thuoc(){
        $tenthuoc = $_POST['tenthuoc'];
        $ngaynhapthuoc = $_POST['ngaynhapthuoc'];
        $soluong = $_POST['soluong'];

        $query = "INSERT INTO Thuoc
            (
                ngaynhapthuoc, 
                tenthuoc,
                soluong
            )
            VALUES 
            (
                '$ngaynhapthuoc', 
                '$tenthuoc',
                '$soluong'
            )";
        $result = $this->db->insert($query);
        
        return $result;
    }

    public function get_Thuoc($idThuoc){
        $query = "SELECT * FROM Thuoc WHERE idThuoc = $idThuoc";
        $result = $this->db->select($query);
        return $result;
    }

    public function update_Thuoc($ngaynhapthuoc, $tenthuoc, $soluong, $key){
        $query = "UPDATE Thuoc
                    SET tenthuoc = '$tenthuoc', 
                        ngaynhapthuoc = '$ngaynhapthuoc', 
                        soluong = '$soluong'
                    WHERE idThuoc = $key";
        $result = $this->db->update($query);

        return $result;
    }

    public function delete_Thuoc($key){
        $query = "DELETE FROM Thuoc WHERE idThuoc = $key";
        $result = $this->db->delete($query);
       
        return $result;
    }    

    public function search_Thuoc($key){
        $query = "SELECT * FROM Thuoc WHERE (ngaynhapthuoc LIKE '%$key%')
        OR (tenthuoc LIKE '%$key%')
        OR (soluong LIKE '%$key%')
        ";
        $result = $this->db->select($query);
       
        return $result;
    }  
}

?>