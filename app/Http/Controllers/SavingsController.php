<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Saving_accs;
use App\Clients;
use App\Categories;

class SavingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('savings.index');
        // return view('savings.index', compact('saving_acc','client'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $clients = Clients::all();
        $categories =Categories::all();
        return view('savings.create', compact('clients','categories'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inputs = $request->all();
        $this->validate($request, [
            'client_names' => 'required',
            'client_plan' => 'required',
            'amount_posted' => 'required',
            'int_freq' => 'required',
            'int_ret' => 'required',
            'save_Desc' => 'required',
            // 'image' => 'required',
            'min_bal' => 'required',
        ]);
        $clients = new Saving_accs;
        $clients ->client_names=$request->input('client_names');
        $clients ->client_plan=$request->input('client_plan');
        $clients ->amount_posted=$request->input('amount_posted');
        $clients ->int_freq=$request->input('int_freq');
        $clients ->int_ret=$request->input('int_ret');
        $clients ->save_Desc=$request->input('save_Desc');
        $clients ->min_bal=$request->input('min_bal');
    //     if ($request->hasFile('image')) {
    //        $file = $request->file('image');
    //        $extension=$file ->getClientOriginalExtension();
    //        $filename = time().'.'.$extension;
    //        $clients ->image=$filename;
    //    }
    //    else{
    //        return $request;
    //        $clients ->image='';
    //    }

        $clients ->save();
        return redirect('/Clients/Clients');
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
        
        $addCsaving = Clients::findOrFail($id);
        $categories =Categories::findOrFail($id);
        return view('savings.edit', compact('addCsaving','categories'));
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
