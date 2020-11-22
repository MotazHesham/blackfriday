<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Category;
use App\Models\Product;
use Validator;
use Auth;

class CategoriesController extends Controller
{
    public function index(){
        

            $categories = Category::paginate(10);
            return view('admin.categories.index',compact('categories'));

    
    }

    public function add(){
        

            return view('admin.categories.add');

    
    }

    public function store(Request $request){

        

            $rules = [
                'name' => 'required|min:3|max:255',
                'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            ];

            $validator = Validator::make($request->all(),$rules);

            if($validator->fails()){
                return back()->with('errors',$validator->errors());
            }

            $category = new Category();
            $category->name = $request->name;
            $category->image = Storage::disk('public')->put('categories', $request->image);
            $category->admin_id = auth()->id();
            $category->save();

            return redirect()->route('admin.categories')->with('success',__('Category Created Successfully'));

    
    }

    public function edit($id){
        

            $category = Category::find($id);

            if(is_null($category)){
                return back()->with('error',__('Category Not Found'));
            }


            return view('admin.categories.edit',compact('category'));

    
    }

    public function update(Request $request){
        

            $category = Category::find($request->id);

            if(is_null($category)){
                return back()->with('error',__('Category Not Found'));
            }

            if (request()->name && request('name') != '' && request('name') != $category->name){
                $validator = Validator::make($request->all(), [
                    'name' => 'required|min:3|max:255',
                ]);
                if ($validator->fails()) {
                    return back()->with('errors',$validator->errors());
                }
                $category->name = $request->name;
            }
            if (request()->image && request('image') != '' && request('image') != $category->image){
                $validator = Validator::make($request->all(), [
                    'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
                ]);
                if ($validator->fails()) {
                    return back()->with('errors',$validator->errors());
                }
                $category->image = Storage::disk('public')->put('categories', $request->image);
            }
            $category->save();

            return redirect()->route('admin.categories')->with('success',__('Category updated Successfully'));

    
    }

    public function delete($id){
        

            $category = Category::find($id);

            if(is_null($category)){
                return back()->with('error',__('Category Not Found'));
            }

            $category->delete();

            return back()->with('success',__('Category Deleted'));

    
    }

    
    public function categories(){
        $categories = Category::all();
        return view("categories",compact('categories'));
    }

    public function category($id){
        $categories = Category::all();
        $products = Product::where('category_id',$id)->paginate(16);
        return view("categories",compact('categories','products'));
    }


    
}
