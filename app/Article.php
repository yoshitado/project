<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //protected $table = 'articles'
	//上記はmodelのclassの複数形が入ってるためコメントアウト

  	public function getById($id)
  	{
  		return $this->select("title","content","updated_at")->where("id",$id)->get();
  	}




  
}