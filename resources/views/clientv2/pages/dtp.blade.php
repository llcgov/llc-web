@extends('clientv2.layout.master')

@section('content')
    <div class="container-fluid pt-5 mt-5">
      <div class="row my-5">
        <div class="col-md-8 offset-md-2">
          <h5 class="text-justify">Pursuant<strong> to Section 2(a) of Republic Act (RA) No. 7160 or the Local Government Code of 1991 (LGC)</strong>, the State shall provide for a more responsive and accountable local government structure instituted through a system of decentralization whereby local government units (LGUs) shall be given more powers, authority, responsibilities, and resources. The process of decentralization shall proceed from the National Government (NG) to the LGUs.</br></br>

            <strong>Section 3(d) of RA No. 7160 </strong> further provides that the vesting of duty, responsibility, and accountability in LGUs shall be accompanied with provision for reasonably adequate resources to discharge their powers and effectively carry out their functions; hence, they shall have the power to create and broaden their own sources of revenue and the right to a just share in national taxes and an equitable share in the proceeds of the utilization and development of the national wealth within their respective areas.</br></br>

            In line with the implementation of the SC Ruling, Executive Order (EO) No. 138, s. 2021 orders the full devolution of functions, services, and facilities by the NG to the LGUs not later than the end of FY 2024. Except for those functions that shall be primarily and ultimately responsible and accountable for the provision of all basic services and facilities fully devoted to them, in accordance with the minimum standards for service delivery to be prescribed by the NG.</br></br>

            To support the transition to full devolution, Section 10 of EO No. 138, s. 2021, instructs all LGUs to formulate and prepare their Devolution Transition Plans (DTPs) to guide the transition in their full assumption of the devolved roles and responsibilities.
        </div>
      </div>
      @php $specials = array(",", ".", " ", "-", "(", ")", "[", "]", "/", "%", "`'") @endphp

      <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                  <h3>Devolution Transition Plan</h3>
                </div>
                <div class="card-body">
                    <ul>
                        @foreach ($devplan as $key => $fdpdocs)
                            <li>
                              @php $specials = array(",", ".", " ", "-", "(", ")", "[", "]", "/", "'") @endphp
                                <a href="" class="text-decoration-none" data-toggle="modal" data-target="#CITCHART{{ str_replace($specials, '', $fdpdocs->title . $key)  }}"><h5 class="text-uppercase">{{ $fdpdocs->title }}</h5></a>
                            </li>                          
                            <div class="modal fade bd-example-modal-xl" id="CITCHART{{ str_replace($specials, '', $fdpdocs->title . $key)}}" tabindex="-1" role="dialog" aria-labelledby="{{ $fdpdocs->id }}" aria-hidden="true">
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