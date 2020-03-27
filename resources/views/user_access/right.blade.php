@extends('layouts.adminLayout')
@section('content')
@section('title', 'User Right')
<style type="text/css">
	#table_length{
		display: none;
	}
</style>
<div class="card ">
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br>
    @endif
      <form method="post" action="{{action('UserAccessController@rightfunc')}}">
         @csrf

         <input type="hidden" name="userID" value="{{$User->id}}">
         <table class="table table-bordered" id="table">
        <thead>
        <tr>
        	<th></th>
            <th>No</th>
            <th>Module</th>
            <th>Can Edit</th>
            <th>View Only</th>
        </tr>	
    </thead>
    <tbody>   
        <tr>
        	<td></td>
            <td>1</td>
            <td>Cars</td>
            <input type="hidden" name="moduleName1" value="Cars">
            <td><center><input type="checkbox" class="form-check-input" name="carsEdit" id="carsEdit" 

            <?php if(!empty($UserRole)):?>
           <?php if ($UserRole->modules == 'Cars' && $UserRole->edit == 'on'):?>
           	checked
           <?php endif;?>
           <?php endif;?>

           	></center></td>
            <td><center><input type="checkbox" class="form-check-input" name="carsView" id="productView"

            <?php if(!empty($UserRole)):?>
            <?php if ($UserRole->modules == 'Cars' && $UserRole->view == 'on'):?>
           	checked
           <?php endif;?>
           <?php endif;?>
            	></center></td>
        </tr>

        <tr>
        	<td></td>
            <td>2</td>
            <td>User Access Control</td>
            <input type="hidden" name="moduleName2" value="UAC">
            <td><center><input type="checkbox" class="form-check-input" name="userEdit" id="userEdit"

            	<?php if(!empty($UserRole1)):?>
            <?php if ($UserRole1->modules == 'UAC' && $UserRole1->edit == 'on'):?>
           	checked
           <?php endif;?>
           <?php endif;?>
            	></center></td>

            <td><center><input type="checkbox" class="form-check-input" name="userView" id="userView"
            	<?php if(!empty($UserRole1)):?>
            	<?php if ($UserRole1->modules == 'UAC' && $UserRole1->view == 'on'):?>
           	checked
           <?php endif;?>
           <?php endif;?>
            	></center></td>
        </tr>

        <tr>
          <td></td>
            <td>3</td>
            <td>Report</td>
            <td><!-- center><input type="checkbox" class="form-check-input" name="reportEdit" id="reportEdit"

              <?php if(!empty($UserRole2)):?>
            <?php if ($UserRole2->modules == 'Report' && $UserRole2->edit == 'on'):?>
            checked
           <?php endif;?>
           <?php endif;?>
              ></center> -->
                
              </td>

            <td><center><input type="checkbox" class="form-check-input" name="reportView" id="reportView"
              <?php if(!empty($UserRole2)):?>
              <?php if ($UserRole2->modules == 'Report' && $UserRole2->view == 'on'):?>
            checked
           <?php endif;?>
           <?php endif;?>
              ></center></td>
        </tr>

         <tr>
          <td></td>
            <td>4</td>
            <td>Rewards</td>
            <input type="hidden" name="moduleName2" value="Rewards">
            <td><center><input type="checkbox" class="form-check-input" name="rewardsEdit" id="userEdit"

              <?php if(!empty($UserRole3)):?>
            <?php if ($UserRole3->modules == 'Rewards' && $UserRole3->edit == 'on'):?>
            checked
           <?php endif;?>
           <?php endif;?>
              ></center></td>

            <td><center><input type="checkbox" class="form-check-input" name="rewardsView" id="userView"
              <?php if(!empty($UserRole3)):?>
              <?php if ($UserRole3->modules == 'Rewards' && $UserRole3->view == 'on'):?>
            checked
           <?php endif;?>
           <?php endif;?>
              ></center></td>
        </tr>

         <tr>
          <td></td>
            <td>5</td>
            <td>Wallet</td>
            <input type="hidden" name="moduleName2" value="Wallet">
            <td><center><input type="checkbox" class="form-check-input" name="walletEdit" id="userEdit"

              <?php if(!empty($UserRole4)):?>
            <?php if ($UserRole4->modules == 'Wallet' && $UserRole4->edit == 'on'):?>
            checked
           <?php endif;?>
           <?php endif;?>
              ></center></td>

            <td><center><input type="checkbox" class="form-check-input" name="walletView" id="userView"
              <?php if(!empty($UserRole4)):?>
              <?php if ($UserRole4->modules == 'Wallet' && $UserRole4->view == 'on'):?>
            checked
           <?php endif;?>
           <?php endif;?>
              ></center></td>
        </tr>
      
    </tbody>
    </table>
    <br>
    <center><button type="submit" class="btn btn-primary">Submit</button></center>

         </form>

     </div>
 </div>



@endsection