@extends('layout.site')

@section('title', 'Courses')

@section('content')
    <div class="container">
        <h3 class="center">Add Course</h3>

        <div class="row">

            <form class="" action="{{ route('admin.courses.save') }}" method="POST" enctype="multipart/form-data">

                {{ csrf_field() }}

                @include('admin.courses._form')

                <button class="btn cyan darken-3">Save</button>

            </form>

        </div>

    </div>

@endsection
