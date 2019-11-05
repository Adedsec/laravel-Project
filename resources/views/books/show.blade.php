@extends('layouts.app')
@section('content')
    <div class="container">
        <div class=" main">
            <div class="card  ">
                <h5 class="card-header text-white bg-dark ">Informations</h5>
                <div class="card-body">
                    <h5 class="card-title">{{$book->name}}</h5>
                    <br>
                    <p><strong>ISBN : </strong> {{$book->ISBN}}</p>
                    <p><strong>pages : </strong> {{$book->pages}}</p>
                    <p><strong>price : </strong> {{$book->price}}</p>
                    <p><strong>Publish Date : </strong> {{$book->published_at}}</p>
                    <p><strong>User : </strong> {{$book->user->name}}</p>
                    <div>
                        <strong>Authors : </strong>
                        @foreach($book->authors as $author)
                            <em>
                                {{$author->name.','}}
                            </em>
                        @endforeach

                    </div>

                    <div class="mt-3">

                        <strong>Categories : </strong>
                        @foreach($book->categories as $category)
                            <em>
                                {{$category->name.','}}
                            </em>
                        @endforeach
                    </div>

                </div>
            </div>
            <div>

            </div>
        </div>
    </div>
@endsection

