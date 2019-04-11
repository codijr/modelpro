-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2019 at 05:47 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `modelpro`
--

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`client_id`, `name`, `email`, `phone_number`) VALUES
(1, 'Den Summerley', 'dsummerley0@edublogs.org', '1264737460'),
(2, 'Carmelle Keat', 'ckeat1@amazon.de', '2954953183'),
(3, 'Elfrida Mixer', 'emixer2@illinois.edu', '6001700974'),
(4, 'Leticia Dablin', 'ldablin3@admin.ch', '4667900706'),
(5, 'Bonnibelle Blasio', 'bblasio4@paypal.com', '7197505600'),
(6, 'Renato Escala', 'rescala5@epa.gov', '8904670139'),
(7, 'Indira Jacobson', 'ijacobson6@yolasite.com', '3697994276'),
(8, 'Hodge Comettoi', 'hcomettoi7@odnoklassniki.ru', '8984365012'),
(9, 'Donella Scholfield', 'dscholfield8@nasa.gov', '4282137785'),
(10, 'Kirby Blasio', 'kblasio9@creativecommons.org', '3062266342');

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`project_id`, `codename`, `code`, `start_date`, `end_date`, `status`, `client_id`, `description`, `scope`, `links`, `tags`) VALUES
(1, 'Overhold', '9759', '2019-08-11', '2020-04-28', 2, 8, 'In hac habitasse platea dictumst. Etiam faucibus cursus urna. Ut tellus.\n\nNulla ut erat id mauris vulputate elementum. Nullam varius. Nulla facilisi.\n\nCras non velit nec nisi vulputate nonummy. Maecenas tincidunt lacus at velit. Vivamus vel nulla eget eros elementum pellentesque.', 'Vision-oriented bandwidth-monitored workforce', 'https://etsy.com/vestibulum/vestibulum/ante/ipsum/primis/in/faucibus.html', 'Action|Comedy|Romance'),
(2, 'Solarbreeze', '1453', '2019-06-18', '2020-12-26', 0, 10, 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus vestibulum sagittis sapien. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.\n\nEtiam vel augue. Vestibulum rutrum rutrum neque. Aenean auctor gravida sem.\n\nPraesent id massa id nisl venenatis lacinia. Aenean sit amet justo. Morbi ut odio.', 'Synchronised bandwidth-monitored portal', 'https://twitter.com/velit/vivamus/vel.jsp', 'Documentary'),
(3, 'Subin', '8935', '2019-04-13', '2020-08-09', 0, 10, 'Aliquam quis turpis eget elit sodales scelerisque. Mauris sit amet eros. Suspendisse accumsan tortor quis turpis.', 'Proactive exuding knowledge user', 'https://aol.com/ullamcorper/augue/a/suscipit/nulla/elit/ac.png', 'Action|Crime|Thriller'),
(4, 'Opela', '4203', '2019-12-16', '2020-07-05', 1, 4, 'Etiam vel augue. Vestibulum rutrum rutrum neque. Aenean auctor gravida sem.\n\nPraesent id massa id nisl venenatis lacinia. Aenean sit amet justo. Morbi ut odio.\n\nCras mi pede, malesuada in, imperdiet et, commodo vulputate, justo. In blandit ultrices enim. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'Innovative eco-centric attitude', 'http://drupal.org/nec/euismod/scelerisque/quam.jpg', 'Drama'),
(5, 'Fix San', '1457', '2019-05-18', '2020-06-19', 1, 3, 'Aenean fermentum. Donec ut mauris eget massa tempor convallis. Nulla neque libero, convallis eget, eleifend luctus, ultricies eu, nibh.\n\nQuisque id justo sit amet sapien dignissim vestibulum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla dapibus dolor vel est. Donec odio justo, sollicitudin ut, suscipit a, feugiat et, eros.\n\nVestibulum ac est lacinia nisi venenatis tristique. Fusce congue, diam id ornare imperdiet, sapien urna pretium nisl, ut volutpat sapien arcu sed augue. Aliquam erat volutpat.', 'Configurable asynchronous alliance', 'http://sogou.com/aliquam/augue/quam/sollicitudin/vitae/consectetuer.json', 'Drama'),
(6, 'Pannier', '3124', '2019-06-15', '2020-11-05', 2, 5, 'Etiam vel augue. Vestibulum rutrum rutrum neque. Aenean auctor gravida sem.\n\nPraesent id massa id nisl venenatis lacinia. Aenean sit amet justo. Morbi ut odio.', 'Upgradable 4th generation matrix', 'http://sphinn.com/sed/sagittis/nam/congue.png', 'Comedy'),
(7, 'Y-find', '1921', '2019-07-27', '2020-12-07', 0, 5, 'Maecenas tristique, est et tempus semper, est quam pharetra magna, ac consequat metus sapien ut nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Mauris viverra diam vitae quam. Suspendisse potenti.', 'User-friendly even-keeled capacity', 'https://statcounter.com/nullam/sit/amet/turpis.aspx', 'Horror'),
(8, 'Cardguard', '7837', '2019-07-25', '2020-01-10', 0, 5, 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus vestibulum sagittis sapien. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.\n\nEtiam vel augue. Vestibulum rutrum rutrum neque. Aenean auctor gravida sem.\n\nPraesent id massa id nisl venenatis lacinia. Aenean sit amet justo. Morbi ut odio.', 'Triple-buffered reciprocal knowledge base', 'https://comsenz.com/dapibus/dolor/vel/est/donec/odio/justo.png', 'Thriller'),
(9, 'Redhold', '5402', '2019-12-09', '2020-04-06', 1, 8, 'Mauris enim leo, rhoncus sed, vestibulum sit amet, cursus id, turpis. Integer aliquet, massa id lobortis convallis, tortor risus dapibus augue, vel accumsan tellus nisi eu orci. Mauris lacinia sapien quis libero.', 'Compatible coherent pricing structure', 'https://multiply.com/in/hac/habitasse.aspx', 'Drama'),
(10, 'Job', '1989', '2019-05-21', '2020-10-31', 2, 4, 'Proin interdum mauris non ligula pellentesque ultrices. Phasellus id sapien in sapien iaculis congue. Vivamus metus arcu, adipiscing molestie, hendrerit at, vulputate vitae, nisl.\n\nAenean lectus. Pellentesque eget nunc. Donec quis orci eget orci vehicula condimentum.\n\nCurabitur in libero ut massa volutpat convallis. Morbi odio odio, elementum eu, interdum eu, tincidunt in, leo. Maecenas pulvinar lobortis est.', 'Team-oriented dedicated portal', 'http://vistaprint.com/nibh/ligula/nec/sem/duis.jpg', 'Adventure|Drama|Fantasy|Musical|Romance'),
(11, 'Sonsing', '5418', '2019-06-23', '2020-10-04', 1, 4, 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus vestibulum sagittis sapien. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.', 'Front-line bifurcated knowledge user', 'http://eventbrite.com/sagittis/dui/vel/nisl/duis.jsp', 'Documentary'),
(12, 'Bytecard', '7817', '2019-10-29', '2020-11-23', 2, 8, 'Morbi non lectus. Aliquam sit amet diam in magna bibendum imperdiet. Nullam orci pede, venenatis non, sodales sed, tincidunt eu, felis.\n\nFusce posuere felis sed lacus. Morbi sem mauris, laoreet ut, rhoncus aliquet, pulvinar sed, nisl. Nunc rhoncus dui vel sem.', 'Future-proofed optimizing data-warehouse', 'https://clickbank.net/nonummy/maecenas/tincidunt/lacus/at/velit.aspx', 'Drama|Thriller'),
(13, 'Span', '7453', '2019-06-21', '2020-09-21', 0, 2, 'Aenean fermentum. Donec ut mauris eget massa tempor convallis. Nulla neque libero, convallis eget, eleifend luctus, ultricies eu, nibh.', 'Extended regional concept', 'http://washingtonpost.com/quam/pede/lobortis/ligula/sit.jsp', '(no genres listed)'),
(14, 'Tampflex', '1689', '2019-03-18', '2020-05-16', 1, 4, 'In hac habitasse platea dictumst. Morbi vestibulum, velit id pretium iaculis, diam erat fermentum justo, nec condimentum neque sapien placerat ante. Nulla justo.\n\nAliquam quis turpis eget elit sodales scelerisque. Mauris sit amet eros. Suspendisse accumsan tortor quis turpis.', 'Universal attitude-oriented concept', 'http://ucoz.ru/nullam/orci/pede/venenatis/non/sodales.jsp', 'Horror|Thriller'),
(15, 'Tampflex', '7513', '2019-06-26', '2020-09-14', 2, 4, 'Praesent id massa id nisl venenatis lacinia. Aenean sit amet justo. Morbi ut odio.\n\nCras mi pede, malesuada in, imperdiet et, commodo vulputate, justo. In blandit ultrices enim. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'Self-enabling bandwidth-monitored neural-net', 'http://japanpost.jp/sapien/placerat/ante/nulla.js', 'Drama|Romance'),
(16, 'Cardguard', '4777', '2019-07-03', '2020-11-13', 2, 5, 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus vestibulum sagittis sapien. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.', 'Cloned regional policy', 'http://usatoday.com/quis/augue/luctus.jsp', 'Comedy|Sci-Fi'),
(17, 'Bamity', '1189', '2019-08-22', '2020-06-25', 1, 5, 'Etiam vel augue. Vestibulum rutrum rutrum neque. Aenean auctor gravida sem.\n\nPraesent id massa id nisl venenatis lacinia. Aenean sit amet justo. Morbi ut odio.', 'Decentralized local definition', 'http://gov.uk/pulvinar/sed/nisl/nunc/rhoncus.json', 'Comedy'),
(18, 'Latlux', '1673', '2019-06-21', '2020-06-07', 1, 9, 'Pellentesque at nulla. Suspendisse potenti. Cras in purus eu magna vulputate luctus.\n\nCum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus vestibulum sagittis sapien. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.\n\nEtiam vel augue. Vestibulum rutrum rutrum neque. Aenean auctor gravida sem.', 'Secured secondary pricing structure', 'http://smh.com.au/ut/tellus/nulla/ut/erat.js', 'Comedy');

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `admin_level`, `name`, `email`, `phone_number`, `job_title`, `entrance_semester`) VALUES
(1, 'Denny', 'eyb3yW6Q6', 3, 'Denny Richmont', 'drichmont0@plala.or.jp', '9497395190', 'Engineer III', '2016.1'),
(2, 'Renard', 'h7MZesTJqMew', 3, 'Renard O\'Hern', 'rohern1@go.com', '1355028039', 'Help Desk Technician', '2016.2'),
(3, 'Tamar', 'ShZOBVzmC', 3, 'Tamar Odger', 'todger2@reuters.com', '9176540804', 'Senior Cost Accountant', '2016.2'),
(4, 'Alisa', 'sp1jHVm', 2, 'Alisa Spaldin', 'aspaldin3@va.gov', '3769794681', 'Account Representative I', '2017.2'),
(5, 'Robbyn', 'Wp9phpye1', 1, 'Robbyn Druce', 'rdruce4@china.com.cn', '6673260886', 'Occupational Therapist', '2018.1'),
(6, 'Avery', 'sIVaZjWlrPd', 2, 'Avery Bowgen', 'abowgen5@drupal.org', '8826119521', 'Design Engineer', '2018.1'),
(7, 'Marilee', '64ZQbaX', 1, 'Marilee Mitchard', 'mmitchard6@flickr.com', '6877798577', 'Account Coordinator', '2016.1'),
(8, 'Lorraine', '2WEghrT6', 2, 'Lorraine Rengger', 'lrengger7@springer.com', '1823431837', 'Chemical Engineer', '2017.1'),
(9, 'Kesley', '5HHRbse', 2, 'Kesley Paolazzi', 'kpaolazzi8@businessweek.com', '7467634511', 'Nuclear Power Engineer', '2017.2'),
(10, 'Betta', 'gQcmifHhQ', 1, 'Betta Shuker', 'bshuker9@rambler.ru', '6264041952', 'Cost Accountant', '2016.1'),
(11, 'Moselle', 'WRwMUFkLDVQw', 2, 'Moselle Skeats', 'mskeatsa@archive.org', '2126971045', 'Product Engineer', '2016.2'),
(12, 'Dewain', 'g9G1BvX0K6e', 2, 'Dewain Trussler', 'dtrusslerb@zdnet.com', '7981710338', 'Senior Sales Associate', '2016.1'),
(13, 'Sven', 'CoqBYoiU3Nj', 2, 'Sven Garner', 'sgarnerc@discovery.com', '5996182549', 'Budget/Accounting Analyst I', '2016.2'),
(14, 'Tann', 'K4LjvlsO0UO', 1, 'Tann Watkinson', 'twatkinsond@yellowpages.com', '1805572931', 'Human Resources Assistant IV', '2018.1'),
(15, 'Clevey', 'Gz4bJzvw', 2, 'Clevey Bendare', 'cbendaree@va.gov', '2056793021', 'Director of Sales', '2017.1'),
(16, 'Rowe', 'JWnkhprcqi', 2, 'Rowe Drohane', 'rdrohanef@studiopress.com', '1354237150', 'Environmental Tech', '2016.1'),
(17, 'Lemmie', '6JjpTF', 2, 'Lemmie Gibbieson', 'lgibbiesong@imageshack.us', '6056209999', 'Teacher', '2016.1'),
(18, 'Allan', 'S5qaOFJNirK', 2, 'Allan Sewter', 'asewterh@indiatimes.com', '6057987427', 'Occupational Therapist', '2016.2'),
(19, 'Kathy', '4lmqfDxB', 2, 'Kathy Braban', 'kbrabani@mtv.com', '3869513020', 'Research Nurse', '2016.2'),
(20, 'Fleming', 'o4t7RfsmW', 1, 'Fleming Pitway', 'fpitwayj@4shared.com', '8133552502', 'Junior Executive', '2017.2');

--
-- Dumping data for table `users_in_project`
--

INSERT INTO `users_in_project` (`project_id`, `user_id`, `position`) VALUES
(1, 18, 'Geological Engineer'),
(3, 4, 'Senior Editor'),
(4, 15, 'Senior Financial Analyst'),
(4, 16, 'Chemical Engineer'),
(5, 13, 'Web Developer II'),
(5, 15, 'Editor'),
(5, 19, 'Budget/Accounting Analyst II'),
(6, 3, 'Senior Quality Engineer'),
(8, 6, 'GIS Technical Architect'),
(8, 17, 'Research Nurse'),
(9, 9, 'Budget/Accounting Analyst II'),
(11, 9, 'Senior Editor'),
(11, 18, 'Teacher'),
(12, 20, 'Assistant Media Planner'),
(14, 3, 'VP Accounting'),
(15, 6, 'Account Representative II'),
(15, 13, 'Business Systems Development Analyst'),
(16, 16, 'Community Outreach Specialist'),
(18, 6, 'Structural Engineer'),
(18, 10, 'Senior Financial Analyst');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
