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

	public function create()
	{
		return view('articleCreate');
	}

	public function detail($id)
	{
		$article = new Article();		
		$text = $article->getById($id);

		return view('articleDetail',compact('text'));
	}

	public function save(Request $request)
	{

        $saving = new Article();
        $saving->title =  $request->input('title');
        $saving->content = $request->input('content');
        $saving->save();

        $article = Article::all();
        return view('article',compact('article'));
	}

}
