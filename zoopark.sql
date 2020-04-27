/*
 Navicat MySQL Data Transfer

 Source Server         : zoopark
 Source Server Type    : MySQL
 Source Server Version : 100313
 Source Host           : localhost:3306
 Source Schema         : zoopark

 Target Server Type    : MySQL
 Target Server Version : 100313
 File Encoding         : 65001

 Date: 27/04/2020 20:44:38
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for pitomec
-- ----------------------------
DROP TABLE IF EXISTS `pitomec`;
CREATE TABLE `pitomec`  (
  `Имя` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Дата_рождения` date NOT NULL,
  `Пол` varchar(8) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Вид_млекопитающего` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `Зона_обитания` int(11) NOT NULL,
  `Номер_сотрудника` decimal(6, 0) NOT NULL,
  `Номер_Типа_рациона` int(11) NOT NULL,
  `Код_сведения_животного` int(11) NOT NULL,
  `Номер_питомца` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`Номер_питомца`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pitomec
-- ----------------------------
INSERT INTO `pitomec` VALUES ('Чебурашка', '2020-04-01', 'Мужской', 'круто', 1, 100, 5, 11, 1);
INSERT INTO `pitomec` VALUES ('Ghbdt', '2020-04-18', '0', '1', 25, 366, 15, 10, 2);

-- ----------------------------
-- Table structure for racion
-- ----------------------------
DROP TABLE IF EXISTS `racion`;
CREATE TABLE `racion`  (
  `Номер_рациона` int(11) NOT NULL AUTO_INCREMENT,
  `Наименование` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Список_продуктов` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `Номер_типа` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`Номер_рациона`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 26 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of racion
-- ----------------------------
INSERT INTO `racion` VALUES (25, 'Класс', '23', 23224);

-- ----------------------------
-- Table structure for sotrydnik
-- ----------------------------
DROP TABLE IF EXISTS `sotrydnik`;
CREATE TABLE `sotrydnik`  (
  `Номер` int(6) NOT NULL AUTO_INCREMENT,
  `Фамилия` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `Имя` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `Отчество` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `Дата_рождения` date NOT NULL,
  `Пол` varchar(8) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `Телефон` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Семейное_положение` varchar(8) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Должность` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Код_супруга` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`Номер`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1123124 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of sotrydnik
-- ----------------------------
INSERT INTO `sotrydnik` VALUES (1123123, 'ASD', '0', '0', '2020-04-07', '0', '7877848489989', '0', '0', '12');

-- ----------------------------
-- Table structure for svedenie
-- ----------------------------
DROP TABLE IF EXISTS `svedenie`;
CREATE TABLE `svedenie`  (
  `Код` int(11) NOT NULL,
  `Название_страны` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Начало_улета` date NOT NULL,
  `Конец_прилета` date NOT NULL,
  `Температура` int(11) NOT NULL,
  PRIMARY KEY (`Код`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of svedenie
-- ----------------------------
INSERT INTO `svedenie` VALUES (1, 'ЙЦУ', '2020-04-07', '2020-05-02', 25);

-- ----------------------------
-- Table structure for tip
-- ----------------------------
DROP TABLE IF EXISTS `tip`;
CREATE TABLE `tip`  (
  `Номер_типа` int(11) NOT NULL,
  `Название` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`Номер_типа`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tip
-- ----------------------------
INSERT INTO `tip` VALUES (123, 'Золотой');

-- ----------------------------
-- Table structure for vid
-- ----------------------------
DROP TABLE IF EXISTS `vid`;
CREATE TABLE `vid`  (
  `Наименование` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Происхождение` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Группа` int(11) NOT NULL,
  PRIMARY KEY (`Наименование`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of vid
-- ----------------------------
INSERT INTO `vid` VALUES ('123', '123', 4142);
INSERT INTO `vid` VALUES ('456', '45645', 654);

-- ----------------------------
-- Table structure for zona
-- ----------------------------
DROP TABLE IF EXISTS `zona`;
CREATE TABLE `zona`  (
  `Код` int(11) NOT NULL,
  `Название` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Характеристика` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`Код`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of zona
-- ----------------------------
INSERT INTO `zona` VALUES (123, '123123', '123');

SET FOREIGN_KEY_CHECKS = 1;
