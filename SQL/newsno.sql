-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2020 at 08:06 AM
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
  `blog_main_pic` text NOT NULL,
  `blog_detail_pic` text NOT NULL,
  `blog_time` text NOT NULL,
  `blog_readed` int(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blog_id`, `blog_title_ka`, `blog_title_en`, `blog_title_ru`, `blog_text_ka`, `blog_text_en`, `blog_text_ru`, `blog_main_pic`, `blog_detail_pic`, `blog_time`, `blog_readed`) VALUES
(1, 'ასსასას', '', 'С 13 июня каждые выходные Teleskola открывает новые возможности для студентов. При поддержке Министерства образования, науки, культуры и спорта Грузии и Британского совета англоязычная программа Bibis «Слово на улице» будет транслироваться в течение пяти недель. Программа, которая была успешно передана и передана в Гонконге, Черногории, Сербии, Турции и т. Д. В странах грузинские студенты будут эффективно использовать летний период и помогут улучшить свои знания английского языка.', '13 ივნისიდან, ყოველ შაბათ-კვირას „ტელესკოლა” მოსწავლეებს ახალ შესაძლებლობებს სთავაზობს. საქართველოს განათლების მეცნიერების, კულტურისა და სპორტის სამინისტროსა და ბრიტანეთის საბჭოს მხარდაჭერით, ხუთი კვირის განმავლობაში, „ტელესკოლაში“ ბიბისის ინგლისური ენის შემსწავლელი პროგრამა „ყურმოკრული ამბები“ (Word on the Street) გავა. პროგრამა, რომელიც წარმატებით გადაიცემოდა და გადაიცემა ჰონკონგში, მონტენეგროში, სერბეთში, თურქეთსა და ა.შ. ქვეყნებში, ქართველს მოსწავლეებს ზაფხულის პერიოდის ეფექტურად გამოიყენებს და ინგლისური ენის ცოდნის გაუმჯობესებაში დაეხმარება.', 'From June 13, every weekend, Teleskola offers new opportunities to students. With the support of the Ministry of Education, Science, Culture and Sports of Georgia and the British Council, Bibis\'s English-language program \"Word on the Street\" will be aired for five weeks at the TV School. A program that has been successfully transmitted and transmitted in Hong Kong, Montenegro, Serbia, Turkey, etc. In the countries, Georgian students will use the summer period effectively and help improve their English language skills.', 'С 13 июня каждые выходные Teleskola открывает новые возможности для студентов. При поддержке Министерства образования, науки, культуры и спорта Грузии и Британского совета англоязычная программа Bibis «Слово на улице» будет транслироваться в течение пяти недель. Программа, которая была успешно передана и передана в Гонконге, Черногории, Сербии, Турции и т. Д. В странах грузинские студенты будут эффективно использовать летний период и помогут улучшить свои знания английского языка.', '', '', '', 0),
(2, 'დსფსდფ', '', 'С 13 июня каждые выходные Teleskola открывает новые возможности для студентов. При поддержке Министерства образования, науки, культуры и спорта Грузии и Британского совета англоязычная программа Bibis «Слово на улице» будет транслироваться в течение пяти недель. Программа, которая была успешно передана и передана в Гонконге, Черногории, Сербии, Турции и т. Д. В странах грузинские студенты будут эффективно использовать летний период и помогут улучшить свои знания английского языка.', '13 ივნისიდან, ყოველ შაბათ-კვირას „ტელესკოლა” მოსწავლეებს ახალ შესაძლებლობებს სთავაზობს. საქართველოს განათლების მეცნიერების, კულტურისა და სპორტის სამინისტროსა და ბრიტანეთის საბჭოს მხარდაჭერით, ხუთი კვირის განმავლობაში, „ტელესკოლაში“ ბიბისის ინგლისური ენის შემსწავლელი პროგრამა „ყურმოკრული ამბები“ (Word on the Street) გავა. პროგრამა, რომელიც წარმატებით გადაიცემოდა და გადაიცემა ჰონკონგში, მონტენეგროში, სერბეთში, თურქეთსა და ა.შ. ქვეყნებში, ქართველს მოსწავლეებს ზაფხულის პერიოდის ეფექტურად გამოიყენებს და ინგლისური ენის ცოდნის გაუმჯობესებაში დაეხმარება.', 'From June 13, every weekend, Teleskola offers new opportunities to students. With the support of the Ministry of Education, Science, Culture and Sports of Georgia and the British Council, Bibis\'s English-language program \"Word on the Street\" will be aired for five weeks at the TV School. A program that has been successfully transmitted and transmitted in Hong Kong, Montenegro, Serbia, Turkey, etc. In the countries, Georgian students will use the summer period effectively and help improve their English language skills.', 'С 13 июня каждые выходные Teleskola открывает новые возможности для студентов. При поддержке Министерства образования, науки, культуры и спорта Грузии и Британского совета англоязычная программа Bibis «Слово на улице» будет транслироваться в течение пяти недель. Программа, которая была успешно передана и передана в Гонконге, Черногории, Сербии, Турции и т. Д. В странах грузинские студенты будут эффективно использовать летний период и помогут улучшить свои знания английского языка.', '', '', '', 0),
(3, '', '', 'С 13 июня каждые выходные Teleskola открывает новые возможности для студентов. При поддержке Министерства образования, науки, культуры и спорта Грузии и Британского совета англоязычная программа Bibis «Слово на улице» будет транслироваться в течение пяти недель. Программа, которая была успешно передана и передана в Гонконге, Черногории, Сербии, Турции и т. Д. В странах грузинские студенты будут эффективно использовать летний период и помогут улучшить свои знания английского языка.', '13 ივნისიდან, ყოველ შაბათ-კვირას „ტელესკოლა” მოსწავლეებს ახალ შესაძლებლობებს სთავაზობს. საქართველოს განათლების მეცნიერების, კულტურისა და სპორტის სამინისტროსა და ბრიტანეთის საბჭოს მხარდაჭერით, ხუთი კვირის განმავლობაში, „ტელესკოლაში“ ბიბისის ინგლისური ენის შემსწავლელი პროგრამა „ყურმოკრული ამბები“ (Word on the Street) გავა. პროგრამა, რომელიც წარმატებით გადაიცემოდა და გადაიცემა ჰონკონგში, მონტენეგროში, სერბეთში, თურქეთსა და ა.შ. ქვეყნებში, ქართველს მოსწავლეებს ზაფხულის პერიოდის ეფექტურად გამოიყენებს და ინგლისური ენის ცოდნის გაუმჯობესებაში დაეხმარება.', '13 ივნისიდან, ყოველ შაბათ-კვირას „ტელესკოლა” მოსწავლეებს ახალ შესაძლებლობებს სთავაზობს. საქართველოს განათლების მეცნიერების, კულტურისა და სპორტის სამინისტროსა და ბრიტანეთის საბჭოს მხარდაჭერით, ხუთი კვირის განმავლობაში, „ტელესკოლაში“ ბიბისის ინგლისური ენის შემსწავლელი პროგრამა „ყურმოკრული ამბები“ (Word on the Street) გავა. პროგრამა, რომელიც წარმატებით გადაიცემოდა და გადაიცემა ჰონკონგში, მონტენეგროში, სერბეთში, თურქეთსა და ა.შ. ქვეყნებში, ქართველს მოსწავლეებს ზაფხულის პერიოდის ეფექტურად გამოიყენებს და ინგლისური ენის ცოდნის გაუმჯობესებაში დაეხმარება.', 'С 13 июня каждые выходные Teleskola открывает новые возможности для студентов. При поддержке Министерства образования, науки, культуры и спорта Грузии и Британского совета англоязычная программа Bibis «Слово на улице» будет транслироваться в течение пяти недель. Программа, которая была успешно передана и передана в Гонконге, Черногории, Сербии, Турции и т. Д. В странах грузинские студенты будут эффективно использовать летний период и помогут улучшить свои знания английского языка.', '', '', '', 0),
(4, '', '', 'С 13 июня каждые выходные Teleskola открывает новые возможности для студентов. При поддержке Министерства образования, науки, культуры и спорта Грузии и Британского совета англоязычная программа Bibis «Слово на улице» будет транслироваться в течение пяти недель. Программа, которая была успешно передана и передана в Гонконге, Черногории, Сербии, Турции и т. Д. В странах грузинские студенты будут эффективно использовать летний период и помогут улучшить свои знания английского языка.', '13 ივნისიდან, ყოველ შაბათ-კვირას „ტელესკოლა” მოსწავლეებს ახალ შესაძლებლობებს სთავაზობს. საქართველოს განათლების მეცნიერების, კულტურისა და სპორტის სამინისტროსა და ბრიტანეთის საბჭოს მხარდაჭერით, ხუთი კვირის განმავლობაში, „ტელესკოლაში“ ბიბისის ინგლისური ენის შემსწავლელი პროგრამა „ყურმოკრული ამბები“ (Word on the Street) გავა. პროგრამა, რომელიც წარმატებით გადაიცემოდა და გადაიცემა ჰონკონგში, მონტენეგროში, სერბეთში, თურქეთსა და ა.შ. ქვეყნებში, ქართველს მოსწავლეებს ზაფხულის პერიოდის ეფექტურად გამოიყენებს და ინგლისური ენის ცოდნის გაუმჯობესებაში დაეხმარება.', '13 ივნისიდან, ყოველ შაბათ-კვირას „ტელესკოლა” მოსწავლეებს ახალ შესაძლებლობებს სთავაზობს. საქართველოს განათლების მეცნიერების, კულტურისა და სპორტის სამინისტროსა და ბრიტანეთის საბჭოს მხარდაჭერით, ხუთი კვირის განმავლობაში, „ტელესკოლაში“ ბიბისის ინგლისური ენის შემსწავლელი პროგრამა „ყურმოკრული ამბები“ (Word on the Street) გავა. პროგრამა, რომელიც წარმატებით გადაიცემოდა და გადაიცემა ჰონკონგში, მონტენეგროში, სერბეთში, თურქეთსა და ა.შ. ქვეყნებში, ქართველს მოსწავლეებს ზაფხულის პერიოდის ეფექტურად გამოიყენებს და ინგლისური ენის ცოდნის გაუმჯობესებაში დაეხმარება.', 'С 13 июня каждые выходные Teleskola открывает новые возможности для студентов. При поддержке Министерства образования, науки, культуры и спорта Грузии и Британского совета англоязычная программа Bibis «Слово на улице» будет транслироваться в течение пяти недель. Программа, которая была успешно передана и передана в Гонконге, Черногории, Сербии, Турции и т. Д. В странах грузинские студенты будут эффективно использовать летний период и помогут улучшить свои знания английского языка.', '', '', '', 0);

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
(1, '<p>კომპანია &rdquo;აქვა გეო&rdquo;-ს მიზანია უნიკალური ბუნებრივი თვისებების მქონე ქართული წყალი წარმოების მაღალი ტექნოლოგიების გამოყენებით უცვლელად მიიტანოს მომხმარებლამდე.<br />\r\n<br />\r\nკომპანია მიზანად ისახავს მაღალი ხარისხის ქართული, უნიკალური, არაგაზირებული, მინერალური წყლის წარმოება-ჩამოსხმას, რეალიზაციასა და პოპულარიზაციას, როგორც ადგილობრივ, ასევე საექსპორტო ბაზარზე.</p>', '<p>კომპანია &rdquo;აქვა გეო&rdquo;-ს მიზანია უნიკალური ბუნებრივი თვისებების მქონე ქართული წყალი წარმოების მაღალი ტექნოლოგიების გამოყენებით უცვლელად მიიტანოს მომხმარებლამდე.<br />\r\n<br />\r\nკომპანია მიზანად ისახავს მაღალი ხარისხის ქართული, უნიკალური, არაგაზირებული, მინერალური წყლის წარმოება-ჩამოსხმას, რეალიზაციასა და პოპულარიზაციას, როგორც ადგილობრივ, ასევე საექსპორტო ბაზარზე.</p>', '<p>კომპანია &rdquo;აქვა გეო&rdquo;-ს მიზანია უნიკალური ბუნებრივი თვისებების მქონე ქართული წყალი წარმოების მაღალი ტექნოლოგიების გამოყენებით უცვლელად მიიტანოს მომხმარებლამდე.<br />\r\n<br />\r\nკომპანია მიზანად ისახავს მაღალი ხარისხის ქართული, უნიკალური, არაგაზირებული, მინერალური წყლის წარმოება-ჩამოსხმას, რეალიზაციასა და პოპულარიზაციას, როგორც ადგილობრივ, ასევე საექსპორტო ბაზარზე.</p>', '', '<p>კომპანია &ldquo;აქვა გეო&rdquo;-ს დაპროექტებისა და მშენებლობის პროცესი თვის განმავლობაში მიმდინარეობდა. აღსანიშნავია, რომ პროექტში მონაწილე კომპანიების უმრავლესობა ქართული კომპანიებია, რაც ჩვენ განსაკუთრებული სიამაყით გვავსებს. ამავდროულად ჩვენ სრულად გამოვიყენეთ დარგში არსებული თანამედროვე ევროპული გამოცდილება.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>კომპანია თავის თავში აერთიანებს ქართულ საქმესა და სურვილს საკუთარი წვლილი შეიტანოს ქართული ეკონომიკის განვითარებაში. ეს არის მთლიანად ქართული კომპანია, რაც თავისთავად გულისხმობს მრავალი ქართული ოჯახის დასაქმებას.</p>', '<p>The design and construction process of the company &quot;Aqua Geo&quot; has been going on for months. It should be noted that most of the companies participating in the project are Georgian companies, which fills us with special pride.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>At the same time, we have made full use of modern European experience in the field. The company combines Georgian business and its desire to contribute to the development of the Georgian economy. It is a completely Georgian company, which in itself means the employment of many Georgian families.</p>', '<p>Процесс проектирования и строительства компании &laquo;Аква Гео&raquo; продолжается уже несколько месяцев. Следует отметить, что большинство компаний, участвующих в проекте, являются грузинскими компаниями, что вызывает у нас особую гордость.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>В то же время мы в полной мере использовали современный европейский опыт в этой области. Компания объединяет грузинский бизнес и его желание внести свой вклад в развитие экономики Грузии. Это полностью грузинская компания, что само по себе означает трудоустройство многих грузинских семей.</p>', '<p>კომპანია &ldquo;აქვა გეო&rdquo;-ს დაპროექტებისა და მშენებლობის პროცესი თვის განმავლობაში მიმდინარეობდა. აღსანიშნავია, რომ პროექტში მონაწილე კომპანიების უმრავლესობა ქართული კომპანიებია, რაც ჩვენ განსაკუთრებული სიამაყით გვავსებს. ამავდროულად ჩვენ სრულად გამოვიყენეთ დარგში არსებული თანამედროვე ევროპული გამოცდილება.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>კომპანია თავის თავში აერთიანებს ქართულ საქმესა და სურვილს საკუთარი წვლილი შეიტანოს ქართული ეკონომიკის განვითარებაში. ეს არის მთლიანად ქართული კომპანია, რაც თავისთავად გულისხმობს მრავალი ქართული ოჯახის დასაქმებას.</p>', '<p>The design and construction process of the company &quot;Aqua Geo&quot; has been going on for months. It should be noted that most of the companies participating in the project are Georgian companies, which fills us with special pride.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>At the same time, we have made full use of modern European experience in the field. The company combines Georgian business and its desire to contribute to the development of the Georgian economy. It is a completely Georgian company, which in itself means the employment of many Georgian families.</p>', '<p>Процесс проектирования и строительства компании &laquo;Аква Гео&raquo; продолжается уже несколько месяцев. Следует отметить, что большинство компаний, участвующих в проекте, являются грузинскими компаниями, что вызывает у нас особую гордость.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>В то же время мы в полной мере использовали современный европейский опыт в этой области. Компания объединяет грузинский бизнес и его желание внести свой вклад в развитие экономики Грузии. Это полностью грузинская компания, что само по себе означает трудоустройство многих грузинских семей.</p>', '<p>კომპანია &rdquo;აქვა გეო&rdquo;-ს მიზანია უნიკალური ბუნებრივი თვისებების მქონე ქართული წყალი წარმოების მაღალი ტექნოლოგიების გამოყენებით უცვლელად მიიტანოს მომხმარებლამდე.<br />\r\n<br />\r\nკომპანია მიზანად ისახავს მაღალი ხარისხის ქართული, უნიკალური, არაგაზირებული, მინერალური წყლის წარმოება-ჩამოსხმას, რეალიზაციასა და პოპულარიზაციას, როგორც ადგილობრივ, ასევე საექსპორტო ბაზარზე.</p>', '<p>კომპანია &rdquo;აქვა გეო&rdquo;-ს მიზანია უნიკალური ბუნებრივი თვისებების მქონე ქართული წყალი წარმოების მაღალი ტექნოლოგიების გამოყენებით უცვლელად მიიტანოს მომხმარებლამდე.<br />\r\n<br />\r\nკომპანია მიზანად ისახავს მაღალი ხარისხის ქართული, უნიკალური, არაგაზირებული, მინერალური წყლის წარმოება-ჩამოსხმას, რეალიზაციასა და პოპულარიზაციას, როგორც ადგილობრივ, ასევე საექსპორტო ბაზარზე.</p>', '<p>კომპანია &rdquo;აქვა გეო&rdquo;-ს მიზანია უნიკალური ბუნებრივი თვისებების მქონე ქართული წყალი წარმოების მაღალი ტექნოლოგიების გამოყენებით უცვლელად მიიტანოს მომხმარებლამდე.<br />\r\n<br />\r\nკომპანია მიზანად ისახავს მაღალი ხარისხის ქართული, უნიკალური, არაგაზირებული, მინერალური წყლის წარმოება-ჩამოსხმას, რეალიზაციასა და პოპულარიზაციას, როგორც ადგილობრივ, ასევე საექსპორტო ბაზარზე.</p>', '', '', '', '', '', '');

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
  `sno_likage_text_mesame_en` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(2, 'ადმინისტრატორი', 'admin@admin.ge', NULL, '$2y$10$G1FTpFbTc/riJvcErjOvEOCOKstPfhC9NQ2QlJngkvtpWFI8apUK6', NULL, '2020-06-13 15:13:16', '2020-06-13 15:13:16');

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
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `company_id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sno_likage`
--
ALTER TABLE `sno_likage`
  MODIFY `sno_likage_id` int(111) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sno_mineral`
--
ALTER TABLE `sno_mineral`
  MODIFY `sno_mineral_id` int(111) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
