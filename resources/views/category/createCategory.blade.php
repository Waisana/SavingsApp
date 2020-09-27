@extends('layouts.master')
@section('content')
<div class="mt-4 mb-4 p-3 bg-white border shadow-sm lh-sm">
   <div class="container">
      @if (session('status'))
         <div class="alert alert-success" role="alert">
            {{session('status')}}
         </div>
          
      @endif
      <div class="romodule-head border-bottom mb-4">
         <h6 class="mb-4 bc-header font-weight-bold">Add Category</h6>
      </div>
      <div class="mb-4">
         <form method="POST" action="/categorypost" class="mb-4">
            @csrf
            <div class="form-row">
               <div class="form-group col-md-6">
                 <label for="Category_Name">Category Name</label>
                 <input type="text" class="form-control" name="cat_name" placeholder="Category Name">
               </div>
               <div class="form-group col-md-6">
                 <label for="Category_type">Category Type</label>
                 <input type="text" class="form-control" name="cat_type_name"  placeholder="Category type">
               </div>
             </div>
             <div class="form-row">
               <div class="form-group col-md-4">
                 <label for="period">Period</label>
                 <input type="text" class="form-control" name="period" placeholder=" Period in Months">
               </div>
               <div class="form-group col-md-4">
                 <label for="cat_amount">Amount</label>
                 <input type="text" class="form-control" name="cat_amount" placeholder=" Set Amount">
               </div>
               <div class="form-group col-md-4">
                 <label for="Rate">Rate %</label>
                 <input type="text" class="form-control" name="int_ret" placeholder=" Rate in %">
               </div>
             </div>
            <div class="form-group">
               <button type="submit" class="btn btn-primary">
                  <i class="fa fa-plus" aria-hidden="true"></i> Add
               </button>
            </div>
         </form>
      </div>
      <table class="table table-condensed table-striped table-bordered table-hover">
         <tr>
            <th>ID</th>
            <th>Category Name</th>
            <th>Category type</th>
            <th>Period</th>
            <th>Amount</th>
            <th>Rate %</th>
            <th>created at</th>
            
         </tr>
         @if (count($categories) > 0)
            @foreach($categories  as $category )
            <tr>
               <td>{{ $category->id }}</td>
               <td>{{ $category->cat_name }} </td>
               <td>{{ $category->cat_type_name }} </td>
               <td>{{ $category->period }} </td>
               <td>{{ $category->cat_amount }} </td>
               <td>{{ $category->int_ret }} </td>
            <td>
                  @if($category->created_at)
                  {{ $category->created_at->toFormattedDateString() }}
                  @else
                  <font size="3" color="red">Date Not Captured</font>
                  @endif
               </td>
            </tr>
            @endforeach
         @endif
      </table>
   </div>
</div>
@endsection