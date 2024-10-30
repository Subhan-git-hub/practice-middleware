
<x-layout>
  <div class="container my-3 card-body ">
  <h3 class="text-center">Register</h3>

<form action="{{ route('registerSave') }}" method="POST">
  @csrf
  @method('POST')
 
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" name="name" class="form-control" id="name">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" name="email" class="form-control" id="email">
  </div>

  <div class="mb-3">
    <label for="age" class="form-label">Age</label>
    <input type="number" name="age" class="form-control" id="age">
  </div>

  <div class="mb-3">
    <label for="role" class="form-label">Role</label>
    <input type="text" name="role" class="form-control" id="role">
  </div>


   <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="password">
  </div>
   <div class="mb-3">
    <label for="password_confirmation" class="form-label">Confirm Password</label>
    <input type="password" name="password_confirmation" class="form-control" id="password_confirmation">
  </div>
  <button type="submit" class="btn btn-primary">Register</button>
</form>
</x-layout>
@if($errors->any())

@foreach($errors->all() as $error)
<div class="alert alert-danger">
<ul>
  
  <li>{{ $error }}</li>

</ul>

</div>
@endforeach

@endif
</div>