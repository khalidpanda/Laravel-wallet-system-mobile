<?php
  
namespace App\Http\Controllers;

use Auth;  
use App\Models\Product;
use Illuminate\Http\Request;
  
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::where('product_user', Auth::user()->id)->get();
  
        return view('products.index',compact('products'));
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
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
        'product_name'=>'required',
        'product_sku'=> 'required',
        'product_price' => 'required|integer',
        'product_quantity' => 'required|integer',
        'product_colour'=>'required',
        'product_description'=> 'required'
      ]);
      $Product = new Product([
        'product_name' => $request->get('product_name'),
        'product_sku'=> $request->get('product_sku'),
        'product_price'=> $request->get('product_price'),
        'product_quantity'=> $request->get('product_price'),
        'product_colour' => $request->get('product_colour'),
        'product_description'=> $request->get('product_description'),
        'product_user'=> $request->get('product_user'),

      ]);
      $Product->save();

      toastr()->success('Product has been added successfully!');
      return redirect('/products');
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
         $products = Product::where('product_id', $products)->first();
        return view('products.show',compact('products'));
    }
   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $products = Product::find($id);

        return view('products.edit', compact('products'));
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
      $product_id = $request->input('product_id');
      $product_name = $request->input('product_name');
      $product_sku = $request->input('product_sku');
      $product_price = $request->input('product_price');
      $product_user = $request->input('product_user');
      

       Product::where('product_id', $product_id)->update([
        'product_name' => $product_name,
            'product_sku' => $product_sku,
            'product_price' => $product_price,
            'product_user' => $product_user,
       ]);


      toastr()->success('Product has been updated successfully!');
      return redirect('/products');
}
  
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
   public function destroy($id)
{
     $product = Product::find($id);
     $product->delete();

      toastr()->success('Product has been deleted successfully!');
      return redirect('/products');
}
}