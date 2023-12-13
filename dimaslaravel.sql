-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2023 at 04:29 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dimaslaravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(6, '2014_10_12_000000_create_users_table', 1),
(7, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(10, '2023_12_13_002836_create_posts_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `image`, `title`, `content`, `created_at`, `updated_at`) VALUES
(1, 'k8NZqHDPb6AbLYg4r06NDI0O6Gn79kl4lQjCC1Sx.jpg', 'Sweeter', '<p>Sweater Stone Island adalah jenis pakaian rajutan (sweater) yang diproduksi oleh merek Stone Island. Stone Island dikenal karena fokusnya pada teknologi dan inovasi dalam desain pakaian kasual dan sporty. Sweater mereka sering menggunakan bahan berkualitas tinggi dan teknologi produksi yang canggih.\r\n\r\nCiri khas sweater Stone Island mungkin melibatkan pemilihan bahan yang inovatif, teknik pewarnaan khusus, dan desain yang modern. Mereka dapat menggunakan berbagai jenis serat dan tekstil yang dirancang untuk memberikan kenyamanan, daya tahan, dan gaya yang unik.\r\n\r\nSweater Stone Island sering dicari oleh mereka yang menghargai kualitas konstruksi pakaian dan ingin mengenakan sesuatu yang khas dan berkualitas tinggi. Produk-produk Stone Island, termasuk sweater, sering menjadi simbol gaya dan inovasi dalam dunia fashion.\r\n\r\nJika ada informasi lebih spesifik yang Anda cari atau pertanyaan tambahan, beri tahu saya, dan saya akan berusaha membantu sebaik mungkin.</p>', '2023-12-12 17:36:57', '2023-12-12 19:46:08'),
(2, 'QDikaXoKEKdr84zWTKfC9y1dU06K7ClIyu7xWTqi.jpg', 'Rompi', '<p>ompi Stone Island adalah jenis pakaian rompi (vest) yang diproduksi oleh merek Stone Island. Stone Island dikenal karena inovasi dan desain teknis mereka dalam pakaian casual dan sporty. Rompi atau vest Stone Island sering mencerminkan filosofi merek tersebut dengan menggunakan bahan berkualitas tinggi, teknologi pewarnaan canggih, dan desain yang fokus pada kenyamanan dan gaya.</p>\r\n\r\n<p>Beberapa ciri khas rompi Stone Island mungkin melibatkan:</p>\r\n\r\n<ol>\r\n	<li>\r\n	<p><strong>Bahan Teknis:</strong> Penggunaan bahan teknis dan inovatif yang dirancang untuk memberikan keunggulan kinerja, termasuk daya tahan, ketahanan air, dan isolasi.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Teknologi Pewarnaan Khusus:</strong> Stone Island sering menggunakan teknologi pewarnaan khusus untuk mencapai efek warna dan tekstur yang unik. Pewarnaan dapat melibatkan teknik dyeing atau garment dyeing.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Logo Compass yang Dapat Dilepas:</strong> Salah satu ciri khas merek Stone Island adalah logo kompas yang dapat dilepas di lengan pakaian. Logo ini merupakan identitas merek yang mudah</p>\r\n	</li>\r\n</ol>\r\ndikenali.\r\n\r\nDesain Modern: Rompi Stone Island umumnya memiliki desain yang modern dan kontemporer. Potongan yang trendi dan perhatian pada detail desain sering kali menjadi bagian dari produk-produk Stone Island.\r\n\r\nFungsionalitas: Rompi Stone Island mungkin dirancang dengan fungsionalitas tertentu, seperti saku-saku yang dapat berguna dan fitur-fitur teknis lainnya.\r\n\r\nSeperti produk-produk Stone Island lainnya, rompi mereka sering dicari oleh individu yang menghargai kualitas tinggi, inovasi teknis, dan estetika modern dalam pakaian. Jika Anda tertarik dengan rompi Stone Island tertentu atau ingin mengetahui lebih lanjut, disarankan untuk mengunjungi situs resmi Stone Island atau toko resmi yang menjual produk mereka.', '2023-12-12 19:31:19', '2023-12-12 19:45:53'),
(3, 'SW5Ms6MINU5jaPeoEuVg31KsvdJdD57M2r6n6X44.jpg', 'Jacket', '<p>Jacket Stone Island adalah jenis jaket yang diproduksi oleh merek Stone Island. Stone Island terkenal dengan desain pakaian kasual dan sporty yang dikombinasikan dengan teknologi dan inovasi tinggi. Jacket mereka sering menjadi ikon merek ini dan mencerminkan filosofi Stone Island dalam penggunaan bahan berkualitas tinggi, teknologi pewarnaan canggih, dan perhatian terhadap detail teknis.</p>\r\n\r\n<p>Beberapa ciri khas dari jacket Stone Island mungkin mencakup:</p>\r\n\r\n<ol>\r\n	<li>\r\n	<p><strong>Bahan Teknis:</strong> Stone Island sering menggunakan bahan teknis dan inovatif, seperti nylon, GORE-TEX, atau bahan teknis lainnya. Bahan ini dirancang untuk memberikan performa tinggi, termasuk ketahanan air, isolasi, dan daya tahan.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Teknologi Pewarnaan:</strong> Stone Island dikenal karena teknologi pewarnaan khususnya. Mereka mungkin menggunakan teknik dyeing atau garment dyeing untuk mencapai efek warna yang unik dan tekstur yang khas.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Logo Compass yang Dapat Dilepas:</strong> Logo kompas Stone Island yang dapat dilepas di lengan sering kali menjadi ciri khas jacket mereka. Logo ini merupakan identitas merek yang mudah dikenali.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Desain Ergonomis:</strong> Jaket Stone Island sering dirancang dengan desain ergonomis untuk memberikan kenyamanan maksimal dan mobilitas.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Fungsionalitas:</strong> Stone Island sering menonjolkan fungsionalitas dalam desain jaket mereka. Hal ini bisa mencakup banyak saku, detil teknis, dan fitur-fitur khusus lainnya.</p>\r\n	</li>\r\n</ol>\r\n\r\n<p>Jaket Stone Island biasanya dicari oleh pecinta mode yang menghargai perpaduan antara desain modern dan teknologi inovatif dalam pakaian mereka. Jika Anda tertarik dengan jaket Stone Island tertentu atau ingin mengetahui lebih lanjut, disarankan untuk mengunjungi situs resmi Stone Island atau toko resmi yang menjual produk mereka.</p>', '2023-12-12 19:32:45', '2023-12-12 19:45:41'),
(4, 'jGLkS3EbApCI11BY7SaFFu4mCwtf8l65vuxLq3ig.jpg', 'Hoodie', '<p>Hoodie Stone Island adalah jenis hoodie atau jaket berkapucu yang diproduksi oleh merek Stone Island. Stone Island dikenal dengan pendekatan inovatif dan teknisnya terhadap desain pakaian, dan hoodie mereka sering mencerminkan ciri khas merek tersebut. Berikut adalah beberapa ciri umum dari Hoodie Stone Island:</p>\r\n\r\n<p>1. **Bahan Teknis:** Hoodie Stone Island sering kali dibuat dari bahan teknis dan inovatif, seperti katun berkualitas tinggi, fleece teknis, atau campuran bahan teknis lainnya. Pemilihan bahan ini dapat memberikan kenyamanan, daya tahan, dan sifat teknis lainnya.</p>\r\n\r\n<p>2. **Teknologi Pewarnaan Khusus:** Stone Island terkenal dengan teknologi pewarnaan khusus mereka. Pewarnaan bisa melibatkan teknik dyeing atau garment dyeing untuk mencapai warna dan tekstur yang unik.</p>\r\n\r\n<p>3. **Logo Compass yang Dapat Dilepas:** Seperti halnya produk Stone Island lainnya, hoodie mereka sering dilengkapi dengan logo kompas yang dapat dilepas di lengan. Logo ini merupakan salah satu ciri khas merek ini.</p>\r\n\r\n<p>4. **Desain Modern dan Ergonomis:** Hoodie Stone Island umumnya dirancang dengan desain yang modern dan ergonomis untuk memberikan kenyamanan dan gaya. Potongan yang trendi dan perhatian terhadap detail desain dapat menjadi bagian dari hoodie mereka.</p>\r\n\r\n<p>5. **Fungsionalitas:** Hoodie Stone Island mungkin memiliki fitur fungsional, seperti saku-saku yang dirancang dengan baik, hoddie yang dapat disesuaikan, dan elemen teknis lainnya yang membuatnya berguna sekaligus modis.</p>\r\n\r\n<p>Hoodie Stone Island sering dicari oleh mereka yang menghargai kombinasi antara gaya streetwear yang trendi dan unsur teknis dalam pakaian. Jika Anda tertarik dengan Hoodie Stone Island tertentu atau ingin mengetahui lebih lanjut, disarankan untuk mengunjungi situs resmi Stone Island atau toko resmi yang menjual produk mereka.</p>', '2023-12-12 19:52:55', '2023-12-12 19:52:55');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Dimas wahyu', 'syahputrajgj@gmail.com', NULL, '$2y$12$hSoawBzxKpWoU1VF9qJlcOJQOrVU0NEA3xbnrstrtzJpyGU62PaLe', NULL, '2023-12-12 17:32:26', '2023-12-12 17:32:26'),
(2, 'Saputra', 'hsyiahs65@gmail.com', NULL, '$2y$12$agY5py8dRPJp3hCRSvcWqu2tyvs./QhmW//xIrM4hbVU35VxoaS92', NULL, '2023-12-12 19:52:13', '2023-12-12 19:52:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
