<?php

$sdt = $_GET['user'];
$id = $_GET['sid'];
require_once '../../connect.php';

$edit_sql = "SELECT * FROM phanhoi WHERE id = $id";

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

  


      <header>
        <div>
            <img style="width: 100%;" src="../../../images/logo.png">
        </div>
      </header>
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <ul class="nav navbar-nav">
            <li><a href="../home.php?user=<?php echo $sdt?>">Home</a></li>
            <li><a href="../goiTap.php?user=<?php echo $sdt?>">Gói tập</a></li>
            <li class="active"><a href="../phanHoi.php?user=<?php echo $sdt?>">Phản hồi</a></li>
            <li><a href="../thongTinCaNhan/viewThongTin.php?user=<?php echo $sdt?>">Thông tin cá nhân</a></li>
            <li>
              <a style="text-align: right; background-color: red;color: white;margin-left: 1150px;" onclick="return confirm('Bạn có muốn đăng xuất không?')" href="../../../html/dangNhap.html"  >Đăng xuất</a>
            </li>
          </ul>
        </div>
      </nav>

        
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <ul class="nav navbar-nav">
            <li class="active"><a href="addPhanHoi.php?user=<?php echo $sdt?>">Viết phản hồi</a></li>
            <li><a href="viewPhanHoi.php?user=<?php echo $sdt?>">Xem phản hồi</a></li>

          </ul>
        </div>
      </nav>
    

      <div class="container">
        <h1>Viết phản hồi</h1>
        <form action="updatePhanHoi.php?user=<?php echo $sdt?>" method="post">
            <input type="hidden" name="sid" value="<?php echo $row['id']?>" id ="">
            <div class="form-group">
                <label for="noidung">Nội dung</label>
                <input type="text" name="noidung" id="noidung" class="form-control" value="<?php echo $row['noidung']?>">
            </div>
      
            <button type="submit" class="btn btn-info">Lưu</button>

        </form>
    </div>


</body>
</html>
   