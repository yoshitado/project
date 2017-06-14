<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //protected $table = 'articles'
	//↑にmodelのclassの複数形が入ってるためコメントアウト
 	public function tadokoro_test()
  	{
       	$this->save();
  	}	
  
}