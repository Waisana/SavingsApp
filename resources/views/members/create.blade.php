@extends('layouts.master')
@section('content')
<div class="mt-4 mb-4 p-3 bg-white border shadow-sm lh-sm">
  <div class="container">
    <div class="row border-bottom mb-4">
      <div class="col-sm-8 pt-2"><h6 class="mb-4 bc-header font-weight-bold">Add Client</h6></div>
      <div class="col-sm-4 text-right pb-3">
      </div>
    </div>
    <form action="/storeclients" method="POST" enctype="multipart/form-data">
      {{csrf_field()}}
      @csrf
      <div class="form-row">
          <div class="form-group col-md-6">
              <label for="firstName">First Name</label>
              <input class="form-control" type="text" name="client_first_name">
          </div>
          <div class="form-group col-md-6">
              <label for="lastName">Last Name</label>
              <input name="client_last_name" class="form-control">
          </div>
        </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="email">Email</label>
          <input name="client_email" type="email" class="form-control">
        </div>
        <div class="form-group col-md-6">
          <label for="nationalId">National Id</label>
              <input name="client_national_id" class="form-control">
        </div>
      </div>
      <div class="form-group">
          <label for="phoneNumber">Phone Number</label>
          <input name="client_phone_number" class="form-control">
      </div>
      <div class="form-group">
          <label for="">Bank Account Number</label>
          <input name="client_bank_account_number" class="form-control">
      </div>
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="location">Location</label>
          <input name="member_location" class="form-control">
        </div>
        <div class="form-group col-md-4">
          <label for="categ_id">Member Category</label>
          <select  name="categ_id" class="form-control">
            <option value="">--Category Type--</option>
            @if(count($categories))
              @foreach($categories as $category)
              <option  value="{{$category->id}}">{{$category->cat_type_name}}</option>
              @endforeach
            @endif
          </select>
        </div>
        <div class="form-group col-md-4 ">
          <label for="image">Client Photo</label>
          <input type="file" name="image" class="form-control-file">
        </div>
      </div>
      <div class="form-row border-top mt-4">
        <button type="submit" class="btn text-right mt-4 sm" style="background-color: #FB6E9D;Color:#fff;">Save</button>
      </div>
    </form>
  </div>
</div>
@endsection
