-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: mydb
-- Generation Time: Oct 01, 2017 at 03:48 PM
-- Server version: 5.7.19
-- PHP Version: 7.0.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yii2basic`
--

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1505559270),
('m140209_132017_init', 1505829945),
('m140403_174025_create_account_table', 1505829945),
('m140504_113157_update_tables', 1505829945),
('m140504_130429_create_token_table', 1505829945),
('m140830_171933_fix_ip_field', 1505829945),
('m140830_172703_change_account_table_name', 1505829945),
('m141222_110026_update_ip_field', 1505829945),
('m141222_135246_alter_username_length', 1505829945),
('m150614_103145_update_social_account_table', 1505829945),
('m150623_212711_fix_username_notnull', 1505829946),
('m151218_234654_add_timezone_to_profile', 1505829946),
('m160929_103127_add_last_login_at_to_user_table', 1505829946);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL COMMENT 'ID',
  `cat_id` int(11) NOT NULL COMMENT 'หมวดหมู่',
  `title` varchar(255) NOT NULL COMMENT 'หัวข้อข่าว',
  `detail` text NOT NULL COMMENT 'รายละเอียด',
  `post_date` datetime NOT NULL COMMENT 'วันที่โพสต์',
  `update_date` datetime NOT NULL COMMENT 'ปรับปรุงเมื่อ',
  `view` int(11) NOT NULL COMMENT 'จำนวนการเข้าชม'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `cat_id`, `title`, `detail`, `post_date`, `update_date`, `view`) VALUES
(1, 2, 'ข่าวแรก', 'รายละเอียดข่าวแรก', '2017-09-29 00:00:00', '2017-09-29 00:00:00', 1),
(2, 3, 'ข่าวที่ 2', 'รายละเอียด2', '2017-09-29 08:00:06', '2017-09-29 08:00:06', 0),
(3, 1, 'ข่าว3', 'รายละเอียดข่าว3', '2017-09-30 08:50:29', '2017-09-30 08:50:29', 0),
(4, 3, 'ข่าว4', '8888888', '2017-09-30 11:16:43', '2017-09-30 11:16:43', 0),
(5, 3, 'สอน Yii 2 : เริ่มต้นสร้าง View และ Controller', 'Yii เป็น PHP Framework ที่ค่อนข้างซับซ้อนครับ การทำงานในส่วนของ View ยังเต็มไปด้วย Syntax ของ\r\nภาษาพีเอชพี ถึงแม้ว่าเราอาจจะเลือกที่จะไม่ใช้ก็ตาม แต่ถ้าจะใช้ Yii ให้ได้เต็มความสามารถ ก็จำเป็นต้องมี\r\nพื้นฐานภาษาพีเอชพีที่ดีพอสมควร และถ้าได้ทดลองใช้จนเข้าใจหลักการทำงานของ Yii แล้ว จะเข้าใจว่าไม่ได้ยากเลย\r\n\r\n\r\n\r\nหลังจากในบทความที่แล้วเราได้ทำการติดตั้ง Yii 2 Framework ไปเรียบร้อยแล้ว ทั้งแบบผ่าน composer และ\r\nติดตั้งโดยใช้วิธีโหลดไฟล์ zip มาใช้งาน รวมไปถึงการตั้งค่าต่าง ๆ จนได้หน้า Default Page ของเฟรมเวิร์ค\r\nในบทความนี้เราจะมาทดสอบสร้าง View และ Controller โดยเป็นการสร้างขึ้นมาใหม่ทั้งหมด', '2017-09-30 11:19:02', '2017-09-30 11:19:02', 3),
(6, 3, 'สาวเจ้าของร้านตัดผมเมืองระยอง แจงที่มาภาพวาบหวิว ยันไม่มีเรื่องชู้สาว  ', 'หนุ่มน้อยหนุ่มใหญ่ แห่อยากตัดผมร้านเมืองระยอง เจ้าของร้านแจงที่มาภาพวาบหวิว ยืนยันไม่มีเรื่องชู้สาว เผย เคยทำอยู่ชลาชลมานาน 2 ปี ก่อนตัดสินใจเปิดร้านต\r\n\r\n', '2017-09-30 11:19:51', '2017-09-30 11:19:51', 7),
(7, 1, 'สวยแซ่บทุกมุม \"ใหม่ ดาวิกา\" สไตล์อินเตอร์..ปารีสแฟชั่นวีค', 'เรื่องโกอินเตอร์ในปีนี้ต้องเป็นคิวของ \"ใหม่ ดาวิกา\" เพราะหลังจากบินกลับมาจากแฟชั่นวีคที่นิวยอร์ก ล่าสุดก็บินไปต่อที่แฟชั่นวีคที่กรุงปารีส ประเทศฝรั่งเศส เพราะได้รับเชิญจากแบรนด์ดังไปร่วมชมแฟชั่นโชว์แถวหน้าในฐานะเซเลบริตี้คนดังระดับโลก\r\n\r\nไปเยือนถึงเทศกาลแฟชั่นระดับโลกทั้งที แน่นอนว่าสไตล์การแต่งตัวต้องดูดีมาเป็นอันดับแรก งานนี้เราได้เห็น สาวใหม่ ได้ลองใส่เสื้อผ้าแบรนด์เนมดังระดับโลกออกมาเดินท้องถนนแบบเก๋ๆ ลุคดูอินเตอร์สมศักดิ์มากๆ สำหรับภารกิจครั้งนี้อีกยาวไกล น่าจับตามองสาวคนนี้จริงๆ', '2017-09-30 11:20:35', '2017-09-30 11:20:35', 5),
(8, 2, 'วอนช่วยอดีตนักกีฬาวอลเล่ย์บอลเยาวชนทีมชาติ ป่วยเป็นมะเร็งลำไส้', 'วอนช่วยอดีตนักกีฬาวอลเล่ย์บอลเยาวชนทีมชาติ ป่วยเป็นมะเร็งลำไส้ หลังผ่าตัดมาแล้ว 2 ครั้ง แต่ค่าใช้จ่ายไม่เพียงพอต่อการรักษา \r\n\r\nวานนี้ (27 ก.ย. 60) ผู้สื่อข่าว MThai ได้เดินทางไปตรวจสอบ ที่ห้องพักฟื้นผู้ป่วย เลขที่ 628 โรงพยาบาลพญาไท ศรีราชา อ.ศรีราชา จ.ชลบุรี หลังทราบว่ามีอดีตนักกีฬาวอลเล่ย์หญิงทีมชาติ ชุดเยาวชนอายุไม่เกิน 18 ปี นอนเข้ารับการรักษาอาการป่วยมะเร็งลำไส้อยู่ แต่ขาดเงินในการใช้จ่ายเป็นค่ารักษาจึงร้องเรียนให้ผู้สื่อข่าวช่วยกระจายเพื่อให้ผู้ใจบุญและหน่วยงานที่เกี่ยวข้องยื่นมือเข้าช่วยเหลือ\r\nธุรกิจโฆษณา\r\n\r\nเมื่อไปถึง พบ น.ส.จุไรรัตน์ ผลเลขา อายุ 25 ปี หรือน้องไหม กำลังนอนพักรักษาตัวจากการเข้าผ่าตัดอยู่ในห้องดังกล่าว โดย น.ส.จุไรรัตน์ เผยว่า ปัจจุบันตนยังเล่นวอลเลย์บอลอยู่ ซึ่งอยู่สโมสร ไทยเดนมาร์คหนองเรือ จ.ขอนแก่น และตั้งแต่จบการแข่นขันวอลเลย์บอลลีกไป ตนก็ได้เดินทางมาสมัครงานที่ นาจอมเทียน ทำตำแหน่งธุรการ ที่โรงแรมแห่งหนึ่ง จนกระทั่งเมื่อเดือนสิงหาคม ที่ผ่านมา ตนได้ปวดท้องอย่างหนัก จนต้องเดินทางมารักษาตัวที่โรงพยาบาลสมเด็จพระบรมราชเทวี ณ ศรีราชา และได้เข้าผ่าตัดด้วยอาการฝีแตกในท้อง\r\n\r\nเมื่อผ่าตัดแล้วอาการปวดท้องยังไม่หาย จึงได้เปลี่ยนมารักษาตัวที่ โรงพยาบาลพญาไท ศรีราชา และได้รับเข้ารับการผ่าตัดอีกครั้งเป็นครั้งที่ 2 ซึ่งหมอระบุว่า ยังพบฝีในช่องท้องอยู่อีก พร้อมกับได้ผ่าตัดไส้ติ่งออกด้วย ต่อมามีอาการแทรกซ้อน จึงต้องเข้ารับผ่าตัดเป็นครั้งที่ 3 จนพบว่าลำไส้ตีบและรั่ว แพทย์จึงได้ดำเนินการตัดลำไส้ที่ตีบและรั่วออก โดยได้ยกลำไส้ออกมาไว้ข้างท้อง ประมาณ 2 เซนติเมตร และต้องรออีก 3 เดือนจะทำการผ่าตัดเข้าให้เข้าที่อีกครั้ง\r\n\r\nนอกจากนี้ทางด้าน แพทย์ระบุว่า ตนเป็นมะเร็งลำไส้ ตนรู้สึกกลัวมาก โดยภายหลังจากที่ผ่าตัดแล้วแผลหายแล้ว ตนก็ต้องเดินทางไปทำคีโม ต่ออีก ที่ศูนย์มะเร็งชลบุรี (มะเร็งระยะที่ 2) เพื่อรักษาตัวต่อไป สำหรับการผ่าตัดในแต่ละครั้งต้องมีค่าใช้จ่ายสูงมาก ซึ่งตอนนี้รวมค่าใช้จ่ายทั้งหมดประมาณ 6 แสนกว่าบาทแล้ว\r\n\r\nจึงอยากวอนขอให้ผู้ใจบุญ ช่วยสมทบทุนเพื่อช่วยค่ารักษาพยาบาลของ น.ส.จุไรรัตน์ ผลเลขา อายุ 25 ปี หรือน้องไหม โดยโอนเงินเข้าที่บัญชีของน้องไหมโดยตรง ชื่อบัญชี จุไรรัตน์ ผลเลขา ธนาคารกสิกรไทย สาขาน้ำยืน เลขที่ 3662560668, หรือติดต่อน้องไหมโดยตรงได้ที่เบอร์ 098-4078804', '2017-09-30 11:57:57', '2017-09-30 11:57:57', 20);

-- --------------------------------------------------------

--
-- Table structure for table `news_category`
--

CREATE TABLE `news_category` (
  `id` int(11) NOT NULL COMMENT 'ID',
  `name` varchar(255) NOT NULL COMMENT 'ชื่อหมวดหมู่',
  `create_date` date DEFAULT NULL COMMENT 'วันที่สร้าง'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news_category`
