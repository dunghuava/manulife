-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 08, 2021 lúc 04:57 PM
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
(1, 0, 'Sản phẩm', 'san-pham', '1604412156nav-product.png', '', '', 'SẢN PHẨM BẢO HIỂM NHÂN THỌ', 0, 2, 1, 1, '2020-10-27 04:57:49', '2020-10-27 04:57:49'),
(2, 1, 'Bảo hiểm Nhân thọ', 'bao-hiem-nhan-tho', '', '<p>Quẳng g&aacute;nh lo đi v&agrave; vui sống&rdquo; kh&ocirc;ng chỉ đơn thuần l&agrave; tựa một cuốn s&aacute;ch nổi tiếng của Dale Carnegie, đ&oacute; ch&iacute;nh l&agrave; m&oacute;n qu&agrave; qu&yacute; gi&aacute; Manulife mong muốn mang đến cho bạn v&agrave; những người th&acirc;n y&ecirc;u. Bảo hiểm nh&acirc;n thọ l&agrave; giải ph&aacute;p to&agrave;n diện gi&uacute;p bạn an t&acirc;m tận hưởng trọn vẹn cuộc sống, kh&ocirc;ng c&ograve;n phải lo lắng về g&aacute;nh nặng t&agrave;i ch&iacute;nh trước những biến cố bất ngờ xảy ra</p>\r\n', '', 'Quẳng gánh lo đi và vui sống” không chỉ đơn thuần là tựa một cuốn sách nổi tiếng của Dale Carnegie, đó chính là món quà quý giá Manulife mong muốn mang đến cho bạn và những người thân yêu. Bảo hiểm nhân thọ là giải pháp toàn diện giúp bạn an tâm tận hưởng trọn vẹn cuộc sống, không còn phải lo lắng về gánh nặng tài chính trước những biến cố bất ngờ xảy ra', 1, 2, 0, 1, '2020-10-27 04:58:22', '2020-10-27 04:58:22'),
(3, 2, 'Bảo hiểm Sức khỏe', 'bao-hiem-suc-khoe', '', '<p>Sức khỏe l&agrave; t&agrave;i sản qu&yacute; gi&aacute; nhất của con người. Đừng để những chi ph&iacute; kh&aacute;m chữa bệnh trở th&agrave;nh g&aacute;nh nặng của cả gia đ&igrave;nh. H&atilde;y để Manulife gi&uacute;p bạn tạo dựng quỹ sức khỏe đ&aacute;p ứng mọi nhu cầu về dịch vụ y tế.&nbsp;</p>\r\n', '', 'Sức khỏe là tài sản quý giá nhất của con người. Đừng để những chi phí khám chữa bệnh trở thành gánh nặng của cả gia đình. Hãy để Manulife giúp bạn tạo dựng quỹ sức khỏe đáp ứng mọi nhu cầu về dịch vụ y tế. ', 1, 2, 0, 1, '2020-11-02 09:51:10', '2020-11-02 09:51:10'),
(4, 3, 'Bảo hiểm Tiết kiệm', 'bao-hiem-tiet-kiem', '', '<p>D&ugrave; bạn đang mơ ước được nghỉ hưu an nh&agrave;n hay c&oacute; đủ tiềm lực t&agrave;i ch&iacute;nh cho con y&ecirc;u hưởng thụ m&ocirc;i trường gi&aacute;o dục ti&ecirc;n tiến, tiết kiệm đều đặn v&agrave; kỷ luật l&agrave; c&aacute;ch tốt nhất để từng bước đạt được những mục ti&ecirc;u đ&oacute;. Bắt đầu x&acirc;y dựng kế hoạch t&agrave;i ch&iacute;nh c&ugrave;ng Manulife ng&agrave;y h&ocirc;m nay với những giải ph&aacute;p bảo hiểm tiết kiệm an to&agrave;n v&agrave; ph&ugrave; hợp nhất.</p>\r\n', '', 'Dù bạn đang mơ ước được nghỉ hưu an nhàn hay có đủ tiềm lực tài chính cho con yêu hưởng thụ môi trường giáo dục tiên tiến, tiết kiệm đều đặn và kỷ luật là cách tốt nhất để từng bước đạt được những mục tiêu đó. Bắt đầu xây dựng kế hoạch tài chính cùng Manulife ngày hôm nay với những giải pháp bảo hiểm tiết kiệm an toàn và phù hợp nhất.', 1, 2, 0, 1, '2020-11-02 09:51:40', '2020-11-02 09:51:40'),
(5, 4, 'Sản phẩm Đầu tư', 'san-pham-dau-tu', '', '<p>D&ugrave; bạn đang mơ ước được nghỉ hưu an nh&agrave;n hay c&oacute; đủ tiềm lực t&agrave;i ch&iacute;nh cho con y&ecirc;u hưởng thụ m&ocirc;i trường gi&aacute;o dục ti&ecirc;n tiến, tiết kiệm đều đặn v&agrave; kỷ luật l&agrave; c&aacute;ch tốt nhất để từng bước đạt được những mục ti&ecirc;u đ&oacute;. Bắt đầu x&acirc;y dựng kế hoạch t&agrave;i ch&iacute;nh c&ugrave;ng Manulife ng&agrave;y h&ocirc;m nay với những giải ph&aacute;p bảo hiểm tiết kiệm an to&agrave;n v&agrave; ph&ugrave; hợp nhất.</p>\r\n', '', 'Dù bạn đang mơ ước được nghỉ hưu an nhàn hay có đủ tiềm lực tài chính cho con yêu hưởng thụ môi trường giáo dục tiên tiến, tiết kiệm đều đặn và kỷ luật là cách tốt nhất để từng bước đạt được những mục tiêu đó. Bắt đầu xây dựng kế hoạch tài chính cùng Manulife ngày hôm nay với những giải pháp bảo hiểm tiết kiệm an toàn và phù hợp nhất.', 1, 2, 0, 1, '2020-11-02 09:52:04', '2020-11-02 09:52:04'),
(6, 5, 'Sản phẩm Bổ trợ', 'san-pham-bo-tro', '', '<p>Với danh mục sản phẩm bổ trợ đa dạng, đ&aacute;p ứng c&aacute;c nhu cầu từ bảo hiểm sức khỏe, bệnh hiểm ngh&egrave;o, tai nạn cho tới tử vong v&agrave; thương tật, ch&uacute;ng t&ocirc;i gi&uacute;p bạn bảo vệ trọn vẹn cho những kế hoạch v&agrave; ho&agrave;i b&atilde;o trong hiện tại v&agrave; tương lai.</p>\r\n', '', 'Với danh mục sản phẩm bổ trợ đa dạng, đáp ứng các nhu cầu từ bảo hiểm sức khỏe, bệnh hiểm nghèo, tai nạn cho tới tử vong và thương tật, chúng tôi giúp bạn bảo vệ trọn vẹn cho những kế hoạch và hoài bão trong hiện tại và tương lai.', 1, 2, 0, 1, '2020-11-02 09:52:21', '2020-11-02 09:52:21'),
(7, 2, 'Dịch vụ', 'dich-vu', '1604412173nav-services.png', '', '', '', 0, 3, 1, 1, '2020-11-02 09:53:46', '2020-11-02 09:53:46'),
(8, 1, 'Cổng thông tin trực tuyến', 'cong-thong-tin-truc-tuyen', '', '<p><img alt=\"manuconnect\" src=\"https://www.manulife.com.vn/vi/dich-vu/cong-thong-tin-truc-tuyen-danh-cho-khach-hang/_jcr_content/root/responsivegrid_641029165/responsivegrid/image.coreimg.jpeg/1586340593628.jpeg\" /></p>\r\n\r\n<h2>Những th&ocirc;ng tin hữu &iacute;ch v&agrave; dịch vụ tiện lợi mang đến cho bạn trải nghiệm tốt nhất với Manulife</h2>\r\n\r\n<h5><strong>Manuconnect l&agrave; g&igrave;?</strong></h5>\r\n\r\n<p>Đ&acirc;y l&agrave; cổng th&ocirc;ng tin trực tuyến Manulife d&agrave;nh ri&ecirc;ng cho kh&aacute;ch h&agrave;ng để tra cứu v&agrave; cập nhật th&ocirc;ng tin quan trọng li&ecirc;n quan đến hợp đồng bảo hiểm. Với giao diện th&acirc;n thiện v&agrave; nhiều tiện &iacute;ch dễ sử dụng, bạn c&oacute; thể kết nối với Manulife chỉ với v&agrave;i c&uacute; &ldquo;click&rdquo; chuột!</p>\r\n\r\n<h5><strong>Manuconnect c&oacute; thể gi&uacute;p bạn:</strong></h5>\r\n\r\n<ul>\r\n	<li>Quản l&yacute; hợp đồng của bạn dễ d&agrave;ng với chức năng truy vấn th&ocirc;ng tin hợp đồng, tra cứu ho&aacute; đơn điện tử v&agrave; lịch sử giao dịch</li>\r\n	<li>Cập nhật th&ocirc;ng b&aacute;o mới nhất từ Manulife</li>\r\n	<li>Thanh to&aacute;n ph&iacute; bảo hiểm trực tuyến</li>\r\n	<li>Y&ecirc;u cầu quyền lợi bảo hiểm trực tuyến</li>\r\n	<li>Cập nhật thay đổi th&ocirc;ng tin c&aacute; nh&acirc;n như email, số điện thoại, địa chỉ v&agrave; m&atilde; số thuế c&aacute; nh&acirc;n.</li>\r\n	<li>C&ugrave;ng nhiều tiện &iacute;ch kh&aacute;c</li>\r\n</ul>\r\n', '', 'Cổng thông tin trực tuyến Manuconnect dành cho khách hàng', 7, 3, 0, 1, '2020-11-02 09:54:45', '2021-03-07 08:36:28'),
(9, 2, 'Các giao dịch liên quan đến hợp đồng', 'cac-giao-dich-lien-quan-den-hop-dong', '16043289251571914732736.jpeg', '<p>Khi c&oacute; y&ecirc;u cầu điều chỉnh/thay đổi c&aacute;c&nbsp;th&ocirc;ng tin li&ecirc;n quan đến hợp đồng bảo hiểm,&nbsp;Bạn chọn mẫu biểu&nbsp;ph&ugrave; hợp tại mục&nbsp;<a href=\"https://www.manulife.com.vn/vi/dich-vu/cac-bieu-mau-thuong-dung.html\">C&aacute;c biểu mẫu thường d&ugrave;ng</a><em>&nbsp;</em>v&agrave; điền đầy đủ th&ocirc;ng tin.</p>\r\n\r\n<p>Bạn c&oacute; thể chọn 1 trong 3 c&aacute;ch dưới đ&acirc;y để nộp y&ecirc;u cầu điều chỉnh:</p>\r\n\r\n<ul>\r\n	<li>&nbsp;Nộp tại c&aacute;c văn ph&ograve;ng giao dịch của Manulife. Xem địa chỉ&nbsp;<a href=\"https://www.manulife.com.vn/vi/lien-he.html\">tại đ&acirc;y</a></li>\r\n	<li>&nbsp;Nộp th&ocirc;ng qua đại l&yacute; phục vụ hợp đồng bảo hiểm.</li>\r\n	<li>&nbsp;Gửi chứng từ qua Bưu điện theo địa chỉ:&nbsp;&nbsp;</li>\r\n</ul>\r\n', '', 'Khi có yêu cầu điều chỉnh/thay đổi các thông tin liên quan đến hợp đồng bảo hiểm, Bạn chọn mẫu biểu phù hợp tại mục Các biểu mẫu thường dùng và điền đầy đủ thông tin.\r\n\r\nBạn có thể chọn 1 trong 3 cách dưới đây để nộp yêu cầu điều chỉnh:\r\n\r\n Nộp tại các văn phòng giao dịch của Manulife. Xem địa chỉ tại đây\r\n Nộp thông qua đại lý phục vụ hợp đồng bảo hiểm.\r\n Gửi chứng từ qua Bưu điện theo địa chỉ:  ', 7, 3, 0, 1, '2020-11-02 09:55:25', '2021-03-07 08:36:52'),
(10, 3, 'Giải quyết quyền lợi bảo hiểm', 'giai-quyet-quyen-loi-bao-hiem', '16043290061571971783510.png', '<h3><strong>C&aacute;c loại quyền lợi bảo hiểm</strong></h3>\r\n\r\n<h3>Trợ cấp Nằm viện</h3>\r\n\r\n<h6>&nbsp;</h6>\r\n\r\n<h3>Hỗ trợ chi ph&iacute; điều trị nội tr&uacute;/ngoại tr&uacute;/nha khoa</h3>\r\n\r\n<h6>&nbsp;</h6>\r\n\r\n<h3>Hỗ trợ chi ph&iacute; điều trị bệnh l&yacute; nghi&ecirc;m trọng</h3>\r\n\r\n<h6>&nbsp;</h6>\r\n\r\n<h3>Bồi thường tử vong</h3>\r\n\r\n<h6>&nbsp;</h6>\r\n\r\n<h3>Miễn nộp ph&iacute; bảo hiểm</h3>\r\n\r\n<h6>&nbsp;</h6>\r\n\r\n<h3>Quyền lợi đối với bệnh l&yacute; đặc th&ugrave; theo giới t&iacute;nh</h3>\r\n\r\n<h6>&nbsp;</h6>\r\n\r\n<h3>Hỗ trợ chi ph&iacute; phẫu thuật</h3>\r\n\r\n<h6>&nbsp;</h6>\r\n\r\n<h3>Hỗ trợ chi ph&iacute; điều trị thương tật</h3>\r\n\r\n<h6>&nbsp;</h6>\r\n\r\n<h3>Hỗ trợ chi ph&iacute; sinh nở</h3>\r\n', '', 'Các loại quyền lợi bảo hiểm\r\nTrợ cấp Nằm viện\r\nHỗ trợ chi phí điều trị nội trú/ngoại trú/nha khoa\r\nHỗ trợ chi phí điều trị bệnh lý nghiêm trọng\r\nBồi thường tử vong\r\nMiễn nộp phí bảo hiểm\r\nQuyền lợi đối với bệnh lý đặc thù theo giới tính\r\nHỗ trợ chi phí phẫu thuật\r\nHỗ trợ chi phí điều trị thương tật\r\nHỗ trợ chi phí sinh nở', 7, 3, 0, 1, '2020-11-02 09:56:46', '2020-11-02 09:56:46'),
(11, 4, 'Các quyền lợi của Hợp đồng bảo hiểm', 'cac-quyen-loi-cua-hop-dong-bao-hiem', '16043290581571974602390.jpeg', '<p>Manulife mang đến cho bạn những quyền lợi tuyệt vời b&ecirc;n cạnh gi&aacute; trị bảo vệ v&agrave; t&iacute;ch lũy của Hợp Đồng Bảo Hiểm, để bạn c&oacute; thể linh động thực hiện c&aacute;c kế hoạch của m&igrave;nh.</p>\r\n\r\n<p>Bạn c&oacute; thể:</p>\r\n\r\n<ul>\r\n	<li>R&uacute;t Bảo tức hay Phiếu tiền mặt của Hợp đồng.</li>\r\n	<li>Vay/tạm ứng một khoản tiền từ gi&aacute; trị Hợp đồng với l&atilde;i suất hấp dẫn m&agrave; kh&ocirc;ng cần thế chấp t&agrave;i sản</li>\r\n	<li>R&uacute;t một phần gi&aacute; trị t&agrave;i khoản trước khi đ&aacute;o hạn hợp đồng</li>\r\n	<li>Nhận to&agrave;n bộ Quyền lợi đ&aacute;o hạn khi đến hạn</li>\r\n</ul>\r\n\r\n<p>V&agrave; nhiều quyền lợi hấp dẫn kh&aacute;c. Để biết th&ecirc;m th&ocirc;ng tin, vui l&ograve;ng li&ecirc;n hệ tổng đ&agrave;i hotline&nbsp;<strong>1900 1776.</strong></p>\r\n\r\n<h3><strong>Bạn chỉ cần</strong></h3>\r\n\r\n<p><strong>01 -&nbsp;</strong>Điền Đơn y&ecirc;u cầu thanh to&aacute;n quyền lợi Hợp đồng bảo hiểm&nbsp;</p>\r\n\r\n<p><strong>02 -&nbsp;</strong>Ho&agrave;n tất Giấy ủy quyền nhận tiền (nếu Người nhận tiền kh&ocirc;ng phải l&agrave; B&ecirc;n mua Bảo hiểm)</p>\r\n\r\n<p><strong>03</strong>&nbsp;- Nộp chứng từ cho Manulife</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>Bạn c&oacute; thể nộp chứng từ theo 1 trong 3 c&aacute;ch dưới đ&acirc;y:</strong></h3>\r\n\r\n<ul>\r\n	<li>&nbsp;Nộp tại c&aacute;c văn ph&ograve;ng giao dịch của Manulife. Xem địa chỉ&nbsp;<a href=\"https://www.manulife.com.vn/vi/lien-he.html\">tại đ&acirc;y</a></li>\r\n	<li>&nbsp;Nộp th&ocirc;ng qua đại l&yacute; phục vụ hợp đồng bảo hiểm.</li>\r\n	<li>&nbsp;Gửi chứng từ qua Bưu điện theo địa chỉ:&nbsp;&nbsp;</li>\r\n</ul>\r\n\r\n<p><em>Ph&ograve;ng Quản l&yacute; Hợp đồng - Manulife Việt Nam</em></p>\r\n\r\n<p><em>75 Ho&agrave;ng Văn Th&aacute;i, P. T&acirc;n Ph&uacute;, Quận 7, Tp. Hồ Ch&iacute; Minh</em></p>\r\n', '', 'Manulife mang đến cho bạn những quyền lợi tuyệt vời bên cạnh giá trị bảo vệ và tích lũy của Hợp Đồng Bảo Hiểm, để bạn có thể linh động thực hiện các kế hoạch của mình.\r\n\r\nBạn có thể:\r\n\r\nRút Bảo tức hay Phiếu tiền mặt của Hợp đồng.\r\nVay/tạm ứng một khoản tiền từ giá trị Hợp đồng với lãi suất hấp dẫn mà không cần thế chấp tài sản\r\nRút một phần giá trị tài khoản trước khi đáo hạn hợp đồng\r\nNhận toàn bộ Quyền lợi đáo hạn khi đến hạn\r\nVà nhiều quyền lợi hấp dẫn khác. Để biết thêm thông tin, vui lòng ', 7, 3, 0, 1, '2020-11-02 09:57:38', '2020-11-02 09:57:38'),
(12, 5, 'Dịch vụ và Thẻ Bảo lãnh viện phí', 'dich-vu-va-the-bao-lanh-vien-phi', '', '<h2>H&atilde;y để Manulife gi&uacute;p bạn giảm bớt g&aacute;nh nặng khi điều trị</h2>\r\n\r\n<h5><strong>Th&ocirc;ng tin bạn cần biết</strong></h5>\r\n\r\n<p>Khi c&oacute; vấn đề về sức khoẻ, bạn cứ y&ecirc;n t&acirc;m điều trị tại c&aacute;c cơ sở y tế c&oacute; cung cấp dịch vụ Bảo l&atilde;nh viện ph&iacute; cho Kh&aacute;ch h&agrave;ng của Manulife. Ch&uacute;ng t&ocirc;i sẽ thay mặt bạn tiến h&agrave;nh c&aacute;c thủ tục thanh to&aacute;n viện ph&iacute; trực tiếp cho đối t&aacute;c đối với những quyền lợi quy định trong hợp đồng bảo hiểm của bạn.</p>\r\n\r\n<h5><strong>Quyền lợi được Bảo l&atilde;nh viện ph&iacute;</strong></h5>\r\n\r\n<ul>\r\n	<li>Quyền lợi thuộc sản phẩm&nbsp;<em>Sống Khỏe Mỗi Ng&agrave;y</em></li>\r\n	<li>Quyền lợi thuộc sản phẩm&nbsp;<em>M&oacute;n Qu&agrave; Sức Khỏe</em></li>\r\n	<li>Quyền lợi Trợ cấp Y tế</li>\r\n	<li>Quyền lợi Trợ cấp nằm viện</li>\r\n</ul>\r\n', '', 'Hãy để Manulife giúp bạn giảm bớt gánh nặng khi điều trị\r\nThông tin bạn cần biết\r\nKhi có vấn đề về sức khoẻ, bạn cứ yên tâm điều trị tại các cơ sở y tế có cung cấp dịch vụ Bảo lãnh viện phí cho Khách hàng của Manulife. Chúng tôi sẽ thay mặt bạn tiến hành các thủ tục thanh toán viện phí trực tiếp cho đối tác đối với những quyền lợi quy định trong hợp đồng bảo hiểm của bạn.\r\nQuyền lợi được Bảo lãnh viện phí\r\nQuyền lợi thuộc sản phẩm Sống Khỏe Mỗi Ngày\r\nQuyền lợi thuộc sản phẩm Món Quà Sức Khỏe\r\nQu', 7, 3, 0, 1, '2020-11-02 09:58:10', '2021-03-07 08:39:40'),
(13, 6, 'Hướng dẫn thanh toán phí bảo hiểm', 'huong-dan-thanh-toan-phi-bao-hiem', '16043291351571973038288.jpeg', '<h3>Thanh to&aacute;n ph&iacute; bảo hiểm trực tuyến</h3>\r\n\r\n<h6>&nbsp;</h6>\r\n\r\n<h3>Thanh to&aacute;n ph&iacute; bảo hiểm qua c&aacute;c Ng&acirc;n h&agrave;ng li&ecirc;n kết với Manulife</h3>\r\n\r\n<h6>&nbsp;</h6>\r\n\r\n<h3>Thanh to&aacute;n ph&iacute; bảo hiểm qua Ng&acirc;n h&agrave;ng trực tuyến (Internet banking)</h3>\r\n\r\n<h6>&nbsp;</h6>\r\n\r\n<h3>Thanh to&aacute;n ph&iacute; bảo hiểm tự động qua Ng&acirc;n h&agrave;ng (Ủy nhiệm thu)</h3>\r\n\r\n<h6>&nbsp;</h6>\r\n\r\n<h3>Thanh to&aacute;n ph&iacute; bảo hiểm qua ứng dụng F@st Mobile của Techcombank</h3>\r\n\r\n<h6>&nbsp;</h6>\r\n\r\n<h3>Thanh to&aacute;n ph&iacute; bảo hiểm qua hệ thống m&aacute;y ATM của Vietcombank</h3>\r\n\r\n<h6>&nbsp;</h6>\r\n\r\n<h3>Thanh to&aacute;n ph&iacute; bảo hiểm qua hệ thống bưu điện</h3>\r\n\r\n<h6>&nbsp;</h6>\r\n\r\n<h3>Đ&oacute;ng ph&iacute; qua Payoo</h3>\r\n\r\n<h6>&nbsp;</h6>\r\n\r\n<h3>Thanh to&aacute;n ph&iacute; bảo hiểm tại c&aacute;c Trung t&acirc;m Dịch vụ Kh&aacute;ch h&agrave;ng Manulife</h3>\r\n\r\n<h6>&nbsp;</h6>\r\n\r\n<h3>Thanh to&aacute;n ph&iacute; bảo hiểm tại nh&agrave;</h3>\r\n', '', 'Thanh toán phí bảo hiểm trực tuyến\r\nThanh toán phí bảo hiểm qua các Ngân hàng liên kết với Manulife\r\nThanh toán phí bảo hiểm qua Ngân hàng trực tuyến (Internet banking)\r\nThanh toán phí bảo hiểm tự động qua Ngân hàng (Ủy nhiệm thu)\r\nThanh toán phí bảo hiểm qua ứng dụng F@st Mobile của Techcombank\r\nThanh toán phí bảo hiểm qua hệ thống máy ATM của Vietcombank\r\nThanh toán phí bảo hiểm qua hệ thống bưu điện\r\nĐóng phí qua Payoo\r\nThanh toán phí bảo hiểm tại các Trung tâm Dịch vụ Khách hàng Manulife\r\nTh', 7, 3, 0, 1, '2020-11-02 09:58:41', '2020-11-02 09:58:41'),
(14, 7, 'Các biểu mẫu thường dùng', 'cac-bieu-mau-thuong-dung', '16043292761583720938330.jpeg', '<p><a href=\"https://www.manulife.com.vn/content/dam/insurance/vn/documents/service-docs/bang-khai-bao-thong-tin-chinh-khach.pdf\">Bảng khai b&aacute;o Th&ocirc;ng tin Ch&iacute;nh kh&aacute;ch</a></p>\r\n\r\n<p><a href=\"https://www.manulife.com.vn/content/dam/insurance/vn/documents/service-docs/bang-khai-bao-thong-tin-ve-ben-thu-ba.pdf\">Bảng khai b&aacute;o Th&ocirc;ng tin về B&ecirc;n thứ ba</a></p>\r\n\r\n<p><a href=\"https://www.manulife.com.vn/content/dam/insurance/vn/documents/service-docs/don-yeu-cau-bao-hiem-20122018.pdf\" target=\"_blank\">Đơn y&ecirc;u cầu bảo hiểm</a></p>\r\n\r\n<p><a href=\"https://www.manulife.com.vn/content/dam/insurance/vn/documents/service-docs/quyen-loi-hop-dong-bao-hiem/don-yeu-cau-thay-doi-thong-tin-hdbh.pdf\">Đơn y&ecirc;u cầu thay đổi th&ocirc;ng tin Hợp đồng bảo hiểm</a></p>\r\n\r\n<p><a href=\"https://www.manulife.com.vn/content/dam/insurance/vn/documents/service-docs/thong-bao-mat-bo-hop-dong-bao-hiem.pdf\">Th&ocirc;ng b&aacute;o mất bộ hợp đồng bảo hiểm</a></p>\r\n\r\n<p><a href=\"https://www.manulife.com.vn/content/dam/insurance/vn/documents/service-docs/thong-tin-cong-ty-to-chuc.pdf\">Th&ocirc;ng tin C&ocirc;ng ty/Tổ chức</a></p>\r\n\r\n<p><a href=\"https://www.manulife.com.vn/content/dam/insurance/vn/documents/service-docs/to-khai-thong-tin-20122018.pdf\">Tờ khai th&ocirc;ng tin</a></p>\r\n', '', 'Bảng khai báo Thông tin Chính khách\r\n\r\nBảng khai báo Thông tin về Bên thứ ba\r\n\r\nĐơn yêu cầu bảo hiểm\r\n\r\nĐơn yêu cầu thay đổi thông tin Hợp đồng bảo hiểm\r\n\r\nThông báo mất bộ hợp đồng bảo hiểm\r\n\r\nThông tin Công ty/Tổ chức\r\n\r\nTờ khai thông tin', 7, 3, 0, 1, '2020-11-02 10:01:16', '2020-11-02 10:01:16'),
(15, 3, 'Kiến thức & Tin tức', 'kien-thuc-tin-tuc', '1604412192nav-services.png', '<h1><strong>Th&ocirc;ng tin hữu &iacute;ch</strong></h1>\r\n\r\n<p>C&ugrave;ng t&igrave;m hiểu th&ecirc;m c&aacute;c b&agrave;i viết hay v&agrave; mới nhất li&ecirc;n quan đến c&aacute;c vấn đề bạn đang quan t&acirc;m tại đ&acirc;y nh&eacute;!!</p>\r\n', '', 'Thông tin hữu ích\r\nCùng tìm hiểu thêm các bài viết hay và mới nhất liên quan đến các vấn đề bạn đang quan tâm tại đây nhé!!', 0, 1, 1, 1, '2020-11-02 10:02:11', '2021-03-06 10:27:27'),
(16, 4, 'Về chúng tôi', 've-chung-toi', '1604412210About Us.png', '<h1>Quyết định dễ d&agrave;ng<br />\r\nVẹn to&agrave;n cuộc sống</h1>\r\n', '', 'Quyết định dễ dàng\r\nVẹn toàn cuộc sống', 0, 4, 1, 1, '2020-11-02 10:04:38', '2020-11-02 10:04:38'),
(17, 5, 'Liên hệ', 'lien-he', '1604412222nav-contact.png', '<p>Li&ecirc;n hệ</p>\r\n\r\n<p>H&atilde;y li&ecirc;n hệ ngay với ch&uacute;ng t&ocirc;i để được hỗ trợ tốt nhất</p>\r\n', '', 'Liên hệ\r\nHãy liên hệ ngay với chúng tôi để được hỗ trợ tốt nhất', 0, 5, 1, 1, '2020-11-02 10:05:08', '2020-11-02 10:05:08');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `db_contact`
--

