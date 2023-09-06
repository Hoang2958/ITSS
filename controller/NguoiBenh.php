<?php

include "DB.php";

class NguoiBenh {
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function show_NguoiBenh(){
        $query = "SELECT * FROM NguoiBenh";
        $result = $this->db->select($query);
        return $result;
    }
        
    public function insert_NguoiBenh(){
        $hoten = $_POST['hoten'];
        $sdt= $_POST['sdt'];
        $gioitinh = $_POST['gioitinh'];
        $ngaysinh = $_POST['ngaysinh'];
        $diachi = $_POST['diachi'];
        $cannang= $_POST['cannang'];
        $chieucao= $_POST['chieucao'];
        $matkhau= $_POST['matkhau'];


        $query = "INSERT INTO NguoiBenh
        (hoten,sdt,gioitinh,ngaysinh,diachi,cannang,chieucao,matkhau) VALUES ('$hoten','$sdt','$gioitinh','$ngaysinh', '$diachi',$cannang,$chieucao,'$matkhau')";
        $result = $this->db->insert($query);
        
        return $result;
    }

    public function get_NguoiBenh($idNguoiBenh){
        $query = "SELECT * FROM NguoiBenh WHERE idNguoiBenh = $idNguoiBenh";
        $result = $this->db->select($query);
        return $result;
    }

    public function update_NguoiBenh($hoten,$sdt,$gioitinh,$ngaysinh,$diachi, $cannang,$chieucao,$idNguoiBenh){
        $query = "UPDATE NguoiBenh SET hoten = '$hoten', sdt = '$sdt', gioitinh = '$gioitinh', ngaysinh = '$ngaysinh', diachi = '$diachi',cannang = $cannang,chieucao = $chieucao WHERE idNguoiBenh = $idNguoiBenh";
        $result = $this->db->update($query);
        return $result;
    }

    public function delete_NguoiBenh($key){
        $query = "DELETE FROM NguoiBenh WHERE idNguoiBenh =$key";
        $result = $this->db->delete($query);
       
        return $result;
    }    

    public function search_NguoiBenh($key){
        $query = "SELECT * FROM NguoiBenh WHERE 
        (hoten LIKE '%$key%')
        OR (sdt LIKE '%$key%')
        OR (gioitinh LIKE '%$key%')
        OR (ngaysinh LIKE '%$key%')
        OR (diachi LIKE '%$key%')
        OR (cannang LIKE '%$key%')
        OR (chieucao LIKE '%$key%')
        ";
        $result = $this->db->select($query);
       
        return $result;
    }  
}

?>