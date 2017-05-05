@extends('login::layouts.master')
@section('stylesheet')
    <link rel="stylesheet" href="{{asset('assets/modules/login/css/login.css')}}"/>
@endsection
@section('title')
    Login & Registry - Author: Minhpt
@endsection

@section('content')
    {{--<h1>Hello World</h1>--}}
    {{--<p>--}}
        {{--This view is loaded from module: {!! config('login.name') !!}--}}
    {{--</p>--}}
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-login">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-6">
                                <a href="#" class="active" id="login-form-link">Login</a>
                            </div>
                            <div class="col-xs-6">
                                <a href="#" id="register-form-link">Register</a>
                            </div>
                        </div>
                        <hr>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <php
                                    @if(!empty($class))
                                ?>
                                        <div class="alert {{$class}} alert-dismissable">
                                            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                            <strong>{{$message[0]}}!</strong> {{$message[1]}}
                                        </div>
                                <php
                                    @endif
                                ?>
                                <form id="login-form" action="/login" method="post" role="form" style="display: block;">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                    <div class="form-group">
                                        <input type="text" pattern=".{3,50}" title="From 3 to 50 chars" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" required value="">
                                    </div>
                                    <div class="form-group">
                                        <input type="password"  pattern=".{3,32}" title="From 3 to 32 chars" name="password" id="password" tabindex="2" class="form-control" placeholder="Password" required>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6 col-sm-offset-3">
                                                <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <form id="register-form" action="/login/registry" method="post" role="form" style="display: none;">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                    <div class="form-group">
                                        <input type="text"  pattern=".{3,50}" title="From 3 to 50 chars" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" pattern=".{3,32}" title="From 3 to 32 chars" name="password-registry" id="password-registry" tabindex="2" class="form-control" placeholder="Password" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" pattern=".{3,32}" title="From 3 to 32 chars" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password">
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6 col-sm-offset-3">
                                                <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('scripts')
    <script type="text/javascript" src="{{ asset('assets/modules/login/js/login.js') }}"></script>
@endsection