<?php

require_once '../../connect.php';

$sdt = $_GET['user'];

$search_khach = "SELECT * FROM hoivien WHERE (sdt = '$sdt')";

$query = mysqli_query($conn, $search_khach);

while ($r0 = mysqli_fetch_assoc($query))
{
    $idhoivien =$r0['id'];
    
};

$view_sql="SELECT * FROM phanhoi WHERE idhoivien = $idhoivien ";

$result = mysqli_query($conn, $view_sql);

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
            <li><a href="addPhanHoi.php?user=<?php echo $sdt?>">Viết phản hồi</a></li>
            <li class="active"><a href="viewPhanHoi.php?user=<?php echo $sdt?>">Xem phản hồi</a></li>

          </ul>
        </div>
      </nav>
    
      <div class="container">      
            <table class="table table-striped">
                <thead class="thead-style">
                <tr>
                    <th>Nội dung</th>
                    <th>Thao tác</th>
                </tr>
                </thead>
                <tbody>
      
                <?php
                while ($r = mysqli_fetch_assoc($result))
                {
                  ?>
                        <tr>
                            <td><?php echo $r['noidung'] ?></td>

                            <td><a href="editPhanHoi.php?sid=<?php echo $r['id']?>&user=<?php echo $sdt?>" class="btn btn-info">Sửa</a>
                             <a onclick="return confirm('Bạn có muốn xóa phản hồi này không?')" href="deletePhanHoi.php?sid=<?php echo $r['id'] ?>&user=<?php echo $sdt?>" class="btn btn-danger">Xóa</a></td>
                        </tr>
                        <?php
                    }
                ?>

                </tbody>
            </table>


    </div>
    <style>
    .header{
        position: fixed;
    }
    .thead-style {
        background-color: black;
        color: white;
    }
    </style>


</body>
</html>
   