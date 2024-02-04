<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
    <script src="//unpkg.com/alpinejs" defer></script>

    
        <title>Larablog</title>
    
</head>
<body>
    <header class="site-header">
      <nav class="navbar navbar-expand-md navbar-dark bg-steel fixed-top">
        <div class="container">
          <a class="navbar-brand mr-4" href="/">Larablog</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggle" aria-controls="navbarToggle" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarToggle">
            <div class="navbar-nav mr-auto">
              <a class="nav-item nav-link" href="/">Home</a>
              <a class="nav-item nav-link" href="/about">About</a>
            </div>
            <!-- Navbar Right Side -->
            <div class="navbar-nav">
              
              @auth
                <a class="nav-item nav-link" href="/blogs/create">New Post</a>
                <a class="nav-item nav-link" href="/profile">Profile</a>
                <form class="inline" method="POST" action="/logout">
                  @csrf
                  <button style="background: none!important;
                  border: none;
                  padding: 0!important;
                  cursor: pointer;" type="submit">
                     <a class="nav-item nav-link">Logout</a>
                  </button>
                </form>
              @else
                <a class="nav-item nav-link" href="/login">Login</a>
                <a class="nav-item nav-link" href="/register">Register</a>
              @endauth
            </div>
          </div>
        </div>
      </nav>
    </header>
    <main role="main" class="container">
      <div class="row">
        <div class="col-md-8">
         
          @if(session()->has('message'))
            <div x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show"
              class="alert alert-success">
              <p>
               {{session('message')}}
              </p>
            </div>
          @endif

            {{$slot}}

            <div class="col-md-4">
                <div class="content-section">
                  <h3>Our Sidebar</h3>
                  <p class='text-muted'>
                    <ul class="list-group">
                      <li class="list-group-item list-group-item-light">Latest Posts</li>
                      <li class="list-group-item list-group-item-light">Announcements</li>
                      <li class="list-group-item list-group-item-light">Calendars</li>
                      <li class="list-group-item list-group-item-light">etc</li>
                    </ul>
                  </p>
                </div>
              </div>
            </div>
          </main>
      
      
          <!-- Optional JavaScript -->
          <!-- jQuery first, then Popper.js, then Bootstrap JS -->
          <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      </body>
      </html>