/*
 Navicat Premium Data Transfer

 Source Server         : dev
 Source Server Type    : MySQL
 Source Server Version : 50141
 Source Host           : 10.100.1.180
 Source Database       : octolowbar

 Target Server Type    : MySQL
 Target Server Version : 50141
 File Encoding         : utf-8

 Date: 11/28/2012 20:50:50 PM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `comment`
-- ----------------------------
DROP TABLE IF EXISTS `comment`;
CREATE TABLE `comment` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `content_id` bigint(20) DEFAULT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `content_id_idx` (`content_id`),
  CONSTRAINT `comment_content_id_content_id` FOREIGN KEY (`content_id`) REFERENCES `content` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Records of `comment`
-- ----------------------------
BEGIN;
INSERT INTO `comment` VALUES ('10', '22', 'Mathieu', 'TEst', '2012-11-28 16:09:15', '2012-11-28 16:09:15'), ('11', '22', 'Isaiah', 'Second comment\r\n', '2012-11-28 16:14:31', '2012-11-28 16:14:31'), ('12', '22', 'Test', 'comment', '2012-11-28 20:05:23', '2012-11-28 20:05:23'), ('13', '22', 'Test', 'comment', '2012-11-28 20:05:36', '2012-11-28 20:05:36'), ('14', '22', 'Test', 'comment', '2012-11-28 20:05:40', '2012-11-28 20:05:40');
COMMIT;

-- ----------------------------
--  Table structure for `content`
-- ----------------------------
DROP TABLE IF EXISTS `content`;
CREATE TABLE `content` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'barlow',
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `date_published` datetime NOT NULL,
  `video_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content_additional` text COLLATE utf8_unicode_ci,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `content_type_idx` (`type`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Records of `content`
-- ----------------------------
BEGIN;
INSERT INTO `content` VALUES ('22', 'Mathieu', 'Nice title', 'text', '2012-01-02 00:00:00', '', null, 'This is my content', '', '2012-11-28 16:08:57', '2012-11-28 16:08:57'), ('23', 'TI', 'Barlow: The Man, The Myth, The Legend', 'video', '2008-11-29 00:00:00', '7cAO1K2bZdg', 'Aubrey', '', '', '2012-11-28 19:08:04', '2012-11-28 19:08:04'), ('24', 'Cathy', 'Barlow’s Slippers', 'video', '2004-11-29 00:00:00', 'a5lJA7YXH14', '', '', '', '2012-11-28 19:09:35', '2012-11-28 19:09:35'), ('25', 'Etienne', 'How Barlow Thinks', 'video', '2003-11-29 00:00:00', 'CRln7L0INqc', '', '', '', '2012-11-28 19:10:35', '2012-11-28 19:10:35'), ('26', 'Ken', 'Test', 'text', '2005-02-25 00:00:00', '', null, 'Test content', '', '2012-11-28 19:12:01', '2012-11-28 19:12:01'), ('27', 'Glenna', 'Advice from Barlow', 'video', '2007-11-29 00:00:00', 'WEXZ0MB-fks', '', '', '', '2012-11-28 19:12:58', '2012-11-28 19:12:58'), ('28', 'Maude', 'Inside Barlow’s Mind', 'video', '2005-11-29 00:00:00', 'b3A7f508mjI', '', '', '', '2012-11-28 19:14:05', '2012-11-28 19:14:05'), ('29', 'McCauley', 'A Little Anecdote about Barlow', 'video', '2009-11-29 00:00:00', '61B8F8rCDkM', '', '', '', '2012-11-28 19:14:46', '2012-11-28 19:14:46'), ('30', 'Mick', 'What’s he really like?', 'video', '2002-01-01 00:00:00', '2A4XZXxJvIQ', '', '', '', '2012-11-28 19:16:40', '2012-11-28 19:16:40'), ('31', 'Saad', 'Barlow’s Work Area', 'video', '2002-11-09 00:00:00', 'HuJB6PMRLPk', '', '', '', '2012-11-28 19:18:32', '2012-11-28 19:18:32'), ('32', 'Steph', 'Working with Barlow', 'video', '2006-11-29 00:00:00', 'RIoyapPkuNY', '', '', '', '2012-11-28 19:19:01', '2012-11-28 19:19:01'), ('33', 'Ken', 'Test image', 'image', '2004-02-04 00:00:00', '', '', '', 'da4acfe1d21449df01432c066b21e71cb8906ce7.jpg', '2012-11-28 19:20:00', '2012-11-28 19:20:00'), ('34', 'Mathieu', 'Test', 'text', '2009-01-07 00:00:00', '', null, 'Test content', '', '2012-11-28 19:51:13', '2012-11-28 19:51:13'), ('35', 'Mathieu', 'Test', 'text', '2002-01-03 00:00:00', '', null, 'Test content', '', '2012-11-28 19:52:50', '2012-11-28 19:52:50'), ('36', 'Mathieu', 'Test', 'text', '0005-03-04 00:00:00', '', null, 'Test content', '', '2012-11-28 19:54:23', '2012-11-28 19:54:23');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