CREATE TABLE `db_contact` (
  `contact_id` int(11) NOT NULL,
  `contact_name` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `contact_phone` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `contact_email` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `contact_address` varchar(255) DEFAULT NULL,
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
  `customer_birth` varchar(50) NOT NULL,
  `customer_img` varchar(255) DEFAULT NULL,
  `customer_address` varchar(255) NOT NULL,
  `need` varchar(225) DEFAULT NULL,
  `commission_level` varchar(225) DEFAULT NULL,
  `job` varchar(100) DEFAULT NULL,
  `interests` varchar(100) DEFAULT NULL,
  `note` mediumtext DEFAULT NULL,
  `insurance` int(11) DEFAULT NULL COMMENT '0=no; 1=yes;',
  `source` varchar(225) DEFAULT NULL,
  `marriage` int(11) DEFAULT NULL COMMENT '0=alone; 1=married',
  `info_relatives` mediumtext DEFAULT NULL,
  `amount_insurance` varchar(11) DEFAULT NULL,
  `insurance_name` varchar(225) DEFAULT NULL,
  `processing_steps` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL COMMENT '0=admin',
  `created_at` varchar(25) NOT NULL,
  `updated_at` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `db_customer`
--

INSERT INTO `db_customer` (`customer_id`, `customer_name`, `customer_email`, `customer_phone`, `customer_birth`, `customer_img`, `customer_address`, `need`, `commission_level`, `job`, `interests`, `note`, `insurance`, `source`, `marriage`, `info_relatives`, `amount_insurance`, `insurance_name`, `processing_steps`, `staff_id`, `created_at`, `updated_at`) VALUES
(4, 'CHỊ XANH ', 'tothuxanh1992@gmail.com', '0901888882', '2000', NULL, '', 'gọi lại', '', '', '', 'GỌI LẠI CHỊ', 0, 'Lead Facebook', 0, '', '', '', 2, 0, '2020-11-12 06:20:40', '2020-12-16 05:19:05'),
(5, 'TUẤN THÀNH', 'tuanthanh.bdshcm@gmail.com', '0908555853', '1992', NULL, '', '', '', '', '', 'Chưa nghe máy', 0, '', 0, '', '', '', 1, 0, '2020-11-17 05:18:12', '2020-11-17 05:18:12'),
(6, 'ANH NGUYỄN', ' vanthao8174@gmail.com', '0903719958', '1980', NULL, '', 'Quan tâm thẻ sức khỏe', '', '', '', '', 0, '', 0, '', '', '', 1, 0, '2020-11-17 05:19:28', '2021-02-23 01:44:46'),
(7, 'Thanh', 'thanhmap89@gmail.com', '0907903039', '1991', NULL, '', 'Chưa quan tâm, làm BĐS ', '', '', '', '', 0, '', 0, '', '', '', 1, 0, '2020-11-17 05:20:44', '2020-11-17 05:20:44'),
(8, 'HOÀNG LONG', ' mrhoanglong8146@gmail.com', '0349928146', '1987', NULL, 'Chợ Hiệp Tân ở Bình Tân, quán cf Milano', 'Có BHYT hết rồi, muốn mua BHNT cho cả gia đình', '', '', '', '', 0, '', 0, '', '', '', 3, 0, '2020-11-17 05:21:57', '2020-12-16 05:19:27'),
(9, 'Nguyễn Hoàng vũ or Lâm Quốc Đỉnh', ' hvu1408@gmail.com', '0964161691', '1987', NULL, '', '', '', '', '', 'Gọi bắt máy nhưng tắt bảo nhầm số', 0, '', 0, '', '', '', 1, 0, '2020-11-17 05:23:46', '2020-11-17 05:23:46'),
(10, 'Anh Linh', ' khanhlinhle0107@gmail.com', '0902315404', '1994', NULL, '', '8h gọi lại hẹn gặp \r\nMua cho vợ và con 2 tháng tuổ', '', '', '', '', 0, '', 1, 'ANH 1994, vợ 1996', '', '', 2, 0, '2020-11-17 05:25:11', '2020-11-17 05:25:11'),
(11, 'Linh', ' Linhlinhnn@gmail.com', '0842272904', '1990', NULL, '', '', '', '', '', '', 0, '', 0, '', '', '', 1, 0, '2020-11-17 05:26:12', '2020-11-17 05:26:12'),
(12, 'ngô thị ngọc huyền', ' ngothingochuyen17081992cm@gmail.com', '0942701707', '1992', NULL, '', 'Đang có nhu cầu, ở Hà Nội ', '', '', '', '', 0, '', 0, '', '', '', 2, 0, '2020-11-17 05:27:21', '2021-02-23 01:44:48'),
(13, 'Lê Tuấn Anh', 'leanh.l60@gmail.com', '0928227257', '1994', NULL, '', 'Chưa bắt máy gọi 16.11', '', '', '', '', 0, '', 0, '', '', '', 1, 0, '2020-11-17 05:28:32', '2020-11-17 05:28:32'),
(14, 'NGUYỄN SỸ QUÝ', ' nguyensyquy39@gmail.com', '0938792304', '1994', NULL, '', '', '', '', '', 'Gọi nhưng tắt máy 16.11', 0, '', 0, '', '', '', 1, 0, '2020-11-17 05:29:12', '2021-02-23 01:44:54'),
(15, 'Thịnh Nguyễn', 'nguyenthinh032016@gmail.com', '0382332273', '1980', NULL, '', '', '', '', '', '', 0, '', 0, '', '', '', 1, 0, '2020-11-17 05:30:19', '2020-11-18 03:48:32'),
(16, 'Ngô Mạnh Kha', 'neuerngo@motivesvn.com', '0903637991', '1987', NULL, '', '', '', '', '', 'Chưa nghe máy', 0, '', 0, '', '', '', 1, 0, '2020-11-17 05:31:05', '2020-11-18 03:50:13'),
(17, 'Trinh Ngọc', 'menecon@yahoo.com.vn', '0965260000', '1992', NULL, '', '', '', '', '', 'Nghe máy, nhưng không muốn nói chuyện ', 0, '', 0, '', '', '', 1, 0, '2020-11-17 05:32:16', '2020-11-17 05:32:16'),
(18, 'CHỊ THẢO', 'Thaopham@gmail.com', '0983255945', '1980', NULL, '', '', '', '', '', 'Gia đình đã mua BH của BIDV đang có nhu cầu mua thẻ sức khỏe cho ba mẹ 60 và 59. Đã gọi lúc 17.11', 0, '', 0, '', '', '', 1, 0, '2020-11-18 03:51:47', '2020-11-18 03:51:47'),
(19, 'CHỊ THI', 'thi@gamil.com.vn', ' 0945711524', '1987', NULL, '', 'Thai sản, nhà chưa có BH nhân thọ, sẽ mua nhưng chưa phải bây giờ, nhà làm ngành y', '', '', '', 'đang cần thai sản có bầu 3 tháng rồi ', 0, '', 0, '', '', '', 1, 0, '2020-11-18 03:53:41', '2020-11-18 04:22:47'),
(20, 'NGUYEN VAN HUY', 'HUY@gamil.com', '84909916915', '1979', NULL, 'Tân Phú ', 'tham gia BH cho 2 vợ chồng, tạm ngưng không muốn mua nữa', '15tr', 'chủ tiệm may', '', 'đã tư vấn đang cân nhắc, gọi lại thì tạm hoãn', 0, '', 0, 'NGUYEN VAN HUY 18.02.1979\r\nLUU THI LIEN 14.04.1977', '1', '', 6, 7, '2020-11-18 04:05:30', '2021-01-14 10:14:21'),
(21, 'Hà Thị Thu Thủy', 'thuy@gmail.com', '0909777072', '1984', NULL, 'TÂY NINH', 'Mua BH cho mình và 2 con', '15 TRIỆU', '', '', '', 0, '', 0, 'CON TRAI 2013, CON GÁI 2015, CHỊ THỦY 1984', '', '', 2, 0, '2020-11-18 04:11:45', '2020-12-16 05:20:53'),
(22, 'NGÔ NGỌC NHƯ', 'nhu@gmail.com', '840988817339', '1994', NULL, '', 'MUA CHO BẢN THÂN', '', 'ĐANG LÀM DJ,', '', 'Gọi buổi tối sẽ tiện hơn', 0, '', 0, '', '', '', 2, 0, '2020-11-18 04:13:26', '2020-11-18 04:13:26'),
(23, 'tran ai vy', 'vy@gmail.com ', '84928605398', '1990', NULL, '', '', '', '', '', 'Chưa liên lạc được\r\n??!', 0, '', 0, '', '', '', 1, 0, '2020-11-18 04:14:14', '2020-12-11 04:32:31'),
(24, 'Phương Hồng', 'hong@gmail.com', '84964246331', '1992', NULL, '', '', '', '', '', 'chốt gửi mẫu lại onl, chị quan tâm rất nhiều, làm ở q12 nhà Bình Dương', 0, '', 0, '', '', '', 2, 0, '2020-11-18 04:15:36', '2020-12-16 05:21:16'),
(25, 'Nguyễn Thị Tuyết Trâm', 'tram@gmail.com', '84902412492', '1992', NULL, 'quận 7', 'mua BH cho bản thân và mẹ', '', 'quản lý nhà hàng', '', 'có đang bán hàng online', 0, '', 0, '', '', '', 3, 0, '2020-11-18 04:16:50', '2020-12-16 05:23:05'),
(26, 'Nguyen Thach', 'thach@gmail.com', '902608066', '1990', NULL, 'Tân Phú', 'mua cho bản thân, anh đang mua đất, nên chưa mún mua BH', '20 triệu', 'hay đi công tác xa', '', '23.04.1990 ', 0, '', 0, '', '', '', 5, 7, '2020-11-18 04:18:40', '2020-12-19 04:35:55'),
(27, 'Oanh Vo Thi Phuong', 'oanh@gmail.com', '0903604447', '1974', NULL, 'Bình Thanh (tòa landmark 7 đang làm, ở landmark 3)', 'thẻ sức khỏe cả gia đình, chồng năm sau thêm vào', '40.232.000đ đóng phí năm', 'kế toán', '', 'chị hay đan những túi xác rất đẹp', 0, '', 0, '18/05/1974 chị Oanh \r\n	27/08/1968 anh Bút ', '1', 'Hành Trình Hạnh Phúc', 10, 7, '2020-11-18 04:22:14', '2021-02-23 01:43:45'),
(28, 'NGÔ HỒNG CẨM ', 'CAM@GMAIL.COM', '0789728573', '1970', NULL, 'BÌNH TÂN', 'MUA BẢN THÂN VÀ CON GÁI', '24TR', 'LÁI GRAB', 'Thẳng thắng', 'đợi tháng 1 ký', 0, '', 0, '', '', '', 8, 0, '2020-11-18 04:24:30', '2020-11-18 04:24:30'),
(29, 'Huỳnh Thị Thu', 'thu@gmail.com', '0355120533 ', '1983', NULL, 'Vĩnh Lộc, Bình Chánh', 'sức khỏe, đang mua trợ cấp y tế là chủ yếu, con đứng chính\r\nNữa sau này mua thêm cho 1 đứa con nữa', '13 triệu', '', '', '', 0, '', 0, '', '1', 'Hành Trình Hạnh Phúc', 10, 7, '2020-11-18 04:26:53', '2020-12-19 03:58:13'),
(30, 'LÊ THỊ MINH HIẾU', 'hieu@gmail.com', '0903777977 ', '1970', NULL, '133/4 HOÀ HƯNG  PHƯỜNG 12, QUẬN 10, THÀNH PHỐ HỒ CHÍ MINH', 'Sức khỏe bản thân, chưa có chồng vào', '24.295.000Đ đóng phí năm', 'Làm quận 1 giống thư ký, gần nhà thờ đức bà', '', '', 0, '', 1, '', '1', 'ĐIỂM TỰA ĐẦU TƯ THẺ SỨC KHỎE', 10, 7, '2020-11-18 04:31:07', '2020-12-19 04:19:40'),
(31, 'PHẠM THỊ TRONG', 'trong@gmail.com', '0938017778 ', '1986', NULL, 'Bình Dương', 'bảo vệ chồng trước', '7.293.000đ đóng phí nữa năm, năm sau mua thêm cho chồng', 'kế toán', '', '', 0, '', 1, 'Chồng làm giáo viên, chuẩn bị giới thiệu em để mua cho chồng', '1', 'Điểm tựa đầu tư', 10, 7, '2020-11-18 04:33:04', '2020-12-19 04:20:46'),
(32, 'Trương Công Thức', 'thuc@gmail.com', '0987533007', '1985', NULL, '', '', '', '', '', 'đang ở Quảng Ngải khoảng tuần sau gọi là được', 0, '', 0, '', '', '', 2, 0, '2020-11-18 04:40:58', '2020-11-18 04:40:58'),
(33, 'Nguyen Anh Tuan', 'tuan@gmail.com', '0938469070', '1992', NULL, '', '\"nhà Bình Tân,01/05/1992 1 triệu/tháng\r\nVợ đang có baby định tham khảo thêm cho con. \r\nThiết kế cho bản thân trước\"', '5.539.000Đ đóng phí nữa năm, tới hạn lại rồi alo nhắc phí cho ảnh', '', '', '', 0, '', 0, 'đã sinh bé, chuẩn bị mua thêm cho vợ', '', 'điểm tựa đầu tư', 10, 0, '2020-11-18 04:42:45', '2020-12-19 04:25:53'),
(34, 'Liên Vũ', 'lienvu113@yahoo.com', '+84949878787', '1990', NULL, '', 'Mua thẻ bảo hiểm sức khoẻ', '', '', '', 'Đã có bảo hiểm nhân thọ, cần mua thẻ sức khoẻ. Đã liên hệ bạn sales củ tư vấn.\r\nAdd Zalo để nuôi dưỡng khách \r\n', 1, 'Fb lead', 0, '', '', '', 8, 0, '2020-12-04 08:45:37', '2020-12-04 09:06:18'),
(35, 'trần thoại mỹ', 'thoaimychauden94@gmail.com', '+84825451892 / 0868301657', '1990', NULL, 'Bình Dương', 'Mua cho bản thân và 2 ccon', '', '', '', 'Đã có bạn tư vấn. Nghe bảo bảo hiểm khó chi trả. Gửi thông tin qua Zalo 0868301657 và tư vấn thêm \r\n\r\nTheo dõi tiếp dùm anh ', 0, 'Lead data', 1, '2 con', '', '', 1, 0, '2020-12-04 08:46:10', '2020-12-08 05:01:57'),
(36, 'Nguyễn thị hoàng kim như', 'nguyenthihoangkimnhu634@gmail.com', '+84332396409', '1993', NULL, 'Bình Dương', 'Nhân thọ / sức khoẻ cho bản thân', '', '', '', 'Đi làm chưa sắp xếp hẹn đc. Tư vấn thêm Zalo +84332396409\r\n\r\nUpdate?!', 0, 'Fb lead', 0, '', '', '', 1, 0, '2020-12-04 08:46:35', '2020-12-08 05:02:27'),
(37, 'Nguyễn Thị Ngọc Sương', 'nguyenngocsuongsp@gmail.com', '+84943899750', '1990', NULL, '', 'Mua cho người thân', '', '', '', 'Bận / Hẹn sáng mai 10h ngày 5/12 gọi lại\r\n\r\nUpdate: Gọi lại ', 0, 'Fb Lead', 0, '', '', '', 1, 0, '2020-12-04 08:47:22', '2020-12-08 05:02:45'),
(38, 'Vhp Bui', ' chactin230484@gmail.com', '+84908293405', '1980', NULL, '', '', '', '', '', 'Nghe máy nhưng khó chịu - Phương Anh\r\nNhờ Nghị gọi lại', 0, '', 0, '', '', '', 0, 0, '2020-12-05 10:19:30', '2020-12-08 05:34:02'),
(39, 'Nhat Thuy Pham', ' phamnhatthuy2909@gmail.com', '+84906894380', '1980', NULL, '', '', '', '', '', 'chưa liên lạc được - chị Phương Anh chăm', 0, '', 0, '', '', '', 0, 0, '2020-12-05 10:20:11', '2020-12-08 05:33:17'),
(40, 'Phạm Tuấn', ' goodfriendau@gmail.com', '+840921198913', '1980', NULL, '', '', '', '', '', 'ok add zalo chăm sóc - Phương Anh', 0, '', 0, '', '', '', 0, 0, '2020-12-05 10:20:47', '2020-12-09 07:50:09'),
(41, 'hienkkj', 'giangh@gmail.com.com', '+84987460555', '1990', NULL, '', '', '', '', '', '', 0, '', 0, '', '', '', 0, 0, '2020-12-07 02:39:34', '2021-01-14 09:56:23'),
(42, 'Nguyễn Thùy Dương', 'thuyduong231293@gmail.com', '0945843824', '1990', NULL, '', '', '', '', '', 'Chưa bắt máy. \r\nChiều gọi lại \r\nUpdate?\r\nđã add được zalo và đang chăm nhé 08.12 hẹn 7h gọi chị nè\r\nđang quan tâm về thai sản ', 0, 'Lead FB', 0, '', '', '', 2, 0, '2020-12-07 02:42:06', '2020-12-08 08:48:01'),
(43, 'Oanh Hoang', 'huynhhoangoanh91@gmail.com', '0908531001', '1987', NULL, '', 'có nhu cầu, đang bận xíu, hẹn sau 4h ngày mai 09.12 gọi lại cho chị', '', '', '', 'Chưa nghe máy\r\nChiều gọi lại \r\nUpdate?', 0, 'Lead FB', 0, '', '', '', 2, 0, '2020-12-07 07:45:54', '2020-12-08 08:32:00'),
(44, 'Ty Tây', 'gautruc199595@gmail.com', '0814409077', '1995', NULL, 'Khu công nghiệp sóng thần', 'đã add zalo, tham khảo cho vui, không mua nữa', '', 'nhà bán trái cây ', '', 'Đã chốt hẹn 10 chủ nhật ngày 13/12/2020. Trước khi đi nhớ gọi báo trướcc\r\n\r\nÁnh: Add zalo để nhắc hẹn\r\nChưa kết bạn đc\r\nTrước 1 ngày: Gọi nhắc\r\nTrước khi đi: Goi nhắc ', 0, '', 0, '', '', '', 1, 0, '2020-12-07 07:53:57', '2020-12-19 03:57:31'),
(45, 'Tấn Thành', 'Thành@gmail.com', '0868577584', '1990', NULL, 'Vũng Tàu - Đang ở Bv Chợ Rẫy', '', '', '', '', 'Không liên hệ được số điện thoại\r\nNghị: Đã chăm trên Zalo, set lịch hẹn\r\n?!?', 0, 'Fanpage', 0, '', '', '', 2, 0, '2020-12-07 08:07:27', '2020-12-11 04:30:07'),
(46, 'Nguyen thi sinh', 'Nguyenthisinh11091975@gmail.com', '+840844344339', '1990', NULL, '', '', '', '', '', 'Ko đúng sdt, kiểm tra lại \r\nđã gọi được, chị đang khôi phục hiệu lực HD bên sunlife, tối gọi lại chị liền mới được\r\n?!?', 0, 'FB lead', 0, '', '', '', 0, 0, '2020-12-08 04:23:27', '2021-02-23 01:44:40'),
(47, 'Lê Đình Duy Linh', 'Lebadat.legia2013@gmail.com', '+84906695698', '1990', NULL, '', 'Đã có bảo hiểm\r\nMua cho người thân\r\nThẻ sức khoẻ cho ba 64 tuổi\r\nHọc vấn cho con 6 tuổi', '', '', '', 'Đã có bảo hiểm\r\nMua cho người thân\r\nThẻ sức khoẻ cho ba 64 tuổi\r\nHọc vấn cho con 6 tuổi\r\nTư vấn qua Zalo +84906695698 và đặt lịch hẹn', 1, 'Lead', 1, 'Thẻ sức khoẻ cho ba 64 tuổi\r\nHọc vấn cho con 6 tuổi\r\nTư vấn qua Zalo +84906695698 và đặt lịch hẹn\r\n?!?', '', '', 2, 0, '2020-12-08 04:23:48', '2020-12-11 04:58:21'),
(48, 'Trầm Tường Châu', 'Châu@gmail.com', '0906749969', '1990', NULL, '', '', '', '', 'Tân Bình, p2, sức khỏe. \r\n2 bé 3t 04.2017, 2019\r\n20.10.1990 ', 'Bận hẹn 3h chiều ngày 8/12/2020 gọi lại , đã gọi nhà anh Tân Bình p2, tv sơ zalo, tuần này anh bận chưa gặp được, hẹn tuần sau, mục tiêu sẽ gặp tuần này 1 2 ngày nữa gọi lại, gửi tổng quan sơ về BH cho anh Châu xem\r\n\r\n\r\nNghị gọi hết: ưu tiên case này đúng giờ', 0, 'Fanpage', 0, '', '', '', 3, 0, '2020-12-08 04:24:42', '2020-12-11 04:27:47'),
(49, 'Hồ Ngọc Hoàng anh Hoàng', 'hongochoang79@gmail.com', '+84909426980', '1980', NULL, '', 'PA chăm - chưa nghe máy - mai gọi lại 10.12', '', '', '', '?!?', 0, '', 0, '', '', '', 2, 0, '2020-12-08 05:12:09', '2020-12-11 04:27:14'),
(50, 'Pham Anh Khoi', 'khoi.phamanh@outlook.com', ' +84904560260', '1983', NULL, '', '', '', '', '', 'đang chăm zalo  - NGhị\r\n?!?', 0, '', 0, '', '', '', 2, 0, '2020-12-08 05:12:50', '2020-12-11 04:26:40'),
(51, 'Hung Thai - anh Hùng', 'hungthai649@gmail.com', ' +84945149505', '1982', NULL, '', 'Trang chăm - làm việc quận 7, công việc bảo vệ công ty, độc thân, quan tâm cho bản thân, sáng thứ 7 quận 7, 9h sáng đang làm bảo vệ', '', '', '', '?!?', 0, '', 0, '', '', '', 3, 0, '2020-12-08 05:13:21', '2020-12-11 04:26:16'),
(52, 'Baleo Baleo', ' baleodbb@gmail.com', '+84908164167', '1984', NULL, '', 'có nhu cầu mua cho ba 64 tuổi, mai gọi lại - PA 10.12', '', '', '', '?!?', 0, '', 0, '', '', '', 2, 0, '2020-12-08 05:13:54', '2020-12-11 04:25:28'),
(53, 'Theresa Nguyen - Tuyết Vân', 'tieuthituyetvan@yahoo.com.vn', '+840903888002', '1979', NULL, '', 'chưa nghe máy - đã gọi được chăm zalo xong hẹn hặp -PA', '', '', '', 'máy bận, chưa liên lạc được - Trang đang chăm\r\n?!?', 0, '', 0, '', '', '', 0, 0, '2020-12-08 05:14:30', '2021-02-27 04:20:32'),
(54, 'Hao Lưu', ' trangdoan20189@gmail.com', ' +840903437669', '1981', NULL, '', 'chưa nghe máy', '', '', '', 'Người nhà nghe máy nói không có nha, hôm qua 07.12 - Trang đang chăm\r\n?!?', 0, '', 0, '', '', '', 0, 0, '2020-12-08 05:14:58', '2020-12-11 04:24:54'),
(55, 'Hanh nguyen', 'Hanh6914@yahoo.com', '+840932681399', '1984', NULL, '', 'Trang đang chăm zalo luôn', '', '', '', 'chị đang họp xíu em gọi lại - Trang đang chăm\r\n?!?', 0, '', 0, '', '', '', 0, 0, '2020-12-08 05:15:30', '2020-12-11 04:24:46'),
(57, 'Thu Hà Đinh', 'Thuhadinh0409@gmail.com', '+840395364190', '1992', NULL, '', 'đang bận chiều gọi lại - TRANG', '', '', '', '?!?', 0, 'Lead FB', 0, '', '', '', 0, 0, '2020-12-09 04:15:15', '2020-12-11 04:24:34'),
(58, 'Vũ Thị Bạch Ngọc', 'Bachngoc.huflit@gmail.com', '+84764222979', '1999', NULL, '', '', '', '', '', 'đã add zalo đang tư vấn, ba mẹ bị ung thư, ba bị ung thư đã điều trị, mẹ mới phát hiện\r\n?!?', 0, 'Lead FB', 0, '', '', '', 2, 0, '2020-12-09 04:15:55', '2020-12-11 04:24:23'),
(59, 'NGUYỄN LÊ THUẬN', 'nguyenlethuan99@gmail.com', '+84367392139', '1989', NULL, '', 'đã adzalo đang chăm', '', '', 'đang chăm zalo', '', 0, 'Lead FB', 0, '', '', '', 3, 0, '2020-12-09 04:16:25', '2020-12-11 04:24:07'),
(60, 'Tri Vu', ' mkminhtri@gmail.com', ' +840937093422', '1980', NULL, '', 'có nhu cầu mua cho ba 60t truoc, roi mua cho 4 thành viên trong gia đình, hẹn cf ở ngã 6 dân chủ, Phúc Long chiều tối sau giờ làm thứ 2 tuần sau 14.12', '26 triệu cả gia đình', '', '', '', 0, 'Lead FB', 0, '', '', '', 5, 0, '2020-12-09 07:18:24', '2020-12-22 12:08:14'),
(61, 'NGUYỄN QUANG MINH', 'QUANGMINH@GMAIL.COM', '0785250518', '1982', NULL, '', 'Mua thai sản cho chị Võ Thị Xuyến \r\n10/3/1985', '', '', '', '', 0, 'FACEBOOK', 0, '', '', '', 2, 0, '2020-12-09 07:22:29', '2020-12-09 07:22:29'),
(62, 'Nhung Hồ', 'nhung@gmail.com', '908998480', '1984', NULL, '', 'Trang đang chăm zalo', '', '', '', '?!?', 0, 'Facebook', 0, '', '', '', 0, 0, '2020-12-09 08:36:04', '2020-12-11 04:22:45'),
(63, 'Ái Hường', 'Cobe_baby56@yahoo.com', '+840937777629', '1992', NULL, '', 'Thai sản ', '', '', '', 'Chốt hẹn 10 10/12/2020 Cafe Đối diện số 4 Hoa Cúc, Phú Nhuận \r\nNữ sn 1992. Quan tâm gói thai sản, đang có kế hoạch sinh em bé\r\n10/10/2020: Đã có thai - kết bạn Zalo chăm chơi \r\nMẹ có mua BH AIA đính kem quyền lời sức khoẻ. Đang hỏi share hợp đồng để tư vấn thêm\r\n', 0, '', 0, '', '', '', 2, 0, '2020-12-09 09:51:40', '2020-12-19 03:58:39'),
(64, 'Ai Vu', 'thien_ai2007@yahoo.com', '+84913165549', '1980', NULL, '', '', '', '', '', 'Đã có BH FWD - Cần mua thêm thai sản\r\nAdd Zalo để khai thác ', 0, 'Lead FB', 0, '', '', '', 2, 0, '2020-12-09 03:26:12', '2020-12-19 03:58:33'),
(65, 'Nguyễn Phương', 'Phương@gmail.com', '0328618286', '1983', NULL, '', 'Mua BHSK Cho mẹ', '', '', '', 'Mua BHSK Cho mẹ 56 tuổi\r\nMẹ mua BHNT của PRu nhưng đã huỷ. Có vẻ ko tin BH lắm\r\nKết bạn Zalo tư vấn thêm', 0, '', 0, '', '', '', 1, 0, '2020-12-10 09:07:40', '2021-01-14 10:10:16'),
(66, 'NguyễnTường Khanh', 'nguyentuongkhanh464@gmail.com', '+84908320496', '2001', NULL, '19 Lê Bình Phường 4, Tân Bình', 'Tìm hiểu', '', 'Sinh viên', '', 'Hẹn sáng thứ năm 17/12/2020 để tìm hiểu. Trước khi đi nhớ gọi\r\nChưa biết mục đích', 0, 'Lead FB', 0, '', '', '', 4, 0, '2020-12-11 04:20:20', '2020-12-13 04:16:45'),
(67, 'Anh Vĩnh Lợi', 'vinhloi8687@gmail.com', ' +840972298855', '1984', NULL, '', '', '', '', '', 'chưa nghe máy 13.12', 0, '', 0, '', '', '', 0, 0, '2020-12-13 04:12:11', '2020-12-13 04:12:11'),
(68, 'Chị Thắm', 'tham@gmail.com', 'zalo ', '1995', NULL, 'quận 12', 'mua chắp cánh tương lai cho con, đang chăm zalo, đã gửi BMH 20tr rồi giảm xuống 10tr để chị tham khảo', '10 triệu', '', '', '', 0, '', 1, '', '1', '', 2, 7, '2020-12-13 04:39:25', '2020-12-19 03:56:27'),
(69, 'Hữu Nhẩn Nguyễn', 'nguyenhuunhan.spkt2010@gmail.com', '+84774138163', '1986', NULL, 'Làm Q.7 - Nhà Hóc Môn', 'Mua cho vợ 28t, đã nhắn ngày 19.12 đang chăm zalo - Nghị', '', '', '', 'Vợ 28t \r\nĐã tham Gia Đình tôi yêu đầu năm. Mới thấy gói sp mới\r\nĐã tư vấn sơ sản phẩm điểm tựa đầu tư\r\nLàm việc Quận 7, \r\nNhà hóc môn \r\nAdd Zalo để tư vấn 0944 720163\r\nMục tiêu: Xin hợp đồng củ để tư vấn thêm, đang nt zalo Nghị 15.12', 1, 'Lead FB', 0, '', '', '', 2, 7, '2020-12-14 05:42:50', '2020-12-19 03:55:11'),
(70, 'Mạch Uyên Khoa', 'ukmach@mgk.vn', '+840909333443', '1987', NULL, '', '', '', '', '', '10:00 AM - 14/12: Đang ở bệnh viện hẹn chiều 4PM gọi lại\r\n4:00 PM - Gọi lại ko bắt máy: gọi lại lúc khác (Tối nay hoặc sáng mai) \r\nGọi nhớ hỏi thăm chị còn ở bệnh viên ko ạ. Chị đi thăm người thân ạ?! ', 0, '', 0, '', '', '', 0, 0, '2020-12-14 09:36:51', '2020-12-16 05:24:42'),
(71, 'Minh Toàn Châu', 'chauminhtoan@gmail.com', '+84948881882', '1982', NULL, '', 'đã gọi lúc 11h30 ngày 15.12, anh có nhu cầu cho anh và vợ luôn, 3 triệu mỗi tháng, thứ 2 gọi lại anh, em anh có đám cưới tuần này, nhà ở Tân Phú, Lũy Bán Bích giao Hòa Bình Ít hơn', '', '', '', '', 0, '', 0, '', '', '', 4, 0, '2020-12-16 05:25:51', '2020-12-16 05:25:51'),
(72, 'NGUYỄN SỸ QUÝ', ' nguyensyquy39@gmail.com', ' +84938792304', '1983', NULL, '', '', '', '', '', 'gọi nhưng tắt máy 16.12 lúc 11h40', 0, '', 0, '', '', '', 0, 0, '2020-12-16 05:26:52', '2020-12-16 05:26:52'),
(73, 'TRƯƠNG LỄ TRÍ', '', '0903978978 ', '17/12/1965', NULL, '11 ĐƯỜNG NỘI KHU HƯNG PHƯỚC 1  P. TÂN PHONG, QUẬN 7, THÀNH PHỐ HỒ CHÍ MINH', 'Quan tâm về BH sức khỏe, có Bảo Việt và Bảo Minh rồi (bảo về tới 65t thôi), anh quyết định mua bên mình để tới 70 và không tăng phí, bên cạnh là của mình ở Canada anh muốn có bảo lãnh viện phí khi anh qua đó (2 con anh du học', '35 triệu do sức khỏe tăng lên 53tr/năm.KH đóng phí nữa năm 28.278.000đ ngày hiệu lực 30.11 đã chiết khấu lại khách chương trình KM còn 6tr mấy cho kỳ đóng tiếp theo. ', 'đang làm viễn thông kinh nghiệm hơn 10 năm', 'du lịch, nói chuyện rất nhiều về con của anh, 2 vợ chồng hay đi du lịch', '', 1, 'lead facebook', 1, 'Vợ là chị Hảo, đang làm bên Mobifone', '1', 'Điểm Tựa Đầu Tư ', 10, 7, '2020-12-19 04:11:59', '2020-12-22 12:07:52'),
(74, 'NGUYỄN THỊ NGỌC TRÂN', '', '0937911368 ', '23/06/1994', NULL, 'DƯỢC SÀI GÒN 18-20 NGUYỄN TRƯỜNG TỘ PHƯỜNG 12, QUẬN 4, THÀNH PHỐ HỒ CHÍ MINH', 'Mua cho con trước, con đã có 2 gói, ba mẹ chưa có', '7 triệu, đang đóng phí tháng 704/tháng', 'nhân viên văn phòng - marketing', '', '', 0, '', 0, '', '', '', 10, 0, '2020-12-19 04:34:40', '2020-12-19 04:34:40'),
(75, 'BẠCH NGỌC', '', 'ZALO ', 'KHÔNG BIẾT', NULL, '242 Tân Hương, P. Tân Quý, Q. Tân Phú ', 'Mua cho chồng và cho mẹ, sang noel gặp chị chủ động alo', '50 triệu cả nhà', '', '', 'Ba đã điều trị ung thư vú', 1, 'cmt', 1, '', '', '', 7, 7, '2020-12-19 04:38:25', '2021-01-14 09:58:28'),
(76, 'Thach Kim Hoang', '', '+84933139697', '', NULL, '', 'Có nhu cầu, đang có 1 chị khác chăm. Bận nên tắt máy rồi', '', '', '', '', 0, '', 0, '', '', '', 2, 7, '2021-01-10 02:43:51', '2021-01-10 04:38:39'),
(77, 'Linh Pham', '', '+84344228344', '', NULL, '', 'Chị chưa nghe máy - có zalo', '', '', '', '', 0, '', 0, '', '', '', 0, 7, '2021-01-10 02:44:07', '2021-01-14 09:56:10'),
(78, 'Diem Nguyen', '', '+84932794466', '', NULL, '', 'Hăm gọi được, nhưng có zalo chăm', '', '', '', '', 0, '', 0, '', '', '', 0, 7, '2021-01-10 02:44:23', '2021-01-10 04:34:26'),
(79, 'Lệ Thủy Nguyễn', '', '+84937064925', '', NULL, '', 'chị Thủy tắt máy em không nghe', '', '', '', '', 0, '', 0, '', '', '', 0, 7, '2021-01-10 02:44:37', '2021-01-10 04:32:37'),
(80, 'Đức Mỹ', '', '+84938774791', '', NULL, 'Tân Bình', 'Có nhu cầu mua cho bản thân, đang có nhiều bạn chăm, anh đang bị men gang cao, nhiều bệnh....\r\nLàm công trường - chăm bên zalo thêm, gửi thông tin trước sau đó gọi lại để hỏi thăm anh, chăm thường xuyên khả năng anh này chốt ', '15 triệu', '', '', '', 0, '', 0, '', '', '', 2, 7, '2021-01-10 02:44:53', '2021-01-10 04:41:15'),
(81, 'Thy Le', '', '+84933891039', '', NULL, 'Nhà ở Tân Phú', 'Quan tâm thai sản - có thai 3 tháng rồi, đã add zalo để tv gói chắp cánh tương lai 18 tuần \r\nMục tiêu là bảo vệ cho mẹ và bé sau này thì tiết kiệm cho con gói BH nhỏ nhỏ gửi chị tham khảo\r\n', '', '', '', '', 0, '', 0, '', '', '', 2, 7, '2021-01-10 02:45:06', '2021-01-10 04:28:16'),
(82, 'Hang Thuy', '', '+84978051331', '', NULL, '', 'Chưa nghe máy 10.1', '', '', '', '', 0, '', 0, '', '', '', 0, 7, '2021-01-10 02:45:21', '2021-01-10 04:27:11'),
(83, 'Hồ Hải Yến', '', '0962930506', '', NULL, '', 'Chưa nghe máy 10.1 ', '', '', '', '', 0, '', 0, '', '', '', 0, 7, '2021-01-10 02:45:33', '2021-02-23 01:43:13');

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

--
-- Đang đổ dữ liệu cho bảng `db_info`
--

INSERT INTO `db_info` (`info_id`, `domain_name`, `company`, `address`, `twitter`, `facebook`, `google`, `youtube`, `instagram`, `email`, `coppy_right`, `logo_img`, `icon_img`, `phone`, `created_at`, `updated_at`) VALUES
(6, 'http://manucare.vn/', '<p>http://manucare.vn/</p>\r\n', '', '', '', '', '', '', '', 'Văn phòng chính: Tòa nhà Manulife Plaza, 75 Hoàng Văn Thái, Phường Tân Phú, Q. 7, Tp. HCM\r\nĐiện thoại : (028) 5416 6888 / Fax : (028) 5416 181', '1920bbc5afa0601d1a5f274a228529de', 'b704a7891e7674cca7eb378ef475c5a9', ' 0909 089 067', '2020-11-02 10:08:33', '2021-03-06 10:12:32');

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
(3, 'Dịch vụ', '', ''),
(4, 'Về chúng tôi', '', ''),
(5, 'Liên hệ', '', '');

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

--
-- Đang đổ dữ liệu cho bảng `db_other`
--

INSERT INTO `db_other` (`other_id`, `other_title`, `other_description`, `other_content`, `other_img`, `other_category_id`, `other_url`, `other_active`, `created_at`, `updated_at`) VALUES
(1, 'Text Form Liên Hệ', '', '<p>Hotline</p>\r\n\r\n<p><a href=\"tel:1900%201776\" target=\"_blank\">1900 1776</a></p>\r\n\r\n<p>Email</p>\r\n\r\n<p><a href=\"mailto:khachhang@manulife.com\" target=\"_blank\">khachhang@manulife.com</a></p>\r\n\r\n<p><strong>Trụ sở ch&iacute;nh</strong></p>\r\n\r\n<p>Lầu 2, T&ograve;a nh&agrave; Manulife Plaza, 75 Ho&agrave;ng Văn Th&aacute;i, P. T&acirc;n Ph&uacute;, Quận 7, Tp. Hồ Ch&iacute; Minh</p>\r\n\r\n<p>Thứ 2 - Thứ 6 từ 8:30 đến 17:30 (trừ c&aacute;c ng&agrave;y nghĩ lễ, Tết)&nbsp;</p>\r\n', '', 0, '', 1, '2020-11-02 10:06:54', '2020-11-02 10:06:54'),
(3, 'Hình Ảnh Slide', '', '', '', 0, '', 1, '2020-11-02 10:22:50', '2020-11-02 10:22:50'),
(4, 'Slide 01', '', '', '1615025548207392780519343.jpg', 3, '', 0, '2020-11-02 10:23:06', '2021-03-08 02:57:01'),
(5, 'Slide 02', '', '', '161510167411-21-1.jpg', 3, '', 1, '2020-11-02 10:23:24', '2021-03-07 08:21:14'),
(7, 'Quyền lợi hấp dẫn', 'Quyền lợi hấp dẫn', '<h2>Quyền lợi hấp dẫn</h2>\r\n', '', 0, '', 1, '2020-11-02 10:24:26', '2020-11-02 10:24:26'),
(29, 'Text về chúng tôi', '', '<p>Manulife Việt Nam hiện đang cung cấp một danh mục c&aacute;c sản phẩm đa dạng từ sản phẩm bảo hiểm truyền thống đến sản phẩm bảo hiểm sức khoẻ, gi&aacute;o dục, li&ecirc;n kết đầu tư, hưu tr&iacute;&hellip; cho hơn 800.000 kh&aacute;ch h&agrave;ng th&ocirc;ng qua đội ngũ đại l&yacute; h&ugrave;ng hậu v&agrave; chuy&ecirc;n nghiệp tại 61 văn ph&ograve;ng tr&ecirc;n 45 tỉnh th&agrave;nh cả nước. B&ecirc;n cạnh k&ecirc;nh ph&acirc;n phối truyền thống qua đại l&yacute;, Manulife Việt Nam đa dạng h&oacute;a hoạt động kinh doanh bằng việc c&ugrave;ng c&aacute;c đối t&aacute;c ng&acirc;n h&agrave;ng triển khai k&ecirc;nh ph&acirc;n phối sản phẩm bảo hiểm qua ng&acirc;n h&agrave;ng (bancassurance) nhằm đ&aacute;p ứng nhu cầu ng&agrave;y c&agrave;ng đa dạng của thị trường. Ngo&agrave;i ra, Manulife Việt Nam l&agrave; doanh nghiệp bảo hiểm nh&acirc;n thọ duy nhất phối hợp với Trung Ương Hội li&ecirc;n hiệp Phụ nữ Việt Nam triển khai chương tr&igrave;nh bảo hiểm vi m&ocirc; d&agrave;nh cho phụ nữ c&oacute; thu nhập thấp với mong muốn c&ugrave;ng Ch&iacute;nh phủ phổ cập bảo hiểm nh&acirc;n thọ đến c&aacute;c gia đ&igrave;nh Việt Nam, g&oacute;p phần thực hiện c&aacute;c ch&iacute;nh s&aacute;ch an sinh x&atilde; hội, x&oacute;a đ&oacute;i giảm ngh&egrave;o v&agrave; tạo &yacute; thức tiết kiệm cho người d&acirc;n. Với hơn 19 năm hoạt động tại Việt Nam, Manulife Việt Nam đ&atilde; kh&ocirc;ng ngừng ph&aacute;t triển x&acirc;y dựng vững chắc uy t&iacute;n trong thị trường. Năm 2018, Manulife được trao tặng 3 danh hiệu từ 3 tổ chức uy t&iacute;n trong nước v&agrave; quốc tế: &quot;C&ocirc;ng ty Bảo hiểm Nh&acirc;n thọ Tốt nhất Việt Nam 2017&quot;; &quot;Dịch vụ Bảo hiểm Nh&acirc;n thọ Tốt nhất 2017&quot; v&agrave; &quot;Nơi L&agrave;m việc Tốt nhất ng&agrave;nh bảo hiểm 2017</p>\r\n', '', 0, '', 1, '2020-11-04 09:08:17', '2021-03-08 02:52:18'),
(30, 'Linh hoạt lựa chọn gói Bảo hiểm và thời hạn đóng phí', 'Đồng thời, bảo vệ toàn diện cho bạn và cả gia đình với một hợp đồng duy nhất đến trọn đời', '', '1604677432aaa.PNG', 7, '', 1, '2020-11-06 10:43:52', '2020-11-06 10:43:52'),
(31, 'Thương hiệu nổi bậc', '', '', '', 0, '', 1, '2021-03-08 03:11:00', '2021-03-08 03:11:00'),
(32, 'Manulife', '', '', '1615212732bao-hiem-bo-sung-tai-nan-toan-dien.jpg', 31, '', 1, '2021-03-08 03:12:12', '2021-03-08 03:12:12');

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
  `post_type` int(11) NOT NULL COMMENT '1=post; 2=service',
  `post_author` varchar(500) NOT NULL,
  `created_at` varchar(50) NOT NULL,
  `updated_at` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `db_post`
--

INSERT INTO `db_post` (`post_id`, `post_title`, `post_alias`, `post_img`, `post_description`, `post_content`, `post_category_id`, `post_date_time`, `post_keyword`, `post_active`, `post_highlights`, `post_type`, `post_author`, `created_at`, `updated_at`) VALUES
(1, 'bbbb', 'bbbb', '1603814806122171723_1120180135123357_8618338184076373316_n.jpg', 'cccccc', '<p>sssssss</p>\r\n', 2, '2020102700', '', 1, 0, 0, 'dddd', '2020-10-27 05:06:46', '2020-10-27 05:06:46'),
(2, 'Để cha mẹ được làm những điều mình muốn', 'de-cha-me-duoc-lam-nhung-dieu-minh-muon', '16044137021602665898705.jpeg', 'Dành tặng sức khỏe cho cha mẹ là bạn đang tặng đấng sinh thành những giây phút vui vầy bên con cháu, đồng thời cũng tặng chính mình một niềm hạnh phúc khi được thấy cha mẹ luôn khỏe mạnh, an vui mỗi ngày.', '<p>T&igrave;nh phụ mẫu lu&ocirc;n l&agrave; t&igrave;nh cảm thi&ecirc;ng li&ecirc;ng nhất trong cuộc đời của mỗi người. Bất kể khi bạn c&ograve;n b&eacute; hay khi đ&atilde; trưởng th&agrave;nh, mỗi l&uacute;c nh&igrave;n thấy cha mẹ m&igrave;nh được sống vui khỏe, đấy l&agrave; một điều hạnh ph&uacute;c. Trải qua nhiều thăng trầm cuộc sống, l&agrave;m việc, lo lắng v&agrave; d&agrave;nh những điều tốt đẹp nhất cho con c&aacute;i, cha mẹ đều gi&agrave; đi, v&ograve;ng quay &ldquo;sinh- l&atilde;o - bệnh - tử&rdquo; sẽ kề cận, đấy cũng l&agrave; l&uacute;c sức khỏe c&oacute; sự l&ecirc;n tiếng. Với c&aacute;c bậc sinh th&agrave;nh, khi đ&atilde; vượt qua ngưỡng 50, cơ thể sẽ gặp rất nhiều vấn đề như l&atilde;o h&oacute;a nhanh, đau ốm, mệt mỏi, sức khỏe sụt giảm. Với c&aacute;c bậc cha mẹ lớn tuổi đ&acirc;y l&agrave; vấn đề đ&aacute;ng quan t&acirc;m.</p>\r\n\r\n<p><strong>&nbsp;</strong></p>\r\n\r\n<p>GS Phạm Thắng, Gi&aacute;m đốc Bệnh viện L&atilde;o khoa Trung ương cho biết, khi tuổi gi&agrave; kề cận mọi người sẽ thường mắc c&aacute;c bệnh m&atilde;n t&iacute;nh như đ&aacute;i th&aacute;o đường, tăng huyết &aacute;p, tho&aacute;i h&oacute;a khớp, ung thư, đột quỵ&hellip; Họ cần nhiều thời gian điều trị, thậm ch&iacute; phải điều trị suốt đời. Mặt kh&aacute;c, theo &ocirc;ng người gi&agrave; sử dụng đến 50% tổng lượng thuốc, do đ&oacute;, chi ph&iacute; y tế cho người gi&agrave; cao gấp từ 7 đến 10 lần so với người trẻ tuổi. Đấy ch&iacute;nh l&agrave; l&yacute; do ở giai đoạn n&agrave;y, người gi&agrave; bắt đầu sợ bệnh tật v&agrave; sự c&ocirc; đơn. Họ cần nhiều thời gian ở b&ecirc;n con ch&aacute;u, đặc biệt l&agrave; cần một sức khỏe thật tốt để tận hưởng cuộc sống khỏe v&agrave; c&oacute; &iacute;ch.&nbsp;</p>\r\n', 15, '2020110300', '', 1, 0, 1, '', '2020-11-03 09:28:22', '2020-11-03 09:28:22'),
(3, 'Tầm soát ung thư - Giải pháp bảo vệ sức khỏe toàn diện', 'tam-soat-ung-thu-giai-phap-bao-ve-suc-khoe-toan-dien', '16044137491602664612976.jpeg', 'Tầm soát ung thư là một trong những biện pháp bảo vệ sức khỏe, giúp pháp hiện sớm các nguy cơ gây bệnh ung thư để có phương pháp điều trị kịp thời. Vậy có nên tầm soát ung thư khi còn trẻ?', '<p>Tại Hội thảo ph&ograve;ng chống ung thư quốc gia diễn ra tại H&agrave; Nội v&agrave;o ng&agrave;y 18 - 19/7/2019, Thứ trưởng Y tế Nguyễn Viết Tiến cho biết, ung thư đang trở th&agrave;nh g&aacute;nh nặng lớn cho gia đ&igrave;nh v&agrave; x&atilde; hội. Tại Việt Nam, số ca mắc mới ung thư tăng nhanh từ 68.000 người v&agrave;o năm 2000 l&ecirc;n 126.000 người v&agrave;o năm 2010, đến năm 2018, con số đ&oacute; đạt gần 165.000 người. Dự b&aacute;o v&agrave;o năm 2020, số người mắc mới căn bệnh ung thư mới c&oacute; thể vượt mức 200.000 người. Trong buổi Hội thảo, Thứ trưởng Tiến cũng nhấn mạnh, tỷ lệ mắc mới ung thư của Việt Nam kh&ocirc;ng phải cao nhất so với thế giới nhưng tỷ lệ tử vong tương đối lớn, xếp vị tr&iacute; 56/185 quốc gia v&agrave; v&ugrave;ng l&atilde;nh thổ.</p>\r\n\r\n<p>&ldquo;Đ&acirc;y l&agrave; điều rất đ&aacute;ng suy ngẫm v&igrave; hiện tại c&aacute;c kĩ thuật của nước m&igrave;nh tuy chưa phải đứng đầu thế giới nhưng đ&atilde; bắt nhịp, theo s&aacute;t với thế giới, kiến thức, trang thiết bị c&oacute;. Điều cần quan t&acirc;m nhất l&agrave; người d&acirc;n thường ph&aacute;t hiện muộn, c&oacute; trường hợp ph&aacute;t hiện sớm nhưng nấn n&aacute; điều trị chỉ v&agrave;o viện khi đ&atilde; muộn dẫn tới tỷ lệ tử vong cao&rdquo;, Thứ trưởng Tiến chia sẻ.</p>\r\n\r\n<p>Từ những con số đ&aacute;ng b&aacute;o động tr&ecirc;n ch&uacute;ng ta cần phải n&acirc;ng cao nhận thức trong việc chăm s&oacute;c sức khỏe. Đặc biệt n&ecirc;n tầm so&aacute;t ung thư định kỳ bởi đ&oacute; được coi l&agrave; &ldquo;ch&igrave;a kh&oacute;a v&agrave;ng&rdquo; để ph&aacute;t hiện v&agrave; đưa ra c&aacute;c biện ph&aacute;p ngăn chặn kịp thời, giảm nguy cơ tử vong v&agrave; chi ph&iacute; điều trị bệnh.</p>\r\n\r\n<p>B&aacute;c sĩ Nguyễn Văn Tiến, Trưởng Khoa Ngoại 1, Bệnh viện Ung bướu TP. HCM cho biết mục đ&iacute;ch ch&iacute;nh của tầm so&aacute;t ung thư l&agrave; ph&aacute;t hiện c&aacute;c tổn thương tiền ung thư hoặc bệnh l&yacute; ung thư ở giai đoạn sớm, từ đ&oacute; c&oacute; phương ph&aacute;p can thiệp hiệu quả, ngăn ngừa tiến triển th&agrave;nh ung thư. Đ&acirc;y l&agrave; phương ph&aacute;p ti&ecirc;n tiến nhất gi&uacute;p ph&aacute;t hiện bệnh ngay cả khi cơ thể chưa c&oacute; bất kỳ biểu hiện n&agrave;o.</p>\r\n', 15, '2020110300', '', 1, 0, 1, '', '2020-11-03 09:29:09', '2020-11-03 09:29:09'),
(4, '4 tiêu chí lựa chọn gói bảo hiểm sức khỏe phù hợp', '4-tieu-chi-lua-chon-goi-bao-hiem-suc-khoe-phu-hop', '16044137931602667418056.jpeg', 'Bảo hiểm sức khỏe là giải pháp hữu hiệu giúp bạn được san sẻ gánh nặng tài chính khi không may gặp phải những rủi ro trong cuộc sống.', '<p>Bảo hiểm sức khỏe l&agrave; loại h&igrave;nh bảo hiểm cho c&aacute;c trường hợp người được bảo hiểm bị tai nạn, thương tật, ốm đau, bệnh tật hoặc chăm s&oacute;c sức khỏe được doanh nghiệp bảo hiểm trả tiền bảo hiểm theo thỏa thuận trong hợp đồng bảo hiểm đ&atilde; được k&yacute; kết giữa hai b&ecirc;n. Trong cuộc sống m&agrave; rủi ro mang t&iacute;nh tất yếu, bảo hiểm sức khỏe được xem l&agrave; chỗ dựa t&agrave;i ch&iacute;nh vững chắc gi&uacute;p bạn san sẻ g&aacute;nh nặng khi kh&ocirc;ng may gặp bất trắc kh&ocirc;ng lường trước.</p>\r\n\r\n<p>Đặc điểm của bảo hiểm sức khỏe l&agrave; kh&aacute;ch h&agrave;ng tham gia ho&agrave;n to&agrave;n tự nguyện, với thời hạn hợp đồng chỉ 1 năm, mỗi năm đ&oacute;ng ph&iacute; 1 lần để hưởng quyền lợi. Nếu muốn tiếp tục hưởng quyền lợi của g&oacute;i bảo hiểm, kh&aacute;ch h&agrave;ng cần phải t&aacute;i tục bảo hiểm. Hiện nay c&aacute;c g&oacute;i bảo hiểm sức khỏe được cung cấp bởi c&aacute;c c&ocirc;ng ty bảo hiểm nh&acirc;n thọ v&agrave; phi nh&acirc;n thọ. C&aacute;c sản phẩm đều c&oacute; sẵn quyền lợi, kh&aacute;ch h&agrave;ng t&ugrave;y thuộc v&agrave;o nhu cầu v&agrave; t&agrave;i ch&iacute;nh để lựa chọn. Dưới đ&acirc;y l&agrave; 4 ti&ecirc;u ch&iacute; lựa chọn g&oacute;i bảo hiểm sức khỏe m&agrave; bạn c&oacute; thể &aacute;p dụng để chọn được sản phẩm ph&ugrave; hợp.</p>\r\n', 15, '2020110300', '', 1, 0, 1, '', '2020-11-03 09:29:53', '2020-11-03 09:29:53'),
(5, 'Sàng lọc sơ sinh - “Chìa khóa vàng” bảo vệ mầm non tương lai', 'sang-loc-so-sinh-“chia-khoa-vang”-bao-ve-mam-non-tuong-lai', '16044138481601372318684.jpeg', 'Việc thực hiện xét nghiệm sàng lọc sơ sinh giúp cha mẹ yên tâm hơn khi nắm được tình trạng sức khỏe hiện tại của con yêu. Đây cũng là giải pháp ưu việt giúp phát hiện sớm các bệnh lý bẩm sinh để có phương án can thiệp và điều trị kịp thời.', '<p>Theo ThS.BS Nguyễn C&ocirc;ng Cảnh, Trưởng Khoa Nhi - Sơ sinh, Bệnh viện Đa khoa Quốc tế Vinmec Đ&agrave; Nẵng cho biết s&agrave;ng lọc sơ sinh l&agrave; thực hiện c&aacute;c x&eacute;t nghiệm ở trẻ sơ sinh gi&uacute;p ph&aacute;t hiện sớm c&aacute;c rối loạn bẩm sinh li&ecirc;n quan đến chuyển h&oacute;a - nội tiết - di truyền, từ đ&oacute; c&oacute; hướng điều trị kịp thời, giảm thiểu tỷ lệ tử vong ở trẻ sơ sinh cũng như g&aacute;nh nặng cho gia đ&igrave;nh v&agrave; x&atilde; hội.</p>\r\n\r\n<p>Chia sẻ th&ecirc;m về những lợi &iacute;ch của việc s&agrave;ng lọc sơ sinh cho trẻ, ThS. BSNT Nguyễn B&aacute; Sơn &ndash; Trưởng ph&ograve;ng Di truyền, Bệnh viện Đa khoa MEDLATEC cho biết: &quot;X&eacute;t nghiệm s&agrave;ng lọc sơ sinh l&agrave; phương ph&aacute;p hữu hiệu gi&uacute;p ph&aacute;t hiện sớm c&aacute;c bệnh l&yacute; bẩm sinh, từ đ&oacute; c&oacute; biện ph&aacute;p can thiệp v&agrave; điều trị kịp thời, giảm g&aacute;nh nặng cho gia đ&igrave;nh, đảm bảo trẻ ph&aacute;t triển b&igrave;nh thường. Đặc biệt, x&eacute;t nghiệm thực hiện th&ocirc;ng qua lấy m&aacute;u g&oacute;t ch&acirc;n n&ecirc;n kh&ocirc;ng ảnh hưởng tới sức khỏe của trẻ. V&igrave; vậy, c&aacute;c bậc cha mẹ n&ecirc;n thực hiện s&agrave;ng lọc sơ sinh cho con. X&eacute;t nghiệm s&agrave;ng lọc sơ sinh gi&uacute;p ph&aacute;t hiện một số rối loạn bẩm sinh v&agrave; di truyền ở trẻ sơ sinh như: Thiếu men G6PD (glucose 6 phosphate dehydrogenase), suy gi&aacute;p bẩm sinh, tăng sản tuyến thượng thận bẩm sinh... C&aacute;c rối loạn n&agrave;y ảnh hưởng đến sự ph&aacute;t triển thể chất, t&acirc;m thần, tr&iacute; tuệ thậm ch&iacute; tử vong nếu kh&ocirc;ng được điều trị sớm&quot;.</p>\r\n\r\n<p>Khi gia đ&igrave;nh c&oacute; y&ecirc;u cầu l&agrave;m x&eacute;t nghiệm s&agrave;ng lọc, b&aacute;c sĩ sẽ lấy một &iacute;t m&aacute;u từ g&oacute;t ch&acirc;n của con rồi gửi mẫu m&aacute;u đến ph&ograve;ng th&iacute; nghiệm để thực hiện x&eacute;t nghiệm. Sau khi nhận được kết quả, cha mẹ c&oacute; thể nắm được t&igrave;nh trạng sức khỏe của con, đồng thời nhận được lời khuy&ecirc;n tốt nhất từ b&aacute;c sĩ chuy&ecirc;n khoa.</p>\r\n', 15, '2020110300', '', 1, 0, 1, '', '2020-11-03 09:30:48', '2020-11-03 09:30:48'),
(6, 'Mức hưởng bảo hiểm y tế khi khám chữa bệnh đúng tuyến', 'muc-huong-bao-hiem-y-te-khi-kham-chua-benh-dung-tuyen', '16044138901601354983280.jpeg', 'Bảo hiểm y tế là hình thức bảo hiểm được áp dụng trong lĩnh vực chăm sóc sức khỏe mà người tham gia sẽ nhận được quyền lợi khi khám chữa bệnh. Vậy mức hưởng trong trường hợp khám chữa bệnh đúng tuyến được quy định ra sao?', '<p>Như thế n&agrave;o l&agrave; kh&aacute;m chữa bệnh bảo hiểm y tế đ&uacute;ng tuyến?</p>\r\n\r\n<p>Căn cứ Điều 11, Th&ocirc;ng tư 40/2015/ TT-BYT quy định c&aacute;c trường hợp được x&aacute;c định l&agrave; đ&uacute;ng tuyến kh&aacute;m bệnh, chữa bệnh bảo hiểm y tế như sau:</p>\r\n\r\n<ul>\r\n	<li>Người c&oacute; thẻ bảo hiểm y tế đăng k&yacute; nơi kh&aacute;m chữa bệnh ban đầu tại cơ sở thuộc tuyến tuyến x&atilde; hoặc ph&ograve;ng kh&aacute;m đa khoa hoặc bệnh viện tuyến huyện được quyền kh&aacute;m chữa bệnh bảo hiểm y tế tại trạm y tế tuyến x&atilde; hoặc ph&ograve;ng kh&aacute;m đa khoa hoặc bệnh viện tuyến huyện trong c&ugrave;ng địa b&agrave;n tỉnh.</li>\r\n	<li>Người c&oacute; thẻ bảo hiểm y tế đăng k&yacute; kh&aacute;m chữa bệnh ban đầu tại cơ sở kh&aacute;m chữa bệnh tuyến x&atilde; chuyển tuyến đến bệnh viện huyện v&agrave; bệnh viện y học cổ truyền tỉnh (trong trường hợp bệnh viện huyện kh&ocirc;ng c&oacute; khoa y học cổ truyền).</li>\r\n	<li>Người c&oacute; thẻ bảo hiểm y tế được bệnh viện tuyến huyện chuyển tuyến đến trung t&acirc;m chuy&ecirc;n khoa tuyến tỉnh hoặc bệnh viện đa khoa, bệnh viện chuy&ecirc;n khoa, viện chuy&ecirc;n khoa tuyến tỉnh c&ugrave;ng hạng hoặc hạng thấp hơn.</li>\r\n	<li>Trường hợp cấp cứu:</li>\r\n</ul>\r\n\r\n<p>- Người bệnh được cấp cứu tại bất kỳ cơ sở kh&aacute;m bệnh, chữa bệnh n&agrave;o.</p>\r\n\r\n<p>- Sau giai đoạn điều trị cấp cứu, người bệnh được chuyển v&agrave;o điều trị nội tr&uacute; tại cơ sở kh&aacute;m chữa bệnh nơi đ&atilde; tiếp nhận cấp cứu người bệnh hoặc được chuyển đến cơ sở kh&aacute;m chữa bệnh kh&aacute;c để tiếp tục điều trị theo y&ecirc;u cầu chuy&ecirc;n m&ocirc;n hoặc được chuyển về nơi đăng k&yacute; kh&aacute;m chữa bệnh ban đầu sau khi đ&atilde; điều trị ổn định.</p>\r\n', 15, '2020110300', '', 1, 0, 1, '', '2020-11-03 09:31:30', '2020-11-03 09:31:30'),
(7, 'Mức hưởng bảo hiểm y tế khi khám chữa bệnh vượt tuyến', 'muc-huong-bao-hiem-y-te-khi-kham-chua-benh-vuot-tuyen', '16044139391602667418056.jpeg', 'Người tham gia bảo hiểm y tế khi khám chữa bệnh vượt tuyến vẫn được quỹ bảo hiểm y tế chi trả. Vậy mức chi trả hiện nay được quy định ra sao?', '<p>Kh&aacute;m chữa bệnh bảo hiểm y tế vượt tuyến l&agrave; trường hợp đến kh&aacute;m chữa bệnh tại cơ sở y tế l&agrave; tuyến tr&ecirc;n của cơ sở y tế ban đầu đ&atilde; đăng k&yacute;.</p>\r\n\r\n<p><strong>V&iacute; dụ:</strong>&nbsp;Nơi đăng k&yacute; kh&aacute;m chữa bệnh ban đầu được ghi tr&ecirc;n thẻ bảo hiểm y tế l&agrave; bệnh viện A thuộc tuyến huyện nhưng bạn thực hiện kh&aacute;m chữa bệnh tại bệnh viện B thuộc thuộc tuyến tỉnh th&igrave; trường hợp n&agrave;y l&agrave; kh&aacute;m chữa bệnh bảo hiểm y tế vượt tuyến.</p>\r\n\r\n<p>Mức hưởng bảo hiểm y tế khi kh&aacute;m chữa bệnh bảo hiểm y tế được chia th&agrave;nh hai trường hợp: Chủ thẻ tự kh&aacute;m vượt tuyến v&agrave; cơ sở kh&aacute;m chữa bệnh đ&atilde; đăng k&yacute; chỉ định chuyển l&ecirc;n tuyến tr&ecirc;n.</p>\r\n', 15, '2020110300', '', 1, 0, 1, '', '2020-11-03 09:32:19', '2020-11-03 09:32:19'),
(8, 'Các cách giúp tiết kiệm tiền mà vẫn sống thoải mái', 'cac-cach-giup-tiet-kiem-tien-ma-van-song-thoai-mai', '16044139981583490287553.jpeg', 'Áp dụng một số cách sau đây có một số cách sẽ giúp bạn tiết kiệm tiền nhưng vẫn sống thoải mái.', '<p>1. Đi mua sắm v&agrave;o những ng&agrave;y giảm gi&aacute;</p>\r\n\r\n<p>Thay v&igrave; phải chi một khoản tiền lớn cho c&aacute;c m&oacute;n đồ y&ecirc;u th&iacute;ch, bạn vẫn c&oacute; thể sở hữu ch&uacute;ng v&agrave;o c&aacute;c dịp giảm gi&aacute; lớn như Black Friday, Noel, Tết dương lịch, Tết ta. Tuy nhi&ecirc;n, bạn n&ecirc;n lưu &yacute; chỉ mua những m&oacute;n m&igrave;nh thật sự cần. Bạn c&oacute; thể t&igrave;m c&aacute;c chương tr&igrave;nh giảm gi&aacute; tr&ecirc;n c&aacute;c website uy t&iacute;n của cửa h&agrave;ng hoặc c&aacute;c trang web mua sắm trực tiếp như Sshopee, Ttiki, Ssendo... B&ecirc;n cạnh đ&oacute;, một số trang web c&ograve;n sẽ c&oacute; chương tr&igrave;nh miễn ph&iacute; tiền vận chuyển nếu đơn h&agrave;ng của bạn vượt mức gi&aacute; quy định. Do đ&oacute;, bạn c&oacute; thể vừa mua h&agrave;ng đẹp v&agrave; vẫn tiết kiệm một khoản tiền nhất định.</p>\r\n\r\n<h5>Chủ đề li&ecirc;n quan:&nbsp;</h5>\r\n\r\n<hr />\r\n<p><a href=\"https://www.manulife.com.vn/vi/bao-hiem-tiet-kiem.html\">Bảo hiểm tiết kiệm&nbsp;</a></p>\r\n\r\n<hr />\r\n<p><strong><a href=\"https://www.manulife.com.vn/vi/kien-thuc/bao-hiem-tiet-kiem-8-cach-quan-ly-tai-chinh-hieu-qua-cho-gia-dinh.html\">8 c&aacute;ch quản l&yacute; t&agrave;i ch&iacute;nh hiệu quả cho gia đ&igrave;nh&nbsp;</a></strong></p>\r\n\r\n<p><img alt=\"tiet-kiem\" src=\"https://www.manulife.com.vn/vi/kien-thuc/bao-hiem-tiet-kiem-cach-tiet-kiem-tien-ma-van-song-thoai-mai/_jcr_content/root/responsivegrid_641029165/image.coreimg.jpeg/1583490287553.jpeg\" /></p>\r\n\r\n<p>2. Giảm số tiền của c&aacute;c h&oacute;a đơn trong nh&agrave;</p>\r\n\r\n<p>Việc ti&ecirc;u x&agrave;i phung ph&iacute; điện, nước trong nh&agrave; sẽ khiến bạn phải trả một khoản tiền kh&ocirc;ng đ&aacute;ng mỗi th&aacute;ng. Tuy nhi&ecirc;n, bằng c&aacute;ch sử dụng điện nước hợp l&yacute;, bạn sẽ tiết kiệm một khoản tiền kh&ocirc;ng nhỏ. Một số gợi &yacute; cho bạn như:</p>\r\n\r\n<ul>\r\n	<li>Tr&aacute;nh để thiết bị điện ở trạng th&aacute;i chờ v&agrave; tắt c&aacute;c thiết bị điện trong nh&agrave; khi kh&ocirc;ng cần d&ugrave;ng, như tivi, m&aacute;y lạnh, đ&egrave;n ph&ograve;ng.</li>\r\n	<li>Sử dụng quạt trần thay v&igrave; dung m&aacute;y điều h&ograve;a. Quạt trần c&oacute; thể l&agrave;m nhiệt độ trong ph&ograve;ng giảm đến 10 độ v&agrave; chỉ ti&ecirc;u tốn 10% điện năng so với điều h&ograve;a.</li>\r\n	<li>Sử dụng đ&egrave;n LED.&nbsp; Đ&egrave;n LED tiết kiệm khoảng 75% năng lượng v&agrave; c&oacute; tuổi thọ l&acirc;u hơn gấp 25 lần so với đ&egrave;n sợi đốt th&ocirc;ng thường.&nbsp;</li>\r\n	<li>Tắt c&aacute;c v&ograve;i nước khi kh&ocirc;ng d&ugrave;ng.</li>\r\n	<li>Nếu bạn sống một m&igrave;nh v&agrave; kh&ocirc;ng ở nh&agrave; thường xuy&ecirc;n, bạn c&oacute; thể chọn g&oacute;i Internet gi&aacute; rẻ hơn thay v&igrave; c&aacute;c g&oacute;i lớn. Ngo&agrave;i ra, bạn cũng c&oacute; thể đăng k&yacute; c&aacute;c g&oacute;i dịch vụ 3G, 4G của c&aacute;c nh&agrave; mạng với c&aacute;c mức gi&aacute; dưới 100.000 đồng, nhưng tốc độ truyền rất ổn định.</li>\r\n</ul>\r\n', 15, '2020110300', '', 1, 0, 1, '', '2020-11-03 09:33:18', '2020-11-03 09:33:18'),
(9, 'Hiểu đúng về giáo dục sớm để có phương pháp nuôi dạy con khoa học', 'hieu-dung-ve-giao-duc-som-de-co-phuong-phap-nuoi-day-con-khoa-hoc', '16044140331598495896890.jpeg', 'Giáo dục sớm là phương pháp được nhiều cha mẹ quan tâm và áp dụng cho con yêu của mình. Giáo dục sớm đúng cách sẽ là nền tảng vững chắc giúp con yêu xây dựng một tương lai tươi sáng hơn.', '<p>Tổ chức Gi&aacute;o dục, Khoa học v&agrave; Văn h&oacute;a của Li&ecirc;n Hợp Quốc UNESCO n&ecirc;u r&otilde;: &ldquo;Gi&aacute;o dục sớm l&agrave; thời k&igrave; gi&aacute;o dục trẻ từ 0 đến 8 tuổi. Đ&acirc;y l&agrave; giai đoạn ph&aacute;t triển vượt trội của n&atilde;o bộ, những năm đầu đời n&agrave;y sẽ đặt nền tảng cơ bản cho sự ph&aacute;t triển cả về thể chất v&agrave; cả tư duy của trẻ về sau. Chăm s&oacute;c v&agrave; gi&aacute;o dục sớm cho trẻ mầm non kh&ocirc;ng chỉ l&agrave; chuẩn bị h&agrave;nh trang cho trẻ đến trường sau n&agrave;y m&agrave; mục đ&iacute;ch của gi&aacute;o dục sớm nhấn mạnh đến sự ph&aacute;t triển của trẻ đ&aacute;p ứng nhu cầu về x&atilde; hội, t&acirc;m l&yacute;, cảm x&uacute;c, vật l&yacute; của trẻ để x&acirc;y dựng nền tảng vững chắc cho qu&aacute; tr&igrave;nh học tập suốt đời.&rdquo;</p>\r\n\r\n<p>Việc gi&aacute;o dục sớm một c&aacute;ch khoa học kh&ocirc;ng những th&uacute;c đẩy sự ho&agrave;n thiện của đại n&atilde;o, n&acirc;ng cao năng lực tr&iacute; tuệ đồng thời gi&uacute;p trẻ h&igrave;nh th&agrave;nh cơ bản về t&iacute;nh c&aacute;ch v&agrave; nh&acirc;n c&aacute;ch con người. Trong giai đoạn n&agrave;y, nếu được cha mẹ v&agrave; thầy c&ocirc; y&ecirc;u thương, chăm s&oacute;c, con sẽ h&igrave;nh th&agrave;nh những th&oacute;i quen tốt như biết chia sẻ, t&acirc;m tới tới mọi người xung quanh.&nbsp;</p>\r\n', 15, '2020110300', '', 1, 0, 1, '', '2020-11-03 09:33:53', '2020-11-03 09:33:53'),
(10, 'Giới trẻ Việt đang tiết kiệm cho hưu trí như thế nào?', 'gioi-tre-viet-dang-tiet-kiem-cho-huu-tri-nhu-the-nao-', '16044141631597403701210.jpeg', 'Giới trẻ Việt đang chi tiêu quá nhiều vào những dự định ngắn hạn mà không quan tâm tới tiết kiệm hưu trí. Họ cho rằng còn nhiều mục tiêu gần phải thực hiện, tiết kiệm tiền để nghỉ hưu là tương lai nên chưa cần nghĩ đến.', '<p>Theo thống k&ecirc; của Standard &amp; Poor&#39;s, một c&ocirc;ng ty dịch vụ t&agrave;i ch&iacute;nh tại Mỹ, nhu cầu t&agrave;i ch&iacute;nh khi về hưu v&agrave;o khoảng 60 - 80% số tiền m&agrave; mỗi người d&ugrave;ng để chi ti&ecirc;u khi c&ograve;n trẻ. Điều đ&oacute; c&oacute; nghĩa, bạn cần tiết kiệm khoảng 12 - 16 năm thu nhập để c&oacute; thể sống dư dả suốt qu&atilde;ng đời 20 năm nghỉ hưu. Tuy nhi&ecirc;n, tại Việt Nam, giới trẻ dường như đang phớt lờ việc x&acirc;y dựng một quỹ hưu tr&iacute; để cuộc sống khi về gi&agrave; an nh&agrave;n. Phần lớn giới trẻ Việt chỉ l&agrave;m việc, kiếm tiền để phục vụ cho c&aacute;c mục ti&ecirc;u gần v&agrave; ngắn hạn.</p>\r\n\r\n<p><a id=\"_lb8hwjquylwz\" name=\"_lb8hwjquylwz\"></a>Trần B&aacute; Khải, 24 tuổi nh&acirc;n vi&ecirc;n Marketing của một hệ thống Spa tại TP HCM chia sẻ tr&ecirc;n b&aacute;o ch&iacute;: &ldquo;M&igrave;nh kh&ocirc;ng quan t&acirc;m tới tiết kiệm tiền về hưu v&igrave; c&oacute; qu&aacute; nhiều thứ phải chi trả, từ sinh hoạt ph&iacute; đến việc đi du lịch, giải tr&iacute;&rdquo;. Được biết, lương cơ bản của anh Khải chỉ 5 triệu đồng, nhưng thưởng th&ecirc;m khoảng 10 triệu đồng. Mức bảo hiểm đ&oacute;ng cho khoản lương hưu sau n&agrave;y của anh chỉ t&iacute;nh tr&ecirc;n 5 triệu lương cơ bản. Anh cho rằng, lương cơ bản thấp nhưng thưởng cao, anh đỡ bị trừ tiền bảo hiểm v&agrave; tiền nhận mỗi th&aacute;ng sẽ cao hơn. Điều anh quan t&acirc;m l&agrave; thu nhập mỗi th&aacute;ng được bao nhi&ecirc;u để chi ti&ecirc;u, chứ kh&ocirc;ng nghĩ nhiều đến việc sẽ tr&iacute;ch tiền đ&oacute;ng bảo hiểm như thế n&agrave;o để sau n&agrave;y được nhận lương hưu.</p>\r\n', 15, '2020110300', '', 1, 0, 1, '', '2020-11-03 09:36:03', '2020-11-03 09:36:03'),
(11, 'Trợ cấp Nằm viện', 'tro-cap-nam-vien', '16045012581597403701210.jpeg', '', '<p><strong>Th&ocirc;ng tin bạn cần biết</strong></p>\r\n\r\n<p>Ch&uacute;ng t&ocirc;i rất tiếc khi hay tin kh&aacute;ch h&agrave;ng phải nằm viện điều trị v&igrave; một l&yacute; do n&agrave;o đ&oacute;. Nếu chuyện kh&ocirc;ng may n&agrave;y xảy ra với bạn, h&atilde;y y&ecirc;n t&acirc;m, Manulife sẽ chi trả quyền lợi bảo hiểm trợ cấp nằm viện dựa tr&ecirc;n số ng&agrave;y nằm viện nội tr&uacute; thực tế.</p>\r\n\r\n<p>Bạn c&oacute; thể chọn 1 trong 4 c&aacute;ch dưới đ&acirc;y để nộp y&ecirc;u cầu quyền lợi bảo hiểm.</p>\r\n\r\n<ul>\r\n	<li>Nộp qua trang web&nbsp;<strong><a href=\"https://boithuongbaohiem.manulife.com.vn/\" target=\"_blank\">EasyClaims</a></strong></li>\r\n	<li>Nộp tại c&aacute;c văn ph&ograve;ng giao dịch của Manulife. Xem địa chỉ&nbsp;<a href=\"https://www.manulife.com.vn/vi/lien-he.html\">tại đ&acirc;y</a></li>\r\n	<li>Nộp qua Đại l&yacute; phục vụ</li>\r\n	<li>Gửi chứng từ qua bưu điện</li>\r\n</ul>\r\n\r\n<p><strong>Để y&ecirc;u cầu của bạn được giải quyết nhanh ch&oacute;ng, h&atilde;y chuẩn bị thật sẵn s&agrave;ng những giấy tờ v&agrave; chứng từ quan trọng dưới đ&acirc;y:</strong></p>\r\n\r\n<ul>\r\n	<li>Giấy ra viện</li>\r\n	<li>Giấy x&aacute;c nhận thời gian điều trị tại Khoa chăm s&oacute;c đặc biệt (trong trường hợp y&ecirc;u cầu quyền lợi nằm viện tại Khoa chăm s&oacute;c đặc biệt)</li>\r\n</ul>\r\n\r\n<p><a href=\"https://www.manulife.com.vn/content/dam/insurance/vn/documents/service-docs/quyen-loi-hop-dong-bao-hiem/don-yeu-cau-giai-quyet-qlbh.pdf\">Đơn y&ecirc;u cầu giải quyết quyền lợi bảo hiểm</a>*</p>\r\n\r\n<p><a href=\"https://www.manulife.com.vn/content/dam/insurance/vn/documents/service-docs/quyen-loi-hop-dong-bao-hiem/thu_uy_quyen_30082019.pdf\">Thư uỷ quyền</a>*</p>\r\n\r\n<p>(*) Kh&ocirc;ng &aacute;p dụng khi nộp y&ecirc;u cầu qua&nbsp;<strong><a href=\"https://boithuongbaohiem.manulife.com.vn/\" target=\"_blank\">EasyClaims</a></strong></p>\r\n\r\n<p><br />\r\nManulife lu&ocirc;n nỗ lực giải quyết nhanh ch&oacute;ng y&ecirc;u cầu bồi thường bảo hiểm của bạn. Ch&uacute;ng t&ocirc;i sẽ tiến h&agrave;nh chi trả quyền lợi bảo hiểm cho B&ecirc;n Mua Bảo Hiểm trong v&ograve;ng 30 ph&uacute;t tại quầy dịch vụ kh&aacute;ch h&agrave;ng nếu hồ sơ của bạn hợp lệ.Trong trường hợp cần th&ecirc;m thời gian để xử l&yacute; y&ecirc;u cầu v&agrave; x&aacute;c minh th&ocirc;ng tin, ch&uacute;ng t&ocirc;i sẽ th&ocirc;ng b&aacute;o ngay cho bạn.</p>\r\n', 10, '', '', 1, 0, 2, '', '2020-11-04 09:47:40', '2020-11-04 09:47:40'),
(12, 'Hỗ trợ chi phí điều trị nội trú/ngoại trú/nha khoa', 'ho-tro-chi-phi-dieu-tri-noi-tru-ngoai-tru-nha-khoa', '16045013371598495896890.jpeg', '', '<p><strong>Th&ocirc;ng tin bạn cần biết</strong></p>\r\n\r\n<p>Ch&uacute;ng t&ocirc;i rất tiếc khi hay tin kh&aacute;ch h&agrave;ng phải điều trị nội tr&uacute;/ngoại tr&uacute;/nha khoa v&igrave; một l&yacute; do n&agrave;o đ&oacute;. Nếu chuyện kh&ocirc;ng may n&agrave;y xảy ra với bạn, h&atilde;y y&ecirc;n t&acirc;m, Manulife sẽ chi trả quyền lợi bảo hiểm dựa tr&ecirc;n chi ph&iacute; điều trị thực tế ph&aacute;t sinh hợp lệ tại cơ sở y tế.</p>\r\n\r\n<p>Bạn c&oacute; thể chọn 1 trong 3 c&aacute;ch dưới đ&acirc;y để nộp y&ecirc;u cầu quyền lợi bảo hiểm.</p>\r\n\r\n<ul>\r\n	<li>Nộp tại c&aacute;c văn ph&ograve;ng giao dịch của Manulife. Xem địa chỉ&nbsp;<a href=\"https://www.manulife.com.vn/vi/lien-he.html\">tại đ&acirc;y</a></li>\r\n	<li>Nộp qua Đại l&yacute; phục vụ</li>\r\n	<li>Gửi chứng từ qua bưu điện</li>\r\n</ul>\r\n\r\n<p><strong>Để y&ecirc;u cầu của bạn được giải quyết nhanh ch&oacute;ng, h&atilde;y chuẩn bị thật sẵn s&agrave;ng những giấy tờ v&agrave; chứng từ quan trọng dưới đ&acirc;y:</strong></p>\r\n\r\n<ul>\r\n	<li>Giấy ra viện (đối với quyền lợi Điều trị nội tr&uacute;)</li>\r\n	<li>Giấy chứng nhận phẫu thuật (nếu c&oacute;)</li>\r\n	<li>Sổ kh&aacute;m bệnh/Đơn thuốc (đối với quyền lợi Điều trị ngoại tr&uacute;)</li>\r\n	<li>Phiếu điều trị răng (đối với quyền lợi Điều trị nha khoa)</li>\r\n	<li>H&oacute;a đơn t&agrave;i ch&iacute;nh, bi&ecirc;n lai thu tiền ph&iacute;, lệ ph&iacute; (bản ch&iacute;nh)</li>\r\n	<li>Bảng k&ecirc; chi ph&iacute; kh&aacute;m chữa bệnh</li>\r\n	<li>Phiếu chỉ định kh&aacute;m/x&eacute;t nghiệm v&agrave; Kết quả x&eacute;t nghiệm, Kết quả si&ecirc;u &acirc;m</li>\r\n</ul>\r\n\r\n<p><a href=\"https://www.manulife.com.vn/content/dam/insurance/vn/documents/service-docs/quyen-loi-hop-dong-bao-hiem/don-yeu-cau-giai-quyet-qlbh.pdf\">Đơn y&ecirc;u cầu giải quyết quyền lợi bảo hiểm</a>*</p>\r\n\r\n<p><a href=\"https://www.manulife.com.vn/content/dam/insurance/vn/documents/service-docs/quyen-loi-hop-dong-bao-hiem/thu_uy_quyen_30082019.pdf\">Thư uỷ quyền</a>*</p>\r\n\r\n<p>Manulife lu&ocirc;n nỗ lực giải quyết nhanh ch&oacute;ng y&ecirc;u cầu bồi thường bảo hiểm của bạn. Ch&uacute;ng t&ocirc;i sẽ tiến h&agrave;nh chi trả quyền lợi bảo hiểm cho B&ecirc;n Mua Bảo Hiểm trong v&ograve;ng 30 ph&uacute;t tại quầy dịch vụ kh&aacute;ch h&agrave;ng nếu hồ sơ của bạn hợp lệ.Trong trường hợp cần th&ecirc;m thời gian để xử l&yacute; y&ecirc;u cầu v&agrave; x&aacute;c minh th&ocirc;ng tin, ch&uacute;ng t&ocirc;i sẽ th&ocirc;ng b&aacute;o ngay cho bạn.</p>\r\n\r\n<h6><strong>C&acirc;u hỏi thường gặp</strong></h6>\r\n\r\n<p><strong>Hỏi: T&ocirc;i c&oacute; tham gia sản phẩm M&oacute;n qu&agrave; sức khỏe, khi cần kh&aacute;m chữa bệnh, t&ocirc;i c&oacute; được bảo l&atilde;nh viện ph&iacute; kh&ocirc;ng?</strong></p>\r\n\r\n<p>Đ&aacute;p: C&oacute;, bạn sẽ được bảo l&atilde;nh viện ph&iacute; tại cơ sở y tế c&oacute; li&ecirc;n kết với Manulife.</p>\r\n', 10, '', '', 1, 0, 2, '', '2020-11-04 09:48:57', '2020-11-04 09:48:57'),
(13, 'Hỗ trợ chi phí điều trị bệnh lý nghiêm trọng', 'ho-tro-chi-phi-dieu-tri-benh-ly-nghiem-trong', '16045013741602667418056.jpeg', '', '<p><strong>Th&ocirc;ng tin bạn cần biết</strong></p>\r\n\r\n<p>Ch&uacute;ng t&ocirc;i rất tiếc khi hay tin kh&aacute;ch h&agrave;ng mắc phải bệnh l&yacute; nghi&ecirc;m trọng. Nếu chuyện kh&ocirc;ng may n&agrave;y xảy ra với bạn, h&atilde;y y&ecirc;n t&acirc;m, Manulife sẽ chi trả quyền lợi bảo hiểm điều trị c&aacute;c bệnh thuộc danh s&aacute;ch bệnh l&yacute; nghi&ecirc;m trọng được n&ecirc;u r&otilde; trong hợp đồng.</p>\r\n\r\n<p>Bạn c&oacute; thể chọn 1 trong 3 c&aacute;ch dưới đ&acirc;y để nộp y&ecirc;u cầu quyền lợi bảo hiểm.</p>\r\n\r\n<ul>\r\n	<li>Nộp tại c&aacute;c văn ph&ograve;ng giao dịch của Manulife. Xem địa chỉ&nbsp;<a href=\"https://www.manulife.com.vn/vi/lien-he.html\">tại đ&acirc;y</a></li>\r\n	<li>Nộp qua Đại l&yacute; phục vụ</li>\r\n	<li>Gửi chứng từ qua bưu điện</li>\r\n</ul>\r\n\r\n<p><strong>Để y&ecirc;u cầu của bạn được giải quyết nhanh ch&oacute;ng, h&atilde;y chuẩn bị thật sẵn s&agrave;ng những giấy tờ v&agrave; chứng từ quan trọng dưới đ&acirc;y:</strong></p>\r\n\r\n<ul>\r\n	<li>Giấy ra viện</li>\r\n	<li>Kết quả giải phẫu bệnh v&agrave; c&aacute;c chứng từ y tế kh&aacute;c</li>\r\n</ul>\r\n\r\n<p><a href=\"https://www.manulife.com.vn/content/dam/insurance/vn/documents/service-docs/quyen-loi-hop-dong-bao-hiem/don-yeu-cau-giai-quyet-qlbh.pdf\">Đơn y&ecirc;u cầu giải quyết quyền lợi bảo hiểm</a>*</p>\r\n\r\n<p><a href=\"https://www.manulife.com.vn/content/dam/insurance/vn/documents/service-docs/quyen-loi-hop-dong-bao-hiem/thu_uy_quyen_30082019.pdf\">Thư uỷ quyền</a>*</p>\r\n\r\n<p>Manulife lu&ocirc;n nỗ lực giải quyết nhanh ch&oacute;ng y&ecirc;u cầu bồi thường bảo hiểm của bạn. Ch&uacute;ng t&ocirc;i sẽ tiến h&agrave;nh chi trả quyền lợi bảo hiểm cho B&ecirc;n Mua Bảo Hiểm trong v&ograve;ng 60 ph&uacute;t tại quầy dịch vụ kh&aacute;ch h&agrave;ng nếu hồ sơ của bạn hợp lệ với c&aacute;c hợp đồng c&oacute; hiệu lực tr&ecirc;n 4 năm v&agrave; số tiền bảo hiểm dưới 100 triệu VND. Trong trường hợp cần th&ecirc;m thời gian để xử l&yacute; y&ecirc;u cầu v&agrave; x&aacute;c minh th&ocirc;ng tin, ch&uacute;ng t&ocirc;i sẽ th&ocirc;ng b&aacute;o ngay cho bạn.</p>\r\n\r\n<p><strong>C&acirc;u hỏi thường gặp</strong></p>\r\n\r\n<p><strong>Hỏi: &ldquo;Thời gian chờ&rdquo; nghĩa l&agrave; g&igrave;?</strong></p>\r\n\r\n<p>Đ&aacute;p: &ldquo;Thời gian chờ&rdquo; l&agrave; khoảng thời gian được ấn định m&agrave; nếu sự kiện bảo hiểm xảy ra trong khoảng thời gian đ&oacute;, bạn sẽ kh&ocirc;ng được chi trả quyền lợi bảo hiểm.</p>\r\n\r\n<p><strong>Hỏi: Thời gian chờ của quyền lợi Bệnh l&yacute; nghi&ecirc;m trọng l&agrave; bao l&acirc;u?</strong></p>\r\n\r\n<p>Đ&aacute;p: Thời gian chờ của quyền lợi Bệnh l&yacute; nghi&ecirc;m trọng l&agrave; 90 ng&agrave;y kể từ ng&agrave;y hợp đồng bảo hiểm c&oacute; hiệu lực hoặc ng&agrave;y ph&aacute;t h&agrave;nh hoặc ng&agrave;y kh&ocirc;i phục hiệu lực hợp đồng bảo hiểm.</p>\r\n', 10, '', '', 1, 0, 2, '', '2020-11-04 09:49:34', '2020-11-04 09:49:34'),
(14, 'Bồi thường tử vong', 'boi-thuong-tu-vong', '16045014191602664612976.jpeg', '', '<p><strong>Th&ocirc;ng tin bạn cần biết</strong></p>\r\n\r\n<p>Khi Người được bảo hiểm tử vong, người th&acirc;n c&oacute; thể nộp hồ sơ y&ecirc;u cầu quyền lợi tử vong. Manulife sẽ nhanh ch&oacute;ng giải quyết y&ecirc;u cầu quyền lợi theo điều khoản trong hợp đồng bảo hiểm.</p>\r\n\r\n<p>Bạn c&oacute; thể chọn 1 trong 3 c&aacute;ch dưới đ&acirc;y để nộp y&ecirc;u cầu quyền lợi bảo hiểm.</p>\r\n\r\n<ul>\r\n	<li>Nộp tại c&aacute;c văn ph&ograve;ng giao dịch của Manulife. Xem địa chỉ&nbsp;<a href=\"https://www.manulife.com.vn/vi/lien-he.html\"><strong>tại đ&acirc;y</strong></a></li>\r\n	<li>Nộp qua Đại l&yacute; phục vụ</li>\r\n	<li>Gửi chứng từ qua bưu điện</li>\r\n</ul>\r\n\r\n<p><strong>Để y&ecirc;u cầu của bạn được giải quyết nhanh ch&oacute;ng, h&atilde;y chuẩn bị thật sẵn s&agrave;ng những giấy tờ v&agrave; chứng từ quan trọng dưới đ&acirc;y.</strong></p>\r\n\r\n<ul>\r\n	<li>Giấy chứng tử/Tr&iacute;ch lục khai tử (bản sao c&oacute; chứng thực do cơ quan c&oacute; thẩm quyền cấp)</li>\r\n	<li>Giấy ra viện v&agrave; c&aacute;c chứng từ y tế kh&aacute;c</li>\r\n	<li>Hồ sơ tai nạn (trong trường hợp tử vong do tai nạn)</li>\r\n</ul>\r\n\r\n<p><a href=\"https://www.manulife.com.vn/content/dam/insurance/vn/documents/service-docs/quyen-loi-hop-dong-bao-hiem/don-yeu-cau-giai-quyet-qlbh.pdf\">Đơn y&ecirc;u cầu giải quyết quyền lợi bảo hiểm</a>*</p>\r\n\r\n<p><a href=\"https://www.manulife.com.vn/content/dam/insurance/vn/documents/service-docs/quyen-loi-hop-dong-bao-hiem/thu_uy_quyen_30082019.pdf\">Thư uỷ quyền</a>*</p>\r\n\r\n<p>Manulife lu&ocirc;n nỗ lực giải quyết nhanh ch&oacute;ng y&ecirc;u cầu bồi thường bảo hiểm của bạn. Ch&uacute;ng t&ocirc;i sẽ tiến h&agrave;nh chi trả quyền lợi bảo hiểm cho B&ecirc;n Mua Bảo Hiểm trong v&ograve;ng 60 ph&uacute;t tại quầy dịch vụ kh&aacute;ch h&agrave;ng nếu hồ sơ của bạn hợp lệ với c&aacute;c hợp đồng c&oacute; hiệu lực tr&ecirc;n 4 năm v&agrave; số tiền bảo hiểm dưới 100 triệu VND. Trong trường hợp cần th&ecirc;m thời gian để xử l&yacute; y&ecirc;u cầu v&agrave; x&aacute;c minh th&ocirc;ng tin, ch&uacute;ng t&ocirc;i sẽ th&ocirc;ng b&aacute;o ngay cho bạn.</p>\r\n\r\n<p><strong>C&acirc;u hỏi thường gặp</strong></p>\r\n\r\n<p><strong>Hỏi: Thời gian giải quyết quyền lợi Tử vong của Manulife l&agrave; bao l&acirc;u?</strong></p>\r\n\r\n<p>Đ&aacute;p: Ch&uacute;ng t&ocirc;i lu&ocirc;n nỗ lực để giải quyết nhanh ch&oacute;ng nhất y&ecirc;u cầu quyền lợi bảo hiểm cho kh&aacute;ch h&agrave;ng. Thời gian xử l&yacute; tối đa đối với y&ecirc;u cầu quyền lợi Tử vong l&agrave; 30 ng&agrave;y kể từ thời điểm Manulife tiếp nhận đầy đủ hồ sơ.</p>\r\n', 10, '', '', 1, 0, 2, '', '2020-11-04 09:50:19', '2020-11-04 09:50:19'),
(15, 'Hỗ trợ chi phí sinh nở', 'ho-tro-chi-phi-sinh-no', '16045015111601372318684.jpeg', '', '<p><strong>Th&ocirc;ng tin bạn cần biết</strong></p>\r\n\r\n<p>Ch&uacute;c mừng bạn v&agrave; gia đ&igrave;nh sắp ch&agrave;o đ&oacute;n th&ecirc;m một th&agrave;nh vi&ecirc;n mới! Manulife sẽ chi trả một phần hoặc to&agrave;n bộ chi ph&iacute; sinh nở tuỳ theo hạn mức quy định trong hợp đồng bảo hiểm của bạn.</p>\r\n\r\n<p>Bạn c&oacute; thể chọn 1 trong 3 c&aacute;ch dưới đ&acirc;y để nộp y&ecirc;u cầu quyền lợi bảo hiểm.</p>\r\n\r\n<ul>\r\n	<li>Nộp tại c&aacute;c văn ph&ograve;ng giao dịch của Manulife. Xem địa chỉ&nbsp;<strong><a href=\"https://www.manulife.com.vn/vi/lien-he.html\">tại đ&acirc;y</a></strong></li>\r\n	<li>Nộp qua Đại l&yacute; phục vụ</li>\r\n	<li>Gửi chứng từ qua bưu điện</li>\r\n</ul>\r\n\r\n<p><strong>Để y&ecirc;u cầu của bạn được giải quyết nhanh ch&oacute;ng, h&atilde;y chuẩn bị thật sẵn s&agrave;ng những giấy tờ v&agrave; chứng từ quan trọng dưới đ&acirc;y:</strong></p>\r\n\r\n<ul>\r\n	<li>Giấy khai sinh/Tr&iacute;ch lục khai sinh hoặc Giấy chứng sinh</li>\r\n</ul>\r\n\r\n<p><a href=\"https://www.manulife.com.vn/content/dam/insurance/vn/documents/service-docs/quyen-loi-hop-dong-bao-hiem/don-yeu-cau-giai-quyet-qlbh.pdf\">Đơn y&ecirc;u cầu giải quyết quyền lợi bảo hiểm</a>*</p>\r\n\r\n<p><a href=\"https://www.manulife.com.vn/content/dam/insurance/vn/documents/service-docs/quyen-loi-hop-dong-bao-hiem/thu_uy_quyen_30082019.pdf\">Thư uỷ quyền</a>*</p>\r\n\r\n<p>Manulife lu&ocirc;n nỗ lực giải quyết nhanh ch&oacute;ng y&ecirc;u cầu bồi thường bảo hiểm của bạn. Ch&uacute;ng t&ocirc;i sẽ tiến h&agrave;nh chi trả quyền lợi bảo hiểm cho B&ecirc;n Mua Bảo Hiểm trong v&ograve;ng 30 ph&uacute;t tại quầy dịch vụ kh&aacute;ch h&agrave;ng nếu hồ sơ của bạn hợp lệ. Trong trường hợp cần th&ecirc;m thời gian để xử l&yacute; y&ecirc;u cầu v&agrave; x&aacute;c minh th&ocirc;ng tin, ch&uacute;ng t&ocirc;i sẽ th&ocirc;ng b&aacute;o ngay cho bạn.</p>\r\n\r\n<p><strong>C&acirc;u hỏi thường gặp</strong></p>\r\n\r\n<p><strong>Hỏi: T&ocirc;i c&oacute; thể nhận được bao nhi&ecirc;u lần quyền lợi sinh đẻ trong suốt thời hạn được bảo hiểm?</strong></p>\r\n\r\n<p>Đ&aacute;p: Manulife sẽ chi trả tối đa 2 lần quyền lợi sinh đẻ trong suốt thời hạn bạn được bảo hiểm.</p>\r\n', 10, '', '', 1, 1, 2, '', '2020-11-04 09:51:51', '2020-11-04 09:51:51'),
(16, 'Khôi phục hiệu lực Hợp đồng bảo hiểm', 'khoi-phuc-hieu-luc-hop-dong-bao-hiem', '16045016811583490287553.jpeg', '', '<p><a href=\"https://www.manulife.com.vn/content/dam/insurance/vn/documents/service-docs/quyen-loi-hop-dong-bao-hiem/don-yeu-cau-khoi-phuc-hieu-luc-hdbh.pdf\" target=\"_blank\">Đơn y&ecirc;u cầu kh&ocirc;i phục hiệu lực Hợp đồng bảo hiểm</a></p>\r\n\r\n<p><a href=\"https://www.manulife.com.vn/content/dam/insurance/vn/documents/service-docs/to-khai-thong-tin-20122018.pdf\" target=\"_blank\">Tờ khai th&ocirc;ng tin</a></p>\r\n\r\n<ul>\r\n	<li>Ph&iacute; bảo hiểm để kh&ocirc;i phục hiệu lực hợp đồng&nbsp;</li>\r\n</ul>\r\n', 8, '', '', 1, 1, 2, '', '2020-11-04 09:54:41', '2020-11-04 09:54:41'),
(17, 'Thay đổi định kỳ nộp phí', 'thay-doi-dinh-ky-nop-phi', '16045017101602667418056.jpeg', '', '<p><a href=\"https://www.manulife.com.vn/content/dam/insurance/vn/documents/service-docs/quyen-loi-hop-dong-bao-hiem/don-yeu-cau-thay-doi-hdbh.pdf\">Đơn y&ecirc;u cầu thay đổi Hợp đồng bảo hiểm</a></p>\r\n\r\n<ul>\r\n	<li>Ph&iacute; bảo hiểm để thay đổi định kỳ đ&oacute;ng ph&iacute;</li>\r\n</ul>\r\n', 8, '', '', 1, 1, 2, '', '2020-11-04 09:55:10', '2020-11-04 09:55:10'),
(18, 'Thêm sản phẩm bổ trợ', 'them-san-pham-bo-tro', '16045017371602665898705.jpeg', '', '<p><a href=\"https://www.manulife.com.vn/content/dam/insurance/vn/documents/service-docs/quyen-loi-hop-dong-bao-hiem/don-yeu-cau-thay-doi-hdbh.pdf\" target=\"_blank\">Đơn y&ecirc;u cầu thay đổi Hợp đồng bảo hiểm</a></p>\r\n\r\n<p><a href=\"https://www.manulife.com.vn/content/dam/insurance/vn/documents/service-docs/to-khai-thong-tin-20122018.pdf\" target=\"_blank\">Tờ khai th&ocirc;ng tin</a></p>\r\n\r\n<ul>\r\n	<li>Chứng minh nh&acirc;n d&acirc;n/Giấy khai sinh</li>\r\n	<li>Bộ Hợp đồng v&agrave; Bảng dự thảo nếu Hợp đồng bảo hiểm (nếu thay đổi trong thời gian tự do xem x&eacute;t)</li>\r\n</ul>\r\n', 11, '', '', 1, 1, 2, '', '2020-11-04 09:55:37', '2020-11-04 09:55:37'),
(19, 'Thay đổi định kỳ nộp phí', 'thay-doi-dinh-ky-nop-phi', '16045017671602664612976.jpeg', '', '<p><a href=\"https://www.manulife.com.vn/content/dam/insurance/vn/documents/service-docs/quyen-loi-hop-dong-bao-hiem/don-yeu-cau-thay-doi-hdbh.pdf\">Đơn y&ecirc;u cầu thay đổi Hợp đồng bảo hiểm</a></p>\r\n\r\n<ul>\r\n	<li>Ph&iacute; bảo hiểm để thay đổi định kỳ đ&oacute;ng ph&iacute;</li>\r\n</ul>\r\n', 13, '', '', 1, 1, 2, '', '2020-11-04 09:56:07', '2020-11-04 09:56:07');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `db_product`
--

CREATE TABLE `db_product` (
  `product_id` int(11) NOT NULL,
  `product_title` varchar(500) NOT NULL,
  `product_alias` text NOT NULL,
  `product_img` varchar(255) NOT NULL,
  `product_banner` varchar(255) DEFAULT NULL,
  `product_description` mediumtext NOT NULL,
  `product_content` text NOT NULL,
  `product_category_id` int(11) NOT NULL DEFAULT 0,
  `product_benefits` varchar(50) DEFAULT NULL,
  `product_keyword` varchar(500) NOT NULL,
  `product_active` int(11) NOT NULL COMMENT '0=noactive; 1=active',
  `product_highlights` int(11) NOT NULL COMMENT '0=no;1=yes;',
  `created_at` varchar(50) NOT NULL,
  `updated_at` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `db_product`
--

INSERT INTO `db_product` (`product_id`, `product_title`, `product_alias`, `product_img`, `product_banner`, `product_description`, `product_content`, `product_category_id`, `product_benefits`, `product_keyword`, `product_active`, `product_highlights`, `created_at`, `updated_at`) VALUES
(1, 'An Tâm Vui Sống', 'an-tam-vui-song', '1604508087Capture.jpeg', '16045080041573546251601.jpeg', 'Giải pháp bảo vệ linh hoạt với thời gian đóng phí ngắn hạn cùng nhiều gói bảo vệ lựa chọn', '<p>Bạn l&agrave; người bận rộn v&agrave; &iacute;t c&oacute; thời gian cho bản th&acirc;n v&agrave; gia đ&igrave;nh? Bạn mong muốn được bảo vệ nhưng ngại v&igrave; thủ tục bảo hiểm phức tạp?&nbsp;Thủ tục đăng k&yacute; v&agrave; kh&aacute;m sức khỏe kh&oacute; khăn?</p>\r\n\r\n<p>Tham gia bảo hiểm chưa bao giờ dễ d&agrave;ng hơn thế c&ugrave;ng Manulife - An T&acirc;m Vui Sống, với mức ph&iacute; do ch&iacute;nh bạn lựa chọn c&ugrave;ng quyền lợi ho&agrave;n ph&iacute; hấp dẫn.</p>\r\n', 2, '30', '', 1, 0, '2020-11-04 10:39:09', '2021-03-08 02:53:11'),
(2, 'Hành Trình Hạnh Phúc', 'hanh-trinh-hanh-phuc', '1604508148Capture.PNG', '16045081481573462724306.jpeg', 'Xây dựng kế hoạch tài chính trọn đời, linh hoạt bảo vệ trên mọi hành trình của cuộc sống', '<p>M&ocirc;̃i giai đọan của cu&ocirc;̣c đời đ&ecirc;̀u là những giai đọan đẹp nh&acirc;́t n&ecirc;́u chúng ta bi&ecirc;́t tr&acirc;n trọng và s&ocirc;́ng h&ecirc;́t mình. Bạn đ&atilde; sẵn s&agrave;ng x&acirc;y dựng kế hoạch t&agrave;i ch&iacute;nh trọn đời để tận hưởng trọn vẹn từng giai đoạn cuộc sống c&ugrave;ng Manulife chưa?&nbsp;Với Manulife H&agrave;nh Tr&igrave;nh Hạnh Ph&uacute;c, bạn c&oacute; thể tận hưởng những quyền lợi đặc biệt như dưới đ&acirc;y:</p>\r\n', 2, NULL, '', 1, 0, '2020-11-04 10:40:35', '2021-03-08 02:53:22');

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
(1, '#1D714C', '#F4EFEF', 'myAdmin CPannel', '2.0.0.1', 0, '205043db5a9d83318db42624b27a8f9f');

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
  `staff_email` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `staff_password` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `staff_curator` int(11) NOT NULL DEFAULT 0 COMMENT '0=admin; 1=staff',
  `staff_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `staff_position` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `staff_phone` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `staff_img` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `staff_active` int(11) NOT NULL DEFAULT 1 COMMENT '0=noactive; 1=active ',
  `is_admin` int(11) NOT NULL,
  `subdomain` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `db_staff`
--

INSERT INTO `db_staff` (`staff_id`, `staff_email`, `staff_password`, `staff_curator`, `staff_name`, `staff_position`, `staff_phone`, `staff_img`, `staff_active`, `is_admin`, `subdomain`, `created_at`, `updated_at`) VALUES
(0, 'admin', '25d55ad283aa400af464c76d713c07ad', 0, 'Admin', 'Manager', '0909089067', '1610639906aeb4b8e45dd4ad8af4c5.jpg', 1, 1, '', '2020-12-18 03:18:04', '2021-01-14 03:58:55'),
(6, 'truongthuan20041997@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0, 'Trương Thuận', 'IT', '0799546854', '16083046844769308501582800513-128.png', 1, 0, '', '2020-12-18 03:18:04', '2020-12-18 03:18:04'),
(7, 'huunghi25021996@gmail.com', '478a056368e27c4f45230c38eab82db0', 0, 'Nguyễn Hữu Nghị', 'Test', '091 9250296', '1608342909123477853_1627182010796188_1479263184386225167_n.jpg', 1, 0, 'Test', '2020-12-19 01:55:09', '2020-12-19 01:55:09');

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
  MODIFY `cate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `db_contact`
--
ALTER TABLE `db_contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `db_customer`
--
ALTER TABLE `db_customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT cho bảng `db_info`
--
ALTER TABLE `db_info`
  MODIFY `info_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `db_other`
--
ALTER TABLE `db_other`
  MODIFY `other_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT cho bảng `db_post`
--
ALTER TABLE `db_post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `db_product`
--
ALTER TABLE `db_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `db_slide`
--
ALTER TABLE `db_slide`
  MODIFY `slide_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `db_staff`
--
ALTER TABLE `db_staff`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `db_user`
--
ALTER TABLE `db_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
