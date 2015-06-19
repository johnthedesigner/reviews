<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\Flag;

class FlagSeeder extends Seeder {

	/**
	 * Run the admin seeder.
	 *
	 * @return void
	 */
	public function run()
	{
		
		// Create an instance of Faker
		$faker = Faker\Factory::create();
		
		for ($i=0;$i<10;$i++){
			
		    Flag::create([
		        'type'	=> $faker->randomElement(['abusive', 'offensive', 'spam', 'illegal', 'other']),
	            'review_id'	=> $faker->numberBetween(1,100),
	            'user_id'		=> $faker->numberBetween(1,3)
		    ]);
		    
	    }
	    
	}

}
