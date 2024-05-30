<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $auth = Auth::user();
        $books = Book::all();
        $data = [
            'auth' => $auth,
            'books' => $books,
        ];

        return view('pages.books.get', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $auth = Auth::user();
        $data = [
            'auth' => $auth,
        ];
        return view('pages.books.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'isbn' => ['required', 'unique:books'],
            'title' => ['required'],
            'type' => ['required'],
            'author' => ['required'],
            'publisher' => ['required']
        ]);

        $newBook = new Book();
        $newBook->isbn = $request->isbn;
        $newBook->title = $request->title;
        $newBook->type = $request->type;
        $newBook->author = $request->author;
        $newBook->publisher = $request->publisher;
        $newBook->save();

        return redirect()->route('books');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit($book_id)//Book $book)
    {
        $auth = Auth::user();
        $book = Book::where('id', $book_id)->first();

        $data = [
            'auth' => $auth,
            'book' => $book,
        ];
        return view('pages.books.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        $this->validate($request, [
            'book_id' => ['required', 'exists:books,id'],
            'isbn' => ['required'],
            'title' => ['required'],
            'type' => ['required'],
            'author' => ['required'],
            'publisher' => ['required'],
        ]);

        $newBook = Book::where('id', $request->book_id)->first();
        $newBook->isbn = $request->isbn;
        $newBook->title = $request->title;
        $newBook->type = $request->type;
        $newBook->author = $request->author;
        $newBook->publisher = $request->publisher;
        $newBook->save();

        return redirect()->route('books');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy($book_id)
    {
        $newBook = Book::where('id', $book_id)->first();
        $newBook->delete();
        return redirect()->route('books');
    }
}
