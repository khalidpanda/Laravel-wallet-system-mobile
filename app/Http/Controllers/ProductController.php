<?php
  
namespace App\Http\Controllers;
  
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
        $products = Product::latest()->paginate(5);
  
        return view('products.index',compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
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

      ]);
      $Product->save();
      return redirect('/products')->with('success', 'Product has been added');
    }
   
    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.show',compact('product'));
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
   public function update(Request $request, $id)
{
      $request->validate([
        'product_name'=>'required',
        'product_sku'=> 'required|integer',
        'product_price' => 'required|integer'
      ]);

      $product = Product::find($id);
      $product->product_name = $request->get('product_name');
      $product->product_sku = $request->get('product_sku');
      $product->product_price = $request->get('product_price');
      $product->save();

      return redirect('/products')->with('success', 'Product has been updated');
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

     return redirect('/products')->with('success', 'Product has been deleted Successfully');
}
}