<?php

namespace Database\Factories;
use App\Models\Video;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;





/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Video>
 */
class VideoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Video::class;
    public function definition()
    {
        $user_id=DB::table('users')->pluck('id')->toArray(); //btgeeb kol id el mawgoodah
        $index2=array_rand($user_id);
        return [
            //
            'video_title' => $this->faker->title,
            'ContentCreatorName' => $this->faker->name,

            'video_url'=>$this->faker->title,
            'user_id'=>$user_id[$index2],
        ];
    }
}
