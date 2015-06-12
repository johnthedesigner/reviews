<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Flag extends Model {

    protected $table = 'flags';
    protected $fillable = ['type'];
    
	public function review(){
		
		return $this->belongsTo('App\Models\Review');

	}
	
	public function user(){
		
		return $this->belongsTo('App\User');

	}
	
}
