-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 21, 2023 at 09:55 AM
-- Server version: 10.11.3-MariaDB-1:10.11.3+maria~ubu2204
-- PHP Version: 8.1.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sandemodb`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `isi` longtext NOT NULL,
  `meta` varchar(128) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `id_kategori` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL,
  `author` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `isi`, `meta`, `slug`, `gambar`, `id_kategori`, `date_created`, `author`) VALUES
(60, 'Optimalisasi Kueri untuk Efisiensi Kuota Pemrosesan Data', '<p>SQL (Structured Query Language) adalah bahasa pemrograman yang digunakan untuk mengakses dan mengelola data dalam basis data relasional. BigQuery dan Cloud SQL adalah layanan database yang disediakan oleh Google Cloud Platform. Dalam artikel ini, kita akan membahas pengenalan SQL untuk BigQuery dan Cloud SQL, serta bagaimana mengoptimalkan kueri untuk efisiensi kuota pemrosesan data.Pengoptimalan kueri adalah proses mengoptimalkan kueri SQL untuk meminimalkan waktu dan sumber daya yang dibutuhkan untuk memproses data. Setiap kueri yang Anda jalankan berkontribusi terhadap kuota pemrosesan data bulanan Anda. Jika Anda memilih kolom yang tidak relevan, Anda meningkatkan jumlah data yang perlu diproses, dan akibatnya, Anda menggunakan lebih banyak kuota bulanan daripada yang dibutuhkan. Kueri yang dioptimalkan membuat penggunaan kuota pemrosesan data bulanan Anda menjadi efisien.Berikut adalah beberapa tips untuk mengoptimalkan kueri Anda:</p>\n\n<ol>\n <li>Hanya pilih yang dibutuhkan: Ketika merumuskan kueri, pilih kolom yang relevan dalam pernyataan SELECT. Dengan mengecualikan kolom yang tidak relevan, Anda mengurangi jumlah data, dan waktu yang dibutuhkan untuk memproses kueri.</li>\n <li>Gunakan WHERE: Gunakan pernyataan WHERE untuk memfilter data yang tidak relevan. Dengan memfilter data yang tidak relevan, Anda mengurangi jumlah data yang perlu diproses, dan waktu yang dibutuhkan untuk memproses kueri.</li>\n <li>Gunakan LIMIT: Gunakan pernyataan LIMIT untuk membatasi jumlah baris yang dikembalikan oleh kueri. Dengan membatasi jumlah baris yang dikembalikan, Anda mengurangi jumlah data yang perlu diproses, dan waktu yang dibutuhkan untuk memproses kueri.</li>\n <li>Gunakan indeks: Indeks memungkinkan basis data untuk mencari data dengan lebih cepat. Jika Anda sering melakukan kueri pada kolom tertentu, pertimbangkan untuk membuat indeks pada kolom tersebut.</li>\n</ol>\n\n<p>Dalam artikel ini, kita telah membahas pengenalan SQL untuk BigQuery dan Cloud SQL, serta bagaimana mengoptimalkan kueri untuk efisiensi kuota pemrosesan data. Dengan mengikuti tips ini, Anda dapat meminimalkan waktu dan sumber daya yang dibutuhkan untuk memproses data, dan memaksimalkan penggunaan kuota pemrosesan data bulanan Anda.</p>\n\n<p> </p>\n\n<p>sumber: <a href=\"https://www.cloudskillsboost.google/focuses/2802?locale=id&parent=catalog\">https://www.cloudskillsboost.google/focuses/2802?locale=id&parent=catalog</a></p>', 'SQL, BigQuery, Cloud SQL, kueri, pengoptimalan kueri, efisiensi kuota pemrosesan data', 'optimalisasi-kueri-untuk-efisiensi-kuota-pemrosesan-data', '647861f24169a.jpg', '3', 1685610994, 'Sandi Maulidika'),
(61, 'Berikut adalah 6 tips untuk belajar Software Engineering dengan cara yang menyenangkan.', '<p>Belajar Software Engineering bisa menjadi pengalaman yang menantang dan kompleks. Namun, dengan pendekatan yang tepat, Anda dapat mengubahnya menjadi proses yang menyenangkan dan memuaskan. Di dalam artikel ini, kami akan membagikan enam tips yang akan membantu Anda belajar Software Engineering dengan cara yang menyenangkan.</p>\n\n<p><strong>1. Pilih Proyek yang Menarik</strong><br>\nSalah satu cara terbaik untuk membuat pembelajaran Software Engineering menjadi menyenangkan adalah dengan memilih proyek yang benar-benar menarik bagi Anda. Temukan topik atau masalah yang memotivasi dan menginspirasi Anda, dan gunakan proyek tersebut sebagai sarana untuk belajar. Dengan melakukan hal ini, Anda akan merasa lebih termotivasi dan bersemangat dalam mengembangkan keterampilan dan pengetahuan Anda.</p>\n\n<p><strong>2. Gunakan Sumber Daya Interaktif</strong><br>\nDalam dunia digital saat ini, terdapat banyak sumber daya interaktif yang dapat membantu Anda belajar Software Engineering dengan cara yang lebih menarik. Manfaatkan tutorial video, platform belajar online, atau bahkan permainan pembelajaran untuk memperdalam pemahaman Anda tentang konsep-konsep yang kompleks. Interaktivitas ini akan membuat proses belajar Anda lebih menyenangkan dan memudahkan Anda untuk menguasai materi.</p>\n\n<p><em>Baca Juga: <a href=\"https://sandemoindoteknologi.co.id/blog/Teknologi/optimalisasi-kueri-untuk-efisiensi-kuota-pemrosesan-data\">Optimalisasi Kueri untuk Efisiensi Kuota Pemrosesan Data</a></em></p>\n\n<p><strong>3. Bergabung dengan Komunitas</strong><br>\nBergabung dengan komunitas Software Engineering adalah cara yang hebat untuk belajar dengan menyenangkan. Temukan grup belajar online atau forum diskusi di mana Anda dapat berinteraksi dengan sesama pembelajar dan berbagi pengalaman. Diskusi, pertanyaan, dan kolaborasi dengan orang-orang yang memiliki minat yang sama akan membantu memperluas pengetahuan Anda dan memberikan dukungan yang sangat berharga selama proses belajar.</p>\n\n<p><strong>4. Terapkan Pembelajaran dalam Proyek Nyata</strong><br>\nBelajar Software Engineering tidak hanya tentang memahami konsep teoritis, tetapi juga tentang menerapkannya dalam proyek nyata. Setelah Anda mempelajari suatu konsep, carilah kesempatan untuk mengimplementasikannya dalam proyek pribadi atau open source. Dengan melihat hasil nyata dari upaya belajar Anda, Anda akan merasa terpacu untuk terus meningkatkan keterampilan Anda dan mencapai tujuan yang lebih tinggi.</p>\n\n<p><strong>5. Jaga Keseimbangan dan Istirahat yang Cukup</strong><br>\nMeskipun belajar Software Engineering dengan menyenangkan penting, jangan lupa menjaga keseimbangan dan memberikan diri Anda istirahat yang cukup. Terlalu banyak fokus pada belajar bisa membuat Anda cepat merasa lelah dan kehilangan minat. Tetapkan jadwal belajar yang seimbang, sisihkan waktu untuk hobi dan rekreasi, dan pastikan Anda memiliki waktu istirahat yang memadai untuk mengembalikan energi Anda. Dengan keseimbangan yang baik, Anda akan lebih produktif dan mampu belajar dengan lebih menyenangkan.</p>\n\n<p><strong>6. Tetapkan Tujuan dan Rayakan Keberhasilan</strong><br>\nTetapkan tujuan jangka pendek dan jangka panjang dalam perjalanan belajar Anda dan rayakan setiap keberhasilan</p>\n\n<p> yang Anda capai. Tujuan yang jelas memberikan fokus dan motivasi yang diperlukan untuk terus maju. Ketika Anda mencapai target atau mencapai milestone tertentu, berikan diri Anda penghargaan dan perayaan kecil. Ini akan memberikan dorongan tambahan dan membuat proses belajar menjadi lebih menyenangkan.</p>\n\n<p><strong>Kesimpulan:</strong><br>\nBelajar Software Engineering dengan cara yang menyenangkan membutuhkan pendekatan yang tepat. Dengan memilih proyek menarik, menggunakan sumber daya interaktif, bergabung dengan komunitas, menerapkan pembelajaran dalam proyek nyata, menjaga keseimbangan, dan tetapkan tujuan yang jelas, Anda dapat membuat proses belajar lebih menyenangkan dan memuaskan. Ingatlah bahwa belajar tidak harus membosankan, tetapi bisa menjadi petualangan yang penuh kesenangan dalam mengembangkan keterampilan dan pengetahuan Anda dalam Software Engineering.</p>', 'Artikel ini bertujuan memberikan enam tips praktis bagi pembaca untuk belajar Software Engineering dengan cara yang menyenangkan', 'berikut-adalah-6-tips-untuk-belajar-software-engineering-dengan-cara-yang-menyenangkan', '647abcca9d5c3.jpg', '3', 1685765322, 'Sandi Maulidika'),
(62, 'Jasa Pembuatan Website Murah dan Profesional', '<p>Jika Anda sedang mencari jasa pembuatan website yang murah dan profesional, maka Anda telah menemukan artikel yang tepat. Kami menawarkan jasa pembuatan website company profile dengan fitur-fitur premium seperti SEO Friendly, Responsive Design, Tampilan Unik, SSL Certificate, Loading Fast, Unlimited Space &amp; Bandwidth.</p>\n\n<p><a href=\"https://ibb.co/wN2hkST\"><img alt=\"\" src=\"https://i.ibb.co/XZGxQ79/7475493.jpg\" style=\"height:427px; width:640px\" /></a></p>\n\n<p>Fitur-fitur Premium</p>\n\n<ul>\n	<li>SEO Friendly: Website yang SEO friendly akan memudahkan mesin pencari seperti Google untuk mengindeks website Anda. Hal ini akan meningkatkan kemungkinan website Anda muncul di halaman pertama hasil pencarian Google.</li>\n	<li>Responsive Design: Website dengan responsive design akan menyesuaikan tampilannya dengan ukuran layar perangkat pengguna, sehingga pengguna dapat mengakses website Anda dengan mudah dari berbagai perangkat, baik desktop maupun mobile.</li>\n	<li>Tampilan Unik: Tampilan unik pada website Anda akan membuat website Anda lebih menarik dan membedakan dari website lainnya.</li>\n	<li>SSL Certificate: SSL Certificate adalah sertifikat keamanan yang memastikan bahwa website Anda aman dan data pengguna terenkripsi.</li>\n	<li>Loading Fast: Website yang loading cepat akan meningkatkan pengalaman pengguna dan mempercepat waktu akses website.</li>\n	<li>Unlimited Space &amp; Bandwidth: Dengan unlimited space &amp; bandwidth, website Anda dapat menampung lebih banyak data dan pengunjung tanpa khawatir kehabisan kapasitas.&nbsp;</li>\n</ul>\n\n<p>Kenapa Memilih Jasa Pembuatan Website Kami?</p>\n\n<ul>\n	<li>Harga terjangkau: Kami menawarkan harga yang terjangkau untuk jasa pembuatan website company profile dengan fitur-fitur premium.</li>\n	<li>Profesional: Kami memiliki tim yang berpengalaman dalam pembuatan website dan akan memberikan hasil yang memuaskan.</li>\n	<li>Garansi: Kami memberikan garansi untuk website yang kami buat, sehingga Anda tidak perlu khawatir jika terjadi masalah pada website Anda.</li>\n	<li>Support: Kami memberikan dukungan teknis untuk website yang kami buat, sehingga Anda dapat menghubungi kami jika ada masalah pada website Anda.</li>\n</ul>\n\n<p>Jangan ragu untuk menghubungi kami untuk mendapatkan jasa pembuatan website murah dan profesional dengan fitur-fitur premium yang kami tawarkan. Terima kasih.</p>\n', 'Jasa Pembuatan Website Murah dan Profesional dengan Fitur SEO Friendly, Responsive Design, Tampilan Unik, SSL Certificate, Loadi', 'jasa-pembuatan-website-murah-dan-profesional', '64843ee30fe3f.jpg', '3', 1686388451, 'Sandi Maulidika'),
(68, 'Facebook Perubahan Fitur Video dengan Tujuan Bersaing dengan TikTok dan YouTube', '<p>Meta, induk perusahaan Facebook, Instagram, dan WhatsApp mengumumkan sejumlah perubahan untuk fitur video di Facebook. Perombakan ini merupakan upaya baru Facebook agar bisa lebih bersaing dengan YouTuber dan TikTok.</p><script async src=\"https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3971040661867794\" crossorigin=\"anonymous\"></script>\n        <ins class=\"adsbygoogle\" style=\"display:block; text-align:center;\" data-ad-layout=\"in-article\" data-ad-format=\"fluid\" data-ad-client=\"ca-pub-3971040661867794\" data-ad-slot=\"9577430246\"></ins>\n        <script>\n            (adsbygoogle = window.adsbygoogle || []).push({});\n        </script><p>Pembaruan pertama adalah soal fitur edit video di dalam aplikasi yang kini lebih banyak. Facebook juga mengubah tab \"Watch\" menjadi \"Video\". Selain itu, Meta juga memperbarui laman \"Explore\" untuk menampilkan deretan video yang sedang trending dan yang direkomendasikan.</p><p>Facebook tampaknya cukup serius ingin menyaingi popularitas TikTok. Jejaring sosial raksasa itu pun tengah menyiapkan strategi yang lebih \"matang\" dari sebelumnya. Kabarnya, Facebook akan merombak tampilan di platform mereka agar mirip dengan TikTok. Strategi itu diungkap oleh Head of Facebook App Tom Alison dalam sebuah memo</p><p>Memo tersebut, dari Tom Alison yang mengepalai aplikasi Facebook di Meta, menyatakan bahwa tujuannya adalah untuk mengubah Facebook menjadi \'Discovery Engine\', yang akan mempunyai rekomendasi mirip seperti \'FYP/For You Page\' TikTok. Rekomendasi utama akan datang dari konten yang tidak terhubung, termasuk Reel, dan pengguna akan melihat lebih sedikit postingan dari teman dan keluarga di feed mereka.</p><p> </p><p>Sumber: </p><ol><li><a href=\"https://tekno.kompas.com/read/2023/07/18/15000027/facebook-rombak-fitur-video-untuk-saingi-tiktok-dan-youtube?utm_campaign=partner&utm_medium=Newstand&utm_source=Google\">https://tekno.kompas.com/read/2023/07/18/15000027/facebook-rombak-fitur-video-untuk-saingi-tiktok-dan-youtube?utm_campaign=partner&utm_medium=Newstand&utm_source=Google</a></li><li><a href=\"https://tekno.republika.co.id/berita/rdk246368/facebook-rombak-total-fitur-demi-saingi-popularitas-tiktok\">https://tekno.republika.co.id/berita/rdk246368/facebook-rombak-total-fitur-demi-saingi-popularitas-tiktok</a></li><li><a href=\"https://sindikasi.republika.co.id/berita/rdk246368/facebook-rombak-total-fitur-demi-saingi-popularitas-tiktok \">https://sindikasi.republika.co.id/berita/rdk246368/facebook-rombak-total-fitur-demi-saingi-popularitas-tiktok </a></li><li><a href=\"https://www.facebook.com/fareedzakaria/videos/social-media-particularly-tiktok-is-scarily-addictive-and-needs-to-be-regulatedm/792193239125571/\">https://www.facebook.com/fareedzakaria/videos/social-media-particularly-tiktok-is-scarily-addictive-and-needs-to-be-regulatedm/792193239125571/</a></li><li><a href=\"https://facebook.com/tiktok/\">https://facebook.com/tiktok/</a></li><li><a href=\"https://id.techinasia.com/facebook-rombak-desain-demi-saingi-tiktok\">https://id.techinasia.com/facebook-rombak-desain-demi-saingi-tiktok</a></li><li><a href=\"https://inet.detik.com/mobileapps/sitemap_web.xml\">https://inet.detik.com/mobileapps/sitemap_web.xml</a></li><li><a href=\"https://inet.detik.com/mobileapps/sitemap_news.xml\">https://inet.detik.com/mobileapps/sitemap_news.xml</a></li><li><a href=\"https://pemilu.kompas.com/read/2022/06/19/08000007/facebook-bakal-rombak-tampilan-demi-saingi-tiktok\">https://pemilu.kompas.com/read/2022/06/19/08000007/facebook-bakal-rombak-tampilan-demi-saingi-tiktok</a></li><li><a href=\"https://tekno.kompas.com/read/2022/06/19/08000007/facebook-bakal-rombak-tampilan-demi-saingi-tiktok?page=all\">https://tekno.kompas.com/read/2022/06/19/08000007/facebook-bakal-rombak-tampilan-demi-saingi-tiktok?page=all</a></li><li><a href=\"https://www.dream.co.id/lifestyle/saingi-tiktok-meta-rombak-tampilan-facebook-220617p.html\">https://www.dream.co.id/lifestyle/saingi-tiktok-meta-rombak-tampilan-facebook-220617p.html</a></li></ol>', 'Perombakan ini merupakan upaya baru Facebook agar bisa lebih bersaing dengan YouTuber dan TikTok.', 'facebook-perubahan-fitur-video-dengan-tujuan-bersaing-dengan-tiktok-dan-youtube', '64b64c80c4af1.jpg', '3', 1689668737, 'Sandi Maulidika'),
(69, '15 Ucapan Tahun Baru Islam 1 Muharram 1445 H', '<p><b>Palembang, Sandemo - </b>Umat Muslim di seluruh dunia merayakan Tahun Baru Islam setiap 1 Muharram dalam kalender Hijriah. Tahun baru Islam 1 Muharram 1445 H jatuh pada Rabu, 19 Juli 2023. Berikut adalah beberapa berita dan contoh ucapan yang dapat dijadikan inspirasi untuk merayakan Tahun Baru Islam.</p><script async src=\"https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3971040661867794\" crossorigin=\"anonymous\"></script>\n        <ins class=\"adsbygoogle\" style=\"display:block; text-align:center;\" data-ad-layout=\"in-article\" data-ad-format=\"fluid\" data-ad-client=\"ca-pub-3971040661867794\" data-ad-slot=\"9577430246\"></ins>\n        <script>\n            (adsbygoogle = window.adsbygoogle || []).push({});\n        </script><p><span class=\"text-big\"><strong>Makna Bulan Muharram Bagi Umat Muslim</strong></span></p><p>Bulan Muharram adalah bulan pertama dalam kalender Hijriah dan merupakan salah satu bulan suci yang dianggap sakral oleh umat Muslim. Bulan Muharram memiliki makna penting bagi umat Muslim di seluruh dunia.</p><p>Bulan Muharram membawa maksud \'diharamkan\' atau \'dipantang\' iaitu Allah SWT melarang melakukan peperangan atau pertumpahan darah. Namun demikian larangan ini ditamatkan setelah pembukaan Makkah (Al Baqarah: 91). Sejak pemansuhan itu, umat Islam boleh melaksanakan tugas dan ibadat harian tanpa terikat lagi dengan larangan berkenaan.</p><p>Dalam melakukan amalan-amalan di bulan Muharram, penting untuk diingat bahwa niat dan keikhlasan dalam beribadah kepada Allah SWT adalah yang utama. Amalan-amalan tersebut tidak hanya dibatasi pada bulan Muharram saja, tetapi juga dapat dilakukan sepanjang tahun sebagai bentuk ibadah dan kebaikan.</p><script async src=\"https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3971040661867794\"\n     crossorigin=\"anonymous\"></script>\n<ins class=\"adsbygoogle\"\n     style=\"display:block; text-align:center;\"\n     data-ad-layout=\"in-article\"\n     data-ad-format=\"fluid\"\n     data-ad-client=\"ca-pub-3971040661867794\"\n     data-ad-slot=\"9577430246\"></ins>\n<script>\n     (adsbygoogle = window.adsbygoogle || []).push({});\n</script><p><span class=\"text-big\"><strong>Berikut adalah 15 ucapaan yang dapat digunakan untuk menyambut Bulan Muharram:</strong></span></p><ol><li>Selamat menyambut Bulan Muharram, semoga di bulan yang penuh berkah ini kita semua mendapat rahmat berlipat dari Allah SWT.</li><li>Mari kita isi Bulan Muharram dengan banyak melakukan kebaikan dan memperbanyak ibadah. Selamat menyambut Bulan Muharram.</li><li>Semoga di Bulan Muharram ini kita semua diberikan kekuatan dan kesabaran untuk menghadapi segala ujian hidup. Selamat menyambut Bulan Muharram.</li><li>Bulan Muharram adalah bulan suci yang penuh berkah. Semoga kita semua bisa memanfaatkan bulan ini dengan sebaik-baiknya. Selamat menyambut Bulan Muharram.</li><li>Selamat datang Bulan Muharram, bulan yang penuh dengan keberkahan dan kemuliaan. Semoga kita semua bisa memperoleh keberkahan di bulan ini.</li><li>Di Bulan Muharram ini, mari kita tingkatkan keimanan dan ketaqwaan kita kepada Allah SWT. Selamat menyambut Bulan Muharram.</li><li>Bulan Muharram adalah bulan permulaan dalam kalender Hijriah. Semoga di bulan ini kita semua bisa memulai kehidupan yang lebih baik. Selamat menyambut Bulan Muharram.</li><li>Selamat menyambut Bulan Muharram, bulan yang penuh dengan keberkahan dan rahmat dari Allah SWT. Semoga kita semua bisa memanfaatkan bulan ini dengan sebaik-baiknya.</li><li>Di Bulan Muharram ini, mari kita tingkatkan kebaikan dan keikhlasan kita dalam beribadah kepada Allah SWT. Selamat menyambut Bulan Muharram.</li><li>Semoga di Bulan Muharram ini kita semua diberikan kesehatan, kebahagiaan, dan kemudahan dalam hidup. Selamat menyambut Bulan Muharram.</li></ol><p>Semoga ucapan-ucapan ini dapat memberikan semangat dan keberkahan di Bulan Muharram.</p>', 'Bulan Muharram adalah bulan pertama dalam kalender Hijriah dan merupakan salah satu bulan suci yang dianggap sakral oleh umat Mu', '15-ucapan-tahun-baru-islam-1-muharram-1445-h', '64b748898969d.jpg', '1', 1689733257, 'Sandi Maulidika');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id` int(11) NOT NULL,
  `brand_name` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id`, `brand_name`, `image`) VALUES
(3, 'Polres Prabumulih', '28062023124342.png'),
(4, 'Universitas Mahakarya Asia', '28062023124506.png'),
(5, 'SMA Negeri 2 Ambon', '28062023124705.png'),
(6, 'Yayasan Al Anwariyah', '28062023124827.png'),
(7, 'Madep Kopi', '28062023124927.png');

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

CREATE TABLE `careers` (
  `id` int(11) NOT NULL,
  `code_job` int(11) DEFAULT NULL,
  `name_job` varchar(100) NOT NULL,
  `location_job` varchar(50) NOT NULL,
  `jenis_pekerjaan` varchar(50) NOT NULL,
  `description` longtext NOT NULL,
  `date_job` date NOT NULL,
  `limit_job` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `careers`
--

INSERT INTO `careers` (`id`, `code_job`, `name_job`, `location_job`, `jenis_pekerjaan`, `description`, `date_job`, `limit_job`) VALUES
(9, 982, 'Mobile App Developer', 'Palembang', 'Freelance', '<p><strong>Deskripsi</strong></p>\r\n\r\n<p>Kami sedang mencari seorang Mobile App Developer yang berpengalaman dan kreatif untuk bekerja sebagai kontraktor proyek dalam tim pengembangan aplikasi mobile kami. Sebagai Mobile App Developer, Anda akan bertanggung jawab dalam merancang, mengembangkan, dan menguji aplikasi mobile yang inovatif dan menarik.</p>\r\n\r\n<p><strong>Tanggung Jawab:</strong></p>\r\n\r\n<ul>\r\n <li>Merancang, mengembangkan, dan memelihara aplikasi mobile menggunakan bahasa pemrograman seperti Java atau Kotlin (untuk platform Android) atau Swift atau Objective-C (untuk platform iOS).</li>\r\n <li>Mengimplementasikan desain dan antarmuka pengguna yang menarik dan responsif.</li>\r\n <li>Mengintegrasikan fitur-fitur seperti pemrosesan pembayaran, penggunaan API, dan notifikasi push ke dalam aplikasi.</li>\r\n <li>Memastikan kualitas aplikasi melalui pengujian dan debugging yang cermat.</li>\r\n <li>Mengoptimalkan performa aplikasi untuk memastikan kinerja yang baik di berbagai perangkat mobile.</li>\r\n <li>Mengikuti tren terbaru dalam pengembangan aplikasi mobile dan menggunakan praktik terbaik dalam pengembangan aplikasi.</li>\r\n</ul>\r\n\r\n<p><strong>Kualifikasi:</strong></p>\r\n\r\n<ul>\r\n <li>Pengalaman kerja minimal 2 tahun sebagai Mobile App Developer atau posisi terkait.</li>\r\n <li>Penguasaan yang kuat dalam bahasa pemrograman Java atau Kotlin (untuk platform Android) atau Swift atau Objective-C (untuk platform iOS).</li>\r\n <li>Pemahaman yang baik tentang desain antarmuka pengguna mobile.</li>\r\n <li>Pengalaman dalam penggunaan alat pengembangan seperti Android Studio atau Xcode.</li>\r\n <li>Memiliki portofolio yang menunjukkan keterampilan dalam pengembangan aplikasi mobile.</li>\r\n <li>Memiliki pengetahuan tentang pemrosesan pembayaran, penggunaan API, dan notifikasi push.</li>\r\n <li>Kemampuan untuk bekerja secara mandiri dan mengelola proyek secara efektif.</li>\r\n <li>Kreatif dan mampu berpikir solutif dalam menghadapi tantangan teknis.</li>\r\n</ul>\r\n\r\n<p>Kami menawarkan kesempatan untuk bekerja secara fleksibel sebagai kontraktor proyek, dengan pembayaran yang kompetitif berdasarkan proyek yang diselesaikan.</p>\r\n\r\n<p>Jika Anda tertarik dengan posisi ini, silakan kirimkan CV, Portfolio, dan surat lamaran Anda pada form di bawah. Kami akan meninjau lamaran Anda dengan saksa</p>', '2023-06-28', '2023-06-15'),
(10, 343, 'Staf Akuntan', 'Gelumbang, Muara Enim <br> Sumatera Selatan', 'Freelance', '<p><strong>Deskripsi</strong></p>\r\n\r\n<p>Kami sedang mencari seorang Staf Akuntan yang berpengalaman dan mandiri untuk bekerja sebagai kontraktor proyek dalam tim keuangan kami. Sebagai Staf Akuntan, Anda akan bertanggung jawab dalam melakukan tugas akuntansi, pemrosesan data, dan pembuatan laporan keuangan yang akurat dan tepat waktu.</p>\r\n\r\n<p><strong>Tanggung Jawab:</strong></p>\r\n\r\n<ul>\r\n <li>Memasukkan dan memproses invoice.</li>\r\n <li>Menginput Transaksi penjualan, pembelian, kas masuk, kas keluar, jurnal umum.</li>\r\n <li>Memeriksa, menyeimbangkan, dan merekonsiliasi catatan keuangan perusahaan.</li>\r\n <li>Menyiapkan dan menyajikan laporan keuangan bulanan, termasuk neraca, laporan laba rugi, dan laporan arus kas.</li>\r\n <li>Mengelola dan mengawasi administrasi pajak, termasuk perhitungan dan pelaporan pajak.</li>\r\n <li>Melakukan analisis keuangan dan memberikan rekomendasi berdasarkan data keuangan yang ada.</li>\r\n <li>Memastikan kepatuhan terhadap peraturan akuntansi dan perpajakan yang berlaku.</li>\r\n <li>Menggunakan Excel dan perangkat lunak akuntansi lainnya untuk pemrosesan dan analisis data keuangan.</li>\r\n</ul>\r\n\r\n<p><strong>Kualifikasi:</strong></p>\r\n\r\n<ul>\r\n <li>Minimal SMA/SMK, di utamakan D3/S1 Jurusan Management Keuangan/Akuntansi</li>\r\n <li>Fresh graduate/Lulusan Baru atau pengalaman 1 tahun di bidang accounting</li>\r\n <li>Kemampuan komunikasi yang baik dan dapat bekerja dengan baik dalam tim.</li>\r\n <li>Umur maksimal 27 tahun</li>\r\n <li>Wajib menguasai Microsoft Excel untuk pemrosesan data dan analisis keuangan.</li>\r\n <li>Wajib Mempunyai Laptop/PC sendiri</li>\r\n</ul>\r\n\r\n<p>Kami menawarkan kesempatan untuk bekerja secara fleksibel sebagai kontraktor proyek, dengan pembayaran yang kompetitif berdasarkan proyek yang diselesaikan.</p>\r\n\r\n<p>Jika Anda tertarik dengan posisi ini, silakan kirimkan CV, Portfolio, dan surat lamaran Anda pada form di bawah menjadi satu. Kami akan meninjau lamaran Anda dengan saksama.</p>', '2023-06-28', '2023-06-15');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `whatsapp` varchar(15) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `pesan` text NOT NULL,
  `aksi` int(11) NOT NULL,
  `balasan` text DEFAULT NULL,
  `id_admin` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `integrasi`
--

CREATE TABLE `integrasi` (
  `id` int(11) NOT NULL,
  `wagw` varchar(50) NOT NULL,
  `url_api` varchar(110) NOT NULL,
  `ahu_username` varchar(50) NOT NULL,
  `ahu_password` varchar(50) NOT NULL,
  `ahu_token` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `integrasi`
--

INSERT INTO `integrasi` (`id`, `wagw`, `url_api`, `ahu_username`, `ahu_password`, `ahu_token`) VALUES
(1, 'dk_ee720d839a334ec8afd0cda870c11a7b', ' http://localhost:3001/api/v1/messages', 'sandi', 'sandi', '');

-- --------------------------------------------------------

--
-- Table structure for table `kandidat`
--

CREATE TABLE `kandidat` (
  `id` int(11) NOT NULL,
  `id_job` int(11) DEFAULT NULL,
  `full_name` varchar(100) NOT NULL,
  `date_birth` date NOT NULL,
  `place_birth` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `whatsapp` varchar(20) NOT NULL,
  `religion` varchar(50) NOT NULL,
  `university` varchar(100) NOT NULL,
  `education_stage` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `cv` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kategori_blog`
