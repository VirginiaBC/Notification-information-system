--
-- Database: `message`
--

-- --------------------------------------------------------

--
-- 表的结构 `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `unit` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `content` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `start_data` date NOT NULL,
  `end_data` date NOT NULL,
  `remarks` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `contact` bigint(11) NOT NULL,
  `type` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `address` varchar(20) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `messages`
--

INSERT INTO `messages` (`id`, `unit`, `content`, `start_data`, `end_data`, `remarks`, `contact`, `type`, `address`) VALUES
(1, '蓝海公司', 'Java工程师', '2019-07-10', '2019-07-20', '10k/月', 17859735989, '招聘', '蓝海公司'),
(2, '达内', '大数据暑期实训', '2019-07-10', '2019-07-30', '无', 17859754178, '实训', '机电大楼A328'),
(3, '张三老师', '奶茶店小程序开发', '2019-07-24', '2019-08-15', '包吃包住', 13312512312, '项目', '华侨大学'),
(4, '李四老师', '暑期实践动员大会', '2019-07-06', '2019-07-06', '下午2点半', 13145875465, '开会', 'F-102'),
(5, '华侨大学', '大院杯', '2019-07-31', '2019-08-15', '无', 13389647558, '比赛', '灯光篮球场');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE `user` (
  `id` bigint(11) NOT NULL,
  `password` varchar(20) NOT NULL,
  `user_name` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `phone` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `password`, `user_name`, `phone`) VALUES
(1625161010, '984670', '小明', '18947646755'),
(1625161011, '984670', '小红', '15389887153');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
