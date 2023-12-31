<?php

namespace Database\Factories;

use App\Models\CsoActivityDomain;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cso>
 */
class CsoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->company(),
            'assessment_score' => $this->faker->randomElement(['Not Assessed', 'Assessment Level 01', 'Assessment Level 02', 'Assessment Level 03', 'Assessment Level 04', 'Assessment Level 05']),
            'status' => $this->faker->randomElement(['verified', 'not verified']),
            'partnership' => $this->faker->sentence(),
            'image' => $this->faker->imageUrl(),
            'acronym' => $this->faker->word(),
            'registration_year' => intval($this->faker->year()),
            'organization_type' => $this->faker->word(),
            'registration_number' => $this->faker->uuid(),
            'country' => $this->faker->country(),
            'region' => $this->faker->city(),
            'division' => $this->faker->city(),
            'sub_division' => $this->faker->city(),
            'village' => $this->faker->streetName(),
            'contact_person_name' => $this->faker->name(),
            'contact_person_sex' => $this->faker->randomElement(['Male', 'Female']),
            'contact_person_email' => $this->faker->email(),
            'contact_person_tel' => $this->faker->phoneNumber(),
            'contact_person_position' => $this->faker->jobTitle(),
            'address' => $this->faker->address(),
            'website' => $this->faker->url(),
            'email' => $this->faker->companyEmail(),
            'tel' => $this->faker->phoneNumber(),
            'vision_statement' => $this->faker->sentence(),
            'mission' => $this->faker->paragraph(),
            'primary_target_beneficiaries' => $this->faker->sentence(),
            'secondary_target_beneficiaries' => $this->faker->sentence(),
            'domain' => CsoActivityDomain::all()->random()->name,
            'board_directors' => $this->faker->boolean(),
            'office' => $this->faker->boolean(),
            'staff' => $this->faker->word(),
            'cnps_registered' => $this->faker->boolean(),
            'african_coverage' => $this->faker->word(),
            'organization_leaderships' => $this->faker->sentence(),
            'background' => $this->faker->paragraph(),
            'user_id' => User::all()->random()->id,
            'created_by' => User::all()->random()->id,
        ];
    }
}
