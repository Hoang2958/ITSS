<?php
//nhan du lieu tu form
$noidungkham = $_POST['noidungkham'];
$ngaykham = $_POST['ngaykham'];


//ket noi csdl
require_once '../connect.php';

if (!$noidungkham || !$ngaykham)
    {
        echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }


$addsql = "INSERT INTO LichKham
(noidungkham,ngaykham) VALUES ('$noidungkham','$ngaykham')";



//thuc thi cau lenh them
if(mysqli_query($conn, $addsql)){
    
    //header("Location: viewGoiTap.php");
    echo "<h1>Thêm thành công</h1>";

};

?>
