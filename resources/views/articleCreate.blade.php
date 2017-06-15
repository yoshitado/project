 <!DOCTYPE html>
    <html>
        <head>
            <title>記事作成ページ</title>
            <a href="http://localhost:8080/article">
            記事一覧へ
            </a>
        </head>
        <body>
            <form action="/article/create" method ="post">
                <p>
                タイトル:<INPUT type = "text" name = "title">
                </p>
                <p>
                [内容]
                </p>
                <textarea name="content" rows="50" cols="40">
                </textarea>
                <br>
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

                <input type="submit" value="保存" >
            </form>
        </body>
    </html>