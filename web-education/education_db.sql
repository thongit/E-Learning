-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 20, 2020 lúc 11:29 AM
-- Phiên bản máy phục vụ: 10.4.8-MariaDB
-- Phiên bản PHP: 7.3.10

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
  `hien_thi` int(11) NOT NULL,
  `thoi_gian_mo` datetime DEFAULT NULL,
  `thoi_gian_dong` datetime DEFAULT NULL,
  `lam_lai` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bai_kiem_tra`
--

INSERT INTO `bai_kiem_tra` (`id`, `thoi_gian_lam`, `chuong_id`, `ten_bai_kt`, `file_de_kt`, `trang_thai`, `hien_thi`, `thoi_gian_mo`, `thoi_gian_dong`, `lam_lai`, `created_at`, `updated_at`, `deleted_at`) VALUES
(44, 10, 1, 'Bài kiểm tra chương giới thiệu', 'file-kiem-tra1uoqiwp.xlsx', 1, 0, NULL, NULL, 0, '2020-08-19 02:38:37', '2020-08-19 02:38:37', NULL),
(45, 20, 2, 'Bài kiểm tra chương ngữ âm cơ bản', 'file-kiem-tra22gnftm.xlsx', 1, 0, NULL, NULL, 1, '2020-08-19 02:41:04', '2020-08-19 02:41:04', NULL),
(46, 30, 4, 'Bài kiểm tra tổng kết', 'file-kiem-tra4prt3ji.xlsx', 1, 1, NULL, NULL, 0, '2020-08-19 02:41:55', '2020-08-19 02:41:55', NULL),
(47, 10, 5, 'Bài kiểm tra describing your job', 'file-kiem-tra5hwq4ls.xlsx', 1, 1, NULL, NULL, 0, '2020-08-19 02:43:03', '2020-08-19 02:43:03', NULL),
(48, 20, 8, 'Bài kiểm tra cuối chương', 'file-kiem-tra8mjbd4e.xlsx', 1, 0, NULL, NULL, 1, '2020-08-19 02:49:33', '2020-08-19 02:49:33', NULL),
(49, 10, 9, 'Bài kiểm tra choosing a college', 'file-kiem-tra9hcb0af.xlsx', 1, 1, NULL, NULL, 0, '2020-08-19 02:50:17', '2020-08-19 02:50:17', NULL),
(50, 15, 16, 'After-school', 'file-kiem-tra16yn1x7b.xlsx', 1, 1, NULL, NULL, 0, '2020-08-19 02:51:00', '2020-08-19 02:51:00', NULL),
(51, 14, 14, 'Schools', 'file-kiem-tra144hen6r.xlsx', 1, 0, NULL, NULL, 1, '2020-08-19 02:51:47', '2020-08-19 02:51:47', NULL),
(52, 20, 21, 'Bài kiểm tra tổng kết', 'file-kiem-tra21umya1k.xlsx', 1, 1, '2020-08-22 00:00:00', '2020-08-29 00:00:00', 0, '2020-08-19 02:52:32', '2020-08-19 02:55:57', NULL),
(53, 20, 17, 'Bài kiểm tra đầu khóa', 'file-kiem-tra17em2zxu.xlsx', 1, 1, NULL, NULL, 0, '2020-08-19 02:54:31', '2020-08-19 02:54:31', NULL),
(54, 10, 22, 'Bài kiểm tra đầu khóa', 'file-kiem-tra22k4xlov.xlsx', 1, 1, NULL, NULL, 0, '2020-08-19 02:59:54', '2020-08-19 02:59:54', NULL),
(55, 10, 29, 'Bài kiểm tra danh từ quán từ', 'file-kiem-tra293b4lox.xlsx', 1, 0, NULL, '2020-08-15 10:00:00', 0, '2020-08-19 03:02:37', '2020-08-19 03:02:37', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chuong`
--

