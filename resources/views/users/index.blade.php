@extends('layout.master')

@section('title', 'My Articles')

@section('section')
    <div class="card border-primary">
        <ul class="list-group list-group-flush text-primary">
            @foreach($articles as $article)
                <li class="list-group-item border-primary">
                    <a href="/articles/{{$article->id}}">{{$article->title}}</a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection