<?php
    
    require_once '../../connect.php';
    $sdt = $_GET['user'];
    $view_sql="SELECT * FROM NguoiBenh WHERE sdt = '$sdt'";
   
    $result = mysqli_query($conn, $view_sql);
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
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <ul class="nav navbar-nav">
            <li><a href="../Home.php?user=<?php echo $sdt?>">Home</a></li>
            <li><a href="../LichKham.php?user=<?php echo $sdt?>">Lịch khám</a></li>
            <li><a href="../LichTiem.php?user=<?php echo $sdt?>">Lịch tiêm</a></li>
            <li class="active"><a href="viewThongTin.php?user=<?php echo $sdt?>">Thông tin cá nhân</a></li>
            <li>
            <a style="text-align: right; background-color: rgb(48, 85, 219);color: white;margin-left: 1350px;" onclick="return confirm('Bạn có muốn đăng xuất không?')" href="../html/dangnhap.html"  >Đăng xuất</a>
            </li>
          </ul>
        </div>
      </nav>
      <form action="updateThongTin.php?user=<?php echo $sdt ?>" method="post">
            <div class="container">
            <h1>Thông tin cá nhân</h1>
            <input type="hidden" name="sid" value="<?php echo $row['idNguoiBenh']?>" id ="">
            <div class="form-group">
                <label for="hoten">Họ tên</label>
                <input type="text" id ="hoten" class="form-control" name="hoten" value="<?php echo $row['hoten']?>">
            </div>

            <div class="form-group">
                <label for="sdt">Số điện thoại</label>
                <input type="text" id="sdt" name="sdt" class="form-control" value="<?php echo $sdt ?>">
            </div>

            <div class="form-group">
                <label for="gioitinh">Giới tính</label>
                <input type="text" id="gioitinh" name="gioitinh" class="form-control" value="<?php echo $row['gioitinh'] ?>">
            </div>

            <div class="form-group">
                <label for="ngaysinh">Ngày sinh</label>
                <input type="date" name="ngaysinh" id="ngaysinh" class="form-control"  value="<?php echo $row['ngaysinh']?>">
            </div>

            <div class="form-group">
                <label for="diachi">Địa chỉ</label>
                <input type="text" id="diachi" name="diachi" class="form-control" value="<?php echo $row['diachi']?>">
            </div>

            <div class="form-group">
                <label for="cannang">Cân nặng</label>
                <input type="float" id="cannang" name="cannang" class="form-control" value="<?php echo $row['cannang']?>">
            </div>

            <div class="form-group">
                <label for="chieucao">Chiều cao</label>
                <input type="float" id="chieucao" name="chieucao" class="form-control" value="<?php echo $row['chieucao']?>">
            </div>

            <button type="submit" class="btn btn-primary">Lưu thay đổi</button>

        </form>
    </div>

      



</body>
</html>
   