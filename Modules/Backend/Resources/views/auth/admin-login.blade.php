@extends('backend::layouts.master')

@section('content')
    <form class="form-signin" method="post" action="{{route('admin.login.submit')}}">
        {{csrf_field()}}
        <div class="form-label-group">
            <input type="email" name="email" id="inputEmail" class="form-control" required
                   autofocus>
            <label for="inputEmail">Email address</label>
        </div>
        <div class="form-label-group">
            <input name="password" type="password" id="inputPassword" class="form-control"
                   required>
            <label for="inputPassword">Password</label>
        </div>
        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" name="remember" value="remember-me"> Remember me
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        <p class="mt-5 mb-3 text-muted text-center">&copy; 2017-2018</p>
        <p>
            <a class="btn btn-link" href="{{ route('admin.password.request') }}">
                Forgot Your Password?
            </a>
        </p>
    </form>
@stop
