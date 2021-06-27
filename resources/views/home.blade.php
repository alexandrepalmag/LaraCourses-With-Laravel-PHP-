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
        <div class="row center-align">
            <ul class="pagination ">
                {{-- Previous Page Link --}}
                @if ($courses->onFirstPage()) 
                <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
                @else
                <li class="waves-effect"><a href="{{ $courses->previousPageUrl() }}"><i class="material-icons">chevron_left</i></a></li>
                @endif
            
                {{-- Page Number Links --}}
                @for($i=1; $i<=$courses->lastPage(); $i++)
                    @if($i==$courses->currentPage())
                        <li class="active cyan darken-4"><a href="?page={{$i}}">{{$i}}</a></li>
                    @else
                        <li class="waves-effect"><a href="?page={{$i}}">{{$i}}</a></li>
                    @endif
                @endfor
            
                {{-- Next Page Link --}}
                @if ($courses->hasMorePages())
                <li class="waves-effect"><a href="{{ $courses->nextPageUrl() }}"><i class="material-icons">chevron_right</i></a></li>
                @else
                <li class="disabled"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
                @endif
            </ul>
        </div>
    </div>
@endsection
