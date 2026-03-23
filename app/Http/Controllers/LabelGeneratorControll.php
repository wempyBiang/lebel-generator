<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\LebelImport;
use Maatwebsite\Excel\Facades\Excel;

class LabelGeneratorControll extends Controller
{
    
    public function import(Request $request){
        $import = new LebelImport();    
        Excel::import($import, $request->file('lebel'));
        
        $data = $import->data;
        $fullPage = intval(count($data)/28);
        $restElement = count($data)%28;
        return view('result', compact('data', 'fullPage', 'restElement'));
    }
}
