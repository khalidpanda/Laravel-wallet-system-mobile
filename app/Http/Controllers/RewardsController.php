<?php

namespace App\Http\Controllers;

use Auth;  
use App\Models\User;
use App\Models\Reward;
use Illuminate\Http\Request;

class RewardsController extends Controller
{
    public function index()
    {
         if ( Auth::user()->role == 'Admin') {
        $Reward = Reward::get();
        return view('rewards.adminIndex',compact('Reward'));

        }else{

        $User = User::where('id', Auth::user()->id)->first();
        return view('rewards.index',compact('User'));
        }
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rewards.create');
    }
  
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([
        'rewards_name'=>'required',
        'rewards_type'=> 'required',
        'rewards_point' => 'required',
        'rewards_picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'rewards_desc' => 'required',
      ]);

      
      $Reward = new Reward([
        'rewards_name' => $request->get('rewards_name'),
        'rewards_type'=> $request->get('rewards_type'),
        'rewards_point'=> $request->get('rewards_point'),
        'rewards_picture'=> $request->file('rewards_picture')->getClientOriginalName(),
        'rewards_description'=> $request->get('rewards_desc'),
      ]);

       if ($request->hasFile('rewards_picture')) {
        $image = $request->file('rewards_picture');
        $name = $image->getClientOriginalName();
        $destinationPath = public_path('/uploads');
        $image->move($destinationPath, $name);
        }
   
       $Reward->save();

        toastr()->success('Rewards has been added successfully!');
      return redirect('/rewards');
    }
   
    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
         $Reward = Reward::where('rewards_id', $id)->first();
        return view('rewards.show',compact('Reward'));
        
    }
   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $Reward = Reward::where('rewards_id', $id)->first();
        return view('rewards.edit',compact('Reward'));
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
      $id = $request->input('id');    
      $rewards_name = $request->input('rewards_name');
      $rewards_type = $request->input('rewards_type');
      $rewards_point = $request->input('rewards_point');
      if ($request->hasFile('rewards_picture')) {
      $rewards_picture = $request->file('rewards_picture')->getClientOriginalName();
      }  
      
      $rewards_desc = $request->input('rewards_desc'); 

       Reward::where('rewards_id', $id)->update([
            'rewards_name' => $rewards_name,
            'rewards_type' => $rewards_type,
            'rewards_point' => $rewards_point,
            'rewards_description' => $rewards_desc,
        ]);

        if ($request->hasFile('rewards_picture')) {
            $image = $request->file('rewards_picture');
            $name = $image->getClientOriginalName();
            $destinationPath = public_path('/uploads');
          $image->move($destinationPath, $name);
          Reward::where('rewards_id', $id)->update([
               'rewards_picture' => $rewards_picture,
              ]);
        }
        
        toastr()->success('Reward has been updated successfully!');
      return redirect('/rewards');
}
  
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
   public function destroy($id)
{
     $Reward = Reward::find($id);
     $Reward->delete();

      toastr()->success('Reward has been deleted successfully!');
      return redirect('/rewards'); 
}
}
