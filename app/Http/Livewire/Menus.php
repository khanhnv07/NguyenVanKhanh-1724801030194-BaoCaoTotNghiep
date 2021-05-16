<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Menu;

class Menus extends Component
{
    public $ide;
    public $menu_name;
    public $menu_link;
    public $menu_desc;
    public $menu_status;        


    public function storeMenu()
    {
        $validatedData  = $this->validate([
            'menu_name' =>'required',
            'menu_link' =>'required',
            'menu_desc' =>'required',
            'menu_status'=> 'required'
        ]);
        Menu::create($validatedData);
        session()->flash('message','Menu created Successfully!!');
        
        $this->emit('menuAdded');
    }

    public function editMenu($id)
    {
        $menu = Menu::where('id',$id)->first();
        $this->ide = $menu->id; 
        $this->menu_name = $menu->menu_name; 
        $this->menu_link = $menu->menu_link; 
        $this->menu_desc = $menu->menu_desc; 
        $this->menu_status = $menu->menu_status; 
    }

    public function updateMenu()
    {
        $this->validate([
            'menu_name' => 'required',
            'menu_link' => 'required',
            'menu_desc' => 'required',
            'menu_status' => 'required'
            
        ]);
        if($this->ide){
            $menu = Menu::find($this->ide);
            $menu -> update([
                'menu_name' => $this->menu_name,
                'menu_link' => $this->menu_link,
                'menu_desc' => $this->menu_desc,
                'menu_status' => $this->menu_status
                
            ]);
            session()->flash('message','Menu updated Successfully !' );
            $this->emit('menuUpdated');
        }
    }

    public function deleteMenu($id)
    {
        if($id){
            Menu::where('id',$id)->delete();
            session()->flash('message','Menu delete Successfully !' );
        }
    }

    public function render()
    {
        $menus = Menu::orderBy('id','DESC')->get();
        return view('livewire.menus',['menus' => $menus]);
    }
}
