<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function store(Request $request, Book $book)
    {
        $data = $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'review' => 'nullable|string',
        ]);

        $already = Review::where('book_id', $book->id)
            ->where('user_id', Auth::id())
            ->exists();

        if ($already) {
            return back()->with('success', 'You already reviewed this book.');
        }

        $book->reviews()->create([
            'user_id' => Auth::id(),
            'rating' => $data['rating'],
            'review' => $data['review'] ?? null,
        ]);

        return redirect()->route('books.show', $book)
            ->with('success', 'Review added successfully.');
    }

    public function edit(Book $book, Review $review)
    {
        if ($review->user_id !== Auth::id()) {
            abort(403, 'You do not have permission to edit this review.');
        }

        return view('reviews.edit', compact('review', 'book'));
    }

    public function update(Request $request, Book $book, Review $review)
    {
        if ($review->user_id !== Auth::id()) {
            abort(403, 'You do not have permission to update this review.');
        }

        $data = $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'review' => 'nullable|string',
        ]);

        $review->update($data);

        return redirect()->route('books.show', $book)
            ->with('success', 'Review updated successfully.');
    }

    public function destroy(Book $book, Review $review)
    {
        if ($review->user_id !== Auth::id()) {
            abort(403, 'You do not have permission to delete this review.');
        }

        $review->delete();

        return redirect()->route('books.show', $book)
            ->with('success', 'Review deleted successfully.');
    }
}
