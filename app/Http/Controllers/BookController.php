<?php

namespace App\Http\Controllers;
use App\Models\Book;


use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index() {
        $books = Book::orderBy('name')->get();
        
        return inertia('Book/Index', [
            'books' => $books
        ]);
    }
}
