<?php

include "DB.php";

class LichKham {
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function show_LichKham(){
        $query = "SELECT * FROM LichKham";
        $result = $this->db->select($query);
        return $result;
    }
        
    public function insert_LichKham(){
        $noidungkham = $_POST['noidungkham'];
        $ngaykham = $_POST['ngaykham'];

        $query = "INSERT INTO LichKham
        (noidungkham,ngaykham) VALUES ('$noidungkham','$ngaykham')";
        $result = $this->db->insert($query);
        
        return $result;
    }

    public function get_LichKham($idLichKham){
        $query = "SELECT * FROM LichKham WHERE idLichKham = $idLichKham";
        $result = $this->db->select($query);
        return $result;
    }

    public function update_LichKham($noidungkham, $ngaykham, $idLichKham){
        $query = "UPDATE LichKham SET noidungkham = '$noidungkham', ngaykham = '$ngaykham' WHERE idLichKham = $idLichKham";
        $result = $this->db->update($query);
         return $result;
    }

    public function delete_LichKham($idLichKham){
        $query = "DELETE FROM LichKham WHERE idLichKham = $idLichKham";
        $result = $this->db->delete($query);
        return $result;
    }    

    public function search_LichKham($key){
        $query = "SELECT * FROM LichKham WHERE 
        (noidungkham LIKE '%$key%')
        OR (ngaykham LIKE '%$key%')";
        $result = $this->db->select($query);
        return $result;
    }  
}
?>