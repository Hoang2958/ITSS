<?php

$idLichTiem = $_GET['sid'];

require_once '../connect.php';

$edit_sql = "SELECT * FROM LichTiem WHERE idLichTiem = $idLichTiem";

$result = mysqli_query($conn, $edit_sql);
$row = mysqli_fetch_assoc($result);

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name ="viewport" content="width= device-width,initial-scale=1.0">
        <script src="https://kit.fontawesome.com/1147679ae7.js" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

      
    </head>
<body>
<div class="container">
        <h1>Sửa thông tin lịch tiêm</h1>
        <form action="updateLichTiem.php" method="post">
            <input type="hidden" name="sid" value="<?php echo $row['idLichTiem']?>" id ="">
            <div class="form-group">
                <label for="noidungtiem">Nội dung tiêm</label>
                <input type="text" id ="noidungtiem" class="form-control" name="noidungtiem" value="<?php echo $row['noidungtiem']?>">
            </div>

            <div class="form-group">
                <label for="ngaytiem">Ngày tiêm</label>
                <input type="date" name="ngaytiem" id="ngaytiem" class="form-control"  value="<?php echo $row['ngaytiem']?>">
            </div>

            <div class="form-group">
                <label for="idVaccine">ID vaccine</label>
                <input type="int" name="idVaccine" id="idVaccine" class="form-control"  value="<?php echo $row['idVaccine']?>">
            </div>

            <button type="submit" class="btn btn-primary">Lưu thay đổi</button>

        </form>
    </div>

    </body>
</html>