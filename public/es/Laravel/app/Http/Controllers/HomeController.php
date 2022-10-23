<?php
/**
 * Controller genrated using LaraAdmin
 * Help: http://laraadmin.com
 */

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Auth;
use App\Models\Document_Manage;
use DB;
/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index()
    {
        $roleCount = \App\Role::count();

         
        // return $total_documents;
       // return view('la.dashboard',compact('documents'));


		if($roleCount != 0) {
			if($roleCount != 0) {
                if(Auth::user())
                {
                    $documents=Document_Manage::join('add_project_titles','document_manages.project_title','=','add_project_titles.id')
                    ->groupBy('document_manages.project_title')
                    ->select('add_project_titles.project_title_name', DB::raw('count(*) as total'))
                    ->whereNull('document_manages.deleted_at')
                    ->where('document_manages.image','!=','0')
                    ->where('document_manages.enty_by',Auth::user()->id)
                    ->get();
                    $thismonth=Document_Manage::join('add_project_titles','document_manages.project_title','=','add_project_titles.id')
                    ->select('add_project_titles.project_title_name', DB::raw('count(*) as total'))
                    ->whereNull('document_manages.deleted_at')
                    ->where('document_manages.image','!=','0')
                    ->where('document_manages.enty_by',Auth::user()->id)
                    ->whereRaw('document_manages.created_at >= (CURDATE()-INTERVAL 1 MONTH)')
                    // MONTH(created_at) = MONTH(CURRENT_DATE());
                    ->get();
                    $total_documents=$thismonth=Document_Manage::join('add_project_titles','document_manages.project_title','=','add_project_titles.id')
                    ->select('add_project_titles.project_title_name', DB::raw('count(*) as total'))
                    ->whereNull('document_manages.deleted_at')
                    ->where('document_manages.image','!=','0')
                    ->where('document_manages.enty_by',Auth::user()->id)
                    ->get();
                    return view('home',compact('documents','thismonth','total_documents'));
                }
                else
                {
                    return view('auth.login',compact('module'));
                }
				
			}
		} else {
			return view('errors.error', [
				'title' => 'Migration not completed',
				'message' => 'Please run command <code>php artisan db:seed</code> to generate required table data.',
			]);
		}
    }
   //  public function login_form(){
   //     return view('auth.login',compact('module'));

    
   // }
    public function register_form(){
       return view('auth.register',compact('module'));

    }
}