<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TableController extends Controller
{
    public function table(){
        return view('tables.table');
    }

    public function datatables(){
        return view('tables.data-tables');
    }
}
