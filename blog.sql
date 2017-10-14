/*
Navicat MySQL Data Transfer

Source Server         : 127.0.0.1
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : blog

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2017-08-13 22:55:27
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for article
-- ----------------------------
DROP TABLE IF EXISTS `article`;
CREATE TABLE `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text,
  `class_id` int(11) DEFAULT NULL,
  `time` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of article
-- ----------------------------

-- ----------------------------
-- Table structure for class
-- ----------------------------
DROP TABLE IF EXISTS `class`;
CREATE TABLE `class` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of class
-- ----------------------------
INSERT INTO `class` VALUES ('1', '前端技术');
INSERT INTO `class` VALUES ('2', '后端程序');
INSERT INTO `class` VALUES ('3', '程序人生');
INSERT INTO `class` VALUES ('4', '授人以渔');
INSERT INTO `class` VALUES ('5', '我要发帖');

-- ----------------------------
-- Table structure for content
-- ----------------------------
DROP TABLE IF EXISTS `content`;
CREATE TABLE `content` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `user_content` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `user_id` int(50) DEFAULT NULL,
  `topic_id` int(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of content
-- ----------------------------
INSERT INTO `content` VALUES ('34', '可', '71', '6');
INSERT INTO `content` VALUES ('41', '我听不到你的声音。。。', '71', '15');
INSERT INTO `content` VALUES ('42', '444', '71', '15');
INSERT INTO `content` VALUES ('52', '用迅雷呀', '71', '2');

-- ----------------------------
-- Table structure for daily_talk
-- ----------------------------
DROP TABLE IF EXISTS `daily_talk`;
CREATE TABLE `daily_talk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(255) DEFAULT NULL,
  `time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of daily_talk
-- ----------------------------
INSERT INTO `daily_talk` VALUES ('1', 'Do not let what you cannot do interfere with what you can do.&lt;/br&gt;\r\n 别让你不能做的事妨碍到你能做的事。（John Wooden）', '1502533147');

-- ----------------------------
-- Table structure for good_talk
-- ----------------------------
DROP TABLE IF EXISTS `good_talk`;
CREATE TABLE `good_talk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text,
  `title` varchar(255) DEFAULT NULL,
  `time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of good_talk
-- ----------------------------
INSERT INTO `good_talk` VALUES ('2', '&lt;p&gt;一次我下载几部电影，发现如果同时下载多部要等上几个小时，然后我把最想看的做个先后排序，去设置同时只能下载一部，结果是不到一杯茶功夫我就能看到最想看的电影。 这就像我们一段时间内想干成很多事情，是同时干还是有选择有顺序的干，结果很不一样。同时...&lt;/p&gt;', '从下载看我们该如何做事', '1502487175');

-- ----------------------------
-- Table structure for notice
-- ----------------------------
DROP TABLE IF EXISTS `notice`;
CREATE TABLE `notice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(255) DEFAULT NULL,
  `time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of notice
-- ----------------------------
INSERT INTO `notice` VALUES ('2', '欢迎访问ZHM BLOG', '1502534677');
INSERT INTO `notice` VALUES ('3', '在这里可以看到前端技术，后端程序，网站内容管理系统等文章，还有我的程序人生！', '1502534532');
INSERT INTO `notice` VALUES ('4', '在这个小工具中最多可以调用五条', '1502534560');
INSERT INTO `notice` VALUES ('5', '表示由一端滚动到另一端,会重复,缺陷是不能无缝滚动。', '1502536472');
INSERT INTO `notice` VALUES ('6', '页面的自动滚动效果，可由javascript来实现，但是今天无意中发现了一个html标签', '1502536487');

-- ----------------------------
-- Table structure for topic
-- ----------------------------
DROP TABLE IF EXISTS `topic`;
CREATE TABLE `topic` (
  `id` int(50) unsigned NOT NULL AUTO_INCREMENT,
  `content` text,
  `class_id` int(50) DEFAULT NULL,
  `time` int(50) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `views` int(11) NOT NULL DEFAULT '0',
  `comment_times` int(11) DEFAULT '0',
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of topic
-- ----------------------------
INSERT INTO `topic` VALUES ('2', '&lt;p&gt;22&lt;br/&gt;&lt;/p&gt;', '2', '1502484525', '从下载看我们该如何做事', '7', '1', '10');
INSERT INTO `topic` VALUES ('4', '&lt;p style=&quot;margin-top: 0px; margin-bottom: 15px; white-space: normal; padding: 0px; line-height: 24px; text-indent: 2em; zoom: 1; color: rgb(51, 51, 51); font-family: arial, sans-serif; font-size: 14px; widows: 1; background-color: rgb(255, 255, 255);&quot;&gt;“博客”一词是从英文单词Blog音译（不是翻译）而来。Blog是Weblog的简称，而Weblog则是由Web和Log两个英文单词组合而成。log有以下几种解释：&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 15px; white-space: normal; padding: 0px; line-height: 24px; text-indent: 2em; zoom: 1; color: rgb(51, 51, 51); font-family: arial, sans-serif; font-size: 14px; widows: 1; background-color: rgb(255, 255, 255);&quot;&gt;1. A record of a ship&amp;#39;s speed, its progress, and any shipboard eventsof navigational importance. 航海记录：对船速、船程以及船上发生的所有对航海有意义的事件的记载。&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 15px; white-space: normal; padding: 0px; line-height: 24px; text-indent: 2em; zoom: 1; color: rgb(51, 51, 51); font-family: arial, sans-serif; font-size: 14px; widows: 1; background-color: rgb(255, 255, 255);&quot;&gt;2. The book in which this record is kept. 航海日志：保有这种记载的本子。&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 15px; white-space: normal; padding: 0px; line-height: 24px; text-indent: 2em; zoom: 1; color: rgb(51, 51, 51); font-family: arial, sans-serif; font-size: 14px; widows: 1; background-color: rgb(255, 255, 255);&quot;&gt;3. A record of a vehicle&amp;#39;s performance, as the flight record of an aircraft. 飞行日志：对交通工具工作情况的记载，如飞机的飞行记录。&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 15px; white-space: normal; padding: 0px; line-height: 24px; text-indent: 2em; zoom: 1; color: rgb(51, 51, 51); font-family: arial, sans-serif; font-size: 14px; widows: 1; background-color: rgb(255, 255, 255);&quot;&gt;4. A record, as of the performance of a machine or the progress of an undertaking:&lt;span class=&quot;Apple-converted-space&quot;&gt;&amp;nbsp;&lt;/span&gt;日志：对某种机器工作情况或某项任务进展情况的记载。&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 15px; white-space: normal; padding: 0px; line-height: 24px; text-indent: 2em; zoom: 1; color: rgb(51, 51, 51); font-family: arial, sans-serif; font-size: 14px; widows: 1; background-color: rgb(255, 255, 255);&quot;&gt;博客最初的名称是Weblog，由web和log两个单词组成，按字面意思就为网络日记，后来喜欢新名词的人把这个词的发音故意改了一下，读成we blog，由此，blog这个词被创造出来。中文意思即&lt;span style=&quot;font-weight: 700;&quot;&gt;网志&lt;/span&gt;或&lt;span style=&quot;font-weight: 700;&quot;&gt;网络日志&lt;/span&gt;，不过，在中国大陆有人往往也将&lt;span class=&quot;Apple-converted-space&quot;&gt;&amp;nbsp;&lt;/span&gt;&lt;span style=&quot;font-weight: 700;&quot;&gt;Blog&lt;/span&gt;本身和&lt;span style=&quot;font-weight: 700;&quot;&gt;blogger&lt;/span&gt;（即博客作者）均音译为“博客”。“博客”有较深的涵义：“博”为“广博”；“客”不单是“blogger”更有“好客”之意。看Blog的人都是“客”。而在台湾，则分别音译成“部落格”（或“部落阁”）及“部落客”，认为Blog本身有社群群组的意含在内，借由Blog可以将网络上网友集结成一个大博客，成为另一个具有影响力的自由媒体。&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 15px; white-space: normal; padding: 0px; line-height: 24px; text-indent: 2em; zoom: 1; color: rgb(51, 51, 51); font-family: arial, sans-serif; font-size: 14px; widows: 1; background-color: rgb(255, 255, 255);&quot;&gt;① blog = Web log = 部落格 = 网络日志= 网志=网络日记本&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 15px; white-space: normal; padding: 0px; line-height: 24px; text-indent: 2em; zoom: 1; color: rgb(51, 51, 51); font-family: arial, sans-serif; font-size: 14px; widows: 1; background-color: rgb(255, 255, 255);&quot;&gt;② blogger = 写blog的人=博主&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 15px; white-space: normal; padding: 0px; line-height: 24px; text-indent: 2em; zoom: 1; color: rgb(51, 51, 51); font-family: arial, sans-serif; font-size: 14px; widows: 1; background-color: rgb(255, 255, 255);&quot;&gt;Weblog就是在网络上发布和阅读的流水记录，通常称为“网络日志”，简称为“网志”。博客（BLOGGER）概念解释为网络出版（Web Publishing）、发表和张贴（Post-这个字当名词用时就是指张贴的文章）文章，是个急速成长的网络活动，现在甚至出现了一个用来指称这种网络出版和发表文章的专有名词——Weblog，或Blog。&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 15px; white-space: normal; padding: 0px; line-height: 24px; text-indent: 2em; color: rgb(51, 51, 51); font-family: arial,sans-serif; font-size: 14px; background-color: rgb(255, 255, 255);&quot;&gt;Blogger即指撰写Blog的人。Blogger在很多时候也被翻译成为“博客”一词，而撰写Blog这种行为，有时候也被翻译成“博客”。因而，中文“博客”一词，既可作为名词，分别指代两种意思Blog（网志）和Blogger（撰写网志的人），也可作为动词，意思为撰写网志这种行为，只是在不同的场合分别表示不同的意思罢了。&lt;/p&gt;', '1', '1502477411', '博客是什么？', '10', '0', '10');
INSERT INTO `topic` VALUES ('5', '&lt;p&gt;&lt;img src=&quot;http://img.baidu.com/hi/jx2/j_0036.gif&quot;/&gt;dfasfasfdafasdfgasgdgasdgaga&lt;/p&gt;', '3', '1502611735', '123', '2', '0', '10');
INSERT INTO `topic` VALUES ('6', '&lt;p&gt;dsfafas&lt;br/&gt;&lt;/p&gt;', '1', '1502611723', 'asdfasdf', '12', '1', '10');
INSERT INTO `topic` VALUES ('8', '<p>从前有一座山，山里有一座庙，庙里有。。。。。。。<br/></p>', '4', '1499703011', '这是神墨?_?', '2', '0', '10');
INSERT INTO `topic` VALUES ('15', '&lt;p style=&quot;margin-top: 0px; margin-bottom: 15px; white-space: normal; padding: 0px; line-height: 24px; text-indent: 2em; zoom: 1; color: rgb(51, 51, 51); font-family: arial, sans-serif; font-size: 14px; widows: 1; background-color: rgb(255, 255, 255);&quot;&gt;“博客”一词是从英文单词Blog音译（不是翻译）而来。Blog是Weblog的简称，而Weblog则是由Web和Log两个英文单词组合而成。log有以下几种解释：&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 15px; white-space: normal; padding: 0px; line-height: 24px; text-indent: 2em; zoom: 1; color: rgb(51, 51, 51); font-family: arial, sans-serif; font-size: 14px; widows: 1; background-color: rgb(255, 255, 255);&quot;&gt;1. A record of a ship&amp;#39;s speed, its progress, and any shipboard eventsof navigational importance. 航海记录：对船速、船程以及船上发生的所有对航海有意义的事件的记载。&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 15px; white-space: normal; padding: 0px; line-height: 24px; text-indent: 2em; zoom: 1; color: rgb(51, 51, 51); font-family: arial, sans-serif; font-size: 14px; widows: 1; background-color: rgb(255, 255, 255);&quot;&gt;2. The book in which this record is kept. 航海日志：保有这种记载的本子。&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 15px; white-space: normal; padding: 0px; line-height: 24px; text-indent: 2em; zoom: 1; color: rgb(51, 51, 51); font-family: arial, sans-serif; font-size: 14px; widows: 1; background-color: rgb(255, 255, 255);&quot;&gt;3. A record of a vehicle&amp;#39;s performance, as the flight record of an aircraft. 飞行日志：对交通工具工作情况的记载，如飞机的飞行记录。&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 15px; white-space: normal; padding: 0px; line-height: 24px; text-indent: 2em; zoom: 1; color: rgb(51, 51, 51); font-family: arial, sans-serif; font-size: 14px; widows: 1; background-color: rgb(255, 255, 255);&quot;&gt;4. A record, as of the performance of a machine or the progress of an undertaking:&lt;span class=&quot;Apple-converted-space&quot;&gt;&amp;nbsp;&lt;/span&gt;日志：对某种机器工作情况或某项任务进展情况的记载。&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 15px; white-space: normal; padding: 0px; line-height: 24px; text-indent: 2em; zoom: 1; color: rgb(51, 51, 51); font-family: arial, sans-serif; font-size: 14px; widows: 1; background-color: rgb(255, 255, 255);&quot;&gt;博客最初的名称是Weblog，由web和log两个单词组成，按字面意思就为网络日记，后来喜欢新名词的人把这个词的发音故意改了一下，读成we blog，由此，blog这个词被创造出来。中文意思即&lt;span style=&quot;font-weight: 700;&quot;&gt;网志&lt;/span&gt;或&lt;span style=&quot;font-weight: 700;&quot;&gt;网络日志&lt;/span&gt;，不过，在中国大陆有人往往也将&lt;span class=&quot;Apple-converted-space&quot;&gt;&amp;nbsp;&lt;/span&gt;&lt;span style=&quot;font-weight: 700;&quot;&gt;Blog&lt;/span&gt;本身和&lt;span style=&quot;font-weight: 700;&quot;&gt;blogger&lt;/span&gt;（即博客作者）均音译为“博客”。“博客”有较深的涵义：“博”为“广博”；“客”不单是“blogger”更有“好客”之意。看Blog的人都是“客”。而在台湾，则分别音译成“部落格”（或“部落阁”）及“部落客”，认为Blog本身有社群群组的意含在内，借由Blog可以将网络上网友集结成一个大博客，成为另一个具有影响力的自由媒体。&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 15px; white-space: normal; padding: 0px; line-height: 24px; text-indent: 2em; zoom: 1; color: rgb(51, 51, 51); font-family: arial, sans-serif; font-size: 14px; widows: 1; background-color: rgb(255, 255, 255);&quot;&gt;① blog = Web log = 部落格 = 网络日志= 网志=网络日记本&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 15px; white-space: normal; padding: 0px; line-height: 24px; text-indent: 2em; zoom: 1; color: rgb(51, 51, 51); font-family: arial, sans-serif; font-size: 14px; widows: 1; background-color: rgb(255, 255, 255);&quot;&gt;② blogger = 写blog的人=博主&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 15px; white-space: normal; padding: 0px; line-height: 24px; text-indent: 2em; zoom: 1; color: rgb(51, 51, 51); font-family: arial, sans-serif; font-size: 14px; widows: 1; background-color: rgb(255, 255, 255);&quot;&gt;Weblog就是在网络上发布和阅读的流水记录，通常称为“网络日志”，简称为“网志”。博客（BLOGGER）概念解释为网络出版（Web Publishing）、发表和张贴（Post-这个字当名词用时就是指张贴的文章）文章，是个急速成长的网络活动，现在甚至出现了一个用来指称这种网络出版和发表文章的专有名词——Weblog，或Blog。&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 15px; white-space: normal; padding: 0px; line-height: 24px; text-indent: 2em; zoom: 1; color: rgb(51, 51, 51); font-family: arial, sans-serif; font-size: 14px; widows: 1; background-color: rgb(255, 255, 255);&quot;&gt;Blogger即指撰写Blog的人。Blogger在很多时候也被翻译成为“博客”一词，而撰写Blog这种行为，有时候也被翻译成“博客”。因而，中文“博客”一词，既可作为名词，分别指代两种意思Blog（网志）和Blogger（撰写网志的人），也可作为动词，意思为撰写网志这种行为，只是在不同的场合分别表示不同的意思罢了。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '3', '1502477437', '这就是Blog', '61', '2', '10');
INSERT INTO `topic` VALUES ('31', '&lt;p&gt;我想瘦下来！&lt;img src=&quot;http://img.baidu.com/hi/jx2/j_0013.gif&quot;/&gt;&lt;/p&gt;', '3', '1502615212', '我咔咔咔卡卡的笑', '16', '0', '10');
INSERT INTO `topic` VALUES ('32', '&lt;p&gt;好累啊 好累啊 好累啊！&lt;img src=&quot;http://img.baidu.com/hi/jx2/j_0012.gif&quot;/&gt;&lt;/p&gt;', '3', '1502651231', '终于快把东西写完了', '0', '0', '71');
INSERT INTO `topic` VALUES ('33', '&lt;p&gt;php是一款不错的后台语言&lt;img src=&quot;http://img.baidu.com/hi/jx2/j_0011.gif&quot;/&gt;&lt;/p&gt;', '2', '1502651839', 'php在后端的地位', '0', '0', null);
INSERT INTO `topic` VALUES ('34', '&lt;p&gt;javaScript是前端工程师最基本的一项技术技能&lt;img src=&quot;http://img.baidu.com/hi/jx2/j_0014.gif&quot;/&gt;&lt;/p&gt;', '1', '1502651943', 'JavaScript的重要性', '0', '0', null);

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `isadmin` tinyint(4) NOT NULL DEFAULT '0',
  `img` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=89 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('10', 'admin', '202cb962ac59075b964b07152d234b70', '1', 'uploads/2017-08-13/1.jpg');
INSERT INTO `user` VALUES ('71', '曾海跃', '202cb962ac59075b964b07152d234b70', '0', 'uploads/2017-08-13/1502621977869416418.jpg');
INSERT INTO `user` VALUES ('86', '曾文东', '202cb962ac59075b964b07152d234b70', '0', 'uploads/2017-08-13/15026245781025811160.jpg');
INSERT INTO `user` VALUES ('87', '曾海明', '202cb962ac59075b964b07152d234b70', '0', 'uploads/2017-08-13/15026356951168432927.jpg');
INSERT INTO `user` VALUES ('88', '老陈', '202cb962ac59075b964b07152d234b70', '0', 'uploads/2017-08-13/1502632309443555974.jpg');
