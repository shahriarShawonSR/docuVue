<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\BranchModel;
use App\User;
use App\user_access_model;
use Redirect;
use Session;
use App\day_end_model;
use App\Mail\DemoMail;
use Illuminate\Support\Facades\Mail;
use Validator;
use App\Role;
use Eloquent;
use App\Models\Employee;
class BranchRegistration extends Controller
{
    public function index()
    {
	    return view('Branch_registration');
    }
    public function Branch_registration(Request $request){
    	Eloquent::unguard();
        
        $employee = Employee::create([
            'name' => $request->name,
            'designation' => "Super Admin",
            'mobile' => $request->contacts,
            'mobile2' => "",
            'email' => $request->email,
            'gender' => 'Male',
            'dept' => "1",
            'city' => "Dhaka",
            'address' => "tmss-ict",
            'about' => "About user",
            'date_birth' => date("Y-m-d"),
            'date_hire' => date("Y-m-d"),
            'date_left' => date("Y-m-d"),
            'salary_cur' => 0,
        ]);
        
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'context_id' => $employee->id,
            'type' => "Employee",
        ]);

       
        $role = Role::where('name', 'SUPER_ADMIN')->first();
        $user->attachRole($role);
        
        \Session::flash('flash_message', 'Your Registration is Succesfully Complete, Please Login with provided email and password.');
		// Session::flash('flash_message', 'successfully saved Account Head Type.');
		return Redirect::to('/login');
 
        // $mail_data=[
        //     'branch_name'=>$request->name,
        //     'email'=>$request->email,
        //     'password'=>$request->password,
        // ];
    

        // $fields = array(
        //     'data' => serialize($mail_data),
        //     'subject' => 'DocVue',
        //     'template' => 'docvue.register_mail',
        //     'name' => $request->name,
        //     'email' => $request->email
        // );
        
        // $params = http_build_query($fields);
        // $url = "https://mail.tmss-ict.com/api";
        // $ch = curl_init();

        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        // curl_setopt($ch, CURLOPT_URL, $url);
        // curl_setopt($ch,CURLOPT_POST, count($fields));
        // curl_setopt($ch,CURLOPT_POSTFIELDS, $params);
        // curl_exec($ch);
        
        
        $mail_data=[
		 	'branch_name'=>$request->name,
		 	'email'=>$request->email,
		 	'password'=>$request['password'],
		 	'urls'=>'http://docu-vue.com/login'
		];

		$fields = array(
		    'data' => serialize($mail_data),
		    'subject' => 'DocVue',
		    'template' => 'docvue.register_mail',
		    'name' => $request->name,
		    'email' => $request->email
		);
     
		$params = http_build_query($fields);
		$url = "https://mail.tmss-ict.com/api";
		$ch = curl_init();

		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch,CURLOPT_POST, count($fields));
		curl_setopt($ch,CURLOPT_POSTFIELDS, $params);
		curl_exec($ch);
        
        
        

     
		\Session::flash('flash_message', 'Your Registration is Succesfully Complete, Please Check Your Email , We are Already Send Login Information.');
		// Session::flash('flash_message', 'successfully saved Account Head Type.');
		return Redirect::to('/demo_reg');
    }
   
}