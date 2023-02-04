-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 28 jan. 2023 à 21:10
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `test`
--

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(6) UNSIGNED NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','user') NOT NULL DEFAULT 'user',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `client_id` int(6) UNSIGNED NOT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `created_at`, `client_id`, `email`) VALUES
(4, 'quentin10', '$2y$10$b1a1b1a1b1a1b1a1b1a1b1a1b1a1b1a1b1a1b1a1b1a1b1a1b1', 'admin', '2023-01-22 21:10:06', 0, NULL),
(5, 'quentin3012', '$2y$10$lerhalaax10', 'admin', '2023-01-22 21:45:13', 0, NULL),
(6, 'lerhalux', '$2y$10$lerhalaax10', 'user', '2023-01-22 21:45:14', 0, NULL),
(7, 'jean.dupont@acme.com', '$2y$10$rF6qFUF4IK0oF5x.vb.FhuSgqxaB/OwmSF25YxsM9lMPCteooEwmm', 'user', '2023-01-28 19:10:37', 0, NULL),
(8, 'john.smith@smithcorp.com', '$2y$10$0snTsgAr2ErUvtkN8SFr6.P8buIqUHtMB0inNIdZQdX/I6C.VU4Se', 'user', '2023-01-28 19:10:37', 0, NULL),
(9, 'mario@nintendo.com', '$2y$10$z70Mv/2FeaqmR60DfGFM6uLd8937yGcSKCmxjqHGtc4z/9Pbr7DR6', 'user', '2023-01-28 19:10:37', 0, NULL),
(10, 'brentgallegos@gmail.com', '$2y$10$qziDtssCiA4eDW9xj.dEouIz7i7qacvjHUkYdAWRn245WV2WjNpeK', 'user', '2023-01-28 19:10:37', 0, NULL),
(11, 'xandernelson@gmail.com', '$2y$10$JrsW4uZmH1U3OasNrGNDY.8Yn5bEjgwuBWWxsQhAQDhsKFsCLgIfu', 'user', '2023-01-28 19:10:37', 0, NULL),
(12, 'hedleyunderwood@gmail.com', '$2y$10$JGK0Z8oG21.krCVB9oSgyukd8A632kq7vwfGHJkqgxyIV3fyMZf7K', 'user', '2023-01-28 19:10:37', 0, NULL),
(13, 'avyecontreras@gmail.com', '$2y$10$2LNxRd1dc40yr/sucVlspO0WrL/cYlF0KYNFX8lMqth6mhFPOAiDu', 'user', '2023-01-28 19:10:37', 0, NULL),
(14, 'user1', '$2y$10$SK7zAMevnEjlt29la2cWHu.FxXObaB/tuBr3dLXCNKW5ma6LRiQKS', 'admin', '2023-01-28 19:10:38', 0, NULL),
(15, 'user2', '$2y$10$AvUOrHyvadc8lRL2WKh0..AfQJV8KeCnOq887RYpr0BlrnEMfQtmW', 'user', '2023-01-28 19:10:38', 0, NULL),
(29, 'xandernelson@gmail.com', '$2y$10$VXVVOC75mnCPDWqH4.NuoOEX6VhEOxU6sGjVMx09kHG1e30WfQ9Iq', 'user', '2023-01-28 19:11:02', 0, NULL),
(30, 'hedleyunderwood@gmail.com', '$2y$10$ebACZ5q2xfofCVZcCs1iKe2erLhf0TwAoMqY/x8zH1XwA2jb.l/ha', 'user', '2023-01-28 19:11:02', 0, NULL),
(31, 'avyecontreras@gmail.com', '$2y$10$fCnb8T14vrI7epZ20.NlAu8sXwYg2bLx7zKJmXc5dnf0GD1Mr1k6i', 'user', '2023-01-28 19:11:02', 0, NULL),
(32, 'user1', '$2y$10$CB5i4wTlmFHLDv2zAGrrNOSFiccbBqBhvMsqrh5YxN9uDWs90qa4K', 'admin', '2023-01-28 19:11:02', 0, NULL),
(33, 'user2', '$2y$10$/Sm0FgMn2p8wSGz.WmtF6OGVTPJ/KQ2e3SpZwCeRX2XKXxLg1RYcm', 'user', '2023-01-28 19:11:02', 0, NULL),
(34, 'jean.dupont@acme.com', '$2y$10$nLNCtQ6HPmfsZNiJqa7drOwGb49bUYdeVCTzJ57fnTRMgNaqy5dBO', 'user', '2023-01-28 19:12:25', 0, NULL),
(35, 'john.smith@smithcorp.com', '$2y$10$WBou5AOyW78lGnGLef.vW.box0fRgbE2FLLz7pnctguJAd8oWbuNe', 'user', '2023-01-28 19:12:25', 0, NULL),
(36, 'mario@nintendo.com', '$2y$10$Pb32eSE/x11BT2/0RMmFUuvoNyYDqYsjDJlpiuJhOmcAQg29QDfN6', 'user', '2023-01-28 19:12:25', 0, NULL),
(37, 'brentgallegos@gmail.com', '$2y$10$5l2YUwN0gzlRnG/mKWUq6OOJZOpKSIbg18ezqk.fKK49VjlHWezJ.', 'user', '2023-01-28 19:12:25', 0, NULL),
(38, 'xandernelson@gmail.com', '$2y$10$ewdPV.NXEcI81ggEdkbwwOuhEz/TnywHFcjVAa2v8CGsC.A9KyFAW', 'user', '2023-01-28 19:12:25', 0, NULL),
(39, 'hedleyunderwood@gmail.com', '$2y$10$hK6ZKx2NVHD55kmgseTWmOrLsKnT8tF7bnCZyr6n1DcCx4hlYBV8.', 'user', '2023-01-28 19:12:25', 0, NULL),
(40, 'avyecontreras@gmail.com', '$2y$10$dGCdBO7VoVbBUQxY6TUa..OZzi1SLu4VXBhgdzagv406z96VX0eNK', 'user', '2023-01-28 19:12:25', 0, NULL),
(41, 'user1', '$2y$10$ME0zwd05S4QV.XJVExKb0eXvwQg4RzYdAJl/V6iQGR2PbrN5dEVsi', 'admin', '2023-01-28 19:12:25', 0, NULL),
(42, 'user2', '$2y$10$cm/Jv5x0y9lde7t5vMvqi.lrzGlgHnpDpupVHUU.bI0WdAWX2kaHG', 'user', '2023-01-28 19:12:25', 0, NULL),
(43, 'jean.dupont@acme.com', '$2y$10$yXEBuCzDBNkRjqGVvxuhqOtbafKxu44sAY2xQgLbTlbkFZu0I.Uam', '', '2023-01-28 19:14:37', 0, NULL),
(44, 'john.smith@smithcorp.com', '$2y$10$t0gxNqVNLU/bSzU27bX43ue3C0v6Xmgdz9ZllzJCFKzNoVaQRc5sa', '', '2023-01-28 19:14:37', 0, NULL),
(45, 'mario@nintendo.com', '$2y$10$CLMTEdxukrwBmCPtd/GXgOTEXLSlKrIqSW7X8lZ3rCoSimo.K9CNC', '', '2023-01-28 19:14:37', 0, NULL),
(46, 'brentgallegos@gmail.com', '$2y$10$jiYYVkU66dM8PYzB8pWs/.JOd87NwdWEdwJy7Zs/2VwTA5Dzyr10a', '', '2023-01-28 19:14:37', 0, NULL),
(47, 'xandernelson@gmail.com', '$2y$10$tUR2qJOnlEaHVC5e0fWVGe4oW1.lNSEFrkPaN6hBvsaIkELh0nHGu', '', '2023-01-28 19:14:37', 0, NULL),
(48, 'hedleyunderwood@gmail.com', '$2y$10$fkyBWstMSFz7QR89aNoacOF0.ZMoVM.CCojVPDQ0yoLGOGZ5CjaUe', '', '2023-01-28 19:14:38', 0, NULL),
(49, 'avyecontreras@gmail.com', '$2y$10$8Yi6nsguE06.s9vgtKMvT.zQy/JAvzYVzXDW/wdYBSJl7MKdc.kBS', '', '2023-01-28 19:14:38', 0, NULL),
(50, 'user1', '$2y$10$RcOu2e5UJ1I6Gj/q6anEQ.cCVNyZkgo1rqxppzAcawAgz.qY3cf.K', 'admin', '2023-01-28 19:14:38', 0, NULL),
(51, 'user2', '$2y$10$0D1SnGDsfQdpeV8ezeGhUesYLfOyLnHoLmCRP1CxH/rxFbV/L/9kq', 'user', '2023-01-28 19:14:38', 0, NULL),
(52, 'jean.dupont@acme.com', '$2y$10$P3x.QJyGvi8Wri3lEGI9ge9tanXtFjVj5/Xw/LHIkomRj02Q/HW3K', '', '2023-01-28 19:19:40', 0, NULL),
(53, 'john.smith@smithcorp.com', '$2y$10$rQTTOIYK2Dq29Noazx6fYep3pmoDZOzADpCtyx0YDj/kaGnVAcsqi', '', '2023-01-28 19:19:40', 0, NULL),
(54, 'mario@nintendo.com', '$2y$10$dEu8w640e64zusgngHfYGuS0/5GnmnceQQ7ywcpwBTxJZUyDSMNju', '', '2023-01-28 19:19:40', 0, NULL),
(55, 'brentgallegos@gmail.com', '$2y$10$FFf646nXPI9befsgT.0M5eGsVY9JSY3VVZ3z0TeAK4dpyPJxu0lwi', '', '2023-01-28 19:19:40', 0, NULL),
(56, 'xandernelson@gmail.com', '$2y$10$wK5ngLVk6k/VP4k9ljb0FOkfQEQDkKvnI26p2B7QPsl8/ywCT56Jm', '', '2023-01-28 19:19:40', 0, NULL),
(57, 'hedleyunderwood@gmail.com', '$2y$10$DAz0C1Gi0tBWpY3BEEPmuerzZwU59p9pCwMZieMDCaUh8guENd/Ii', '', '2023-01-28 19:19:40', 0, NULL),
(58, 'avyecontreras@gmail.com', '$2y$10$/7B3QEyUWd9GB8Aeq.HXMeK75XSI2RzyiNdXRgoptcozMakQoDZNe', '', '2023-01-28 19:19:40', 0, NULL),
(59, 'user1', '$2y$10$S2guh6opaNdZ/iyZlCqAoep01Iu2hIucet83NiFEGLOFxY9dz22Fa', 'admin', '2023-01-28 19:19:40', 0, NULL),
(60, 'user2', '$2y$10$kGimJS1T2yL37erthBCpfuHuEUNcb9HMIWHVOxGx7P.v1p.tiMBZS', 'user', '2023-01-28 19:19:40', 0, NULL),
(61, 'jean.dupont@acme.com', '$2y$10$R8esJWcClSjGOUgPZZhX8Orl86FxB3MKAYdCDTq2mDueHvMi7Wb9a', '', '2023-01-28 19:19:43', 0, NULL),
(62, 'john.smith@smithcorp.com', '$2y$10$ZVaU4nk9rVNqmkMkMOFwseoUPLp0NJydQ0A09Fubj2xo8rgkYbqo.', '', '2023-01-28 19:19:43', 0, NULL),
(63, 'mario@nintendo.com', '$2y$10$JlrZ0PfwQ80e9JGw4DACm.Kyk/ZDWzMVsT8yVnDK8/H3W96WvzqUe', '', '2023-01-28 19:19:43', 0, NULL),
(64, 'brentgallegos@gmail.com', '$2y$10$BLIaAxSmOW0VGESzDWVsLeIVTfneaVZ4K/rv167Ohzyf7MyhMHJJ6', '', '2023-01-28 19:19:43', 0, NULL),
(65, 'xandernelson@gmail.com', '$2y$10$BC/zicAmL1jh7A1otZx57OXvyd.XZbBlDrahcdVLWAQz8fGSSNFjq', '', '2023-01-28 19:19:43', 0, NULL),
(66, 'hedleyunderwood@gmail.com', '$2y$10$es3KfHDxXe0m5VewD70V/uLZgiG0R/LtKriFic/NcILDeZHgQKHf.', '', '2023-01-28 19:19:43', 0, NULL),
(67, 'avyecontreras@gmail.com', '$2y$10$rukn7z5F2wgFG/2M6/y4Gu/5Zs04SZO9iZvMLKDus0Q6z47yTCGp.', '', '2023-01-28 19:19:43', 0, NULL),
(68, 'user1', '$2y$10$cs7XGVapmAkYqVE9Gdg6YOiZ4GX643V.155wB4kIg8ZlEprdd438m', 'admin', '2023-01-28 19:19:43', 0, NULL),
(69, 'user2', '$2y$10$i0ztd4rJbM9BHJG0UML67uWTA5BKQDOjRYIkstEOo27.6ffoW8Rxe', 'user', '2023-01-28 19:19:43', 0, NULL),
(70, 'jean.dupont@acme.com', '$2y$10$L6gH62TGhQHXKmmzuwEIBeykg8hXBqgUdLFwVWvBtRHm027yn1mVa', '', '2023-01-28 19:23:10', 0, NULL),
(71, 'john.smith@smithcorp.com', '$2y$10$F1eQtkJ9IqEZ9grOJKSgku2ekMvjkeD5pvZwWtQSeuBdEi3DVKQRS', '', '2023-01-28 19:23:10', 0, NULL),
(72, 'mario@nintendo.com', '$2y$10$oUeQEUqi9w4MeACIYQGXW.bVqBaQrHC2tdOQcFLJDK3HQK8/XPI9G', '', '2023-01-28 19:23:11', 0, NULL),
(73, 'brentgallegos@gmail.com', '$2y$10$Q89KcxIEXMLjz9LLpBoAaOLr9ky6KGAPfAiso8y5btJT8wQTNJwPK', '', '2023-01-28 19:23:11', 0, NULL),
(74, 'xandernelson@gmail.com', '$2y$10$k7C6YkvjCbdBqSYgq7LjZ.xMpBkBaXnOpZTzkt6A6xFA1KWV1B/aK', '', '2023-01-28 19:23:11', 0, NULL),
(75, 'hedleyunderwood@gmail.com', '$2y$10$2CzrihwyUoBfK4W8jfJyJOs4RCnqRjWM8RRhk4U/Xp2pxYEoiaTVW', '', '2023-01-28 19:23:11', 0, NULL),
(76, 'avyecontreras@gmail.com', '$2y$10$uKZY.JCwxkkH45Cf.dJueeuLE0wLPAjtFdYmIef7Jm76gputMZ6MW', '', '2023-01-28 19:23:11', 0, NULL),
(77, 'user1', '$2y$10$cpjg.RRI6rkqRbbqL.z.LuH2CcbN9IaYcN4gX1UEWer3ewegHpPA2', 'admin', '2023-01-28 19:23:11', 0, NULL),
(78, 'user2', '$2y$10$5GRrebz30FxoaQR9Ttkgju5efamuX4g.2MsDULM/.D8vCy0BdIZlm', 'user', '2023-01-28 19:23:11', 0, NULL),
(79, 'jean.dupont@acme.com', '$2y$10$V/FW5DSqLFOkeEBoA7gfAeGDw5ZR5CPZf0fMH87MnwnNztaIIricm', '', '2023-01-28 19:33:33', 0, NULL),
(80, 'john.smith@smithcorp.com', '$2y$10$E5v5lJ7ZwSvmdEFWx99FtupOikSDImYU3UgGhX0ujaHwNVXro2sL6', '', '2023-01-28 19:33:33', 0, NULL),
(81, 'mario@nintendo.com', '$2y$10$2CDnQ1V19S.J7wy79dCFtOReSA10rvka9.SVzZHXbdkwT9Pk8eLNS', '', '2023-01-28 19:33:33', 0, NULL),
(82, 'brentgallegos@gmail.com', '$2y$10$JHtnIBkc4X.2zJl/3IPlAu0Hdn2FlHrMJGT7BpYSJE79ZMVftlA..', '', '2023-01-28 19:33:33', 0, NULL),
(83, 'xandernelson@gmail.com', '$2y$10$8svX8nb3jXwsJZ0IxdVngOXa69JwmjllGtOAafTwXjaUVaAtr/D4G', '', '2023-01-28 19:33:34', 0, NULL),
(84, 'hedleyunderwood@gmail.com', '$2y$10$bolvYZf82SiplC6IFFv4fOih4c8ecrCzRQ6p59KHXxvSwblemID8.', '', '2023-01-28 19:33:34', 0, NULL),
(85, 'avyecontreras@gmail.com', '$2y$10$oohfzspKPb9zYtmnrkTjg.T6LSb2luolXCJisaotswI9FibqCNevu', '', '2023-01-28 19:33:34', 0, NULL),
(86, 'user1', '$2y$10$jxqvcWbCChIzDO8J/Xs9tOIR.LXunkRlv9zWWL.8dvcLi7FVCO.1C', 'admin', '2023-01-28 19:33:34', 0, NULL),
(87, 'user2', '$2y$10$IgyKOqINNyvxdyp8xWvU3.E4gDTybJbG74gBeXXMWVzkEb6vDSLIa', 'user', '2023-01-28 19:33:34', 0, NULL),
(88, 'jean.dupont@acme.com', '$2y$10$gZvZdIszP9qQfd6rnEqlN./QgZmoYVF6M43vlyDn2z/ev8LgVhbhK', '', '2023-01-28 19:34:40', 0, NULL),
(89, 'john.smith@smithcorp.com', '$2y$10$qnCLTbuRp5DrZZzhs6BGPu7ZoBtABmWz9ZZ6WhtNrVNcj51.2Shfy', '', '2023-01-28 19:34:40', 0, NULL),
(90, 'mario@nintendo.com', '$2y$10$UVE9qkCyvUAh23VzIfiyReSkYenDDnQ4D9KWWEwExYEvcS2KHFqDa', '', '2023-01-28 19:34:40', 0, NULL),
(91, 'brentgallegos@gmail.com', '$2y$10$Z0nSmPy8B2trZTxrqLEVQ.bN3FTeR7VwX/SFTiLtMF9cDk/yyUZNe', '', '2023-01-28 19:34:40', 0, NULL),
(92, 'xandernelson@gmail.com', '$2y$10$YDLXPg93M0YzCYvgfQ1u8.SNKToROwz5V2QHseXVBttFA8zxVM0B.', '', '2023-01-28 19:34:40', 0, NULL),
(93, 'hedleyunderwood@gmail.com', '$2y$10$RsEEdBNs4KmF.0DQO7AZFeLTWwmAl5QxXrqB.kGFr7vLrj7t2fuYu', '', '2023-01-28 19:34:40', 0, NULL),
(94, 'avyecontreras@gmail.com', '$2y$10$Jpkk4ydj7dwViyIReOsZn.RtbutvrblsyeaBRCZWn3kB6YU8EFVQ2', '', '2023-01-28 19:34:40', 0, NULL),
(95, 'user1', '$2y$10$W7TGBJRFPLLcBA/IutyxaedD1GZ1caXAQU1I73dqWuo0zIZMQoSLS', 'admin', '2023-01-28 19:34:40', 0, NULL),
(96, 'user2', '$2y$10$dg.AgzXvhfrvQGHWSfjtZe/1SShr21MsFYHnjwh4ZS0z9rfbl91Ue', 'user', '2023-01-28 19:34:40', 0, NULL),
(97, 'jean.dupont@acme.com', '$2y$10$QFjOw6xOTGOd5JrdOJWi7.wbKJmBPWIujlb/yNKXiXSYedOukfPzG', '', '2023-01-28 19:35:33', 0, NULL),
(98, 'john.smith@smithcorp.com', '$2y$10$wsuqmaGJcZKNCA4/YLF1YOr031dregFwrSWbAvwXBfbUsX9lc1K.K', '', '2023-01-28 19:35:33', 0, NULL),
(99, 'mario@nintendo.com', '$2y$10$Y3aJunyyQTXt8cZYRZD7IOYmKIrGiyVfOuF5gbfCrrtMHt4is3LS2', '', '2023-01-28 19:35:33', 0, NULL),
(100, 'brentgallegos@gmail.com', '$2y$10$bszvzcCF1VIukSrLqqSgG.pkIm6azYEaZA7oHH6GnZknC9yXAqBQG', '', '2023-01-28 19:35:33', 0, NULL),
(101, 'xandernelson@gmail.com', '$2y$10$e/ZTacivkbpBLA1seQ2AA.EiuHkqroVt26Aq0hub0cSkXpkeXZCaq', '', '2023-01-28 19:35:33', 0, NULL),
(102, 'hedleyunderwood@gmail.com', '$2y$10$9ecewfbhhO4p2/jlNZmgLOViuzlwpDpMKKG88UCBwRVXFCjNlmGnO', '', '2023-01-28 19:35:33', 0, NULL),
(103, 'avyecontreras@gmail.com', '$2y$10$ummF4UrFRaii1Iyf7FQFbeXugMyWcFfbkQZK.yweyFKu6POSKE14a', '', '2023-01-28 19:35:33', 0, NULL),
(104, 'user1', '$2y$10$r4HbBts/TJGsAq/YgeshXeJuQWkFIUyi4RIlQ7YEE2CLaLVQcTAE2', 'admin', '2023-01-28 19:35:33', 0, NULL),
(105, 'user2', '$2y$10$T.w47pBZ5IdOwgfa07OwC.IfGT6ijjFhUbFvPLPeURPtZJvvTYh7a', 'user', '2023-01-28 19:35:33', 0, NULL),
(106, 'jean.dupont@acme.com', '$2y$10$GliUDSD8vh/3pYJZS99W6umCSynKcS.GUWQS14vLeUo8/JiMCRUe6', '', '2023-01-28 19:36:26', 0, NULL),
(107, 'john.smith@smithcorp.com', '$2y$10$thnkOUNZ9g3P95TEGsvnE.OFQBFql0V895b0MZ/6wOidiuNauoVgm', '', '2023-01-28 19:36:26', 0, NULL),
(108, 'mario@nintendo.com', '$2y$10$ZES0.tMAQitz8gH7rNdPduZtBG8hS.ehOBWc8lFcCF1XBs3RG6.i.', '', '2023-01-28 19:36:26', 0, NULL),
(109, 'brentgallegos@gmail.com', '$2y$10$YaoTCf.tOZQwzFzcF.keKOiGuYoftyqK4amYf5qZUYxQy7uGP/oFG', '', '2023-01-28 19:36:26', 0, NULL),
(110, 'xandernelson@gmail.com', '$2y$10$99/GM8HMbuj4FhvZ5j/5qeln1sVwj6Bpn9/F4a2gj8s4pPsG2Mdka', '', '2023-01-28 19:36:26', 0, NULL),
(111, 'hedleyunderwood@gmail.com', '$2y$10$hwwwYKk1OGxr5wXhF02F.upVhrQtg45jSnmdvFVcK6yOX0CeB26J6', '', '2023-01-28 19:36:26', 0, NULL),
(112, 'avyecontreras@gmail.com', '$2y$10$bPcS4VZaXWWvdIt27A1IHOAuUuKcvv3POX9muXHIqqz0uJBzoYTEW', '', '2023-01-28 19:36:26', 0, NULL),
(113, 'user1', '$2y$10$Kb1RdcJwWRx4y6UsuryRXuAk5am5dFkzUF610ZiOl.OAX001WuoM2', 'admin', '2023-01-28 19:36:26', 0, NULL),
(114, 'user2', '$2y$10$k9fGGszKXgiyh7B5staT3Od1hsdryS9Lp4MPNGBiPShBmi9s2Ew8S', 'user', '2023-01-28 19:36:27', 0, NULL),
(115, 'jean.dupont@acme.com', '$2y$10$OGzh6IZtI7eP4ehCbD9Y/ebLPODo6Hd4V4IRSAA6tG47eCKVgIPQe', '', '2023-01-28 19:38:09', 0, NULL),
(116, 'john.smith@smithcorp.com', '$2y$10$PfLZso8cxVbkK05i09iAWe4uqRlmdX9EAVB59QauZ.Ew3y2LuSNzS', '', '2023-01-28 19:38:09', 0, NULL),
(117, 'mario@nintendo.com', '$2y$10$fcYwZqXjWjoGY9/vmZRC2uV.kItVg5xm5S9jWdB/YYbu8GWf7RcCO', '', '2023-01-28 19:38:09', 0, NULL),
(118, 'brentgallegos@gmail.com', '$2y$10$ESq0bQVKtvtn9wJp.sikxeX4m.W42GPtkYFF6DA94m1ge4OoAtvs6', '', '2023-01-28 19:38:09', 0, NULL),
(119, 'xandernelson@gmail.com', '$2y$10$.7KmHrkirUfYmXxTnNroA.SnsoH9wuGLgxOYMkLBGTNDc45WYehxm', '', '2023-01-28 19:38:09', 0, NULL),
(120, 'hedleyunderwood@gmail.com', '$2y$10$iI3f2Cic/q1qr9uINz7lTuOe0/RZUgWx/ov2RKVQEYRxDBCvuNeCG', '', '2023-01-28 19:38:09', 0, NULL),
(121, 'avyecontreras@gmail.com', '$2y$10$zPSdn4PMtygn.LkxdcrE6upVFD9cOZK7EKyxTSdYiG3DqYMnxvSka', '', '2023-01-28 19:38:10', 0, NULL),
(122, 'user1', '$2y$10$qh8zX80vdPXNRxRzDnjtOO392c6Sid62o5mS8xL9RvJpag/JIxQcC', 'admin', '2023-01-28 19:38:10', 0, NULL),
(123, 'user2', '$2y$10$B00tWR/HdofTW9GqtOThSeOujdpLgdCXuyG4kDcgVFrj1sbmoltw6', 'user', '2023-01-28 19:38:10', 0, NULL),
(124, 'jean.dupont@acme.com', '$2y$10$0689mv..hUOi9x0a1sWzPepQIpS5DBbDQtkgV.rD4S/j8FKUWNYV6', '', '2023-01-28 19:39:03', 0, NULL),
(125, 'john.smith@smithcorp.com', '$2y$10$QXLKwmhvVzOEHXyS9s2hkeEMomP4DC3WymK8ZThH2uwRvfgfDpbZm', '', '2023-01-28 19:39:03', 0, NULL),
(126, 'mario@nintendo.com', '$2y$10$dMA4mS3CTPTUMuUp0TOLaexlS0lBYHSpXRTWZZC7S.ki4j92rHb0u', '', '2023-01-28 19:39:03', 0, NULL),
(127, 'brentgallegos@gmail.com', '$2y$10$XbEnRGfChoJNuH6fySgMV.7486KfFAvP2Bd4cpzg4xFekepzZqkNO', '', '2023-01-28 19:39:03', 0, NULL),
(128, 'xandernelson@gmail.com', '$2y$10$2AQsGNNurc9XBEkqaYg.i.iM/QVhQeMMgXiW5sl5avkyTQZDboz.e', '', '2023-01-28 19:39:03', 0, NULL),
(129, 'hedleyunderwood@gmail.com', '$2y$10$GldCDK7UXMiOfxfSMPKKkOhII0zQ8jCDTVL87GLbXprCrhKD234oO', '', '2023-01-28 19:39:03', 0, NULL),
(130, 'avyecontreras@gmail.com', '$2y$10$yUY/gLp3CR5pRUsPYMF4cei0aED93rzyomZdBVzctbwJArfJ87sG.', '', '2023-01-28 19:39:03', 0, NULL),
(131, 'user1', '$2y$10$jalwfaRWgNt/rhIsy0B/keo0AXAIYwVm2aIV1atk3NTCvFijivgCe', 'admin', '2023-01-28 19:39:03', 0, NULL),
(132, 'user2', '$2y$10$2AsD4jZmy3Xv6SsrkUMHxujLLjalxerkKpLXUBLGFSNUCCi9csjCm', 'user', '2023-01-28 19:39:03', 0, NULL),
(133, 'jean.dupont@acme.com', '$2y$10$N9FDB.GjCBLXBF/ABaSqReQM9F8kAt10No0UCt3Cmy1eBQR2omWQa', '', '2023-01-28 19:39:48', 0, NULL),
(134, 'john.smith@smithcorp.com', '$2y$10$Qn9Tm1E6bSCEqFfwCeaJKuSe29/yz0JbdpYSCuffg51MLH31hznB.', '', '2023-01-28 19:39:48', 0, NULL),
(135, 'mario@nintendo.com', '$2y$10$I2hYsDzC3Ui8E9LUWkCDYut2QMc6Ra822q.PLoNkX2NZ4mXOwxJQu', '', '2023-01-28 19:39:48', 0, NULL),
(136, 'brentgallegos@gmail.com', '$2y$10$n8OGfu5aI2gXfH.RUWQRaerjz5EhMMmzGztXox963qe1fKK4KgPM6', '', '2023-01-28 19:39:48', 0, NULL),
(137, 'xandernelson@gmail.com', '$2y$10$S0ze/6D7YJGkz7RDzraAiuft/Ax2rGezhcf.Xi.vuMwRmPpn7KRd6', '', '2023-01-28 19:39:48', 0, NULL),
(138, 'hedleyunderwood@gmail.com', '$2y$10$0ycST6g2Nnh0..3hGI.UjuQcRpeNnJml79pWJ8yWF7wx/lhqpV9xm', '', '2023-01-28 19:39:48', 0, NULL),
(139, 'avyecontreras@gmail.com', '$2y$10$j/pD0BWptCxjrpWZ2iwpG.oLGH4ShZZTZRJ9jxnb6mBimpq95NXpy', '', '2023-01-28 19:39:48', 0, NULL),
(140, 'user1', '$2y$10$Ja5VDvpeRoak9RFEfnqULOda9dTJfs8pHsoG.s37gAWF23S0U8kEe', 'admin', '2023-01-28 19:39:48', 0, NULL),
(141, 'user2', '$2y$10$NBByBqFzsPVIYrNPuXgEgODDBEXoYq.Qet.FTZ3O3YUljfGSg5U.K', 'user', '2023-01-28 19:39:48', 0, NULL),
(142, 'jean.dupont@acme.com', '$2y$10$Y1EDQiXYoCkAT0amys5L3.7D8fxWa1Yugx6xNJ9P5F2KLhVrfn6uG', '', '2023-01-28 19:41:59', 0, NULL),
(143, 'john.smith@smithcorp.com', '$2y$10$zwy5tZLEh5axK9MCv//OSe4rRfjjmptgDAVyVSHYhRXr5JwotSqcm', '', '2023-01-28 19:41:59', 0, NULL),
(144, 'mario@nintendo.com', '$2y$10$rDgVrvr5AL5GNpx4sGGQM.7k361d99IpxnNwN4O1abqiV3tjtLEZy', '', '2023-01-28 19:41:59', 0, NULL),
(145, 'brentgallegos@gmail.com', '$2y$10$n/.UOvyu.JXhdtc0sTwFI.XDTI2AaFsz9sT6jGaXSpzCQIjd086i.', '', '2023-01-28 19:41:59', 0, NULL),
(146, 'xandernelson@gmail.com', '$2y$10$JhcfIK8erW.pwMxe2pKtIO1ELNZoj6JUu5jj.XERFEYG6.3RW5Q0m', '', '2023-01-28 19:41:59', 0, NULL),
(147, 'hedleyunderwood@gmail.com', '$2y$10$Wqi7qsB7ef3R1i5UjqvuBOqVaZ2VZZKlS4x.ufv1k6izb4whOEDy.', '', '2023-01-28 19:41:59', 0, NULL),
(148, 'avyecontreras@gmail.com', '$2y$10$FZRxJk84vC8en3DXFWEiYe0D8269c3OdtypUA2THVgrIacqTofOiu', '', '2023-01-28 19:41:59', 0, NULL),
(149, 'user1', '$2y$10$F3r3Ysn7CM9B3KIzUnIMWeE.Y7o3grT54yK..orl/pXoaEiDWgWPW', 'admin', '2023-01-28 19:41:59', 0, NULL),
(150, 'user2', '$2y$10$7D8ZB5VCY/By/4wYG4XfeOGXZIYulVE1D3YjfVM3H24JxtmwiNd4O', 'user', '2023-01-28 19:41:59', 0, NULL),
(151, 'jean.dupont@acme.com', '$2y$10$rdysKVN0hW4kg2FSgRlbme4DNWSbeghNgeRaGlffgWpIabHQuOIOu', '', '2023-01-28 19:42:26', 0, NULL),
(152, 'john.smith@smithcorp.com', '$2y$10$nmEpV6HNy0/su5LorJMH/ep1D3ML0vknQqOQeNvNuIAw0avpLgxhK', '', '2023-01-28 19:42:26', 0, NULL),
(153, 'mario@nintendo.com', '$2y$10$FUKgzyqN0t6tZXe3dxceh.5HUi5C0oN9c9KoLaeMVUDYIuZpQzgDa', '', '2023-01-28 19:42:26', 0, NULL),
(154, 'brentgallegos@gmail.com', '$2y$10$zkbd8DLBRPgp38YRZn8HFOJP85JpEzzC4w1qOqqDd1mhYARW55lky', '', '2023-01-28 19:42:26', 0, NULL),
(155, 'xandernelson@gmail.com', '$2y$10$C1C8k4cx.ue8TskKZdUgoujrKB1Hj1jbOyDNH3H9X5rRgW6k86UPq', '', '2023-01-28 19:42:26', 0, NULL),
(156, 'hedleyunderwood@gmail.com', '$2y$10$.YFlg70q.noTVPtUQIGR9OEVM.qzpdwK2p8ZY7zeH5pO9wGvLQDmC', '', '2023-01-28 19:42:26', 0, NULL),
(157, 'avyecontreras@gmail.com', '$2y$10$1u6usTXLsVIjJZXJuNLSN.CAqYglpOmLOXGemHU2rxdZEQp7IfXoK', '', '2023-01-28 19:42:27', 0, NULL),
(158, 'user1', '$2y$10$wxsMF4c.so0fY0Jc457w7eesJRXtuZ..Ff7q5o6dHGFl/ynH1b8pa', 'admin', '2023-01-28 19:42:27', 0, NULL),
(159, 'user2', '$2y$10$vUcxED8IUowPJIFtPvqh/.1NZDponRWlroFuYs2xS2FRsVwM.MgRy', 'user', '2023-01-28 19:42:27', 0, NULL),
(160, 'jean.dupont@acme.com', '$2y$10$fotk9VhxQxPdE7IJiOXAGOBjumoI7d2pHEtOXBLEuMoey8J.a0NQC', '', '2023-01-28 19:42:30', 0, NULL),
(161, 'john.smith@smithcorp.com', '$2y$10$j8agRwYroToTIe5oFzKoT.l9S4Msr6GKDrQgb9HlXe.0W5QhvMa4i', '', '2023-01-28 19:42:30', 0, NULL),
(162, 'mario@nintendo.com', '$2y$10$Woj6ZoJiSYfuL67yI/36aen9RK12WwMxX.INwqVDo4BBrNkSMFUjO', '', '2023-01-28 19:42:30', 0, NULL),
(163, 'brentgallegos@gmail.com', '$2y$10$Ebni4u3t2UXfS.BuRQSt3eDSA9BMExTRmuQhPlq/6ebEcwPYCeeim', '', '2023-01-28 19:42:30', 0, NULL),
(164, 'xandernelson@gmail.com', '$2y$10$4rTWS6y1zh46.vEiQFesPeQrOalteA2nPEW5OQGTgeM.YirUXsDrm', '', '2023-01-28 19:42:30', 0, NULL),
(165, 'hedleyunderwood@gmail.com', '$2y$10$G/2l6oa4gqo1r3k/hzR3duGQucgXE63e35m6aSX5wGLIRPkj175lS', '', '2023-01-28 19:42:30', 0, NULL),
(166, 'avyecontreras@gmail.com', '$2y$10$4wR3CGTs7TxV1XTXuNA7fOzN9MWZ.CmkKgOcTAkdUJ8mC6uUnaCbW', '', '2023-01-28 19:42:30', 0, NULL),
(167, 'user1', '$2y$10$BVDr2X3A2xAfcU5PH7uLR.jDLl0tKjCeMiKmIrXGzDN.mhoeh9C6W', 'admin', '2023-01-28 19:42:30', 0, NULL),
(168, 'user2', '$2y$10$kqvd6BvLdbBd79.kXTCe7eL0ArZ2nzbu1xfWvS8vivskI.cimYZ0m', 'user', '2023-01-28 19:42:30', 0, NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=169;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
