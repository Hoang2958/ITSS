<?php
//nhan du lieu tu form
$noidungtiem = $_POST['noidungtiem'];
$ngaytiem = $_POST['ngaytiem'];
$idVaccine = $_POST['idVaccine'];

//ket noi csdl
require_once '../connect.php';

if (!$noidungtiem || !$ngaytiem || !$idVaccine)
    {
        echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }


$addsql = "INSERT INTO LichTiem
(noidungtiem,ngaytiem, idVaccine) VALUES ('$noidungtiem','$ngaytiem',$idVaccine)";



//thuc thi cau lenh them
if(mysqli_query($conn, $addsql)){
    
    //header("Location: viewGoiTap.php");
    echo "<h1>Thêm thành công</h1>";

};

?>