<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// Models
use App\Models\Topic;
// Helpers
use Illuminate\Support\Str;
use Faker\Generator as Faker;

class TopicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        // import topics
        $topics = config('topics');

        // create books
        foreach ($topics as $topic) {
            $newTopic = Topic::create([
                'name' => $topic['name'],
                'slug' => Str::slug($topic['name']),
                'description' => $topic['description'],
            ]);
        }
    }
}
