/*
Navicat MySQL Data Transfer

Source Server         : 本地
Source Server Version : 50521
Source Host           : localhost:3306
Source Database       : jfw_2016

Target Server Type    : MYSQL
Target Server Version : 50521
File Encoding         : 65001

Date: 2016-05-12 12:28:14
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `jfw_access`
-- ----------------------------
DROP TABLE IF EXISTS `jfw_access`;
CREATE TABLE `jfw_access` (
  `admin_id` int(10) NOT NULL COMMENT '管理员ID',
  `role_id` int(10) NOT NULL COMMENT '关联role表ID，角色ID',
  UNIQUE KEY `admin_id` (`admin_id`,`role_id`),
  CONSTRAINT `jfw_access_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `jfw_admin` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='权限关系表';

-- ----------------------------
-- Records of jfw_access
-- ----------------------------

-- ----------------------------
-- Table structure for `jfw_admin`
-- ----------------------------
DROP TABLE IF EXISTS `jfw_admin`;
CREATE TABLE `jfw_admin` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT '管理员ID',
  `name` varchar(30) NOT NULL DEFAULT '' COMMENT '管理员名称',
  `password` char(32) NOT NULL DEFAULT '' COMMENT '密码',
  `salt` char(4) NOT NULL DEFAULT '' COMMENT '随机字符串',
  `create_time` int(10) NOT NULL DEFAULT '0' COMMENT '创建时间',
  `update_time` int(10) NOT NULL DEFAULT '0' COMMENT '更新时间',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='管理员表';

-- ----------------------------
-- Records of jfw_admin
-- ----------------------------
INSERT INTO `jfw_admin` VALUES ('1', 'root', '', '', '0', '0');
INSERT INTO `jfw_admin` VALUES ('2', 'admin', '', '', '0', '0');

-- ----------------------------
-- Table structure for `jfw_node`
-- ----------------------------
DROP TABLE IF EXISTS `jfw_node`;
CREATE TABLE `jfw_node` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `name` varchar(64) NOT NULL COMMENT '节点名',
  `title` char(64) NOT NULL COMMENT '名称',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '状态',
  `module` tinyint(2) NOT NULL DEFAULT '0' COMMENT '所属模块',
  `sort` int(10) NOT NULL DEFAULT '0' COMMENT '排序',
  `create_time` int(10) NOT NULL DEFAULT '0' COMMENT '创建时间',
  `update_time` int(10) NOT NULL DEFAULT '0' COMMENT '更新时间',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='权限规则表';

-- ----------------------------
-- Records of jfw_node
-- ----------------------------
INSERT INTO `jfw_node` VALUES ('1', 'Admin/Index/index', '权限', '1', '0', '0', '1463015772', '1463015772');
INSERT INTO `jfw_node` VALUES ('2', 'Admin/Index/center', '权限', '1', '0', '0', '1463015772', '1463015772');

-- ----------------------------
-- Table structure for `jfw_role`
-- ----------------------------
DROP TABLE IF EXISTS `jfw_role`;
CREATE TABLE `jfw_role` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `title` varchar(30) NOT NULL DEFAULT '' COMMENT '角色名',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '是否启用',
  `create_time` int(10) NOT NULL DEFAULT '0' COMMENT '创建时间',
  `update_time` int(10) NOT NULL DEFAULT '0' COMMENT '更新时间',
  `rule` text NOT NULL COMMENT '关联node表ID，以 , 分隔',
  PRIMARY KEY (`id`),
  UNIQUE KEY `title` (`title`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='角色表';

-- ----------------------------
-- Records of jfw_role
-- ----------------------------
