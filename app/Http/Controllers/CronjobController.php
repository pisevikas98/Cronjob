<?php

namespace App\Http\Controllers;
use App\Cronjob;

use Illuminate\Http\Request;

class CronjobController extends Controller
{
    public function Cronjob(){
    	return view('Cronjob');
    }
    public function Cronjobsave(Request $request){
    	$data = new Cronjob();
    	$data->name = $request->name;
    	$data->email = $request->email;
    	$data->phone = $request->phone;
    	$data->save();

    	return redirect('Cronjob');
    }
}
