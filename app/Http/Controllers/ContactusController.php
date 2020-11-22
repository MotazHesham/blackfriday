<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactUs;
use Validator;
use Auth;

class ContactusController extends Controller
{
    public function index(){
        $rows = ContactUs::paginate(10);
        return view('admin.contactus.index',compact('rows'));
    }

    public function delete($id){
        

        $row = ContactUs::find($id);

        if(is_null($row)){
            return back()->with('error',__('Row Not Found'));
        }

        $row->delete();

        return back()->with('success',__('Row Deleted'));

    }

    public function submit(Request $request){
        $this->validate($request,[
            'name' => 'required|min:3|max:255',
            'email' => 'required|email|max:255',
            'phone_number' => 'required|min:3|max:255',
        ]);


        $row = new ContactUs();
        $row->name = $request->name;
        $row->email = $request->email;
        $row->phone = $request->phone_number;
        $row->note = $request->note;
        $row->save();

        return redirect()->back()->with('success',__('Successfully sent the message'));
    }
}
