<?php

namespace App\Http\Controllers;
use App\Categories;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories = Categories::all();
        return view('category.createCategory',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // return view('category.createCategory');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $inputs = $request->all();
        $this->validate($request, [
            'cat_name' => 'required',
            'cat_type_name' => 'required',
            'period' => 'required',
            'cat_amount' => 'required',
            'int_ret' => 'required',
        ]);
        $categories = new Categories;
        $categories ->cat_name=$request->input('cat_name');
        $categories ->cat_type_name=$request->input('cat_type_name');
        $categories ->period=$request->input('period');
        $categories ->cat_amount=$request->input('cat_amount');
        $categories ->int_ret=$request->input('int_ret');
        $categories ->save();
        return redirect('/category')->with('status','Category Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
