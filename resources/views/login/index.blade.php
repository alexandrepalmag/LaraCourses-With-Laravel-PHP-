@extends('layout.site')

@section('title', 'Courses')

@section('content')
    <div class="container">
        <h3 class="center">Login</h3>

        <div class="row">

            <form class="" action="{{ route('site.login.enter') }}" method="POST">

                {{ csrf_field() }}

                <div class="input-field">
                    <input type="text" name="email">
                    <label>E-mail</label>
                </div>

                <div class="input-field">
                    <input type="password" name="password">
                    <label>Password</label>
                </div>

                <a href="{{ route('site.home') }}" class="btn amber darken-3 waves-effect waves-light"><i
                        class="material-icons left">cancel</i>Cancel</a>

                <button class="btn cyan darken-3 waves-effect waves-light"><i
                        class="material-icons left">cloud</i>Enter</button>

            </form>

        </div>

    </div>

@endsection
