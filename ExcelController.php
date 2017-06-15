<?php

namespace CRM\Http\Controllers;

use Illuminate\Http\Request;
use Excel;
use Illuminate\Support\Facades\Input;
class ExcelController extends Controller
{
    //

    public function  ExportClients()
    {
        Excel::create('clients', function ($excel) {
            $excel->sheet('clients', function ($sheet) {
                $sheet->loadView('ExportClients');
            });
            $excel->setDescription('A demonstration to change the file properties');
        })->export('csv');

    }

    public function  upload()
    {
        return view('upload');
    }


    public function  ImportClients()
    {

        $file= Input::file('file');
        $file_name = $file->getClientOriginalName();
        $file->move('files',$file_name);


//        $results=  Excel::load('files/'.$file_name, function($reader) {
//
//        })->get();


        $results=Excel::load('files/'.$file_name,function($reader)
            {
            $reader->all();
            })->get();





//        $results=  Excel::load('files/'.$file_name, function($reader) {
//
//            // Getting all results
//            $results = $reader->get();
//
//            // ->all() is a wrapper for ->get() and will work the same
//            $results = $reader->all();
//
//        });
      return view('ImportedClients', ['clients'=> $results]);
    }
}
