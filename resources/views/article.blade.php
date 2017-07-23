@extends('layouts.common')

@section('title', '記事一覧')
@include('layouts.head')
@include('layouts.header')
@include('layouts.footer')

@section('content')
            <h1>記事一覧</h1>
            
            <table class="table">
                <th class="active">タイトル</th>
                <th class="active">更新日時</th>
            @foreach($article as $articles)
                    <tr>
                    <td>
                    <a href="/article/detail/{{ $articles->id }}">{{ $articles->title }}</a>
                    </td>
                    <td>
                    {{ $articles->updated_at }}
                    </td>
                    </tr>
            @endforeach
            </table>
@endsection