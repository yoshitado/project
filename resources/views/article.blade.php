 <!DOCTYpE html>
    <html>
        <head>
            <title>記事一覧</title>
        </head>
        <body>
            <p>
               <a href="/article/create">新規作成</a> 
            </p>
            <p>
            @foreach($article as $articles)
                <tr>
                    <a href="/article/detail/{{ $articles->id }}">{{ $articles->title }}</a>
                    </br>
                </tr>
            @endforeach
            </p>
        </body>
    </html>