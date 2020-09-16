@extends('admin.layout.master')


@section('content')
    <div class="container-fluid">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Application Type</th>
                    <th scope="col">Taxpayer/Registrant</th>
                    <th scope="col">TIN No.</th>
                    <th scope="col">Mode of Payment</th>
                    <th scope="col">Type of Business</th>
                    <th scope="col">Date of Application</th>
                    <th scope="col">Status</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
             
                <tr>
                    <td>New</td>
                    <td>Annually</td>
                    <td>04/04/2004</td>
                    <td>
                        <form action="" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        <a href="#"> <button class="btn btn-primary"><i class="fa fa-pencil-alt" aria-hidden="true"></i> Edit</button></a>
                    </td>
                </tr>
                
            </tbody>
          </table>
    </div>

@endsection