<?php
//nhan du lieu tu form
$hoten = $_POST['hoten'];
$sdt = $_POST['sdt'];
$gioitinh = $_POST['gioitinh'];
$ngaysinh = $_POST['ngaysinh'];
$diachi= $_POST['diachi'];
$cannang= $_POST['cannang'];
$chieucao= $_POST['chieucao'];
$idNguoiBenh = $_POST['sid'];


//ket noi csdl
require_once '../../connect.php';



$update_sql = "UPDATE NguoiBenh SET hoten = '$hoten', sdt = '$sdt', gioitinh = '$gioitinh', ngaysinh = '$ngaysinh', diachi = '$diachi', cannang = '$cannang', chieucao = '$chieucao' WHERE idNguoiBenh = $idNguoiBenh";

$addsql = "INSERT INTO NguoiBenh (hoten,sdt,gioitinh,ngaysinh,diachi,cannang,chieucao) VALUES ('$hoten','$sdt','$gioitinh','$ngaysinh','$diachi','$cannang','$chieucao')";

//thuc thi cau lenh them
if(mysqli_query($conn, $update_sql)){
    //in thong bao thanh cong
    echo "<h1>Cập nhật thành công</h1>";

}



else{ 

    //thuc thi cau lenh them
    if(mysqli_query($conn, $addsql)){
        echo "<h1>Cập nhật thành công</h1>";

    };

}


?>