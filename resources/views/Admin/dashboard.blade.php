@extends('Layout.admin')
@section('title', 'Dashboard')
@section('main')
<section
  class="relative w-screen text-white bg-center bg-no-repeat bg-cover"
  style="background-image: url(https://images.unsplash.com/photo-1622295023368-8d348ed7140e?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=869&q=80)"
  role="banner"
>
  <div class="absolute inset-0 bg-black bg-opacity-50"></div>

  <div class="relative px-4 py-24 mx-auto max-w-screen-xl sm:px-6 lg:px-8 sm:py-36 lg:items-center lg:flex lg:h-screen">
    <div class="max-w-3xl">
     

      <h1 class="mt-2 text-3xl font-bold sm:text-5xl">
Welcome Home Administrator.      </h1>

      <p class="max-w-lg mt-4 sm:text-xl">
        What will we do today with so many functionalities at our finger tips.Lets just see what we can do
    </p>
    </div>
  </div>
</section>

@endsection