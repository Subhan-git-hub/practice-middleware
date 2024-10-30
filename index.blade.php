<x-layout>
<h2 class="text-center">Index Page</h2>
<h2 class="text-center">Welcome : {{ Auth::user()->name}}</h2>

<a href="{{ route('inner') }}" class="btn btn-danger">Inner Page</a>
<a href="{{ route('logout') }}" class="btn btn-primary">Logout Page</a>


</x-layout>
