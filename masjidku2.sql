-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Des 2022 pada 13.11
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `masjidku2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `agendas`
--

CREATE TABLE `agendas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kegiatan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `penanggung_jawab` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pengisi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `divisi` int(11) NOT NULL,
  `waktu_mulai` time NOT NULL,
  `waktu_selesai` time NOT NULL,
  `tempat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anggaran` int(11) NOT NULL,
  `realisasi_anggaran` int(11) NOT NULL DEFAULT 0,
  `deskripsi_kegiatan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `agendas`
--

INSERT INTO `agendas` (`id`, `nama_kegiatan`, `tanggal`, `penanggung_jawab`, `pengisi`, `jenis`, `status`, `divisi`, `waktu_mulai`, `waktu_selesai`, `tempat`, `anggaran`, `realisasi_anggaran`, `deskripsi_kegiatan`, `created_at`, `updated_at`) VALUES
(1662, 'Yasinan', '2022-12-12', '4', '3', '1', '1', 1, '17:10:00', '17:10:00', 'masjid', 0, 0, 'melaksanakan yasinan rutin', '2022-12-28 03:10:25', '2022-12-28 04:36:12'),
(1661, 'Yasinan', '2022-12-05', '4', '12', '1', '3', 1, '17:10:00', '17:10:00', '-', 0, 0, 'melaksanakan yasinan rutin', '2022-12-28 03:10:25', '2022-12-28 04:29:46'),
(1660, 'Yasinan', '2022-11-28', '4', '9', '1', '2', 1, '17:10:00', '17:10:00', '-', 0, 0, 'melaksanakan yasinan rutin', '2022-12-28 03:10:25', '2022-12-28 04:30:12'),
(1659, 'Yasinan', '2022-11-21', '4', '13', '1', '1', 1, '17:10:00', '17:10:00', '-', 0, 0, '', '2022-12-28 03:10:25', '2022-12-28 03:10:25'),
(1658, 'Yasinan', '2022-11-14', '4', '7', '1', '1', 1, '17:10:00', '17:10:00', '-', 0, 0, '', '2022-12-28 03:10:25', '2022-12-28 03:10:25'),
(1667, 'berish masjid', '2022-12-29', '7', '4', '1', '1', 3, '18:41:00', '18:41:00', 'masjid dong', 8989898, 1, 'cobayakkkkk', '2022-12-28 04:39:25', '2022-12-28 04:46:44'),
(1666, 'berish masjid', '2022-12-29', '7', '4', '2', '1', 3, '18:41:00', '18:41:00', 'masjid dong', 0, 0, 'cobayakkkkk', '2022-12-28 04:37:14', '2022-12-28 04:37:14'),
(1665, 'berish masjid', '2022-12-29', '7', '4', '2', '1', 3, '18:41:00', '18:41:00', 'masjid dong', 0, 0, 'cobayakkkkk', '2022-12-28 04:37:14', '2022-12-28 04:37:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `divisis`
--

CREATE TABLE `divisis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `divisis`
--

