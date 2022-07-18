@extends('employee.layout')
@section('content')
<div class="card">
    <div class="card-header" style="color:rgb(0, 106, 255);">Add Employee Details</div>
    <div class="card-body">

        <form action="{{ url('employee') }}" method="post">
            {!! csrf_field() !!}
            <label>Name</label></br>
            <input type="text" name="name" id="name" class="form-control"></br>
            <label>Last_name</label></br>
            <input type="text" name="Last_name" id="address" class="form-control"></br>
            <label>Company</label></br>
            <input type="text" name="company" id="address" class="form-control"></br>
            <label>E-mail</label></br>
            <input type="email" name="email" id="address" class="form-control"></br>
            <label>Mobile</label></br>
            <input type="text" name="phone" id="mobile" class="form-control"></br>
            <input type="submit" value="Add +" class="btn btn-success"></br>
        </form>

    </div>
</div>
@stop
