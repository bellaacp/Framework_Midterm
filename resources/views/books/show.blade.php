@extends('layouts.app')

@section('content')
  <div class="show-wrap">
    <div class="show-cover-wrap">
      <img src="{{ asset($book->cover ?? 'images/placeholder.jpg') }}"
           alt="{{ $book->title }}"
           class="show-cover">
    </div>

    <div class="flex-1">
      <h1 class="text-2xl font-semibold">{{ $book->title }}</h1>
      <p class="review-meta mb-4">{{ $book->author }}</p>
      <p class="mb-6">{{ $book->description ?? 'No description provided.' }}</p>

      @php
       if ($book->relationLoaded('reviews')) {
          $reviews = $book->reviews;
        } else {
          $reviews = $book->reviews()->with('user')-latest->get();
        }

      if (auth()->check()) {
          $userReview = $reviews->firstWhere('user_id', auth()->id());
        } else {
          $userReview = null;
        }

        if ($userReview) {
          $otherReviews = $reviews->where('id', '!=', $userReview->id);
        } else {
          $otherReviews = $reviews;
        }
      @endphp

      @auth
        <h3 class="section-title">Your review</h3>

        @if ($userReview)
          <div class="review-card mb-8">
            <div class="review-head">
              <div>
                <div class="font-semibold">
                  {{ $userReview->user->name ?? 'You' }}
                  <span class="review-meta">• {{ $userReview->created_at->diffForHumans() }}</span>
                </div>
                <div class="review-meta">Rating: {{ $userReview->rating }} / 5</div>
                @if ($userReview->review)
                  <p class="review-text">{!! nl2br(e($userReview->review)) !!}</p>
                @endif
              </div>

              <div class="review-actions">
                <a href="{{ route('reviews.edit', ['book' => $book, 'review' => $userReview]) }}"
                   class="btn btn-ghost text-sm">Edit</a>

                <form action="{{ route('reviews.destroy', ['book' => $book, 'review' => $userReview]) }}"
                      method="POST" class="inline">
                  @csrf @method('DELETE')
                  <button type="submit" class="btn btn-ghost text-sm"
                          onclick="return confirm('Delete review?')">Delete</button>
                </form>
              </div>
            </div>
          </div>
        @else
          <div class="review-card mb-8">
            <form action="{{ route('reviews.store', $book) }}" method="POST">
              @csrf
              <div class="mb-3">
                <label class="block text-sm mb-1">Rating</label>
                <select name="rating" required class="select w-28">
                  <option value="">Rate</option>
                  @for($i=1;$i<=5;$i++)
                    <option value="{{ $i }}">{{ $i }}</option>
                  @endfor
                </select>
              </div>

              <div class="mb-3">
                <label class="block text-sm mb-1">Review</label>
                <textarea name="review" rows="4" class="textarea" placeholder="Write your thoughts..."></textarea>
              </div>

              <button type="submit" class="btn btn-mint font-normal">Add Review</button>
            </form>
          </div>
        @endif
      @endauth

      <h3 class="section-title">Other Reviews</h3>

      @guest
        <p class="review-meta mb-3">
          Please <a href="{{ route('register') }}" class="underline text-[#2E4739]">login</a> to add your review.
        </p>
      @endguest

      <div class="space-y-4">
        @forelse($otherReviews as $review)
          <div class="review-card">
            <div class="review-head">
              <div>
                <div class="font-semibold">
                  {{ $review->user->name ?? 'Anonymous' }}
                  <span class="review-meta">• {{ $review->created_at->diffForHumans() }}</span>
                </div>
                <div class="review-meta">Rating: {{ $review->rating }} / 5</div>
                @if ($review->review)
                  <p class="review-text">{!! nl2br(e($review->review)) !!}</p>
                @endif
              </div>
            </div>
          </div>
        @empty
          <p class="review-meta">No reviews yet.</p>
        @endforelse
      </div>
    </div>
  </div>
@endsection
