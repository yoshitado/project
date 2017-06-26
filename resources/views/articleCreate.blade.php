@extends('layouts.common')

@section('title', '記事作成')
@include('layouts.head')
@include('layouts.header')
@include('layouts.footer')

@section('content')
    <form method ="post" action="/article/create" accept-charset="UTF-8">
        <p>タイトル:<INPUT type = "text" name = "title"></p>
        <p>[内容]</p>
        <textarea name="content" rows="30" cols="50"></textarea>
        <br>
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        <input class="btn btn-primary" type="submit" value="保存" >
    </form>
@endsection




