@extends('layout.master')

@section('title', "Register")

@section('section')
    <form method="POST" action="/users">
        {{csrf_field()}}
        <div class="form-group">
            <label>First name</label>
            <input type="text" class="form-control" style="height: 55px" placeholder="First name" name="firstname">
        </div>

        <div class="form-group">
            <label>Last name</label>
            <input type="text" class="form-control" style="height: 55px" placeholder="Last name" name="lastname">
        </div>

        <div class="form-group">
            <label>Email address</label>
            <input type="text" class="form-control" style="height: 55px" placeholder="Email" name="email">
        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" style="height: 55px" placeholder="Password" name="password">
        </div>

        <div class="row">
            <input type="submit" class="btn btn-outline-success" style="width: 150px; margin-left: auto; margin-right: auto;">
        </div>
    </form>
@endsection