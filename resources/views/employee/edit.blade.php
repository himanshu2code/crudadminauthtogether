@extends('employee.layout')
@section('content')
<div class="card">
    <div class="card-header" style="color:rgb(0, 106, 255);">Update Your Employee Details Here</div>
    <div class="card-body">

        <form action="{{ url('employee/' .$contacts->id) }}" method="post">
            {!! csrf_field() !!}
            @method("PATCH")
            <input type="hidden" name="id" id="id" value="{{$contacts->id}}" id="id" />
            <label>Name</label></br>
            <input type="text" name="name" id="name" value="{{$contacts->name}}" class="form-control"></br>
            <label>Last_name</label></br>
            <input type="text" name="Last_name" id="name" value="{{$contacts->Last_name}}" class="form-control"></br>
            <label>Company</label></br>
            <input type="text" name="company" id="name" value="{{$contacts->company}}" class="form-control"></br>
            <label>Email</label></br>
            <input type="text" name="email" id="address" value="{{$contacts->email}}" class="form-control"></br>
            {{-- <label>Logo</label></br>
            <input type="file" name="logo" id="mobile" value="{{$contacts->logo}}" class="form-control"></br> --}}
            {{-- <label>website</label></br>
            <input type="text" name="website" id="address" value="{{$contacts->website}}" class="form-control"></br> --}}
            <label>Mobile</label></br>
            <input type="text" name="phone" id="address" value="{{$contacts->phone}}" class="form-control"></br>
            <input type="submit" value="Update" class="btn btn-success"></br>
        </form>

    </div>
</div>
@stop
