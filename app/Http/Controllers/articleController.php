<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\MsTag;
use App\ArticleTag;

class ArticleController extends Controller
{
	public function index()
	{
		$article = Article::all();
		return view('article',compact('article'));
	}

	public function getCreate()
	{
		$ms_tags = MsTag::all();
		return view('articleCreate',compact('ms_tags'));
	}

	public function postCreate(Request $request)
	{
		$this->validate($request,[
			'title'=>'required','content'=>'required'
			]);
		$this->save($request);
		return redirect("/article");
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

        $tag_saving = new ArticleTag();
        $tag_saving->tag_id =  $request->input('tags');
        $tag_saving->article_id = $request->input('content');
        $tag_saving->save();


	}
	public function getEdit($id)
	{
		$article = new Article();		
		$blog = $article->getById($id);

		return view('articleEdit',compact('id','blog'));
	}
	public function postEdit(Request $request,$id)
	{
		$this->validate($request,[
			'title'=>'required','content'=>'required'
			]);
		$update= Article::find($id);
		$update->title =  $request->input('title');
        $update->content = $request->input('content');
        $update->save();
        $article = Article::all();
		return view('article',compact('article'));
	}

}
