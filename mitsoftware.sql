-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2014 at 02:37 PM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mitsoftware`
--

-- --------------------------------------------------------

--
-- Table structure for table `addemployee`
--

CREATE TABLE IF NOT EXISTS `addemployee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` varchar(20) NOT NULL,
  `emp_name` varchar(11) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `EFIRST_NAME` varchar(50) DEFAULT NULL,
  `EPassword` varchar(30) DEFAULT NULL,
  `EDob` date DEFAULT NULL,
  `EGender` varchar(10) DEFAULT NULL,
  `EDesignation` varchar(30) DEFAULT NULL,
  `EMarital_Status` varchar(10) DEFAULT NULL,
  `E_ADDRESS` varchar(300) DEFAULT NULL,
  `ECountry` varchar(30) DEFAULT NULL,
  `EState` varchar(30) DEFAULT NULL,
  `ECity` varchar(30) DEFAULT NULL,
  `EPinCode` decimal(30,0) DEFAULT NULL,
  `EPhone_NO` decimal(30,0) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `addemployee`
--

INSERT INTO `addemployee` (`id`, `emp_id`, `emp_name`, `designation`, `EFIRST_NAME`, `EPassword`, `EDob`, `EGender`, `EDesignation`, `EMarital_Status`, `E_ADDRESS`, `ECountry`, `EState`, `ECity`, `EPinCode`, `EPhone_NO`) VALUES
(1, '1234', '344', '3431134', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, '', '', '', 'santosh', 'dadasd', '2013-11-12', 'M', 'dasdasd', 'single', 'dasda', 'india', 'west bengal', 'banglore', '560102', '9008365317'),
(3, '', '', '', 'santosh', '1cd09mca13', '2013-11-15', 'M', 'web developer', 'single', 'dasdasda', 'india', 'karnataka', 'banglore', '560102', '9008365317');

-- --------------------------------------------------------

--
-- Table structure for table `clientdetails`
--

CREATE TABLE IF NOT EXISTS `clientdetails` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `clientname` varchar(100) NOT NULL,
  `sitename` varchar(200) NOT NULL,
  `phonenumber` bigint(11) NOT NULL,
  `mailid` varchar(150) NOT NULL,
  `totalamount` int(11) NOT NULL,
  `advanceamountpaid` int(11) NOT NULL,
  `advanceamountdate` varchar(200) NOT NULL,
  `total` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `clientdetails`
--

INSERT INTO `clientdetails` (`id`, `clientname`, `sitename`, `phonenumber`, `mailid`, `totalamount`, `advanceamountpaid`, `advanceamountdate`, `total`) VALUES
(1, 'kadar', 'www.multiinnovate.com', 9008365317, 'info@multiinnovate.com', 10500, 500, '07/23/2013', 10000),
(3, 'santosh', 'www.google.com', 9735719698, 'santosh.citech@live.in', 5000, 2000, '11/10/2013', 3000),
(5, 'murali', 'www.gmail.com', 9008365318, 'saya.mit@gmail.com', 1000, 500, '11/20/2013', 500);

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE IF NOT EXISTS `documents` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `date` varchar(50) NOT NULL,
  `author` varchar(50) NOT NULL,
  `DocName` mediumtext NOT NULL,
  `DocType` varchar(30) DEFAULT NULL,
  `DocSize` varchar(100) DEFAULT NULL,
  `DocContent` varchar(500) DEFAULT NULL,
  `remark` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=117 ;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`id`, `date`, `author`, `DocName`, `DocType`, `DocSize`, `DocContent`, `remark`) VALUES
(96, '2013-12-17', 'santosh', '3.png', 'image/png', '327039', '‰PNG\r\n\Z\n\0\0\0\rIHDR\0\0ì\0\0O\0\0\0æ&^|\0\0 \0IDATx^ì½	€^Uy7þÌ’Ù÷™$3	I&	» **(*XÛ*—ÖVÑ–Vý·ý´~ÿ~êg[±µ*ê÷©ÕV¬Øµ¬Š`ETDö%aMB¶™$³ïû|Ïï9ç9÷ÜóÞûÞ÷%D;GÃ{ï¹g?ç=¿ó{–’K?~Ó<ÑUñ¿•ëJ;q0ÁCm_/õŽLQß0ÆÝJXiåkçŽ ú#HÝƒCTÞ±•ÚÆŽÈýÞîTQ]Ë¼½±AâMËsÿ=žX9M{J[Hãéqõý“«¨f|”—VP]åªœÊáÝXu-LNÓš¹)‰§WÄÇs\rz÷øå©=þ|úeÝú%j4÷š\\p_ÍÏÇý¬ŽÎ:å˜Q>¿hú3¶D-c*ŽH	a~ýŒr}°¦6cÖ{¯,‰ù''|/Ÿès/c)G¡÷œ„äw´ú?Ì''ìó¾ª¹‰j›š©±©‘Ê&ÍœÝ·»WÞMôÛvÖO¥ºøÎŽÁ­R%Wí½®¦»¤¿\\¬¨,R\n¯ß‘¼ÿ«–;zÃüÒâÛú¥”/,oâ=õõë¼´úÛò¾×ú›ô¢ÞÉsoÛÛogÉÏÿÒ^vškø^ËoÆ_Nû6#Å', 'weqweqwe'),
(97, '2013-12-02', 'Dinesh', 'god of war.jpg', 'image/jpeg', '259051', 'ÿØÿà\0JFIF\0,,\0\0ÿí!JPhotoshop 3.0\08BIM\0\0\0\0\0Z\0%G\0\0\0P\05655366\08BIM%\0\0\0\0\0tqaa¨‡ê‡Pw 1O	c8BIM:\0\0\0\0\0å\0\0\0\0\0\0\0\0\0\0\0printOutput\0\0\0\0\0\0\0PstSbool\0\0\0\0Inteenum\0\0\0\0Inte\0\0\0\0Clrm\0\0\0printSixteenBitbool\0\0\0\0printerNameTEXT\0\0\0\0\0\0\0\0printProofSetupObjc\0\0\0\0P\0r\0o\0o\0f\0 \0S\0e\0t\0u\0p\0\0\0\0\0\nproofSetup\0\0\0\0\0\0\0Bltnenum\0\0\0builtinProof\0\0\0	proofCMYK\08BIM;\0\0\0\0-\0\0\0\0\0\0\0\0\0\0\0printOutputOptions\0\0\0\0\0\0\0Cptnbool\0\0\0\0\0Clbrbool\0\0\0\0\0RgsMbool\0\0\0\0\0CrnCbool\0\0\0\0\0CntCbool\0\0\0\0\0Lblsbool\0\0\0\0\0Ngtvbool\0\0\0\0\0EmlDbool\0', 'dadasd'),
(98, '2014-01-23', 'SANTOSH', 'wallpaper_ubtunu_500x.png', 'image/png', '79396', '‰PNG\r\n\Z\n\0\0\0\rIHDR\0\0\0\0,\0\0\0bÕr•\0\0\0sRGB\0®Îé\0\0 \0IDATxÚŒ½éš#Ùq$êv@fUuU×ÒÍ)4’æ“>êIîËßg4\ZŠìÚ·®¬nó#Îbî''’÷6?ö’…@„‡»¹-¸ü¿ÿÁÌØþ°bX`¬\0€Š³²˜ÁŠ°Ë•oÞ˜™ÑÌÌ@Ûž(ýEÛû¡ÛÿÏ¿Ò¯£ÿcz-°ýBüSÈ¿°½UX}ƒØ^b{f¤üv©ÿÂöH}eC1l¿ÏðBÛ³9€ñ€öÌïí·?Ùž¼ä‡a~ºþ6û·ï‘õíèŠ½—Ûy~¶_ÔWÁt>¾/ùîÚË±§oÖÍ\\þ›¬d8BnßãsÚÎ³¥_‡ÂP¾20Í<¼Çú§4ãxòq8‡A—?23Êm¯Eùö§Z?|;ÿÇÿíbæÔgàøüÈö3¾lÇ¬ ~”43–§§Ûy…C©ß"ô-o§	ääÁö§òÐô9sï“çÎÅÎÝo¼þ¼ž¾MrüCßõöÿC¿ÆIƒÑàæ…F,4sãbp³âæ0»\Zc¡;ŽG{öÌ>}2CýzŠžÈ×OøDKøÖÿÊ_ÛÅFì•*¶zk	¸wím—®Ö¯VÐ¾ýKû', 'asdasdas'),
(99, '2014-01-21', 'asda', 'wallpaper_ubtunu_500x.png', 'image/png', '79396', '‰PNG\r\n\Z\n\0\0\0\rIHDR\0\0\0\0,\0\0\0bÕr•\0\0\0sRGB\0®Îé\0\0 \0IDATxÚŒ½éš#Ùq$êv@fUuU×ÒÍ)4’æ“>êIîËßg4\ZŠìÚ·®¬nó#Îbî''’÷6?ö’…@„‡»¹-¸ü¿ÿÁÌØþ°bX`¬\0€Š³²˜ÁŠ°Ë•oÞ˜™ÑÌÌ@Ûž(ýEÛû¡ÛÿÏ¿Ò¯£ÿcz-°ýBüSÈ¿°½UX}ƒØ^b{f¤üv©ÿÂöH}eC1l¿ÏðBÛ³9€ñ€öÌïí·?Ùž¼ä‡a~ºþ6û·ï‘õíèŠ½—Ûy~¶_ÔWÁt>¾/ùîÚË±§oÖÍ\\þ›¬d8BnßãsÚÎ³¥_‡ÂP¾20Í<¼Çú§4ãxòq8‡A—?23Êm¯Eùö§Z?|;ÿÇÿíbæÔgàøüÈö3¾lÇ¬ ~”43–§§Ûy…C©ß"ô-o§	ääÁö§òÐô9sï“çÎÅÎÝo¼þ¼ž¾MrüCßõöÿC¿ÆIƒÑàæ…F,4sãbp³âæ0»\Zc¡;ŽG{öÌ>}2CýzŠžÈ×OøDKøÖÿÊ_ÛÅFì•*¶zk	¸wím—®Ö¯VÐ¾ýKû', 'dasdas'),
(101, '2014-01-22', 'dsf', 'wallpaper_ubtunu_500x.png', 'image/png', '79396', '‰PNG\r\n\Z\n\0\0\0\rIHDR\0\0\0\0,\0\0\0bÕr•\0\0\0sRGB\0®Îé\0\0 \0IDATxÚŒ½éš#Ùq$êv@fUuU×ÒÍ)4’æ“>êIîËßg4\ZŠìÚ·®¬nó#Îbî''’÷6?ö’…@„‡»¹-¸ü¿ÿÁÌØþ°bX`¬\0€Š³²˜ÁŠ°Ë•oÞ˜™ÑÌÌ@Ûž(ýEÛû¡ÛÿÏ¿Ò¯£ÿcz-°ýBüSÈ¿°½UX}ƒØ^b{f¤üv©ÿÂöH}eC1l¿ÏðBÛ³9€ñ€öÌïí·?Ùž¼ä‡a~ºþ6û·ï‘õíèŠ½—Ûy~¶_ÔWÁt>¾/ùîÚË±§oÖÍ\\þ›¬d8BnßãsÚÎ³¥_‡ÂP¾20Í<¼Çú§4ãxòq8‡A—?23Êm¯Eùö§Z?|;ÿÇÿíbæÔgàøüÈö3¾lÇ¬ ~”43–§§Ûy…C©ß"ô-o§	ääÁö§òÐô9sï“çÎÅÎÝo¼þ¼ž¾MrüCßõöÿC¿ÆIƒÑàæ…F,4sãbp³âæ0»\Zc¡;ŽG{öÌ>}2CýzŠžÈ×OøDKøÖÿÊ_ÛÅFì•*¶zk	¸wím—®Ö¯VÐ¾ýKû', 'dadasda'),
(102, '2014-01-23', 'asda', '3.png', 'image/png', '327039', '‰PNG\r\n\Z\n\0\0\0\rIHDR\0\0ì\0\0O\0\0\0æ&^|\0\0 \0IDATx^ì½	€^Uy7þÌ’Ù÷™$3	I&	» **(*XÛ*—ÖVÑ–Vý·ý´~ÿ~êg[±µ*ê÷©ÕV¬Øµ¬Š`ETDö%aMB¶™$³ïû|Ïï9ç9÷ÜóÞûÞ÷%D;GÃ{ï¹g?ç=¿ó{–’K?~Ó<ÑUñ¿•ëJ;q0ÁCm_/õŽLQß0ÆÝJXiåkçŽ ú#HÝƒCTÞ±•ÚÆŽÈýÞîTQ]Ë¼½±AâMËsÿ=žX9M{J[Hãéqõý“«¨f|”—VP]åªœÊáÝXu-LNÓš¹)‰§WÄÇs\rz÷øå©=þ|úeÝú%j4÷š\\p_ÍÏÇý¬ŽÎ:å˜Q>¿hú3¶D-c*ŽH	a~ýŒr}°¦6cÖ{¯,‰ù''|/Ÿès/c)G¡÷œ„äw´ú?Ì''ìó¾ª¹‰j›š©±©‘Ê&ÍœÝ·»WÞMôÛvÖO¥ºøÎŽÁ­R%Wí½®¦»¤¿\\¬¨,R\n¯ß‘¼ÿ«–;zÃüÒâÛú¥”/,oâ=õõë¼´úÛò¾×ú›ô¢ÞÉsoÛÛogÉÏÿÒ^vškø^ËoÆ_Nû6#Å', 'dadasdas'),
(105, '2014-01-23', 'dsf', 'night watch.gif', 'image/gif', '115076', 'GIF89a\0p÷\0\0(8(0 (   \0\0 ( 8( @0(P0 X0 `0 h0 p0 x0 P0H(8 \0@(X8(0(€0 ˆ0 0 \0\0 0\0\0¸„0èÌx€X0X8 0( øü˜p@ Ø¼pX(h8H0pH(€H `0¨p(¨€@¸˜PÈ¨`@((ØÀhèÐ€øè8((øø¸H  \0\0\0X0€@ Àˆ8`0  ( p8P( X0 ˆ@\0(   h8x@€HˆP\08ðÔxøü¨ÀŒ0pH `8 `8H0 H( @( ˜`8X(p8€@ˆHP\0`(˜h0p8ˆP °ˆHÀ XØ°hèÐpøàˆøøÀP `0ˆH  h8Ð8h0x8H\00€P0°p(h@ @0 øìˆàÄpP8 x@P  p8ÀHÐ¨`èÀpøØxøðøø øøÐ@ H Ø˜@¨p@0 ˆ@˜H\00  `8€@ˆH\0ðäˆxP0x@€H\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', 'dasdasd'),
(106, '2013-12-09', 'Dinesh', '0005.gif', 'image/gif', '218134', 'GIF89að\0@÷\0\0\0\0\0\r\r\r\Z $4\Z#&45\Z# 7!+#9#<5#$5#-!*\Z"3#89$0>#,"$9#!=59+!39(4:3\r@\ZEU\rC"F%C8U(Z2hu\Z\Zf(f3t)w5&F\Z(U1I5Y\Z%F&$G:&U''&V83I)5J44W)8W4.b(g&u\Z5f4u&g'')e9&w)''x57h%6g89w&8x5GAaFxB,SH,eF-bU*uF)tU5fI6gV8vH:tW.j`)ye9kd<uh>zpB''F+#B?,X+%V<-Y:3@_EI8@Y-C[6[F7@iCuAj+Ef8Bw*Fw6Wm?Tw;eG7bP:f|>EKCGXFPVLU[SEgIDkTFxHGuYQjGUiWUwKVxWFypdU@fdOchRbOb|Zp|Xhlfixhqev{u„’‡%ƒ7“$•< >&… “6…:’''…''%ˆ6''”+%•:9…''9ˆ37—)6˜8+¥9,±<;¦,5¤61°:‰D™G', 'rwerwer'),
(107, '2014-01-26', 'FDS', 'arizona-sunlight-antelope-canyon-rock-formations-fresh-new-hd-nature-images-arizona-hd-wallpaper.jpg', 'image/jpeg', '396335', 'ÿØÿà\0JFIF\0\0\0\0\0\0ÿÛ\0C\0\n\n	\n\r\r"\Z)$+*($''''-2@7-0=0''''8L9=CEHIH+6OUNFT@GHEÿÛ\0C\r\r!!E.''.EEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEÿÀ\0@\n\0"\0ÿÄ\0\0\0\0\0\0\0\0\0\0\0	\nÿÄ\0µ\0\0\0}\0!1AQa"q2‘¡#B±ÁRÑð$3br‚	\n\Z%&''()*456789:CDEFGHIJSTUVWXYZcdefghijstuvwxyzƒ„…†‡ˆ‰Š’“”•–—˜™š¢£¤¥¦§¨©ª²³´µ¶·¸¹ºÂÃÄÅÆÇÈÉÊÒÓÔÕÖ×ØÙÚáâãäåæçèéêñòóôõö÷øùúÿÄ\0\0\0\0\0\0\0\0	\nÿÄ\0µ\0\0w\0!1AQaq"2B‘¡±Á	#3RðbrÑ\n$4á%ñ\Z&''()*5', 'rwerwer'),
(108, '2013-12-19', 'dadas', 'green park.gif', 'image/gif', '199792', 'GIF89a\0\0çÿ\0)\0\0	\nA\0\r/		\0\Z\n   \n \0Q! ''  ! \Z(\0( 0 )*''!() Q((''((''!0\0120(1\n7\0(0\r%0''0"8^!"20!7\0&1180/1!8800)?0\08z80&A008#?:7 @*?\0g)(78!A79''H8\0880@9/@A8)@8-H\n6@!@@>A1G\r?@.A@)@?8†/q8.I!I@6&HP&P\nQ@-@GBH0P\0>H)¢/\0HG03PFI&5QHG@:PGI6‰7(`HJOIP&gI6XPP!?XOP''OQ-GY\0OQ>PPHbP&‚JJX1NY''QX-?`>`^Y[XXX/OYIhXWXEYXPšG@yWU`.HhX`:`_0Gi%Q`ef`8]aR°O``X_a^Uh:EpÁHFgh$ch6`hAPp&ih8‚`EZhnihOfh[‡`MXp:xh0]pAQw$yhYko>hpIXx-apv gmpb`', 'adadasd'),
(109, '2014-01-30', 'santosh', '0005.gif', 'image/gif', '218134', 'GIF89að\0@÷\0\0\0\0\0\r\r\r\Z $4\Z#&45\Z# 7!+#9#<5#$5#-!*\Z"3#89$0>#,"$9#!=59+!39(4:3\r@\ZEU\rC"F%C8U(Z2hu\Z\Zf(f3t)w5&F\Z(U1I5Y\Z%F&$G:&U''&V83I)5J44W)8W4.b(g&u\Z5f4u&g'')e9&w)''x57h%6g89w&8x5GAaFxB,SH,eF-bU*uF)tU5fI6gV8vH:tW.j`)ye9kd<uh>zpB''F+#B?,X+%V<-Y:3@_EI8@Y-C[6[F7@iCuAj+Ef8Bw*Fw6Wm?Tw;eG7bP:f|>EKCGXFPVLU[SEgIDkTFxHGuYQjGUiWUwKVxWFypdU@fdOchRbOb|Zp|Xhlfixhqev{u„’‡%ƒ7“$•< >&… “6…:’''…''%ˆ6''”+%•:9…''9ˆ37—)6˜8+¥9,±<;¦,5¤61°:‰D™G', 'sdadasd'),
(110, '2013-12-10', 'FDS', 'god of war.jpg', 'image/jpeg', '259051', 'ÿØÿà\0JFIF\0,,\0\0ÿí!JPhotoshop 3.0\08BIM\0\0\0\0\0Z\0%G\0\0\0P\05655366\08BIM%\0\0\0\0\0tqaa¨‡ê‡Pw 1O	c8BIM:\0\0\0\0\0å\0\0\0\0\0\0\0\0\0\0\0printOutput\0\0\0\0\0\0\0PstSbool\0\0\0\0Inteenum\0\0\0\0Inte\0\0\0\0Clrm\0\0\0printSixteenBitbool\0\0\0\0printerNameTEXT\0\0\0\0\0\0\0\0printProofSetupObjc\0\0\0\0P\0r\0o\0o\0f\0 \0S\0e\0t\0u\0p\0\0\0\0\0\nproofSetup\0\0\0\0\0\0\0Bltnenum\0\0\0builtinProof\0\0\0	proofCMYK\08BIM;\0\0\0\0-\0\0\0\0\0\0\0\0\0\0\0printOutputOptions\0\0\0\0\0\0\0Cptnbool\0\0\0\0\0Clbrbool\0\0\0\0\0RgsMbool\0\0\0\0\0CrnCbool\0\0\0\0\0CntCbool\0\0\0\0\0Lblsbool\0\0\0\0\0Ngtvbool\0\0\0\0\0EmlDbool\0', 'dasdasd'),
(111, '2014-01-31', 'FDS', 'New Microsoft Office Word Document.docx', 'application/vnd.openxmlformats', '12928', 'PK\0\0\0\0\0!\0Ýü•7f\0\0 \0\0\0[Content_Types].xml ¢( \0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', 'asdasda'),
(112, '2014-01-30', 'dadasda', 'blueEyes.txt', 'text/plain', '1991', 'Blue Eyes Lyrics\r\n\r\nBlue eyes hypnotize teri kardi ai mennu\r\nI swear! chhoti dress mein bomb lagdi mennu\r\nGlossy lips, uff yeh tricks\r\nBaby lagdi ai killer\r\nOh yeah oh yeah\r\nKatal kare tera bomb figure\r\n\r\nBlue eyes, hypnotize teri kardi ai mennu\r\nI swear ! chhoti dress mein bomb lagdi mennu\r\n(bomb lagdi mennu, bomb lagdi mennu)\r\n(mennu..)\r\n\r\nMeri aankhon mein dekha kar\r\nJab mein baat karta hun\r\nMain woh londa nahi jo tere saath padta hun\r\nWhite ghini laya hun\r\nTujhe pick kar lun\r\nDekh lunga aash', 'dasdas'),
(113, '2013-12-19', 'dadas', 'File upload and download script.docx', 'application/vnd.openxmlformats', '13606', 'PK\0\0\0\0\0!\0Ýü•7f\0\0 \0\0\0[Content_Types].xml ¢( \0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', 'dasdasd'),
(114, '2013-12-10', 'SANTOSH', 'ford_mustang_2015-1366x768.jpg', 'image/jpeg', '328765', 'ÿØÿà\0JFIF\0\0\0\0\0\0ÿþ\0;CREATOR: gd-jpeg v1.0 (using IJG JPEG v62), quality = 95\nÿÛ\0C\0			\n\n\n\n\n\n	\n\n\nÿÛ\0C\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\nÿÀ\0\0V"\0ÿÄ\0\0\0\0\0\0\0\0\0\0\0	\nÿÄ\0µ\0\0\0}\0!1AQa"q2‘¡#B±ÁRÑð$3br‚	\n\Z%&''()*456789:CDEFGHIJSTUVWXYZcdefghijstuvwxyzƒ„…†‡ˆ‰Š’“”•–—˜™š¢£¤¥¦§¨©ª²³´µ¶·¸¹ºÂÃÄÅÆÇÈÉÊÒÓÔÕÖ×ØÙÚáâãäåæçèéêñòóôõö÷øùúÿÄ\0\0\0\0\0\0\0\0	\nÿÄ\0µ\0', 'aasdasd'),
(115, '2013-12-09', 'santosh', 'moon_moment-1366x768.jpg', 'image/jpeg', '194710', 'ÿØÿà\0JFIF\0\0\0\0\0\0ÿþ\0;CREATOR: gd-jpeg v1.0 (using IJG JPEG v62), quality = 95\nÿÛ\0C\0			\n\n\n\n\n\n	\n\n\nÿÛ\0C\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\nÿÀ\0\0V"\0ÿÄ\0\0\0\0\0\0\0\0\0\0\0	\nÿÄ\0µ\0\0\0}\0!1AQa"q2‘¡#B±ÁRÑð$3br‚	\n\Z%&''()*456789:CDEFGHIJSTUVWXYZcdefghijstuvwxyzƒ„…†‡ˆ‰Š’“”•–—˜™š¢£¤¥¦§¨©ª²³´µ¶·¸¹ºÂÃÄÅÆÇÈÉÊÒÓÔÕÖ×ØÙÚáâãäåæçèéêñòóôõö÷øùúÿÄ\0\0\0\0\0\0\0\0	\nÿÄ\0µ\0', 'dfgfdgd'),
(116, '2014-01-21', 'Dinesh', 'think_green-1366x768.jpg', 'image/jpeg', '144340', 'ÿØÿà\0JFIF\0\0\0\0\0\0ÿþ\0;CREATOR: gd-jpeg v1.0 (using IJG JPEG v62), quality = 95\nÿÛ\0C\0			\n\n\n\n\n\n	\n\n\nÿÛ\0C\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\nÿÀ\0\0V"\0ÿÄ\0\0\0\0\0\0\0\0\0\0\0	\nÿÄ\0µ\0\0\0}\0!1AQa"q2‘¡#B±ÁRÑð$3br‚	\n\Z%&''()*456789:CDEFGHIJSTUVWXYZcdefghijstuvwxyzƒ„…†‡ˆ‰Š’“”•–—˜™š¢£¤¥¦§¨©ª²³´µ¶·¸¹ºÂÃÄÅÆÇÈÉÊÒÓÔÕÖ×ØÙÚáâãäåæçèéêñòóôõö÷øùúÿÄ\0\0\0\0\0\0\0\0	\nÿÄ\0µ\0', 'dsfgdfsgd');

-- --------------------------------------------------------

--
-- Table structure for table `emp_attandance_report`
--

CREATE TABLE IF NOT EXISTS `emp_attandance_report` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `date` date DEFAULT NULL,
  `Emp_Code` varchar(50) DEFAULT NULL,
  `Emp_Name` varchar(50) DEFAULT NULL,
  `Emp_Designation` varchar(100) DEFAULT NULL,
  `Time_In` varchar(100) DEFAULT NULL,
  `Time_Out` varchar(100) DEFAULT NULL,
  `remark` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `emp_attandance_report`
--

INSERT INTO `emp_attandance_report` (`id`, `date`, `Emp_Code`, `Emp_Name`, `Emp_Designation`, `Time_In`, `Time_Out`, `remark`) VALUES
(1, '2013-12-09', 'MIT5', 'kadar', 'Java', '5.36', '8.25', 'asdasda'),
(2, '2013-12-10', 'MIT2', 'santosh', 'web', '5.36', '8.25', 'dadasd'),
(3, '2014-01-22', 'MIT6', 'mohan', 'Java', '5.36', '8.25', 'dasdas'),
(4, '2014-01-22', 'MIT4', 'kadar', 'Java', '10.30', '07.45', 'asdasd'),
(5, '2013-12-10', 'MIT5', 'David', 'Java', '10.30 AM', '7.30 PM', 'dasdas'),
(6, '2013-12-10', 'MIT6', 'mohan', 'Java', '7:10 AM', '10.30 PM', 'dasdas'),
(7, '2013-12-09', 'MIT5', 'kadar', 'Java', '4:50 AM', '10.30 PM', 'dasdas'),
(12, '2014-01-21', 'MIT6', 'santosh', 'Java developer', '10.30 AM', '07:45 pm', 'dasdas'),
(13, '2013-12-09', 'MIT7', 'Mithun', 'Java developer', '10.30 AM', '07:45 pm', 'czxczxczx');

-- --------------------------------------------------------

--
-- Table structure for table `entertimesheet`
--

CREATE TABLE IF NOT EXISTS `entertimesheet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `project_title` varchar(200) NOT NULL,
  `assigned_by` varchar(500) NOT NULL,
  `work_status` varchar(200) NOT NULL,
  `project_type` varchar(500) NOT NULL,
  `task` varchar(500) NOT NULL,
  `start_time` varchar(100) DEFAULT NULL,
  `end_time` varchar(100) DEFAULT NULL,
  `duration` varchar(100) DEFAULT NULL,
  `remarks` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `entertimesheet`
--

INSERT INTO `entertimesheet` (`id`, `date`, `project_title`, `assigned_by`, `work_status`, `project_type`, `task`, `start_time`, `end_time`, `duration`, `remarks`) VALUES
(1, '2014-01-22', 'dasdas', 'dasdas', '50 % Work Done', 'Html', 'dasdas', '10:30 AM', '19:55 PM', '9:25', 'asdasdas'),
(2, '2014-01-20', 'Java project', 'Dinesh', '50 % Work Done', 'Java', 'Admin Module', '09:15 AM', '12:15 PM', '3:0', 'MIT1'),
(3, '2014-01-23', 'dasdasd', 'dasda', 'dasdasd', 'Select The Project', 'dasdas', '09:00 AM', '12:00 PM', '3:0', 'dasd'),
(4, '2014-01-14', 'Java project', 'Dinesh', '50 % Work Done', '2D Animation', 'Admin Module', '09:15 AM', '14:15 PM', '5:0', 'dasdasda'),
(5, '2014-01-15', 'Java project', 'dsadasd', '50 % Work Done', 'Java', 'Admin Module', '09:30 AM', '09:30 AM', '0:0', 'asdasdas');

-- --------------------------------------------------------

--
-- Table structure for table `followups`
--

CREATE TABLE IF NOT EXISTS `followups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customername` varchar(150) NOT NULL,
  `details` varchar(500) NOT NULL,
  `callback` bigint(11) NOT NULL,
  `phonenumber` bigint(11) NOT NULL,
  `mailid` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `followups`
--

INSERT INTO `followups` (`id`, `customername`, `details`, `callback`, `phonenumber`, `mailid`) VALUES
(7, 'santosh', 'kharida bazar', 2, 89321457, 'mit.mit@gmail.com'),
(9, 'dasdas', 'dasdas', 2, 9008365317, 'saya.mit@gmail.com'),
(11, 'raju', 'dasdas', 2, 9008365317, 'santosh.citech@live.in');

-- --------------------------------------------------------

--
-- Table structure for table `member_details`
--

CREATE TABLE IF NOT EXISTS `member_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(25) NOT NULL,
  `user_login_fk` int(11) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `mailid` varchar(30) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `designation` varchar(50) DEFAULT NULL,
  `mstatus` varchar(50) DEFAULT NULL,
  `address` varchar(20) DEFAULT NULL,
  `country` varchar(20) DEFAULT NULL,
  `states` varchar(20) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `pin` int(15) DEFAULT NULL,
  `mobile_number` decimal(10,0) DEFAULT NULL,
  `is_approved` tinyint(1) DEFAULT '1',
  `isactive` tinyint(1) NOT NULL DEFAULT '1',
  `insert_userid` tinyint(1) NOT NULL,
  `insert_TS` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_userid` tinyint(1) DEFAULT NULL,
  `update_TS` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_login_fk` (`user_login_fk`),
  UNIQUE KEY `code` (`code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=78 ;

--
-- Dumping data for table `member_details`
--

INSERT INTO `member_details` (`id`, `code`, `user_login_fk`, `first_name`, `password`, `mailid`, `dob`, `gender`, `designation`, `mstatus`, `address`, `country`, `states`, `city`, `pin`, `mobile_number`, `is_approved`, `isactive`, `insert_userid`, `insert_TS`, `update_userid`, `update_TS`) VALUES
(70, 'MIT2', 200, 'santosh', '123', 'santosh.citech@live.in', '2013-12-17', 'M', 'web developer', 'Married', 'sdasdas', 'India', 'karnataka', 'banglore', 560102, '9008365317', 1, 1, 0, '2014-01-03 12:09:49', NULL, '2014-01-03 12:09:49'),
(72, 'MIT3', 201, 'mohan', '456', 'santosh.citech@live.in', '2014-01-21', 'M', 'web developer', 'Single', 'dasdasda', 'Canada', 'karnataka', 'banglore', 560102, '9008365317', 1, 1, 0, '2014-01-03 12:22:23', NULL, '2014-01-03 12:22:23'),
(74, 'MIT4', 202, 'kala', '789', 'santosh.citech@live.in', '2014-01-23', 'M', 'web developer', 'Married', 'dasdasd', 'Egypt', 'karnataka', 'banglore', 560102, '9008365317', 1, 1, 0, '2014-01-03 12:49:00', NULL, '2014-01-03 12:49:00'),
(75, 'MIT5', 203, 'kadar', '123456', 'kadar.mit@gmail.com', '2013-12-09', 'M', 'Java Developer', 'Single', 'BTM ', 'India', 'karnataka', 'banglore', 560102, '9008365317', 1, 1, 0, '2014-01-04 07:48:15', NULL, '2014-01-04 07:48:15'),
(76, 'MIT6', 205, 'David', '123456', 'santosh.citech@live.in', '2014-01-28', 'M', 'Java Developer', 'Single', 'dasdasd', 'India', 'karnataka', 'banglore', 560102, '9008365317', 1, 1, 0, '2014-01-04 09:09:51', NULL, '2014-01-04 09:09:51'),
(77, 'MIT7', 206, 'Mithun', 'santosh123456', 'mithunabraham1@gmail.com', '2014-01-07', 'M', 'Flash Developer', 'Single', 'Madiwala', 'India', 'karnataka', 'banglore', 560102, '9916185107', 1, 1, 0, '2014-01-06 11:10:52', NULL, '2014-01-06 11:10:52');

-- --------------------------------------------------------

--
-- Table structure for table `mitpassword`
--

CREATE TABLE IF NOT EXISTS `mitpassword` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `domainname` varchar(100) NOT NULL,
  `webhost` varchar(200) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `details` varchar(5000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `mitpassword`
--

INSERT INTO `mitpassword` (`id`, `domainname`, `webhost`, `username`, `password`, `details`) VALUES
(5, 'www.BharatRatnam.com', 'www.bharatR.com', 'Mithun', '789456', 'Madiwala behind forum Mall'),
(7, 'www.gmail.com', 'CPANEL', 'santosh.mit', '123456', 'dasdasdada\r\ndadasda'),
(9, 'www.yahoo.com', 'IPage', 'santosh.mit', '123456', 'Host the Site '),
(10, 'www.yahoomail.com', 'IPage', 'santosh.mit', '123456', 'dadasd'),
(11, 'mail.multiinnovate.com', 'IPage', 'santosh.mit', '123456', 'Mail it'),
(12, 'www.gmail.com', 'CPANEL', 'santosh.mit@multiinnovate.com', '123456', 'dadasd');

-- --------------------------------------------------------

--
-- Table structure for table `monthlyexp`
--

CREATE TABLE IF NOT EXISTS `monthlyexp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(10) NOT NULL,
  `salary` int(11) NOT NULL,
  `rent` int(11) NOT NULL,
  `water` int(11) NOT NULL,
  `internet` int(11) NOT NULL,
  `phonebill` int(11) NOT NULL,
  `newspaper` int(11) NOT NULL,
  `ebill` int(11) NOT NULL,
  `cleaning` int(11) NOT NULL,
  `otherexpenses` int(11) NOT NULL,
  `Remarks` varchar(500) DEFAULT NULL,
  `total` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `monthlyexp`
--

INSERT INTO `monthlyexp` (`id`, `date`, `salary`, `rent`, `water`, `internet`, `phonebill`, `newspaper`, `ebill`, `cleaning`, `otherexpenses`, `Remarks`, `total`) VALUES
(1, '01/04/2014', 100, 100, 100, 200, 100, 100, 100, 200, 9000, 'dadasdasda', 10000),
(2, '01/04/2014', 10000, 10, 100, 20, 10, 100, 20, 100, 200, 'asdasda', 10560),
(4, '11/13/2013', 10000, 10, 10, 10, 10, 10, 10, 10, 10, 'sdfsdfsd', 10080),
(5, '11/06/2013', 40000, 10, 10, 10, 10, 10, 20, 20, 20, 'djlasndlasndlansd\r\n', 40110),
(6, '12/20/2013', 5000, 100, 20, 45, 100, 20, 100, 100, 200, 'Ragu', 5685),
(7, '12/17/2013', 10000, 200, 400, 500, 200, 400, 500, 300, 100, 'dadasdas', 12600),
(8, '12/31/2013', 5000, 100, 400, 200, 100, 50, 30, 10, 10, 'dadsasda', 5900),
(9, '12/23/2013', 10000, 100, 400, 200, 200, 7, 150, 100, 1400, 'sadasda', 12557),
(10, '12/22/2013', 10000, 200, 400, 200, 100, 400, 30, 10, 45, 'dadasdad', 11385),
(11, '10/03/2010', 10000, 200, 400, 200, 100, 47, 120, 10, 20, 'DASDASDASD', 11097),
(12, '09/01/2013', 10000, 200, 140, 10, 20, 40, 50, 20, 30, 'sdasdasd', 10510),
(13, '12/10/2013', 10000, 10, 50, 78, 90, 60, 140, 70, 80, 'sdasd', 10578),
(14, '11/10/2013', 2000, 47, 85, 60, 40, 20, 140, 60, 50, 'dadas;dklas;dl', 2502),
(15, '12/22/2013', 5000, 40, 20, 10, 30, 40, 50, 60, 80, 'dfdsfdsf', 5330),
(16, '12/22/2013', 7000, 30, 50, 40, 40, 0, 80, 90, 80, 'adasd', 7410),
(17, '12/18/2013', 10000, 100, 200, 50, 60, 40, 70, 89, 100, 'sfasdfs', 10709),
(18, '01/07/2014', 100000, 150, 120, 100, 200, 100, 400, 100, 100, 'sadasda', 101270);

-- --------------------------------------------------------

--
-- Table structure for table `reminder`
--

CREATE TABLE IF NOT EXISTS `reminder` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `details` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `day` varchar(50) NOT NULL,
  `date` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `sysdate` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `reminder`
--

INSERT INTO `reminder` (`id`, `details`, `email`, `day`, `date`, `month`, `year`, `sysdate`) VALUES
(5, 'Murali', 'southfull66@gmail.com', 'Thrusday', 21, 11, 2013, '2013-11-21'),
(6, 'santosh\r\n', 'santosh.citech@gmail.com', 'Thrusday', 21, 11, 2013, '2013-11-21'),
(7, 'Thiyagu', 'Mit_Thiyagu@gmail.com', 'Thrusday', 21, 11, 2013, '2013-11-21'),
(8, 'dasda', 'santosh_citech@live.in', '11/20/2013', 11, 1, 2013, '2013-12-09'),
(9, 'ABB Project Has been Created ', 'santosh_citech@live.in', '11/19/2013', 25, 2, 2013, '2013-12-10'),
(10, 'Get the Secure Bank Result', 'santosh_citech@live.in', '11/28/2013', 13, 1, 2013, '2013-12-10'),
(11, 'dasdasd', 'santosh.citech@gai.com', '12/09/2013', 14, 4, 2013, '2013-12-11'),
(12, 'dasdasdasdasd', 'santosh_citech@live.in', '12/09/2013', 13, 2, 2013, '2013-12-09'),
(13, '', '', '', 0, 0, 0, '0000-00-00'),
(14, '', '', '', 0, 0, 0, '0000-00-00'),
(15, '', '', '', 0, 0, 0, '0000-00-00'),
(16, '', '', '', 0, 0, 0, '0000-00-00'),
(17, '', '', '', 0, 0, 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE IF NOT EXISTS `salary` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` varchar(500) NOT NULL,
  `emp_name` varchar(500) NOT NULL,
  `salary` int(11) NOT NULL,
  `designation` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`id`, `emp_id`, `emp_name`, `salary`, `designation`) VALUES
(36, 'MIT117', 'Mohan', 12000, 'Java Develpoer'),
(37, 'MIT10', 'raju', 8000, 'web Developer'),
(38, 'MIT116', 'Raja', 100000, 'Java Develpoer');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE IF NOT EXISTS `user_login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_type_fk` int(11) NOT NULL,
  `user_mail` varchar(50) DEFAULT NULL,
  `password` varchar(50) NOT NULL,
  `isactive` tinyint(1) NOT NULL,
  `insert_userid` tinyint(4) NOT NULL,
  `insert_TS` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_userid` tinyint(4) DEFAULT NULL,
  `update_TS` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `user_type_fk` (`user_type_fk`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=207 ;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`id`, `user_type_fk`, `user_mail`, `password`, `isactive`, `insert_userid`, `insert_TS`, `update_userid`, `update_TS`) VALUES
(1, 1, 'admin', 'admin', 1, 1, '2013-08-08 10:32:05', 1, '0000-00-00 00:00:00'),
(3, 2, 'timesheet', 'timesheet', 1, 1, '2013-08-08 10:32:31', 1, '0000-00-00 00:00:00'),
(4, 4, 'client', 'client', 1, 2, '2013-08-08 10:33:00', 2, '0000-00-00 00:00:00'),
(168, 3, 'santosh ', '123456', 1, 3, '2013-12-21 06:28:46', NULL, '0000-00-00 00:00:00'),
(169, 3, 'santosh', '123456', 1, 3, '2013-12-21 07:22:30', NULL, '0000-00-00 00:00:00'),
(170, 3, 'David', '123456', 1, 3, '2013-12-21 08:59:49', NULL, '0000-00-00 00:00:00'),
(171, 3, '', '', 1, 3, '2013-12-21 19:26:27', NULL, '0000-00-00 00:00:00'),
(172, 3, '', '', 1, 3, '2013-12-23 06:36:22', NULL, '0000-00-00 00:00:00'),
(173, 3, '', '', 1, 3, '2013-12-23 06:39:24', NULL, '0000-00-00 00:00:00'),
(174, 3, 'santosh', '1cd09mca13', 1, 3, '2013-12-23 07:12:44', NULL, '0000-00-00 00:00:00'),
(175, 3, 'dasdasd', '', 1, 3, '2013-12-23 07:13:02', NULL, '0000-00-00 00:00:00'),
(176, 3, 'dasdasd', 'dasda', 1, 3, '2013-12-23 08:30:00', NULL, '0000-00-00 00:00:00'),
(177, 3, 'adfasda', 'dasdasd', 1, 3, '2013-12-23 08:30:54', NULL, '0000-00-00 00:00:00'),
(178, 3, 'dsdasda', 'dasdasd', 1, 3, '2013-12-23 08:31:23', NULL, '0000-00-00 00:00:00'),
(179, 3, 'dasda', 'dasdas', 1, 3, '2013-12-23 08:37:35', NULL, '0000-00-00 00:00:00'),
(180, 3, 'dasdasd', 'dasdasd', 1, 3, '2013-12-23 08:40:36', NULL, '0000-00-00 00:00:00'),
(181, 3, 'adadsad', 'dasdasda', 1, 3, '2013-12-23 08:41:00', NULL, '0000-00-00 00:00:00'),
(182, 3, 'dasd', 'dasdas', 1, 3, '2013-12-23 08:41:48', NULL, '0000-00-00 00:00:00'),
(183, 3, 'dasdasd', 'dasdas', 1, 3, '2013-12-23 08:42:19', NULL, '0000-00-00 00:00:00'),
(184, 3, 'dasdas', 'dadsas', 1, 3, '2013-12-23 08:46:38', NULL, '0000-00-00 00:00:00'),
(185, 3, 'dasdas', 'dasdasd', 1, 3, '2013-12-23 09:07:45', NULL, '0000-00-00 00:00:00'),
(186, 3, 'dasdasd', 'dasdasd', 1, 3, '2013-12-23 09:08:40', NULL, '0000-00-00 00:00:00'),
(187, 3, 'dasda', 'dasdasd', 1, 3, '2013-12-23 09:11:08', NULL, '0000-00-00 00:00:00'),
(188, 3, 'santosh', '123456', 1, 3, '2013-12-23 09:17:21', NULL, '0000-00-00 00:00:00'),
(189, 3, 'dasdas', 'dasdasd', 1, 3, '2013-12-23 09:32:10', NULL, '0000-00-00 00:00:00'),
(190, 3, 'dasdasd', 'dasdas', 1, 3, '2013-12-23 09:34:31', NULL, '0000-00-00 00:00:00'),
(191, 3, 'asdasda', 'dasdas', 1, 3, '2013-12-23 09:56:42', NULL, '0000-00-00 00:00:00'),
(192, 3, 'dasdas', 'dasdsa', 1, 3, '2013-12-23 10:05:28', NULL, '0000-00-00 00:00:00'),
(193, 3, 'dasdasd', 'dasdas', 1, 3, '2013-12-23 10:16:04', NULL, '0000-00-00 00:00:00'),
(194, 3, 'santosh', 'santosh123456', 1, 3, '2013-12-23 10:20:45', NULL, '0000-00-00 00:00:00'),
(195, 3, '', '', 1, 3, '2014-01-02 13:49:02', NULL, '0000-00-00 00:00:00'),
(196, 3, 'santosh', '123456', 1, 3, '2014-01-03 11:24:54', NULL, '0000-00-00 00:00:00'),
(197, 3, 'Mohan', '456789', 1, 3, '2014-01-03 11:25:46', NULL, '0000-00-00 00:00:00'),
(198, 3, 'Kadar', '123456', 1, 3, '2014-01-03 11:27:10', NULL, '0000-00-00 00:00:00'),
(199, 3, 'santosh', '789', 1, 3, '2014-01-03 11:48:59', NULL, '0000-00-00 00:00:00'),
(200, 3, 'santosh', '456', 1, 3, '2014-01-03 12:09:49', NULL, '0000-00-00 00:00:00'),
(201, 3, 'mohan', '456', 1, 3, '2014-01-03 12:22:23', NULL, '0000-00-00 00:00:00'),
(202, 3, 'kala', '123456', 1, 3, '2014-01-03 12:49:00', NULL, '0000-00-00 00:00:00'),
(203, 3, 'kadar', '123456', 1, 3, '2014-01-04 07:48:15', NULL, '0000-00-00 00:00:00'),
(204, 3, '', '', 1, 3, '2014-01-04 08:57:17', NULL, '0000-00-00 00:00:00'),
(205, 3, 'David', '123456', 1, 3, '2014-01-04 09:09:51', NULL, '0000-00-00 00:00:00'),
(206, 3, 'Mithun', '123456', 1, 3, '2014-01-06 11:10:52', NULL, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_types`
--

CREATE TABLE IF NOT EXISTS `user_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usertype` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `user_types`
--

INSERT INTO `user_types` (`id`, `usertype`) VALUES
(1, 'admin'),
(2, 'timesheet'),
(3, 'employee'),
(4, 'client');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `member_details`
--
ALTER TABLE `member_details`
  ADD CONSTRAINT `member_details_ibfk_1` FOREIGN KEY (`user_login_fk`) REFERENCES `user_login` (`id`);

--
-- Constraints for table `user_login`
--
ALTER TABLE `user_login`
  ADD CONSTRAINT `user_login_FK` FOREIGN KEY (`user_type_fk`) REFERENCES `user_types` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
