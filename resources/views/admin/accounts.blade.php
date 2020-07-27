@extends('admin.layout.master')

@section('content')

    <div class="container-fluid">
        <h1 class="h3 mb-0 text-gray-800">User Accounts</h1>
    </div>
    <div class="container-fluid">
        <div class="float-right">
            <button class="btn btn-primary">
                <a href="{{ route('accounts.create') }}" class="text-light">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-plus-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm7.5-3a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                        <path fill-rule="evenodd" d="M13 7.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0v-2z"/>
                    </svg> 
                    Create User Account</a>
            </button>
           
        </div>
        <div class="mt-4">
            <div id="gallery" class="tab-pane active">
                <table class="table">
                    <thead>
                        <tr>
                            <th>First Name</th>
                            <th>Middle Name</th>
                            <th>Last Name</th>
                            <th>Office</th>
                            <th>User Type</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $item)
                        <tr>
                            <td> {{$item->first_name}} </td>
                            <td> {{$item->middle_name}} </td>
                            <td> {{$item->last_name}} </td>
                            <td> {{$item->office}} </td>
                            <td> {{$item->user_type}} </td>
                            <td>
                                <a href="#"> 
                                    <button class="btn btn-primary"><i class="fa fa-pencil-alt" aria-hidden="true"></i> Edit</button>
                                </a>
                                <a href="{{ route('images.delete', $item->id) }}">
                                    <button class="btn btn-danger">Delete</button>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
@endsection
