<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;

use App\Http\Requests;

use App\Products;

use App\Suppliers;

use App\Category;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Products::with('category')
					->orderBy('ProductName','asc')
					->paginate(10);
					
		return view('produk.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();
		$suppliers  = Suppliers::get();
		return view('produk.create', compact('categories', 'suppliers'));
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
				'ProductName'       => 'required|unique:products|alpha|max:40',
				'SupplierID'        => 'required',
				'CategoryID'        => 'required',
				'QuantityPerUnit'   => 'required|numeric', 
				'UnitPrice'         => 'required|numeric', 
				'UnitsInStock'      => 'required|numeric', 
				'UnitsOnOrder'      => 'required|numeric',
				'ReorderLevel'      => 'required|numeric'
			]);
			
			if ($validator -> fails()) {
				return redirect('products/create')->withErrors($validator)->withInput();
			}
			Products::create($request->all());
			
			return redirect('products')->with('pesan_sukses', 'Data products has been saved.');
		} 
		catch (Exception $e) {
			return redirect('products/create')->with('pesan_gagal', $e->getMessage());
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
        $product = Products::leftJoin('categories', 'categories.CategoryID', '=', 'products.CategoryID')
                    ->leftJoin('suppliers', 'suppliers.SupplierID', '=', 'products.SupplierID')
                    ->where('ProductID', $id)->first();
		return view('produk.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
		$products   = Products::where('ProductID', $id)->first();
		$categories = Category::get();
		$suppliers  = Suppliers::get();
		return view('produk.edit', compact('products', 'categories', 'suppliers'));
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
				'ProductName'       => 'required|max:40',
				'SupplierID'        => 'required',
				'CategoryID'        => 'required',
				'QuantityPerUnit'   => 'required|numeric', 
				'UnitPrice'         => 'required|numeric', 
				'UnitsInStock'      => 'required|numeric', 
				'UnitsOnOrder'      => 'required|numeric',
				'ReorderLevel'      => 'required|numeric'
			]);
			
       if ($validator -> fails()) {
					return redirect('products/'.$id.'/edit')->withErrors($validator)->withInput();
			}
			Products::where('ProductID',$id)->update($request->except('_method','_token'));
			
			return redirect('products')->with('pesan_sukses', 'Data products successfully changed.');
			
		} catch (\Exception $e) {
			return redirect('products')->with('pesan_gagal', $e->getMessage());
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
			Products::where('ProductID', '=', $id)->delete();
			return redirect('products')->with('pesan_sukses', 'Data products successfully removed.');
		}
		catch(Exception $e) {
			return redirect('products')->with('pesan_gagal', $e->getMessage());
		}
    }
}
