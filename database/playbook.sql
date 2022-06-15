-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2022 at 08:49 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `playbook`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
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
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(15, 'nour', 'nrayd633@gmail.com', NULL, '$2y$10$mXKQtbKU4tNb3sCt83N7S.BEcdhnTJqOizIGJmysTgYbM9LbZGDH6', NULL, '2022-06-15 13:48:42', '2022-06-15 13:48:42');

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `BD` date NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `name`, `BD`, `address`, `email`, `created_at`, `updated_at`) VALUES
(13, 'عائض القرني', '1959-01-01', 'السعودية', 'alqarneoffice@gmail.com', '2022-06-15 12:54:58', '2022-06-15 12:54:58'),
(14, 'محمد حسان', '1962-08-04', 'Dakahlia Governorate, Egypt', 'noEmail@hassan.com', '2022-06-15 12:55:57', '2022-06-15 12:55:57'),
(15, 'أيمن العتوم', '1972-02-03', 'Souf, Jordan', 'noEmail@AymanOtoom.com', '2022-06-15 12:56:29', '2022-06-15 12:56:29'),
(16, 'عمرو عبد الحميد', '1987-12-06', 'Egypt', 'moEmail@amro.com', '2022-06-15 12:57:12', '2022-06-15 12:57:12'),
(17, 'علي المقري', '1966-03-08', 'Taizz, Yemen', 'noEmail@ali.com', '2022-06-15 12:57:57', '2022-06-15 12:57:57'),
(18, 'كامل كيلاني', '1959-06-12', 'Cairo, Egypt', 'noEmail@kamel.com', '2022-06-15 12:58:57', '2022-06-15 12:58:57'),
(19, 'محمود درويش', '1941-12-03', 'Al-Birwa', 'noEmail@mahmoud.com', '2022-06-15 12:59:35', '2022-06-15 12:59:35'),
(20, 'نزار قباني', '1923-02-10', 'Damascus, Syria', 'noEmail@nizar.com', '2022-06-15 13:04:45', '2022-06-15 13:04:45'),
(21, 'د. إياد قنيبي', '1975-02-22', 'الأردن', 'noEmail@ead.com', '2022-06-15 13:05:59', '2022-06-15 13:05:59'),
(22, 'فهد عامر الأحمدي', '1959-12-06', 'Medina, Saudi Arabia', 'noEmail@fahd.com', '2022-06-15 13:27:58', '2022-06-15 13:27:58');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `author_id` bigint(20) UNSIGNED DEFAULT NULL,
  `publisher` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edition` int(11) NOT NULL,
  `language` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_number` int(11) NOT NULL,
  `available` int(11) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `imageName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bookPDF` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `description`, `author_id`, `publisher`, `edition`, `language`, `page_number`, `available`, `price`, `category_id`, `imageName`, `bookPDF`, `created_at`, `updated_at`) VALUES
