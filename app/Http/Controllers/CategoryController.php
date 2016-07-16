<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;

use App\Http\Requests;

use App\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::orderBy('CategoryName','asc')
					->paginate(10);
					
		return view('categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.create');
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
			$validator = Validator::make($inputan, [
				'CategoryName'  => 'required|unique:categories|max:50',
				'Description'   => 'required'
				// 'Picture'  		=> 'required'
			]);		
		
			if ($validator -> fails()) {
					return redirect('categories/create')->withErrors($validator)->withInput();
			}

			$photo=$request->file('Picture');
			$destination=base_path().'/public/foto/category/';
			$filename=time().'.'.$photo->getClientOriginalExtension();			
			$photo->move($destination,$filename);			
			$inputan['Picture']=$filename;
			
			Category::create($inputan);			
			return redirect('categories')->with('pesan_sukses', 'Data categories has been saved.');
		} 
		catch (Exception $e) {
			return redirect('categories')->with('pesan_gagal', $e->getMessage());
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
		$categories = Category::where('CategoryID', $id)->first();
		return view('categories.show', compact('categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories    = Category::where('CategoryID', $id)->first();
		return view('categories.edit', compact('categories'));
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
					'CategoryName'  => 'required|unique:categories,categoryname,'.$id.',categoryid|max:50',
					'Description'   => 'required',
					'Picture'  		=> 'required'
			]);	
				
			if ($validator -> fails()) {
				return redirect('categories/'.$id.'/edit')->withErrors($validator)->withInput();
			}

			if ($request->hasFile('Picture')) {
				$img = Category::find($id);
				$path = base_path().'/public/foto/category/' .$img->Picture;
				
				if (file_exists($path)) {
					unlink($path);
				}
				
				$photo=$request->file('Picture');
				$destination=base_path().'/public/foto/category/';
				$filename=time().'.'.$photo->getClientOriginalExtension();				
				$photo->move($destination,$filename);				
				$inputan['Picture']=$filename;
			}
			
			Category::where('CategoryID',$id)->update($inputan);
			
			return redirect('categories')->with('pesan_sukses', 'Data categories successfully changed.');
			
		} catch (\Exception $e) {
			return redirect('categories')->with('pesan_gagal', $e->getMessage());
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
			
			$photo=Category::find($id);
			$location=base_path().'/public/foto/category/' .$photo->Picture;
			$cc = unlink($location);
			
			Category::find($id)->delete();			
			return redirect('categories')->with('pesan_sukses', 'Data categories successfully removed .');
		}
		catch(Exception $e) {
			return redirect('categories')->with('pesan_gagal', $e->getMessage());
		}
    }
}
