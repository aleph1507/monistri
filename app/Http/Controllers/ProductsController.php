<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use Image;
use Session;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(){
        $this->middleware('auth');
    }

    public function index()
    {
        $products = Product::all();
        $categories = Category::all();
        return view('products.index')->withProducts($products)->withCategories($categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
                'ime' => 'required|min:2',
                'cena' => 'required',
                'slika' => 'sometimes|image'
            ]);

        $product = new Product();
        if($request->hasFile('slika')){
            $slika = $request->file('slika');
            $filename = time() . '.' . $slika->getClientOriginalExtension();
            $location = public_path('/images/product_images/' . $filename);
            Image::make($slika)->save($location); 
            $product->slika = $filename;  
        }

        $product->ime = $request->ime;
        $product->cena = $request->cena;
        if($request->category)
            $product->category_id = $request->category;

        $product->save();

        Session::flash('success', 'Продуктот е зачуван');

        return redirect('/products');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::all();
        return view('products.edit')->withProduct($product)->withCategories($categories);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
                'ime' => 'sometimes|min:2',
                'cena' => 'sometimes',
                'slika' => 'sometimes|image'
            ]);

        $product = Product::find($id);

        if($request->ime)
            $product->ime = $request->ime;

        if($request->cena)
            $product->cena = $request->cena;

        if($request->category)
            $product->category_id = $request->category;

        if($request->hasFile('slika')){
            $slika = $request->file('slika');
            $filename = time() . '.' . $slika->getClientOriginalExtension();
            $location = public_path('/images/product_images/' . $filename);
            Image::make($slika)->save($location); 
            $product->slika = $filename;
        }

        $product->save();

        Session::flash('success', 'Продуктот е променет.');

        return redirect('/products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produkt = Product::find($id);

        $produkt->delete();

        Session::flash('success', 'Продуктот е избришан.');

        return redirect('/products');
    }
}