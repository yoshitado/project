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
		$article = Article::all();
		return view('articleDetail',compact('article','id'));
	}

	public function save()
	{

        $article = new Article;
        $article->title =  input::get('title');
        $article->content = input::get('content');
        $article->save();

	}

}
