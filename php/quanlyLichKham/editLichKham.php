<?php

$idLichKham = $_GET['sid'];

require_once '../connect.php';

$edit_sql = "SELECT * FROM LichKham WHERE idLichKham = $idLichKham";

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
        <h1>Sửa thông tin lịch khám</h1>
        <form action="updateLichKham.php" method="post">
            <input type="hidden" name="sid" value="<?php echo $row['idLichKham']?>" id ="">
            <div class="form-group">
                <label for="noidungkham">Nội dung lịch khám</label>
                <input type="text" id ="noidungkham" class="form-control" name="noidungkham" value="<?php echo $row['noidungkham']?>">
            </div>

            <div class="form-group">
                <label for="ngaykham">Ngày khám</label>
                <input type="date" name="ngaykham" id="ngaykham" class="form-control"  value="<?php echo $row['ngaykham']?>">
            </div>

            <button type="submit" class="btn btn-primary">Lưu thay đổi</button>

        </form>
    </div>

    </body>
</html>