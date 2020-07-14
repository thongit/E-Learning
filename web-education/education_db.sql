-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 14, 2020 lúc 10:42 AM
-- Phiên bản máy phục vụ: 10.4.6-MariaDB
-- Phiên bản PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `education_db`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bai_kiem_tra`
--

CREATE TABLE `bai_kiem_tra` (
  `id` int(10) UNSIGNED NOT NULL,
  `thoi_gian_lam` int(11) NOT NULL,
  `chuong_id` int(11) NOT NULL,
  `ten_bai_kt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_de_kt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trang_thai` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bai_kiem_tra`
--

INSERT INTO `bai_kiem_tra` (`id`, `thoi_gian_lam`, `chuong_id`, `ten_bai_kt`, `file_de_kt`, `trang_thai`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 30, 1, 'Ngữ âm cơ bản', 'https://bitly.com.vn/NGoDL', 1, '2020-07-14 00:35:27', '2020-07-14 00:35:27', NULL),
(2, 30, 1, 'Ngữ âm nâng cao', 'https://bitly.com.vn/NGoDL', 1, '2020-07-14 00:35:27', '2020-07-14 00:35:27', NULL),
(3, 30, 2, 'Describing your job', 'https://bitly.com.vn/NGoDL', 1, '2020-07-14 00:35:27', '2020-07-14 00:35:27', NULL),
(4, 30, 2, 'Teamwork problem on the job', 'https://bitly.com.vn/NGoDL', 1, '2020-07-14 00:35:27', '2020-07-14 00:35:27', NULL),
(5, 30, 2, 'Working abroad', 'https://bitly.com.vn/NGoDL', 1, '2020-07-14 00:35:27', '2020-07-14 00:35:27', NULL),
(6, 30, 2, 'Giving Feedback', 'https://bitly.com.vn/NGoDL', 1, '2020-07-14 00:35:27', '2020-07-14 00:35:27', NULL),
(7, 30, 3, 'Choosing a college', 'https://bitly.com.vn/NGoDL', 1, '2020-07-14 00:35:27', '2020-07-14 00:35:27', NULL),
(8, 30, 3, 'Talking about examination', 'https://bitly.com.vn/NGoDL', 1, '2020-07-14 00:35:27', '2020-07-14 00:35:27', NULL),
(9, 30, 3, 'Preparing for school', 'https://bitly.com.vn/NGoDL', 1, '2020-07-14 00:35:27', '2020-07-14 00:35:27', NULL),
(10, 30, 3, 'The subjects you hate', 'https://bitly.com.vn/NGoDL', 1, '2020-07-14 00:35:28', '2020-07-14 00:35:28', NULL),
(11, 30, 3, 'Making new friends at school', 'https://bitly.com.vn/NGoDL', 1, '2020-07-14 00:35:28', '2020-07-14 00:35:28', NULL),
(12, 30, 4, 'Private schools or public schools', 'https://bitly.com.vn/NGoDL', 1, '2020-07-14 00:35:28', '2020-07-14 00:35:28', NULL),
(13, 30, 4, 'Talking about scholarships', 'https://bitly.com.vn/NGoDL', 1, '2020-07-14 00:35:28', '2020-07-14 00:35:28', NULL),
(14, 30, 4, ' After-school activities', 'https://bitly.com.vn/NGoDL', 1, '2020-07-14 00:35:28', '2020-07-14 00:35:28', NULL),
(15, 30, 5, 'Family', 'https://bitly.com.vn/NGoDL', 1, '2020-07-14 00:35:28', '2020-07-14 00:35:28', NULL),
(16, 30, 5, 'Daily routine', 'https://bitly.com.vn/NGoDL', 1, '2020-07-14 00:35:28', '2020-07-14 00:35:28', NULL),
(17, 30, 5, 'Shopping', 'https://bitly.com.vn/NGoDL', 1, '2020-07-14 00:35:28', '2020-07-14 00:35:28', NULL),
(18, 30, 6, 'Lộ trình học', 'https://bitly.com.vn/NGoDL', 1, '2020-07-14 00:35:28', '2020-07-14 00:35:28', NULL),
(19, 30, 8, 'Những lỗi thường gặp liên quan đến mạo từ và dấu câu', 'https://bitly.com.vn/NGoDL', 1, '2020-07-14 00:35:28', '2020-07-14 00:35:28', NULL),
(20, 30, 8, 'Những lỗi thường gặp liên quan đến từ loại', 'https://bitly.com.vn/NGoDL', 1, '2020-07-14 00:35:28', '2020-07-14 00:35:28', NULL),
(21, 30, 8, 'Cách dùng những từ hay gây nhầm lẫn', 'https://bitly.com.vn/NGoDL', 1, '2020-07-14 00:35:28', '2020-07-14 00:35:28', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chuong`
--

CREATE TABLE `chuong` (
  `id` int(10) UNSIGNED NOT NULL,
  `khoa_hoc_id` int(11) NOT NULL,
  `ten_chuong` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thoi_gian` int(11) NOT NULL,
  `trang_thai` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ct_hoa_don`
--

CREATE TABLE `ct_hoa_don` (
  `id` int(10) UNSIGNED NOT NULL,
  `khoa_hoc_id` int(11) NOT NULL,
  `hoa_don_id` int(11) NOT NULL,
  `ma_kich_hoat` int(11) NOT NULL,
  `trang_thai` int(11) NOT NULL,
  `tien_do` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ct_hoa_don`
--

INSERT INTO `ct_hoa_don` (`id`, `khoa_hoc_id`, `hoa_don_id`, `ma_kich_hoat`, `trang_thai`, `tien_do`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 50, 1, 4234541, 1, 1, '2020-07-14 00:21:51', '2020-07-14 00:21:51', NULL),
(2, 50, 1, 4234541, 1, 1, '2020-07-14 00:33:33', '2020-07-14 00:33:33', NULL),
(3, 48, 2, 4234542, 1, 1, '2020-07-14 00:33:34', '2020-07-14 00:33:34', NULL),
(4, 47, 3, 4234543, 1, 1, '2020-07-14 00:33:34', '2020-07-14 00:33:34', NULL),
(5, 57, 4, 4234544, 1, 1, '2020-07-14 00:33:34', '2020-07-14 00:33:34', NULL),
(6, 59, 5, 4234545, 1, 1, '2020-07-14 00:33:34', '2020-07-14 00:33:34', NULL),
(7, 36, 6, 4234546, 1, 1, '2020-07-14 00:33:34', '2020-07-14 00:33:34', NULL),
(8, 38, 7, 4234547, 1, 1, '2020-07-14 00:33:34', '2020-07-14 00:33:34', NULL),
(9, 38, 8, 4234548, 1, 1, '2020-07-14 00:33:34', '2020-07-14 00:33:34', NULL),
(10, 5, 9, 4234549, 1, 1, '2020-07-14 00:33:34', '2020-07-14 00:33:34', NULL),
(11, 6, 10, 42345410, 1, 1, '2020-07-14 00:33:34', '2020-07-14 00:33:34', NULL),
(12, 28, 11, 42345411, 1, 1, '2020-07-14 00:33:35', '2020-07-14 00:33:35', NULL),
(13, 41, 12, 42345412, 1, 1, '2020-07-14 00:33:35', '2020-07-14 00:33:35', NULL),
(14, 48, 13, 42345413, 1, 1, '2020-07-14 00:33:35', '2020-07-14 00:33:35', NULL),
(15, 9, 14, 42345414, 1, 1, '2020-07-14 00:33:35', '2020-07-14 00:33:35', NULL),
(16, 4, 15, 42345415, 1, 1, '2020-07-14 00:33:35', '2020-07-14 00:33:35', NULL),
(17, 3, 16, 42345416, 1, 1, '2020-07-14 00:33:35', '2020-07-14 00:33:35', NULL),
(18, 8, 17, 42345417, 1, 1, '2020-07-14 00:33:35', '2020-07-14 00:33:35', NULL),
(19, 52, 18, 42345418, 1, 1, '2020-07-14 00:33:35', '2020-07-14 00:33:35', NULL),
(20, 57, 19, 42345419, 1, 1, '2020-07-14 00:33:35', '2020-07-14 00:33:35', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danh_gia_kh`
--

CREATE TABLE `danh_gia_kh` (
  `id` int(10) UNSIGNED NOT NULL,
  `nguoi_dung_id` int(11) NOT NULL,
  `so_sao` int(11) NOT NULL,
  `noi_dung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `khoa_hoc_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoa_don`
--

CREATE TABLE `hoa_don` (
  `id` int(10) UNSIGNED NOT NULL,
  `tong_tien` int(11) NOT NULL,
  `nguoi_dung_id` int(11) NOT NULL,
  `trang_thai` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ketqua_kt`
--

CREATE TABLE `ketqua_kt` (
  `id` int(10) UNSIGNED NOT NULL,
  `nguoi_dung_id` int(11) NOT NULL,
  `diem` double(8,2) NOT NULL,
  `bai_kiem_tra_id` int(11) NOT NULL,
  `bai_lam` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khoa_hoc`
--

CREATE TABLE `khoa_hoc` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten_khoa_hoc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gia` int(11) NOT NULL,
  `nguoi_dung_id` int(11) NOT NULL,
  `linh_vuc_id` int(11) NOT NULL,
  `trang_thai` int(11) NOT NULL,
  `hinh_anh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mo_ta_chi_tiet` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngon_ngu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `muc_do` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mo_ta_ngan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `linh_vuc`
--

CREATE TABLE `linh_vuc` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten_linh_vuc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2020_07_07_083319_create_table_linh_vuc', 1),
(2, '2020_07_07_083409_create_table_khoa_hoc', 1),
(3, '2020_07_07_083443_create_table_noi_dung', 1),
(4, '2020_07_07_083507_create_table_chuong', 1),
(5, '2020_07_07_083550_create_table_bai_kiem_tra', 1),
(6, '2020_07_07_083652_create_table_ket_qua_kt', 1),
(7, '2020_07_07_083815_create_table_the_ngan_hang', 1),
(8, '2020_07_07_083852_create_table_to_chuc', 1),
(9, '2020_07_07_083922_create_table_hoa_don', 1),
(10, '2020_07_07_083946_create_table_ct_hoa_don', 1),
(11, '2020_07_07_084205_create_table_nguoi_dung', 1),
(12, '2020_07_07_084246_create_table_nhan_tin', 1),
(13, '2020_07_07_084325_create_table_danh_gia_kh', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoi_dung`
--

CREATE TABLE `nguoi_dung` (
  `id` int(10) UNSIGNED NOT NULL,
  `ho_ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mat_khau` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `loai_tk` int(11) NOT NULL,
  `cmnd` int(11) NOT NULL,
  `sdt` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nguoi_dung`
--

INSERT INTO `nguoi_dung` (`id`, `ho_ten`, `email`, `mat_khau`, `loai_tk`, `cmnd`, `sdt`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Nguyễn Thị Thảo Vy', 'thaovy@gmail.com', '$2y$10$z3duKBWvRe2hk6R2NXc6teOLQQHgpNHIltX6GaiXyhHZsUOguM.au', 2, 948193116, 337263548, '2020-07-12 20:22:26', '2020-07-12 20:22:26', NULL),
(2, 'Lê Văn Trung', 'trungle@gmail.com', '$2y$10$mAl6RGe7.wbRlQHHri80SeiGJ/6aDEZ/YYXPBNlJ8Be1sn9wadZI.', 2, 718285244, 394726374, '2020-07-12 20:22:26', '2020-07-12 20:22:26', NULL),
(3, 'Trần Văn Hưng', 'hungtran@gmail.com', '$2y$10$BO3vCNucJaVTcqEwlsOTjOPA67N5T5vLBs8D.6dTbPTCOobuixxTG', 2, 803086715, 307748392, '2020-07-12 20:22:26', '2020-07-12 20:22:26', NULL),
(4, 'Nguyễn Thị Tý', 'tynguyen@gmail.com', '$2y$10$NxD/VpZK6soZPZgE2KCP8uDkBpbXOxqipAK/MA/nrnZ.o8bNct8bS', 2, 274534586, 347263849, '2020-07-12 20:22:26', '2020-07-12 20:22:26', NULL),
(5, 'Nguyễn Thị Mai', 'mainguyen@gmail.com', '$2y$10$vvTqWMMx/1SIrofYJYN8T.X451rd.5txKYmoNt.QY4bsfoAyavzsy', 2, 179510764, 394726374, '2020-07-12 20:22:27', '2020-07-12 20:22:27', NULL),
(6, 'Mai Tiến Dũng', 'dungmai@gmail.com', '$2y$10$Wden8ThHZwHq2z1IH/ER9OxemHbdTV/W.O03SyAKAHijx99c1XW3i', 2, 718285244, 316253748, '2020-07-12 20:22:27', '2020-07-12 20:22:27', NULL),
(7, 'Hồ Quang Hiếu', 'hieuho@gmail.com', '$2y$10$6hC3F309XXWIrML0tLgkqe3w1GDZ/tRVPw0GFdhp9Nn5gy7O/eV4C', 2, 870449836, 382746385, '2020-07-12 20:22:27', '2020-07-12 20:22:27', NULL),
(8, 'Mai Tường Vy', 'vymai@gmail.com', '$2y$10$MDCmyE891ItyFUoYIZz9WegxPeYQDzty4iC7DE1oWTk8.fTO3nUFG', 2, 579490572, 384727485, '2020-07-12 20:22:27', '2020-07-12 20:22:27', NULL),
(9, 'Nguyễn Thị Oanh', 'oanhnguyen@gmail.com', '$2y$10$ruWyb.fP7GPeMinnRY1.iOvy2yOUTyNNI7bC0Ob8ZaasD/RmfT3Aa', 2, 936039849, 374827498, '2020-07-12 20:22:27', '2020-07-12 20:22:27', NULL),
(10, 'Nguyễn Văn Trọng', 'trongnguyen@gmail.com', '$2y$10$xRAKn49wAQasVth.efxzB.1kvB5RbDk6VJ2RZKrCSkdKf0foPdx6u', 2, 163790696, 386473677, '2020-07-12 20:22:27', '2020-07-12 20:22:27', NULL),
(11, 'Phạm Văn Tuấn', 'tuanpham@gmail.com', '$2y$10$tKI/fG4F2CkSh3D2KledxO5raK1Tki4l4sB9MnH87msQWnvHpwbCO', 2, 297282585, 374873847, '2020-07-12 20:22:27', '2020-07-12 20:22:27', NULL),
(12, 'Nguyễn Tấn Hậu', 'haunguyen@gmail.com', '$2y$10$lkCOVODMsrAZd2RgI7KhHeOGk2LcZiSaXMHbRe093PqfS3vqtHSO2', 2, 475176537, 337263548, '2020-07-12 20:22:27', '2020-07-12 20:22:27', NULL),
(13, 'Mai Thị Nhi', 'nhimai@gmail.com', '$2y$10$n15NxUJozFENlVL78t7OduLG7vH/09EAxrgOYjX7TSe2Fn5Pz50Du', 2, 905546743, 394726374, '2020-07-12 20:22:27', '2020-07-12 20:22:27', NULL),
(14, 'Trương Văn Hiền', 'hientruong@gmail.com', '$2y$10$eF1iHO6HdzcP0GqoO4JQ/.IvSD1EK57o/DNYGCZAwckCSFhF2BRJa', 2, 649649097, 307748392, '2020-07-12 20:22:28', '2020-07-12 20:22:28', NULL),
(15, 'Nguyễn Ngọc Tiến', 'tiennguyen@gmail.com', '$2y$10$PZI5T3UcBCFSNenz9DvkpOvijQeJZssjltLAmUEkhO28XbunTA35K', 2, 269506855, 347263849, '2020-07-12 20:22:28', '2020-07-12 20:22:28', NULL),
(16, 'Lê Thị Tú Trinh', 'trinhnguyen@gmail.com', '$2y$10$j6S8rEVVM4nR8ocm6xC3xeQSXhmMLbKg7B3oX7FUzsPvrXS9TDQV.', 2, 672147386, 382743846, '2020-07-12 20:22:28', '2020-07-12 20:22:28', NULL),
(17, 'Khổng Thị Thu Nhạn', 'nhankhong@gmail.com', '$2y$10$kE50yduLWbVZUmIduMiM2ejwOgZpYFbaA6ZpmrtmbbQwBhg1bqlQS', 2, 650967267, 316253748, '2020-07-12 20:22:28', '2020-07-12 20:22:28', NULL),
(18, 'Nguyễn Thu Trang', 'trangnguyen@gmail.com', '$2y$10$vfxSw949gDaNmQwPSxhlVO/M79c.ziv7tZZcYVcjfwIJIXabwd.x2', 2, 441538403, 382746385, '2020-07-12 20:22:28', '2020-07-12 20:22:28', NULL),
(19, 'Lê Văn Biểu', 'bieule@gmail.com', '$2y$10$MN.8qjuYbK..HqNmu3ayQe6xc0or8cpquq6yT.FubWlN4zJ7GAu7e', 2, 340934015, 384727485, '2020-07-12 20:22:28', '2020-07-12 20:22:28', NULL),
(20, 'Nguyễn Tuyết Trinh', 'tuyettrinh@gmail.com', '$2y$10$VRYkOXNI0iZtCW11OcyqX.8u0mzsa7XMrtwE2qwwmybxlJvmw3pVm', 2, 637162094, 374827498, '2020-07-12 20:22:28', '2020-07-12 20:22:28', NULL),
(21, 'Lý Tiểu Long', 'longnguyen@gmail.com', '$2y$10$NA12y6eY.RDSoqGP0G8yfuBHFQOIty5rgIM87GHjhcVXJV4OKIod2', 2, 775885447, 386473677, '2020-07-12 20:22:28', '2020-07-12 20:22:28', NULL),
(22, 'Phan Thành Nam', 'namphan@gmail.com', '$2y$10$2dJ63G/JiDfTDwwF2AfCEeKQcwlsKbc/iT/AtFkO6IXZEk40RGaUO', 2, 506665813, 374873847, '2020-07-12 20:22:28', '2020-07-12 20:22:28', NULL),
(23, 'Trịnh Minh Linh', 'minhlinh@gmail.com', '$2y$10$LeLpYE.VNpELPdJ3ohRkguvFDSq2e/UNCxVkBrQwOXQ24811900QG', 2, 277249083, 384727674, '2020-07-12 20:22:29', '2020-07-12 20:22:29', NULL),
(24, 'Nguyễn Văn Long', 'longnguyen@gmail.com', '$2y$10$Q8r5TXqBdA4wFid5mFRiluJCo7krUhd34YwQ80yYjyWTfLgXpk2S2', 2, 863878138, 384743745, '2020-07-12 20:22:29', '2020-07-12 20:22:29', NULL),
(25, 'Mai Văn Phước', 'phuocmai@gmail.com', '$2y$10$xYoo1SYibHbPOH4gtai8Zea7MbrP1x5GD4LdRTqjMi5RVu49q8A92', 2, 489196705, 937473744, '2020-07-12 20:22:29', '2020-07-12 20:22:29', NULL),
(26, 'Nguyễn Công Phượng', 'phuongnguyen@gmail.com', '$2y$10$QjQp8iWRzg.CPQC40D3LE.T2LXgB52BGefeXUcl8u/y01aOuMM.gm', 2, 290653437, 947364785, '2020-07-12 20:22:29', '2020-07-12 20:22:29', NULL),
(27, 'Trương Minh Quí', 'minhqui1999tmt@gmail.com', '$2y$10$IPLjRKHajfBOIR5t0uByOeZNyUdcJA2rvAibNLdSsXolJ5222dKy2', 3, 959043933, 388594875, '2020-07-12 20:22:29', '2020-07-12 20:22:29', NULL),
(28, 'Nguyễn Hữu Thông', 'huuthongit@gmail.com', '$2y$10$yfMLdPxTtGGLKdKZD/nTwOIBYLNaoAUlrHppIW5K99AM1MDB0WozG', 3, 863878138, 384743745, '2020-07-12 20:22:29', '2020-07-12 20:22:29', NULL),
(29, 'Pham Bảo Thiện', 'baothienit@gmail.com', '$2y$10$93zu/QILC0xbohAlJGjlz.X8F6K5X.bc8aNoEKCHDT4Zb3qq0coQO', 2, 863878138, 384743745, '2020-07-12 20:22:29', '2020-07-12 20:22:29', NULL),
(30, 'Võ Minh Tân', 'minhtant@gmail.com', '$2y$10$1efYUhFJmJ50iaTut3d2JuphnZFQgwzuQBu3yRY3wtAwypKM8vUPS', 2, 863878138, 384743745, '2020-07-12 20:22:29', '2020-07-12 20:22:29', NULL),
(31, 'Nguyễn Minh Triết', 'trietnguyen@gmail.com', '$2y$10$j7qTM7e1GwQE9fVCcjw3ye.1yrgvZ97lEaT596jXz26sPZQZgSqke', 1, 740868987, 387589948, '2020-07-12 20:22:30', '2020-07-12 20:22:30', NULL),
(32, 'Nguyễn Thị Thảo Vy', 'thaovy@gmail.com', '$2y$10$YyPBgKAbrNlfie8BHh2ln.wQc2iiomF3AVc2LDyHM5uIAZkASsLN.', 2, 948193116, 337263548, '2020-07-14 00:34:59', '2020-07-14 00:34:59', NULL),
(33, 'Lê Văn Trung', 'trungle@gmail.com', '$2y$10$HPC7BqAu.x1X9t6G1G2afOObH2VsGyzKFiLVmXw7tx5xl6uiwLoge', 2, 718285244, 394726374, '2020-07-14 00:34:59', '2020-07-14 00:34:59', NULL),
(34, 'Trần Văn Hưng', 'hungtran@gmail.com', '$2y$10$zda3YH4tTNR0MxftCLf7C.K7mhP4hxNK40LSBEPzh6sM.OCrQ18ti', 2, 803086715, 307748392, '2020-07-14 00:34:59', '2020-07-14 00:34:59', NULL),
(35, 'Nguyễn Thị Tý', 'tynguyen@gmail.com', '$2y$10$dvHd6VGdIKuVMuSsNewSluHUrgWWmxT3/lwoD5f3aAf8WBozGtsdS', 2, 274534586, 347263849, '2020-07-14 00:34:59', '2020-07-14 00:34:59', NULL),
(36, 'Nguyễn Thị Mai', 'mainguyen@gmail.com', '$2y$10$Oc5W/k.aumLlo3.6bA/eVez5SfH1fl7UmtsS8tBopm.EDB3fMU9Z.', 2, 179510764, 394726374, '2020-07-14 00:34:59', '2020-07-14 00:34:59', NULL),
(37, 'Mai Tiến Dũng', 'dungmai@gmail.com', '$2y$10$BW8BGhXupX4gqeKyWqzujOYiEpFplMKpdP04RJzp5Np/YtgEgCXpG', 2, 718285244, 316253748, '2020-07-14 00:34:59', '2020-07-14 00:34:59', NULL),
(38, 'Hồ Quang Hiếu', 'hieuho@gmail.com', '$2y$10$6ePe0sT1c1C6Z4Cl0NF2E.3PT9tZ5GPWe6AE6RrVQTqWI4SDO5nb.', 2, 870449836, 382746385, '2020-07-14 00:35:00', '2020-07-14 00:35:00', NULL),
(39, 'Mai Tường Vy', 'vymai@gmail.com', '$2y$10$dbDQOrxqo9b4h9iwTyBDw.897Hum3c9K3qFH4WDBdlpZVMlBQtAWi', 2, 579490572, 384727485, '2020-07-14 00:35:00', '2020-07-14 00:35:00', NULL),
(40, 'Nguyễn Thị Oanh', 'oanhnguyen@gmail.com', '$2y$10$tCP8DLaic2IIJSM34jS6dudOTEKt/yf7bZt.F9zZk5n64mrm4e3f2', 2, 936039849, 374827498, '2020-07-14 00:35:00', '2020-07-14 00:35:00', NULL),
(41, 'Nguyễn Văn Trọng', 'trongnguyen@gmail.com', '$2y$10$n//nVq66Qp/P1/4rkntBXec.sj3Y4ZADgs8wIwWklM7jpfJa73kui', 2, 163790696, 386473677, '2020-07-14 00:35:00', '2020-07-14 00:35:00', NULL),
(42, 'Phạm Văn Tuấn', 'tuanpham@gmail.com', '$2y$10$SR42wChoSc/ZnjrXv0gLV.py68NtExaQLBjX43.EW/ldGukCob622', 2, 297282585, 374873847, '2020-07-14 00:35:00', '2020-07-14 00:35:00', NULL),
(43, 'Nguyễn Tấn Hậu', 'haunguyen@gmail.com', '$2y$10$NwauU/tArVyNdp9xkyIFVuXntp98LaTEylcAcIywQtV4uBDu.nTaG', 2, 475176537, 337263548, '2020-07-14 00:35:00', '2020-07-14 00:35:00', NULL),
(44, 'Mai Thị Nhi', 'nhimai@gmail.com', '$2y$10$HODc.H8Kz/Y7LDb8sZE7TuVLQkNf1n0604hheTxY8lRunpjicDRhS', 2, 905546743, 394726374, '2020-07-14 00:35:00', '2020-07-14 00:35:00', NULL),
(45, 'Trương Văn Hiền', 'hientruong@gmail.com', '$2y$10$nCuuWUPvudVaAG2bUvcsL.4X3M5BV1ckGjANEwMeHDv7M1YAvXb0O', 2, 649649097, 307748392, '2020-07-14 00:35:00', '2020-07-14 00:35:00', NULL),
(46, 'Nguyễn Ngọc Tiến', 'tiennguyen@gmail.com', '$2y$10$LnEUn2GasTuIC29Ym2HlB.seKqSakvM5sDeZkfGaF9DcLOtVgDZoy', 2, 269506855, 347263849, '2020-07-14 00:35:01', '2020-07-14 00:35:01', NULL),
(47, 'Lê Thị Tú Trinh', 'trinhnguyen@gmail.com', '$2y$10$OyNbIPhr7.06qSFN7WZtPuZU7j3M5hDcPoaQAasNpL1A5qc3cJv3i', 2, 672147386, 382743846, '2020-07-14 00:35:01', '2020-07-14 00:35:01', NULL),
(48, 'Khổng Thị Thu Nhạn', 'nhankhong@gmail.com', '$2y$10$.TBfYwPQ8UEX9SgjtSIpyOr11nm2ykYh8vnwA3LwTD9iwiotpN2.e', 2, 650967267, 316253748, '2020-07-14 00:35:01', '2020-07-14 00:35:01', NULL),
(49, 'Nguyễn Thu Trang', 'trangnguyen@gmail.com', '$2y$10$PojdIRhaOGgP3KUBUFeh1u/otvT16A93385R5YD6cr.8S04BWiWV6', 2, 441538403, 382746385, '2020-07-14 00:35:01', '2020-07-14 00:35:01', NULL),
(50, 'Lê Văn Biểu', 'bieule@gmail.com', '$2y$10$R6n7MvaQb.He6Z465hhip.4f9o9hPZILIJmZS2/zYngIsGFtn/XT2', 2, 340934015, 384727485, '2020-07-14 00:35:01', '2020-07-14 00:35:01', NULL),
(51, 'Nguyễn Tuyết Trinh', 'tuyettrinh@gmail.com', '$2y$10$GVgycMZ2eSLlDtlZquNScukeAGaUIjMEQmCLupMkYOt0iV3RUmCFS', 2, 637162094, 374827498, '2020-07-14 00:35:01', '2020-07-14 00:35:01', NULL),
(52, 'Lý Tiểu Long', 'longnguyen@gmail.com', '$2y$10$97locuv1KiB0DF8U6ye9GuthEJMM6qZbSjTTpPiYfcryVpGeiZo/.', 2, 775885447, 386473677, '2020-07-14 00:35:01', '2020-07-14 00:35:01', NULL),
(53, 'Phan Thành Nam', 'namphan@gmail.com', '$2y$10$V8XCkNWdrgxJrumwIdBA8.Z/bGKFNtFAN/iKnRdIDS9sRp5XFEVOu', 2, 506665813, 374873847, '2020-07-14 00:35:01', '2020-07-14 00:35:01', NULL),
(54, 'Trịnh Minh Linh', 'minhlinh@gmail.com', '$2y$10$eAHsbU4ba4y36P/CC5MhquylBgDslqBMtov8lqMZ64vdIXBky2NJW', 2, 277249083, 384727674, '2020-07-14 00:35:01', '2020-07-14 00:35:01', NULL),
(55, 'Nguyễn Văn Long', 'longnguyen@gmail.com', '$2y$10$Mn8NF0p4quoOchFn4jgleubryX1LZmlZvifsBFY5F7kG8jsyr4iHS', 2, 863878138, 384743745, '2020-07-14 00:35:02', '2020-07-14 00:35:02', NULL),
(56, 'Mai Văn Phước', 'phuocmai@gmail.com', '$2y$10$xgFcap3Y.H.RxLoSMW5dI.NUBc4um54Pd0b2UTUXR665G2nZCTfO6', 2, 489196705, 937473744, '2020-07-14 00:35:02', '2020-07-14 00:35:02', NULL),
(57, 'Nguyễn Công Phượng', 'phuongnguyen@gmail.com', '$2y$10$oBbFPaa66MbGCYtNP0p1T.2Ey57DjVvX288Ou56/hCjRY.IXkJ0fm', 2, 290653437, 947364785, '2020-07-14 00:35:02', '2020-07-14 00:35:02', NULL),
(58, 'Trương Minh Quí', 'minhqui1999tmt@gmail.com', '$2y$10$JMWLINSoRnhyBwU06d7V4uEwwZkUPOahyPLj9EM7esDJRekilb5vC', 3, 959043933, 388594875, '2020-07-14 00:35:02', '2020-07-14 00:35:02', NULL),
(59, 'Nguyễn Hữu Thông', 'huuthongit@gmail.com', '$2y$10$IOUbtWI058.OoFQpCpoYYe2fbKeKwogwSqmD9It8681if3F7d4bHG', 3, 863878138, 384743745, '2020-07-14 00:35:02', '2020-07-14 00:35:02', NULL),
(60, 'Pham Bảo Thiện', 'baothienit@gmail.com', '$2y$10$9kD8nW1n2tsykelINpVoLuVGNncVltvJqGR0tx2rx/zTQ/45CoFr6', 2, 863878138, 384743745, '2020-07-14 00:35:02', '2020-07-14 00:35:02', NULL),
(61, 'Võ Minh Tân', 'minhtant@gmail.com', '$2y$10$xIi6rA5CXcLCBMuKZiUpMeAOu.l/ouF4NQjREjilm8vUqzpAYbBOy', 2, 863878138, 384743745, '2020-07-14 00:35:02', '2020-07-14 00:35:02', NULL),
(62, 'Nguyễn Minh Triết', 'trietnguyen@gmail.com', '$2y$10$S7gkMMILA4SfjQhHAGWRQuILs5qWemfqP3Aup35RYcgsViNfp.ccq', 1, 740868987, 387589948, '2020-07-14 00:35:02', '2020-07-14 00:35:02', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhan_tin`
--

CREATE TABLE `nhan_tin` (
  `id` int(10) UNSIGNED NOT NULL,
  `nguoi_dung_id` int(11) NOT NULL,
  `khoa_hoc_id` int(11) NOT NULL,
  `noi_dung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nguoi_gui` int(11) NOT NULL,
  `trang_thai` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhan_tin`
--

INSERT INTO `nhan_tin` (`id`, `nguoi_dung_id`, `khoa_hoc_id`, `noi_dung`, `nguoi_gui`, `trang_thai`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 3, 1, 'Thầy cho em hỏi cái này được không ạ?', 1, 1, '2020-07-14 00:34:41', '2020-07-14 00:34:41', NULL),
(2, 3, 1, 'Hỏi gì em?', 2, 1, '2020-07-14 00:34:41', '2020-07-14 00:34:41', NULL),
(3, 3, 1, 'Khi nào có phần tiếp theo vậy thầy?', 1, 1, '2020-07-14 00:34:41', '2020-07-14 00:34:41', NULL),
(4, 3, 1, 'Tháng sau nha em!', 2, 1, '2020-07-14 00:34:41', '2020-07-14 00:34:41', NULL),
(5, 3, 1, 'Dạ em cảm ơn thầy!', 1, 1, '2020-07-14 00:34:41', '2020-07-14 00:34:41', NULL),
(6, 5, 1, 'Thầy cho em hỏi cái này được không ạ?', 1, 1, '2020-07-14 00:34:41', '2020-07-14 00:34:41', NULL),
(7, 5, 1, 'Hỏi gì em?', 2, 1, '2020-07-14 00:34:41', '2020-07-14 00:34:41', NULL),
(8, 5, 1, 'Khi nào có phần tiếp theo vậy thầy?', 1, 1, '2020-07-14 00:34:41', '2020-07-14 00:34:41', NULL),
(9, 5, 1, 'Tháng sau nha em!', 2, 1, '2020-07-14 00:34:41', '2020-07-14 00:34:41', NULL),
(10, 5, 1, 'Dạ em cảm ơn thầy!', 1, 1, '2020-07-14 00:34:41', '2020-07-14 00:34:41', NULL),
(11, 6, 1, 'Thầy cho em hỏi cái này được không ạ?', 1, 1, '2020-07-14 00:34:41', '2020-07-14 00:34:41', NULL),
(12, 6, 1, 'Hỏi gì em?', 2, 1, '2020-07-14 00:34:41', '2020-07-14 00:34:41', NULL),
(13, 6, 1, 'Khi nào có phần tiếp theo vậy thầy?', 1, 1, '2020-07-14 00:34:41', '2020-07-14 00:34:41', NULL),
(14, 6, 1, 'Tháng sau nha em!', 2, 1, '2020-07-14 00:34:41', '2020-07-14 00:34:41', NULL),
(15, 6, 1, 'Dạ em cảm ơn thầy!', 1, 1, '2020-07-14 00:34:42', '2020-07-14 00:34:42', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `noi_dung`
--

CREATE TABLE `noi_dung` (
  `id` int(10) UNSIGNED NOT NULL,
  `tieu_de` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tai_lieu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chuong_id` int(11) NOT NULL,
  `trang_thai` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `noi_dung`
--

INSERT INTO `noi_dung` (`id`, `tieu_de`, `video`, `tai_lieu`, `chuong_id`, `trang_thai`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Bài 1:Giới thiệu', 'https://bitly.com.vn/VxDB8', 'https://bitly.com.vn/NGoDL', 1, 1, '2020-07-14 00:34:28', '2020-07-14 00:34:28', NULL),
(2, 'Bài 2:Nhập môn', 'https://bitly.com.vn/VxDB8', 'https://bitly.com.vn/NGoDL', 1, 1, '2020-07-14 00:34:28', '2020-07-14 00:34:28', NULL),
(3, 'Bài 3:Tài liệu học tập', 'https://bitly.com.vn/VxDB8', 'https://bitly.com.vn/NGoDL', 1, 1, '2020-07-14 00:34:28', '2020-07-14 00:34:28', NULL),
(4, 'Bài 1: Đọc chuẩn bảng chữ cái tiếng Anh (Phần 1)', 'https://bitly.com.vn/VxDB8', 'https://bitly.com.vn/NGoDL', 2, 1, '2020-07-14 00:34:28', '2020-07-14 00:34:28', NULL),
(5, 'Bài 2: Đọc chuẩn bảng chữ cái tiếng Anh (Phần 2)', 'https://bitly.com.vn/VxDB8', 'https://bitly.com.vn/NGoDL', 2, 1, '2020-07-14 00:34:29', '2020-07-14 00:34:29', NULL),
(6, 'Bài 3: Tổng quan bảng phiên âm quốc tế - IPA', 'https://bitly.com.vn/VxDB8', 'https://bitly.com.vn/NGoDL', 2, 1, '2020-07-14 00:34:29', '2020-07-14 00:34:29', NULL),
(7, 'Bài 4: Thực hành đọc phiên âm trong đoạn văn', 'https://bitly.com.vn/VxDB8', 'https://bitly.com.vn/NGoDL', 2, 1, '2020-07-14 00:34:29', '2020-07-14 00:34:29', NULL),
(8, 'Bài 1: Dạng rút gọn của từ', 'https://bitly.com.vn/VxDB8', 'https://bitly.com.vn/NGoDL', 3, 1, '2020-07-14 00:34:29', '2020-07-14 00:34:29', NULL),
(9, 'Bài 2: Cách đọc mạo từ xác định \"THE\"', 'https://bitly.com.vn/VxDB8', 'https://bitly.com.vn/NGoDL', 3, 1, '2020-07-14 00:34:29', '2020-07-14 00:34:29', NULL),
(10, 'Bài 3: Luyện giảm âm', 'https://bitly.com.vn/VxDB8', 'https://bitly.com.vn/NGoDL', 3, 1, '2020-07-14 00:34:29', '2020-07-14 00:34:29', NULL),
(11, 'Bài 4: Thực hành nói trong đoạn hội thoại', 'https://bitly.com.vn/VxDB8', 'https://bitly.com.vn/NGoDL', 3, 1, '2020-07-14 00:34:29', '2020-07-14 00:34:29', NULL),
(12, 'Bài 1:Giới thiệu', 'https://bitly.com.vn/VxDB8', 'https://bitly.com.vn/NGoDL', 1, 1, '2020-07-14 00:34:29', '2020-07-14 00:34:29', NULL),
(13, 'Bài 1: Tổng kết', 'https://bitly.com.vn/VxDB8', 'https://bitly.com.vn/NGoDL', 4, 1, '2020-07-14 00:34:29', '2020-07-14 00:34:29', NULL),
(14, 'Bài 1: Listening', 'https://bitly.com.vn/VxDB8', 'https://bitly.com.vn/NGoDL', 5, 1, '2020-07-14 00:34:29', '2020-07-14 00:34:29', NULL),
(15, 'Bài 2: Speaking', 'https://bitly.com.vn/VxDB8', 'https://bitly.com.vn/NGoDL', 5, 1, '2020-07-14 00:34:29', '2020-07-14 00:34:29', NULL),
(16, 'Bài 3: Vocabulary', 'https://bitly.com.vn/VxDB8', 'https://bitly.com.vn/NGoDL', 5, 1, '2020-07-14 00:34:29', '2020-07-14 00:34:29', NULL),
(17, 'Bài 1: Listening', 'https://bitly.com.vn/VxDB8', 'https://bitly.com.vn/NGoDL', 6, 1, '2020-07-14 00:34:29', '2020-07-14 00:34:29', NULL),
(18, 'Bài 2: Speaking', 'https://bitly.com.vn/VxDB8', 'https://bitly.com.vn/NGoDL', 6, 1, '2020-07-14 00:34:29', '2020-07-14 00:34:29', NULL),
(19, 'Bài 3: Vocabulary', 'https://bitly.com.vn/VxDB8', 'https://bitly.com.vn/NGoDL', 6, 1, '2020-07-14 00:34:29', '2020-07-14 00:34:29', NULL),
(20, 'Bài 1: Listening', 'https://bitly.com.vn/VxDB8', 'https://bitly.com.vn/NGoDL', 7, 1, '2020-07-14 00:34:29', '2020-07-14 00:34:29', NULL),
(21, 'Bài 2: Speaking', 'https://bitly.com.vn/VxDB8', 'https://bitly.com.vn/NGoDL', 7, 1, '2020-07-14 00:34:29', '2020-07-14 00:34:29', NULL),
(22, 'Bài 1: Listening', 'https://bitly.com.vn/VxDB8', 'https://bitly.com.vn/NGoDL', 8, 1, '2020-07-14 00:34:29', '2020-07-14 00:34:29', NULL),
(23, 'Bài 2: Speaking', 'https://bitly.com.vn/VxDB8', 'https://bitly.com.vn/NGoDL', 8, 1, '2020-07-14 00:34:29', '2020-07-14 00:34:29', NULL),
(24, 'Bài 3: Vocabulary', 'https://bitly.com.vn/VxDB8', 'https://bitly.com.vn/NGoDL', 8, 1, '2020-07-14 00:34:29', '2020-07-14 00:34:29', NULL),
(25, 'Bài 1: Listening', 'https://bitly.com.vn/VxDB8', 'https://bitly.com.vn/NGoDL', 9, 1, '2020-07-14 00:34:30', '2020-07-14 00:34:30', NULL),
(26, 'Bài 2: Speaking', 'https://bitly.com.vn/VxDB8', 'https://bitly.com.vn/NGoDL', 9, 1, '2020-07-14 00:34:30', '2020-07-14 00:34:30', NULL),
(27, 'Bài 3: Vocabulary', 'https://bitly.com.vn/VxDB8', 'https://bitly.com.vn/NGoDL', 9, 1, '2020-07-14 00:34:30', '2020-07-14 00:34:30', NULL),
(28, 'Bài 1: Listening', 'https://bitly.com.vn/VxDB8', 'https://bitly.com.vn/NGoDL', 10, 1, '2020-07-14 00:34:30', '2020-07-14 00:34:30', NULL),
(29, 'Bài 2: Speaking', 'https://bitly.com.vn/VxDB8', 'https://bitly.com.vn/NGoDL', 10, 1, '2020-07-14 00:34:30', '2020-07-14 00:34:30', NULL),
(30, 'Bài 3: Vocabulary', 'https://bitly.com.vn/VxDB8', 'https://bitly.com.vn/NGoDL', 10, 1, '2020-07-14 00:34:30', '2020-07-14 00:34:30', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `the_ngan_hang`
--

CREATE TABLE `the_ngan_hang` (
  `id` int(10) UNSIGNED NOT NULL,
  `nguoi_dung_id` int(11) NOT NULL,
  `so_tai_khoan` int(11) NOT NULL,
  `ten_tren_the` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten_ngan_hang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chi_nhanh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `the_ngan_hang`
--

INSERT INTO `the_ngan_hang` (`id`, `nguoi_dung_id`, `so_tai_khoan`, `ten_tren_the`, `ten_ngan_hang`, `chi_nhanh`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 589239125, 'Nguyễn Thị Thảo Vy', 'MB BANK', 'Q1, Tp.HCM', '2020-07-14 00:34:15', '2020-07-14 00:34:15', NULL),
(2, 2, 411240767, 'Lê Văn Trung', 'ACB', 'Q1, Tp.HCM', '2020-07-14 00:34:15', '2020-07-14 00:34:15', NULL),
(3, 3, 168639224, 'Trần Văn Hưng', 'OCB', 'Q1, Tp.HCM', '2020-07-14 00:34:15', '2020-07-14 00:34:15', NULL),
(4, 4, 499724510, 'Nguyễn Thị Tý', 'ACB', 'Q1, Tp.HCM', '2020-07-14 00:34:15', '2020-07-14 00:34:15', NULL),
(5, 5, 691194914, 'Nguyễn Thị Mai', 'AGRIBANK', 'Q1, Tp.HCM', '2020-07-14 00:34:15', '2020-07-14 00:34:15', NULL),
(6, 6, 411240767, 'Mai Tiến Dũng', 'DONG A BANK', 'Q1, Tp.HCM', '2020-07-14 00:34:15', '2020-07-14 00:34:15', NULL),
(7, 7, 592376069, 'Hồ Quang Hiếu', 'MB BANK', 'Q1, Tp.HCM', '2020-07-14 00:34:15', '2020-07-14 00:34:15', NULL),
(8, 8, 387683240, 'Mai Tường Vy', 'NAM A BANK', 'Q1, Tp.HCM', '2020-07-14 00:34:15', '2020-07-14 00:34:15', NULL),
(9, 9, 129601134, 'Nguyễn Thị Oanh', 'ACB', 'Q1, Tp.HCM', '2020-07-14 00:34:15', '2020-07-14 00:34:15', NULL),
(10, 10, 761846195, 'Nguyễn Văn Trọng', 'ACB', 'Q1, Tp.HCM', '2020-07-14 00:34:15', '2020-07-14 00:34:15', NULL),
(11, 11, 643990233, 'Phạm Văn Tuấn', 'NAM A BANK', 'Q1, Tp.HCM', '2020-07-14 00:34:15', '2020-07-14 00:34:15', NULL),
(12, 12, 120995512, 'Nguyễn Tấn Hậu', 'AGRIBANK', 'Q1, Tp.HCM', '2020-07-14 00:34:15', '2020-07-14 00:34:15', NULL),
(13, 13, 661859256, 'Mai Thị Nhi', 'MB BANK', 'Q1, Tp.HCM', '2020-07-14 00:34:15', '2020-07-14 00:34:15', NULL),
(14, 14, 304864349, 'Trương Văn Hiền', 'OCB', 'Q1, Tp.HCM', '2020-07-14 00:34:15', '2020-07-14 00:34:15', NULL),
(15, 15, 396841659, 'Nguyễn Ngọc Tiến', 'DONG A BANK', 'Q1, Tp.HCM', '2020-07-14 00:34:15', '2020-07-14 00:34:15', NULL),
(16, 16, 874128872, 'Lê Thị Tú Trinh', 'DONG A BANK', 'Q1, Tp.HCM', '2020-07-14 00:34:15', '2020-07-14 00:34:15', NULL),
(17, 17, 968382724, 'Khổng Thị Thu Nhạn', 'NAM A BANK', 'Q1, Tp.HCM', '2020-07-14 00:34:16', '2020-07-14 00:34:16', NULL),
(18, 18, 189069824, 'Nguyễn Thu Trang', 'TPBANK', 'Q1, Tp.HCM', '2020-07-14 00:34:16', '2020-07-14 00:34:16', NULL),
(19, 19, 343560168, 'Lê Văn Biểu', 'BIDV', 'Q1, Tp.HCM', '2020-07-14 00:34:16', '2020-07-14 00:34:16', NULL),
(20, 20, 963954668, 'Nguyễn Tuyết Trinh', 'NAM A BANK', 'Q1, Tp.HCM', '2020-07-14 00:34:16', '2020-07-14 00:34:16', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `to_chuc`
--

CREATE TABLE `to_chuc` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten_to_chuc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ma_so_thue` int(11) NOT NULL,
  `dia_chi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nguoi_lien_he` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emal_nlh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt_nlh` int(11) NOT NULL,
  `trang_thai` int(11) NOT NULL,
  `nguoi_dung_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `to_chuc`
--

INSERT INTO `to_chuc` (`id`, `ten_to_chuc`, `ma_so_thue`, `dia_chi`, `nguoi_lien_he`, `emal_nlh`, `sdt_nlh`, `trang_thai`, `nguoi_dung_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Trung Tâm Anh Ngữ English Town', 969972472, '34 Trần Quốc Thảo, Phường 7, Quận 3, Hồ Chí Minh', 'Nguyễn Văn Nhơn', 'nhonnguyen@gmail.com', 386473677, 1, 1, '2020-07-14 00:34:02', '2020-07-14 00:34:02', NULL),
(2, 'Trung tâm tiếng trung Newsky', 544724667, '113 Đ. Lê Văn Sỹ, Phường 13, Phú Nhuận, Hồ Chí Minh', 'Trần Hoài Thương', 'thuongnguyen@gmail.com', 374873847, 1, 2, '2020-07-14 00:34:02', '2020-07-14 00:34:02', NULL),
(3, 'Trung Tâm Học Tiếng Đức Phương Nam', 117778371, '357 Lê Hồng Phong, Phường 2, Quận 10, Hồ Chí Minh', 'Phạm Trung Tín', 'tinpham@gmail.com', 337263548, 1, 3, '2020-07-14 00:34:02', '2020-07-14 00:34:02', NULL),
(4, 'Trung Tâm Ngoại Ngữ Tin Học Tín Thành', 581738132, '75 Hẻm 285 Cách Mạng Tháng Tám, Phường 12, Quận 10, Hồ Chí Minh', 'Phan Thành Nam', 'namphan@gmail.com', 394726374, 1, 5, '2020-07-14 00:34:02', '2020-07-14 00:34:02', NULL),
(5, 'Trung Tâm Ngoại Ngữ - Tin Học', 117866321, '155 Đường Võ Thị Sáu, Phường 6, Quận 3, Hồ Chí Minh', 'Lê Tú Trinh', 'trinhle@gmail.com', 394726374, 1, 6, '2020-07-14 00:34:02', '2020-07-14 00:34:02', NULL),
(6, 'Trung Tâm CNTT Quận 1', 402963935, '14 Nguyễn Thái Bình, Phường Nguyễn Thái Bình, Quận 1, Hồ Chí Minh', 'Nguyễn Như Ý', 'ynguyen@gmail.com', 394726374, 1, 7, '2020-07-14 00:34:02', '2020-07-14 00:34:02', NULL),
(7, 'Trung tâm tin học MS - Quận 4', 815545573, '31 Nguyễn Khoái, Phường 1, Quận 4, Hồ Chí Minh', 'Hồ Việt Trung', 'trungho@gmail.com', 382743846, 1, 8, '2020-07-14 00:34:02', '2020-07-14 00:34:02', NULL),
(8, 'Trung Tâm Đào Tạo Kỹ Thuật Công Nghệ Thông Tin Nam Viễn Đông', 149016996, '5 Lê Lai, Phường 4, Gò Vấp, Hồ Chí Minh', 'Nguyễn Thành Phát', 'phatnguyen@gmail.com', 316253748, 1, 9, '2020-07-14 00:34:02', '2020-07-14 00:34:02', NULL),
(9, 'Trung Tâm Bồi Dưỡng Năng Khiếu Âm Nhạc', 394016742, '112 Nguyễn Du, Phường Bến Thành, Quận 1, Hồ Chí Minh', 'Nguyễn Trung Lai', 'lainguyen@gmail.com', 382746385, 1, 11, '2020-07-14 00:34:02', '2020-07-14 00:34:02', NULL),
(10, 'Trung Tâm Âm Nhạc Phanxico', 586720393, '228 Nguyễn Tiểu La, Phường 8, Quận 10, Hồ Chí Minh', 'Nguyễn Quang Hải', 'hainguyen@gmail.com', 384727485, 1, 12, '2020-07-14 00:34:02', '2020-07-14 00:34:02', NULL),
(11, 'Trung Tâm Thể Dục Thể Thao Quận 10', 107756164, '9 Thành Thái, Phường 14, Quận 10, Hồ Chí Minh', 'Đỗ Hùng Dũng', 'dungdo@gmail.com', 374827498, 1, 13, '2020-07-14 00:34:02', '2020-07-14 00:34:02', NULL),
(12, 'Trung Tâm Thể Dục Thể Thao Rạch Chiếc', 111548078, '28 Xô Viết Nghệ Tĩnh, Phường 19, Bình Thạnh, Hồ Chí Minh', 'Nguyễn Tấn Hậu', 'haunguyen@gmail.com', 386473677, 1, 15, '2020-07-14 00:34:02', '2020-07-14 00:34:02', NULL),
(13, 'Trung Tâm Đồ Họa Kiến Trúc DOA', 845364320, '420 Nơ Trang Long, Phường 13, Bình Thạnh, Hồ Chí Minh', 'Bùi Tiến Dũng', 'dungbui@gmail.com', 374873847, 1, 16, '2020-07-14 00:34:02', '2020-07-14 00:34:02', NULL),
(14, 'Ctrl Z - Studio Đào Tạo Thiết Kế Đồ Họa', 632288862, '257/30 Phan Xích Long, Phường 1, Phú Nhuận, Hồ Chí Minh', 'Nguyễn Anh Đức', 'ducnguyen@gmail.com', 384727674, 1, 14, '2020-07-14 00:34:02', '2020-07-14 00:34:02', NULL),
(15, 'Trung Tâm Đào Tạo Kỹ Năng Sống Ý Tưởng Việt', 243633424, '42b Gò Dầu, Tân Sơn Nhì, Tân Phú, Hồ Chí Minh', 'Nguyễn Thế Anh', 'anhnguyen@gmail.com', 384743745, 1, 17, '2020-07-14 00:34:02', '2020-07-14 00:34:02', NULL),
(16, 'Trung tâm đào tạo Kỹ năng sống Tôi Khác Biệt', 528663016, '158 Hồ Bá Kiện, Phường 15, Quận 10, Hồ Chí Minh', 'Trần Quang Huy', 'huytran@gmail.com', 384743745, 1, 18, '2020-07-14 00:34:02', '2020-07-14 00:34:02', NULL),
(17, 'APPNET - Trung Tâm Đào Tạo Digital Marketing', 168617807, '31 Võ Văn Tần, Phường 6, Quận 3, Hồ Chí Minh', 'Nguyễn Tấn Kế', 'kenguyen@gmail.com', 947364785, 1, 22, '2020-07-14 00:34:02', '2020-07-14 00:34:02', NULL),
(18, 'DMA Việt Nam - Trung tâm Dạy Học Digital Marketing', 798870708, '23 Đ. Nguyễn Trãi, Phường Phạm Ngũ Lão, Quận 1, Hồ Chí Minh', 'Nguyễn Thị Cường', 'cuongnguyen@gmail.com', 388594875, 1, 23, '2020-07-14 00:34:02', '2020-07-14 00:34:02', NULL),
(19, 'Trung Tâm Đào Tạo Phát Triển Nghệ Thuật SiĐô', 693589760, '14 Đinh Tiên Hoàng, Phường 1, Bình Thạnh, Hồ Chí Minh', 'Nguyễn Văn Kiên', 'kiennguyen@gmail.com', 937476377, 1, 24, '2020-07-14 00:34:02', '2020-07-14 00:34:02', NULL),
(20, 'Trung Tâm Đào Tạo Văn Hóa Nghệ Thuật Solartacademy', 548630841, '4 Cao Triều Phát, Tân Phong, Quận 7, Hồ Chí Minh', 'Trần Quốc Huy', 'huytran@gmail.com', 387487578, 1, 25, '2020-07-14 00:34:02', '2020-07-14 00:34:02', NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bai_kiem_tra`
--
ALTER TABLE `bai_kiem_tra`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `chuong`
--
ALTER TABLE `chuong`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `ct_hoa_don`
--
ALTER TABLE `ct_hoa_don`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `danh_gia_kh`
--
ALTER TABLE `danh_gia_kh`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `ketqua_kt`
--
ALTER TABLE `ketqua_kt`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `khoa_hoc`
--
ALTER TABLE `khoa_hoc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `linh_vuc`
--
ALTER TABLE `linh_vuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nguoi_dung`
--
ALTER TABLE `nguoi_dung`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nhan_tin`
--
ALTER TABLE `nhan_tin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `noi_dung`
--
ALTER TABLE `noi_dung`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `the_ngan_hang`
--
ALTER TABLE `the_ngan_hang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `to_chuc`
--
ALTER TABLE `to_chuc`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bai_kiem_tra`
--
ALTER TABLE `bai_kiem_tra`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `chuong`
--
ALTER TABLE `chuong`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `ct_hoa_don`
--
ALTER TABLE `ct_hoa_don`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `danh_gia_kh`
--
ALTER TABLE `danh_gia_kh`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `ketqua_kt`
--
ALTER TABLE `ketqua_kt`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `khoa_hoc`
--
ALTER TABLE `khoa_hoc`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `linh_vuc`
--
ALTER TABLE `linh_vuc`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `nguoi_dung`
--
ALTER TABLE `nguoi_dung`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT cho bảng `nhan_tin`
--
ALTER TABLE `nhan_tin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `noi_dung`
--
ALTER TABLE `noi_dung`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `the_ngan_hang`
--
ALTER TABLE `the_ngan_hang`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `to_chuc`
--
ALTER TABLE `to_chuc`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
