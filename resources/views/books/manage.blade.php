@include('.partials.header')
<section>
    <div class="container">
        <div class="row">
            @foreach($books as $book)
                <div class="col-md-3">
                    <h2>{{ $book->title }}</h2>
                </div>
            @endforeach
        </div>
    </div>
</section>
@include('.partials.footer')
