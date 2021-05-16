<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Invoice;
use App\Models\Majob;
use App\Models\Order;
use App\Models\Service;
use App\Models\WorkList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\VarDumper\Cloner\Data;

class InvoiceController extends Controller
{
    public function saveInvoice(Request $request)
    {
        $data = $request->all();
        
        $invoice = new Invoice();
        $invoice->customer_name = $data['customer_name'];
        $invoice->customer_email = $data['customer_email'];
        $invoice->customer_phone = $data['customer_phone'];
        $invoice->customer_address = $data['customer_address'];
        $invoice->select_service_name = implode(',', $data['service_select']);
        $invoice->service_price = implode(',', $data['service_price']);
        $invoice->admin_id = $data['admin_id'];
        $invoice->employee_id = implode(',', $data['employee_id']);
        $invoice->payment_type = $data['payment_type'];
        $invoice->paid_status = $data['paid_status'];   
        $invoice->status = $data['invoice_status'];
        $invoice->save();

        if($data['invoice_status'] == 1 && $data['paid_status'] == 1 ){
            Order::where('order_id',$data['order_id'])->update([
                'order_status' => '2',
            ]);
        }else if($data['invoice_status'] == 2 || $data['paid_status'] == 2 ){
            Order::where('order_id',$data['order_id'])->update([
                'order_status' => '1',
            ]);
        }
        
        $employee_id = $data['employee_id'];
        foreach($employee_id as $item){
            $work_list = new WorkList();
            $work_list->employee_id = $item;
            $work_list->service_id = implode(',', $data['service_select']);
            $work_list->time_end = "";
            $work_list->status = "0";
            $work_list->address = $data['customer_address'];
            $work_list->save();
        }
        
        return redirect('admin/order/show');
    }

    public function showInvoice()
    {
        $data = Invoice::get();
        $services = Service::get();

        
        return view('invoice.show_invoice')->with(compact('data','services'));
    }
    public function detailInvoice($id)
    {
        $data = DB::table('invoices')
            ->where('invoice_id',$id)->join('admins','admins.id','=','invoices.admin_id')->first();

        $services = Service::get();
        $prices = explode(',',$data->service_price);
        $total = 0;
       
        foreach($prices as $price){
            $total =  $total + $price;
        }
        
        return view('invoice.detail_invoice')->with(compact('data','services','total'));
    }
}
