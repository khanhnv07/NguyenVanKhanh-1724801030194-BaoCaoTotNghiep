<?php

namespace App\Http\Controllers;

// use App\Http\Livewire\Employees;
use App\Models\Employee;
use App\Models\Majob;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MajobController extends Controller
{
    public function addMajob(){
        $majob = [
            ['name' => "Tho Moc"],
            ['name' => "Don Nha"],
            ['name' => "Sua May Lanh"],
            ['name' => "Cham Soc Cay"],
            ['name' => "Diet Co"]
        ];

        Majob::insert($majob);
        return "insert majob thanh cong";
    }

    public function addEmployee()
    {
        $employee = new Employee();
        $employee->name = "dum";
        $employee->email = "dum@gmail.com";
        $employee->phone = "123";
        $employee->image = "asd.jpg";
        $employee->idcard = "1233";
        $employee->address = "asdasd";
        $employee->worklist = "12";
        $employee->status = 1;
        $employee->save();

        $majobids = [1,3,4];
        $employee->majobs()->attach($majobids);
        return "success";
    }

    public function getAllMajobByEmployee($id)
    {
        $employee = Employee::find($id);
        $majobs = $employee->majobs;
        foreach($majobs as $key => $value){
            $a = $majobs[$key]->name;
            $a = $a ." ". $a;
            // echo $majobs[$key]->name;
        }
        echo $a ;
        // return $majobs;
    }

    public function getAllEmployeByMajob($id){
        $majob = Majob::find($id);
        $employees = $majob->employees;
        return $employees;
    }

    public function getAllEmployee()
    {
        $data = DB::table('employees')
            // ->join('majob_employees','majob_employees.employee_id','=','employees.id')
            // ->join('majobs','majobs.id','=','majob_employees.majob_id')
            ->get();
        
        // $employee = Employee::find($id);
        dd($data['0']->id);
    }
}
