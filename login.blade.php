

<x-layout>
<div class="container my-5 card-body">
  <h3 class="text-center">Login</h3>
<form action="{{ route('loginPage') }}" method="POST">
  @csrf
  @method('POST')
 
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" name="email" class="form-control" id="email">
  </div>

   <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="password">
  </div>
   <button type="submit" class="btn btn-primary">Login</button>
</form>
@if($errors->any())

@foreach($errors->all() as $error)
<div class="alert alert-danger my-2">
<ul>
  
  <li>{{ $error }}</li>

</ul>

</div>
@endforeach

@endif
</div>
</x-layout>
