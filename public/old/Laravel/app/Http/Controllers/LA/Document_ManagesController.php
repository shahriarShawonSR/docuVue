<?php
/**
 * Controller genrated using LaraAdmin
 * Help: http://laraadmin.com
 */

namespace App\Http\Controllers\LA;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use DB;
use Validator;
use Datatables;
use Collective\Html\FormFacade as Form;
use Dwij\Laraadmin\Models\Module;
use Dwij\Laraadmin\Models\ModuleFields;

use App\Models\Document_Manage;
use App\Models\Add_Project_Title;

class Document_ManagesController extends Controller
{
	public $show_action = true;
	public $view_col = 'sarok_no';
	public $listing_cols = ['id', 'sarok_no', 'project_title', 'others', 'project_sub_title', 'issue_date', 'image', 'order_description', 'title', 'enty_by'];
	
	public function __construct() {
		// Field Access of Listing Columns
		if(\Dwij\Laraadmin\Helpers\LAHelper::laravel_ver() == 5.3) {
			$this->middleware(function ($request, $next) {
				$this->listing_cols = ModuleFields::listingColumnAccessScan('Document_Manages', $this->listing_cols);
				return $next($request);
			});
		} else {
			$this->listing_cols = ModuleFields::listingColumnAccessScan('Document_Manages', $this->listing_cols);
		}
	}
	
	/**
	 * Display a listing of the Document_Manages.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$module = Module::get('Document_Manages');
		
		if(Module::hasAccess($module->id)) {
			return View('la.document_manages.index', [
				'show_actions' => $this->show_action,
				'listing_cols' => $this->listing_cols,
				'module' => $module
			]);
		} else {
            return redirect(config('laraadmin.adminRoute')."/");
        }
	}
    
    public function add_new_document(){
    	
    	$module=Add_Project_Title::where('enty_by',Auth::user()->id)->whereNull('deleted_at')->get();
    	return view('la.document_manages.add_document',compact('module'));

    }
	/**
	 * Show the form for creating a new document_manage.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created document_manage in database.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		if(Module::hasAccess("Document_Manages", "create")) {
		
			$rules = Module::validateRules("Document_Manages", $request);
			
			$validator = Validator::make($request->all(), $rules);
			
			if ($validator->fails()) {
				return redirect()->back()->withErrors($validator)->withInput();
			}
			
			$insert_id = Module::insert("Document_Manages", $request);
			
			return redirect()->route(config('laraadmin.adminRoute') . '.document_manages.index');
			
		} else {
			return redirect(config('laraadmin.adminRoute')."/");
		}
	}

	/**
	 * Display the specified document_manage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		if(Module::hasAccess("Document_Manages", "view")) {
			
			$document_manage = Document_Manage::find($id);
			if(isset($document_manage->id)) {
				$module = Module::get('Document_Manages');
				$module->row = $document_manage;
				
				return view('la.document_manages.show', [
					'module' => $module,
					'view_col' => $this->view_col,
					'no_header' => true,
					'no_padding' => "no-padding"
				])->with('document_manage', $document_manage);
			} else {
				return view('errors.404', [
					'record_id' => $id,
					'record_name' => ucfirst("document_manage"),
				]);
			}
		} else {
			return redirect(config('laraadmin.adminRoute')."/");
		}
	}

	/**
	 * Show the form for editing the specified document_manage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		if(Module::hasAccess("Document_Manages", "edit")) {			
			$document_manage = Document_Manage::find($id);
			if(isset($document_manage->id)) {	
				$module = Module::get('Document_Manages');
				
				$module->row = $document_manage;
				
				return view('la.document_manages.edit', [
					'module' => $module,
					'view_col' => $this->view_col,
				])->with('document_manage', $document_manage);
			} else {
				return view('errors.404', [
					'record_id' => $id,
					'record_name' => ucfirst("document_manage"),
				]);
			}
		} else {
			return redirect(config('laraadmin.adminRoute')."/");
		}
	}

	/**
	 * Update the specified document_manage in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id)
	{
		if(Module::hasAccess("Document_Manages", "edit")) {
			
			$rules = Module::validateRules("Document_Manages", $request, true);
			
			$validator = Validator::make($request->all(), $rules);
			
			if ($validator->fails()) {
				return redirect()->back()->withErrors($validator)->withInput();;
			}
			
			$insert_id = Module::updateRow("Document_Manages", $request, $id);
			
			return redirect()->route(config('laraadmin.adminRoute') . '.document_manages.index');
			
		} else {
			return redirect(config('laraadmin.adminRoute')."/");
		}
	}

	/**
	 * Remove the specified document_manage from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		if(Module::hasAccess("Document_Manages", "delete")) {
			Document_Manage::find($id)->delete();
			
			// Redirecting to index() method
			return redirect()->route(config('laraadmin.adminRoute') . '.document_manages.index');
		} else {
			return redirect(config('laraadmin.adminRoute')."/");
		}
	}
	
	/**
	 * Datatable Ajax fetch
	 *
	 * @return
	 */
	public function dtajax()
	{
		$values = DB::table('document_manages')->select($this->listing_cols)->where('enty_by',Auth::user()->id)->whereNull('deleted_at');
		$out = Datatables::of($values)->make();
		$data = $out->getData();

		$fields_popup = ModuleFields::getModuleFields('Document_Manages');
		
		for($i=0; $i < count($data->data); $i++) {
			for ($j=0; $j < count($this->listing_cols); $j++) { 
				$col = $this->listing_cols[$j];
				if($fields_popup[$col] != null && starts_with($fields_popup[$col]->popup_vals, "@")) {
					$data->data[$i][$j] = ModuleFields::getFieldValue($fields_popup[$col], $data->data[$i][$j]);
				}
				if($col == $this->view_col) {
					$data->data[$i][$j] = '<a href="'.url(config('laraadmin.adminRoute') . '/document_manages/'.$data->data[$i][0]).'">'.$data->data[$i][$j].'</a>';
				}
				// else if($col == "author") {
				//     $data->data[$i][$j];
				// }
			}
			
			if($this->show_action) {
				$output = '';
				if(Module::hasAccess("Document_Manages", "edit")) {
					$output .= '<a href="'.url(config('laraadmin.adminRoute') . '/document_manages/'.$data->data[$i][0].'/edit').'" class="btn btn-warning btn-xs" style="display:inline;padding:2px 5px 3px 5px;"><i class="fa fa-edit"></i></a>';
				}
				
				if(Module::hasAccess("Document_Manages", "delete")) {
					$output .= Form::open(['route' => [config('laraadmin.adminRoute') . '.document_manages.destroy', $data->data[$i][0]], 'method' => 'delete', 'style'=>'display:inline']);
					$output .= ' <button class="btn btn-danger btn-xs" type="submit"><i class="fa fa-times"></i></button>';
					$output .= Form::close();
				}
				$data->data[$i][] = (string)$output;
			}
		}
		$out->setData($data);
		return $out;
	}
}
