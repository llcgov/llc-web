@extends('clientv2.layout.master')

@section('content')
    <div class="container-fluid pt-5 mt-5">
      <div class="row my-5">
        <div class="col-md-8 offset-md-2">
          <h5 class="text-justify">In compliance with DILG Memorandum Circular No. 2011-08, entitled “Strict Adherence to Section 90 of Republic Act No. 10147, General Appropriations Act, Fiscal Year 2012” and DILG Memorandum Circular 2010-83, entitled “Full Disclosure of Local Budget and Finances, and Bids and Public Offerings“.</h5>
        </div>
      </div>

      {{-- FDP Documents --}}
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <h4>Full Disclosure Policy Documents</h4>
          <div class="bs-accordion">
            <div class="accordion" id="accordionsParent">
            @php $year = $transparency->groupBy('year') @endphp
            @php $specials = array(",", ".", " ", "-", "(", ")", "[", "]", "/", "%" ) @endphp
              @foreach ($year as $key_year => $item)
              <div class="card">
                <div class="card-header" id="headParent">
                    <h2 class="mb-0">
                        <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#FDP{{ strval($key_year) }}"><i class="fa fa-plus"></i>FDP DOCUMENTS {{ $key_year }}</button>                     
                    </h2>
                </div>
                <div id="FDP{{ strval($key_year) }}" class="collapse" aria-labelledby="headParent" data-parent="#accordionsParent">
                    <div class="card-body">
                      <div class="bs-accordion">
                        <div class="accordion" id="accordionsChild">
                          @php $quarter = $item->groupBy('type') @endphp
                          @foreach ($quarter as $key_quarter => $quart)
                          <div class="card">
                            <div class="card-header" id="headChild">
                                <h2 class="mb-0">
                                    <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#FDP{{ str_replace($specials, '', $key_quarter) }}"><i class="fa fa-plus"></i>{{ $key_quarter }}</button>                     
                                </h2>
                            </div>
                            <div id="FDP{{ str_replace(' ', '', $key_quarter) }}" class="collapse" aria-labelledby="headChild" data-parent="#accordionsChild">
                                <div class="card-body">
                                  <ul>
                                    @foreach ($quart as $fdpdocs)
                                      <li>
                                        <a href="" class="text-decoration-none" data-toggle="modal" data-target="#FDP{{ str_replace($specials, '', $fdpdocs->title.$key_year.$fdpdocs->type)}}"><h5 class="text-uppercase">{{ $fdpdocs->title }}</h5></a>
                                      </li>                          
                                        {{-- MODAL --}}
                                        <div class="modal fade bd-example-modal-xl" id="FDP{{ str_replace($specials, '', $fdpdocs->title.$key_year.$fdpdocs->type) }}" tabindex="-1" role="dialog" aria-labelledby="{{ $fdpdocs->id }}" aria-hidden="true">
                                          <div class="modal-dialog modal-xl" role="document">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <h5 class="modal-title" id="{{ $fdpdocs->title }}">{{ $fdpdocs->title }}</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                                </button>
                                              </div>
                                              <div class="modal-body">
                                                  <div class="embed-responsive embed-responsive-16by9">
                                                      <iframe class="embed-responsive-item" src="{{ url( 'storage/PDF/' . $fdpdocs->name) }}" frameborder="0"></iframe>
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
                          @endforeach
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
      
      <div class="row">
        <div class="col-md-8 offset-md-2">
            <h4>Bids and Awards Committee</h4>
            <div class="bs-accordion">
                <div class="accordion" id="accordionsParent">
                    @php $year = $bac->groupBy('year') @endphp
                    @foreach ($year as $key_year => $item)
                        <div class="card">
                            <div class="card-header" id="headParent">
                                <h2 class="mb-0">
                                    <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#BAC{{ strval($key_year) }}"><i class="fa fa-plus"></i>BAC {{ $key_year }}</button>                     
                                </h2>
                            </div>
                            <div id="BAC{{ strval($key_year) }}" class="collapse" aria-labelledby="headParent" data-parent="#accordionsParent">
                                <div class="card-body">
                                    <div class="bs-accordion">
                                        <div class="accordion" id="accordionsChild">
                                            @php $quarter = $item->groupBy('type') @endphp
                                            @foreach ($quarter as $key_quarter => $quart)
                                                <div class="card">
                                                    <div class="card-header" id="headChild">
                                                        <h2 class="mb-0">
                                                            <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#BAC{{ str_replace($specials, '', $key_quarter) }}"><i class="fa fa-plus"></i>{{ $key_quarter }}</button>                     
                                                        </h2>
                                                    </div>
                                                    <div id="BAC{{ str_replace($specials, '', $key_quarter) }}" class="collapse" aria-labelledby="headChild" data-parent="#accordionsChild">
                                                        <div class="card-body">
                                                            <ul>
                                                                @foreach ($quart as $fdpdocs)
                                                                    <li>
                                                                      @php $specials = array(",", ".", " ", "-", "(", ")", "[", "]", "/" ) @endphp
                                                                        <a href="" class="text-decoration-none" data-toggle="modal" data-target="#BAC{{ str_replace($specials, '', $fdpdocs->title)  }}"><h5 class="text-uppercase">{{ $fdpdocs->title }}</h5></a>
                                                                    </li>                          
                                                                    {{-- MODAL --}}
                                                                    <div class="modal fade bd-example-modal-xl" id="BAC{{ str_replace($specials, '', $fdpdocs->title) }}" tabindex="-1" role="dialog" aria-labelledby="{{ $fdpdocs->id }}" aria-hidden="true">
                                                                    <div class="modal-dialog modal-xl" role="document">
                                                                        <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="{{ $fdpdocs->title }}">{{ $fdpdocs->title }}</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <div class="embed-responsive embed-responsive-16by9">
                                                                                <iframe class="embed-responsive-item" src="{{ url( 'storage/PDF/' . $fdpdocs->name) }}" frameborder="0"></iframe>
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
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
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