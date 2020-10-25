-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 25, 2020 lúc 05:03 PM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `manulife`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `db_category`
--

CREATE TABLE `db_category` (
  `id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `alias` varchar(500) NOT NULL,
  `img` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `keyword` varchar(500) DEFAULT NULL,
  `description` mediumtext NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT 0,
  `module_id` int(11) NOT NULL DEFAULT 0,
  `is_menu` tinyint(1) NOT NULL,
  `active` tinyint(1) NOT NULL COMMENT '0=noactive ;1=active',
  `created_at` varchar(50) NOT NULL,
  `updated_at` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `db_module`
--

CREATE TABLE `db_module` (
  `module_id` int(11) NOT NULL,
  `module_title` varchar(255) NOT NULL,
  `created_at` varchar(50) NOT NULL,
  `updated_at` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `db_post`
--

CREATE TABLE `db_post` (
  `id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `alias` text NOT NULL,
  `img` varchar(255) NOT NULL,
  `description` mediumtext NOT NULL,
  `content` text NOT NULL,
  `category_id` int(11) NOT NULL DEFAULT 0,
  `date_time` varchar(50) NOT NULL,
  `keyword` varchar(500) NOT NULL,
  `active` int(11) NOT NULL COMMENT '0=noactive; 1=active',
  `highlights` int(11) NOT NULL COMMENT '0=no;1=yes;',
  `author` varchar(500) NOT NULL,
  `created_at` varchar(50) NOT NULL,
  `updated_at` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `db_setting`
--

CREATE TABLE `db_setting` (
  `setting_id` int(11) NOT NULL,
  `sibar_background_color` varchar(50) DEFAULT NULL,
  `sibar_text_color` varchar(50) DEFAULT NULL,
  `app_name` varchar(255) DEFAULT NULL,
  `app_version` varchar(50) NOT NULL,
  `sibar_mode` int(1) NOT NULL COMMENT '0=default/1=cosllape',
  `favicon` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `db_setting`
--

INSERT INTO `db_setting` (`setting_id`, `sibar_background_color`, `sibar_text_color`, `app_name`, `app_version`, `sibar_mode`, `favicon`) VALUES
(1, '#007597', '#F4EFEF', 'myAdmin CPannel', '2.0.0.1', 0, '205043db5a9d83318db42624b27a8f9f');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `db_slide`
--

CREATE TABLE `db_slide` (
  `id` int(11) NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `href` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `active` int(11) NOT NULL COMMENT '0= no; 1= yes;',
  `created_at` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `db_staff`
--

CREATE TABLE `db_staff` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `position` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `active` int(11) NOT NULL COMMENT '0=noactive; 1=active ',
  `created_at` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `db_user`
--

CREATE TABLE `db_user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `user_fullname` varchar(255) DEFAULT NULL,
  `user_password` varchar(255) DEFAULT NULL,
  `user_email` varchar(50) NOT NULL,
  `is_admin` int(2) NOT NULL DEFAULT 0,
  `created_at` varchar(50) DEFAULT NULL,
  `updated_at` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `db_category`
--
ALTER TABLE `db_category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `db_module`
--
ALTER TABLE `db_module`
  ADD PRIMARY KEY (`module_id`);

--
-- Chỉ mục cho bảng `db_post`
--
ALTER TABLE `db_post`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `db_setting`
--
ALTER TABLE `db_setting`
  ADD PRIMARY KEY (`setting_id`);

--
-- Chỉ mục cho bảng `db_slide`
--
ALTER TABLE `db_slide`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `db_staff`
--
ALTER TABLE `db_staff`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `db_user`
--
ALTER TABLE `db_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `db_category`
--
ALTER TABLE `db_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `db_post`
--
ALTER TABLE `db_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `db_slide`
--
ALTER TABLE `db_slide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `db_staff`
--
ALTER TABLE `db_staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `db_user`
--
ALTER TABLE `db_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
