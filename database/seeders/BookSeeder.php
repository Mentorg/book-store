<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $books = [
            [
                'title' => "Purple Hund",
                'author' => "Amiya Bridges",
                'publisher' => "Crown Publishing",
                'isbn' => "9781234567897",
                'genre' => "Science Fiction, Mystery",
                'publication_year' => "1920",
                'description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac diam porta, euismod
                                    lacus non, tempus purus. Quisque bibendum vestibulum sapien, feugiat viverra quam
                                    varius a.",
                'image' => asset('images/book-cover.jpg'),
                'price' => '80.00'
            ],
            [
                'title' => "An Inconvenient Flame",
                'author' => "Jaidyn Everett",
                'publisher' => "Tin House Books",
                'isbn' => "0971833028",
                'genre' => "Novel, Romance",
                'publication_year' => "2015",
                'description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac diam porta, euismod
                                    lacus non, tempus purus. Quisque bibendum vestibulum sapien, feugiat viverra quam
                                    varius a.",
                'image' => asset('images/book-cover.jpg'),
                'price' => '80.00'
            ],
            [
                'title' => "Made of Steel",
                'author' => "Erick Mora",
                'publisher' => "Comma Press",
                'isbn' => "9786365302102",
                'genre' => "Horror, Mystery",
                'publication_year' => "1955",
                'description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac diam porta, euismod
                                    lacus non, tempus purus. Quisque bibendum vestibulum sapien, feugiat viverra quam
                                    varius a.",
                'image' => asset('images/book-cover.jpg'),
                'price' => '80.00'
            ],
            [
                'title' => "Sign of the Dead",
                'author' => "Jane Glenn",
                'publisher' => "Zed Books",
                'isbn' => "9784099034481",
                'genre' => "Novel, Horror",
                'publication_year' => "2002",
                'description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac diam porta, euismod
                                    lacus non, tempus purus. Quisque bibendum vestibulum sapien, feugiat viverra quam
                                    varius a.",
                'image' => asset('images/book-cover.jpg'),
                'price' => '80.00'
            ],
            [
                'title' => "After the Future",
                'author' => "Amiya Bridges",
                'publisher' => "Crown Publishing",
                'isbn' => "9788022754194",
                'genre' => "Mystery, Drama",
                'publication_year' => "1958",
                'description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac diam porta, euismod
                                    lacus non, tempus purus. Quisque bibendum vestibulum sapien, feugiat viverra quam
                                    varius a.",
                'image' => asset('images/book-cover.jpg'),
                'price' => '80.00'
            ],
            [
                'title' => "The Fracture Temple",
                'author' => "Jaidyn Everett",
                'publisher' => "Tin House Books",
                'isbn' => "9788789285474",
                'genre' => "History, Novel",
                'publication_year' => "1976",
                'description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac diam porta, euismod
                                    lacus non, tempus purus. Quisque bibendum vestibulum sapien, feugiat viverra quam
                                    varius a.",
                'image' => asset('images/book-cover.jpg'),
                'price' => '80.00'
            ],
            [
                'title' => "The Bloodless Fortress",
                'author' => "Erick Mora",
                'publisher' => "Comma Press",
                'isbn' => "9784989130125",
                'genre' => "Horror, Thriller",
                'publication_year' => "1980",
                'description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac diam porta, euismod
                                    lacus non, tempus purus. Quisque bibendum vestibulum sapien, feugiat viverra quam
                                    varius a.",
                'image' => asset('images/book-cover.jpg'),
                'price' => '80.00'
            ],
            [
                'title' => "Queen of Hyperion",
                'author' => "Jane Glenn",
                'publisher' => "Zed Books",
                'isbn' => "9782555149984",
                'genre' => "Novel, Adventure",
                'publication_year' => "2010",
                'description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac diam porta, euismod
                                    lacus non, tempus purus. Quisque bibendum vestibulum sapien, feugiat viverra quam
                                    varius a.",
                'image' => asset('images/book-cover.jpg'),
                'price' => '80.00'
            ],
        ];

        foreach ($books as $book) {
            Book::create($book);
        }
    }
}
