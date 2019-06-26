<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;
use App\Author;
class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::all();
        return view('books.index')->with(compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    
    {   $authors = Author::all();
        return view('books.create')->with(compact('authors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $book = new Book;
        $book->isbn = $request->isbn;
        $book->title = $request->title;
        $book->genre = $request->genre;
        $book->author_id = $request->author_id;
        $book->publisher = $request->publisher;
        $book->save();
        return redirect('/books');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        return view('books.show')->with(compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        $authors = Author::all();
       
        return view('books.edit')->with(compact('book'))->with(compact('authors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        $book->isbn = $request->isbn;
        $book->title = $request->title;
        $book->genre = $request->genre;
        $book->author_id = $request->author_id;
        $book->publisher = $request->publisher;
        $book->save();
        return redirect("/books/{$book->id}");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect('/books');
    }
}
