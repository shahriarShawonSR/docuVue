<?php

namespace App\Http\Controllers\LA;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use DB;
use Illuminate\Support\Facades\DB;
// use Validator;
use Illuminate\Support\Facades\Validator;
use Datatables;
use Collective\Html\FormFacade as Form;
use Dwij\Laraadmin\Models\Module;
use Dwij\Laraadmin\Models\ModuleFields;
use App\Models\Document_Management;

class Document_ManagementsController extends Controller
{
	public $show_action = true;
	public $view_col = 'ab';
	public $listing_cols = ['id', 'ab'];

	public function __construct()
	{
		// Field Access of Listing Columns
		if (\Dwij\Laraadmin\Helpers\LAHelper::laravel_ver() == 5.3) {
			$this->middleware(function ($request, $next) {
				$this->listing_cols = ModuleFields::listingColumnAccessScan('Document_Managements', $this->listing_cols);
				return $next($request);
			});
		} else {
			$this->listing_cols = ModuleFields::listingColumnAccessScan('Document_Managements', $this->listing_cols);
		}
	}
	public function index()
	{
		$module = Module::get('Document_Managements');
		if (Module::hasAccess($module->id)) {
			return View('la.document_managements.index', [
				'show_actions' => $this->show_action,
				'listing_cols' => $this->listing_cols,
				'module' => $module
			]);
		} else {
			return redirect(config('laraadmin.adminRoute') . "/");
		}
	}
	public function create()
	{
		//
	}
	public function store(Request $request)
	{
		if (Module::hasAccess("Document_Managements", "create")) {
			$rules = Module::validateRules("Document_Managements", $request);
			$validator = Validator::make($request->all(), $rules);
			if ($validator->fails()) {
				return redirect()->back()->withErrors($validator)->withInput();
			}
			$insert_id = Module::insert("Document_Managements", $request);
			return redirect()->route(config('laraadmin.adminRoute') . '.document_managements.index');
		} else {
			return redirect(config('laraadmin.adminRoute') . "/");
		}
	}
	public function show($id)
	{
		if (Module::hasAccess("Document_Managements", "view")) {
			$document_management = Document_Management::find($id);
			if (isset($document_management->id)) {
				$module = Module::get('Document_Managements');
				$module->row = $document_management;

				return view('la.document_managements.show', [
					'module' => $module,
					'view_col' => $this->view_col,
					'no_header' => true,
					'no_padding' => "no-padding"
				])->with('document_management', $document_management);
			} else {
				return view('errors.404', [
					'record_id' => $id,
					'record_name' => ucfirst("document_management"),
				]);
			}
		} else {
			return redirect(config('laraadmin.adminRoute') . "/");
		}
	}
	public function edit($id)
	{
		if (Module::hasAccess("Document_Managements", "edit")) {
			$document_management = Document_Management::find($id);
			if (isset($document_management->id)) {
				$module = Module::get('Document_Managements');
				$module->row = $document_management;
				return view('la.document_managements.edit', [
					'module' => $module,
					'view_col' => $this->view_col,
				])->with('document_management', $document_management);
			} else {
				return view('errors.404', [
					'record_id' => $id,
					'record_name' => ucfirst("document_management"),
				]);
			}
		} else {
			return redirect(config('laraadmin.adminRoute') . "/");
		}
	}
	public function update(Request $request, $id)
	{
		if (Module::hasAccess("Document_Managements", "edit")) {
			$rules = Module::validateRules("Document_Managements", $request, true);
			$validator = Validator::make($request->all(), $rules);
			if ($validator->fails()) {
				return redirect()->back()->withErrors($validator)->withInput();;
			}
			$insert_id = Module::updateRow("Document_Managements", $request, $id);
			return redirect()->route(config('laraadmin.adminRoute') . '.document_managements.index');
		} else {
			return redirect(config('laraadmin.adminRoute') . "/");
		}
	}
	public function destroy($id)
	{
		if (Module::hasAccess("Document_Managements", "delete")) {
			Document_Management::find($id)->delete();
			// Redirecting to index() method
			return redirect()->route(config('laraadmin.adminRoute') . '.document_managements.index');
		} else {
			return redirect(config('laraadmin.adminRoute') . "/");
		}
	}
	public function dtajax()
	{
		$values = DB::table('document_managements')->select($this->listing_cols)->whereNull('deleted_at');
		$out = Datatables::of($values)->make();
		$data = $out->getData();

		$fields_popup = ModuleFields::getModuleFields('Document_Managements');

		for ($i = 0; $i < count($data->data); $i++) {
			for ($j = 0; $j < count($this->listing_cols); $j++) {
				$col = $this->listing_cols[$j];
				if ($fields_popup[$col] != null && starts_with($fields_popup[$col]->popup_vals, "@")) {
					$data->data[$i][$j] = ModuleFields::getFieldValue($fields_popup[$col], $data->data[$i][$j]);
				}
				if ($col == $this->view_col) {
					$data->data[$i][$j] = '<a href="' . url(config('laraadmin.adminRoute') . '/document_managements/' . $data->data[$i][0]) . '">' . $data->data[$i][$j] . '</a>';
				}
			}

			if ($this->show_action) {
				$output = '';
				if (Module::hasAccess("Document_Managements", "edit")) {
					$output .= '<a href="' . url(config('laraadmin.adminRoute') . '/document_managements/' . $data->data[$i][0] . '/edit') . '" class="btn btn-warning btn-xs" style="display:inline;padding:2px 5px 3px 5px;"><i class="fa fa-edit"></i></a>';
				}

				if (Module::hasAccess("Document_Managements", "delete")) {
					$output .= Form::open(['route' => [config('laraadmin.adminRoute') . '.document_managements.destroy', $data->data[$i][0]], 'method' => 'delete', 'style' => 'display:inline']);
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
