@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card main ">
            <div class="card-header text-white bg-dark ">
                Create Product
            </div>
            <div class="card-body">

                <form method="POST" action="{{route('updateRoute',['id'=>$book->id])}}">
                    {{ csrf_field() }}
                    @method('PATCH')
                    <div class="form-group">
                        <label for="name">name </label>
                        <input type="text" class="form-control" name="name" value="{{$book->name}}" id="name"
                               aria-describedby="emailHelp" placeholder="Enter name">
                    </div>
                    <div class="form-group">
                        <label for="pages">Pages</label>
                        <input type="number" class="form-control" name="pages" value="{{$book->pages}}"
                               id="pages" placeholder="Enter pages count">
                    </div>
                    <div class="form-group">
                        <label for="price">price</label>
                        <input type="number" class="form-control" name="price" value="{{$book->price}}" id="price"
                               placeholder="Enter price">
                    </div>
                    <div class="form-group">
                        <label for="isbn">ISBN</label>
                        <input type="text" class="form-control" name="ISBN" value="{{$book->ISBN}}" id="isbn"
                               placeholder="Enter ISBN">
                    </div>
                    <div class="form-group">
                        <label for="published_at">Publish Date</label>
                        <input type="date" class="form-control" name="published_at" value="{{$book->published_at}}"
                               id="published_at"
                               placeholder="Enter publish date">
                    </div>
                    <div class="form-group">
                        <label for="author">Author</label>
                        <select name="author_id[]" id="author" class="form-control" multiple>
                            @foreach($authors as $author)
                                <option value="{{$author->id}}" {{$book->authors->contains('id',$author->id)?'selected':''}}>{{$author->name}}</option>
                            @endforeach
                        </select>

                    </div>
                    <div class="form-group">
                        <label for="category">Category</label>
                        <select name="category_id[]" id="category" class="form-control" multiple>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}" {{$book->categories->contains('id',$category->id)?'selected':''}}>{{$category->name}}</option>
                            @endforeach
                        </select>

                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                    @include('books.validation_error')
                </form>
            </div>
        </div>
    </div>


@endsection
