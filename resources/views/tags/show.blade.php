@extends('layouts.admin.index')

@section('content')
@if(session()->has('error'))
<div class="alert alert-danger">
   {{session()->get('error')}}
</div>
@endif
<table class="table table-dark table-striped">
	<thead>
		<tr>
		  <th scope="col">id</th>
		  <th scope="col">Tag Name</th>
		  <th scope="col">Posts</th>
		  <th scope="col">Opreation</th>
		</tr>
	  </thead>
	  <tbody>
		  @foreach($cats as $cates)
		  <tr>
			<th scope="row">{{$cates->id}}</th>
			<td>{{$cates->tag}}</td>
			<td>{{$cates->posts->count()}}</td>
			<td><a  class="btn btn-success" href="{{route('tag.edit',['id'=>$cates->id])}}">Edit</a>
				&nbsp;	&nbsp;
				<a class="btn btn-danger" href="{{route('tag.delete',['id'=>$cates->id])}}">Delete</a>
			</td>
		
		  </tr>
		  @endforeach
	
	  </tbody>
  </table>
@endsection