@extends('home::layouts.master')
@section('title')
    All user - Author: Minhpt
@endsection
@section('content')
    <div class="form-horizontal">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="/home">MY LIFE</a>
                </div>
                <ul class="nav navbar-nav navbar-left">
                    <li><a href="/home/listuser" class="action">List user</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><span class="glyphicon glyphicon-user"></span> {{$user}}</a></li>
                    <li><a href="/login/logout"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
                </ul>
            </div>
        </nav>

        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    List User
                </div>
                <div class="panel-body">
                    <table class="table table-striped table-hover">
                        <thead>
                        <tr>
                            <th style="width:40px"></th>
                            <th>Username</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($listuser as $key => $item)
                            <tr>
                                <td>{{$key + 1}}</td>
                                <td>{{$item->username}}</td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@stop
