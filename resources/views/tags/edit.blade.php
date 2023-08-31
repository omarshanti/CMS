@extends('layouts.admin.index')

@section('content')


<!------ Include the above in your HEAD tag ---------->

<div class="container">
	<div class="row">
	    
	    <div class="col-md-8 col-md-offset-2">
	        
    		<h1>Edit Tag</h1>
    		
    		<form action="{{route('tag.update',['id'=>$cats->id])}}" method="get" enctype="multipart/form-data">
    		    @csrf
    		    
    		    <div class="form-group">
    		        <label for="name">Edit Tag<span class="require"> {{$cats->tag}}</span></label>
    		        <input type="text" class="form-control" name="name" value="{{$cats->tag}}"/>
    		    </div>
              
    		    
    		    <div class="form-group">
    		        <button type="submit" class="btn btn-primary">
    		            Edit
    		        </button>
    		        <button class="btn btn-default">
    		            Cancel
    		        </button>
    		    </div>
    		    
    		</form>
		</div>
		
	</div>
</div>
@endsection