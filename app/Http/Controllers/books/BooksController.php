<?php

namespace App\Http\Controllers\books;

use App\Book;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Inst;

class BooksController extends Controller
{
    public function index()
    {
        $books = Book::orderBy('id', 'desc')->where('published', 1)->paginate(36);
         $aboutses = Inst::orderBy('id', 'desc')->where('published', 1)->paginate(12);
        return view('books.index', [
            'books' => $books,
             'aboutses' => $aboutses,
        ]);
    }



    public function show($id)
    {
        $bok = Book::where('id', $id)->first();
         $aboutses = Inst::orderBy('id', 'desc')->where('published', 1)->paginate(12);
        return view('books.show', [
            'bok' => $bok,
            'aboutses' => $aboutses,
        ]);
    }
}
