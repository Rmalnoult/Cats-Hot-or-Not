<?php

use App\Cat;
use App\Vote;
use Illuminate\Database\Seeder;

class VoteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$catCount = Cat::count();
    	foreach (range(0, 10000) as $index) {
    		Vote::create([
    			"cat_id" => rand(1, $catCount),
    			"positive" => rand(0, 1),
    		]);
    	}
    }
}
