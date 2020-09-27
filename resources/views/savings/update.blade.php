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
        <form action="/members" method="POST">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="client_names select2">Client Name *</label>
                    <input name="client_names" class="form-control" value="{{$addCsaving->client_first_name." ".$addCsaving->client_last_name}}">
                </div>
                <div class="form-group col-md-6">
                    <label for="client_plan">Member Plan</label> 
                    <input name="client_plan" class="form-control" value="{{$addCsaving->categories_all->cat_name}}{{$addCsaving->created_at->format('YHi')}}">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4 " style="display:none">
                    <label for="amount" >Amount Posted *</label>
                    <input name="amount" class="form-control">
                </div>
                <div class="form-group col-md-4">
                    <label for="interest_posting">Interest Frequency on Savings *</label>
                    <input class="form-control touchspin" value="{{$addCsaving->categories_all->period}}" name="interest_posting" type="text">
                </div>
                <div class="form-group col-md-4">
                    <label for="interest_rate">Interest Rate Per Freq % *</label>
                    <input class="form-control touchspin" value="{{$addCsaving->categories_all->int_ret}}" placeholder="" required="required" name="interest_rate" type="text" id="interest_rate">
                </div>
            </div>
            <div class="form-group">
                <label for="clientDesc">Description *</label>
                <input name="client_Description" class="form-control">
            </div>
            <div class="form-group">
                <label for="min_bal">Minimum Amount</label>
                <input name="min_bal" class="form-control" value="{{$addCsaving->categories_all->cat_amount}}">
            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="location">Location</label>
                    <input name="member_location" class="form-control" value="{{$addCsaving->member_location}}">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputState">Member Category</label>
                    <input name="inputState" class="form-control" value="{{$addCsaving->categories_all->cat_type_name}}">
                </div>
                <div class="form-group col-md-3">
                    <label for="saving_doc">Add Saving Doc</label>
                    <input type="file" id="saving_doc" class="form-control-file">
                </div>
                <div class="form-group col-md-3 text-right">
                    <a href="#" class="btn mt-4 btn-primary"style="Color:#fff;" role="button">Add Next of Kin</a>
                </div>
            </div>
            <div class="form-row border-top mt-4 text-right">
              <button type="submit" class="btn mt-4 sm" style="background-color: #FB6E9D;Color:#fff;">Save</button>
            </div>
        </form>
    </div>
</div>
@endsection