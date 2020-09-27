@extends('layouts.master')
@section('content')
<a href="/adduser"  class="btn btn-primary">create</a>
<table class="table table-condensed table-striped table-bordered table-hover">
   <tr>
      <th>#</th>
      <th>First Name</th>
      <th>Last name</th>
      <th>Email</th>
      <th>User Status</th>
      <th>Role</th>
      <th>created at</th>
      <th>Updated at</th>
      <th>deleted</th>
      <th>deleted On</th>
      <th>deleted by</th>
      <th colspan="4">Actions</th>
   </tr>
   <tr>
      <td>#</td>
      <td>First Name</td>
      <td>Last name</td>
      <td>Email</td>
      <td>User Status</td>
      <td>Role</td>
      <td>created at</td>
      <td>Updated at</td>
      <td>deleted</td>
      <td>deleted On</td>
      <td>deleted by</td>
      <td colspan="4">Actions</td>
   </tr>


</table>
@endsection
