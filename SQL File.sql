-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql300.epizy.com
-- Generation Time: Jan 28, 2020 at 10:25 PM
-- Server version: 5.6.45-86.1
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_23471437_quest`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `password`) VALUES
('QueryMaestro', 'a5791b51216a4cc77f39d01dc3399c7c'),
('Admin', '6656df954f8da696f1df0bd7a64b997e'),
('TroubleShoot', '524aa55362c026fdf68807b055eb276c'),
('BlindCode', 'ae77b0b86375d41cc3a61fbf19e4e924'),
('CrypticEnigma', '1c1845e6e7e29a8fab5eb33b6d562182');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `url` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `brief` text NOT NULL,
  `site` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`url`, `title`, `brief`, `site`) VALUES
('../img/event/bc.png', 'Blind Code', 'you don\'t need eyes to code you need vision.', 'BlindCode'),
('../img/event/ce1.png', 'Cryptic Enigma', 'Cryptography', 'CrypticEnigma'),
('../img/event/CodeKING.jpg', 'Code King', 'Coding Competition.', 'CodeKing'),
('../img/event/Inverso.png', 'Inverso', 'Code The Pattern\r\n', 'inverso'),
('../img/event/qm.png', 'Query Maestro', 'Retrieve Yourself', 'QueryMaestro'),
('../img/event/ts.png', 'Trouble Shoot', 'Fix the errors', 'TroubleShoot');

-- --------------------------------------------------------

--
-- Table structure for table `event_index`
--

CREATE TABLE `event_index` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `page` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_index`
--

