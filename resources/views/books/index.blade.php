@extends('layouts.app')

@section('content')
  <h2 class="page-title">Book List</h2>

  <div class="books-grid">
    @foreach($books as $book)
      <div class="book-card">
        <img src="{{ asset($book->cover) }}" alt="{{ $book->title }}" class="book-cover">
        <p class="book-title">{{ $book->title }}</p>
        <p class="book-author">{{ $book->author }}</p>
        <a href="{{ route('books.show', $book) }}" class="pill pill-mint">View Details</a>
      </div>
    @endforeach
  </div>

  @if(method_exists($books,'links'))
    <div class="pagination">{{ $books->onEachSide(1)->links() }}</div>
  @endif
@endsection
