<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model {

	protected $table = 'ratings';

    protected $fillable = ['rating', 'review_id'];

	// Get Reviews for this User
//	public function reviews(){
//		
//		return $this->belongsTo('App\Models\Review','review_id','id');
//
//	}

}
