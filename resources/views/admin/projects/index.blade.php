@extends('layouts.admin')

@section('content')
    <h1 class="text-uppervase"> my projects </h1>

    @forelse ($projects as $elem)
    <div class="card">
        <div class="card-body p-3">
            <p class="card-text"><strong> Title: </strong> {{ $elem->title }} </p>
            <p class="card-text"><strong> Image: </strong> {{ $elem->image }} </p>
            <p class="card-text"><strong> Languages: </strong> {{ $elem->languages }} </p>
            <p> <a class="text-decoration-none" href="{{ route('admin.projects.show', $elem) }}"> More </a></p>
        </div>
        
    @empty
        
    @endforelse

@endsection
