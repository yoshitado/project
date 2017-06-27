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
	public function getEdit($id)
	{
		$article = new Article();		
		$blog = $article->getById($id);

		return view('articleEdit',compact('id','blog'));
	}
	public function postEdit(Request $request,$id)
	{
		$update= Article::find($id);
		$update->title =  $request->input('title');
        $update->content = $request->input('content');
        $update->save();
        $article = Article::all();
		return view('article',compact('article'));
	}

}
