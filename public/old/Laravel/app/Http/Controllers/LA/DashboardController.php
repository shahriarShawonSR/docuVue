<?php
/**
 * Controller genrated using LaraAdmin
 * Help: http://laraadmin.com
 */

namespace App\Http\Controllers\LA;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Models\Document_Manage;
use Auth;
use DB;
use Validator;
use Datatables;
use Collective\Html\FormFacade as Form;
use Dwij\Laraadmin\Models\Module;
use Dwij\Laraadmin\Models\ModuleFields;
use App\Models\Add_Project_Title;


/**
 * Class DashboardController
 * @package App\Http\Controllers
 */
class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index()
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
        // return $documents;
        return view('la.dashboard',compact('documents','thismonth','total_documents'));
    }
}