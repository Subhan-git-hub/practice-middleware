<x-layout>
  <h2 class="text-center">Welcome {{ Auth::user()->name }}</h2>
   <div class="container text-center my-5">

      <a href="{{ route('logout') }}" class="btn btn-primary">Logout</a>

        
    </div>
</x-layout>