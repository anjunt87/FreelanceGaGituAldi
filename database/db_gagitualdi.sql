-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 02 Feb 2022 pada 09.18
-- Versi Server: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_gagitualdi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `icon_gambar`
--

CREATE TABLE IF NOT EXISTS `icon_gambar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(100) NOT NULL,
  `img` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `icon_gambar`
--

INSERT INTO `icon_gambar` (`id`, `url`, `img`) VALUES
(1, 'favicon', 'favicon.png'),
(2, 'favicon-16x16.png', 'favicon.ico'),
(3, 'hero-image', 'hero.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `buyer_id` varchar(100) NOT NULL,
  `freelance_id` varchar(100) NOT NULL,
  `services_id` int(11) NOT NULL,
  `file` text NOT NULL,
  `note` text NOT NULL,
  `expired` date NOT NULL,
  `reviews_id` int(11) NOT NULL,
  `order_status_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `order`
--

INSERT INTO `order` (`id`, `buyer_id`, `freelance_id`, `services_id`, `file`, `note`, `expired`, `reviews_id`, `order_status_id`) VALUES
(1, 'admin3@admin.com', 'admin@admin.com', 9, '', '', '2022-02-01', 0, 1),
(3, 'admin3@admin.com', 'admin@admin.com', 9, '', '', '2022-02-01', 0, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `order_status`
--

CREATE TABLE IF NOT EXISTS `order_status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `request`
--

CREATE TABLE IF NOT EXISTS `request` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `request`
--

INSERT INTO `request` (`id`, `user_id`) VALUES
(1, 'admin@admin.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `reviews`
--

CREATE TABLE IF NOT EXISTS `reviews` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `services_id` int(100) NOT NULL,
  `buyer_id` varchar(100) NOT NULL,
  `freelance_id` varchar(100) NOT NULL,
  `review` varchar(255) NOT NULL,
  `rating` int(11) NOT NULL,
  `time_review` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `reviews`
--

INSERT INTO `reviews` (`id`, `services_id`, `buyer_id`, `freelance_id`, `review`, `rating`, `time_review`) VALUES
(5, 9, 'admin3@admin.com', 'admin@admin.com', 'Lorep ipsum', 4, '2022-01-31 11:10:31.902811');

-- --------------------------------------------------------

--
-- Struktur dari tabel `services`
--

CREATE TABLE IF NOT EXISTS `services` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `judul_services` varchar(100) DEFAULT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  `keunggulan1` varchar(255) DEFAULT NULL,
  `keunggulan2` varchar(255) DEFAULT NULL,
  `keunggulan3` varchar(255) DEFAULT NULL,
  `estimasi` varchar(255) DEFAULT NULL,
  `revisi` varchar(255) DEFAULT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `k_kamu1` varchar(255) DEFAULT NULL,
  `k_kamu2` varchar(255) DEFAULT NULL,
  `k_kamu3` varchar(255) DEFAULT NULL,
  `note` text,
  `tagline` varchar(255) DEFAULT NULL,
  `role` varchar(100) DEFAULT NULL,
  `price` varchar(100) DEFAULT NULL,
  `status` int(100) DEFAULT NULL,
  `user_id` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data untuk tabel `services`
--

INSERT INTO `services` (`id`, `judul_services`, `deskripsi`, `keunggulan1`, `keunggulan2`, `keunggulan3`, `estimasi`, `revisi`, `thumbnail`, `k_kamu1`, `k_kamu2`, `k_kamu3`, `note`, `tagline`, `role`, `price`, `status`, `user_id`) VALUES
(9, 'lorep ipsum', 'lorep ipsum', 'lorep ipsum', 'lorep ipsum', 'lorep ipsum', '1 Hari', '3 Kali', NULL, 'lorep ipsum', 'lorep ipsum', 'lorep ipsum', NULL, NULL, 'lorep ipsum', '500000', 1, 'admin@admin.com'),
(11, 'lorep ipsum', 'lorep ipsum', 'lorep ipsum', 'lorep ipsum', 'lorep ipsum', '3 Hari', '2 Kali', NULL, 'lorep ipsum', 'lorep ipsum', 'lorep ipsum', NULL, NULL, 'lorep ipsum', '222222', 1, 'admin3@admin.com'),
(12, 'lorep ipsum2', 'lorep ipsum2', 'lorep ipsum2', 'lorep ipsum2', 'lorep ipsum2', '2 Hari', '1 Kali', NULL, 'lorep ipsum2', 'lorep ipsum2', 'lorep ipsum2', NULL, NULL, 'WEb Dev', '2222222', 1, 'admin@admin.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role_id` int(100) NOT NULL,
  `bagian` varchar(100) NOT NULL,
  `date_created` date NOT NULL,
  `is_active` int(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `nama_lengkap`, `password`, `role_id`, `bagian`, `date_created`, `is_active`, `foto`) VALUES
(1, 'admin3@admin.com', 'admin3@admin.com', 'admin3', '21232f297a57a5a743894a0e4a801fc3', 1, 'C# Expert', '2022-01-28', 1, 'queue-animate.svg'),
(2, 'admin@admin.com', 'admin@admin.com', 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, 'Web Developer', '2021-12-24', 1, 'default.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_acces_menu`
--

CREATE TABLE IF NOT EXISTS `user_acces_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data untuk tabel `user_acces_menu`
--

INSERT INTO `user_acces_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(3, 2, 2),
(29, 1, 3),
(31, 1, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_detail`
--

CREATE TABLE IF NOT EXISTS `user_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(100) NOT NULL,
  `foto` text NOT NULL,
  `role` int(11) NOT NULL,
  `kontak` varchar(100) NOT NULL,
  `bio` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `user_detail`
--

INSERT INTO `user_detail` (`id`, `user_id`, `foto`, `role`, `kontak`, `bio`) VALUES
(1, 'admin3@admin.com', 'queue-animate.svg', 1, '08071996', 'aaaaaaaaaaaaaaaaaa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE IF NOT EXISTS `user_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Menu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE IF NOT EXISTS `user_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_sub_menu`
--

CREATE TABLE IF NOT EXISTS `user_sub_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data untuk tabel `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin/c_admin', 'fas fa-fw fa-home', 0),
(2, 3, 'Layanan Saya', 'admin/services', 'fas fa-fw fa-clipboard-list ', 0),
(3, 3, 'Permintaanku', 'admin/request', 'fas fa-fw fa-plus-square', 0),
(4, 3, 'Pesananku', 'admin/orders', 'fas fa-fw fa-stream', 0),
(24, 3, 'Menu Management', 'menu', 'fas fa-fw fa-folder', 1),
(25, 3, 'SubMenu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
(26, 2, 'My Profile', 'admin/profile', 'fas fa-fw fa-user-tie', 1),
(27, 2, 'Edit Profile', 'admin/profile', 'fas fa-fw fa-edit', 0),
(30, 1, 'Explore', 'admin/c_admin/explore', 'fas fa-fw fa-search', 1),
(31, 1, 'All User', 'admin/c_admin/allUser', 'fas fa-fw fa-user-tie', 1),
(32, 1, 'Role', 'admin/c_admin/role', 'fas fa-fw fa-user-tie', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
