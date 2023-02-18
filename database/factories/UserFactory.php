<?php


namespace Database\Factories;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $gender_id=DB::table('genders')->pluck('id')->toArray();
        $index=array_rand($gender_id);
        $image_id=DB::table('images')->pluck('id')->toArray(); //btgeeb kol id el mawgoodah
        $index2=array_rand($image_id);
        return [
            'username' => $this->faker->unique()->userName,
            'firstname' => $this->faker->firstName,
            'lastname' => $this->faker->lastName,
            'phone_number' => $this->faker->unique()->phoneNumber(),
            'address' => $this->faker->unique()->address,
            'email' => $this->faker->unique()->safeEmail,
            'password'=>bcrypt('123456'),
            'is_admin' => $this->faker->boolean(),
            'gender_id'=>$gender_id[$index],
            'image_id'=>$image_id[$index2],
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
