-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2020 at 12:19 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rental_laptop`
--

-- --------------------------------------------------------

--
-- Table structure for table `laptop`
--

CREATE TABLE `laptop` (
  `id_laptop` int(11) NOT NULL,
  `nama_tipe` varchar(128) NOT NULL,
  `merk` varchar(128) NOT NULL,
  `seri` varchar(128) NOT NULL,
  `prosesor` varchar(100) NOT NULL,
  `ram` varchar(1000) NOT NULL,
  `penyimpanan` varchar(50) NOT NULL,
  `layar` varchar(1000) NOT NULL,
  `vga` varchar(1000) NOT NULL,
  `harga` int(50) NOT NULL,
  `denda` int(50) NOT NULL,
  `id_upload` varchar(255) NOT NULL,
  `jumlah` int(128) NOT NULL,
  `deskripsi` text NOT NULL,
  `tanggal` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laptop`
--

INSERT INTO `laptop` (`id_laptop`, `nama_tipe`, `merk`, `seri`, `prosesor`, `ram`, `penyimpanan`, `layar`, `vga`, `harga`, `denda`, `id_upload`, `jumlah`, `deskripsi`, `tanggal`) VALUES
(82, 'Bisnis', 'Lenovo', 'L340', 'I5', '8GB', '256GB SSD', '15,6', 'NVIDIA® GeForce RTX™ 2080 with 8GB GDDR6', 125000, 0, '92020', 18, 'Laptop DELL INSPIRON 14-3493-1065G7-8GB-512GB-MX230-WIN10 BLACK ini hadir dengan spesifikasi terbaik yang dibutuhkan oleh para pengguna yang memiliki produktivitas tinggi. Baik itu pekerja kreatif ataupun gamers, kehadiran laptop dengan kemampuan kinerja tangguh ini bisa memudahkan semua aktivitas yang dijalankan. Laptop yang dilengkapi Random Access Memory atau RAM berkapasitas 8GB tentunya bisa menjadi salah satu pilihan yang bisa mengakomodir aktivitas komputasi ringah hingga berat.', 1595082333),
(83, 'Bisnis', 'Asus', 'A407UA-BV319T', 'i5', '16GB', '512GB SSD', '15,6', 'NVIDIA GeForce GTX 1650 4GB GDDR6', 200000, 0, '950335', 2, 'Laptop DELL INSPIRON 14-3493-1065G7-8GB-512GB-MX230-WIN10 BLACK  ini memiliki hardrive bertipe SSD yang memiliki kecepatan yang sangat signifikan. Kecepatan baca tulis SSD bahkan 8 kali lebih cepat dibanding dengan HDD biasa bertipe SATA. Laptop yang terpasang SSD dapat melewati proses booting dalam hitungan detik, pastinya tidak melebihi 1 menit. Sedangkan waktun yang dibutuhkan HDD lebih lama tergantung dengan spesifikasi, dan yang pasti tidak lebih cepat bila dibandingkan dengan SSD.ini adalah SATA di buat dengan kemampuan hot-swap sehinga dapat mematikan dan menyalakan tanpa melakukan shut down pada sistem laptop. Cocok untuk melakukan aktivitas komputasi ringan dan multimedia seperti menonton film.', 1593874430),
(84, 'Bisnis', 'HP', 'Omen', 'I7', '16GB', '1TB SSD', '15,6', 'NVIDIA GeForce GTX 1650 4GB GDDR6', 250000, 0, '409205', 0, ';jksanf;jsnfsjkcnDJNCdjfjd;jksanf;jsnfsjkcnDJNCdjfjd;jksanf;jsnfsjkcnDJNCdjfjd;jksanf;jsnfsjkcnDJNCdjfjd;jksanf;jsnfsjkcnDJNCdjfjd;jksanf;jsnfsjkcnDJNCdjfjd;jksanf;jsnfsjkcnDJNCdjfjd', 1593877002),
(85, 'Bisnis', 'Acer', 'Travelmate P446', 'i5', '4GB', '512GB SSD', '14', 'Intel HD GRAPHICS 5500', 150000, 0, '216495', 6, 'Lenovo masih terus mengeluarkan laptop kelas bisnis sebagai komitmen mereka untuk menghadirkan produk tangguh dan bertenaga Thinkpad X250 salah satunya dengan dimensi yang lebih tipis, bobot lebih ringan, dan daya tahan baterai lebih panjang dibanding para pendahulunya. Kalau zaman dulu laptop 12,5 inch mempunyai keterbatasan penyimpanan dan daya tahan baterai, beda halnya dengan Lenovo X250 ini, karena Lenovo Thinkpad X250 sudah didukung dengan dua buah slot baterai serta dua buah slot media penyimpanan. LENOVO THINKPAD X250 i5 / RAM 8GB / SSD 240GB / 12.5\" Refurbished 369,000 409,000 579,000', 1593877290),
(86, 'Gaming', 'MSI', 'GT75 Titan 8SG', 'I7', '16GB', '512GB SSD', '15,6', 'NVIDIA® GeForce RTX™ 2080 with 8GB GDDR6', 300000, 0, '386150', 3, 'joss', 1593886394),
(87, 'Gaming', 'Dell', 'Alienware', 'I7', '16GB', '1TB SSD', '15 inch', 'NVIDIA GeForce GTX 1650 4GB GDDR6', 400000, 0, '615132', 4, 'Dell Alienware 15 R3 ini memiliki prosesor Quad-core i7 up to 3.5 GHz Turbo, NVIDIA GeForce GTX1060 6GB GDDR5 dan RAM 16GB serta ROM 1TB HDD + 128GB SSD.', 1594100966),
(88, 'Gaming', 'Asus ', 'ROG TUF 15', 'Ryzen 7', '8GB ', '256GB SSD', '15,6inch', 'Radeon 8', 250000, 0, '390646', 3, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur voluptatibus animi nemo voluptatem. Itaque nam maiores expedita unde fugiat nostrum consequatur, corporis magni illum reiciendis, dolor voluptatibus minima assumenda commodi ipsa quis eaque ullam doloremque sapiente, consequuntur mollitia error sit ducimus impedit! Ab, voluptatibus repudiandae! Odit cupiditate incidunt esse, pariatur sequi facilis dolore voluptates atque adipisci a tempore. Nobis quam nulla harum quaerat dignissimos qui veritatis ab hic inventore ut. Iusto aut ipsum odit! Hic, rerum architecto magni recusandae delectus quos, iste nemo, eaque accusantium necessitatibus doloribus sint? Nobis ipsum provident earum minima veniam modi repellendus quasi ducimus, eligendi quod!', 1594101725),
(89, 'Gaming', 'Lenovo', 'Legion 5', 'Ryzen 7', '16GB', '512GB SSD', '15,6inch', 'Radeon 8 ', 345000, 0, '670910', 5, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur voluptatibus animi nemo voluptatem. Itaque nam maiores expedita unde fugiat nostrum consequatur, corporis magni illum reiciendis, dolor voluptatibus minima assumenda commodi ipsa quis eaque ullam doloremque sapiente, consequuntur mollitia error sit ducimus impedit! Ab, voluptatibus repudiandae! Odit cupiditate incidunt esse, pariatur sequi facilis dolore voluptates atque adipisci a tempore. Nobis quam nulla harum quaerat dignissimos qui veritatis ab hic inventore ut. Iusto aut ipsum odit! Hic, rerum architecto magni recusandae delectus quos, iste nemo, eaque accusantium necessitatibus doloribus sint? Nobis ipsum provident earum minima veniam modi repellendus quasi ducimus, eligendi quod!', 1594101833),
(90, 'Multimedia', 'Lenovo', 'S340', 'I5', '8GB ', '128GB', '14 inch', 'NVDA', 129000, 0, '86582', 10, 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero dolor quis quia, eos sapiente nulla nemo, sunt pariatur neque dolorum reiciendis? Molestiae tempore accusantium laboriosam omnis harum aspernatur maxime? Reprehenderit, expedita id neque ut sequi distinctio pariatur dolor rem, alias enim quibusdam. Odit deserunt amet porro maxime sapiente at obcaecati eos aut officia sequi cum, rerum aliquam possimus quasi laudantium veniam quisquam vitae doloribus praesentium hic! Sapiente aliquam ut voluptas, delectus vero corporis sint non officiis illum quibusdam voluptatum dolorem velit, ipsum provident, dolor earum deleniti quae optio repellat nam nostrum asperiores eum cumque quam. Molestias reiciendis vero obcaecati corrupti.', 1594104255),
(91, 'Ultrabook', 'Asus', 'A407UA-BV319T', 'Ryzen 3', '8GB ', '256GB SSD', '14 inch', 'Radeon 8', 160000, 0, '297866', 11, 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero dolor quis quia, eos sapiente nulla nemo, sunt pariatur neque dolorum reiciendis? Molestiae tempore accusantium laboriosam omnis harum aspernatur maxime? Reprehenderit, expedita id neque ut sequi distinctio pariatur dolor rem, alias enim quibusdam. Odit deserunt amet porro maxime sapiente at obcaecati eos aut officia sequi cum, rerum aliquam possimus quasi laudantium veniam quisquam vitae doloribus praesentium hic! Sapiente aliquam ut voluptas, delectus vero corporis sint non officiis illum quibusdam voluptatum dolorem velit, ipsum provident, dolor earum deleniti quae optio repellat nam nostrum asperiores eum cumque quam. Molestias reiciendis vero obcaecati corrupti.', 1594104382),
(92, 'Multimedia', 'Dell', 'jahsjahs', 'i3', '4GB', '128GB SSD', '14 inch', 'Intel UHD 620', 120000, 0, '446030', 4, 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero dolor quis quia, eos sapiente nulla nemo, sunt pariatur neque dolorum reiciendis? Molestiae tempore accusantium laboriosam omnis harum aspernatur maxime? Reprehenderit, expedita id neque ut sequi distinctio pariatur dolor rem, alias enim quibusdam. Odit deserunt amet porro maxime sapiente at obcaecati eos aut officia sequi cum, rerum aliquam possimus quasi laudantium veniam quisquam vitae doloribus praesentium hic! Sapiente aliquam ut voluptas, delectus vero corporis sint non officiis illum quibusdam voluptatum dolorem velit, ipsum provident, dolor earum deleniti quae optio repellat nam nostrum asperiores eum cumque quam. Molestias reiciendis vero obcaecati corrupti.', 1594104455),
(93, 'Multimedia', 'Lenovo ', 'IP320–14IKB', 'I7', '16GB', '256GB SSD', '14 inch', 'Intel UHD 620', 204000, 0, '545413', 16, 'lorem\r\nLorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus harum quasi nisi reprehenderit eos inventore iste, ducimus unde quidem facilis ratione voluptatum quaerat cumque aut porro itaque consequuntur vero vel exercitationem id sit. Aperiam inventore delectus est similique adipisci ea debitis. Ab molestias non ad commodi cumque quidem est, culpa fuga ut perferendis? At, nemo! Commodi voluptatum possimus omnis provident officiis officia eveniet, facere dolores exercitationem hic molestiae libero nam distinctio voluptas recusandae. Earum nobis provident laudantium, quasi reiciendis dignissimos temporibus, repellat tempora dolorum quas, suscipit distinctio! Culpa cum animi, beatae eaque dolor dolorem incidunt, quasi necessitatibus, officiis praesentium repellat?', 1594104785),
(95, 'Ultrabook', 'HP', 'Elite Dragonfly', 'i5', '16GB', '256GB SSD', '14 inch', 'Intel HD GRAPHICS 5500', 160000, 0, '369564', 8, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi commodi provident doloremque. Mollitia quisquam, fugiat ipsa fuga perferendis, ea officiis quo quibusdam impedit dolore iure omnis nulla saepe tempora excepturi dicta illo praesentium alias et labore laudantium voluptates in. Repudiandae corrupti saepe eveniet placeat esse dolorum suscipit quos maiores repellendus quo expedita aperiam accusamus asperiores, odio beatae, vero laborum modi laboriosam nobis possimus cumque magni? Odio amet cumque nisi doloribus dolor nobis. Perspiciatis, cum dolore et facilis eum asperiores aliquid repudiandae repellat quo quia sapiente quaerat vitae fugit exercitationem corrupti. Nesciunt id at, tenetur reprehenderit officiis iure! Accusantium, maiores sapiente?', 1594108097),
(96, 'Ultrabook', 'Dell', 'XPS 13', 'i5', '16GB', '512GB SSD', '14 inch', 'NVIDIA® GeForce RTX™ 2080 with 8GB GDDR6', 175000, 0, '610524', 10, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nostrum aut consequuntur veritatis earum odit nulla doloremque illo animi sit commodi tenetur sunt, exercitationem rerum omnis, suscipit, unde esse? Cumque delectus, eum sequi quae voluptatem atque commodi, voluptate sit perspiciatis quas laboriosam dicta voluptatibus aut ut nesciunt possimus, asperiores similique accusamus. Dolorem sapiente laborum ratione, debitis minus cumque culpa quia adipisci ipsam et enim reprehenderit rem temporibus saepe dolorum earum veritatis dicta cupiditate? Porro optio beatae aperiam similique pariatur suscipit veniam enim? Quam voluptate velit, atque asperiores, fugiat voluptas ipsum id, iste illo adipisci reprehenderit quidem eum culpa eos ratione illum aspernatur quibusdam! Harum facilis modi esse pariatur autem aliquam impedit culpa commodi ad obcaecati nulla ratione consectetur, quisquam hic dolores.', 1594108207),
(97, 'Ultrabook', 'Asus', 'A407UA-BV319T', 'I7', '4GB', '1TB SSD', '14 inch', 'Intel UHD 620', 146000, 0, '525429', 16, 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laudantium laboriosam quo distinctio, rerum error quis tenetur harum aperiam quaerat, officia magni iusto facere quas ullam pariatur labore cumque repellendus! Excepturi veritatis, labore voluptatibus soluta eaque, distinctio earum blanditiis, at nulla autem eos. Sit debitis eos mollitia natus suscipit voluptatibus veritatis. Praesentium unde exercitationem quae eveniet, suscipit ullam in id nisi cupiditate enim voluptatum ipsa et, commodi eos quaerat magnam aut assumenda fugiat modi tenetur illo! Velit aliquid, totam nihil aliquam assumenda eos, dolorem asperiores ipsam vitae voluptate nemo explicabo consequatur at fuga, sunt fugiat ex placeat maxime? Quia, illum nemo.', 1594109227),
(99, 'Bisnis', 'hjh', 'jh', 'h', 'jh', 'jhjh', 'jhjh', 'jhjhj', 1200, 0, '893749', 6, 'ds', 1594274093),
(101, 'Bisnis', 'kjhHjHJh', 'k', 'j', 'kj', 'kj', 'jk', 'k', 198291, 0, '27978', 0, 'ds', 1594274746),
(102, 'Bisnis', 'ih', 'hjhjh', 'jh', 'jh', 'jh', 'jhjh', 'jh', 61762, 0, '439291', 7, 'dsdsd', 1594274775);

-- --------------------------------------------------------

--
-- Table structure for table `multiple`
--

CREATE TABLE `multiple` (
  `id` int(11) NOT NULL,
  `id_upload` int(100) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `sampul` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `multiple`
--

INSERT INTO `multiple` (`id`, `id_upload`, `gambar`, `sampul`) VALUES
(234, 92020, 'lenovo-laptop-legion-ideapad-3-gaming-gallery-7.jpg', 1),
(235, 92020, 'lenovo-laptop-legion-ideapad-3-gaming-gallery-5.jpg', 0),
(236, 92020, 'lenovo-laptop-legion-ideapad-3-gaming-gallery-3.jpg', 0),
(237, 950335, 'lenovo-laptop-legion-ideapad-3-gaming-gallery-5.jpg', 1),
(238, 950335, 'lenovo-thinkpad-yoga-l380-8350u-8gb-256gb-touch-win10pro-black.jpg', 0),
(239, 409205, 'omen1.jpg', 1),
(240, 409205, 'omen2.jpg', 0),
(241, 216495, 'ASUS_VivoBook_A407UB_L_1.jpg', 1),
(242, 216495, 'lenovo-laptop-legion-ideapad-3-gaming-gallery-1.jpg', 0),
(243, 386150, 'msi1.jpg', 1),
(244, 386150, 'msi2.jpg', 0),
(245, 615132, 'Dell_Alienware_15_R3_L_1.webp', 1),
(246, 615132, 'Dell_Alienware_15_R3_L_2.webp', 0),
(247, 239643, '', 1),
(248, 390646, 'tuf2.jpg', 1),
(249, 390646, 'tuf3.jpg', 0),
(250, 670910, 'Lenovo_Legion_5i_L_1.jpg', 1),
(251, 670910, 'Lenovo-Legion-5.jpg', 0),
(252, 670910, 'lenovo-laptop-legion-5-15-amd-series-hero.png', 0),
(253, 86582, 'lenovo-laptop-legion-ideapad-3-gaming-gallery-1.jpg', 1),
(254, 86582, 'lenovo-laptop-legion-ideapad-3-gaming-gallery-3.jpg', 0),
(255, 297866, '5bebd22d919f6.jpg', 1),
(256, 297866, 'asus-a407ma-bv001t-intel-n4000-4gb-ddr4-1tb-14-inch-windows-10-gray-1.jpg', 0),
(257, 297866, 'ASUS_VivoBook_A407UB_L_1 (1).jpg', 0),
(258, 446030, 'lenovo-laptop-legion-ideapad-3-gaming-gallery-7.jpg', 1),
(259, 446030, 'lenovo-laptop-legion-ideapad-3-gaming-gallery-5.jpg', 0),
(260, 545413, 'download (2).jpg', 1),
(261, 545413, 'download (1).jpg', 0),
(262, 545413, 'Lenovo-Ideapad-320.jpg', 0),
(263, 647318, 'download (3).jpg', 1),
(264, 647318, 'Dell_G3_15_L_1.jpg', 0),
(265, 647318, 'download (2).jpg', 0),
(266, 369564, 'download (5).jpg', 1),
(267, 369564, 'download (4).jpg', 0),
(268, 369564, '5df89c7143e15.jpg', 0),
(269, 610524, '10888863_871572d3-28d7-4e59-a745-c8a130372eb0_1566_882.jpg', 1),
(270, 610524, 'download (6).jpg', 0),
(271, 610524, '71fxAH5JnHL._AC_SL1496_.jpg', 0),
(272, 525429, 'download (3).jpg', 1),
(273, 525429, 'Dell_G3_15_L_1.jpg', 0),
(274, 726748, '10888863_871572d3-28d7-4e59-a745-c8a130372eb0_1566_882.jpg', 1),
(275, 726748, 'download (6).jpg', 0),
(276, 726748, '71fxAH5JnHL._AC_SL1496_.jpg', 0),
(277, 893749, 'download (4).jpg', 1),
(278, 893749, '5df89c7143e15.jpg', 0),
(279, 893749, 'download (3).jpg', 0),
(280, 786356, 'Dell_G3_15_L_1.jpg', 1),
(281, 786356, 'download (2).jpg', 0),
(282, 786356, 'download (1).jpg', 0),
(283, 27978, 'Lenovo_Legion_5i_L_1.jpg', 1),
(284, 27978, 'Lenovo-Legion-5.jpg', 0),
(285, 27978, 'lenovo-laptop-legion-5-15-amd-series-hero.png', 0),
(286, 439291, 'download (6).jpg', 1),
(287, 439291, '71fxAH5JnHL._AC_SL1496_.jpg', 0),
(288, 439291, 'download (5).jpg', 0),
(289, 532227, '1846704099.jpg', 1),
(290, 532227, 'Acer_Predator_Helios_500_L_1.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `rental`
--

CREATE TABLE `rental` (
  `id_rental` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `tgl_rental` int(11) NOT NULL,
  `tgl_kembali` int(11) NOT NULL,
  `tgl_pengembalian` int(11) NOT NULL,
  `status_pengembalian` varchar(50) NOT NULL,
  `status_rental` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `role_id` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `role_id`, `nama`) VALUES
(1, '1', 'Owner'),
(2, '2', 'Admin'),
(3, '3', 'Customer');

-- --------------------------------------------------------

--
-- Table structure for table `tipe`
--

CREATE TABLE `tipe` (
  `id_tipe` int(11) NOT NULL,
  `kode_tipe` varchar(128) NOT NULL,
  `nama_tipe` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tipe`
--

INSERT INTO `tipe` (`id_tipe`, `kode_tipe`, `nama_tipe`) VALUES
(1, 'GMG', 'Gaming'),
(2, 'NTB', 'Netbook'),
(3, 'STD', 'Standar'),
(4, 'UTB', 'Ultrabook'),
(5, 'HBD', 'Hybrid '),
(6, 'BNS', 'Bisnis'),
(7, 'MTM', 'Multimedia');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_rental` int(11) NOT NULL,
  `customer` varchar(100) NOT NULL,
  `id_laptop` int(11) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `harga` varchar(120) NOT NULL,
  `denda` varchar(120) NOT NULL,
  `jumlah_pinjam` int(100) NOT NULL,
  `total` int(100) NOT NULL,
  `tgl_pengembalian` date NOT NULL,
  `status_pengembalian` varchar(128) NOT NULL,
  `status_rental` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_rental`, `customer`, `id_laptop`, `tgl_pinjam`, `tgl_kembali`, `harga`, `denda`, `jumlah_pinjam`, `total`, `tgl_pengembalian`, `status_pengembalian`, `status_rental`) VALUES
(4, 'linda@yahoo.com', 82, '2020-07-22', '2020-07-24', '17857.142857143', '27000', 5, 178571, '0000-00-00', '0', '0'),
(5, 'linda@yahoo.com', 88, '2020-07-24', '2020-07-31', '35714.285714286', '27000', 3, 750000, '0000-00-00', '0', '0'),
(6, 'linda@yahoo.com', 89, '2020-07-25', '2020-07-31', '49285.714285714', '27000', 5, 1478571, '0000-00-00', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_customer` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `kelamin` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `role_id` int(11) NOT NULL,
  `aktivasi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_customer`, `nama`, `email`, `kelamin`, `password`, `role_id`, `aktivasi`) VALUES
(1, 'Alvian Nugrohoo', 'admin@gmail.com', 'Laki-laki', '123', 1, 1),
(7, 'Iwang Pradana Prasangka', 'iwang@gmail.com', 'Laki-laki', '123', 2, 1),
(8, 'Linda Tri Astuti', 'linda@yahoo.com', 'Laki-laki', 'linda', 3, 1),
(9, 'Agil Rahmadi', 'agil@gmail.com', 'laki-laki', '123', 3, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `laptop`
--
ALTER TABLE `laptop`
  ADD PRIMARY KEY (`id_laptop`);

--
-- Indexes for table `multiple`
--
ALTER TABLE `multiple`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rental`
--
ALTER TABLE `rental`
  ADD PRIMARY KEY (`id_rental`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tipe`
--
ALTER TABLE `tipe`
  ADD PRIMARY KEY (`id_tipe`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_rental`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_customer`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `laptop`
--
ALTER TABLE `laptop`
  MODIFY `id_laptop` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `multiple`
--
ALTER TABLE `multiple`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=291;

--
-- AUTO_INCREMENT for table `rental`
--
ALTER TABLE `rental`
  MODIFY `id_rental` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tipe`
--
ALTER TABLE `tipe`
  MODIFY `id_tipe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_rental` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
