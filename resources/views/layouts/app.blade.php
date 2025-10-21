<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Bookmarked</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  @vite('resources/css/app.css')
</head>
<body>
  <nav class="navbar">
    <div class="flex items-center gap-3">
      <a href="{{ url('/') }}" class="brand">Bookmarked</a>

      @if (request()->routeIs('books.show') || request()->routeIs('reviews.*'))
        <a href="{{ route('books.index') }}" class="btn btn-mint font-normal">Home</a>
      @endif
    </div>

    <div class="nav-actions">
      @guest
        <a href="{{ route('login') }}" class="btn btn-mint">Login</a>
        <a href="{{ route('register') }}" class="btn btn-mint">Register</a>
      @else
        <span class="nav-greeting mr-2">Hi, {{ Auth::user()->name }}</span>
        <form action="{{ route('logout') }}" method="POST" class="inline">
          @csrf
          <button type="submit" class="btn btn-mint font-normal">Logout</button>
        </form>
      @endguest
    </div>
  </nav>

  <main class="main">
    <div class="container-narrow">
      @if(session('success'))
        <div class="flash-success">{{ session('success') }}</div>
      @endif

      @yield('content')
    </div>
  </main>
</body>
</html>
