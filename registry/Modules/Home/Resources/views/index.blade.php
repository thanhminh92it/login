@extends('home::layouts.master')
@section('title')
    Welcome to my life - Author: Minhpt
@endsection
@section('content')
    <div class="form-horizontal">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="/home">MY LIFE</a>
                </div>
                <ul class="nav navbar-nav navbar-left">
                    <li><a href="/admin" class="action">GO TO ADMIN</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><span class="glyphicon glyphicon-user"></span> {{$user}}</a></li>
                    <li><a href="/login/logout"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
                </ul>
            </div>
        </nav>

        <div class="col-md-12">
            <div>
                <img src="{{asset('images/a-day-in-the-life.jpg')}}" class="img-rounded img-responsive" alt="Coder" style="margin: 0 auto;">
            </div>
        </div>
    </div>

@stop
