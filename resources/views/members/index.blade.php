@extends('layouts.master')
@section('content')
    <div class="mt-4 mb-4 p-3 bg-white border shadow-sm lh-sm">
        <div class="container">
          <div class="romodule-head border-bottom mb-4">
            <h6 class="mb-4 bc-header font-weight-bold">Clients Detail</h6>
          </div>
            <table class="table table-hover table-responsive" id="myTable">
              <thead>
                <tr>
                    <th>Id</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Bank Account Number</th> 
                    <th>ID_Number</th>
                    <th>Phone Number </th>
                    <th>Email Adress</th>
                    <th>Location</th>
                    <th>Status</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
              </thead>
              <tbody>
                @if (count($clients) > 0)
                  @foreach($clients as $client )
                  <tr>
                    <td>{{ $client->id }}</td>
                    <td><img src="{{ asset('uploads/clients/'.$client ->image)}}" width="40" alt="teacher Image" class="img-thumbnail"></td>
                    <td>{{ $client->client_first_name." ".$client->client_last_name }} </td>
                    <td>{{ $client->categories_all->cat_type_name}} </td>
                    <td>{{ $client->client_phone_number}} </td>
                    <td>{{ $client->client_national_id}} </td>
                    <td>{{ $client->client_phone_number }} </td>
                    <td>{{ $client->client_email }} </td>
                    <td>{{ $client->client_national_id}} </td>
                    <td>
                      @if( $client->deleted==1 )
                      <font size="3" color="red">deleted</font>
                      @else()
                      <font size="3" color="green">Active</font>
                      @endif
                    </td>
                    <td><button type="button" data-toggle="modal" data-target="#edit" data-uid="1" class="update btn btn-warning btn-sm"><i class="fas fa-edit"></i></button></td>
                    <td><button type="button" data-toggle="modal" data-target="#delete" data-uid="1" class="delete btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button></td>
                  </tr>
                  @endforeach
                @endif
              </tbody>
            </table>
            <div id="edit" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title">Update Data</h4>
                </div>
                <div class="modal-body">
                    <input id="fn" type="text" class="form-control" name="fname" placeholder="First Name">
                    <input id="ln" type="text" class="form-control" name="fname" placeholder="Last Name">
                    <input id="mn" type="text" class="form-control" name="fname" placeholder="Middle Name">
                </div>
                <div class="modal-footer">
                    <button type="button" id="up" class="btn btn-warning" data-dismiss="modal">Update</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
                </div>
            </div>
            </div>
            <div id="delete" class="modal fade" role="dialog">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h4 class="modal-title">Delete Data</h4>
              </div>
              <div class="modal-body">
                <strong>Are you sure you want to delete this data?</strong>
              </div>
              <div class="modal-footer">
                <button type="button" id="del" class="btn btn-danger" data-dismiss="modal">Delete</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
    </div>
  @endsection