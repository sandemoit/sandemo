-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 26, 2023 at 04:35 PM
-- Server version: 8.0.34-0ubuntu0.22.04.1
-- PHP Version: 8.1.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sandemo`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `isi` longtext NOT NULL,
  `meta` varchar(128) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `id_kategori` varchar(128) NOT NULL,
  `date_created` int NOT NULL,
  `author` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `isi`, `meta`, `slug`, `gambar`, `id_kategori`, `date_created`, `author`) VALUES
(60, 'Optimalisasi Kueri untuk Efisiensi Kuota Pemrosesan Data', '<p>SQL (Structured Query Language) adalah bahasa pemrograman yang digunakan untuk mengakses dan mengelola data dalam basis data relasional. BigQuery dan Cloud SQL adalah layanan database yang disediakan oleh Google Cloud Platform. Dalam artikel ini, kita akan membahas pengenalan SQL untuk BigQuery dan Cloud SQL, serta bagaimana mengoptimalkan kueri untuk efisiensi kuota pemrosesan data.Pengoptimalan kueri adalah proses mengoptimalkan kueri SQL untuk meminimalkan waktu dan sumber daya yang dibutuhkan untuk memproses data. Setiap kueri yang Anda jalankan berkontribusi terhadap kuota pemrosesan data bulanan Anda. Jika Anda memilih kolom yang tidak relevan, Anda meningkatkan jumlah data yang perlu diproses, dan akibatnya, Anda menggunakan lebih banyak kuota bulanan daripada yang dibutuhkan. Kueri yang dioptimalkan membuat penggunaan kuota pemrosesan data bulanan Anda menjadi efisien.Berikut adalah beberapa tips untuk mengoptimalkan kueri Anda:</p>\n\n<ol>\n <li>Hanya pilih yang dibutuhkan: Ketika merumuskan kueri, pilih kolom yang relevan dalam pernyataan SELECT. Dengan mengecualikan kolom yang tidak relevan, Anda mengurangi jumlah data, dan waktu yang dibutuhkan untuk memproses kueri.</li>\n <li>Gunakan WHERE: Gunakan pernyataan WHERE untuk memfilter data yang tidak relevan. Dengan memfilter data yang tidak relevan, Anda mengurangi jumlah data yang perlu diproses, dan waktu yang dibutuhkan untuk memproses kueri.</li>\n <li>Gunakan LIMIT: Gunakan pernyataan LIMIT untuk membatasi jumlah baris yang dikembalikan oleh kueri. Dengan membatasi jumlah baris yang dikembalikan, Anda mengurangi jumlah data yang perlu diproses, dan waktu yang dibutuhkan untuk memproses kueri.</li>\n <li>Gunakan indeks: Indeks memungkinkan basis data untuk mencari data dengan lebih cepat. Jika Anda sering melakukan kueri pada kolom tertentu, pertimbangkan untuk membuat indeks pada kolom tersebut.</li>\n</ol>\n\n<p>Dalam artikel ini, kita telah membahas pengenalan SQL untuk BigQuery dan Cloud SQL, serta bagaimana mengoptimalkan kueri untuk efisiensi kuota pemrosesan data. Dengan mengikuti tips ini, Anda dapat meminimalkan waktu dan sumber daya yang dibutuhkan untuk memproses data, dan memaksimalkan penggunaan kuota pemrosesan data bulanan Anda.</p>\n\n<p> </p>\n\n<p>sumber: <a href=\"https://www.cloudskillsboost.google/focuses/2802?locale=id&parent=catalog\">https://www.cloudskillsboost.google/focuses/2802?locale=id&parent=catalog</a></p>', 'SQL, BigQuery, Cloud SQL, kueri, pengoptimalan kueri, efisiensi kuota pemrosesan data', 'optimalisasi-kueri-untuk-efisiensi-kuota-pemrosesan-data', '647861f24169a.jpg', '3', 1685610994, 'Sandi Maulidika'),
(61, 'Berikut adalah 6 tips untuk belajar Software Engineering dengan cara yang menyenangkan.', '<p>Belajar Software Engineering bisa menjadi pengalaman yang menantang dan kompleks. Namun, dengan pendekatan yang tepat, Anda dapat mengubahnya menjadi proses yang menyenangkan dan memuaskan. Di dalam artikel ini, kami akan membagikan enam tips yang akan membantu Anda belajar Software Engineering dengan cara yang menyenangkan.</p>\n\n<p><strong>1. Pilih Proyek yang Menarik</strong><br>\nSalah satu cara terbaik untuk membuat pembelajaran Software Engineering menjadi menyenangkan adalah dengan memilih proyek yang benar-benar menarik bagi Anda. Temukan topik atau masalah yang memotivasi dan menginspirasi Anda, dan gunakan proyek tersebut sebagai sarana untuk belajar. Dengan melakukan hal ini, Anda akan merasa lebih termotivasi dan bersemangat dalam mengembangkan keterampilan dan pengetahuan Anda.</p>\n\n<p><strong>2. Gunakan Sumber Daya Interaktif</strong><br>\nDalam dunia digital saat ini, terdapat banyak sumber daya interaktif yang dapat membantu Anda belajar Software Engineering dengan cara yang lebih menarik. Manfaatkan tutorial video, platform belajar online, atau bahkan permainan pembelajaran untuk memperdalam pemahaman Anda tentang konsep-konsep yang kompleks. Interaktivitas ini akan membuat proses belajar Anda lebih menyenangkan dan memudahkan Anda untuk menguasai materi.</p>\n\n<p><em>Baca Juga: <a href=\"https://sandemoindoteknologi.co.id/blog/Teknologi/optimalisasi-kueri-untuk-efisiensi-kuota-pemrosesan-data\">Optimalisasi Kueri untuk Efisiensi Kuota Pemrosesan Data</a></em></p>\n\n<p><strong>3. Bergabung dengan Komunitas</strong><br>\nBergabung dengan komunitas Software Engineering adalah cara yang hebat untuk belajar dengan menyenangkan. Temukan grup belajar online atau forum diskusi di mana Anda dapat berinteraksi dengan sesama pembelajar dan berbagi pengalaman. Diskusi, pertanyaan, dan kolaborasi dengan orang-orang yang memiliki minat yang sama akan membantu memperluas pengetahuan Anda dan memberikan dukungan yang sangat berharga selama proses belajar.</p>\n\n<p><strong>4. Terapkan Pembelajaran dalam Proyek Nyata</strong><br>\nBelajar Software Engineering tidak hanya tentang memahami konsep teoritis, tetapi juga tentang menerapkannya dalam proyek nyata. Setelah Anda mempelajari suatu konsep, carilah kesempatan untuk mengimplementasikannya dalam proyek pribadi atau open source. Dengan melihat hasil nyata dari upaya belajar Anda, Anda akan merasa terpacu untuk terus meningkatkan keterampilan Anda dan mencapai tujuan yang lebih tinggi.</p>\n\n<p><strong>5. Jaga Keseimbangan dan Istirahat yang Cukup</strong><br>\nMeskipun belajar Software Engineering dengan menyenangkan penting, jangan lupa menjaga keseimbangan dan memberikan diri Anda istirahat yang cukup. Terlalu banyak fokus pada belajar bisa membuat Anda cepat merasa lelah dan kehilangan minat. Tetapkan jadwal belajar yang seimbang, sisihkan waktu untuk hobi dan rekreasi, dan pastikan Anda memiliki waktu istirahat yang memadai untuk mengembalikan energi Anda. Dengan keseimbangan yang baik, Anda akan lebih produktif dan mampu belajar dengan lebih menyenangkan.</p>\n\n<p><strong>6. Tetapkan Tujuan dan Rayakan Keberhasilan</strong><br>\nTetapkan tujuan jangka pendek dan jangka panjang dalam perjalanan belajar Anda dan rayakan setiap keberhasilan</p>\n\n<p> yang Anda capai. Tujuan yang jelas memberikan fokus dan motivasi yang diperlukan untuk terus maju. Ketika Anda mencapai target atau mencapai milestone tertentu, berikan diri Anda penghargaan dan perayaan kecil. Ini akan memberikan dorongan tambahan dan membuat proses belajar menjadi lebih menyenangkan.</p>\n\n<p><strong>Kesimpulan:</strong><br>\nBelajar Software Engineering dengan cara yang menyenangkan membutuhkan pendekatan yang tepat. Dengan memilih proyek menarik, menggunakan sumber daya interaktif, bergabung dengan komunitas, menerapkan pembelajaran dalam proyek nyata, menjaga keseimbangan, dan tetapkan tujuan yang jelas, Anda dapat membuat proses belajar lebih menyenangkan dan memuaskan. Ingatlah bahwa belajar tidak harus membosankan, tetapi bisa menjadi petualangan yang penuh kesenangan dalam mengembangkan keterampilan dan pengetahuan Anda dalam Software Engineering.</p>', 'Artikel ini bertujuan memberikan enam tips praktis bagi pembaca untuk belajar Software Engineering dengan cara yang menyenangkan', 'berikut-adalah-6-tips-untuk-belajar-software-engineering-dengan-cara-yang-menyenangkan', '647abcca9d5c3.jpg', '3', 1685765322, 'Sandi Maulidika'),
(62, 'Jasa Pembuatan Website Murah dan Profesional', '<p>Jika Anda sedang mencari jasa pembuatan website yang murah dan profesional, maka Anda telah menemukan artikel yang tepat. Kami menawarkan jasa pembuatan website company profile dengan fitur-fitur premium seperti SEO Friendly, Responsive Design, Tampilan Unik, SSL Certificate, Loading Fast, Unlimited Space &amp; Bandwidth.</p>\n\n<p><a href=\"https://ibb.co/wN2hkST\"><img alt=\"\" src=\"https://i.ibb.co/XZGxQ79/7475493.jpg\" style=\"height:427px; width:640px\" /></a></p>\n\n<p>Fitur-fitur Premium</p>\n\n<ul>\n	<li>SEO Friendly: Website yang SEO friendly akan memudahkan mesin pencari seperti Google untuk mengindeks website Anda. Hal ini akan meningkatkan kemungkinan website Anda muncul di halaman pertama hasil pencarian Google.</li>\n	<li>Responsive Design: Website dengan responsive design akan menyesuaikan tampilannya dengan ukuran layar perangkat pengguna, sehingga pengguna dapat mengakses website Anda dengan mudah dari berbagai perangkat, baik desktop maupun mobile.</li>\n	<li>Tampilan Unik: Tampilan unik pada website Anda akan membuat website Anda lebih menarik dan membedakan dari website lainnya.</li>\n	<li>SSL Certificate: SSL Certificate adalah sertifikat keamanan yang memastikan bahwa website Anda aman dan data pengguna terenkripsi.</li>\n	<li>Loading Fast: Website yang loading cepat akan meningkatkan pengalaman pengguna dan mempercepat waktu akses website.</li>\n	<li>Unlimited Space &amp; Bandwidth: Dengan unlimited space &amp; bandwidth, website Anda dapat menampung lebih banyak data dan pengunjung tanpa khawatir kehabisan kapasitas.&nbsp;</li>\n</ul>\n\n<p>Kenapa Memilih Jasa Pembuatan Website Kami?</p>\n\n<ul>\n	<li>Harga terjangkau: Kami menawarkan harga yang terjangkau untuk jasa pembuatan website company profile dengan fitur-fitur premium.</li>\n	<li>Profesional: Kami memiliki tim yang berpengalaman dalam pembuatan website dan akan memberikan hasil yang memuaskan.</li>\n	<li>Garansi: Kami memberikan garansi untuk website yang kami buat, sehingga Anda tidak perlu khawatir jika terjadi masalah pada website Anda.</li>\n	<li>Support: Kami memberikan dukungan teknis untuk website yang kami buat, sehingga Anda dapat menghubungi kami jika ada masalah pada website Anda.</li>\n</ul>\n\n<p>Jangan ragu untuk menghubungi kami untuk mendapatkan jasa pembuatan website murah dan profesional dengan fitur-fitur premium yang kami tawarkan. Terima kasih.</p>\n', 'Jasa Pembuatan Website Murah dan Profesional dengan Fitur SEO Friendly, Responsive Design, Tampilan Unik, SSL Certificate, Loadi', 'jasa-pembuatan-website-murah-dan-profesional', '64843ee30fe3f.jpg', '3', 1686388451, 'Sandi Maulidika'),
(68, 'Facebook Perubahan Fitur Video dengan Tujuan Bersaing dengan TikTok dan YouTube', '<p>Meta, induk perusahaan Facebook, Instagram, dan WhatsApp mengumumkan sejumlah perubahan untuk fitur video di Facebook. Perombakan ini merupakan upaya baru Facebook agar bisa lebih bersaing dengan YouTuber dan TikTok.</p><script async src=\"https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3971040661867794\" crossorigin=\"anonymous\"></script>\n        <ins class=\"adsbygoogle\" style=\"display:block; text-align:center;\" data-ad-layout=\"in-article\" data-ad-format=\"fluid\" data-ad-client=\"ca-pub-3971040661867794\" data-ad-slot=\"9577430246\"></ins>\n        <script>\n            (adsbygoogle = window.adsbygoogle || []).push({});\n        </script><p>Pembaruan pertama adalah soal fitur edit video di dalam aplikasi yang kini lebih banyak. Facebook juga mengubah tab \"Watch\" menjadi \"Video\". Selain itu, Meta juga memperbarui laman \"Explore\" untuk menampilkan deretan video yang sedang trending dan yang direkomendasikan.</p><p>Facebook tampaknya cukup serius ingin menyaingi popularitas TikTok. Jejaring sosial raksasa itu pun tengah menyiapkan strategi yang lebih \"matang\" dari sebelumnya. Kabarnya, Facebook akan merombak tampilan di platform mereka agar mirip dengan TikTok. Strategi itu diungkap oleh Head of Facebook App Tom Alison dalam sebuah memo</p><p>Memo tersebut, dari Tom Alison yang mengepalai aplikasi Facebook di Meta, menyatakan bahwa tujuannya adalah untuk mengubah Facebook menjadi \'Discovery Engine\', yang akan mempunyai rekomendasi mirip seperti \'FYP/For You Page\' TikTok. Rekomendasi utama akan datang dari konten yang tidak terhubung, termasuk Reel, dan pengguna akan melihat lebih sedikit postingan dari teman dan keluarga di feed mereka.</p><p> </p><p>Sumber: </p><ol><li><a href=\"https://tekno.kompas.com/read/2023/07/18/15000027/facebook-rombak-fitur-video-untuk-saingi-tiktok-dan-youtube?utm_campaign=partner&utm_medium=Newstand&utm_source=Google\">https://tekno.kompas.com/read/2023/07/18/15000027/facebook-rombak-fitur-video-untuk-saingi-tiktok-dan-youtube?utm_campaign=partner&utm_medium=Newstand&utm_source=Google</a></li><li><a href=\"https://tekno.republika.co.id/berita/rdk246368/facebook-rombak-total-fitur-demi-saingi-popularitas-tiktok\">https://tekno.republika.co.id/berita/rdk246368/facebook-rombak-total-fitur-demi-saingi-popularitas-tiktok</a></li><li><a href=\"https://sindikasi.republika.co.id/berita/rdk246368/facebook-rombak-total-fitur-demi-saingi-popularitas-tiktok \">https://sindikasi.republika.co.id/berita/rdk246368/facebook-rombak-total-fitur-demi-saingi-popularitas-tiktok </a></li><li><a href=\"https://www.facebook.com/fareedzakaria/videos/social-media-particularly-tiktok-is-scarily-addictive-and-needs-to-be-regulatedm/792193239125571/\">https://www.facebook.com/fareedzakaria/videos/social-media-particularly-tiktok-is-scarily-addictive-and-needs-to-be-regulatedm/792193239125571/</a></li><li><a href=\"https://facebook.com/tiktok/\">https://facebook.com/tiktok/</a></li><li><a href=\"https://id.techinasia.com/facebook-rombak-desain-demi-saingi-tiktok\">https://id.techinasia.com/facebook-rombak-desain-demi-saingi-tiktok</a></li><li><a href=\"https://inet.detik.com/mobileapps/sitemap_web.xml\">https://inet.detik.com/mobileapps/sitemap_web.xml</a></li><li><a href=\"https://inet.detik.com/mobileapps/sitemap_news.xml\">https://inet.detik.com/mobileapps/sitemap_news.xml</a></li><li><a href=\"https://pemilu.kompas.com/read/2022/06/19/08000007/facebook-bakal-rombak-tampilan-demi-saingi-tiktok\">https://pemilu.kompas.com/read/2022/06/19/08000007/facebook-bakal-rombak-tampilan-demi-saingi-tiktok</a></li><li><a href=\"https://tekno.kompas.com/read/2022/06/19/08000007/facebook-bakal-rombak-tampilan-demi-saingi-tiktok?page=all\">https://tekno.kompas.com/read/2022/06/19/08000007/facebook-bakal-rombak-tampilan-demi-saingi-tiktok?page=all</a></li><li><a href=\"https://www.dream.co.id/lifestyle/saingi-tiktok-meta-rombak-tampilan-facebook-220617p.html\">https://www.dream.co.id/lifestyle/saingi-tiktok-meta-rombak-tampilan-facebook-220617p.html</a></li></ol>', 'Perombakan ini merupakan upaya baru Facebook agar bisa lebih bersaing dengan YouTuber dan TikTok.', 'facebook-perubahan-fitur-video-dengan-tujuan-bersaing-dengan-tiktok-dan-youtube', '64b64c80c4af1.jpg', '3', 1689668737, 'Sandi Maulidika'),
(69, '15 Ucapan Tahun Baru Islam 1 Muharram 1445 H', '<p><b>Palembang, Sandemo - </b>Umat Muslim di seluruh dunia merayakan Tahun Baru Islam setiap 1 Muharram dalam kalender Hijriah. Tahun baru Islam 1 Muharram 1445 H jatuh pada Rabu, 19 Juli 2023. Berikut adalah beberapa berita dan contoh ucapan yang dapat dijadikan inspirasi untuk merayakan Tahun Baru Islam.</p><script async src=\"https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3971040661867794\" crossorigin=\"anonymous\"></script>\n        <ins class=\"adsbygoogle\" style=\"display:block; text-align:center;\" data-ad-layout=\"in-article\" data-ad-format=\"fluid\" data-ad-client=\"ca-pub-3971040661867794\" data-ad-slot=\"9577430246\"></ins>\n        <script>\n            (adsbygoogle = window.adsbygoogle || []).push({});\n        </script><p><span class=\"text-big\"><strong>Makna Bulan Muharram Bagi Umat Muslim</strong></span></p><p>Bulan Muharram adalah bulan pertama dalam kalender Hijriah dan merupakan salah satu bulan suci yang dianggap sakral oleh umat Muslim. Bulan Muharram memiliki makna penting bagi umat Muslim di seluruh dunia.</p><p>Bulan Muharram membawa maksud \'diharamkan\' atau \'dipantang\' iaitu Allah SWT melarang melakukan peperangan atau pertumpahan darah. Namun demikian larangan ini ditamatkan setelah pembukaan Makkah (Al Baqarah: 91). Sejak pemansuhan itu, umat Islam boleh melaksanakan tugas dan ibadat harian tanpa terikat lagi dengan larangan berkenaan.</p><p>Dalam melakukan amalan-amalan di bulan Muharram, penting untuk diingat bahwa niat dan keikhlasan dalam beribadah kepada Allah SWT adalah yang utama. Amalan-amalan tersebut tidak hanya dibatasi pada bulan Muharram saja, tetapi juga dapat dilakukan sepanjang tahun sebagai bentuk ibadah dan kebaikan.</p><script async src=\"https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3971040661867794\"\n     crossorigin=\"anonymous\"></script>\n<ins class=\"adsbygoogle\"\n     style=\"display:block; text-align:center;\"\n     data-ad-layout=\"in-article\"\n     data-ad-format=\"fluid\"\n     data-ad-client=\"ca-pub-3971040661867794\"\n     data-ad-slot=\"9577430246\"></ins>\n<script>\n     (adsbygoogle = window.adsbygoogle || []).push({});\n</script><p><span class=\"text-big\"><strong>Berikut adalah 15 ucapaan yang dapat digunakan untuk menyambut Bulan Muharram:</strong></span></p><ol><li>Selamat menyambut Bulan Muharram, semoga di bulan yang penuh berkah ini kita semua mendapat rahmat berlipat dari Allah SWT.</li><li>Mari kita isi Bulan Muharram dengan banyak melakukan kebaikan dan memperbanyak ibadah. Selamat menyambut Bulan Muharram.</li><li>Semoga di Bulan Muharram ini kita semua diberikan kekuatan dan kesabaran untuk menghadapi segala ujian hidup. Selamat menyambut Bulan Muharram.</li><li>Bulan Muharram adalah bulan suci yang penuh berkah. Semoga kita semua bisa memanfaatkan bulan ini dengan sebaik-baiknya. Selamat menyambut Bulan Muharram.</li><li>Selamat datang Bulan Muharram, bulan yang penuh dengan keberkahan dan kemuliaan. Semoga kita semua bisa memperoleh keberkahan di bulan ini.</li><li>Di Bulan Muharram ini, mari kita tingkatkan keimanan dan ketaqwaan kita kepada Allah SWT. Selamat menyambut Bulan Muharram.</li><li>Bulan Muharram adalah bulan permulaan dalam kalender Hijriah. Semoga di bulan ini kita semua bisa memulai kehidupan yang lebih baik. Selamat menyambut Bulan Muharram.</li><li>Selamat menyambut Bulan Muharram, bulan yang penuh dengan keberkahan dan rahmat dari Allah SWT. Semoga kita semua bisa memanfaatkan bulan ini dengan sebaik-baiknya.</li><li>Di Bulan Muharram ini, mari kita tingkatkan kebaikan dan keikhlasan kita dalam beribadah kepada Allah SWT. Selamat menyambut Bulan Muharram.</li><li>Semoga di Bulan Muharram ini kita semua diberikan kesehatan, kebahagiaan, dan kemudahan dalam hidup. Selamat menyambut Bulan Muharram.</li></ol><p>Semoga ucapan-ucapan ini dapat memberikan semangat dan keberkahan di Bulan Muharram.</p>', 'Bulan Muharram adalah bulan pertama dalam kalender Hijriah dan merupakan salah satu bulan suci yang dianggap sakral oleh umat Mu', '15-ucapan-tahun-baru-islam-1-muharram-1445-h', '64b748898969d.jpg', '1', 1689733257, 'Sandi Maulidika'),
(70, 'Tanda WhatsApp Diblokir Orang Lain yang Harus Kamu Ketahui', '<p>Bagaimana, sih, tanda WhatsApp diblokir? Sejak ada fitur WA yang tidak memakai poto profil, agak sulit mendeteksi kita diblokir atau tidak. Oleh karena itu, untuk mengetahui apakah nomor kamu sudah diblokir, maka perlu mengetahui beberapa tanda berikut ini.<br> </p><script async src=\"https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3971040661867794\"\n     crossorigin=\"anonymous\"></script>\n<ins class=\"adsbygoogle\"\n     style=\"display:block; text-align:center;\"\n     data-ad-layout=\"in-article\"\n     data-ad-format=\"fluid\"\n     data-ad-client=\"ca-pub-3971040661867794\"\n     data-ad-slot=\"9577430246\"></ins>\n<script>\n     (adsbygoogle = window.adsbygoogle || []).push({});\n</script><p><a href=\"https://1.bp.blogspot.com/-kSlRUvJNwc8/XmRPn9-R1-I/AAAAAAAAAS8/P8GuLk9gtp8yfRRYe-lXHIEEnmtZJSEoQCLcBGAsYHQ/s1600/cdbadd03876180b3e12dfaf17fa18e0f.jpg\"><img src=\"https://1.bp.blogspot.com/-kSlRUvJNwc8/XmRPn9-R1-I/AAAAAAAAAS8/P8GuLk9gtp8yfRRYe-lXHIEEnmtZJSEoQCLcBGAsYHQ/s320/cdbadd03876180b3e12dfaf17fa18e0f.jpg\" alt=\"Tanda whatsapp diblokir orang lain\"></a><br>Simak ulasan lengkapnya.<br> </p><h3>1. Profil Picture yang Digunakan Tidak Terlihat</h3><p>Ciri WA diblokir teman yang paling jelas adalah ini. Jika nomor kita telah diblokir, mana foto profilnya tidak lagi terlihat. Sehingga untuk mengetahui apakah kamu telah diblokir oleh seseorang atau tidak, lihat saja foto profil yang dia pasang.<br>Hanya saja, sekarang WhatsApp sudah bisa membuat sebuah akun tanpa foto. Sehingga cara ini menjadi kurang akurat lagi. Sehingga diperlukan cara lain untuk mengetahuinya.</p><h3>2. Tidak Bisa Melihat Status WhatsAppnya</h3><p><a href=\"https://1.bp.blogspot.com/-u7ui8LKucHc/XmRPn8u406I/AAAAAAAAATI/rhKOq0DtMQgg8MAGeqdi1O5nYpK1_VdgACEwYBhgL/s1600/013506500_1486385872-androidPIT.jpg\"><img src=\"https://1.bp.blogspot.com/-u7ui8LKucHc/XmRPn8u406I/AAAAAAAAATI/rhKOq0DtMQgg8MAGeqdi1O5nYpK1_VdgACEwYBhgL/s320/013506500_1486385872-androidPIT.jpg\" alt=\"Tanda whatsapp diblokir, tidak bisa lihat status\"></a><br>Ciri ciri WA diblokir orang lain selanjutnya adalah kamu tidak bisa lagi mengakses status Whatsapp yang sedang dia buat. Cara ini kurang efektif untuk memastikan apakah kamu diblokir atau tidak, karena juga ada fitur pengecualian status atau mungkin dia memang tidak membuat status.</p><h3>3. Tidak Terlihat Last Seen di Profil WhatsApp</h3><p><br>Tanda Whatsapp diblokir selanjutnya adalah ketika kamu membuka profilnya, tidak ada Last Seen di sana.  Tapi cara ini juga kurang efektif, karena beberapa pengguna kadang mematikan fitur last seennya juga.</p><h3>4. Chat Tidak Bisa Terkirim</h3><p><a href=\"https://1.bp.blogspot.com/-3mALIpLYhdw/XmRPpugyFGI/AAAAAAAAATQ/Wt_6SYMUFXMK7QyvKtiRBS6Uv5JUqw3ZwCEwYBhgL/s1600/tanda-whatsapp-diblokir-3.png\"><img src=\"https://1.bp.blogspot.com/-3mALIpLYhdw/XmRPpugyFGI/AAAAAAAAATQ/Wt_6SYMUFXMK7QyvKtiRBS6Uv5JUqw3ZwCEwYBhgL/s320/tanda-whatsapp-diblokir-3.png\" alt=\"tanda whatsapp diblokir orang lain, tidak bisa kirim chat\"></a><br>Tanda yang paling jelas ketika nomor kita diblokir adalah chat yang tidak bisa terkirim. Jika kamu mengirim chat dan centang satu terus, maka itu artinya kamu sudah diblokir.</p><h3>5. Tidak Bisa Melakukan Panggilan Telepon</h3><p><br>Cara mengetahui nomor WA kita diblokir adalah dengan membuat panggilan ke nomor yang dimaksud. Jika nomor kamu telah diblokir, maka kamu tidak akan bisa terhubung lagi dengan nomor tersebut. Bahkan akan ada notifikasi yang langsung muncul dari Whatsapp bahwa panggilan dibatalkan. Jika ini terjadi, maka nomor yang kamu miliki benar-benar telah diblokir.</p><h3>6. Coba Tambahkan Nomor ke Grup</h3><p><br>Cara mengetahui wa diblokir tanpa chat adalah dengan menambahkan nomor tersebut ke dalam grup. Cara ini cukup efektif untuk mengetahui apakah kamu benar-benar diblokir atau tidak. Buatlah grup palsu untuk menguji kemungkinan ini.<br>Jika nomor kamu benar-benar telah diblokir, maka ketika kamu menambahkan dia ke dalam grup, akan muncuk notifikasi dari WhatsApp yang mengatakan bahwa Tidak Dapat Menambahkan Kontak.</p><h3>7. Tanya Teman</h3><p><a href=\"https://1.bp.blogspot.com/-X7jq8OSFZgY/XmRPn3_UkfI/AAAAAAAAATQ/JtXythA6RpUaEttt6eOHjyqDzqDXWRK1gCEwYBhgL/s1600/4-ciri-ciri-bila-whatsapp-anda-diblokir-teman-2lLcT0Ntcd.jpg\"><img src=\"https://1.bp.blogspot.com/-X7jq8OSFZgY/XmRPn3_UkfI/AAAAAAAAATQ/JtXythA6RpUaEttt6eOHjyqDzqDXWRK1gCEwYBhgL/s320/4-ciri-ciri-bila-whatsapp-anda-diblokir-teman-2lLcT0Ntcd.jpg\" alt=\"tanda whatsapp diblokir\"></a><br>Cara selanjutnya yang cukup efektif adalah dengan menanyakan ke teman yang sama-sama mengenal dia. Jika kamu tidak bisa melihat poto profilnya, coba tanyakan apakah teman kamu yang lain bisa melihat foto profilnya atau tidak. Jika bisa, maka sudah pasti nomor kamu telah diblokir olehnya.</p><h3>8. Pastikan kamu Memeriksa Semua Tanda</h3><p><br>Karena Whatsapp sekarang memiliki fitur yang mampu menyembunyikan foto profil, status update, dan last seen, jadi beberapa indikator di atas tidak menjamin bahwa nomor kamu telah diblokir. Nah, supaya kamu lebih yakin apakah sedang diblokir atau tidak, maka pastikan untuk memeriksa semua tanda di atas. Jika WA kamu tidak bisa mengakses:</p><ul><li>Foto profil</li><li>Last seen</li><li>Status update</li><li>Pesan tidak terkirim</li><li>Tidak bisa menelepon</li><li>Tidak bisa menambahkan ke dalam grup</li></ul><p><br>Maka bisa dipastikan bahwa kamu telah diblokir. Tidak ada yang bisa kamu lakukan untuk membuka pemblokiran. Itu sepenuhnya adalah hak dari orang yang telah memblokir Anda. Itulah beberapa tanda WhatsApp diblokir yang umum diketahui. Semoga bermanfaat.</p>', 'Bagaimana, sih, tanda WhatsApp diblokir? Sejak ada fitur WA yang tidak memakai poto profil', 'tanda-whatsapp-diblokir-orang-lain-yang-harus-kamu-ketahui', '64d5e5116f76d.jpg', '3', 1691739409, 'Sandi Maulidika'),
(71, 'Kontroversi Perpres Publishers Rights: Potensi Merugikan Ekosistem Kreator Konten Digital', '<p xss=removed><i><strong>Palembang, 11 Agustus 2023</strong></i> - Pemerintah Indonesia telah mengeluarkan Peraturan Presiden (Perpres) kontroversial yang diberi nama \"Perpres Publishers Rights\" yang menuai kritik dari berbagai kalangan terkait potensi dampak negatifnya terhadap ekosistem kreator konten digital. Perpres ini diduga dapat merugikan kreasi kreator dan menyulitkan berbagi informasi dalam era digital, dengan dalih meningkatkan standar jurnalisme berkualitas.</p>\n<script async src=\"https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3971040661867794\"\n     crossorigin=\"anonymous\"></script>\n<ins class=\"adsbygoogle\"\n     style=\"display:block; text-align:center;\"\n     data-ad-layout=\"in-article\"\n     data-ad-format=\"fluid\"\n     data-ad-client=\"ca-pub-3971040661867794\"\n     data-ad-slot=\"9577430246\"></ins>\n<script>\n     (adsbygoogle = window.adsbygoogle || []).push({});\n</script>\n<p xss=removed>Dalam Perpres yang baru saja diumumkan, pemerintah mengklaim ingin memperkuat hak penerbit dalam melindungi konten yang mereka hasilkan. Namun, banyak pihak mengkhawatirkan bahwa peraturan ini justru akan merugikan para kreator konten independen dan merusak keanekaragaman serta akses informasi di platform daring.</p><p xss=removed>Salah satu poin kontroversial dalam Perpres ini adalah kewajiban bagi platform daring dan media sosial untuk memonitor konten yang diunggah oleh para kreator. Beberapa ahli teknologi dan aktivis kebebasan berbicara menganggap langkah ini sebagai bentuk sensor yang berpotensi menyebabkan sensor dan penghapusan konten yang beragam, termasuk opini kritis terhadap pemerintah atau isu-isu sensitif lainnya.</p><p xss=removed>Sejumlah kreator konten berpendapat bahwa Perpres ini dapat membatasi kreativitas mereka dan menghambat ekosistem digital yang selama ini telah memberikan peluang untuk menghasilkan konten yang bervariasi. Mereka mengkhawatirkan bahwa upaya untuk menjaga standar jurnalisme berkualitas seharusnya tidak mengorbankan kebebasan berekspresi dan hak kreator untuk berbagi informasi secara bebas.</p><p xss=removed>Beberapa pakar hukum juga telah menyoroti aspek-aspek kontroversial dalam Perpres Publishers Rights ini, termasuk kemungkinan adanya kriminalisasi terhadap kreator yang dianggap melanggar hak penerbit atau merugikan citra penerbit tanpa adanya batasan yang jelas. Mereka mengingatkan bahwa perlindungan terhadap hak penerbit seharusnya tidak merusak prinsip-prinsip kebebasan berbicara dan keberagaman informasi.</p><p xss=removed>Meskipun pemerintah berpendapat bahwa langkah ini penting untuk meningkatkan standar jurnalisme dan melindungi hak penerbit, respons keras dari berbagai pihak telah mendorong tuntutan agar Perpres tersebut direvisi atau dicabut. Demonstrasi dan kampanye daring dengan tagar #SaveDigitalCreativity telah menyebar luas, menunjukkan bahwa banyak orang merasa prihatin terhadap potensi dampak negatif dari Perpres ini terhadap ekosistem kreator konten di Indonesia.</p>', 'Perpres Publishers Rights, Konten Kreator, Ekosistem Digital, Kebebasan Berbicara, Jurnalisme Berkualitas, Sensor Konten, Demons', 'kontroversi-perpres-publishers-rights:-potensi-merugikan-ekosistem-kreator-konten-digital', '64d5e89b9c042.jpg', '3', 1691740315, 'Sandi Maulidika');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id` int NOT NULL,
  `brand_name` varchar(128) COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(128) COLLATE utf8mb4_general_ci NOT NULL
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
-- Table structure for table `karir`
--

