@extends('master')

@section('title', $article->title)

@section('section')
    <h1 class="display-4">{{$article->title}}</h1>
    <span>by {{$article->author}}</span>

    <p class="lead" style="margin-top: 30px; color: #757575">{{$article->body}}</p>


    <div class="col-md-6 mx-auto">
        <div class="row">
            <a href="/articles/{{$article->id}}/edit" class="btn btn-outline-primary" style="margin-right: 25px; width: 150px">Edit Article</a>
            <a href="/articles/{{$article->id}}/delete" class="btn btn-outline-danger" style="width: 150px">Delete Article</a>
        </div>
    </div>
@endsection