@extends('layouts.admin.index')

@section('content')



<div class="container">
	<div class="row">
	    
	    <div class="col-md-8 col-md-offset-2">
	        @if(session()->has('success'))
			 <div class="alert alert-success">
				{{session()->get('success')}}
			</div>
		@endif
    		<h1>Create Tag</h1>
    		
    		<form action="{{route('category.store')}}" method="get" >
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