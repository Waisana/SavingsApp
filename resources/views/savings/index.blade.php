@extends('layouts.master')
@section('content')
    <div class="mt-4 mb-4 p-3 bg-white border shadow-sm lh-sm">
        <div class="container">
            <div class="row border-bottom mb-4">
                <div class="col-sm-8 pt-2"><h6 class="mb-4 bc-header font-weight-bold">Saving Accounts</h6></div>
                <div class="col-sm-4 text-right pb-3">
                  <a class="btn " href="/savings/create" role="button" style="background-color: #FB6E9D;Color:#fff;">Add Savings</a>
                </div>
              </div>
            <table class="table table-hover table-responsive">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Plan</th>
                        <th>Amount</th>
                        <th>Frequency</th>
                        <th>Rate %</th>
                        <th>Location</th>
                        <th>Joined</th>
                        <th>Status</th>
                        <th>Deactivated</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <tr id="d1">
                        <td>1</td>
                        <td id="f1"><img src="{{ asset('images/john-doe.png')}}" width="40" alt="teacher Image" class="img-thumbnail"></td>
                        <td id="l1">Waisana</td>
                        <td id="m1">Doe</td>
                        <td id="f1">John</td>
                        <td id="l1">Waisana</td>
                        <td id="m1">Doe</td>
                        <td id="f1">John</td>
                        <td id="m1">Doe</td>
                        <td id="m1">Doe</td>
                        <td id="m1">Doe</td>
                        <td><button type="button" data-toggle="modal" data-target="#edit" data-uid="1" class="update btn btn-warning btn-sm"><i class="fas fa-edit"></i></button></td>
                        <td><button type="button" data-toggle="modal" data-target="#delete" data-uid="1" class="delete btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button></td>
                    </tr>
                    <tr id="d2">
                        <td>2</td>
                        <td id="f1"><img src="{{ asset('images/john-doe.png')}}" width="40" alt="teacher Image" class="img-thumbnail"></td>
                        <td id="l1">Maraim Jezreel Nyachwo</td>
                        <td id="m1">Doe</td>
                        <td id="f1">John</td>
                        <td id="l1">Waisana</td>
                        <td id="m1">Doe</td>
                        <td id="f1">John</td>
                        <td id="m1">Doe</td>
                        <td id="m1">Doe</td>
                        <td id="m1">Doe</td>
                        <td><button type="button" data-toggle="modal" data-target="#edit" data-uid="1" class="update btn btn-warning btn-sm"><i class="fas fa-edit"></i></button></td>
                        <td><button type="button" data-toggle="modal" data-target="#delete" data-uid="1" class="delete btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button></td>
                    </tr>
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