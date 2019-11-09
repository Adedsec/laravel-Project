<?php

namespace App\Http\Controllers;

use App\Author;
use App\Book;
use App\Category;
use App\Http\Requests\BookStoreRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only(['create','edit']);
    }

    public function index()
    {
        $books = Book::with(['user'])->get();
        //dd($books);
        return view('books/index', compact('books'));
    }

    public function show($id)
    {
        $book = Book::with(['categories','authors'])->findOrFail($id);
        return view('books/show', compact('book'));
    }

    public function create()
    {
        $categories=Category::all();
        $authors=Author::all();
        return view('books.create',compact('categories','authors'));
    }

    public function store(BookStoreRequest $request)
    {

        //$book = Book::create($request->except('_token'));
        $book=Auth::user()->books()->create($request->except('_token'));
        $book->categories()->attach($request->get('category_id'));
        $book->authors()->attach($request->get('author_id'));
        return redirect('/books');
    }

    public function edit($id)
    {
        $book=Book::find($id);
        $categories=Category::all();
        $authors=Author::all();
        return view('books.edit',compact('book','categories','authors'));
    }

    public function update(Request $request,$id)
    {
        //find
        $book=Book::find($id);
        //update book
        $book->update($request->only(['name','price','pages','ISBN','published_at']));
        //update authors
        $book->authors()->sync($request->get('author_id'));
        //update categories
        $book->categories()->sync($request->get('category_id'));

        return redirect('/books');
    }
}
