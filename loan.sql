-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Jun 2022 pada 10.26
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `assets`
--

CREATE TABLE `assets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_asset` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_asset` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `assets`
--

INSERT INTO `assets` (`id`, `nama_asset`, `jumlah_asset`, `created_at`, `updated_at`) VALUES
(2, 'LAPTOP LENOVO IP 330', 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'NOTEBOOK HP 14S-CF0013 TX - CORE I7', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'NOTEBOOK HP 14-BF00BTX - CORE I5', 7, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'FUJI XEROX CM315Z', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'LOGITECH RALLY SYSTEM', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'PRINTER CANON E410 PIXMA AFFORDABLE ALL-IN-ONE PRINTER + INFUS MODIF', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'HP OFFICEJET PRO 6970 ALL IN ONE PRINTER', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'SCANNER EPSON DS570W', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'LAYAR PROYEKTOR JK SCREEN', 0, '0000-00-00 00:00:00', '2022-01-05 18:23:17'),
(11, 'PROYEKTOR EPSON EB-2055', 1, '0000-00-00 00:00:00', '2022-01-16 14:00:37'),
(12, 'PRINTER CANON PIXMA', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'HARDDISK EXTERNAL', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'KABEL ETHERNET', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'PRINTER HP TANK 415', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'SOUND PORTABLE ZW-G10CB-AS', 3, '0000-00-00 00:00:00', '2021-04-21 13:25:07'),
(17, 'SOUND PORTABLE TOA ZW-8610CU', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 'SOUND PORTABLE AUBERN BE15CX', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 'LAPTOP HP 240 G7 6YJOPA', 1, '0000-00-00 00:00:00', '2022-03-13 14:01:35'),
(20, 'SCREEN PROYEKTOR SCREEN 70 MANUAL', 14, '0000-00-00 00:00:00', '2021-11-14 14:05:52'),
(21, 'KAMERA CANON EOS 200D II KIT EF-S 18-55MM', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 'Printer Epson L1455', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 'Projector EB X-450', 2, '0000-00-00 00:00:00', '2021-10-26 13:05:51'),
(24, 'HP Zbook G4 Mobile Workstation', 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 'Laptop HP Envy 13-aq0018TX', 1, '0000-00-00 00:00:00', '2021-11-09 13:58:37'),
(26, 'HDD External 2,5 2TB', 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, 'Epson Printer L 1455', 1, '0000-00-00 00:00:00', '2021-05-01 20:30:45'),
(28, 'Epson Printer L 6190', 5, '0000-00-00 00:00:00', '2022-04-20 10:53:10'),
(29, 'Epson Scanner DS 570W', 9, '0000-00-00 00:00:00', '2022-04-11 15:13:41'),
(30, 'Converter Mac', 39, '0000-00-00 00:00:00', '2022-04-18 17:00:10'),
(31, 'Kabel HDMI', 19, '0000-00-00 00:00:00', '2021-11-16 13:57:54'),
(32, 'Converter USB to HDMI', 10, '0000-00-00 00:00:00', '2022-04-15 01:21:25'),
(33, 'Pointer', 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, 'Spliter HDMI', 5, '0000-00-00 00:00:00', '2021-11-09 14:03:02'),
(35, 'Camera LG Facerec', 0, '2021-05-09 12:32:17', '2022-04-13 01:47:32'),
(36, 'Laptop HP PROBOOK 440 g8', 175, '2021-08-01 17:26:59', '2021-12-30 12:37:40'),
(37, 'Converter Harddisk Laptop', 0, '2021-08-03 19:02:41', '2021-11-09 14:01:50'),
(38, 'Laptop DELL Hibah', 3, '2021-08-11 14:40:45', '2021-11-09 13:59:36'),
(39, 'Laptop HP ELITE BOOK 360', 13, '2021-08-12 18:03:03', '2021-11-09 14:00:42'),
(40, 'modem wifi telkomsel', 4, '2021-09-09 12:55:20', '2021-09-09 12:55:20'),
(41, 'Laptop HP 14-DQ1088WM', 12, '2021-09-14 15:19:27', '2021-09-14 15:19:27'),
(42, 'MACBOOK PRO M1 256GB Space Grey', 1, '2021-09-14 15:55:18', '2021-09-14 15:55:18'),
(43, 'Converter Type C to HDMI', 5, '2021-09-26 17:30:50', '2021-11-09 14:02:32'),
(44, 'Handphone Samsung galaxy 21 Plus', 5, '2021-10-06 16:17:48', '2021-10-06 17:27:22'),
(45, 'SOUND PORTABLE TOA ZW-G810CU', 0, '2021-10-25 15:27:52', '2022-04-12 10:16:30'),
(46, 'Samsung Galaxy A20', 1, '2021-11-09 12:53:41', '2021-11-09 12:53:41'),
(48, 'HARDISK 2 TB', 0, '2021-11-22 13:05:46', '2022-01-11 19:54:05'),
(49, 'HARDDISK EXTERNAL', 1, '2021-11-28 14:30:34', '2021-11-28 14:30:34'),
(50, 'Saramonic', 2, '2021-12-06 17:59:09', '2021-12-06 17:59:09'),
(51, 'Mic SERAMONIC B500', 3, '2022-01-06 12:26:57', '2022-01-06 12:26:57'),
(52, 'Laptop DELL Black KEONG', 4, '2022-02-09 12:19:33', '2022-02-09 12:19:33'),
(53, 'Laptop HP PROBOOK 430 g3', 1, '2022-03-28 13:32:35', '2022-03-28 13:32:35'),
(55, 'Camera Osbot Dinamis', 0, '2022-04-12 10:50:42', '2022-04-15 01:35:45'),
(57, 'Ratih', 1, '2022-04-24 04:53:00', '2022-04-24 04:53:00'),
(58, 'Testing Barang', 2, '2022-06-09 18:46:54', '2022-06-09 18:46:54'),
(64, 'Camera Canon DSLR', 1, '2022-06-15 21:35:22', '2022-06-15 21:35:22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `master_mails`
--

CREATE TABLE `master_mails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `approve_mail` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reject_mail` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `request_mail` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `master_mails`
--

INSERT INTO `master_mails` (`id`, `approve_mail`, `reject_mail`, `request_mail`, `created_at`, `updated_at`) VALUES
(1, '<p>test</p>', '<p>test</p>', '<p>test</p>', NULL, '2022-06-15 01:03:18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_04_22_122344_create_roles_table', 1),
(6, '2022_04_22_122605_user_role', 1),
(7, '2022_04_22_123134_create_assets_table', 1),
(8, '2022_04_22_145424_create_peminjamen_table', 1),
(9, '2022_04_22_145459_create_peminjaman_items_table', 1),
(11, '2022_04_22_151357_create_statuses_table', 2),
(12, '2022_04_23_062623_user_add_username', 3),
(13, '2022_04_24_034420_create_master_mails_table', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_transaksi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `peminjam` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `status_id` int(11) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_memo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto_memo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `terlambat` int(11) DEFAULT NULL,
  `kondisi` enum('baik','rusak') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `peminjaman`
--

INSERT INTO `peminjaman` (`id`, `kode_transaksi`, `peminjam`, `nip`, `no_hp`, `email`, `user_id`, `status_id`, `tgl_pinjam`, `tgl_kembali`, `keterangan`, `no_memo`, `foto_memo`, `terlambat`, `kondisi`, `created_at`, `updated_at`) VALUES
(1, 'MEMO-220522-1', 'Ratih Kusuma', '119030', '085223147455', 'ratihkusumadewi09@gmail.com', 1, 2, '2022-05-22', '2022-05-23', NULL, NULL, NULL, NULL, 'baik', '2022-05-22 16:11:36', '2022-06-14 19:13:22'),
(2, 'MEMO-220522-1', 'Ratih Kusuma', '119030', '085223147455', 'ratihkusumadewi09@gmail.com', 1, 3, '2022-05-22', '2022-05-23', NULL, NULL, NULL, NULL, 'baik', '2022-05-22 16:12:32', '2022-05-23 18:05:14'),
(3, 'MEMO-220525-3', 'Ratih Kusuma', '216105', '085223147455', 'ratihkusumadewi09@gmail.com', 1, 2, '2022-05-25', '2022-06-10', NULL, NULL, NULL, 7, 'baik', '2022-05-25 05:38:59', '2022-06-14 19:44:09'),
(4, 'MEMO-220530-4', 'Hashfi', '216105', '09889098', 'hashfi@gmail.com', 1, 5, '2022-05-30', '2022-05-31', NULL, NULL, NULL, NULL, 'baik', '2022-05-29 19:29:50', '2022-06-15 01:03:36'),
(5, 'MEMO-220525-3', 'Ratih Kusuma', '216105', '085223147455', 'ratihkusumadewi09@gmail.com', 1, 2, '2022-05-25', '2022-06-03', NULL, NULL, NULL, 1, 'baik', '2022-06-01 07:49:10', '2022-06-14 19:43:15'),
(6, 'MEMO-220525-3', 'Ratih Kusuma', '216105', '085223147455', 'ratihkusumadewi09@gmail.com', 1, 2, '2022-05-25', '2022-06-03', NULL, NULL, NULL, 1, 'baik', '2022-06-01 07:50:33', '2022-06-14 19:43:45'),
(7, 'MEMO-220525-3', 'Ratih Kusuma', '216105', '085223147455', 'ratihkusumadewi09@gmail.com', 1, 2, '2022-05-25', '2022-06-09', NULL, NULL, NULL, 7, 'baik', '2022-06-01 07:53:09', '2022-06-14 19:43:57'),
(8, 'MEMO-220525-3', 'Ratih Kusuma', '216105', '085223147455', 'ratihkusumadewi09@gmail.com', 1, 2, '2022-05-25', '2022-06-03', NULL, NULL, NULL, 1, 'baik', '2022-06-01 08:40:56', '2022-06-14 19:42:01'),
(9, 'MEMO-220525-3', 'Ratih Kusuma', '216105', '085223147455', 'ratihkusumadewi09@gmail.com', 1, 2, '2022-05-25', '2022-06-07', NULL, NULL, NULL, 5, 'baik', '2022-06-01 08:43:25', '2022-06-14 19:42:48'),
(10, 'MEMO-220602-10', 'Ratih Kusuma', '216105', '085223147455', 'ratihkusumadewi09@gmail.com', 1, 2, '2022-06-02', '2022-06-03', NULL, NULL, NULL, 0, 'baik', '2022-06-02 00:55:04', '2022-06-14 19:44:32'),
(11, 'MEMO-220602-11', 'Rima', '212121', '085695682973', 'mia23@gmail.com', 2, 4, '2022-06-02', '2022-06-06', NULL, NULL, NULL, NULL, 'baik', '2022-06-02 05:01:14', '2022-06-02 05:01:14'),
(12, 'TIK-220602-1', 'Hashfi', '219015', '09889098', 'hasfi@gmail.com', 1, 2, '2022-06-02', '2022-06-03', NULL, NULL, NULL, NULL, 'baik', '2022-06-02 06:54:56', '2022-06-14 19:31:48'),
(13, 'TIK-220606-13', 'Vita', '212121', '085695682973', 'vita@vita.com', 2, 2, '2022-06-06', '2022-06-07', NULL, NULL, NULL, NULL, 'baik', '2022-06-05 20:02:10', '2022-06-14 19:32:06'),
(14, 'MEMO-220608-14', 'Hashfi', '216105', '085223147455', 'ratihkusumadewi09@gmail.com', 1, 5, '2022-06-08', '2022-06-09', 'Barang sudah diterima', NULL, NULL, NULL, 'baik', '2022-06-07 21:57:09', '2022-06-13 06:31:07'),
(15, 'MEMO-220608-15', 'Rima', '23216372', '085223147455', 'ratihkusumadewi09@gmail.com', 1, 5, '2022-06-09', '2022-06-13', 'testing', '0054/UP-WR2.2.2/UND/III/2021', '20291-2022-06-08-06-12-49.pdf', NULL, 'baik', '2022-06-07 23:12:49', '2022-06-15 01:03:56'),
(16, 'MEMO-220615-16', 'Rima', '216105', '085223147455', 'ratihkusumadewi09@gmail.com', 1, 4, '2022-06-15', '2022-06-16', 'PJ Uang Muka Kerja Pengadaan Sarana Prasarana Ruang Information Center', '0054/UP-WR2.2.2/UND/III/2021', '20016-2022-06-15-01-56-57.PDF', NULL, 'baik', '2022-06-14 18:56:57', '2022-06-14 18:59:21'),
(17, 'TIK-220615-17', 'mahasiswa 1', '212121', '00090990', 'mhs@gmail.com', 3, 2, '2022-06-15', '2022-06-16', NULL, NULL, NULL, NULL, 'baik', '2022-06-14 19:21:26', '2022-06-14 19:31:14'),
(18, 'MEMO-220615-18', 'Ratih Kusuma', '216105', '085223147455', 'ratih@universitaspertamina.ac.id', 1, 5, '2022-06-15', '2022-06-16', 'Barang sudah diterima', '0054/UP-WR2.2.2/UND/III/2021', NULL, NULL, 'baik', '2022-06-15 01:06:32', '2022-06-15 01:10:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman_items`
--

