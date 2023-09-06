<?php

include "DB.php";

class NhanVien {
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function show_NhanVien(){
        $query = "SELECT * FROM NhanVien";
        $result = $this->db->select($query);
        return $result;
    }
        
    public function insert_NhanVien(){
        $hoten = $_POST['hoten'];
        $sdt = $_POST['sdt'];
        $gioitinh = $_POST['gioitinh'];
        $ngaysinh = $_POST['ngaysinh'];
        $diachi = $_POST['diachi'];
        $vitri = $_POST['vitri'];

        $query = "INSERT INTO NhanVien
        (hoten, sdt, gioitinh, ngaysinh, diachi, vitri) VALUES ('$hoten','$sdt','$gioitinh','$ngaysinh','$diachi','$vitri')";
        $result = $this->db->insert($query);
        
        return $result;
    }

    public function get_NhanVien($idNhanVien){
        $query = "SELECT * FROM NhanVien WHERE idNhanVien = $idNhanVien";
        $result = $this->db->select($query);
        return $result;
    }

    public function update_NhanVien($hoten, $sdt, $gioitinh, $ngaysinh, $diachi, $vitri, $key){
        $query = "UPDATE NhanVien SET hoten = '$hoten', sdt = '$sdt', gioitinh = '$gioitinh', ngaysinh = '$ngaysinh', diachi = '$diachi', vitri = '$vitri'
                    WHERE idNhanVien = $key";
        $result = $this->db->update($query);

        return $result;
    }

    public function delete_NhanVien($key){
        $query = "DELETE FROM NhanVien WHERE idNhanVien = $key";
        $result = $this->db->delete($query);
       
        return $result;
    }    

    public function search_NhanVien($key){
        $query = "SELECT * FROM NhanVien WHERE 
        (hoten LIKE '%$key%')
        OR (sdt LIKE '%$key%')
        OR (gioitinh LIKE '%$key%')
        OR (ngaysinh LIKE '%$key%')
        OR (diachi LIKE '%$key%')
        OR (vitri LIKE '%$key%')
        ";
        $result = $this->db->select($query);
       
        return $result;
    }  
}

?>