INSERT INTO `event_index` (`id`, `name`, `page`) VALUES
(1, 'Query Maestro', '<!doctype html>\r\n<html lang=\"en\">\r\n  <head>\r\n    <!-- Required meta tags -->\r\n    <meta charset=\"utf-8\">\r\n    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">\r\n\r\n    <!-- Bootstrap CSS -->\r\n    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">\r\n    \r\n    <title>QueryMaestro</title>\r\n  </head>\r\n  <body>\r\n    <nav class=\"navbar sticky-top navbar-expand-lg navbar-light bg-light\">\r\n        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarTogglerDemo01\" aria-controls=\"navbarTogglerDemo01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">\r\n            <span class=\"navbar-toggler-icon\"></span>\r\n        </button>\r\n        <div class=\"collapse navbar-collapse\" id=\"navbarTogglerDemo01\">\r\n            <a class=\"navbar-brand\" href=\"#\">QUERY MAESTRO | 2k19</a>\r\n            <ul class=\"navbar-nav mr-auto mt-2 mt-lg-0\">\r\n                <li class=\"nav-item active\">\r\n                    <a class=\"nav-link\" href=\"#\">Home <span class=\"sr-only\">(current)</span></a>\r\n                </li>\r\n            </ul>\r\n        </div>\r\n    </nav>\r\n    <div class=\"jumbotron \">\r\n        <div class=\"container\">\r\n            <img class=\"col-md-12 col-sm-12 col-lg-12 col-xs-12\" src=\"../img/event/qm.png\">\r\n        </div>\r\n    </div>\r\n    <div class=\"container text-center\" id=\"uis\">\r\n        <div class=\"row main\">\r\n            <div class=\"col-md-12 col-lg-12 col-xs-12 col-sm-12\">\r\n                <div class=\"card\" style=\"background-color: #f0f0f0;\">\r\n                    <div class=\"card-body\">\r\n                        <h5 class=\"card-title\">QUERY MAESTRO</h5>\r\n                        <p class=\"card-text\" style=\"text-align: left;\">\r\nHello data freaks,\r\nEver wondered how banks store your transactions , facebook stores your details , whatâ€™s app your messages and youtube your history??<br><br>\r\nAnything is possible in todayâ€™s digital world.\r\nIt is done using database where billions of terabytes of data is stored in it.<br>\r\nDo you know how the data is inserted ,retrieved and updated in a database????Well, here is an opportunity to unleash your expertise and exhibit your mastery.<br><br>\r\n*QUERY MAESTRO - RETRIEVE YOURSELF* is an event conducted as a part  of QUEST 2k19 which is a National Level Technical symposium conducted by Computer Science and Engineering department, JNTUH College of Engineering, Hyderabad.\r\n                        </p> \r\n                    </div>\r\n                </div>\r\n                <br>\r\n                <br>\r\n                <div class=\"card\" style=\"background-color: #f0f0f0;\">\r\n                    <div class=\"card-body\">\r\n                        <h5 class=\"card-title\">ROUND 1</h5>\r\n                        <p class=\"card-text\" style=\"text-align: left;\">\r\nThis is a online test ,a maximum of *3 MCQ* Test sets, with *20* Questions in each set, which will decide the qualifiers to Round -2.You can participate in this online test from *Feb 26th* to *March 12th* according to your convenience. Link for the test will be forwarded once you have registered for the event.<br>\r\nNOTE:ROUND 1 has no Registration Fee.\r\n                        </p>     \r\n                    </div>\r\n                </div>\r\n\r\n\r\n <br>\r\n                <br>\r\n                <div class=\"card\" style=\"background-color: #f0f0f0;\">\r\n                    <div class=\"card-body\">\r\n                        <h5 class=\"card-title\">ROUND 2</h5>\r\n                        <p class=\"card-text\" style=\"text-align: left;\">\r\nThis round will be conducted in JNTUH college on *March 13th* .All you have to do is to write queries to retrieve the required data. Those who qualify in round 2 will be eligible for round 3.<br>Fee : 199/- Only for ROUND 2.(including lunch)<br>\r\nNOTE:Only the participants qualified in Round 1 are Eligible for Round 2.<br>\r\nLanguages : SQL/ORACLE<br>\r\nAll the participants from Round 2 will be awarded participation certificate\r\nfrom JNTUH-CEH.\r\n                        </p>       \r\n                    </div>\r\n                </div>\r\n\r\n\r\n\r\n\r\n\r\n\r\n                <br>\r\n                <br>\r\n                <div class=\"card\" style=\"background-color: #f0f0f0;\">\r\n                    <div class=\"card-body\">\r\n                        <h5 class=\"card-title\">ROUND 3</h5>\r\n                        <p class=\"card-text\" style=\"text-align: left;\">\r\nThis is the final round where the top contests of the second round compete to be the query maestro.The one who retrieves the data in the least time will be declared as the winner.This will be on *March 14th 2019.*<br>\r\nNOTE:Only the participants qualified in Round 2 are Eligible for Round 3.<br>\r\nLanguages : SQL/ORACLE<br>\r\nTop 3 performers will win exciting GIFTS, on the QUEST day.\r\n                        </p>\r\n                    </div>\r\n                </div>\r\n<br>\r\n<br>\r\n<div class=\"card\" style=\"background-color: #f0f0f0;\">\r\n                    <div class=\"card-body\">\r\n                        <h5 class=\"card-title\">INCASE of <b>Queries Contact</b> us At:</h5>\r\n                 <p class=\"card-text\" style=\"text-align: left;\">\r\nT.Likhitha -8186815176<br>\r\nK.Akshara - 7989282937<br>\r\nV.Kanakalatha-6305596747<br>\r\nBNVRS Sri Harsha-8374322837<br>\r\nG Akhil - 9701308872\r\n                        </p>\r\n                    </div>\r\n                </div>\r\n            </div>\r\n        </div>\r\n    </div>\r\n\r\n        <br>\r\n<br>\r\n<br>\r\n    <!-- Optional JavaScript -->\r\n    <!-- jQuery first, then Popper.js, then Bootstrap JS -->\r\n    <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>\r\n    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\" integrity=\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\" crossorigin=\"anonymous\"></script>\r\n    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script>\r\n    <!--Other css and scripts-->\r\n    <script src=\"main.js\"></script>\r\n</body>\r\n</html>'),
(2, 'TroubleShoot', '<!doctype html>\r\n<html lang=\"en\">\r\n  <head>\r\n    <!-- Required meta tags -->\r\n    <meta charset=\"utf-8\">\r\n    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">\r\n\r\n    <!-- Bootstrap CSS -->\r\n    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">\r\n    \r\n    <title>TROUBLE SHOOT</title>\r\n  </head>\r\n  <body>\r\n    <nav class=\"navbar sticky-top navbar-expand-lg navbar-light bg-light\">\r\n        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarTogglerDemo01\" aria-controls=\"navbarTogglerDemo01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">\r\n            <span class=\"navbar-toggler-icon\"></span>\r\n        </button>\r\n        <div class=\"collapse navbar-collapse\" id=\"navbarTogglerDemo01\">\r\n            <a class=\"navbar-brand\" href=\"#\">TroubleShoot | 2k19</a>\r\n            <ul class=\"navbar-nav mr-auto mt-2 mt-lg-0\">\r\n                <li class=\"nav-item active\">\r\n                    <a class=\"nav-link\" href=\"#\">Home <span class=\"sr-only\">(current)</span></a>\r\n                </li>\r\n            </ul>\r\n        </div>\r\n    </nav>\r\n    <div class=\"jumbotron \">\r\n        <div class=\"container\">\r\n            <img class=\"col-md-12 col-sm-12 col-lg-12 col-xs-12\" src=\"../img/event/ts.png\">\r\n        </div>\r\n    </div>\r\n    <div class=\"container text-center\" id=\"uis\">\r\n        <div class=\"row main\">\r\n            <div class=\"col-md-12 col-lg-12 col-xs-12 col-sm-12\">\r\n            <div class=\"card\" style=\"background-color: #f0f0f0;\">\r\n                        <div class=\"card-body\">\r\n                            <h3 class=\"card-title\">TROUBLE SHOOT</h3><p class=\"card-text\" style=\"text-align: left;\"><h5>Fix the errors</h5><br>\r\n                            		\r\n									Hey! Want to showcase your talent and prove that you are good at debugging but didn\'t get any opportunity? Well! TROUBLESHOOT is an event conducted as a part  of QUEST 2k19 which is a National Level Technical symposium conducted by Computer Science and Engineering department, JNTUH College of Engineering, Hyderabad.<br><br>\r\n<h4>Round 1:</h4>\r\nThis is a online test ,a maximum of 5 MCQ Test sets, with 20 Questions in each set, which will decide the qualifiers to Round -2.You can participate in this online test from Feb 27th to March 12th according to your convenience. Link for the test will be forwarded once you have registered for the event.\r\n<br>\r\n<b>NOTE :</b> ROUND 1 has no Registration Fee.\r\n<br><br>\r\n<h4>Round 2 :</h4>\r\nThis round will be conducted in JNTUH college on March 13th .All you have to do is to debug the programs and make them error free. One who debugs the programs in less amount of time will be declared as a winner.\r\n<br><br>\r\n<b>Fee : </b>100/- Only for ROUND 2.\r\n<br>\r\n<b>NOTE : </b>Only the participants qualified in Round 1 are Eligible for Round 2.\r\n<br>\r\n<b>Languages :</b> C/Java\r\n<br>\r\n<b>Rewards :</b>\r\nTop 3 performers will win exciting GIFTS, on the QUEST day.<br>\r\nAnd also potential candidates will be given internship opportunities.<br>\r\nAll the participants from Round 2 will be awarded participation certificate from JNTUHCEH.\r\n<br><br>\r\n									<h5>You can register using this link: </h5> <a href=\"http://bit.ly/TROUBLESHOOT\">http://bit.ly/TROUBLESHOOT</a></p>\r\n                                    \r\n                            <a class=\"btn btn-primary\" tabindex=\"0\" data-placement=\"bottom\" role=\"button\" data-toggle=\"popover\" data-trigger=\"focus\" title=\"Round live\" data-content=\"We are Live\" href=\"http://bit.ly/TROUBLESHOOT\">Register Here</a>\r\n<br>\r\n<br>\r\nFor further queries, contact the numbers given below:<br>\r\nShreya Mylaram -85008 98761<br>\r\nTharaChand - 99598 45156<br>\r\nSuchithra V-79957 27263<br>\r\nNamratha K-90308 51289<br>\r\nSadhana NCSR-98662 58035<br>\r\n                        </div>\r\n                    </div>\r\n                    <br>\r\n                    <br>\r\n            </div>\r\n        </div>\r\n    </div>\r\n        \r\n    <!-- Optional JavaScript -->\r\n    <!-- jQuery first, then Popper.js, then Bootstrap JS -->\r\n    <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>\r\n    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\" integrity=\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\" crossorigin=\"anonymous\"></script>\r\n    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script>\r\n    <!--Other css and scripts-->\r\n    <script src=\"main.js\"></script>\r\n</body>\r\n</html>'),
(3, 'BlindCode', '<!doctype html>\r\n<html lang=\"en\">\r\n  <head>\r\n    <!-- Required meta tags -->\r\n    <meta charset=\"utf-8\">\r\n    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">\r\n\r\n    <!-- Bootstrap CSS -->\r\n    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">\r\n    \r\n    <title>BLIND CODE</title>\r\n  </head>\r\n  <body>\r\n    <nav class=\"navbar sticky-top navbar-expand-lg navbar-light bg-light\">\r\n        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarTogglerDemo01\" aria-controls=\"navbarTogglerDemo01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">\r\n            <span class=\"navbar-toggler-icon\"></span>\r\n        </button>\r\n        <div class=\"collapse navbar-collapse\" id=\"navbarTogglerDemo01\">\r\n            <a class=\"navbar-brand\" href=\"#\">BlindCode | 2k19</a>\r\n            <ul class=\"navbar-nav mr-auto mt-2 mt-lg-0\">\r\n                <li class=\"nav-item active\">\r\n                    <a class=\"nav-link\" href=\"#\">Home <span class=\"sr-only\">(current)</span></a>\r\n                </li>\r\n            </ul>\r\n        </div>\r\n    </nav>\r\n    <div class=\"jumbotron \">\r\n        <div class=\"container\">\r\n            <img class=\"col-md-12 col-sm-12 col-lg-12 col-xs-12\" src=\"http://www.csequest.com/img/event/bc.png\">\r\n        </div>\r\n    </div>\r\n    <div class=\"container text-center\" id=\"uis\">\r\n        <div class=\"row main\">\r\n            <div class=\"col-md-12 col-lg-12 col-xs-12 col-sm-12\">\r\n            <div class=\"card\" style=\"background-color: #f0f0f0;\">\r\n                        <div class=\"card-body\">\r\n                            <h3 class=\"card-title\">BLIND CODE</h3><p class=\"card-text\" style=\"text-align: left;\"><h5>You don\'t need eyes to code ,You need VISION!</h5><br>\r\n                            		\r\n									Hello coders,\r\nGot good hands on Coding? Ever thought of \r\nwriting the code with MONITOR OFF ?Sounds challenging?\r\nThen you are at the right place! BLIND CODE is an event conducted as a part of QUEST 2K19 , a National Level Technical Symposium conducted by the Department of Computer Science and Engineering, JNTUH college of engineering, Hyderabad.\r\n\r\n Beware! You can\'t see the bugs you produce .<br><br>\r\n<h4>Round 1:</h4>\r\n1. A simple code with syntax error will be given on paper.<br>\r\n2. Participants have to   debug it and type the code with MONITOR SWITCHED OFF.<br>  \r\n3.The participants with lowest time and minimum errors will be qualified for next round. <br>\r\n<br>\r\n\r\n<br><br>\r\n<h4>Round 2 :</h4>\r\n1. A problem statement will be given.<br>\r\n2. Participants have to write the code in \r\nTurbo-C++ with MONITOR SWITCHED OFF.<br>\r\n3. Winners will be announced based on the results of compilation and execution.<br>\r\n<br><br>\r\n<b>In case of TIE : </b>TIE breaking problem statement will be given and time will be monitored.\r\n<br>\r\n<b>Venue : </b>JNTUH College of Engineering.\r\n<br>\r\n<b>Date :</b> March 13th\r\n<br>\r\n<b>Rewards :</b>\r\nTop 3 performers will win exciting GIFTS, on the QUEST day.<br>\r\n\r\nAll the participants will be awarded participation certificate from JNTUHCEH.\r\n<br><br>\r\n									<h5>You can register using this link: </h5> <a href=\"http://bit.ly/BLINDCODE \">http://bit.ly/BLINDCODE </a></p>\r\n                                    \r\n                            <a class=\"btn btn-primary\" tabindex=\"0\" data-placement=\"bottom\" role=\"button\" data-toggle=\"popover\" data-trigger=\"focus\" title=\"Round live\" data-content=\"We are Live\" href=\"http://bit.ly/BLINDCODE \">Register Here</a>\r\n<br>\r\n<br>\r\nFor further queries, contact the numbers given below:<br>\r\nShravani - 7989683722<br>\r\nSowmya - 9502741899<br>\r\nRishi - 9030284829<br>\r\nSuraj - 9470248994<br>\r\nChiranjeevi - 9505897044<br>                       \r\n</div>\r\n                    </div>\r\n                    <br>\r\n                    <br>\r\n            </div>\r\n        </div>\r\n    </div>\r\n        \r\n    <!-- Optional JavaScript -->\r\n    <!-- jQuery first, then Popper.js, then Bootstrap JS -->\r\n    <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>\r\n    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\" integrity=\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\" crossorigin=\"anonymous\"></script>\r\n    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script>\r\n    <!--Other css and scripts-->\r\n    <script src=\"main.js\"></script>\r\n</body>\r\n</html>'),
(4, 'Cryptic Enigma', '<!doctype html>\r\n<html lang=\"en\">\r\n  <head>\r\n    <!-- Required meta tags -->\r\n    <meta charset=\"utf-8\">\r\n    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">\r\n\r\n    <!-- Bootstrap CSS -->\r\n    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">\r\n    \r\n    <title>CrypticEnigma</title>\r\n  </head>\r\n  <body>\r\n    <nav class=\"navbar sticky-top navbar-expand-lg navbar-light bg-light\">\r\n        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarTogglerDemo01\" aria-controls=\"navbarTogglerDemo01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">\r\n            <span class=\"navbar-toggler-icon\"></span>\r\n        </button>\r\n        <div class=\"collapse navbar-collapse\" id=\"navbarTogglerDemo01\">\r\n            <a class=\"navbar-brand\" href=\"#\">CRYPTIC ENIGMA | 2k19</a>\r\n            <ul class=\"navbar-nav mr-auto mt-2 mt-lg-0\">\r\n                <li class=\"nav-item active\">\r\n                    <a class=\"nav-link\" href=\"#\">Home <span class=\"sr-only\">(current)</span></a>\r\n                </li>\r\n            </ul>\r\n        </div>\r\n    </nav>\r\n    <div class=\"jumbotron \">\r\n        <div class=\"container\">\r\n            <img class=\"col-md-12 col-sm-12 col-lg-12 col-xs-12\" src=\"Inverso.png\">\r\n        </div>\r\n    </div>\r\n    <div class=\"container text-center\" id=\"uis\">\r\n        <div class=\"row main\">\r\n            <div class=\"col-md-12 col-lg-12 col-xs-12 col-sm-12\">\r\n                <div class=\"card\" style=\"background-color: #f0f0f0;\">\r\n                    <div class=\"card-body\">\r\n                        <h5 class=\"card-title\">CRYPTIC ENIGMA</h5>\r\n                        <p class=\"card-text\" style=\"text-align: left;\">\r\nHello data freaks,\r\nEver wondered how banks store your transactions , facebook stores your details , whatâ€™s app your messages and youtube your history??<br><br>\r\nAnything is possible in todayâ€™s digital world.\r\nIt is done using database where billions of terabytes of data is stored in it.<br>\r\nDo you know how the data is inserted ,retrieved and updated in a database????Well, here is an opportunity to unleash your expertise and exhibit your mastery.<br><br>\r\n*QUERY MAESTRO - RETRIEVE YOURSELF* is an event conducted as a part  of QUEST 2k19 which is a National Level Technical symposium conducted by Computer Science and Engineering department, JNTUH College of Engineering, Hyderabad.\r\n                        </p> \r\n                    </div>\r\n                </div>\r\n                <br>\r\n                <br>\r\n                <div class=\"card\" style=\"background-color: #f0f0f0;\">\r\n                    <div class=\"card-body\">\r\n                        <h5 class=\"card-title\">ROUND 1</h5>\r\n                        <p class=\"card-text\" style=\"text-align: left;\">\r\nThis is a online test ,a maximum of *3 MCQ* Test sets, with *20* Questions in each set, which will decide the qualifiers to Round -2.You can participate in this online test from *Feb 26th* to *March 12th* according to your convenience. Link for the test will be forwarded once you have registered for the event.<br>\r\nNOTE:ROUND 1 has no Registration Fee.\r\n                        </p>     \r\n                    </div>\r\n                </div>\r\n\r\n\r\n <br>\r\n                <br>\r\n                <div class=\"card\" style=\"background-color: #f0f0f0;\">\r\n                    <div class=\"card-body\">\r\n                        <h5 class=\"card-title\">ROUND 2</h5>\r\n                        <p class=\"card-text\" style=\"text-align: left;\">\r\nThis round will be conducted in JNTUH college on *March 13th* .All you have to do is to write queries to retrieve the required data. Those who qualify in round 2 will be eligible for round 3.<br>Fee : 199/- Only for ROUND 2.(including lunch)<br>\r\nNOTE:Only the participants qualified in Round 1 are Eligible for Round 2.<br>\r\nLanguages : SQL/ORACLE<br>\r\nAll the participants from Round 2 will be awarded participation certificate\r\nfrom JNTUH-CEH.\r\n                        </p>       \r\n                    </div>\r\n                </div>\r\n\r\n\r\n\r\n\r\n\r\n\r\n                <br>\r\n                <br>\r\n                <div class=\"card\" style=\"background-color: #f0f0f0;\">\r\n                    <div class=\"card-body\">\r\n                        <h5 class=\"card-title\">ROUND 3</h5>\r\n                        <p class=\"card-text\" style=\"text-align: left;\">\r\nThis is the final round where the top contests of the second round compete to be the query maestro.The one who retrieves the data in the least time will be declared as the winner.This will be on *March 14th 2019.*<br>\r\nNOTE:Only the participants qualified in Round 2 are Eligible for Round 3.<br>\r\nLanguages : SQL/ORACLE<br>\r\nTop 3 performers will win exciting GIFTS, on the QUEST day.\r\n                        </p>\r\n                    </div>\r\n                </div>\r\n<br>\r\n<br>\r\n<div class=\"card\" style=\"background-color: #f0f0f0;\">\r\n                    <div class=\"card-body\">\r\n                        <h5 class=\"card-title\">INCASE of <b>Queries Contact</b> us At:</h5>\r\n                 <p class=\"card-text\" style=\"text-align: left;\">\r\nT.Likhitha -8186815176<br>\r\nK.Akshara - 7989282937<br>\r\nV.Kanakalatha-6305596747<br>\r\nBNVRS Sri Harsha-8374322837<br>\r\nG Akhil - 9701308872\r\n                        </p>\r\n                    </div>\r\n                </div>\r\n            </div>\r\n        </div>\r\n    </div>\r\n\r\n        <br>\r\n<br>\r\n<br>\r\n    <!-- Optional JavaScript -->\r\n    <!-- jQuery first, then Popper.js, then Bootstrap JS -->\r\n    <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>\r\n    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\" integrity=\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\" crossorigin=\"anonymous\"></script>\r\n    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script>\r\n    <!--Other css and scripts-->\r\n    <script src=\"main.js\"></script>\r\n</body>\r\n</html>'),
(5, 'Code King', '<!doctype html>\r\n<html lang=\"en\">\r\n  <head>\r\n    <!-- Required meta tags -->\r\n    <meta charset=\"utf-8\">\r\n    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">\r\n\r\n    <!-- Bootstrap CSS -->\r\n    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">\r\n    \r\n    <title>CodeKing</title>\r\n  </head>\r\n  <body>\r\n    <nav class=\"navbar sticky-top navbar-expand-lg navbar-light bg-light\">\r\n        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarTogglerDemo01\" aria-controls=\"navbarTogglerDemo01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">\r\n            <span class=\"navbar-toggler-icon\"></span>\r\n        </button>\r\n        <div class=\"collapse navbar-collapse\" id=\"navbarTogglerDemo01\">\r\n            <a class=\"navbar-brand\" href=\"#\">CODE KING | 2k19</a>\r\n            <ul class=\"navbar-nav mr-auto mt-2 mt-lg-0\">\r\n                <li class=\"nav-item active\">\r\n                    <a class=\"nav-link\" href=\"#\">Home <span class=\"sr-only\">(current)</span></a>\r\n                </li>\r\n            </ul>\r\n        </div>\r\n    </nav>\r\n    <div class=\"jumbotron \">\r\n        <div class=\"container\">\r\n            <img class=\"col-md-12 col-sm-12 col-lg-12 col-xs-12\" src=\"../img/event/CodeKING.jpg\">\r\n        </div>\r\n    </div>\r\n    <div class=\"container text-center\" id=\"uis\">\r\n        <div class=\"row main\">\r\n            <div class=\"col-md-12 col-lg-12 col-xs-12 col-sm-12\">\r\n                <div class=\"card\" style=\"background-color: #f0f0f0;\">\r\n                    <div class=\"card-body\">\r\n                        <h5 class=\"card-title\">CODE KING</h5>\r\n                        <p class=\"card-text\" style=\"text-align: left;\">\r\nThe second edition of *CODEKING* is back.CODEKING,  a National Level Coding contest conducted  as a part of *QUEST 2K19* , a national level technical symposium by Department of Computer Science and Engineering JNTUHCEH . Get ready Guys...Prove your Mettle.Details of this Event are below.\r\n                        </p> \r\n                    </div>\r\n                </div>\r\n                <br>\r\n                <br>\r\n                <div class=\"card\" style=\"background-color: #f0f0f0;\">\r\n                    <div class=\"card-body\">\r\n                        <h5 class=\"card-title\">ROUND 1</h5>\r\n                        <p class=\"card-text\" style=\"text-align: left;\">\r\nThis is all about the CODEKING OF THE WEEK,a maximum of <b>5 MCQ</b> Test sets, with <b>20</b> Questions in each set, which will decide the qualifiers to Round -2.Participate Online on HackerEarth from <b>Feb 20th</b> to <b>March 12th</b> according to your convenience. Link for the test will be forwarded once you have registered for the event.\r\nNOTE:ROUND 1 has no Registration Fee.(is an online test in hackerearth )\r\n                        </p>     \r\n                    </div>\r\n                </div>\r\n\r\n\r\n <br>\r\n                <br>\r\n                <div class=\"card\" style=\"background-color: #f0f0f0;\">\r\n                    <div class=\"card-body\">\r\n                        <h5 class=\"card-title\">ROUND 2</h5>\r\n                        <p class=\"card-text\" style=\"text-align: left;\">\r\nThis Round is all about your Coding Skills.The optimised Code wins.So be Precise and Accurate with your code to participate further in ROUND 3. This will be on *March 15th 2019*\r\n<br>\r\n<br>\r\nNOTE:Only the participants qualified in Round 1 are Eligible\r\n                        </p>       \r\n                    </div>\r\n                </div>\r\n\r\n\r\n\r\n\r\n\r\n\r\n                <br>\r\n                <br>\r\n                <div class=\"card\" style=\"background-color: #f0f0f0;\">\r\n                    <div class=\"card-body\">\r\n                        <h5 class=\"card-title\">ROUND 3</h5>\r\n                        <p class=\"card-text\" style=\"text-align: left;\">\r\nThis Round gives you the experience of the exact Programming Questions posed.This will be on *March 16th 2019*\r\n<br>\r\nLanguages : C/C++/Java\r\n<br>\r\n<br>\r\nOn the TOP: Top 3 Coders will win exciting GIFTS, on the QUEST day.\r\n<br>\r\n<br>\r\nNote :\r\nAll the participants from Round 2 will be awarded participation certificate from JNTUHCEH.\r\n<br>\r\n<br>\r\nRound 2 and Round 3 will be conducted in JNTUH college .\r\n<br>\r\n<br>\r\nRegister hereðŸ‘‡\r\n<a href=\"https://bit.ly/2SOWnQV\">https://bit.ly/2SOWnQV</a>\r\n                        </p>\r\n                    </div>\r\n                </div>\r\n<br>\r\n<br>\r\n<div class=\"card\" style=\"background-color: #f0f0f0;\">\r\n                    <div class=\"card-body\">\r\n                        <h5 class=\"card-title\">INCASE of <b>Queries Contact</b> us At:</h5>\r\n                 <p class=\"card-text\" style=\"text-align: left;\">\r\nAbhinav -8247687437<br>\r\nHarsha  -8332860149<br>\r\nVamshi  -9700115416<br>\r\nYashaswi-7661020999<br>\r\nSwetha  -8790650262\r\n                        </p>\r\n                    </div>\r\n                </div>\r\n            </div>\r\n        </div>\r\n    </div>\r\n\r\n        <br>\r\n<br>\r\n<br>\r\n    <!-- Optional JavaScript -->\r\n    <!-- jQuery first, then Popper.js, then Bootstrap JS -->\r\n    <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>\r\n    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\" integrity=\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\" crossorigin=\"anonymous\"></script>\r\n    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script>\r\n    <!--Other css and scripts-->\r\n    <script src=\"main.js\"></script>\r\n</body>\r\n</html>');

