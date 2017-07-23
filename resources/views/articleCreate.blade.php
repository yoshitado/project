@extends('layouts.common')

@section('title', '記事作成')
@include('layouts.head')
@include('layouts.header')
@include('layouts.footer')

@section('content')
    <form method ="post" action="/article/create" accept-charset="UTF-8">
        <p>タイトル:<INPUT type = "text" name = "title"></p>
        <p>タグ:</p>
            <select name="tags">
                <option value="">選択してください</option>
                @foreach($ms_tags as $tagList)
				<option value="{{$tagList->id}}">{{ $tagList->name }}</option>
                @endforeach
			</select>
        <p>[内容]</p>
        <textarea name="content" rows="30" cols="50"></textarea>
        <br>
        <input type="hidden" name="_token" value="{{csrf_token() }}">
        <input class="btn btn-primary" type="submit" value="保存" >
    </form>
@endsection




