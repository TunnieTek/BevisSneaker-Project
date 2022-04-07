-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 07, 2022 lúc 09:28 PM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `bevissneaker`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `cateid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `catename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `catedescription` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`cateid`, `catename`, `catedescription`) VALUES
('Female', 'FEMALE', 'Products for women.'),
('Male', 'MALE', 'Products for men.');

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
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2022_04_06_193329_product', 1),
(3, '2022_04_06_193638_users', 1),
(4, '2022_04_07_184505_category', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `productid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `productname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `size` double(8,2) NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `images2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images5` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`productid`, `productname`, `price`, `size`, `color`, `images`, `category`, `description`, `images2`, `images3`, `images4`, `images5`) VALUES
('FIK01', 'IceKrex', 469.00, 35.00, 'Blue', 'FIK01 (1).jpg', 'Female', 'The look with fresh, modern colors. Urbas Ruler carries a function that surprises many people, which will be very useful for those who have a habit of using a ruler but forget it, although the accuracy is \"not sure high\".', 'FIK01 (2).jpg', 'FIK01 (3).jpg', 'FIK01 (4).jpg', 'FIK01 (5).jpg'),
('FMK01', 'MintKrex', 399.00, 35.00, 'Mint', 'FMK01 (1).jpg', 'Female', 'The look with fresh, modern colors. Urbas Ruler carries a function that surprises many people, which will be very useful for those who have a habit of using a ruler but forget it, although the accuracy is \"not sure high\".', 'FMK01 (2).jpg', 'FMK01 (3).jpg', 'FMK01 (4).jpg', 'FMK01 (5).jpg'),
('FPK01', 'PinKrex', 469.00, 37.00, 'Pinky', 'FPK01 (1).jpg', 'Female', 'LIMITED EDITION', 'FPK01 (2).jpg', 'FPK01 (4).jpg', 'FPK01 (3).jpg', 'FPK01 (5).jpg'),
('FRH01', 'Rainbow High', 479.00, 35.00, 'Rainbow', 'FRH01 (4).jpg', 'Female', 'LIMITED EDITION', 'FRH01 (1).jpg', 'FRH01 (3).jpg', 'FRH01 (2).jpg', 'FRH01 (5).jpg'),
('FRL01', 'Rainbow Low', 449.00, 35.00, 'Rainbow', 'FRL01 (1).jpg', 'Female', 'LIMITED EDITION', 'FRL01 (4).jpg', 'FRL01 (5).jpg', 'FRL01 (3).jpg', 'FRL01 (2).jpg'),
('MDK01', 'DarKrix', 449.00, 42.00, 'Dark Black', 'MDK01 (2).jpg', 'Male', 'Bumper Gum EXT (Extension) NE is an upgrade that is classified in the Basas product line', 'MDK01 (4).jpg', 'MDK01 (5).jpg', 'MDK01 (1).jpg', 'MDK01 (3).jpg'),
('MIK01', 'IceKrix', 499.00, 35.00, 'Blue', 'MIK01 (1).jpeg', 'Male', 'The look with fresh, modern colors. Urbas Ruler carries a function that surprises many people, which will be very useful for those who have a habit of using a ruler but forget it, although the accuracy is \"not sure high\".', 'MIK01 (1).jpg', 'MIK01 (2).jpeg', 'MIK01 (3).jpeg', 'MIK01 (4).jpeg'),
('MMK01', 'MintKrix', 449.00, 35.00, 'Mint', 'MMK01 (2).jpeg', 'Male', 'The look with fresh, modern colors. Urbas Ruler carries a function that surprises many people, which will be very useful for those who have a habit of using a ruler but forget it, although the accuracy is \"not sure high\".', 'MMK01 (1).jpeg', 'MMK01 (3).jpeg', 'MMK01 (4).jpeg', 'MMK01 (5).jpeg'),
('MPK01', 'PinKrix', 459.00, 35.00, 'Pinky', 'MPK01 (2).jpeg', 'Male', 'The look with fresh, modern colors. Urbas Ruler carries a function that surprises many people, which will be very useful for those who have a habit of using a ruler but forget it, although the accuracy is \"not sure high\".', 'MPK01 (1).jpeg', 'MPK01 (3).jpeg', 'MPK01 (4).jpeg', 'MPK01 (5).jpeg'),
('MVT01', 'VintageX', 499.00, 43.00, 'Vintage', 'MVH01 (2).jpg', 'Male', 'LIMITED EDITION', 'MVH01 (1).jpg', 'MVH01 (3).jpg', 'MVH01 (4).jpg', 'MVH01 (5).jpg'),
('URL001', 'URBAS IRRELEVANT', 849.00, 42.00, 'Limited Edition', 'URL01.jpg', 'Male', 'Strange in the arrangement of random colors of unknown intent. The Urbas Irrelevant Pack is full of improvisation that does not need to be in common, nor does it need to be too related to each other in the creative intentions between the products in the series. This is definitely an indispensable piece for those who want something special without analyzing too much.', 'URL02.jpg', 'URL03.jpg', 'URL04.jpg', 'URL05.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phonenumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`username`, `password`, `email`, `fullname`, `phonenumber`, `address`, `city`) VALUES
('tuanqc', '$2y$10$Rh54YPPpVBm7M7Gmf9TTku7nBcGXnta3LYtn4v3gymPDea4qhRuPO', 'tuan@fpt.edu.vn', 'Cong Tuan Quach', '099883123213', '123 Trinh Van Bo', 'Ha Noi');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cateid`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productid`),
  ADD KEY `category` (`category`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `category`
--
ALTER TABLE `category`
  ADD CONSTRAINT `category_ibfk_1` FOREIGN KEY (`cateid`) REFERENCES `product` (`category`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
