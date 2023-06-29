<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class BookController extends Controller
{
    public function index() {
        $books = Book::orderBy('name')->get();
        
        return inertia('Book/Index', [
            'books' => $books
        ]);
    }

    public function create()    {
        return inertia('Book/BookCreate');
    }

    public function store(Request $request) {
        $validatedData = $request->validate([
            'name' => 'required',
            'genre' => 'required',
            'isbn' => 'required',
            'author' => 'required',
            'description' => 'required',
        ]);

        Book::create($validatedData);

        return redirect(route('book.index'));
    }
}
