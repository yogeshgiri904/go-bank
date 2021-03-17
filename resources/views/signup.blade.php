@extends('template2')
@section('title', 'Sign Up')
@section('main')
@parent
<div class="container p-3 mb-4 mt-3">
  @if (session('insertSuccess'))
  <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
    <strong>Success !</strong> Account Created Successfully. <a href="/">Sign In</a> Now?
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>    
@endif
@if (session('insertError') || session('emailError') || session('userError'))
  <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
    @if (session('emailError'))
      <strong>Warning !</strong> Already have an accout with this email.
    @endif
    @if (session('userError'))
      <strong>Warning !</strong> Username not available.
    @endif
    @if (session('insertError'))
      <strong>Warning !</strong> Account not created.
    @endif
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>    
@endif

<div class="container bg-light shadow p-4" style="max-width:360px;">
    <h4 class="text-center">Goswami Payments Bank</h4>
    <h5 class="text-center">Sign Up</h5><br>
    <form action="signingup" method="POST">
    @csrf
    <!-- Username input -->
    <div class="form-outline mb-4">
        <input type="text" id="form2Example1" name="username" class="form-control" />
        <label class="form-label" for="form2Example1">Enter Username</label>
    </div>
    <!-- Email input -->
    <div class="form-outline mb-4">
        <input type="text" id="form2Example2" name="email" class="form-control" />
        <label class="form-label" for="form2Example2">Enter Email</label>
    </div>
    <!-- Email input -->
    <div class="form-outline mb-4">
        <input type="number" id="form2Example2" name="mobile" class="form-control" />
        <label class="form-label" for="form2Example2">Enter Mobile</label>
    </div>
    <!-- Password input -->
    <div class="form-outline mb-4">
        <input type="password" id="form2Example3" name="pass" class="form-control" />
        <label class="form-label" for="form2Example3">Enter Password</label>
    </div>
    <!--Confirm Password input -->
    <div class="form-outline mb-4">
        <input type="password" id="form2Example4" name="cpass" class="form-control" />
        <label class="form-label" for="form2Example4">Confirm Password</label>
    </div>

  
    <!-- 2 column grid layout for inline styling -->
    <div class="row mb-4">
      <div class="col d-flex justify-content-center">
        <!-- Checkbox -->
        <div class="form-check">
          <input
            class="form-check-input" type="checkbox" value="" id="form2Example3" checked />
          <label class="form-check-label" for="form2Example3"> Accept terms and conditions. </label>
        </div>
      </div>
    </div>
  
    <!-- Submit button -->
    <button type="submit" class="btn btn-primary btn-block mb-4">Sign Up</button>
  
    <!-- Register buttons -->
    <div class="text-center">
      <p>Already have an account? <a href="/">Sign In</a></p>
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


