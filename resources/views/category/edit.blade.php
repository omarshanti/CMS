@extends('layouts.admin.index')

@section('content')


<div class="container">
	<div class="row">
	    
	    <div class="col-md-8 col-md-offset-2">
	        
    		<h1>Edit Category</h1>
    		
    		<form action="{{route('category.update',['id'=>$cats->id])}}" method="get" enctype="multipart/form-data">
    		    @csrf
    		    
    		    <div class="form-group">
    		        <label for="name">Edit Category<span class="require"> {{$cats->name}}</span></label>
    		        <input type="text" class="form-control" name="name" value="{{$cats->name}}"/>
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