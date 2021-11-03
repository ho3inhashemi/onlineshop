<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/tagdisabled.css') }}">
    @livewireStyles()
    <title></title>
  </head>
  <body>
      <div class="container">

<div class="row">
<div class="col-2 mt-5">

<h4>Main Menue</h4>

<div>
    {{  menu('main','bootstrap') }}
</div>
<div>
    <div class="dropdown mt-5">
        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">User Profile
        <span class="caret"></span></button>
        <ul class="dropdown-menu">
          <li><a href="{{ route('cart.list') }}" @unless (count(Cart::getContent()) > 0)

          class="disabled-link" @endunless>
          Your Cart @unless (count(Cart::getContent()) > 0)(cart empty) @endunless</a></li>

          <li><a href="{{ route('cart.allorders') }}">Your Orders</a></li>
          <li><a href="#">setting</a></li>
          <li><a href="{{ route('auth.signout') }}">signout</a></li>
        </ul>
      </div>

</div>


</div>
<div class="col-10"> {{ $slot }} </div>
</div>


    </div>




      @livewireScripts()
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  </body>
</html>
