@extends('frontend.layout.master')
@section('content')

<section class="custom-bg-white">
    <div class="container">
<div class="row">
    <div class="col-md-10 offset-md-1">
         <div class="card shadow-sm">
            <div class="card-body">
            <h1>{{$blog->title}}</h1>
            <br>
         <img src="{{getImage($blog->thumbnail)}}" alt="{{$blog->title}}" class="w-100 img-fluid">
         <p class="mt-4">
            {!!$blog->long_description!!}
         </p>
         </div>
        </div>
    </div>
</div>

</section>
@endsection
