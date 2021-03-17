@extends('template')
@section('title', 'Send Money')
@section('main')
<div class="container mb-4 mt-4">
@parent
<div class="container p-3 col-md-4">
  <div class="card p-4">
    <h2 class="text-center">Send Money</h2>
    <hr>
    <div class="justify-content-center pt-2 pb-2"> 
      <small class="text-sm text-muted">Current Balance</small>
          <h2><span class="text-md font-weight-bold mr-2">₹</span><span class="text-success">{{session('coin')}}.00</span></h2>
    </div>
    <hr>
    <div class="pt-2">
      <form method="POST" action="sending">
        @csrf
          <div class="form-outline mb-4">
            <input type="number" id="form4Example1" name="mobile" class="form-control" />
            <label class="form-label" for="form4Example1">Mobile Number</label>
          </div>
  
          <div class="form-outline mb-4">
            <input type="number" id="form4Example1" name="amount" class="form-control" />
            <label class="form-label" for="form4Example1">Amount (in Rupees)</label>
          </div>
        
          <div class="form-outline mb-4">
            <textarea class="form-control" id="form4Example3" name="msg" rows="4"></textarea>
            <label class="form-label" for="form4Example3">Add a Message (Optional)</label>
          </div>
              
          <!-- Submit button -->
          <div class="pt-2">
            <button id="payment-button" type="submit" class="btn btn-lg btn-success btn-block">
                <i class="fas fa-shield-alt"></i>&nbsp;
                <span id="payment-button-amount">Send Money</span>
            </button>
        </div>      
      </form>
    </div>
  </div>
</div>
</div>
@endsection