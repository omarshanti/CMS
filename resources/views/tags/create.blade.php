@extends('layouts.admin.index')

@section('content')


<!------ Include the above in your HEAD tag ---------->

<div class="container">
	<div class="row">
	    
	    <div class="col-md-8 col-md-offset-2">
	        
    		<h1>Create Tag</h1>
    		
    		<form action="{{route('tag.store')}}" method="get" enctype="multipart/form-data">
    		    @csrf
    		    
    		    <div class="form-group">
    		        <label for="name">Tag<span class="require"> Name</span></label>
    		        <input type="text" class="form-control" name="name" />
    		    </div>
              
    		    
    		    <div class="form-group">
    		        <button type="submit" class="btn btn-primary">
    		            Create
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