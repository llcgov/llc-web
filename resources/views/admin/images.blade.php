@extends('admin.layout.master')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
  </div>

  <div class="container-fluid">

        <ul class="nav nav-tabs">
        <li class="nav-item nav-link active"><a data-toggle="tab" href="#gallery">Gallery</a></li>
        <li class="nav-item nav-link" ><a data-toggle="tab" href="#images">Images</a></li>
        <li class="nav-item nav-link"><a data-toggle="tab" href="#menu2">Menu 2</a></li>
        </ul>
    
        <div class="tab-content mt-4">
            <div id="gallery" class="tab-pane active">
                <h1 class="text-dark">Hello World</h1>
            </div>

            <div id="images" class="tab-pane">
                <div class="row">
                    <div class="container">
                        <form action="">
                            <div class="form-group">
                                <input type="file" name="" id="" class="form-control">
                            </div>
                            <div class="form-group">
                                <select name="" id="" class="form-control">
                                    <option value="">Banner</option>
                                    <option value="">Background</option>
                                    <option value="">Slider</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>

            <div id="menu2" class="tab-pane">
                <h3>Menu 2</h3>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
            </div>
        </div>
    </div>
@endsection