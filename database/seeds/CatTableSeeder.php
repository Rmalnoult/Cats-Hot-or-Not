<?php

use App\Cat;
use Illuminate\Database\Seeder;

class CatTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$url = "https://latelier.co/data/cats.json";
    	$json = file_get_contents($url);
    	$obj = json_decode($json);
    	$cats = $obj->images;

    	foreach ($cats as $cat) {
	    	Cat::create([
	    		"image" => $cat->url,
	    	]);
    	}
    }
}
