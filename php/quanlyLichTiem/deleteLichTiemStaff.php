<?php

$nvid = $_GET['sid'];

require_once '../connect.php';

$delete_sql = "DELETE FROM LichTiem WHERE idLichTiem = $nvid";

if (mysqli_query($conn, $delete_sql))
{

    header("Location: viewLichTiemStaff.php");
};

?>