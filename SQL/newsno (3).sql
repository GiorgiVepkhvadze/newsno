-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2020 at 08:48 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newsno`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(11) NOT NULL,
  `blog_title_ka` text NOT NULL,
  `blog_title_en` text NOT NULL,
  `blog_title_ru` text NOT NULL,
  `blog_text_ka` text NOT NULL,
  `blog_text_en` text NOT NULL,
  `blog_text_ru` text NOT NULL,
  `blog_main_pic` text DEFAULT NULL,
  `blog_detail_pic` text DEFAULT NULL,
  `blog_time` text NOT NULL,
  `blog_readed` int(111) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blog_id`, `blog_title_ka`, `blog_title_en`, `blog_title_ru`, `blog_text_ka`, `blog_text_en`, `blog_text_ru`, `blog_main_pic`, `blog_detail_pic`, `blog_time`, `blog_readed`) VALUES
(7, 'სათაური ქართულად', 'სათაური ინგლისურად', 'სათაური რუსულად', '<p>13 ივნისიდან, ყოველ შაბათ-კვირას &bdquo;ტელესკოლა&rdquo; მოსწავლეებს ახალ შესაძლებლობებს სთავაზობს. საქართველოს განათლების მეცნიერებ...</p>', '<p>13 ივნისიდან, ყოველ შაბათ-კვირას &bdquo;ტელესკოლა&rdquo; მოსწავლეებს ახალ შესაძლებლობებს სთავაზობს. საქართველოს განათლების მეცნიერებ...</p>', '<p>13 ივნისიდან, ყოველ შაბათ-კვირას &bdquo;ტელესკოლა&rdquo; მოსწავლეებს ახალ შესაძლებლობებს სთავაზობს. საქართველოს განათლების მეცნიერებ...</p>', '1592742059eksport_header.png', '1592742059eksport_header.png', '2020-06-21 12:20:59', 0),
(11, 'სათაური ქართულად', 'სათაური ინგლისურად', 'სათაური რუსულად', '<p>13 ივნისიდან, ყოველ შაბათ-კვირას &bdquo;ტელესკოლა&rdquo; მოსწავლეებს ახალ შესაძლებლობებს სთავაზობს. საქართველოს განათლების მეცნიერებ...</p>', '<p>13 ივნისიდან, ყოველ შაბათ-კვირას &bdquo;ტელესკოლა&rdquo; მოსწავლეებს ახალ შესაძლებლობებს სთავაზობს. საქართველოს განათლების მეცნიერებ...</p>', '<p>13 ივნისიდან, ყოველ შაბათ-კვირას &bdquo;ტელესკოლა&rdquo; მოსწავლეებს ახალ შესაძლებლობებს სთავაზობს. საქართველოს განათლების მეცნიერებ...</p>', '1592741956eksport_header.png', '1592741956eksport_header.png', '2020-06-21 12:19:15', 0);

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `company_id` int(111) NOT NULL,
  `company_header_ka` longtext NOT NULL,
  `company_header_en` longtext NOT NULL,
  `company_header_ru` longtext NOT NULL,
  `company_header_image` varchar(255) NOT NULL,
  `company_sveti_pirveli_ka` longtext NOT NULL,
  `company_sveti_pirveli_en` longtext NOT NULL,
  `company_sveti_pirveli_ru` longtext NOT NULL,
  `company_sveti_meore_ka` longtext NOT NULL,
  `company_sveti_meore_en` longtext NOT NULL,
  `company_sveti_meore_ru` longtext NOT NULL,
  `company_mizani_ka` longtext NOT NULL,
  `company_mizani_en` longtext NOT NULL,
  `company_mizani_ru` longtext NOT NULL,
  `company_sawarmo_piveli_ka` longtext NOT NULL,
  `company_sawarmo_piveli_en` longtext NOT NULL,
  `company_sawarmo_piveli_ru` longtext NOT NULL,
  `company_sawarmo_meore_ka` longtext NOT NULL,
  `company_sawarmo_meore_ru` longtext NOT NULL,
  `company_sawarmo_meore_en` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`company_id`, `company_header_ka`, `company_header_en`, `company_header_ru`, `company_header_image`, `company_sveti_pirveli_ka`, `company_sveti_pirveli_en`, `company_sveti_pirveli_ru`, `company_sveti_meore_ka`, `company_sveti_meore_en`, `company_sveti_meore_ru`, `company_mizani_ka`, `company_mizani_en`, `company_mizani_ru`, `company_sawarmo_piveli_ka`, `company_sawarmo_piveli_en`, `company_sawarmo_piveli_ru`, `company_sawarmo_meore_ka`, `company_sawarmo_meore_ru`, `company_sawarmo_meore_en`) VALUES