--

CREATE TABLE `kategori_blog` (
  `id` int(10) UNSIGNED NOT NULL,
  `kategori` varchar(128) NOT NULL,
  `slug` varchar(128) NOT NULL,
  `description` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `kategori_blog`
--

INSERT INTO `kategori_blog` (`id`, `kategori`, `slug`, `description`) VALUES
(1, 'Public', '', ''),
(2, 'Olahraga', '', ''),
(3, 'Teknologi', '', ''),
(4, 'Pendidikan', '', ''),
(5, 'Kesehatan', '', ''),
(6, 'Pemrograman', '', ''),
(7, 'HTML', 'html', ''),
(8, 'PHP', 'php', ''),
(9, 'Codeigniter', 'codeigniter', ''),
(10, 'Laravel', 'laravel', ''),
(15, 'php & mysql', 'php-&-mysql', '');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_portfolio`
--

CREATE TABLE `kategori_portfolio` (
  `id` int(11) NOT NULL,
  `kategori` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori_portfolio`
--

INSERT INTO `kategori_portfolio` (`id`, `kategori`) VALUES
(1, 'Codeignite'),
(2, 'Laravel'),
(3, 'Wordpress'),
(4, 'HTML & Css');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `email`) VALUES
(11, 'sandimaulidika@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `image` varchar(50) NOT NULL,
  `client` varchar(128) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `title`, `image`, `client`, `id_kategori`, `date`) VALUES
