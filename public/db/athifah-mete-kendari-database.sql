-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2021 at 08:25 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `athifah-mete-kendari-database`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kategoris`
--

CREATE TABLE `kategoris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategoris`
--

INSERT INTO `kategoris` (`id`, `nama_kategori`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Makanan Khas Sultra', 'makanan-khas-sultra', '2021-11-24 10:38:55', '2021-11-24 10:38:55'),
(2, 'Kerajinan Khas Sultra', 'kerajinan-khas-sultra', '2021-11-24 10:38:55', '2021-11-24 10:38:55');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_11_13_015136_create_produk_jualans_table', 1),
(6, '2021_11_13_194848_create_kategoris_table', 1),
(7, '2021_11_24_011011_add_is_admin_to_users_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
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
-- Table structure for table `produk_jualans`
--

CREATE TABLE `produk_jualans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategori_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `nama_produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ukuran` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `posted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `produk_jualans`
--

INSERT INTO `produk_jualans` (`id`, `kategori_id`, `user_id`, `nama_produk`, `slug`, `image`, `excerpt`, `ukuran`, `harga`, `deskripsi`, `posted_at`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 'Kain Serimbit Super', 'kain-serimbit-super', NULL, NULL, NULL, '800.000', NULL, NULL, '2021-11-24 10:38:55', '2021-11-24 10:38:55'),
(2, 2, 1, 'Kain Serimbit Super + Dompet', 'kain-serimbit-super-plus-dompet', 'produk-images/at6HObgv2AFNUo8iKaCWm2TrOFQPfOKmyT0lcSED.jpg', '', NULL, '9.000.000', NULL, NULL, '2021-11-24 10:38:55', '2021-11-24 10:50:16'),
(3, 2, 1, 'Kain Sarung Kendari', 'kain-sarung-kendari', NULL, NULL, NULL, '80.000', NULL, NULL, '2021-11-24 10:38:55', '2021-11-24 10:38:55'),
(4, 2, 1, 'Kain Double Tenun Tolaki', 'kain-double-tenun-tolaki', NULL, NULL, NULL, '100.000', NULL, NULL, '2021-11-24 10:38:55', '2021-11-24 10:38:55'),
(5, 2, 1, 'Kain Double Tenun Buton', 'kain-double-tenun-buton', NULL, NULL, NULL, '100.000', NULL, NULL, '2021-11-24 10:38:56', '2021-11-24 10:38:56'),
(6, 2, 1, 'Kain Double Tenun Bombana', 'kain-double-tenun-bombana', NULL, NULL, NULL, '140.000', NULL, NULL, '2021-11-24 10:38:56', '2021-11-24 10:38:56'),
(7, 2, 1, 'Kain Obama Kendari', 'kain-obama-kendari', NULL, NULL, NULL, '235.000', NULL, NULL, '2021-11-24 10:38:56', '2021-11-24 10:38:56'),
(8, 2, 1, 'Kain Songket Tolaki', 'kain-songket-tolaki', 'produk-images/g1UfvC6qv4EZTywGiNQ8jyi5BPgk7bvXWQ93Zb1T.jpg', '', NULL, '250.000', NULL, NULL, '2021-11-24 10:38:56', '2021-11-24 10:50:52'),
(9, 2, 1, 'Kain Songket Tolaki Modern', 'kain-songket-tolaki-modern', 'produk-images/dun0FYctX0klJ9TH66Dg41nGJ5qAqJxvsH73yeYn.jpg', '', NULL, '250.000', NULL, NULL, '2021-11-24 10:38:56', '2021-11-24 10:50:35'),
(10, 2, 1, 'Gantungan Kunci Kerang Motif SULTRA', 'gantungan-kunci-kerang-motif-sultra', NULL, 'Tersedia dalam 2 bahan', NULL, '15.000', '<p>Tersedia dalam 2 bahan</p><ul><li>- Kaca (fiber) Rp 10.000,-</li><li>- kerang Rp 15.000,-</li><ul>', NULL, '2021-11-24 10:38:56', '2021-11-24 10:38:56'),
(11, 2, 1, 'Kaos Cotton Combed 24S', 'kaos-cotton-combed-24s', NULL, NULL, NULL, '90.000', NULL, NULL, '2021-11-24 10:38:56', '2021-11-24 10:38:56'),
(12, 2, 1, 'Kaos Dewasa', 'kaos-dewasa', NULL, NULL, NULL, '80.000', NULL, NULL, '2021-11-24 10:38:56', '2021-11-24 10:38:56'),
(13, 2, 1, 'Kaos Sweater', 'kaos-sweater', NULL, NULL, NULL, '145.000', NULL, NULL, '2021-11-24 10:38:56', '2021-11-24 10:38:56'),
(14, 1, 1, 'Pia Mete', 'pia-mete', NULL, NULL, '200gr', '14.000', '<br><p>Komposisi : Minyak nabati,Kacang Hijau, Telur, Terigu.</p><p>Ukuran lain yang tersedia: </p><ul><li>200gr RP.14.000</li><li>Dus RP.33.000</li><li>Toples RP.39.000</li>', NULL, '2021-11-24 10:38:56', '2021-11-24 10:38:56'),
(15, 1, 1, 'Kue Baruasa Mete Gula Merah', 'kue-baruasa-mete-gula-merah', NULL, NULL, '180gr', '15.000', '<br><p>Ukuran lain yang tersedia: </p><ul><li>640gr RP.29.000</li><li>1kg RP.40.000</li>', NULL, '2021-11-24 10:38:56', '2021-11-24 10:38:56'),
(16, 1, 1, 'Kue Baruasa', 'kue-baruasa', NULL, NULL, '200gr', '14.000', '<br><p>Ukuran lain yang tersedia: </p><ul><li>200gr RP.14.000</li><li>560gr RP.24.000</li><li>1kg RP.32.000</li>', NULL, '2021-11-24 10:38:56', '2021-11-24 10:38:56'),
(17, 1, 1, 'Kue Brownies Mete', 'kue-brownies-mete', NULL, NULL, 'Kecil', '17.000', '<br><p>Ukuran lain yang tersedia: </p><ul><li>Ukuran Kecil/plastik mika RP.17.000</li><li>Ukuran Dus RP.39.000</li>', NULL, '2021-11-24 10:38:56', '2021-11-24 10:38:56'),
(18, 1, 1, 'Bagea Mete', 'bagea-mete', NULL, NULL, 'Kecil', '10.000', '<br><p>Ukuran lain yang tersedia: </p><ul><li>Ukuran Kecil RP.10.000</li><li>Ukuran Sedang RP.26.000</li><li>Ukuran Besar RP.36.000</li>', NULL, '2021-11-24 10:38:56', '2021-11-24 10:38:56'),
(19, 1, 1, 'Kopi Kawahaku', 'kopi-kawahaku', NULL, NULL, NULL, '32.000', NULL, NULL, '2021-11-24 10:38:56', '2021-11-24 10:38:56'),
(20, 1, 1, 'Kopi Tolaki', 'kopi-tolaki', NULL, NULL, NULL, '23.000', NULL, NULL, '2021-11-24 10:38:56', '2021-11-24 10:38:56'),
(21, 1, 1, 'Chips SAGUKU', 'chips-saguku', 'produk-images/YwQvyDdIqUxcckrGFZxNo5ESzUvsAknmdraQq8RC.jpg', 'Cemilan Kh...', NULL, '20.000', '<div>Cemilan Khas Sulawesi Tenggara yang terbuat dari olaham SAGU dan DAUN KELOR.<br><br></div>', NULL, '2021-11-24 10:38:56', '2021-11-24 10:54:59'),
(22, 1, 1, 'Coklat Anoa Kendari', 'coklat-anoa-kendari', 'produk-images/85vI4biTUd73T5TJJez6xDxOr2ONOB8tkxOeO1ug.jpg', 'Ukuran lai...', 'Kecil', '20.000', '<div>Ukuran lain yang tersedia:&nbsp;<br><br></div><ul><li>Cokelat Anoa Kecil RP.15.000</li><li>Cokelat Anoa Besar RP.30.000</li></ul>', NULL, '2021-11-24 10:38:56', '2021-11-24 10:52:21'),
(23, 1, 1, 'Crispy Brownies SAGUKU', 'crispy-brownies-saguku', 'produk-images/pSc0cp72LKzOBRS8lnA0bt6b3l7kA6quPpUyKQID.jpg', 'Cemilan Kh...', '70gr', '20.000', '<div>Cemilan Khas Sulewesi tenggara yang terbuat dari olahan SAGU, METE, dan COKLAT.<br><br></div>', NULL, '2021-11-24 10:38:57', '2021-11-24 10:53:17'),
(24, 1, 1, 'Madu Latoma SULTRA', 'madu-latoma-sultra', 'produk-images/A6xgTJpUG2kpCC342OIKm7vT0jANasycmhlDuIhJ.jpg', 'Ukuran lai...', '100ml', '35.000', '<div>Ukuran lain yang tersedia dan harga masing-masing:<br><br></div><ul><li>100ml Rp 35.000,-</li><li>270ml Rp 75.000,-</li><li>400ml Rp 110.000,-</li><li>570ml Rp 150.000,-</li></ul>', NULL, '2021-11-24 10:38:57', '2021-11-24 10:52:44'),
(25, 1, 1, 'Teri Kacang Mete', 'teri-kacang-mete', NULL, NULL, NULL, '37.000', NULL, NULL, '2021-11-24 10:38:57', '2021-11-24 10:38:57'),
(26, 1, 1, 'Sambal Teri Asap Kaholeo', 'sambal-teri-asap-kaholeo', NULL, NULL, NULL, '45.000', NULL, NULL, '2021-11-24 10:38:57', '2021-11-24 10:38:57'),
(27, 1, 1, 'Terasi Kendari Bubuk', 'terasi-kendari-bubuk', NULL, NULL, '170 gr', '17.000', NULL, NULL, '2021-11-24 10:38:57', '2021-11-24 10:38:57'),
(28, 1, 1, 'Mete Paket Biru Isi 10', 'mete-paket-biru', NULL, 'Mete goren...', NULL, '340.000', '<div>Mete goreng 5 rasa yang dibungkus menjadi 1 dalam Mete Paket Biru khas toko Athifah. Dengan kemasan yang menarik, mudah dibawa, dan berkualitas Mete Paket Biru menawarkan 5 varian mete goreng yaitu rasa asin, manis, disko, gula aren, dan bawang putih dimana dalam 1 paket mete biru setiap varian rasa terdapat 2 bungkus mete goreng. Cocok untuk menjadi buah tangan dari sulawesi tenggara.<br><br></div>', NULL, '2021-11-24 10:38:57', '2021-11-24 10:55:50'),
(29, 1, 1, 'Mete Paket Hitam Isi 5', 'mete-paket-hitam', NULL, 'Paket mete...', NULL, '215.000', '<div>Paket mete isi 5 rasa dengan varian rasa berbeda. Ada rasa Manis, Asin (original), bawang, gula aren, dan disko. Sudah di paket menjadi satu.<br><br></div>', NULL, '2021-11-24 10:38:57', '2021-11-24 10:55:28'),
(30, 1, 1, 'Teng-Teng Mete', 'teng-teng-mete', NULL, NULL, NULL, '18.000', NULL, NULL, '2021-11-24 10:38:57', '2021-11-24 10:38:57'),
(31, 1, 1, 'Beng-Beng Kendari', 'beng-beng-kendari-toples', NULL, NULL, 'Toples', '87.000', '<br><p>Ukuran lain yang tersedia dan harga masing-masing:</p><ul><li>Pita Rp 24.000,-</li><li>Toples Rp 87.000,-</li>', NULL, '2021-11-24 10:38:57', '2021-11-24 10:38:57'),
(32, 1, 1, 'Beng-Beng Mete', 'beng-beng-mete', NULL, NULL, 'Pita', '24.000', '<br><p>Ukuran lain yang tersedia dan harga masing-masing:</p><ul><li>Pita Rp 24.000,-</li><li>Toples Rp 87.000,-</li>', NULL, '2021-11-24 10:38:57', '2021-11-24 10:38:57'),
(33, 1, 1, 'Mete Mentah Super', 'mete-mentah-super', NULL, NULL, '500gr', '83.000', NULL, NULL, '2021-11-24 10:38:58', '2021-11-24 10:38:58'),
(34, 1, 1, 'Keripik Mete', 'keripik-mete', NULL, 'Tersedia r...', '200gr', '17.000', '<div>Tersedia rasa original<br><br></div><div>Ukuran lain yang tersedia dan harga masing-masing:<br><br></div><ul><li>200gr Rp 17.000,-</li><li>350gr Rp 29.000,-</li><li>500gr Rp 37.000,-</li></ul>', NULL, '2021-11-24 10:38:58', '2021-11-24 10:51:56'),
(35, 1, 1, 'Kacang Mete Panggang', 'kacang-mete-panggang', NULL, NULL, '400gr', '75.000', NULL, NULL, '2021-11-24 10:38:58', '2021-11-24 10:38:58'),
(36, 1, 1, 'Mete Goreng', 'mete-goreng', 'produk-images/Glt3qQIIsWRp19EZL08xfLRDKVuC2YgfekmcMeON.jpg', 'Tersedia d...', '150gr', '30.000', '<div>Tersedia dalam 5 varian rasa : Rasa original/asin, rasa manis, rasa gula aren dan rasa bawang.<br><br></div><div>Ukuran lain yang tersedia dan harga masing-masing:<br><br></div><ul><li>150gr Rp 30.000,-</li><li>350gr RP 70.000,-</li><li>500gr Rp 95.000,-</li></ul>', NULL, '2021-11-24 10:38:58', '2021-11-24 10:51:24'),
(37, 1, 1, 'Cokelat Mete (comet)', 'cokelat-mete-comet', 'produk-images/tQBg8E21owyKaaHUMupvh2cxB9c3AeRhoE1owtL1.jpg', 'Komposisi...', '200gr', '20.000', '<div>Komposisi : Kacang mete, kacang tanah, sereal jagung, dan coklat batang.<br><br></div><div>Ukuran lain yang tersedia dan harga masing-masing:<br><br></div><ul><li>200gr Rp 20.000,-</li><li>Saset Rp 33.000,-</li><li>Toples Rp 50.000,-</li></ul>', NULL, '2021-11-24 10:38:58', '2021-11-24 12:20:02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `is_admin`) VALUES
(1, 'Athifah Oleh-Oleh Khas Kendari', 'athifahmetekendari', 'athifahmete78@gmail.com', NULL, '$2y$10$erG3w3GVKz2lIGWZymSy2OUgnUM88znLR5onh7JbBeWU/GJF18eeS', NULL, '2021-11-24 10:38:55', '2021-11-24 10:38:55', 0);

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
-- Indexes for table `kategoris`
--
ALTER TABLE `kategoris`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kategoris_nama_kategori_unique` (`nama_kategori`),
  ADD UNIQUE KEY `kategoris_slug_unique` (`slug`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `produk_jualans`
--
ALTER TABLE `produk_jualans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `produk_jualans_slug_unique` (`slug`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
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
-- AUTO_INCREMENT for table `kategoris`
--
ALTER TABLE `kategoris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produk_jualans`
--
ALTER TABLE `produk_jualans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
