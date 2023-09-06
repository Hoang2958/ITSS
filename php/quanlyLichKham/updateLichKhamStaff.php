<?php
//nhan du lieu tu form
$noidungkham = $_POST['noidungkham'];
$ngaykham = $_POST['ngaykham'];
$idLichKham = $_POST['sid'];


//ket noi csdl
require_once '../connect.php';



$update_sql = "UPDATE LichKham SET noidungkham = '$noidungkham', ngaykham = '$ngaykham' WHERE idLichKham = $idLichKham";



//thuc thi cau lenh them
if(mysqli_query($conn, $update_sql)){
    //in thong bao thanh cong
    header("Location: viewLichKhamStaff.php");

};



?>