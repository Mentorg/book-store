@include('.partials.header')
<section class="hero">
    <form>
        <div class="input-group mb-3">
            <form action="{{ route('books.index') }}" method="GET">
                <input type="text" class="form-control" name="search" placeholder="Search by title, author, ISBN.." aria-label="Search by title, author, ISBN.." aria-describedby="button-addon2" autofocus>
                <button class="btn btn-outline-secondary" type="button" id="button-addon2">
                    <ion-icon name="search-outline"></ion-icon>
                </button>
            </form>
        </div>
    </form>
</section>
<section class="books pblock-025">
    <div class="container">
        <div class="row">
            <div class="col-md-12 pblock-015">
                <h2>Best Selling Books</h2>
            </div>
            @foreach($books as $book)
                <div class="col-md-3 my-4">
                    <a class="d-flex flex-column text-decoration-none" href="{{ route('books.show', $book['id']) }}">
                        <img src="{{ asset($book->image) }}" alt="Book cover">
                        <div class="book-details my-2">
                            <h3>{{ $book->title }}</h3>
                            <p>by {{ $book->author }}</p>
                            <h6>${{ $book->price }}</h6>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>
<section class="newsletters pblock-025">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <article>
                    <img src="images/newsletter.jpg" alt="Girl reading book">
                    <div class="newsletter-form">
                        <h2>Subscribe to Our Newsletters</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit maxime deserunt sint temporibus nesciunt beatae facilis fuga quos odit, enim, praesentium possimus autem illo optio.</p>
                        <form method="post">
                            <input type="email" name="email" id="email" placeholder="Email Address">
                            <button type="submit"><ion-icon name="notifications-outline"></ion-icon> Subscribe</button>
                        </form>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>
@include('.partials.footer')
