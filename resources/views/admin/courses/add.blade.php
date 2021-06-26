@extends('layout.site')

@section('title', 'Courses')

@section('content')
    <div class="container">
        <h3 class="center">Add Course</h3>

        <div class="row">

            <form class="" action="{{ route('admin.courses.save') }}" method="POST" enctype="multipart/form-data">

                {{ csrf_field() }}

                @include('admin.courses._form')

                <a href="{{ route('admin.courses') }}" class="btn red darken-4 waves-effect waves-light"><i
                        class="material-icons left">cancel</i>Cancel</a>

                <button class="btn cyan darken-3 waves-effect waves-light"><i
                        class="material-icons left">cloud</i>Save</button>

            </form>

        </div>

    </div>

@endsection
