-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2023 at 03:53 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bismillah`
--

-- --------------------------------------------------------

--
-- Table structure for table `agendas`
--

CREATE TABLE `agendas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `pic_id` bigint(20) UNSIGNED NOT NULL,
  `pengisi_id` bigint(20) UNSIGNED DEFAULT NULL,
  `jenis_id` bigint(20) UNSIGNED NOT NULL,
  `status_id` bigint(20) UNSIGNED NOT NULL,
  `divisi_id` bigint(20) UNSIGNED NOT NULL,
  `waktu_mulai` time NOT NULL,
  `waktu_selesai` time NOT NULL,
  `tempat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_kegiatan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anggaran` int(11) NOT NULL,
  `realisasi_anggaran` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `agendas`
--

INSERT INTO `agendas` (`id`, `nama`, `tanggal`, `pic_id`, `pengisi_id`, `jenis_id`, `status_id`, `divisi_id`, `waktu_mulai`, `waktu_selesai`, `tempat`, `deskripsi_kegiatan`, `anggaran`, `realisasi_anggaran`, `created_at`, `updated_at`) VALUES
(98, 'Non Rutin', '2023-01-27', 3, 2, 2, 3, 2, '23:09:00', '23:09:00', 'masjid', 'cobayakkkkk', 1, 5, '2023-01-10 09:04:08', '2023-01-10 09:04:42'),
(99, 'berish masjid', '2022-01-17', 2, 1, 1, 2, 1, '23:11:00', '23:10:00', 'masjid dong', 'yasinan1', 8, 8, '2023-01-10 09:05:35', '2023-01-10 10:18:42');

-- --------------------------------------------------------

--
-- Table structure for table `divisis`
--

CREATE TABLE `divisis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `divisis`
--

INSERT INTO `divisis` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'keagamaan', NULL, NULL),
(2, 'Masyarakat', NULL, NULL),
(3, 'Ekonomi', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jenis_agendas`
--

CREATE TABLE `jenis_agendas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jenis_agendas`
--

