@extends('layouts.master')
@section('content')
<div class="mt-4 mb-4 p-3 bg-white border shadow-sm lh-sm">
    <div class="container">
        <div class="row border-bottom mb-4">
            <div class="col-sm-8 pt-2"><h6 class="mb-4 bc-header font-weight-bold">Add Savings</h6></div>
            <div class="col-sm-4 text-right pb-3">
                <a class="btn " href="/savings"  role="button" style="background-color: #FB6E9D;Color:#fff;">View Savings</a>
            </div>
        </div>
        <form action="/savings" method="POST">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-4">
                    <img name="image" src="{{ asset('uploads/clients/'.$addCsaving->image)}}" width="60" alt="teacher Image" class="img-thumbnail">
                </div>
                <div class="form-group col-md-4">
                    <label for="client_names ">Client Name *</label>
                    <input name="client_names" class="form-control" value="{{$addCsaving->client_first_name." ".$addCsaving->client_last_name}}">
                </div>
                <div class="form-group col-md-4">
                    <label for="client_plan">Member Plan</label> 
                    <input name="client_plan" class="form-control" value="{{$addCsaving->categories_all->cat_name}}{{$addCsaving->created_at->format('YHi')}}">
                </div>
            </div>
            <div class="form-group">
                <label for="save_Desc">Description *</label>
                <input name="save_Desc" class="form-control">
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="amount_posted">Amount Posted *</label>
                    <input name="amount_posted" class="form-control">
                </div>
                <div class="form-group col-md-4">
                    <label for="int_freq">Interest Frequency on Savings *</label>
                    <input class="form-control touchspin" name="int_freq" value="{{$addCsaving->categories_all->period}}"  type="text">
                </div>
                <div class="form-group col-md-4">
                    <label for="int_ret">Interest Rate Per Freq % *</label>
                    <input class="form-control touchspin" name="int_ret" value="{{$addCsaving->categories_all->int_ret}}"  type="text" >
                </div>
            </div>
            <div class="form-group">
                <label for="min_bal">Minimum Amount</label>
                <input name="min_bal" class="form-control" value="{{$addCsaving->categories_all->cat_amount}}">
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="location">Location</label>
                    <input name="member_location" class="form-control" value="{{$addCsaving->member_location}}">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputState">Member Category</label>
                    <input name="inputState" class="form-control" value="{{$addCsaving->categories_all->cat_type_name}}">
                </div>
                <div class="form-group col-md-4">
                    <label for="saving_doc">Add Saving Doc</label>
                    <input type="file" id="saving_doc" class="form-control-file">
                </div>
            </div>
            <div class="form-row border-top mt-4 text-right">
              <button type="submit" class="btn mt-4 sm" style="background-color: #FB6E9D;Color:#fff;">Save</button>
            </div>
        </form>
    </div>
</div>
@endsection