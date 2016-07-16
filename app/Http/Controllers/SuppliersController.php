<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;

use App\Http\Requests;

use App\Suppliers;

class SuppliersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suppliers = Suppliers::orderBy('SupplierID','asc')
					->paginate(10);
					
		return view('suppliers.index', compact('suppliers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('suppliers.create', compact('suppliers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
			$validator = Validator::make($request->all(), [
				'CompanyName'  => 'required|unique:suppliers|alpha|max:40',
				'ContactName'  => 'required|unique:suppliers|alpha|max:30',
				'ContactTitle' => 'required:max:30',
				'Address' 	   => 'required|max:60',
				'City'  	   => 'required:max:15',
				'Region'  	   => 'required|max:15',
				'PostalCode'   => 'required|numeric',
				'Country'  	   => 'required|max:15',
				'Phone'        => 'required|numeric',
				'Fax' 		   => 'required|numeric',
				'HomePage' 	   => 'required'
			]);	
			
			if ($validator -> fails()) {
				return redirect('suppliers/create')->withErrors($validator)->withInput();
			}
			Suppliers::create($request->all());
			
			return redirect('suppliers')->with('pesan_sukses', 'Data suppliers has been saved.');
		} 
		catch (Exception $e) {
			return redirect('suppliers/create')->with('pesan_gagal', $e->getMessage());
		}
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $suppliers = Suppliers::where('SupplierID', $id)->first();
		return view('suppliers.show', compact('suppliers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
		$suppliers  = Suppliers::where('SupplierID', $id)->first();
		return view('suppliers.edit', compact('suppliers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
		try {
			$validator = Validator::make($request->all(), [
				'CompanyName'  => 'required|max:40',
				'ContactName'  => 'required|max:30',
				'ContactTitle' => 'required:max:30',
				'Address' 	   => 'required|max:60',
				'City'  	   => 'required:max:15',
				'Region'  	   => 'required|max:15',
				'PostalCode'   => 'required|numeric',
				'Country'  	   => 'required|max:15',
				'Phone'        => 'required|numeric',
				'Fax' 		   => 'required|numeric',
				'HomePage' 	   => 'required'
			]);	
				
			if ($validator -> fails()) {
					return redirect('suppliers/'.$id.'/edit')->withErrors($validator)->withInput();
			}
			Suppliers::where('SupplierID',$id)->update($request->except('_method', '_token'));
			
			return redirect('suppliers')->with('pesan_sukses', 'Data suppliers successfully changed.');
			
		} catch (\Exception $e) {
			return redirect('suppliers')->with('pesan_gagal', $e->getMessage());
		}
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
			Suppliers::where('SupplierID', '=', $id)->delete();
			return redirect('suppliers')->with('pesan_sukses', 'Data suppliers successfully removed .');
		}
		catch(Exception $e) {
			return redirect('suppliers')->with('pesan_gagal', $e->getMessage());
		}
    }
}
