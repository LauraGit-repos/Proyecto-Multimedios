<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function products()
    {
        $products = Product::all();
        return view('products/all-products', compact('products'));
    }

    public function addProduct()
    {
        return view('products/add-product');
    }
    
    public function newProduct(Request $request)
    {
        $validar = Validator::make($request->all(), [
            'code'=> 'max:50|min:1|required|unique:products',
            'name'=> 'max:150|required',
            'price'=> 'numeric|required',
            'description'=> 'max:255|required',
            'photo'=> 'image|required'
        ],['uploaded'=>'La :attribute excede el peso máximo permitido']);

       // dd($request->file('photo'));

        if ($validar->fails()){
            return redirect()->back()->withErrors($validar)->withInput();
        }

        // Get reference for uploaded file.
        $file = $request->file('photo');

        // Define destination path
        $destination_path = public_path('img/products');

        // Move uploaded file to destination path
        $file->move($destination_path, $file->getClientOriginalName());

        // Create new product
        Product::create([
            'code'=> $request->get('code'),
            'name'=> $request->get('name'),
            'price'=> $request->get('price'),
            'description'=> $request->get('description'),
            'photo'=> $file->getClientOriginalName()
        ]);

        return redirect()->to('/products')->with('msg','Nuevo producto agregado con éxito');
    }

    public function deleteProduct($id)
    {
        $product = Product::find($id);
        $product->delete();

        return redirect()->to('/products')->with('msg','Producto eliminado con éxito');
    }

    public function editProduct($id)
    {
        // Get a product by id
        $product = Product::find($id);

        return view('products/edit-product', compact('product'));
    }

    public function changeProduct(Request $request)
    {
        // Get the id from request
        $id = (int) $request->get('id');

        $product = Product::find($id);

        $validar = Validator::make($request->all(), [
            'code'=> 'max:50|min:1|required',
            'name'=> 'max:150|required',
            'price'=> 'numeric|required',
            'description'=> 'max:255|required',
        ],['uploaded'=>'La :attribute excede el peso máximo permitido']);

        if ($validar->fails()){
            return redirect()->back()->withErrors($validar)->withInput();
        }
        
        $file = $request->file('photo');

        // We ask if new photo is present
        $hasNewPhoto = isset($file);

        // Move new photo to the server only if it is present
        if($hasNewPhoto){
            $destination_path = public_path('img/products');
            $file->move($destination_path, $file->getClientOriginalName());
        }

        // Modify product properties
        $product->code = $request->get('code');
        $product->name = $request->get('name');
        $product->price = $request->get('price');
        $product->description = $request->get('description');
        $product->photo = $hasNewPhoto ? $file->getClientOriginalName() : $request->get('image');

        // Save changes
        $product->save();

        return redirect()->to('/products')->with('msg','Producto modificado con éxito');
    }

    public function sellProducts()
    {
        $products = Product::all();
        return view('products/sell-products', compact('products'));
    }

    public function cartProducts(){
        return view('products/cart-products');
    }

    public function payProducts(){
        return view('products/pay-products');
    }
}
