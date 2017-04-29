
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `msg`
--

-- --------------------------------------------------------

--
-- 表的结构 `ad`
--

CREATE TABLE IF NOT EXISTS `ad` (
  `ad_top` text,
  `ad_foot` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `ad`
--

INSERT INTO `ad` (`ad_top`, `ad_foot`) VALUES
('', '');

-- --------------------------------------------------------

--
-- 表的结构 `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `username` varchar(16) NOT NULL,
  `password` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `webinfo`
--

CREATE TABLE IF NOT EXISTS `webinfo` (
  `webname` varchar(32) NOT NULL,
  `webqq` varchar(10) NOT NULL,
  `webmail` text NOT NULL,
  `webstat` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `webinfo`
--

INSERT INTO `webinfo` (`webname`, `webqq`, `webmail`, `webstat`) VALUES
('', '', '', '');

-- --------------------------------------------------------

--
-- 表的结构 `yszl`
--

CREATE TABLE IF NOT EXISTS `yszl` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `name` varchar(16) NOT NULL,
  `qq` char(10) NOT NULL,
  `tel` char(22) NOT NULL,
  `ip` varchar(15) NOT NULL,
  `title` varchar(38) NOT NULL,
  `info` text NOT NULL,
  `time` datetime NOT NULL,
  `fabu` varchar(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
