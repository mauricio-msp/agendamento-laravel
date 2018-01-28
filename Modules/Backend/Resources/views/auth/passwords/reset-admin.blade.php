@extends('backend::layouts.master')

@section('content')
    <div class="signin cf">
        <div class="avatar"></div>
        <form method="post" action="{{ route('admin.password.request') }}">
            <input type="hidden" name="token" value="{{ $token }}">
            <div class="inputrow">
                <input name="email" type="text" id="name" placeholder="{{trans('backend::auth.email')}}"/>
                <label class="ion-person" for="name"></label>
            </div>
            <div class="inputrow">
                <input name="password" type="password" id="pass" placeholder="{{trans('backend::auth.new_password')}}"/>
                <label class="ion-locked" for="pass"></label>
            </div>
            <div class="inputrow">
                <input name="password_confirmation" type="password" id="pass" placeholder="{{trans('backend::auth.confirm_password')}}"/>
                <label class="ion-locked" for="pass"></label>
            </div>
            <p>
                <input class="btn-block" type="submit" value="{{trans('backend::auth.register')}}"/>
            </p>
            <br><br>

        </form>
    </div>
@endsection
