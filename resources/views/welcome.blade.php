<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookmarked</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body>

    <section 
    class="relative h-[70vh] flex flex-col justify-center items-center text-center bg-cover bg-center"
    style="background-image: url('{{ asset('images/books.jpg') }}');">
    <div class="absolute inset-0 bg-black/40"></div>

    <h1 class="relative text-5xl md:text-6xl font-semibold text-white">
        Welcome to <span class="text-[#BAD9C3]">Bookmarked</span>
    </h1>

  <p class="relative text-sm md:text-base text-gray-200 mt-4">
  Hi there! I'm Bella, an avid reader and book lover. Bookmarked is a cozy little site<br>
  where I share my 15 favorite books and invite the world to share their thoughts and reviews!
  </p>

    <div class="absolute top-6 right-8 flex gap-4">
        <a href="{{ route('books.index') }}" class="btn btn-mint">View Books</a>
      <a href="{{ route('login') }}" class="btn btn-mint">Login</a>
      <a href="{{ route('register') }}" class="btn btn-mint">Register</a>
    </div>
  </section>

  <section class="py-16">
    <h2 class="text-2xl font-semibold text-center mb-10">CURRENT TOP 5 FAVORITES</h2>
    <div class="flex justify-center gap-20 flex-wrap">
      <img src="{{ asset('images/thelongwalk.jpg') }}" alt="The Long Walk" class="w-40 rounded-lg shadow-md hover:scale-105 transition">
      <img src="{{ asset('images/midnightlibrary.jpg') }}" alt="The Midnight Library" class="w-40 rounded-lg shadow-md hover:scale-105 transition">
      <img src="{{ asset('images/mockingbird.jpg') }}" alt="To Kill a Mockingbird" class="w-40 rounded-lg shadow-md hover:scale-105 transition">
      <img src="{{ asset('images/lapnova.jpg') }}" alt="Lapvona" class="w-40 rounded-lg shadow-md hover:scale-105 transition">
      <img src="{{ asset('images/shadowticket.jpg') }}" alt="Shadow Ticket" class="w-40 rounded-lg shadow-md hover:scale-105 transition">
    </div>
  </section>

</body>
</html>
