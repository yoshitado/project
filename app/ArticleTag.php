<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticleTag extends Model
{
    protected $table = 'article_tags'

  	public function getById($id)
  	{
  		return $this->select("id","title","content","updated_at")->where("id",$id)->get();
  	}

  	public function tags()
    {
        return $this->belongsToMany('App\MsTag', 'article_tags')->withTimestamps();
    }




  
}