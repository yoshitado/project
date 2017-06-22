<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
	public function index()
	{
		$article = Article::all();
		return view('article',compact('article'));
	}

	public function getCreate()
	{
		return view('articleCreate');
	}

	public function postCreate(Request $request)
	{
		$this->save($request);
		$article = Article::all();
		return view('article',compact('article'));
	}

	public function detail($id)
	{
		$article = new Article();		
		$blog = $article->getById($id);

		return view('articleDetail',compact('blog'));
	}

	public function save($request)
	{
		$saving = new Article();
        $saving->title =  $request->input('title');
        $saving->content = $request->input('content');
        $saving->save();
	}

}
