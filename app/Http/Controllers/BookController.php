<?php

namespace App\Http\Controllers;

use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::OrderBy('id')->paginate(6);

        return view('books.index', compact('books'));
    }

    public function show(int $id)
    {
        $book = Book::findOrFail($id);

        return view('books.show', compact('book'));
    }
}
