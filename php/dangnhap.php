<?php

//nhan du lieu tu form
$sdt = $_POST['sdt'];
$matkhau = $_POST['matkhau'];


//ket noi csdl
require_once 'connect.php';

$red=0;

//----------------admin--------------------
if ($sdt=='admin' && $matkhau=='admin123') {
    $red = 1;
    header("Location: ../html/admin/Home.html");
}


//---------------------staff-------------------------
$searchNhanVien = "SELECT * FROM NhanVien WHERE (sdt = '$sdt')";

$query = mysqli_query($conn, $searchNhanVien);


while ($r = mysqli_fetch_assoc($query))
{
    if  ($sdt == $r['sdt'] && $matkhau == $r['matkhau'] )
    {
        $red = 1;
        header("Location: ../html/staff/Home.html?user=$sdt");
    }
    
};


//---------------------customer-------------------

$searchNguoiBenh = "SELECT * FROM NguoiBenh WHERE (sdt = '$sdt')";

$query = mysqli_query($conn, $searchNguoiBenh);


while ($r = mysqli_fetch_assoc($query))
{
    if  ($sdt == $r['sdt'] && $matkhau == $r['matkhau'] )
    {
        $red = 1;
        header("Location: customer/Home.php?user=$sdt");
    }
    
};



//-----------------Error------------------------------
if($red == 0)
{
    header("Location: ../html/thongbaoloidangnhap.html");
}
 
?>