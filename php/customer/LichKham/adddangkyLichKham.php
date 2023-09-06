<?php
require_once '../../connect.php';

$sdt = $_GET['user'];
$idLichKham = $_GET['sid'];

$searchNguoiBenh = "SELECT * FROM NguoiBenh WHERE (sdt = '$sdt')";

$query = mysqli_query($conn, $searchNguoiBenh);

while ($r = mysqli_fetch_assoc($query))
{
    $idNguoiBenh =$r['idNguoiBenh'];
    
};
$add_sql="INSERT INTO DKLichKham (idNguoiBenh,idLichKham,trangthai) VALUES ($idNguoiBenh,$idLichKham, 'Chưa được xác nhận')";

if(mysqli_query($conn, $add_sql))
{
  header("Location: viewCacLichKhamDaDangKy.php?user=$sdt");
}


?>