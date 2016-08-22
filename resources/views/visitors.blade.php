@extends('layout_visitors')
@section('title','Visitors Page')
@section('content')
<div class="nav-bar">
	<nav>
		<ul>
			@foreach($cat_results as $cat_result)
				<li>
					{!! Html::link(route('cat',$cat_result['id']),$cat_result['cat_name'],['id'=>'cat_name']) !!}
				</li>	
			@endforeach
		</ul>
	</nav>
</div>


@foreach($posts_results as $post_result)
	<h2 class="title">{!! Html::link(route('comments'),$post_result['title'],['id'=>'title_link']) !!}</h2>
	{!! $post_result['tags'] !!}
	<span class="posted_date">{!! $post_result['created_at'] !!}</span>
	<img src="{{ asset('images/' . $post_result['images']) }}">
	<div class="posts">{!! $post_result['comments'] !!}</div>
@endforeach
@endsection
