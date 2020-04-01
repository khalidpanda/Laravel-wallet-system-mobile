<?php

namespace App\Http\Controllers;

use Auth;  
use App\Models\User;
use App\Models\Car;
use Illuminate\Http\Request;

class CarsController extends Controller
{
    public function index()
    {   
        if ( Auth::user()->role == 'Admin') {
        $Car = Car::get();
        return view('cars.adminIndex',compact('Car'));

        }else{

        $User = User::where('id', Auth::user()->id)->first();
        return view('cars.index',compact('User'));
        }
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('cars.create');
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
        'name'=>'required',
        'class'=> 'required',
        'year' => 'required',
        'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'price' => 'required',
        'brand' => 'required',
        'model' => 'required',
        'body' => 'required',
        'fuel' => 'required',
        'transmission' => 'required',
        'desc' => 'required',
      ]);

      
      $Car = new Car([
        'cars_name' => $request->get('name'),
        'cars_class'=> $request->get('class'),
        'cars_year'=> $request->get('year'),
        'cars_logo'=> $request->file('logo')->getClientOriginalName(),
        'cars_picture'=> $request->file('picture')->getClientOriginalName(),
        'cars_price'=> $request->get('price'),
        'cars_brand'=> $request->get('brand'),
        'cars_model'=> $request->get('model'),
        'cars_body'=> $request->get('body'),
        'cars_fuel'=> $request->get('fuel'),
        'cars_transmission'=> $request->get('transmission'),
        'cars_description'=> $request->get('desc'),
      ]);

       if ($request->hasFile('logo')) {
        $image = $request->file('logo');
        $name = $image->getClientOriginalName();
        $destinationPath = public_path('/uploads');
        $image->move($destinationPath, $name);
        }

        if ($request->hasFile('picture')) {
        $image = $request->file('picture');
        $name = $image->getClientOriginalName();
        $destinationPath = public_path('/uploads');
        $image->move($destinationPath, $name);
        }

       $Car->save();

        toastr()->success('Car has been added successfully!');
      return redirect('/cars');
    }
   
    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $Car = Car::where('cars_id', $id)->first();
        return view('cars.show',compact('Car'));
        
    }
   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Car = Car::where('cars_id', $id)->first();
        return view('cars.edit',compact('Car'));
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
      $name = $request->input('name');
      $class = $request->input('class');
      $year = $request->input('year');
      if ($request->hasFile('logo')) {
      $logo = $request->file('logo')->getClientOriginalName();
      }  
      if ($request->hasFile('picture')) {
      $picture = $request->file('picture')->getClientOriginalName();
      } 
      $price = $request->input('price');
      $brand = $request->input('brand');
      $model = $request->input('model');
      $body = $request->input('body');
      $fuel = $request->input('fuel');
      $transmission = $request->input('transmission');
      $desc = $request->input('desc'); 

       Car::where('cars_id', $id)->update([
            'cars_name' => $name,
            'cars_class' => $class,
            'cars_year' => $year,
            'cars_price' => $price,
            'cars_brand' => $brand,
            'cars_model' => $model,
            'cars_body' => $body,
            'cars_fuel' => $fuel,
            'cars_transmission' => $transmission,
            'cars_description' => $desc,
        ]);

        if ($request->hasFile('logo')) {
            $image = $request->file('logo');
            $name = $image->getClientOriginalName();
            $destinationPath = public_path('/uploads');
          $image->move($destinationPath, $name);
          Car::where('cars_id', $id)->update([
               'cars_logo' => $logo,
              ]);
        }
        if ($request->hasFile('picture')) {
            $image = $request->file('picture');
            $name = $image->getClientOriginalName();
            $destinationPath = public_path('/uploads');
          $image->move($destinationPath, $name);
          Car::where('cars_id', $id)->update([
               'cars_picture' => $picture,
              ]);
        }

        toastr()->success('Car has been updated successfully!');
      return redirect('/cars');


    }
  
  
   public function destroy($id)
{
    $Car = Car::find($id);
     $Car->delete();

      toastr()->success('Car has been deleted successfully!');
      return redirect('/cars'); 
}

//icar section 1st step
  public function icar()
{ 
   $Car = Car::where('cars_class', 'Cars')->get();
        
   return view('cars.icar',compact('Car'));
}

//irental section
 public function irental()
{
   return view('cars.irental');
}

//for irental next step
 public function irentalNow()
 {

return view('cars.irentnow');

}

//for icar book 2nd step

 public function icarbook($id)
 {
  $Car = Car::where('cars_id', $id)->first();
        
return view('cars.icarbook',compact('Car'));

  }


}
