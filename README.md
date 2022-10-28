<h2>Task Angular Day 1</h2><br>
Angular adalah platform pengembangan, dibangun di atas TypeScript. Sebagai platform, Angular        mencakup:

<ol>Kerangka kerja berbasis komponen untuk membangun aplikasi web yang skalabel</ol>
<ol>Kumpulan perpustakaan yang terintegrasi dengan baik yang mencakup berbagai fitur, termasuk perutean, manajemen formulir, komunikasi klien-server, dan banyak lagi</ol>
<ol>Serangkaian alat pengembang untuk membantu Anda mengembangkan, membangun, menguji, dan memperbarui kode Anda</ol>

Dengan Angular, Anda memanfaatkan platform yang dapat menskalakan dari proyek pengembang tunggal hingga aplikasi tingkat perusahaan. Angular dirancang untuk membuat pembaruan semudah mungkin, jadi manfaatkan perkembangan terbaru dengan sedikit usaha. Yang terbaik dari semuanya, ekosistem Angular terdiri dari kelompok beragam lebih dari 1,7 juta pengembang, penulis perpustakaan, dan pembuat konten.

di Angular, modul adalah mekanisme untuk mengelompokkan components, directives, pipes, dan services yang terkait, sedemikian rupa sehingga dapat digabungkan dengan modul lain untuk membuat aplikasi. Aplikasi Angular dapat dianggap sebagai teka-teki di mana setiap bagian (atau setiap modul) diperlukan untuk dapat melihat gambaran lengkapnya.

Komponen adalah blok bangunan yang menyusun aplikasi. Komponen menyertakan kelas TypeScript dengan dekorator @Component(), template HTML, dan styles. Dekorator @Component() menentukan informasi khusus Angular berikut:

<ol>Sebuah pemilih CSS yang mendefinisikan bagaimana komponen digunakan dalam template. Elemen HTML di template Anda yang cocok dengan pemilih ini menjadi instance dari komponen tersebut.</ol>
<ol>Template HTML yang menginstruksikan Angular cara merender komponen</ol>
<ol>Satu set opsional gaya CSS yang menentukan tampilan elemen HTML template</ol>

Hubungan component dan module adalah, module berisikan component yang saling berhubungan satu sama lain dan component juga membutuhkan module untuk mingidentifikasi components lainnya

<h3>Quiz</h3><br>
<ol>Components yang merupakan isi dari module tersebut akan dibagi menjadi beberapa jenis file yaitu HTML untuk hasil tampilannya,Typescript untuk isi dari HTML tersebut dan juga SCSS untuk styling</ol>
<ol>Component akan dikelompokon berdasarkan modulenya seperti module subscriptions,module beranda yang akan menampilkan component component yang merupakan isi dari module tersebut</ol>
<oL>Struktur file proyek tersebyut bisa diperkirakan karena hasil akhir dari project angular merupakan satu file HTML saja</oL>
