<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MenuController extends Controller
{
    public function addMenu(Request $request)
    {
        if($request->isMethod('post'))
        {
            $data = $request->all();
            $menu = new Menu();
            $menu->menu_name = $data['menu_name'];
            $menu->menu_link = $data['menu_link'];
            $menu->menu_desc = $data['menu_desc'];
            $menu->menu_status = $data['menu_status'];
            $menu->save();
            Session::flash('success_message','Add Menu Successfully !');
            return redirect()->back();
        }else if($request->isMethod('get')){
            $menu = Menu::get();
            return view('menu.add_menu')->with(compact('menu'));
        }
    }
    public function editMenu(Request $request,$id)
    {
        return view('menu.edit_menu');
    }
}
