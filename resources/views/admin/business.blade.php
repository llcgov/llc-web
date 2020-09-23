@extends('admin.layout.master')


@section('content')
    <div class="container-fluid text-center">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Application Type</th>
                    <th scope="col">Taxpayer/Registrant</th>
                    <th scope="col">TIN No.</th>
                    <th scope="col">Mode of Payment</th>
                    <th scope="col">Type of Business</th>
                    <th scope="col">Tax Year</th>
                    <th scope="col">City/Municipality</th>
                    <th scope="col">Status</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    {{-- {{ dd($business)}} --}}
                    
                    @foreach ($business as $item)
                        <td>{{ $item->app_section->mode_of_payment }}</td>
                        <td>Peter Pan</td>
                        <td>xxx-xxx-0xxx-x0</td>
                        <td>{{ $item->app_section->mode_of_payment }}</td>
                        <td>Single</td>
                        <td>2020</td>
                        <td>Lapu-Lapu City</td>
                        <td><span class="badge badge-danger">Danger</span></td>
                        <td><span><h4><i class="fas fa-eye"></i></h4></span></td>
                        {{-- {{dd($item->app_section)}}     --}}
                    @endforeach
                        {{-- {{dd(}} --}}
                </tr>
                <tr>
                    <td>New</td>
                    <td>Peter Pan</td>
                    <td>xxx-xxx-0xxx-x0</td>
                    <td>Annually</td>
                    <td>Single</td>
                    <td>2020</td>
                    <td>Lapu-Lapu City</td>
                    <td><span class="badge badge-danger">Danger</span></td>
                    <td><span><h4><i class="fas fa-eye"></i></h4></span></td>
                </tr>
                <tr>
                    <td>Renew</td>
                    <td>Edward Kaufman</td>
                    <td>xxx-xxx-0xxx-x0</td>
                    <td>Quarterly</td>
                    <td>Single</td>
                    <td>2020</td>
                    <td>Lapu-Lapu City</td>
                    <td><span class="badge badge-primary">Primary</span></td>
                    <td><button class="btn" data-toggle="modal" data-target=".bd-example-modal-lg"><span><h4><i class="fas fa-eye"></i></h4></span></button></td>
                </tr>
                <tr>
                    <td>Renew</td>
                    <td>Michael Learns</td>
                    <td>xxx-xxx-0xxx-x0</td>
                    <td>Semi-Annually</td>
                    <td>Partnership</td>
                    <td>2020</td>
                    <td>Lapu-Lapu City</td>
                    <td><span class="badge badge-primary">Primary</span></td>
                    <td><button class="btn" data-toggle="modal" data-target=".business-permit-modal-lg"><span><h4><i class="fas fa-eye"></i></h4></span></button></td>
                </tr>
                
            </tbody>
          </table>

{{-- Modal --}}
        <div class="modal fade business-permit-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title font-weight-bold" id="exampleModalLabel">Peter Pan <small>(Taxpayer/Registrant)</small></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <h3>Application Section</h3><br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <h5 class="font-weight-bold">New</h5>
                                <p>Application Type</p>
                            </div>
                            <div class="col-md-3">
                                <h5 class="font-weight-bold">2020</h5>
                                <p>Tax Year</p>
                            </div>
                            <div class="col-md-3">
                                <h5 class="font-weight-bold">Lapu-Lapu City</h5>
                                <p>City/Municipality</p>
                            </div>
                            <div class="col-md-3">
                                <h5 class="font-weight-bold">Annually</h5>
                                <p>Mode of Payment</p>
                            </div>
                           
                        </div><br>

                        <div class="row">
                            <div class="col-md-3">
                                <h5 class="font-weight-bold">Example Name</h5>
                                <p>Business Name</p>
                            </div>
                            <div class="col-md-3">
                                <h5 class="font-weight-bold">Trade Sample Name</h5>
                                <p>Trade Name/Franchise</p>
                            </div>
                            <div class="col-md-3">
                                <h5 class="font-weight-bold">Single</h5>
                                <p>Type of Business</p>
                            </div>
                            <div class="col-md-3">
                                <h5 class="font-weight-bold">Single</h5>
                                <p>Ammendment From</p>
                            </div>
                        </div><br>

                        <div class="row">
                            <div class="col-md-3">
                                <h5 class="font-weight-bold">Oct. 20, 2020</h5>
                                <p>Date of Application</p>
                            </div>
                            <div class="col-md-3">
                                <h5 class="font-weight-bold">xxx-xxx-000</h5>
                                <p>DTI/SEC/CDA Registration No.</p>
                            </div>
                            <div class="col-md-3">
                                <h5 class="font-weight-bold">xxx-xxx-0xxx-x0</h5>
                                <p>TIN No.</p>
                            </div>
                            <div class="col-md-3">
                                <h5 class="font-weight-bold">xxx-xxx-000</h5>
                                <p>DTI/SEC/CDA Registration No.</p>
                            </div>
                        </div><br>

                        <div class="row">
                            <div class="col-md-12">
                                <h3>Other Information</h3>
                            </div>
                        </div><br>

                        <div class="row">
                            <div class="col-md-12">
                                <h5 class="font-weight-bold">506-H, Billder Homes, Lapu-Lapu City, Cebu, Philippines</h5>
                                <p>Business Address</p>
                            </div>
                        </div><br>

                        <div class="row">
                            <div class="col-md-3">
                                <h5 class="font-weight-bold">+63 9562015875</h5>
                                <p>Business Mobile No.</p>
                            </div>
                            <div class="col-md-3">
                                <h5 class="font-weight-bold">(032) 656 9965</h5>
                                <p>Business Telephone No.</p>
                            </div>
                            <div class="col-md-3">
                                <h5 class="font-weight-bold">info@kensingtongardens.com</h5>
                                <p>Business Email Address</p>
                            </div>
                            <div class="col-md-3">
                                <h5 class="font-weight-bold">6015</h5>
                                <p>Business Postal Code</p>
                            </div>
                        </div><br>

                        <div class="row">
                            <div class="col-md-12">
                                <h5 class="font-weight-bold">506-H, Billder Homes, Lapu-Lapu City, Cebu, Philippines</h5>
                                <p>Owners Address</p>
                            </div>
      
                        </div><br>
                        <div class="row">
                            <div class="col-md-3">
                                <h5 class="font-weight-bold">+63 9562015875</h5>
                                <p>Owners Mobile No.</p>
                            </div>
                            <div class="col-md-3">
                                <h5 class="font-weight-bold">(032) 656 9965</h5>
                                <p>Owners Telephone No.</p>
                            </div>
                            <div class="col-md-3">
                                <h5 class="font-weight-bold">peterpan@kensingtongardens.com</h5>
                                <p>Owners Email Address</p>
                            </div>
                            <div class="col-md-3">
                                <h5 class="font-weight-bold">6015</h5>
                                <p>Owners Postal Code</p>
                            </div><br>
                        </div><br>
                        
                        <div class="row">
                            <div class="col-md-12">
                                <h3>Business Activity</h3>
                            </div>
                        </div><br>

                        <div class="row">
                            <div class="col-md-12">
                                <table class="table">
                                    <thead>
                                      <tr>
                                        <th scope="col">Line of Business</th>
                                        <th scope="col">No of Units</th>
                                        <th scope="col">Capitalization</th>
                                        <th scope="col">Essential</th>
                                        <th scope="col">Non-Essential</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <th scope="row">Sample</th>
                                        <td>#</td>
                                        <td>Sample Cap</td>
                                        <td>Sample</td>
                                        <td>Sample</td>
                                      </tr>
                                      <tr>
                                        <th scope="row">Sample</th>
                                        <td>#</td>
                                        <td>Sample Cap</td>
                                        <td>Sample</td>
                                        <td>Sample</td>
                                      </tr>
                                      <tr>
                                        <th scope="row">Sample</th>
                                        <td>#</td>
                                        <td>Sample Cap</td>
                                        <td>Sample</td>
                                        <td>Sample</td>

                                      </tr>
                                    </tbody>
                                  </table>
                            </div>
                            
                        </div><br>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Send message</button>
                    </div>
                </div>
            </div>
        </div>
{{-- Modal --}}
    </div>

@endsection