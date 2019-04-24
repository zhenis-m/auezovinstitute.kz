<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use App\Book;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    //Dashboard
    public function dashboard () {
        return view('admin.dashboard', [
            'articles' => Article::LastArticles(5),
            'books' => Book::LastBooks(5),
            'count_books' => Book::count(),
            'count_articles' => Article::count(),
        ]);

    }
}
