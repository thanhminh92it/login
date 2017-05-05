@extends('home::layouts.master')

@section('content')
    <div class="form-horizontal">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">MY LIFE</a>
                </div>
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
