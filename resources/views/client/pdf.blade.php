@extends('client.layout.master')

@section('content')
    <div class="container-fluid">
        <div class="row m-5  bg-white rounded">
            <div class="col-md-12"> 
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#pdfModal">
                    Launch PDF View
                </button>
                  <div class="modal fade bd-example-modal-xl" id="pdfModal" tabindex="-1" role="dialog" aria-labelledby="pdfModal" aria-hidden="true">
                    <div class="modal-dialog modal-xl" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="pdfModal">Modal title</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="{{ asset('files/pdf.pdf') }}" frameborder="0"></iframe>
                            </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>    
@endsection