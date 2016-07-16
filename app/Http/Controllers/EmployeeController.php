<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;

use App\Http\Requests;

use App\Employee;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::orderBy('FirstName','asc')
								->paginate(10);
					
		return view('employee.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		$employees = Employee::orderBy('FirstName', 'asc')->get();
		
        return view('employee.create', compact('employees'));
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
			$inputan=$request->all();
			$validator = Validator::make($request->all(), [
				'LastName'   		=> 'required|unique:employees|alpha|max:20',
				'FirstName'  		=> 'required|unique:employees|alpha|max:10',
				'Title'  			=> 'required|max:30',
				'TitleOfCourtesy'  	=> 'required',
				'BirthDate'  		=> 'required|date_format:Y-m-d',
				'HireDate'  		=> 'required|date_format:Y-m-d',
				'Address'  			=> 'required:max:60',
				'City'  			=> 'required|max:15',
				'Region'  			=> 'required|max:15',
				'PostalCode'  		=> 'required|numeric|digits_between:1,5',
				'Country'  			=> 'required|max:15',
				'HomePhone'  		=> 'required|numeric|digits_between:1,11',
				'Extension'  		=> 'required|numeric',
				'Photo'  			=> 'required',
				'Notes'  			=> 'required',
				'ReportsTo'  		=> 'required|numeric',
				'PhotoPath'  		=> 'required'
			]);	
			
			if ($validator -> fails()) {
				return redirect('employee/create')->withErrors($validator)->withInput();
			}
			
			$photo=$request->file('Photo');
			$destination=base_path().'/public/foto/employee/';
			$filename=time().'.'.$photo->getClientOriginalExtension();	
			$photo->move($destination,$filename);			
			$inputan['Photo']=$filename;
			
			Employee::create($inputan);			
			return redirect('employee')->with('pesan_sukses', 'Data employee has been saved.');
		} 
		catch (Exception $e) {
			return redirect('employee/create')->with('pesan_gagal', $e->getMessage());
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
        $employee = Employee::where('EmployeeID', $id)->first();
		return view('employee.show', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
		$employee  = Employee::where('EmployeeID', $id)->first();
		$employees = Employee::orderBy('FirstName', 'asc')->get();
		
		return view('employee.edit', compact('employee', 'employees'));
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
			$inputan=$request->except('_method');
			$validator = Validator::make($inputan, [
					'LastName'   		=> 'required|max:20',
					'FirstName'  		=> 'required|max:10',
					'Title'  			=> 'required|max:50',
					'TitleOfCourtesy'  	=> 'required',
					'BirthDate'  		=> 'required|date',
					'HireDate'  		=> 'required|date',
					'Address'  			=> 'required:max:60',
					'City'  			=> 'required|max:15',
					'Region'  			=> 'required|max:15',
					'PostalCode'  		=> 'required|numeric|digits_between:1,5',
					'Country'  			=> 'required|max:15',
					'HomePhone'  		=> 'required|numeric|digits_between:1,11',
					'Extension'  		=> 'required|numeric',
					'Photo'  			=> 'required',
					'Notes'  			=> 'required',
					'ReportsTo'  		=> 'required|numeric',
					'PhotoPath'  		=> 'required'
				]);
				
		   if ($validator -> fails()) {
				return redirect('employee/'.$id.'/edit')->withErrors($validator)->withInput();
			}
			
			if ($request->hasFile('Photo')) {
				$img = Employee::find($id);
				$path = base_path().'/public/foto/employee/' .$img->Photo;
				
				if (file_exists($path)) {
					unlink($path);
				}
				
				$photo=$request->file('Photo');
				$destination=base_path().'/public/foto/employee/';
				$filename=time().'.'.$photo->getClientOriginalExtension();				
				$photo->move($destination,$filename);				
				$inputan['Photo']=$filename;
			}
			
			Employee::where('EmployeeID',$id)->update($inputan);
			
			return redirect('employee')->with('pesan_sukses', 'Data employee successfully changed.');
			
		} catch (\Exception $e) {
			return redirect('employee')->with('pesan_gagal', $e->getMessage());
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
			$photo=Employee::find($id);
			$location=base_path().'/public/foto/employee/' .$photo->Photo;
			$cc = unlink($location);
			 
			Employee::find($id)->delete();			
			return redirect('employee')->with('pesan_sukses', 'Data employee successfully removed .');
		}
		catch(Exception $e) {
			return redirect('employee')->with('pesan_gagal', $e->getMessage());
		}
    }
}
