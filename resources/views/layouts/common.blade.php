 <!DOCTYPE html>
    <html lang="ja">

        <head>
		@yield('head')
        </head>
        <body style="padding-top:70px;">
        @yield('header')
        <div class="contents">
    		<div class="main">
        		@yield('content')
    		</div>
    	</div>
		@yield('footer')
		</body>
	</html>
