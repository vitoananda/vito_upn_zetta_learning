<ol>
<h2>Report</h2>
<li>Instance komponen di Angular memiliki siklus hidup yang dimulai saat Angular membuat instance kelas komponen dan merender tampilan komponen bersama dengan tampilan anaknya. Siklus hidup berlanjut dengan deteksi perubahan, saat Angular memeriksa untuk melihat kapan properti terikat data berubah, dan memperbarui tampilan dan instans komponen sesuai kebutuhan. Siklus hidup berakhir ketika Angular menghancurkan instance komponen dan menghapus template yang dirender dari DOM.

Arahan memiliki siklus hidup yang serupa, karena Angular membuat, memperbarui, dan menghancurkan instance selama eksekusi.

Aplikasi sudut dapat menggunakan metode kait siklus hidup untuk memanfaatkan peristiwa penting dalam siklus hidup komponen atau arahan untuk menginisialisasi instans baru, memulai deteksi perubahan saat diperlukan, merespons pembaruan selama deteksi perubahan, dan membersihkan sebelum penghapusan instans.</li>
</ol>
<br>
<h2>Quiz</h2>
<ol>
<li> <ul>Initialisasi directive atau komponen setelah angular pertamakali menampilkan properti data </ul>
<ul>Mengatur directive atau properti input komponen</ul></li>
<li>Dipanggil sekali, setelah ngOnChanges() pertama. ngOnInit() masih dipanggil bahkan ketika ngOnChanges() tidak (yang terjadi ketika tidak ada input terikat template).</li>
<li>Dipanggil sekali setelah ngAfterContentChecked() pertama.</li>
<li>Dipanggil sebelum ngOnInit() (jika komponen memiliki input terikat) dan setiap kali satu atau lebih properti input terikat data berubah.</li>
<li>Urutannya :
<ol type = "a">
<li>ngOnChanges</li>
<li>ngOnInit</li>
<li>ngDoCheck</li>
<li>ngAFterContentInit</li>
<li>ngAfterContentChecked</li>
<li>ngAfterViewInit</li>
<li>ngAfterViewChecked</li>
</ol>
</li>
</ol>
