 <!DOCTYPE html>
    <html>
        <head>
            <title>記事一覧</title>
        </head>
        <body>
            <P>
               <a href=" article/create">新規作成</a> 
            </P>
            <P>
            @foreach($article as $articles)
                <tr>
                    <a href=" article/detail/{{ $articles->id }}">{{ $articles->title }}</a>
                    </br>
                </tr>
            @endforeach
            </P>
        </body>
    </html>