CREATE TABLE `karir` (
  `id` int NOT NULL,
  `code_job` int DEFAULT NULL,
  `name_job` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `location_job` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `jenis_pekerjaan` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_general_ci NOT NULL,
  `date_job` date NOT NULL,
  `limit_job` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `karir`
--

INSERT INTO `karir` (`id`, `code_job`, `name_job`, `location_job`, `jenis_pekerjaan`, `description`, `date_job`, `limit_job`) VALUES
(9, 982, 'Mobile App Developer', 'Palembang', 'Freelance', '<p><strong>Deskripsi</strong></p>\r\n\r\n<p>Kami sedang mencari seorang Mobile App Developer yang berpengalaman dan kreatif untuk bekerja sebagai kontraktor proyek dalam tim pengembangan aplikasi mobile kami. Sebagai Mobile App Developer, Anda akan bertanggung jawab dalam merancang, mengembangkan, dan menguji aplikasi mobile yang inovatif dan menarik.</p>\r\n\r\n<p><strong>Tanggung Jawab:</strong></p>\r\n\r\n<ul>\r\n <li>Merancang, mengembangkan, dan memelihara aplikasi mobile menggunakan bahasa pemrograman seperti Java atau Kotlin (untuk platform Android) atau Swift atau Objective-C (untuk platform iOS).</li>\r\n <li>Mengimplementasikan desain dan antarmuka pengguna yang menarik dan responsif.</li>\r\n <li>Mengintegrasikan fitur-fitur seperti pemrosesan pembayaran, penggunaan API, dan notifikasi push ke dalam aplikasi.</li>\r\n <li>Memastikan kualitas aplikasi melalui pengujian dan debugging yang cermat.</li>\r\n <li>Mengoptimalkan performa aplikasi untuk memastikan kinerja yang baik di berbagai perangkat mobile.</li>\r\n <li>Mengikuti tren terbaru dalam pengembangan aplikasi mobile dan menggunakan praktik terbaik dalam pengembangan aplikasi.</li>\r\n</ul>\r\n\r\n<p><strong>Kualifikasi:</strong></p>\r\n\r\n<ul>\r\n <li>Pengalaman kerja minimal 2 tahun sebagai Mobile App Developer atau posisi terkait.</li>\r\n <li>Penguasaan yang kuat dalam bahasa pemrograman Java atau Kotlin (untuk platform Android) atau Swift atau Objective-C (untuk platform iOS).</li>\r\n <li>Pemahaman yang baik tentang desain antarmuka pengguna mobile.</li>\r\n <li>Pengalaman dalam penggunaan alat pengembangan seperti Android Studio atau Xcode.</li>\r\n <li>Memiliki portofolio yang menunjukkan keterampilan dalam pengembangan aplikasi mobile.</li>\r\n <li>Memiliki pengetahuan tentang pemrosesan pembayaran, penggunaan API, dan notifikasi push.</li>\r\n <li>Kemampuan untuk bekerja secara mandiri dan mengelola proyek secara efektif.</li>\r\n <li>Kreatif dan mampu berpikir solutif dalam menghadapi tantangan teknis.</li>\r\n</ul>\r\n\r\n<p>Kami menawarkan kesempatan untuk bekerja secara fleksibel sebagai kontraktor proyek, dengan pembayaran yang kompetitif berdasarkan proyek yang diselesaikan.</p>\r\n\r\n<p>Jika Anda tertarik dengan posisi ini, silakan kirimkan CV, Portfolio, dan surat lamaran Anda pada form di bawah. Kami akan meninjau lamaran Anda dengan saksa</p>', '2023-06-28', '2023-06-15'),
(10, 343, 'Staf Akuntan', 'Gelumbang, Muara Enim <br> Sumatera Selatan', 'Freelance', '<p><strong>Deskripsi</strong></p>\r\n\r\n<p>Kami sedang mencari seorang Staf Akuntan yang berpengalaman dan mandiri untuk bekerja sebagai kontraktor proyek dalam tim keuangan kami. Sebagai Staf Akuntan, Anda akan bertanggung jawab dalam melakukan tugas akuntansi, pemrosesan data, dan pembuatan laporan keuangan yang akurat dan tepat waktu.</p>\r\n\r\n<p><strong>Tanggung Jawab:</strong></p>\r\n\r\n<ul>\r\n <li>Memasukkan dan memproses invoice.</li>\r\n <li>Menginput Transaksi penjualan, pembelian, kas masuk, kas keluar, jurnal umum.</li>\r\n <li>Memeriksa, menyeimbangkan, dan merekonsiliasi catatan keuangan perusahaan.</li>\r\n <li>Menyiapkan dan menyajikan laporan keuangan bulanan, termasuk neraca, laporan laba rugi, dan laporan arus kas.</li>\r\n <li>Mengelola dan mengawasi administrasi pajak, termasuk perhitungan dan pelaporan pajak.</li>\r\n <li>Melakukan analisis keuangan dan memberikan rekomendasi berdasarkan data keuangan yang ada.</li>\r\n <li>Memastikan kepatuhan terhadap peraturan akuntansi dan perpajakan yang berlaku.</li>\r\n <li>Menggunakan Excel dan perangkat lunak akuntansi lainnya untuk pemrosesan dan analisis data keuangan.</li>\r\n</ul>\r\n\r\n<p><strong>Kualifikasi:</strong></p>\r\n\r\n<ul>\r\n <li>Minimal SMA/SMK, di utamakan D3/S1 Jurusan Management Keuangan/Akuntansi</li>\r\n <li>Fresh graduate/Lulusan Baru atau pengalaman 1 tahun di bidang accounting</li>\r\n <li>Kemampuan komunikasi yang baik dan dapat bekerja dengan baik dalam tim.</li>\r\n <li>Umur maksimal 27 tahun</li>\r\n <li>Wajib menguasai Microsoft Excel untuk pemrosesan data dan analisis keuangan.</li>\r\n <li>Wajib Mempunyai Laptop/PC sendiri</li>\r\n</ul>\r\n\r\n<p>Kami menawarkan kesempatan untuk bekerja secara fleksibel sebagai kontraktor proyek, dengan pembayaran yang kompetitif berdasarkan proyek yang diselesaikan.</p>\r\n\r\n<p>Jika Anda tertarik dengan posisi ini, silakan kirimkan CV, Portfolio, dan surat lamaran Anda pada form di bawah menjadi satu. Kami akan meninjau lamaran Anda dengan saksama.</p>', '2023-06-28', '2023-06-15');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int NOT NULL,
  `name` varchar(128) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(128) COLLATE utf8mb4_general_ci NOT NULL,
  `whatsapp` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `subject` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `pesan` text COLLATE utf8mb4_general_ci NOT NULL,
  `aksi` int NOT NULL,
  `balasan` text COLLATE utf8mb4_general_ci,
  `id_admin` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `whatsapp`, `subject`, `pesan`, `aksi`, `balasan`, `id_admin`) VALUES