CREATE TABLE `peminjaman_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `peminjaman_id` int(11) NOT NULL,
  `asset_id` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `kembali` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `temporary` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `peminjaman_items`
--

INSERT INTO `peminjaman_items` (`id`, `peminjaman_id`, `asset_id`, `jumlah`, `kembali`, `user_id`, `temporary`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 1, 1, 1, 0, '2022-05-21 08:57:38', '2022-05-22 16:11:36'),
(2, 1, 2, 1, 1, 1, 0, '2022-05-21 08:58:31', '2022-05-22 16:11:36'),
(3, 1, 2, 1, 1, 1, 0, '2022-05-21 08:59:26', '2022-05-22 16:11:36'),
(4, 1, 2, 2, 2, 1, 0, '2022-05-21 09:02:22', '2022-05-22 16:11:36'),
(5, 1, 12, 2, 2, 1, 0, '2022-05-22 15:21:36', '2022-05-22 16:11:36'),
(6, 3, 9, 1, 1, 1, 0, '2022-05-25 05:38:40', '2022-05-25 05:38:59'),
(7, 3, 16, 1, 1, 1, 0, '2022-05-25 05:38:53', '2022-05-25 05:38:59'),
(8, 4, 13, 1, 1, 1, 0, '2022-05-29 19:29:14', '2022-05-29 19:29:50'),
(9, 4, 18, 1, 1, 1, 0, '2022-05-29 19:29:25', '2022-05-29 19:29:50'),
(10, 10, 2, 1, 1, 1, 0, '2022-06-02 00:54:42', '2022-06-02 00:55:04'),
(11, 10, 6, 2, 2, 1, 0, '2022-06-02 00:54:50', '2022-06-02 00:55:04'),
(12, 12, 2, 1, 1, 1, 0, '2022-06-02 05:00:23', '2022-06-02 06:54:56'),
(13, 11, 14, 1, 1, 2, 0, '2022-06-02 05:01:10', '2022-06-02 05:01:14'),
(14, 12, 2, 1, 1, 1, 0, '2022-06-02 06:54:29', '2022-06-02 06:54:56'),
(15, 13, 5, 1, 1, 2, 0, '2022-06-05 20:02:05', '2022-06-05 20:02:10'),
(16, 14, 53, 1, 1, 1, 0, '2022-06-07 21:57:07', '2022-06-07 21:57:09'),
(17, 15, 2, 1, 1, 1, 0, '2022-06-07 23:12:28', '2022-06-07 23:12:49'),
(18, 15, 17, 1, 1, 1, 0, '2022-06-07 23:12:34', '2022-06-07 23:12:49'),
(19, 16, 17, 1, 1, 1, 0, '2022-06-14 18:56:48', '2022-06-14 18:56:57'),
(20, 16, 51, 1, 1, 1, 0, '2022-06-14 18:56:55', '2022-06-14 18:56:57'),
(21, 17, 9, 1, 1, 3, 0, '2022-06-14 19:21:14', '2022-06-14 19:21:26'),
(22, 17, 29, 1, 1, 3, 0, '2022-06-14 19:21:23', '2022-06-14 19:21:26'),
(23, 18, 2, 1, 1, 1, 0, '2022-06-15 01:06:30', '2022-06-15 01:06:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
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
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', NULL, NULL),
(2, 'Manager TI', NULL, NULL),
(3, 'Staff TI', NULL, NULL),
(4, 'User', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `statuses`
--

CREATE TABLE `statuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `statuses`
--

