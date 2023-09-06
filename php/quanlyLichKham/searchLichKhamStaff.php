
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
            <li ><a href="../../html/staff/Home.html">Home</a></li>
            <li><a href="../../html/staff/quanlyNguoiBenh.html">Quản lý người bệnh</a></li>
            <li class="active"><a href="../../html/staff/quanlyLichKham.html">Quản lý lịch khám</a></li>
            <li><a href="../../html/staff/quanlyLichTiem.html">Quản lý lịch tiêm</a></li>
            <li><a href="../../html/staff/quanlyThuoc.html">Quản lý thuốc</a></li>
            <li><a href="../../html/staff/quanlyVaccine.html">Quản lý vaccine</a></li>
            <li>
            <a style="text-align: right; background-color: rgb(48, 85, 219);color: white;margin-left: 1350px;" onclick="return confirm('Bạn có muốn đăng xuất không?')" href="../html/dangnhap.html"  >Đăng xuất</a>
            </li>
          </ul>
        </div>
      </nav>
    
      
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <ul class="nav navbar-nav">
            <li><a href="../../html/staff/quanLyLichKham/addLichKham.html">Thêm lịch khám</a></li>
            <li><a href="viewLichKhamStaff.php">Xem danh sách lịch khám</a></li>
            <li class="active"><a href="../../html/staff/quanLyLichKham/searchLichKham.html">Tìm kiếm lịch khám</a></li>
          </ul>
        </div>
      </nav>

            <div class="container">
            <h1>Tìm kiếm lịch khám</h1> 
            <form action="searchLichKhamStaff.php" method="post">
                <div class="form-group">
                    <input type="text" placeholder="Nhập nội dung khám, ngày khám" id ="key" class="form-control" name="key">
                </div>

                <button type="submit" class="btn btn-primary">Tìm kiếm</button>
            </form>      
                <table class="table table-striped">
                    <thead class="thead-style">
                        <tr>
                        <th>Nội dung khám</th>
                        <th>Ngày khám</th>
                        <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        //nhan du lieu tu form
                        $key = $_POST['key'];


                        //ket noi csdl
                        require_once '../connect.php';



                        $search_sql = "SELECT * FROM LichKham WHERE 
                        (noidungkham LIKE '%$key%')
                        OR (ngaykham LIKE '%$key%')
                        ";



                        $result = mysqli_query($conn, $search_sql);

                        while ($r = mysqli_fetch_assoc($result))
                        {
                        ?>
                            <tr>
                            <td><?php echo $r['noidungkham'] ?></td>
                            <td><?php echo $r['ngaykham'] ?></td>
                            <td><a href="editLichKhamStaff.php?sid=<?php echo $r['idLichKham'] ?>" class="btn btn-info">Sửa</a>
                             <a onclick="return confirm('Bạn có muốn xóa lịch khám này không?')" href="deleteLichKhamStaff.php?sid=<?php echo $r['idLichKham'] ?>" class="btn btn-danger">Xóa</a></td>
                            </tr>
                        <?php
                    }
                ?>

                </tbody>
            </table>

</body>
</html>