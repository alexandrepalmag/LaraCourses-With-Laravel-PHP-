@extends('layout.site')

@section('title', 'Courses')

@section('content')
    <div class="container">
        <h3 class="center">Courses List</h3>

        <div class="row">

            <div class="row">
                @foreach ($courses as $course)
                    <div class="col s12 m4">
                        <div class="card">
                            <div class="card-image">
                                <img src="{{ asset($course->image) }}">
                            </div>
                            <div class="card-content">
                                <h4>{{ $course->title }}</h4>
                                <p>{{ $course->description }}</p>
                            </div>
                            <div class="card-action">
                                <a href="#">See more details...</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>

@endsection