INSERT INTO `statuses` (`id`, `code`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'Pinjam', NULL, NULL),
(2, 2, 'Kembali', NULL, NULL),
(3, 3, 'Ditolak', NULL, NULL),
(4, 4, 'Menunggu', NULL, NULL),
(5, 5, 'Diterima', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role_id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role_id`, `username`) VALUES
(1, 'Admin', 'admin@admin.com', '2022-04-22 21:45:47', '$2y$10$0SpYB.hNGk1TJojCDoQR.eQPPhhtY3UNNcq/t4G57kOujW0VAQiRG', '4JT0QW42iwKncXuP8cSyefLbx5DIUDUxFBVCMgSv3Kr7n4suUJL9fYKPgWCP', '2022-04-22 21:45:47', NULL, 1, 'admin123'),
(2, 'mia', 'mia23@gmail.com', NULL, '$2y$10$XOB5e1957Eews0TYoqmjk.TBu2kxVgHWLEJtl.QBtWSWdilei/lAG', NULL, '2022-06-01 02:38:14', '2022-06-01 04:55:26', 4, 'mia123'),
(3, 'Amri', 'admri@gmail.com', NULL, '$2y$10$DKYsz4towI6E.n4slJy.betRpYKarV8u8JX/9ygnFLlcWkb0eETm.', NULL, '2022-06-14 19:18:07', '2022-06-14 19:18:07', 4, 'amri123');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `assets`
--
ALTER TABLE `assets`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `master_mails`
--
ALTER TABLE `master_mails`
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
-- Indeks untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `peminjaman_items`
--
ALTER TABLE `peminjaman_items`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `statuses`
--
ALTER TABLE `statuses`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT untuk tabel `assets`
--
ALTER TABLE `assets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `master_mails`
--
ALTER TABLE `master_mails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `peminjaman_items`
--
ALTER TABLE `peminjaman_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
