<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Podcast;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Podcast>
 */
class PodcastFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Podcast::class;
    public function definition()
    {
        $user_id=DB::table('users')->pluck('id')->toArray(); //btgeeb kol id el mawgoodah
        $index3=array_rand($user_id);
        return [
            //
            'podcast_title' => $this->faker->title,
            'podcast_img'=>$this->faker->imageUrl,
            'user_id'=>$user_id[$index3],
        ];
    }
}
