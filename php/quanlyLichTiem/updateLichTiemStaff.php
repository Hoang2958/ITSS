<?php
//nhan du lieu tu form
$noidungtiem = $_POST['noidungtiem'];
$ngaytiem = $_POST['ngaytiem'];
$idVaccine = $_POST['idVaccine'];
$idLichtiem = $_POST['sid'];


//ket noi csdl
require_once '../connect.php';



$update_sql = "UPDATE LichTiem SET noidungtiem = '$noidungtiem', ngaytiem = '$ngaytiem', idVaccine = '$idVaccine' WHERE idLichtiem = $idLichtiem";



//thuc thi cau lenh them
if(mysqli_query($conn, $update_sql)){
    //in thong bao thanh cong
    header("Location: viewLichTiemStaff.php");

};



?>