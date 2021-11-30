@extends('layouts.app')

@section('content')
    <form action="/blogs" method="post">
        @csrf
        <div class="row">
            <div class="card col-md-6 shadow bg-white mx-auto">
                <div class="card-header bg-transparent">
                    New Blog
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input id="title" class="form-control" type="text" name="title">
                    </div>
                    <div class="form-group">
                        <label for="subtitle">Subtitle</label>
                        <input id="subtitle" class="form-control" type="text" name="subtitle">
                    </div>
                    <div class="form-group">
                        <label for="content">Blog Content</label>
                        <textarea id="content" class="form-control" name="content" rows="3"></textarea>
                    </div>

                    <button class="btn btn-block btn-success" type="submit">Submit</button>
                </div>
            </div>
        </div>
    </form>
@endsection
