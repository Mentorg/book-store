<?php

namespace App\Services;

use App\Filters\Search;
use App\Interfaces\BookInterface;
use App\Repositories\BookRepository;
use Illuminate\Support\Facades\Validator;
use Samushi\QueryFilter\Facade\QueryFilter;

class BookService implements BookInterface
{
    protected $bookRepository;

    public function __construct(BookRepository $bookRepository)
    {
        $this->bookRepository = $bookRepository;
    }

    public function filters()
    {
        return [
            new Search(['title', 'author', 'isbn'])
        ];
    }

    public function all(int $count = 10)
    {
        return QueryFilter::query($this->bookRepository->all(), $this->filters())
            ->orderBy('id', 'desc')->paginate($count);
    }

    public function create(array $data)
    {
        return $this->bookRepository->create($data);
    }

    public function read($model)
    {
        return $this->bookRepository->read($model);
    }

    public function update($data, $model)
    {
        return $this->bookRepository->update($data, $model);
    }

    public function delete($model)
    {
        return $this->bookRepository->delete($model);
    }
}