(14, 'لا تحزن', 'عيدُ على خيرِ حالٍ عدْتَ يا عيدُ فنحنُ في مسمعِ الدنيا أناشيدُ على شفاهِ فمِ العلياءِ بسمتُنا ومن غمامِ سمانا يُورقُ العُودُ من ليلةِ الغارِ فارقْنا مآتِـمَنا منْ وقعِ «لا تحزنْ» انسابتْ تغاريدُ وكيفَ نحزنُ والكونُ انتشى طرباً من هدي (اقرأ) توحيدٌ', 13, 'العبيكان للنشر', 27, 'العربية', 928, 120, '0.00', 1, 'لا تحزن1655309318.png', 'لا تحزن1655309318.pdf', '2022-06-15 13:08:38', '2022-06-15 13:08:38'),
(15, 'لا تغضب', 'كتاب لا تغضب عبارة عن نصائح وقصص تتكلم عن الغضب واهمية ضبط النفس مدعوم بقصص عن الصحابة و العلماء والانبياء و بأدلة من القرآن الكريم و السنة النبوية', 13, 'دار الحضارة للنشر والتوزيع', 1, 'العربية', 264, 120, '20.00', 1, 'لا تغضب1655309412.jpg', 'لا تغضب1655309412.pdf', '2022-06-15 13:10:12', '2022-06-15 13:10:12'),
(16, 'السبع الموبقات', 'السبع الموبقات نسخة مصورة لفضيلة الشيخ محمد حسان : عن ابي هريرة رضي الله عنه قال : قال رسول الله (ص) اجتنبوا السبع الموبقات قالوا يا رسول الله وما هن قال الشرك بالله والسحر وقتل النفس التي حرم الله الا بالحق وأكل الربا وأكل مال اليتيم والتَّوليِّ يوم الز', 14, 'دار ابن رجب', 1, 'العربية', 147, 120, '0.00', 1, 'السبع الموبقات1655309537.webp', 'السبع الموبقات1655309537.pdf', '2022-06-15 13:12:18', '2022-06-15 13:12:18'),
(17, 'نصرة للشريعة', 'تفريغ سلسلة نصرة للشريعة', 21, 'قسم التحايا', 1, 'العربية', 164, 110, '0.00', 1, 'نصرة للشريعة1655309638.webp', 'نصرة للشريعة1655309638.pdf', '2022-06-15 13:13:58', '2022-06-15 13:13:58'),
(18, 'حسن الظن بالله', 'كيف يمكنك _أنت_ أن تَقلب المحنة إلى مِنحة؟ . كيف تستمتعُ بنعمة البلاء؟ . كيف يمكنك أن تعيش بسعادة مهما كانت الظروف؟ . كيف يمكنك التعامل مع الأمور _أيّاً كانت_ بإيجابية وتفاؤل؟. كيف تعلق قلبك بالله _عز وجل_ فلا تخاف سواه ولا ترجو سواه؟. كيف تمتلك عزيم', 21, 'دار بداية للنشر والتوزيع', 1, 'العربية', 202, 120, '0.00', 1, 'حسن الظن بالله1655309709.webp', 'حسن الظن بالله1655309709.pdf', '2022-06-15 13:15:09', '2022-06-15 13:15:09'),
(19, 'يسمعون حسيسها', 'أيمن العتوم يكتب في هذه الرواية قصة حياة سجين سوري طبيب قضى ما يقارب 17 سنة في سجن تدمر والتهمة بقيت مجهولة؟ وسبب الافراج عنه أيضا كان مجهولا بالمقارنة بالويلات التي لاقاها وزملاءه المساجين هناك... \" العفو الرئاسي\" ، هل العفو الرئاسي سبب وجيه لخروج سجين م', 15, 'المؤسسة العربية للدراسات والنشر', 2, 'العربية', 185, 150, '0.00', 3, 'يسمعون حسيسها1655309795.webp', 'يسمعون حسيسها1655309795.pdf', '2022-06-15 13:16:36', '2022-06-15 13:16:36'),
(20, 'كلمة الله', '\"اقتديت إلى ما يبدو أنّه سيكون مثواها الأخير. عبر بها عمّها شكوي الطريق الزراعية بسيارته الفارهة قاصداً الكاتدرائية. \"ماذا سيكون الأمر يا ترى؟!\" سألت نفسها. وأجابت مباشرةً: \"أعرف، يريدون أن يعرضوا هذه المجنونة على الطيب القابع خلف مكتبه الوثير في الكنيسة', 15, 'المؤسسة العربية للدراسات والنشر', 2, 'العربية', 124, 200, '0.00', 3, 'كلمة الله1655309880.webp', 'كلمة الله1655309880.pdf', '2022-06-15 13:18:00', '2022-06-15 13:18:00'),
(21, 'أرض زيكولا', '\"اقتديت إلى ما يبدو أنّه سيكون مثواها الأخير. عبر بها عمّها شكوي الطريق الزراعية بسيارته الفارهة قاصداً الكاتدرائية. \"ماذا سيكون الأمر يا ترى؟!\" سألت نفسها. وأجابت مباشرةً: \"أعرف، يريدون أن يعرضوا هذه المجنونة على الطيب القابع خلف مكتبه الوثير في الكنيسة', 16, 'عصير الكتب للنشر والتوزيع', 2, 'العربية', 124, 60, '0.00', 3, 'أرض زيكولا1655309945.webp', 'أرض زيكولا1655309945.pdf', '2022-06-15 13:19:05', '2022-06-15 13:19:05'),
(22, 'اليهودي الحالي', 'تقع الفتاة المسلمة فاطمة في غرام سالم، الشاب اليهودي، في بيئة مختلطة يهودية إسلامية. كانت تقرأ عليه بعض آيات القرآن وتعلّمه اللغة العربية، ويعلّمها هو اللغة العبرية. ولم يلبث العاشقان أن مضيا غير مكترثين بالأصوات المعترضة، وعاشا سويّة في صنعاء حيث تبدأ رح', 17, 'دار الساقي', 2, 'العربية', 80, 200, '0.00', 2, 'اليهودي الحالي1655310234.png', 'اليهودي الحالي1655310234.pdf', '2022-06-15 13:23:54', '2022-06-15 13:23:54'),
(23, 'نظرية الفستق', 'نبذة عن كتاب نظرية الفستق كتاب نظرية الفستق هو أحد كتب التنمية البشرية وتطوير الذات، مؤلف الكتاب هو فهد عامر الأحمدي، يتكون الكتاب من جزئيين الجزء الأول يحتوي على 338 صفحة، والذي يتضمن عدد كبير من المقالات التي تتحدث كيفية تطوير الذات وتحسين طرق التفكير', 22, 'دار الحضارة للنشر والتوزيع', 1, 'العربية', 338, 22, '0.00', 7, 'نظرية الفستق1655310532.webp', 'نظرية الفستق1655310532.pdf', '2022-06-15 13:28:52', '2022-06-15 13:28:52'),
(24, 'عجيبة وعجيبة', 'قصة عجيبة و عجيبة تأليف كامل كيلانى تحكي القصة حياة «عجيبة» بنت الملك «نادر»، التي توفي أبوها الملك وهي بعد في الرابعة، فكان من المفترض أن تخلُفه، ولكنها لصغر عمرها لم تتول الحكم، حيث عُين عليها وصيًا، إلى أن تكبر وتصبح قادرة على تولي زمام الحكم بنفسها. ف', 18, 'مؤسسة هنداوي للتعليم والثقافة', 1, 'العربية', 40, 120, '0.00', 8, 'عجيبة وعجيبة1655310659.webp', 'عجيبة وعجيبة1655310659.pdf', '2022-06-15 13:30:59', '2022-06-15 13:30:59'),
(25, 'بساط الريح', 'عاش في قديم الزمان، سلطَان عظيم القدر والشأن، اسمه السلطَان «محمود». كان السلطان «محمود» معروفا — بين سلاطين الهند وملوكها — بالذكَاء ونفاذ الرأي وبُعْد النظَر ورجاحة التفكير، وبراعة التدبير. وكان — إلى جانب هذه الخصال الْحميدة — مفتونا باقتناء التحف النا', 18, 'هنداوي للطباعة والتوزيع', 1, 'العربية', 91, 66, '0.00', 8, 'بساط الريح1655310754.webp', 'بساط الريح1655310754.pdf', '2022-06-15 13:32:34', '2022-06-15 13:32:34'),
(26, 'أرنب فى القمر', 'هي أحدى الأساطير الهندية التي تحكي قصة الأرنب الوفي والمخلص «أبو نبهان»، وكيف أنه كوفىء خيرًا لحرصه على مساعدة المساكين والمعوزين، بتخليد ذكراه وجعله رمزًا للصدق والوفاء.', 18, 'مؤسسة هنداوي للتعليم والثقافة', 1, 'العربية', 14, 97, '0.00', 8, 'أرنب فى القمر1655310825.webp', 'أرنب فى القمر1655310825.pdf', '2022-06-15 13:33:45', '2022-06-15 13:33:45'),
(27, 'قصائد', 'في قصائده يبحث نزار عن امرأة ليست ككل النساء امرأة يتوه بعينيها ويسكر بقبلة من شفتيها، ويسرح معها في عالم ليس كعالم البشر، وإنما بعالم هو أقرب إلى الخيال، ملىء بالحب والغرام والزواج عن القانون البشري في الحب.', 20, 'منشورات نزار قباني', 1, 'العربية', 54, 70, '0.00', 9, 'قصائد1655310961.webp', 'قصائد1655310961.pdf', '2022-06-15 13:36:01', '2022-06-15 13:36:01'),
(28, 'في حضرة الغياب', 'لن يقوى أحد على إخفاء الوجع عنك، فهو مرئي ، ملموس، مسموع كإنكسار المكان المدّوي. وتسأل : ما معنى لاجىء؟ سيقولون: هو من إقتلع من أرض الوطن وتسأل : ما معنى كلمة وطن؟ سيقولون: هو البيت وشجرة التوت وقن الدجاج وقفير النحل ورائحة الخبز والسماء الأولى وتسأل: هل', 19, 'الأهلية للنشر والتوزيع', 1, 'العربية', 70, 20, '0.00', 9, 'في حضرة الغياب1655311022.webp', 'في حضرة الغياب1655311022.pdf', '2022-06-15 13:37:02', '2022-06-15 13:37:02'),
(29, 'ذاكرة للنسيان', 'وفي هذه اللحظة المحددة، حيث تحرث الطائرات أجسادنا، يطالب المثقفون المتحلقون حول جسد غائب بقصيدة تعادل قوة الغارة أو تقلب موازين القوى على الأقل. إذا لم تولد القصيدة «الآن» فمتى تولد ؟ وإذا ولدت فيما بعد، فما هي قيمتها «الآن». سؤال بسيط ومعقد يحتاج إلى جوا', 19, 'دار توبقال للنشر', 1, 'العربية', 235, 50, '0.00', 9, 'ذاكرة للنسيان1655311089.png', 'ذاكرة للنسيان1655311089.pdf', '2022-06-15 13:38:09', '2022-06-15 13:38:09'),
(30, 'ثلاثية أطفال الحجارة', 'بهروا الدنيا وما في يدهم إلا الحجارة... وأضاؤوا كالقناديل، وجاؤوا كالبشارة، قاوموا... وانفجروا، واستشهدوا... وبقينا دبباً قطبية، صفحت أجسادها ضد الحرارة. قاتلوا عنا... إلى أن قتلوا. وبقينا في مقاهينا، كبصّاق المحارة... واحد يبحث منا عن تجارة، واحد... يطلب', 20, 'منشورات نزار قباني', 1, 'العربية', 60, 19, '0.00', 9, 'ثلاثية أطفال الحجارة1655311304.webp', 'ثلاثية أطفال الحجارة1655311304.pdf', '2022-06-15 13:41:44', '2022-06-15 13:41:44');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imageName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `imageName`, `created_at`, `updated_at`) VALUES
(1, 'إسلامية', 'إسلامية1655308004.jpg', '2022-06-15 12:46:44', '2022-06-15 12:46:44'),
(2, 'تاريخية', 'تاريخية1655308020.jpg', '2022-06-15 12:47:00', '2022-06-15 12:47:00'),
(3, 'روايات', 'روايات1655307983.jpg', '2022-06-15 12:46:23', '2022-06-15 12:46:23'),
(4, 'سياسية', 'سياسية1655308037.jpg', '2022-06-15 12:47:17', '2022-06-15 12:47:17'),
(5, 'علمية', 'علمية1655308134.jpg', '2022-06-15 12:48:54', '2022-06-15 12:48:54'),
(6, 'المال والأعمال', 'المال والأعمال1655308166.jpg', '2022-06-15 12:49:26', '2022-06-15 12:49:26'),
(7, 'علم النفس وتطوير الذات', 'علم النفس وتطوير الذات1655308315.jpg', '2022-06-15 12:51:55', '2022-06-15 12:51:55'),
(8, 'أطفال', 'أطفال1655308334.jpg', '2022-06-15 12:52:14', '2022-06-15 12:52:14'),
(9, 'شعرية', 'شعرية1655308370.jpg', '2022-06-15 12:52:50', '2022-06-15 12:52:50');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `favorites`
--

