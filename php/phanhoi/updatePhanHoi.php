<?php
//nhan du lieu tu form
$sdt = $_GET['user'];
$id = $_POST['sid'];
$noidung = $_POST['noidung'];


//ket noi csdl
require_once '../../connect.php';



$update_sql = "UPDATE phanhoi SET noidung = '$noidung' WHERE id = $id";



//thuc thi cau lenh them
if(mysqli_query($conn, $update_sql)){
    //in thong bao thanh cong
    header("Location: viewPhanHoi.php?user=$sdt");

};



?>