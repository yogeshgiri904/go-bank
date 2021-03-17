@extends('template')
@section('title', 'Transactions History')
@section('current','Transaction History')
@section('main')
  <div class="container mb-5 col-md-8">
    <div class="card">
      <div class="card-body">
        <div class="ml-4">
          <h4 class="card-title">Go Wallet</h4>
          <p class="card-description"> Current Balance </p>
          <h3><span class="mr-2 font-weight-bold">₹</span><span class="text-success">{{session('coin')}}.00</span></h3>
        </div>
        <div class="table-responsive">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>Payment Description</th>
                <th>Date</th>
                <th>Amount</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($data as $data)
              @if ($data->mobile==123454321)
              <tr>
                <td><h6 class="text-primary">Money added from Card</h6></td>
                <td><p>{{$data->date}}</p></td>
                <td class="text-success"><h6><i class="fa fa-plus"></i> ₹ {{$data->amount}}.00</h6></td>
                <td><label class="badge badge-success">Credited</label></td>
              </tr>
              @else
              <tr>
                <td><h6 class="text-primary">Money sent to {{$data->mobile}}</h6></td>
                <td><p>{{$data->date}}</p></td>
                <td class="text-danger"><h6><i class="fa fa-minus"></i> ₹ {{$data->amount}}.00</h6></td>
                <td><label class="badge badge-danger">Debited</label></td>
              </tr>
                @endif
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection