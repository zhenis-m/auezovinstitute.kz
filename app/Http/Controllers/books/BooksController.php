<?php

namespace App\Http\Controllers\books;

use App\Book;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BooksController extends Controller
{
    public function index()
    {
        $books = Book::orderBy('id', 'desc')->paginate(36);

        return view('books.index', [
            'books' => $books
        ]);
    }



    public function show($id)
    {
        $book = Book::where('id', $id)->first();

        return view('books.show', [
            'book' => $book
        ]);
    }
}
