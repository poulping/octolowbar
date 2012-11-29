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

 Date: 11/28/2012 21:34:40 PM
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Records of `content`
-- ----------------------------
BEGIN;
INSERT INTO `content` VALUES ('1', 'Aubrey', 'Barlow: The Man, The Myth, The Legend', 'video', '2011-11-29 00:00:00', '7cAO1K2bZdg', '', '', '', '2012-11-28 21:28:42', '2012-11-28 21:28:42'), ('2', 'Cathy', 'Barlow’s Slippers', 'video', '2007-11-29 00:00:00', 'a5lJA7YXH14', '', '', '', '2012-11-28 21:29:23', '2012-11-28 21:29:23'), ('3', 'Etienne', 'How Barlow Thinks', 'video', '2006-11-26 00:00:00', 'CRln7L0INqc', '', '', '', '2012-11-28 21:29:45', '2012-11-28 21:29:45'), ('4', 'Glenna', 'Advice from Barlow', 'video', '2010-11-29 00:00:00', 'WEXZ0MB-fks', '', '', '', '2012-11-28 21:30:09', '2012-11-28 21:30:09'), ('5', 'Maude', 'Inside Barlow’s Mind', 'video', '2008-11-29 00:00:00', 'b3A7f508mjI', '', '', '', '2012-11-28 21:30:52', '2012-11-28 21:30:52'), ('6', 'McCauley', 'A Little Anecdote about Barlow', 'video', '2012-11-29 00:00:00', '61B8F8rCDkM', '', '', '', '2012-11-28 21:31:15', '2012-11-28 21:31:15'), ('7', 'Mick', 'What’s he really like?', 'video', '2005-01-01 00:00:00', '2A4XZXxJvIQ', '', '', '', '2012-11-28 21:31:39', '2012-11-28 21:31:39'), ('8', 'Saad', 'Barlow’s Work Area', 'video', '2005-11-29 00:00:00', 'HuJB6PMRLPk', '', '', '', '2012-11-28 21:32:28', '2012-11-28 21:32:28'), ('9', 'Steph', 'Working with Barlow', 'video', '2009-11-29 00:00:00', 'RIoyapPkuNY', '', '', '', '2012-11-28 21:32:51', '2012-11-28 21:32:51');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
