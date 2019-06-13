<?php

namespace App\Http\Controllers\books;

use App\Book;
use App\Culture;
use App\HalykUniversity;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Inst;

class BooksController extends Controller
{
    public function index()
    {
        $halyks = HalykUniversity::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $books = Book::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(36);
        $aboutses = Inst::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $cultures = Culture::orderBy('id', 'desc')->where('locale', \App::getLocale())->get();
        return view('books.index', [
            'halyks' => $halyks,
            'books' => $books,
            'aboutses' => $aboutses,
            'cultures' => $cultures
        ]);
    }



    public function show($id)
    {
        $halyks = HalykUniversity::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $bok = Book::where('id', $id)->first();
        $aboutses = Inst::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $cultures = Culture::orderBy('id', 'desc')->where('locale', \App::getLocale())->get();
        return view('books.show', [
            'halyks' => $halyks,
            'bok' => $bok,
            'aboutses' => $aboutses,
            'cultures' => $cultures
        ]);
    }

    public function show_book($id)
    {
        $halyks = HalykUniversity::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);

        $bok = Book::where('id', $id)->first();
        $aboutses = Inst::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $cultures = Culture::orderBy('id', 'desc')->where('locale', \App::getLocale())->get();
        return view('reader.index', [
            'halyks' => $halyks,
            'bok' => $bok,
            'aboutses' => $aboutses,
            'cultures' => $cultures
        ]);
    }
}
