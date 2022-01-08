-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Mar 2021 pada 08.03
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pt_otto_menara`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cuti`
--

CREATE TABLE `cuti` (
  `cuti_id` bigint(20) UNSIGNED NOT NULL,
  `karyawan_id` bigint(20) UNSIGNED NOT NULL,
  `tanggal_cuti` date NOT NULL,
  `lama_cuti` int(11) NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `cuti`
--

INSERT INTO `cuti` (`cuti_id`, `karyawan_id`, `tanggal_cuti`, `lama_cuti`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 27, '2020-08-02', 2, 'Acara Keluarga', '2021-03-19 18:24:25', '2021-03-19 18:24:25'),
(2, 2, '2020-08-18', 2, 'Anak Sakit', '2021-03-19 18:24:25', '2021-03-19 18:24:25'),
(3, 1, '2020-08-19', 1, 'Nenek Sakit', '2021-03-19 18:24:25', '2021-03-19 18:24:25'),
(4, 8, '2020-08-23', 1, 'Sakit', '2021-03-19 18:24:25', '2021-03-19 18:24:25'),
(5, 10, '2020-08-29', 5, 'Menikah ', '2021-03-19 18:24:25', '2021-03-19 18:24:25'),
(6, 10, '2020-08-30', 2, 'Acara Keluarga', '2021-03-19 18:24:25', '2021-03-19 18:24:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE `karyawan` (
  `karyawan_id` bigint(20) UNSIGNED NOT NULL,
  `no_induk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tanggal_bergabung` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`karyawan_id`, `no_induk`, `nama`, `alamat`, `tanggal_lahir`, `tanggal_bergabung`, `created_at`, `updated_at`) VALUES
(1, 'IP06001', 'Agus', 'Jln Gajah Mada No 12, Surabaya', '1980-01-11', '2005-08-07', '2021-03-19 18:39:01', '2021-03-19 18:39:01'),
(2, 'IP06002', 'Amin', 'Jln Imam Bonjol No 11, Mojokerto', '1977-09-03', '2005-08-07', '2021-03-19 18:39:01', '2021-03-19 18:39:01'),
(3, 'IP06003', 'Yusuf', 'Jln A Yani Raya 15 No 14 Malang', '1973-08-09', '2006-08-07', '2021-03-19 18:39:01', '2021-03-19 18:39:01'),
(4, 'IP06004', 'Allysa', 'Jln Bungur Sari V no 166, Bandung', '1983-03-18', '2006-09-06', '2021-03-19 18:39:01', '2021-03-19 18:39:01'),
(5, 'IP06005', 'Maulana', 'Jln Candi Agung No 78 Gg 5, Jakarta', '1978-11-10', '2006-09-10', '2021-03-19 18:39:01', '2021-03-19 18:39:01'),
(6, 'IP06006', 'Agfika', 'Jogja 111', '2021-01-20', '2007-01-02', '2021-03-19 18:39:01', '2021-03-19 18:39:01'),
(7, 'IP06007', 'James', 'Jln Merpati, 8 Surabaya', '1989-03-18', '2007-04-04', '2021-03-19 18:39:01', '2021-03-19 18:39:01'),
(8, 'IP06008', 'Octavanus', 'Jln A Yani 17, 8 Surabaya', '1985-08-11', '2007-05-19', '2021-03-19 18:39:01', '2021-03-19 18:39:01'),
(9, 'IP06009', 'Nugroho', 'Jln Duren tiga 167, Jakarta Selatan', '1985-04-14', '2008-01-16', '2021-03-19 18:39:01', '2021-03-19 18:39:01'),
(10, 'IP06010', 'Raisa', 'Jln Kelapa Sawit, Jakarta Selatan', '1990-12-17', '2008-08-16', '2021-03-19 18:39:01', '2021-03-19 18:39:01'),
(27, 'KK 987654', 'Joko Susilo', 'Sleman, Jogja 123', '2020-08-12', '2021-03-24', NULL, NULL),
(28, 'WW 000001', 'Dita Paramita', 'Jogja 098', '2021-01-20', '2021-03-25', NULL, NULL),
(30, 'AB 12345678', 'Amir Sy', 'Sukolilo Pati', '2020-12-15', '2021-03-18', NULL, NULL),
(31, 'IP06001', 'valid', 'arf vfdv', '2020-11-17', '2021-03-31', NULL, NULL),
(32, 'ABC 123456klj', 'Dhoni Asmani', 'tghbr', '2021-03-10', '2021-03-30', NULL, NULL),
(33, 'IP06001', 'Syaifudin thrdyh', 'rtgbdr', '2021-03-03', '2021-03-23', NULL, NULL),
(34, 'IP06001', 'Amir Sy dfvesg', 'sfv sfgbvs', '2021-03-17', '2021-03-29', NULL, NULL),
(35, 'IP060016bnvmj vghf', 'Dhoni Asmani dfvdvg svsv', 'dfgv sgb sb', '2021-03-17', '2021-03-23', NULL, NULL),
(36, 'IP06001', 'Amir Sy rtybe', 'tgrb e', '2021-03-01', '2021-03-24', NULL, NULL),
(37, 'IP06001fgbd', 'Dhoni Asmanidrtgb vg', 'regverg', '2021-03-11', '2021-03-24', NULL, NULL),
(38, 'IP0600199999', 'amir acmad', 'dfsv va', '2021-03-12', '2021-03-30', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(13, '2014_10_12_000000_create_users_table', 1),
(14, '2014_10_12_100000_create_password_resets_table', 1),
(15, '2019_08_19_000000_create_failed_jobs_table', 1),
(16, '2020_05_12_061444_create_permission_tables', 1),
(17, '2020_11_07_221923_create_kategori_table', 1),
(18, '2020_11_07_222114_create_produk_table', 1),
(19, '2020_11_07_222158_create_pages_table', 1),
(20, '2020_11_07_222242_create_member_table', 1),
(21, '2020_11_07_222330_create_menu_table', 1),
(22, '2020_11_07_222415_create_menu_admin_table', 1),
(23, '2020_11_07_222451_create_transaksi_table', 1),
(24, '2020_11_07_222518_create_transaksi_detail_table', 1),
(25, '2020_11_11_125730_create_katagori_table', 2),
(26, '2020_11_11_130226_create_produk_table', 2),
(27, '2020_11_11_131308_create_member_table', 2),
(28, '2020_11_11_132141_create_saran_table', 2),
(29, '2020_11_12_011816_create_komentaranda_table', 2),
(30, '2020_11_12_020903_create_transaksi_table', 3),
(31, '2020_11_12_065816_create_customer_table', 4),
(32, '2020_11_12_071328_create_customer_table', 5),
(33, '2020_11_17_023824_create_provinsi_table', 6),
(34, '2020_11_17_023837_create_kota_table', 6),
(35, '2020_11_17_034307_create_kabupaten_table', 7),
(36, '2020_11_17_034633_create_order_table', 8),
(37, '2020_11_17_035457_create_orderdetail_table', 9),
(38, '2020_11_17_060614_create_transaksi_table', 10),
(39, '2020_11_17_060731_create_transaksidetail_table', 10),
(40, '2020_11_19_012059_create_transaksidetail_table', 11),
(41, '2021_03_19_063024_create_cuti_table', 12),
(42, '2021_03_20_055854_create_tablekaryawan_table', 13);

-- --------------------------------------------------------

--
-- Struktur dari tabel `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\User', 1),
(2, 'App\\User', 2),
(2, 'App\\User', 3),
(2, 'App\\User', 4),
(2, 'App\\User', 11),
(2, 'App\\User', 12),
(2, 'App\\User', 13),
(2, 'App\\User', 25),
(2, 'App\\User', 26),
(2, 'App\\User', 27),
(2, 'App\\User', 28),
(2, 'App\\User', 29),
(2, 'App\\User', 30);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2020-11-08 07:03:29', '2020-11-08 07:03:29'),
(2, 'user', 'web', '2020-11-08 07:03:29', '2020-11-08 07:03:29'),
(3, 'member', 'web', '2020-11-08 07:03:29', '2020-11-08 07:03:29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin Ku', 'admin@ku.test', NULL, '$2y$10$jMMkWlIYaRHNR1FI3pdcq.wo6P5vbX2yDaXRhkxrV891CWnnTWiwa', NULL, '2020-11-08 07:04:13', '2020-11-08 07:04:13'),
(2, 'Amirin Syaifudin', 'amirinsyaifudin6@gmail.com', NULL, '$2y$10$0DWVvtyH1gR3cXRDCRSCzuDB.OD5FcF0w6wmiT1vTOQ1mD78TgwSO', NULL, '2020-11-14 07:14:44', '2020-11-14 07:14:44'),
(3, 'malik', 'malik@gmail.com', NULL, '$2y$10$PADYOTnhXuMxqUoBQvBzl.KOypOAvH8yRI5iQy2Y0iS.v795xF3em', NULL, '2020-11-14 07:15:07', '2020-11-14 07:15:07');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cuti`
--
ALTER TABLE `cuti`
  ADD PRIMARY KEY (`cuti_id`),
  ADD KEY `karyawan_id_foreign` (`karyawan_id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`karyawan_id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indeks untuk tabel `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `cuti`
--
ALTER TABLE `cuti`
  MODIFY `cuti_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `karyawan_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT untuk tabel `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
