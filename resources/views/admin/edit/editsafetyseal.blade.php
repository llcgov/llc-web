@extends('admin.layout.master')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"> EDIT POST</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
  </div>

  <div class="container-fluid">
                <div class="row">
                    <div class="container">
                        <form action="{{ route('safetyseal.update', $est->id) }}" method="POST">
                            @method('put')
                            @csrf
                            <div class="form-group">
                                <label for="title">Name</label>
                                <input type="text" placeholder="Post Title" name="name" value="{{ $est->name }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="title">Contact Number</label>
                                <input type="text" placeholder="Post Title" name="contactNo" value="{{ $est->contactNo }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="title">Email</label>
                                <input type="text" placeholder="Post Title" name="email" value="{{ $est->email }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="title">Serial Number</label>
                                <input type="text" name="serial_number" value="{{ $est->serial_number ? $est->serial_number : "" }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="title">Establishment Name</label>
                                <input type="text" placeholder="Headline" name="estName" value="{{ $est->estName }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="title">Establishment Address</label>
                                <input type="text" placeholder="Video URL" name="estAddress" value="{{ $est->estAddress }}" class="form-control">
                            </div>
                            <div class="row">
                                <div class="col-lg-3 form-group">
                                    <label for="title">Issued Date</label>
                                    <input type="date" placeholder="Video URL" name="issued_on" value="{{ isset($est->issued_on) ? $est->issued_on : "Not yet Scheduled" }}" class="form-control">
                                </div>
                                <div class="col-lg-3 form-group">
                                    <label for="title">Valid Until</label>
                                    <input type="date" placeholder="Video URL" name="validity" value="{{ isset($est->validity) ? $est->validity : "Not yet Valid" }}" class="form-control">
                                </div>
                                <div class="col-lg-3 form-group">
                                    <label for="title">Status</label>
                                    <select name="status" id="user_type" class="form-control">
                                        <option class="form-control" value="Pending">Pending</option>
                                        <option class="form-control" value="Approved">Approve</option>
                                        <option class="form-control" value="Remove">Remove</option>                                    
                                        <option class="form-control" value="Decline">Decline</option>                                    
                                    </select>
                                </div>
                                
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>

                        </form>
                    </div>
                </div>
    </div>
@endsection