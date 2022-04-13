-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 13, 2022 lúc 06:41 PM
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
-- Cơ sở dữ liệu: `sneaker`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `orderid` int(11) NOT NULL,
  `cart` int(11) NOT NULL,
  `product` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `purchasedate` varchar(255) DEFAULT NULL,
  `total` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `cartid` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `product` int(11) NOT NULL,
  `size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`cartid`, `username`, `quantity`, `product`, `size`) VALUES
(39, 'ducmy', 1, 3, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `categoryid` int(11) NOT NULL,
  `category` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`categoryid`, `category`, `description`) VALUES
(1, 'Male', 'Product for men'),
(2, 'Female', 'Product for women'),
(3, 'Unisex', 'Product for everyone'),
(4, 'Sale', 'Sale-Off'),
(5, 'Collection', 'Collection');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `color`
--

CREATE TABLE `color` (
  `colorid` int(11) NOT NULL,
  `color` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `color`
--

INSERT INTO `color` (`colorid`, `color`, `description`) VALUES
(1, 'Vintage', '1950s'),
(2, 'Rainbow', 'https://colorhunt.co/palettes/rainbow'),
(3, 'Space', 'https://colorhunt.co/palettes/space'),
(4, 'Night', 'https://colorhunt.co/palettes/night'),
(5, 'Red Velvet', 'Red'),
(6, 'Darkest', 'https://colorhunt.co/palettes/dark'),
(7, 'White Smoke', 'https://colorhunt.co/palettes/white'),
(8, 'Pinky', 'https://colorhunt.co/palettes/pinky'),
(9, 'Mint', 'https://colorhunt.co/palettes/pastel'),
(10, 'Ocean', 'https://colorhunt.co/palettes/pastel');

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
(2, '2022_04_10_094001_category', 1),
(3, '2022_04_10_104001_color', 1),
(4, '2022_04_10_114001_size', 1),
(5, '2022_04_10_120001_product', 1),
(6, '2022_04_10_130357_detail', 1),
(7, '2022_04_10_140001_role', 1),
(8, '2022_04_10_141001_users', 1),
(9, '2022_04_10_144001_cart', 1),
(10, '2022_04_10_144001_order', 1),
(11, '2022_04_10_144001_bill', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `newsid` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `heading` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `paraphase` text DEFAULT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`newsid`, `username`, `heading`, `author`, `paraphase`, `images`) VALUES
(1, 'admin', 'SNEAKER FEST VIETNAM AND COMBINATION', 'Quach Cong Tuan', 'With a limited release of only 50 pairs, plus the product details, packaging of Bevis Peeping Pattas are \"cared for\" with new ideas, different from previous versions from Bevis. make the collab special.\r\n\r\nIn general, the minimalist All white rubber sole makes the base solid and creates a highlight for the upper part which is somewhat complicated. High quality 10oz Black canvas is used around the colorful painting, stretching and covering the entire cheek and collar. Peeping\'s face (a familiar mascot of Vietnam\'s Sneaker Fest) becomes more prominent than ever when using 2 colors black & white right at the center of artwork. The collab gives viewers the feeling of a young generation of personality, somewhat rebellious but also very active in the journey of finding and asserting themselves.\r\n\r\nThe design carries \"the soul of Sneaker Fest Vietnam with the representative mascot Peeping as the center\r\n\r\nBEVIS PEEPING PATTAS - LIMITED COLLABORATION ISSUED ONLY IN THE QUANTITY OF 50 Pairs\r\n\r\nA special feature of Bevis Peeping Pattas that needs to be mentioned is the \"own label\" line of the Bevis x Sneaker Fest Vietnam collab which is 3D printed on the tongue that you can\'t find anywhere else. The print in the right size and the eye-catching yellow accents are enough to make the shoes more impressive and make anyone who owns them proud.\r\n\r\n\r\n\"A Bevis product - can only be COP at Sneaker Fest Vietnam 2019\"\r\n\r\nTo emphasize the speciality of each product, the Heel Strap of each pair is clearly embroidered with numbers from 1 to 50 with the same Butter thread color as the main strap. The version also has an additional set of simple Black cords included so that customers can change according to the situation. With these design details, we want to put a \"unique\" element on each shoe so that the owner will feel special.\r\n\r\n\r\nHeel Strap with the serial number is embroidered with exact stitches and stitches\r\n\r\n\r\nThe product will have 2 sets of Butter color shoelaces available on the shoe and Black color included\r\n\r\nYOU ARE THE ONLY ONE TO UNBOX IF OWN THE PRODUCT\r\n\r\nThe packaging idea of ​​Bevis Peeping Pattas this time creates boxes with a different shape compared to the usual Bevis boxes. Contrast is used once again, when the design is minimalist by the patterns printed in white on kraft paper that are responsible for creating the spotlight for the sealing Seal and the numbered stamp on each shoe box. Owning them means that you are once again unique in the process of \"unpacking\", unboxing. In addition, the Micro-Pak moisture-proof stamp from environmentally friendly recycled materials was used for the first time for this version.', 'news1.jpg');

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
  `productid` int(11) NOT NULL,
  `productname` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `category` int(11) DEFAULT NULL,
  `color` int(11) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `image2` varchar(255) DEFAULT NULL,
  `image3` varchar(255) DEFAULT NULL,
  `image4` varchar(255) DEFAULT NULL,
  `image5` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`productid`, `productname`, `price`, `category`, `color`, `description`, `image`, `image2`, `image3`, `image4`, `image5`) VALUES
(1, 'MINT RULER', 449, 2, 9, 'The look with fresh, modern colors. Urbas Ruler carries a function that surprises many people, which will be very useful for those who have a habit of using a ruler but forget it, although the accuracy is \"not sure high\".', 'FMK01 (1).jpg', 'FMK01 (2).jpg', 'FMK01 (3).jpg', 'FMK01 (4).jpg', 'FMK01 (5).jpg'),
(3, 'CLOUD RULER', 459, 2, 10, 'The look with fresh, modern colors. Urbas Ruler carries a function that surprises many people, which will be very useful for those who have a habit of using a ruler but forget it, although the accuracy is \"not sure high\".', 'FIK01 (1).jpg', 'FIK01 (2).jpg', 'FIK01 (3).jpg', 'FIK01 (4).jpg', 'FIK01 (5).jpg'),
(4, 'PINKEE RULER', 449, 2, 8, 'The look with fresh, modern colors. Urbas Ruler carries a function that surprises many people, which will be very useful for those who have a habit of using a ruler but forget it, although the accuracy is \"not sure high\".', 'FPK01 (1).jpg', 'FPK01 (2).jpg', 'FPK01 (3).jpg', 'FPK01 (4).jpg', 'FPK01 (5).jpg'),
(5, 'Rainbow Low', 450, 2, 2, 'Combined with the new hook\'n loop look, Aunter is a strange but interesting mix for the first time in the Vintas line. Still the usual Canvas fabric, paired with rich color options but still hidden deep inside the calm feature. All make up the overall mature accent, easily highlighting the necessary attraction every time on the foot', 'FRL01 (1).jpg', 'FRL01 (2).jpg', 'FRL01 (3).jpg', 'FRL01 (4).jpg', 'FRL01 (5).jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role`
--

