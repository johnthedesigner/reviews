<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\Vote;

class VoteSeeder extends Seeder {

	/**
	 * Run the admin seeder.
	 *
	 * @return void
	 */
	public function run()
	{
		
		// Create an instance of Faker
		$faker = Faker\Factory::create();
		
		for ($i=0;$i<100;$i++){
			
			$selector 		= $faker->numberBetween(1,3);
			$review_id 		= null;
			$thing_id 		= null;
			$category_id 	= null;
			if ($selector === 1){
				$review_id = $faker->numberBetween(1,100);
			} elseif ($selector === 2){
				$thing_id = $faker->numberBetween(1,100);
			} elseif ($selector === 3){
				$category_id = $faker->numberBetween(1,10);
			}

		    Vote::create([
	            'review_id'		=> $review_id,
		        'thing_id'		=> $thing_id,
		        'category_id'	=> $category_id,
	            'user_id'		=> $faker->numberBetween(1,3)
		    ]);
		    
	    }
	    
	}

}
