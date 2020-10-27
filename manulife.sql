-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 27, 2020 lúc 05:49 PM
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
  `cate_id` int(11) NOT NULL,
  `cate_stt` int(11) NOT NULL,
  `cate_title` varchar(500) NOT NULL,
  `cate_alias` varchar(500) NOT NULL,
  `cate_img` varchar(255) NOT NULL,
  `cate_content` text NOT NULL,
  `cate_keyword` varchar(500) DEFAULT NULL,
  `cate_description` varchar(500) DEFAULT NULL,
  `cate_parent_id` int(11) NOT NULL DEFAULT 0,
  `cate_module_id` int(11) NOT NULL DEFAULT 0,
  `cate_is_menu` tinyint(1) NOT NULL,
  `cate_active` tinyint(1) NOT NULL,
  `created_at` varchar(50) NOT NULL,
  `updated_at` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `db_category`
--

INSERT INTO `db_category` (`cate_id`, `cate_stt`, `cate_title`, `cate_alias`, `cate_img`, `cate_content`, `cate_keyword`, `cate_description`, `cate_parent_id`, `cate_module_id`, `cate_is_menu`, `cate_active`, `created_at`, `updated_at`) VALUES
(1, 1, 'aaaasss', 'aaaasss', '160381446575231690_715998332242019_1695283656848834560_o.jpg', '<p>ssss</p>\r\n', '', 'sss', 0, 1, 0, 1, '2020-10-27 04:57:49', '2020-10-27 04:57:49'),
(2, 1, 'vvvvvv', 'vvvvvv', '', '<p>ssss</p>\r\n', '', 'vvv', 1, 1, 0, 1, '2020-10-27 04:58:22', '2020-10-27 04:58:22');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `db_contact`
--

