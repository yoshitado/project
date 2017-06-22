 <!DOCTYPE html>
    <html>
        <head>
            <title>記事詳細</title>
            <a href="/article">
            記事一覧へ
            </a>
        </head>
        <body>
                @foreach($blog as $val)
                <p>タイトル</p>
                <tr>{{$val->title}}</tr> 
                <p>本文</p>
                <tr>{{$val->content}}</tr> 
                @endforeach
        </body>
    </html>