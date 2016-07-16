<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;

use App\Http\Requests;

use App\Customers;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customers::orderBy('CustomerID','asc')
					->paginate(10);
					
		return view('customers.index', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customers.create', compact('customers'));
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
				'CustomerID'   => 'required|unique:customers|alpha|max:5|size:5',
				'CompanyName'  => 'required|unique:customers|max:40',
				'ContactName'  => 'required|unique:customers|max:30',
				'ContactTitle' => 'required|alpha|max:30',
				'Address' 	   => 'required',
				'City'  	   => 'required',
				'Region'  	   => 'required',
				'PostalCode'   => 'required|numeric|digits_between:1,5',
				'Country'  	   => 'required',
				'Phone'        => 'required|numeric|digits_between:1,12',
				'Fax' 		   => 'required|numeric|digits_between:1,11'
			]);	
			
			if ($validator -> fails()) {
				return redirect('customers/create')->withErrors($validator)->withInput();
			}
			Customers::create($request->all());
			
			return redirect('customers')->with('pesan_sukses', 'Data customers has been saved.');
		} 
		catch (Exception $e) {
			return redirect('customers/create')->with('pesan_gagal', $e->getMessage());
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
        $customers = Customers::where('CustomerID', $id)->first();
		return view('customers.show', compact('customers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customers  = Customers::where('CustomerID', $id)->first();
		return view('customers.edit', compact('customers'));
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
				'CompanyName'  => 'required|unique:customers|max:40',
				'ContactName'  => 'required|alpha|max:30',
				'ContactTitle' => 'required|alpha|max:30',
				'Address' 	   => 'required',
				'City'  	   => 'required',
				'Region'  	   => 'required',
				'PostalCode'   => 'required|numeric|digits_between:1,5',
				'Country'  	   => 'required',
				'Phone'        => 'required|numeric|digits_between:1,12',
				'Fax' 		   => 'required|numeric|digits_between:1,11'
			]);	
			
			if ($validator -> fails()) {
					return redirect('customers/'.$id.'/edit')->withErrors($validator)->withInput();
			}
			Customers::where('CustomerID',$id)->update($request->except('_method','_token'));
			
			return redirect('customers')->with('pesan_sukses', 'Data customers successfully changed.');
			
		} catch (\Exception $e) {
			return redirect('customers')->with('pesan_gagal', $e->getMessage());
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
			Customers::where('CustomerID', '=', $id)->delete();
			return redirect('customers')->with('pesan_sukses', 'Data customers successfully removed .');
		}
		catch(Exception $e) {
			return redirect('customers')->with('pesan_gagal', $e->getMessage());
		}
    }
}