--

INSERT INTO `news_category` (`id`, `name`, `create_date`) VALUES
(1, 'ทั่วไป', '2017-09-01'),
(2, 'กีฬา', NULL),
(3, 'บันเทิง', '2015-05-25'),
(4, 'การเมือง', '2017-09-01'),
(8, 'ทดสอบ', '2017-09-29'),
(9, 'การศึกษา', '2017-08-01');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `public_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gravatar_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gravatar_id` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bio` text COLLATE utf8_unicode_ci,
  `timezone` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`user_id`, `name`, `public_email`, `gravatar_email`, `gravatar_id`, `location`, `website`, `bio`, `timezone`) VALUES
(1, 'ชิตชนก รัตนบุรี', 'joninjais@gmail.com', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'Asia/Bangkok'),
(2, 'ชิตชนก รัตนบุรี', 'jo-is221@hotmail.com', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `social_account`
--

CREATE TABLE `social_account` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `client_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `data` text COLLATE utf8_unicode_ci,
  `code` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `token`
--

CREATE TABLE `token` (
  `user_id` int(11) NOT NULL,
  `code` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) NOT NULL,
  `type` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `confirmed_at` int(11) DEFAULT NULL,
  `unconfirmed_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `blocked_at` int(11) DEFAULT NULL,
  `registration_ip` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `flags` int(11) NOT NULL DEFAULT '0',
  `last_login_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password_hash`, `auth_key`, `confirmed_at`, `unconfirmed_email`, `blocked_at`, `registration_ip`, `created_at`, `updated_at`, `flags`, `last_login_at`) VALUES
(1, 'admin', 'joninjais@gmail.com', '$2y$10$83zwV1Q4KvYxSdV.C2MRlOBKbqcTJuUGJEac9m8B41yZJ0AFo31rS', 'rf3z7gMG2YDqFaHl20TkOWCaVjNYWLT3', 1505830144, NULL, NULL, '192.168.99.1', 1505829998, 1505829998, 0, 1506824034),
(2, 'jojo', 'jo-is221@hotmail.com', '$2y$12$PSHndlxKPF9ekto7ETljdeuamxDICLFyCNoocRvg5N0DBU3USTJ5.', 'L4NZiiEOHnBTKZggsguCP6NyK7jzBNuo', 1506602262, NULL, NULL, '192.168.99.1', 1506602262, 1506602262, 0, 1506603402);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `cat` (`cat_id`);

--
-- Indexes for table `news_category`
--
ALTER TABLE `news_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `social_account`
--
ALTER TABLE `social_account`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `account_unique` (`provider`,`client_id`),
  ADD UNIQUE KEY `account_unique_code` (`code`),
  ADD KEY `fk_user_account` (`user_id`);

--
-- Indexes for table `token`
--
ALTER TABLE `token`
  ADD UNIQUE KEY `token_unique` (`user_id`,`code`,`type`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_unique_username` (`username`),
  ADD UNIQUE KEY `user_unique_email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID', AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `news_category`
--
ALTER TABLE `news_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID', AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `social_account`
--
ALTER TABLE `social_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `cat` FOREIGN KEY (`cat_id`) REFERENCES `news_category` (`id`);

--
-- Constraints for table `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `fk_user_profile` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `social_account`
--
ALTER TABLE `social_account`
  ADD CONSTRAINT `fk_user_account` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `token`
--
ALTER TABLE `token`
  ADD CONSTRAINT `fk_user_token` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
