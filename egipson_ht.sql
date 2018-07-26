-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2018 at 06:59 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `egipson_ht`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('objccc32rnqtea4tp9q13dig8guvnbii', '::1', 1527581912, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373538313632303b69647c733a313a2231223b6e616d617c733a31333a2241646d696e6973747261746f72223b757365726e616d657c733a353a2261646d696e223b6c6576656c7c733a313a2231223b6c6f67696e7c623a313b),
('5biqug6ceei3l8atqqs58akgc9eg7ptu', '::1', 1527582001, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373538313932313b69647c733a313a2231223b6e616d617c733a31333a2241646d696e6973747261746f72223b757365726e616d657c733a353a2261646d696e223b6c6576656c7c733a313a2231223b6c6f67696e7c623a313b),
('d0qka4go7rnlr7037oubnrrs8da8mgmc', '::1', 1527582466, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373538323232343b69647c733a313a2231223b6e616d617c733a31333a2241646d696e6973747261746f72223b757365726e616d657c733a353a2261646d696e223b6c6576656c7c733a313a2231223b6c6f67696e7c623a313b),
('g3v7nj199h18m6aun20lr10hdm25kjl8', '::1', 1527585398, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373538343637333b69647c733a313a2231223b6e616d617c733a31333a2241646d696e6973747261746f72223b757365726e616d657c733a353a2261646d696e223b6c6576656c7c733a313a2231223b6c6f67696e7c623a313b),
('eeak815usv6ct23r1vifnsrjrr22upu0', '::1', 1527585800, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373538353431353b69647c733a313a2231223b6e616d617c733a31333a2241646d696e6973747261746f72223b757365726e616d657c733a353a2261646d696e223b6c6576656c7c733a313a2231223b6c6f67696e7c623a313b),
('g9oi6qsqq39thanjcapuefi4fb3ha38v', '::1', 1527586019, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373538353830333b69647c733a313a2231223b6e616d617c733a31333a2241646d696e6973747261746f72223b757365726e616d657c733a353a2261646d696e223b6c6576656c7c733a313a2231223b6c6f67696e7c623a313b),
('u89m5dj3cn9vl75ehdildj80ojvdn7dh', '::1', 1527588058, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373538383034313b69647c733a313a2231223b6e616d617c733a31333a2241646d696e6973747261746f72223b757365726e616d657c733a353a2261646d696e223b6c6576656c7c733a313a2231223b6c6f67696e7c623a313b),
('flgjpqou7d2ilrbn6lcpcp4q8hqne4ls', '::1', 1527594360, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373539343335343b69647c733a313a2231223b6e616d617c733a31333a2241646d696e6973747261746f72223b757365726e616d657c733a353a2261646d696e223b6c6576656c7c733a313a2231223b6c6f67696e7c623a313b),
('g0mtdb72jdgfeso4q2v8n7m6kbbej4i4', '::1', 1527595117, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373539343833393b69647c733a313a2231223b6e616d617c733a31333a2241646d696e6973747261746f72223b757365726e616d657c733a353a2261646d696e223b6c6576656c7c733a313a2231223b6c6f67696e7c623a313b),
('7vepatrt6j1ae842uhjmjbnsbibij3ks', '::1', 1527595443, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373539353134323b69647c733a313a2231223b6e616d617c733a31333a2241646d696e6973747261746f72223b757365726e616d657c733a353a2261646d696e223b6c6576656c7c733a313a2231223b6c6f67696e7c623a313b),
('i8s210mr2mdcrqvtqoh6hl8cslfmk3oc', '::1', 1527595752, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373539353434333b69647c733a313a2231223b6e616d617c733a31333a2241646d696e6973747261746f72223b757365726e616d657c733a353a2261646d696e223b6c6576656c7c733a313a2231223b6c6f67696e7c623a313b),
('nbvl221u00drck6734n8kpa61ivbj8p5', '::1', 1527596052, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373539353737303b69647c733a313a2231223b6e616d617c733a31333a2241646d696e6973747261746f72223b757365726e616d657c733a353a2261646d696e223b6c6576656c7c733a313a2231223b6c6f67696e7c623a313b),
('7eqqt4n4gdqv0sk2gob7lv89k3f579os', '::1', 1527596285, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373539363037323b69647c733a313a2231223b6e616d617c733a31333a2241646d696e6973747261746f72223b757365726e616d657c733a353a2261646d696e223b6c6576656c7c733a313a2231223b6c6f67696e7c623a313b),
('redi26m8pq262febukuf4madofvoknf7', '::1', 1527596484, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373539363438333b69647c733a313a2231223b6e616d617c733a31333a2241646d696e6973747261746f72223b757365726e616d657c733a353a2261646d696e223b6c6576656c7c733a313a2231223b6c6f67696e7c623a313b),
('e0lickmj1qtp393a644nqc1mlsq1r3f7', '::1', 1527597182, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373539363838323b69647c733a313a2231223b6e616d617c733a31333a2241646d696e6973747261746f72223b757365726e616d657c733a353a2261646d696e223b6c6576656c7c733a313a2231223b6c6f67696e7c623a313b),
('gpcjdkpqvh99is86mh8ioqp0e02ved31', '::1', 1527597478, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373539373138333b69647c733a313a2231223b6e616d617c733a31333a2241646d696e6973747261746f72223b757365726e616d657c733a353a2261646d696e223b6c6576656c7c733a313a2231223b6c6f67696e7c623a313b),
('lojnp0i7fruen879f7aji2u3do9asdgo', '::1', 1527599316, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373539373438343b69647c733a313a2231223b6e616d617c733a31333a2241646d696e6973747261746f72223b757365726e616d657c733a353a2261646d696e223b6c6576656c7c733a313a2231223b6c6f67696e7c623a313b),
('4kbo8srcsf4mefa27p38cc0fkrbipr61', '::1', 1527599498, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373539393430333b69647c733a313a2231223b6e616d617c733a31333a2241646d696e6973747261746f72223b757365726e616d657c733a353a2261646d696e223b6c6576656c7c733a313a2231223b6c6f67696e7c623a313b),
('6mt8k5nnhgepbg91tafephvd0gv0hloe', '::1', 1527646292, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373634353939333b69647c733a313a2231223b6e616d617c733a31333a2241646d696e6973747261746f72223b757365726e616d657c733a353a2261646d696e223b6c6576656c7c733a313a2231223b6c6f67696e7c623a313b),
('3t8p5o8vo0qhgee94bo867gi3ddemdk1', '::1', 1527646584, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373634363239353b69647c733a313a2231223b6e616d617c733a31333a2241646d696e6973747261746f72223b757365726e616d657c733a353a2261646d696e223b6c6576656c7c733a313a2231223b6c6f67696e7c623a313b),
('cttfuc2l2n22paflq8v9q24om9ln0do7', '::1', 1527646855, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373634363539393b69647c733a313a2231223b6e616d617c733a31333a2241646d696e6973747261746f72223b757365726e616d657c733a353a2261646d696e223b6c6576656c7c733a313a2231223b6c6f67696e7c623a313b),
('5d79licmd4niurrjud83d6bgobh0l2ci', '::1', 1527647213, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373634363931333b69647c733a313a2231223b6e616d617c733a31333a2241646d696e6973747261746f72223b757365726e616d657c733a353a2261646d696e223b6c6576656c7c733a313a2231223b6c6f67696e7c623a313b),
('31v5u7kv5ooh98o8fjfhcatdrp4a36ae', '::1', 1527647433, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373634373231373b69647c733a313a2231223b6e616d617c733a31333a2241646d696e6973747261746f72223b757365726e616d657c733a353a2261646d696e223b6c6576656c7c733a313a2231223b6c6f67696e7c623a313b),
('5ulen0ic8u2iolqqd99o7i075ts877f7', '::1', 1527647905, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373634373639393b69647c733a313a2231223b6e616d617c733a31333a2241646d696e6973747261746f72223b757365726e616d657c733a353a2261646d696e223b6c6576656c7c733a313a2231223b6c6f67696e7c623a313b),
('iisg2d3p90lg67663uhshkj3tpt2d5t9', '::1', 1527648221, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373634383232313b69647c733a313a2231223b6e616d617c733a31333a2241646d696e6973747261746f72223b757365726e616d657c733a353a2261646d696e223b6c6576656c7c733a313a2231223b6c6f67696e7c623a313b),
('k51ib894hcd7ocdurt5udnl4qo1dhjim', '::1', 1527648227, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373634383232313b69647c733a313a2231223b6e616d617c733a31333a2241646d696e6973747261746f72223b757365726e616d657c733a353a2261646d696e223b6c6576656c7c733a313a2231223b6c6f67696e7c623a313b),
('qa479tgkpmbpm6gs8f0mv8ou9149o1c6', '::1', 1527648929, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373634383633383b69647c733a313a2231223b6e616d617c733a31333a2241646d696e6973747261746f72223b757365726e616d657c733a353a2261646d696e223b6c6576656c7c733a313a2231223b6c6f67696e7c623a313b),
('5b4bp2juftv489d5gjd6mtoes8mna74d', '::1', 1527649207, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373634383934333b69647c733a313a2231223b6e616d617c733a31333a2241646d696e6973747261746f72223b757365726e616d657c733a353a2261646d696e223b6c6576656c7c733a313a2231223b6c6f67696e7c623a313b),
('tg62easse4unkr6r1mcrc26i8lavsmhj', '::1', 1527649560, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373634393236363b69647c733a313a2231223b6e616d617c733a31333a2241646d696e6973747261746f72223b757365726e616d657c733a353a2261646d696e223b6c6576656c7c733a313a2231223b6c6f67696e7c623a313b),
('9oq0hu6gv9i5eijk6bvppjaj01c5guc9', '::1', 1527649698, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373634393538363b69647c733a313a2231223b6e616d617c733a31333a2241646d696e6973747261746f72223b757365726e616d657c733a353a2261646d696e223b6c6576656c7c733a313a2231223b6c6f67696e7c623a313b),
('uqlv0dc8ruj0v8egmcif8ulgesq9d8ph', '::1', 1527650354, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373635303035363b69647c733a313a2231223b6e616d617c733a31333a2241646d696e6973747261746f72223b757365726e616d657c733a353a2261646d696e223b6c6576656c7c733a313a2231223b6c6f67696e7c623a313b),
('tnflvns672bd05qkr66hk0sra38ip978', '::1', 1527650725, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373635303433373b69647c733a313a2231223b6e616d617c733a31333a2241646d696e6973747261746f72223b757365726e616d657c733a353a2261646d696e223b6c6576656c7c733a313a2231223b6c6f67696e7c623a313b),
('cjbimeltt2t1s9m09qa9hi971crnrmi9', '::1', 1527650964, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373635303734313b69647c733a313a2231223b6e616d617c733a31333a2241646d696e6973747261746f72223b757365726e616d657c733a353a2261646d696e223b6c6576656c7c733a313a2231223b6c6f67696e7c623a313b),
('70jcrsbskkul3ei0g5qm4p50tti5vhqe', '::1', 1527651248, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373635313133373b69647c733a313a2231223b6e616d617c733a31333a2241646d696e6973747261746f72223b757365726e616d657c733a353a2261646d696e223b6c6576656c7c733a313a2231223b6c6f67696e7c623a313b),
('3dnemt061l2s6g3kf5ktn35dj1qigdo1', '::1', 1527652982, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373635323938323b69647c733a313a2231223b6e616d617c733a31333a2241646d696e6973747261746f72223b757365726e616d657c733a353a2261646d696e223b6c6576656c7c733a313a2231223b6c6f67696e7c623a313b),
('pm6nafnu7jjvlnmmhvi8urar0tlq3j9p', '::1', 1527653747, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373635333438373b69647c733a313a2231223b6e616d617c733a31333a2241646d696e6973747261746f72223b757365726e616d657c733a353a2261646d696e223b6c6576656c7c733a313a2231223b6c6f67696e7c623a313b),
('i3f4ln88005b8aa4ommi034f93nq6q13', '::1', 1527654319, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373635343032353b),
('lrjur70i3kvhpdcqaimi9oofeoig59f7', '::1', 1527654928, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373635343635383b69647c733a313a2231223b6e616d617c733a31333a2241646d696e6973747261746f72223b757365726e616d657c733a353a2261646d696e223b6c6576656c7c733a313a2231223b6c6f67696e7c623a313b),
('ab6nkk6cdh894558l0f0rjck93tte2rb', '::1', 1527655268, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373635343936343b69647c733a313a2231223b6e616d617c733a31333a2241646d696e6973747261746f72223b757365726e616d657c733a353a2261646d696e223b6c6576656c7c733a313a2231223b6c6f67696e7c623a313b),
('oo9pitununpobevqtsufq951gruumd8i', '::1', 1527655546, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373635353534353b69647c733a313a2231223b6e616d617c733a31333a2241646d696e6973747261746f72223b757365726e616d657c733a353a2261646d696e223b6c6576656c7c733a313a2231223b6c6f67696e7c623a313b),
('g5mbcb8dkp485k2mieo7p4f6578bg0m7', '::1', 1527656332, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532373635363234313b69647c733a313a2231223b6e616d617c733a31333a2241646d696e6973747261746f72223b757365726e616d657c733a353a2261646d696e223b6c6576656c7c733a313a2231223b6c6f67696e7c623a313b);

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