INSERT INTO `divisis` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Keagamaan', NULL, NULL),
(2, 'Kreatif', NULL, NULL),
(3, 'Masyarakat', NULL, NULL),
(4, 'Ekonomi', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `input`
--

CREATE TABLE `input` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `kegiatan` varchar(255) NOT NULL,
  `penanggung_jawab` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_agendas`
--

CREATE TABLE `jenis_agendas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jenis_agendas`
--

INSERT INTO `jenis_agendas` (`id`, `kode`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'A01', 'Rutin', '2022-12-04 12:50:36', '2022-12-06 20:54:29'),
(2, 'A02', 'Non Rutin', '2022-12-04 12:50:46', '2022-12-04 12:50:46'),
(4, 'A04', 'Anak', '2022-12-15 05:34:54', '2022-12-15 05:34:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(18, '2014_10_12_000000_create_users_table', 1),
(19, '2014_10_12_100000_create_password_resets_table', 1),
(20, '2019_08_19_000000_create_failed_jobs_table', 1),
(21, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(22, '2022_12_04_164414_create_jenis_agendas_table', 1),
(23, '2022_12_04_164432_create_pengisi_yasinans_table', 1),
(24, '2022_12_04_200111_create_agendas_table', 2),
(28, '2022_12_06_212334_create_personal_data_table', 6),
(26, '2022_12_07_061802_create_roles_table', 4),
(27, '2022_12_07_080111_create_divisis_table', 5),
(29, '2022_12_08_205907_create_status_kegiatans_table', 7),
(30, '2022_12_11_070822_create_penilaian_anggotas_table', 8),
(31, '2022_12_11_081605_create_penilaian_kegiatans_table', 9),
(32, '2022_12_17_170818_add_relasisasi_anggaran_on_agendas_table', 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengisi_yasinans`
--

CREATE TABLE `pengisi_yasinans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pasaran` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pengisi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pengisi_yasinans`
--

INSERT INTO `pengisi_yasinans` (`id`, `pasaran`, `pengisi`, `created_at`, `updated_at`) VALUES
(1, 'kliwon', '12', NULL, '2022-12-19 19:30:34'),
(2, 'legi', '13', NULL, '2022-12-19 19:30:44'),
(3, 'pon', '9', NULL, '2022-12-18 09:23:11'),
(4, 'wage', '7', NULL, '2022-12-19 19:30:53'),
(5, 'pahing', '3', NULL, '2022-12-19 19:31:06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penilaian_kegiatans`
--

CREATE TABLE `penilaian_kegiatans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `agenda_id` int(11) NOT NULL,
  `nilai` int(11) NOT NULL,
  `gambar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `catatan_pelaksanaan` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `penilaian_kegiatans`
--

INSERT INTO `penilaian_kegiatans` (`id`, `agenda_id`, `nilai`, `gambar`, `catatan_pelaksanaan`, `user_id`, `created_at`, `updated_at`) VALUES
(10, 1667, 4, '20221228115137_Screenshot (2669).png', 'bagus', 1, '2022-12-28 04:51:37', '2022-12-28 04:51:37'),
(9, 1555, 4, '20221224200528_Screenshot (2132).png', 'tes', 1, '2022-12-24 13:05:28', '2022-12-24 13:05:28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_data`
--

CREATE TABLE `personal_data` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `divisi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipe` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `personal_data`
--

INSERT INTO `personal_data` (`id`, `nama`, `divisi`, `no_hp`, `tipe`, `created_at`, `updated_at`) VALUES
(3, 'Bp Budi', '1', '082233787650', 'external', NULL, NULL),
(4, 'Bp Agus', '1', '081230987654', 'internal', '2022-12-10 15:18:17', '2022-12-15 23:19:37'),
(9, 'Bp Galih', '2', '081234076599', 'internal', '2022-12-10 16:03:44', '2022-12-10 16:03:44'),
(7, 'Bp Wawan', '1', '0822338930', 'internal', '2022-12-10 15:26:32', '2022-12-10 15:26:32'),
(12, 'Ustad abdul ahmad', '1', '082266784028', 'external', NULL, NULL),
(13, 'Mas tama', '1', '0830044715840', 'internal', '2022-12-15 02:05:48', '2022-12-15 02:05:48'),
(14, 'Pak Sartono', '1', '0822336870299', 'internal', '2022-12-15 02:05:48', '2022-12-15 02:05:48'),
(23, 'saya ekternal', '-', '08561213131', 'eksternal', '2022-12-28 04:59:44', '2022-12-28 04:59:44'),
(18, 'galih', '1', '082233681712', 'internal', '2022-12-28 02:03:41', '2022-12-28 02:03:41'),
(22, 'saya ekternal', '-', '08561213131', 'eksternal', '2022-12-28 04:59:43', '2022-12-28 04:59:43');

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `roles`
--

INSERT INTO `roles` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Takmir', NULL, NULL),
(2, 'Admin', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `status_kegiatans`
--

CREATE TABLE `status_kegiatans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `status_kegiatans`
--

INSERT INTO `status_kegiatans` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Berjalan', NULL, NULL),
(2, 'Terlaksana', NULL, NULL),
(3, 'Dibatalkan', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `personal_data_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `email_verified_at`, `password`, `remember_token`, `personal_data_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 'admin', NULL, '$2y$10$Tv9U9KQq1DqoQq7skQy08OFz0XucC6ZU/.jO0pC/ng8TdpBfz.WvS', NULL, 0, 0, '2022-12-08 11:54:17', '2022-12-08 11:54:17'),
(2, 'test', NULL, '$2y$10$zmlTsYDYp6rh9Pa46u/cQOS403dQPkVKbtgxGr1V/RIjVK90S..Ti', NULL, 7, 1, '2022-12-10 15:26:32', '2022-12-18 11:52:43'),
(4, 'cbadmin', NULL, '$2y$10$CulIEMaLF6pFbU3XHLwhBOp1bzxDuKMLxzCZFCBVwvPLem1LWG9gK', NULL, 9, 2, '2022-12-10 16:03:45', '2022-12-24 21:02:02'),
(5, 'tama', NULL, '$2y$10$0nqYxP6NFHNzXkuBCgNpFO.aM/.WmJB04d7WIZh/vL3.JngHV7ybS', NULL, 13, 1, '2022-12-15 02:05:48', '2022-12-15 02:05:48'),
(9, 'ganhan26', NULL, '$2y$10$pIYrfte2ODPQojXzc3VOEeZVTd1yLHOS8TneS4g.AYAjBOO2CZqIW', NULL, 19, 2, '2022-12-28 02:37:40', '2022-12-28 02:37:40'),
(7, 'gaminggg', NULL, '$2y$10$q/kS1D7OPp6NYqElMWRNleAa4kqcJfFyq1VtvRCnz6wjFcg5B1YcC', NULL, 16, 2, '2022-12-17 07:23:03', '2022-12-17 07:23:03'),
(8, 'admin', NULL, '$2y$10$s7no8RCZ4z9K2gIwGdISgu9zIdoFBLoIu/CzOsR8GWzgGRQoSgqWS', NULL, 18, 1, '2022-12-28 02:03:41', '2022-12-28 02:03:41');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `agendas`
--
ALTER TABLE `agendas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `divisis`
--
ALTER TABLE `divisis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `input`
--
ALTER TABLE `input`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jenis_agendas`
--
ALTER TABLE `jenis_agendas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pengisi_yasinans`
--
ALTER TABLE `pengisi_yasinans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `penilaian_kegiatans`
--
ALTER TABLE `penilaian_kegiatans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `personal_data`
--
ALTER TABLE `personal_data`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `status_kegiatans`
--
ALTER TABLE `status_kegiatans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `agendas`
--
ALTER TABLE `agendas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1668;

--
-- AUTO_INCREMENT untuk tabel `divisis`
--
ALTER TABLE `divisis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `input`
--
ALTER TABLE `input`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jenis_agendas`
--
ALTER TABLE `jenis_agendas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `pengisi_yasinans`
--
ALTER TABLE `pengisi_yasinans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `penilaian_kegiatans`
--
ALTER TABLE `penilaian_kegiatans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `personal_data`
--
ALTER TABLE `personal_data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `status_kegiatans`
--
ALTER TABLE `status_kegiatans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
