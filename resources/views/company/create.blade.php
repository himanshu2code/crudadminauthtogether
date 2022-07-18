
@extends('company.layout')
@section('content')
<div class="card">
    <div class="card-header" style="color:rgb(0, 106, 255);">Add Company Details</div>
    <div class="card-body">

        <form action="{{ url('company') }}" method="post">
            {!! csrf_field() !!}
            <label>Name</label></br>
            <input type="text" name="name" id="name" class="form-control"></br>
            <label>E-mail</label></br>
            <input type="email" name="email" id="address" class="form-control"></br>
            <label>Logo</label></br>
            <input type="file" name="logo" id="address" class="form-control"></br>
            <label>Website</label></br>
            <input type="text" name="website" id="address" class="form-control"></br>
            <label>Mobile</label></br>
            <input type="text" name="phone" id="mobile" class="form-control"></br>
            <input type="submit" value="Add +" class="btn btn-success"></br>
        </form>

    </div>
</div>
@stop