CREATE TABLE `config` (
  `judul_aplikasi` varchar(255) NOT NULL,
  `judul_menu` varchar(255) NOT NULL,
  `zenziva_passkey` varchar(255) NOT NULL,
  `zenziva_userkey` varchar(255) NOT NULL,
  `zenziva_sms` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `config`
--

INSERT INTO `config` (`judul_aplikasi`, `judul_menu`, `zenziva_passkey`, `zenziva_userkey`, `zenziva_sms`) VALUES
('Egipson H. T.', 'Egipson', '1234', 'hqbjda', 'Anda sudah memasuki masa jatuh tempo pengembalian Handy Talky. Segeralah mengembalikan secepat mungkin !!!');

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `id` int(11) NOT NULL,
  `tag` varchar(255) NOT NULL,
  `base_url` varchar(255) NOT NULL,
  `time` datetime NOT NULL,
  `value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`id`, `tag`, `base_url`, `time`, `value`) VALUES
(1, 'Zenziva Cek Kredit', '', '2018-05-27 13:05:17', '{\"message\":{\"value\":\"0\",\"text\":\"23 Mei 2018\"}}'),
(2, 'Zenziva Cek Kredit', '', '2018-05-27 13:43:47', '{\"message\":{\"value\":\"0\",\"text\":\"23 Mei 2018\"}}'),
(3, 'Zenziva Kirim SMS', 'trigger', '2018-05-27 14:00:23', '{\"message\":{\"status\":\"99\",\"text\":\"Credit anda tidak mencukupi\"}}'),
(4, 'Zenziva Kirim SMS', 'trigger', '2018-05-27 14:00:24', '{\"message\":{\"status\":\"99\",\"text\":\"Credit anda tidak mencukupi\"}}'),
(5, 'Zenziva Cek Kredit', '', '2018-05-27 14:01:43', '{\"message\":{\"value\":\"0\",\"text\":\"23 Mei 2018\"}}'),
(6, 'Zenziva Cek Kredit', '', '2018-05-27 14:03:05', '{\"message\":{\"value\":\"0\",\"text\":\"23 Mei 2018\"}}'),
(7, 'Zenziva Cek Kredit', '', '2018-05-27 14:03:06', '{\"message\":{\"value\":\"0\",\"text\":\"23 Mei 2018\"}}'),
(8, 'Zenziva Cek Kredit', '', '2018-05-27 14:03:07', '{\"message\":{\"value\":\"0\",\"text\":\"23 Mei 2018\"}}'),
(9, 'Zenziva Cek Kredit', '', '2018-05-27 14:03:08', '{\"message\":{\"value\":\"0\",\"text\":\"23 Mei 2018\"}}'),
(10, 'Zenziva Cek Kredit', '', '2018-05-27 14:03:09', '{\"message\":{\"value\":\"0\",\"text\":\"23 Mei 2018\"}}'),
(11, 'Zenziva Cek Kredit', '', '2018-05-27 14:03:10', '{\"message\":{\"value\":\"0\",\"text\":\"23 Mei 2018\"}}'),
(12, 'Zenziva Cek Kredit', '', '2018-05-27 14:03:11', '{\"message\":{\"value\":\"0\",\"text\":\"23 Mei 2018\"}}'),
(13, 'Zenziva Cek Kredit', '', '2018-05-27 14:03:11', '{\"message\":{\"value\":\"0\",\"text\":\"23 Mei 2018\"}}'),
(14, 'Zenziva Cek Kredit', '', '2018-05-27 14:03:12', '{\"message\":{\"value\":\"0\",\"text\":\"23 Mei 2018\"}}'),
(15, 'Zenziva Cek Kredit', '', '2018-05-27 14:03:12', '{\"message\":{\"value\":\"0\",\"text\":\"23 Mei 2018\"}}'),
(16, 'Zenziva Cek Kredit', '', '2018-05-27 14:03:13', '{\"message\":{\"value\":\"0\",\"text\":\"23 Mei 2018\"}}'),
(17, 'Zenziva Cek Kredit', '', '2018-05-27 14:03:14', '{\"message\":{\"value\":\"0\",\"text\":\"23 Mei 2018\"}}'),
(18, 'Zenziva Cek Kredit', '', '2018-05-27 14:03:14', '{\"message\":{\"value\":\"0\",\"text\":\"23 Mei 2018\"}}'),
(19, 'Zenziva Cek Kredit', '', '2018-05-27 14:03:15', '{\"message\":{\"value\":\"0\",\"text\":\"23 Mei 2018\"}}'),
(20, 'Zenziva Cek Kredit', '', '2018-05-27 14:03:17', '{\"message\":{\"value\":\"0\",\"text\":\"23 Mei 2018\"}}'),
(21, 'Zenziva Cek Kredit', '', '2018-05-27 14:03:19', '{\"message\":{\"value\":\"0\",\"text\":\"23 Mei 2018\"}}'),
(22, 'Zenziva Cek Kredit', '', '2018-05-27 14:03:20', '{\"message\":{\"value\":\"0\",\"text\":\"23 Mei 2018\"}}'),
(23, 'Zenziva Cek Kredit', '', '2018-05-27 14:03:22', '{\"message\":{\"value\":\"0\",\"text\":\"23 Mei 2018\"}}'),
(24, 'Zenziva Cek Kredit', '', '2018-05-27 14:03:24', '{\"message\":{\"value\":\"0\",\"text\":\"23 Mei 2018\"}}'),
(25, 'Zenziva Cek Kredit', '', '2018-05-27 14:03:27', '{\"message\":{\"value\":\"0\",\"text\":\"23 Mei 2018\"}}'),
(26, 'Zenziva Cek Kredit', '', '2018-05-27 14:03:31', '{\"message\":{\"value\":\"0\",\"text\":\"23 Mei 2018\"}}'),
(27, 'Zenziva Cek Kredit', '', '2018-05-27 14:03:34', '{\"message\":{\"value\":\"0\",\"text\":\"23 Mei 2018\"}}'),
(28, 'Zenziva Cek Kredit', '', '2018-05-27 14:03:36', '{\"message\":{\"value\":\"0\",\"text\":\"23 Mei 2018\"}}'),
(29, 'Zenziva Cek Kredit', '', '2018-05-27 14:03:50', '{\"message\":{\"value\":\"0\",\"text\":\"23 Mei 2018\"}}'),
(30, 'Zenziva Cek Kredit', '', '2018-05-27 14:04:53', '{\"message\":{\"value\":\"0\",\"text\":\"23 Mei 2018\"}}'),
(31, 'Zenziva Cek Kredit', '', '2018-05-27 14:07:23', '{\"message\":{\"value\":\"0\",\"text\":\"23 Mei 2018\"}}'),
(32, 'Zenziva Cek Kredit', '', '2018-05-27 17:48:48', '{\"message\":{\"value\":\"0\",\"text\":\"23 Mei 2018\"}}'),
(33, 'Zenziva Cek Kredit', '', '2018-05-27 17:50:46', '{\"message\":{\"value\":\"0\",\"text\":\"23 Mei 2018\"}}'),
(34, 'Zenziva Cek Kredit', '', '2018-05-27 18:33:43', '{\"message\":{\"value\":\"0\",\"text\":\"23 Mei 2018\"}}'),
(35, 'Zenziva Cek Kredit', '', '2018-05-27 18:34:34', '{\"message\":{\"status\":\"5\",\"text\":\"Userkey \\/ Passkey Salah\"}}'),
(36, 'Zenziva Cek Kredit', '', '2018-05-27 18:34:41', '{\"message\":{\"value\":\"0\",\"text\":\"23 Mei 2018\"}}'),
(37, 'Zenziva Cek Kredit', '', '2018-05-27 19:05:52', '{\"message\":{\"value\":\"0\",\"text\":\"23 Mei 2018\"}}'),
(38, 'Zenziva Cek Kredit', '', '2018-05-28 08:48:22', '{\"message\":{\"value\":\"0\",\"text\":\"23 Mei 2018\"}}'),
(39, 'Zenziva Cek Kredit', '', '2018-05-28 08:49:51', '{\"message\":{\"value\":\"0\",\"text\":\"23 Mei 2018\"}}'),
(40, 'Zenziva Cek Kredit', '', '2018-05-28 09:30:54', '{\"message\":{\"value\":\"0\",\"text\":\"23 Mei 2018\"}}'),
(41, 'Zenziva Cek Kredit', '', '2018-05-28 09:31:57', '{\"message\":{\"value\":\"0\",\"text\":\"23 Mei 2018\"}}'),
(42, 'Zenziva Cek Kredit', '', '2018-05-28 17:22:41', '{\"message\":{\"value\":\"0\",\"text\":\"23 Mei 2018\"}}'),
(43, 'Zenziva Cek Kredit', '', '2018-05-29 14:46:01', '{\"message\":{\"value\":\"0\",\"text\":\"23 Mei 2018\"}}'),
(44, 'Zenziva Cek Kredit', '', '2018-05-29 14:47:34', '{\"message\":{\"value\":\"0\",\"text\":\"23 Mei 2018\"}}'),
(45, 'Zenziva Kirim SMS', 'trigger', '2018-05-29 15:13:33', '{\"message\":{\"status\":\"99\",\"text\":\"Credit anda tidak mencukupi\"}}'),
(46, 'Zenziva Cek Kredit', '', '2018-05-29 15:17:14', '{\"message\":{\"value\":\"0\",\"text\":\"23 Mei 2018\"}}'),
(47, 'Zenziva Cek Kredit', '', '2018-05-29 15:19:17', '{\"message\":{\"value\":\"0\",\"text\":\"23 Mei 2018\"}}'),
(48, 'Zenziva Cek Kredit', '', '2018-05-29 15:24:11', '{\"message\":{\"value\":\"0\",\"text\":\"23 Mei 2018\"}}'),
(49, 'Zenziva Cek Kredit', '', '2018-05-29 15:25:04', '{\"message\":{\"value\":\"0\",\"text\":\"23 Mei 2018\"}}'),
(50, 'Zenziva Cek Kredit', '', '2018-05-29 15:25:10', '{\"message\":{\"value\":\"0\",\"text\":\"23 Mei 2018\"}}'),
(51, 'Zenziva Cek Kredit', '', '2018-05-29 16:04:33', '{\"message\":{\"value\":\"0\",\"text\":\"23 Mei 2018\"}}'),
(52, 'Zenziva Cek Kredit', '', '2018-05-29 19:17:17', '{\"message\":{\"value\":\"0\",\"text\":\"23 Mei 2018\"}}'),
(53, 'Zenziva Cek Kredit', '', '2018-05-29 19:17:55', '{\"message\":{\"value\":\"0\",\"text\":\"23 Mei 2018\"}}'),
(54, 'Zenziva Cek Kredit', '', '2018-05-29 19:38:05', '{\"message\":{\"value\":\"0\",\"text\":\"23 Mei 2018\"}}'),
(55, 'Zenziva Cek Kredit', '', '2018-05-29 19:38:46', '{\"message\":{\"value\":\"0\",\"text\":\"23 Mei 2018\"}}'),
(56, 'Zenziva Cek Kredit', '', '2018-05-29 19:38:47', '{\"message\":{\"value\":\"0\",\"text\":\"23 Mei 2018\"}}'),
(57, 'Zenziva Cek Kredit', '', '2018-05-30 09:06:46', '{\"message\":{\"value\":\"0\",\"text\":\"23 Mei 2018\"}}'),
(58, 'Zenziva Cek Kredit', '', '2018-05-30 09:28:10', '{\"message\":{\"value\":\"0\",\"text\":\"23 Mei 2018\"}}'),
(59, 'Zenziva Cek Kredit', '', '2018-05-30 09:29:55', '{\"message\":{\"value\":\"0\",\"text\":\"23 Mei 2018\"}}'),
(60, 'Zenziva Cek Kredit', '', '2018-05-30 10:05:45', '{\"message\":{\"value\":{},\"text\":{\"0\":\"  \"}}}'),
(61, 'Zenziva Cek Kredit', '', '2018-05-30 11:41:08', '{\"message\":{\"value\":\"0\",\"text\":\"23 Mei 2018\"}}'),
(62, 'Zenziva Cek Kredit', '', '2018-05-30 11:55:17', '{\"message\":{\"value\":\"0\",\"text\":\"23 Mei 2018\"}}'),
(63, 'Zenziva Cek Kredit', '', '2018-05-30 11:57:19', '{\"message\":{\"value\":\"0\",\"text\":\"23 Mei 2018\"}}'),
(64, 'Zenziva Cek Kredit', '', '2018-05-30 11:57:26', '{\"message\":{\"value\":\"0\",\"text\":\"23 Mei 2018\"}}'),
(65, 'Zenziva Cek Kredit', '', '2018-05-30 11:57:39', '{\"message\":{\"value\":\"0\",\"text\":\"23 Mei 2018\"}}'),
(66, 'Zenziva Cek Kredit', '', '2018-05-30 11:58:12', '{\"message\":{\"value\":\"0\",\"text\":\"23 Mei 2018\"}}');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `noseri` varchar(255) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `nip` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nohp` varchar(255) NOT NULL,
  `durasi` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id`, `tanggal`, `noseri`, `jenis`, `nip`, `nama`, `nohp`, `durasi`, `status`, `user_id`) VALUES
(6, '2018-05-17', '0099', 'ATX', '1234', 'Egipson A. W. test', '085368530235', 6, 0, 1),
(7, '2018-05-30', 'r1r12r', '1rr1', '124124', 'qwqwf qw', '085368530235', 4, 0, 12),
(15, '2018-05-29', 'xxyyzz', 'ATX', '1234', 'agung', '085709488738', 1, 0, 1),
(16, '2018-05-22', 'qwrqwr', 'qwrq', 'lampung', 'agung dh', 'wqrqwr', 5, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pengembalian`
--

CREATE TABLE `pengembalian` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `noseri` varchar(255) NOT NULL,
  `nip` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nohp` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama`, `level`) VALUES
(1, 'admin', 'c7ad44cbad762a5da0a452f9e854fdc1e0e7a52a38015f23f3eab1d80b931dd472634dfac71cd34ebc35d16ab7fb8a90c81f975113d6c7538dc69dd8de9077ec', 'Administrator', 1),
(12, 'egipsons', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db', 'Egipson A. W.', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `pengembalian`
--
ALTER TABLE `pengembalian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `peminjaman_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD CONSTRAINT `pengembalian_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
