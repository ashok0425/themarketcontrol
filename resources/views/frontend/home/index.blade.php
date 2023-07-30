@extends('frontend.layout.master')
@section('content')

{{-- latest blog --}}
@include('frontend.home.partial.latest_blog')



@php
    $categories=App\Models\PropertyType::with('blogs')->limit(3)->get();
@endphp
@foreach ($categories as $category)

@if (count($category->blogs))
@include('frontend.home.partial.category_section',['category'=>$category])

@endif
@endforeach

@endsection
