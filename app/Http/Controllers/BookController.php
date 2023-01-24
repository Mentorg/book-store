<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use App\Interfaces\BookInterface;
use App\Models\Book;
use App\Services\BookService;
use Exception;
use Illuminate\Http\Request;

class BookController extends Controller
{
    private $bookService;

    public function __construct(BookInterface $bookService)
    {
        $this->bookService = $bookService;
    }

    public function index()
    {
        return view('books.index', ['books' => $this->bookService->all()]);
    }

    public function create()
    {
        $this->authorize('create: book');
        return view('books.create');
    }

    public function store(StoreBookRequest $request)
    {
        return redirect('/')->with([$this->bookService->create($request->validated())]);
    }

    public function show(Book $book)
    {
        return view('books.show', ['books' => $this->bookService->read($book->id)]);
    }

    public function edit(Book $book)
    {
        $this->authorize('update: book');
        return view('books.edit', compact('book'));
    }

    public function update(UpdateBookRequest $request, Book $book)
    {
        return redirect('/')->with([$this->bookService->update($request, $book->id)]);
    }

    public function destroy(Book $book)
    {
        $this->authorize('delete: book');
        return redirect('/')->with([$this->bookService->delete($book->id), $book]);
    }
}