(6, 'Voni Puspita Sari', 'vonisnd@gmail.com', '6282182877737', 'Web', 'testing', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `google`
--

CREATE TABLE `google` (
  `id_google` char(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_blog` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_porto` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sidebar_blog` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail_blog` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `aksi` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `google`
--

INSERT INTO `google` (`id_google`, `display_blog`, `display_porto`, `sidebar_blog`, `detail_blog`, `aksi`) VALUES
('3203253822', '<div class=\"col-lg-4 col-md-6 col-sm-12\">\n                <div class=\"blog-one__single\">\n                    <script async src=\"https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3971040661867794\" crossorigin=\"anonymous\"></script>\n                    <!-- Display BLog -->\n                    <ins class=\"adsbygoogle\" style=\"display:block\" data-ad-client=\"ca-pub-3971040661867794\" data-ad-slot=\"2634432157\" data-ad-format=\"auto\" data-full-width-responsive=\"true\"></ins>\n                    <script>\n                        (adsbygoogle = window.adsbygoogle || []).push({});\n                    </script>\n                </div>\n            </div>', '<script async src=\"https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3971040661867794\" crossorigin=\"anonymous\"></script>\n                    <!-- service -->\n                    <ins class=\"adsbygoogle\" style=\"display:block\" data-ad-client=\"ca-pub-3971040661867794\" data-ad-slot=\"6388160121\" data-ad-format=\"auto\" data-full-width-responsive=\"true\"></ins>\n                    <script>\n                        (adsbygoogle = window.adsbygoogle || []).push({});\n                    </script>', '<script async src=\"https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3971040661867794\"\r\n     crossorigin=\"anonymous\"></script>\r\n<!-- Sidebar Blog -->\r\n<ins class=\"adsbygoogle\"\r\n     style=\"display:block\"\r\n     data-ad-client=\"ca-pub-3971040661867794\"\r\n     data-ad-slot=\"6287780287\"\r\n     data-ad-format=\"auto\"\r\n     data-full-width-responsive=\"true\"></ins>\r\n<script>\r\n     (adsbygoogle = window.adsbygoogle || []).push({});\r\n</script>', '<script async src=\"https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3971040661867794\"\n     crossorigin=\"anonymous\"></script>\n<ins class=\"adsbygoogle\"\n     style=\"display:block; text-align:center;\"\n     data-ad-layout=\"in-article\"\n     data-ad-format=\"fluid\"\n     data-ad-client=\"ca-pub-3971040661867794\"\n     data-ad-slot=\"9577430246\"></ins>\n<script>\n     (adsbygoogle = window.adsbygoogle || []).push({});\n</script>', 1);

-- --------------------------------------------------------

--
-- Table structure for table `integrasi`
--

CREATE TABLE `integrasi` (
  `id` int NOT NULL,
  `wagw` varchar(128) COLLATE utf8mb4_general_ci NOT NULL,
  `url_api` varchar(110) COLLATE utf8mb4_general_ci NOT NULL,
  `ahu_username` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `ahu_password` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `ahu_token` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `integrasi`
--

INSERT INTO `integrasi` (`id`, `wagw`, `url_api`, `ahu_username`, `ahu_password`, `ahu_token`) VALUES
(1, 'ushg8vz7ykymowvz.v5xdvsbzp4b65gw6lqblxq5sx7ynyphcrr4nncwy1lfo5bzzb5nico9', 'http://103.84.207.90:3001/api/v1/messages', 'sandi', 'sandi', '');

-- --------------------------------------------------------

--
-- Table structure for table `kandidat`
--

CREATE TABLE `kandidat` (
  `id` int NOT NULL,
  `id_job` int DEFAULT NULL,
  `full_name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `date_birth` date NOT NULL,
  `place_birth` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `whatsapp` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `religion` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `university` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `education_stage` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `address` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `cv` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `time` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kategori_blog`
--

CREATE TABLE `kategori_blog` (
  `id` int UNSIGNED NOT NULL,
  `kategori` varchar(128) NOT NULL,
  `slug` varchar(128) NOT NULL,
  `description` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

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
  `id` int NOT NULL,
  `kategori` varchar(128) COLLATE utf8mb4_general_ci NOT NULL
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
-- Table structure for table `subscriber`
--

CREATE TABLE `subscriber` (
  `id` int NOT NULL,
  `email` varchar(128) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subscriber`
--

INSERT INTO `subscriber` (`id`, `email`) VALUES
(11, 'sandimaulidika@gmail.com'),
(12, 'infosandemo@gmail.com'),
(13, 'vonisnd@gmail.com'),
(14, ''),
(15, ''),
(16, ''),
(17, 'vonisnd@gmail.com'),
(18, 'vonisnd@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int NOT NULL,
  `title` varchar(128) COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `client` varchar(128) COLLATE utf8mb4_general_ci NOT NULL,
  `id_kategori` int NOT NULL,
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
(18, 'Stock Gudang Badan Pendapatan Daerah Kota Palembang', '649b08e981a3f.jpg', 'Bapenda Kota Palembang', 1, '2023-06-27'),
(19, 'Smart Wather Meter - IoT', '64ad5b91dd23f.jpg', 'Bpk. Adli', 2, '2023-07-11');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` int NOT NULL,
  `judul_website` varchar(128) COLLATE utf8mb4_general_ci NOT NULL,
  `slogan_website` varchar(128) COLLATE utf8mb4_general_ci NOT NULL,
  `about_hf` varchar(128) COLLATE utf8mb4_general_ci NOT NULL,
  `about_website` text COLLATE utf8mb4_general_ci NOT NULL,
  `alamat` varchar(128) COLLATE utf8mb4_general_ci NOT NULL,
  `nohp` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `facebook` varchar(128) COLLATE utf8mb4_general_ci NOT NULL,
  `instagram` varchar(128) COLLATE utf8mb4_general_ci NOT NULL,
  `gmail` varchar(128) COLLATE utf8mb4_general_ci NOT NULL,
  `linkedin` varchar(128) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `judul_website`, `slogan_website`, `about_hf`, `about_website`, `alamat`, `nohp`, `facebook`, `instagram`, `gmail`, `linkedin`) VALUES
(1, 'PT. Sandemo Indo Teknologi', 'IT Solutions Without Hassle', 'Build your business through a digital marketing strategy with us! Make millions of people in the world discover your business.', 'We are a privately-owned company that focuses on information technology and multimedia. We have a team of experts in the field of information technology and multimedia who are dedicated to providing the best solutions for our clients.', 'Gelumbang, Muara Enim, Palembang, Sumatera Selatan 31171 Indonesia', '6285380945896', 'sandemoindoteknologi', 'sandemoindoteknologi', 'office@sandemoindoteknologi.co.id', 'linkedin.com');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `name` varchar(128) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(128) COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(128) COLLATE utf8mb4_general_ci NOT NULL,
  `nohp` varchar(128) COLLATE utf8mb4_general_ci NOT NULL,
  `maps` text COLLATE utf8mb4_general_ci NOT NULL,
  `facebook` varchar(128) COLLATE utf8mb4_general_ci NOT NULL,
  `instagram` varchar(128) COLLATE utf8mb4_general_ci NOT NULL,
  `youtube` varchar(128) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(225) COLLATE utf8mb4_general_ci NOT NULL,
  `role_id` int NOT NULL,
  `is_active` int NOT NULL,
  `date_created` int NOT NULL,
  `otp_code` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `otp_expiry` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `nohp`, `maps`, `facebook`, `instagram`, `youtube`, `password`, `role_id`, `is_active`, `date_created`, `otp_code`, `otp_expiry`) VALUES
(24, 'Sandi Maulidika', 'sandimaulidika@gmail.com', 'profile1688185054.jpg', '82182877737', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7740.043707842533!2d104.43780441815089!3d-3.2447619401762235!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3bb7b27496d469:0xe9a6ddc39fcbcb98!2sSandemo.id Digital Marketing | Jasa Pembuatan Website Profesional Palembang!5e0!3m2!1sid!2sid!4v1684121796405!5m2!1sid!2sid', 'sandimaulidika', 'sandimaulidikaa', '', '$2y$10$cnzOdfEdSGWUEONqTCMkSetNEbu5lr/npJXRXEmuxoGxGS44MX4wW', 1, 1, 1669308905, '622688', '2023-09-15 12:09:43'),
(26, 'Irpan Nawawi', 'irpannawawi.ixd@gmail.com', 'profile48759849203.png', '85155431137', 'https://goo.gl/maps/ndWM6MLdrZCXTjxn8', 'irpannawawi01', 'irpan4321', 'irpannawawi', '$2y$10$kJT.615GT9Obd7DqDmuujuGNOWCGR57uWba5YV96HPc/vLpeZIXGe', 2, 1, 1684121366, '', ''),
(27, 'Voni Puspita Sari', 'vonisnd@gmail.com', 'profile187381273.jpeg', '82182877737', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7740.043707842533!2d104.43780441815089!3d-3.2447619401762235!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3bb7b27496d469:0xe9a6ddc39fcbcb98!2sSandemo.id Digital Marketing | Jasa Pembuatan Website Profesional Palembang!5e0!3m2!1sid!2sid!4v1684121796405!5m2!1sid!2sid', 'vonipuspitasari', 'vny.s_', '', '$2y$10$ASTekmJ/e8Txe4oPKEDkg.bqU8VKvIEF8Yk2uN92I8Gal/Qu3wthG', 3, 1, 1686197247, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int NOT NULL,
  `role_id` int NOT NULL,
  `menu_id` int NOT NULL
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
  `id` int NOT NULL,
  `menu` varchar(225) COLLATE utf8mb4_general_ci NOT NULL,
  `sort` varchar(128) COLLATE utf8mb4_general_ci NOT NULL
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
  `id` int NOT NULL,
  `role` varchar(225) COLLATE utf8mb4_general_ci NOT NULL
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
  `id` int NOT NULL,
  `menu_id` int NOT NULL,
  `title` varchar(128) COLLATE utf8mb4_general_ci NOT NULL,
  `url` varchar(128) COLLATE utf8mb4_general_ci NOT NULL,
  `icon` varchar(128) COLLATE utf8mb4_general_ci NOT NULL,
  `is_active` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin/admin', 'fa-solid fa-globe', 1),
(2, 2, 'My Profile', 'admin/user', 'fa-solid fa-id-card', 1),
(4, 3, 'Menu Management', 'admin/menu', 'fa-solid fa-folder-plus', 1),
(5, 3, 'Submenu Manage', 'admin/menu/submenu', 'fa-solid fa-folder-tree', 1),
(8, 1, 'Role Management', 'admin/admin/role', 'fa-solid fa-user-gear', 1),
(17, 5, 'Setting Website', 'admin/setting', 'fa-solid fa-gear', 1),
(18, 6, 'Blog', 'admin/page/blog', 'fa-solid fa-newspaper', 1),
(19, 6, 'Portfolio', 'admin/page/portfolio', 'icons-Project', 1),
(21, 5, 'Brand', 'admin/setting/brand', 'fa-brands fa-bandcamp', 1),
(22, 5, 'Kategori Blog', 'admin/setting/kategori_blog', 'fa-solid fa-gears', 1),
(23, 5, 'Kategori Portfolio', 'admin/setting/kategori_portfolio', 'fa-solid fa-gears', 1),
(27, 1, 'Data Team', 'admin/admin/data', 'fa-solid fa-users', 1),
(28, 1, 'Tambah Developer', 'admin/admin/tambah', 'icon-user', 0),
(29, 6, 'Pesan', 'admin/page/pesan', 'fa-solid fa-message', 1),
(30, 6, 'karir', 'admin/page/karir', 'fa-solid fa-user-tie', 1),
(31, 1, 'Job Apply', 'admin/admin/kandidat', 'fa-solid fa-people-robbery', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` int NOT NULL,
  `email` varchar(225) COLLATE utf8mb4_general_ci NOT NULL,
  `token` varchar(128) COLLATE utf8mb4_general_ci NOT NULL,
  `date_created` int NOT NULL
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
-- Indexes for table `karir`
--
ALTER TABLE `karir`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `google`
--
ALTER TABLE `google`
  ADD PRIMARY KEY (`id_google`);

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
-- Indexes for table `subscriber`
--
ALTER TABLE `subscriber`
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
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `karir`
--
ALTER TABLE `karir`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kandidat`
--
ALTER TABLE `kandidat`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori_blog`
--
ALTER TABLE `kategori_blog`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `kategori_portfolio`
--
ALTER TABLE `kategori_portfolio`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subscriber`
--
ALTER TABLE `subscriber`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;