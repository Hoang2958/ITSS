<?php

$sdt = $_GET['user'];
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
            <li><a href="Home.php?user=<?php echo $sdt?>">Home</a></li>
            <li><a href="LichKham.php?user=<?php echo $sdt?>">Lịch khám</a></li>
            <li class="active"><a href="LichTiem.php?user=<?php echo $sdt?>">Lịch tiêm</a></li>
            <li><a href="ThongTinCaNhan/viewThongTin.php?user=<?php echo $sdt?>">Thông tin cá nhân</a></li>
            <li>
            <a style="text-align: right; background-color: rgb(48, 85, 219);color: white;margin-left: 1350px;" onclick="return confirm('Bạn có muốn đăng xuất không?')" href="../html/dangnhap.html"  >Đăng xuất</a>
            </li>
          </ul>
        </div>
      </nav>

        
        <body>
          <div class="list-group">
            <a href="LichTiem/viewLichTiem.php?user=<?php echo $sdt?>" class="list-group-item">Xem danh sách các lịch tiêm</a>
            <a href="LichTiem/searchLichTiem.php?user=<?php echo $sdt?>" class="list-group-item">Tìm kiếm lịch tiêm</a>
            <a href="LichTiem/viewCacLichTiemDaDangKy.php?user=<?php echo $sdt?>" class="list-group-item">Các lịch tiêm đã đăng ký</a>
          </div>
        </body>

</body>
</html>
   