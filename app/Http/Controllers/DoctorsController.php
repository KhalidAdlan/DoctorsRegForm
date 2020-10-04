<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorsController extends Controller
{
    public function index()
    {
        return view('register');
    }


    public function doUpload($request)
    {
        $permenant_registration_filename = 'pr_'.$request->first_name .'_'.$request->last_name.'_'.$request->phone . $request->file('permenant_registration')->extenstion();
        $graduation_certificate_filename = 'gc_'.$request->first_name .'_'.$request->last_name.'_'.$request->phone . $request->file('permenant_registration')->extenstion();
        $national_id_filename =            'ni_'.$request->first_name .'_'.$request->last_name.'_'.$request->phone . $request->file('permenant_registration')->extenstion();

        $request->file('permenant_registration')->storeAs('', $permenant_registration_filename);
        $request->file('graduation_certificate')->storeAs('', $graduation_certificate_filename);
        $request->file('national_id')->storeAs('', $national_id_filename);


    }

    public function store(Request $request)
    {
          $this->doUpload($request);
      
          

    }


   
}
