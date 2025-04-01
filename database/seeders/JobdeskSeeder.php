<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobdeskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jobdesks = [
            ['experiences_id' => 1, 'description' => 'Developed a news portal website using Laravel (frontend & backend).'],
            ['experiences_id' => 1, 'description' => 'Implemented Collaborative Filtering for news recommendations.'],
            ['experiences_id' => 1, 'description' => 'Integrated News API to fetch real-time news data.'],
            ['experiences_id' => 1, 'description' => 'Built and optimized backend features with Laravel.'],
            ['experiences_id' => 1, 'description' => 'Applied version control using Git.'],
            ['experiences_id' => 2, 'description' => 'Developed and integrated payment features to ensure seamless course transactions.'],
            ['experiences_id' => 2, 'description' => 'Built and maintained RESTful APIs to support front-end functionality and data flow.'],
            ['experiences_id' => 2, 'description' => 'Conducted unit testing to enhance code reliability and system performance.'],
            ['experiences_id' => 2, 'description' => 'Led a team of 4 developers in building and optimizing an education platform.'],
            ['experiences_id' => 2, 'description' => 'Optimized and refactored existing code to improve maintainability and efficiency.'],
            ['experiences_id' => 2, 'description' => 'Debugged and resolved issues to ensure a smooth user experience.'],
            ['experiences_id' => 1, 'description' => 'Collaborated with front-end developers to refine UI components and enhance usability.'],
            ['experiences_id' => 3, 'description' => 'Designed and developed three websites to support the management of inventory data, medication, and employee information.'],
            ['experiences_id' => 3, 'description' => 'Implemented Tailwind CSS and Alpine JS for the frontend design and Laravel for the backend to ensure a user-friendly and integrated system.'],
            ['experiences_id' => 3, 'description' => 'Improved efficiency and accessibility in data management within the healthcare sector.'],
            ['experiences_id' => 3, 'description' => 'Gained a deeper understanding of the needs and challenges faced in the healthcare industry through this experience.'],
        ];

        foreach ($jobdesks as $jobdesk) {
            \DB::table('jobdesks')->insert($jobdesk);
        }
    }
}
