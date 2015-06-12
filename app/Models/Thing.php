<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Thing extends Model {

	use \Illuminate\Database\Eloquent\SoftDeletes;

    protected $table = 'things';
    protected $dates = ['deleted_at'];
    protected $fillable = ['title', 'content','description','category_id','user_id'];
    
	public function category(){
		
		return $this->belongsTo('App\Models\Category');

	}
	
	public function user(){
		
		return $this->belongsTo('App\User');

	}
	
	public function reviews(){
		
		return $this->hasMany('App\Models\Review');

	}
	
}
