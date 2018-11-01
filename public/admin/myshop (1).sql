-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 01, 2018 lúc 08:02 PM
-- Phiên bản máy phục vụ: 10.1.36-MariaDB
-- Phiên bản PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `myshop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8 NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2018_10_29_153543_mgrt_tao_bang_loaisp', 2),
(3, '2018_10_29_153958_mgrt_tao_bang_sanpham', 2),
(4, '2018_10_29_154728_mgrt_tao_bang_ga', 2),
(5, '2018_10_29_155015_mgrt_tao_bang_bill', 2),
(6, '2018_10_29_155047_mgrt_tao_bang_ctbill', 2),
(7, '2018_10_29_160143_mgrt_tao_bang_baiviet', 2),
(8, '2018_10_29_160201_mgrt_tao_bang_slide', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblbaiviet`
--

CREATE TABLE `tblbaiviet` (
  `id` int(10) UNSIGNED NOT NULL,
  `tieude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblbill`
--

CREATE TABLE `tblbill` (
  `id` int(10) UNSIGNED NOT NULL,
  `idkh` int(11) NOT NULL,
  `tonggia` double NOT NULL,
  `ghichu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblctbill`
--

CREATE TABLE `tblctbill` (
  `id` int(10) UNSIGNED NOT NULL,
  `idbill` int(11) NOT NULL,
  `idsp` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `giasp` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblga`
--

CREATE TABLE `tblga` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblloaisp`
--

CREATE TABLE `tblloaisp` (
  `id` int(10) UNSIGNED NOT NULL,
  `tenloaisp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tblloaisp`
--

INSERT INTO `tblloaisp` (`id`, `tenloaisp`, `created_at`, `updated_at`) VALUES
(1, 'Vòng Gỗ', '2018-11-01 08:53:37', '2018-11-01 08:53:37'),
(2, 'Vòng Đá', '2018-11-01 08:53:44', '2018-11-01 08:53:44');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblsanpham`
--

CREATE TABLE `tblsanpham` (
  `id` int(10) UNSIGNED NOT NULL,
  `tensp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maloaisp` int(11) NOT NULL,
  `giasp` int(11) NOT NULL,
  `giakm` int(11) NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mota` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tblsanpham`
--

INSERT INTO `tblsanpham` (`id`, `tensp`, `maloaisp`, `giasp`, `giakm`, `img`, `mota`, `created_at`, `updated_at`) VALUES
(1, 'Sản phẩm 1', 1, 100, 0, 'YjMo__1 (1).jpg', 'dữ liệu mẫu', '2018-11-01 08:57:21', '2018-11-01 08:57:21'),
(2, 'Sản phẩm 2', 2, 100, 0, 'k1cK__1 (2).jpg', 'dữ liệu mẫu', '2018-11-01 09:02:04', '2018-11-01 09:02:04'),
(3, 'Sản phẩm 3', 1, 100, 0, 'S0vI__1 (3).jpg', 'dữ liệu mẫu', '2018-11-01 09:02:26', '2018-11-01 09:02:26'),
(4, 'Sản phẩm 4', 2, 100, 0, 'ak8j__1 (4).jpg', 'dữ liệu mẫu', '2018-11-01 09:02:43', '2018-11-01 09:02:43'),
(5, 'Sản phẩm 5', 1, 100, 0, 'R9xX__1 (5).jpg', 'dữ liệu mẫu', '2018-11-01 09:03:00', '2018-11-01 09:03:00'),
(6, 'Sản phẩm 6', 2, 100, 0, 'WMFr__1 (6).jpg', 'dữ liệu mẫu', '2018-11-01 09:03:21', '2018-11-01 09:03:21'),
(7, 'Sản phẩm 7', 1, 100, 0, 'ZhgI__1 (7).jpg', 'dữ liệu mẫu', '2018-11-01 09:03:34', '2018-11-01 09:03:34'),
(8, 'Sản phẩm 8', 2, 100, 0, 'cxMh__1 (8).jpg', 'dữ liệu mẫu', '2018-11-01 09:03:51', '2018-11-01 09:03:51'),
(9, 'Sản phẩm 9', 1, 100, 0, 'nnDG__1 (9).jpg', 'dữ liệu mẫu', '2018-11-01 09:04:15', '2018-11-01 09:04:15'),
(10, 'Sản phẩm 10', 2, 100, 0, 'EAJ3__1 (10).jpg', 'dữ liệu mẫu', '2018-11-01 09:04:31', '2018-11-01 09:04:31'),
(11, 'Sản phẩm 11', 1, 100, 0, 'vmO4__1 (11).jpg', 'dữ liệu mẫu', '2018-11-01 09:04:44', '2018-11-01 09:04:44'),
(12, 'Sản phẩm 12', 2, 100, 0, 't71s__1 (12).jpg', 'dữ liệu mẫu', '2018-11-01 09:05:01', '2018-11-01 09:05:01'),
(13, 'Sản phẩm 13', 1, 100, 0, '0aqn__1 (13).jpg', 'dữ liệu mẫu', '2018-11-01 09:05:13', '2018-11-01 09:05:13'),
(14, 'Sản phẩm 14', 2, 100, 0, 'zAmH__1 (14).jpg', 'dữ liệu mẫu', '2018-11-01 09:05:25', '2018-11-01 09:05:25'),
(15, 'Sản phẩm 15', 1, 100, 0, 'lERs__1 (15).jpg', 'dữ liệu mẫu', '2018-11-01 09:05:38', '2018-11-01 09:05:38'),
(16, 'Sản phẩm 16', 2, 100, 0, 'G4YM__1 (16).jpg', 'dữ liệu mẫu', '2018-11-01 09:05:53', '2018-11-01 09:05:53'),
(17, 'Sản phẩm 17', 1, 100, 0, 'LAnH__1 (17).jpg', 'dữ liệu mẫu', '2018-11-01 09:06:06', '2018-11-01 09:06:06'),
(18, 'Sản phẩm 18', 2, 100, 0, 'X4Z3__1 (18).jpg', 'dữ liệu mẫu', '2018-11-01 09:06:20', '2018-11-01 09:06:20'),
(19, 'Sản phẩm 19', 1, 100, 0, '6Fha__1 (19).jpg', 'dữ liệu mẫu', '2018-11-01 09:06:34', '2018-11-01 09:06:34'),
(20, 'Sản phẩm 20', 2, 100, 0, 'MdHl__1 (20).jpg', 'dữ liệu mẫu', '2018-11-01 09:06:48', '2018-11-01 09:06:48');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblslide`
--

CREATE TABLE `tblslide` (
  `id` int(10) UNSIGNED NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imgs` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tblbaiviet`
--
ALTER TABLE `tblbaiviet`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tblbill`
--
ALTER TABLE `tblbill`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tblctbill`
--
ALTER TABLE `tblctbill`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tblga`
--
ALTER TABLE `tblga`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tblloaisp`
--
ALTER TABLE `tblloaisp`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tblsanpham`
--
ALTER TABLE `tblsanpham`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tblslide`
--
ALTER TABLE `tblslide`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `tblbaiviet`
--
ALTER TABLE `tblbaiviet`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tblbill`
--
ALTER TABLE `tblbill`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tblctbill`
--
ALTER TABLE `tblctbill`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tblga`
--
ALTER TABLE `tblga`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tblloaisp`
--
ALTER TABLE `tblloaisp`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tblsanpham`
--
ALTER TABLE `tblsanpham`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `tblslide`
--
ALTER TABLE `tblslide`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
