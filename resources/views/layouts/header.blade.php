@section('header')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-header">                    ">
        	<a href="/" class="navbar-brand">tadoko-log</a>
        </div>
		<div class="collapse navbar-collapse" id="menu">
			<ul class="nav navbar-nav">
                <li><a href="/">ホーム</a></li>
                <li><a href="/article">記事一覧</a></li>
                <li><a href="/article/create">記事作成</a></li>
            </ul>
        </div>
	</nav>
	<img src="/images/monogatari_shinobu_001.jpg" >
@endsection