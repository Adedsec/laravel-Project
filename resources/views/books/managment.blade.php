@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card main">
        <div class="row">
            <div class="col-6">
                <div class="card">
                    <div class="card-header text-white bg-dark ">
                        Add Category
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{route('addCategoryRoute')}}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="name">name </label>
                                <input type="text" class="form-control" name="name" value="{{old('name')}}" id="name"
                                       aria-describedby="emailHelp" placeholder="Enter name">
                            </div>
                            <button type="submit" class="btn btn-primary">save</button>
                            {{--                    @include('books.validation_error')--}}
                        </form>
                    </div>
                </div>

            </div>

            <div class="col-6">
                <div class="card">
                    <div class="card-header text-white bg-dark ">
                        Add Author
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{route('addAuthorRoute')}}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="name">name</label>
                                <input type="text" class="form-control" name="name" value="{{old('name')}}" id="name"
                                       aria-describedby="emailHelp" placeholder="Enter name">
                            </div>

                            <div class="form-group">
                                <label for="name"> Birthday </label>
                                <input type="date" class="form-control" name="birthday" value="{{old('birthday')}}" id="name"
                                       aria-describedby="emailHelp" placeholder="Enter name">
                            </div>


                            <button type="submit" class="btn btn-primary">save</button>
                            {{--                    @include('books.validation_error')--}}
                        </form>
                    </div>
                </div>

            </div>
        </div>



    </div>
</div>

@endsection
