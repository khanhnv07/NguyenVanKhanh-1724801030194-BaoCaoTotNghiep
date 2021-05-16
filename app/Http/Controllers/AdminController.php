<?php

namespace App\Http\Controllers;

use App\DataTables\AdminDataTable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Admin;
use Intervention\Image\Facades\Image;
use App\Exports\AdminExport;
use Excel;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use App\Models\Comment;
use App\Models\Customer;
use App\Models\Invoice;
use App\Models\Order;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\Include_;

class AdminController extends Controller
{
    public function Index()
    {
        $cus = Customer::get();
        $dem_cus = count($cus);

        $ord = Order::get();
        $dem_ord = count($ord);

        $cmt = Comment::get();
        $dem_cmt = count($cmt);

        $inv = Invoice::get();

        $dem_inv = 0;
        foreach($inv as $item)
        {
            $price = explode(',',$item->service_price);
            for($i=0; $i<count($price); $i++){
                $dem_inv = $dem_inv + $price[$i];
            }
        }


        return view('admin.index')->with(compact('dem_cus','dem_cmt','dem_ord','dem_inv'));
    }

    public function Show()
    {
        $data = Admin::get();
       
        return view('admin.show_admin')->with(compact('data'));
    }

    public function Setting(Request $request)
    {
        if($request->isMethod('post'))
        {
            $data = $request->all();
            // check if current password is correct
            if(Hash::check($data['current_password'],Auth::guard('admin')->user()->password)){
                // check if new and confirm password is matching
                if($data['new_password'] == $data['confirm_password']){
                    Admin::where('id',Auth::guard('admin')->user()->id)
                        ->update(['password'=>bcrypt($data['new_password'])]);
                    Session::flash('success_message','Password has been update successfully');
                }else{
                    Session::flash('confirm_password_message','New Password and Confirm Password not matching');
                    return redirect()->back();
                }
            }else{
                Session::flash('error_message','Your current password is incorrect !');
                return redirect()->back();
            }
            return redirect()->back();
        }else if($request->isMethod('get')){
            return view('admin.setting');
        }
        
    }

    public function Login(Request $request)
    {
        if($request->isMethod('post'))
        {
            $data = $request->all();

            if(Auth::guard('admin')->attempt(['email'=>$data['email'],'password'=>$data['password']])){
                $admin = Admin::where('email',$data['email'])->first();
                Session::put('admin_id',$admin['id']);
                return redirect('admin/index');
            }else{
                Session::flash('error_message','Invalid Email or Password');
                return redirect()->back();
            }
        } 
        return view('admin.login');
    }

    public function Logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/admin');
    }

    public function checkCurrentPassword(Request $request)
    {
        $data = $request->all();
        if(Hash::check($data['current_password'],Auth::guard('admin')->user()->password)){
            echo "true";
        }else{
            echo "false";
        }
    }

    public function editDetail(Request $request)
    {
        if($request->isMethod('post')){
            $data = $request->all();

            if($request->hasFile('image')){
                $image_tmp = $request->file('image');
                if($image_tmp->isValid()){
                    // Get Image Extension 
                    $extension = $image_tmp->getClientOriginalExtension();
                    //Generate New Image Name
                    $imageName = rand(111,99999).'.'.$extension;
                    $imagePath = 'img/admin_images/admin_photos/'.$imageName;
                    // Upload the Image
                    Image::make($image_tmp)->save($imagePath);
                }
            }else {
                    $imageName = $data['current_image'];
                }

            Admin::where('id',Auth::guard('admin')->user()->id)
                ->update([
                    'name'=>$data['name'], 
                    'email'=>$data['email'],
                    'image'=>$imageName
                    ]);
            Session::flash('success_message','Admin details update successfully');
            return redirect()->back();

        }else if($request->isMethod('get'))
        {
            return view('admin.update_admin');
        }
        
    }

    public function addAdmin(Request $request)
    {
        if($request->isMethod('post')){
            $data = $request->all();
            $admin = new Admin();

            if($request->hasFile('image')){
                $image_tmp = $request->file('image');
                if($image_tmp->isValid()){
                    // Get Image Extension 
                    $extension = $image_tmp->getClientOriginalExtension();
                    //Generate New Image Name
                    $imageName = rand(111,99999).'.'.$extension;
                    $imagePath = 'img/admin_images/admin_photos/'.$imageName;
                    // Upload the Image
                    Image::make($image_tmp)->save($imagePath);
                }
            }else {
                    $imageName = "";
                }

            if($data['password'] == $data['confirm_password']){
                $admin->name = $data['name'];
                $admin->image = $imageName;
                $admin->email = $data['email'];
                $admin->password = Hash::make($data['password']);
                $admin->save();
                Session::flash('success_message','Add Admin Successfully !');
                return redirect('admin/index');
            }else{
                Session::flash('confirm_password_message','New password and confirm password is not correct !');
                return redirect()->back();
            }

           
        }else if($request->isMethod('get'))
        {
            return view('admin.add_admin');
        }
    }


    public function Delete(Request $request)
    {
        $data = $request->all();
        $list_id = $data['id'];
        foreach($list_id as $item){
            Admin::where('id',$item)->delete();
        }
        return redirect()->back();
    }

    public function forgotPassword()
    {
        return view('admin.forgot_password');
    }

    public function resetPassword(Request $request)
    {
        $data = $request->all();
        
        $newpass = rand(100000,999999);
        Session::flash('newpass',$newpass);

        // Admin::where('email',$data['email'])->update([
        //     'password' => Hash::make($newpass)
        // ]);
        $a = DB::table('admins')->where('email',$data['email'])->update([
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

    public function exportInToExcel()
    {
        return Excel::download(new AdminExport,'adminlist.xlsx');
    }
}