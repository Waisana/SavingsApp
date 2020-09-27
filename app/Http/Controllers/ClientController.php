<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories;
use App\Clients;
use App\Saving_accs;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Clients::all();
        return view('members.index')->with('clients', $clients);  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Categories::all();
        $clients = Clients::all();
        return view('members.create', compact('members','categories'));
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
             'client_first_name' => 'required',
             'client_last_name' => 'required',
             'client_email' => 'required',
             'client_national_id' => 'required',
             'client_phone_number' => 'required',
             'client_bank_account_number' => 'required',
             'categ_id' => 'required',
             'member_location' => 'required',
             'image' => 'required',
         ]);
         $clients = new Clients;
         $clients ->client_first_name=$request->input('client_first_name');
         $clients ->client_last_name=$request->input('client_last_name');
         $clients ->client_email=$request->input('client_email');
         $clients ->client_national_id=$request->input('client_national_id');
         $clients ->client_phone_number=$request->input('client_phone_number');
         $clients ->client_bank_account_number=$request->input('client_bank_account_number');
         $clients ->categ_id=$request->input('categ_id');
         $clients ->member_location=$request->input('member_location');
         if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension=$file ->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/clients/',$filename);
            $clients ->image=$filename;
        }
        else{
            return $request;
            $clients ->image='';
        }

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
