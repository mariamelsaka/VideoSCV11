<?php

namespace Database\Factories;
use App\Models\Blog;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $user_id=DB::table('users')->pluck('id')->toArray(); //btgeeb kol id el mawgoodah
        $index4=array_rand($user_id);
        return [
            'blog_iframe' => $this->faker->title,
            'blog_img'=>$this->faker->title,
            'user_id'=>$user_id[$index4],
        ];
    }
}
