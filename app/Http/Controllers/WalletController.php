<?php
  
namespace App\Http\Controllers;

use Auth;  
use App\Models\User;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Billplz\Client;
  
class WalletController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if ( Auth::user()->role == 'Admin') {
       $User = User::where('id', Auth::user()->id)->first();
        return view('wallet.adminIndex',compact('User'));

        }else{

        $User = User::where('id', Auth::user()->id)->first();
        return view('wallet.index',compact('User'));
    }
    
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function transhistory()
    {
         $User = User::where('id', Auth::user()->id)->first();
         $Trans = Transaction::where('user_id', Auth::user()->id)->where('trans_type', 'topup')->get();
  
        return view('wallet.transhistory',compact('User','Trans'));
    }

     public function topup(Request $request)
    {
      $request->validate([
        'amount'=>'required',
      ]);

      $amount = $request->input('amount');
     

       // User::where('id', Auth::user()->id)->update([
       //      'wallet' => $total,
       // ]);

        $billplz = Client::make('0c592306-fa47-4ee9-ab5a-204649c6fe4a', 'S-NAUe_U8U91VwCnSp88fkWw');
        // $billplz = Client::make('2d16bce2-d589-4245-92ef-3dc4a3b8d96b', 'S-tQWNTJ_e-0v9s7NpoX0cxA');
        $billplz->useSandbox();
        $billplz->useVersion('v3');
        $collection = $billplz->collection();
        $response = $collection->create('E-WALLET SYSTEM');
        $bill = $billplz->bill();
        $response = $bill->create(
    $response->toArray()['id'],
    'fube.malaysia@gmail.com',
    null,
     Auth::user()->name,
    \Duit\MYR::given($amount*100),
    ['callback_url' => 'https://phpstack-134670-1202019.cloudwaysapps.com/wallet/topupresult/'.$amount.'', 'redirect_url' => 'https://phpstack-134670-1202019.cloudwaysapps.com/wallet/topupresult/'.$amount.''],
    'Billplz payment gateway'
);
        
        return redirect($response->toArray()['url']);   

    }

     public function topupresult($amount)
    {   

      $user = User::where('id', Auth::user()->id)->first();
      $total = $user->wallet + $amount;
         User::where('id', Auth::user()->id)->update([
            'wallet' => $total,
       ]);

          $trans = new Transaction([
        'user_id' => Auth::user()->id,
        'trans_value'=> $amount,
        'trans_type'=> 'topup',
      ]);
       $trans->save();

       if (Auth::user()->role == 'Admin') {
           toastr()->success('Topup Success!');
      return redirect('/wallet');
       }else{
        return redirect('/home');
       }
         
    }
  
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     
    }
   
    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show( $products)
    {   
        // var_dump($products);die;
        
    }
   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }
  
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
   public function update(Request $request)
       {
        
       }
  
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
   public function destroy($id)
{
     
}
}