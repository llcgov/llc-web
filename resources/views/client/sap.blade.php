@extends('client.layout.master')

@section('content')
    <div class="container">
      {{-- <div class="row"> --}}
        <div class="row m-4 bg-white">
            <div class="col-md-6 offset-md-3"> 
              <h4>Social Amelioration Program</h4>
                    <div class="card">
                      <div class="card-header" id="headChild">  
                          <ul style="column-count: 3">
                          @foreach ($sap as $item)
                            <li>
                              <a href="" class="text-decoration-none" data-toggle="modal" data-target="#{{ str_replace([' ', '-', '.'], '', $item->title)  }}"><h5 class="text-uppercase"><span class="text-dark"> </span> {{ $item->title }} </h5></a>
                            </li>
                            <div class="modal fade bd-example-modal-xl" id="{{ str_replace([' ', '-', '.'], '', $item->title) }}" tabindex="-1" role="dialog" aria-labelledby="{{ $item->id }}" aria-hidden="true">
                              <div class="modal-dialog modal-xl" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="{{ $item->title }}">{{ $item->title }}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                      <div class="embed-responsive embed-responsive-1by1">
                                          <iframe class="embed-responsive-item"  src="{{ url( 'storage/SAP/' . $item->name) }}" frameborder="0"></iframe>
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
      {{-- </div> --}}
    </div>   

    @push('js')
    <script>
        $(document).ready(function(){
            // Add minus icon for collapse element which is open by default
            $(".collapse.show").each(function(){
              $(this).prev(".card-header").find(".fa").addClass("fa-minus").removeClass("fa-plus");
            });
            
            // Toggle plus minus icon on show hide of collapse element
            $(".collapse").on('show.bs.collapse', function(){
              $(this).prev(".card-header").find(".fa").removeClass("fa-plus").addClass("fa-minus");
            }).on('hide.bs.collapse', function(){
              $(this).prev(".card-header").find(".fa").removeClass("fa-minus").addClass("fa-plus");
            });
        });
    </script>
    @endpush

@endsection