@extends('backend::layouts.master')

@section('content')
    <div class="signin cf">
        <div class="avatar"></div>
        <form>
            <div class="inputrow">
                <input type="text" id="name" placeholder="Username"/>
                <label class="ion-person" for="name"></label>
            </div>
            <div class="inputrow">
                <input type="password" id="pass" placeholder="Password"/>
                <label class="ion-locked" for="pass"></label>
            </div>
            <input type="checkbox" name="remember" id="remember"/>
            <label class="radio" for="remember">Stay Logged In</label>
            <input type="submit" value="Login"/>
        </form>
    </div>
@stop
