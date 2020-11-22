<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;
use Validator;
use Auth;

class OrdersController extends Controller
{
    public function index(){
        $orders = Order::with('product')->paginate(10);
        return view('admin.orders.index',compact('orders'));
    }

    public function delete($id){
        

        $order = Order::find($id);

        if(is_null($order)){
            return back()->with('error',__('Order Not Found'));
        }

        $order->delete();

        return back()->with('success',__('Order Deleted'));


    }

    
    public function order($id){
        $selected_product = $id;
        $products = Product::all();
        return view("order_form",compact('selected_product','products'));
    }

    public function order_submit(Request $request){
        $this->validate($request,[
            'name' => 'required|min:3|max:255',
            'email' => 'required|email|max:255',
            'address' => 'required|min:3|max:255',
            'phone_number' => 'required|min:3|max:255',
            'product'=>'required|integer',
            'quantity'=>'required|integer'
        ]);

        $product = Product::find($request->product);

        if(is_null($product)){
            return back()->with('error',__('Product Not Found'));
        }

        $order = new Order();
        $order->name = $request->name;
        $order->email = $request->email;
        $order->address = $request->address;
        $order->phone = $request->phone_number;
        $order->quantity = $request->quantity;
        $order->product_id = $request->product;
        $order->total_price = ($request->quantity * $product->price);
        $order->save();

        return redirect()->back()->with('success',__('Order Requested Successfully'));
    }
}
