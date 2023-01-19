@include('.partials.header')
<section class="store-book mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12 w-50 mt-center">
                <form method="POST" action="{{ route('books.update', $book['id']) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="mb-3">
                        <img src="{{ asset($book->image) }}" alt="Book cover">
                        <label for="image" class="form-label mt-5">Book Image</label>
                        <input class="form-control" name="image" type="file" id="image" value="{{ old('image', $book->image) }}">
                    </div>
                    <div class="mb-3">
                        <label for="title" class="form-label">Book Title</label>
                        <input type="text" name="title" class="form-control" id="title" aria-describedby="bookTitle" value="{{ old('title', $book->title) }}">
                    </div>
                    <div class="mb-3">
                        <label for="author" class="form-label">Author</label>
                        <input type="text" name="author" class="form-control" id="author" aria-describedby="bookAuthor">
                    </div>
                    <div class="mb-3">
                        <label for="publisher" class="form-label">Publisher</label>
                        <input type="text" name="publisher" class="form-control" id="publisher" aria-describedby="bookPublisher">
                    </div>
                    <div class="mb-3">
                        <label for="isbn" class="form-label">ISBN</label>
                        <input type="text" name="isbn" class="form-control" id="isbn" value="{{ old('isbn', $book->isbn) }}">
                    </div>
                    <div class="mb-3">
                        <label for="genre" class="form-label">Genre</label>
                        <input type="text" name="genre" class="form-control" id="genre" value="{{ old('genre', $book->genre) }}">
                    </div>
                    <div class="mb-3">
                        <label for="publication_year" class="form-label">Publication year</label>
                        <input type="text" name="publication_year" class="form-control" id="publication_year" value="{{ old('publication_year', $book->publication_year) }}">
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="number" name="price" class="form-control" id="price" value="{{ old('price', $book->price) }}">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Book Description</label>
                        <textarea class="form-control" name="description" id="description" rows="3">{{ old('description', $book->description) }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</section>
@include('.partials.footer')
