-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2023 at 04:53 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `health`
--

-- --------------------------------------------------------

--
-- Table structure for table `LichKham`
--

CREATE TABLE `LichKham` (
  `idLichKham` bigint(20) NOT NULL,
  `noidungkham` varchar(255) NOT NULL,
  `ngaykham` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `LichKham`
--

INSERT INTO `LichKham` (`idLichKham`, `noidungkham`, `ngaykham`) VALUES
(111, 'Khám răng', '2023-07-16'),
(112, 'Khám mũi', '2023-07-22'),
(113, 'Khám bụng', '2023-07-23'),
(114, 'Khám tim', '2023-07-27'),
(115, 'Khám tổng quát', '2023-08-01');

-- --------------------------------------------------------

--
-- Table structure for table `LichTiem`
--

CREATE TABLE `LichTiem` (
  `idLichTiem` bigint(20) NOT NULL,
  `noidungtiem` varchar(255) NOT NULL,
  `ngaytiem` date NOT NULL,
  `idVaccine` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `LichTiem`
--

INSERT INTO `LichTiem` (`idLichTiem`, `noidungtiem`, `ngaytiem`, `idVaccine`) VALUES
(911, 'Tiêm phòng bệnh dại', '2023-07-20', 10001),
(912, 'Tiêm phòng bệnh dại', '2023-07-20', 10001),
(913, 'Tiêm phòng bệnh dại', '2023-07-20', 10001),
(914, 'Tiêm phòng cúm mùa', '2023-07-30', 10002),
(915, 'Tiêm phòng cúm mùa', '2023-07-30', 10002);

-- --------------------------------------------------------

--
-- Table structure for table `DKLichKham`
--

CREATE TABLE `DKLichKham` (
  `idDKLichKham` bigint(20) NOT NULL,
  `idNguoiBenh` bigint(20) NOT NULL,
  `idLichKham` bigint(20) NOT NULL,
  `trangthai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `DKLichKham`
--

INSERT INTO `DKLichKham` (`idDKLichKham`, `idNguoiBenh`, `idLichKham`, `trangthai`) VALUES
(1001, 1, 111, 'Đã xác nhận'),
(1002, 2, 112, 'Đã xác nhận'),
(1003, 3, 113, 'Đã xác nhận'),
(1004, 4, 114, 'Đã xác nhận'),
(1005, 5, 115, 'Đã xác nhận');

-- --------------------------------------------------------

--
-- Table structure for table `DKLichTiem`
--

CREATE TABLE `DKLichTiem` (
  `idDKLichTiem` bigint(20) NOT NULL,
  `idNguoiBenh` bigint(20) NOT NULL,
  `idLichTiem` bigint(20) NOT NULL,
  `trangthai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `DKLichTiem`
--

INSERT INTO `DKLichTiem` (`idDKLichTiem`, `idNguoiBenh`, `idLichTiem`, `trangthai`) VALUES
(2001, 1, 911, 'Đã xác nhận'),
(2002, 2, 912, 'Đã xác nhận'),
(2003, 3, 913, 'Đã xác nhận'),
(2004, 4, 914, 'Đã xác nhận'),
(2005, 5, 915, 'Đã xác nhận');
-- --------------------------------------------------------

--
-- Table structure for table `NguoiBenh`
--

CREATE TABLE `NguoiBenh` (
  `idNguoiBenh` bigint(20) NOT NULL,
  `hoten` varchar(50) NOT NULL,
  `sdt` varchar(20) NOT NULL,
  `gioitinh` varchar(50) NOT NULL,
  `ngaysinh` date NOT NULL,
  `diachi` varchar(50) NOT NULL,
  `cannang` float NOT NULL,
  `chieucao` float NOT NULL,
  `matkhau` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `NguoiBenh`
--

INSERT INTO `NguoiBenh` (`idNguoiBenh`, `hoten`, `sdt`, `gioitinh`, `ngaysinh`, `diachi`, `cannang`, `chieucao`, `matkhau`) VALUES
(1, 'Quách Đức Anh', '0000000001', 'Nam', '2012-08-24', 'Thanh Xuân, Hà Nội', '34', '134', 'quachducanh'),
(2, 'Lê Huỳnh Đức', '0000000002', 'Nam', '2012-08-14', 'Hai Bà Trưng, Hà Nội', '37', '134', 'lehuynhduc'),
(3, 'Lê Trung Hiếu', '0000000003', 'Nam', '2013-11-17', 'Hai Bà Trưng, Hà Nội', '36', '130', 'letrunghieu'),
(4, 'Nguyễn Trung Kiên', '0000000004', 'Nam', '2012-06-03', 'Hoàng Mai, Hà Nội', '32', '131', 'nguyentrungkien'),
(5, 'Trần Thu Trang', '0000000005', 'Nữ', '2014-02-20', 'Hai Bà Trưng, Hà Nội', '29', '130', 'tranthutrang'),
(6, 'Phạm Vân Anh', '0000000029', 'Nữ', '1990-10-30', 'Hoàn Kiếm, Hà Nội', '65', '161', 'phamvananh'),
(7, 'Nguyễn Hồng Vân', '0000000030', 'Nữ', '1992-07-01', 'Hai Bà Trưng, Hà Nội', '68', '162', 'nguyenhongvan');

-- --------------------------------------------------------

--
-- Table structure for table `NhanVien`
--

CREATE TABLE `NhanVien` (
  `idNhanVien` bigint(20) NOT NULL,
  `hoten` varchar(50) NOT NULL,
  `sdt` varchar(20) NOT NULL,
  `gioitinh` varchar(50) NOT NULL,
  `ngaysinh` date NOT NULL,
  `diachi` varchar(50) NOT NULL,
  `vitri` varchar(50) NOT NULL,
  `matkhau` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `NhanVien`
--

INSERT INTO `NhanVien` (`idNhanVien`, `hoten`, `sdt`, `gioitinh`, `ngaysinh`, `diachi`,`vitri`,`matkhau`) VALUES
(080, 'Nguyễn Hải Linh', '0123456789', 'Nam', '1993-12-12', 'Thanh Xuân, Hà Nội', 'Nhân viên tiêm chủng', 'nguyenhailinh'),
(081, 'Phạm Quang Huy', '0987654321', 'Nam', '1994-10-10', 'Hoàng Mai, Hà Nội', 'Nhân viên tiêm chủng', 'phamquanghuy'),
(089, 'Đặng Văn Thắng', '0234567891', 'Nam', '1988-11-11', 'Đống Đa, Hà Nội', 'Bác sĩ khám bệnh', 'dangvanthang'),
(090, 'Ngô Văn Nam', '0198765432', 'Nam', '1990-09-09', 'Hoàn Kiếm, Hà Nội', 'Bác sĩ khám bệnh', 'ngovannam'),
(091, 'Nguyễn Hoài Linh', '0345678912', 'Nữ', '1988-08-08', 'Hai Bà Trưng, Hà Nội', 'Bác sĩ khám bệnh', 'nguyenhoailinh');


-- --------------------------------------------------------

--
-- Table structure for table `PhanHoiLichTiem`
--

CREATE TABLE `PHLichTiem` (
  `idPHLichTiem` bigint(20) NOT NULL,
  `idLichTiem` bigint(20) NOT NULL,
  `idNhanVien` bigint(20) NOT NULL,
  `trieuchung` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `PhanHoiLichTiem`
--

INSERT INTO `PHLichTiem` (`idPHLichTiem`, `idLichTiem`, `idNhanVien`, `trieuchung`) VALUES
(101, 911, 080, 'Sốt nhẹ'),
(102, 912, 080, 'Không có triệu chứng'),
(103, 913, 080, 'Chóng mặt'),
(104, 914, 081, 'Không có triệu chứng'),
(105, 915, 081, 'Sốt nhẹ');

-- --------------------------------------------------------

--
-- Table structure for table `PhanHoiLichKham`
--

CREATE TABLE `PHLichKham` (
  `idPHLichKham` bigint(20) NOT NULL,
  `idLichKham` bigint(20) NOT NULL,
  `idNhanVien` bigint(20) NOT NULL,
  `idThuoc` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `PhanHoiLichKham`
--

INSERT INTO `PHLichKham` (`idPHLichKham`, `idLichKham`, `idNhanVien`, `idThuoc`) VALUES
(311, 111, 089, 99991),
(312, 112, 090, 99992),
(313, 113, 091, 99993),
(314, 114, 089, 99994),
(315, 115, 090, 99995);

-- --------------------------------------------------------

--
-- Table structure for table `Thuoc`
--

CREATE TABLE `Thuoc` (
  `idThuoc` bigint(20) NOT NULL,
  `tenthuoc` varchar(20) NOT NULL,
  `soluong` int(11) NOT NULL,
  `ngaynhap` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Thuoc`
--

INSERT INTO `Thuoc` (`idThuoc`, `tenthuoc`, `soluong`, `ngaynhap`) VALUES
(99995, 'PU005', 452, '2023-07-01'),
(99994, 'RQ006', 158, '2023-07-01'),
(99993, 'MC007', 237, '2023-07-01'),
(99992, 'KH008', 412, '2023-07-01'),
(99991, 'LI009', 296, '2023-07-10');

-- --------------------------------------------------------

--
-- Table structure for table `Vaccine`
--

CREATE TABLE `Vaccine` (
  `idVaccine` bigint(20) NOT NULL,
  `tenvaccine` varchar(20) NOT NULL,
  `soluong` int(11) NOT NULL,
  `ngaynhap` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Vaccine`
--

INSERT INTO `Vaccine` (`idVaccine`, `tenvaccine`, `soluong`, `ngaynhap`) VALUES
(10001, 'A01', 100, '2023-07-19'),
(10002, 'A02', 100, '2023-07-19'),
(10003, 'A03', 110, '2023-07-19'),
(10004, 'A04', 120, '2023-08-20'),
(10005, 'A05', 130, '2023-08-20');
--
-- Indexes for dumped tables
--

--
-- Indexes for table `LichKham`
--
ALTER TABLE `LichKham`
  ADD PRIMARY KEY (`idLichKham`);

--
-- Indexes for table `LichTiem`
--
ALTER TABLE `LichTiem`
  ADD PRIMARY KEY (`idLichTiem`);

--
-- Indexes for table `DKLichKham`
--
ALTER TABLE `DKLichKham`
  ADD PRIMARY KEY (`idDKLichKham`),
  ADD KEY `idNguoiBenh` (`idNguoiBenh`),
  ADD KEY `idLichKham` (`idLichKham`);

--
-- Indexes for table `DKLichTiem`
--
ALTER TABLE `DKLichTiem`
  ADD PRIMARY KEY (`idDKLichTiem`),
  ADD KEY `idNguoiBenh` (`idNguoiBenh`),
  ADD KEY `idLichTiem` (`idLichTiem`);

--
-- Indexes for table `NguoiBenh`
--
ALTER TABLE `NguoiBenh`
  ADD PRIMARY KEY (`idNguoiBenh`);

--
-- Indexes for table `NhanVien`
--
ALTER TABLE `NhanVien`
  ADD PRIMARY KEY (`idNhanVien`);

--
-- Indexes for table `PhanHoiLichTiem`
--
ALTER TABLE `PHLichTiem`
  ADD PRIMARY KEY (`idPHLichTiem`),
  ADD KEY `idLichTiem` (`idLichTiem`),
  ADD KEY `idNhanVien` (`idNhanVien`);

--
-- Indexes for table `PhanHoiLichKham`
--
ALTER TABLE `PHLichKham`
  ADD PRIMARY KEY (`idPHLichKham`),
  ADD KEY `idLichKham` (`idLichKham`),
  ADD KEY `idNhanVien` (`idNhanVien`);

--
-- Indexes for table `Thuoc`
--
ALTER TABLE `Thuoc`
  ADD PRIMARY KEY (`idThuoc`);

--
-- Indexes for table `Vaccine`
--
ALTER TABLE `Vaccine`
  ADD PRIMARY KEY (`idVaccine`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `LichKham`
--
ALTER TABLE `LichKham`
  MODIFY `idLichKham` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `LichTiem`
--
ALTER TABLE `LichTiem`
  MODIFY `idLichTiem` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `DKLichKham`
--
ALTER TABLE `DKLichKham`
  MODIFY `idDKLichKham` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `DKLichTiem`
--
ALTER TABLE `DKLichTiem`
  MODIFY `idDKLichTiem` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `NguoiBenh`
--
ALTER TABLE `NguoiBenh`
  MODIFY `idNguoiBenh` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `NhanVien`
--
ALTER TABLE `NhanVien`
  MODIFY `idNhanVien` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `PhanHoiLichTiem`
--
ALTER TABLE `PHLichTiem`
  MODIFY `idPHLichTiem` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `PhanHoiLichKham`
--
ALTER TABLE `PHLichKham`
  MODIFY `idPHLichKham` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `Thuoc`
--
ALTER TABLE `Thuoc`
  MODIFY `idThuoc` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `Vaccine`
--
ALTER TABLE `Vaccine`
  MODIFY `idVaccine` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `DKLichKham`
--
ALTER TABLE `DKLichKham`
  ADD CONSTRAINT `dklichkham_ibfk_1` FOREIGN KEY (`idLichKham`) REFERENCES `LichKham` (`idLichKham`),
  ADD CONSTRAINT `dklichkham_ibfk_2` FOREIGN KEY (`idNguoiBenh`) REFERENCES `NguoiBenh` (`idNguoiBenh`);
COMMIT;

--
-- Constraints for table `DKLichTiem`
--
ALTER TABLE `DKLichTiem`
  ADD CONSTRAINT `dklichtiem_ibfk_3` FOREIGN KEY (`idLichTiem`) REFERENCES `LichTiem` (`idLichTiem`),
  ADD CONSTRAINT `dklichtiem_ibfk_4` FOREIGN KEY (`idNguoiBenh`) REFERENCES `NguoiBenh` (`idNguoiBenh`);
COMMIT;

--
-- Constraints for table `PHLichTiem`
--
ALTER TABLE `PHLichTiem`
  ADD CONSTRAINT `phlichtiem_ibfk_5` FOREIGN KEY (`idLichTiem`) REFERENCES `LichTiem` (`idLichTiem`),
  ADD CONSTRAINT `phlichtiem_ibfk_6` FOREIGN KEY (`idNhanVien`) REFERENCES `NhanVien` (`idNhanVien`);
COMMIT;

--
-- Constraints for table `PHLichKham`
--
ALTER TABLE `PHLichKham`
  ADD CONSTRAINT `phlichkham_ibfk_7` FOREIGN KEY (`idLichKham`) REFERENCES `LichKham` (`idLichKham`),
  ADD CONSTRAINT `phlichkham_ibfk_8` FOREIGN KEY (`idNhanVien`) REFERENCES `NhanVien` (`idNhanVien`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
