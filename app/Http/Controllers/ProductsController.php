<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Product;
use App\Models\Category;
use Validator;
use Auth;

class ProductsController extends Controller
{
    public function index(){
        

            $products = Product::paginate(10);
            return view('admin.products.index',compact('products'));

        
    }

    public function add(){
        
            $categories = Category::all();
            return view('admin.products.add',compact('categories'));

        
    }

    public function store(Request $request){

        

            $this->validate($request,[
                'name' => 'required|min:3|max:255',
                'details' => 'required|min:3|max:255',
                'price' => 'required|regex:/^\d+(\.\d{1,2})?$/',
                'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
                'category'=>'required|integer'
            ]);

            $product = new Product();
            $product->name = $request->name;
            $product->details = $request->details;
            $product->price = $request->price;
            $product->category_id = $request->category;
            $product->image = Storage::disk('public')->put('products', $request->image);
            $product->admin_id = auth()->id();
            $product->save();

            return redirect()->route('admin.products')->with('success',__('Product Created Successfully'));

        
    }

    public function edit($id){
        

            $product = Product::find($id);

            if(is_null($product)){
                return back()->with('error',__('Product Not Found'));
            }
            
            $categories = Category::all();

            return view('admin.products.edit',compact('product','categories'));

        
    }

    public function update(Request $request){
        

            $product = Product::find($request->id);

            if(is_null($product)){
                return back()->with('error',__('Product Not Found'));
            }

            if (request()->name && request('name') != '' && request('name') != $product->name){ 
                $this->validate($request,[
                    'name' => 'required|min:3|max:255',
                ]);
                $product->name = $request->name;
            }
            if (request()->details && request('details') != '' && request('details') != $product->details){ 
                $this->validate($request,[
                    'details' => 'required|min:3|max:255',
                ]);
                $product->details = $request->details;
            }
            if (request()->price && request('price') != '' && request('price') != $product->price){ 
                $this->validate($request,[
                    'price' => 'required|regex:/^\d+(\.\d{1,2})?$/',
                ]);
                $product->price = $request->price;
            }
            if (request()->image && request('image') != '' && request('image') != $product->image){
                $this->validate($request,[
                    'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
                ]);
                $product->image = Storage::disk('public')->put('products', $request->image);
            }
            $product->category_id = $request->category;
            $product->save();

            return redirect()->route('admin.products')->with('success',__('Product updated Successfully'));

        
    }

    public function delete($id){
        

            $product = Product::find($id);

            if(is_null($product)){
                return back()->with('error',__('Product Not Found'));
            }

            $product->delete();

            return back()->with('success',__('Product Deleted'));

        
    }

    public function update_trending(Request $request){

        $product = Product::find($request->id);
        $product->trending = $request->status;
        $product->save();
        return 1;
    }
}
