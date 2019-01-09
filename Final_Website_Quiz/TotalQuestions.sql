/*
SQLyog Ultimate v12.09 (32 bit)
MySQL - 5.5.50 : Database - new_quiz
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`new_quiz` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `new_quiz`;

/*Table structure for table `questions` */

DROP TABLE IF EXISTS `questions`;

CREATE TABLE `questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(254) NOT NULL,
  `ans1` varchar(254) NOT NULL,
  `ans2` varchar(254) NOT NULL,
  `ans3` varchar(254) NOT NULL,
  `ans4` varchar(254) NOT NULL,
  `ans` varchar(254) NOT NULL,
  `category_id` int(11) NOT NULL,
  `no_answer` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=83 DEFAULT CHARSET=latin1;

/*Data for the table `questions` */

insert  into `questions`(`id`,`question`,`ans1`,`ans2`,`ans3`,`ans4`,`ans`,`category_id`,`no_answer`) values (1,'Who became the fastest bowler to get to 250 wickets in the test matches ?','K  Rabada','R  Ashwin','T G Southee','Jadeja','R  Ashwin',1,NULL),(2,'The National Game of India is','Cricket','Football','Tennis','Hockey','Hockey',1,NULL),(3,'Boat race is a famous festival game of','Tamil Nadu','Kerala','Goa','Assam','Kerala',1,NULL),(4,'Oval stadium in England is associated with','polo','Cricket','Hockey','Football','Cricket',1,NULL),(5,'Worldâ€™s most ancient game is','Boxing','Running','Wrestling','Swimming','Wrestling',1,NULL),(6,'2010 Commonwealth Games held in','Canada','India','Britian','Malaysia','India',1,NULL),(7,'The termâ€œGooglyâ€ is associated with','Cricket','Football','Badminton','Hockey','Cricket',1,NULL),(8,'Krishna Poonia is associated with','Football','Hockey','Chess','Athletics','Chess',1,NULL),(9,'In 1924 the first winter Olympics was held in','Italy','Franc','Austria','Canada','Franc',1,NULL),(10,'2014 FIFA World Cup will be held in','India','Brazil','Germany','London','Brazil',1,NULL),(11,'Ranji Trophy is associated with','Hockey','Tennis','Cricket','Football','Cricket',1,NULL),(12,'Iccâ€™s 2007, the World Cup Cricket was held in','Australia','West Indies','New Zealand','South Africa','West Indies',1,NULL),(13,'Pullela Gopichand is associated with','Hockey','Badminton','Football','Cricket','Badminton',1,NULL),(14,'In 2011 India won the World Cup. Who was adjudicated as the man of the series in the tournament?','Rahul Dravid','Zaheer Khan','Yuvaraj Singh','Sachin Tendulkar','Yuvaraj Singh',1,NULL),(15,'Viswanath Anand is associated with','Chess','Hockey','Volley ball','Carrom','Chess',1,NULL),(16,'Who is Master Blaster?','Rahul Dravid','Sourav Ganguly','Irfan Pathan','Sachin Tendulkar','Sachin Tendulkar',1,NULL),(17,'Mahesh Bhupathi is associated with','Chess','Cricket','Lawn Tennis','Table Tennis','Lawn Tennis',1,NULL),(18,'Who hit six sixes in an over off Stuart Broad in a match against England in Twenty20 World Cup 2007?','Ricky Ponting','Stephen Fleming','Adam Gilchrist','Yuvraj Singh','Yuvraj Singh',1,NULL),(19,'Which Indian batsman made three consecutive centures in his first three test matches?','Vinoo Mankad','GR Vishwanath','Mohd  Azharuddin','Sm Gavaskar','Mohd  Azharuddin',1,NULL),(20,'Which country won the World Cup in 2011?','Australia','India','Pakistan','Srilanka','India',1,NULL),(21,'HTML stands for?','Hyper Text Markup Language','High Text Markup Language','Hyper Tabular Markup Language','None of these','Hyper Text Markup Language',2,NULL),(22,' which of the following tag is used to mark a begining of paragraph ?','p','h','tr','td','p',2,NULL),(23,'Heading ranges in HTML in between ','h1 to h6','h1 to h7','h5 to h10','None of the mentioned','h1 to h6',2,NULL),(24,'www is based on which model?','Local-server','Client-server','3 tier','None of these','Client-server',2,NULL),(25,'  Which of the following attributes of text box control allow to limit the maximum character?','size','len','maxlength','all of these','maxlength',2,NULL),(26,'The attribute, which define the relationship between current document and HREF\'ed URL is','REL','URL','REV','all of these','REL',2,NULL),(27,'In HTML UL stands for ','Unlimited','Unordered List','Underline List','None of the above','Unordered List',2,NULL),(28,'URI stands for ?','Uniform Research identifier','Uniform Resource Informer','Uniform Remote Identifier','Uniform Resource Identifier','Uniform Resource Identifier',2,NULL),(29,'The latest HTML standard is','XML','SGML','HTML 4.0','HTML 5.0','HTML 5.0',2,NULL),(30,'The body tag usually used after','Title tag','HEAD tag','EM tag','FORM tag','HEAD tag',2,NULL),(31,'In HTML id is called with','$','%','#','@','#',2,NULL),(32,'In img src \"SRC \" stands for ','Source','Structure','Service','None of the above','Source',2,NULL),(33,'CSS stands for?','Cascading Stylesheet','Cascading standard Sheet','Cascading Styles','None ','Cascading Stylesheet',2,NULL),(34,'In CSS  * (Astring) is called','Element Selector','Content Selector','Universal Selector','None of the above','Universal Selector',2,NULL),(35,'Total Number of CSS type is','4','3','2','1','3',2,NULL),(36,'For applying CSS on multiple element we use ','Slash sign ','Comma','forward slash','Back slash','Comma',2,NULL),(37,'Input type \"Checkbox \" is used for ','Checking form data ','checking url ','creating checkbox','None of the above','creating checkbox',2,NULL),(38,'Bootstrap is library of ?','HTML','Java','C','Javascript','HTML',3,NULL),(39,'For making small buttons class we use  class','Small','Small Button','sm','None of the above','sm',3,NULL),(40,'The Bootstrap grid system is based on how many columns?','3','12','9','6','12',3,NULL),(41,'Which class adds zebra-stripes to a table?','.table-striped','.table-zebra','.table-bordered','.even and .odd','.table-striped',3,NULL),(42,'Which class shapes an image to a circle?','.img-thumbnail','.img-rounded','.img-round','.img-circle','.img-circle',3,NULL),(43,'Which class is used to create a black navigation bar?','.navbar-dark','.navbar-black','.navbar-default','.navbar-inverse','.navbar-inverse',3,NULL),(44,'Which of the following class is required to be added to form tag to make it horizontal?','.horizontal','.form-horizontal','.horizontal','None of the above.','.form-horizontal',3,NULL),(45,'Which of the following is correct about Bootstrap?','Bootstrap responsive CSS adjusts to Desktops,Tablets and Mobiles.','Provides a clean and uniform solution for building an interface for developers.','It contains beautiful and functional built-in components which are easy to customize.','All of the above.','All of the above.',3,NULL),(46,'Which of the following bootstrap style of button indicates caution should be taken with this action?','.btn-warning','.btn-danger','.btn-link','.btn-info','.btn-warning',3,NULL),(47,'Which plugin is used to cycle through elements, like a slideshow?','orbit','slideshow','scrollspy','carousel','carousel',3,NULL),(48,'Which plugin is used to create a modal window?','modal','window','dialog Box','popup','modal',3,NULL),(49,' Which plugin is used to create a tooltip?','popup','tooltip','modal','dialog Box','tooltip',3,NULL),(50,'Default size of H5 bootstrap heading','14px','16px','18px','20px','14px',3,NULL),(51,'Default size of H3 bootstrap heading','18px','30px','26px','24px','24px',3,NULL),(52,'Default size of H2 bootstrap heading','20px','24px','30px','36px','30px',3,NULL),(53,'WWW stands for ?','World Whole Web','Wide World Web','Web World Wide','World Wide Web','World Wide Web',4,NULL),(54,'Which among following first generation of computers had ?','Vaccum Tubes and Magnetic Drum','Integrated Circuits','Magnetic Tape and Transistors','All of above','Vaccum Tubes and Magnetic Drum',4,NULL),(55,'Where is RAM located ?','Expansion Board','External Drive','Mother Board','All of above','Mother Board',4,NULL),(56,'In which of the following form, data is stored in computer ?','Decimal','Binary','HexaDecimal','Octal','Binary',4,NULL),(57,'Which level language is Assembly Language ?','high-level programming language','medium-level programming language','low-level programming language','machine language','low-level programming language',4,NULL),(58,'Computer word derived from ?','calculate','compute','compile','None of The Above','compute',4,NULL),(59,'Mouse is a device','Pointing','output','both','None of The Above','Pointing',4,NULL),(60,'Who is the father of computer?','Tim bernerlee','Charles babbage','Vint Cerf','Steve Jobs','Charles babbage',4,NULL),(61,'RAM stands for ?','Random access machine','Random access memory','Random address memory','None of the above','Random access memory',4,NULL),(62,'Rom stands for ?','Read only machine','Read only memory','Retrive only memory','None of the above','Read only memory',4,NULL),(63,'Full form of CPU is','Central Point Unit','Central Processing Unit','Central Programming Unit','Central Power Unit','Central Processing Unit',4,NULL),(64,'The Brain of computer is ?','Keyboard','Mouse','CPU','None of the above','CPU',4,NULL),(65,'What is the full form of CU?','Compound Unit','Control unit','Central Unit','Communication unit','Control unit',4,NULL),(66,'What is the full form of ALU?','Arithmetic Logic Unit','Arithmetic Local Unit','Advance Logical Unit','None of the above','Arithmetic Logic Unit',4,NULL),(67,'What is the full form of MICR?','Magnetic Inkjet Character Reader','Magnetic Isolated Character Responsive','Magnetic Ink Character Reader','None of the above','Magnetic Ink Character Reader',4,NULL),(68,'Smallest Memory size is ?','KB','GB','MB','TB','KB',4,NULL),(69,'How many MB in One GB ?','1000 MB','1024 MB','10000 MB','None of the above','1024 MB',4,NULL),(70,'What is the full form of USB?','Unique Synchronised Bus','Universal Synchronised Bus','Universal Serial Bus','Unlimited Sending Buffer','Universal Serial Bus',4,NULL),(71,'What does an Operating System do?','Memory Management','File Management','Application Management','All of the above','All of the above',4,NULL),(72,'Which is not an Operating System?','Windows','Macintosh','Linux','Open Office','Open Office',4,NULL),(73,'What is the full form of LAN?','Local Access Network','Local Area Network','Local Accelerator Network','Logical Area Network','Local Area Network',4,NULL),(74,'IP stands for ?','Internet Progress','Internet Protocol','Internet Pass','Internet Password','Internet Protocol',4,NULL),(75,'What is the name of first super computer of India ?','Saga ','PARAM','ENIAC','None of the above','PARAM',4,NULL),(76,'What is full form CMOS ?','Content Metal Oxide Semiconductor','Complementary Metal Oxide Semiconductor','Complementary Metal Oxygen Semiconductor','Complementary Metal Oscilator Semiconductor','Complementary Metal Oxide Semiconductor',4,NULL),(77,'What is full form of SMPS ?','Switch Mode Power Supply','Simple Mode Power Supply','Storage Mode Power Supply','Storage Mode Power Shortage','Switch Mode Power Supply',4,NULL),(78,'HTML is what type of language ?','Scripting Language','Markup Language','Programming Language','None of the above','Markup Language',4,NULL),(79,'What is the full form of CD ?','Computer Directory','Compile Disk','Compact Disk','Compiler Directory','Compact Disk',4,NULL),(80,'Shortcut key of Copy is ?',' ctrl + c','ctrl+ v','ctrl + x','ctrl + z',' ctrl + c',4,NULL),(81,'Shortcut key of Paste is ?','ctrl + c','ctrl + p','ctrl+ v','None of the above','ctrl+ v',4,NULL),(82,'How to open task manager in computer ?','ctrl + alt + window',' ctrl + alt + shift','ctrl + alt + delete','None of the above','ctrl + alt + delete',4,NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;