(1, '<p>კომპანია &rdquo;აქვა გეო&rdquo;-ს მიზანია უნიკალური ბუნებრივი თვისებების მქონე ქართული წყალი წარმოების მაღალი ტექნოლოგიების გამოყენებით უცვლელად მიიტანოს მომხმარებლამდე.<br />\r\n<br />\r\nკომპანია მიზანად ისახავს მაღალი ხარისხის ქართული, უნიკალური, არაგაზირებული, მინერალური წყლის წარმოება-ჩამოსხმას, რეალიზაციასა და პოპულარიზაციას, როგორც ადგილობრივ, ასევე საექსპორტო ბაზარზე.</p>', '<p>კომპანია &rdquo;აქვა გეო&rdquo;-ს მიზანია უნიკალური ბუნებრივი თვისებების მქონე ქართული წყალი წარმოების მაღალი ტექნოლოგიების გამოყენებით უცვლელად მიიტანოს მომხმარებლამდე.<br />\r\n<br />\r\nკომპანია მიზანად ისახავს მაღალი ხარისხის ქართული, უნიკალური, არაგაზირებული, მინერალური წყლის წარმოება-ჩამოსხმას, რეალიზაციასა და პოპულარიზაციას, როგორც ადგილობრივ, ასევე საექსპორტო ბაზარზე.</p>', '<p>კომპანია &rdquo;აქვა გეო&rdquo;-ს მიზანია უნიკალური ბუნებრივი თვისებების მქონე ქართული წყალი წარმოების მაღალი ტექნოლოგიების გამოყენებით უცვლელად მიიტანოს მომხმარებლამდე.<br />\r\n<br />\r\nკომპანია მიზანად ისახავს მაღალი ხარისხის ქართული, უნიკალური, არაგაზირებული, მინერალური წყლის წარმოება-ჩამოსხმას, რეალიზაციასა და პოპულარიზაციას, როგორც ადგილობრივ, ასევე საექსპორტო ბაზარზე.</p>', '1592735699history.png', '<p>კომპანია &ldquo;აქვა გეო&rdquo;-ს დაპროექტებისა და მშენებლობის პროცესი თვის განმავლობაში მიმდინარეობდა. აღსანიშნავია, რომ პროექტში მონაწილე კომპანიების უმრავლესობა ქართული კომპანიებია, რაც ჩვენ განსაკუთრებული სიამაყით გვავსებს. ამავდროულად ჩვენ სრულად გამოვიყენეთ დარგში არსებული თანამედროვე ევროპული გამოცდილება.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>კომპანია თავის თავში აერთიანებს ქართულ საქმესა და სურვილს საკუთარი წვლილი შეიტანოს ქართული ეკონომიკის განვითარებაში. ეს არის მთლიანად ქართული კომპანია, რაც თავისთავად გულისხმობს მრავალი ქართული ოჯახის დასაქმებას.</p>', '<p>The design and construction process of the company &quot;Aqua Geo&quot; has been going on for months. It should be noted that most of the companies participating in the project are Georgian companies, which fills us with special pride.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>At the same time, we have made full use of modern European experience in the field. The company combines Georgian business and its desire to contribute to the development of the Georgian economy. It is a completely Georgian company, which in itself means the employment of many Georgian families.</p>', '<p>Процесс проектирования и строительства компании &laquo;Аква Гео&raquo; продолжается уже несколько месяцев. Следует отметить, что большинство компаний, участвующих в проекте, являются грузинскими компаниями, что вызывает у нас особую гордость.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>В то же время мы в полной мере использовали современный европейский опыт в этой области. Компания объединяет грузинский бизнес и его желание внести свой вклад в развитие экономики Грузии. Это полностью грузинская компания, что само по себе означает трудоустройство многих грузинских семей.</p>', '<p>კომპანია &ldquo;აქვა გეო&rdquo;-ს დაპროექტებისა და მშენებლობის პროცესი თვის განმავლობაში მიმდინარეობდა. აღსანიშნავია, რომ პროექტში მონაწილე კომპანიების უმრავლესობა ქართული კომპანიებია, რაც ჩვენ განსაკუთრებული სიამაყით გვავსებს. ამავდროულად ჩვენ სრულად გამოვიყენეთ დარგში არსებული თანამედროვე ევროპული გამოცდილება.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>კომპანია თავის თავში აერთიანებს ქართულ საქმესა და სურვილს საკუთარი წვლილი შეიტანოს ქართული ეკონომიკის განვითარებაში. ეს არის მთლიანად ქართული კომპანია, რაც თავისთავად გულისხმობს მრავალი ქართული ოჯახის დასაქმებას.</p>', '<p>The design and construction process of the company &quot;Aqua Geo&quot; has been going on for months. It should be noted that most of the companies participating in the project are Georgian companies, which fills us with special pride.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>At the same time, we have made full use of modern European experience in the field. The company combines Georgian business and its desire to contribute to the development of the Georgian economy. It is a completely Georgian company, which in itself means the employment of many Georgian families.</p>', '<p>Процесс проектирования и строительства компании &laquo;Аква Гео&raquo; продолжается уже несколько месяцев. Следует отметить, что большинство компаний, участвующих в проекте, являются грузинскими компаниями, что вызывает у нас особую гордость.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>В то же время мы в полной мере использовали современный европейский опыт в этой области. Компания объединяет грузинский бизнес и его желание внести свой вклад в развитие экономики Грузии. Это полностью грузинская компания, что само по себе означает трудоустройство многих грузинских семей.</p>', '<p>კომპანია &rdquo;აქვა გეო&rdquo;-ს მიზანია უნიკალური ბუნებრივი თვისებების მქონე ქართული წყალი წარმოების მაღალი ტექნოლოგიების გამოყენებით უცვლელად მიიტანოს მომხმარებლამდე.<br />\r\n<br />\r\nკომპანია მიზანად ისახავს მაღალი ხარისხის ქართული, უნიკალური, არაგაზირებული, მინერალური წყლის წარმოება-ჩამოსხმას, რეალიზაციასა და პოპულარიზაციას, როგორც ადგილობრივ, ასევე საექსპორტო ბაზარზე.</p>', '<p>კომპანია &rdquo;აქვა გეო&rdquo;-ს მიზანია უნიკალური ბუნებრივი თვისებების მქონე ქართული წყალი წარმოების მაღალი ტექნოლოგიების გამოყენებით უცვლელად მიიტანოს მომხმარებლამდე.<br />\r\n<br />\r\nკომპანია მიზანად ისახავს მაღალი ხარისხის ქართული, უნიკალური, არაგაზირებული, მინერალური წყლის წარმოება-ჩამოსხმას, რეალიზაციასა და პოპულარიზაციას, როგორც ადგილობრივ, ასევე საექსპორტო ბაზარზე.</p>', '<p>კომპანია &rdquo;აქვა გეო&rdquo;-ს მიზანია უნიკალური ბუნებრივი თვისებების მქონე ქართული წყალი წარმოების მაღალი ტექნოლოგიების გამოყენებით უცვლელად მიიტანოს მომხმარებლამდე.<br />\r\n<br />\r\nკომპანია მიზანად ისახავს მაღალი ხარისხის ქართული, უნიკალური, არაგაზირებული, მინერალური წყლის წარმოება-ჩამოსხმას, რეალიზაციასა და პოპულარიზაციას, როგორც ადგილობრივ, ასევე საექსპორტო ბაზარზე.</p>', '<p>წყლის ჩამოსხმის საამქრო აღჭურვილია ევროპაში აღიარებული საუკეთესო ბრენდის ბოლო მოდიფიკაციის სრულად ავტომატიზირებული მინისა და პეტ ბოთლებში ჩამოსხმისა და შეფუთვის ხაზებით; ქარხანა თბილისთან ახლოს, სოფელ მისაქციელის ტერიტორიაზე 18,000 კვ/მ მიწის ნაკვეთზეა გაშენებული.</p>\r\n\r\n<p>ხაზებში გამოყენებულია უახლესი ტექნოლოგიები, რომელიც უზრუნველყოფს პროდუქციის ხარისხის განსაკუთრებულ დაცვას.</p>\r\n\r\n<p>წყალს 150 მეტრი სიღრმიდან მოიპოვებენ. ორივე ჭაბურღილი უშუალოდ წარმოების ტერიტორიაზე მდებარეობს და მიწის წიაღიდან ამოსული წყალი უჟანგავი ლითონის მილებით მიეწოდება საწარმოს. მოპოვებული წყლის მაღალი ხარისხი, სტაბილურობა და ასევე ევროპულ და ამერიკულ სტანდარტებთან შესაბამისობა დადასტურებულია ქართული (გამა) და მსოფლიოში წამყვანი გერმანული Fresenius institution და ავსტრიული Bio 4 ლაბორატორიების დასკვნებით.</p>', '<p>The water bottling workshop is equipped with fully automated glass and pet bottling and packaging lines for the latest modification of the best brand recognized in Europe; The factory is located on 18,000 sq. M. Land near the village of Misaktsieli near Tbilisi. The latest technologies are used in the lines, which provide special protection for product quality. The water is extracted from a depth of 150 meters. Both wells are located directly in the production area and the water rising from the ground is supplied to the plant through stainless steel pipes. The high quality of the extracted water, its stability, as well as its compliance with European and American standards are confirmed by the findings of the Georgian (Gamma) and the world&#39;s leading German Fresenius institution and the Austrian Bio 4 laboratories.</p>', '<p>Вода добывается с глубины 150 метров. Обе скважины расположены непосредственно в производственной зоне, а вода, поднимающаяся из земли, подается на завод по трубам из нержавеющей стали. Высокое качество добываемой воды, ее стабильность, а также ее соответствие европейским и американским стандартам подтверждают выводы грузинской (Gamma) и ведущей в мире немецкой организации Fresenius и австрийских лабораторий Bio 4.</p>', '<p>მნიშვნელოვანია, რომ მოპოვებული ბუნებრივი წყალი მაღალი ხარისხით, სისუფთავით და ყველა სასარგებლო მინ Sno Glass production ერალის არსებობით ხასიათდება. საბადოდან მოპოვების შემდეგ წყალი გადის ფილტრაციის პროცესს, რომელიც კომპიუტერული კონტროლის უახლესი ტექნოლოგიური სისტემით მიმდინარეობს. ძალიან მნიშვნელოვანია ის ფაქტიც, რომ წყლის დამუშავების უბანზე არ ხდება მისი დაგროვება რეზერვუარებში. ჭაბურღილიდან მოპოვებული წყალი ფილტრაციის გავლით უწყვეტად მიეწოდება ჩამომსხმელ ხაზებს. კვალიფიციური ტექნიკური პერსონალი, რომელმაც ტრეინინგი გაიარა ფრანგ და იტალიელ სპეციალისტებთან, უზრუნველყოფს წარმოების გამართულ და ეფექტურ მუშაობას.</p>', '<p>Важно, что добываемая природная вода характеризуется высоким качеством, чистотой и наличием всего полезного стекла Sno Glass производства Eral. После извлечения с поля вода подвергается процессу фильтрации, который осуществляется новейшей компьютерной системой управления. Также очень важно, чтобы очистные сооружения не накапливались в водоемах. Вода, извлеченная из скважины, непрерывно подается на линии розлива через фильтрацию.</p>', '<p>It is important that the extracted natural water is characterized by high quality, cleanliness and the presence of all the useful mini Sno Glass production Eral. After extraction from the field, the water undergoes a filtration process, which is carried out by the latest technological control of computer control. It is also very important that the water treatment plant does not accumulate in the reservoirs. The water extracted from the well is continuously supplied to the bottling lines through filtration. Qualified technical staff who have undergone training with French and Italian specialists will ensure the smooth and efficient operation of the production.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(111) NOT NULL,
  `contact_phone` varchar(999) DEFAULT NULL,
  `contact_email` varchar(999) DEFAULT NULL,
  `contact_address_ka` varchar(999) DEFAULT NULL,
  `contact_address_en` varchar(999) DEFAULT NULL,
  `contact_address_ru` varchar(999) DEFAULT NULL,
  `contact_twitter` varchar(999) DEFAULT NULL,
  `contact_facebook` varchar(999) DEFAULT NULL,
  `contact_youtube` varchar(999) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `contact_phone`, `contact_email`, `contact_address_ka`, `contact_address_en`, `contact_address_ru`, `contact_twitter`, `contact_facebook`, `contact_youtube`) VALUES
