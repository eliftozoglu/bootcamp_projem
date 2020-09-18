<?php

namespace App\Exports;

use App\Product;
use App\User;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;



class UserExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
      //   return User::all();

        return Product::all()->where('is_approve','=', '1');
        //    return Product::all()->get('name');

    }

}
