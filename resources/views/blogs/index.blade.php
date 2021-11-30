@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @foreach ($blogs as $blog)
                <div class="card my-3 col-12">
                    <div class="card-header">
                        <h3>{{ $blog->title }}</h3>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $blog->subtitle }}</h5>
                        <p class="card-text">{{ $blog->content }}</p>
                        <a href="/blogs/{{ $blog->id }}" class="btn btn-primary">Read full blog</a>
                    </div>
                    <div class="card-footer">
                        <small>By {{ $blog->name }}</small>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
