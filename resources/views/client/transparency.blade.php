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
              {{-- <ul>
                  @foreach ($transparency as $item)
                    <li>
                      <a href="" class="text-decoration-none" data-toggle="modal" data-target="#{{ str_replace(' ', '', $item->title)  }}"><h5 class="text-uppercase">{{ $item->title }}</h5></a>
                    </li>                          
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
                </ul> --}}

                <div class="bs-accordion">
                  <div class="accordion" id="accordions">
                      <div class="card">
                          <div class="card-header" id="headingOne">
                              <h2 class="mb-0">
                                  <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"><i class="fa fa-plus"></i>FDP DOCUMENTS 2019</button>									
                              </h2>
                          </div>
                          <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordions">
                              <div class="card-body">
                                {{-- QUARTER START --}}
                                
                              <div class="accordion" id="accordionquarter">
                                {{-- FIRST QUARTER --}}
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h2 class="mb-0">
                                            <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#quarterOneChild"><i class="fa fa-plus"></i>1ST QUARTER</button>									
                                        </h2>
                                      </div>
                                      <div id="quarterOneChild" class="collapse" aria-labelledby="headingOne" data-parent="#accordionquarter">
                                          <div class="card-body">
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
                                  {{-- SECOND QUARTER --}}
                                  <div class="card">
                                      <div class="card-header" id="quarterTwo">
                                          <h2 class="mb-0">
                                              <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#quarterTwoChild"><i class="fa fa-plus"></i>2ND QUARTER</button>                     
                                          </h2>
                                      </div>
                                      <div id="quarterTwoChild" class="collapse" aria-labelledby="quarterTwo" data-parent="#accordionquarter">
                                          <div class="card-body">
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
                                  {{-- THIRD QUARTER --}}
                                  <div class="card">
                                    <div class="card-header" id="quarterThree">
                                        <h2 class="mb-0">
                                            <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#quarterThreeChild"><i class="fa fa-plus"></i>3RD QUARTER</button>                     
                                        </h2>
                                    </div>
                                    <div id="quarterThreeChild" class="collapse" aria-labelledby="quarterThree" data-parent="#accordionquarter">
                                        <div class="card-body">
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
                                  {{-- FOURTH QUARTER --}}
                                  <div class="card">
                                    <div class="card-header" id="quarterFour">
                                        <h2 class="mb-0">
                                            <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#quarterFourChild"><i class="fa fa-plus"></i>4TH QUARTER</button>                     
                                        </h2>
                                    </div>
                                    <div id="quarterFourChild" class="collapse" aria-labelledby="quarterFour" data-parent="#accordionquarter">
                                        <div class="card-body">
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
                                {{-- ANNUAL --}}
                                <div class="card">
                                  <div class="card-header" id="annual">
                                      <h2 class="mb-0">
                                          <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#annualChild"><i class="fa fa-plus"></i>ANNUAL</button>                     
                                      </h2>
                                  </div>
                                  <div id="annualChild" class="collapse" aria-labelledby="annual" data-parent="#accordionquarter">
                                      <div class="card-body">
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
                                {{-- QUARTER END --}}
                              </div>
                          </div>
                      </div>
                      {{-- 2019 END --}}
                      <div class="card">
                          <div class="card-header" id="headingThree">
                              <h2 class="mb-0">
                                  <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree"><i class="fa fa-plus"></i>FDP DOCUMENTS 2020</button>                     
                              </h2>
                          </div>
                          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordions">
                              <div class="card-body">
                                  <p>CSS stands for Cascading Style Sheet. CSS allows you to specify various style properties for a given HTML element such as colors, backgrounds, fonts etc. <a href="https://www.tutorialrepublic.com/css-tutorial/" target="_blank">Learn more.</a></p>
                              </div>
                          </div>
                      </div>
                  </div>
                </div>

            </div>
        </div>
      </div>
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