(6, 'Website Toko Online Arunika', '26052023041041.jpg', 'Toko Online Arunika', 3, '2023-05-26'),
(7, 'Aplikasi Pengumuman Siswa Kelas 12', '07112022074033.jpg', 'MA ALANWARIYAH', 1, '2022-11-08'),
(8, 'Portfolio Sederhana Responsive', '24112022112742.jpg', 'Sandi Maulidika', 4, '2022-11-24'),
(9, 'Aplikasi Pembukuan Kas Masjid Codeigniter 3', '02122022093343.jpg', 'Umum', 1, '2022-12-02'),
(10, 'Aplikasi Pelayanan Puskesmas Online berbasi website', '02122022094314.jpg', 'Umum', 1, '2022-12-02'),
(11, 'Website Toko Sepatu Ainin Shoes', '26052023041215.jpg', 'Ainin Shoes', 3, '2023-05-26'),
(12, 'Website Resmi Polres Prabumulih', '26052023041256.jpg', 'Polres Prabumulih', 3, '2023-05-26'),
(13, 'Aplikasi Inventory Barang Berbasis Website', '26052023041334.jpg', 'Anonymous', 1, '2023-05-26'),
(14, 'Aplikasi Inventory Gudang Berbasis Website', '26052023041420.jpg', 'Madep Kopi', 1, '2023-05-26'),
(15, 'Aplikasi Arsip Surat Berbasis Website', '26052023041459.jpg', 'Anonymous', 1, '2023-05-26'),
(16, 'Aplikasi Kelulusan Siswa Berbasis Website', '26052023041536.jpg', 'SMA NEGERI 2 AMBON | DLL', 1, '2023-05-26'),
(17, 'Aplikasi LMS Sekolah dan Universitas Berbasi Website', '6478586e2e624.jpg', 'Universitas Mahakarya', 1, '2023-06-01'),
(18, 'Penjadwalan Piket Resto Badan Pendapatan Daerah Kota Palembang', '649b08e981a3f.jpg', 'Bapenda Kota Palembang', 1, '2023-06-27'),
(19, 'Smart Wather Meter - IoT', '64ad5b91dd23f.jpg', 'Bpk. Adli', 2, '2023-07-11');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `judul_website` varchar(128) NOT NULL,
  `slogan_website` varchar(128) NOT NULL,
  `about_hf` varchar(128) NOT NULL,
  `about_website` text NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `nohp` varchar(15) NOT NULL,
  `facebook` varchar(128) NOT NULL,
  `instagram` varchar(128) NOT NULL,
  `gmail` varchar(128) NOT NULL,
  `linkedin` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `judul_website`, `slogan_website`, `about_hf`, `about_website`, `alamat`, `nohp`, `facebook`, `instagram`, `gmail`, `linkedin`) VALUES