-- --------------------------------------------------------

--
-- Table structure for table `hackathon`
--

CREATE TABLE `hackathon` (
  `url` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `brief` text NOT NULL,
  `desp` text NOT NULL,
  `price` int(11) NOT NULL,
  `date` date NOT NULL,
  `coords` text NOT NULL,
  `paytm` varchar(255) NOT NULL,
  `phonepay` varchar(255) NOT NULL,
  `tez` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hackathon`
--

INSERT INTO `hackathon` (`url`, `title`, `brief`, `desp`, `price`, `date`, `coords`, `paytm`, `phonepay`, `tez`) VALUES
('../img/hackathon/h1.jpg', 'Hackathon Test', 'Click to know more', 'Detailed description of the hackathon\r\nlorem ipsum\r\ndolor', 1000, '2019-03-12', 'c1: 45678907564\r\nc2:234567875', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `registrations`
--

CREATE TABLE `registrations` (
  `user` varchar(255) NOT NULL,
  `event` varchar(255) NOT NULL,
  `paid` int(11) NOT NULL DEFAULT '0',
  `title` varchar(255) NOT NULL,
  `link` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `round`
--

CREATE TABLE `round` (
  `round` int(11) NOT NULL,
  `live` int(11) NOT NULL,
  `pre` int(2) NOT NULL,
  `desp` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `round`
--

INSERT INTO `round` (`round`, `live`, `pre`, `desp`) VALUES
(1, 0, 11, 'There will be 2 INVERSO style questions and 2 questions on coding skills in this test. Participate Online on HackerRank. Link for the test will be forwarded once you have registered for the event. There will be test conducted on March 2nd.No registration fee.'),
(2, 1, 12, 'There will be 2 INVERSO style questions and 2 questions on coding skills in this test. Participate Online on HackerRank. Link for the test will be forwarded once you have registered for the event. There will be test conducted on March 10th.No registration fee.'),
(3, 1, 0, 'This Round is all about your Analytical skills. Analyze the given input-output sequences and decode the logic behind it. Write a code snippet that will generate the corresponding input-output pattern. So be Precise and Accurate with your code to participate further in ROUND 2. Test will be conducted on March 13th 2019  <br><b>NOTE:</b><br>  1. This round will consist 3 INVERSO style questions along with a coding question <br>2. Only the participants qualified in preliminary are Eligible. <br>3. This is a team event. There can be 1-2 members in a team.<br>4.Languages:  C/C++/Java/Python'),
(4, 1, 0, 'This Round is all about your Analytical skills. Analyze the given input-output sequences and decode the logic behind it. Write a code snippet that will generate the corresponding input-output pattern. Test will be conducted on March 14th 2019  <br><b>NOTE:</b><br>  1. This round will consist 3 INVERSO style questions along with a coding question <br>2. Only the participants qualified in Round 1 are Eligible. <br>3. This is a team event. There can be 1-2 members in a team.<br>4.Languages:  C/C++/Java/Python<br><br><br>Top 2 Coders will win exciting GIFTS, on the QUEST day.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `email` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `college` varchar(1000) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`email`, `first_name`, `last_name`, `mobile`, `college`, `password`, `id`) VALUES
('abhaybhat784@gmail.com', 'Abhay', 'Bhat', 9704318136, 'JNTUH', 'a89e500efff2e799e26e14a3e50920b0', '16011A0501'),
('dev@questjntuh.com', 'Developer', 'Tester', 9999999999, 'JNTUH', '227edf7c86c02a44d17eec9aa5b30cd1', '16011A0500'),
('sahithi41199@gmail.com', 'L', ' sahithi', 7032804116, 'Jntuh', '68414479977771d65da23809cebba74b', 'sahithi41199@gmail.com '),
('rohangangarapu312@gmail.com', 'Rohan', 'Gangarapu', 7093743529, 'Jntuhceh', '4012649df58d1c06392f0f8efe00fa70', 'rohangangarapu312@gmail.com'),
('iammanoj0513@gmail.com', 'Manoj Kumar ', 'Julakanti', 9182461824, 'JNTUHCEH', '2237f358c2516b792d60b5e19457e76a', 'iammanoj0513@gmail.com'),
('mynenisp1703@gmail.com', 'Sai Pravallika', 'Myneni', 9121927567, 'Velagapudi Ramakrishna Siddhartha Engineering College', '1569d2ff4829bb766a5ec8ccfe4f7f46', '178W1A0536'),
('arshad2690@gmail.com', 'Arshad', 'Mohammed', 7842425788, 'MVSR ENGINEERING COLLEGE', '8d6aa659dd4fdcb0165b95c685875153', 'arshad2690@gmail.com'),
('mvsowmya24@gmail.com', 'VENKATA SOWMYA LAkSHMI', 'MADALA', 7780339298, 'Velagapudi Ramakrishna Siddhartha Engineering College', '20b65e9e10cbaf10b0a5b3fcee26604a', 'mvsowmya24@gmail.com'),
('chinthavasundara@gmail.com', 'Vasundhara', 'Chintha', 9182812152, 'Velagapudi Ramakrishna Engineering College', '4f1e75e677d9417c4136e59a2f544546', 'principal@vrsiddhartha.ac.in'),
('sowjanyagummadi2400@gmail.com', 'Sowjanya', 'Gummadi', 9182899589, 'Vr. Siddhartha', '2e6a2aaa03c3c9537f29f2a1628f5b7d', 'principal@vrsiddhatha.ac.in'),
('harshithamedara@gmail.com', 'Harshitha', 'Medara', 9398886876, 'Vr Siddhartha engineering college ', 'd03308e46a8450d98717c50dce979603', 'vrsiddhartha@gmail.com'),
('moinsoheb02@gmail.com', 'Soheb', 'Moin', 9701795383, 'VNR VJIET', '677642f0a8598cc78a27b002cd7cd6c5', 'moinsoheb02@gmail.com'),
('kamarthapuneekill142@gmail.com', 'Kamarthapu ', 'Nikhil', 8374787431, 'Vnr Vjiet', '874a615557757055fb62712d3b0d0609', 'nikhilkumar_k16@vnrvjiet.in'),
('kovidsunny@gmail.com', 'kovid', 'sunny', 9182247624, 'vnr', 'de64717ff4fc9b3f0bc879eb15f44723', 'kovidsunny@gmail.com'),
('venkateshsambana2000@gmail.com', 'venkatesh', 'sambana', 7036882492, 'VRSEC', '5353dabc327614956d037aa0df9b0159', 'vrsiddhartha.ac.in'),
('kvineelsai@gmail.com', 'Kommawar', 'Vineel sai', 8309092082, 'Vnr vignana jyoti institute of engineering and technology', '74ebc0eebf093426ddf4ef1e72ee33b5', 'vnrvjiet.ac.in'),
('r.keerthireddy74@gmail.com', 'keerthi', 'ramiredy', 9182685901, 'VNRVJIET', 'e552c3db75ed50ea16fe084db091f70e', '17071A0551'),
('jayasaipapolu@gmail.com', 'Jaya ', 'Sai', 8919449015, 'VR SIddartha Engineering college', 'b9631827471a4c95dfcd74d611032802', 'jayasaipapolu@gmail.com'),
('manohar.13loksai@gmail.com', 'Sikhakolli', 'Lok Sai Manohar', 8019714142, 'VRSEC', '4c530211af59cf59d8be872650b84b6a', '178w1a0553'),
('sf@gmail.com', 'sf', 'sf', 8989898989, 'sf', '60d31eb37595dd44584be5ef363283e3', 'sf@gmail.com'),
('bhanuprasad18@gmail.com', 'Bhanu Prasad', 'Meka', 9493377599, 'VR Siddhartha Engineering College', 'a0a2e1d957ecddb2c0ea78aadae61b5f', '178w1a0535'),
('sirivijaya33@gmail.com', 'siris', 'vijaya', 9676227744, 'Bhoj reddy engineering college for women', '7c6e77e01ec69c25adfb532b2032ba09', 'sirivijaya33@gmail.com'),
('syd.shafi16@gmail.com', 'syed', 'mohammed shafi', 8374504345, 'MRCE', 'fa4aa88eb9e5e385fe22d4a1644e3367', 'MRCE'),
('bsaidevika@gmail.com', 'Bestha', 'sai devika', 8106791591, 'mallareddy college of engineering', '9ee42f82790c6495daea6f68eec76d0b', 'bsaidevika@gmail.com'),
('krishna.mohan1619@gmail.com', 'Veerubhotla', 'Mohan', 8297181145, 'Anurag group of institutions', '88668d1537d01e732548a890080e0eb3', '16h61a05j0@cvsr.ac.in'),
('chilukurthisailikhith@gmail.com', 'SAI LIKHITH', 'Chilukurthi', 9618685034, 'MRCET', '9273bb6a68047d06fe51927ee95a402d', 'mrcetcse2004@gmail.com'),
('bhariprasad100@gmail.com', 'Jaya', 'Shankar', 9441342506, 'JNTUCEH', '089d5ca90527e18f01f31281d7e67768', '18011M2109'),
('abc@gmail.com', 'ansnas', 'dasda', 1234567892, 'JNTU', 'b24331b1a138cde62aa1f679164fc62f', 'abc@gmail.com'),
('yojithakondapalli1999@gmail.com', 'yojitha', 'kondapalli', 9182123412, 'vr siddhartha college of engineering', '125d60d2aa50a62fb10bcc31367c9148', ' hodce@vrsiddhartha.ac.in'),
('roshiniguttikonda01@gmail.com', 'Roshini', 'Guttikonda', 9182640131, 'VR Siddhartha Engineering college ', 'ae9ca7b03c6334bfd4432ff4a5d9fc3d', 'hodcse@vrsiddhatha.ac.in'),
('lankachandana9@gmail.com', 'Chandana', 'Lanka', 8309037873, 'VR Siddhartha Engineering college', '75c56b9772d0b090cae7a6771721b35f', 'hodcse @vrsiddhartha.ac.in '),
('sowmyavemula5987@gmail.com', 'Sowmya', 'Vemula', 9398422774, 'V.R.Siddartha Engineering college', 'f79a3eb241e5c2cf8f757d8322788dd5', 'hodcse@vrsiddartha.ac.in'),
('hytex91@gmail.com', 'ass', 'assass', 1212122112, '212112', 'd394660b8208393dad1f9905cbddcfdf', 'hytex91@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `workshop`
--

CREATE TABLE `workshop` (
  `url` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `brief` text NOT NULL,
  `desp` text NOT NULL,
  `price` int(11) NOT NULL,
  `date` date NOT NULL,
  `coords` text NOT NULL,
  `paytm` varchar(255) NOT NULL,
  `phonepay` varchar(255) NOT NULL,
  `tez` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `workshop`
--

INSERT INTO `workshop` (`url`, `title`, `brief`, `desp`, `price`, `date`, `coords`, `paytm`, `phonepay`, `tez`) VALUES
('../img/workshop/IoT.jpeg', 'IoT Workshop', 'Internet Of Things \r\n<br>\r\nby TCS', 'Connecting and communicating grows coordination and productivity of any work. Humans possess this ability but how about automated machines does the same ? One machine calling out to other saying \"Hey turn off the AC.The temp is going too cold out here\" or \" Close the doors, ring the alarm and call the police. There is a thief in here\". Admirable enough to dwell into the Technology behind this fantasy. \r\n<br>\r\nInternet of Things (IoT) brings objects closer to work in a cohesive environment together. \r\n<br>\r\nTo offer a hands on experience on this tech, Quest 2k19 ( National level technical symposium by dept of Computer Science and Engineering, JNTUHCEH) is organising a two-days hands on workshop on Internet of Things in association with Robokart on 20th and 21st of February 2019 at Seminar hall, Department of Computer Science and Engineering, JNTUHCEH.\r\n<br>\r\nFrom controlling motor devices to tinkering with WiFi, home automation with mobile to uploading real time data to cloud, we have got it all covered.<br>\r\nThe session will complete hands-on. IoT kits will be provided for training. Lunch included with fee for both the days.\r\n<br>\r\nFee: 1000/-\r\n<br>\r\nReserve your seats now with StuMagz before they are all gone \r\nhttps://www.stumagz.com/workshop-on-internet-of-things/\r\n<br>\r\nwww.csequest.com\r\nquest.cse@jntuh.ac.in', 1000, '2019-02-21', 'Akshay: +91 9177200822<br>\r\nRohit: +91 9100349793<br>\r\nHimaja: +91 8523823615<br>\r\nkousalya: +91 9618881191<br>\r\nSai Krupa: +91 9059341758 ', 'None', 'None', 'None');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`url`);

--
-- Indexes for table `event_index`
--
ALTER TABLE `event_index`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hackathon`
--
ALTER TABLE `hackathon`
  ADD PRIMARY KEY (`url`);

--
-- Indexes for table `registrations`
--
ALTER TABLE `registrations`
  ADD PRIMARY KEY (`user`,`event`);

--
-- Indexes for table `round`
--
ALTER TABLE `round`
  ADD PRIMARY KEY (`round`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mobile` (`mobile`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `workshop`
--
ALTER TABLE `workshop`
  ADD PRIMARY KEY (`url`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event_index`
--
ALTER TABLE `event_index`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
