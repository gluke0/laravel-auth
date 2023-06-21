@extends('layouts.admin')

@section('content')
    <h1 class="text-uppervase"> {{ $project -> title }} </h1>

    <div class="card">
        <div class="card-body p-3">
            <p class="card-text"><strong> Image: </strong> {{ $project -> image }} </p>
            <p class="card-text"><strong> Description: </strong> {{ $project -> description }} </p>
            <p class="card-text"><strong> Languages: </strong> {{ $project -> languages }} </p>
        </div>

@endsection
