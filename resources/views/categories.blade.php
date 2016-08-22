@extends('layout')
@section('title','Categories Page')
@section('content')
	

	
	
	<div class="add_new">	
					{!! Html::link(route('categories-form'),'Add New',['id'=>'AddNew_link']) !!}
	</div>
	<div class="cat_listing">
		<table>
			<tr>
				<th>ID</th>
				<th>CATEGORY NAME</th>
				<th>ACTION1</th>
				<th>ACTION2</th>
			</tr>	
			@foreach($select_results as $select_result)
			<tr>
				<td>{!! $select_result['id'] !!}</td>
				<td>{!! $select_result['cat_name'] !!}</td>
				<td>{{ Html::link(route('edit-cat'),'Edit',['id'=>'edit']) }}</td>
				<td>{{ Html::link(route('delete-cat'),'Delete',['id'=>'delete']) }}</td>
			</tr>	
			@endforeach	
		</table>
	</div>

@endsection


