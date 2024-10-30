<x-layout>
<h2 class="text-center">Welcome to the inner page {{ Auth::user()->name }}(admin)</h2>

<a href="{{ route('index') }}" class="btn btn-primary"> Back To Index Page</a>
<a href="{{ route('logout') }}" class="btn btn-danger">Logout</a>


</x-layout>