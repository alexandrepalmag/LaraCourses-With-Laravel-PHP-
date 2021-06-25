@extends('layout.site')

@section('title', 'Courses')

@section('content')
    <div class="container">
        <h3 class="center">Add Course</h3>

        <div class="row">

            <form class="" action="{{ route('admin.courses.add') }}" method="POST" enctype="multipart/form-data">

                {{ csrf_field() }}

                @include('admin.courses._form')

                <a href="#" class="btn cyan darken-3">Save</a>

            </form>

        </div>

    </div>

@endsection
