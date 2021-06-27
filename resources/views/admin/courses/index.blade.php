@extends('layout.site')

@section('title', 'Courses')

@section('content')
    <div class="container">
        <h3 class="center">Courses List</h3>

        <div class="row">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Published</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($registers as $register)
                        <tr>
                            <td>{{ $register->id }}</td>
                            <td>{{ $register->title }}</td>
                            <td>{{ $register->description }}</td>
                            <td><img height="50" src="{{ asset($register->image) }}" alt="{{ $register->image }}"></td>
                            <td>{{ $register->published }}</td>
                            <td>
                                <a class="btn cyan darken-4"
                                    href="{{ route('admin.courses.edit', $register->id) }}">Edit</a>
                                <a class="btn red darken-4"
                                    href="{{ route('admin.courses.delete', $register->id) }}">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="row">
            <a class="btn cyan darken-3" href="{{ route('admin.courses.add') }}">Add New Course</a>
        </div>
    </div>

@endsection
