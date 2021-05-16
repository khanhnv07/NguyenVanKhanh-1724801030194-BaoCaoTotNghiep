<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Session;
use DB;


class ServiceController extends Controller
{
    public function addService(Request $request)
    {
        if($request->isMethod('post'))
        {
            $data =  $request->all();
            
            $service = new Service();
            if($request->hasFile('service_image')){
                $image_tmp = $request->file('service_image');
                if($image_tmp->isValid()){
                    // Get Image Extension 
                    $extension = $image_tmp->getClientOriginalExtension();
                    //Generate New Image Name
                    $imageName = rand(111,99999).'.'.$extension;
                    $imagePath = 'img/service_images/'.$imageName;
                    // Upload the Image
                    Image::make($image_tmp)->save($imagePath);
                }
            }else {
                    $imageName = "";
                }
            $service->service_name = $data['service_name'];
            $service->service_image = $imageName;
            $service->service_icon = $data['service_icon'];
            $service->service_desc = $data['service_desc'];
            $service->service_detail = $data['service_detail'];
            $service->service_status = $data['service_status'];
            $service->save();
            Session::flash('success_message','Add Service Successfully !');
            return redirect()->back();
        }else if($request->isMethod('get'))
        {
            return view('service.add_service');
        }
        
    }

    public function showService(Request $request)
    {
        $data = Service::get();
        return view('service.show_service')->with(compact('data'));
    }

    public function editService(Request $request, $id)
    {
        if($request->isMethod('post'))
        {
            $data = $request->all();
           
            if($request->hasFile('service_image')){
                $image_tmp = $request->file('service_image');
                if($image_tmp->isValid()){
                    // Get Image Extension 
                    $extension = $image_tmp->getClientOriginalExtension();
                    //Generate New Image Name
                    $imageName = rand(111,99999).'.'.$extension;
                    $imagePath = 'img/service_images/'.$imageName;
                    // Upload the Image
                    Image::make($image_tmp)->save($imagePath);
                }
            }else {
                    $imageName = $data['service_image_old'];
            }

            Service::where('id',$id)
                ->update([
                    'service_name'=>$data['service_name'], 
                    'service_image'=>$imageName,
                    'service_icon'=>$data['service_icon'],
                    'service_desc'=>$data['service_desc'],
                    'service_detail'=>$data['service_detail'],
                    'service_status'=>$data['service_status']
                    ]);
            Session::flash('success_message','Admin details update successfully');
            return redirect('admin/service/show');
            
        }else if($request->isMethod('get'))
        {
            $data = Service::where('id',$id)->get(); 
            return view('service.edit_service')->with(compact('data'));
        }
    }


    public function Delete(Request $request)
    {
        $data = $request->all();
        $list_id = $data['service_id'];
        foreach($list_id as $item){
            Service::where('id',$item)->delete();
        }
        return redirect()->back();
    }

    

}
