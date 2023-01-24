@include('.partials.header')
<section class="book-page">
    <div class="container">
        <div class="row">
            @foreach($books as $book)
                <div class="col-md-6 col-lg-6 mt-5">
                    <div class="book-image">
                        <img src="{{ asset($book->image) }}" alt="Book cover">
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 mt-5">
                    <div class="book-details">
                        <h2 class="text-start">{{ $book->title }}</h2>
                        <p class="mt-2">{{ $book->description }}</p>
                        <h3 class="mt-4">Price ${{ $book->price }}</h3>
                    </div>
                    <table class="table table-bordered mt-5">
                        <tbody>
                        <tr>
                            <td>Title</td>
                            <td>{{ $book->title }}</td>
                        </tr>
                        <tr>
                            <td>Author</td>
                            <td>{{ $book->author }}</td>
                        </tr>
                        <tr>
                            <td>Publisher</td>
                            <td>{{ $book->publisher }}</td>
                        </tr>
                        <tr>
                            <td>ISBN</td>
                            <td>{{ $book->isbn }}</td>
                        </tr>
                        <tr>
                            <td>Genre</td>
                            <td>{{ $book->genre }}</td>
                        </tr>
                        <tr>
                            <td>Publication Year</td>
                            <td>{{ $book->publication_year }}</td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="book-options d-flex">
                        @auth
                        @if(auth()->user()->can('update: book'))
                        <a class="btn me-3 btn-primary" href="{{ route('books.edit', $book->id) }}">Edit</a>
                        @endif
                        @if(auth()->user()->can('delete: book'))
                        <form action="{{ route('books.destroy', $book['id']) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                        @endif
                        @endauth
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@include('.partials.footer')
