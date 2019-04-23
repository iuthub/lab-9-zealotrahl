<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model{

	protected $fillable = ["title", "content"];


	public function likes(){
		return $this->hasMany("App\Likes", "post_id");
	}


	public function tags(){
		return $this->belongsToMany("App\Tag", "post_tag", "post_id", "tag_id")->withTimestamps();
	}
	
}
