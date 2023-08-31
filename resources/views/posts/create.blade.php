@extends('layouts.admin.index')

@section('content')


<!------ Include the above in your HEAD tag ---------->

<div class="container ">
	<div class="row">
	    
	    <div class="col-md-8 col-md-offset-2">
	        
    		<h1>Create post</h1>
    		
    		<form method="POST" action="{{route('posts.stores')}}"  enctype="multipart/form-data">
    		    @csrf
    		    
    		    <div class="form-group">
    		        <label for="title">Title <span class="require">*</span></label>
    		        <input type="text" class="form-control" name="title" />
    		    </div>
                <div class="form-group">
                    <label for="selector" > <!-- Can add label if want -->
                        <p>Categoty</p>
                        <select id="selector" name="category_id" class="form-control" placeholder="Select Category"> <!-- Use "select" to create object -->
							@foreach($cate as $cat)
							<option value="{{$cat->id}}" >{{$cat->name}}</option> <!-- Add all applicable options -->
							@endforeach
                        </select>
                      </label>
    		    </div>
			@if($tags->count() > 0)
			<div class="form-group">
				<label for="tags">Tag</label><br>
				<select name="tags[]" id="tags" calss="form-control" multiple>
				@foreach($tags as $tag)
				<option value="{{$tag->id}}" >
					{{$tag->tag}}</option>
				@endforeach	
			</select>
			</div>
			@endif
    		    <div class="form-group">
    		        <label for="desc">Description</label>
    		        <textarea rows="5" class="form-control" name="desc" ></textarea>
    		    </div>

                <div class="form-group">
    		        <label for="photo">photo</label>
    		        <input type="file" class="form-control" name="photo"/>
    		    </div>
    		    
    		    
    		    <div class="form-group">
    		        <p><span class="require">*</span> - required fields</p>
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

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.js" integrity="sha512-/1nVu72YEESEbcmhE/EvjH/RxTg62EKvYWLG3NdeZibTCuEtW5M4z3aypcvsoZw03FAopi94y04GhuqRU9p+CQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection

@section('style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.css" integrity="sha512-CWdvnJD7uGtuypLLe5rLU3eUAkbzBR3Bm1SFPEaRfvXXI2v2H5Y0057EMTzNuGGRIznt8+128QIDQ8RqmHbAdg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection