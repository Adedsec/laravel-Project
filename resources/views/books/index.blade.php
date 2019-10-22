@extends('layouts.app')

@section('content')

    <div class="container">
        <div class=" main">
            <div class="card text-white bg-dark">
                <h5 class="card-header">Books List</h5>
                <div class="card-body">
                    <div class="list-group ist-group-item-dark">
                        @foreach($books as $book)
                            <a href={{'/books/'.$book->id}}} class="list-group-item list-group-item-action">
                                {{$book->name}}
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
