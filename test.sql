-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2024 at 02:43 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori_produk`
--

CREATE TABLE `kategori_produk` (
  `id_kategori` varchar(100) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `kategori_produk`
--

INSERT INTO `kategori_produk` (`id_kategori`, `nama_kategori`) VALUES
('A01', 'Alat Musik');

-- --------------------------------------------------------

--
-- Table structure for table `produck`
--

CREATE TABLE `produck` (
  `nama_product` varchar(100) NOT NULL,
  `kategori_product` varchar(100) NOT NULL,
  `harga_beli` int(11) NOT NULL,
  `harga_jual` int(11) NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `produck`
--

INSERT INTO `produck` (`nama_product`, `kategori_product`, `harga_beli`, `harga_jual`, `stock`) VALUES
('Biola', 'A01', 100000, 130000, 10),
('Gitar', 'A01', 1000000, 1300000, 20);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `posisi` varchar(100) NOT NULL,
  `foto` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `nama`, `posisi`, `foto`) VALUES
('admin', 'admin', 'budi', 'web developer', 0xffd8ffe000104a46494600010101006000600000ffe110ee4578696600004d4d002a000000080004013b00020000000c0000084a8769000400000001000008569c9d000100000018000010ceea1c00070000080c0000003e000000001cea00000008000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000053414641524920434f4d500000059003000200000014000010a49004000200000014000010b8929100020000000333310000929200020000000333310000ea1c00070000080c00000898000000001cea000000080000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000323032343a30313a31302031313a33373a353800323032343a30313a31302031313a33373a3538000000530041004600410052004900200043004f004d0050000000ffe10b1e687474703a2f2f6e732e61646f62652e636f6d2f7861702f312e302f003c3f787061636b657420626567696e3d27efbbbf272069643d2757354d304d7043656869487a7265537a4e54637a6b633964273f3e0d0a3c783a786d706d65746120786d6c6e733a783d2261646f62653a6e733a6d6574612f223e3c7264663a52444620786d6c6e733a7264663d22687474703a2f2f7777772e77332e6f72672f313939392f30322f32322d7264662d73796e7461782d6e7323223e3c7264663a4465736372697074696f6e207264663a61626f75743d22757569643a66616635626464352d626133642d313164612d616433312d6433336437353138326631622220786d6c6e733a64633d22687474703a2f2f7075726c2e6f72672f64632f656c656d656e74732f312e312f222f3e3c7264663a4465736372697074696f6e207264663a61626f75743d22757569643a66616635626464352d626133642d313164612d616433312d6433336437353138326631622220786d6c6e733a786d703d22687474703a2f2f6e732e61646f62652e636f6d2f7861702f312e302f223e3c786d703a437265617465446174653e323032342d30312d31305431313a33373a35382e3331323c2f786d703a437265617465446174653e3c2f7264663a4465736372697074696f6e3e3c7264663a4465736372697074696f6e207264663a61626f75743d22757569643a66616635626464352d626133642d313164612d616433312d6433336437353138326631622220786d6c6e733a64633d22687474703a2f2f7075726c2e6f72672f64632f656c656d656e74732f312e312f223e3c64633a63726561746f723e3c7264663a53657120786d6c6e733a7264663d22687474703a2f2f7777772e77332e6f72672f313939392f30322f32322d7264662d73796e7461782d6e7323223e3c7264663a6c693e53414641524920434f4d503c2f7264663a6c693e3c2f7264663a5365713e0d0a0909093c2f64633a63726561746f723e3c2f7264663a4465736372697074696f6e3e3c2f7264663a5244463e3c2f783a786d706d6574613e0d0a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020200a202020202020202020202020202020202020202020202020202020203c3f787061636b657420656e643d2777273f3effdb00430007050506050407060506080707080a110b0a09090a150f100c1118151a19181518171b1e27211b1d251d1718222e222528292b2c2b1a202f332f2a32272a2b2affdb0043010708080a090a140b0b142a1c181c2a2a2a2a2a2a2a2a2a2a2a2a2a2a2a2a2a2a2a2a2a2a2a2a2a2a2a2a2a2a2a2a2a2a2a2a2a2a2a2a2a2a2a2a2a2a2a2a2a2affc000110800a400b003012200021101031101ffc4001f0000010501010101010100000000000000000102030405060708090a0bffc400b5100002010303020403050504040000017d01020300041105122131410613516107227114328191a1082342b1c11552d1f02433627282090a161718191a25262728292a3435363738393a434445464748494a535455565758595a636465666768696a737475767778797a838485868788898a92939495969798999aa2a3a4a5a6a7a8a9aab2b3b4b5b6b7b8b9bac2c3c4c5c6c7c8c9cad2d3d4d5d6d7d8d9dae1e2e3e4e5e6e7e8e9eaf1f2f3f4f5f6f7f8f9faffc4001f0100030101010101010101010000000000000102030405060708090a0bffc400b51100020102040403040705040400010277000102031104052131061241510761711322328108144291a1b1c109233352f0156272d10a162434e125f11718191a262728292a35363738393a434445464748494a535455565758595a636465666768696a737475767778797a82838485868788898a92939495969798999aa2a3a4a5a6a7a8a9aab2b3b4b5b6b7b8b9bac2c3c4c5c6c7c8c9cad2d3d4d5d6d7d8d9dae2e3e4e5e6e7e8e9eaf2f3f4f5f6f7f8f9faffda000c03010002110311003f00fa468a28a0028a28a0028a28a0028a28a0028a28a0028a28a0028a28a0028a28a0028a28a0028a28a0028a28a0028a28a0028a28a0028a28a0028a28a0028a2aa6ada9dbe8ba2deea97cc56daca07b89481921114b1c7e0280326cfc6fa35f78faff00c1d6f24a756d3ed96ea7531e1021dbd1bb9c4887fe05f5c7435e25f01b4ebdf10ebfe25f899abc0d1beb933436019b25600ff30f70364680ff00d3335edb400514514005145140051457ce7f13bc71e2cf1a788b5ad2be1edddde97a6f84209ee354bf867687cd78d5894caf38cc6caa3f88e49e064007d1945715f07fc43a878abe13689ac6b3289af6749525902e37ec95e304fb90833ef9aed6800a28a2800a28a2800a28a2800a28a2800a28a2800af33fda0b5b1a2fc19d5543625d41a3b38fdf7365bff1c57af4caf10fda1186b9ae781fc1f17ef1f51d504b2c63b2021371f6c3bfe46803d2be1d68a7c3df0db40d2dd7649058c7e6afa48cbb9fff001e26ba5ac0f1478e7c35e0bb7497c4fabdbd8093ee2365a471ea1141623dc0af33d57e3cdef883595d17e0ee82de22bcdbbe4bab98de385067fba4a903fda62a3eb401ed748cea88ceec155464b138007ad7869f0ffc75f1c4bb75ed6ecfc1963b8078b4f6065e9f794c6ccc7e8651f4a74dfb3debfaa84b6f12fc54d7355d34b869ad1d64fde01e85e67507dca9fa5007b3e9fa9d86ad682eb4abdb7beb762544d6d2ac8848ea372922ad573fe09f04e91e00f0da68ba024a2dc48d2c924cfba495ce016620019c003800600af33bcf136b7e32fda52cb46f0aeb17b0687e1f8f3aa881b10c922b316561d1b27647cf230c474cd0077df147c603c0df0eb53d66374176b1f9368ac47cd33fcab81df192c47a29af1f86da0f85ff00b2ddf5fdfa19b57f17c5b1d9b2493711b6d04f5f962dedcff1123bd6a7c489ad3c7ffb43784bc14d225d69da707babf890ee5f330ce637c7fb31a0ff00b698aadf1a6e5fe22fc4ef0f7c30d19e544b69c5c6a6caa36c60a060c33dd222e7d09703ad007a7fc21f0f5e785be12e83a4ea6bb2ee385a59530418cc92349b083dd77e0fb835da514500145145001451450014514500145145001451450079d7c4af8a575e0bd52c744d0bc3579e20d66fe169a286056daaa0919f95496c119206303a91915e1d6d65f103e317c6495eeae60f0dea9a2c021b89ed19d7ec69b88c2e1c9321dedc6e1dc12315f575fddc5a7e9f717b71c476d0bcae7d15464ff2af1dfd9a2c659fc2bae78a2f866f75cd4ddddffbcabce7fefb79280347c33f00346d3f576d5fc67a9dd78c7522301f53198c7b946662c7fde623dabd374cd1f4cd16dbecfa369d69a7c19cf956902c4b9fa2802ae514005145657897c49a6784bc3d75aceb770b05a5b26589eae7b2a8eec4f00500705f1b3e2b1f87fa2c363a1c904de21be602281d4b18a23b819703bee00004f24f43822ad7c2ff000641f09fe1fdddcf892f205be9d9af354bc2e4aae3a2ee3c90067ea59b1d6b97f831a05e78cbc45a87c55f16c4ad737eed16976ecb95822538deb9f4c6d07d98f7cd49fb50f8923d3be1cdbe890dd22dd6a7769e6419f99a04cb16c7a6f11d0079b7c3df8836fe09f87babf8816d5aff00c6de22d4e582cd9a3dece02c6c58f7dbbe46e07de6007638f5cf81bf0c27f0769536bfe245f33c49ab2ef9246772f0c2e11fca70d8f9f7825b8eb819e39e6fe06fc35b9bbbf8fc73e2cd3a3b7db0c71e8b625702de351812edec48e413c92ccdd4835efb400514514005145140051451400514514005145140051451401e4dfb46f89ae342f8606c2c6411dc6b570b645b38c444167e7dc00a7d98d50d27e2cfc33f85be0bb2f0ed96b2756974d8c2489a6c2d2f9d213b9dd5ce2320b127ef77c5627c78d16cbc55f18bc07a08926967ba6297b0472e3cbb73229dca3f85b689727bed5f4af58d03e187827c31e51d1bc33a7c52c3279b1dc4b179d3237a8924dce3f03c5007987fc2d7f8a1e3c8f6fc38f03b58594884a6a5a8721977603a33ed8f23ba8f33bd7ab7816cfc5b63e1bf27c7da9596a5aa899889ec936af9781b41f954139cf21476fad749556e6fd6dafeced5adee64376cea258a12d1c5b54b66461c2038c027a9c0ef4016abc17e2c36a1f14fe28d9fc2ed2992dacb4e09a86a774cb9643b38c7b0595401dd9c6718aecbe267c6bd0be1b5d2e9d756b75a86a92dbf9f1dbc1b55141240dee4fcb920f40c78e9c8af1df007c22d5fe2e4b75e37f166b72da596ad349b92d7fd75c057c1193f2aa02b8190df73a0c03401e91e2bfda17c25e139ee342f0fd95c6a97d689e4409671a8b5120e047bb39c0e9f2a91d8579a7842c7c45e28fda7f4fb8f1f58c325e880dedcd91195b48fc83e529524edc168ced249cb0cf39afa13c1de08f0efc33f0dcb6ba3466281419aeaeee1834b2e013b9d801c01d80007a726bccfe04dbea3e31f19f88be29eaac901d44b69f0dac69c6d5f28eecfa0088bee4366803dd68a28a0028a28a0028a28a0028a28a0028a28a0028a28a0029199514b390aaa3249380052d71df1675db7f0f7c29f10dddccc62696ca5b680a9f98cb22944c7e2d9fa027b50079d7c0bb35f18f8e3c57f11b52569e596f5ad74e7939f2a3c64819f4431a83e991debddabe60f863f19edbc27f0f347f0c786fc2da8788b5d06696ea0b50547323b020857662136e7e5c0c75ae923d47e3bfc40beb9bad16187c13a66dd91dbea51a8763df9689a4cf3f7b6aafa73401ee73dfd9dadc4105d5d410cd70db618e4902b4a7d141ea7e95e75f177e2acfe06167a2f87b4e7d4fc45aaa37d9608c16308fbaae50025c939c28ebb4fa73ccd87c23b4f04df37c40f89fe2db9f114ba4c0b3a7da03810caac0ae1d9c97c370a300648e3b533e09f87b50f19f89aebe2cf8a66324f72f343a65b11958533b4b29cf4037c6063fbc4f26803cd3c7fe03d4b42f0de91aa7882fefb55f1d78b6758d6070730a1501a3f52f978931c000b2818e6beaef0de8367e17f0cd8689a6aedb6b18562438e5b1d58fb93927dc9af18d76f20f1e7ed5de1fd3ecfcebed3bc3313bddec0765bdca6f6ce7fdf1029f75c76af7aa00f22fda07c537567e1ab3f07e8599359f134a2d52343f3084901be9b890bf42de95e81e09f0b5b782fc19a6e8167865b3842bc807fac90f2eff8b126bc8bc3b76bf13ff69a97c4da6ed7d0fc2d686d63b82b959dc8900c67fda91d81f441eb5d6f8c7e3cf847c2d706c2ca5935ed533b45ae9d8701bd19fa03ec371f6a00f4dac5d7bc63e1cf0ba03e21d6ec74f246e549e601d87b2fde3f80af23fb47c6cf897ff1ed0c3e04d1e4fe27c8b965ff00d0f3ee0462b73c3bfb3a78434d90ddf88deebc4ba839dd24f7d2b2a96f5d8a79ff008116a00c7d4fe31789bc79a9cba2fc18d1de6443b66d6ef23db1c7eea1b81ebf3649ecb5e97f0ff41d7fc3de17169e2dd79f5dd49e6695ee181c46081fbb52792a0827240ebd00c56ee9ba5d868d611d8e91656f656b1fdc86de3088bf80ab540051454575776f636b25cdecf15bdbc437492cce11507a927814012d1451400514514005737e34f1ff0087bc05a51bdf115f2c448fdd5ac6434d37fb899e7ebc01dcd79f7c48f8d72da6a371e12f86f673eb1e25385f3ad6213c76e782d8033bd80ebc614f5e84549e0df8150aea4be23f89b7efe25d7dc87d9348cd040c0e40ff006f1e84051d36f43401cd1f8a3f123e2b6a3058fc34d224f0ee9aed2abeaf77199236da338693cb2b19ed85dc724738ae43c6ff000efc41178f7c23e13d7fc6da8789aeb5694493dbced214b48f700cca59db3c0939c2f09efc7d6b5e21a1aaeabfb647885ee8f9c34ad217eca7a888948011ff009164fccd007acf873c2da278474b5d3bc39a6c3616c0e4ac609673eacc72cc7dc926b5a8a64d3c56d03cd712a45120cbbc8c15547a927a50078efed457d7169f096086de5291de6a90c33a8fe340924801ff008146a7f0af50d3ac74cf07784e0b384adae99a4da6d2ef8f96345e5d88ef80493dce4d7cf5fb46fc4df0bf89fc376be1cf0fdfff00685ddb6a09732cd02e615558e45203ff0011cb8e991d79acff00893f183e206b7e128d3fe11f4f0fe89af2186dcb12f71771b28c85ce0942ac3909d1873cd005df857f137c39e16baf1c78bfc4377e40d7f54f36d34f8879970c0348e4edecbfbe03712012ac33c569f8aff681f184fe1e9f54f0af8465d2b4952146aba9aeedc58e06c5e14b7b02fdcd76df0ebe02f867c196d05dea96f1eb1ad050cf7170bba289fb88d0f1c1e8c413c678e95ce7c5458be20fc73f09f8163469ed34d26f7544c9d854ed6dad8ff6140cff00d35a00e6fe1b7c00d4f5df03daddebde28d474cb0d43fd2574ab42402ac000ed93b773281fc278c73d87b7f82fe197857c05001e1fd3116e76e1ef67fde4efebf39e80fa2e07b575688b1a2a46a1554615546001e94b40051515d5ddbd8dac9737b3c56f04632f2cae11547a927815e55e28fda0fc3da75d8d2fc1f6d71e2bd5e43b6386c5498b77fbe012dff0107ea2803d68900127803a9af38f157c78f02f85657b76d49b54bc43836fa6a79a41f42f909f86ecfb571c3c09f143e299f37e216b5ff08d68b273fd9161f7dd7d180247fdf65b1fdd15e97e10f85fe11f04429fd87a4422e57ade4e04b3b1f5de7a7d1703da803cebfe1617c5bf1d7cbe07f06a68364ff7750d54fcd8fef2ef0011f457a96dfe01eade24b98eefe2978d6ff5a656ddf62b57290a9f404f41feeaad7b6d14005145140057947c73f88175e1ed1a0f0bf8677cde24d747930c51292f1c4d952eb8e8c4fcabf89ed5eaf5e1be1012f8eff69ef11f882e005b6f09c674db7427e60e4c91e7e87139ff00810a00edbe15fc2cd37e1b68411025ceb172a3edb7d8e58f5d8b9e880fe7d4fb77945140057887c0cdb7ff0013be27eac3f7c926aa23b7b9ea193cd9ce01f4c08ff4ae9be3af8d9fc1df0e2e134fb9f2756d4c8b5b3087e719c6f603af0b9e7b165ae5ff00b574cfd9ff00e10da6976c12ebc53a8a8945afde792e1c00599473b170147aed03a926803d0be207c4cf0ffc39d3567d6e7692ea6526daca1e65988f6ecbfed1e3ea78af2eb2f05f8b7e386af16b7f11567d0bc3312eeb2d22172b2499e8c7238f762013fc20039ae83e1a7c209a0be83c67f11ae66d5fc4d3af98b15d1de9664f2060f5603f05e80700d7b050079978afe12e836bf07f5ff0ff00847498ed269ed7cc468977cd71244c25442edf31dcc8075e33c578afc38d5eefe267c49f87ba5dec73bda7856c4b4a2301551a16631c9f43b6d50e7a907d6beb7ae5f41f05783fe1fadf5fe8ba75a690b71f35cdc3ca7006738dcec76ae7b0c0f6a00ded4f51b6d1f48bcd4afdca5ad9c0f7133019da88a598e3bf00d78afc060fe29f1e78dfc7f3c33f957f75f66b09a6e1bc9dc58a11fecaac03f0c553f8d7f18344d6fc2775e10f045dc9abea7a8c890c8f628ccab186dcc1587df2db42e1720866e6b33c19e06f8bfabf836c3c3df6f1e0bf0fdb215c0045d4bb98bb3100ef04b337ca590638c5007b4f8b7e25f84bc128c3c41acc10dc01916b19f3266f4f9172467d4e07bd79a3fc63f1cf8ee46b7f855e0d992d98ed1aaea400503d4721011e9b9be95d3f84fe00f82bc3322dd5e5a3ebba867735cea47cc1bbb911fddebea09f7af4d4458e3548d42228015546001e82803c3ed7e036b7e2ab94bff8b3e31bcd5640777d82cdf6c287d012001f4545fad7aa7867c13e1cf075a983c35a45b580618791173238ff0069ce59bf135bb450014514500145145001451450015e25f037fe4a9fc59ffb0d0ffd1f755edb5e23f03481f15be2c292371d64103d479f73fe3401edd45364912189e599d638d14b3bb1c0503a927b0af9dbe27fc7f835cb29fc27f0e23bbb8bebe945a7dbd1701c31dbb6119dc4b1380703af1d8d00725f113e20b6bbf1e8dde8965fdaf26903ec3a3dbedde8f72091e6ed1f7b0e491ebb13b57af7c37f834349d417c59e3db86d6bc553913169db7a5ab76dbfde61ebd063e50319397e0ff0af827e057862d35df195c411788e680f98cefe64819bac70c63d3852c3df900d35be37f8b3c5ee61f85be03bbbb8c9c2ea1a90db10fa80428fc5ff000a00f70ae37c4ff167c13e11de9abebd6c6e1320dadb1f3a5cfa154ced3fef62bcff00fe1547c48f1bfcff0011fc74f6768ff7b4dd286148feeb636ae7dc87aecbc31f043c05e16d8f6da2477d72bff2f1a89f3db3eb83f283ee14500718ff0018bc71e3a91a0f853e0d996d49dbfdaba980a83dc0c84047a6e6fa5496df01f5bf155ca5f7c59f195e6ace0ee16364fb2143ec48c01feea2fd6bdb9555142a2855518000c0029680307c33e08f0d783adfcaf0de8f6b63918691133238ff0069ce58fe26b7a8a2800a28a2800a28a2800a28a2800a28a2800a28a2800af01f165c0f84bfb4659789e4689745f1621b7bb04ed1030318790fd0ec727bee71ef5efd5e17fb41f81fc77e3ad4749b4f0c6990dee936d1191cf9f146eb39241c976076eddb8c7be7b50071be3bf1fea1f12adf50d41efee741f00e9e4c4a10ed9f5697b46aa48dc4f071caa2fccd93c570df0ab4bf136a5accd3f823408aeb5353b23d46ed0341a70e0ef1b86df33d09c9c67009391ea5e12fd9d75fbfd434c7f895a9dbcfa3e9d0ed834bb49dc91fec1c2aaa027962a4963df3cd7d07a6e9963a3e9f158e95690d9dac2311c304611547b01401e59e14f805a6db6a1fdb9f102fe5f15eb721dced74c5a043e9b4f2f8ff006b8ff6457adc71a4312c7122a46802aaa8c0503a0029d45001451450014514500145145001451450014514500145145001451450014514500145145001451450014514500145145001451450014514500145145001451450014514500145145007ffd9);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori_produk`
--
ALTER TABLE `kategori_produk`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `produck`
--
ALTER TABLE `produck`
  ADD PRIMARY KEY (`nama_product`),
  ADD KEY `fkey_kategori` (`kategori_product`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `produck`
--
ALTER TABLE `produck`
  ADD CONSTRAINT `fkey_kategori` FOREIGN KEY (`kategori_product`) REFERENCES `kategori_produk` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;