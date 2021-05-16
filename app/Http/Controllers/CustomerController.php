<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Comment;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class CustomerController extends Controller
{
    public function Register(Request $request)
    {   
        $data = $request->all();

        $customer = new Customer();
        $customer->customer_name = $data['name'];
        $customer->customer_email = $data['email'];
        $customer->customer_phone = $data['phone'];
        $customer->customer_address = $data['address'];
        $customer->customer_password = md5($data['password']);
        $customer->customer_reorder = '0';
        $customer->status = '0';
        $customer->save();
        Session()->flash('order_success','Bạn đã đăng ký thành công');
        return redirect()->back();

    }
    public function Login(Request $request)
    {
        $data = $request->all();
        $customer = Customer::where('customer_email',$data['email'])->first();
        if($customer->customer_password == md5($data['password'])){
            Session::put('customer_id',$customer->id);
            Session::put('customer_name',$customer->customer_name);
            Session::put('customer_email',$customer->customer_email);
            Session()->flash('order_success','Đăng nhập thành công');
            return redirect()->back();
        }else{
            Session()->flash('order_success','Đăng nhập thất bại');
            return redirect()->back();
        }
    }

    public function Logout()
    {
        Session::forget('customer_id');
        Session::forget('customer_name');
        Session()->flash('order_success','Đăng xuất thành công');
        return redirect()->back();
    }

    public function myInfo()
    {
        $customer = Customer::where('id',Session::get('customer_id'))->first();

        return view('Account.customer_info')->with(compact('customer'));
    }
    public function myOrder()
    {
        $order = Order::where('customer_email',Session::get('customer_email'))->get();
        $services = Service::get();
       
        return view('Account.customer_order')->with(compact('order','services'));
    }
    public function Comment(Request $request)
    {
        $data = $request->all();

        $coment = new Comment();
        $coment->customer_id = $data['customer_id'];
        $coment->comment = $data['comment'];
        $coment->status = '0';

        $coment->save();
        Session()->flash('order_success','Bạn đã danh gia thành công');
        return redirect()->back();
    }

    public function customerForgot(Request $request)
    {
        $data = $request->all();
        
            $newpass = rand(100000,999999);
            Session::flash('newpass',$newpass);

            // Admin::where('email',$data['email'])->update([
            //     'password' => Hash::make($newpass)
            // ]);
            $a = DB::table('customers')->where('customer_email',$data['email'])->update([
                'customer_password' => md5($newpass)
            ]);
                    
            $mail_c = $data['email'];
            $details = [
                'title' => 'Mail from HomeService',
                'body' => 'password new '
            ];

            Mail::to($mail_c)->send(new SendMail($details));
            Session()->flash('order_success','Mật khẩu đã được gửi về mail');
            return redirect('/home-service/indexx');
    }
    
}
