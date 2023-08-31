@extends('layouts.admin.index')

@section('content')

<table class="table table-dark table-striped">
	<thead>
		<tr>
		  <th scope="col">Image</th>
		  <th scope="col">Post Name</th>
		  <th scope="col">Created At</th>
		  <th scope="col">Opreation</th>
		</tr>
	  </thead>
	  <tbody>
		@if($poost->count() == 0) 
		<td>
			<strong>No Trushed Posts</strong>
		</td>
		@endif
		  @foreach($poost as $cates)
		  <tr>
			<th scope="row"><img src="{{asset($cates->photo)}}" alt="{{$cates->title}}" height="150px" width="150px"></th>
			<td>{{$cates->title}}</td>
			<td>{{$cates->created_at}}</td>
			<td><a  class="btn btn-success" href="{{route('restore.delete',['id'=>$cates->id])}}">Restore</a>
				&nbsp;	&nbsp;
				<a class="btn btn-danger" href="{{route('force.delete',['id'=>$cates->id])}}">Delete</a>
			</td>
		
		  </tr>
		  @endforeach
	
	  </tbody>
  </table>
@endsection