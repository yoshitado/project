<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MsTag extends Model
{
    protected $table = 'ms_tags';
	//上記はmodelのclassの複数形が入ってるためコメントアウト

  	public function getList()
  	{
  		return $this->select("id","name")->get();
  	}

  	public function articles()
    {
        return $this->belongsToMany('App\Article', 'article_tags')->withTimestamps();
    }


  
}