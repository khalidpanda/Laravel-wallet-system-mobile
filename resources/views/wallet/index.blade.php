@extends('layouts.app')
@section('content')
@section('title', 'Wallet')

<div class="card card-default color-palette-box">
          <div class="card-header">
          	<center>
            <h3>
            	RM{{number_format($User->wallet,2)}}
            </h3>
            </center>
          </div>
          <div class="card-body">

          <div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Topup Wallet
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#exampleModal">
  Online Banking
</button>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Transaction History
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
       <a href="{{ url('transhistory') }}" class="btn btn-primary btn-lg btn-block">View Transactions</a>
      </div>
    </div>
  </div>
  
</div>
      </div>

  </div>


  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-top: 10%;">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Wallet Topup</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h5><center><b>Please Select Amount</b></center></h5>
         <form method="post" action="{{action('WalletController@topup')}}">
         @csrf
          <div class="form-group">
              <select class="form-control select2" name="amount" style="width: 100%;">
                    <option value="1.00">RM 1.00</option>
                    <option value="5.00">RM 5.00</option>
                    <option value="10.00">RM 10.00</option>
                    <option value="20.00">RM 20.00</option>
                    <option value="50.00">RM 50.00</option>
                    <option value="100.00">RM 100.00</option>
      
                  </select>
          </div>
         
     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Topup</button>
      </div>
       </form>
    </div>
  </div>
</div>
      


@endsection