CREATE TABLE `chuong` (
  `id` int(10) UNSIGNED NOT NULL,
  `khoa_hoc_id` int(11) NOT NULL,
  `ten_chuong` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thoi_gian` time NOT NULL,
  `trang_thai` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chuong`
--

INSERT INTO `chuong` (`id`, `khoa_hoc_id`, `ten_chuong`, `thoi_gian`, `trang_thai`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Giới thiệu', '00:00:20', 1, '2020-08-18 17:17:04', '2020-08-18 17:17:04', NULL),
(2, 1, 'Ngữ âm cơ bản', '00:02:00', 1, '2020-08-18 17:17:04', '2020-08-18 17:17:04', NULL),
(3, 1, 'Ngữ âm nâng cao', '00:02:00', 2, '2020-08-18 17:17:04', '2020-08-18 17:17:04', NULL),
(4, 1, 'Tổng kết', '00:00:15', 1, '2020-08-18 17:17:04', '2020-08-18 17:17:04', NULL),
(5, 2, 'Describing your job', '00:02:50', 1, '2020-08-18 17:17:04', '2020-08-18 17:17:04', NULL),
(6, 2, 'Teamwork problem on the job', '00:02:50', 1, '2020-08-18 17:17:04', '2020-08-18 17:17:04', NULL),
(7, 2, 'Working abroad', '00:02:50', 1, '2020-08-18 17:17:04', '2020-08-18 17:17:04', NULL),
(8, 2, 'Giving Feedback', '00:02:50', 1, '2020-08-18 17:17:05', '2020-08-18 17:17:05', NULL),
(9, 3, 'Choosing a college', '00:02:50', 1, '2020-08-18 17:17:05', '2020-08-18 17:17:05', NULL),
(10, 3, 'Talking about examination', '00:01:20', 1, '2020-08-18 17:17:05', '2020-08-18 17:17:05', NULL),
(11, 3, 'Preparing for school', '00:01:40', 1, '2020-08-18 17:17:05', '2020-08-18 17:17:05', NULL),
(12, 3, 'The subjects you hate', '00:02:20', 1, '2020-08-18 17:17:05', '2020-08-18 17:17:05', NULL),
(13, 3, 'Making new friends at school', '00:01:30', 1, '2020-08-18 17:17:05', '2020-08-18 17:17:05', NULL),
(14, 4, 'Private schools or public schools', '00:01:20', 1, '2020-08-18 17:17:05', '2020-08-18 17:17:05', NULL),
(15, 4, 'Talking about scholarships', '00:02:10', 1, '2020-08-18 17:17:05', '2020-08-18 17:17:05', NULL),
(16, 4, ' After-school activities', '00:01:20', 1, '2020-08-18 17:17:05', '2020-08-18 17:17:05', NULL),
(17, 5, 'Giới thiệu', '00:00:20', 1, '2020-08-18 17:17:05', '2020-08-18 17:17:05', NULL),
(18, 5, 'Family', '00:02:50', 1, '2020-08-18 17:17:05', '2020-08-18 17:17:05', NULL),
(19, 5, 'Daily routine', '00:02:50', 1, '2020-08-18 17:17:05', '2020-08-18 17:17:05', NULL),
(20, 5, 'Shopping', '00:02:50', 1, '2020-08-18 17:17:05', '2020-08-18 17:17:05', NULL),
(21, 5, 'Tổng kết', '00:00:15', 1, '2020-08-18 17:17:05', '2020-08-18 17:17:05', NULL),
(22, 6, 'Giới thiệu khóa học', '00:01:20', 1, '2020-08-18 17:17:05', '2020-08-18 17:17:05', NULL),
(23, 6, 'Lộ trình học', '00:05:00', 1, '2020-08-18 17:17:05', '2020-08-18 17:17:05', NULL),
(24, 8, 'Những lỗi thường gặp liên quan đến mạo từ và dấu câu', '00:00:50', 1, '2020-08-18 17:17:05', '2020-08-18 17:17:05', NULL),
(25, 8, 'Những lỗi thường gặp liên quan đến từ loại', '00:03:00', 1, '2020-08-18 17:17:05', '2020-08-18 17:17:05', NULL),
(26, 8, 'Cách dùng những từ hay gây nhầm lẫn', '00:01:20', 1, '2020-08-18 17:17:05', '2020-08-18 17:17:05', NULL),
(27, 9, 'Giới thiệu', '00:00:15', 1, '2020-08-18 17:17:05', '2020-08-18 17:17:05', NULL),
(28, 9, 'Bảng chữ cái và chữ số', '00:02:00', 1, '2020-08-18 17:17:05', '2020-08-18 17:17:05', NULL),
(29, 7, 'Danh từ - Quán từ', '00:02:00', 1, '2020-08-18 17:17:05', '2020-08-18 17:17:05', NULL),
(30, 9, 'Đại từ', '00:02:00', 1, '2020-08-18 17:17:05', '2020-08-18 17:17:05', NULL),
(31, 9, 'Tổng kết', '00:00:15', 1, '2020-08-18 17:17:06', '2020-08-18 17:17:06', NULL),
(32, 10, 'Giới thiệu tổng quan', '00:00:15', 1, '2020-08-18 17:17:06', '2020-08-18 17:17:06', NULL),
(33, 10, 'Thành phần câu', '00:01:00', 1, '2020-08-18 17:17:06', '2020-08-18 17:17:06', NULL),
(34, 10, 'Câu phức', '00:01:00', 1, '2020-08-18 17:17:06', '2020-08-18 17:17:06', NULL),
(35, 11, 'Hướng dẫn cài đặt các công cụ thực hành', '00:00:15', 1, '2020-08-18 17:17:06', '2020-08-18 17:17:06', NULL),
(36, 12, 'HTML', '00:01:20', 1, '2020-08-18 17:17:06', '2020-08-18 17:17:06', NULL),
(37, 12, 'CSS', '00:01:50', 1, '2020-08-18 17:17:06', '2020-08-18 17:17:06', NULL),
(38, 12, 'JAVASCRIPT - FORM', '00:02:00', 1, '2020-08-18 17:17:06', '2020-08-18 17:17:06', NULL),
(39, 12, 'JQUERY', '00:02:30', 1, '2020-08-18 17:17:06', '2020-08-18 17:17:06', NULL),
(40, 12, 'PHP - MYSQL - WAMP SERVER', '00:03:00', 1, '2020-08-18 17:17:06', '2020-08-18 17:17:06', NULL),
(41, 13, 'Nhập môn khóa học', '00:03:00', 1, '2020-08-18 17:17:06', '2020-08-18 17:17:06', NULL),
(42, 13, 'Những vấn đề cơ bản', '00:03:00', 1, '2020-08-18 17:17:06', '2020-08-18 17:17:06', NULL),
(43, 14, 'TỔNG QUAN VỀ DRUPAL', '00:03:00', 1, '2020-08-18 17:17:06', '2020-08-18 17:17:06', NULL),
(44, 14, 'LÀM VIỆC VỚI PHẦN QUẢN TRỊ DRUPAL', '00:03:00', 1, '2020-08-18 17:17:06', '2020-08-18 17:17:06', NULL),
(45, 14, 'CẤU TRÚC DỮ LIỆU CỦA DRUPAL', '00:03:00', 1, '2020-08-18 17:17:06', '2020-08-18 17:17:06', NULL),
(46, 14, 'ÁP DỤNG TÙY BIẾN DỮ LIỆU VÀO WEBSITE THỰC TẾ', '00:03:00', 1, '2020-08-18 17:17:06', '2020-08-18 17:17:06', NULL),
(47, 15, 'Hướng dẫn cài đặt các công cụ thực hành', '00:03:00', 1, '2020-08-18 17:17:06', '2020-08-18 17:17:06', NULL),
(48, 15, 'HTML', '00:03:00', 1, '2020-08-18 17:17:06', '2020-08-18 17:17:06', NULL),
(49, 15, 'CSS', '00:03:00', 1, '2020-08-18 17:17:06', '2020-08-18 17:17:06', NULL),
(50, 16, 'Giới thiệu khóa học', '00:03:00', 1, '2020-08-18 17:17:06', '2020-08-18 17:17:06', NULL),
(51, 16, 'Chuẩn bị thiết kế Website', '00:03:00', 1, '2020-08-18 17:17:06', '2020-08-18 17:17:06', NULL),
(52, 16, 'Các phương pháp thiết kế web', '00:03:00', 1, '2020-08-18 17:17:06', '2020-08-18 17:17:06', NULL),
(53, 17, 'Thế giới web 2.0: HTML, CSS & JAVASCRIPT', '00:03:00', 1, '2020-08-18 17:17:06', '2020-08-18 17:17:06', NULL),
(54, 17, 'Bắt đầu xây dựng trang web vớiI HTML', '00:03:00', 1, '2020-08-18 17:17:06', '2020-08-18 17:17:06', NULL),
(55, 17, 'Sử dụng CSS để trang hoàng cho trang web của bạn', '00:03:00', 1, '2020-08-18 17:17:06', '2020-08-18 17:17:06', NULL),
(56, 18, 'Giới thiệu khóa học', '00:03:00', 1, '2020-08-18 17:17:06', '2020-08-18 17:17:06', NULL),
(57, 18, 'Tất cả kiến thức cơ bản về web', '00:03:00', 1, '2020-08-18 17:17:07', '2020-08-18 17:17:07', NULL),
(58, 18, 'Giới thiệu về Wordpress và cài đặt', '00:03:00', 1, '2020-08-18 17:17:07', '2020-08-18 17:17:07', NULL),
(59, 19, 'Giới thiệu khóa học', '00:03:00', 1, '2020-08-18 17:17:07', '2020-08-18 17:17:07', NULL),
(60, 19, 'Thiết lập môi trường local', '00:03:00', 1, '2020-08-18 17:17:07', '2020-08-18 17:17:07', NULL),
(61, 19, 'Định tuyến Route', '00:03:00', 1, '2020-08-18 17:17:07', '2020-08-18 17:17:07', NULL),
(62, 20, 'Giới thiệu', '00:03:00', 1, '2020-08-18 17:17:07', '2020-08-18 17:17:07', NULL),
(63, 20, 'Cốt lõi của NodeJS', '00:03:00', 1, '2020-08-18 17:17:07', '2020-08-18 17:17:07', NULL),
(64, 20, 'Thực sự hiểu về Modules, Exports, và Require', '00:03:00', 1, '2020-08-18 17:17:07', '2020-08-18 17:17:07', NULL),
(65, 21, 'GIỚI THIỆU KHÓA HỌC', '00:03:00', 1, '2020-08-18 17:17:07', '2020-08-18 17:17:07', NULL),
(66, 21, 'GIỚI THIỆU VỀ BOOTSTRAP', '00:03:00', 1, '2020-08-18 17:17:07', '2020-08-18 17:17:07', NULL),
(67, 21, 'WEBSITE SỐ 1 VỚI BOOTSTRAP', '00:03:00', 1, '2020-08-18 17:17:07', '2020-08-18 17:17:07', NULL),
(68, 22, 'Giới thiệu về Hệ quản trị Cơ sở dữ liệu SQL Server', '00:03:00', 1, '2020-08-18 17:17:07', '2020-08-18 17:17:07', NULL),
(69, 22, 'ADO.NET Database', '00:03:00', 1, '2020-08-18 17:17:07', '2020-08-18 17:17:07', NULL),
(70, 22, 'ASP.NET', '00:03:00', 1, '2020-08-18 17:17:07', '2020-08-18 17:17:07', NULL),
(71, 23, 'Nội dung khóa học', '00:03:00', 1, '2020-08-18 17:17:07', '2020-08-18 17:17:07', NULL),
(72, 23, 'Tổng hợp các bài tập thực hành Excel', '00:03:00', 1, '2020-08-18 17:17:07', '2020-08-18 17:17:07', NULL),
(73, 24, 'Những điều cơ bản đầu tiên', '00:03:00', 1, '2020-08-18 17:17:07', '2020-08-18 17:17:07', NULL),
(74, 24, 'Cấp độ 1 – Làm quen với cây đàn', '00:03:00', 1, '2020-08-18 17:17:07', '2020-08-18 17:17:07', NULL),
(75, 25, 'Giới thiệu khóa học', '00:03:00', 1, '2020-08-18 17:17:07', '2020-08-18 17:17:07', NULL),
(76, 25, 'Khởi động làm nóng cơ thể,10 động tác thu gọn và làm căng da ', '00:03:00', 1, '2020-08-18 17:17:07', '2020-08-18 17:17:07', NULL),
(77, 26, 'Giới thiệu khóa học', '00:03:00', 1, '2020-08-18 17:17:07', '2020-08-18 17:17:07', NULL),
(78, 26, 'Quản lý thư viện hình ảnh với Lightroom', '00:03:00', 1, '2020-08-18 17:17:07', '2020-08-18 17:17:07', NULL),
(79, 27, 'CÁC KỸ THUẬT THUYẾT TRÌNH CHUYÊN NGHIỆP CẦN CÓ', '00:03:00', 1, '2020-08-18 17:17:08', '2020-08-18 17:17:08', NULL),
(80, 27, 'MỘT SỐ BÀI THUYẾT TRÌNH CÁ BIỆT', '00:03:00', 1, '2020-08-18 17:17:08', '2020-08-18 17:17:08', NULL),
(81, 28, 'Giới thiệu khóa học', '00:03:00', 1, '2020-08-18 17:17:08', '2020-08-18 17:17:08', NULL),
(82, 28, 'Tối ưu SEO cho Video', '00:03:00', 1, '2020-08-18 17:17:08', '2020-08-18 17:17:08', NULL),
(83, 29, 'We are all storyteller', '00:03:00', 1, '2020-08-18 17:17:08', '2020-08-18 17:17:08', NULL),
(84, 29, 'Character', '00:03:00', 1, '2020-08-18 17:17:08', '2020-08-18 17:17:08', NULL),
(85, 30, 'Giới thiệu', '00:03:00', 1, '2020-08-18 17:17:08', '2020-08-18 17:17:08', NULL),
(86, 30, 'Khoa học về da', '00:03:00', 1, '2020-08-18 17:17:08', '2020-08-18 17:17:08', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ct_hoa_don`
--

CREATE TABLE `ct_hoa_don` (
  `id` int(10) UNSIGNED NOT NULL,
  `khoa_hoc_id` int(11) NOT NULL,
  `hoa_don_id` int(11) NOT NULL,
  `ma_kich_hoat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trang_thai` int(11) NOT NULL,
  `tien_do` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ct_hoa_don`
--

INSERT INTO `ct_hoa_don` (`id`, `khoa_hoc_id`, `hoa_don_id`, `ma_kich_hoat`, `trang_thai`, `tien_do`, `created_at`, `updated_at`, `deleted_at`) VALUES
(49, 2, 46, '172ha2qxl', 2, '5_14', '2020-08-20 03:15:05', '2020-08-20 03:26:27', NULL),
(50, 5, 47, '1757wnauf', 1, '17_0', '2020-08-20 03:15:55', '2020-08-20 03:15:55', NULL),
(51, 23, 48, '17234fs2ra', 2, '71_0', '2020-08-20 03:23:28', '2020-08-20 03:23:48', NULL),
(52, 6, 49, '1766l2i54', 1, '22_0', '2020-08-20 03:24:55', '2020-08-20 03:24:55', NULL),
(53, 4, 50, '184f97ja3', 1, '14_0', '2020-08-20 03:35:16', '2020-08-20 03:35:16', NULL),
(54, 18, 51, '181883kfet', 1, '56_0', '2020-08-20 03:36:04', '2020-08-20 03:36:04', NULL),
(55, 19, 52, '1819sxomj9', 1, '59_0', '2020-08-20 03:36:46', '2020-08-20 03:36:46', NULL),
(56, 8, 53, '188w05ltk', 2, '24_0', '2020-08-20 03:37:45', '2020-08-20 03:38:15', NULL),
(57, 30, 54, '1930dx79eo', 1, '85_0', '2020-08-20 03:45:43', '2020-08-20 03:45:43', NULL),
(58, 28, 55, '1928qctjm9', 1, '81_0', '2020-08-20 03:46:49', '2020-08-20 03:46:49', NULL),
(59, 20, 56, '19208hcxzk', 1, '62_0', '2020-08-20 03:47:33', '2020-08-20 03:47:33', NULL),
(60, 21, 57, '19218z7whv', 2, '65_0', '2020-08-20 03:48:15', '2020-08-20 03:48:35', NULL),
(61, 14, 58, '2014lq1rw0', 1, '43_0', '2020-08-20 03:54:19', '2020-08-20 03:54:19', NULL),
(62, 22, 59, '2022o9r0bj', 1, '68_0', '2020-08-20 03:55:06', '2020-08-20 03:55:06', NULL),
(63, 3, 60, '203u4xf5b', 1, '9_0', '2020-08-20 03:55:45', '2020-08-20 03:55:45', NULL),
(64, 9, 61, '2098f17ag', 2, '27_0', '2020-08-20 03:57:33', '2020-08-20 03:57:59', NULL),
(65, 5, 62, '2155bteos', 1, '17_0', '2020-08-20 04:01:47', '2020-08-20 04:01:47', NULL),
(66, 4, 63, '21402fs5l', 2, '14_0', '2020-08-20 04:02:24', '2020-08-20 04:07:58', NULL),
(67, 13, 64, '2113l8shog', 2, '41_0', '2020-08-20 04:03:23', '2020-08-20 04:06:37', NULL),
(68, 21, 65, '2121c4vy9j', 2, '65_0', '2020-08-20 04:04:26', '2020-08-20 04:04:44', NULL),
(69, 5, 66, '225zokt6j', 1, '17_0', '2020-08-20 04:12:14', '2020-08-20 04:12:14', NULL),
(70, 22, 67, '222236mcpd', 1, '68_0', '2020-08-20 04:12:54', '2020-08-20 04:12:54', NULL),
(71, 15, 68, '221537vi2g', 1, '47_0', '2020-08-20 04:13:45', '2020-08-20 04:13:45', NULL),
(72, 19, 69, '2219hblc1i', 2, '59_0', '2020-08-20 04:14:38', '2020-08-20 04:15:01', NULL),
(73, 19, 70, '26199zs1vk', 1, '59_0', '2020-08-20 04:27:34', '2020-08-20 04:27:34', NULL),
(74, 27, 71, '2627vhzo4w', 1, '79_0', '2020-08-20 04:28:13', '2020-08-20 04:28:13', NULL),
(75, 16, 72, '2616v2e8ur', 2, '50_0', '2020-08-20 04:28:51', '2020-08-20 04:29:11', NULL),
(76, 14, 73, '2614qc0y1x', 2, '43_0', '2020-08-20 04:30:00', '2020-08-20 04:30:18', NULL),
(77, 1, 74, '311vj0rk8', 2, '1_12', '2020-08-20 05:48:13', '2020-08-20 05:52:42', NULL),
(78, 1, 75, '15116impr', 1, '1_0', '2020-08-20 07:21:17', '2020-08-20 07:21:17', NULL),
(79, 2, 76, '1527yr3zi', 2, '5_16', '2020-08-20 07:21:56', '2020-08-20 09:19:45', NULL),
(80, 4, 77, '154uvjs3k', 2, '14_34', '2020-08-20 07:23:43', '2020-08-20 09:21:00', NULL),
(81, 1, 78, '31qs9thc', 2, '1_12', '2020-08-20 07:28:03', '2020-08-20 09:27:10', NULL),
(82, 2, 79, '32w2qjas', 1, '5_0', '2020-08-20 07:28:42', '2020-08-20 07:28:42', NULL),
(83, 4, 80, '347k3qgy', 1, '14_0', '2020-08-20 07:29:20', '2020-08-20 07:29:20', NULL),
(84, 1, 81, '41rkwm8f', 2, '1_1', '2020-08-20 07:30:49', '2020-08-20 08:22:00', NULL),
(85, 3, 82, '43sxlh0g', 2, '9_0', '2020-08-20 07:32:53', '2020-08-20 07:33:16', NULL),
(86, 1, 83, '514xt91f', 2, '1_0', '2020-08-20 07:34:15', '2020-08-20 07:34:36', NULL),
(87, 3, 84, '53513t7n', 2, '9_0', '2020-08-20 07:35:20', '2020-08-20 07:35:35', NULL),
(88, 8, 85, '58idtlub', 2, '24_0', '2020-08-20 07:36:34', '2020-08-20 07:36:53', NULL),
(89, 5, 86, '55ozd94k', 1, '17_0', '2020-08-20 07:40:15', '2020-08-20 07:40:15', NULL),
(90, 25, 87, '525cw4usv', 1, '75_0', '2020-08-20 07:40:39', '2020-08-20 07:40:39', NULL),
(91, 1, 88, '101fhmub1', 1, '1_0', '2020-08-20 07:42:12', '2020-08-20 07:42:12', NULL),
(92, 2, 89, '102szoq36', 1, '5_0', '2020-08-20 07:42:43', '2020-08-20 07:42:43', NULL),
(93, 6, 90, '106oh7jg3', 2, '22_0', '2020-08-20 07:43:18', '2020-08-20 07:43:39', NULL),
(94, 7, 91, '107dn2705', 1, '29_0', '2020-08-20 07:44:32', '2020-08-20 07:44:32', NULL),
(95, 14, 92, '10142tp7ov', 2, '43_0', '2020-08-20 07:44:57', '2020-08-20 07:45:18', NULL),
(96, 27, 93, '1027ods1fb', 2, '79_0', '2020-08-20 07:46:01', '2020-08-20 07:46:17', NULL),
(97, 1, 94, '61scuimy', 2, '1_12', '2020-08-20 08:48:28', '2020-08-20 09:00:08', NULL),
(98, 11, 95, '1511fuhsgr', 2, '35_0', '2020-08-20 09:16:26', '2020-08-20 09:16:51', NULL);

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

--
-- Đang đổ dữ liệu cho bảng `danh_gia_kh`
--

INSERT INTO `danh_gia_kh` (`id`, `nguoi_dung_id`, `so_sao`, `noi_dung`, `khoa_hoc_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 5, 'Tuyệt vời!', 5, '2020-07-26 12:45:27', '2020-07-26 12:45:27', NULL),
(2, 2, 4, 'Hướng dẫn tận tình!', 6, '2020-07-26 12:45:27', '2020-07-26 12:45:27', NULL),
(3, 3, 4, 'Tốt!', 1, '2020-07-26 12:45:27', '2020-07-26 12:45:27', NULL),
(4, 4, 5, 'Khóa học đúng như mình mong đợi!', 1, '2020-07-26 12:45:27', '2020-07-26 12:45:27', NULL),
(5, 5, 3, 'Nhiều vấn đề trong bài học chưa giảiquyết tối ưu lắm', 2, '2020-07-26 12:45:28', '2020-07-26 12:45:28', NULL),
(6, 6, 2, 'Không như mong đợi!', 2, '2020-07-26 12:45:28', '2020-07-26 12:45:28', NULL),
(7, 7, 5, 'Hướng dẫn tận tình!', 1, '2020-07-26 12:45:28', '2020-07-26 12:45:28', NULL),
(8, 8, 5, 'Khác so với mô tả!', 2, '2020-07-26 12:45:28', '2020-07-26 12:45:28', NULL),
(9, 9, 5, 'Tuyệt vời!', 2, '2020-07-26 12:45:28', '2020-07-26 12:45:28', NULL),
(10, 10, 5, 'Đúng như mong đợi!', 3, '2020-07-26 12:45:28', '2020-07-26 12:45:28', NULL),
(12, 15, 5, 'good', 4, '2020-08-05 19:30:04', '2020-08-05 19:30:04', NULL),
(14, 15, 3, '', 3, '2020-08-05 23:49:59', '2020-08-05 23:49:59', NULL),
(15, 5, 5, 'Bổ ích', 8, '2020-08-20 07:37:40', '2020-08-20 07:37:40', NULL),
(16, 5, 4, 'Khá hay', 1, '2020-08-20 07:38:01', '2020-08-20 07:38:01', NULL),
(17, 10, 5, 'good', 27, '2020-08-20 07:46:39', '2020-08-20 07:46:39', NULL),
(18, 10, 1, 'Không hay', 6, '2020-08-20 07:47:19', '2020-08-20 07:47:19', NULL),
(19, 21, 5, 'good', 4, '2020-08-20 08:28:51', '2020-08-20 08:28:51', NULL),
(20, 15, 5, 'Bổ ích', 11, '2020-08-20 09:17:57', '2020-08-20 09:17:57', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoa_don`
--

CREATE TABLE `hoa_don` (
  `id` int(10) UNSIGNED NOT NULL,
  `tong_tien` int(11) NOT NULL,
  `nguoi_dung_id` int(11) NOT NULL,
  `dia_chi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `loai_thanh_toan` int(10) NOT NULL,
  `trang_thai` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hoa_don`
--

INSERT INTO `hoa_don` (`id`, `tong_tien`, `nguoi_dung_id`, `dia_chi`, `loai_thanh_toan`, `trang_thai`, `created_at`, `updated_at`, `deleted_at`) VALUES
(46, 199000, 17, '1078/2 Ấp 3 Xã Phước Kiển Huyện Nhà Bè TPHCM', 1, 3, '2020-08-20 03:15:05', '2020-08-20 03:25:31', NULL),
(47, 199000, 17, '1078/2 Ấp 3 Xã Phước Kiển Huyện Nhà Bè TPHCM', 1, 2, '2020-08-20 03:15:55', '2020-08-20 07:55:09', NULL),
(48, 199000, 17, '1078/2 Ấp 3 Xã Phước Kiển Huyện Nhà Bè TPHCM', 2, 3, '2020-08-20 03:23:28', '2020-08-20 03:23:48', NULL),
(49, 199000, 17, '1078/2 Ấp 3 Xã Phước Kiển Huyện Nhà Bè TPHCM', 1, 2, '2020-08-20 03:24:55', '2020-08-20 03:24:55', NULL),
(50, 199000, 18, '1078/2 Ấp 3 Xã Phước Kiển Huyện Nhà Bè TPHCM', 1, 2, '2020-08-20 03:35:16', '2020-08-20 03:35:16', NULL),
(51, 599000, 18, '1078/2 Ấp 3 Xã Phước Kiển Huyện Nhà Bè TPHCM', 1, 1, '2020-08-20 03:36:04', '2020-08-20 03:36:04', NULL),
(52, 199000, 18, '1078/2 Ấp 3 Xã Phước Kiển Huyện Nhà Bè TPHCM', 1, 2, '2020-08-20 03:36:46', '2020-08-20 03:36:46', NULL),
(53, 599000, 18, '1078/2 Ấp 3 Xã Phước Kiển Huyện Nhà Bè TPHCM', 2, 3, '2020-08-20 03:37:45', '2020-08-20 03:38:15', NULL),
(54, 199000, 19, '1078/2 Ấp 3 Xã Phước Kiển Huyện Nhà Bè TPHCM', 1, 3, '2020-08-20 03:45:42', '2020-08-20 03:45:42', NULL),
(55, 199000, 19, '1078/2 Ấp 3 Xã Phước Kiển Huyện Nhà Bè TPHCM', 1, 2, '2020-08-20 03:46:49', '2020-08-20 03:46:49', NULL),
(56, 599000, 19, '1078/2 Ấp 3 Xã Phước Kiển Huyện Nhà Bè TPHCM', 1, 1, '2020-08-20 03:47:33', '2020-08-20 03:47:33', NULL),
(57, 599000, 19, '1078/2 Ấp 3 Xã Phước Kiển Huyện Nhà Bè TPHCM', 2, 3, '2020-08-20 03:48:15', '2020-08-20 03:48:35', NULL),
(58, 499000, 20, '1078/2 Ấp 3 Xã Phước Kiển Huyện Nhà Bè TPHCM', 1, 2, '2020-08-20 03:54:19', '2020-08-20 03:54:19', NULL),
(59, 199000, 20, '1078/2 Ấp 3 Xã Phước Kiển Huyện Nhà Bè TPHCM', 1, 3, '2020-08-20 03:55:06', '2020-08-20 03:55:06', NULL),
(60, 199000, 20, '1078/2 Ấp 3 Xã Phước Kiển Huyện Nhà Bè TPHCM', 1, 1, '2020-08-20 03:55:44', '2020-08-20 03:55:44', NULL),
(61, 599000, 20, '1078/2 Ấp 3 Xã Phước Kiển Huyện Nhà Bè TPHCM', 2, 3, '2020-08-20 03:57:33', '2020-08-20 03:57:59', NULL),
(62, 199000, 21, '10', 1, 1, '2020-08-20 04:01:47', '2020-08-20 04:01:47', NULL),
(63, 199000, 21, '1078/2 Ấp 3 Xã Phước Kiển Huyện Nhà Bè TPHCM', 1, 3, '2020-08-20 04:02:24', '2020-08-20 04:07:58', NULL),
(64, 199000, 21, '1078/2 Ấp 3 Xã Phước Kiển Huyện Nhà Bè TPHCM', 1, 3, '2020-08-20 04:03:22', '2020-08-20 04:06:37', NULL),
(65, 599000, 21, '1078/2 Ấp 3 Xã Phước Kiển Huyện Nhà Bè TPHCM', 2, 3, '2020-08-20 04:04:26', '2020-08-20 04:04:44', NULL),
(66, 199000, 22, '1078/2 Ấp 3 Xã Phước Kiển Huyện Nhà Bè TPHCM', 1, 2, '2020-08-20 04:12:14', '2020-08-20 04:12:14', NULL),
(67, 199000, 22, '1078/2 Ấp 3 Xã Phước Kiển Huyện Nhà Bè TPHCM', 1, 2, '2020-08-20 04:12:54', '2020-08-20 04:12:54', NULL),
(68, 199000, 22, '1078/2 Ấp 3 Xã Phước Kiển Huyện Nhà Bè TPHCM', 1, 1, '2020-08-20 04:13:45', '2020-08-20 04:13:45', NULL),
(69, 199000, 22, '1078/2 Ấp 3 Xã Phước Kiển Huyện Nhà Bè TPHCM', 2, 3, '2020-08-20 04:14:38', '2020-08-20 04:15:01', NULL),
(70, 199000, 26, '1078/2 Ấp 3 Xã Phước Kiển Huyện Nhà Bè TPHCM', 1, 1, '2020-08-20 04:27:34', '2020-08-20 04:27:34', NULL),
(71, 199000, 26, '1078/2 Ấp 3 Xã Phước Kiển Huyện Nhà Bè TPHCM', 1, 2, '2020-08-20 04:28:13', '2020-08-20 04:28:13', NULL),
(72, 499000, 26, '1078/2 Ấp 3 Xã Phước Kiển Huyện Nhà Bè TPHCM', 2, 3, '2020-08-20 04:28:51', '2020-08-20 04:29:11', NULL),
(73, 499000, 26, '1078/2 Ấp 3 Xã Phước Kiển Huyện Nhà Bè TPHCM', 2, 3, '2020-08-20 04:30:00', '2020-08-20 04:30:18', NULL),
(74, 199000, 31, 'null', 2, 3, '2020-08-20 05:48:13', '2020-08-20 05:48:45', NULL),
(75, 199000, 15, 'null', 1, 1, '2020-08-20 07:21:17', '2020-08-20 07:21:17', NULL),
(76, 199000, 15, 'null', 2, 3, '2020-08-20 07:21:56', '2020-08-20 07:22:32', NULL),
(77, 199000, 15, 'null', 2, 3, '2020-08-20 07:23:43', '2020-08-20 07:24:00', NULL),
(78, 199000, 3, 'null', 2, 3, '2020-08-20 07:28:02', '2020-08-20 07:28:22', NULL),
(79, 199000, 3, 'null', 1, 2, '2020-08-20 07:28:42', '2020-08-20 07:55:25', NULL),
(80, 199000, 3, 'null', 1, 1, '2020-08-20 07:29:20', '2020-08-20 07:29:20', NULL),
(81, 199000, 4, 'null', 2, 3, '2020-08-20 07:30:49', '2020-08-20 07:31:48', NULL),
(82, 199000, 4, 'null', 2, 3, '2020-08-20 07:32:53', '2020-08-20 07:33:16', NULL),
(83, 199000, 5, 'null', 2, 3, '2020-08-20 07:34:15', '2020-08-20 07:34:36', NULL),
(84, 199000, 5, 'null', 2, 3, '2020-08-20 07:35:19', '2020-08-20 07:35:35', NULL),
(85, 599000, 5, 'null', 2, 3, '2020-08-20 07:36:34', '2020-08-20 07:36:53', NULL),
(86, 199000, 5, 'null', 1, 1, '2020-08-20 07:40:15', '2020-08-20 07:40:15', NULL),
(87, 199000, 5, 'null', 1, 1, '2020-08-20 07:40:39', '2020-08-20 07:40:39', NULL),
(88, 199000, 10, 'null', 1, 2, '2020-08-20 07:42:12', '2020-08-20 07:55:18', NULL),
(89, 199000, 10, 'null', 1, 1, '2020-08-20 07:42:43', '2020-08-20 07:42:43', NULL),
(90, 199000, 10, 'null', 2, 3, '2020-08-20 07:43:18', '2020-08-20 07:43:39', NULL),
(91, 599000, 10, 'null', 1, 1, '2020-08-20 07:44:31', '2020-08-20 07:44:31', NULL),
(92, 499000, 10, 'null', 2, 3, '2020-08-20 07:44:56', '2020-08-20 07:45:18', NULL),
(93, 199000, 10, 'null', 2, 3, '2020-08-20 07:46:01', '2020-08-20 07:46:17', NULL),
(94, 199000, 6, 'null', 1, 3, '2020-08-20 08:48:28', '2020-08-20 08:49:00', NULL),
(95, 199000, 15, 'null', 1, 3, '2020-08-20 09:16:26', '2020-08-20 09:16:51', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ket_qua_kt`
--

CREATE TABLE `ket_qua_kt` (
  `id` int(10) UNSIGNED NOT NULL,
  `nguoi_dung_id` int(11) NOT NULL,
  `diem` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bai_kiem_tra_id` int(11) NOT NULL,
  `bai_lam` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ket_qua_kt`
--

INSERT INTO `ket_qua_kt` (`id`, `nguoi_dung_id`, `diem`, `bai_kiem_tra_id`, `bai_lam`, `created_at`, `updated_at`, `deleted_at`) VALUES
(69, 31, '0/10', 44, '__________', '2020-08-20 05:52:59', '2020-08-20 05:52:59', NULL),
(70, 6, '5/10', 44, 'ABCABCBACF', '2020-08-20 09:00:41', '2020-08-20 09:00:41', NULL),
(71, 15, '2/10', 47, 'AAA_______', '2020-08-20 09:20:00', '2020-08-20 09:20:00', NULL),
(72, 15, '1/10', 51, 'A_A__A_AB_', '2020-08-20 09:21:19', '2020-08-20 09:21:19', NULL),
(73, 3, '2/10', 44, 'ABC___AABA', '2020-08-20 09:27:37', '2020-08-20 09:27:37', NULL);

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

--
-- Đang đổ dữ liệu cho bảng `khoa_hoc`
--

INSERT INTO `khoa_hoc` (`id`, `ten_khoa_hoc`, `gia`, `nguoi_dung_id`, `linh_vuc_id`, `trang_thai`, `hinh_anh`, `mo_ta_chi_tiet`, `ngon_ngu`, `muc_do`, `mo_ta_ngan`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Nền tảng tiếng Anh cho người mới bắt đầu', 199000, 1, 1, 3, '1.png', 'Nội dung khóa học gồm 3 phần:\n- Phát âm & nghe\n+ Phát triển kỹ năng đọc và phân biệt bảng phiên âm quốc tế: /i:/, /ɪ/; /u:/, /ʊ/; /æ/, /e/, /ɜ:/, /ə/; /ɔ:/, /ɒ/; /a:/, /ʌ/ ; /eɪ/, /ɔɪ/, /ɪ, /tʃ/...\n+ Cách nối âm, biến âm, luyện ngữ điệu trong câu như người bản ngữ, thực hành nói trong các đoạn hội thoại\n- Từ vựng & ngữ pháp\n+ Nắm vững và sử dụng thành thạo 12 thì ngữ pháp cơ bản và ứng dụng trong giao tiếp\n+ Củng cố kiến thức về các loại từ, loại câu trong tiếng Anh.\n+ Xây dựng nền tảng tiếng Anh vững chắc nhất cho việc học thi các chứng chỉ IELTS, TOEIC...sau này.\n- Giao tiếp phản xạ\n+ Thực hành các mẫu câu giao tiếp thông dụng, các mẫu hội thoại, bài tập luyện tập nghe, phản xạ theo chủ điểm thông dụng\n+ Cách nói chuyện tự nhiên với người nước ngoài, làm cuộc nói chuyện trở nên hứng thú hơn.\nLợi ích từ khoá học\nLuyện phát âm chuẩn toàn bộ 44 âm trong Bảng phiên âm quốc tế (Bảng IPA).\nHệ thống hóa lại toàn bộ kiến thức từ vựng, ngữ pháp và ứng dụng chúng dễ dàng trong giao tiếp.\nHọc giao tiếp, phản xạ qua các chủ điểm thông dụng, nối âm, biến âm, ngữ điệu lên xuống một cách tự nhiên nhất như người bản ngữ.\nNhững cách hay mẹo nhỏ giúp bắt chuyện, gợi mở câu chuyện với người nước ngoài một cách tự nhiên và đầy hứng thú.\nNhững bài tập thực hành đi kèm giúp người học tăng khả năng phản xạ, giao tiếp tự nhiên.\nPhù hợp với\nNgữ âm kém, muốn cải thiện khả năng ngữ âm của mình.\nKhông có nền tảng ngữ pháp căn bản.\nKhông biết vận dụng ngữ pháp trong nghe nói.\nMuốn giao tiếp tự tin.\nMuốn cải thiện khả năng nghe và nói, phản xạ.\nNhững người mất gốc hoặc bắt đầu học tiếng Anh từ con số 0.\n', 'Tiếng Việt', 'Sơ cấp', 'Trọn bộ kỹ năng tiếng anh cơ bản.\n Giao tiếp tiếng Anh từ con số 0.', '2020-08-18 17:04:48', '2020-08-18 17:04:48', NULL),
(2, 'Học tiếng Anh theo chủ đề: Jobs', 199000, 1, 1, 3, '2.jpg', 'Khoá học với nội dung cơ bản, ngắn gọn, dễ hiểu, cần thiết:\n- Học viên thường xuyên được kiểm tra, đánh giá qua các bài kiểm tra trong và sau mỗi bài học\n- Luyện các kĩ năng quan trọng trong giao tiếp tiếng anh (nghe - nói - phản xạ - ngữ âm) trong 1 bài học\n- Nắm bắt được các từ và các cụm từ thường sử dụng theo các chủ đề\n- Tự tin, thoải mái trò chuyện và chia sẻ cảm xúc với bạn bè, đồng nghiệp, đối tác...\n\nLợi ích từ khoá học\nChi phí rẻ, tiết kiệm thời gian\nHọc mọi lúc mọi nơi\nCác tình huống cụ thể được minh họa sinh động qua video học liệu full HD\nTự tin, thoải mái trò chuyện và chia sẻ cảm xúc với bạn bè, đồng nghiệp, đối tác...\nChủ động thời gian và không gian\nPhù hợp với\nNhững người thích học tiếng anh, muốn nâng cao khả năng giao tiếp nhưng không có đủ điều kiện về thời gian và tài chính hoặc chưa có phương pháp đúng đắn và phù hợp\nNhững người có trình độ Tiếng Anh giao tiếp ở mức cơ bản, vốn ngữ pháp, từ vựng và khả năng giao tiếp hạn chế, sợ nghe, ngại nói\nNhững người thường xuyên tiếp xúc với bạn bè, đồng nghiệp, đối tác.... là người nước ngoài.\nKhoá học với 100% giảng viên người bản ngữ, đến từ Topica Native\n', 'Tiếng Việt', 'Trung cấp', 'Tự tin sử dụng tiếng Anh theo các chủ đề trong cuộc sống hàng ngày', '2020-08-18 17:04:48', '2020-08-18 17:04:48', NULL),
(3, 'Học tiếng Anh theo chủ đề: Jobs', 199000, 1, 1, 3, '3.jpg', 'Khoá học với nội dung cơ bản, ngắn gọn, dễ hiểu, cần thiết:\n- Học viên thường xuyên được kiểm tra, đánh giá qua các bài kiểm tra trong và sau mỗi bài học\n- Luyện các kĩ năng quan trọng trong giao tiếp tiếng anh (nghe - nói - phản xạ - ngữ âm) trong 1 bài học\n- Nắm bắt được các từ và các cụm từ thường sử dụng theo các chủ đề\n- Tự tin, thoải mái trò chuyện và chia sẻ cảm xúc với bạn bè, đồng nghiệp, đối tác...\n\nLợi ích từ khoá học\nChi phí rẻ, tiết kiệm thời gian\nHọc mọi lúc mọi nơi\nCác tình huống cụ thể được minh họa sinh động qua video học liệu full HD\nTự tin, thoải mái trò chuyện và chia sẻ cảm xúc với bạn bè, đồng nghiệp, đối tác...\nChủ động thời gian và không gian\nPhù hợp với\nNhững người thích học tiếng anh, muốn nâng cao khả năng giao tiếp nhưng không có đủ điều kiện về thời gian và tài chính hoặc chưa có phương pháp đúng đắn và phù hợp\nNhững người có trình độ Tiếng Anh giao tiếp ở mức cơ bản, vốn ngữ pháp, từ vựng và khả năng giao tiếp hạn chế, sợ nghe, ngại nói\nNhững người thường xuyên tiếp xúc với bạn bè, đồng nghiệp, đối tác.... là người nước ngoài.\nKhoá học với 100% giảng viên người bản ngữ, đến từ Topica Native\n', 'Tiếng Việt', 'Trung cấp', 'Tự tin sử dụng tiếng Anh theo các chủ đề trong cuộc sống hàng ngày', '2020-08-18 17:04:48', '2020-08-20 07:54:48', NULL),
(4, 'Học tiếng Anh theo chủ đề: Education', 199000, 1, 1, 3, '4.jpg', 'Khoá học với nội dung cơ bản, ngắn gọn, dễ hiểu, cần thiết:\n- Học viên thường xuyên được kiểm tra, đánh giá qua các bài kiểm tra trong và sau mỗi bài học\n- Luyện các kĩ năng quan trọng trong giao tiếp tiếng anh (nghe - nói - phản xạ - ngữ âm) trong 1 bài học\n- Nắm bắt được các từ và các cụm từ thường sử dụng theo các chủ đề\n- Tự tin, thoải mái trò chuyện và chia sẻ cảm xúc với bạn bè, đồng nghiệp, đối tác...\n\nLợi ích từ khoá học\nChi phí rẻ, tiết kiệm thời gian\nHọc mọi lúc mọi nơi\nCác tình huống cụ thể được minh họa sinh động qua video học liệu full HD\nTự tin, thoải mái trò chuyện và chia sẻ cảm xúc với bạn bè, đồng nghiệp, đối tác...\nChủ động thời gian và không gian\nKhoá học với 100% giảng viên người bản ngữ, đến từ Topica Native\nPhù hợp với\nNhững người thích học tiếng anh, muốn nâng cao khả năng giao tiếp nhưng không có đủ điều kiện về thời gian và tài chính hoặc chưa có phương pháp đúng đắn và phù hợp\nNhững người có trình độ Tiếng Anh giao tiếp ở mức cơ bản, vốn ngữ pháp, từ vựng và khả năng giao tiếp hạn chế, sợ nghe, ngại nói\nNhững người thường xuyên tiếp xúc với bạn bè, đồng nghiệp, đối tác.... là người nước ngoài.\n', 'Tiếng Việt', 'Trung cấp', 'Tự tin sử dụng tiếng Anh theo các chủ đề trong cuộc sống hàng ngày', '2020-08-18 17:04:48', '2020-08-18 17:04:48', NULL),
(5, 'Học tiếng Anh theo chủ đề: Back to school', 199000, 1, 1, 3, '5.png', 'Khoá học với nội dung cơ bản, ngắn gọn, dễ hiểu, cần thiết:\n- Học viên thường xuyên được kiểm tra, đánh giá qua các bài kiểm tra trong và sau mỗi bài học\n- Luyện các kĩ năng quan trọng trong giao tiếp tiếng anh (nghe - nói - phản xạ - ngữ âm) trong 1 bài học\n- Nắm bắt được các từ và các cụm từ thường sử dụng theo các chủ đề\n- Tự tin, thoải mái trò chuyện và chia sẻ cảm xúc với bạn bè, đồng nghiệp, đối tác...\n\nLợi ích từ khoá học\nChi phí rẻ, tiết kiệm thời gian\nHọc mọi lúc mọi nơi\nCác tình huống cụ thể được minh họa sinh động qua video học liệu full HD\nTự tin, thoải mái trò chuyện và chia sẻ cảm xúc với bạn bè, đồng nghiệp, đối tác...\nChủ động thời gian và không gian\nKhoá học với 100% giảng viên người bản ngữ, đến từ Topica Native\nPhù hợp với\nNhững người thích học tiếng anh, muốn nâng cao khả năng giao tiếp nhưng không có đủ điều kiện về thời gian và tài chính hoặc chưa có phương pháp đúng đắn và phù hợp\nNhững người có trình độ Tiếng Anh giao tiếp ở mức cơ bản, vốn ngữ pháp, từ vựng và khả năng giao tiếp hạn chế, sợ nghe, ngại nói\nNhững người thường xuyên tiếp xúc với bạn bè, đồng nghiệp, đối tác.... là người nước ngoài.\n', 'Tiếng Việt', 'Trung cấp', 'Tự tin sử dụng tiếng Anh theo các chủ đề trong cuộc sống hàng ngày', '2020-08-18 17:04:48', '2020-08-18 17:04:48', NULL),
(6, 'Tiếng Anh giao tiếp thường ngày', 199000, 2, 1, 3, '6.jpeg', 'Bạn biết đó, hầu hết những người học tiếng Anh đã học \nrất nhiều năm, thậm chí là 12 năm nhưng dường như chúng ta vẫn chẳng thể nói được một câu tiếng Anh cho gẫy gọn dù là câu đơn giản nhất. Ai trong số chúng ta cũng đều muốn giao tiếp tiếng Anh thật tốt nhưng chúng ta lại gặp phải những vấn đề như thiếu từ vựng, thiếu cấu trúc, ngữ pháp. Và do đó, khi phải nói thì chúng ta loay hoay nghĩ bằng tiếng Việt rồi cố tìm các từ bằng tiếng Anh để diễn đạt ý rồi ghép sao cho thành một câu rồi cuối cùng mới nói ra được. Nói xong thì mồ hôi cũng đã ướt áo nhưng người nghe cũng chẳng hiểu gì.\nKhông những thế bạn còn cảm thấy thật khó chịu với chính mình khi nghe ai đó nói tiếng Anh mà mãi bạn không hiểu gì và chỉ còn biết đến câu trả lời đơn giản nhất là Yes hoặc No hay một cái gật, một nụ cười trừ hoặc đến khi bạn hiểu ra thì câu chuyện đã kết thúc từ lâu. Đây là vấn đề thuộc về kỹ năng nghe, phản xạ mà hầu hết những người học tiếng Anh ở giai đoạn đầu đều mắc phải.\nBạn cũng gặp những vấn đề trên ư? Vậy hãy để tôi giúp bạn qua khóa học \"\"Tiếng Anh giao tiếp thường ngày\"\".\n\nLợi ích từ khoá học\nNạp được một khối lượng lớn các từ vựng trong các chủ điểm giao tiếp thường ngày\nHọc từ vựng thông qua hình ảnh, hành động, tưởng tượng giúp khắc sâu vào tiềm thức\nNạp được một khối lượng lớn các cấu trúc ngữ pháp giúp diễn tả ý dễ dàng, mạch lạc hơn\nHọc phát triển câu thông qua các cấu trúc. Chỉ với một cấu trúc, bạn có thể phát triển thành nhiều câu khác nhau\nCác bài tập thực hành luyện nghe và nói cùng giảng viên giúp giúp khả năng nghe nói của người học trở nên lưu loát và tự nhiên hơn\nCác bài học thực hành đóng vai giúp người học trở nên hứng thú hơn khi học tiếng Anh\nLuyện phản xạ nhanh thông qua các bài học hỏi và đáp cùng giảng viên.\nTất cả các bài học trong khóa học đều nhằm mục đích cuối cùng là nâng cao và phát triển kỹ năng nghe nói và phản xạ tiếng Anh của người học.\nPhù hợp với\nVốn từ vựng ít, không có đủ các cấu trúc ngữ pháp để giao tiếp tự nhiên\nKhông thể nói được một câu một cách chuẩn chỉnh, hay mắc tình trạng ghép các từ lại với nhau để nói\nMuốn phát triển khả năng nghe nói và phản xạ của mình\nMuốn giao tiếp tự tin với người nước ngoài\nMuốn có một hệ thống bài học cụ thể, chi tiết và đầy đủ có thể học bất cứ lúc nào và bất cứ nơi đâu.\nThực sự muốn giỏi tiếng Anh và tiết kiệm thời gian ở mức tối đa.\n', 'Tiếng Việt', 'Sơ cấp', 'Trọn bộ kỹ năng tiếng anh cơ bản.\n Giao tiếp tiếng Anh từ con số 0.', '2020-08-18 17:04:48', '2020-08-18 17:04:48', NULL),
(7, 'Lộ trình chinh phục IELTS 6.5 + (Phần 1)', 599000, 2, 1, 3, '7.jpeg', 'Bạn đang loay hoay tự học IELTS để đạt được mức điểm 6.5\nhay cao hơn mà chưa tìm ra được một phương pháp luyện thi hiệu quả và phù hợp?\nBạn cần sự hướng dẫn chi tiết - \"\"cầm tay chỉ việc\"\" từ một giảng viên giàu kinh nghiệm - máu lửa - tận tâm?\nBạn cần một cách tiếp cận dễ hiểu - dễ áp dụng - \"\"ăn liền\"\" để nhanh chóng đạt được mục tiêu đặt ra?\nHiểu được điều đó, cô Hằng Mun đã dốc sức xây dựng khóa IELTS ăn liền - cấp tốc chinh phục IELTS 5.5+. Với kinh nghiệm luyện thi IELTS trên 5 năm với hàng ngàn học viên đã đạt mục tiêu, cùng cách truyền đạt hấp dẫn, lôi cuốn và sự tương tác với học viên thông qua các câu hỏi, các ví dụ minh họa sống động, cùng hàng nghìn bài luyện tập được giải thích một cách chi tiết và cẩn thận, khóa học này giúp các bạn:\n- Nắm chắc dạng đề thi và các kiến thức mà bài thi IELTS yêu cầu.\n- Hướng dẫn phương pháp, các chiến thuật làm bài của từng phần thi trong bài thi IELTS.\n- Lý thuyết đi kèm với luyện tập giúp dễ hiểu, dễ áp dụng\n\n- Tổng hợp các bí quyết để làm bài thi IELTS hiệu quả\n\n- Các kỹ thuật tránh lỗi, tránh bẫy hay gặp khi luyện thi và làm bài thi IELTS\n\n-Các cấu trúc từ vựng - ngữ pháp ăn liền giúp tăng điểm ngay trong bài thi IELTS Writing - Speaking\n\n- Luyện tập với bộ câu hỏi sát đề thi được giải thích tỉ mỉ và chi tiết.\n- Tặng kèm bộ tài liệu khủng 100+ sách và bí kíp ôn thi IELTS\n\nLợi ích từ khoá học\nNắm chắc dạng đề thi và các kiến thức mà bài thi IELTS yêu cầu.\nHướng dẫn phương pháp, các chiến thuật làm bài của từng phần thi trong bài thi IELTS.\nLý thuyết đi kèm với luyện tập giúp dễ hiểu, dễ áp dụng\nTổng hợp các bí quyết để làm bài thi IELTS hiệu quả\nCác kỹ thuật tránh lỗi, tránh bẫy hay gặp khi luyện thi và làm bài thi IELTS\nCác cấu trúc từ vựng - ngữ pháp ăn liền giúp tăng điểm ngay trong bài thi IELTS Writing - Speaking\nLuyện tập với bộ câu hỏi sát đề thi được giải thích tỉ mỉ và chi tiết.\nHệ thống bài tập về nhà đồ sộ và tài liệu tham khảo đi kèm với từng bài học giúp học viên áp dụng ngay những kiến thức đã học vào luyện tập\nPhù hợp với\nNgười đi làm từ 22 - 35 tuổi (cần IELTS để tìm việc, chuyển việc tốt hơn, thăng tiến trong công việc)\nNgười đi học,học sinh, sinh viên đại học, cao đẳng từ 18 - 22 tuổi (cần IELTS để vào các chương trình học, tốt nghiệp ra trường, thay thế cho điểm thi Tiếng Anh vào Đại học, chuẩn bị cho đi du học) .\nNgười có nguyện vọng đi du học từ 18 - 35 tuổi tại tất cả các quốc gia yêu cầu điểm IELTS như Anh, Úc, Mỹ, Canada, New Zealand, Châu Âu..\n', 'Tiếng Việt', 'Chuyên sâu', 'Luyện thi IELTS 6.5', '2020-08-18 17:04:48', '2020-08-18 17:04:48', NULL),
(8, 'Lộ trình chinh phục IELTS 6.5 + (Phần 2)', 599000, 2, 1, 3, '8.jpeg', 'Bạn đang loay hoay tự học IELTS để đạt được mức điểm 6.5\nhay cao hơn mà chưa tìm ra được một phương pháp luyện thi hiệu quả và phù hợp?\nBạn cần sự hướng dẫn chi tiết - \"\"cầm tay chỉ việc\"\" từ một giảng viên giàu kinh nghiệm - máu lửa - tận tâm?\nBạn cần một cách tiếp cận dễ hiểu - dễ áp dụng - \"\"ăn liền\"\" để nhanh chóng đạt được mục tiêu đặt ra?\nHiểu được điều đó, cô Hằng Mun đã dốc sức xây dựng khóa IELTS ăn liền - cấp tốc chinh phục IELTS 5.5+. Với kinh nghiệm luyện thi IELTS trên 5 năm với hàng ngàn học viên đã đạt mục tiêu, cùng cách truyền đạt hấp dẫn, lôi cuốn và sự tương tác với học viên thông qua các câu hỏi, các ví dụ minh họa sống động, cùng hàng nghìn bài luyện tập được giải thích một cách chi tiết và cẩn thận, khóa học này giúp các bạn:\n- Nắm chắc dạng đề thi và các kiến thức mà bài thi IELTS yêu cầu.\n- Hướng dẫn phương pháp, các chiến thuật làm bài của từng phần thi trong bài thi IELTS.\n- Lý thuyết đi kèm với luyện tập giúp dễ hiểu, dễ áp dụng\n\n- Tổng hợp các bí quyết để làm bài thi IELTS hiệu quả\n\n- Các kỹ thuật tránh lỗi, tránh bẫy hay gặp khi luyện thi và làm bài thi IELTS\n\n-Các cấu trúc từ vựng - ngữ pháp ăn liền giúp tăng điểm ngay trong bài thi IELTS Writing - Speaking\n\n- Luyện tập với bộ câu hỏi sát đề thi được giải thích tỉ mỉ và chi tiết.\n- Tặng kèm bộ tài liệu khủng 100+ sách và bí kíp ôn thi IELTS\n\nLợi ích từ khoá học\nNắm chắc dạng đề thi và các kiến thức mà bài thi IELTS yêu cầu.\nHướng dẫn phương pháp, các chiến thuật làm bài của từng phần thi trong bài thi IELTS.\nLý thuyết đi kèm với luyện tập giúp dễ hiểu, dễ áp dụng\nTổng hợp các bí quyết để làm bài thi IELTS hiệu quả\nCác kỹ thuật tránh lỗi, tránh bẫy hay gặp khi luyện thi và làm bài thi IELTS\nCác cấu trúc từ vựng - ngữ pháp ăn liền giúp tăng điểm ngay trong bài thi IELTS Writing - Speaking\nLuyện tập với bộ câu hỏi sát đề thi được giải thích tỉ mỉ và chi tiết.\nHệ thống bài tập về nhà đồ sộ và tài liệu tham khảo đi kèm với từng bài học giúp học viên áp dụng ngay những kiến thức đã học vào luyện tập\nPhù hợp với\nNgười đi làm từ 22 - 35 tuổi (cần IELTS để tìm việc, chuyển việc tốt hơn, thăng tiến trong công việc)\nNgười đi học,học sinh, sinh viên đại học, cao đẳng từ 18 - 22 tuổi (cần IELTS để vào các chương trình học, tốt nghiệp ra trường, thay thế cho điểm thi Tiếng Anh vào Đại học, chuẩn bị cho đi du học) .\nNgười có nguyện vọng đi du học từ 18 - 35 tuổi tại tất cả các quốc gia yêu cầu điểm IELTS như Anh, Úc, Mỹ, Canada, New Zealand, Châu Âu..\n', 'Tiếng Việt', 'Chuyên sâu', 'Luyện thi IELTS 6.5', '2020-08-18 17:04:48', '2020-08-18 17:04:48', NULL),
(9, 'Những lỗi thường gặp trong bài thi IELTS - Trình độ cao cấp', 599000, 3, 1, 3, '9.png', 'Những lỗi thường gặp trong bài thi IELTS trình độ cao cấp\n- Khóa học gồm:\n- 30 bài giảng thời lượng khoảng 180 phút\n- Nội dung của khóa học:\nCung cấp cho người học những kiến thức ngữ pháp và từ vựng về những lỗi thường gặp trong bài thi IELTS, giúp người học củng cố và cải thiện điểm số trong bài thi IELTS.\nPhương thức giảng dạy của khóa học: Khóa học gồm 30 bài; mỗi bài xoay quanh một chủ đề cụ thể, được giáo viên trình bày một cách cô động, thuyết phục. Bên cạnh đó, giáo viên thường xuyên đưa ra các ví dụ minh họa giúp người học hiểu nhanh và nhớ lâu.\n\nLợi ích từ khoá học\nSau khi hoàn thành khóa học cộng với việc ôn luyện thường xuyên, người học sẽ tự tin hơn khi giao tiếp bằng tiếng Anh, nắm kiến thức vững hơn và đặc biệt điểm thi IELTS sẽ được cải thiện rõ rệt\nPhù hợp với\nĐối tượng của khóa học: học sinh, sinh viên, người đi làm trong nhiều lĩnh vực, người học tiếng Anh muốn cải thiện điểm thi IELTS, người học tiếng Anh muốn ôn luyện và củng cố kiến thức', 'Tiếng Việt', 'Chuyên sâu', 'Kỹ năng ôn luyện và thi IELTS', '2020-08-18 17:04:48', '2020-08-18 17:04:48', NULL),
(10, 'Tiếng Đức sơ cấp cho người mới bắt đầu', 199000, 3, 1, 3, '10.jpg', 'Hiện nay, Đức nằm trong top 3 những nước được yêu thích\nnhất của du học sinh toàn thế giới. Bằng cấp của các trường đại học tại Đức được nhà tuyển dụng trên toàn thế giới đánh giá rất cao. Ngoài ra, nước Đức là một quốc gia năng động với nền văn hóa đa dạng trong lòng Châu Âu. Vậy tại sao bạn không lựa chọn học tiếng Đức – thứ ngôn ngữ mà người ta gọi là: “Ngôn ngữ khởi nguồn của mọi ngôn ngữ”.\nKhóa học \"\"Tiếng Đức sơ cấp cho người mới bắt đầu\"\" sẽ giúp bạn có những kiến thức cơ bản nhất thông qua các bài tập tình huống, hiện tượng ngữ pháp cơ bản nhất. Sau khóa học:\n+ Các bạn sẽ tự tin đi sâu vào trình độ tiếng Đức nâng cao\n+ Tự tin giao tiếp cơ bản với người bản ngữ\nCác chương mục trong khóa học này được xây dựng một cách khoa học và có tính hệ thống. Các đầu mục được sắp xếp từ cơ bản đến phức tạp và có mối liên hệ chặt chẽ với nhau, giúp cho người học dễ dàng tiếp nhận kiến thức.\n\nLợi ích từ khoá học\nSau khi hoàn thành Khóa học, các bạn hoàn toàn đủ khả năng:\nĐọc hiểu các văn bản thông thường\nViết câu phức\nGiao tiếp trong các tình huống thường nhật\nHọc kiến thức cao hơn với nền tảng kiến thức cơ bản vững chãi\nPhù hợp với\nNhững ai yêu thích nước Đức và học tiếng Đức\nNhững người chưa biết gì về tiếng Đức muốn học các kiến thức cơ bản\nNhững ai muốn làm việc tại các công ty Đức hoặc liên quan đến tiếng Đức', 'Tiếng Việt', 'Sơ cấp', 'Nhập môn tiếng Đức', '2020-08-18 17:04:48', '2020-08-18 17:04:48', NULL),
(11, 'NỀN TẢNG NGỮ PHÁP TIẾNG TRUNG - HSK5', 199000, 4, 1, 3, '11.png', 'Hiện nay, Đức nằm trong top 3 những nước được yêu thích\nnhất của du học sinh toàn thế giới. Bằng cấp của các trường đại học tại Đức được nhà tuyển dụng trên toàn thế giới đánh giá rất cao. Ngoài ra, nước Đức là một quốc gia năng động với nền văn hóa đa dạng trong lòng Châu Âu. Vậy tại sao bạn không lựa chọn học tiếng Đức – thứ ngôn ngữ mà người ta gọi là: “Ngôn ngữ khởi nguồn của mọi ngôn ngữ”.\nKhóa học \"\"Tiếng Đức sơ cấp cho người mới bắt đầu\"\" sẽ giúp bạn có những kiến thức cơ bản nhất thông qua các bài tập tình huống, hiện tượng ngữ pháp cơ bản nhất. Sau khóa học:\n+ Các bạn sẽ tự tin đi sâu vào trình độ tiếng Đức nâng cao\n+ Tự tin giao tiếp cơ bản với người bản ngữ\nCác chương mục trong khóa học này được xây dựng một cách khoa học và có tính hệ thống. Các đầu mục được sắp xếp từ cơ bản đến phức tạp và có mối liên hệ chặt chẽ với nhau, giúp cho người học dễ dàng tiếp nhận kiến thức.\n\nLợi ích từ khoá học\nSau khi hoàn thành Khóa học, các bạn hoàn toàn đủ khả năng:\nĐọc hiểu các văn bản thông thường\nViết câu phức\nGiao tiếp trong các tình huống thường nhật\nHọc kiến thức cao hơn với nền tảng kiến thức cơ bản vững chãi\nPhù hợp với\nNhững ai yêu thích nước Đức và học tiếng Đức\nNhững người chưa biết gì về tiếng Đức muốn học các kiến thức cơ bản\nNhững ai muốn làm việc tại các công ty Đức hoặc liên quan đến tiếng Đức', 'Tiếng Việt', 'Chuyên sâu', 'Kỹ năng ôn luyện và thi IELTS', '2020-08-18 17:04:48', '2020-08-18 17:04:48', NULL),
(12, 'NỀN TẢNG NGỮ PHÁP TIẾNG TRUNG - HSK5', 199000, 4, 1, 3, '12.jpg', 'Khóa học được thiết kế 15 bài:\n- Mỗi bài giảng bao gồm:\n+ Bài khóa.\n+ Giảng chi tiết từ vựng, ngữ pháp.\n+ Phần hỗ trợ ôn tập nhớ từ vựng.\n+ Câu hỏi và bài tập củng cố kiến thức.\n- Bài giảng trực quan như học trực tiếp.\n- Có những yêu cầu học tập cụ thể cho học viên trong quá trình học.\n\nLợi ích từ khoá học\nCó thể tham gia kỳ thi năng lực tiếng Hán từ trình độ HSK từ cấp 3 đến cấp 5.\nPhù hợp với\nMọi đối tượng đã học tiếng Trung từ trình độ sơ cấp trở lên.', 'Tiếng Việt', 'Sơ cấp', 'Nhập môn tiếng Trung', '2020-08-18 17:04:48', '2020-08-18 17:04:48', NULL),
(13, 'Nhập môn lập trình Web', 199000, 5, 2, 3, '13.png', 'Bạn là người mới và muốn bước đầu tìm hiểu về lập trình web?\nBạn muốn tự xây dựng trang web cho sản phẩm của mình?\n\nBạn muốn tìm tòi học hỏi những điều mới, chuyên môn mới?\n\nBạn có niềm đam mê với bộ môn lập trình web nhưng đang băn khoăn không biết nên chọn khóa học nào?\n\nĐừng lo lắng! Hãy đến với khóa học \"\"Nhập môn lâp trình web\"\" của chúng tôi để học tất cả những điều căn bản nhất về lập trình web.\n\nKhóa học \"\"Nhập môn lập trình Web\"\" sẽ cho bạn cái nhìn tổng quan nhất về lập trình web. Những yếu tố giúp bạn đưa ra quyết định có nên học lập trình web hay không.\n\nĐồng thời khóa học cũng giới thiệu cách thức sử dụng các công cụ đơn giản và dễ dùng nhất để xây dựng một trang web của riêng bạn.\n\nLợi ích từ khoá học\nBiết được lý do tại sao bạn nên học lập trình web mà không phải một môn lập trình nào khác.\nHiểu được lập trình web là gì và những kiến thức cơ bản nhất về lập trình web.\nPhù hợp với\nNhững người mong muốn học lập trình web.\nHọc sinh, sinh viên khoa CNTT.\nHọc sinh, sinh viên có ngành khác mong muốn học hỏi cái mới.', 'Tiếng Việt', 'Sơ cấp', 'Hãy bắt đầu lập trình Web từ những vấn đề cơ bản nhất', '2020-08-18 17:04:48', '2020-08-18 17:04:48', NULL),
(14, 'Dựng web chuyên nghiệp với Drupal', 499000, 5, 2, 3, '14.png', 'Drupal mang đến nhiều thay đổi đột phá cho hệ sinh thái của nó,\ntừ kiến trúc cơ bản đến chức năng. Hiểu những thay đổi này là rất quan trọng đối với bạn nếu bạn đang cố gắng khám phá Drupal và trở thành một chuyên gia Drupal đủ điều kiện. Video này sẽ giúp bạn xây dựng cấp độ kỹ năng Drupal của bạn từ cấp độ mặt đất và cho phép bạn tạo một ứng dụng Drupal hiệu quả từ đầu.\n\nChúng tôi bắt đầu với các tiêu điểm chính của các tính năng chính của Drupal và lý do tại sao chúng quan trọng với bạn. Tiếp theo, bạn sẽ học cách cài đặt và tùy chỉnh Drupal trên đường một cách dễ dàng và hiệu quả, đảm bảo các kho lưu trữ và thư viện cần thiết có trong hệ thống của bạn. Sau đó, bạn sẽ bắt đầu xây dựng ứng dụng Drupal của mình, tạo kiến trúc ứng dụng và sử dụng rộng rãi các chế độ xem và thành phần của Drupal . Bạn sẽ thấy cách tạo các mẫu có thể sử dụng lại bằng cách sử dụng tập lệnh PHP, sử dụng trình cắm và tự mình phát triển các trình cắm đơn giản. Đến cuối video, bạn cũng sẽ tìm ra cách kiểm tra, triển khai và giám sát ứng dụng của mình một cách hiệu quả.\n\nLợi ích từ khoá học\nKhám phá cách tạo các trang web phức tạp một cách nhanh chóng.\nTìm hiểu cách sử dụng các khối xây dựng của Drupal.\nLàm việc với mô-đun Lượt xem mạnh mẽ.\nQuản lý người dùng và quyền của trang web.\nKhám phá thế giới của nhiều góc nhìn và thành phần khác nhau trong Drupal 8.\nHiểu quy trình tạo các mẫu có thể tái sử dụng.\nSử dụng các plugin khác nhau và tạo các plugin của riêng bạn.\nHiểu cách kiểm tra, triển khai và giám sát ứng dụng của bạn.\nPhù hợp với\nNếu bạn là một nhà phát triển PHP có kiến ​​thức cơ bản về cách các hệ thống CMS hoạt động, thì đây là khóa học hoàn hảo cho bạn.', 'Tiếng Việt', 'Sơ cấp', 'Tự tin chinh phục Drupal chỉ với vài thao tác cơ bản và không cần biết lập trình', '2020-08-18 17:04:48', '2020-08-18 17:04:48', NULL),
(15, 'Tự học lập trình website chỉ trong 6 tuần', 199000, 5, 2, 3, '15.png', 'Drupal mang đến nhiều thay đổi đột phá cho hệ sinh thái của nó,\ntừ kiến trúc cơ bản đến chức năng. Hiểu những thay đổi này là rất quan trọng đối với bạn nếu bạn đang cố gắng khám phá Drupal và trở thành một chuyên gia Drupal đủ điều kiện. Video này sẽ giúp bạn xây dựng cấp độ kỹ năng Drupal của bạn từ cấp độ mặt đất và cho phép bạn tạo một ứng dụng Drupal hiệu quả từ đầu.\n\nChúng tôi bắt đầu với các tiêu điểm chính của các tính năng chính của Drupal và lý do tại sao chúng quan trọng với bạn. Tiếp theo, bạn sẽ học cách cài đặt và tùy chỉnh Drupal trên đường một cách dễ dàng và hiệu quả, đảm bảo các kho lưu trữ và thư viện cần thiết có trong hệ thống của bạn. Sau đó, bạn sẽ bắt đầu xây dựng ứng dụng Drupal của mình, tạo kiến trúc ứng dụng và sử dụng rộng rãi các chế độ xem và thành phần của Drupal . Bạn sẽ thấy cách tạo các mẫu có thể sử dụng lại bằng cách sử dụng tập lệnh PHP, sử dụng trình cắm và tự mình phát triển các trình cắm đơn giản. Đến cuối video, bạn cũng sẽ tìm ra cách kiểm tra, triển khai và giám sát ứng dụng của mình một cách hiệu quả.\nLợi ích từ khoá học\nKhám phá cách tạo các trang web phức tạp một cách nhanh chóng.\nTìm hiểu cách sử dụng các khối xây dựng của Drupal.\nLàm việc với mô-đun Lượt xem mạnh mẽ.\nQuản lý người dùng và quyền của trang web.\nKhám phá thế giới của nhiều góc nhìn và thành phần khác nhau trong Drupal 8.\nHiểu quy trình tạo các mẫu có thể tái sử dụng.\nSử dụng các plugin khác nhau và tạo các plugin của riêng bạn.\nHiểu cách kiểm tra, triển khai và giám sát ứng dụng của bạn.\nPhù hợp với\nNếu bạn là một nhà phát triển PHP có kiến ​​thức cơ bản về cách các hệ thống CMS hoạt động, thì đây là khóa học hoàn hảo cho bạn.', 'Tiếng Việt', 'Sơ cấp', 'Tự Xây Dựng 10 Trang Web Chỉ Trong 6 Tuần', '2020-08-18 17:04:48', '2020-08-18 17:04:48', NULL),
(16, 'Thiết kế Website siêu tốc trong 30 phút bằng các công cụ', 499000, 6, 2, 3, '16.jpg', 'Website là cách hiệu quả nhất để đưa thông tin và thuyết phục khách\nhàng mua sản phẩm của bạn.\n\nTuy nhiên, thuê người làm 1 website tại Việt Nam sẽ tốn từ 500,000 đến 3,000,000 đồng, chi phí này còn phụ thuộc vào độ phức tạp mà bạn mong muốn cho trang web của bạn.\n\nĐến với khóa học này, bạn sẽ biết cách sử dụng các công cụ siêu tốc phổ biến để thiết kế ra một trong web dễ dàng, chỉ trong 30 phút!\n\nNgoài ra, khóa học đem đến cho các bạn những kiến thức về Wordpress - một công cụ quyền năng dùng để tạo ra trang web riêng mang phong cách của bạn!\n\nĐặc biệt: Tặng miễn phí theme Sahifa sử dụng trong suốt khóa học trị giá $59.99\n\nKhóa học này cung cấp công cụ và phương pháp giúp bạn dễ dàng thiết kế website hoàn chỉnh mà không cần chuyên về IT, không cần biết về lập trình. Khóa học tập trung đi sâu vào WordPress, giúp bạn thành thạo một công cụ quyền năng nhất trong lĩnh vực Internet hiện nay, giúp bạn có được website không những nhanh, đẹp mà còn rất chuyên nghiệp. \n\nBạn sẽ được hướng dẫn công thức 4 bước Thiết kế Web Siêu Tốc để hoàn thành một website nhanh với WordPress, sau đó bạn được chỉ dẫn các cách thức quản trị website chuyên nghiệp, làm sao dễ dàng chỉnh sửa web, dễ thay đổi nội dung theo ý muốn mà không cần phải nhờ vả vào bộ phận IT, bạn hoàn toàn có thể tự mình làm được tất cả, hoàn toàn tự chủ cho website của mình.\n\nKhông dừng lại ở đó, trong chương trình học bạn sẽ được chỉ dẫn những công cụ thiết kế website siêu tốc có sẵn khác, trong nhiều tình huống cụ thể nếu biết cách áp dụng những công cụ này bạn sẽ có được những website mạnh mẽ, phù hợp mà không cần tốn nhiều thời gian canh chỉnh và thiết kế.\n\nBẠN SẼ BỎ LỠ ĐIỀU GÌ NẾU KHÔNG THAM GIA KHÓA HỌC NÀY?\n\n- Kỹ năng đơn giản nhất vận hành website;\n\n- Các công cụ miễn phí giúp bạn vận hành web site dễ dàng nhất\n\n- Học kiến thức cơ bản về thiết kế, vận hành web\n\n- Giảm thiểu chi phí và tiết kiệm thời gian vận hành website của bạn\n\nLợi ích từ khoá học\nHiểu được tầm quan trọng của website.\nBiết cách quản trị, thay đổi, chỉnh sửa website theo ý muốn, sử dụng hiệu quả đúng mục đích.\nCó thể bắt tay tự tạo ngay một website chỉ trong 30 phút, tiết kiệm chi phí và thời gian cho cá nhân và doanh nghiệp.\nPhù hợp với\nNgười muốn phát triển nghề nghiệp lập trình web.\nNhững doanh nhân, chủ doanh nghiệp muốn tạo ra website để phục vụ mục đích cá nhân (Bán hàng, quảng bá thương hiệu...).\nNgười muốn kiếm tiền từ lập trình web (freelancer...).', 'Tiếng Việt', 'Sơ cấp', 'Học cách tạo ra một Website chỉ trong 30 phút với Wordpress và các công cụ tạo web siêu tốc', '2020-08-18 17:04:48', '2020-08-18 17:04:48', NULL),
(17, 'Làm trang web của riêng bạn với HTML, CSS & Javascript', 599000, 6, 2, 3, '17.png', 'Hiện nay, lập trình nói chung & lập trình Web nói riêng đang là xu\n hướng được nhiều bạn trẻ quan tâm. Với kinh nghiệm 5 năm giảng dạy về lập trình Web, tôi tự tin mang đến cho các bạn khóa học \"\"Xây dựng trang web của riêng bạn với HTML, CSS & Javascript\"\", nơi tập hợp nhiều kinh nghiệm quý giá tôi đã đúc kết được trong suốt quá trình làm việc với bộ công cụ tuyệt vời này:\n\n- Giải thích rõ ràng & dễ hiểu tất cả các khái niệm cơ bản của HTML - CSS\n\n- Hướng dẫn trực quan từng bước một để xây dựng nên 1 trang web bằng HTML & CSS\n\n- Chia sẻ các bí quyết & kinh nghiệm thực tế qua 5 năm làm việc trực tiếp với lập trình Web front-end\n\nVì sao các bạn nên học khóa này?\n\n- Thích lập trình Web nhưng không biết bắt đầu từ đâu\n\n- Đã từng đọc qua nhiều tài liệu về HTML - CSS nhưng không hiểu tường tận các ngóc ngách của vấn đề\n\n- Đã làm một vài dự án nhỏ bằng HTML & CSS nhưng chưa hài lòng về chất lượng hay muốn nâng cao hơn để có thể làm việc trong những dự án lớn hơn\n\n- Kiếm được nhiều tiền hơn bằng HTML - CSS kết hợp với những kỹ năng bạn đã biết trước đó\n\nLợi ích từ khoá học\nNắm vững các khái niệm về lập trình HTML - CSS\nBiết cách sử dụng các tính năng của HTML - CSS để làm nên 1 trang web đẹp\nCó thể tự thực hành & tìm hiểu để nâng cao hơn nữa kỹ năng làm việc với HTML - CSS & rộng hơn là lập trình Web front-end\nPhù hợp với\nKhóa học này dành cho tất cả các bạn yêu thích lập trình, kể cả các bạn chưa biết gì về lập trình\nNếu đã học qua khóa \"\"Nhập môn lập trình Web\"\" do tôi dạy, các bạn có thể đi nhanh hơn và hiểu sâu hơn các khái niệm đưa ra trong khóa học này\nĐối với những ai đã lập trình chuyên nghiệp, khóa học này có thể giúp các bạn có góc nhìn khác phong phú hơn về lập trình Web dựa trên kinh nghiệm 5 năm dạy lập trình Web của tôi', 'Tiếng Việt', 'Trung cấp', 'Xây dựng trang web của riêng bạn với HTML, CSS & Javascript', '2020-08-18 17:04:48', '2020-08-18 17:04:48', NULL),
(18, 'Làm web không cần code', 599000, 7, 2, 3, '18.png', 'Trong xu thế công nghệ hiện nay cách người dùng cũng như \ncách kinh doanh của bạn hoàn toàn thay đổi. Chỉ cần một chiếc máy tính hay một máy điện thoại bạn hoàn toàn có thể điều hành một hệ thống kinh doanh quản lý các đơn hàng một cách mượt mà kể cả bạn không có mặt!\n\nĐến với khóa học, bạn sẽ được học về các ứng dụng plugin, theme của Wordpress. Tôi sẽ hướng dẫn bạn cách trang bị miễn phí các ứng dụng bổ trợ (plugin/addon) nổi tiếng và đắt tiền trị giá hàng trăm USD. Khi đã hiểu rõ cách làm, các bạn sẽ tạo nên những website cực kì chuyên nghiệp, đẳng cấp.\n\nXuyên suốt khóa học là các loại website: website tin tức, website bán hàng, website giới thiệu sản phẩm, giới thiệu công ty, website nhà hàng, địa điểm ăn uống. Kết thúc khóa học, bạn sẽ đủ kiến thức để tự tin quản lý, xây dựng bất kỳ website nào theo mong muốn.\n\nĐặc biệt, khung chương trình khóa học luôn được mở rộng và cập nhật thường xuyên với nhiều phương pháp làm web cho các loại web khác nhau. Những thủ thuật hay nhất, kinh nghiệm đáng giá nhất, công cụ hiệu dụng nhất, kiến thức mới nhất… sẽ được cập nhật thường xuyên trên khóa học để các bạn luôn nắm được những công nghệ mới nhất cho website của mình. \n\nHọc viên được hỗ trợ đặc biệt, học hỏi và trao đổi lẫn nhau qua cộng đồng bí mật dành riêng, các vấn đề cấp thiết cần gấp có thể hỗ trợ qua mail. Thậm chí nếu thời gian của bạn có hạn, tôi có thể trả lời bằng cách quay video support và up lên để bạn làm theo.\n\nLợi ích từ khoá học\nĐược học cách làm tất cả các loại website thuộc 2 chủ đề lớn website thông tin và website thương mại điện tử.\nĐược hướng dẫn thiết kế trang web nhà hàng coffee từ A - Z, theo kiểu cầm tay chỉ việc.\nĐược hướng dẫn làm website bán hàng của riêng bạn từ A - Z, giải thích những vấn đề chi tiết nhất của việc cài đặt website bán hàng, giải thích chi tiết qui trình bán hàng, tính phí ship hàng thế nào, thanh toán bằng chuyển khoản thế nào, phân loại sản phẩm...\nĐược học cách thiết kế trang web giới thiệu nhãn hàng, landing page với đầy đủ hiệu ứng, chức năng và nội dung.\nHọc cách sử dụng wordpress để kéo thả các khối text, ảnh, chia cột trong web, đặt hiệu ứng, đặt nội dung và vị trí theo ý muốn.\nSau khi hoàn thành khóa học, đảm bảo bạn có thể sao chép được 90% các website mong muốn.\nPhù hợp với\nBất cứ ai muốn tạo một trang web cho doanh nghiệp của họ (để bán sản phẩm, dịch vụ giới thiệu hoặc hiển thị thông tin liên hệ).\nBất cứ ai muốn tạo một trang web sơ yếu lý lịch / danh mục đầu tư (để hiển thị các kỹ năng, kinh nghiệm và sơ yếu lý lịch, hoặc giới thiệu các dự án và danh mục đầu tư trong quá khứ).\nBất cứ ai muốn tạo một blog (để đi kèm với một trang web kinh doanh, chụp email hoặc như một blog cá nhân).\nBất cứ ai muốn học cách phát triển trang web nói chung.\nBất cứ ai muốn tìm hiểu cách sử dụng WordPress để phát triển trang web.', 'Tiếng Việt', 'Trung cấp', 'Làm web không cần code', '2020-08-18 17:04:48', '2020-08-18 17:04:48', NULL),
(19, 'Laravel PHP Framework', 199000, 7, 2, 3, '19.jpg', 'Khoá học này sẽ hướng dẫn bạn phát triển một website\nphần backend từ đầu tới cuối với ngôn ngữ PHP thông qua việc sử dụng Framework PHP mạnh mẽ nhất bây giờ là Laravel 5.3\n- Khoá học được thiết kế theo phương pháp Learning by Doing. Học thông qua làm.\n- Thông qua những ví dụ những bài tập và đặc biệt là thông qua dự án cuối môn, bạn sẽ hiểu và làm được những việc sau:\n+ Tạo ứng dụng web theo kiến trúc MVC: Ứng dụng tinh gọn, dễ dàng tuỳ biến và bảo trì\n+ Thực hiện điều hướng trang web thông qua route của Laravel\n+ Tương tác với cơ sở dữ liệu thông qua hệ thống ORM có sẵn của Laravel\n+ Tương tác với cơ sở dữ liệu bằng cách sử dụng lệnh SQL\n+ Xây dựng website với toàn bộ các thao tác Thêm, Sửa, Xoá, Truy Vấn\n+ Thiết lập và xây dựng kiến trúc cơ sở dữ liệu thông qua các file PHP.\n+ Tạo layout chung cho ứng dụng web\n+ Từ làm một website ứng dụng ToDoList từ đầu tới cuối với đầy đủ tính năng thao tác với cơ sở dữ liệu\n\nKết thúc khoá học, nếu bạn làm được project của dự án, thì tôi tin là bạn đã sẵn sàng để làm công việc của 1 developer PHP ở mức độ thành thạo. Bạn hãy tự tin để bắt đầu một công việc mới nhé!\n\nLợi ích từ khoá học\nXây dựng ứng dụng web hoàn chỉnh có tính tương tác với dữ liệu bằng PHP\nLàm việc với Laravel Framework mới nhất\nXây dựng web theo mô hình MVC\nSử dụng Eloquent ORM để truy vấn dữ liệu\nSử dụng SQL trong Laravel Framework\nThiết lập template cho website với Blade Template\nXây dựng form để thu thập dữ liệu\nHiển thị dữ liệu\nTìm kiếm dữ liệu\nCập nhật và xoá dữ liệu\nĐịnh hướng trang web với Route\nPhù hợp với\nSinh viên muốn trở thành lập trình viên web php chuyên nghiệp\nLập trình viên muốn học framework tuyệt vời nhất của php\nNgười muốn kiếm tiền từ công việc làm freelancer php developer', 'Tiếng Việt', 'Sơ cấp', 'Làm quen với framword laravel', '2020-08-18 17:04:48', '2020-08-18 17:04:48', NULL),
(20, 'Trọn bộ kiến thức NodeJS', 599000, 7, 2, 3, '20.png', 'Hiện nay, công nghệ thông tin xuất hiện ở mọi nơi,\nsự phát triển nhanh chóng của nó kéo theo việc ngành lập trình trở thành một một lựa chọn lý tưởng cho các bạn trẻ. Và khi nhắc tới lập trình, ta có thể nói tới NodeJS. NodeJS là một nền tảng viết bằng JavaScript giúp xây dựng các ứng dụng mạng nhanh và khả mở. NodeJS được InfoWorld bình chọn là \"\"Công nghệ của năm\"\" năm 2012.\n\n- Bạn là sinh viên CNTT, người vừa đi làm trong lĩnh vực CNTT\n\n- Bạn có mong muốn tạo ra các sever games online, các ứng dụng, hay muốn đảm bảo ứng dụng hoạt động nhanh, đồng thời xử lý nhiều dữ liệu trong thời gian ngắn.\n\nNodeJS chính là những gì bạn cần!\n\nTại sao lại sử dụng Node.js?\nĐầu tiên là ưu điểm về tốc độ thực thi và khả năng mở rộng. Node.js có tốc độ rất nhanh. Đó là một yêu cầu khá quan trọng khi bạn là một startup đang cố gắng tạo ra một sản phẩm lớn và muốn đảm bảo có thể mở rộng nhanh chóng, đáp ứng được một lượng lớn người dùng khi trang web của bạn phát triển lên. \n\nNode.js có thể xử lý hàng ngàn kết nối đồng thời trong khi PHP sẽ chỉ có nước sụp đổ. Bên cạnh các lợi ích về tốc độ thực thi và khả năng mở rộng, có thể bạn cũng đã biết một chút về JavaScript, vì vậy tại sao lại phải phiền toái để học thêm về một ngôn ngữ lập trình hoàn toàn mới như PHP? Và sau đó bạn sẽ có một sự phấn khích khi học về một cái gì đó mới mẻ và gần như chưa được khám phá. Bạn còn nhớ cái cảm giác khi mà một cái gì đó mới xuất hiện và sau đó trở thành phổ biến khắp mọi nơi mà bạn hối tiếc đã không học về nó sớm hơn, và mãi mãi chỉ là người đến sau? Đừng phạm phải sai lầm như vậy lần này nữa. Node.js đang ngày càng trở nên lớn mạnh hơn.\n\nChúng tôi hân hạnh mang đến khóa học \"\"Trọn bộ kiến thức Node.js\"\", khóa học đầu tiên đầy đủ và chi tiết về NodeJS tại Việt Nam. Khóa học sẽ mang đến cho bạn trọn bộ kiến thức về Nodej.s. Ngay sau khóa học bạn có thể:\n\n- Tăng tốc độ xử lý website cuả bạn gấp 5 lần với NodeJS\n\n- Tự mình tạo ra các ứng dụng thời gian thật: Những trang web, server games online.\n\n- Nhanh chóng sửa chữa các lỗi trong ứng dụng của bạn mà các phần còn lại của ứng dụng vẫn hoạt động bình thường.\n\nMột khi nắm vững Nodej.s trong tay bạn sẽ dễ dàng trở thành lập trình viên chuyên nghiệp, được nhiều công ty săn đón. Vậy còn chờ gì nữa, hãy nhanh tay đăng ký khóa học của chúng tôi.\n\n \n\nLợi ích từ khoá học\nNắm được kiến thức NodeJS chi tiết và bài bản\nTạo ra các ứng dụng có tốc độ xử lý nhanh\nÁp dụng kiến thức NodeJs cho những sản phẩm startup, yêu cầu thay đổi, mở rộng nhanh, có lượng truy cập lớn\nCải thiện tốc độ thực thi bằng cách áp dụng NodeJS. Đối với 1 tác vụ HTML đơn giản thì NodeJS có hiệu năng gấp đôi PHP\nTrong cùng điều kiện làm việc thì thời gian CPU xử lý ứng dụng NodeJS nhanh gấp 40 lần PHP và chỉ chiếm RAM bằng 1/25 ứng dụng PHP\nPhù hợp với\nNhững sinh viên chuyên ngành CNTT hoặc người vừa đi làm trong lĩnh vực CNTT\nNhững lập trình game muốn tạo ra các sever games online (ứng dụng thời gian thực)\nNếu bạn muốn tạo được các ứng dụng Chat live thì NodeJS là điều không thể thiếu\nNếu bạn đang là webfront end, đặc biệt là cho một Startup, chuyên phải đảm bảo ứng dụng hoạt động nhanh, đồng thời xử lý nhiều dữ liệu trong thời gian ngắn thì khóa học này chắc chắn hữu ích dành cho bạn\nNhững lập trình viên muốn tạo ứng dụng với số lượng dòng code ít hơn so với khi sử dụng những ngôn ngữ lập trình cơ bản như PHP...', 'Tiếng Việt', 'Chuyên sâu', 'Tron bô kiến thức NodeJS', '2020-08-18 17:04:49', '2020-08-18 17:04:49', NULL),
(21, '\"Thành thạo Bootstrap qua 10 website và kiếm tiền từ công việc Freelancer\"', 599000, 8, 2, 3, '21.jpg', 'Tạo Chủ đề Bootstrap 4 nâng cao của riêng bạn từ đầu!\nKhóa học này sẽ chỉ cho bạn cách tạo một Mẫu Bootstrap 4 hoàn chỉnh từ đầu bắt đầu với các tệp HTML, CSS và JavaScript trống! Chúng tôi sẽ di chuyển nhanh chóng để cung cấp cho bạn trải nghiệm xây dựng trang web Bootstrap nhanh nhất nhưng triệt để nhất có thể. Sau khi hoàn thành khóa học, bạn sẽ có thể thiết kế và phát triển các mẫu và chủ đề Bootstrap 4 của riêng bạn. Mã nguồn cho chủ đề đã hoàn thành mà chúng tôi phát triển được bao gồm cùng với:\n\nTải xuống chủ đề Animated Bootstrap 4 đã hoàn thành với hình ảnh gốc và biểu mẫu liên hệ email đầy đủ chức năng .\n\nChủ đề đã hoàn thành với hình ảnh giữ chỗ bao gồm kích thước của chúng (giúp dễ dàng tùy chỉnh chủ đề Bootstrap).\n\n7 phiên bản khác của chủ đề bao gồm các phiên bản sau: Thanh trượt hình ảnh toàn màn hình, Trang đích video cố định, Menu thả xuống đa cấp với Bootstrap Navbar, Phiên bản HTML & PHP 5 trang, Phiên bản tắt hoạt hình và Phiên bản biểu mẫu liên hệ thay thế để gửi email với một địa chỉ khác ngoài tên miền của trang web của bạn.\n\nTiến trình tải mã nguồn cho từng phần của chủ đề trong khi xây dựng trang web của bạn để kiểm tra lỗi mã của bạn.\n\nMột số tài nguyên cho hình ảnh chứng khoán chuyên nghiệp miễn phí không giới hạn, trình soạn thảo văn bản miễn phí, hoạt hình trang web, phông chữ trang web không giới hạn, v.v.\n\nTìm hiểu tại sao Bootstrap là khung phản hồi TỐT NHẤT và tìm hiểu cách tạo chủ đề trang web TUYỆT VỜI của riêng bạn!!!\n\nTôi ở đây để giúp bạn trên đường đi trong khi bạn thành thạo Bootstrap và tôi sẵn sàng trả lời bất kỳ câu hỏi nào bạn có thể có.\n\nLợi ích từ khoá học\nTìm hiểu cách thiết kế và phát triển Mẫu Bootstrap của riêng bạn từ đầu.\nTìm hiểu cách tích hợp và tùy chỉnh các trình cắm jQuery hiện đại vào bất kỳ mẫu nào.\nSử dụng HTML5 và CSS3 mới nhất để thêm kiểu dáng độc đáo vào Bootstrap.\nTích hợp Biểu mẫu liên hệ PHP đầy đủ chức năng vào bất kỳ Mẫu Bootstrap nào.\nNhận một khóa học sự cố của Hệ thống lưới Bootstrap với bố cục chủ đề.\nTinh chỉnh các kỹ năng HTML và CSS của bạn để phát triển trang web đáp ứng.\nTìm hiểu cách thêm Hoạt hình cuộn trang web vào bất kỳ Thành phần Bootstrap hoặc Thành phần HTML nào.\nPhù hợp với\nBất cứ ai muốn tìm hiểu hoặc mở rộng kiến ​​thức về xây dựng các mẫu và chủ đề trang web Bootstrap.', 'Tiếng Việt', 'Chuyên sâu', 'Trở thành Freelancer Bootstrap thực thụ', '2020-08-18 17:04:49', '2020-08-18 17:04:49', NULL),
(22, 'Học thiết kế Website động với ASP.NET WebForm và SQL Server', 199000, 8, 2, 3, '11.png', 'Trung bình mỗi giây lại có 1 website đăng ký mới ra đời,\ntính đến nay đã có hơn 1 tỷ website trên thế giới. Mỗi website lại có những đặc trưng riêng, những hình thức thể hiện và tính chất tương tác với người dùng khác nhau. Tuy nhiên tất cả chúng đều được xây dựng trên nền tảng là các ngôn ngữ lập trình web. \n\nNếu bạn cũng muốn tự mình tạo ra một website thì bạn nhất định phải nắm vững các ngôn ngữ đó. Trong khóa học \"\"Thiết kế Website động với ASP.Net WebForm và SQL Server\"\", bạn được hướng dẫn triển khai từng bước để tạo một website hoàn chỉnh. Cụ thể: \n\n- Khóa học cung cấp trọn bộ kiến thức từ cơ bản đến nâng cao của lập trình .NET trên nền tảng ASP.NET WebForm. \n\n- Cung cấp những bài học sinh động với các bước thực hành step by step. \n\n- Khi hoàn thành khóa học, học viên có thể tự nghiên cứu các lĩnh vực khác trên nền tảng .NET như ASP.NET MVC, SharePoint. \n\n- Khóa họ̣c sử dụng công cụ Visual Studio, Framework mới nhất. \n\n- Hỗ trợ đa giao diện trên với công cụ Bootstrap. Đặc biệt, thay vì học code một cách máy móc, bạn sẽ được thao tác với dự án thực tế để triển khai ra ngoài doanh nghiệp một cách tốt nhất.\n\nLợi ích từ khoá học\nCó được kiến thức và kỹ năng cơ bản để thiết kế 1 website hoàn chỉnh.\nNắm rõ những kiến thức về lập trình ASP.NET WebForm từ cơ bản đến nâng cao.\nTự xây dựng hoàn chỉnh website.\nLàm tiền đề cho việc tự học thiết kế website bằng ASP.NET MVC cũng như khả năng tạo hệ thống lớn trên nền tảng web.\nPhù hợp với\nSinh viên đã từng học qua ngôn ngữ lập trình C# và SQL Server.\nSinh viên CNTT đang muốn học thiết kế website doanh nghiệp trên nền tảng ASP.NET WebForm.', 'Tiếng Việt', 'Sơ cấp', 'Các bước để thiết kế Website động với ASP.NET WebForm và SQL Server', '2020-08-18 17:04:49', '2020-08-18 17:04:49', NULL),
(23, 'Làm chủ Excel 2010 trong 4 giờ', 199000, 9, 3, 3, '22.png', 'Cập nhật phiên bản mới: \"Làm chủ Excel 2010 trong 4 giờ\"\n    với nhiều bài giảng và bài tập mới được đầu tư công phu về nội dung và hình thức.', 'Tiếng Việt', 'Sơ cấp', 'Làm chủ Excel trong 4 giờ\" giúp bạn tự tin sử dụng Excel và tăng gấp đôi hiệu suất công việc', '2020-08-18 17:04:49', '2020-08-18 17:04:49', NULL),
(24, 'Guitar đệm hát trong 30 ngày', 199000, 10, 4, 3, '28.png', '\"Khóa học gồm :\n    - 6 học phần\n    - 77 bài giảng được hướng dẫn cụ thể từ giảng viên\n    - 5 cấp độ từ cơ bản đến nâng cao\n    - Hệ thống tài liệu chi tiết cho từng học phần.\n    \n    Lợi ích từ khoá học\n    Nắm vững nhạc lý: Cách đọc tọa độ, bấm hợp âm, tiết tấu; Cách rải âm và quạt chả.\n    Thành thạo các điệu cơ bản: Surf nhanh - chậm, Disco, Blue, Ballad, Báo, Fox, Valse, Bolero, Slow Rock,...\n    Thành thạo cách dò các nhịp, điệu của một bài hát, bắt nhịp và chọn điệu, bắt tông cho ca sĩ, đánh intro và outro, search hợp âm chuẩn,...\n    Biết cách chọn đàn sao cho phù hợp với mục đích, túi tiền và phong cách nhưng vẫn phải đảm bảo những yêu tố thiết yếu.\n    Phù hợp với\n    Yêu thích âm nhạc và có cảm hứng đặc biệt với những cây đàn Guitar.\n    Muốn học Guitar đệm hát nhưng chưa biết bắt đầu từ đâu\n    Muốn học Guitar nhưng bị giới hạn về thời gian và tài chính\n    Học đệm hát để chơi các bài hát mà mình yêu thích\"\n    ', 'Tiếng Việt', 'Sơ cấp', 'Trọn bộ 77 bài giảng chi tiết và tài liệu phong phú cùng Guitarist Hiển Râu', '2020-08-18 17:04:49', '2020-08-18 17:04:49', NULL),
(25, 'Yoga trẻ hóa - Làm đẹp cho khuôn mặt', 199000, 11, 5, 3, '32.png', '\"Khóa học gồm:\n    - 9 học phần với 26 bài giảng.\n    Nội dung khóa học cung cấp:\n    - Kỹ thuật thở đúng trong Yoga.\n    - Các bài tập cho cột sống dẻo dai và khỏe mạnh.\n    - Kỹ thuật Yoga tăng cường sức khỏe, hiệu quả và an toàn.\n    - Các bài tập Yoga linh hoạt các khớp, uyển chuyển toàn thân và trẻ hóa cơ thể.\n    - Các động tác Yoga tái tạo tế bào, gia tăng sức đề kháng, chống lão hóa.\n    - Yoga 5 ngày: Trị liệu làm đẹp và giảm eo thần kì.\n    \n    \n    Lợi ích từ khoá học\n    Giảm căng thẳng, tăng tính linh hoạt và cải thiện vòng eo.\n    Cải thiện vóc dáng, làn da, giảm đau xương khớp, ổn định đường huyết, lấy lại cảm giác thăng bằng.\n    Xương chắc khỏe, vẻ ngoài hoàn hảo.\n    Giảm nguy cơ bệnh tim mạch.\n    Phù hợp với\n    Bạn muốn học yoga mà không biết bắt đầu từ đâu?\n    Bạn căng thẳng vì áp lực công việc, gia đình?\n    Bạn gặp vấn đề về xương khớp, cân nặng, vòng eo,...\n    Bạn thường xuyên mất ngủ, mệt mỏi, lão hóa nhanh...\"    \n    ', 'Tiếng Việt', 'Sơ cấp', 'YOGA trẻ hóa - Làm đẹp cho khuôn mặt', '2020-08-18 17:04:49', '2020-08-18 17:04:49', NULL),
(26, 'Tất tần tật về Photoshop Lightroom', 199000, 12, 6, 3, '51.png', '\"Các kiến thức cơ bản về ảnh, cân bằng trắng, hệ màu HSL,\n    xử lý nhiễu, xử lý nét, xử lý mụn, xử lý ánh sáng, xử lý tông màu, xử lý \"\"xóa rác\"\" xử lý bộ lọc, thay đổi lại cấu trúc ảnh sau khi chụp, xử lý viền ảnh, xử lý các hiệu ứng lỗi khi chụp ảnh, xử lý ảnh panorama.\n    - Cung cấp kiến thức về cách chỉnh sửa ảnh, cách chuẩn hóa một ảnh, cách chỉnh sửa ảnh giống như dân chuyên nghiệp với phần mềm Adobe LightRoom.\n    - Qui trình sử dụng Lightroom dàn trang để tạo ra một quyển album ảnh thế nào\n    - Sau khi học xong bạn sẽ có một niềm tin vững chắc về những gì có thể làm trên Photoshop lightroom để tự  tin chụp ảnh trong bất cứ điều kiện nào, tự tin sáng tạo ra các bức ảnh đẹp, tư tin rằng khi ảnh chụp xong sẽ xử lý lại theo đúng ý mình được.\n    \n    Lợi ích từ khoá học\n    Sau khi hoàn thiện khóa học, bạn tự tin chụp những bức ảnh trong mọi điều kiện mà không phải lo về vấn đề ảnh có xử lý được không, có chỉnh được màu cho cái này không ..\n    Tự tạo album ảnh cưới chuyên nghiệp như studio với các tính năng mạnh mẽ của Lightroom.\n    Hiểu bản chất các tính năng của ảnh, đọc được biểu đồ ảnh, cần sửa ở đâu, sửa thế nào Tự tin nhận làm các công việc liên quan đến cân chỉnh ảnh.\n    Tự quản lý thư viện ảnh hàng nghìn ảnh, không lo lắng bị mất thông tin ảnh, tìm một bức ảnh trong nháy mắt cực kì dễ dàng với Lightroom - tính năng chỉ khi nào bạn sử dụng bạn mới biết nó tiện lợi đến mức nào.\n    Tự làm album cho bản thân, cho gia đình, người thân bằng một vài lần click với tính năng đặc biệt của Lightroom.\n    Tự upload gallery ảnh trực tuyến cho công việc, hoặc nhu cầu cá nhân trong vài thao tác cơ bản.\n    Phù hợp với\n    Những người đi học, người đi làm, ít có thời gian chỉnh sửa ảnh, mà vẫn muốn có những bức ảnh chỉnh sửa sáng tạo theo ý muốn.Lightroom chính là phần mềm như thế.\n    Những người làm trong ngành ảnh, muốn công nghiệp hóa qui trình xử lý ảnh, với các tính năng hỗ trợ in ấn, làm album ảnh cưới của Lightroom.\n    Những người chưa biết gì về xử lý ảnh, ngại việc xử lý bằng photoshop với quá nhiều công cụ và thao tác.\n    Những người đã có kiến thức về xử lý ảnh trên photoshop, nhưng muốn tìm hiểu thêm các tính năng đặc trưng của Lightroom, muốn trả lời câu hỏi vì sao mọi người đều chuyển sang dùng lightroom cho việc xử lý ảnh.\n    Những người thích tìm hiểu phần mềm, muốn hiểu vì sao lightroom vượt trội hơn so với các phần mềm khác như instagram, picasa, camera360.\n    Những bạn trẻ muốn tự tin chụp những bức ảnh trong mọi điều kiện mà không phải lo về vấn đề ảnh có xử lý được không, có chỉnh được màu cho cái này không ..\"\n    ', 'Tiếng Việt', 'Sơ cấp', 'Những bạn trẻ muốn tự tin chụp những bức ảnh', '2020-08-18 17:04:49', '2020-08-18 17:04:49', NULL);
INSERT INTO `khoa_hoc` (`id`, `ten_khoa_hoc`, `gia`, `nguoi_dung_id`, `linh_vuc_id`, `trang_thai`, `hinh_anh`, `mo_ta_chi_tiet`, `ngon_ngu`, `muc_do`, `mo_ta_ngan`, `created_at`, `updated_at`, `deleted_at`) VALUES
(27, 'Các kỹ thuật thuyết trình chuyên nghiệp', 199000, 13, 7, 3, '40.jpg', '\"Lời nói không xương nhưng nó đủ cứng để\n    phá vỡ những trái tim, ghim vào tâm trí người nghe như những con dao sắc bén.\n    \n    Tại sao nhiều người có cách nói chuyện trước đám đông lại tự tin và rất cuốn hút, trong khi bạn chưa bao giờ hài lòng với bài thuyết trình của mình, dù bạn đã chuẩn bị rất kỹ?\n    \n    Kỹ năng thuyết trình kém sẽ khiến bạn mất đi nhiều cơ hội nghề nghiệp, đánh rơi cơ hội thăng tiến, không thể hiện được năng lực và ý tưởng của mình trước những người khác. Trong khi đó, đây là kỹ năng bạn hoàn toàn có thể rèn luyện được.\n    \n    Dù là nói chuyện trước công chúng, phát biểu trước đồng nghiệp trong buổi họp, đọc diễn văn trước đông đảo khách hàng hay đơn giản chỉ là trình bày một bài báo cáo trong đại hội, chia sẻ kiến thức trong bài trình bày trên lớp,... tất cả đều cần đến: Kỹ năng thuyết trình trước đám đông.\n    \n    Khoá học Kỹ năng thuyết trình không chỉ là kỹ năng thuyết trình, mà còn là kỹ năng thuyết trình chuyên nghiệp! Chúng tôi không hướng dẫn bạn cách hô hào mà là những cách nói chuyện thuyết phục tạo ấn tượng sâu sắc trong lòng khán giả, thể hiện một phong cách chuyên nghiệp.\n    \n    Tại đây, bạn sẽ được hướng dẫn các kỹ năng như: cách xuất hiện ấn tượng, cách ứng xử thông minh trên sân khấu, cách thuyết trình ứng biến, cách sử dụng hình thể, cách hâm nóng bầu không khí - tạo hiệu ứng đám đông, làm sao để tự tin trước đám đông, cách làm slide thuyết trình powerpoint và cả các cách xử lý các tình huống sự cố.\n    \n     \n    \n    Lợi ích từ khoá học\n    Nắm các kỹ thuật diễn đạt bằng hình thể & sắc thái giọng nói.\n    Biết cách khắc phục \"\"căn bệnh bí từ\"\".\n    Nắm căn bản kỹ thuật phát âm, sử dụng giọng nói.\n    Biết thuyết trình thông minh với powerpoint.\n    Biết phát biểu ứng biến không có sự chuẩn bị.\n    Biết thể hiện thành công bài thuyết trình thuyết phục ngắn.\n    Vượt qua hồi hộp & nâng cao tự tin khi đứng trước công chúng.\n    Nắm các kỹ thuật xuất hiện ấn tượng trên sân khấu.\n    Biết các phương pháp kích thích bầu không khí trầm lắng.\n    Phù hợp với\n    Khóa học này dành cho những đối tượng hay nói trước đông người như:\n    Học sinh, sinh viên khi thuyết trình trên lớp.\n    Người đi làm, nhân viên văn phòng thuyết trình trước đồng nghiệp, trước cấp trên.\n    Các cấp quản lý như trưởng phòng, giám đốc phát biểu trong cuộc họp, hội nghị.\n    Nhân viên thuyết trình sản phẩm với khách hàng, đại diện nhãn hàng phát biểu trong sự kiện marketing.\"\n    ', 'Tiếng Việt', 'Sơ cấp', 'Các kỹ thuật thuyết trình chuyên nghiệp', '2020-08-18 17:04:49', '2020-08-18 17:04:49', NULL),
(28, 'Kiếm tiền trên Youtube dễ dàng', 199000, 14, 8, 3, '48.png', '\"Nếu bạn đang ở đây và tìm hiểu về khoá học\n    này thì chắc chắn một điều rằng bạn đang muốn biết cách kiếm tiền trên Youtube hoặc ít nhất bạn cũng quan tâm, tìm hiểu về khóa học kiếm tiền trên Youtube, và muốn tạo ra cho mình một nguồn thu nhập cao hơn và ổn định hơn, thì bạn sẽ đạt được điều những mong muốn của bạn một cách nhanh chóng với khoá học \"\"Kiếm tiền từ Youtube\"\". Khóa học này chính là bước đi đầu tiên cho việc xây dựng hệ thống kiếm tiền triệu đô một cách hoàn toàn tự động. Với 32 bài giảng bao gồm cả lý thuyết lẫn hướng dẫn thực hành chi tiết, bạn sẽ không cảm thấy tốn thời gian khi tham gia khoá học này cùng chúng tôi.\"\n    ', 'Tiếng Việt', 'Sơ cấp', 'Kiếm tiền trên Youtube không khó như bạn nghĩ', '2020-08-18 17:04:49', '2020-08-18 17:04:49', NULL),
(29, 'Kỹ xảo làm phim: Nghệ thuật kể chuyện cơ bản', 199000, 15, 9, 3, '50.jpg', '\"Điều gì khiến cho một câu chuyện trở thành một câu chuyện hay?\n    Điều gì khiến cho một người trở thành một chuyên gia kể chuyện? Kể chuyện là một điều tất cả chúng ta làm một cách tự nhiên, bắt đầu từ khi còn nhỏ, nhưng có một sự khác biệt giữa kể chuyện hay và kể chuyện tuyệt vời.Trong bài học này bạn sẽ nghe thấy từ các giám đốc Pixar và Các nghệ sỹ kể về cách họ bắt đầu và những câu chuyện nào truyền cảm hứng cho họ, và bạn sẽ bắt đầu suy nghĩ về những dạng câu chuyện mà bạn muốn kể.\n    \n    \n    - Nhân vật là trung tâm của mọi bộ phim mà Pixar sản xuất; Họ là những cá nhân mà chúng ta dõi theo cuộc hành trình trong mỗi câu chuyện. Nhưng làm thế nào để Pixar đến với những nhân vật này, làm cho họ nhiều hơn, không chỉ đơn thuần là những ý tưởng chung, và thực sự mang họ đến đời thực? Trong bài học này bạn sẽ khám phá cách mà các chuyên gia phát triển nhân vật thúc đẩy quá trình kể chuyện ở Pixar và bạn sẽ bắt đầu suy nghĩ về việc tạo ra các nhân vật cho những câu chuyện của riêng bạn.\n    \n    \n    - Mỗi câu chuyện được kể đều có nền tảng, hoặc cấu trúc. Ví dụ, một trong những cấu trúc câu chuyện cơ bản nhất là \"\"\"\"nó bắt đầu, một cái gì đó xảy ra, và nó kết thúc\"\"\"\". Nhưng cấu trúc câu chuyện có thể phức tạp, và nếu được sử dụng tốt bạn thậm chí không nhận thức được nó. Trong bài học này, bạn sẽ học được cách Pixar xây dựng bộ phim của họ, và bạn sẽ bắt đầu đặt nền móng cho những câu chuyện của riêng bạn\n    \n    Lợi ích từ khoá học\n    Khám phá các yếu tố kể chuyện kích thích sự mong đợi của người đọc, sự hồi hộp và thu hút, mời người đọc vào thế giới câu chuyện.\n    Hiểu được các kỹ thuật và các yếu tố được sử dụng cho thế giới câu chuyện, cho dù thế giới là hiện tại, lịch sử, huyền bí, khoa học viễn tưởng, tưởng tượng đô thị hay huyền diệu.\n    Khám phá lý do tại sao không có quy tắc tuyệt đối cho sự khởi đầu rực rỡ.\n    Tạo sự khởi đầu câu chuyện mạnh mẽ hơn để gợi lên sự tò mò và thu hút khán giả của bạn.\n    Phù hợp với\n    Dành cho những người mong muốn độc giả yêu thích câu chuyện của họ nhưng lại gặp khó khăn trong việc tạo ra một khởi đầu hấp dẫn người đọc và người nghe\n    Dành cho bất cứ ai hứng thú với việc thảo luận và phân tích những câu chuyện mà họ đọc hay nghe được\"\n    ', 'Tiếng Việt', 'Sơ cấp', 'Khóa học bằng tiếng Anh', '2020-08-18 17:04:49', '2020-08-18 17:04:49', NULL),
(30, 'Tự chăm sóc da tại nhà hiệu quả không kém đi spa', 199000, 16, 10, 3, '38.png', '\"Khóa học cung cấp những thông tin cơ bản nhất về nội dung,\n    thời lượng học, cách thức áp dụng trong thực tế. Chia sẻ của bản thân giảng viên về những trải nghiệm đúc rút được từ thực tế cuộc sống. Ý nghĩa và tầm quan trọng của việc học & áp dụng những kỹ năng cũng như kiến thức trong khóa học đối với mục tiêu cá nhân của học viên.\n    \n    Lợi ích từ khoá học\n    Sau khi kết thúc khóa học bạn biết chăm sóc da đúng cách, tiết kiệm đáng kể một khoản tiền cho công cuộc làm đẹp cho dù bạn đến Spa hay tự mình chăm sóc\n    Bạn có thể kiếm được tiền từ việc chăm sóc da cho những người xung quanh, người thân, bạn bè v.v\n    Ngay sau khi học xong người học có thể áp dụng để tạo thêm nguồn thu nhập, các mẹ thêm tiền bỉm sữa cho con.\n    Sau khi kết thúc khóa học các chị em phụ nữ biết cách chăm sóc sắc đẹp chủ động cho dù bạn tự chăm sóc tại nhà hay chăm sóc ở Spa thì bạn cũng đều giảm được chi phí đáng kể cho công cuộc làm đẹp mà vẫn hiệu quả .\n    Phù hợp với\n    Phù hợp nhất với các chị em phụ nữ không có thời gian đi Spa.\n    Học sinh, sinh viên mong muốn trang bị thêm kiến thức về làm đẹp\n    Phù hợp với nữ 15 - 50 tuổi\n    Phụ nữ bất kỳ ngành nghề nào cũng đều nên học\"\n    ', 'Tiếng Việt', 'Sơ cấp', 'Chăm sóc da tại nhà', '2020-08-18 17:04:49', '2020-08-18 17:04:49', NULL);

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

--
-- Đang đổ dữ liệu cho bảng `linh_vuc`
--

INSERT INTO `linh_vuc` (`id`, `ten_linh_vuc`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Ngoại ngữ', '2020-07-26 12:46:11', '2020-07-26 12:46:11', NULL),
(2, 'Công nghệ thông tin', '2020-07-26 12:46:11', '2020-07-26 12:46:11', NULL),
(3, 'Tin học văn phòng', '2020-07-26 12:46:11', '2020-07-26 12:46:11', NULL),
(4, 'Âm nhạc', '2020-07-26 12:46:11', '2020-07-26 12:46:11', NULL),
(5, 'Thể thao - Sức khỏe', '2020-07-26 12:46:11', '2020-07-26 12:46:11', NULL),
(6, 'Thiết kế', '2020-07-26 12:46:11', '2020-07-26 12:46:11', NULL),
(7, 'Phát triển cá nhân', '2020-07-26 12:46:11', '2020-07-26 12:46:11', NULL),
(8, 'Marketing', '2020-07-26 12:46:11', '2020-07-26 12:46:11', NULL),
(9, 'Multimedia', '2020-07-26 12:46:11', '2020-07-26 12:46:11', NULL),
(10, 'Nghệ thuật - Đời sống', '2020-07-26 12:46:11', '2020-07-26 12:46:11', NULL);

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
  `cmnd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anh_dai_dien` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dia_chi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gioi_thieu` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `trang_thai` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nguoi_dung`
--

INSERT INTO `nguoi_dung` (`id`, `ho_ten`, `email`, `mat_khau`, `loai_tk`, `cmnd`, `sdt`, `anh_dai_dien`, `dia_chi`, `gioi_thieu`, `trang_thai`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Võ Minh Tân', 'thaovy@gmail.com', '$2y$10$zt5PW9rGl1t7IxXN7Qmy9uUHh0UkWIA8YSYqwiqG3MABhPoWBOnkO', 2, '948193116', '0337263548', '25467846_772228352961915_1914464767_o_1596209959.jpg', '40/7C Đường số 8, khu phố 3', 'pro', 1, '2020-07-26 12:46:24', '2020-07-31 08:39:19', NULL),
(2, 'Lê Văn Trung', 'trungle@gmail.com', '$2y$10$Rr9KPgW5ZVCO5LWbuM9Q.OlUDOosxzsEyELjSokFr3DQTMJ24SIYq', 2, '718285244', '0394726374', 'anh-dai-dien.jpeg', 'null', '', 1, '2020-07-26 12:46:24', '2020-07-26 12:46:24', NULL),
(3, 'Trần Văn Hưng', 'hungtran@gmail.com', '$2y$10$fwOzEIdJlJkAiLZpLYCLHOKwhW.1MfMNG4gPsEHexEQAi5RdSDFJq', 2, '803086715', '0307748392', 'anh-dai-dien.jpeg', 'null', '', 1, '2020-07-26 12:46:25', '2020-07-26 12:46:25', NULL),
(4, 'Nguyễn Thị Tý', 'tynguyen@gmail.com', '$2y$10$MhbBTisLUtzlz18gECtRxuD2EU3PA1PvvBcko7eOg3gyhMuHf57x2', 2, '274534586', '0347263849', 'anh-dai-dien.jpeg', 'null', '', 1, '2020-07-26 12:46:25', '2020-07-26 12:46:25', NULL),
(5, 'Nguyễn Thị Mai', 'mainguyen@gmail.com', '$2y$10$YMbSbx/2kOxNzCBkIeYYs.SiwIHoZcXfdIiY7WX4iVCwwenW3pfFS', 2, '179510764', '0394726374', 'anh-dai-dien.jpeg', 'null', '', 1, '2020-07-26 12:46:25', '2020-07-26 12:46:25', NULL),
(6, 'Mai Tiến Dũng', 'dungmai@gmail.com', '$2y$10$xLUcbE1dhhpcz.qTubfZ7Oa5trQSorT87DzlEsQC0PHzzloxIO9by', 2, '718285244', '0316253748', 'anh-dai-dien.jpeg', 'null', '', 1, '2020-07-26 12:46:25', '2020-07-26 12:46:25', NULL),
(7, 'Hồ Quang Hiếu', 'hieuho@gmail.com', '$2y$10$PZZi8t4H077pAFhBk77sGOZ2WvipvOULfJsymdPLugTDOaoDFYqcS', 2, '870449836', '0382746385', 'anh-dai-dien.jpeg', 'null', '', 1, '2020-07-26 12:46:25', '2020-07-26 12:46:25', NULL),
(8, 'Mai Tường Vy', 'vymai@gmail.com', '$2y$10$eBq1drtFN68yXp9sS8tQ3.d8DYfnjhzSDjYnpx2bykU7VPrtmHSnK', 2, '579490572', '0384727485', 'anh-dai-dien.jpeg', 'null', '', 1, '2020-07-26 12:46:25', '2020-07-26 12:46:25', NULL),
(9, 'Nguyễn Thị Oanh', 'oanhnguyen@gmail.com', '$2y$10$UKlqcJrD83GoQoJeWjem2uP8OyH93SBLPbjRlkLbRFzLUrzanpIQS', 2, '936039849', '0374827498', 'anh-dai-dien.jpeg', 'null', '', 1, '2020-07-26 12:46:25', '2020-07-26 12:46:25', NULL),
(10, 'Nguyễn Văn Trọng', 'trongnguyen@gmail.com', '$2y$10$HHMQ7ug1BGGhvXfqjeYWUuzvCryGbmEivZYCluqiQY0Huw3GLQgg2', 2, '163790696', '0386473677', 'anh-dai-dien.jpeg', 'null', '', 1, '2020-07-26 12:46:25', '2020-07-26 12:46:25', NULL),
(11, 'Phạm Văn Tuấn', 'tuanpham@gmail.com', '$2y$10$ae80gyXnn5XaYd2kIzg2cuLpEG96iyojD9mrqYAik2eBF.DyEm64m', 2, '297282585', '0374873847', 'anh-dai-dien.jpeg', 'null', '', 1, '2020-07-26 12:46:25', '2020-07-26 12:46:25', NULL),
(12, 'Nguyễn Tấn Hậu', 'haunguyen@gmail.com', '$2y$10$KikC3EOss5RxPvCAeLunMu3MsCdQ.LdBxZlLT3Gx8EC0evg/FVLGm', 2, '475176537', '0337263548', 'anh-dai-dien.jpeg', 'null', '', 1, '2020-07-26 12:46:26', '2020-07-26 12:46:26', NULL),
(13, 'Mai Thị Nhi', 'nhimai@gmail.com', '$2y$10$.gZPfeqOu3q22lb57D/rQOUrUBu5ZhIAcbRw/nPiN/VCgBe5.iWvK', 2, '905546743', '0394726374', 'anh-dai-dien.jpeg', 'null', '', 1, '2020-07-26 12:46:26', '2020-07-26 12:46:26', NULL),
(14, 'Trương Văn Hiền', 'hientruong@gmail.com', '$2y$10$0qgH0eOzY1zf1tGcuOXc/e/b7wEuyJF7LvDJiACqWURAP.M8lo2u6', 2, '649649097', '0307748392', 'anh-dai-dien.jpeg', 'null', '', 1, '2020-07-26 12:46:26', '2020-07-26 12:46:26', NULL),
(15, 'Nguyễn Ngọc Tiến', 'tiennguyen@gmail.com', '$2y$10$CZJdg6rVibTjH1zHJWo7dOkC9R.w0uozmyuXUO1XepN/YHX0trQZ2', 2, '269506855', '0347263849', '1-1506422137960_1596205689.jpg', 'null', 'Đã từng dạy trực tiếp, nhưng không phải giảng viên chính thức.', 1, '2020-07-26 12:46:26', '2020-08-09 22:32:19', NULL),
(16, 'Lê Thị Tú Trinh', 'trinhnguyen@gmail.com', '$2y$10$RC8ECIhui/YmjslNQVWK7.X8bA0.DpDdT7q/GtgnYx/xJoy26e1rS', 2, '672147386', '0382743846', 'anh-dai-dien.jpeg', 'null', '', 1, '2020-07-26 12:46:26', '2020-07-26 12:46:26', NULL),
(17, 'Khổng Thị Thu Nhạn', 'nhankhong@gmail.com', '$2y$10$ZanTpNwCskP3G.CIH.ZKzul1UzxmyTL7kvt0MOeZGnvuPbvmwKp0e', 1, '650967267', '0316253748', 'anh-dai-dien.jpeg', 'null', '', 1, '2020-07-26 12:46:26', '2020-07-26 12:46:26', NULL),
(18, 'Nguyễn Thu Trang', 'trangnguyen@gmail.com', '$2y$10$ODf78MHIL1kzMuMOsm.Of.R5lMQhlVog2yzTejJMcDXsleObtobau', 1, '441538403', '0382746385', 'anh-dai-dien.jpeg', 'null', '', 1, '2020-07-26 12:46:26', '2020-07-26 12:46:26', NULL),
(19, 'Lê Văn Biểu', 'bieule@gmail.com', '$2y$10$xvw/tTkYBh35TNmlE2hsHOF/2kMqt1ANBzAtNK34l1OnkXmVPW1eO', 1, '340934015', '0384727485', 'anh-dai-dien.jpeg', 'null', '', 1, '2020-07-26 12:46:26', '2020-07-26 12:46:26', NULL),
(20, 'Nguyễn Tuyết Trinh', 'tuyettrinh@gmail.com', '$2y$10$3y3CH8L/jxZq4kv7nqnfK.zGlj4UujJc7rc8Xlu5oHJd7YdTOQhTO', 1, '637162094', '0374827498', 'anh-dai-dien.jpeg', 'null', '', 1, '2020-07-26 12:46:26', '2020-07-26 12:46:26', NULL),
(21, 'Lý Tiểu Long', 'longnguyen@gmail.com', '$2y$10$peFVt3tEjMOYnXN2dYKRgezsMrWvqY7r11rZ7ssiuaaoFgtEK/xhS', 1, '775885447', '0386473677', 'anh-dai-dien.jpeg', 'null', '', 1, '2020-07-26 12:46:26', '2020-07-26 12:46:26', NULL),
(22, 'Phan Thành Nam', 'namphan@gmail.com', '$2y$10$slAo5WNOcKvD4w4x3tGUeuGSULSjRnBi38hdKzOB2oKHk1UoxlO/a', 1, '506665813', '0374873847', 'anh-dai-dien.jpeg', 'null', '', 1, '2020-07-26 12:46:27', '2020-07-26 12:46:27', NULL),
(23, 'Trịnh Minh Linh', 'minhlinh@gmail.com', '$2y$10$wdiCngRQZ3HqHWktjHhy9ubyZu6.xzr8CHYUCw3qAsWyrq4I8nXG.', 1, '277249083', '0384727674', 'anh-dai-dien.jpeg', 'null', '', 1, '2020-07-26 12:46:27', '2020-07-26 12:46:27', NULL),
(24, 'Nguyễn Văn Long', 'longnguyen@gmail.com', '$2y$10$pdBqEdbdUcsz0G3hGfeLBuyhCmASyzDDG/VMkRehzkIsl6TqlBWJu', 1, '863878138', '0384743745', 'anh-dai-dien.jpeg', 'null', '', 1, '2020-07-26 12:46:27', '2020-07-26 12:46:27', NULL),
(25, 'Mai Văn Phước', 'phuocmai@gmail.com', '$2y$10$qk/PTOHk1kGj8DSMWlyBFeoVihIgEI2RYywhBt99fBPAWiRsDzH12', 1, '489196705', '0937473744', 'anh-dai-dien.jpeg', 'null', '', 1, '2020-07-26 12:46:27', '2020-07-26 12:46:27', NULL),
(26, 'Nguyễn Công Phượng', 'phuongnguyen@gmail.com', '$2y$10$N.N5aaahm.8NnU5rNfLXRumdZhAiz/qWaXUS.qy4DpYHCXMbBHMvu', 1, '290653437', '0947364785', 'anh-dai-dien.jpeg', 'null', '', 1, '2020-07-26 12:46:27', '2020-07-26 12:46:27', NULL),
(28, 'Nguyễn Hữu Thông', 'huuthongit@gmail.com', '$2y$10$oT9jlcNdyxAEFggOkcCb8OPeiQrafw3SMUQjmuyp6Aa8dXCW/oOxK', 3, '863878138', '0384743745', 'anh-dai-dien.jpeg', 'null', '', 1, '2020-07-26 12:46:27', '2020-07-26 12:46:27', NULL),
(29, 'Pham Bảo Thiện', 'baothienit@gmail.com', '$2y$10$P86dGPnGWv97L0Wc/yGX8e0KkeEE5SLB5byNkDq..bR.l7/SRNJJS', 1, '863878138', '0384743745', 'anh-dai-dien.jpeg', 'null', '', 1, '2020-07-26 12:46:27', '2020-07-26 12:46:27', NULL),
(30, 'Võ Minh Tân', 'minhtant@gmail.com', '$2y$10$WnmOb.Wf/gdchB.jOqr9/e3iLrGHzXpESlwzTnp607sOkOriG0PPq', 3, '863878138', '0384743745', 'anh-dai-dien.jpeg', 'null', '', 1, '2020-07-26 12:46:27', '2020-07-26 12:46:27', NULL),
(31, 'Nguyễn Minh Triết', 'trietnguyen@gmail.com', '$2y$10$bmnrrsJ/srkhwEO5quSpoecMtaCWNB04npRWsEOYKrftep2OdVJzG', 1, '740868987', '0387589948', 'anh-dai-dien.jpeg', 'null', 'Chưa từng có hoạt động giảng dạy, chỉ hướng dẫn nhân viên, hoặc chỉ có kinh nghiệm trong nghề...', 2, '2020-07-26 12:46:27', '2020-08-20 02:40:31', NULL),
(36, 'Nguyễn Thị Thảo Vy', 'sfdf@gmail.com', '$2y$10$44rVSCl9D73ohC0rPByb8.EzhCDjuvChx2vS22kpe99gtnO/CMpqa', 1, '12345', '12344', 'anh-dai-dien.jpeg', 'null', 'null', 1, '2020-08-18 03:08:04', '2020-08-18 03:08:04', NULL);

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
(1, 'Giới thiệu', 'ephoto360.com-5c33786198aad_1595885467.mp4', '02.2_Activity-lifecycle-and-state_1595885687.pdf', 1, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(2, 'Nhập môn', 'ephoto360.com-5c33786198aad_1595885467.mp4', '02.2_Activity-lifecycle-and-state_1595885687.pdf', 1, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(3, 'Tài liệu học tập', 'ephoto360.com-5c33786198aad_1595885467.mp4', '_', 1, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(4, 'Đọc chuẩn bảng chữ cái tiếng Anh (Phần 1)', 'ephoto360.com-5c33786198aad_1595885467.mp4', '02.2_Activity-lifecycle-and-state_1595885687.pdf', 2, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(5, 'Đọc chuẩn bảng chữ cái tiếng Anh (Phần 2)', 'ephoto360.com-5c33786198aad_1595885467.mp4', '_', 2, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(6, 'Tổng quan bảng phiên âm quốc tế - IPA', 'ephoto360.com-5c33786198aad_1595885467.mp4', '02.2_Activity-lifecycle-and-state_1595885687.pdf', 2, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(7, 'Thực hành đọc phiên âm trong đoạn văn', 'ephoto360.com-5c33786198aad_1595885467.mp4', '_', 2, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(8, 'Dạng rút gọn của từ', 'ephoto360.com-5c33786198aad_1595885467.mp4', '02.2_Activity-lifecycle-and-state_1595885687.pdf', 3, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(9, 'Cách đọc mạo từ xác định \"THE\"', 'ephoto360.com-5c33786198aad_1595885467.mp4', '_', 3, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(10, 'Luyện giảm âm', 'ephoto360.com-5c33786198aad_1595885467.mp4', '02.2_Activity-lifecycle-and-state_1595885687.pdf', 3, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(11, 'Thực hành nói trong đoạn hội thoại', 'ephoto360.com-5c33786198aad_1595885467.mp4', '_', 3, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(12, 'Giới thiệu', 'ephoto360.com-5c33786198aad_1595885467.mp4', '_', 1, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(13, 'Tổng kết', 'ephoto360.com-5c33786198aad_1595885467.mp4', '_', 4, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(14, 'Listening', 'ephoto360.com-5c33786198aad_1595885467.mp4', '02.2_Activity-lifecycle-and-state_1595885687.pdf', 5, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(15, 'Speaking', 'ephoto360.com-5c33786198aad_1595885467.mp4', '_', 5, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(16, 'Vocabulary', 'ephoto360.com-5c33786198aad_1595885467.mp4', '_', 5, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(17, 'Listening', 'ephoto360.com-5c33786198aad_1595885467.mp4', '02.2_Activity-lifecycle-and-state_1595885687.pdf', 6, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(18, 'Speaking', 'ephoto360.com-5c33786198aad_1595885467.mp4', '_', 6, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(19, 'Vocabulary', 'ephoto360.com-5c33786198aad_1595885467.mp4', '_', 6, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(20, 'Listening', 'ephoto360.com-5c33786198aad_1595885467.mp4', '02.2_Activity-lifecycle-and-state_1595885687.pdf', 7, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(21, 'Speaking', 'ephoto360.com-5c33786198aad_1595885467.mp4', '_', 7, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(22, 'Listening', 'ephoto360.com-5c33786198aad_1595885467.mp4', '_', 8, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(23, 'peaking', 'ephoto360.com-5c33786198aad_1595885467.mp4', '_', 8, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(24, 'Vocabulary', 'ephoto360.com-5c33786198aad_1595885467.mp4', '02.2_Activity-lifecycle-and-state_1595885687.pdf', 8, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(25, 'Listening', 'ephoto360.com-5c33786198aad_1595885467.mp4', '_', 9, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(26, 'Speaking', 'ephoto360.com-5c33786198aad_1595885467.mp4', '02.2_Activity-lifecycle-and-state_1595885687.pdf', 9, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(27, 'Vocabulary', 'ephoto360.com-5c33786198aad_1595885467.mp4', '02.2_Activity-lifecycle-and-state_1595885687.pdf', 9, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(28, 'Listening', 'ephoto360.com-5c33786198aad_1595885467.mp4', '02.2_Activity-lifecycle-and-state_1595885687.pdf', 10, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(29, 'Speaking', 'ephoto360.com-5c33786198aad_1595885467.mp4', '02.2_Activity-lifecycle-and-state_1595885687.pdf', 10, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(30, 'Vocabulary', 'ephoto360.com-5c33786198aad_1595885467.mp4', '02.2_Activity-lifecycle-and-state_1595885687.pdf', 11, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(31, 'Test1', 'Facebook_1595885189.mp4', 'file-kiem-tra15fil0h5.xlsx', 12, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(32, 'test2', 'GameHub.vn - ai biết 2 bạn này là ai không - ToT..._1595885271.mp4', 'file-kiem-tra15fil0h5.xlsx', 12, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(33, 'test3', 'ephoto360.com-5c33786198aad_1595885467.mp4', 'file-kiem-tra15fil0h5.xlsx', 13, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(34, 'asdsa', 'ephoto360.com-5c33786198aad_1595885630.mp4', '_', 14, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(35, 'asdasddsad', 'Facebook_1595885658.mp4', '_', 15, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(36, 'dasdas', 'ephoto360.com-5c33786198aad_1595885687.mp4', '02.2_Activity-lifecycle-and-state_1595885687.pdf', 15, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(38, 'làm thế nào để thành hacker', 'Facebook_1596205996.mp4', '_', 16, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(39, 'hacker là gì', 'Sail-Away.mp4', '_', 16, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(40, 'Listenning', 'Sail-Away.mp4', '_', 17, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(41, 'Speaking', 'Sail-Away.mp4', '_', 17, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(42, 'Vocabulary', 'Sail-Away.mp4', '_', 17, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(43, 'Listenning', 'Sail-Away.mp4', '_', 18, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(44, 'Speaking', 'Sail-Away.mp4', '_', 18, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(45, 'Vocabulary', 'Sail-Away.mp4', '_', 18, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(46, 'Listenning', 'Sail-Away.mp4', '_', 19, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(47, 'Speaking', 'Sail-Away.mp4', '_', 19, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(48, 'Vocabulary', 'Sail-Away.mp4', '_', 19, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(49, 'Listenning', 'Sail-Away.mp4', '_', 20, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(50, 'Speaking', 'Sail-Away.mp4', '_', 20, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(51, 'Vocabulary', 'Sail-Away.mp4', '_', 20, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(52, 'Listenning', 'Sail-Away.mp4', '_', 21, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(53, 'Speaking', 'Sail-Away.mp4', '_', 21, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(54, 'Vocabulary', 'Sail-Away.mp4', '_', 21, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(55, 'Vocabulary', 'Sail-Away.mp4', '_', 21, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(56, 'Vocabulary', 'Sail-Away.mp4', '_', 21, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(57, ' Tổng quan về phát âm tiếng Anh và IPA', 'Sail-Away.mp4', '_', 22, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(58, 'Nguyên âm đơn /i:/ & /ɪ/ và /u:/ & /ʊ/', 'Sail-Away.mp4', '_', 23, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(59, 'Nguyên âm đơn /ʌ/ & /a:/ và /e/ & /æ/', 'Sail-Away.mp4', '_', 23, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(60, 'Nguyên âm đơn /ʌ/ & /a:/ và /e/ & /æ/', 'Sail-Away.mp4', '_', 23, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(61, ' Tổng quan về phát âm tiếng Anh và IPA', 'Sail-Away.mp4', '_', 24, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(62, 'Nguyên âm đơn /i:/ & /ɪ/ và /u:/ & /ʊ/', 'Sail-Away.mp4', '_', 24, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(63, 'Listenning', 'Sail-Away.mp4', '_', 25, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(64, 'Speaking', 'Sail-Away.mp4', '_', 2, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(65, 'Vocabulary', 'Sail-Away.mp4', '_', 25, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(66, 'Listenning', 'Sail-Away.mp4', '_', 26, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(67, 'Speaking', 'Sail-Away.mp4', '_', 26, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(68, 'Vocabulary', 'Sail-Away.mp4', '_', 26, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(69, 'Listenning', 'Sail-Away.mp4', '_', 26, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(70, 'Speaking', 'Sail-Away.mp4', '_', 26, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(71, 'Vocabulary', 'Sail-Away.mp4', '_', 26, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(72, 'Cách dùng mạo từ the', 'Sail-Away.mp4', '_', 27, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(73, 'Cách dùng mạo từ an/a', 'Sail-Away.mp4', '_', 27, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(74, 'Dạng thức tính từ', 'Sail-Away.mp4', '_', 28, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(75, 'Giới từ và danh từ', 'Sail-Away.mp4', '_', 28, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(76, 'Giới từ đi sau động từ', 'Sail-Away.mp4', '_', 28, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(77, 'Listenning', 'Sail-Away.mp4', '_', 29, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(78, 'Listenning', 'Sail-Away.mp4', '_', 30, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(79, 'Giới thiệu', 'Sail-Away.mp4', '_', 31, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(80, 'Listenning', 'Sail-Away.mp4', '_', 32, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(81, 'Listenning', 'Sail-Away.mp4', '_', 33, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(82, 'Listenning', 'Sail-Away.mp4', '_', 34, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(83, 'Listenning', 'Sail-Away.mp4', '_', 35, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(84, 'Listenning', 'Sail-Away.mp4', '_', 36, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(85, 'Listenning', 'Sail-Away.mp4', '_', 37, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(86, 'Listenning', 'Sail-Away.mp4', '_', 38, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(87, 'Listenning', 'Sail-Away.mp4', '_', 39, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(88, 'Listenning', 'Sail-Away.mp4', '_', 40, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(89, 'Listenning', 'Sail-Away.mp4', '_', 41, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(90, 'Listenning', 'Sail-Away.mp4', '_', 42, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(91, 'Listenning', 'Sail-Away.mp4', '_', 43, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(92, 'Listenning', 'Sail-Away.mp4', '_', 44, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(93, 'Listenning', 'Sail-Away.mp4', '_', 45, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(94, 'Listenning', 'Sail-Away.mp4', '_', 46, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(95, 'Listenning', 'Sail-Away.mp4', '_', 47, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(96, 'Listenning', 'Sail-Away.mp4', '_', 48, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(97, 'Listenning', 'Sail-Away.mp4', '_', 49, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(98, 'Listenning', 'Sail-Away.mp4', '_', 50, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(99, 'Listenning', 'Sail-Away.mp4', '_', 51, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(100, 'Listenning', 'Sail-Away.mp4', '_', 52, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(101, 'Listenning', 'Sail-Away.mp4', '_', 53, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(102, 'Listenning', 'Sail-Away.mp4', '_', 54, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(103, 'Listenning', 'Sail-Away.mp4', '_', 55, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(104, 'Listenning', 'Sail-Away.mp4', '_', 56, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(105, 'Listenning', 'Sail-Away.mp4', '_', 57, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(106, 'Listenning', 'Sail-Away.mp4', '_', 58, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(107, 'Listenning', 'Sail-Away.mp4', '_', 59, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(108, 'Listenning', 'Sail-Away.mp4', '_', 60, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(109, 'Listenning', 'Sail-Away.mp4', '_', 61, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(110, 'Listenning', 'Sail-Away.mp4', '_', 62, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(111, 'Listenning', 'Sail-Away.mp4', '_', 63, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(112, 'Listenning', 'Sail-Away.mp4', '_', 64, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(113, 'Listenning', 'Sail-Away.mp4', '_', 65, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(114, 'Listenning', 'Sail-Away.mp4', '_', 66, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(115, 'Listenning', 'Sail-Away.mp4', '_', 67, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(116, 'Listenning', 'Sail-Away.mp4', '_', 68, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(117, 'Listenning', 'Sail-Away.mp4', '_', 69, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(118, 'Listenning', 'Sail-Away.mp4', '_', 70, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(119, 'Listenning', 'Sail-Away.mp4', '_', 71, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(120, 'Listenning', 'Sail-Away.mp4', '_', 72, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(121, 'Listenning', 'Sail-Away.mp4', '_', 73, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(122, 'Listenning', 'Sail-Away.mp4', '_', 74, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(123, 'Listenning', 'Sail-Away.mp4', '_', 75, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(124, 'Listenning', 'Sail-Away.mp4', '_', 76, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(125, 'Listenning', 'Sail-Away.mp4', '_', 77, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(126, 'Listenning', 'Sail-Away.mp4', '_', 78, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(127, 'Listenning', 'Sail-Away.mp4', '_', 79, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(128, 'Listenning', 'Sail-Away.mp4', '_', 80, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(129, 'Listenning', 'Sail-Away.mp4', '_', 81, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(130, 'Listenning', 'Sail-Away.mp4', '_', 82, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(131, 'Listenning', 'Sail-Away.mp4', '_', 83, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(132, 'Listenning', 'Sail-Away.mp4', '_', 84, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(133, 'Listenning', 'Sail-Away.mp4', '_', 85, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL),
(134, 'Listenning', 'Sail-Away.mp4', '_', 86, 1, '2020-07-31 07:33:16', '2020-07-31 07:33:16', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thao_luan`
--

CREATE TABLE `thao_luan` (
  `id` int(10) NOT NULL,
  `nguoi_dung_id` int(11) NOT NULL,
  `noi_dung` text NOT NULL,
  `noi_dung_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `thao_luan`
--

INSERT INTO `thao_luan` (`id`, `nguoi_dung_id`, `noi_dung`, `noi_dung_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 15, 'hay', 1, '2020-07-31 07:22:57', '2020-07-31 07:22:57', NULL),
(2, 1, 'dễ hiểu', 1, '2020-07-31 08:38:52', '2020-07-31 08:38:52', NULL),
(3, 1, 'a a a cái j', 25, '2020-08-05 04:12:17', '2020-08-05 04:12:17', NULL),
(4, 1, 'a', 25, '2020-08-05 04:19:14', '2020-08-05 04:19:14', NULL),
(5, 1, 'a', 25, '2020-08-05 04:24:51', '2020-08-05 04:24:51', NULL),
(6, 1, 'a a a cái j', 25, '2020-08-05 04:35:37', '2020-08-05 04:35:37', NULL),
(7, 1, 'a a a cái j', 25, '2020-08-05 04:37:52', '2020-08-05 04:37:52', NULL),
(8, 1, 'a', 25, '2020-08-05 04:38:59', '2020-08-05 04:38:59', NULL),
(9, 1, 'aaaaa', 25, '2020-08-05 04:50:36', '2020-08-05 04:50:36', NULL),
(10, 1, 'a', 25, '2020-08-05 04:52:58', '2020-08-05 04:52:58', NULL),
(11, 1, 'a', 25, '2020-08-05 04:54:18', '2020-08-05 04:54:18', NULL),
(12, 1, 'a', 25, '2020-08-05 04:55:38', '2020-08-05 04:55:38', NULL),
(13, 1, 'a a a cái j', 25, '2020-08-05 04:59:12', '2020-08-05 04:59:12', NULL),
(14, 1, 'a a a cái j', 25, '2020-08-05 05:02:13', '2020-08-05 05:02:13', NULL),
(15, 1, 'a', 25, '2020-08-05 05:06:50', '2020-08-05 05:06:50', NULL),
(16, 1, 'a', 25, '2020-08-05 05:09:20', '2020-08-05 05:09:20', NULL),
(17, 1, 'a', 25, '2020-08-05 05:11:13', '2020-08-05 05:11:13', NULL),
(18, 1, 'a', 25, '2020-08-05 05:12:27', '2020-08-05 05:12:27', NULL),
(19, 1, 'a', 25, '2020-08-05 05:13:10', '2020-08-05 05:13:10', NULL),
(20, 1, 'a', 25, '2020-08-05 05:14:45', '2020-08-05 05:14:45', NULL),
(21, 1, 'a a a cái j', 25, '2020-08-05 05:15:13', '2020-08-05 05:15:13', NULL),
(22, 1, 'aaa', 25, '2020-08-05 05:15:22', '2020-08-05 05:15:22', NULL),
(23, 1, 'test thôi hehe', 25, '2020-08-05 05:16:47', '2020-08-05 05:16:47', NULL),
(24, 1, 'a a a cái j', 25, '2020-08-05 05:41:01', '2020-08-05 05:41:01', NULL),
(25, 1, 's', 25, '2020-08-05 05:45:00', '2020-08-05 05:45:00', NULL),
(26, 1, 's', 25, '2020-08-05 05:45:45', '2020-08-05 05:45:45', NULL),
(27, 1, 's', 25, '2020-08-05 05:56:55', '2020-08-05 05:56:55', NULL),
(28, 1, 'a', 25, '2020-08-05 06:03:06', '2020-08-05 06:03:06', NULL),
(29, 1, 'a a a cái j', 25, '2020-08-05 06:03:50', '2020-08-05 06:03:50', NULL),
(30, 15, 'a', 25, '2020-08-06 08:57:17', '2020-08-06 08:57:17', NULL),
(31, 15, 'a a a cái j', 25, '2020-08-06 09:02:55', '2020-08-06 09:02:55', NULL),
(32, 15, 'a', 25, '2020-08-06 09:38:55', '2020-08-06 09:38:55', NULL),
(33, 15, 'a a a cái j', 25, '2020-08-07 02:45:08', '2020-08-07 02:45:08', NULL),
(34, 15, 'a', 25, '2020-08-07 02:45:56', '2020-08-07 02:45:56', NULL),
(35, 1, 'a', 1, '2020-08-08 21:07:10', '2020-08-08 21:07:10', NULL),
(36, 1, 'a a a cái j', 1, '2020-08-08 21:07:15', '2020-08-08 21:07:15', NULL),
(37, 1, 'a', 1, '2020-08-08 21:07:19', '2020-08-08 21:07:19', NULL),
(38, 1, 'a a a cái j', 1, '2020-08-08 21:22:17', '2020-08-08 21:22:17', NULL),
(39, 1, 'a', 1, '2020-08-08 21:39:06', '2020-08-08 21:39:06', NULL),
(40, 1, 'a', 32, '2020-08-09 06:17:52', '2020-08-09 06:17:52', NULL),
(41, 4, 'hay quá.', 1, '2020-08-20 08:22:17', '2020-08-20 08:22:17', NULL),
(42, 21, 'hay quá', 34, '2020-08-20 08:29:09', '2020-08-20 08:29:09', NULL),
(43, 21, 'quá tuyêt', 34, '2020-08-20 08:29:39', '2020-08-20 08:29:39', NULL),
(44, 6, 'không hiểu cho lắm', 2, '2020-08-20 08:50:50', '2020-08-20 08:50:50', NULL),
(45, 6, 'a', 2, '2020-08-20 08:51:37', '2020-08-20 08:51:37', NULL),
(46, 6, 'dạy hơi nhanh', 2, '2020-08-20 08:57:35', '2020-08-20 08:57:35', NULL),
(47, 6, 'sadasd', 2, '2020-08-20 08:57:39', '2020-08-20 08:57:39', NULL),
(48, 6, 'hay hay', 2, '2020-08-20 08:57:51', '2020-08-20 08:57:51', NULL),
(49, 6, 'không hiểu cho lắm', 1, '2020-08-20 08:58:36', '2020-08-20 08:58:36', NULL),
(50, 6, 'hay', 12, '2020-08-20 09:01:40', '2020-08-20 09:01:40', NULL),
(51, 6, 'không hiểu cho lắm', 3, '2020-08-20 09:05:15', '2020-08-20 09:05:15', NULL),
(52, 6, 'a', 3, '2020-08-20 09:05:21', '2020-08-20 09:05:21', NULL),
(53, 6, 'abc', 3, '2020-08-20 09:05:31', '2020-08-20 09:05:31', NULL),
(54, 15, 'không hiểu cho lắm', 34, '2020-08-20 09:21:56', '2020-08-20 09:21:56', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `the_ngan_hang`
--

CREATE TABLE `the_ngan_hang` (
  `id` int(10) UNSIGNED NOT NULL,
  `nguoi_dung_id` int(11) NOT NULL,
  `so_tai_khoan` int(11) DEFAULT NULL,
  `ten_tren_the` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ten_ngan_hang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chi_nhanh` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tong_tien` bigint(20) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `the_ngan_hang`
--

INSERT INTO `the_ngan_hang` (`id`, `nguoi_dung_id`, `so_tai_khoan`, `ten_tren_the`, `ten_ngan_hang`, `chi_nhanh`, `tong_tien`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 589239125, 'Nguyễn Thị Thảo Vy', 'MB BANK', 'Q1, Tp.HCM', 1373100, '2020-07-26 12:47:01', '2020-08-20 08:49:00', NULL),
(2, 2, 411240767, 'Lê Văn Trung', 'ACB', 'Q1, Tp.HCM', 1257300, '2020-07-26 12:47:02', '2020-08-20 07:43:39', NULL),
(3, 3, 168639224, 'Trần Văn Hưng', 'OCB', 'Q1, Tp.HCM', 539100, '2020-07-26 12:47:02', '2020-08-20 03:57:59', NULL),
(4, 4, 499724510, 'Nguyễn Thị Tý', 'ACB', 'Q1, Tp.HCM', -19900, '2020-07-26 12:47:02', '2020-08-20 09:16:51', NULL),
(5, 5, 691194914, 'Nguyễn Thị Mai', 'AGRIBANK', 'Q1, Tp.HCM', 878300, '2020-07-26 12:47:02', '2020-08-20 07:45:18', NULL),
(6, 6, 411240767, 'Mai Tiến Dũng', 'DONG A BANK', 'Q1, Tp.HCM', 449100, '2020-07-26 12:47:02', '2020-08-20 04:29:11', NULL),
(7, 7, 592376069, 'Hồ Quang Hiếu', 'MB BANK', 'Q1, Tp.HCM', 179100, '2020-07-26 12:47:02', '2020-08-20 04:15:01', NULL),
(8, 8, 387683240, 'Mai Tường Vy', 'NAM A BANK', 'Q1, Tp.HCM', 1078200, '2020-07-26 12:47:02', '2020-08-20 04:04:44', NULL),
(15, 15, 0, NULL, NULL, NULL, 0, '2020-07-26 12:47:02', '2020-08-11 04:32:26', NULL),
(20, 16, 963954668, 'Nguyễn Tuyết Trinh', 'NAM A BANK', 'Q1, Tp.HCM', 0, '2020-07-26 12:47:03', '2020-07-26 12:47:03', NULL),
(21, 9, 765639224, 'Trần Văn Hưng', 'OCB', 'Q1, Tp.HCM', 179100, '2020-07-26 12:47:02', '2020-08-20 03:23:48', NULL),
(22, 10, 908724510, 'Nguyễn Thị Tý', 'ACB', 'Q1, Tp.HCM', 0, '2020-07-26 12:47:02', '2020-08-13 09:37:09', NULL),
(23, 11, 875194914, 'Nguyễn Thị Mai', 'AGRIBANK', 'Q1, Tp.HCM', 0, '2020-07-26 12:47:02', '2020-08-13 09:36:50', NULL),
(24, 12, 782240767, 'Mai Tiến Dũng', 'DONG A BANK', 'Q1, Tp.HCM', 0, '2020-07-26 12:47:02', '2020-08-19 02:48:04', NULL),
(25, 13, 875376069, 'Hồ Quang Hiếu', 'MB BANK', 'Q1, Tp.HCM', 179100, '2020-07-26 12:47:02', '2020-08-20 07:46:17', NULL),
(26, 14, 875683240, 'Mai Tường Vy', 'NAM A BANK', 'Q1, Tp.HCM', 0, '2020-07-26 12:47:02', '2020-07-26 12:47:02', NULL);

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
(1, 'Trung Tâm Anh Ngữ English Town', 969972472, '34 Trần Quốc Thảo, Phường 7, Quận 3, Hồ Chí Minh', 'Nguyễn Văn Nhơn', 'nhonnguyen@gmail.com', 386473677, 1, 1, '2020-07-26 12:47:14', '2020-07-26 12:47:14', NULL),
(2, 'Trung tâm tiếng trung Newsky', 544724667, '113 Đ. Lê Văn Sỹ, Phường 13, Phú Nhuận, Hồ Chí Minh', 'Trần Hoài Thương', 'thuongnguyen@gmail.com', 374873847, 1, 2, '2020-07-26 12:47:15', '2020-07-26 12:47:15', NULL),
(3, 'Trung Tâm Học Tiếng Đức Phương Nam', 117778371, '357 Lê Hồng Phong, Phường 2, Quận 10, Hồ Chí Minh', 'Phạm Trung Tín', 'tinpham@gmail.com', 337263548, 1, 3, '2020-07-26 12:47:15', '2020-07-26 12:47:15', NULL),
(4, 'Trung Tâm Ngoại Ngữ Tin Học Tín Thành', 581738132, '75 Hẻm 285 Cách Mạng Tháng Tám, Phường 12, Quận 10, Hồ Chí Minh', 'Phan Thành Nam', 'namphan@gmail.com', 394726374, 1, 5, '2020-07-26 12:47:15', '2020-07-26 12:47:15', NULL),
(5, 'Trung Tâm Ngoại Ngữ - Tin Học', 117866321, '155 Đường Võ Thị Sáu, Phường 6, Quận 3, Hồ Chí Minh', 'Lê Tú Trinh', 'trinhle@gmail.com', 394726374, 1, 6, '2020-07-26 12:47:15', '2020-07-26 12:47:15', NULL),
(6, 'Trung Tâm CNTT Quận 1', 402963935, '14 Nguyễn Thái Bình, Phường Nguyễn Thái Bình, Quận 1, Hồ Chí Minh', 'Nguyễn Như Ý', 'ynguyen@gmail.com', 394726374, 1, 7, '2020-07-26 12:47:15', '2020-07-26 12:47:15', NULL),
(7, 'Trung tâm tin học MS - Quận 4', 815545573, '31 Nguyễn Khoái, Phường 1, Quận 4, Hồ Chí Minh', 'Hồ Việt Trung', 'trungho@gmail.com', 382743846, 1, 8, '2020-07-26 12:47:15', '2020-07-26 12:47:15', NULL),
(12, 'Trung Tâm Thể Dục Thể Thao Rạch Chiếc', 111548078, '28 Xô Viết Nghệ Tĩnh, Phường 19, Bình Thạnh, Hồ Chí Minh', 'Nguyễn Tấn Hậu', 'haunguyen@gmail.com', 386473677, 1, 15, '2020-07-26 12:47:15', '2020-07-26 12:47:15', NULL),
(20, 'Trung Tâm Đào Tạo Văn Hóa Nghệ Thuật Solartacademy', 548630841, '4 Cao Triều Phát, Tân Phong, Quận 7, Hồ Chí Minh', 'Trần Quốc Huy', 'huytran@gmail.com', 387487578, 1, 16, '2020-07-26 12:47:15', '2020-07-26 12:47:15', NULL);

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
-- Chỉ mục cho bảng `ket_qua_kt`
--
ALTER TABLE `ket_qua_kt`
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
-- Chỉ mục cho bảng `noi_dung`
--
ALTER TABLE `noi_dung`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `thao_luan`
--
ALTER TABLE `thao_luan`
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT cho bảng `chuong`
--
ALTER TABLE `chuong`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT cho bảng `ct_hoa_don`
--
ALTER TABLE `ct_hoa_don`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT cho bảng `danh_gia_kh`
--
ALTER TABLE `danh_gia_kh`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT cho bảng `ket_qua_kt`
--
ALTER TABLE `ket_qua_kt`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT cho bảng `khoa_hoc`
--
ALTER TABLE `khoa_hoc`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `linh_vuc`
--
ALTER TABLE `linh_vuc`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `nguoi_dung`
--
ALTER TABLE `nguoi_dung`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT cho bảng `noi_dung`
--
ALTER TABLE `noi_dung`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- AUTO_INCREMENT cho bảng `thao_luan`
--
ALTER TABLE `thao_luan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT cho bảng `the_ngan_hang`
--
ALTER TABLE `the_ngan_hang`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `to_chuc`
--
ALTER TABLE `to_chuc`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
