/*
 Navicat Premium Data Transfer

 Source Server         : MySql
 Source Server Type    : MySQL
 Source Server Version : 100132
 Source Host           : localhost:3306
 Source Schema         : db_cv

 Target Server Type    : MySQL
 Target Server Version : 100132
 File Encoding         : 65001

 Date: 06/04/2019 19:42:53
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for bio
-- ----------------------------
DROP TABLE IF EXISTS `bio`;
CREATE TABLE `bio`  (
  `id_bio` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tempat_lahir` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tanggal_lahir` date NULL DEFAULT NULL,
  `jenis_kelamin` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `agama` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `no_telp` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `email` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `alamat` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `goldar` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_bio`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 30 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for organisasi
-- ----------------------------
DROP TABLE IF EXISTS `organisasi`;
CREATE TABLE `organisasi`  (
  `id_org` int(11) NOT NULL AUTO_INCREMENT,
  `id_bio` int(11) NULL DEFAULT NULL,
  `jabatan` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nama_organisasi` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tahun_masuk` int(11) NULL DEFAULT NULL,
  `tahun_keluar` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id_org`) USING BTREE,
  INDEX `FK_BIO_ORGANISASI`(`id_bio`) USING BTREE,
  CONSTRAINT `FK_BIO_ORGANISASI` FOREIGN KEY (`id_bio`) REFERENCES `bio` (`id_bio`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for pekerjaan
-- ----------------------------
DROP TABLE IF EXISTS `pekerjaan`;
CREATE TABLE `pekerjaan`  (
  `id_pekerjaan` int(11) NOT NULL AUTO_INCREMENT,
  `id_bio` int(11) NULL DEFAULT NULL,
  `jabatan` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nama_perusahaan` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tahun_masuk` int(11) NULL DEFAULT NULL,
  `tahun_keluar` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id_pekerjaan`) USING BTREE,
  INDEX `FK_BIO_PEKERJAAN`(`id_bio`) USING BTREE,
  CONSTRAINT `FK_BIO_PEKERJAAN` FOREIGN KEY (`id_bio`) REFERENCES `bio` (`id_bio`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for pendidikan
-- ----------------------------
DROP TABLE IF EXISTS `pendidikan`;
CREATE TABLE `pendidikan`  (
  `id_pend` int(11) NOT NULL AUTO_INCREMENT,
  `id_bio` int(11) NULL DEFAULT NULL,
  `jenjang` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nama_sekolah` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tahun_masuk` int(11) NULL DEFAULT NULL,
  `tahun_keluar` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id_pend`) USING BTREE,
  INDEX `FK_BIO_PENDIDIKAN`(`id_bio`) USING BTREE,
  CONSTRAINT `FK_BIO_PENDIDIKAN` FOREIGN KEY (`id_bio`) REFERENCES `bio` (`id_bio`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 24 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

SET FOREIGN_KEY_CHECKS = 1;
