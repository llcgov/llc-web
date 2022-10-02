@extends('clientv2.layout.master')

@section('content')
    <div class="container-fluid pt-5 mt-5">
      <div class="row my-5">
        <div class="col-md-8 offset-md-2">
          <h5 class="text-justify"><strong>Section 2</strong> of the Republic Act (RA) 11032 otherwise known as the Ease of Doing Business and Efficient Government Service Delivery (EODB-EGSD) Act of 2018 states that:</br></br>

            “It is hereby declared that the policy of the State to promote integrity, accountability, proper management of public affairs and public property as well as to establish effective practices, aimed at efficient turnaround of the delivery of government services and the prevention of graft and corruption in the government. Towards this end, the State shall maintain honesty and responsibility among its public officials and employees,  and shall take appropriate measures to promote transparency in each agency with regard to the manner of transacting with the public, which shall encompass a program for the adoption of simplified requirements and procedures that will reduce red tape and expedite business and nonbusiness related transactions in government.”</br></br>

            <strong>Section 6</strong> of the Act stipulates that all government agencies shall set up their respective most current and updated service standards to be known as the <strong>Citizen’s Charter</strong> in the form of information billboards, which shall be posted at the most conspicuous place, in their respective websites and in the form of published materials such as handbook written either in English or Filipino, or in local dialect.</h5>
        </div>
      </div>
      @php $specials = array(",", ".", " ", "-", "(", ")", "[", "]", "/", "%", "`'") @endphp

      <div class="row">
        <div class="col-md-8 offset-md-2">
            <h4>Citizen's Charter</h4>
            <div class="bs-accordion">
                <div class="accordion" id="accordionsParent">
                    @php $year = $citizenchart->groupBy('year') @endphp
                    @foreach ($year as $key_year => $item)
                        <div class="card">
                            <div class="card-header" id="headParent">
                                <h2 class="mb-0">
                                    <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#CITCHART{{ strval($key_year) }}"><i class="fa fa-plus"></i>CITIZEN'S CHARTER by Office</button>                     
                                </h2>
                            </div>
                            <div id="CITCHART{{ strval($key_year) }}" class="collapse" aria-labelledby="headParent" data-parent="#accordionsParent">
                                <div class="card-body">
                                    <div class="bs-accordion">
                                        <div class="accordion" id="accordionsChild">
                                            @php $quarter = $item->groupBy('functionaries') @endphp
                                            @foreach ($quarter as $key_quarter => $quart)
                                                <div class="card">
                                                    <div class="card-header" id="headChild">
                                                        <h2 class="mb-0">
                                                            <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#CITCHART{{ str_replace($specials, '', $key_quarter) }}"><i class="fa fa-plus"></i>{{ $key_quarter }}</button>                     
                                                        </h2>
                                                    </div>
                                                    <div id="CITCHART{{ str_replace($specials, '', $key_quarter) }}" class="collapse" aria-labelledby="headChild" data-parent="#accordionsChild">
                                                        <div class="card-body">
                                                            <ul>
                                                                @foreach ($quart as $fdpdocs)
                                                                    <li>
                                                                      @php $specials = array(",", ".", " ", "-", "(", ")", "[", "]", "/", "'") @endphp
                                                                        <a href="" class="text-decoration-none" data-toggle="modal" data-target="#CITCHART{{ str_replace($specials, '', $fdpdocs->title . $key_quarter)  }}"><h5 class="text-uppercase">{{ $fdpdocs->title }}</h5></a>
                                                                    </li>                          
                                                                    {{-- MODAL --}}
                                                                    <div class="modal fade bd-example-modal-xl" id="CITCHART{{ str_replace($specials, '', $fdpdocs->title . $key_quarter)}}" tabindex="-1" role="dialog" aria-labelledby="{{ $fdpdocs->id }}" aria-hidden="true">
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