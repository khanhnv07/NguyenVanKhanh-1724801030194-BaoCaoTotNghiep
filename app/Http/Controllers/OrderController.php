<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use App\Models\Employee;
use App\Models\Majob;
use App\Models\Order;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    public function getOrder(Request $request)
    {
        if($request->isMethod('post')){
            $data = $request->all();
            $order = new Order();
            $order->customer_name = $data['customer_name'];
            $order->customer_email = $data['customer_email'];
            $order->customer_phone = $data['customer_phone'];
            $order->customer_address =  $data['customer_address'];
            $order->service = implode(',',$data['service']);

            if(!empty($data['emp_id'])){
                $order->emp_id = $data['emp_id'];
            }else{
                $order->emp_id = null;
            }
            
            $order->order_status = 0;
            $order->save();
            Session()->flash('order_success','Bạn đã đặt dịch vụ thành công');
            $mail_c = $data['customer_email'];
            $details = [
                'title' => 'Mail from HomeService',
                'body' => 'Cam on ban da dat dich vu tu Homeservice'
            ];

            Mail::to($mail_c)->send(new SendMail($details));

            return redirect()->back();

        }else if($request->isMethod('get')){
            $data = Order::get();
            $services = Service::get();
            return view('order.show_order')->with(compact('data','services'));
        }
    }
    public function Invoice($id)
    {
        $employees = DB::table('employees')->get();
        $majobs = DB::table('majobs')->get();
        $service = DB::table('services')->get();
        $order = DB::table('orders')->where('order_id',$id)->first();
        return view('invoice.create_invoice')->with(compact('majobs','employees','order','service'));
    }

    public function createOrder(Request $request)
    {
        if($request->isMethod('get')){
            $services = Service::get();
            return view('order.create_order')->with(compact('services'));
        }else if($request->isMethod('post')){
            $data = $request->all();
            $order = new Order();
            $order->customer_name = $data['customer_name'];
            $order->customer_email = $data['customer_email'];
            $order->customer_phone = $data['customer_phone'];
            $order->customer_address =  $data['customer_address'];
            $order->service = implode(',',$data['service']);
            $order->order_status = 0;
            $order->save();
            Session()->flash('order_success','Bạn đã đặt dịch vụ thành công');
            return redirect()->back();
        }
    }

    public function editOrder(Request $request,$id)
    {
        if($request->isMethod('get')){
            $data = Order::where('order_id',$id)->first();
            return view('order.edit_order')->with(compact('data'));
        }
    }
    
}
