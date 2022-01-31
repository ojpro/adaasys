@extends("admin.admin_layout.adminlayout")

@section("admin_content")
    <div id="content" class="main-content">
        <div class="layout-px-spacing">
            <div class="row layout-top-spacing">

                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header mb-4">
                            <div class="row">
                                <div class="col-6">
                                    <h4>All Stores</h4>
                                </div>
                                <div class="col-6 text-right">
                                    <a href="{{route('add_subscription')}}" class="btn btn-primary mt-2" data-toggle="tooltip" data-original-title="Add Subscription">
                                        <span class="">Add Subscription</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            @foreach($subscription as $data)
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
                                <div class="widget widget-account-invoice-two">
                                    <div class="widget-content">
                                        <div class="account-box">
                                            <div class="info">
                                                <h5 class="">
                                                    Plan Name: <b style="color: blue">{{$data->name}}</b>
                                                </h5>
                                                <b class="inv-balance">@include('layouts.render.currency',["amount"=>$data->price])</b>
                                            </div>
                                            <div class="acc-action text-right">
                                                <div class="">
                                                    <a href={{route('edit_subscription',$data->id)}}><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg></a>
                                                </div>
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
    </div>

@endsection
