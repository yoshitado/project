 <!DOCTYPE html>
    <html>
        <head>
            <title>記事作成ページ</title>
            <a href="/article">
            記事一覧へ
            </a>
        </head>
        <body>
            <form method ="post" action="/article/create" accept-charset="UTF-8">
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