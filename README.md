## Framework Programming Midterm - Bella Angeline Chong Puteri (5025231073)
### YouTube Link: https://youtu.be/IJNK_5uS1Z8

**Bookmarked** is an inviting book review website that features 15 of my favorite books. This platform allows visitors to explore these books, discover new reads, and engage with reviews from fellow readers.

## Overview

- **Public browsing**: Anyone can view the curated list and read book details and reviews.
- **Auth**: Sign in with Breeze to add, edit, and delete **your own** review.
- **Simple UI**: Tailwind styles are organized into app.css classes for cleaner Blade files.
- **Seeded content**: Preloaded with 15 books and can be used immediately. 


## Features

### For guests (no login required)
- View the full **Book List** grid.
- Open **Book Detail** pages with description, and existing reviews from other users.

### For authenticated users
- **Add a review** (rating 1–5 and optional text).
- **Edit/Delete** only your own review.
- Basic book management (create/edit/delete).

### Implementation Details
- **Laravel** for **Breeze** for easy authentication setup.
- **Tailwind CSS** (with reusable classes in `resources/css/app.css`).
- **Eloquent** one-to-many: `Book` has many `Review`; `Review` belongs to `Book` and `User`.
- **Nested routes** for reviews: `books/{book}/reviews/{review}` with scoped bindings.

