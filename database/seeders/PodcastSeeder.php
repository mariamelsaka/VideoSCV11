<?php

namespace Database\Seeders;

use App\Models\Podcast;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Database\Factories\Factory;
class PodcastSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('podcasts')->delete();



        Podcast::factory()->count(31)->create();
    }
}
