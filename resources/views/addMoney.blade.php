@extends('template')
@section('title', 'Add Money')
@section('main')
<div class="container p-3">
    @parent
    <div class="container-fluid col-md-8 shadow mt-4 mb-5 p-3">
        <div class="row justify-content-center">
            <div class="col-lg-6 border-right p-4">
                <div class="body">
                    <div class="title">
                        <h3 class="text-center title-2">Account Details</h3>
                    </div>
                    <hr>
                    <div class="text-sm-center justify-content-center pt-3 pb-3"> 
                        <small class="text-sm text-muted">Username</small>
                            <h4><span>{{session('username')}} <span style="font-size: 18px;"> <i class="fas fa-check-circle text-success"></i></span></span></h4>
                        <small class="text-sm text-muted">Mobile Number</small>
                            <h4><span>9690484308</span></h4>
                        <small class="text-sm text-muted">Current Balance</small>
                            <h2><span class="mr-2 font-weight-bold">₹</span><span class="text-success">{{session('coin')}}.00</span></h2>
                        <small class="text-sm text-muted">Current Transfer Limit</small>
                            <h2><span class="mr-2 font-weight-bold">₹</span><span class="text-danger">50,000</span></h2>
                        <small> *Add PAN Card to increase transfer limit upto 2 Lacs.</small>
                    </div>
                </div>
            </div>
    
            <div class="col-lg-6 p-4">
                <div class="body">
                    <div class="title">
                        <h3 class="text-center title-2"> Add Money</h3>
                    </div>
                    <hr>
                    <form action="adding" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="cc-payment" class="control-label mb-1">Amount (in Rupees)</label>
                            <input id="cc-pament" name="amount" type="number" required class="form-control" aria-required="true" aria-invalid="false" value="100">
                        </div>
                        <div class="form-group has-success">
                            <label for="cc-name" class="control-label mb-1">Name on card</label>
                            <input id="cc-name" name="cc-name" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
                                autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                            <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                        </div>
                        <div class="form-group">
                            <label for="cc-number" class="control-label mb-1">Card number</label>
                            <input id="cc-number" name="cc-number" type="tel" class="form-control cc-number identified visa" value="" data-val="true"
                                data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"
                                autocomplete="cc-number">
                            <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="cc-exp" class="control-label mb-1">Expiry Date</label>
                                    <input id="cc-exp" name="cc-exp" type="tel" class="form-control cc-exp" value="" data-val="true" data-val-required="Please enter the card expiration"
                                        data-val-cc-exp="Please enter a valid month and year" placeholder="MM / YY"
                                        autocomplete="cc-exp">
                                    <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                            <div class="col-6">
                                <label for="x_card_code" class="control-label mb-1">Security code</label>
                                <div class="input-group">
                                    <input id="x_card_code" name="x_card_code" type="tel" class="form-control cc-cvc" value="" data-val="true" data-val-required="Please enter the security code"
                                        data-val-cc-cvc="Please enter a valid security code" autocomplete="off">
    
                                </div>
                            </div>
                        </div>
                        <div class="pt-3">
                            <button id="payment-button" type="submit" class="btn btn-lg btn-success btn-block font-weight-bold">
                                <i class="fas fa-shield-alt"></i>&nbsp;
                                <span id="payment-button-amount">Add Money</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
