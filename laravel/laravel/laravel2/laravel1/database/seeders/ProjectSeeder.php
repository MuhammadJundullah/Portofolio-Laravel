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
             'url' => 'https://github.com/MuhammadJundullah/Belajar_PHP/tree/main/Web%20Pengelola%20Data%20Mahasiswa', 
             'site' => 'https://data-mahasiswa.portofolio.great-site.net', 
             'desc' => 'none'],

            ['judul' => 'Website Pengelola Data Prodi', 
             'slug' => 'website-pengelola-data-prodi', 
             'category' => 'Web Development', 
             'url' => 'https://github.com/MuhammadJundullah/Belajar_PHP/tree/main/Web%20Pengelola%20Data%20Prodi%20v2', 
             'site' => 'https://manajemen-prodi.portofolio.great-site.net', 
             'desc' => 'none'],

            ['judul' => 'Website Blog Sederhana', 
             'slug' => 'website-blog-sederhana', 
             'category' => 'Web Development', 
             'url' => 'https://github.com/MuhammadJundullah/Belajar_PHP/tree/main/Blog%20Laravel/Blog', 
             'site' => 'http://blog.portofolio.great-site.net', 
             'desc' => 'none'],

            ['judul' => 'MSIB Vacancy Analysis', 
             'slug' => 'msib-vacancy-analysis', 
             'category' => 'Data Analyst', 
             'url' => 'https://github.com/MuhammadJundullah/Data-Analysis/tree/main/MSIB%20Vacancy%20Analysis', 
             'site' => '<iframe title="MSIB Vacancy Analysis" width="1024" height="804" src="https://app.powerbi.com/view?r=eyJrIjoiODY1OGE2ODYtOGZiZS00Yjc2LWIyN2EtOTFhMjhhMmM2N2EwIiwidCI6IjlkNjQ0ZjE3LTkyMjYtNDUyZC05ZTZhLTFmMThhN2U2NTFmNCIsImMiOjEwfQ%3D%3D" frameborder="0" allowFullScreen="true"></iframe>', 
             'desc' => 'none'],

            ['judul' => 'Airline Delay Analysis', 
             'slug' => 'airline-delay-analysis', 
             'category' => 'Data Analyst', 
             'url' => 'https://github.com/MuhammadJundullah/Data-Analysis/tree/main/Airline%20Delay%20Cause%20Analytics', 
             'site' => "<div class='tableauPlaceholder' id='viz1724374965813' style='position: relative'><noscript><a href='#'><img alt='US Flight Delay ' src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Ai&#47;Airline_Delay_Analysis&#47;USFlightDelay&#47;1_rss.png' style='border: none' /></a></noscript><object class='tableauViz'  style='display:none;'><param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' /> <param name='embed_code_version' value='3' /> <param name='site_root' value='' /><param name='name' value='Airline_Delay_Analysis&#47;USFlightDelay' /><param name='tabs' value='no' /><param name='toolbar' value='yes' /><param name='static_image' value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Ai&#47;Airline_Delay_Analysis&#47;USFlightDelay&#47;1.png' /> <param name='animate_transition' value='yes' /><param name='display_static_image' value='yes' /><param name='display_spinner' value='yes' /><param name='display_overlay' value='yes' /><param name='display_count' value='yes' /><param name='language' value='en-US' /></object></div>                <script type='text/javascript'>                    var divElement = document.getElementById('viz1724374965813');                    var vizElement = divElement.getElementsByTagName('object')[0];                    if ( divElement.offsetWidth > 800 ) { vizElement.style.width='100%';vizElement.style.height=(divElement.offsetWidth*0.75)+'px';} else if ( divElement.offsetWidth > 500 ) { vizElement.style.width='100%';vizElement.style.height=(divElement.offsetWidth*0.75)+'px';} else { vizElement.style.width='100%';vizElement.style.height='1327px';}                     var scriptElement = document.createElement('script');                    scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';                    vizElement.parentNode.insertBefore(scriptElement, vizElement);                </script>", 
             'desc' => 'none'],

            ['judul' => 'Car Sales Analysis', 
             'slug' => 'car-sales-analysis', 
             'category' => 'Data Analyst', 
             'url' => 'https://github.com/MuhammadJundullah/Data-Analysis/tree/main/Car%20Sales%20Analysis', 
             'site' => '<iframe title="Car Sales Report" width="1024" height="804" src="https://app.powerbi.com/view?r=eyJrIjoiODUzN2ExN2QtNmIzZS00NDEwLTgwOWItNGRmM2JkOWZiZGVjIiwidCI6IjlkNjQ0ZjE3LTkyMjYtNDUyZC05ZTZhLTFmMThhN2U2NTFmNCIsImMiOjEwfQ%3D%3D" frameborder="0" allowFullScreen="true"></iframe>',
             'desc' => 'none'],

            ['judul' => 'E-Commerce Customer Analysis', 
             'slug' => 'ecommerce-customer-analysis', 
             'category' => 'Data Analyst', 
             'url' => 'https://github.com/MuhammadJundullah/Data-Analysis/tree/main/E-Commerse%20Customer%20Analysis', 
             'site' => '<iframe title="E-Commerce Customers Analysis" width="1024" height="804" src="https://app.powerbi.com/view?r=eyJrIjoiZGFjNzk5NGItNjE5OS00YjQxLWE3NGMtNThmZTNkM2Q5YmU2IiwidCI6IjlkNjQ0ZjE3LTkyMjYtNDUyZC05ZTZhLTFmMThhN2U2NTFmNCIsImMiOjEwfQ%3D%3D" frameborder="0" allowFullScreen="true"></iframe>', 
             'desc' => 'none'],

            ['judul' => 'Car Efficientest Analytics', 
             'slug' => 'car-efficientest-analysis', 
             'category' => 'Data Analyst', 
             'url' => 'https://github.com/MuhammadJundullah/Data-Analysis/tree/main/Car%20Efficientest%20Analytics', 
             'site' => "<div class='tableauPlaceholder' id='viz1724498207006' style='position: relative'><noscript><a href='#'><img alt='Car Efficiency Analysis ' src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Ca&#47;CarEfficiencyAnalysis&#47;Dashboard1&#47;1_rss.png' style='border: none' /></a></noscript><object class='tableauViz'  style='display:none;'><param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' /> <param name='embed_code_version' value='3' /> <param name='site_root' value='' /><param name='name' value='CarEfficiencyAnalysis&#47;Dashboard1' /><param name='tabs' value='no' /><param name='toolbar' value='yes' /><param name='static_image' value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Ca&#47;CarEfficiencyAnalysis&#47;Dashboard1&#47;1.png' /> <param name='animate_transition' value='yes' /><param name='display_static_image' value='yes' /><param name='display_spinner' value='yes' /><param name='display_overlay' value='yes' /><param name='display_count' value='yes' /><param name='language' value='en-US' /><param name='filter' value='publish=yes' /></object></div>                <script type='text/javascript'>                    var divElement = document.getElementById('viz1724498207006');                    var vizElement = divElement.getElementsByTagName('object')[0];                    if ( divElement.offsetWidth > 800 ) { vizElement.style.width='100%';vizElement.style.height=(divElement.offsetWidth*0.75)+'px';} else if ( divElement.offsetWidth > 500 ) { vizElement.style.width='100%';vizElement.style.height=(divElement.offsetWidth*0.75)+'px';} else { vizElement.style.width='100%';vizElement.style.height='1577px';}                     var scriptElement = document.createElement('script');                    scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';                    vizElement.parentNode.insertBefore(scriptElement, vizElement);                </script>", 
             'desc' => 'none'],

            ['judul' => 'Indonesian Market Car Analysis',
             'slug' => 'indonesian-market-car-analysis', 
             'category' => 'Data Analyst', 
             'url' => 'https://github.com/MuhammadJundullah/Data-Analysis/tree/main/Car%20Sales%20Analysis', 
             'site' => "<div class='tableauPlaceholder' id='viz1724516422619' style='position: relative'><noscript><a href='#'><img alt='Indonesian Market Car  ' src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;In&#47;IndonesianMarketCar&#47;Dashboard1&#47;1_rss.png' style='border: none' /></a></noscript><object class='tableauViz'  style='display:none;'><param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' /> <param name='embed_code_version' value='3' /> <param name='site_root' value='' /><param name='name' value='IndonesianMarketCar&#47;Dashboard1' /><param name='tabs' value='no' /><param name='toolbar' value='yes' /><param name='static_image' value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;In&#47;IndonesianMarketCar&#47;Dashboard1&#47;1.png' /> <param name='animate_transition' value='yes' /><param name='display_static_image' value='yes' /><param name='display_spinner' value='yes' /><param name='display_overlay' value='yes' /><param name='display_count' value='yes' /><param name='language' value='en-US' /><param name='filter' value='publish=yes' /></object></div>                <script type='text/javascript'>                    var divElement = document.getElementById('viz1724516422619');                    var vizElement = divElement.getElementsByTagName('object')[0];                    if ( divElement.offsetWidth > 800 ) { vizElement.style.width='100%';vizElement.style.height=(divElement.offsetWidth*0.75)+'px';} else if ( divElement.offsetWidth > 500 ) { vizElement.style.width='100%';vizElement.style.height=(divElement.offsetWidth*0.75)+'px';} else { vizElement.style.width='100%';vizElement.style.height='1577px';}                     var scriptElement = document.createElement('script');                    scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';                    vizElement.parentNode.insertBefore(scriptElement, vizElement);                </script>", 
             'desc' => 'none'],

            ['judul' => 'Car Fuel Consumption Analysis', 
             'slug' => 'car-fuel-comsumption-analysis', 
             'category' => 'Data Analyst', 
             'url' => 'https://github.com/MuhammadJundullah/Data-Analysis/tree/main/E-Commerse%20Customer%20Analysis', 
             'site' => '#', 
             'desc' => 'none'],
            // Tambahkan data lainnya sesuai kebutuhan
        ];

        // Mengisi data ke dalam tabel
        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}
