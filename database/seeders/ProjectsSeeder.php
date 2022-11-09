<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('project_user')->insert([
            [
              'user_id' => rand(1,10),
              'project_id' => rand(1,10),
            ],
            [
                'user_id' => rand(1,10),
                'project_id' => rand(1,10),
            ],
            [
                'user_id' => rand(1,10),
                'project_id' => rand(1,10),
            ],
            [
                'user_id' => rand(1,10),
                'project_id' => rand(1,10),
            ],
            [
                'user_id' => rand(1,10),
                'project_id' => rand(1,10),
            ],
            [
                'user_id' => rand(1,10),
                'project_id' => rand(1,10),
            ],
        ]);
    }
}
