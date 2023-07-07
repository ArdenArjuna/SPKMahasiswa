@extends('layouts.auth')

@section('content')
  <main class="form-signin">
    <img class="mb-4" src="{{ url('assets/img/logo.jpeg') }}" alt="Palm Tree" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Sign In</h1>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">



    <form action="{{ url('signin') }}" method="POST">
      @csrf

      <div class="form-floating">
        <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" id="username" placeholder="name@example.com" autocomplete="off" autofocus required>
        <label for="username">Username</label>

        @error('username')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>

      <div class="form-floating">
        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password" required>
        <label for="password">Password</label>

        @error('password')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>

      <div class="mb-2 @error('password') mt-4 @enderror">
        Don't have an account? 
        <a href="{{ url('signup') }}" class="text-decoration-none">Join Now!</a>
      </div>

      <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
      <p class="mt-3 mb-3 text-muted">&copy; SPK Mahasiswa {{ now()->year }}</p>
    </form>
  </main>
@endsection