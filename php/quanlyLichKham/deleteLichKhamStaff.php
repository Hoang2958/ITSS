<?php

$nvid = $_GET['sid'];

require_once '../connect.php';

$delete_sql = "DELETE FROM LichKham WHERE idLichKham = $nvid";

if (mysqli_query($conn, $delete_sql))
{

    header("Location: viewLichKhamStaff.php");
};

?>