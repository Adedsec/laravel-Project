@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card main ">
            <div class="card-header text-white bg-dark ">
                Create Product
            </div>
            <div class="card-body">

                <form method="POST" action="{{route('storeRoute')}}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name">name </label>
                        <input type="text" class="form-control" name="name" value="{{old('name')}}" id="name"
                               aria-describedby="emailHelp" placeholder="Enter name">
                    </div>
                    <div class="form-group">
                        <label for="pages">Pages</label>
                        <input type="number" class="form-control" name="pages" value="{{old('pages')}}"
                               id="pages" placeholder="Enter pages count">
                    </div>
                    <div class="form-group">
                        <label for="price">price</label>
                        <input type="number" class="form-control" name="price" value="{{old('price')}}" id="price"
                               placeholder="Enter price">
                    </div>
                    <div class="form-group">
                        <label for="isbn">ISBN</label>
                        <input type="text" class="form-control" name="ISBN" value="{{old('ISBN')}}" id="isbn"
                               placeholder="Enter ISBN">
                    </div>
                    <div class="form-group">
                        <label for="published_at">Publish Date</label>
                        <input type="date" class="form-control" name="published_at" value="{{old('published_at')}}"
                               id="published_at"
                               placeholder="Enter publish date">
                    </div>
                    <button type="submit" class="btn btn-success">Save</button>
                    @include('books\validation_error')
                </form>
            </div>
        </div>
    </div>


@endsection
