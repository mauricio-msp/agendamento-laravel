@extends('backend::layouts.master')

@section('content')
    <div class="signin cf">
        <div class="avatar"></div>
        <form method="post" action="{{ route('admin.password.email') }}">
            <div class="inputrow">
                <input name="email" type="text" id="name" placeholder="{{trans('backend::auth.email')}}"/>
                <label class="ion-person" for="name"></label>
            </div>
            <p>
                <input class="btn-block" type="submit" value="{{trans('backend::auth.submit')}}"/>
            </p>

        </form>
    </div>
@endsection
