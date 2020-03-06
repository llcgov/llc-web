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