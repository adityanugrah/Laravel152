<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;

use App\Http\Requests;

use App\Shippers;

class ShippersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shippers = Shippers::orderBy('ShipperID','asc')
					->paginate(10);
					
		return view('shippers.index', compact('shippers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('shippers.create', compact('shippers'));
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
				'CompanyName'  => 'required|unique:shippers|alpha|max:40',
				'Phone'   	   => 'required|numeric|digits_between:1,12'
			]);	
			
			if ($validator -> fails()) {
				return redirect('shippers/create')->withErrors($validator)->withInput();
			}
			Shippers::create($request->all());
			
			return redirect('shippers')->with('pesan_sukses', 'Data shipper has been saved.');
		} 
		catch (Exception $e) {
			return redirect('shippers/create')->with('pesan_gagal', $e->getMessage());
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
        $shippers = Shippers::where('ShipperID', $id)->first();
		return view('shippers.show', compact('shippers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
		$shippers  = Shippers::where('ShipperID', $id)->first();
		return view('shippers.edit', compact('shippers'));
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
				'CompanyName'  	=> 'required|max:40',
				'Phone'   	=> 'required|numeric|digits_between:1,12'
			]);
			
      			 if ($validator -> fails()) {
					return redirect('shippers/'.$id.'/edit')->withErrors($validator)->withInput();
			}
			Shippers::where('ShipperID',$id)->update($request->except('_method','_token'));
			
			return redirect('shippers')->with('pesan_sukses', 'Data shippers successfully changed.');
			
		} catch (\Exception $e) {
			return redirect('shippers')->with('pesan_gagal', $e->getMessage());
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
			Shippers::where('ShipperID',$id)->delete();
			
			return redirect('shippers')->with('pesan_sukses', 'Data categories successfully removed .');
		}
		catch(Exception $e) {
			return redirect('shippers')->with('pesan_gagal', $e->getMessage());
		}
    }
}
