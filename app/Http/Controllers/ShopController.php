<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shop;

class ShopController extends Controller
{
    public function getform()
    {
        return view('form');
    }
    public function submitform(Request $request)
    {
        $shop = new Shop();
        $shop->date = $request->date;
        $shop->full_name = $request->full_name;
        $shop->mob_no = $request->mob_no;
        $shop->address = $request->address;
        $shop->email = $request->email;
        $shop->fb_account = $request->fb_account;
        $shop->units = $request->units;
        $shop->premium_registration = $request->premium_registration;
        $shop->discount = $request->discount;
        $shop->total_payment = $request->total_payment;
        $shop->payment_mode = $request->payment_mode;
        $shop->save();
        return redirect('table');
    }
    public function gettable()
    {
        $data = shop::paginate(5);
        return view('table',compact('data'));
    }
    public function editform($id)
    {
        $data = shop::find($id);
        return view('edit',compact('data'));
    }
    public function updateform(Request $request,$id)
    {
        $shop = Shop::find($id);
        $shop->date = $request->date;
        $shop->full_name = $request->full_name;
        $shop->mob_no = $request->mob_no;
        $shop->address = $request->address;
        $shop->email = $request->email;
        $shop->fb_account = $request->fb_account;
        $shop->units = $request->units;
        $shop->premium_registration = $request->premium_registration;
        $shop->discount = $request->discount;
        $shop->total_payment = $request->total_payment;
        $shop->payment_mode = $request->payment_mode;
        $shop->update();
        return redirect('table');
    }
    public function deleteform(Request $request,$id)
    {
        $shop = Shop::find($id);
        $shop->date = $request->date;
        $shop->full_name = $request->full_name;
        $shop->mob_no = $request->mob_no;
        $shop->address = $request->address;
        $shop->email = $request->email;
        $shop->fb_account = $request->fb_account;
        $shop->units = $request->units;
        $shop->premium_registration = $request->premium_registration;
        $shop->discount = $request->discount;
        $shop->total_payment = $request->total_payment;
        $shop->payment_mode = $request->payment_mode;
        $shop->delete();
        return redirect('table');
    }
}
