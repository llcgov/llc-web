@extends('client.layout.master')

@section('content')
    <div class="container-fluid">
      <div class="row bg-white">
        <div class="row m-4 rounded">
            <div class="offset-md-2 col-md-8"> 
              <h5>In compliance with DILG Memorandum Circular No. 2011-08, entitled “Strict Adherence to Section 90 of Republic Act No. 10147, General Appropriations Act, Fiscal Year 2012” and DILG Memorandum Circular 2010-83, entitled “Full Disclosure of Local Budget and Finances, and Bids and Public Offerings“.
              </h5>
              <br>
              <h4>Full Disclosure Policy Documents</h4>
              <ul>
                  @foreach ($transparency as $item)
                    <li>
                      <a href="" class="text-decoration-none" data-toggle="modal" data-target="#{{ str_replace(' ', '', $item->title)  }}"><h5 class="text-uppercase">{{ $item->title }}</h5></a>
                    </li>                          
                      {{-- MODAL --}}
                      <div class="modal fade bd-example-modal-xl" id="{{ str_replace(' ', '', $item->title) }}" tabindex="-1" role="dialog" aria-labelledby="{{ $item->id }}" aria-hidden="true">
                        <div class="modal-dialog modal-xl" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="{{ $item->title }}">{{ $item->title }}</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="{{ url( 'storage/PDF/' . $item->name) }}" frameborder="0"></iframe>
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>
                  @endforeach
                </ul>
                  
            </div>
        </div>
      </div>
    </div>   
    

@endsection