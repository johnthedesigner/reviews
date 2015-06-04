<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

	use \Illuminate\Database\Eloquent\SoftDeletes;

    protected $table = 'categories';
    protected $dates = ['deleted_at'];
    protected $fillable = ['title', 'content'];
    
	public function category(){
		
		return $this->belongsTo('App\Models\Category');

	}
	
	public function user(){
		
		return $this->belongsTo('App\User');

	}
	
	public function reviews(){
		
		return $this->hasManyThrough('App\Models\Review');

	}
	
}
