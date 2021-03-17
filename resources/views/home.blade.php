@extends('template2')
@section('title', 'Home')
@section('main')
<div class="container">
<style>
    .card-body{
        height: 170px;
        display: inline-flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        border-radius: 5px;
    }
    .card-icon{
        font-size: 30px;
    }
    .main-link{
        text-decoration: none;
        color:#343a40;
    }
    .main-link:hover{
        text-decoration: none;
        color:#343a40;
    }
</style>

{{-- add bonus alerts --}}
@if (session('addBonus'))
<script>
swal({
  title: "Congratulations!",
  text: "You got a premium gift card for new signup.",
  icon: "info",
  buttons: ["Save for later", "Scratch Now"],
})
.then((Scratch) => {
  if (Scratch) {
    swal("Hurrey!","You have won Rs. {{session('coin')}}.00", {
      icon: "success",
    }).then(()=>{
      window.location.reload();
    });
  } else {
    swal("Saved for later").then(()=>{
      window.location.reload();
    });
  }
});
</script>
@endif

{{-- send money alerts --}}
@if (session('sentMoneyCash'))
<script>
  swal("Rs. {{session('amount')}}.00","Congratulations! Money has been sent successfully.", "success").then(()=>{
    swal("Rs. {{session('cashback')}}.00","Congratulations! You won cashback. ", "success").then(()=>{
      window.location.reload();
    });
  });
</script>
@endif
@if (session('sentMoney'))
<script>
  swal("Rs. {{session('amount')}}.00","Congratulations! Money has been sent successfully.", "success").then(()=>{
    swal("Sorry!","No cashback earned, Better luck next time.", "error").then(()=>{
      window.location.reload();
    });
  });
</script>
@endif
@if (session('lessMoney'))
<script>
  swal("Failed!", "Your wallet doesn't have enough money.", "error").then(()=>{
      window.location.reload();
    });
</script>
@endif
@if (session('errorMoney') || session('errorAddMoney') )
<script>
  swal("Failed!", "We cannot proceed with your transaction now.", "error").then(()=>{
      window.location.reload();
    });
</script>
@endif

{{-- add money alerts --}}
@if (session('successAddMoney'))
<script>
  swal("Rs. {{session('amount')}}.00","Congratulations! Money has been added successful.", "success").then(()=>{
      window.location.reload();
    });
</script>
@endif
@if (session('addPAN'))
<script>
  swal("Transaction Failed!","You must link PAN card to transact more than Rs. 50,000", "error").then(()=>{
      window.location.reload();
    });
</script>
@endif

    <div class="row pr-4 pl-4 pt-4">
        <div class="col-sm-3 mt-3">
            <a href="transact" class="main-link">
                <div class="card">
                    <div class="card-body bg-info hover-shadow">
                      <h5 class="card-title">GO Wallet</h5>
                      <p class="card-icon"><i class="fas fa-rupee-sign"></i> <b>{{session('coin')}}.00</b></p>
                      <p class="card-text">
                          Available Balance
                      </p>
                    </div>
                  </div>
            </a>
        </div>
        <div class="col-sm-3 mt-3">
            <a href="contact" class="main-link">
          <div class="card">
            <div class="card-body bg-secondary hover-shadow">
                <h5 class="card-title">GO Bank</h5>
                <p class="card-icon"><i class="fas fa-bank"></i></p>
                <p class="card-text">
                  Visit your bank now
                </p>
            </div>
          </div>
        </a>
        </div>
        <div class="col-sm-3 mt-3">
            <a href="transact" class="main-link">
            <div class="card">
              <div class="card-body bg-danger hover-shadow">
                <h5 class="card-title">Manage Passbook</h5>
                <p class="card-icon"><i class="fas fa-book-open"></i></p>
                <p class="card-text">
                  Manage Your GO Passbook
                </p>
                </div>
            </div>
        </a>

          </div>
          <div class="col-sm-3 mt-3">
            <a href="card" class="main-link">
            <div class="card">
              <div class="card-body bg-warning hover-shadow">
                <h5 class="card-title">Visit Card</h5>
                <p class="card-icon"><i class="fas fa-credit-card"></i></p>
                <p class="card-text">
                    Manage your GO card
                </p>
                </div>
            </div>
        </a>

          </div>
    </div>

    <div class="row pr-4 pl-4 pb-5">
        <div class="col-sm-3 mt-3">
            <a href="bills" class="main-link">
          <div class="card">
            <div class="card-body bg-warning hover-shadow">
                <h5 class="card-title">Pay Bills</h5>
                <p class="card-icon"><i class="fas fa-scroll"></i></p>
                <p class="card-text">
                    Pay your bills instantly
                </p>
            </div>
          </div>
        </a>
        <a href="" class="main-link">
          <div class="card mt-3">
            <div class="card-body bg-success hover-shadow">
                <h5 class="card-title">Change Password</h5>
                <p class="card-icon"><i class="fas fa-unlock-alt"></i></p>
                <p class="card-text">
                    Secure your account
                </p>
            </div>
          </div>
        </a>
        </div>
        <div class="col-sm-6 mt-3" >
          <div class="card" style="height: 355px;">
            <div class="card-body bg-white shadow">
              <p class="card-icon"><i class="fas fa-shield-alt"></i></p>
              <h5 class="card-title">Make Secure Payment</h5>
              <p class="card-text">
                Now, you can do any secure payment using GO Payments Bank.
              </p>
              <div>
                <a href="addMoney" class="btn btn-success m-1 font-weight-bold">Add Money</a>
                <a href="sendMoney" class="btn btn-danger m-1 font-weight-bold">Send Money</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3 mt-3" >
          <a href="userProfile" class="main-link">
          <div class="card" style="height: 355px;">
            <div class="card-body bg-white hover-shadow">
              <img src="https://static.toiimg.com/thumb/msid-73906086,imgsize-232169,width-800,height-600,resizemode-75/73906086.jpg" alt="user" style="width:200px; clip-path:circle(40%);">
                <h5 class="text-center">{{session('username')}} <i class="fas fa-check-circle text-success"></i></h5>
                <p class="text-center"><i class="fas fa-map-marker-alt"></i> India</p>
                <a href="" class="btn btn-outline-primary m-1 font-weight-bold">Edit Profile</a>
            </div>
          </div></a>
        </div>      
      </div>
      </div>
</div>
@endsection