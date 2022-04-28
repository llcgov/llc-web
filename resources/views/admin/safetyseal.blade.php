@extends('admin.layout.master')

@section('content')

    <div class="container-fluid">
        <h1 class="h3 mb-0 text-gray-800">Safety Seal Control Panel</h1>
    </div>
    <div class="container-fluid">

        <div class="mt-4">
            <div id="gallery" class="tab-pane active">
                <table class="table">
                    <thead>
                        <tr>
                            {{-- <th>Generated QRCode</th> --}}
                            <th>Name</th>
                            <th>Email Address</th>
                            <th>Contact No</th>
                            <th>Establishment Names</th>
                            <th>Establishment Address</th>
                            <th>Serial Number</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($est as $item)
                        <tr>

                            {{-- <td> {!! str_pad($item->id, 6, "0", STR_PAD_LEFT) !!} </td> --}}
                            {{-- <td> {!! QrCode::generate("https://llcgovsafetyseal.000webhostapp.com/index.php?serialno=" . $item->serial_number); !!} </td> --}}
                            <td> {{$item->name}} </td>
                            <td> {{$item->email}} </td>
                            <td> {{$item->contactNo}} </td>
                            <td> <strong>{{$item->estName}}</strong> </td>
                            <td> {{$item->estAddress}} </td>
                            <td> {{$item->serial_number}} </td>
                            <td>
                                <div class="row">
                                    @if ($item->user_type!="super_admin")
                                        <div class="col-md-4 m-0 p-0">
                                            <a href="{{route('safetyseal.show', $item)}}"> 
                                                <button class="btn btn-primary"><i class="fa fa-print" aria-hidden="true"></i></button>
                                            </a>
                                        </div>
                                        <div class="col-md-4 m-0 p-0">
                                            <a href="{{route('safetyseal.edit', $item)}}"> 
                                                <button class="btn btn-primary"><i class="fa fa-pencil-alt" aria-hidden="true"></i></button>
                                            </a>
                                        </div>
                                        <div class="col-md-4 m-0 p-0">
                                            <form  action="{{ route('safetyseal.destroy', $item->id) }}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <button class="btn btn-danger" type="submit">
                                                    <i class="fa fa-trash" aria-hidden="true"></i></button>
                                            </form>
                                        </div>                                        
                                    @endif
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                  </table>
                  {{ $est->links() }}
            </div>
        </div>
    </div>
@endsection