(1, 'PT. Sandemo Indo Teknologi', 'IT Solutions Without Hassle', 'Build your business through a digital marketing strategy with us! Make millions of people in the world discover your business.', 'We are a privately-owned company that focuses on information technology and multimedia. We have a team of experts in the field of information technology and multimedia who are dedicated to providing the best solutions for our clients.', 'Gelumbang, Muara Enim, Palembang, Sumatera Selatan 31171 Indonesia', '6287801751656', 'sandemoindoteknologi', 'sandemoindoteknologi', 'infosandemo@gmail.com', 'linkedin.com');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `nohp` varchar(128) NOT NULL,
  `maps` text NOT NULL,
  `facebook` varchar(128) NOT NULL,
  `instagram` varchar(128) NOT NULL,
  `youtube` varchar(128) NOT NULL,
  `password` varchar(225) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(11) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `nohp`, `maps`, `facebook`, `instagram`, `youtube`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(24, 'Sandi Maulidika', 'sandimaulidika@gmail.com', 'profile1688185054.jpg', '87801751656', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7740.043707842533!2d104.43780441815089!3d-3.2447619401762235!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3bb7b27496d469:0xe9a6ddc39fcbcb98!2sSandemo.id Digital Marketing | Jasa Pembuatan Website Profesional Palembang!5e0!3m2!1sid!2sid!4v1684121796405!5m2!1sid!2sid', 'sandimaulidika', 'sandimaulidikaa', '', '$2y$10$Pu9BAkUVweBFgY4T3./iCecVHh4JTGwUPa75BC4xmMbM8/bzlJ2Wu', 1, 1, 1669308905),
(26, 'Irpan Nawawi', 'irpannawawi.ixd@gmail.com', 'profile48759849203.png', '85155431137', 'https://goo.gl/maps/ndWM6MLdrZCXTjxn8', 'irpannawawi01', 'irpan4321', 'irpannawawi', '$2y$10$kJT.615GT9Obd7DqDmuujuGNOWCGR57uWba5YV96HPc/vLpeZIXGe', 2, 1, 1684121366),
(27, 'Voni Puspita Sari', 'vonisnd@gmail.com', 'profile187381273.jpeg', '82182877737', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7740.043707842533!2d104.43780441815089!3d-3.2447619401762235!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3bb7b27496d469:0xe9a6ddc39fcbcb98!2sSandemo.id Digital Marketing | Jasa Pembuatan Website Profesional Palembang!5e0!3m2!1sid!2sid!4v1684121796405!5m2!1sid!2sid', 'vonipuspitasari', 'vny.s_', '', '$2y$10$ASTekmJ/e8Txe4oPKEDkg.bqU8VKvIEF8Yk2uN92I8Gal/Qu3wthG', 3, 1, 1686197247);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(14, 1, 6),
(15, 1, 5),
(16, 1, 3),
(19, 1, 8),
(21, 1, 2),
(29, 2, 2),
(31, 2, 5),
(32, 2, 6),
(33, 11, 1),
(34, 11, 6),
(35, 11, 5),
(36, 11, 3),
(37, 11, 2),
(40, 7, 6),
(41, 7, 2),
(42, 3, 6),
(43, 3, 2),
(44, 5, 6),
(45, 5, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(225) NOT NULL,
  `sort` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`, `sort`) VALUES
(1, 'Admin', '1'),
(2, 'User', '2'),
(3, 'Menu', '4'),
(5, 'Master Setting', '5'),
(6, 'Page', '3');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'CEO & Founder'),
(2, 'Web Developer'),
(3, 'Admin'),
(5, 'Staff Accounting'),
(7, 'Marketing Executive');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin/admin', 'ti-world', 1),
(2, 2, 'My Profile', 'admin/user', 'icons-Profile', 1),
(4, 3, 'Menu Management', 'admin/menu', ' icons-Folder-Add', 1),
(5, 3, 'Submenu Manage', 'admin/menu/submenu', 'icons-Folder-Cloud', 1),
(8, 1, 'Role Management', 'admin/admin/role', 'icon-user', 1),
(17, 5, 'Setting Website', 'admin/setting', 'ti-settings', 1),
(18, 6, 'Blog', 'admin/page/blog', 'ti-book', 1),
(19, 6, 'Portfolio', 'admin/page/portfolio', 'icons-Project', 1),
(21, 5, 'Brand', 'admin/setting/brand', 'ti-settings', 1),
(22, 5, 'Kategori Blog', 'admin/setting/kategori_blog', 'ti-settings', 1),
(23, 5, 'Kategori Portfolio', 'admin/setting/kategori_portfolio', 'ti-settings', 1),
(27, 1, 'Data Developer', 'admin/admin/data', 'icon-user', 1),
(28, 1, 'Tambah Developer', 'admin/admin/tambah', 'icon-user', 0),
(29, 6, 'Pesan', 'admin/page/pesan', 'ti-comments-smiley', 1),
(30, 6, 'Career', 'admin/page/career', 'icon-user', 1),
(31, 1, 'Job Apply', 'admin/admin/kandidat', 'ti-user', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(225) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `careers`
--
ALTER TABLE `careers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `integrasi`
--
ALTER TABLE `integrasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kandidat`
--
ALTER TABLE `kandidat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori_blog`
--
ALTER TABLE `kategori_blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori_portfolio`
--
ALTER TABLE `kategori_portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `careers`
--
ALTER TABLE `careers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kandidat`
--
ALTER TABLE `kandidat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori_blog`
--
ALTER TABLE `kategori_blog`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `kategori_portfolio`
--
ALTER TABLE `kategori_portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;