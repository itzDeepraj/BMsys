<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        $this->call(LaratrustSeeder::class);

        // $this->call(UsersSeeder::class);
        // $this->call(UserRolePivotSeeder::class); 
        // $this->call(TagsSeeder::class);
        // $this->call(CatagoriesSeeder::class);
        // $this->call(PostsSeeder::class);
        // $this->call(PostTagPivotSeeder::class);
        // $this->call(RatingsSeeder::class);
    }
}
