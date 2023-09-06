<?php

include "DB.php";

class LichTiem {
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function show_LichTiem(){
        $query = "SELECT * FROM LichTiem";
        $result = $this->db->select($query);
        return $result;
    }
        
    public function insert_LichTiem(){
        $noidungtiem = $_POST['noidungtiem'];
        $ngayTiem = $_POST['ngayTiem'];
        $idVaccine = $_POST['idVaccine'];

        $query = "INSERT INTO LichTiem
        (noidungtiem,ngayTiem,idVaccine) VALUES ('$noidungtiem','$ngayTiem',$idVaccine)";
        $result = $this->db->insert($query);
        
        return $result;
    }

    public function get_LichTiem($idLichTiem){
        $query = "SELECT * FROM LichTiem WHERE idLichTiem = $idLichTiem";
        $result = $this->db->select($query);
        return $result;
    }

    public function update_LichTiem($noidungtiem, $ngayTiem, $idLichTiem, $idVaccine){
        $query = "UPDATE LichTiem SET noidungtiem = '$noidungtiem', ngayTiem = '$ngayTiem', idVaccine = $idVaccine WHERE idLichTiem = $idLichTiem";
        $result = $this->db->update($query);
         return $result;
    }

    public function delete_LichTiem($idLichTiem){
        $query = "DELETE FROM LichTiem WHERE idLichTiem = $idLichTiem";
        $result = $this->db->delete($query);
        return $result;
    }    

    public function search_LichTiem($key){
        $query = "SELECT * FROM LichTiem WHERE 
        (noidungtiem LIKE '%$key%')
        OR (ngayTiem LIKE '%$key%')
        OR (idVaccine LIKE '%$key%')";
        $result = $this->db->select($query);
        return $result;
    }  
}
?>