CREATE TABLE `role` (
  `roleid` int(11) NOT NULL,
  `role` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `role`
--

INSERT INTO `role` (`roleid`, `role`, `description`) VALUES
(1, 'Member', 'Membership'),
(2, 'Manager', ',Management'),
(3, 'Premium', 'Premium'),
(4, 'Gold', 'Gold');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `size`
--

CREATE TABLE `size` (
  `sizeid` int(11) NOT NULL,
  `size` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `size`
--

INSERT INTO `size` (`sizeid`, `size`, `description`) VALUES
(1, 'EU 36', 'US 4.5'),
(2, 'EU 37', 'US 5.5'),
(3, 'EU 38', 'US 6'),
(4, 'EU 39', 'US 6.5'),
(5, 'EU 40', 'US 7'),
(6, 'EU 41', 'US 8'),
(7, 'EU 42', 'US 9'),
(8, 'EU 43', 'US 9.5');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `username` varchar(255) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phonenumber` varchar(20) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `role` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`username`, `fullname`, `password`, `email`, `phonenumber`, `address`, `city`, `role`) VALUES
('admin', 'Quách Công Tuấn', '$2y$10$w2gki9dZpWewHjHnGnXlau6ee4u28ikMBziEDdXQK3rx8eEmLDlPG', 'admin@fpt.edu.vn', '0981979901', '22 P. Trịnh Văn Bô, Xuân Phương, Nam Từ Liêm, Hà Nội, Việt Nam', 'Hà Nội', 2),
('admin2', 'Tuan Cong', '$2y$10$aecYMeiCZ3W8Dzdu7MBse.EJA/pSSrqHrMZfi4MDH21EzQZKb9bnm', '1@domain', '09888882111', '123 Lac Long Quan', 'Hà Nội', 4),
('ducmy', 'Pham Duc My', '$2y$10$hX1pgjD1QSXOBBG3aERd0u7BviirX6y8oz1MuHwUoXra/alD.ehsW', 'ducmy@gmail.com', '09819799011', 'Au Co', 'Hà Nội', 4);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`orderid`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cartid`),
  ADD KEY `username` (`username`),
  ADD KEY `product` (`product`),
  ADD KEY `size` (`size`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryid`);

--
-- Chỉ mục cho bảng `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`colorid`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`newsid`),
  ADD KEY `username` (`username`);

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
  ADD KEY `category` (`category`),
  ADD KEY `color` (`color`);

--
-- Chỉ mục cho bảng `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`roleid`);

--
-- Chỉ mục cho bảng `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`sizeid`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`),
  ADD KEY `role` (`role`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `orderid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `cartid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `categoryid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `color`
--
ALTER TABLE `color`
  MODIFY `colorid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `newsid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `productid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `role`
--
ALTER TABLE `role`
  MODIFY `roleid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `size`
--
ALTER TABLE `size`
  MODIFY `sizeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`),
  ADD CONSTRAINT `cart_ibfk_3` FOREIGN KEY (`product`) REFERENCES `product` (`productid`),
  ADD CONSTRAINT `cart_ibfk_4` FOREIGN KEY (`size`) REFERENCES `size` (`sizeid`);

--
-- Các ràng buộc cho bảng `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`);

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category`) REFERENCES `category` (`categoryid`),
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`color`) REFERENCES `color` (`colorid`);

--
-- Các ràng buộc cho bảng `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role`) REFERENCES `role` (`roleid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
