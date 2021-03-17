@extends('template')
@section('title', 'Pay Bills')
@section('main')
<div class="container mb-4 mt-4">
<div class="container p-3 col-md-4">
  <div class="card p-4">
    <h2 class="text-center">Pay Bill</h2>
    <hr>
    <div class="justify-content-center pt-2 pb-2"> 
      <small class="text-sm text-muted">Current Balance</small>
          <h2><span class="text-md font-weight-bold mr-2">₹</span><span class="text-success">{{session('coin')}}.00</span></h2>
          <small class="text-sm text-muted">Bill Amount</small>
          <h2><span class="text-md font-weight-bold mr-2">₹</span><span class="text-danger">{{$name}}.00</span></h2>
    </div>
    <hr>
    <div class="pt-2">
      <form method="POST" action="/sending">
        @csrf
        <div class="form-outline mb-4">
            <input type="text" id="form4Example1" name="mobile" class="form-control" value="{{$id}}" />
            <label class="form-label" for="form4Example1">Bill Type</label>
          </div>
          <div class="form-outline mb-4">
            <input type="number" id="form4Example1" name="amount" class="form-control" value="{{$name}}" />
            <label class="form-label" for="form4Example1">Amount (in Rupees)</label>
          </div>      
          <!-- Submit button -->
          <div class="pt-2">
            <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                <i class="fas fa-dove"></i>&nbsp;
                <span id="payment-button-amount">Pay Bill</span>
            </button>
        </div>      
      </form>
    </div>
  </div>
</div>
</div>
@endsection