CREATE TABLE `favorites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `book_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `favorites`
--

INSERT INTO `favorites` (`id`, `book_id`, `user_id`, `created_at`, `updated_at`) VALUES
(19, 14, 11, '2022-06-15 15:11:06', '2022-06-15 15:11:06'),
(21, 30, 11, '2022-06-15 15:22:03', '2022-06-15 15:22:03');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_06_12_143245_create_categories_table', 1),
(6, '2022_06_13_143024_create_admins_table', 1),
(7, '2022_06_13_143202_create_authors_table', 1),
(8, '2022_06_13_143229_create_books_table', 1),
(9, '2022_06_13_143350_create_favorites_table', 1);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phoneNumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `userImage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phoneNumber`, `address`, `userImage`, `email`, `email_verified_at`, `password`, `remember_token`, `updated_at`, `created_at`) VALUES
(11, 'nour shaheen', '0592212481', 'gaza', '05922124811655316349.jpg', 'nrayd633@gmail.com', NULL, '$2y$10$HvDd0bOealWBdu.28FCWE.vkFHOYKeRVuJpasSvDyfMlFj8RlbCqK', NULL, '2022-06-15 15:05:49', '2022-06-15 14:43:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `authors_email_unique` (`email`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `books_author_id_foreign` (`author_id`),
  ADD KEY `books_category_id_foreign` (`category_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`id`),
  ADD KEY `favorites_book_id_foreign` (`book_id`),
  ADD KEY `favorites_user_id_foreign` (`user_id`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `favorites`
--
ALTER TABLE `favorites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_author_id_foreign` FOREIGN KEY (`author_id`) REFERENCES `authors` (`id`),
  ADD CONSTRAINT `books_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `favorites`
--
ALTER TABLE `favorites`
  ADD CONSTRAINT `favorites_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`),
  ADD CONSTRAINT `favorites_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
