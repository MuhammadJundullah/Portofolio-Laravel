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
            [
                'judul' => 'MSIB Batch 6 Vacancy Analysis',
                'slug' => 'msib-vacancy-analysis',
                'category' => 'Data Analytics',
                'categoryslug' => 'data-analytics',
                'url' => 'https://github.com/MuhammadJundullah/Data-Analysis/tree/main/MSIB%20Vacancy%20Analysis',
                'photo' => 'msib_batch_6_analysis.png',
                'tech' => 'Python, Pandas, Power BI',
                'site' => '<iframe title="MSIB Vacancy Analysis" width="1024" height="804" src="https://app.powerbi.com/view?r=eyJrIjoiODY1OGE2ODYtOGZiZS00Yjc2LWIyN2EtOTFhMjhhMmM2N2EwIiwidCI6IjlkNjQ0ZjE3LTkyMjYtNDUyZC05ZTZhLTFmMThhN2U2NTFmNCIsImMiOjEwfQ%3D%3D" frameborder="0" allowFullScreen="true"></iframe>',
                'desc' => 'This descriptive analysis was conducted to understand the MSIB Batch 6 vacancies and provide an overview of the distribution of quotas and available data analyst positions. The analysis includes identifying partners with the highest quotas, job locations, and comparing the number of Data Analyst positions with other vacancies. Data visualization was performed using <b>Microsoft Power BI</b> to facilitate the interpretation of the analysis results. To view the <b>Data Cleaning</b> process using <b>Python</b>, please visit the Notebook Analysis below the Dashboard.'
            ],

            [
                'judul' => 'Airline Delay Cause Analysis',
                'slug' => 'airline-delay-cause-analysis',
                'category' => 'Data Analytics',
                'categoryslug' => 'data-analytics',
                'url' => 'https://github.com/MuhammadJundullah/Data-Analysis/tree/main/Airline%20Delay%20Cause%20Analytics',
                'photo' => 'us_flight_delay.png',
                'tech' => 'Python, Pandas, Tableau',
                'site' => "<div class='tableauPlaceholder' id='viz1724374965813' style='position: relative'><noscript><a href='#'><img alt='US Flight Delay ' src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Ai&#47;Airline_Delay_Analysis&#47;USFlightDelay&#47;1_rss.png' style='border: none' /></a></noscript><object class='tableauViz'  style='display:none;'><param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' /> <param name='embed_code_version' value='3' /> <param name='site_root' value='' /><param name='name' value='Airline_Delay_Analysis&#47;USFlightDelay' /><param name='tabs' value='no' /><param name='toolbar' value='yes' /><param name='static_image' value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Ai&#47;Airline_Delay_Analysis&#47;USFlightDelay&#47;1.png' /> <param name='animate_transition' value='yes' /><param name='display_static_image' value='yes' /><param name='display_spinner' value='yes' /><param name='display_overlay' value='yes' /><param name='display_count' value='yes' /><param name='language' value='en-US' /></object></div>                <script type='text/javascript'>                    var divElement = document.getElementById('viz1724374965813');                    var vizElement = divElement.getElementsByTagName('object')[0];                    if ( divElement.offsetWidth > 800 ) { vizElement.style.width='100%';vizElement.style.height=(divElement.offsetWidth*0.75)+'px';} else if ( divElement.offsetWidth > 500 ) { vizElement.style.width='100%';vizElement.style.height=(divElement.offsetWidth*0.75)+'px';} else { vizElement.style.width='100%';vizElement.style.height='1327px';}                     var scriptElement = document.createElement('script');                    scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';                    vizElement.parentNode.insertBefore(scriptElement, vizElement);                </script>",
                'desc' => 'This analysis provides a comprehensive visualization of flight delays across the United States from January 2017 to July 2022, focusing on patterns and trends of delays based on airlines, airports, and various delay causes. <b>Data Cleaning</b> was performed using <b>Python</b>, and the creation of visualization dashboards was done using <b>Tableau</b>. The analysis explores factors causing delays, such as weather, technical issues, or air traffic, and compares the performance of airlines and airports. The results of this analysis offer valuable insights for decision-making to improve operational efficiency and customer satisfaction in the aviation industry. To view the <b>Data Cleaning</b> process using <b>Python</b>, please visit the Notebook Analysis below the Dashboard.'
            ],

            [
                'judul' => 'E-Commerce Customer Analysis',
                'slug' => 'ecommerce-customer-analysis',
                'category' => 'Data Analytics',
                'categoryslug' => 'data-analytics',
                'url' => 'https://github.com/MuhammadJundullah/Data-Analysis/tree/main/E-Commerse%20Customer%20Analysis',
                'photo' => 'ecommerce_customer_analysis.png',
                'tech' => 'Python, Pandas, Power BI',
                'site' => '<iframe title="E-Commerce Customers Analysis" width="1024" height="804" src="https://app.powerbi.com/view?r=eyJrIjoiZGFjNzk5NGItNjE5OS00YjQxLWE3NGMtNThmZTNkM2Q5YmU2IiwidCI6IjlkNjQ0ZjE3LTkyMjYtNDUyZC05ZTZhLTFmMThhN2U2NTFmNCIsImMiOjEwfQ%3D%3D" frameborder="0" allowFullScreen="true"></iframe>',
                'desc' => 'This E-Commerce Customer Analysis aims to explore and understand e-commerce customers. The <b>Data Cleaning</b> process was conducted using <b>Python</b> in <b>Google Colab</b>, followed by analysis to identify patterns, trends, and the most profitable customer segments, purchase frequency, and average order value. Visualizations were created using <b>Power BI</b> to depict customer distribution based on age, location, and purchasing activity. The goal is to provide in-depth insights into e-commerce customer characteristics and assist in more effective marketing and sales strategies.'
            ],

            [
                'judul' => 'Car Efficiency Analysis',
                'slug' => 'car-efficiency-analysis',
                'category' => 'Data Analytics',
                'categoryslug' => 'data-analytics',
                'url' => 'https://github.com/MuhammadJundullah/Data-Analysis/tree/main/Car%20Efficiency%20Analytics',
                'photo' => 'car_efficientest.png',
                'tech' => 'Python, Pandas, Tableau',
                'site' => "<div class='tableauPlaceholder' id='viz1724498207006' style='position: relative'><noscript><a href='#'><img alt='Car Efficiency Analysis ' src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Ca&#47;CarEfficiencyAnalysis&#47;Dashboard1&#47;1_rss.png' style='border: none' /></a></noscript><object class='tableauViz'  style='display:none;'><param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' /> <param name='embed_code_version' value='3' /> <param name='site_root' value='' /><param name='name' value='CarEfficiencyAnalysis&#47;Dashboard1' /><param name='tabs' value='no' /><param name='toolbar' value='yes' /><param name='static_image' value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Ca&#47;CarEfficiencyAnalysis&#47;Dashboard1&#47;1.png' /> <param name='animate_transition' value='yes' /><param name='display_static_image' value='yes' /><param name='display_spinner' value='yes' /><param name='display_overlay' value='yes' /><param name='display_count' value='yes' /><param name='language' value='en-US' /><param name='filter' value='publish=yes' /></object></div>                <script type='text/javascript'>                    var divElement = document.getElementById('viz1724498207006');                    var vizElement = divElement.getElementsByTagName('object')[0];                    if ( divElement.offsetWidth > 800 ) { vizElement.style.width='100%';vizElement.style.height=(divElement.offsetWidth*0.75)+'px';} else if ( divElement.offsetWidth > 500 ) { vizElement.style.width='100%';vizElement.style.height=(divElement.offsetWidth*0.75)+'px';} else { vizElement.style.width='100%';vizElement.style.height='1577px';}                     var scriptElement = document.createElement('script');                    scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';                    vizElement.parentNode.insertBefore(scriptElement, vizElement);                </script>",
                'desc' => 'The Car Efficiency Analysis aims to evaluate fuel efficiency, where efficient cars are assumed to have low fuel consumption and large engine sizes. The identification of car efficiency is visualized using the <b>Tableau</b> application based on brand, model, vehicle class, and transmission type. The goal is to assist consumers in making informed choices based on fuel efficiency. The analysis begins with <b>Data Cleaning</b>, such as handling missing values and ensuring appropriate data types using Python. Efficiency measurement is performed by dividing engine size by fuel consumption to produce an efficiency value. Subsequently, the data is visualized by each column and sorted based on the most fuel-efficient cars. To view the <b>Data Cleaning</b> process and efficiency calculations using <b>Python</b>, please visit the Notebook Analysis below the Dashboard.'
            ],

            [
                'judul' => 'Indonesian Market Car Analysis',
                'slug' => 'indonesian-market-car-analysis',
                'category' => 'Data Analytics',
                'categoryslug' => 'data-analytics',
                'url' => 'https://github.com/MuhammadJundullah/Data-Analysis/tree/main/Indonesian%20Market%20Car%20Analysis',
                'photo' => 'indonesian_market_car.png',
                'tech' => 'Excel, Power BI',
                'site' => "<div class='tableauPlaceholder' id='viz1724516422619' style='position: relative'><noscript><a href='#'><img alt='Indonesian Market Car  ' src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;In&#47;IndonesianMarketCar&#47;Dashboard1&#47;1_rss.png' style='border: none' /></a></noscript><object class='tableauViz'  style='display:none;'><param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' /> <param name='embed_code_version' value='3' /> <param name='site_root' value='' /><param name='name' value='IndonesianMarketCar&#47;Dashboard1' /><param name='tabs' value='no' /><param name='toolbar' value='yes' /><param name='static_image' value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;In&#47;IndonesianMarketCar&#47;Dashboard1&#47;1.png' /> <param name='animate_transition' value='yes' /><param name='display_static_image' value='yes' /><param name='display_spinner' value='yes' /><param name='display_overlay' value='yes' /><param name='display_count' value='yes' /><param name='language' value='en-US' /><param name='filter' value='publish=yes' /></object></div>                <script type='text/javascript'>                    var divElement = document.getElementById('viz1724516422619');                    var vizElement = divElement.getElementsByTagName('object')[0];                    if ( divElement.offsetWidth > 800 ) { vizElement.style.width='100%';vizElement.style.height=(divElement.offsetWidth*0.75)+'px';} else if ( divElement.offsetWidth > 500 ) { vizElement.style.width='100%';vizElement.style.height=(divElement.offsetWidth*0.75)+'px';} else { vizElement.style.width='100%';vizElement.style.height='1577px';}                     var scriptElement = document.createElement('script');                    scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';                    vizElement.parentNode.insertBefore(scriptElement, vizElement);                </script>",
                'desc' => 'This car sales data analysis in Indonesia aims to explore the car market in Indonesia by identifying sales trends descriptively. The analysis focuses on visualizing car market trends in Indonesia. The process includes data cleaning using <b>Microsoft Excel</b> and creating interactive visualization dashboards with <b>Microsoft Power BI</b> to facilitate understanding of trends and market distribution based on various brands, models, and prices. This analysis aims to provide clear insights into the Indonesian car market, assisting in better business or marketing decision-making. To view the data in Excel format, please visit the Notebook Analysis below the Dashboard.'

            ],

            [
                'judul' => 'Car Sales Analysis & Prediction',
                'slug' => 'car-sales-analysis-&-prediction',
                'category' => 'Data Science',
                'categoryslug' => 'data-science',
                'url' => 'https://github.com/MuhammadJundullah/Data-Analysis/tree/main/Car%20Sales%20Analysis',
                'photo' => 'car_sales_report.png',
                'tech' => 'Python, Pandas, Sarima, Power BI',
                'site' => '<iframe title="Car Sales Report" width="1024" height="804" src="https://app.powerbi.com/view?r=eyJrIjoiODUzN2ExN2QtNmIzZS00NDEwLTgwOWItNGRmM2JkOWZiZGVjIiwidCI6IjlkNjQ0ZjE3LTkyMjYtNDUyZC05ZTZhLTFmMThhN2U2NTFmNCIsImMiOjEwfQ%3D%3D" frameborder="0" allowFullScreen="true"></iframe>',
                'desc' => 'This analysis aims to identify car sales market trends, consumer preferences, and seasonal patterns in sales to provide insights that can help improve marketing/sales strategies. The analysis includes: Data Cleaning to ensure accuracy and reliability of the analysis, Exploratory Data Analysis of car sales to identify market trends, customer preferences, and seasonal patterns, data visualization using Microsoft Power BI to gain insights into sales performance, customer demographics, and factors influencing purchasing decisions. Implementing a Machine Learning forecasting model (SARIMA) to predict future sales and provide actionable recommendations. Applying data science and machine learning knowledge to deliver valuable insights that can enhance sales strategies, marketing, and product development in the automotive industry.'
            ],

            [
                'judul' => 'Bank Customers Churn Analysis & Classification',
                'slug' => 'bank-customers-churn-analysis-&-classification',
                'category' => 'Data Science',
                'categoryslug' => 'data-science',
                'url' => 'https://github.com/MuhammadJundullah/Data-Analysis/tree/main/Bank%20Customers%20Churn%20Analysis',
                'photo' => 'bank_customer_churn.png',
                'tech' => 'Python, Pandas, Google Looker Studio',
                'site' => '<iframe width="1080" height="1080" src="https://lookerstudio.google.com/embed/reporting/673232c8-9bd1-488a-88c4-15bb50415bbb/page/1jhAE" frameborder="0" style="border:0" allowfullscreen sandbox="allow-storage-access-by-user-activation allow-scripts allow-same-origin allow-popups allow-popups-to-escape-sandbox"></iframe>',
                'desc' => 'This analysis aims to predict the likelihood of bank customers discontinuing their services (churn) using the Logistic Regression Algorithm. The dataset includes customer information such as age, gender, geographic location, balance, number of products used, and more. Through the process of <b>Exploratory Data Analysis (EDA)</b>, <b>Data Preprocessing</b> including encoding and standardization, and the application of the Logistic Regression algorithm, the model learns patterns from the data to identify factors influencing customer churn. The analysis results in a predictive model that helps banks identify customers likely to churn and take preventive actions to retain them. Additionally, this analysis reveals key factors influencing customers decisions to churn. Before further analysis, data visualization is performed using <b>Google Looker Studio</b> to identify general patterns in the data. For a more detailed analysis, please visit the Notebook Analysis via the GitHub link below the dashboard.',
            ],

            [
                'judul' => 'Student Data Management Website',
                'slug' => 'student-data-management-website',
                'category' => 'Web Development',
                'categoryslug' => 'web-development',
                'url' => 'https://github.com/MuhammadJundullah/Belajar_PHP/tree/main/Web%20Pengelola%20Data%20Mahasiswa',
                'photo' => 'web_pengelola_data_mahasiswa.png',
                'tech' => 'PHP Native, Bootstrap, MySQL',
                'site' => 'https://data-mahasiswa.portofolio.great-site.net',
                'desc' => 'This website is a college project for the Web Programming course. The application is designed to simplify student data management with key features such as login and registration, complete with a "remember me" option for easier access. It includes a page displaying a list of students, complete with their photos and personal data. Additionally, the application allows users to add, edit, and delete student data through CRUD (Create, Read, Update, Delete) features. To facilitate data searching, there is also a search feature that enables users to find specific students from the existing list. This application is intended for educational institutions to efficiently manage student data. Click the link below to view the website and its source code.'
            ],

            [
                'judul' => 'Study Program Data Management Website',
                'slug' => 'study-program-data-management-website',
                'category' => 'Web Development',
                'categoryslug' => 'web-development',
                'url' => 'https://github.com/MuhammadJundullah/Belajar_PHP/tree/main/Web%20Pengelola%20Data%20Prodi%20v2',
                'photo' => 'web_pengelola_data_prodi.png',
                'tech' => 'PHP Native, Bootstrap, MySQL',
                'site' => 'https://manajemen-prodi.portofolio.great-site.net',
                'desc' => 'This website is a college project for the Web Programming course, designed to comprehensively manage study program data. The application features several main tabs, including class data, course data, lecture schedules, and lecturer data. Each tab provides CRUD (Create, Read, Update, Delete) functionality, allowing users to add, edit, delete, and view data related to the study program. This application helps educational institutions efficiently manage and monitor academic data, from class arrangements to lecture schedules and lecturer information. Click the link below to view the website and its source code.'
            ],

            [
                'judul' => 'Blog Website',
                'slug' => 'blog-website',
                'category' => 'Web Development',
                'categoryslug' => 'web-development',
                'url' => 'https://github.com/MuhammadJundullah/Belajar_PHP/tree/main/Blog%20Laravel/Blog',
                'photo' => 'blog.png',
                'tech' => 'Laravel, Tailwind CSS, Alpine JS',
                'site' => 'http://blog.portofolio.great-site.net',
                'desc' => 'This website is a simple blog project built using the Laravel Framework as the backend framework to create a modular, secure, and easy-to-maintain blog website. For the frontend, Tailwind CSS is used for responsive and efficient styling, enabling consistent design across all website pages. Alpine JS is utilized to add simple interactivity on the frontend, implementing an efficient and dynamic routing system with Laravel to ensure smooth navigation and optimal user experience. Database Management: Designed with Eloquent ORM for easy and flexible database management, ensuring seamless integration between the application and the database. Deployment: The website is hosted on a free hosting platform, showcasing skills in deployment and basic server management. Responsive Design: The website is designed with high responsiveness using Tailwind CSS, ensuring optimal display on various devices. SEO Optimization: The website is optimized for SEO with clean HTML structure and appropriate metadata, improving visibility on search engines.'
            ],

            [
                'judul' => 'Food Ordering Website',
                'slug' => 'food-ordering-website',
                'category' => 'Web Development',
                'categoryslug' => 'web-development',
                'url' => 'https://github.com/MuhammadJundullah/rm-simangat',
                'photo' => 'web_pemesanan_makanan.png',
                'tech' => 'Laravel, Tailwind CSS, Vue.js, MySQL',
                'site' => 'https://rm-simangat.portofolio.great-site.net',
                'desc' => 'The food ordering website for RM Simangat is designed to make it easier for customers to order food without having to queue. Using Laravel as the backend, Vue.js for the user interface, and MySQL as the database, customers can easily place orders through the website. Incoming orders are immediately received by the RM Simangat admin for processing. Customers can monitor the status of their orders in real-time until the order is ready for pickup, making the process more efficient and practical for both parties.'
            ],

            [
                'judul' => 'Diskominfo Lhokseumawe Profile Website',
                'slug' => 'diskominfo-lhokseumawe-profile-website',
                'category' => 'Web Development',
                'categoryslug' => 'web-development',
                'url' => 'https://github.com/MuhammadJundullah/kominfo',
                'photo' => 'profile_kominfo.png',
                'tech' => 'Laravel, React.js, SQLite, RestAPI',
                'site' => 'https://diskominfo-deploy.vercel.app',
                'desc' => 'The Diskominfo Lhokseumawe profile website was created as a practical work assignment, designed to present comprehensive information about the Diskominfo agency in a modern and interactive manner. Utilizing Laravel as the backend, React.js for the user interface, and SQLite as the database, this website provides accessible pages for profiles, services, news, and contact information. With a responsive and user-friendly design, this website aims to serve as an effective information medium for the public while enhancing the professional image of Diskominfo Lhokseumawe.'
            ],

            [
                'judul' => 'Web Scraping Internship Positions from Kampus Merdeka',
                'slug' => 'web-scraping-internship-position-from-kampus-merdeka',
                'category' => 'Data Engineering',
                'categoryslug' => 'data-engineering',
                'url' => 'https://github.com/MuhammadJundullah/Web-Scraping',
                'photo' => 'web-scraping.png',
                'tech' => 'Python , Pandas, Playwright, BeautifulSoup,',
                'site' => '-',
                'desc' => 'This project is a web scraping script designed to extract internship positions from the Kampus Merdeka website. The script uses Playwright and BeautifulSoup to navigate the dynamically loaded content and collect relevant data. The data is then saved into an Excel file for further analysis and use.'
            ],

            [
                'judul' => 'Information System Website for Puskesmas Kec. Muara Dua',
                'slug' => 'web-based-health-center-information-system',
                'category' => 'Web Development',
                'categoryslug' => 'web-development',
                'url' => 'https://github.com/MuhammadJundullah/Web-Inventaris-Puskesmas',
                'photo' => 'simpus.png',
                'tech' => 'Laravel, Tailwind CSS, MySQL',
                'site' => 'http://simpus-muarasatu.rf.gd',
                'desc' => 'This Health Center Information System website was designed and developed during an internship at a health center to support the management of inventory data, medications, and employee information. It utilizes Laravel as the backend to ensure an integrated and user-friendly system. Through this experience, I gained a deeper understanding of the needs and challenges faced in the healthcare sector, while improving efficiency and accessibility in data management at the health center.'
            ],

            [
                'judul' => 'News Portal with Content-Based Filtering',
                'slug' => 'news-portal-content-based-filtering',
                'category' => 'Web Development',
                'categoryslug' => 'web-development',
                'url' => 'https://github.com/MuhammadJundullah/portal-berita',
                'photo' => 'news_portal.png',
                'tech' => 'FlaskAPI, Python, Laravel',
                'site' => '#',
                'desc' => 'This news portal is built using Flask as the backend and integrates the News API to fetch the latest news from various sources. The system features a content-based filtering mechanism to recommend relevant news based on user preferences. With a simple and responsive interface, users can easily search for news, read articles, and receive personalized news recommendations. This project highlights the integration of external APIs and the implementation of filtering algorithms to enhance the user experience.'
            ],

            [
                'judul' => 'Website Education Ideathings',
                'slug' => 'website-education-ideathings',
                'category' => 'Web Development',
                'categoryslug' => 'web-development',
                'url' => '#',
                'photo' => 'education_ideathings.png',
                'tech' => 'Laravel, RestAPI, Bootstrap, MySQL',
                'site' => 'https://ideathings.id/education/',
                'desc' => 'This project is an education platform that hosts various course data and their respective instructors. It includes features for course payments, allowing users to enroll seamlessly. Admins can monitor transactions, manage user and instructor lists, and view course ratings and reviews. Instructors can track customers who enroll in their courses, providing a comprehensive system for managing educational content and interactions.'
            ],

            [
                'judul' => 'Simple ETL Pipeline with Airflow and PostgreSQL',
                'slug' => 'simple-etl-pipeline-airflow-postgresql',
                'category' => 'Data Engineering',
                'categoryslug' => 'data-engineering',
                'url' => 'https://github.com/MuhammadJundullah/airflow-dag-for-data-pipline',
                'photo' => 'etl_pipeline.png',
                'tech' => 'Python, Apache Airflow, PostgreSQL, Docker Container',
                'site' => '-',
                'desc' => 'This project demonstrates a simple ETL (Extract, Transform, Load) pipeline using Apache Airflow, PostgreSQL, and Docker. The pipeline extracts data from a source, transforms it to meet business requirements, and loads it into a PostgreSQL database. Docker is used to containerize the application, ensuring portability and ease of deployment. The project showcases the use of Airflow for scheduling and monitoring workflows, ensuring data consistency and reliability. It is an excellent example of implementing data engineering concepts in a practical scenario.'
            ],

            // Tambahkan data lainnya sesuai kebutuhan
        ];

        // Mengisi data ke dalam tabel
        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}
