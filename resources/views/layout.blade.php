<!DOCTYPE html>
<html>
	<head>
		<title>@yield('title')</title>
		<link rel="stylesheet" type="text/css" href="{{ asset('css/cms.css') }}">
		<link href='https://fonts.googleapis.com/css?family=Lato:400,300' rel='stylesheet' type='text/css'>
		
	</head>
<body>
@if(Auth::user())
	<div class="nav-bar">
		<nav>
			<ul>
				<li class="first_link">
					{!! Html::link(route('cat'),'Categories',['id'=>'cat_link']) !!}
				</li>
				<li class="second_link">	
					{!! Html::link(route('posts'),'Posts',['id'=>'posts_link']) !!}
				</li>
				<li class="third_link">	
					{!! Html::link(route('comments'),'Comments',['id'=>'comments_link']) !!}
				</li>
				<li class="user">	
					{{{ isset(Auth::user()->name) ? Auth::user()->name : 'Welcome:'.Auth::user()->email }}}
				</li>
				<li class="logout">	
					{!! Html::link(route('log-out'),'Logout',['id'=>'logout_link']) !!}
				</li>
			</ul>		
		</nav>
	</div>
@endif	


		@yield('content')
		
</body>
</html>