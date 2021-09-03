@extends('district10.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Manage Chapter Directory - Add</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('district10.index') }}"> Back</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('district10.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Company Name*</strong>
                <input type="text" name="companyname" class="form-control" placeholder="Enter Company Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email Address*</strong>
                <input type="text" name="emailaddress" class="form-control" placeholder="Enter Email Address">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Chapter*</strong>
                <select name="chapter" id="">
                    <option value="">---Select Chapter---</option>
                    <option value="Southwest Line">Southwest Line</option>
                    <option value="Missouli Valley Line">Missouli Valley Line</option>
                    <option value="Southwest Line">Southwest Line</option>
                    <option value="American Line Builders">American Line Builders</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Position*</strong>
                <textarea class="form-control" style="height:150px" name="position" placeholder="Enter Position"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Address</strong>
                <textarea class="form-control" style="height:150px" name="address" placeholder="Enter Address"></textarea>
           </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>State</strong>
                <input type="text" name="state" class="form-control" placeholder="Enter State">
             </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>City</strong>
                <input type="text" name="city" class="form-control" placeholder="Enter City">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Zipcode</strong>
                <input type="text" name="zipcode" class="form-control" placeholder="Enter Zipcode">
             </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Contact</strong>
                <input type="text" name="contact" class="form-control" placeholder="Enter Contact">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Phone*</strong>
                <input type="text" name="phone" class="form-control" placeholder="Enter Phone">
             </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Fax</strong>
                <input type="text" name="fax" class="form-control" placeholder="Enter Fax">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Website</strong>
                <input type="text" name="website" class="form-control" placeholder="Enter Website">
             </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Profile Pic</strong>
                <input type="file" name="name" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
@endsection