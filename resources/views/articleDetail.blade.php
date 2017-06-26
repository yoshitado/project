 @extends('layouts.common')

@section('title', '記事詳細')
@include('layouts.head')
@include('layouts.header')
@include('layouts.footer')

@section('content')
                @foreach($blog as $val)
                <p>タイトル</p>
                <tr>{{$val->title}}</tr> 
                <p>本文</p>
                <tr>{{$val->content}}</tr> 
                @endforeach
@endsection