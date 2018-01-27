@extends('backend::layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <a href="{{ route('admin.logout') }}"
               onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                Sair
            </a>
            <form id="logout-form" action="{{ route('admin.login') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <h1>You are logged in!</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
