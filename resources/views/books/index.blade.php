@extends('layouts.app')

@section('content')

    <div class="container">
        <div class=" main">
            <div class="card text-white bg-dark">
                <h5 class="card-header">Books List</h5>
                <div class="card-body">
                    <table class="table table-dark">
                        <tr>
                            <th>
                                name
                            </th>
                            <th>
                                price
                            </th>
                            <th>
                                ISBN
                            </th>
                            <th>
                                publish date
                            </th>
                            <th>

                            </th>
                        </tr>
                        @foreach($books as $book)
                            <tr>
                                <td><a href={{'/books/'.$book->id}}} class="">
                                        {{$book->name}}
                                    </a></td>
                                <td>
                                    <p>{{$book->price}}</p>
                                </td>
                                <td>
                                    <p>{{$book->ISBN}}</p>
                                </td>
                                <td>
                                    <p>{{$book->published_at}}</p>
                                </td>
                                <td>
                                    <a href="{{Route('editRoute',['id'=>$book->id])}}" class="btn btn-primary">Edit</a>
                                </td>
                            </tr>

                        @endforeach
                    </table>



                </div>
            </div>

        </div>
    </div>

@endsection
