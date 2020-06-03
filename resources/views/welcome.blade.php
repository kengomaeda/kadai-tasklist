@extends('layouts.app')

@section('content')
    @if (Auth::check())
        {{-- Auth::user()->name --}}
        {{--ここでindex.blade.phpを読み込む--}}
        @include('tasks.index', ['tasks' => $tasks])
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>ログイン画面</h1>
                {!! link_to_route('signup.get', 'Sign up now!', [], ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
        </div>
    @endif
@endsection