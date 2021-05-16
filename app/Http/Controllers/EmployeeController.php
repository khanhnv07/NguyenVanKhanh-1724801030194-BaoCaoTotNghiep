<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use App\Models\Employee;
use App\Models\Majob;
use App\Models\Service;
use App\Models\WorkList;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class EmployeeController extends Controller
{
    public function Create(Request $request)
    {
        if($request->isMethod('get')){
            $majob = Majob::get();
            return view('employee.create')->with(compact('majob'));
        }else if($request->isMethod('post')){
            $data = $request->all();
            $employee = new Employee();

            if($request->hasFile('image')){
                $image_tmp = $request->file('image');
                if($image_tmp->isValid()){
                    $extension = $image_tmp->getClientOriginalExtension();
                    $imageName = rand(111,99999).'.'.$extension;
                    $imagePath = 'img/employee_images/'.$imageName;
    
                    Image::make($image_tmp)->save($imagePath);
                }
            }else {
                    $imageName = "";
                }

            $employee->name = $data['name'];
            $employee->image = $imageName;
            $employee->email = $data['email'];
            $employee->password = Hash::make($data['password']);
            $employee->idcard = $data['idcard'];
            $employee->birth = $data['birth'];
            $employee->address = $data['address'];
            $employee->phone = $data['phone'];
            $employee->salary = $data['salary'];
            $employee->worklist = 0;
            $employee->majobId = implode(',',$data['majobId']);
            $employee->status = $data['status'];

            $employee->save();
            return redirect()->back();
        }
    }

    public function Show()
    {
        $data = array();
        $data = Employee::get();
        $majobs = Majob::get();
        return view('employee.show')->with(compact('data'))->with(compact('majobs'));
    }
    public function Edit(Request $request,$id)
    { 
        if($request->isMethod('get')){
            $majob = Majob::get();
            $data = DB::table('employees')->where('id',$id)->get();
            return view('employee.edit')->with(compact('data'))->with(compact('majob'));
        }else if($request->isMethod('post')){
            $data = $request->all();
           
            if($request->hasFile('image')){
                $image_tmp = $request->file('image');
                if($image_tmp->isValid()){
                    // Get Image Extension 
                    $extension = $image_tmp->getClientOriginalExtension();
                    //Generate New Image Name
                    $imageName = rand(111,99999).'.'.$extension;
                    $imagePath = 'img/employee_images/'.$imageName;
                    // Upload the Image
                    Image::make($image_tmp)->save($imagePath);
                }
            }else {
                    $imageName = $data['image_old'];
            }

            Employee::where('id',$id)
                ->update([
                    'name'=>$data['name'], 
                    'image'=>$imageName,
                    'email'=>$data['email'],
                    'idcard'=>$data['idcard'],
                    'birth'=>$data['birth'],
                    'address'=>$data['address'],
                    'phone'=>$data['phone'],
                    'salary'=>$data['salary'],
                    'worklist'=>$data['worklist'],
                    'majobId' => implode(',',$data['majobId']),
                    'status'=>$data['status']
                    ]);
            Session::flash('success_message','Admin details update successfully');
            return redirect('admin/employee/show');
        }
        
    }
    // public function Delete($id){
    //     Employee::where('id',$id)->delete();
    //     return redirect()->back();
    // }

    public function Delete( Request $request)
    {
        $data = $request->all();
        $list_id = $data['employee_id'];
        foreach($list_id as $item){
            Employee::where('id',$item)->delete();
        }
        return redirect()->back();
    }

    public function employeeIndex()
    {
        $work_list = WorkList::where('employee_id',Session::get('employee_id'))->where('status',0)->get();
        $tb = 0;
        foreach($work_list as $key => $item){
                
            $tb = $tb +1;
        }
        return view('pageEmployee.index')->with(compact('tb','work_list'));
    }

    public function Login(Request $request){
        if($request->isMethod('post'))
        {
            $data = $request->all();
            if(Auth::guard('employee')->attempt(['email'=>$data['email'],'password'=>$data['password']])){
                $employee = Employee::where('email',$data['email'])->first();
                Session::put('employee_id',$employee['id']);
                Session::put('employee_name',$employee['name']);
                Session::put('employee_image',$employee['image']);

                return redirect('/employee/profile');
            }else{
                Session::flash('error_message','Invalid Email or Password');
                return redirect()->back();
            }
        } 
        return view('pageEmployee.login_employee');
    }

    public function Logout()
    {
        Auth::guard('employee')->logout();
        return redirect('/employee');
    }

    public function Profile()
    {
        $work_list = WorkList::where('employee_id',Session::get('employee_id'))->where('status',0)->get();
        $tb = 0;
        foreach($work_list as $key => $item){
                
            $tb = $tb +1;
        }
        $employee = Employee::where('id',Session::get('employee_id'))->first();
        $majobs = Majob::get();
        return view('pageEmployee.profile')->with(compact('employee','majobs','tb','work_list'));
    }

    public function WorkListPro()
    {
        $services = Service::get();
        $work_list = WorkList::where('employee_id',Session::get('employee_id'))->where('status',0)->get();
        $tb = 0;
        foreach($work_list as $key => $item){
                
            $tb = $tb +1;
        }
        return view('pageEmployee.life_work')->with(compact('work_list','services','tb'));
    }
    public function WorkListSuccess()
    {
        $services = Service::get();
        $work_list = WorkList::where('employee_id',Session::get('employee_id'))->where('status',1)->get();
        $tb = 0;
        foreach($work_list as $key => $item){
                
            $tb = $tb +1;
        }
        return view('pageEmployee.life_work_success')->with(compact('work_list','services','tb'));
    }
    public function Done($id)
    {
        $work_list = WorkList::where('id',$id)->update([
            'status' => '1'
        ]);
        return redirect()->back();
    }

    public function ForgotPassword(Request $request)
    {
        if($request->isMethod('get')){
            return view('pageEmployee.forgot_password');
        }else if($request->isMethod('post'))
        {
            $data = $request->all();
        
            $newpass = rand(100000,999999);
            Session::flash('newpass',$newpass);

            // Admin::where('email',$data['email'])->update([
            //     'password' => Hash::make($newpass)
            // ]);
            $a = DB::table('employees')->where('email',$data['email'])->update([
                'password' => bcrypt($newpass)
            ]);
                    
            $mail_c = $data['email'];
            $details = [
                'title' => 'Mail from HomeService',
                'body' => 'password new '
            ];

            Mail::to($mail_c)->send(new SendMail($details));

            return redirect('/admin');
            }
    }
   
}
