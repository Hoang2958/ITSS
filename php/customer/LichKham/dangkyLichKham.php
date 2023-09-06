<?php

//ket noi csdl
require_once '../../connect.php';

$sdt = $_GET['user'];
$id = $_GET['sid'];
$view_sql="SELECT * FROM LichKham WHERE idLichKham = $id";

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

      <header>
        <div>
            <img style="width: 100%;" src="../../../images/logo.png">
        </div>
      </header>
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <ul class="nav navbar-nav">
            <li><a href="../Home.php?user=<?php echo $sdt?>">Home</a></li>
            <li class="active"><a href="../LichKham.php?user=<?php echo $sdt?>">Lịch khám</a></li>
            <li><a href="../LichTiem.php?user=<?php echo $sdt?>">Lịch tiêm</a></li>
            <li><a href="../ThongTinCaNhan/viewThongTin.php?user=<?php echo $sdt?>">Thông tin cá nhân</a></li>
            <li>
            <a style="text-align: right; background-color: rgb(48, 85, 219);color: white;margin-left: 1350px;" onclick="return confirm('Bạn có muốn đăng xuất không?')" href="../html/dangnhap.html"  >Đăng xuất</a>
            </li>
          </ul>
        </div>
      </nav>

      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <ul class="nav navbar-nav">
            <li class="active"><a href="viewLichKham.php?user=<?php echo $sdt?>">Xem danh sách các lịch khám</a></li>
            <li><a href="searchLichKham.php?user=<?php echo $sdt?>">Tìm kiếm lịch khám</a></li>
            <li><a href="viewCacLichKhamDaDangKy.php?user=<?php echo $sdt?>">Các lịch khám đã đăng ký</a></li>

          </ul>
        </div>
      </nav>
      <div class="container">
        <h1>Đăng ký lịch khám</h1>
        <form action="adddangkyLichKham.php?sid=<?php echo $id?>&user=<?php echo $sdt?>" method="post">
            <div class="form-group">
                <label for="noidungkham">Nội dung khám</label>
                <p><?php echo $row['noidungkham'] ?></p>
            </div>
              
            <div class="form-group">
                <label for="ngaykham">Ngày khám</label>
                <input type="date" name="ngaykham" id="ngaykham" class="form-control">
            </div>

            <button type="submit" class="btn btn-info">Đăng ký</button>

        </form>
    </div>



      </body>
</html>
   