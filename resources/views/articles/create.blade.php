@extends('layout.master')

@section('title', 'Create Article')

@section('section')
    <form method="POST" action="/articles">
        {{csrf_field()}}
        <div class="form-group">
            <label>Title</label>
            <input type="text" class="form-control" style="height: 55px" placeholder="Title" name="title">
        </div>


        <div class="form-group">
            <label>Body</label>
            <textarea class="form-control" name="body" style="min-height: 200px"></textarea>
        </div>

        <div class="row">
            <input type="submit" class="btn btn-outline-success" style="width: 150px; margin-left: auto; margin-right: auto;">
        </div>
    </form>
@endsection