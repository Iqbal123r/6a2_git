<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\studentdetails;

class HomeController extends Controller
{
    public function home(){
    	return view('welcome');
    }
    public function about(){

    	$name='abc';
    	$email='abc@gmail.com';
    	return view('about',['myname'=>$name,'myemail'=>$email]);
    }
   
public function add(){
        return view('add');
    }
    public function store(Request $request){
        $name=$request->name;
        $email=$request->email;
         $salary=$request->salay;
          $description=$request->description;


          $obj =new studentdetails();
          $obj->name=$name;
          $obj->email=$email;
          $obj->salary=$salary;
          $obj->description=$description;

          if($obj->save()){
            echo "successfully inserted";
          }
    }
}
