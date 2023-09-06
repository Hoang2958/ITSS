<?php
require_once '../../connect.php';

$sdt = $_GET['user'];

$noidung = $_POST['noidung'];
if (!$noidung )
    {
        echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }

$search_khach = "SELECT * FROM hoivien WHERE (sdt = '$sdt')";

$query = mysqli_query($conn, $search_khach);

while ($r = mysqli_fetch_assoc($query))
{
    $idhoivien =$r['id'];
    
};
$add_sql="INSERT INTO phanhoi (idhoivien,noidung) VALUES ($idhoivien,'$noidung')";

if(mysqli_query($conn, $add_sql))
{
  header("Location: viewPhanHoi.php?user=$sdt");
}


?>