@extends('admin.layout.master')

@section('content')

    <div class="container-fluid">
        <h1 class="h3 mb-0 text-gray-800">User Accounts</h1>
    </div>
    <div class="container-fluid">
        <div id="images" class="tab-pane">
            <div class="row">
                <div class="container">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{route('accounts.store')}}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-4 form-group">
                                <label for="title">First Name</label>
                                <input type="text" placeholder="First Name" name="first_name" class="form-control">
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="title">Middle Name</label>
                                <input type="text" placeholder="Middle Name" name="middle_name" class="form-control">
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="title">Last Name</label>
                                <input type="text" placeholder="Last Name" name="last_name" class="form-control">
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="col-md-8 form-group">
                                <label for="title">Office</label>
                                <input type="text" placeholder="Office/Department" name="office" class="form-control">
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="title">User Type</label>
                                {{-- <input type="text" placeholder="User Type" name="user_type" class="form-control"> --}}
                                <select name="user_type" id="user_type" class="form-control">
                                    <option class="form-control" value="super_admin">Super Admin</option>
                                    <option class="form-control" value="admin">Admin</option>
                                    <option class="form-control" value="encoder">Encoder</option>                                    
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="title">Email Address</label>
                            <input type="email" placeholder="First Name" name="email" class="form-control">
                        </div>
                        <div class="row">
                            
                            <div class="col-md-6 form-group">
                                <label for="title">Password</label>
                                <input type="password" placeholder="Password" name="password" class="form-control">
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="title">Retype Password</label>
                                <input type="password" placeholder="Retype Password" name="retype_password" class="form-control">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
