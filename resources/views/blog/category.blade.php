@extends('layouts.app')
@section( 'title')
SHANTI
@endsection
@section( 'header')
    <!-- Header -->
    <header class="header text-center text-white" style="background-image: linear-gradient(-225deg, #5D9FFF 0%, #1f7ddb 48%, hsl(208, 100%, 71%) 100%);">
      <div class="container">

        <div class="row">
          <div class="col-md-8 mx-auto">

            <h1>SHANTI WEBSITE</h1>
            <p class="lead-2 opacity-90 mt-6">BY OMAR YOUSEF</p>

          </div>
        </div>

      </div>
    </header><!-- /.header -->
    @endsection
    @section( 'content')
    <!-- Main Content -->
    <main class="main-content">
      <div class="section bg-gray">
        <div class="container">
          <div class="row">


            <div class="col-md-8 col-xl-9">
              <div class="row gap-y">

        
                @forelse($postnum as $post)
    
                <div class="col-md-6">
                  <div class="card border hover-shadow-6 mb-6 d-block">
                    <a href="{{route('single',$post->id)}}"><img class="card-img-top" src="{{asset($post->photo)}}" alt="Card image cap"></a>
                    <div class="p-6 text-center">
                      <p><a class="small-5 text-lighter text-uppercase ls-2 fw-400" href="#">{{$post->categories->name ?? 'None'}}</a></p>
                      <h5 class="mb-0"><a class="text-dark" href="{{route('single',$post->id)}}">{{$post->title}}</a></h5>
                    </div>
                  </div>
                </div>
                @empty
                  <p class="text-center"> No Result For Query <strong>{{request()->query('search')}}</strong></p>
                @endforelse
              </div>
              @if ($postnum->hasPages())
              <nav class="flexbox mt-30">
                @if ($postnum->onFirstPage())
                <a class="btn btn-white disabled"><i class="ti-arrow-left fs-9 mr-4"></i> Prefivous</a>
                @else
                <a class="btn btn-white" href="{{ $postnum->previousPageUrl() }}"><i class="ti-arrow-left fs-9 mr-4"></i> Prefivous</a>
                @endif
                @if ($postnum->hasMorePages())
                <a class="btn btn-white" href="{{ $postnum->nextPageUrl() }}">Next <i class="ti-arrow-right fs-9 ml-4"></i></a>
                            @else
                            <a class="btn btn-white" href="#">Next<i class="ti-arrow-right fs-9 ml-4"></i></a>
                            @endif
              </nav>
              @endif
             {{ $postnum->appends(['seaech'=> request()->query('search')])->links(); }}
            </div>
         

            @include('layouts.sidebar')
           
          </div>
        </div>
      </div>
    </main>
    @endsection