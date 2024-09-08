<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Data yang ingin diisi
        $projects = [
            ['judul' => 'Website Pengelola Data Mahasiswa', 
             'slug' => 'website-pengelola-data-mahasiswa', 
             'category' => 'Web Development', 
             'categoryslug' => 'web-development', 
             'url' => 'https://github.com/MuhammadJundullah/Belajar_PHP/tree/main/Web%20Pengelola%20Data%20Mahasiswa', 
             'site' => 'https://data-mahasiswa.portofolio.great-site.net', 
             'desc' => 'Website ini merupakan proyek tugas kuliah saya dalam mata kuliah Pemrograman Web. Aplikasi ini dirancang untuk mempermudah pengelolaan data mahasiswa dengan fitur-fitur utama seperti login dan registrasi, lengkap dengan opsi "ingat saya" untuk kemudahan akses. Di dalamnya terdapat halaman yang menampilkan daftar mahasiswa, lengkap dengan foto dan data pribadi mereka. Selain itu, aplikasi ini memungkinkan pengguna untuk menambah, mengedit, dan menghapus data mahasiswa melalui fitur CRUD (Create, Read, Update, Delete). Untuk mempermudah pencarian data, terdapat juga fitur pencarian yang memungkinkan pengguna mencari mahasiswa tertentu dari daftar yang sudah ada. Aplikasi ini ditujukan untuk digunakan oleh institusi pendidikan dalam memanajemen data mahasiswa secara efisien. Klik link di bawah ini untuk melihat website dan source code-nya.'],

            ['judul' => 'Website Pengelola Data Prodi', 
             'slug' => 'website-pengelola-data-prodi', 
             'category' => 'Web Development', 
             'categoryslug' => 'web-development', 
             'url' => 'https://github.com/MuhammadJundullah/Belajar_PHP/tree/main/Web%20Pengelola%20Data%20Prodi%20v2', 
             'site' => 'https://manajemen-prodi.portofolio.great-site.net', 
             'desc' => 'Website ini merupakan proyek tugas kuliah saya dalam mata kuliah Pemrograman Web, dirancang untuk mengelola data program studi secara komprehensif. Aplikasi ini memiliki beberapa tab utama, yaitu data kelas, data mata kuliah, jadwal kuliah, dan data dosen. Setiap tab menyediakan fitur CRUD (Create, Read, Update, Delete), memungkinkan pengguna untuk menambah, mengedit, menghapus, dan melihat data yang terkait dengan program studi. Aplikasi ini membantu institusi pendidikan dalam mengelola dan memantau data akademik secara efisien, dari pengaturan kelas hingga jadwal perkuliahan dan data dosen. Klik link di bawah ini untuk melihat website dan source code-nya.'],

            ['judul' => 'Website Blog', 
             'slug' => 'website-blog', 
             'category' => 'Web Development', 
             'categoryslug' => 'web-development', 
             'url' => 'https://github.com/MuhammadJundullah/Belajar_PHP/tree/main/Blog%20Laravel/Blog', 
             'site' => 'http://blog.portofolio.great-site.net', 
             'desc' => 'Website ini adalah proyek blog sederhana yang dibuat menggunakan framework Laravel dan Tailwind CSS. Website ini dirancang untuk memberikan pengalaman membaca yang intuitif dengan fitur pencarian artikel yang memungkinkan pengguna mencari berdasarkan penulis, kategori, atau kata kunci umum. Desainnya yang bersih dan responsif berkat Tailwind CSS memastikan tampilan yang menarik di berbagai perangkat. Dengan Laravel sebagai backend, aplikasi ini menawarkan pengelolaan konten yang efisien dan performa yang stabil. Klik link di bawah ini untuk melihat website dan source code-nya. Klik link di bawah ini untuk melihat website dan source code-nya.'],

            ['judul' => 'MSIB Batch 6 Vacancy Analysis', 
             'slug' => 'msib-vacancy-analysis', 
             'category' => 'Data Analytics', 
             'categoryslug' => 'data-analytics', 
             'url' => 'https://github.com/MuhammadJundullah/Data-Analysis/tree/main/MSIB%20Vacancy%20Analysis', 
             'site' => '<iframe title="MSIB Vacancy Analysis" width="1024" height="804" src="https://app.powerbi.com/view?r=eyJrIjoiODY1OGE2ODYtOGZiZS00Yjc2LWIyN2EtOTFhMjhhMmM2N2EwIiwidCI6IjlkNjQ0ZjE3LTkyMjYtNDUyZC05ZTZhLTFmMThhN2U2NTFmNCIsImMiOjEwfQ%3D%3D" frameborder="0" allowFullScreen="true"></iframe>', 
             'desc' => 'Analisi ini bersifat deskriptif yang dilakukan untuk tujuan memahami lowongan MSIB Batch 6 agar mendapatkan gambaran umum tentang distribusi kuota dan lowongan data analyst yang tersedia. Analisis ini mencakup identifikasi mitra dengan kuota terbanyak, lokasi lowongan, dan perbandingan jumlah lowongan Data Analyst dengan lowongan lainnya. Visualisasi data dalam bentuk diagram batang dan diagram lingkaran digunakan untuk mempermudah interpretasi hasil analisis. Untuk melihat analisis lebih rinci silahkan kunjungi Notebook Analysis melalui link github di bawah dashboard.'],

            ['judul' => 'Airline Delay Cause Analysis', 
             'slug' => 'airline-delay-cause-analysis', 
             'category' => 'Data Analytics', 
             'categoryslug' => 'data-analytics', 
             'url' => 'https://github.com/MuhammadJundullah/Data-Analysis/tree/main/Airline%20Delay%20Cause%20Analytics', 
             'site' => "<div class='tableauPlaceholder' id='viz1724374965813' style='position: relative'><noscript><a href='#'><img alt='US Flight Delay ' src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Ai&#47;Airline_Delay_Analysis&#47;USFlightDelay&#47;1_rss.png' style='border: none' /></a></noscript><object class='tableauViz'  style='display:none;'><param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' /> <param name='embed_code_version' value='3' /> <param name='site_root' value='' /><param name='name' value='Airline_Delay_Analysis&#47;USFlightDelay' /><param name='tabs' value='no' /><param name='toolbar' value='yes' /><param name='static_image' value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Ai&#47;Airline_Delay_Analysis&#47;USFlightDelay&#47;1.png' /> <param name='animate_transition' value='yes' /><param name='display_static_image' value='yes' /><param name='display_spinner' value='yes' /><param name='display_overlay' value='yes' /><param name='display_count' value='yes' /><param name='language' value='en-US' /></object></div>                <script type='text/javascript'>                    var divElement = document.getElementById('viz1724374965813');                    var vizElement = divElement.getElementsByTagName('object')[0];                    if ( divElement.offsetWidth > 800 ) { vizElement.style.width='100%';vizElement.style.height=(divElement.offsetWidth*0.75)+'px';} else if ( divElement.offsetWidth > 500 ) { vizElement.style.width='100%';vizElement.style.height=(divElement.offsetWidth*0.75)+'px';} else { vizElement.style.width='100%';vizElement.style.height='1327px';}                     var scriptElement = document.createElement('script');                    scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';                    vizElement.parentNode.insertBefore(scriptElement, vizElement);                </script>", 
             'desc' => 'Analisis ini menyajikan visualisasi komprehensif tentang keterlambatan penerbangan di seluruh Amerika Serikat, dengan fokus pada pola dan tren yang dapat diidentifikasi berdasarkan maskapai, bandara, dan bulan tertentu. Melalui dashboard ini, kita dapat mengeksplorasi faktor-faktor penyebab keterlambatan, seperti cuaca, masalah teknis, atau lalu lintas udara, serta membandingkan performa antar maskapai dan bandara. Hasil analisis ini memberikan wawasan yang berguna untuk pengambilan keputusan dalam meningkatkan efisiensi operasional dan kepuasan pelanggan di industri penerbangan. Untuk melihat analisis lebih rinci silahkan kunjungi Notebook Analysis melalui link github di bawah dashboard.'],

            ['judul' => 'E-Commerce Customer Analysis', 
             'slug' => 'ecommerce-customer-analysis', 
             'category' => 'Data Analytics', 
             'categoryslug' => 'data-analytics', 
             'url' => 'https://github.com/MuhammadJundullah/Data-Analysis/tree/main/E-Commerse%20Customer%20Analysis', 
             'site' => '<iframe title="E-Commerce Customers Analysis" width="1024" height="804" src="https://app.powerbi.com/view?r=eyJrIjoiZGFjNzk5NGItNjE5OS00YjQxLWE3NGMtNThmZTNkM2Q5YmU2IiwidCI6IjlkNjQ0ZjE3LTkyMjYtNDUyZC05ZTZhLTFmMThhN2U2NTFmNCIsImMiOjEwfQ%3D%3D" frameborder="0" allowFullScreen="true"></iframe>', 
             'desc' => 'E-Commerce Customer Analysis ini bertujuan untuk mengeksplorasi dan memahami data pelanggan e-commerce. Saya melakukan pembersihan data selanjutnya melakukan analisis untuk mengidentifikasi pola, tren dan segmen pelanggan yang paling menguntungkan, frekuensi pembelian, dan nilai rata-rata pesanan. Visualisasi digunakan untuk menggambarkan distribusi pelanggan berdasarkan umur, lokasi, dan aktivitas pembelian. Tujuannya adalah untuk memberikan wawasan yang mendalam tentang karakteristik pelanggan e-commerce dan membantu strategi pemasaran dan penjualan yang lebih efektif. Untuk melihat analisis lebih rinci silahkan kunjungi Notebook Analysis melalui link github di bawah dashboard.'],

            ['judul' => 'Car Efficientest Analytics', 
             'slug' => 'car-efficientest-analysis', 
             'category' => 'Data Analytics', 
             'categoryslug' => 'data-analytics', 
             'url' => 'https://github.com/MuhammadJundullah/Data-Analysis/tree/main/Car%20Efficientest%20Analytics', 
             'site' => "<div class='tableauPlaceholder' id='viz1724498207006' style='position: relative'><noscript><a href='#'><img alt='Car Efficiency Analysis ' src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Ca&#47;CarEfficiencyAnalysis&#47;Dashboard1&#47;1_rss.png' style='border: none' /></a></noscript><object class='tableauViz'  style='display:none;'><param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' /> <param name='embed_code_version' value='3' /> <param name='site_root' value='' /><param name='name' value='CarEfficiencyAnalysis&#47;Dashboard1' /><param name='tabs' value='no' /><param name='toolbar' value='yes' /><param name='static_image' value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Ca&#47;CarEfficiencyAnalysis&#47;Dashboard1&#47;1.png' /> <param name='animate_transition' value='yes' /><param name='display_static_image' value='yes' /><param name='display_spinner' value='yes' /><param name='display_overlay' value='yes' /><param name='display_count' value='yes' /><param name='language' value='en-US' /><param name='filter' value='publish=yes' /></object></div>                <script type='text/javascript'>                    var divElement = document.getElementById('viz1724498207006');                    var vizElement = divElement.getElementsByTagName('object')[0];                    if ( divElement.offsetWidth > 800 ) { vizElement.style.width='100%';vizElement.style.height=(divElement.offsetWidth*0.75)+'px';} else if ( divElement.offsetWidth > 500 ) { vizElement.style.width='100%';vizElement.style.height=(divElement.offsetWidth*0.75)+'px';} else { vizElement.style.width='100%';vizElement.style.height='1577px';}                     var scriptElement = document.createElement('script');                    scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';                    vizElement.parentNode.insertBefore(scriptElement, vizElement);                </script>", 
             'desc' => 'Analisis Car Efficientest Analysis ini bertujuan untuk mengevaluasi efisiensi bahan bakar mobil berdasarkan merek, model, kelas kendaraan, dan tipe transmisi. Tujuannya adalah untuk mempermudah konsumen dalam menentukan pilihan mereka berdasarkan efisiensi bahan bakar. Analisis dimulai dengan pembersihan data, termasuk penanganan nilai yang hilang dan memastikan tipe data yang sesuai. Mobil dianggap efisien jika memiliki engine size yang tinggi namun konsumsi bahan bakarnya rendah. Pengukuran efisiensi dilakukan dengan membagi engine size dengan konsumsi bahan bakar untuk menghasilkan nilai efisiensi. Selanjutnya, data divisualisasikan berdasarkan setiap kolom dan diurutkan berdasarkan mobil yang paling efisien dalam penggunaan bahan bakar. Untuk melihat analisis lebih rinci silahkan kunjungi Notebook Analysis melalui link github di bawah dashboard.'],

            ['judul' => 'Indonesian Market Car Analysis',
             'slug' => 'indonesian-market-car-analysis', 
             'category' => 'Data Analytics', 
             'categoryslug' => 'data-analytics', 
             'url' => 'https://github.com/MuhammadJundullah/Data-Analysis/tree/main/Car%20Sales%20Analysis', 
             'site' => "<div class='tableauPlaceholder' id='viz1724516422619' style='position: relative'><noscript><a href='#'><img alt='Indonesian Market Car  ' src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;In&#47;IndonesianMarketCar&#47;Dashboard1&#47;1_rss.png' style='border: none' /></a></noscript><object class='tableauViz'  style='display:none;'><param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' /> <param name='embed_code_version' value='3' /> <param name='site_root' value='' /><param name='name' value='IndonesianMarketCar&#47;Dashboard1' /><param name='tabs' value='no' /><param name='toolbar' value='yes' /><param name='static_image' value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;In&#47;IndonesianMarketCar&#47;Dashboard1&#47;1.png' /> <param name='animate_transition' value='yes' /><param name='display_static_image' value='yes' /><param name='display_spinner' value='yes' /><param name='display_overlay' value='yes' /><param name='display_count' value='yes' /><param name='language' value='en-US' /><param name='filter' value='publish=yes' /></object></div>                <script type='text/javascript'>                    var divElement = document.getElementById('viz1724516422619');                    var vizElement = divElement.getElementsByTagName('object')[0];                    if ( divElement.offsetWidth > 800 ) { vizElement.style.width='100%';vizElement.style.height=(divElement.offsetWidth*0.75)+'px';} else if ( divElement.offsetWidth > 500 ) { vizElement.style.width='100%';vizElement.style.height=(divElement.offsetWidth*0.75)+'px';} else { vizElement.style.width='100%';vizElement.style.height='1577px';}                     var scriptElement = document.createElement('script');                    scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';                    vizElement.parentNode.insertBefore(scriptElement, vizElement);                </script>", 
             'desc' => 'Analisis data penjualan mobil di indonesia ini bertujuan untuk mengeksplorasi pasar mobil di Indonesia dengan mengidentifikasi tren penjualan secara deskriptif. Analisis ini berfokus pada visualisasi data pasar mobil di Indonesia. Prosesnya meliputi pembersihan data menggunakan Microsoft Excel dan dilanjutkan dengan membuat PivotTables untuk membuat visualisasi agar memudahkan dalam pemahaman tren serta distribusi pasar mobil berdasarkan berbagai merek, model, dan harga. Analisis ini bertujuan untuk memberikan wawasan yang jelas tentang pasar mobil Indonesia, membantu dalam pengambilan keputusan bisnis atau pemasaran yang lebih baik. Untuk melihat analisis lebih rinci silahkan kunjungi Notebook Analysis melalui link github di bawah dashboard.'],

            ['judul' => 'Car Fuel Consumption Analysis', 
             'slug' => 'car-fuel-comsumption-analysis', 
             'category' => 'Data Analytics', 
             'categoryslug' => 'data-analytics', 
             'url' => 'https://github.com/MuhammadJundullah/Data-Analysis/tree/main/E-Commerse%20Customer%20Analysis', 
             'site' => '#', 
             'desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem expedita quos a impedit libero dolorum architecto praesentium odit rerum id vel earum, ipsum asperiores delectus animi omnis debitis. Assumenda accusamus doloribus magnam excepturi. Optio ullam reprehenderit aliquid id temporibus dicta laudantium molestias nostrum deserunt culpa sint, ea magni qui atque, velit esse, praesentium cupiditate veniam porro. Illo, dolore non dolorem praesentium doloribus a, magni minima velit fugiat facere hic, suscipit quidem odio perspiciatis accusantium repudiandae accusamus dolor cupiditate harum eveniet id atque necessitatibus recusandae. Quas placeat consectetur quae voluptatum voluptatibus necessitatibus officia amet nihil nesciunt, vitae ab veniam ipsa laudantium.'],

             ['judul' => 'Car Sales Analysis', 
             'slug' => 'car-sales-analysis', 
             'category' => 'Data Science', 
             'categoryslug' => 'data-science', 
             'url' => 'https://github.com/MuhammadJundullah/Data-Analysis/tree/main/Car%20Sales%20Analysis', 
             'site' => '<iframe title="Car Sales Report" width="1024" height="804" src="https://app.powerbi.com/view?r=eyJrIjoiODUzN2ExN2QtNmIzZS00NDEwLTgwOWItNGRmM2JkOWZiZGVjIiwidCI6IjlkNjQ0ZjE3LTkyMjYtNDUyZC05ZTZhLTFmMThhN2U2NTFmNCIsImMiOjEwfQ%3D%3D" frameborder="0" allowFullScreen="true"></iframe>',
             'desc' => 'Analisis ini bertujuan untuk mengetahui tren pasar penjualan mobil, preferensi konsumen, dan pola musiman dalam penjualan, untuk memberikan wawasan yang dapat membantu meningkatkan pemasaran/ penjualan. Analisis yang dilakukan yaitu;  mengidentifikasi tren penjualan mobil berdasarkan berbagai faktor seperti wilayah dealer, perusahaan asal mobil, model mobil, jenis mesin, warna, dan jenis bodi yang digunakan. Selain itu, analisis pola musiman yang dilakukan berfokus ke total penjualan tiap bulannya, kemudian dilanjutkan dengan pembuatan model ARIMA untuk meramalkan penjualan 12 bulan kedepan. Wawasan yang diperoleh dari analisis ini dapat digunakan untuk mengoptimalkan strategi pemasaran untuk industri otomotif, agar sesuai dengan preferensi konsumen. Untuk melihat analisis lebih rinci silahkan kunjungi Notebook Analysis melalui link github di bawah dashboard.'],
             
             ['judul' => 'Bank Customers Churn Analysis', 
             'slug' => 'bank-customers-churn-analysis', 
             'category' => 'Data Science', 
             'categoryslug' => 'data-science', 
             'url' => 'https://github.com/MuhammadJundullah/Data-Analysis/tree/main/Bank%20Customers%20Churn%20Analysis', 
             'site' => '<iframe width="1080" height="1080" src="https://lookerstudio.google.com/embed/reporting/673232c8-9bd1-488a-88c4-15bb50415bbb/page/1jhAE" frameborder="0" style="border:0" allowfullscreen sandbox="allow-storage-access-by-user-activation allow-scripts allow-same-origin allow-popups allow-popups-to-escape-sandbox"></iframe>',
             'desc' => 'Analisis ini bertujuan untuk memprediksi kemungkinan nasabah bank akan berhenti menggunakan layanan bank (churn) dengan memanfaatkan Machine Learning. Dataset yang digunakan berisi informasi nasabah seperti usia, jenis kelamin, lokasi geografis, saldo, jumlah produk yang digunakan, dan lainnya. Melalui proses Exploratory Data Analysis (EDA), data preprocessing yang meliputi encoding dan standarisasi, serta penerapan algoritma Logistic Regression, model akan mempelajari pola dari data untuk mengidentifikasi faktor-faktor yang berkontribusi terhadap churn. Hasil analisis berupa model prediktif yang dapat membantu bank untuk mengidentifikasi nasabah yang berpotensi churn dan melakukan tindakan preventif untuk mempertahankan mereka. Selain itu, analisis ini juga akan mengungkap faktor-faktor penting yang mempengaruhi keputusan nasabah untuk churn. Untuk melihat analisis lebih rinci silahkan kunjungi Notebook Analysis melalui link github di bawah dashboard.'],

            // Tambahkan data lainnya sesuai kebutuhan
        ];

        // Mengisi data ke dalam tabel
        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}
