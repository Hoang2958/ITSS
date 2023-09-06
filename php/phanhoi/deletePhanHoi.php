<?php

$id = $_GET['sid'];
$sdt = $_GET['user'];

require_once '../../connect.php';

$delete_sql = "DELETE FROM phanhoi WHERE id = $id";

if (mysqli_query($conn, $delete_sql))
{
    header("Location: viewPhanHoi.php?user=$sdt");
};