(1, '1', '1', '2', '2', '3', '3', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `eksporti`
--

CREATE TABLE `eksporti` (
  `eksporti_id` int(111) NOT NULL,
  `eksporti_pirveli_ka` longtext NOT NULL,
  `eksporti_pirveli_en` longtext NOT NULL,
  `eksporti_pirveli_ru` longtext NOT NULL,
  `eksporti_meore_ka` longtext NOT NULL,
  `eksporti_meore_en` longtext NOT NULL,
  `eksporti_meore_ru` longtext NOT NULL,
  `eksporti_header_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `eksporti`
--

INSERT INTO `eksporti` (`eksporti_id`, `eksporti_pirveli_ka`, `eksporti_pirveli_en`, `eksporti_pirveli_ru`, `eksporti_meore_ka`, `eksporti_meore_en`, `eksporti_meore_ru`, `eksporti_header_image`) VALUES
(1, '<p>ჩვენთვის, როგორც მწარმოებლისთვის ძალიან მნიშვნელოვანია, როდესაც პროდუქტს ენდობი და გჯერა, სნო და კობი თავისი შემადგენლობით მსოფლიო სტანდარტებს აკმაყოფილებს შესაბამისად ექსპორტზე შეფერხება არასდროს გვქონია. ექსპორტზე აქტიური მუშაობა დაახლოებით წელიწადნახევრის წინ დავიწყეთ. თავიდან მხოლოდ ნატურალური მინერალური წყალი &bdquo;სნო&ldquo; გვქონდა, რომელმაც მარტივად მოიკიდა ფეხი უცხო ბაზრებეზე მისი უნიკალური შემადგენლობის წყალობით.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>2018 წლის ივლისის თვეში დაგვემატა ნატურალური მინერალური გაზიანი წყალი &bdquo;კობი&ldquo;. თუმცა ექსპორტის მიზნებისთვის პროდუქტის მიღება არ ნიშნავს, რომ ის მზად არის საექსპორტოდ. თითქმის ყველა ქვეყანას გააჩნია რეგულაციები, რომელსაც პროდუქტი უნდა აკმაყოფილებდეს. ხშირად ითხოვენ დამატებით კვლევებს, სერტიფიცირებებს, აღიარებებს.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>ამ ყველაფრისთვის დრო იყო საჭირო. ჩვენ რეკორდულ დროში მოვახერხეთ ყველა საჭირო სერტიფიკატის მოპოვება და 2019 წლის იანვარში პირველიად &bdquo;კობი&ldquo; ამერიკის შეერთებულ შტატებში გავაგზავნეთ. ჩვენ რეკორდულ დროში მოვახერხეთ ყველა საჭირო სერტიფიკატის მოპოვება და 2019 წლის იანვარში პირველიად &bdquo;კობი&ldquo; ამერიკის შეერთებულ შტატებში გავაგზავნეთ.</p>', '<p>It is very important for us as a manufacturer when you trust the product and believe that Sno and Kobe meet the world standards in their composition, therefore we have never had a delay in exporting. We started working actively on exports about a year and a half ago. At first we only had natural mineral water &quot;Sno&quot;, which easily gained a foothold in foreign markets thanks to its unique composition. In July 2018, we added natural mineral carbonated water &quot;Kobi&quot;. However, accepting a product for export does not mean that it is ready for export. Almost every country has regulations that the product must meet. They often require additional research, certification, and recognition. It took time. We managed to get all the necessary certificates in record time and in January 2019 we sent Kobe to the United States for the first time. We managed to get all the necessary certificates in record time and in January 2019 we sent Kobe to the United States for the first time.</p>', '<p>Это очень важно для нас как производителя, когда вы доверяете продукту и считаете, что Sno и Kobe соответствуют мировым стандартам в своем составе, поэтому мы никогда не задерживались в экспорте. Мы начали активно работать над экспортом около полутора лет назад. Сначала у нас была только природная минеральная вода &laquo;Сно&raquo;, которая легко закрепилась на зарубежных рынках благодаря своему уникальному составу. В июле 2018 года мы добавили природную минеральную газированную воду &laquo;Коби&raquo;. Однако принятие продукта на экспорт не означает, что он готов к экспорту. Практически в каждой стране есть правила, которым должен соответствовать продукт. Они часто требуют дополнительных исследований, сертификации и признания. Это заняло время. Нам удалось получить все необходимые сертификаты в рекордно короткие сроки, и в январе 2019 года мы впервые отправили Кобе в Соединенные Штаты. Нам удалось получить все необходимые сертификаты в рекордно короткие сроки, и в январе 2019 года мы впервые отправили Кобе в Соединенные Штаты.</p>', '<p>ჩვენთვის, როგორც მწარმოებლისთვის ძალიან მნიშვნელოვანია, როდესაც პროდუქტს ენდობი და გჯერა, სნო და კობი თავისი შემადგენლობით მსოფლიო სტანდარტებს აკმაყოფილებს შესაბამისად ექსპორტზე შეფერხება არასდროს გვქონია. ექსპორტზე აქტიური მუშაობა დაახლოებით წელიწადნახევრის წინ დავიწყეთ. თავიდან მხოლოდ ნატურალური მინერალური წყალი &bdquo;სნო&ldquo; გვქონდა, რომელმაც მარტივად მოიკიდა ფეხი უცხო ბაზრებეზე მისი უნიკალური შემადგენლობის წყალობით.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>2018 წლის ივლისის თვეში დაგვემატა ნატურალური მინერალური გაზიანი წყალი &bdquo;კობი&ldquo;. თუმცა ექსპორტის მიზნებისთვის პროდუქტის მიღება არ ნიშნავს, რომ ის მზად არის საექსპორტოდ. თითქმის ყველა ქვეყანას გააჩნია რეგულაციები, რომელსაც პროდუქტი უნდა აკმაყოფილებდეს. ხშირად ითხოვენ დამატებით კვლევებს, სერტიფიცირებებს, აღიარებებს.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>ამ ყველაფრისთვის დრო იყო საჭირო. ჩვენ რეკორდულ დროში მოვახერხეთ ყველა საჭირო სერტიფიკატის მოპოვება და 2019 წლის იანვარში პირველიად &bdquo;კობი&ldquo; ამერიკის შეერთებულ შტატებში გავაგზავნეთ. ჩვენ რეკორდულ დროში მოვახერხეთ ყველა საჭირო სერტიფიკატის მოპოვება და 2019 წლის იანვარში პირველიად &bdquo;კობი&ldquo; ამერიკის შეერთებულ შტატებში გავაგზავნეთ.</p>', '<p>It is very important for us as a manufacturer when you trust the product and believe that Sno and Kobe meet the world standards in their composition, therefore we have never had a delay in exporting. We started working actively on exports about a year and a half ago. At first we only had natural mineral water &quot;Sno&quot;, which easily gained a foothold in foreign markets thanks to its unique composition. In July 2018, we added natural mineral carbonated water &quot;Kobi&quot;. However, accepting a product for export does not mean that it is ready for export. Almost every country has regulations that the product must meet. They often require additional research, certification, and recognition. It took time. We managed to get all the necessary certificates in record time and in January 2019 we sent Kobe to the United States for the first time. We managed to get all the necessary certificates in record time and in January 2019 we sent Kobe to the United States for the first time.</p>', '<p>Это очень важно для нас как производителя, когда вы доверяете продукту и считаете, что Sno и Kobe соответствуют мировым стандартам в своем составе, поэтому мы никогда не задерживались в экспорте. Мы начали активно работать над экспортом около полутора лет назад. Сначала у нас была только природная минеральная вода &laquo;Сно&raquo;, которая легко закрепилась на зарубежных рынках благодаря своему уникальному составу. В июле 2018 года мы добавили природную минеральную газированную воду &laquo;Коби&raquo;. Однако принятие продукта на экспорт не означает, что он готов к экспорту. Практически в каждой стране есть правила, которым должен соответствовать продукт. Они часто требуют дополнительных исследований, сертификации и признания. Это заняло время. Нам удалось получить все необходимые сертификаты в рекордно короткие сроки, и в январе 2019 года мы впервые отправили Кобе в Соединенные Штаты. Нам удалось получить все необходимые сертификаты в рекордно короткие сроки, и в январе 2019 года мы впервые отправили Кобе в Соединенные Штаты.</p>', '1592736202eksport_header.png');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kobi_likage`
--

CREATE TABLE `kobi_likage` (
  `kobi_likage_id` int(111) NOT NULL,
  `kobi_likage_text_pirveli_ka` longtext NOT NULL,
  `kobi_likage_text_pirveli_en` longtext NOT NULL,
  `kobi_likage_text_pirveli_ru` longtext NOT NULL,
  `kobi_likage_text_meore_ka` longtext NOT NULL,
  `kobi_likage_text_meore_en` longtext NOT NULL,
  `kobi_likage_text_meore_ru` longtext NOT NULL,
  `kobi_likage_text_mesame_ka` longtext NOT NULL,
  `kobi_likage_text_mesame_ru` longtext NOT NULL,
  `kobi_likage_text_mesame_en` longtext NOT NULL,
  `kobi_likage_image1` varchar(255) NOT NULL,
  `kobi_likage_image2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kobi_likage`
--

INSERT INTO `kobi_likage` (`kobi_likage_id`, `kobi_likage_text_pirveli_ka`, `kobi_likage_text_pirveli_en`, `kobi_likage_text_pirveli_ru`, `kobi_likage_text_meore_ka`, `kobi_likage_text_meore_en`, `kobi_likage_text_meore_ru`, `kobi_likage_text_mesame_ka`, `kobi_likage_text_mesame_ru`, `kobi_likage_text_mesame_en`, `kobi_likage_image1`, `kobi_likage_image2`) VALUES
(1, '<p>საქართველოს განათლების, მეცნიერების, კულტურისა და სპორტის მინისტრი მიხეილ ჩხენკელი სსიპ კულტურული მემკვიდრეობის დაცვის ეროვნული სააგენტოს ანგარიშის წარდგენას დაესწრო და საზოგადოებას სიტყვით მიმართა.</p>\r\n\r\n<p>&nbsp;</p>', '<p>საქართველოს განათლების, მეცნიერების, კულტურისა და სპორტის მინისტრი მიხეილ ჩხენკელი სსიპ კულტურული მემკვიდრეობის დაცვის ეროვნული სააგენტოს ანგარიშის წარდგენას დაესწრო და საზოგადოებას სიტყვით მიმართა.</p>', '<p>საქართველოს განათლების, მეცნიერების, კულტურისა და სპორტის მინისტრი მიხეილ ჩხენკელი სსიპ კულტურული მემკვიდრეობის დაცვის ეროვნული სააგენტოს ანგარიშის წარდგენას დაესწრო და საზოგადოებას სიტყვით მიმართა.</p>', '<p>საქართველოს განათლების, მეცნიერების, კულტურისა და სპორტის მინისტრი მიხეილ ჩხენკელი სსიპ კულტურული მემკვიდრეობის დაცვის ეროვნული სააგენტოს ანგარიშის წარდგენას დაესწრო და საზოგადოებას სიტყვით მიმართა.</p>', '<p>საქართველოს განათლების, მეცნიერების, კულტურისა და სპორტის მინისტრი მიხეილ ჩხენკელი სსიპ კულტურული მემკვიდრეობის დაცვის ეროვნული სააგენტოს ანგარიშის წარდგენას დაესწრო და საზოგადოებას სიტყვით მიმართა.</p>', '<p>საქართველოს განათლების, მეცნიერების, კულტურისა და სპორტის მინისტრი მიხეილ ჩხენკელი სსიპ კულტურული მემკვიდრეობის დაცვის ეროვნული სააგენტოს ანგარიშის წარდგენას დაესწრო და საზოგადოებას სიტყვით მიმართა.</p>', '<p>საქართველოს განათლების, მეცნიერების, კულტურისა და სპორტის მინისტრი მიხეილ ჩხენკელი სსიპ კულტურული მემკვიდრეობის დაცვის ეროვნული სააგენტოს ანგარიშის წარდგენას დაესწრო და საზოგადოებას სიტყვით მიმართა.</p>', '<p>საქართველოს განათლების, მეცნიერების, კულტურისა და სპორტის მინისტრი მიხეილ ჩხენკელი სსიპ კულტურული მემკვიდრეობის დაცვის ეროვნული სააგენტოს ანგარიშის წარდგენას დაესწრო და საზოგადოებას სიტყვით მიმართა.</p>', '<p>საქართველოს განათლების, მეცნიერების, კულტურისა და სპორტის მინისტრი მიხეილ ჩხენკელი სსიპ კულტურული მემკვიდრეობის დაცვის ეროვნული სააგენტოს ანგარიშის წარდგენას დაესწრო და საზოგადოებას სიტყვით მიმართა.</p>', '1592739629warmomavloba.png', '1592739635warmomavloba2.png');

-- --------------------------------------------------------

--
-- Table structure for table `kobi_mineral`
--

CREATE TABLE `kobi_mineral` (
  `kobi_mineral_id` int(111) NOT NULL,
  `kobi_mineral_pirveli_ka` longtext NOT NULL,
  `kobi_mineral_pirveli_en` longtext NOT NULL,
  `kobi_mineral_pirveli_ru` longtext NOT NULL,
  `kobi_mineral_meore_ka` longtext NOT NULL,
  `kobi_mineral_meore_en` longtext NOT NULL,
  `kobi_mineral_meore_ru` longtext NOT NULL,
  `kobi_mineral_mesame_ka` longtext NOT NULL,
  `kobi_mineral_mesame_ru` longtext NOT NULL,
  `kobi_mineral_mesame_en` longtext NOT NULL,
  `kobi_mineral_meotxe_ka` longtext NOT NULL,
  `kobi_mineral_meotxe_en` longtext NOT NULL,
  `kobi_mineral_meotxe_ru` longtext NOT NULL,
  `kobi_mineral_mexute_ka` longtext NOT NULL,
  `kobi_mineral_mexute_en` longtext NOT NULL,
  `kobi_mineral_mexute_ru` longtext NOT NULL,
  `kobi_mineral_image1` varchar(244) NOT NULL,
  `kobi_mineral_image2` varchar(244) NOT NULL,
  `kobi_mineral_image3` varchar(244) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kobi_mineral`
--

INSERT INTO `kobi_mineral` (`kobi_mineral_id`, `kobi_mineral_pirveli_ka`, `kobi_mineral_pirveli_en`, `kobi_mineral_pirveli_ru`, `kobi_mineral_meore_ka`, `kobi_mineral_meore_en`, `kobi_mineral_meore_ru`, `kobi_mineral_mesame_ka`, `kobi_mineral_mesame_ru`, `kobi_mineral_mesame_en`, `kobi_mineral_meotxe_ka`, `kobi_mineral_meotxe_en`, `kobi_mineral_meotxe_ru`, `kobi_mineral_mexute_ka`, `kobi_mineral_mexute_en`, `kobi_mineral_mexute_ru`, `kobi_mineral_image1`, `kobi_mineral_image2`, `kobi_mineral_image3`) VALUES
(1, '<p><strong>satesto kobi</strong></p>', '<p><strong>მიხეილ ჩხენკელი:</strong>&nbsp;&bdquo;დღეს ჩვენ სამინისტროს შემადგენლობაში შემავალი, მე ვიტყოდი, განსაკუთრებული, კულტურული მემკვიდრეობის დაცვის ეროვნული სააგენტოს პრეზენტაციას ვესწრებით, რომელიც ჭეშმარიტად უზარმაზარ საქმეს ემსახურება. ჩვენი კულტურის, ჩვენი ისტორიული მემკვიდრეობის დაცვა ყოველი ჩვენგანის მოვალეობაა, რადგანაც ეს არის ჩვენი კულტურული იდენტობის ქვაკუთხედი.&nbsp;</p>', '<p><strong>მიხეილ ჩხენკელი:</strong>&nbsp;&bdquo;დღეს ჩვენ სამინისტროს შემადგენლობაში შემავალი, მე ვიტყოდი, განსაკუთრებული, კულტურული მემკვიდრეობის დაცვის ეროვნული სააგენტოს პრეზენტაციას ვესწრებით, რომელიც ჭეშმარიტად უზარმაზარ საქმეს ემსახურება. ჩვენი კულტურის, ჩვენი ისტორიული მემკვიდრეობის დაცვა ყოველი ჩვენგანის მოვალეობაა, რადგანაც ეს არის ჩვენი კულტურული იდენტობის ქვაკუთხედი.&nbsp;</p>', '<p><strong>მიხეილ ჩხენკელი:</strong>&nbsp;&bdquo;დღეს ჩვენ სამინისტროს შემადგენლობაში შემავალი, მე ვიტყოდი, განსაკუთრებული, კულტურული მემკვიდრეობის დაცვის ეროვნული სააგენტოს პრეზენტაციას ვესწრებით, რომელიც ჭეშმარიტად უზარმაზარ საქმეს ემსახურება. ჩვენი კულტურის, ჩვენი ისტორიული მემკვიდრეობის დაცვა ყოველი ჩვენგანის მოვალეობაა, რადგანაც ეს არის ჩვენი კულტურული იდენტობის ქვაკუთხედი.&nbsp;</p>', '<p><strong>მიხეილ ჩხენკელი:</strong>&nbsp;&bdquo;დღეს ჩვენ სამინისტროს შემადგენლობაში შემავალი, მე ვიტყოდი, განსაკუთრებული, კულტურული მემკვიდრეობის დაცვის ეროვნული სააგენტოს პრეზენტაციას ვესწრებით, რომელიც ჭეშმარიტად უზარმაზარ საქმეს ემსახურება. ჩვენი კულტურის, ჩვენი ისტორიული მემკვიდრეობის დაცვა ყოველი ჩვენგანის მოვალეობაა, რადგანაც ეს არის ჩვენი კულტურული იდენტობის ქვაკუთხედი.&nbsp;</p>', '<p><strong>მიხეილ ჩხენკელი:</strong>&nbsp;&bdquo;დღეს ჩვენ სამინისტროს შემადგენლობაში შემავალი, მე ვიტყოდი, განსაკუთრებული, კულტურული მემკვიდრეობის დაცვის ეროვნული სააგენტოს პრეზენტაციას ვესწრებით, რომელიც ჭეშმარიტად უზარმაზარ საქმეს ემსახურება. ჩვენი კულტურის, ჩვენი ისტორიული მემკვიდრეობის დაცვა ყოველი ჩვენგანის მოვალეობაა, რადგანაც ეს არის ჩვენი კულტურული იდენტობის ქვაკუთხედი.&nbsp;</p>', '<p><strong>მიხეილ ჩხენკელი:</strong>&nbsp;&bdquo;დღეს ჩვენ სამინისტროს შემადგენლობაში შემავალი, მე ვიტყოდი, განსაკუთრებული, კულტურული მემკვიდრეობის დაცვის ეროვნული სააგენტოს პრეზენტაციას ვესწრებით, რომელიც ჭეშმარიტად უზარმაზარ საქმეს ემსახურება. ჩვენი კულტურის, ჩვენი ისტორიული მემკვიდრეობის დაცვა ყოველი ჩვენგანის მოვალეობაა, რადგანაც ეს არის ჩვენი კულტურული იდენტობის ქვაკუთხედი.&nbsp;</p>', '<p><strong>მიხეილ ჩხენკელი:</strong>&nbsp;&bdquo;დღეს ჩვენ სამინისტროს შემადგენლობაში შემავალი, მე ვიტყოდი, განსაკუთრებული, კულტურული მემკვიდრეობის დაცვის ეროვნული სააგენტოს პრეზენტაციას ვესწრებით, რომელიც ჭეშმარიტად უზარმაზარ საქმეს ემსახურება. ჩვენი კულტურის, ჩვენი ისტორიული მემკვიდრეობის დაცვა ყოველი ჩვენგანის მოვალეობაა, რადგანაც ეს არის ჩვენი კულტურული იდენტობის ქვაკუთხედი.&nbsp;</p>', '<p><strong>მიხეილ ჩხენკელი:</strong>&nbsp;&bdquo;დღეს ჩვენ სამინისტროს შემადგენლობაში შემავალი, მე ვიტყოდი, განსაკუთრებული, კულტურული მემკვიდრეობის დაცვის ეროვნული სააგენტოს პრეზენტაციას ვესწრებით, რომელიც ჭეშმარიტად უზარმაზარ საქმეს ემსახურება. ჩვენი კულტურის, ჩვენი ისტორიული მემკვიდრეობის დაცვა ყოველი ჩვენგანის მოვალეობაა, რადგანაც ეს არის ჩვენი კულტურული იდენტობის ქვაკუთხედი.&nbsp;</p>', '<p><strong>მიხეილ ჩხენკელი:</strong>&nbsp;&bdquo;დღეს ჩვენ სამინისტროს შემადგენლობაში შემავალი, მე ვიტყოდი, განსაკუთრებული, კულტურული მემკვიდრეობის დაცვის ეროვნული სააგენტოს პრეზენტაციას ვესწრებით, რომელიც ჭეშმარიტად უზარმაზარ საქმეს ემსახურება. ჩვენი კულტურის, ჩვენი ისტორიული მემკვიდრეობის დაცვა ყოველი ჩვენგანის მოვალეობაა, რადგანაც ეს არის ჩვენი კულტურული იდენტობის ქვაკუთხედი.&nbsp;</p>', '<p><strong>მიხეილ ჩხენკელი:</strong>&nbsp;&bdquo;დღეს ჩვენ სამინისტროს შემადგენლობაში შემავალი, მე ვიტყოდი, განსაკუთრებული, კულტურული მემკვიდრეობის დაცვის ეროვნული სააგენტოს პრეზენტაციას ვესწრებით, რომელიც ჭეშმარიტად უზარმაზარ საქმეს ემსახურება. ჩვენი კულტურის, ჩვენი ისტორიული მემკვიდრეობის დაცვა ყოველი ჩვენგანის მოვალეობაა, რადგანაც ეს არის ჩვენი კულტურული იდენტობის ქვაკუთხედი.&nbsp;</p>', '<p><strong>მიხეილ ჩხენკელი:</strong>&nbsp;&bdquo;დღეს ჩვენ სამინისტროს შემადგენლობაში შემავალი, მე ვიტყოდი, განსაკუთრებული, კულტურული მემკვიდრეობის დაცვის ეროვნული სააგენტოს პრეზენტაციას ვესწრებით, რომელიც ჭეშმარიტად უზარმაზარ საქმეს ემსახურება. ჩვენი კულტურის, ჩვენი ისტორიული მემკვიდრეობის დაცვა ყოველი ჩვენგანის მოვალეობაა, რადგანაც ეს არის ჩვენი კულტურული იდენტობის ქვაკუთხედი.&nbsp;</p>', '<p><strong>მიხეილ ჩხენკელი:</strong>&nbsp;&bdquo;დღეს ჩვენ სამინისტროს შემადგენლობაში შემავალი, მე ვიტყოდი, განსაკუთრებული, კულტურული მემკვიდრეობის დაცვის ეროვნული სააგენტოს პრეზენტაციას ვესწრებით, რომელიც ჭეშმარიტად უზარმაზარ საქმეს ემსახურება. ჩვენი კულტურის, ჩვენი ისტორიული მემკვიდრეობის დაცვა ყოველი ჩვენგანის მოვალეობაა, რადგანაც ეს არის ჩვენი კულტურული იდენტობის ქვაკუთხედი.&nbsp;</p>', '<p><strong>მიხეილ ჩხენკელი:</strong>&nbsp;&bdquo;დღეს ჩვენ სამინისტროს შემადგენლობაში შემავალი, მე ვიტყოდი, განსაკუთრებული, კულტურული მემკვიდრეობის დაცვის ეროვნული სააგენტოს პრეზენტაციას ვესწრებით, რომელიც ჭეშმარიტად უზარმაზარ საქმეს ემსახურება. ჩვენი კულტურის, ჩვენი ისტორიული მემკვიდრეობის დაცვა ყოველი ჩვენგანის მოვალეობაა, რადგანაც ეს არის ჩვენი კულტურული იდენტობის ქვაკუთხედი.&nbsp;</p>', '<p><strong>მიხეილ ჩხენკელი:</strong>&nbsp;&bdquo;დღეს ჩვენ სამინისტროს შემადგენლობაში შემავალი, მე ვიტყოდი, განსაკუთრებული, კულტურული მემკვიდრეობის დაცვის ეროვნული სააგენტოს პრეზენტაციას ვესწრებით, რომელიც ჭეშმარიტად უზარმაზარ საქმეს ემსახურება. ჩვენი კულტურის, ჩვენი ისტორიული მემკვიდრეობის დაცვა ყოველი ჩვენგანის მოვალეობაა, რადგანაც ეს არის ჩვენი კულტურული იდენტობის ქვაკუთხედი.&nbsp; 54654654</p>', '1592469476159221276210.jpg', '159222069911.jpg', '159222071917.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kobi_products`
--

CREATE TABLE `kobi_products` (
  `kobi_products_id` int(111) NOT NULL,
  `kobi_products_desc_ka` varchar(255) NOT NULL,
  `kobi_products_desc_en` varchar(255) NOT NULL,
  `kobi_products_desc_ru` varchar(255) NOT NULL,
  `kobi_products_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kobi_products`
--

INSERT INTO `kobi_products` (`kobi_products_id`, `kobi_products_desc_ka`, `kobi_products_desc_en`, `kobi_products_desc_ru`, `kobi_products_image`) VALUES
(1, 'სნო 0.5 ლიტრი', '', '', 'kobi1.png'),
(2, 'სნო 1 მილიტრი', '', '', 'kobi2.png');

-- --------------------------------------------------------

--
-- Table structure for table `kobi_product_area`
--

CREATE TABLE `kobi_product_area` (
  `kobi_product_area_id` int(111) NOT NULL,
  `kobi_product_area_header_image` varchar(255) NOT NULL,
  `kobi_product_area_header_video` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kobi_product_area`
--

INSERT INTO `kobi_product_area` (`kobi_product_area_id`, `kobi_product_area_header_image`, `kobi_product_area_header_video`) VALUES
(1, 'kobi_cover.png', 'https://www.youtube.com/watch?v=tqsd-R3c_H0');

-- --------------------------------------------------------

--
-- Table structure for table `kobi_xarisxi`
--

CREATE TABLE `kobi_xarisxi` (
  `kobi_xarisxi_id` int(111) NOT NULL,
  `kobi_xarisxi_pirveli_ka` longtext NOT NULL,
  `kobi_xarisxi_pirveli_en` longtext NOT NULL,
  `kobi_xarisxi_pirveli_ru` longtext NOT NULL,
  `kobi_xarisxi_meore_ka` longtext NOT NULL,
  `kobi_xarisxi_meore_en` longtext NOT NULL,
  `kobi_xarisxi_meore_ru` longtext NOT NULL,
  `kobi_xarisxi_mesame_ka` longtext NOT NULL,
  `kobi_xarisxi_mesame_en` longtext NOT NULL,
  `kobi_xarisxi_mesame_ru` longtext NOT NULL,
  `kobi_xarisxi_meotxe_ka` longtext NOT NULL,
  `kobi_xarisxi_meotxe_en` longtext NOT NULL,
  `kobi_xarisxi_meotxe_ru` longtext NOT NULL,
  `kobi_xarisxi_mexute_ka` longtext NOT NULL,
  `kobi_xarisxi_mexute_en` longtext NOT NULL,
  `kobi_xarisxi_mexute_ru` longtext NOT NULL,
  `kobi_xarisxi_image1` varchar(255) NOT NULL,
  `kobi_xarisxi_image2` varchar(255) NOT NULL,
  `kobi_xarisxi_image3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kobi_xarisxi`
--

INSERT INTO `kobi_xarisxi` (`kobi_xarisxi_id`, `kobi_xarisxi_pirveli_ka`, `kobi_xarisxi_pirveli_en`, `kobi_xarisxi_pirveli_ru`, `kobi_xarisxi_meore_ka`, `kobi_xarisxi_meore_en`, `kobi_xarisxi_meore_ru`, `kobi_xarisxi_mesame_ka`, `kobi_xarisxi_mesame_en`, `kobi_xarisxi_mesame_ru`, `kobi_xarisxi_meotxe_ka`, `kobi_xarisxi_meotxe_en`, `kobi_xarisxi_meotxe_ru`, `kobi_xarisxi_mexute_ka`, `kobi_xarisxi_mexute_en`, `kobi_xarisxi_mexute_ru`, `kobi_xarisxi_image1`, `kobi_xarisxi_image2`, `kobi_xarisxi_image3`) VALUES
(1, '<p>satesto xaarisxi kobi</p>', '<p>sdfsdf</p>', '<p>sdfsdf</p>', '<p>sdfdsf</p>', '<p>sdfdsf</p>', '<p>sdfdsf</p>', '<p>sdfsdf</p>', '<p>sdfsdf</p>', '<p>sdfsdf</p>', '<p>sdfsdf</p>', '<p>sdfsdfsd</p>', '<p>sdfsdfsdf</p>', '<p>sdfsdfsdf</p>', '<p>sdfsdfsd</p>', '<p>satesto xaarisxi kobisatesto xaarisxi kobisatesto xaarisxi kobi</p>', '1592469780159221276210.jpg', '1592469791159221280227.jpg', '159222682634.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sno_likage`
--

CREATE TABLE `sno_likage` (
  `sno_likage_id` int(111) NOT NULL,
  `sno_likage_text_pirveli_ka` longtext NOT NULL,
  `sno_likage_text_pirveli_en` longtext NOT NULL,
  `sno_likage_text_pirveli_ru` longtext NOT NULL,
  `sno_likage_text_meore_ka` longtext NOT NULL,
  `sno_likage_text_meore_en` longtext NOT NULL,
  `sno_likage_text_meore_ru` longtext NOT NULL,
  `sno_likage_text_mesame_ka` longtext NOT NULL,
  `sno_likage_text_mesame_ru` longtext NOT NULL,
  `sno_likage_text_mesame_en` longtext NOT NULL,
  `sno_likage_image1` varchar(255) NOT NULL,
  `sno_likage_image2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sno_likage`
--

INSERT INTO `sno_likage` (`sno_likage_id`, `sno_likage_text_pirveli_ka`, `sno_likage_text_pirveli_en`, `sno_likage_text_pirveli_ru`, `sno_likage_text_meore_ka`, `sno_likage_text_meore_en`, `sno_likage_text_meore_ru`, `sno_likage_text_mesame_ka`, `sno_likage_text_mesame_ru`, `sno_likage_text_mesame_en`, `sno_likage_image1`, `sno_likage_image2`) VALUES
(1, '<p>საქართველოს განათლების, მეცნიერების, კულტურისა და სპორტის მინისტრი მიხეილ ჩხენკელი სსიპ კულტურული მემკვიდრეობის დაცვის ეროვნული სააგენტოს ანგარიშის წარდგენას დაესწრო და საზოგადოებას სიტყვით მიმართა.</p>', '<p>საქართველოს განათლების, მეცნიერების, კულტურისა და სპორტის მინისტრი მიხეილ ჩხენკელი სსიპ კულტურული მემკვიდრეობის დაცვის ეროვნული სააგენტოს ანგარიშის წარდგენას დაესწრო და საზოგადოებას სიტყვით მიმართა.</p>', '<p>საქართველოს განათლების, მეცნიერების, კულტურისა და სპორტის მინისტრი მიხეილ ჩხენკელი სსიპ კულტურული მემკვიდრეობის დაცვის ეროვნული სააგენტოს ანგარიშის წარდგენას დაესწრო და საზოგადოებას სიტყვით მიმართა.</p>', '<p>საქართველოს განათლების, მეცნიერების, კულტურისა და სპორტის მინისტრი მიხეილ ჩხენკელი სსიპ კულტურული მემკვიდრეობის დაცვის ეროვნული სააგენტოს ანგარიშის წარდგენას დაესწრო და საზოგადოებას სიტყვით მიმართა.</p>', '<p>საქართველოს განათლების, მეცნიერების, კულტურისა და სპორტის მინისტრი მიხეილ ჩხენკელი სსიპ კულტურული მემკვიდრეობის დაცვის ეროვნული სააგენტოს ანგარიშის წარდგენას დაესწრო და საზოგადოებას სიტყვით მიმართა.</p>', '<p>საქართველოს განათლების, მეცნიერების, კულტურისა და სპორტის მინისტრი მიხეილ ჩხენკელი სსიპ კულტურული მემკვიდრეობის დაცვის ეროვნული სააგენტოს ანგარიშის წარდგენას დაესწრო და საზოგადოებას სიტყვით მიმართა.</p>', '<p>საქართველოს განათლების, მეცნიერების, კულტურისა და სპორტის მინისტრი მიხეილ ჩხენკელი სსიპ კულტურული მემკვიდრეობის დაცვის ეროვნული სააგენტოს ანგარიშის წარდგენას დაესწრო და საზოგადოებას სიტყვით მიმართა.</p>', '<p>საქართველოს განათლების, მეცნიერების, კულტურისა და სპორტის მინისტრი მიხეილ ჩხენკელი სსიპ კულტურული მემკვიდრეობის დაცვის ეროვნული სააგენტოს ანგარიშის წარდგენას დაესწრო და საზოგადოებას სიტყვით მიმართა.</p>', '<p>საქართველოს განათლების, მეცნიერების, კულტურისა და სპორტის მინისტრი მიხეილ ჩხენკელი სსიპ კულტურული მემკვიდრეობის დაცვის ეროვნული სააგენტოს ანგარიშის წარდგენას დაესწრო და საზოგადოებას სიტყვით მიმართა.</p>', '1592810390warmomavloba.png', '1592810400warmomavloba2.png');

-- --------------------------------------------------------

--
-- Table structure for table `sno_mineral`
--

CREATE TABLE `sno_mineral` (
  `sno_mineral_id` int(111) NOT NULL,
  `sno_mineral_pirveli_ka` longtext NOT NULL,
  `sno_mineral_pirveli_en` longtext NOT NULL,
  `sno_mineral_pirveli_ru` longtext NOT NULL,
  `sno_mineral_meore_ka` longtext NOT NULL,
  `sno_mineral_meore_en` longtext NOT NULL,
  `sno_mineral_meore_ru` longtext NOT NULL,
  `sno_mineral_mesame_ka` longtext NOT NULL,
  `sno_mineral_mesame_ru` longtext NOT NULL,
  `sno_mineral_mesame_en` longtext NOT NULL,
  `sno_mineral_meotxe_ka` longtext NOT NULL,
  `sno_mineral_meotxe_en` longtext NOT NULL,
  `sno_mineral_meotxe_ru` longtext NOT NULL,
  `sno_mineral_mexute_ka` longtext NOT NULL,
  `sno_mineral_mexute_en` longtext NOT NULL,
  `sno_mineral_mexute_ru` longtext NOT NULL,
  `sno_mineral_image1` varchar(244) NOT NULL,
  `sno_mineral_image2` varchar(244) NOT NULL,
  `sno_mineral_image3` varchar(244) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sno_mineral`
--

INSERT INTO `sno_mineral` (`sno_mineral_id`, `sno_mineral_pirveli_ka`, `sno_mineral_pirveli_en`, `sno_mineral_pirveli_ru`, `sno_mineral_meore_ka`, `sno_mineral_meore_en`, `sno_mineral_meore_ru`, `sno_mineral_mesame_ka`, `sno_mineral_mesame_ru`, `sno_mineral_mesame_en`, `sno_mineral_meotxe_ka`, `sno_mineral_meotxe_en`, `sno_mineral_meotxe_ru`, `sno_mineral_mexute_ka`, `sno_mineral_mexute_en`, `sno_mineral_mexute_ru`, `sno_mineral_image1`, `sno_mineral_image2`, `sno_mineral_image3`) VALUES
(1, '<p><strong>მიხეილ ჩხენკელი:</strong>&nbsp;&bdquo;დღეს ჩვენ სამინისტროს შემადგენლობაში შემავალი, მე ვიტყოდი, განსაკუთრებული, კულტურული მემკვიდრეობის დაცვის ეროვნული სააგენტოს პრეზენტაციას ვესწრებით, რომელიც ჭეშმარიტად უზარმაზარ საქმეს ემსახურება. ჩვენი კულტურის, ჩვენი ისტორიული მემკვიდრეობის დაცვა ყოველი ჩვენგანის მოვალეობაა, რადგანაც ეს არის ჩვენი კულტურული იდენტობის ქვაკუთხედი.&nbsp;</p>', '<p><strong>მიხეილ ჩხენკელი:</strong>&nbsp;&bdquo;დღეს ჩვენ სამინისტროს შემადგენლობაში შემავალი, მე ვიტყოდი, განსაკუთრებული, კულტურული მემკვიდრეობის დაცვის ეროვნული სააგენტოს პრეზენტაციას ვესწრებით, რომელიც ჭეშმარიტად უზარმაზარ საქმეს ემსახურება. ჩვენი კულტურის, ჩვენი ისტორიული მემკვიდრეობის დაცვა ყოველი ჩვენგანის მოვალეობაა, რადგანაც ეს არის ჩვენი კულტურული იდენტობის ქვაკუთხედი.&nbsp;</p>', '<p><strong>მიხეილ ჩხენკელი:</strong>&nbsp;&bdquo;დღეს ჩვენ სამინისტროს შემადგენლობაში შემავალი, მე ვიტყოდი, განსაკუთრებული, კულტურული მემკვიდრეობის დაცვის ეროვნული სააგენტოს პრეზენტაციას ვესწრებით, რომელიც ჭეშმარიტად უზარმაზარ საქმეს ემსახურება. ჩვენი კულტურის, ჩვენი ისტორიული მემკვიდრეობის დაცვა ყოველი ჩვენგანის მოვალეობაა, რადგანაც ეს არის ჩვენი კულტურული იდენტობის ქვაკუთხედი.&nbsp;</p>', '<p><strong>მიხეილ ჩხენკელი:</strong>&nbsp;&bdquo;დღეს ჩვენ სამინისტროს შემადგენლობაში შემავალი, მე ვიტყოდი, განსაკუთრებული, კულტურული მემკვიდრეობის დაცვის ეროვნული სააგენტოს პრეზენტაციას ვესწრებით, რომელიც ჭეშმარიტად უზარმაზარ საქმეს ემსახურება. ჩვენი კულტურის, ჩვენი ისტორიული მემკვიდრეობის დაცვა ყოველი ჩვენგანის მოვალეობაა, რადგანაც ეს არის ჩვენი კულტურული იდენტობის ქვაკუთხედი.&nbsp;</p>', '<p><strong>მიხეილ ჩხენკელი:</strong>&nbsp;&bdquo;დღეს ჩვენ სამინისტროს შემადგენლობაში შემავალი, მე ვიტყოდი, განსაკუთრებული, კულტურული მემკვიდრეობის დაცვის ეროვნული სააგენტოს პრეზენტაციას ვესწრებით, რომელიც ჭეშმარიტად უზარმაზარ საქმეს ემსახურება. ჩვენი კულტურის, ჩვენი ისტორიული მემკვიდრეობის დაცვა ყოველი ჩვენგანის მოვალეობაა, რადგანაც ეს არის ჩვენი კულტურული იდენტობის ქვაკუთხედი.&nbsp;</p>', '<p><strong>მიხეილ ჩხენკელი:</strong>&nbsp;&bdquo;დღეს ჩვენ სამინისტროს შემადგენლობაში შემავალი, მე ვიტყოდი, განსაკუთრებული, კულტურული მემკვიდრეობის დაცვის ეროვნული სააგენტოს პრეზენტაციას ვესწრებით, რომელიც ჭეშმარიტად უზარმაზარ საქმეს ემსახურება. ჩვენი კულტურის, ჩვენი ისტორიული მემკვიდრეობის დაცვა ყოველი ჩვენგანის მოვალეობაა, რადგანაც ეს არის ჩვენი კულტურული იდენტობის ქვაკუთხედი.&nbsp;</p>', '<p><strong>მიხეილ ჩხენკელი:</strong>&nbsp;&bdquo;დღეს ჩვენ სამინისტროს შემადგენლობაში შემავალი, მე ვიტყოდი, განსაკუთრებული, კულტურული მემკვიდრეობის დაცვის ეროვნული სააგენტოს პრეზენტაციას ვესწრებით, რომელიც ჭეშმარიტად უზარმაზარ საქმეს ემსახურება. ჩვენი კულტურის, ჩვენი ისტორიული მემკვიდრეობის დაცვა ყოველი ჩვენგანის მოვალეობაა, რადგანაც ეს არის ჩვენი კულტურული იდენტობის ქვაკუთხედი.&nbsp;</p>', '<p><strong>მიხეილ ჩხენკელი:</strong>&nbsp;&bdquo;დღეს ჩვენ სამინისტროს შემადგენლობაში შემავალი, მე ვიტყოდი, განსაკუთრებული, კულტურული მემკვიდრეობის დაცვის ეროვნული სააგენტოს პრეზენტაციას ვესწრებით, რომელიც ჭეშმარიტად უზარმაზარ საქმეს ემსახურება. ჩვენი კულტურის, ჩვენი ისტორიული მემკვიდრეობის დაცვა ყოველი ჩვენგანის მოვალეობაა, რადგანაც ეს არის ჩვენი კულტურული იდენტობის ქვაკუთხედი.&nbsp;</p>', '<p><strong>მიხეილ ჩხენკელი:</strong>&nbsp;&bdquo;დღეს ჩვენ სამინისტროს შემადგენლობაში შემავალი, მე ვიტყოდი, განსაკუთრებული, კულტურული მემკვიდრეობის დაცვის ეროვნული სააგენტოს პრეზენტაციას ვესწრებით, რომელიც ჭეშმარიტად უზარმაზარ საქმეს ემსახურება. ჩვენი კულტურის, ჩვენი ისტორიული მემკვიდრეობის დაცვა ყოველი ჩვენგანის მოვალეობაა, რადგანაც ეს არის ჩვენი კულტურული იდენტობის ქვაკუთხედი.&nbsp;</p>', '<p><strong>მიხეილ ჩხენკელი:</strong>&nbsp;&bdquo;დღეს ჩვენ სამინისტროს შემადგენლობაში შემავალი, მე ვიტყოდი, განსაკუთრებული, კულტურული მემკვიდრეობის დაცვის ეროვნული სააგენტოს პრეზენტაციას ვესწრებით, რომელიც ჭეშმარიტად უზარმაზარ საქმეს ემსახურება. ჩვენი კულტურის, ჩვენი ისტორიული მემკვიდრეობის დაცვა ყოველი ჩვენგანის მოვალეობაა, რადგანაც ეს არის ჩვენი კულტურული იდენტობის ქვაკუთხედი.&nbsp;</p>', '<p><strong>მიხეილ ჩხენკელი:</strong>&nbsp;&bdquo;დღეს ჩვენ სამინისტროს შემადგენლობაში შემავალი, მე ვიტყოდი, განსაკუთრებული, კულტურული მემკვიდრეობის დაცვის ეროვნული სააგენტოს პრეზენტაციას ვესწრებით, რომელიც ჭეშმარიტად უზარმაზარ საქმეს ემსახურება. ჩვენი კულტურის, ჩვენი ისტორიული მემკვიდრეობის დაცვა ყოველი ჩვენგანის მოვალეობაა, რადგანაც ეს არის ჩვენი კულტურული იდენტობის ქვაკუთხედი.&nbsp;</p>', '<p><strong>მიხეილ ჩხენკელი:</strong>&nbsp;&bdquo;დღეს ჩვენ სამინისტროს შემადგენლობაში შემავალი, მე ვიტყოდი, განსაკუთრებული, კულტურული მემკვიდრეობის დაცვის ეროვნული სააგენტოს პრეზენტაციას ვესწრებით, რომელიც ჭეშმარიტად უზარმაზარ საქმეს ემსახურება. ჩვენი კულტურის, ჩვენი ისტორიული მემკვიდრეობის დაცვა ყოველი ჩვენგანის მოვალეობაა, რადგანაც ეს არის ჩვენი კულტურული იდენტობის ქვაკუთხედი.&nbsp;</p>', '<p><strong>მიხეილ ჩხენკელი:</strong>&nbsp;&bdquo;დღეს ჩვენ სამინისტროს შემადგენლობაში შემავალი, მე ვიტყოდი, განსაკუთრებული, კულტურული მემკვიდრეობის დაცვის ეროვნული სააგენტოს პრეზენტაციას ვესწრებით, რომელიც ჭეშმარიტად უზარმაზარ საქმეს ემსახურება. ჩვენი კულტურის, ჩვენი ისტორიული მემკვიდრეობის დაცვა ყოველი ჩვენგანის მოვალეობაა, რადგანაც ეს არის ჩვენი კულტურული იდენტობის ქვაკუთხედი.&nbsp;</p>', '<p><strong>მიხეილ ჩხენკელი:</strong>&nbsp;&bdquo;დღეს ჩვენ სამინისტროს შემადგენლობაში შემავალი, მე ვიტყოდი, განსაკუთრებული, კულტურული მემკვიდრეობის დაცვის ეროვნული სააგენტოს პრეზენტაციას ვესწრებით, რომელიც ჭეშმარიტად უზარმაზარ საქმეს ემსახურება. ჩვენი კულტურის, ჩვენი ისტორიული მემკვიდრეობის დაცვა ყოველი ჩვენგანის მოვალეობაა, რადგანაც ეს არის ჩვენი კულტურული იდენტობის ქვაკუთხედი.&nbsp;</p>', '<p><strong>მიხეილ ჩხენკელი:</strong>&nbsp;&bdquo;დღეს ჩვენ სამინისტროს შემადგენლობაში შემავალი, მე ვიტყოდი, განსაკუთრებული, კულტურული მემკვიდრეობის დაცვის ეროვნული სააგენტოს პრეზენტაციას ვესწრებით, რომელიც ჭეშმარიტად უზარმაზარ საქმეს ემსახურება. ჩვენი კულტურის, ჩვენი ისტორიული მემკვიდრეობის დაცვა ყოველი ჩვენგანის მოვალეობაა, რადგანაც ეს არის ჩვენი კულტურული იდენტობის ქვაკუთხედი.&nbsp; 54654654</p>', '1592810435mineralizacia_footer.png', '1592810494mineralizacia1.png', '1592810482mineralizacia_footer.png');

-- --------------------------------------------------------

--
-- Table structure for table `sno_products`
--

CREATE TABLE `sno_products` (
  `sno_products_id` int(111) NOT NULL,
  `sno_products_desc_ka` varchar(255) NOT NULL,
  `sno_products_desc_en` varchar(255) NOT NULL,
  `sno_products_desc_ru` varchar(255) NOT NULL,
  `sno_products_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sno_products`
--

INSERT INTO `sno_products` (`sno_products_id`, `sno_products_desc_ka`, `sno_products_desc_en`, `sno_products_desc_ru`, `sno_products_image`) VALUES
(1, 'სნო 0.5 ლიტრი', '', '', '1.png'),
(2, 'სნო 1 მილიტრი', '', '', '2.png');

-- --------------------------------------------------------

--
-- Table structure for table `sno_product_area`
--

CREATE TABLE `sno_product_area` (
  `sno_product_area_id` int(111) NOT NULL,
  `sno_product_area_header_image` varchar(255) NOT NULL,
  `sno_product_area_header_video` varchar(255) NOT NULL,
  `sno_product_area_limon_image` varchar(255) NOT NULL,
  `sno_product_area_limon_video` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sno_product_area`
--

INSERT INTO `sno_product_area` (`sno_product_area_id`, `sno_product_area_header_image`, `sno_product_area_header_video`, `sno_product_area_limon_image`, `sno_product_area_limon_video`) VALUES
(1, '1592735683history.png', 'https://www.youtube.com/watch?v=tqsd-R3c_H0', 'limonicover.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `sno_xarisxi`
--

CREATE TABLE `sno_xarisxi` (
  `sno_xarisxi_id` int(111) NOT NULL,
  `sno_xarisxi_pirveli_ka` longtext NOT NULL,
  `sno_xarisxi_pirveli_en` longtext NOT NULL,
  `sno_xarisxi_pirveli_ru` longtext NOT NULL,
  `sno_xarisxi_meore_ka` longtext NOT NULL,
  `sno_xarisxi_meore_en` longtext NOT NULL,
  `sno_xarisxi_meore_ru` longtext NOT NULL,
  `sno_xarisxi_mesame_ka` longtext NOT NULL,
  `sno_xarisxi_mesame_en` longtext NOT NULL,
  `sno_xarisxi_mesame_ru` longtext NOT NULL,
  `sno_xarisxi_meotxe_ka` longtext NOT NULL,
  `sno_xarisxi_meotxe_en` longtext NOT NULL,
  `sno_xarisxi_meotxe_ru` longtext NOT NULL,
  `sno_xarisxi_mexute_ka` longtext NOT NULL,
  `sno_xarisxi_mexute_en` longtext NOT NULL,
  `sno_xarisxi_mexute_ru` longtext NOT NULL,
  `sno_xarisxi_image1` varchar(255) NOT NULL,
  `sno_xarisxi_image2` varchar(255) NOT NULL,
  `sno_xarisxi_image3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sno_xarisxi`
--

INSERT INTO `sno_xarisxi` (`sno_xarisxi_id`, `sno_xarisxi_pirveli_ka`, `sno_xarisxi_pirveli_en`, `sno_xarisxi_pirveli_ru`, `sno_xarisxi_meore_ka`, `sno_xarisxi_meore_en`, `sno_xarisxi_meore_ru`, `sno_xarisxi_mesame_ka`, `sno_xarisxi_mesame_en`, `sno_xarisxi_mesame_ru`, `sno_xarisxi_meotxe_ka`, `sno_xarisxi_meotxe_en`, `sno_xarisxi_meotxe_ru`, `sno_xarisxi_mexute_ka`, `sno_xarisxi_mexute_en`, `sno_xarisxi_mexute_ru`, `sno_xarisxi_image1`, `sno_xarisxi_image2`, `sno_xarisxi_image3`) VALUES
(1, '<p>საქართველოს განათლების, მეცნიერების, კულტურისა და სპორტის მინისტრი მიხეილ ჩხენკელი სსიპ კულტურული მემკვიდრეობის დაცვის ეროვნული სააგენტოს ანგარიშის წარდგენას დაესწრო და საზოგადოებას სიტყვით მიმართა.</p>', '<p>საქართველოს განათლების, მეცნიერების, კულტურისა და სპორტის მინისტრი მიხეილ ჩხენკელი სსიპ კულტურული მემკვიდრეობის დაცვის ეროვნული სააგენტოს ანგარიშის წარდგენას დაესწრო და საზოგადოებას სიტყვით მიმართა.</p>', '<p>საქართველოს განათლების, მეცნიერების, კულტურისა და სპორტის მინისტრი მიხეილ ჩხენკელი სსიპ კულტურული მემკვიდრეობის დაცვის ეროვნული სააგენტოს ანგარიშის წარდგენას დაესწრო და საზოგადოებას სიტყვით მიმართა.</p>', '<p>საქართველოს განათლების, მეცნიერების, კულტურისა და სპორტის მინისტრი მიხეილ ჩხენკელი სსიპ კულტურული მემკვიდრეობის დაცვის ეროვნული სააგენტოს ანგარიშის წარდგენას დაესწრო და საზოგადოებას სიტყვით მიმართა.</p>', '<p>საქართველოს განათლების, მეცნიერების, კულტურისა და სპორტის მინისტრი მიხეილ ჩხენკელი სსიპ კულტურული მემკვიდრეობის დაცვის ეროვნული სააგენტოს ანგარიშის წარდგენას დაესწრო და საზოგადოებას სიტყვით მიმართა.</p>', '<p>საქართველოს განათლების, მეცნიერების, კულტურისა და სპორტის მინისტრი მიხეილ ჩხენკელი სსიპ კულტურული მემკვიდრეობის დაცვის ეროვნული სააგენტოს ანგარიშის წარდგენას დაესწრო და საზოგადოებას სიტყვით მიმართა.</p>', '<p>საქართველოს განათლების, მეცნიერების, კულტურისა და სპორტის მინისტრი მიხეილ ჩხენკელი სსიპ კულტურული მემკვიდრეობის დაცვის ეროვნული სააგენტოს ანგარიშის წარდგენას დაესწრო და საზოგადოებას სიტყვით მიმართა.</p>', '<p>საქართველოს განათლების, მეცნიერების, კულტურისა და სპორტის მინისტრი მიხეილ ჩხენკელი სსიპ კულტურული მემკვიდრეობის დაცვის ეროვნული სააგენტოს ანგარიშის წარდგენას დაესწრო და საზოგადოებას სიტყვით მიმართა.</p>', '<p>საქართველოს განათლების, მეცნიერების, კულტურისა და სპორტის მინისტრი მიხეილ ჩხენკელი სსიპ კულტურული მემკვიდრეობის დაცვის ეროვნული სააგენტოს ანგარიშის წარდგენას დაესწრო და საზოგადოებას სიტყვით მიმართა.</p>', '<p>საქართველოს განათლების, მეცნიერების, კულტურისა და სპორტის მინისტრი მიხეილ ჩხენკელი სსიპ კულტურული მემკვიდრეობის დაცვის ეროვნული სააგენტოს ანგარიშის წარდგენას დაესწრო და საზოგადოებას სიტყვით მიმართა.</p>', '<p>საქართველოს განათლების, მეცნიერების, კულტურისა და სპორტის მინისტრი მიხეილ ჩხენკელი სსიპ კულტურული მემკვიდრეობის დაცვის ეროვნული სააგენტოს ანგარიშის წარდგენას დაესწრო და საზოგადოებას სიტყვით მიმართა.</p>', '<p>საქართველოს განათლების, მეცნიერების, კულტურისა და სპორტის მინისტრი მიხეილ ჩხენკელი სსიპ კულტურული მემკვიდრეობის დაცვის ეროვნული სააგენტოს ანგარიშის წარდგენას დაესწრო და საზოგადოებას სიტყვით მიმართა.</p>', '<p>საქართველოს განათლების, მეცნიერების, კულტურისა და სპორტის მინისტრი მიხეილ ჩხენკელი სსიპ კულტურული მემკვიდრეობის დაცვის ეროვნული სააგენტოს ანგარიშის წარდგენას დაესწრო და საზოგადოებას სიტყვით მიმართა.</p>', '<p>საქართველოს განათლების, მეცნიერების, კულტურისა და სპორტის მინისტრი მიხეილ ჩხენკელი სსიპ კულტურული მემკვიდრეობის დაცვის ეროვნული სააგენტოს ანგარიშის წარდგენას დაესწრო და საზოგადოებას სიტყვით მიმართა.</p>', '<p>საქართველოს განათლების, მეცნიერების, კულტურისა და სპორტის მინისტრი მიხეილ ჩხენკელი სსიპ კულტურული მემკვიდრეობის დაცვის ეროვნული სააგენტოს ანგარიშის წარდგენას დაესწრო და საზოგადოებას სიტყვით მიმართა.</p>', '1592810524xarisxi.png', '1592810533xarisxi2.png', '1592810541xarisxi3.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin@sno.ge', NULL, '$2y$10$GXaQgaCbu/nbw/9jqEIsjeS0NgrT6dXvbUdC97ZF3dLlb/cJbNwEu', NULL, '2020-06-10 17:38:31', '2020-06-10 17:38:31'),
(2, 'ადმინისტრატორი', 'admin@admin.ge', NULL, '$2y$10$DGNpzAK4sBuT05DwxQriOeVqdOur.cUfrncBsJ1zlYdW3Oiexr3Wm', NULL, '2020-06-13 15:13:16', '2020-06-13 15:13:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `eksporti`
--
ALTER TABLE `eksporti`
  ADD PRIMARY KEY (`eksporti_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kobi_likage`
--
ALTER TABLE `kobi_likage`
  ADD PRIMARY KEY (`kobi_likage_id`);

--
-- Indexes for table `kobi_mineral`
--
ALTER TABLE `kobi_mineral`
  ADD PRIMARY KEY (`kobi_mineral_id`);

--
-- Indexes for table `kobi_products`
--
ALTER TABLE `kobi_products`
  ADD PRIMARY KEY (`kobi_products_id`);

--
-- Indexes for table `kobi_product_area`
--
ALTER TABLE `kobi_product_area`
  ADD PRIMARY KEY (`kobi_product_area_id`);

--
-- Indexes for table `kobi_xarisxi`
--
ALTER TABLE `kobi_xarisxi`
  ADD PRIMARY KEY (`kobi_xarisxi_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `sno_likage`
--
ALTER TABLE `sno_likage`
  ADD PRIMARY KEY (`sno_likage_id`);

--
-- Indexes for table `sno_mineral`
--
ALTER TABLE `sno_mineral`
  ADD PRIMARY KEY (`sno_mineral_id`);

--
-- Indexes for table `sno_products`
--
ALTER TABLE `sno_products`
  ADD PRIMARY KEY (`sno_products_id`);

--
-- Indexes for table `sno_product_area`
--
ALTER TABLE `sno_product_area`
  ADD PRIMARY KEY (`sno_product_area_id`);

--
-- Indexes for table `sno_xarisxi`
--
ALTER TABLE `sno_xarisxi`
  ADD PRIMARY KEY (`sno_xarisxi_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `company_id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `eksporti`
--
ALTER TABLE `eksporti`
  MODIFY `eksporti_id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kobi_likage`
--
ALTER TABLE `kobi_likage`
  MODIFY `kobi_likage_id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kobi_mineral`
--
ALTER TABLE `kobi_mineral`
  MODIFY `kobi_mineral_id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kobi_products`
--
ALTER TABLE `kobi_products`
  MODIFY `kobi_products_id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kobi_product_area`
--
ALTER TABLE `kobi_product_area`
  MODIFY `kobi_product_area_id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kobi_xarisxi`
--
ALTER TABLE `kobi_xarisxi`
  MODIFY `kobi_xarisxi_id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sno_likage`
--
ALTER TABLE `sno_likage`
  MODIFY `sno_likage_id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sno_mineral`
--
ALTER TABLE `sno_mineral`
  MODIFY `sno_mineral_id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sno_products`
--
ALTER TABLE `sno_products`
  MODIFY `sno_products_id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sno_product_area`
--
ALTER TABLE `sno_product_area`
  MODIFY `sno_product_area_id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sno_xarisxi`
--
ALTER TABLE `sno_xarisxi`
  MODIFY `sno_xarisxi_id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
