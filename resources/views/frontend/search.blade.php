@extends('frontend.layout.master')
@section('content')

<section class="custom-bg-white">
    <div class="container">

        <div class="row">
            @foreach ($blogs as $blog)

            <div class="col-xl-3 col-md-4 col-sm-6 mb-3 mb-sm-5">
@include('frontend.home.partial.card1',$blog)
            </div>
            @endforeach

        </div>
    </div>


</section>
@endsection
