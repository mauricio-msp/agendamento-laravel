@extends('backend::layouts.master')

@section('content')
    <div class="signin cf">
        <div class="avatar"></div>
        <form method="post" action="{{ route('admin.login.submit') }}">
            <div class="inputrow">
                <input name="email" type="text" id="name" placeholder="{{trans('backend::auth.email')}}"/>
                <label class="ion-person" for="name"></label>
            </div>
            <div class="inputrow">
                <input name="password" type="password" id="pass" placeholder="{{trans('backend::auth.password')}}"/>
                <label class="ion-locked" for="pass"></label>
            </div>
            <p>
                <input class="btn-block" type="submit" value="{{trans('backend::auth.login')}}"/>
            </p>
            <br><br>
            <p class="text-login">

                <a href="{{ route('admin.password.request') }}">
                   {{trans('backend::auth.forgot_password')}}
                </a>
            </p>
        </form>
    </div>
@stop
