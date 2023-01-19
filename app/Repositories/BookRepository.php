<?php

namespace App\Repositories;

use App\Interfaces\BookInterface;
use App\Models\Book;
use Illuminate\Support\Facades\Storage;

class BookRepository implements BookInterface
{
    private $book;

    public function __construct(Book $book)
    {
        $this->book = $book;
    }

    public function all()
    {
        return $this->book->newQuery();
    }

    public function create($data)
    {
        $book = new $this->book;
        $book->title = $data['title'];
        $book->author = $data['author'];
        $book->publisher = $data['publisher'];
        $book->isbn = $data['isbn'];
        $book->genre = $data['genre'];
        $book->publication_year = $data['publication_year'];
        $book->description = $data['description'];
        $book->image = $data['image']->store('covers', 'public');
        $book->price = $data['price'];
        $book->save();

        Storage::disk('covers')->put('', $data['image']);

        return $book->fresh();
    }

    public function read($model)
    {
        return $this->book->where('id', $model)->get();
    }

    public function update($data, $model)
    {
        $book = $this->book->find($model);
        $book->title = $data['title'];
        $book->author = $data['author'];
        $book->publisher = $data['publisher'];
        $book->isbn = $data['isbn'];
        $book->genre = $data['genre'];
        $book->publication_year = $data['publication_year'];
        $book->description = $data['description'];
        $book->image = $data['image']->store('covers', 'public');
        $book->price = $data['price'];
        $book->update();

        Storage::disk('covers')->put('', $data['image']);

        return $book;
    }

    public function delete($model)
    {
        $book = $this->book->find($model);
        $book->delete();

        return $book;
    }
}
