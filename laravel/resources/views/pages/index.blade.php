@extends('layouts.app')


@section('content')
    <div class="jumbotron text-center">
        <h1>{{$title}}</h1>
		<p>This is a Laravel app </p>
        <p><a class="btn btn-primary btn-lg" href="{{ route('login') }}"" role="button">{{ __('Login') }}</a> <a class="btn btn-success btn-lg" href="{{ route('register') }}" role="button">{{ __('Register') }}</a></p>
    </div>
@endsection

