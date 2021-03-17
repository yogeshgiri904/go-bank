@extends('template')
@section('title', 'Pay Bills')
@section('main')
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
<div class="container p-5 pt-0">
  <div class="row">
    @foreach ($card as $item)
      <div class="col-sm-3 mt-3">
          <a href="sendBill/{{$item[0]}}/{{$item[2]}}" class="main-link">
              <div class="card">
                  <div class="card-body bg-warning hover-shadow">
                    <h5 class="card-title">{{$item[0]}}</h5>
                    <p class="card-icon"><i class="{{$item[1]}}"></i></p>
                    <p class="card-text">Amount Due - <span class="font-weight-bold text-danger">₹ {{$item[2]}}.00</span></p>
                  </div>
              </div>
          </a>
        </div>
    @endforeach
  </div>
</div>
@endsection