CREATE TABLE `db_contact` (
  `contact_id` int(11) NOT NULL,
  `contact_name` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `contact_phone` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `contact_email` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `contact_info` text CHARACTER SET utf8mb4 NOT NULL,
  `contact_title` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `contact_to_staff` int(11) NOT NULL,
  `contact_status` int(11) NOT NULL COMMENT '0=no;1=yes',
  `created_at` varchar(25) CHARACTER SET utf8mb4 NOT NULL,
  `updated_at` varchar(25) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `db_customer`
--

CREATE TABLE `db_customer` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `customer_email` varchar(100) NOT NULL,
  `customer_phone` varchar(25) NOT NULL,
  `customer_img` varchar(255) NOT NULL,
  `customer_address` varchar(255) NOT NULL,
  `created_at` varchar(25) NOT NULL,
  `updated_at` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `db_info`
--

CREATE TABLE `db_info` (
  `info_id` int(11) NOT NULL,
  `domain_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `company` text COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `twitter` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `google` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `youtube` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `instagram` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `coppy_right` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `logo_img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `icon_img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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

--
-- Đang đổ dữ liệu cho bảng `db_module`
--

INSERT INTO `db_module` (`module_id`, `module_title`, `created_at`, `updated_at`) VALUES
(1, 'Bài viết', '', ''),
(2, 'Sản phẩm', '', ''),
(3, 'Dịch vụ', '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `db_other`
--

CREATE TABLE `db_other` (
  `other_id` int(11) NOT NULL,
  `other_title` varchar(500) NOT NULL,
  `other_description` varchar(500) NOT NULL,
  `other_content` text NOT NULL,
  `other_img` varchar(255) DEFAULT NULL,
  `other_category_id` int(11) NOT NULL,
  `other_url` varchar(500) DEFAULT NULL,
  `other_active` tinyint(2) DEFAULT 0,
  `created_at` varchar(50) NOT NULL,
  `updated_at` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `db_post`
--

CREATE TABLE `db_post` (
  `post_id` int(11) NOT NULL,
  `post_title` varchar(500) NOT NULL,
  `post_alias` text NOT NULL,
  `post_img` varchar(255) NOT NULL,
  `post_description` mediumtext NOT NULL,
  `post_content` text NOT NULL,
  `post_category_id` int(11) NOT NULL DEFAULT 0,
  `post_date_time` varchar(50) NOT NULL,
  `post_keyword` varchar(500) NOT NULL,
  `post_active` int(11) NOT NULL COMMENT '0=noactive; 1=active',
  `post_highlights` int(11) NOT NULL COMMENT '0=no;1=yes;',
  `post_author` varchar(500) NOT NULL,
  `created_at` varchar(50) NOT NULL,
  `updated_at` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `db_post`
--

INSERT INTO `db_post` (`post_id`, `post_title`, `post_alias`, `post_img`, `post_description`, `post_content`, `post_category_id`, `post_date_time`, `post_keyword`, `post_active`, `post_highlights`, `post_author`, `created_at`, `updated_at`) VALUES
(1, 'bbbb', 'bbbb', '1603814806122171723_1120180135123357_8618338184076373316_n.jpg', 'cccccc', '<p>sssssss</p>\r\n', 2, '2020102700', '', 1, 0, 'dddd', '2020-10-27 05:06:46', '2020-10-27 05:06:46');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `db_product`
--

CREATE TABLE `db_product` (
  `product_id` int(11) NOT NULL,
  `product_title` varchar(500) NOT NULL,
  `product_alias` text NOT NULL,
  `product_img` varchar(255) NOT NULL,
  `product_description` mediumtext NOT NULL,
  `product_content` text NOT NULL,
  `product_category_id` int(11) NOT NULL DEFAULT 0,
  `product_keyword` varchar(500) NOT NULL,
  `product_active` int(11) NOT NULL COMMENT '0=noactive; 1=active',
  `product_highlights` int(11) NOT NULL COMMENT '0=no;1=yes;',
  `created_at` varchar(50) NOT NULL,
  `updated_at` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `db_service`
--

CREATE TABLE `db_service` (
  `service_id` int(11) NOT NULL,
  `service_title` varchar(500) NOT NULL,
  `service_alias` text NOT NULL,
  `service_img` varchar(255) NOT NULL,
  `service_description` mediumtext NOT NULL,
  `service_content` text NOT NULL,
  `service_category_id` int(11) NOT NULL DEFAULT 0,
  `service_keyword` varchar(500) NOT NULL,
  `service_active` int(11) NOT NULL COMMENT '0=noactive; 1=active',
  `service_highlights` int(11) NOT NULL COMMENT '0=no;1=yes;',
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
  `slide_id` int(11) NOT NULL,
  `slide_img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slide_href` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slide_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slide_active` int(11) NOT NULL COMMENT '0= no; 1= yes;',
  `created_at` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `db_staff`
--

CREATE TABLE `db_staff` (
  `staff_id` int(11) NOT NULL,
  `staff_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `staff_position` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `staff_phone` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `staff_img` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `staff_active` int(11) NOT NULL COMMENT '0=noactive; 1=active ',
  `subdomain` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
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
-- Đang đổ dữ liệu cho bảng `db_user`
--

INSERT INTO `db_user` (`user_id`, `user_name`, `user_fullname`, `user_password`, `user_email`, `is_admin`, `created_at`, `updated_at`) VALUES
(4, 'admin', 'Admin', '25d55ad283aa400af464c76d713c07ad', '', 1, '2020-05-15 11:45:32', '2020-08-18 09:31:36'),
(9, 'thuan', 'Trương Thuận1', '25d55ad283aa400af464c76d713c07ad', 'truongthuan20041997@gmail.com', 1, '2020-08-22 03:12:59', '2020-08-22 03:12:59');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `db_category`
--
ALTER TABLE `db_category`
  ADD PRIMARY KEY (`cate_id`);

--
-- Chỉ mục cho bảng `db_contact`
--
ALTER TABLE `db_contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Chỉ mục cho bảng `db_customer`
--
ALTER TABLE `db_customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Chỉ mục cho bảng `db_info`
--
ALTER TABLE `db_info`
  ADD PRIMARY KEY (`info_id`);

--
-- Chỉ mục cho bảng `db_module`
--
ALTER TABLE `db_module`
  ADD PRIMARY KEY (`module_id`);

--
-- Chỉ mục cho bảng `db_other`
--
ALTER TABLE `db_other`
  ADD PRIMARY KEY (`other_id`);

--
-- Chỉ mục cho bảng `db_post`
--
ALTER TABLE `db_post`
  ADD PRIMARY KEY (`post_id`);

--
-- Chỉ mục cho bảng `db_product`
--
ALTER TABLE `db_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Chỉ mục cho bảng `db_service`
--
ALTER TABLE `db_service`
  ADD PRIMARY KEY (`service_id`);

--
-- Chỉ mục cho bảng `db_setting`
--
ALTER TABLE `db_setting`
  ADD PRIMARY KEY (`setting_id`);

--
-- Chỉ mục cho bảng `db_slide`
--
ALTER TABLE `db_slide`
  ADD PRIMARY KEY (`slide_id`);

--
-- Chỉ mục cho bảng `db_staff`
--
ALTER TABLE `db_staff`
  ADD PRIMARY KEY (`staff_id`);

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
  MODIFY `cate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `db_contact`
--
ALTER TABLE `db_contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `db_customer`
--
ALTER TABLE `db_customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `db_info`
--
ALTER TABLE `db_info`
  MODIFY `info_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `db_other`
--
ALTER TABLE `db_other`
  MODIFY `other_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `db_post`
--
ALTER TABLE `db_post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `db_product`
--
ALTER TABLE `db_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `db_service`
--
ALTER TABLE `db_service`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `db_slide`
--
ALTER TABLE `db_slide`
  MODIFY `slide_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `db_staff`
--
ALTER TABLE `db_staff`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `db_user`
--
ALTER TABLE `db_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
