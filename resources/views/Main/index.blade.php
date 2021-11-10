@extends('Layout.main')
@section('title', 'Welcome')
@section('main')
{{-- top --}}
<aside class="p-3 text-center bg-gradient-to-r from-pink-500 via-red-500 to-yellow-500">
  <p class="text-sm font-medium text-white">
    Start learning today

    <a href="" class="inline-flex items-center underline">
      Click now

      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-4 w-4 ml-1.5 flex-shrink-0">
        <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
      </svg>
    </a>
  </p>
</aside>

<aside class="relative overflow-hidden text-gray-300 bg-gray-900 lg:flex">
    <div class="w-full p-12 text-center lg:w-1/2 sm:p-16 lg:p-24 lg:text-left">
      <div class="max-w-xl mx-auto lg:ml-0">
        <p class="text-sm font-medium">
          Welcome User To ABC Learning
        </p>
  
        <p class="mt-2 text-2xl font-bold text-white sm:text-3xl">
Join your classes today with the best teachers around.
        </p>
  
        <p class="hidden lg:mt-4 lg:block">
Start learning and interacting with your teachers like never before 
        </p>
  
        <a
          href=""
          class="inline-block px-5 py-3 mt-8 text-sm font-medium text-white bg-blue-500 rounded-lg hover:bg-blue-600"
        >
          Get started today
        </a>
      </div>
    </div>
  
    <div class="relative w-full h-64 sm:h-96 lg:w-1/2 lg:h-auto">
      <img
        src="https://www.hyperui.dev/code/photos/women-2.jpeg"
        alt="Women smiling at college"
        class="absolute inset-0 object-cover w-full h-full"
      />
    </div>
  </aside>

  <section class="continer mt-10 mb-10">
      <div class="flex mx-auto">
    <div class="p-1 shadow-xl bg-gradient-to-r from-pink-500 via-red-500 to-yellow-500 mr-6">
        <a class="block p-6 bg-white" href="">
          <div class="mt-16 sm:pr-8">
            <h5 class="text-xl font-bold text-gray-900">Learn something new</h5>
      
            <p class="mt-2 text-sm text-gray-500">
              With so many teachers with so many subjects learning is way more fun and easy with ABC Learning 
            </p>
          </div>
        </a>
    </div>
    <div class="p-1 shadow-xl bg-gradient-to-r from-pink-500 via-red-500 to-yellow-500 mr-6">
        <a class="block p-6 bg-white" href="">
          <div class="mt-16 sm:pr-8">
            <h5 class="text-xl font-bold text-gray-900">Homework Help</h5>
      
            <p class="mt-2 text-sm text-gray-500">
Here on ABC Learning Getting homework and turning them in is as simple as a click of a button
            </p>
          </div>
        </a>
    </div>
    <div class="p-1 shadow-xl bg-gradient-to-r from-pink-500 via-red-500 to-yellow-500 ">
        <a class="block p-6 bg-white" href="">
          <div class="mt-16 sm:pr-8">
            <h5 class="text-xl font-bold text-gray-900">Whats New</h5>
      
            <p class="mt-2 text-sm text-gray-500">
Stay updated with the latest updates on ABC Learning you will never miss any updates with news alerts. 
            </p>
          </div>
        </a>
    </div>
    </div>
    </section>
  @endsection