/*
SQLyog Ultimate v9.02 
MySQL - 5.5.5-10.1.13-MariaDB : Database - sicovip
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`sicovip` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `sicovip`;

/*Table structure for table `sv01clnte` */

DROP TABLE IF EXISTS `sv01clnte`;

CREATE TABLE `sv01clnte` (
  `sv01cedc` varchar(15) NOT NULL COMMENT 'tabla cliente-topografo\ncedula\ncodigo topografo\nnombre \napellidos \nemail \ntelefono',
  `sv01cdtpc` varchar(5) NOT NULL,
  `sv01nomc` varchar(200) NOT NULL,
  `sv01apdc` varchar(200) NOT NULL COMMENT 'tabla cliente-topo',
  `sv01emc` varchar(50) NOT NULL,
  `sv01telc` int(11) NOT NULL COMMENT 'tabla de topografo cliente\ncedula \ncodigo topografo\nnombre \napellido \nemail \ntelefono\n',
  PRIMARY KEY (`sv01cedc`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `sv01clnte` */

insert  into `sv01clnte`(`sv01cedc`,`sv01cdtpc`,`sv01nomc`,`sv01apdc`,`sv01emc`,`sv01telc`) values ('115990808','04','Paola ','Rosales Fernandez','lindsy.fernandez4@gmail.com',83308904),('12','21','Jose','Alvarez','danielramosr45@gmail.com',83715157),('5','432','Wesley','Arrieta','danielramosr45@gmail.com',83378319),('501100809','0645','Juan','Ramos','danielramosr45@gmail.com',83715157),('501800386','0999','Antonio','Espinoza','danielramosr45@gmail.com',83378319),('503760988','7903','Andres','Rosales','danielramosr45@gmail.com',83378319),('503860180','0205','Daniel','Ramos Abarca','danielramosr45@gmail.com',62739067),('608820331','8721','Franthy','Abarcar','danielramosr45@gmail.com',83378319),('777777777777777','66666','ghgfhfhg hgfhgfhgggfhgfhgfhgfhfghfghfg','555555555555555000000000000000000000000000000000000000000000000000000000000000000000000000000','',0),('903780122','1213','Alberto','Lobo','danielramosr45@gmail.com',83378319);

/*Table structure for table `sv02estdo` */

DROP TABLE IF EXISTS `sv02estdo`;

CREATE TABLE `sv02estdo` (
  `sv02code` int(11) NOT NULL COMMENT 'tabla de estado(son varios estados)\ncodigo de estado \ndetalle de estado\n',
  `sv02dete` varchar(50) NOT NULL,
  PRIMARY KEY (`sv02code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `sv02estdo` */

insert  into `sv02estdo`(`sv02code`,`sv02dete`) values (1,'Al dia'),(2,'Retrasado'),(3,'Presenta'),(4,'No presenta'),(5,'Aprovado'),(6,'Rechazado'),(7,'En proceso');

/*Table structure for table `sv03ptario` */

DROP TABLE IF EXISTS `sv03ptario`;

CREATE TABLE `sv03ptario` (
  `sv03cedp` varchar(15) NOT NULL COMMENT 'tabla propietario\n\ncedula propiet\nnombre  prop\napellidos prop\nemail prop\ntelefono prop\ncodigo de tipo de propietario',
  `sv03nomp` varchar(200) NOT NULL,
  `sv03apdp` varchar(200) NOT NULL,
  `sv03emp` varchar(50) NOT NULL,
  `sv03telp` int(11) NOT NULL,
  `sv06codp` int(11) NOT NULL,
  PRIMARY KEY (`sv03cedp`,`sv06codp`),
  KEY `fk_SV03PTARIO_SV06TIPPROP1_idx` (`sv06codp`),
  CONSTRAINT `fk_SV03PTARIO_SV06TIPPROP1` FOREIGN KEY (`sv06codp`) REFERENCES `sv06tipprop` (`sv06codp`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `sv03ptario` */

insert  into `sv03ptario`(`sv03cedp`,`sv03nomp`,`sv03apdp`,`sv03emp`,`sv03telp`,`sv06codp`) values ('1766755','karol','fernandez','lsjdj@gmail.com',222,1),('4','Wilberth','borges','dani.ramos92@gmail.com',83378319,1),('401230788','Cecilia','Sanchez','abarcamayra50@gmail.com',83378719,1),('503860180','Daniel','Ramos','dani.ramos92@gmail.com',83378319,1),('605800253','Kiana','Serrano','abarcamayra50@gmail.com',88304477,1),('704890122','Luis','Flores','abarcamayra50@gmail.com',62739067,1),('900470253','Isidra','Espinoza','abarcamayra50@gmail.com',88304477,1);

/*Table structure for table `sv04reqtos` */

DROP TABLE IF EXISTS `sv04reqtos`;

CREATE TABLE `sv04reqtos` (
  `sv04nfin` varchar(20) NOT NULL COMMENT 'tabla de requisitos\n\nnumero de finca \narchivo de plano \narchivo autocat\narchivo carta de agua',
  `sv04apln` varchar(100) NOT NULL,
  `sv04aact` varchar(100) NOT NULL,
  `sv04acta` varchar(100) NOT NULL,
  PRIMARY KEY (`sv04nfin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `sv04reqtos` */

insert  into `sv04reqtos`(`sv04nfin`,`sv04apln`,`sv04aact`,`sv04acta`) values ('12345','Prototipos.docx','Vision.pdf','SICOVIPv5.pdf'),('82134','CartaKiana.docx','trabajoRahimaS.docx','Prototipos.docx'),('87654398','CartaKiana.docx','Vision.pdf','Vision.pdf'),('87654678','AprovaProyecto(1).pdf','SICOVIPv5.pdf','Vision.pdf'),('88823','rayner-datamart.pdf','SICOVIPv5.pdf','Vision.pdf'),('88888','Casos_de_uso.pdf','cuadropyact.xlsx','EIF210-2016.pdf'),('9022323','CartaKiana.docx','SICOVIPv5(1).pdf','Prototipos.docx'),('907574','SICOVIPv5.pdf','Vision.pdf','AprovaProyecto.pdf'),('90839492','Poster_5.jpg','WhatsApp Image 2016-08-23 at 11.03.11 PM.jpeg','modelo de relacion.PNG'),('932432432','AprovaProyecto.pdf','SICOVIPv5.pdf','Vision.pdf'),('93892','14100517_524712651064309_8754159155534007906_n.png','Poster_5.jpg','14485136_1890936724471881_4908323458715384616_n.jpg'),('95','CartaKiana.docx','Scanned.pdf','OfertaB1-2017.pdf'),('98765542','Plano','Carta','Dibujo'),('998877','14100517_524712651064309_8754159155534007906_n.png','Scanned from a Xerox Multifunction Printer.pdf','guia_horarios_nicoya_IIciclo2016.pdf');

/*Table structure for table `sv05tipusu` */

DROP TABLE IF EXISTS `sv05tipusu`;

CREATE TABLE `sv05tipusu` (
  `sv05codu` int(11) NOT NULL COMMENT 'tipo de usuario \n\ncodigo de usuario \ndetalle de usuario',
  `sv05detu` varchar(50) NOT NULL,
  PRIMARY KEY (`sv05codu`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `sv05tipusu` */

insert  into `sv05tipusu`(`sv05codu`,`sv05detu`) values (1,'Administrador'),(2,'Usuario'),(3,'Plataforma');

/*Table structure for table `sv06tipprop` */

DROP TABLE IF EXISTS `sv06tipprop`;

CREATE TABLE `sv06tipprop` (
  `sv06codp` int(11) NOT NULL COMMENT 'tabla tipo de propietario\ncodigo de propietario \ndetalle de propietario',
  `sv06detp` varchar(50) NOT NULL,
  PRIMARY KEY (`sv06codp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `sv06tipprop` */

insert  into `sv06tipprop`(`sv06codp`,`sv06detp`) values (1,'Fisico'),(2,'Juridico'),(3,'test');

/*Table structure for table `sv07tpgfo` */

DROP TABLE IF EXISTS `sv07tpgfo`;

CREATE TABLE `sv07tpgfo` (
  `sv07cdtp` varchar(5) NOT NULL COMMENT 'tabla de topografo \n\ncodigo de ingeniero topografo\ncedula topografo \nnombre topo\napellidos topo\nestdo de cuenta de topo\ncontra codigo de tipo de usuario',
  `sv07cedt` varchar(15) NOT NULL,
  `sv07nomt` varchar(200) NOT NULL,
  `sv07apdt` varchar(200) NOT NULL,
  `sv07estd` varchar(100) NOT NULL,
  `sv07pass` varchar(20) NOT NULL,
  `sv07emt` varchar(50) NOT NULL,
  `sv05codu` int(11) NOT NULL,
  PRIMARY KEY (`sv07cdtp`,`sv05codu`),
  KEY `fk_SV07TPGFO_SV05TIPUSU1_idx` (`sv05codu`),
  CONSTRAINT `fk_SV07TPGFO_SV05TIPUSU1` FOREIGN KEY (`sv05codu`) REFERENCES `sv05tipusu` (`sv05codu`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `sv07tpgfo` */

insert  into `sv07tpgfo`(`sv07cdtp`,`sv07cedt`,`sv07nomt`,`sv07apdt`,`sv07estd`,`sv07pass`,`sv07emt`,`sv05codu`) values ('52525','504100492','edrick','lopez','2','1234','dani.ramos92@gmail.com',3),('543','242432','Alex','Valle','1','12345','danielramosr45@gmail.com',2),('555','5020001000','Juan','Royo','1','54321','dani.ramos92@gmail.com',1);

/*Table structure for table `sv08trmte` */

DROP TABLE IF EXISTS `sv08trmte`;

CREATE TABLE `sv08trmte` (
  `sv08conse` varchar(15) NOT NULL COMMENT 'Tramite\n\nconsecutivo\nfecha solicitud\nfecha ultima modificacion \ncedula cliente-topo\ncedula propietario\nnumero de finca\n',
  `sv08fchs` datetime NOT NULL,
  `sv08fumt` datetime NOT NULL,
  `sv01cedc` varchar(15) NOT NULL,
  `sv03cedp` varchar(15) NOT NULL,
  `sv04nfin` varchar(20) NOT NULL,
  `sv02code` int(11) NOT NULL,
  PRIMARY KEY (`sv08conse`,`sv01cedc`,`sv03cedp`,`sv04nfin`,`sv02code`),
  KEY `fk_SV08TRMTE_SV01CLNTE_idx` (`sv01cedc`),
  KEY `fk_SV08TRMTE_SV03PTARIO1_idx` (`sv03cedp`),
  KEY `fk_SV08TRMTE_SV04REQTOS1_idx` (`sv04nfin`),
  KEY `fk_SV08TRMTE_SV02ESTDO1_idx` (`sv02code`),
  CONSTRAINT `fk_SV08TRMTE_SV01CLNTE` FOREIGN KEY (`sv01cedc`) REFERENCES `sv01clnte` (`sv01cedc`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_SV08TRMTE_SV02ESTDO1` FOREIGN KEY (`sv02code`) REFERENCES `sv02estdo` (`sv02code`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_SV08TRMTE_SV03PTARIO1` FOREIGN KEY (`sv03cedp`) REFERENCES `sv03ptario` (`sv03cedp`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_SV08TRMTE_SV04REQTOS1` FOREIGN KEY (`sv04nfin`) REFERENCES `sv04reqtos` (`sv04nfin`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `sv08trmte` */

insert  into `sv08trmte`(`sv08conse`,`sv08fchs`,`sv08fumt`,`sv01cedc`,`sv03cedp`,`sv04nfin`,`sv02code`) values ('120170222','2017-02-23 00:09:32','2017-02-23 00:09:32','501100809','503860180','12345',7),('201611104','2016-11-10 11:29:38','2016-11-10 11:29:38','503760988','704890122','88823',5),('201611104','2016-11-10 11:13:42','2016-11-10 11:13:42','903780122','605800253','12345',5),('201611105','2016-11-10 12:02:31','2016-11-10 12:02:31','608820331','401230788','82134',5),('201703097','2017-03-09 12:02:14','2017-03-09 12:02:14','115990808','1766755','95',7);

/*Table structure for table `sv09vsdo` */

DROP TABLE IF EXISTS `sv09vsdo`;

CREATE TABLE `sv09vsdo` (
  `sv09npln` varchar(20) NOT NULL COMMENT 'tabla visado \nnumero de plano \nnumero de folio \nnumero de predio \nminuta(archivo)\nfecha de visado \nconsecutivo\ncedula de cliente-top\ncedila de propietario\nnumero de finca\ncodigo de estado\ncodigo de topografo\ncodigo de tipo de usuario\n',
  `sv09nfol` varchar(20) NOT NULL,
  `sv09npre` varchar(20) NOT NULL,
  `sv09mnt` varchar(100) NOT NULL,
  `sv09fvdp` date NOT NULL,
  `sv09fumv` date NOT NULL,
  `sv08conse` varchar(15) NOT NULL,
  `sv01cedc` varchar(15) NOT NULL,
  `sv03cedp` varchar(15) NOT NULL,
  `sv04nfin` varchar(20) NOT NULL,
  `sv02code` int(11) NOT NULL,
  `sv07cdtp` varchar(5) NOT NULL,
  `sv05codu` int(11) NOT NULL,
  PRIMARY KEY (`sv09npln`,`sv08conse`,`sv01cedc`,`sv03cedp`,`sv04nfin`,`sv02code`,`sv07cdtp`,`sv05codu`),
  KEY `fk_SV09VSDO_SV08TRMTE1_idx` (`sv08conse`,`sv01cedc`,`sv03cedp`,`sv04nfin`),
  KEY `fk_SV09VSDO_SV02ESTDO1_idx` (`sv02code`),
  KEY `fk_SV09VSDO_SV07TPGFO1_idx` (`sv07cdtp`,`sv05codu`),
  CONSTRAINT `fk_SV09VSDO_SV02ESTDO1` FOREIGN KEY (`sv02code`) REFERENCES `sv02estdo` (`sv02code`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_SV09VSDO_SV07TPGFO1` FOREIGN KEY (`sv07cdtp`, `sv05codu`) REFERENCES `sv07tpgfo` (`sv07cdtp`, `sv05codu`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_SV09VSDO_SV08TRMTE1` FOREIGN KEY (`sv08conse`, `sv01cedc`, `sv03cedp`, `sv04nfin`) REFERENCES `sv08trmte` (`sv08conse`, `sv01cedc`, `sv03cedp`, `sv04nfin`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `sv09vsdo` */

insert  into `sv09vsdo`(`sv09npln`,`sv09nfol`,`sv09npre`,`sv09mnt`,`sv09fvdp`,`sv09fumv`,`sv08conse`,`sv01cedc`,`sv03cedp`,`sv04nfin`,`sv02code`,`sv07cdtp`,`sv05codu`) values ('','','','','2017-03-10','2017-03-09','201611104','503760988','704890122','88823',1,'555',1),('','','','','2017-03-10','2017-03-09','201611105','608820331','401230788','82134',1,'555',1),('12345','32425','1-030-020','','2016-11-04','2016-11-10','201611104','903780122','605800253','12345',1,'555',1);

/*Table structure for table `sv10ctlcon` */

DROP TABLE IF EXISTS `sv10ctlcon`;

CREATE TABLE `sv10ctlcon` (
  `sv10codcon` int(11) NOT NULL AUTO_INCREMENT,
  `sv10fech` date NOT NULL,
  PRIMARY KEY (`sv10codcon`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `sv10ctlcon` */

insert  into `sv10ctlcon`(`sv10codcon`,`sv10fech`) values (1,'2016-11-03'),(2,'2016-11-03'),(3,'2016-11-08'),(4,'2016-11-10'),(5,'2016-11-10'),(6,'2016-11-10'),(7,'2017-02-23'),(8,'2017-03-09');

/*Table structure for table `sv11res` */

DROP TABLE IF EXISTS `sv11res`;

CREATE TABLE `sv11res` (
  `sv11cod` int(11) NOT NULL AUTO_INCREMENT,
  `sv07cdtp` varchar(5) NOT NULL,
  `sv11tok` varchar(65) NOT NULL,
  `sv11fchs` datetime NOT NULL,
  PRIMARY KEY (`sv11cod`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

/*Data for the table `sv11res` */

insert  into `sv11res`(`sv11cod`,`sv07cdtp`,`sv11tok`,`sv11fchs`) values (1,'','fa4faad07de963f0363d6fa5869e5de9433cc5f2','2017-03-01 17:28:16'),(2,'','e4de565b5321fe698ec2ad5d454e2a31b4ae59b0','2017-03-01 17:28:19'),(3,'','cd6df8b10cc72bb5c83e652e48c17404c435489a','2017-03-01 17:28:30'),(4,'','0d26652e714bba17803af396843dbbc57e464773','2017-03-01 17:28:59'),(5,'','31c0f669eda40c04a76302e5111b3fe10ac5ad6b','2017-03-01 17:29:01'),(6,'','211d5736c60393356b0e62eb1d4206b588b8dd5e','2017-03-01 17:29:02'),(7,'','4462fe5d3554ac1c287e10886cacade23118f18e','2017-03-01 17:29:20'),(8,'','d3761af751a78a6579b076b19ca5e0931bee6822','2017-03-01 17:29:22'),(9,'','7f52be204e06cc0b7922527ee6630c4f2d28a4d0','2017-03-01 17:29:23'),(10,'','ac0c9061195a08cf554495588cc6171bcaf20117','2017-03-01 17:29:23'),(11,'','1b1b2d3a68111c20bb496a3ce01b69fefe7d1925','2017-03-01 17:29:23'),(12,'','35bfa13be879dfceb8bf87a3ca2366158ada776b','2017-03-01 17:29:24'),(13,'','a1f041ca5db775e407acf9115ee39128a0178536','2017-03-01 17:29:24'),(14,'','19495d592bf5a6c3e7b81f7c882cfd1a34e97aaf','2017-03-01 17:29:24'),(15,'','57e47c23a203b6d23ca96a395dfec13fbcfa8912','2017-03-01 17:29:24'),(16,'','f69ff05d4d100f1f0a8cbdc0fcf02f2371984f84','2017-03-01 17:29:36'),(17,'','864d96cb74e8325d370493854da9965b573d8526','2017-03-01 17:29:37'),(18,'','3a242dc11b31f71ee8760cf8532a9460801e941f','2017-03-01 17:29:37'),(19,'','7b16481d57bf7c7dd068739ff79e9687a4644630','2017-03-01 17:29:37'),(20,'','f36a474f184b3469ec575adf779f183f65904674','2017-03-01 17:29:38'),(21,'','8954e815e5c6a70fa5f2bfaa983dbc884473ff88','2017-03-01 17:32:37'),(22,'','6181c732594e8047c31e2fcfda264ef34f4fad09','2017-03-01 17:32:38'),(23,'','ae29d5da83bd066f68ced05ce3134647bfadcc3a','2017-03-01 17:32:38'),(24,'','babc482bc9f6b7cfd583205f4e83e29882dfd0e0','2017-03-01 17:32:38'),(25,'','334bc516a83048b39af60e055ffa9260edc15a11','2017-03-01 17:32:38'),(26,'','ba4f4dced4471cb8a186794a42748e3f6335e84d','2017-03-01 17:32:38'),(27,'','59bfdb408615c5517ac2b5186b187a445795669f','2017-03-01 23:00:03'),(28,'','4bfaf2acc91e0f0419dba5e39670bcaea299f429','2017-03-01 23:00:13'),(29,'','fb8672a77b1d09e214eec65f5e21559e747ccb3b','2017-03-01 23:03:58'),(30,'','478fe7fa07dc952914a601ebc0c41744a6e5e19a','2017-03-01 23:03:59'),(31,'','aef5b52fb8353d21e858a51018646dfb83482f20','2017-03-01 23:03:59'),(32,'','2e6b259e286c569bdad8dbe99a36fb94d86d5fdb','2017-03-01 23:05:01'),(33,'','2e59f544013e7962d291565e960f92bc4ffc2b6a','2017-03-01 23:05:02'),(34,'','ab4d2478453f974417b6070c027cb01e242a6325','2017-03-01 23:05:02'),(35,'','b8c1a6801bb0167e9730f85b3238c68a15d8b3db','2017-03-01 23:05:02'),(36,'','08e9d5152fa1bc1947e269eb0a5fe228141e9d98','2017-03-01 23:05:02'),(37,'','985eb64813a5273757b3a8894d0d870481e58418','2017-03-01 23:05:02'),(38,'','b2d8a2e2032492e87308037bac0ec44a2df832ea','2017-03-02 13:20:57'),(39,'','2945019c9eb5f40f76924f74691653e59a1bab5b','2017-03-09 16:24:54'),(40,'','82ccfd00d8f8de7e58f96d51ac0e643d8a211e7b','2017-03-09 16:30:45');

/* Trigger structure for table `sv08trmte` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `after_tramite` */$$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'localhost' */ /*!50003 TRIGGER `after_tramite` AFTER INSERT ON `sv08trmte` FOR EACH ROW BEGIN 
INSERT INTO sv10ctlcon(sv10fech) VALUES (CURDATE());
END */$$


DELIMITER ;

/* Procedure structure for procedure `ActualizarCliente` */

/*!50003 DROP PROCEDURE IF EXISTS  `ActualizarCliente` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `ActualizarCliente`(
in Psv01cedc varchar(15),
in Psv01cdtpc varchar(5),
in Psv01nomc varchar(200),
in Psv01apdc varchar (200),
in Psv01emc varchar(50),
in Psv01telc int)
BEGIN
START TRANSACTION;
UPDATE sv01clnte set sv01cdtpc=Psv01cdtpc,sv01nomc=Psv01nomc,sv01apdc=Psv01apdc,sv01emc=Psv01emc,sv01telc=Psv01telc
 Where sv01cedc=Psv01cedc;
COMMIT;
END */$$
DELIMITER ;

/* Procedure structure for procedure `ActualizarEstado` */

/*!50003 DROP PROCEDURE IF EXISTS  `ActualizarEstado` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `ActualizarEstado`(
in Psv02code int(11),
in Psv02dete varchar(50))
BEGIN
START TRANSACTION;
UPDATE sv02estdo SET sv02dete=Psv02dete WHERE sv02code=Psv02code;
COMMIT;
END */$$
DELIMITER ;

/* Procedure structure for procedure `ActualizarPropietario` */

/*!50003 DROP PROCEDURE IF EXISTS  `ActualizarPropietario` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `ActualizarPropietario`(
in Psv03cedp varchar(15),
in Psv03nomp varchar(200),
in Psv03apdp varchar(200),
in Psv03emp varchar(50),
in Psv03telp int,
in Psv06codp int)
BEGIN
START TRANSACTION;
UPDATE sv03ptario set sv03nomp=Psv03nomp,sv03apdp=Psv03apdp,sv03emp=Psv03emp,sv03telp=Psv03telp,sv06codp=Psv06codp
WHERE sv03cedp=Psv03cedp;
COMMIT;
END */$$
DELIMITER ;

/* Procedure structure for procedure `ActualizarRequisitos` */

/*!50003 DROP PROCEDURE IF EXISTS  `ActualizarRequisitos` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `ActualizarRequisitos`(
in Psv04nfin varchar(20),
in Psv04apln varchar(100),
in Psv04aact varchar(100),
in Psv04acta varchar(100))
BEGIN
START TRANSACTION;
UPDATE sv04reqtos set sv04apln=Psv04apln,sv04aact=Psv04aact,sv04acta=Psv04acta
WHERE sv04nfin=Psv04nfin;
COMMIT;
END */$$
DELIMITER ;

/* Procedure structure for procedure `ActualizarTipoPropietario` */

/*!50003 DROP PROCEDURE IF EXISTS  `ActualizarTipoPropietario` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `ActualizarTipoPropietario`(
in Psv06codp int,
in Psv06detp varchar(50))
BEGIN
START TRANSACTION;
UPDATE sv06tipprop SET sv06detp=Psv06detp
WHERE sv06codp=Psv06codp;
COMMIT;
END */$$
DELIMITER ;

/* Procedure structure for procedure `ActualizarTipoUsuario` */

/*!50003 DROP PROCEDURE IF EXISTS  `ActualizarTipoUsuario` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `ActualizarTipoUsuario`(
in Psv05codu int,
in Psv05detu varchar(50))
BEGIN
START TRANSACTION;
UPDATE sv05tipusu SET sv05detu=Psv05detu
WHERE sv05codu=Psv05codu;
COMMIT;
END */$$
DELIMITER ;

/* Procedure structure for procedure `AddTramite` */

/*!50003 DROP PROCEDURE IF EXISTS  `AddTramite` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `AddTramite`(
In Psv08conse VARCHAR(15),
In Psv01cedc VARCHAR(15),
In Psv03cedp VARCHAR(15),
In Psv04nfin VARCHAR(20)
)
BEGIN
START TRANSACTION;
INSERT INTO sv08trmte(sv08conse,sv08fchs,sv08fumt,sv01cedc,sv03cedp,sv04nfin,sv02code)
VALUES (Psv08conse,NOW(),NOW(),Psv01cedc,Psv03cedp,Psv04nfin,7);
COMMIT;
END */$$
DELIMITER ;

/* Procedure structure for procedure `AgregarCliente` */

/*!50003 DROP PROCEDURE IF EXISTS  `AgregarCliente` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `AgregarCliente`(
in Psv01cedc varchar(15),
in Psv01cdtpc varchar(5),
in Psv01nomc varchar(200),
in Psv01apdc varchar (200),
in Psv01emc varchar(50),
in Psv01telc int)
BEGIN
START TRANSACTION;
INSERT INTO sv01clnte (sv01cedc,sv01cdtpc,sv01nomc,sv01apdc,sv01emc,sv01telc)
VALUES (Psv01cedc,Psv01cdtpc,Psv01nomc,Psv01apdc,Psv01emc,Psv01telc);
COMMIT;
END */$$
DELIMITER ;

/* Procedure structure for procedure `AgregarEstado` */

/*!50003 DROP PROCEDURE IF EXISTS  `AgregarEstado` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `AgregarEstado`(
in Psv02code int,
in Psv02dete varchar(50))
BEGIN
START TRANSACTION;
INSERT INTO sv02estdo (sv02code,sv02dete) VALUES (Psv02code,Psv02dete);
COMMIT;
END */$$
DELIMITER ;

/* Procedure structure for procedure `AgregarPropietario` */

/*!50003 DROP PROCEDURE IF EXISTS  `AgregarPropietario` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `AgregarPropietario`(
in Psv03cedp varchar(15),
in Psv03nomp varchar(200),
in Psv03apdp varchar(200),
in Psv03emp varchar(50),
in Psv03telp int,
in Psv06codp int)
BEGIN
START TRANSACTION;
INSERT INTO sv03ptario (sv03cedp,sv03nomp,sv03apdp,sv03emp,sv03telp,sv06codp)
VALUES (Psv03cedp,Psv03nomp,Psv03apdp,Psv03emp,Psv03telp,Psv06codp);
COMMIT;
END */$$
DELIMITER ;

/* Procedure structure for procedure `AgregarRequisitos` */

/*!50003 DROP PROCEDURE IF EXISTS  `AgregarRequisitos` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `AgregarRequisitos`(
in Psv04nfin varchar(20),
in Psv04apln varchar(100),
in Psv04aact varchar(100),
in Psv04acta varchar(100))
BEGIN
START TRANSACTION;
INSERT INTO sv04reqtos (sv04nfin,sv04apln,sv04aact,sv04acta) 
VALUES (Psv04nfin,Psv04apln,Psv04aact,Psv04acta);
COMMIT;
END */$$
DELIMITER ;

/* Procedure structure for procedure `AgregarTipoPropietario` */

/*!50003 DROP PROCEDURE IF EXISTS  `AgregarTipoPropietario` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `AgregarTipoPropietario`(
in Psv06codp int,
in Psv06detp varchar(50))
BEGIN
START TRANSACTION;
INSERT INTO sv06tipprop (sv06codp,sv06detp)
VALUES (Psv06codp,Psv06detp);
COMMIT;
END */$$
DELIMITER ;

/* Procedure structure for procedure `AgregarTipoUsuario` */

/*!50003 DROP PROCEDURE IF EXISTS  `AgregarTipoUsuario` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `AgregarTipoUsuario`(
in Psv05codu int,
in Psv05detu varchar(50))
BEGIN
START TRANSACTION;
INSERT INTO sv05tipusu (sv05codu,sv05detu)
VALUES (Psv05codu,Psv05detu);
COMMIT;
END */$$
DELIMITER ;

/* Procedure structure for procedure `AgregarTopografo` */

/*!50003 DROP PROCEDURE IF EXISTS  `AgregarTopografo` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `AgregarTopografo`(
IN Psv07cdtp VARCHAR(5),
IN Psv07cedt VARCHAR(15),
IN Psv07nomt VARCHAR(200),
IN Psv07apdt VARCHAR(200),
IN Psv07estd Varchar (100),
IN Psv07pass VARCHAR(20),
IN Psv05codu INT)
BEGIN
START TRANSACTION;
INSERT INTO sv07tpgfo (sv07cdtp,sv07cedt,sv07nomt,sv07apdt,sv07estd,sv07pass,sv05codu)
VALUES (Psv07cdtp,Psv07cedt,Psv07nomt,psv07apdt,Psv07estd,Psv07pass,Psv05codu);
COMMIT;
END */$$
DELIMITER ;

/* Procedure structure for procedure `ConsultarCliente` */

/*!50003 DROP PROCEDURE IF EXISTS  `ConsultarCliente` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `ConsultarCliente`(IN Psv01cedc VARCHAR(15))
BEGIN
START TRANSACTION;
SELECT sv01cedc,sv01cdtpc,sv01nomc,sv01apdc,sv01emc,sv01telc FROM sv01clnte WHERE sv01cedc=Psv01cedc;
COMMIT;
END */$$
DELIMITER ;

/* Procedure structure for procedure `ConsultarEstado` */

/*!50003 DROP PROCEDURE IF EXISTS  `ConsultarEstado` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `ConsultarEstado`(
in Psv02code int)
BEGIN
START TRANSACTION;
SELECT sv02code,sv02dete FROM sv02estdo WHERE sv02code=Psv02code;
COMMIT;
END */$$
DELIMITER ;

/* Procedure structure for procedure `ConsultarPropietario` */

/*!50003 DROP PROCEDURE IF EXISTS  `ConsultarPropietario` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `ConsultarPropietario`(
in Psv03cedp varchar(15))
BEGIN
START TRANSACTION;
SELECT sv03cedp,sv03nomp,sv03apdp,sv03emp,sv03telp,sv06codp FROM sv03ptario WHERE sv03cedp=Psv03cedp;
COMMIT;
END */$$
DELIMITER ;

/* Procedure structure for procedure `ConsultarPropietarios` */

/*!50003 DROP PROCEDURE IF EXISTS  `ConsultarPropietarios` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `ConsultarPropietarios`()
BEGIN
START TRANSACTION;
SELECT sv03cedp,sv03nomp,sv03apdp,sv03emp,sv03telp,sv06codp FROM sv03ptario;
COMMIT;
END */$$
DELIMITER ;

/* Procedure structure for procedure `ConsultarRequisito` */

/*!50003 DROP PROCEDURE IF EXISTS  `ConsultarRequisito` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `ConsultarRequisito`(in Psv04nfin varchar(20))
BEGIN
START TRANSACTION;
SELECT sv04nfin,sv04apln,sv04aact,sv04acta FROM sv04reqtos WHERE sv04nfin=Psv04nfin;
COMMIT;
END */$$
DELIMITER ;

/* Procedure structure for procedure `ConsultarTipoPropietario` */

/*!50003 DROP PROCEDURE IF EXISTS  `ConsultarTipoPropietario` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `ConsultarTipoPropietario`(in Psv06codp int)
BEGIN
START TRANSACTION;
SELECT sv06codp,sv06detp FROM sv06tipprop WHERE sv06codp=Psv06codp;
END */$$
DELIMITER ;

/* Procedure structure for procedure `ConsultarTipoUsuario` */

/*!50003 DROP PROCEDURE IF EXISTS  `ConsultarTipoUsuario` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `ConsultarTipoUsuario`(
in Psv05codu int)
BEGIN
START TRANSACTION;
SELECT sv05codu,sv05detu FROM sv05tipusu WHERE sv05codu=Psv05codu;
COMMIT;
END */$$
DELIMITER ;

/* Procedure structure for procedure `EliminarEstado` */

/*!50003 DROP PROCEDURE IF EXISTS  `EliminarEstado` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `EliminarEstado`(
in Psv02code int)
BEGIN
START TRANSACTION;
DELETE FROM sv02estdo WHERE sv02code=Psv02code;
COMMIT;
END */$$
DELIMITER ;

/* Procedure structure for procedure `EliminarTipoUsuario` */

/*!50003 DROP PROCEDURE IF EXISTS  `EliminarTipoUsuario` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `EliminarTipoUsuario`(
in Psv05codu int)
BEGIN
START TRANSACTION;
DELETE FROM sv05tipusu WHERE sv05codu=Psv05codu;
COMMIT;
END */$$
DELIMITER ;

/* Procedure structure for procedure `ListarEstados` */

/*!50003 DROP PROCEDURE IF EXISTS  `ListarEstados` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `ListarEstados`()
BEGIN
START TRANSACTION;
SELECT sv02code,sv02dete FROM sv02estdo;
COMMIT;
END */$$
DELIMITER ;

/* Procedure structure for procedure `ListarRequisitos` */

/*!50003 DROP PROCEDURE IF EXISTS  `ListarRequisitos` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `ListarRequisitos`()
BEGIN
START TRANSACTION;
SELECT sv04nfin,sv04apln,sv04aact,sv04acta FROM sv04reqtos;
COMMIT;
END */$$
DELIMITER ;

/* Procedure structure for procedure `ListartarClientes` */

/*!50003 DROP PROCEDURE IF EXISTS  `ListartarClientes` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `ListartarClientes`()
BEGIN
START TRANSACTION;
SELECT sv01cedc,sv01cdtpc,sv01nomc,sv01apdc,sv01emc,sv01telc FROM sv01clnte;
COMMIT;
END */$$
DELIMITER ;

/* Procedure structure for procedure `ListarTipoPropietario` */

/*!50003 DROP PROCEDURE IF EXISTS  `ListarTipoPropietario` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `ListarTipoPropietario`()
BEGIN
START TRANSACTION;
SELECT sv06codp,sv06detp FROM sv06tipprop;
COMMIT; 
END */$$
DELIMITER ;

/* Procedure structure for procedure `ListarTipoUsuarios` */

/*!50003 DROP PROCEDURE IF EXISTS  `ListarTipoUsuarios` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `ListarTipoUsuarios`()
BEGIN
START TRANSACTION;
SELECT sv05codu,sv05detu FROM sv05tipusu;
COMMIT;
END */$$
DELIMITER ;

/* Procedure structure for procedure `ListarUsu` */

/*!50003 DROP PROCEDURE IF EXISTS  `ListarUsu` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `ListarUsu`()
BEGIN
START TRANSACTION;
SELECT sv07cdtp,sv07cedt,sv07nomt,sv07apdt,sv07estd,sv07pass,sv05codu FROM sv07tpgfo;
COMMIT;
END */$$
DELIMITER ;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
