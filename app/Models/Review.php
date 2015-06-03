<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model {

	use \Illuminate\Database\Eloquent\SoftDeletes;

    protected $table = 'reviews';
    protected $dates = ['deleted_at'];
    protected $fillable = ['title', 'content'];
    
	public function owner(){
		
		return $this->belongsTo('App\User','user_id','id');

	}
	
//	public function rating(){
//		
//		return $this->hasOne('App\Models\Rating','review_id','id');
//
//	}
	
}
