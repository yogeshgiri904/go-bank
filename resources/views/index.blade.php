@extends('template2')
@section('title', 'Sign In')
@section('main')
@parent
<div class="container p-3 mb-4 mt-3">
  @if (session('error'))
<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
  <strong>Warning !</strong> Either username or password is wrong.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
<div class="container bg-light shadow p-4 pt-2" style="max-width:360px;">
    <div class="container">  
      <img src="goLogo.jpg" style="max-width:250px; clip-path:circle(45%);" class="rounded mx-auto d-block" alt="GO">
      <h4 class="text-center">Goswami Payments Bank</h4>
      <h6 class="text-center">Sign In</h6><br>
    </div>
    <form action="signingin" method="POST">
    @csrf
    <!-- Email input -->
    <div class="form-outline mb-4">
      <input type="text" id="form2Example1" name="username" class="form-control" />
      <label class="form-label" for="form2Example1">Username</label>
    </div>
  
    <!-- Password input -->
    <div class="form-outline mb-4">
      <input type="password" id="form2Example2" name="pass" class="form-control" />
      <label class="form-label" for="form2Example2">Password</label>
    </div>
  
    {{-- <div class="row mb-4">
      <div class="col d-flex justify-content-center">
        <!-- Checkbox -->
        <div class="form-check">
          <input
            class="form-check-input"
            type="checkbox"
            value=""
            id="form2Example3"
            checked
          />
          <label class="form-check-label" for="form2Example3"> Remember me </label>
        </div>
      </div>
  
      <div class="col">
        <!-- Simple link -->
        <a href="#!">Forgot password?</a>
      </div>
    </div> --}}
  
    <!-- Submit button -->
    <button type="submit" class="btn btn-primary btn-block mb-4 font-weight-bold">Sign in</button>
  
    <!-- Register buttons -->
    <div class="text-center">
      <p>Not a member? <a href="signup">Register</a></p>
      <p>or sign up with:</p>
      <button type="button" class="btn btn-primary btn-floating mx-1">
        <i class="fab fa-facebook-f"></i>
      </button>
  
      <button type="button" class="btn btn-primary btn-floating mx-1">
        <i class="fab fa-google"></i>
      </button>
  
      <button type="button" class="btn btn-primary btn-floating mx-1">
        <i class="fab fa-twitter"></i>
      </button>
  
      <button type="button" class="btn btn-primary btn-floating mx-1">
        <i class="fab fa-github"></i>
      </button>
    </div>
  </form>
</div>
</div>
@endsection


