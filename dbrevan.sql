-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2025 at 09:49 AM
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
-- Database: `dbrevan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_detailpenjualan`
--

CREATE TABLE `tb_detailpenjualan` (
  `id_detail` int(11) NOT NULL,
  `id_penjualan` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `jumlahproduk` int(11) NOT NULL,
  `subtotal` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_detailpenjualan`
--

INSERT INTO `tb_detailpenjualan` (`id_detail`, `id_penjualan`, `id_produk`, `jumlahproduk`, `subtotal`) VALUES
(4532, 93, 5634, 15, 590.00),
(5421, 7645, 7357, 34, 100009.00),
(4632, 9254, 43254, 15, 790.00),
(52738, 4748, 6438, 15, 948.00),
(4532, 5435, 43254, 15, 685.00),
(1245, 8961, 8964, 5, 2900.00),
(1245, 8961, 8964, 5, 2900.00);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pelanggan`
--

CREATE TABLE `tb_pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `namapelanggan` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `notlp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_pelanggan`
--

INSERT INTO `tb_pelanggan` (`id_pelanggan`, `namapelanggan`, `alamat`, `notlp`) VALUES
(1234, 'rika', 'jl.adiyaksa', '089654321'),
(2435, 'khirani', 'jl.buahbatu', '36487635278'),
(6543, 'hani', 'jl.sukapura', '08935467'),
(7654, 'erik', 'jl.cantik', '54677687556'),
(8459, 'sherly', 'jl.sukamulya', '27364598764'),
(8749, 'khirana', 'jl.karees', '9808568746534'),
(8765, 'ravi', 'jl.batununggal', '3445324455'),
(26522, 'shey', 'jl.sukapu', '0897653234'),
(54321, 'arik', 'jl.karees', '0897653234');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penjualan`
--

CREATE TABLE `tb_penjualan` (
  `id_penjualan` int(11) NOT NULL,
  `tanggalpenjualan` date NOT NULL,
  `totalharga` decimal(10,2) NOT NULL,
  `pelanggan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_penjualan`
--

INSERT INTO `tb_penjualan` (`id_penjualan`, `tanggalpenjualan`, `totalharga`, `pelanggan`) VALUES
(0, '0000-00-00', 0.00, 0),
(987, '2001-01-01', 100.00, 3422),
(5467, '2002-02-02', 12.00, 4356),
(9875, '2003-03-03', 500.00, 4546),
(46456, '2004-04-04', 200.00, 3241),
(65778, '2005-05-05', 67.00, 4321);

-- --------------------------------------------------------

--
-- Table structure for table `tb_produk`
--

CREATE TABLE `tb_produk` (
  `id_produk` int(11) NOT NULL,
  `namaproduk` varchar(255) NOT NULL,
  `harga` decimal(10,2) NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_produk`
--

INSERT INTO `tb_produk` (`id_produk`, `namaproduk`, `harga`, `stok`) VALUES
(4435, 'sepatu', 200.00, 100),
(6438, 'selimut', 100.00, 100),
(8964, 'jaket', 230.00, 20),
(46235, 'meja', 67.00, 150),
(55342, 'ban', 2700.00, 60),
(65432, 'hp', 260.00, 6);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `nama` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`nama`, `username`, `password`, `status`) VALUES
('dian', 'sherly', 'akuuu', 'Admin'),
('gian', 'gustiani', 'fgeiruo', 'Pegawai'),
('rian', 'tian', 'etrthvfg', 'PILIHAN'),
('sherly', 'sheypoll', 'htry', 'admin'),
('shey', 'cherliii', '9485', 'Owner');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `tb_penjualan`
--
ALTER TABLE `tb_penjualan`
  ADD PRIMARY KEY (`id_penjualan`);

--
-- Indexes for table `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`nama`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54322;

--
-- AUTO_INCREMENT for table `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65433;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
