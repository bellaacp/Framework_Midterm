@extends('layouts.app')

@section('content')
  <div class="edit-container">
    <div class="card-lg">
      <h2 class="form-title">Edit Your Review</h2>

      <form action="{{ route('reviews.update', ['book' => $review->book, 'review' => $review]) }}"
            method="POST" class="form-stack">
        @csrf @method('PUT')

        <div>
          <label class="form-label">Rating</label>
          <select name="rating" class="select select-sm">
            @for ($i = 5; $i >= 1; $i--)
              <option value="{{ $i }}" @selected(old('rating', $review->rating) == $i)>{{ $i }}</option>
            @endfor
          </select>
        </div>

        <div>
          <label class="form-label">Review</label>
          <textarea name="review" rows="4" class="textarea">{{ old('review', $review->review) }}</textarea>
        </div>

        <div class="form-actions">
          <button class="btn btn-mint">Update</button>
          <a href="{{ route('books.show', $review->book) }}" class="btn btn-ghost">Cancel</a>
        </div>
      </form>
    </div>
  </div>
@endsection
