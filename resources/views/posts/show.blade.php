@extends('layouts.admin.index')

@section('content')

<table class="table table-dark table-striped">
	<thead>
		<tr>
		  <th scope="col">Image</th>
		  <th scope="col">Post Name</th>
		  <th scope="col">Category</th>
		  <th scope="col">Tags</th>
		  <th scope="col">Opreation</th>
		</tr>
	  </thead>
	  <tbody>
		  @foreach($poost as $cates)
		  <tr>
			<th scope="row"><img src="{{asset($cates->photo)}}" alt="{{$cates->title}}" height="150px" width="150px"></th>
			<td>{{$cates->title}}</td>
			<td>{{$cates->categories->name ?? 'None'}}</td>
			<td>{{$cates->tags->count()}}</td>
			<td><a  class="btn btn-success" href="{{route('tag.edit',['id'=>$cates->id])}}">Edit</a>
				&nbsp;	&nbsp;
				<a class="btn btn-danger" href="{{route('posts.delete',['id'=>$cates->id])}}">Delete</a>
			</td>
		
		  </tr>
		  @endforeach
	
	  </tbody>
  </table>
@endsection