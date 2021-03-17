
@extends('template')
@section('title', 'Add Money - GO')
@section('main')
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="home" class="text-dark">Dashboard</a></li>
          <li class="breadcrumb-item"><a href="addMoney" class="text-dark">Add Money</a></li>
          <li class="breadcrumb-item active" aria-current="page">Enter Card</li>
        </ol>
      </nav>
    </div>
  </nav>
    <style>
        body {
    color: #000;
    overflow-x: hidden;
    height: 100%;
    background-color: #EF5350;
    background-repeat: no-repeat
}

.card {
    padding: 30px 25px 35px 50px;
    border-radius: 30px;
    box-shadow: 0px 4px 8px 0px #B71C1C;
    margin-top: 50px;
    margin-bottom: 50px
}

.border-line {
    border-right: 1px solid #BDBDBD
}

.text-sm {
    font-size: 13px
}

.text-md {
    font-size: 18px
}

.image {
    width: 60px;
    height: 30px
}

::placeholder {
    color: grey;
    opacity: 1
}

:-ms-input-placeholder {
    color: grey
}

::-ms-input-placeholder {
    color: grey
}

input {
    padding: 2px 0px;
    border: none;
    border-bottom: 1px solid lightgrey;
    margin-bottom: 5px;
    margin-top: 2px;
    box-sizing: border-box;
    color: #000;
    font-size: 16px;
    letter-spacing: 1px;
    font-weight: 500
}

input:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    border-bottom: 1px solid #EF5350;
    outline-width: 0
}

button:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    outline-width: 0
}

.btn-red {
    background-color: #EF5350;
    color: #fff;
    padding: 8px 25px;
    border-radius: 50px;
    font-size: 18px;
    letter-spacing: 2px;
    border: 2px solid #fff
}

.btn-red:hover {
    box-shadow: 0 0 0 2px #EF5350
}

.btn-red:focus {
    box-shadow: 0 0 0 2px #EF5350 !important
}

.custom-checkbox .custom-control-input:checked~.custom-control-label::before {
    background-color: #EF5350
}

@media screen and (max-width: 575px) {
    .border-line {
        border-right: none;
        border-bottom: 1px solid #EEEEEE
    }
}
    </style>
    
<div class="container-fluid px-1 px-md-2 px-lg-4 py-5 mx-auto">
    <div class="row d-flex justify-content-center">
        <div class="col-xl-7 col-lg-8 col-md-9 col-sm-11">
            <div class="card border-0">
                <div class="row justify-content-center">
                    <h3 class="mb-4">Enter Credit Card Details</h3>
                </div>
                <div class="row">
                    <div class="col-sm-7 border-line pb-3">
                        <div class="form-group">
                            <p class="text-muted text-sm mb-0">Name on the card</p> <input type="text" name="name" placeholder="Name" size="15">
                        </div>
                        <div class="form-group">
                            <p class="text-muted text-sm mb-0">Card Number</p> <input type="text" name="card-num" placeholder="0000 0000 0000 0000" size="18" id="cr_no" minlength="19" maxlength="19">
                        </div>
                        <div class="form-group">
                            <p class="text-muted text-sm mb-0">Expiry Date</p> <input type="text" name="exp" placeholder="MM/YY" size="6" id="exp" minlength="5" maxlength="5">
                        </div>
                        <div class="form-group">
                            <p class="text-muted text-sm mb-0">CVV/CVC</p> <input type="password" name="cvv" placeholder="000" size="1" minlength="3" maxlength="3">
                        </div>
                        <div class="form-group mb-0">
                            <div class="custom-control custom-checkbox custom-control-inline"> <input id="chk1" type="checkbox" name="chk" class="custom-control-input" checked> <label for="chk1" class="custom-control-label text-muted text-sm">save my card for future payment</label> </div>
                        </div>
                    </div>
                    <div class="col-sm-5 text-sm-center justify-content-center pt-3 pb-3"> <small class="text-sm text-muted">Username</small>
                        <h5 class="mb-3">{{session('username')}}</h5> 
                        <small class="text-sm text-muted">Current Balance</small>
                        <div class="row px-3 justify-content-sm-center">
                            <h2 class=""><span class="text-md font-weight-bold mr-2">₹</span><span class="text-danger">{{session('coin')}}.00</span></h2>
                        </div> 
                        <small class="text-sm text-muted">Amout to be added</small>
                        <div class="row px-3 justify-content-sm-center">
                            <h2 class=""><span class="text-md font-weight-bold mr-2">₹</span><span class="text-success">{{session('amount')}}.00</span></h2>
                        </div> 
                        <a type="submit" class="btn btn-red text-center mt-4" href="home">PAY</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