INSERT INTO `jenis_agendas` (`id`, `kode`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'A01', 'Rutin', NULL, NULL),
(2, 'A02', 'Non Rutin', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(5, '2022_12_04_164414_create_jenis_agendas_table', 1),
(6, '2022_12_04_164432_create_pengisi_yasinans_table', 1),
(7, '2022_12_04_200111_create_agendas_table', 1),
(8, '2022_12_06_212334_create_personal_data_table', 1),
(9, '2022_12_07_061802_create_roles_table', 1),
(10, '2022_12_07_080111_create_divisis_table', 1),
(11, '2022_12_08_205907_create_status_kegiatans_table', 1),
(12, '2022_12_11_081605_create_penilaian_kegiatans_table', 1),
(13, '2022_12_28_130140_create_notulas_table', 1),
(14, '2022_12_29_061522_add_foreign_users_to_personal_data', 1),
(15, '2022_12_29_062217_add_foreign_pengisi_yasinans_to_personal_data', 1),
(16, '2022_12_29_062350_add_foreign_agendas', 1),
(17, '2022_12_29_062809_add_foreign_personal_data', 1),
(18, '2022_12_29_073932_add_deskripsi_kegiatan_to_agendas_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `notulas`
--

CREATE TABLE `notulas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `personaldata_id` bigint(20) UNSIGNED NOT NULL,
  `tanggal` date NOT NULL,
  `judul` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `peserta` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `konten` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notulas`
--

INSERT INTO `notulas` (`id`, `personaldata_id`, `tanggal`, `judul`, `peserta`, `konten`, `created_at`, `updated_at`) VALUES
(4, 1, '2023-01-28', 'RANCANG BANGUN SISTEM INFORMASI MANAJEMEN AGENDA KEGIATAN MASJID', 'Pak Kholid Haryono, Pak Eko Cahyono, Pak Eko Guritno, Pak Didit, Pak Supardi, Pak Asipin, Pak Suroto, Pak Sarno, Bu Itum, Bu Kholid, Tante Rahma, Bu Septi, Bu Luluk ,Bu Asmaini, Galih (mahasiswa)', '<p><strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Struktur Takmir Masjid<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Hidayatul Falah<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Periode 2021-2025 </strong></p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Dusun Sanggrahan Purwomartani Kalasan Sleman Yogyakarta</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table cellspacing=\"0\" style=\"border-collapse:collapse\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:none; border-top:none; vertical-align:top; width:226px\">\r\n			<p>Ketua</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:none; border-top:none; vertical-align:top; width:28px\">\r\n			<p>:</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:none; border-top:none; vertical-align:top; width:321px\">\r\n			<p>Syarofuddin &amp; Kholid Haryono</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:none; border-top:none; vertical-align:top; width:226px\">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:none; border-top:none; vertical-align:top; width:28px\">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:none; border-top:none; vertical-align:top; width:321px\">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:none; border-top:none; vertical-align:top; width:226px\">\r\n			<p>Sekretaris</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:none; border-top:none; vertical-align:top; width:28px\">\r\n			<p>:</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:none; border-top:none; vertical-align:top; width:321px\">\r\n			<p>Mas Tama</p>\r\n\r\n			<p>Eko Cahyono (pendamping)</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:none; border-top:none; vertical-align:top; width:226px\">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:none; border-top:none; vertical-align:top; width:28px\">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:none; border-top:none; vertical-align:top; width:321px\">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:none; border-top:none; vertical-align:top; width:226px\">\r\n			<p>Bendahara</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:none; border-top:none; vertical-align:top; width:28px\">\r\n			<p>:</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:none; border-top:none; vertical-align:top; width:321px\">\r\n			<p>Maryoto</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:none; border-top:none; vertical-align:top; width:226px\">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:none; border-top:none; vertical-align:top; width:28px\">\r\n			<p>:</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:none; border-top:none; vertical-align:top; width:321px\">\r\n			<p>Eko Guritno</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:none; border-top:none; vertical-align:top; width:226px\">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:none; border-top:none; vertical-align:top; width:28px\">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:none; border-top:none; vertical-align:top; width:321px\">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:none; border-top:none; vertical-align:top; width:226px\">\r\n			<p>Layanan Kegiatan dan Dakwah</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:none; border-top:none; vertical-align:top; width:28px\">\r\n			<p>:</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:none; border-top:none; vertical-align:top; width:321px\">\r\n			<p>Haryadi</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:none; border-top:none; vertical-align:top; width:226px\">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:none; border-top:none; vertical-align:top; width:28px\">\r\n			<p>:</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:none; border-top:none; vertical-align:top; width:321px\">\r\n			<p>Iswadi</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:none; border-top:none; vertical-align:top; width:226px\">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:none; border-top:none; vertical-align:top; width:28px\">\r\n			<p>:</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:none; border-top:none; vertical-align:top; width:321px\">\r\n			<p>Udin</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:none; border-top:none; vertical-align:top; width:226px\">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:none; border-top:none; vertical-align:top; width:28px\">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:none; border-top:none; vertical-align:top; width:321px\">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:none; border-top:none; vertical-align:top; width:226px\">\r\n			<p>Layanan Fisik</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:none; border-top:none; vertical-align:top; width:28px\">\r\n			<p>:</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:none; border-top:none; vertical-align:top; width:321px\">\r\n			<p>Didit</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:none; border-top:none; vertical-align:top; width:226px\">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:none; border-top:none; vertical-align:top; width:28px\">\r\n			<p>:</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:none; border-top:none; vertical-align:top; width:321px\">\r\n			<p>Sulis</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:none; border-top:none; vertical-align:top; width:226px\">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:none; border-top:none; vertical-align:top; width:28px\">\r\n			<p>:</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:none; border-top:none; vertical-align:top; width:321px\">\r\n			<p>Mujianto</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:none; border-top:none; vertical-align:top; width:226px\">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:none; border-top:none; vertical-align:top; width:28px\">\r\n			<p>:</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:none; border-top:none; vertical-align:top; width:321px\">\r\n			<p>Suroto</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:none; border-top:none; vertical-align:top; width:226px\">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:none; border-top:none; vertical-align:top; width:28px\">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:none; border-top:none; vertical-align:top; width:321px\">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:none; border-top:none; vertical-align:top; width:226px\">\r\n			<p>Layanan Sawah</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:none; border-top:none; vertical-align:top; width:28px\">\r\n			<p>:</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:none; border-top:none; vertical-align:top; width:321px\">\r\n			<p>Supardi</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:none; border-top:none; vertical-align:top; width:226px\">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:none; border-top:none; vertical-align:top; width:28px\">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:none; border-top:none; vertical-align:top; width:321px\">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:none; border-top:none; vertical-align:top; width:226px\">\r\n			<p>Layanan Kesejahteraan Jamaah</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:none; border-top:none; vertical-align:top; width:28px\">\r\n			<p>:</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:none; border-top:none; vertical-align:top; width:321px\">\r\n			<p>Ibu2 takmir</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:none; border-top:none; vertical-align:top; width:226px\">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:none; border-top:none; vertical-align:top; width:28px\">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:none; border-top:none; vertical-align:top; width:321px\">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:none; border-top:none; vertical-align:top; width:226px\">\r\n			<p>Remais</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:none; border-top:none; vertical-align:top; width:28px\">\r\n			<p>:</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:none; border-top:none; vertical-align:top; width:321px\">\r\n			<p>Pemuda &amp; Pemudi</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:none; border-left:none; border-right:none; border-top:none; vertical-align:top; width:226px\">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td style=\"border-bottom:none; border-left:none; border-right:none; border-top:none; vertical-align:top; width:28px\">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td style=\"border-bottom:none; border-left:none; border-right:none; border-top:none; vertical-align:top; width:321px\">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Yogyakarta, 28&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Maret&nbsp;&nbsp;&nbsp; 2021 M</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 14/15 Sya&rsquo;ban 1442 H</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Revisi, 30 Oktober 2022 M</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Rapat evaluasi akhir 2022</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Peserta hadir:</p>\r\n\r\n<ol>\r\n	<li>Pak Kholid Haryono</li>\r\n	<li>Pak Eko Cahyono</li>\r\n	<li>Pak Eko Guritno</li>\r\n	<li>Pak Didit</li>\r\n	<li>Pak Supardi</li>\r\n	<li>Pak Asipin</li>\r\n	<li>Pak Suroto</li>\r\n	<li>Pak Sarno</li>\r\n	<li>Bu Itum</li>\r\n	<li>Bu Kholid</li>\r\n	<li>Tante Rahma</li>\r\n	<li>Bu Septi</li>\r\n	<li>Bu Luluk</li>\r\n	<li>Bu Asmaini</li>\r\n	<li>Galih (mahasiswa)</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>', '2023-01-10 10:33:55', '2023-01-10 10:45:25');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pengisi_yasinans`
--

CREATE TABLE `pengisi_yasinans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pasaran` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `personaldata_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengisi_yasinans`
--

INSERT INTO `pengisi_yasinans` (`id`, `pasaran`, `personaldata_id`, `created_at`, `updated_at`) VALUES
(1, 'kliwon', 2, NULL, '2022-12-29 02:20:23'),
(2, 'pahing', 2, NULL, NULL),
(3, 'legi', 1, NULL, '2022-12-29 01:21:28'),
(4, 'pon', 4, NULL, NULL),
(5, 'wage', 5, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `penilaian_kegiatans`
--

CREATE TABLE `penilaian_kegiatans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `agenda_id` bigint(20) UNSIGNED NOT NULL,
  `penilai_id` bigint(20) UNSIGNED NOT NULL,
  `nilai` int(11) NOT NULL,
  `gambar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `catatan_pelaksanaan` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_data`
--

CREATE TABLE `personal_data` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `divisi_id` bigint(20) UNSIGNED NOT NULL,
  `no_hp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipe` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_data`
--

INSERT INTO `personal_data` (`id`, `nama`, `divisi_id`, `no_hp`, `tipe`, `created_at`, `updated_at`) VALUES
(1, 'admin', 1, '0', 'dummy', NULL, '2022-12-28 23:59:08'),
(2, 'Mas Tama', 1, '0822338777', 'internal', NULL, NULL),
(3, 'rizky', 1, '082233681712', 'internal', '2022-12-29 00:02:57', '2022-12-29 00:02:57'),
(4, 'ustad jeffry', 3, '08123456', 'eksternal', NULL, NULL),
(5, 'ustad felix', 2, '09343', 'eksternal', NULL, NULL),
(6, 'ustad wahyu', 1, '082233681712', 'eksternal', '2023-01-10 10:30:21', '2023-01-10 10:30:21');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Admin', NULL, NULL),
(2, 'Takmir', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `status_kegiatans`
--

CREATE TABLE `status_kegiatans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `status_kegiatans`
--

INSERT INTO `status_kegiatans` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Berjalan', NULL, NULL),
(2, 'Terlaksana', NULL, NULL),
(3, 'Dibatalkan', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `personal_data_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `personal_data_id`, `role_id`, `username`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'admin', NULL, '$2y$10$Tv9U9KQq1DqoQq7skQy08OFz0XucC6ZU/.jO0pC/ng8TdpBfz.WvS', NULL, NULL, '2022-12-28 23:59:08'),
(2, 2, 1, 'admin2', NULL, '$2y$10$lAPV0tvkteKDe8BJHQ7JEufxr72qQAiTirsyQ83j2hSpNWkkCrHJ2', NULL, NULL, '2022-12-28 23:59:50'),
(3, 3, 2, 'admin3', NULL, '$2y$10$rzkbnI8kFwOnooQRoJfSI.DeRiMnHzV6B9a9JNIIrtnnlXpJhn16y', NULL, '2022-12-29 00:02:57', '2022-12-29 00:02:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agendas`
--
ALTER TABLE `agendas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `agendas_pic_id_foreign` (`pic_id`),
  ADD KEY `agendas_pengisi_id_foreign` (`pengisi_id`),
  ADD KEY `agendas_jenis_id_foreign` (`jenis_id`),
  ADD KEY `agendas_status_id_foreign` (`status_id`),
  ADD KEY `agendas_divisi_id_foreign` (`divisi_id`);

--
-- Indexes for table `divisis`
--
ALTER TABLE `divisis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jenis_agendas`
--
ALTER TABLE `jenis_agendas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notulas`
--
ALTER TABLE `notulas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notulas_personaldata_id_foreign` (`personaldata_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pengisi_yasinans`
--
ALTER TABLE `pengisi_yasinans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pengisi_yasinans_personaldata_id_foreign` (`personaldata_id`);

--
-- Indexes for table `penilaian_kegiatans`
--
ALTER TABLE `penilaian_kegiatans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `penilaian_kegiatans_agenda_id_foreign` (`agenda_id`),
  ADD KEY `penilaian_kegiatans_penilai_id_foreign` (`penilai_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `personal_data`
--
ALTER TABLE `personal_data`
  ADD PRIMARY KEY (`id`),
  ADD KEY `personal_data_divisi_id_foreign` (`divisi_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status_kegiatans`
--
ALTER TABLE `status_kegiatans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD KEY `users_personal_data_id_foreign` (`personal_data_id`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agendas`
--
ALTER TABLE `agendas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161;

--
-- AUTO_INCREMENT for table `divisis`
--
ALTER TABLE `divisis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jenis_agendas`
--
ALTER TABLE `jenis_agendas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `notulas`
--
ALTER TABLE `notulas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pengisi_yasinans`
--
ALTER TABLE `pengisi_yasinans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `penilaian_kegiatans`
--
ALTER TABLE `penilaian_kegiatans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_data`
--
ALTER TABLE `personal_data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `status_kegiatans`
--
ALTER TABLE `status_kegiatans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `agendas`
--
ALTER TABLE `agendas`
  ADD CONSTRAINT `agendas_divisi_id_foreign` FOREIGN KEY (`divisi_id`) REFERENCES `divisis` (`id`),
  ADD CONSTRAINT `agendas_jenis_id_foreign` FOREIGN KEY (`jenis_id`) REFERENCES `jenis_agendas` (`id`),
  ADD CONSTRAINT `agendas_pengisi_id_foreign` FOREIGN KEY (`pengisi_id`) REFERENCES `personal_data` (`id`),
  ADD CONSTRAINT `agendas_pic_id_foreign` FOREIGN KEY (`pic_id`) REFERENCES `personal_data` (`id`),
  ADD CONSTRAINT `agendas_status_id_foreign` FOREIGN KEY (`status_id`) REFERENCES `status_kegiatans` (`id`);

--
-- Constraints for table `notulas`
--
ALTER TABLE `notulas`
  ADD CONSTRAINT `notulas_personaldata_id_foreign` FOREIGN KEY (`personaldata_id`) REFERENCES `personal_data` (`id`);

--
-- Constraints for table `pengisi_yasinans`
--
ALTER TABLE `pengisi_yasinans`
  ADD CONSTRAINT `pengisi_yasinans_personaldata_id_foreign` FOREIGN KEY (`personaldata_id`) REFERENCES `personal_data` (`id`);

--
-- Constraints for table `penilaian_kegiatans`
--
ALTER TABLE `penilaian_kegiatans`
  ADD CONSTRAINT `penilaian_kegiatans_agenda_id_foreign` FOREIGN KEY (`agenda_id`) REFERENCES `agendas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `penilaian_kegiatans_penilai_id_foreign` FOREIGN KEY (`penilai_id`) REFERENCES `personal_data` (`id`);

--
-- Constraints for table `personal_data`
--
ALTER TABLE `personal_data`
  ADD CONSTRAINT `personal_data_divisi_id_foreign` FOREIGN KEY (`divisi_id`) REFERENCES `divisis` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_personal_data_id_foreign` FOREIGN KEY (`personal_data_id`) REFERENCES `personal_data` (`id`),
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
