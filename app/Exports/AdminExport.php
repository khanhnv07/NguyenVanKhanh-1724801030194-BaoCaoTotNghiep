<?php

namespace App\Exports;

use App\Models\Admin;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class AdminExport implements FromCollection,WithHeadings
{
    public function headings():array{
        return[
            'id',
            'name',
            'image',
            'email',
            'created_at'
        ];
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        // return Admin::all();
        return collect(Admin::getAdmin());
    }
}
