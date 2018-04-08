-- MySQL dump 10.13  Distrib 5.7.17, for Win32 (AMD64)
--
-- Host: localhost    Database: bodyline
-- ------------------------------------------------------
-- Server version	5.7.21-0ubuntu0.16.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `agenda`
--

DROP TABLE IF EXISTS `agenda`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `agenda` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `giorno` int(11) NOT NULL,
  `ora` int(11) NOT NULL,
  `corso_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `agenda_corso_id_foreign` (`corso_id`),
  CONSTRAINT `agenda_corso_id_foreign` FOREIGN KEY (`corso_id`) REFERENCES `corsi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `agenda`
--

LOCK TABLES `agenda` WRITE;
/*!40000 ALTER TABLE `agenda` DISABLE KEYS */;
INSERT INTO `agenda` VALUES (5,2,2,12,'2018-04-07 09:29:37','2018-04-07 09:29:37'),(6,5,3,12,'2018-04-07 09:29:37','2018-04-07 09:29:37'),(7,2,11,11,'2018-04-07 09:29:58','2018-04-07 09:29:58'),(8,3,15,11,'2018-04-07 09:29:58','2018-04-07 09:29:58'),(9,3,16,11,'2018-04-07 09:29:58','2018-04-07 09:29:58'),(10,6,19,11,'2018-04-07 09:29:58','2018-04-07 09:29:58'),(11,6,1,15,'2018-04-07 09:30:19','2018-04-07 09:30:19'),(13,5,7,15,'2018-04-07 09:30:19','2018-04-07 09:30:19'),(14,3,10,15,'2018-04-07 09:30:19','2018-04-07 09:30:19'),(15,4,13,15,'2018-04-07 09:30:19','2018-04-07 09:30:19'),(18,2,8,12,'2018-04-07 09:51:01','2018-04-07 09:51:01'),(19,5,14,12,'2018-04-07 09:51:01','2018-04-07 09:51:01');
/*!40000 ALTER TABLE `agenda` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `corsi`
--

DROP TABLE IF EXISTS `corsi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `corsi` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome_corso` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descrizione` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `livello` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `staff_id` int(10) unsigned DEFAULT NULL,
  `colore` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `corsi`
--

LOCK TABLES `corsi` WRITE;
/*!40000 ALTER TABLE `corsi` DISABLE KEYS */;
INSERT INTO `corsi` VALUES (4,'POSTURAL & CORE WORKOUT','Questo tipo di lezione si prefigge di migliorare la postura, rinforzando i principali muscoli ed essa correlati, lavorando sulla mobilità articolare, sulla respirazione e sull’equilibrio. Scopo del corso è prevenire ed alleviare i principali fastidi legati scorretta postura del corpo utilizzando tecniche di ginnastica, yoga e pilates. Grande attenzione e lavoro sarà svolto sulla fascia del core al rinforzo dunque dei muscoli profondi del tronco e del bacino, al fine di ottimizzare qualsiasi gesto che richieda stabilità. Il core è il centro, ed è proprio dal centro del nostro corpo che parte il movimento. Con un core stabile e forte tutto sarà piu\' semplice e sicuro.','Bassa',2,'#FFCC33','corsi/4.jpeg','2018-04-05 13:57:47','2018-04-05 13:57:47'),(8,'YOGA','Yoga è il termine generico per definire una disciplina di origine orientale. Una disciplina mirata a garantire benefici al corpo, attraverso il potenziamento muscolare e il miglioramento posturale, ma anche alla mente. Nato in India nei secoli scorsi, lo yoga si basa sull’assunzione di determinate posizioni, chiamate Asana, mantenute con il controllo del respiro, Pranayama, e il dominio della mente. La versione più nota e praticata è l’Hata yoga: posizioni statiche del corpo unite a una respirazione corretta e a un atteggiamento mentale finalizzato a cancellare ogni forma di pensiero; migliora la consapevolezza di sé, l’atteggiamento posturale e mentale.','Bassa',0,'#009900','corsi/8.jpeg','2018-04-05 20:13:59','2018-04-06 11:32:31'),(10,'B WORKOUT','Allenamento dedicato agli arti inferiori e glutei. La lezione della durata di circa un ora prevede una fase di riscaldamento e a seguire una serie di esercizi di tonificazione volti a migliorare il lato B. Squat e affondi saranno le parole chiave di questo intenso workout','Media',0,'#330033','corsi/10.jpeg','2018-04-05 22:02:05','2018-04-06 10:16:11'),(11,'BALLI CARAIBICI','A cura della scuola di ballo SALSA ACADEMY. Disciplina non compresa nel costo dell’abbonamento standard della palestra.','Bassa',0,'#000099','corsi/11.jpeg','2018-04-06 07:17:26','2018-04-06 07:17:27'),(12,'BODY FLEX & TONE','E\' un allenamento mirato alla tonificazione di tutti i principali distretti muscolari: addome, glutei, spalle, gambe e braccia. Gli esercizi possono essere svolti a corpo libero o con piccoli attrezzi come elastici, palle, bosu o fit ball. . Ha la durata di circa 60 minuti e si suddivide in tre fasi: i primi dieci minuti sono dedicati agli esercizi di riscaldamento, a seguire vengono proposti gli esercizi di tonificazione sia al suolo che in piedi, mentre nella terza e ultima fase si eseguiranno tecniche di rilassamento: stretching ed esercizi di respirazione.','Bassa',0,'#EE9A4D','corsi/12.jpeg','2018-04-06 13:14:59','2018-04-06 13:14:59'),(14,'KRAV MAGA','Il Krav Maga in ebraico significa combattimento a corta distanza, è un moderno ed efficace sistema di autodifesa adatto a uomini e donne di tutte le età. Ideato da Imi Lichtenfeld è un mix di tecniche di varie discipline (boxe, thay boxe, judo, lotta, ju jitsu) adattate e semplificate per la vita reale dove non ci sono ring o tatami','Media',0,'#25587E','corsi/14.jpeg','2018-04-06 13:16:43','2018-04-06 13:16:43'),(15,'GINNASTICA DOLCE','Si tratta di una ginnastica eseguita con movimenti lenti, graduali, a basso impatto. E\' un esercizio ginnico soft studiato per avvicinare al movimento persone sedentarie, anziani o coloro che hanno problemi di tipo ortopedico. La ginnastica dolce consiste in movimenti semplici: piegamenti, allungamenti e stretching, eseguiti in modo da non richiedere a muscoli e articolazioni eccessivi sforzi. Prevede esercizi a corpo libero o l’utilizzo di piccoli attrezzi.','Bassa',0,'#800000','corsi/15.jpeg','2018-04-06 13:18:22','2018-04-06 13:18:52'),(16,'BOOT CAMP MILITARY','Allenamento ispirato a quello militare, piegamenti sulle braccia, trazioni, percorsi, esercizi a corpo libero. Allenamento ad alta intensità consigliato a soggetti già allenati.','Alta',0,'#4E387E','corsi/16.jpeg','2018-04-06 13:28:55','2018-04-06 13:28:55');
/*!40000 ALTER TABLE `corsi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `listino`
--

DROP TABLE IF EXISTS `listino`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `listino` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descrizione` text COLLATE utf8mb4_unicode_ci,
  `prezzo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `listino`
--

LOCK TABLES `listino` WRITE;
/*!40000 ALTER TABLE `listino` DISABLE KEYS */;
INSERT INTO `listino` VALUES (1,'Mensile','31 giorni','70','2018-04-05 13:04:05','2018-04-05 13:04:05'),(2,'2 mesi','Euro 65 mensili x 2 =','130','2018-04-05 13:04:05','2018-04-05 13:04:05'),(3,'3 Mesi','Euro 60 mensili x 3 =','180','2018-04-05 13:04:05','2018-04-05 13:04:05'),(4,'6 Mesi','Euro 55 mensili x 6 =','330','2018-04-05 13:04:05','2018-04-05 13:04:05'),(5,'12 Mesi','Euro 45 mensili x 12 =','540','2018-04-05 13:04:05','2018-04-05 13:04:05'),(6,'Ingresso singolo',NULL,'10','2018-04-05 13:04:05','2018-04-05 13:04:05');
/*!40000 ALTER TABLE `listino` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2018_03_29_175806_create_corsi_table',1),(4,'2018_03_31_152420_create_agenda_table',1),(5,'2018_03_31_234304_corsi_update_add_column',1),(6,'2018_04_01_222239_create_staff_table',1),(7,'2018_04_01_223325_staff_update_descrizione_type',1),(8,'2018_04_02_183826_create_listino_table',1),(9,'2018_04_04_080545_create_news_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `descrizione` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news`
--

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` VALUES (1,'Dalle ore 18 alle 19.30.... gratuitamente una nostra dipendente si occuperà dei vostri bambini, consentendovi di godervi l\'allenamento in tutta tranquillità','images/notizia.jpeg','2018-04-05 12:53:37','2018-04-05 12:53:37');
/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `staffs`
--

DROP TABLE IF EXISTS `staffs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `staffs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descrizione` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `staffs`
--

LOCK TABLES `staffs` WRITE;
/*!40000 ALTER TABLE `staffs` DISABLE KEYS */;
INSERT INTO `staffs` VALUES (2,'Giuliana Moretti','Nasce a Cortona il 07/10/1961 – fin da piccola autodidatta si interessa alla ginnastica, oggi si direbbe Fitness, ma è dopo la maturità (Ragioneria) che decide di coltivare questa sua passione\r\n\r\n1981 __ (fino al 1984) frequenta un corso di danza Jazz con un’insegnante svizzera proveniente dal settore professionistico.\r\n1982 __ inizia a praticare arti marziali (Karate)\r\n1983 __ coadiuva il compagno Roberto nelle lezioni di ginnastica a corpo libero organizzando sessioni specifiche per donne. Comincia a coltivare la sua passione frequentando corsi di formazione in tutta Italia.\r\n1985 _ Introduce nei suoi allenamenti la ginnastica con pesi e piccoli attrezzi dedicandosi alla pratica del body building disciplina fortemente seguita in quegli anni.\r\n1986 _ 1° donna nel comune di Cortona, consegue la cintura nera di Karate, attività che poi abbandonerà per dedicarsi ad altre discipline sportive.\r\n1987 Si diploma istruttore di Body building, a Ravenna c/o il centro studi «La torre» (oggi F.I.F. – federazione italiana fitness) dopo un corso della durata di 6 mesi.\r\n1988 _ E’ scelta dall’Associazione Italiana di Ginnastica Aerobica, a far parte di un gruppo ristretto di circa 20 atlete/i, che dovranno esibirsi c/o lo stadio dei marmi a Roma nella cerimonia di apertura del meeting internazionale di Atletica Leggera. Nella circostanza viene presentato da questo gruppo per la prima volta in Italia l’attrezzo “step” che successivamente diverrà uno degli attrezzi più usati in ogni palestra.\r\n1989 ___ dopo un percorso formativo, si diploma insegnante internazionale di Ginnastica Aerobica (A.F.A.A.) superando a Roma, esami scritti, orali e pratici,\r\n1991 ___ partecipa individualmente alle prime gare di ginnastica aerobica competitiva.\r\n1992 ___ In “team” si classifica al secondo posto nelle selezioni di Siena\r\n1993 ____ A Firenze vince i campionati regionali di Ginnastica Aerobica. In questa categoria disputerà poi la finale nazionale di Roma AIGA (Ass. Italiana Ginnastica Aerobica) 7° class. mentre nella FIA (Federazione Italiana Aerobica) le finali di Salsomaggiore 8° class.\r\n1995/97/98/99 ____ Mette insieme un nutrito gruppo di volontari, che si esibiscono nelle manifestazioni «Giucagym», organizzate dall’ l’UNICEF ad Arezzo, per raccogliere fondi da destinare a popolazioni bisognose.\r\n1996/97 ___ Partecipa a Bologna con la sua squadra alla 1° e 2° edizione del campionato nazionale di Funky (minimo 10 atleti). Il secondo anno la sua crew si classificherà al 12° posto assoluto in Italia.\r\n1996 ___ Prende il brevetto di istruttore di ginnastica con «Fit-ball» (palla svizzera) a Roma.\r\n1999/2000 ___ Le sue qualifiche e titoli le permettono di rientrare nel numero chiuso di istruttori federali che a seguito della Legge Regionale Toscana n° 85/1998 vengono selezionati per effettuare un corso intensivo di formazione, riqualificazione e specializzazione professionale, della durata di 6 mesi c/o la sede provinciale del C.O.N.I. ad Arezzo, dove con 25/30 si diploma «Operatore di palestra» di 2° livello, di fronte alla commissione di esperti (Medici sportivi, dirigenti CONI, Prof. di Educazione fisica) nominati dalla Regione Toscana e dalla Provincia di Ar. L’attestato rilasciato in bollo dallo Stato Italiano, equiparato ISEF e riconosciuto dalla Comunità Europea abilità all’insegnamento di ogni tipo di attività o esercizio fisico come pure ad eseguire nell’ambito delle palestre, qualsiasi tipo di preparazione atletico/sportiva con o senza carichi. In quegli anni organizza, dirige e coreografa decine di show per promuovere la ginnastica e il fitness nei vari contesti di sagre e feste paesane, come in occasione di gare, eventi o manifestazioni, tra cui:\r\n1994 - 1996 __ «Expò Etruria» (due edizioni)\r\n1995 ___ Meeting di Body building c/o teatro comunale di Sinalunga\r\n1996 ___ «Bettolle in… immagini e musica»\r\n1997 ___ Campionato Italiano di Body building Sinalunga\r\n1997 _ «Mayspotmeeting97» dove il gruppo si esibisce ad Arezzo sia in piazza Grande che in p. San Jacopo.\r\n2001 __1° edizione del premio sport «Citta di Cortona» c/o le terme di Manzano\r\n2003 ___ Frequenta uno dei primi corsi che abilitano all’insegnamento della Fit-boxe.\r\n2014 - Ottiene dopo l’ennesimo percorso di formazione il diploma di insegnante «Bokwa Fitness», un particolare tipo di ginnastica aerobica.\r\n2016 - Tesserandosi quale «amatore» alla Federazione Italiana di Atletica Leggera, gareggia nelle corse campestri, oggi denominate «Trail» ottenendo questi risultati:\r\n2° classificata _________ Trail «Città di Cortona» 2016 ______ 14 km ______ cat. «Over 50»\r\n2° classificata _________ Trail «delle valli Etrusche» 2016 _____ 14 km _____ cat. «Over 50»\r\n2017 – I migliori piazzamenti nelle ultime gare disputate\r\n1° classificata _________Trail «Città di Cortona» 2017 _____ 14 km _______ cat. «Over 50»\r\n4° classificata _________ Trail «delle valli Etrusche» 2017 ____ 14 km _____ cat. «Over 50»\r\n10° class. Assoluta ______ «Tuscany crossing» 2017 _ 15 km _ cat. Unica (sul podio poiché tra le prime 10)\r\n1° classificata _________ Trail «del Pratomagno» 2017 _____ 14 km _____ cat. «Over 50»\r\n3° classificata _________ Trail «Sacret forrest» 2017 ________14 km _____ cat. «Over 50»\r\n2° classificata _________Trail «del Falterona» 2017 _____14 km ________ cat. «Over 50»\r\n1° classificata ________ Ecomezza della acque Val d’Orcia ____ 22 km ____ cat. «Veterane»\r\n3° classificata ________ Ecotrail «Tra i borghi» _________ 21 km _____ cat. «Over 50»\r\n1° classificata ________ Campionato «Valli Aretine Trail Cup 2017» cat. «Sprint trail over 50»\r\n1° classificata _________ Trail Girifalco - Cortona 2017 _________ 7 km ______ cat. «Over 50»\r\n1° classificata _________ Trail dell’Amiata 2017 ____________ 14 km _____ cat. «Over 50»','staff/2.jpeg','2018-04-05 13:07:42','2018-04-05 13:07:42'),(3,'Nadia Castellani','Nata a Perugia il 14 marzo 1986 dopo aver frequentato il liceo scientifico si iscrive a scienze motorie.\r\n\r\nLe prime esperienze lavorative la vedono coinvolta con i più piccoli nelle scuole elementari ed infanzia con il progetto \"sport giocando\", successivamente si dedicherà al mondo del fitness frequentando numerosi corsi specializzandosi in fitness musicale, functional training, postural training e allenamenti al femminile.\r\n\r\nCresciuta nel mondo del fitness porto avanti questo lavoro con professionalità e passione, convinta che l\'attività fisica sia prima di tutto salute e che si debba rendere cura del proprio corpo essendo lo specchio dell\'anima e l\'unico posto che abbiamo per vivere.','staff/3.jpeg','2018-04-05 13:08:09','2018-04-05 13:08:09'),(4,'Alessio Mariottoni','Laurea in scienze motorie (2001) Laurea in scienze dell\'alimentazione (2002), Specializzazione recupero spalla anca e ginocchio (EAA) / Personale Trainer (MSP) / Istruttore avviamento atletica leggera ( FIDAL) / Allenatore di nuoto di I livello (FIN)/ Assistente bagnanti/primo soccorso ( FIN salvamento) / Istruttore nuoto II livello ( FIN ) / Presidente il corpo nel mondo acsd ( ginn dolce, musica, attivita\' fisica adattata per anziani, scuola avviamento atletica leggera, escursioni orientering patto ambientale, progetto termografia equina, organizzazione eventi di beneficenza,progetto ippoterapia, progetto musica negli asili, progetto educazione fisica nelle elementari, progetto scuola/acqua/medicinali LIFOG Kenya (dal 2008) ,gestione estiva associativa dell\'organizzazione corsi tempo libero eventi in piscine nel periodo estivo); guida di safari di I livello con driver (kenya), produttore discografico dal 1999 iscritto alla Siae, autore discografico deejay e pensatore libero educato al rispetto e all altruismo, credo negli animali ma molti uomini possono farcela. Appassionato di biologia anatomia animale etologia (corso guida di safari di I livello AIEA (associazione italiana esperti d\'africa) con driver (kenya) )','staff/4.jpeg','2018-04-05 13:08:41','2018-04-05 13:08:41');
/*!40000 ALTER TABLE `staffs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin','admin@gmail.com','$2y$10$yyBU.yvBedc.qSViBi472.DWd17v4P5TmUa0L362dQLbR97E3Uazq','UIDKVwgt2bj28s1ATLVUpKSdceOC1V6tfyl5RSAUDaCCsw2AmyacCd0KFTr4','2018-04-05 12:37:29','2018-04-05 12:37:29'),(2,'cacao','cacao@gmail.com','$2y$10$SK/dPzNfCVqRwRo5W1VHpuuc5DUOXqQBXqfFC5iWJHoQ.1.mjve5.','yIWXPk1COAG9yysqmhZrSauPavu05IiAy5jXqjPoRgj07KKTcM8mNhhUPsHS','2018-04-05 12:56:44','2018-04-05 12:56:44');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-04-08 12:05:08
