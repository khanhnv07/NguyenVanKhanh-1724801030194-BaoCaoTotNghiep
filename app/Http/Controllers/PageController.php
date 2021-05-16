<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Customer;
use App\Models\Employee;
use App\Models\Majob;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function Index()
    {
        $services = Service::get();
        return view('page.home')->with(compact('services'));
    }
    // public function Service()
    // {
    //     return view('page.service');
    // }
    public function Indexx()
    {
        $services = Service::get();
        $customer = Customer::where('id',Session::get('customer_id'))->first();

        $comments = DB::table('comments')->join('customers','comments.customer_id','=','customers.id')->get()->take(4);
        return view('page.index')->with(compact('services','customer','comments'));
    }

    public function myTeam()
    {
        $employees = Employee::get();
        $majobs = Majob::get();
        $customer = Customer::where('id',Session::get('customer_id'))->first();
        return view('page.myteam')->with(compact('majobs','employees','customer'));
    }

    public function Service()
    {
        $services = Service::get();
        return view('page.all_service')->with(compact('services'));
    }
    public function serviceDetail($id)
    {
        $services = Service::where('id',$id)->get();
        return view('page.all_service')->with(compact('services'));
    }
}
